<?php

/*
 * This is the game controller
 */

class Game extends Application {

    public $xml = null;
    private $state;
    private $round;
    private $countdown;

    function __construct() {
        parent::__construct();
        $this->restrict(array(ROLE_USER));
        $this->load->model('game');
    }

    public function index() {
        $this->data['title'] = 'Game Page';
        $this->data['pagebody'] = 'game';
        $this->data["stocks"] = $this->game->getStocks();
        $this->render();
    }

    public function getStatus() {
        $this->xml = simplexml_load_file('http://bsx.jlparry.com/status');
        $this->round = $this->xml->round;
        $this->state = $this->xml->state;
        $this->countdown = $this->xml->countdown;
    }
}
