<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class peesektortransportasi1 extends CI_Controller {
	public function index()
	{
		$data = array(  'title'		=> 'LintasEBTKE',);
		$this->load->view('cms/layout/peesektortransportasi2', $data, FALSE);
	}
}
