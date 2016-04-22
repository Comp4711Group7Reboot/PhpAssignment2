<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

 /*
  * This is the stock model
  */
class Stock extends CI_Model 
{

    function getStocks($url)
    {
        $this->load->library('session');
        $stocks = array();
        ini_set('auto_detect_line_endings', TRUE);
        if (($handle = fopen($url, 'r')) !== FALSE)
        {
            while (($data = fgetcsv($handle, 1024, ',', '"')) !== FALSE)
            {
                $stocks[] = array("code"=>$data[0], 
                                  "name"=>$data[1], 
                                  "category"=>$data[2], 
                                  "value"=>$data[3]);
            }
            fclose($handle);
        }
        array_shift($stocks);
        $this->session->currentStock = $stocks;
        return $stocks;
    }
    
    function getStockInfo($name)
    {
        $this->load->library('session');
        foreach($this->session->currentStock as $data){
            if($data["code"] == $name){
                return array($data);
            }
        }
        return null;
    }
    
    public function getStockMovement($name){
        $url = "http://bsx.jlparry.com/data/movement";
        $stockMovement = array();
        if (($handle = fopen($url, 'r')) !== FALSE)
        {
            while (($data = fgetcsv($handle, 1024, ',', '"')) !== FALSE)
            {
                if($data[2] == $name){
                    $stock = array();
                    $stock["seq"]  = $data[0];
                    $stock["datetime"]  = $data[1];
                    $stock["code"] = $data[2];
                    $stock["action"]  = $data[3];
                    $stock["amount"]  = $data[4];
                    $stockMovement[] = $stock;
                }
            }
            fclose($handle);
        }
    }
    
    public function getStockTrans($name)
    {
        $url = "http://bsx.jlparry.com/data/transactions";
        $stockTrans = array();
        if (($handle = fopen($url, 'r')) !== FALSE)
        {
            while (($data = fgetcsv($handle, 1024, ',', '"')) !== FALSE)
            {
                if($data[4] == $name){
                    $stock = array();
                    $stock["seq"]  = $data[0];
                    $stock["datetime"]  = $data[1];
                    $stock["agent"]  = $data[2];
                    $stock["player"]  = $data[3];
                    $stock["stock"]  = $data[4];
                    $stock["trans"]  = $data[5];
                    $stock["quantity"]  = $data[6];
                    $stockTrans[] = $stock;
                }
            }
            fclose($handle);
        }
        return $stockTrans;
    }
 
    function getMovements($url)
    {
        $stocks = array();
        ini_set('auto_detect_line_endings', TRUE);
        if (($handle = fopen($url, 'r')) !== FALSE)
        {
            while (($data = fgetcsv($handle, 1024, ',', '"')) !== FALSE)
            {
                $stocks[] = array("seq"=>$data[0], 
                                  "datetime"=>$data[1], 
                                  "code"=>$data[2], 
                                  "action"=>$data[3], 
                                  "amount"=>$data[4]);
            }
            fclose($handle);
        }
        array_shift($stocks); // remove the first element
        //get the last 5 elements of the array
        if(count($stocks) > 5)
        {
            $stocks = array_slice($stocks, count($stocks) - 5);
        }
        return $stocks;
    }
    
    public function getTransactions($url){
        $stocks = array();
        ini_set('auto_detect_line_endings', TRUE);
        if (($handle = fopen($url, 'r')) !== FALSE)
        {
            while (($data = fgetcsv($handle, 1024, ',', '"')) !== FALSE)
            {
                $stocks[] = array("seq"=>$data[0], 
                                  "datetime"=>$data[1], 
                                  "agent"=>$data[2], 
                                  "player"=>$data[3], 
                                  "stock"=>$data[4], 
                                  "trans"=>$data[5], 
                                  "quantity"=>$data[6]);
            }
            fclose($handle);
        }
        array_shift($stocks); // remove the first element
        //get the last 5 elements of the array
        if(count($stocks) > 5)
        {
            $stocks = array_slice($stocks, count($stocks) - 5);
        }
        return $stocks;
    }
    
    
    public function getTrend($url)
    {
        $stocks = array();
        ini_set('auto_detect_line_endings', TRUE);
        if (($handle = fopen($url, 'r')) !== FALSE)
        {
            while (($data = fgetcsv($handle, 1024, ',', '"')) !== FALSE)
            {
                $stocks[] = array("seq"=>$data[0],
                                  "datetime"=>$data[1], 
                                  "code"=>$data[2], 
                                  "action"=>$data[3], 
                                  "amount"=>$data[4]);
            }
            fclose($handle);
        }
        array_shift($stocks); // remove the first element
        //get the last 5 elements of the array
        if(count($stocks) > 20)
        {
            $stocks = array_slice($stocks, count($stocks) - 20);
        }
        return $stocks;
    }
}
