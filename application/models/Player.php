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

}
