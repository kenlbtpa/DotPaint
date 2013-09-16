<?php defined('SYSPATH') or die('No direct script access.');

class Controller_User extends Controller_Template {

	public function action_index()
	{
		$this->template->content = View::factory('user/info')->bind('user', $user);
		// $this->template->content = "Fuck this shit."; 
		
		// Load the user information
		$user = Auth::instance()->get_user();
		
		// if a user is not logged in, redirect to login page
		if (!$user)
		{
			// Request::current()->redirect('user/login'); this is no kohana 3.2 code, no longer exists in kohana 3.3.
			HTTP::redirect('welcome/index');
		}
	}

	public function action_create() 
	{
		$this->template->content = View::factory('user/loginorcreate')
			->bind('errors', $errors)
			->bind('register_message', $register_message)
			->bind('login_message' , $login_message );
			
		if (HTTP_Request::POST == $this->request->method()) 
		{			
			try {
			/*
				// Create the user using form values
				$user = ORM::factory('user')->create_user($this->request->post(), array(
					'username',
					'password',
					'email'				
				));
			*/
				$user = ORM::factory('user')->create_user($this->request->post(), array(
					'username',
					'password',
					'email'				
				));
				
				// Grant user login role
				$user->add('roles', ORM::factory('role', array('name' => 'login')));
				
				// Reset values so form is not sticky
				$_POST = array();
				
				// Set success message
				$register_message = "You have added user '{$user->username}' to the database";
				
			} catch (ORM_Validation_Exception $e) {
				// Set failure message
				$register_message = 'There were errors, please see form below.';
				// $register_message = $e->getMessage(); 
				
				// Set errors using custom messages
				$errors = $e->errors('model');
			}
		}
	}
	
	public function action_login() 
	{
		$this->template->content = View::factory('user/loginorcreate')->bind('login_message', $login_message)->bind('register_message' , $register_message )->bind('errors', $errors);

		if (HTTP_Request::POST == $this->request->method()) 
		{
			// Attempt to login user
			$remember = array_key_exists('remember', $this->request->post()) ? (bool) $this->request->post('remember') : FALSE;
			$user = Auth::instance()->login($this->request->post('username'), $this->request->post('password'), $remember);
			
			// If successful, redirect user
			if ($user) 
			{
				HTTP::redirect('welcome/index');
			} 
			else 
			{
				$login_message = 'No such combination of Username and Password is found.';
			}
		}
	}

	public function action_gallery()
	{
		$this->template->content = View::factory('user/gallery'); 
		
	}
	
	public function action_logout() 
	{
		// Log user out
		Auth::instance()->logout();
		
		// Redirect to login page
		HTTP::redirect('welcome/index');
	}

}
?>