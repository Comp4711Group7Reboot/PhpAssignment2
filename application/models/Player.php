<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/**
 * Contacts table.
 */
class Player extends CI_Model {

    // Constructor
    function __construct() {
        parent::__construct();
        //$this->setTable('contacts', 'ID');
    }

    function getPlayers() {
        $query = $this->db->get('players');

        return $query->result_array();
    }

    function getPlayerDetails($name) {
        
        $this->db->select('*');
        $this->db->from('players');
        $this->db->where('Player', $name);
        $query = $this->db->get();

        return $query->result_array();
    }
    
    function getTransactions($name)
    {
        $this->db->select("*");
        $this->db->from("transactions");
        $this->db->where("Player", $name);
        $query = $this->db->get();
        return $query->result_array();
     }
     
    function get_equity($player)
    {
        $equity = 0;
        $sql  = "SELECT t.Stock, t.Quantity, t.Trans "
                        ."FROM transactions t "
                        ."WHERE t.Player = '"  
                        .$player
                        ."'";
        
        $query_rows = $this->db->query($sql)->result_array();

        foreach($query_rows as $row)
        {
            $stock_value = ($this->Stock->get_stock_value($row['Stock']))
                           *
                           $row['Quantity'];
            
            if($row['Stock'] == "buy")
            {
                $equity += $stock_value;
            }
            else
            {
                $equity -= $stock_value;
            }
        }
        
        return $equity;
    }
    
    
    function all_with_equity()
    {
        $players = $this->Player->getPlayers();
        
        $playerarr = array();
        
        foreach($players as $player)
        {
            $item = array('Player' => $player['Player'],
                          'Cash'   => $player['Cash'], 
                          'Equity' => (
                                        ($this->Player->get_equity($player['Player'])
                                        + 
                                        $player['Cash']
                                        )
                                      )
                         );
            
            
            array_push($playerarr, $item);
        }
        
        
        return $playerarr;
    }
    
}
