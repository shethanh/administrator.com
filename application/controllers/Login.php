<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	
	public function index()
	{
		$this->load->helper('url');


		$data['title']	= 'title';
		$this->load->view('desktop/login',$data);
	}



}
