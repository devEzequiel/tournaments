<?php

class homeController extends Controller
{

    public function index()
    {
        $this->loadTemplate('home');
    }

    public function stats()
    {
        $data = (new Players)->getPlayersByGoals();
        header('Content-type: application/json');
        echo json_encode($data);
    }

    public function byAssists()
    {
        $players = new Players();
        $data = $players->getPlayersByAssists();

        header('Content-type: application/json');
        echo json_encode($data);
    }

    public function byScore()
    {

        $players = new Players();
        $data = $players->getPlayersByScore();

        header('Content-type: application/json');
        echo json_encode($data);
    }

    public function byMatches()
    {
        $players = new Players();
        $data = $players->getPlayersByMatches();

        header('Content-type: application/json');
        echo json_encode($data);
    }
}