<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Desktop extends CI_Controller {
	
	public function index()
	{
	
		$data['body']	= 'desktop/template';
		$this->load->view('desktop/desktop',$data);
	}




}
