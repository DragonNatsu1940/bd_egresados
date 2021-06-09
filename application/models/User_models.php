<?php
defined('BASEPATH') or exit('No direct script access allowed');


class User_models extends CI_Model
{
    private static $SALT = 'W&WSalt2021!';
    public function __construct()
    {
        parent::__construct();
    }

    public function get_user_email($email = '')
    {
        $this->db->where('email', $email);
        return $this->db->get('users');
    }


    public function get_users($id = '')
    {
        if ($id != '') :
            $this->db->where('id', $id);
        endif;
        return $this->db->get('users');
    }

    public function register()
    {
        $email = $this->input->post('email');
        $user_details = $this->get_user_email($email);

        if ($user_details->num_rows() <= 0) :
            $name = $this->input->post("name");
            $last_name = $this->input->post("last_name");
            $email = $this->input->post("email");
            $cc = $this->input->post("cc");
            $gender = $this->input->post("gender");
            $role = $this->input->post("role");
            $passwordc = $this->input->post("password");
            $Copassword = $this->input->post("Copassword");
            $phone = $this->input->post("phone");
            $specialization = $this->input->post("specialization");
            $profession = $this->input->post("profession");
            $insert = array(
                "name" => $name,
                "last_name" => $last_name,
                "email" => $email,
                "cc" => $cc,
                "gender" => $gender,
                "role" => $role,
                "phone" => $phone,
                "specialization" => $specialization,
                "profession" => $profession,
                "password" => self::hash($passwordc)
            );
            if ($passwordc == $Copassword) :
                return $this->db->insert('users', $insert);
            endif;
        endif;
        return false;
    }

    public static function hash($password)
    {
        return hash('sha512', self::$SALT . $password);
    }
}
