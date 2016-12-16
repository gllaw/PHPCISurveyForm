<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class Surveys extends CI_Controller{
	public function index(){
		$this->load->view("surveyForm");
	}

	protected $pcounter;
	public function __construct(){		//construct method happens no matter what, even if you were calling a different method further down.
		parent::__construct();
		$this->counter = $this->session->userdata('counter');
	}
	protected $view_data = array();
	public function Process_form(){
		if($this->input->post()){	//make sure info was actually submitted to increment counter.
			$this->view_data['survey_input'] = $this->input->post();
			if($this->counter){
				$this->counter++;
				$this->session->set_userdata('counter', $this->counter);
			}
			else{
				$this->session->set_userdata('counter', 1);
			}
			$this->load->view('result', $this->view_data);
		}
	}
}
?>