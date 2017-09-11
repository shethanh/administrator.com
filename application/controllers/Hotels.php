<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hotels extends CI_Controller {

	
	public function index()
	{
		$data['body']	= 'desktop/hotels/hotel_lists';
		$this->load->view('desktop/desktop',$data);
	}

	public function roomtypes()
	{
		$data['body']	= 'desktop/hotels/hotel_roomtypes';
		$this->load->view('desktop/desktop',$data);
	}

	public function rooms()
	{
		$data['body']	= 'desktop/hotels/hotel_rooms';
		$this->load->view('desktop/desktop',$data);
	}

	public function amenities()
	{
		$data['body']	= 'desktop/hotels/hotel_amenities';
		$this->load->view('desktop/desktop',$data);
	}

	public function promotions()
	{
		$data['body']	= 'desktop/hotels/hotel_promotions';
		$this->load->view('desktop/desktop',$data);
	}

	public function booking()
	{
		$data['body']	= 'desktop/hotels/hotel_booking';
		$this->load->view('desktop/desktop',$data);
	}

	public function add()
	{
		$data['body']	= 'desktop/hotels/hotel_add';
		$this->load->view('desktop/desktop',$data);
	}
	

	 


}
