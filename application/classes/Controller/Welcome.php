<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Welcome extends Controller_Template {

	public function action_index()
	{
		// $this->response->body('hello, world!');
		$this->template->content = View::factory('welcome/index'); 
	}

} // End Welcome
