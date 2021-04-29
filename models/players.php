<?php

class Players extends Model
{
    private int $team_id;
    private string $name;
    private int $goals;
    private int $assists;
    private float $score;
    private int $matches;
    private string $team_name;

    public function setNewPlayer(): int
    {
        $pdo = "SELECT * FROM players WHERE (team_id = :t AND name = :n)";
        $pdo = $this->db->prepare($pdo);
        $pdo->bindValue(':t', $this->team_id);
        $pdo->bindValue(':n', $this->name);
        $pdo->execute();
        $data = $pdo->fetch();

        if ($data == false) {

            $stmt = "INSERT INTO players (name, goals, team_id, matches, score, assists) VALUES (:n, :g, :t, :m, :av, :a)";
            $stmt = $this->db->prepare($stmt);
            $stmt->bindValue(':n', $this->name);
            $stmt->bindValue(':g', $this->goals);
            $stmt->bindValue(':t', $this->team_id);
            $stmt->bindValue(':m', $this->matches);
            $stmt->bindValue(':av', $this->score);
            $stmt->bindValue(':a', $this->assists);
            $stmt->execute();

            if ($stmt->rowCount() > 0) {
                return 0;
            } else {
                return 2;
            }
        } else {
            return 1;
        }
    }

    public function getStats($team_id): array
    {
        $stmt = "SELECT * FROM players WHERE team_id = :t ORDER BY (score/matches) DESC";
        $stmt = $this->db->prepare($stmt);
        $stmt->bindValue(':t', $team_id);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getPlayersName(): array
    {
        $stmt = " SELECT name FROM players WHERE team_id = :t";
        $stmt = $this->db->prepare($stmt);
        $stmt->bindValue(':t', $this->team_id);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }


    public function getPlayersByGoals(): array
    {
        $stmt = "SELECT team_id, name, goals, assists, matches, ROUND(score/matches, 2) as average FROM players WHERE matches > '0' ORDER BY goals DESC";
        $stmt = $this->db->query($stmt);

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getPlayersByAssists(): array
    {
        $stmt = "SELECT team_id, name, goals, assists, matches, ROUND(score/matches, 2) as average FROM players WHERE matches > '0' ORDER BY assists DESC";
        $stmt = $this->db->query($stmt);

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getPlayersByScore(): array
    {
        $stmt = "SELECT team_id, name, goals, assists, matches, ROUND(score/matches, 2) as average FROM players WHERE matches > '0' ORDER BY average DESC";
        $stmt = $this->db->query($stmt);

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getPlayersByMatches(): array
    {
        $stmt = "SELECT team_id, name, goals, assists, matches, ROUND(score/matches, 2) as average FROM players WHERE matches > '0' ORDER BY matches DESC";
        $stmt = $this->db->query($stmt);

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    /**
     * @return bool
     */
    public function setTeamId(): bool
    {
        $stmt = "SELECT * FROM teams WHERE team_name = :t";
        $stmt = $this->db->prepare($stmt);
        $stmt->bindValue(':t', $this->team_name);
        $stmt->execute();

        $data = $stmt->fetch();

        $this->team_id = $data['team_id'];

        return true;
    }

    /**
     * @param  mixed  $name
     *
     * @return self
     */
    public function setName($name): Players
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @param  mixed  $goals
     *
     * @return self
     */
    public function setGoals($goals): Players
    {
        if (empty($goals)) {
            $goals = 0;
        }

        $this->goals = $goals;

        return $this;
    }

    /**
     * @param  mixed  $assists
     *
     * @return self
     */
    public function setAssists($assists): Players
    {
        if (empty($assists)) {
            $assists = 0;
        }
        $this->assists = $assists;

        return $this;
    }

    /**
     * @param  mixed  $score
     *
     * @return self
     */
    public function setScore($score): Players
    {
        if ($score > 10) {
            $this->score = $score / 10;
        } else {
            if (($score <= 10) && !empty($score)) {
                $this->score = $score;
            } else {
                if (empty($score)) {
                    $this->score = 6;
                }
            }
        }
        return $this;
    }


    public function setMatch(): int
    {
        $pdo = "SELECT * FROM players WHERE name = :n";
        $pdo = $this->db->prepare($pdo);
        $pdo->bindValue(':n', $this->name);
        $pdo->execute();
        $data = $pdo->fetch(PDO::FETCH_ASSOC);
        $match = $data['matches'];
        $matches = $match + 1;
        $goals = $data['goals'] + $this->goals;
        $assists = $data['assists'] + $this->assists;
        $avg = $data['score'] + $this->score;
        if ($data) {
            $stmt = "UPDATE players SET goals = :g, assists = :a, score = '$avg', matches = '$matches' WHERE name = :n";
            $stmt = $this->db->prepare($stmt);
            $stmt->bindValue(':g', $goals);
            $stmt->bindValue(':a', $assists);
            $stmt->bindValue(':n', $this->name);
            $stmt->execute();

            if ($stmt->rowCount()) {
                return 1;
            } else {
                return 2;
            }
        } else {
            return 2;
        }
    }

    /**
     * @param  mixed  $team_name
     *
     * @return self
     */
    public function setTeamName($team_name): Players
    {
        $this->team_name = $team_name;

        $this->setTeamId();

        return $this;
    }

    /**
     * @param  mixed  $matches
     *
     * @return self
     */
    public function setMatches($matches): Players
    {
        $this->matches = $matches;

        return $this;
    }
}