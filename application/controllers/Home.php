<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	
	public function index()
	{
		
		// moving data from controller to view

		$data['heading'] = "Sports Basahin";

		$this->load->view('includes/header');
		$this->load->view('home_view', $data);
		$this->load->view('includes/footer');

		
	}

	public function test(){

		$myArray['thisheading'] = 'Test heading';
		$myArray['description'] = 'Once upon a time there was a dude named Dude';

		$this->load->view('includes/header');
		$this->load->view('test_view',  $myArray);
		$this->load->view('includes/footer');
	}
}
