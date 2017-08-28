<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class plts1 extends CI_Controller {
	public function index()
	{
		$data = array(  'title'		=> 'LintasEBTKE',);
		$this->load->view('cms/layout/plts2', $data, FALSE);
	}
}
