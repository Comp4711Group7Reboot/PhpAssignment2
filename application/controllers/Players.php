<?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 
 class Players extends Application {
 
 
    function __construct()
    {
        parent::__construct();
    }
 
    public function index()
    {
        $this->data['pagebody'] = 'players';
        $this->render();
   }
   
}