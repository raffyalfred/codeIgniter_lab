<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Article extends CI_Controller {

	
	public function index()
	{
		
		// moving data from controller to view

		$this->load->view('includes/header');
		$this->load->view('article_view');
		$this->load->view('includes/footer');
	}

	public function write()
	{
		
		if (!$this->tank_auth->is_logged_in()) {
			redirect('/auth/login/');
		} else {
			$data['author_id']	= $this->tank_auth->get_user_id();

		}

		// $this->load->model('article_model');

		// if (!$this->article_model->check_owner($id, $data['author_id'])){
		// 	echo "nhot your item";
		// 	exit();
		// }

		// validation library: not autoloaded, so we must load this here or in a construct

		$this->load->library('form_validation');

		$this->form_validation->set_error_delimiters('<div class="alert alert-danger">','</div>');

		$this->form_validation->set_rules('letter', 'Letter', 'required|min_length[4]');
		$this->form_validation->set_rules('description', 'Description', 'required|min_length[20]|max_length[800]');

		if($this->form_validation->run() == FALSE){ // validation not passed; either showing to user for the first time or errors
			$this->load->view('includes/header');
			$this->load->view('article_write_view');
			$this->load->view('includes/footer');
		}else { // validation has passed
			// echo "Scces";

			// get the info from the form; put that into the array to pass to the model
			$data['letter'] = $this->input->post('letter');
			$data['description'] = $this->input->post('description');

			// testing to see what is in the array
			// echo "<pre>";
			// print_r($data);
			// echo "</pre>";

			$this->load->model('article_model');
			$this->article_model->insert_letter($data);

			// using flashdata (part of the session library which we have autoloaded)

			// flashdata loads a session available for the next page load only
			$this->session->set_flashdata('message', 'Insert Successful');

			redirect('article/index', 'location');

		}

	} // \ write



	public function read(){
		// echo "read";

		$this->load->model('article_model');
		$tmp['results'] = $this->article_model->get_letters();

		// echo "<pre>";
		// 	print_r($tmp);
		//     echo "</pre>";
		
		$this->load->view('includes/header');
		$this->load->view('article_read_view', $tmp);
		$this->load->view('includes/footer');

	} // read

	public function detail($id){
		// echo "The ID is $id";

		// add a bit of URL security
		if(!is_numeric($id)){
			redirect('/', 'location');
		}

	

		$this->load->model('article_model');
		$tmp['results'] = $this->article_model->get_letter_detail($id);

		// echo "<pre>";
		// print_r($tmp['results']);
		// echo "</pre>";

		$this->load->view('includes/header');
		$this->load->view('article_detail_view', $tmp);
		$this->load->view('includes/footer');

	} // detail


	public function edit($id)
	{

		if (!$this->tank_auth->is_logged_in()) {
			redirect('/auth/login/');
		} else {
			$data['author_id']	= $this->tank_auth->get_user_id();

		}

		$this->load->model('article_model');

		if (!$this->article_model->check_owner($id, $data['author_id'])){
			echo "nhot your item";
			exit();
		}

		// add a bit of URL security
		if(!is_numeric($id)){
			redirect('/', 'location');
		}
	
		// validation library: not autoloaded, so we must load this here or in a construct

		$this->load->model('article_model');

		$this->load->library('form_validation');

		$this->form_validation->set_error_delimiters('<div class="alert alert-danger">','</div>');

		$this->form_validation->set_rules('letter', 'Letter', 'required|min_length[4]');
		$this->form_validation->set_rules('description', 'Description', 'required|min_length[20]|max_length[800]');

		if($this->form_validation->run() == FALSE){ // validation not passed; either showing to user for the first time or errors
			$tmp['results'] = $this->article_model->get_letter_detail($id);
			$this->load->view('includes/header');
			$this->load->view('article_edit_view', $tmp);
			$this->load->view('includes/footer');
		}else { // validation has passed
			// echo "Scces";

			// get the info from the form; put that into the array to pass to the model
			$data['letter'] = $this->input->post('letter');
			$data['description'] = $this->input->post('description');

			// testing to see what is in the array
			// echo "<pre>";
			// print_r($data);
			// echo "</pre>";

			// $this->load->model('article_model');
			$this->article_model->edit_letter($data, $id);

			// using flashdata (part of the session library which we have autoloaded)

			// flashdata loads a session available for the next page load only
			$this->session->set_flashdata('message', 'Edit Successful');

			redirect("article/detail/$id", 'location');
			// redirect("article/edit/$id", 'location'); edit same page

		}

	} // \ edit




	public function delete($id){

		$this->load->model('article_model');
		$this->article_model->delete_row($id);

		
		redirect('article/index', 'location');
	}

	


}
