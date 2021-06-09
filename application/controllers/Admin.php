<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller
{
    private static $SALT = 'W&WSalt2021!'; 

    function __construct(){
        parent::__construct();
        $this->load->database();
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->helper('cookie');
        $this->load->model("Crud_models", 'crud_models');
        $this->load->model("User_models", 'user_models');
    }

    public function index(){
        $page_data['page_name']='Home';
        $page_data['page_title']='Egresados || Home';
        $this->load->view('pages/Index', $page_data); 
    }

    // Peticiones GET

    public function login(){
        $page_data['page_name']='Login';
        $page_data['page_title']='Egresados || Iniciar Sesion';
        $this->load->view('pages/Index', $page_data); 
    }

    public function register(){
        $page_data['page_name']='Register';
        $page_data['page_title']='Egresados || Register';
        $this->load->view('pages/Index', $page_data); 
    }

    public function forgot_password(){
        $page_data['page_name']='Forgot_password';
        $page_data['page_title']='Egresados || Recuperar Contraseña';
        $this->load->view('pages/Index', $page_data); 
    }

    public function profile(){
        $page_data['page_name']='Profile';
        $page_data['page_title']='Egresados || Profile';
        $this->load->view('pages/Index', $page_data); 
    }

    public function home(){
        $page_data['page_name']='Dashboard';
        $page_data['page_title']='Egresados || Dashboard';
        $this->load->view('pages/Index', $page_data); 
    }

    public function help(){
        $page_data['page_name']='Help';
        $page_data['page_title']='Egresados || Ayuda';
        $this->load->view('pages/Index', $page_data); 
    }

    public function offers(){
        $page_data['page_name']='Offers';
        $page_data['page_title']='Egresados || Crear Ofertas';
        $this->load->view('pages/Index', $page_data); 
    }

    public function my_offers(){
        $page_data['page_name']='My_offers';
        $page_data['page_title']='Egresados || Mis Ofertas';
        $page_data['offers'] = $this->crud_models->my_offers()->result_array();
        $this->load->view('pages/Index', $page_data); 
    }

    public function offers_all(){
        $page_data['page_name']='Offers_all';
        $page_data['page_title']='Egresados || Todas las Ofertas';
        $page_data['offers'] = $this->crud_models->all_offers()->result_array();
        $this->load->view('pages/Index', $page_data); 
    }

    public function show_cv(){
        $page_data['page_name']='Show_cv';
        $page_data['page_title']='Egresados || Hoja de vida';
        $this->load->view('pages/Index', $page_data); 
    }

    


    // Peticiones POST y PUT

    public function actions($params1 = '', $params2 = ''){
        
        if($params1 == 'register'):
            if($this->user_models->register()):
                redirect(base_url('admin/Login'));
            endif;
        endif;


        if($params1 == 'add_offer'):
            if($this->crud_models->add_offer()):
                redirect(base_url('admin/my_offers'));
            endif;
        endif;

    }
    
    // Opciones de logeo 

    public function validate_login(){
        if($_SERVER['REQUEST_METHOD'] == 'POST'):
            $email = $this->input->post('email');
            $password = $this->input->post('password');
            $user = $this->user_models->get_user_email($email)->row_array();
            if(!empty($user)):
                // if(self::verify($password, $user['password'])):
                    $this->session->set_userdata('user_login', true);
                    $this->session->set_userdata('user_id', $user['id']);
                    $this->session->set_userdata('email', $user['email']);
                    $this->session->set_userdata('role', $user['role']);
                    $this->session->set_userdata('name', $user['name']);
                    $this->session->set_userdata('last_name', $user['last_name']);
                    $this->session->set_userdata('gender', $user['gender']);
                    $this->session->set_userdata('cc', $user['cc']);
                    $this->session->set_userdata('specialization', $user['specialization']);
                    $this->session->set_userdata('profession', $user['profession']);
                    $this->session->set_userdata('phone', $user['phone']);
                    $this->session->set_userdata('company_name', $user['company_name']);
                    $this->session->set_userdata('nit', $user['nit']);
                    redirect(base_url('admin/profile'));
                //     else:
                //         redirect(base_url('admin/Login'));
                // endif;
                else:
                    redirect(base_url('admin/Login'));
            endif;
        else:
            redirect(base_url('admin/Login'));
        endif;
    }

    public function logout(){
        $this->session->unset_userdata('user_login');
        $this->session->unset_userdata('user_id');
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('role');
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('name');
        $this->session->unset_userdata('last_name');
        redirect(base_url('admin/Login'), 'refresh');
    }



    // Encriptado y Desecriptado

    public static function verify($password, $hash) {
        return ($hash == self::hash($password));
    }
    
    public static function hash($password) {
        return hash('sha512', self::$SALT . $password);
    }
}




