<?php

/**
 * class match controller
 */
class matchController extends Controller
{	
	public function index()
	{	
		$teams = new Teams;

		$data = [];
		$data = $teams->getTeams();
		$this->loadTemplate('match', $data);
	}

	public function showtable()
	{	
		$players = new Players();
		$players->setTeamName($_GET['team']);
		$data = $players->getPlayersName();

		header ('Content-type: application/json');			
		echo json_encode($data);

	}
}

