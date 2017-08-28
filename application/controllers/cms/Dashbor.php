<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashbor extends CI_Controller {
	public function index()
	{
		$data = array(  'title'		=> 'LintasEBTKE',
						'isi'		=> 'cms/dashbor/list');
		$this->load->view('cms/layout/wrapper', $data, FALSE);
	}
}
