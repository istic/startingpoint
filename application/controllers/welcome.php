<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Welcome extends MY_Controller {

	public function index()
	{
		$this->viewdata['title'] = "Front Page";
		//$this->viewdata['subtitle'] = "";
		$this->render('welcome_message');
	}
}
