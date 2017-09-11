<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Signup extends CI_Controller {

	
	public function index()
	{
		$this->load->helper('url');


		$data['title']	= 'title';
		$this->load->view('desktop/signup',$data);
	}



}
