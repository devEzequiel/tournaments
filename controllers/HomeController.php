<?php

class homeController extends Controller
{

	public function index()
	{
		$players = new Players();
		$teams = new Teams;
		$data = $players->getPlayersByGoals();
		$this->loadTemplate('home', $data);
	}

}