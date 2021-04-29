<?php
/**
 * 
 */
class Teams extends Model
{
    /**
     * @param $id
     * @return array
     */
    public function getTeamName($id): array
    {
        $stmt = "SELECT team_name FROM teams WHERE team_id = :id";
        $stmt = $this->db->prepare($stmt);
        $stmt->bindValue(':id', $id);
        $stmt->execute();

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    /**
     * @return array
     */
    public function getTeams(): array
    {
       $stmt = "SELECT * FROM teams ORDER BY team_name ASC";
       $stmt = $this->db->query($stmt);

        return $stmt->fetchAll(PDO::FETCH_ASSOC);

    }

    /**
     * @param mixed $team_name
     *
     * @return int
     */
    public function setTeamName($team_name): int
    {	
        try {
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

        if (isset($data)) {
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
        }

        return 2;
    }
}
