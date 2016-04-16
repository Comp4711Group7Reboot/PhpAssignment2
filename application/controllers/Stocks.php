<?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 
 class Stocks extends Application {
 
 
    function __construct()
    {
        parent::__construct();
    }
 
    public function index()
    {
        $this->data['stocks'] = $this->Stock->getStocks();
        $this->data['pagebody'] = 'stocks_view';
        $this->render();
    }
   
   
   function getStockDetail($name)
    {
        $this->data['stockDetail'] = $this->Stock->getStockInfo($name);
        $this->data['stockMovements'] = $this->Stock->getMovements($name);
        $this->data['pagebody'] = 'stocks_detail';
        $this->render();
    }
   
   
}