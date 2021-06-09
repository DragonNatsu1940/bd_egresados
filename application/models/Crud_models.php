<?php
    defined('BASEPATH') OR exit('No direct script access allowed');


    class Crud_models extends CI_Model
    {
        
        public function __construct()
        {
            parent::__construct();
        }

        public function add_offer()
        {
            $title = $this->input->post("title");
            $date_start = $this->input->post("date_start");
            $date_finish = $this->input->post("date_finish");
            $price = $this->input->post("price");
            $profession = $this->input->post("profession");
            $description = $this->input->post("description");
            $user_id = $this->input->post("user_id");

            $insert = array(
                "title" => $title,
                "date_start" => $date_start,
                "date_finish" => $date_finish,
                "price" => $price,
                "profession" => $profession,
                "user_id" => $user_id,
                "description" => $description
            );
            // print_r($insert);

            return $this->db->insert('offers', $insert);
        }

        public function my_offers($id = '')
        {
            if($id != ''):
                $this->db->where('id', $id);
            endif;
            return $this->db->get('offers');
        }

        public function all_offers()
        {
            $offers = $this->db->get('offers');
            return $offers;
        }
}