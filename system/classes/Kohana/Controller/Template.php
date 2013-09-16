<?php defined('SYSPATH') OR die('No direct script access.');
/**
 * Abstract controller class for automatic templating.
 *
 * @package    Kohana
 * @category   Controller
 * @author     Kohana Team
 * @copyright  (c) 2008-2012 Kohana Team
 * @license    http://kohanaframework.org/license
 */
abstract class Kohana_Controller_Template extends Controller {

	/**
	 * @var  View  page template
	 */
	public $template = 'template';

	/**
	 * @var  boolean  auto render template
	 **/
	public $auto_render = TRUE;

	/**
	 * Loads the template [View] object.
	 */
	public function before()
	{
		parent::before();

		if ($this->auto_render === TRUE)
		{
			// Load the template
			$this->template = View::factory($this->template);
			$this->template->bind('logged_status', $logged_status);
			$logged_status; 
			/*Check if User is Logged In.*/
			$user = Auth::instance()->get_user(); 
			/*User is Not Logged in.*/
			if(!$user)
			{
				$logged_status = 
              	"<li><a href='../user/login'>Login/Register</a></li>"; 
			}
			else
			{
				$logged_status = 
				"<li class = 'dropdown'> 
					<a class = 'dropdown-toggle' data-toggle='dropdown' href = '#' > $user->username <b class = 'caret' ></b> </a> 
					<ul class='dropdown-menu'>
						<li> <a href ='../user/gallery' > Your Gallery </a></li>
						<li> <a href ='#' > Profile </a></li>
						<li> <a href = '../user/logout' > Log Out </a> </li>
  					</ul>
				</li>
				"; 
			}

		}
	}

	/**
	 * Assigns the template [View] as the request response.
	 */
	public function after()
	{
		if ($this->auto_render === TRUE)
		{
			$this->response->body($this->template->render());
		}

		parent::after();
	}

}
