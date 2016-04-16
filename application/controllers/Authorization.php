<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Authorization extends Application {

    function __construct() {
        parent::__construct();
    }

    function index() {
        $this->data['pagebody'] = 'login';
        $this->render();
    }

    function register() {
        $this->data['pagebody'] = 'registration';
        $this->render();
    }

    function login() {
        $key = $_POST['userid'];
        $username = $this->User->getUserByName($key);

        if ($this->input->post('password') == $username->password) {
            $this->session->set_userdata('userID', $username->id);
            $this->session->set_userdata('username', $username->name);
            $this->session->set_userdata('userRole', $username->role);
            $this->session->set_userdata('logged_in', TRUE);
            redirect('/Homepage');
        } else {

            redirect('/');
        }
    }

    function logout() {
        
        $this->session->unset_userdata('userID');
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('userRole');
        $this->session->unset_userdata('logged_in');

        $this->session->sess_destroy();
        redirect('/');
    }

}
