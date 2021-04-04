<?php
/**
 * 
 */
class Teams extends Model
{
	private $team_id;
	private $team_name;

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
    public function setTeamId($team_id)
    {
        $this->team_id = $team_id;

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
    	global $pdo;
        $stmt = "SELECT * FROM teams WHERE team_name = :n";
        $stmt = $this->pdo->prepare($stmt);
        $stmt->bindValue(':n', $team_name);
        $stmt->execute();

        if ($stmt->rowCount() != 0) {
        	$stmt = "INSERT INTO teams SET team_name = ':n'";
        	$stmt = $this->pdo->prepare($stmt);
	        $stmt->bindValue(':n', $team_name);
	        $stmt->execute();

	        return $stmt;

        }
    }
}
