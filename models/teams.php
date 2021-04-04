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
        $stmt = "SELECT * FROM teams WHERE team_name = :n";
        $stmt = $this->pdo->prepare($stmt);
        $stmt->bindValue(':n', $_GET['name']);
        $stmt->execute();

        if ($stmt->rowCount() != 0) {
        	$stmt = "INSERT INTO teams (team_name) VALUES (:n)";
        	$stmt = $this->pdo->prepare($stmt);
	        $stmt->bindValue(':n', $_GET['name']);
	        $stmt->execute();

	        if ($stmt) {
	        	header ('Content-type: application/json');
	        	echo json_encode(array(0 => 'ok'));
	        }

        }
    }
}

if (isset($_GET['new']) && !empty($_GET['new'])) {
	$team = new Teams();
	$team->setTeamName();
}