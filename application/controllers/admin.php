<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller
{
    private static $SALT = 'W&WSalt2021!'; 

    function construct(){
        parent::construct();
        $this->load->database();
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->helper('cookie');
        $this->load->model("Crud_model", 'crud_model');
        $this->load->model("User_model", 'user_model');
    }


    // modelo vista y controlador
    public function index (){

        $page_data['page_name']='Home';
        $page_data['page_title']='Egresados || Home';
        $this->load->view('pages/Index', $page_data); 

    
    }





}

