<?php
/**
 * 
 */
class teamsController extends Controller
{
	public function index ()
	{
		$this->loadTemplate('teams');
	}

	public function adicionar ()
	{
		$teams = new Teams();
		$teams->setTeamName($_GET['name']);
		if ($teams) {
        	// header ('Content-type: application/json');
        	var_dump (array(0 => 'ok'));
        }
	}
}
