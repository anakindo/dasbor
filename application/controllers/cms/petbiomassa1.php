<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class petbiomassa1 extends CI_Controller {
	public function index()
	{
		$data = array(  'title'		=> 'LintasEBTKE',);
		$this->load->view('cms/layout/petbiomassa2', $data, FALSE);
	}
}
