<?php
/*
 * This is the Stock controller
 */

 defined('BASEPATH') OR exit('No direct script access allowed');
 
 /*
  * This is the stock controller
  */
 class Stocks extends Application {
 
 
    function __construct()
    {
        parent::__construct();
    }
 
    public function index()
    {
        $this->data['stocks'] = $this->Stock->getStocks(BSX_SERVER.'data/stocks');
        $this->data['pagebody'] = 'stocks_view';
        $this->render();
    }
   
   
   function getStockDetail($code)
    {
        $this->data['stockDetail'] = $this->Stock->getStocks(BSX_SERVER.'data/stocks/'.$code);
        $this->data['stocktransactions']  = $this->Stock->getStockTrans($code);
        $this->data['stockMovements'] = $this->Stock->getStockMovement($code);
        $this->data['pagebody'] = 'stocks_detail';
        $this->render();
    }
   
   
}