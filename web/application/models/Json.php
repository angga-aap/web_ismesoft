<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
    class Json extends CI_Model {

        public function __construct(){
            parent::__construct();
        }

        public function getDataFromJSON(){
            $string = file_get_contents(base_url()."/public/content.json");
            $data = json_decode($string, true);

            return $data;
       } 
    }
?>