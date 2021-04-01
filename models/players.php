<?php
/**
 * player class
 */
class Players extends Model
{	
	private $id;
	private $name;
	private $goals;
	private $assists;
	private $currentTeam;
	private $pastTeams;
	private $average;
	private $matches;

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
    public function getCurrentTeam()
    {
        return $this->currentTeam;
    }

    /**
     * @param mixed $currentTeam
     *
     * @return self
     */
    public function setCurrentTeam($currentTeam)
    {
        $this->currentTeam = $currentTeam;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getPastTeams()
    {
        return $this->pastTeams;
    }

    /**
     * @param mixed $pastTeams
     *
     * @return self
     */
    public function setPastTeams($pastTeams)
    {
        $this->pastTeams = $pastTeams;

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