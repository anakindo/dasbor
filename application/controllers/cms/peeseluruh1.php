<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class peeseluruh1 extends CI_Controller {
	public function index()
	{
		$data = array(  'title'		=> 'LintasEBTKE',);
		$this->load->view('cms/layout/peeseluruh2', $data, FALSE);
	}
}
