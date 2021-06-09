<?php 
defined('BASEPATH') OR exit('No direct script acess allowed');

class Home extends CI_Controller {

    public function index()
    {
        $this->load->view('pages/Index');
    }
}