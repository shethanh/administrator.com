<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tours extends CI_Controller {

	
	public function index()
	{


		$data['body']	= 'desktop/tour_lists';
		$this->load->view('desktop/desktop',$data);
	}



}
