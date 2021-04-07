<?php

class homeController extends Controller
{

	public function index()
	{
		$players = new Players();
		$data = $players->getPlayersByGoals();

		$this->loadTemplate('home', $data);
	}

}