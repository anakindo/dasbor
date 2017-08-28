<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ta1 extends CI_Controller {
	public function index()
	{
		$data = array(  'title'		=> 'LintasEBTKE',);
		$this->load->view('cms/layout/ta2', $data, FALSE);
	}
}
