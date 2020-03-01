<?php

defined('BASEPATH') OR exit('No direct script access allowed');
class Dita extends CI_Controller {
    public function index()
    {
        $data = [];
        $data['name'] = "Dita Fazri Chairunnisa";
        $this->load->view('dita', $data);
    }
}