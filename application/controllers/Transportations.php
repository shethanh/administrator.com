<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transportations extends CI_Controller {

	
	public function index()
	{

		$data['body']	= 'desktop/transportation_lists';
		$this->load->view('desktop/desktop',$data);
	}

	public function types()
	{
		$data['body']	= 'desktop/transportations/transport_type';
		$this->load->view('desktop/desktop',$data);
	}

	public function stations()
	{
		$data['body']	= 'desktop/transportations/transport_station';
		$this->load->view('desktop/desktop',$data);
	}

	public function destinations()
	{
		$data['body']	= 'desktop/transportations/transport_destination';
		$this->load->view('desktop/desktop',$data);
	}

	public function amenities()
	{
		$data['body']	= 'desktop/transportations/transport_amenities';
		$this->load->view('desktop/desktop',$data);
	}

	public function promotions()
	{
		$data['body']	= 'desktop/transportations/transport_promotion';
		$this->load->view('desktop/desktop',$data);
	}

	public function policies()
	{
		$data['body']	= 'desktop/transportations/transport_policy';
		$this->load->view('desktop/desktop',$data);
	}

	public function add()
	{
		$data['body']	= 'desktop/transportations/transport_add';
		$this->load->view('desktop/desktop',$data);
	}


	


}
