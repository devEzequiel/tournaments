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
}