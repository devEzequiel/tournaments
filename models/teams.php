<?php

/**
 * Team class
 */
class Teams extends Model
{	
	private $id;
	private $name;
	private $currentPlayers;
	private $allPlayers;
	private $numberMatches;
	private $wins;
	private $defeats;
	private $draws;
	private $goalScored;
	private $goalsConceded;

	
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
    public function getCurrentPlayers()
    {
        return $this->currentPlayers;
    }

    /**
     * @param mixed $currentPlayers
     *
     * @return self
     */
    public function setCurrentPlayers($currentPlayers)
    {
        $this->currentPlayers = $currentPlayers;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getAllPlayers()
    {
        return $this->allPlayers;
    }

    /**
     * @param mixed $allPlayers
     *
     * @return self
     */
    public function setAllPlayers($allPlayers)
    {
        $this->allPlayers = $allPlayers;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getNumberMatches()
    {
        return $this->numberMatches;
    }

    /**
     * @param mixed $numberMatches
     *
     * @return self
     */
    public function setNumberMatches($numberMatches)
    {
        $this->numberMatches = $numberMatches;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getWins()
    {
        return $this->wins;
    }

    /**
     * @param mixed $wins
     *
     * @return self
     */
    public function setWins($wins)
    {
        $this->wins = $wins;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getDefeats()
    {
        return $this->defeats;
    }

    /**
     * @param mixed $defeats
     *
     * @return self
     */
    public function setDefeats($defeats)
    {
        $this->defeats = $defeats;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getDraws()
    {
        return $this->draws;
    }

    /**
     * @param mixed $draws
     *
     * @return self
     */
    public function setDraws($draws)
    {
        $this->draws = $draws;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getGoalScored()
    {
        return $this->goalScored;
    }

    /**
     * @param mixed $goalScored
     *
     * @return self
     */
    public function setGoalScored($goalScored)
    {
        $this->goalScored = $goalScored;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getGoalsConceded()
    {
        return $this->goalsConceded;
    }

    /**
     * @param mixed $goalsConceded
     *
     * @return self
     */
    public function setGoalsConceded($goalsConceded)
    {
        $this->goalsConceded = $goalsConceded;

        return $this;
    }
}