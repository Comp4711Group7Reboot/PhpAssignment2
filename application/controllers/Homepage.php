<?php
/*
 * This is the HomePage controller
 */

 defined('BASEPATH') OR exit('No direct script access allowed');
 
 class Homepage extends Application {
 
 
    function __construct()
    {
        parent::__construct();
    }
 
    public function index()
    {
        $this->data['stocks'] = $this->Stock->getStocks(BSX_SERVER . 'data/stocks');
        $this->data['users'] = $this->User->getUsers();
        $this->data['gameStatus'] = $this->Game->getStatus();
        $this->data['recentStockMovements'] = $this->Stock->getMovements(BSX_SERVER . 'data/movement');
        $this->data['recentStockTrans'] = $this->Stock->getTransactions(BSX_SERVER . 'data/transactions');
        $this->data['pagebody'] = 'homepage_view';
        $this->render();
    }
   
}