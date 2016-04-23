<?php

/*
 * This is the User model
 */
class User extends MY_Model 
{
    public function __construct() 
    {
        parent::__construct('users', 'id');
    }
    
    public function getUserByName($username)
    {
        $this->db->where('name', $username);
        $this->db->from('users');
        $query = $this->db->get();
        if ($query->num_rows() < 1)
        {
            return null;
        }
        return $query->row();
    }
    
    
    function addUser($data)
    {
        $this->db->insert('users', $data);
    }
    
    
    public function getUserInfo($name)
    {
        
         $this->db->select('*');
         $this->db->from('users');
         $this->db->where('username', $name);
         $query = $this->db->get();
         return $query->result_array();
     }
    
    
    public function getUserStockHoldings($name) 
    {
 
         $this->db->select('*');
         $this->db->from('holdings');
         $this->db->where('name', $name);
 
         $query = $this->db->get();
 
         return $query->result_array();
     }
 

     public function getUserTransaction($name) 
     {
 
         $this->db->select('*');
         $this->db->from('transactions');
         $this->db->where('Player', $name);
         $query = $this->db->get();
         return $query->result_array();
     }
     
     
    public function addToHoldings($info)
    {
        $data = array(
            'token' => $info->token,
            'stock' => $info->stock,
            'player' => $this->session->userdata('username'),
            'quantity' => $info->amount
        );
        $this->db->insert('holdings', $data);
        $data = array(
            'Stock' => $info->stock,
            'DateTime' => $info->datetime,
            'Player' => $this->session->userdata('username'),
            'Trans' => 'buy',
            'Quantity' => $info->amount
        );
        $this->db->insert('transactions', $data);
    }
        
}
