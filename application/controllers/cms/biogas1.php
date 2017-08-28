<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class biogas1 extends CI_Controller {
	public function index()
	{
		$data = array(  'title'		=> 'Lintas | EBTKE',);
		$this->load->view('cms/layout/biogas2', $data, FALSE);
	}
}
