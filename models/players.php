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
     * @param mixed $id
     *
     * @return self
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
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
    public function setTeamId($team_id)
    {
        $this->team_id = $team_id;

        return $this;
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
}