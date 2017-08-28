<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class cb1 extends CI_Controller {
	public function index()
	{
		$data = array(  'title'		=> 'LintasEBTKE',);
		$this->load->view('cms/layout/cb2', $data, FALSE);
	}
}
