<?php 

/**
 * players class
 */
class playersController extends Controller
{
	public function adicionar () 
	{	
		$player = new Players();
		$player->setName($_GET['name']);
		$player->setGoals($_GET['goals']);
		$player->setMatches($_GET['matches']);
		$player->setAssists($_GET['assists']);
		$player->setScore($_GET['avrg']);
		$player->setTeamName($_GET['team']);
		
		switch ($player->setNewPlayer()) {
			case 0:
				header ('Content-type: application/json');			
        		echo json_encode(array(0 => 0));
				break;
			
			case 1:
				header ('Content-type: application/json');			
        		echo json_encode(array(0 => 1));
				break;

			default:
				break;
		}

	}
}