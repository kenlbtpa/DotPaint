<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Gallery extends Controller_Template {

	public function action_index()
	{
		$this->template->content = View::factory('gallery/global')
			->bind('user', $user)
			->bind('galleryData', $galleryData);
	}

	public function action_upload()
	{
		
	}

}
?>