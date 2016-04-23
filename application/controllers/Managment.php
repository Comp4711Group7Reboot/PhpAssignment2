<?php
defined('BASEPATH') OR exit('No direct script access allowed');


/*
 * This is the management controller
 */

class Management extends Application
{
    function __construct()
    {
        parent::__construct();
    }

    public function index() 
    {
        $this->data['pagebody'] = 'management';	
        $this->data['title'] = 'Agent Management';
        $this->render();
    }
}