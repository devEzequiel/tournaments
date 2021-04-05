<?php



class teamsController extends Controller
{
	public function index ()
	{
		$teams = new Teams ();
		$data = [];
		$data['team'] = $teams->getTeams();
		$this->loadTemplate('teams', $data);
	}

	public function adicionar ()
	{
		$teams = new Teams();
		
		switch ($teams->setTeamName($_GET['name'])) {
			case 0:	
				header ('Content-type: application/json');			
        		echo json_encode(array(0 => 0));
				break;			
			case 1:	
				header ('Content-type: application/json');			
        		echo json_encode(array(0 => 1));
				break;
			case 2:	
				header ('Content-type: application/json');			
	    		echo json_encode(array(0 => 2));
				break;
			default:
				header ('Content-type: application/json');
				echo json_encode(array(0 => 3));
				break;
		}
	}

	public function abrir ($team_id)
	{
		$players = new Players ();
		$team = new Teams ();

		$data = [];

		$data['stats'] = $players->getStats($team_id);

		$data['team'] = $team->getTeamName($team_id);

		$data['team_id'] = $team_id;

		$this->loadTemplate('abrir', $data);
	}
}
