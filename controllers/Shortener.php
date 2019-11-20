<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Shortener extends CI_Controller {

	public function __construct(){
		parent::__construct();
        $this->load->model('shortener_model');
    }

	public function index()
	{
		$data['title'] = 'Главная страница';
		$data['button'] = 'Обрезать';
		$this->load->view('templates/header', $data);
		$this->load->view('index', $data);
		$this->load->view('templates/footer');
	}

	public function shorten()
	{	

		function genLink() {
			$length = 5;
			$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
			$randomString = '';
			for ($i = 0; $i < $length; $i++) {
			$randomString .= $characters[rand(0, strlen($characters) - 1)];
			}
			return $randomString;
		}

		if(get_headers($this->input->post('url'), 1)){
			$url = $this->input->post('url');

			if((preg_match('/https/s', $url)) == 1) { 
				$url = substr($url, 8);
			} elseif ((preg_match('/http/s', $url)) == 1) {
				$url = substr($url, 7);
			} 
			if(($this->shortener_model->checkUrl($url)) == $url){
				$data['response'] = $this->shortener_model->getlink($url);
			} else {
				$data['response'] = genLink();
				$this->shortener_model->insertUrl($url, $data['response']);
			}
			echo base_url().'i/'.$data['response'];
		} else {
			echo $data['response'] = "Введен не действительный адрес!";
		}
		
		
		
		
	}


}
