<?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 
 /*
 * This is the player controller
 */
 
 class Players extends Application {
 
 
    function __construct()
    {
        parent::__construct();
    }
 
    public function index()
    {
        
        $this->data['pagebody'] = 'players_view';
        
        //$this->load->model('Player');
        $this->data['players'] = $this->Player->getPlayers();
        
        //$this->data['players'] = $this->Player->all_with_equity();
        
        $this->render();
   }
   
   public function portfolio($name)
   {
       
       //$this->load->model('Player');
       
       $this->data['playerprofile'] = $this->Player->getPlayerDetails($name);
       $this->data['transactions'] = $this->Player->getTransactions($name);
       $this->data['pagebody'] = 'player_portfolio'; // this is the view we want shown
       $this->render();
   }
}