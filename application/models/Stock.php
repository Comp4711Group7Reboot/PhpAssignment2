<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/*
 * This is the Stock
 */
class Stock extends CI_Model 
{

    function getStocks()
    {
        $query = $this->db->get("stocks");
        return $query->result_array(); 
    }
    
    function getStockInfo($name)
    {
        $this->db->select("*");
        $this->db->from("stocks");
        $this->db->where("Name", $name);
        $query = $this->db->get();
         
        return $query->result_array();
    }
    
 
    function getMovements($code)
    {
        $this->db->select("*");
        $this->db->from("movements");
        $this->db->where("Code", $code);
        $query = $this->db->get();
        return $query->result_array();
    }
    
    public function get_stock_value($stock) 
    {
        $stock_value = null;

        $sql = "SELECT  s.Value "
                . "FROM stocks s "
                . "WHERE s.Code = '"
                . $stock
                . "'";

        $query = $this->db->query($sql)->result_array();

        if (!empty($query)) {
            $stock_value = $query[0]['Value'];
        }

        return $stock_value;
    }

}
