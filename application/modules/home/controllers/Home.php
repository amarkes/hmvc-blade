<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MX_Controller {
	
	function __construct(){
        parent::__construct();
	
    }
	
	
	public function index()
	{
		$this->load->model('home_model');
		$data = $this->home_model->index();
		$this->blade->render('home',$data);
	}
}
