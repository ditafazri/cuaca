<?php

defined('BASEPATH') OR exit('No direct script access allowed');
class Dita extends CI_Controller {
    public function index()
        
        {
$api = new RestClient([
	'base_url' => "https://ibnux.github.io/BMKG-importer",
	'format' => "json"
    ]);
$result = $api->get("cuaca/501320");
$data['data']= $result->decode_response();
        $data['name'] = "Dita Fazri Chairunnisa";
        $this->load->view('dita', $data);
    }
}