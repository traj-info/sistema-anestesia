<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {

	public function index()
	{
		$data = array('title' => 'Testando título');
		$this->load->view('header', $data);
		$this->load->view('menu', $data);
		$this->load->view('footer', $data);
	}
}

/* End of file main.php */
/* Location: ./application/controllers/main.php */