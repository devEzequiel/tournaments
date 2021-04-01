<?php

class homeController extends Controller
{

	public function index()
	{
		$goals = new Goals();
		$dados = array (
			'quantidade' => $goals->getGoals(),
		);

		$this->loadViewInTemplate('home', $dados);
	}

}