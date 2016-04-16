<?php
 defined('BASEPATH') OR exit('No direct script access allowed');

 class Auth extends Application {

    function __construct() 
    {
        parent::__construct();
    }

    function index() 
    {    
        $this->data['pagebody'] = 'login';
        $this->render();
    }

    function register() 
    {
        $this->data['pagebody'] = 'registeration';
        $this->render();
    }

    function login() 
    {

    }

    function logout() 
    {
        
 }

}
