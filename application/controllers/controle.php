<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Controle extends CI_Controller {

	public function index()
	{
		$this->load->view('menu');
	}
}

