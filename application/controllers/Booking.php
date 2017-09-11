<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Booking extends CI_Controller {

	
	public function index()
	{


		$data['body']	= 'desktop/booking/booking_list';
		$this->load->view('desktop/desktop',$data);
	}

	public function add()
	{

		$data['body']	= 'desktop/booking/booking_add';
		$this->load->view('desktop/desktop',$data);
	}



}
