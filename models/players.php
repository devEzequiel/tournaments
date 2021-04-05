<?php
class Players extends Model
{	
	private $id;
    private $team_id;
	private $name;
	private $goals;
	private $assists;
    private $average;
	private $matches;
    private $team_name;

    public function setNewPlayer()
    {   
        global $db;
        $pdo = "SELECT * FROM players WHERE (team_id = :t AND name = :n)";
        $pdo = $this->db->prepare($pdo);
        $pdo->bindValue(':t', $this->team_id);
        $pdo->bindValue(':n', $this->name);
        $pdo->execute();
        $data = $pdo->fetch();

        if ($data == false) {

            $stmt = "INSERT INTO players (name, goals, team_id, matches, average, assists) VALUES (:n, :g, :t, :m, :av, :a)";
            $stmt = $this->db->prepare($stmt);
            $stmt->bindValue(':n', $this->name);
            $stmt->bindValue(':g', $this->goals);
            $stmt->bindValue(':t', $this->team_id);
            $stmt->bindValue(':m', $this->matches);
            $stmt->bindValue(':av', $this->average);
            $stmt->bindValue(':a', $this->assists);
            $stmt->execute();

            if ($stmt->rowCount() > 0) {
                return 0;
            }
        } else {
            return 1;
        }
    }    

    public function getStats($team_id)
    {   
        global $db;
        $stmt = " SELECT * FROM players WHERE team_id = :t";
        $stmt = $this->db->prepare($stmt);
        $stmt->bindValue(':t', $team_id);
        $stmt->execute();

        $data = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $data;
    }


    
    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getTeamId()
    {
        return $this->team_id;
    }

    /**
     * @param mixed $team_id
     *
     * @return self
     */
    public function setTeamId()
    {
        global $db;
        $stmt = "SELECT * FROM teams WHERE team_name = :t";
        $stmt = $this->db->prepare($stmt);
        $stmt->bindValue(':t', $this->team_name);
        $stmt->execute();

        $data = $stmt->fetch();

        $this->team_id = $data['team_id'];
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     *
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getGoals()
    {
        return $this->goals;
    }

    /**
     * @param mixed $goals
     *
     * @return self
     */
    public function setGoals($goals)
    {
        $this->goals = $goals;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getAssists()
    {
        return $this->assists;
    }

    /**
     * @param mixed $assists
     *
     * @return self
     */
    public function setAssists($assists)
    {
        $this->assists = $assists;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getAverage()
    {
        return $this->average;
    }

    /**
     * @param mixed $average
     *
     * @return self
     */
    public function setAverage($average)
    {
        $this->average = $average;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getMatches()
    {
        return $this->matches;
    }

    /**
     * @param mixed $matches
     *
     * @return self
     */
    public function setMatches($matches)
    {
        $this->matches = $matches;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getTeamName()
    {
        return $this->team_name;
    }

    /**
     * @param mixed $team_name
     *
     * @return self
     */
    public function setTeamName($team_name)
    {
        $this->team_name = $team_name;

        return $this;
    }
}