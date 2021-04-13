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

	public function stats(){
		$players = new Players();
		$data = $players->getPlayersByGoals();

		header ('Content-type: application/json');
		echo json_encode($data);
	}

	public function byAssists(){
		$players = new Players();
		$data = $players->getPlayersByAssists();

		header ('Content-type: application/json');
		echo json_encode($data);
	}

	public function byScore(){
		$players = new Players();
		$data = $players->getPlayersByScore();

		header ('Content-type: application/json');
		echo json_encode($data);
	}

	public function byMatches(){
		$players = new Players();
		$data = $players->getPlayersByMatches();

		header ('Content-type: application/json');
		echo json_encode($data);
	}
}