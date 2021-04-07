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
    public function getTeamName($id)
    {
        $stmt = "SELECT team_name FROM teams WHERE team_id = :id";
        $stmt = $this->db->prepare($stmt);
        $stmt->bindValue(':id', $id);
        $stmt->execute();

        $data = $stmt->fetch(PDO::FETCH_ASSOC);

        return $data;
    }

    public function getTeams()
    {
       global $db;
       $stmt = "SELECT * FROM teams ORDER BY team_name ASC";
       $stmt = $this->db->query($stmt);

       $data = $stmt->fetchAll(PDO::FETCH_ASSOC);

       return $data;

    }

    /**
     * @param mixed $team_name
     *
     * @return self
     */
    public function setTeamName($team_name)
    {	
        try {	

        	global $db;
        	$stmt = "SELECT * FROM teams WHERE team_name = :n";
			$stmt = $this->db->prepare($stmt);
	        $stmt->bindValue(':n', $team_name);        
	       	$stmt->execute();

	       	$data = $stmt->fetch();


	    } catch (PDOException $e){

	    	echo "ERROR: ". $e->getMessage();

	    } catch (Exception $exception){

	    	var_dump($exception);
	    }


        if ($data == false) {
        	$stmt = "INSERT INTO teams SET team_name = :n";
        	$stmt = $this->db->prepare($stmt);
	        $stmt->bindValue(':n', $team_name);
	        $stmt->execute();

	        if ($stmt->rowCount() > 0){
	        	return 0;
	        } else {
	        	return 1;
	        }
        }

        return 2;
    }
}
