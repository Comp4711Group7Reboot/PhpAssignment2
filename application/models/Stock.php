<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/**
 * Contacts table.
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
    
}
