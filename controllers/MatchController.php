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

	public function addstats()
	{
		$p = new Players;

		$name = [];
		foreach ($_POST as $key => $value) {
			$name[] = substr($key, 4);
		}
		
		$player = [];
		for ($x=0 ; $x < count($name) ; $x += 3 ) { 
			$player[] = $name[$x];
		}
		$y = 0;
		for ($x=0; $x < count($player); $x++) { 

			$p->setName($player[$x]);
			$p->setGoals($_POST['goal'.$player[$x]]);
			$p->setAssists($_POST['assi'.$player[$x]]);
			$p->setAverage($_POST['avrg'.$player[$x]]);

			$p->setMatch();

			$y++;
		}

		if ($y == count($player)){
			header("Location: ".BASE_URL."match?insert=ok");
		}
	}
}

