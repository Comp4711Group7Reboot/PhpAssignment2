<?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 
 /*
 * This is the Homepage controller
 */
 
 class Homepage extends Application {
 
 
    function __construct()
    {
        parent::__construct();
    }
 
    public function index()
    {
        
        $this->data['stocks'] = $this->Stock->getStocks();
        //$this->data['players'] = $this->Player->getPlayers();
        $this->data['players'] = $this->Player->all_with_equity();
        
        $this->data['pagebody'] = 'homepage_view';
        $this->render();
   }
   
}