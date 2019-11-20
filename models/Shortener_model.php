<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Shortener_model extends CI_Model {

    public function __construct(){
        $this->load->database();
    }

    public function checkUrl($url)
	{
		$query = $this->db->get_where('urls', array('url' => $url));
		foreach ($query->result() as $row)
			{
				return $row->url;
			}
	}

	public function getlink($url)
	{
		$query = $this->db->get_where('urls', array('url' => $url));
		foreach ($query->result() as $row)
			{
				return $row->link;
			}
	}

	public function getUrl($link)
	{
		$query = $this->db->get_where('urls', array('link' => $link));
		foreach ($query->result() as $row)
			{
				return $row->url;
			}
	}

	public function insertUrl($url, $link)
	{
		$this->db->insert('urls', array('url' => $url, 'link' => $link ));
	}
}
