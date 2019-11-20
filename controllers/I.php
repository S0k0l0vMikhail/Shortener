<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class I extends CI_Controller {

	public function __construct(){
		parent::__construct();
        $this->load->model('shortener_model');
    }

	public function index()
	{	
		$url = $_SERVER['REQUEST_URI'];
		$url = explode('?', $url);
		$link = substr($url[0], 3);
		$data['url'] = $this->shortener_model->getUrl($link);
		header('Location: https://' .$data['url'], true, 301);
	}

}
