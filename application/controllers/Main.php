<?php
defined('BASEPATH') OR exit ('No direct script access allowed!');
    class Main extends CI_controller{
        public function index(){
            $this->load->view('Pages/Header');
            $this->load->view('Pages/Body');
            $this->load->view('Pages/Footer');
        }
    }