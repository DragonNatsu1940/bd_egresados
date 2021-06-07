<?php
    defined('BASEPATH') OR exit('No direct script access allowed');


    class User_model extends CI_Model
    {
        private static $SALT = 'W&WSalt2021!';
        public function construct()
        {
            parent::construct();
        }
}