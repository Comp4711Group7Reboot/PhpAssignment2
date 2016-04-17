<?php

/*
 * This is the game controller
 */

class Games extends Application {

    public $xml = null;
    private $state;
    private $round;
    private $countdown;

    function __construct() {
        parent::__construct();
        $this->restrict(array(ROLE_USER));
    }

    public function index()
    {
        $this->data['pagebody'] = 'game';    // this is the view we want shown
        $this->data['title'] = 'Game Page';
        $this->data['gameStatus'] = $this->Game->getStatus();
        $this->data['currentPlayer'] = $this->Game->getCurrentPlayer();
        $this->data['holdings'] = $this->Game->getPlayerHoldings();
        $this->data['trend'] = $this->Game->getTrend();
        $this->register($this->data['gameStatus']);
        $this->data["stocks"] = $this->Game->getStocks();
        $this->data["message"] = $this->session->flashdata('item');
        $this->data["flag"] = $this->session->flashdata('flag');
        $this->render();
    }
    private function register($status)
    {
        if ($status[0]["state"] == 3 || $status[0]["state"] == 4) {
            $this->game->register(BSX_SERVER."register", "tuesday");
        }
    }
}
