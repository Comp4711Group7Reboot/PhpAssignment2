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
        $this->data['pagebody'] = 'game';
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
        if($status[0]["state"] == 3 || $status[0]["state"] == 4) 
        {
            $this->Game->register(BSX_SERVER."register", "tuesday");
        }
    }
    
    
    public function buy()
    {
        $status = $this->Game->getStatus();
        
        if($status[0]["state"] == 3 || $status[0]["state"] == 4) {
            $this->session->set_flashdata('item', 'Successfully bought Stock');
            $this->session->set_flashdata('flag', 'alert-success');
            $code = $this->input->post('code');
            $quantity = $this->input->post('quantity');
            $this->Game->buy($code, $quantity);
        }
        else
        {
            $this->session->set_flashdata('item', 'Game is Close');
            $this->session->set_flashdata('flag', 'alert-danger');
        }
        redirect('/games');
    }   
    
    public function sell()
    {
        $message = "";
        $status = $this->Game->getStatus();
        
        if($status[0]["state"] == 3 || $status[0]["state"] == 4) {
            $this->session->set_flashdata('item', 'Successfully sold Stock');
            $this->session->set_flashdata('flag', 'alert-success');
            $code = $this->input->post('code');
            $quantity = $this->input->post('quantity');
            $token = $this->input->post('token');
            $message = $this->Game->sell($code, $quantity, $token);
            var_dump($message);
        }
        else
        {
            $this->session->set_flashdata('item', 'Game is Close');
            $this->session->set_flashdata('flag', 'alert-danger');
        }
        
        
        if($message->message){
            $this->session->set_flashdata('item', (string)$message->message);
            $this->session->set_flashdata('flag', 'alert-danger');
        }
        redirect('/games');
    }
}
