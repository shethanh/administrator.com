<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Boarding_places extends CI_Controller {

	
	public function index()
	{


		$data['body']	= 'desktop/boarding_place/boarding_list';
		$this->load->view('desktop/desktop',$data);
	}

	public function add()
	{


		$data['body']	= 'desktop/boarding_place/boarding_add';
		$this->load->view('desktop/desktop',$data);
	}



}
