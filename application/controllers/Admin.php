<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	
	public function index()
	{
		$this->load->helper('url');
	
		$data['main_content']='admin/general_form';
		$data['Hello']=" Hello Dara";
		$this->load->view('template_forms',$data);
	}
	// Booking

	public function booking()
	{
		$this->load->helper('url');
	
		$data['main_content']='admin/general_form';
		$data['Hello']=" Hello Dara";
		$this->load->view('template_forms',$data);
	}
	public function invoice()
	{
		$this->load->helper('url');
	
		$data['main_content']='admin/general_form';
		$data['Hello']=" Hello Dara";
		$this->load->view('template_forms',$data);
	}
	public function booking_cancel()
	{
		$this->load->helper('url');
	
		$data['main_content']='admin/general_form';
		$data['Hello']=" Hello Dara";
		$this->load->view('template_forms',$data);
	}

		public function hotels()
	{
		$this->load->helper('url');
	
		$data['main_content']='admin/lists';
		$data['Hello']=" Hello Dara";
		$this->load->view('template_forms',$data);
	}

	public function hotel_add()
	{
		$this->load->helper('url');
	
		$data['main_content']='admin/hotel_add';
		$data['Hello']=" Hello Dara";
		$this->load->view('template_forms',$data);
	}
	public function hotel_update()
	{
		$this->load->helper('url');
	
		$data['main_content']='admin/general_form';
		$data['Hello']=" Hello Dara";
		$this->load->view('template_forms',$data);
	}

	public function hotel_delete()
	{
		$this->load->helper('url');
	
		$data['main_content']='admin/general_form';
		$data['Hello']=" Hello Dara";
		$this->load->view('template_forms',$data);
	}

// Room List
	public function hotel_rooms()
	{
		$this->load->helper('url');
	
		$data['main_content']='admin/general_form';
		$data['Hello']=" Hello Dara";
		$this->load->view('template_forms',$data);
	}


	public function profile()
	{
		$this->load->helper('url');
	
		$data['main_content']='admin/general_form';
		$data['Hello']=" Hello Dara";
		$this->load->view('template_forms',$data);
	}
		public function logout()
	{
		$this->load->helper('url');
	
		$data['main_content']='admin/general_form';
		$data['Hello']=" Hello Dara";
		$this->load->view('template_forms',$data);
	}



}