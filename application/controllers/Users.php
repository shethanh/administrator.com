<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

	
	public function index()
	{


		$data['body']	= 'desktop/user/user_list';
		$this->load->view('desktop/desktop',$data);
	}

	public function add()
	{

		$data['body']	= 'desktop/user/user_add';
		$this->load->view('desktop/desktop',$data);
	}



}
