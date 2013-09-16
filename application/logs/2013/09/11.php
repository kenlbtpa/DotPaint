<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-09-11 14:47:58 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH\classes\Kohana\Cookie.php [ 151 ] in C:\wamp\www\dotpaint\system\classes\Kohana\Cookie.php:67
2013-09-11 14:47:58 --- DEBUG: #0 C:\wamp\www\dotpaint\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('_Associator_ses...', NULL)
#1 C:\wamp\www\dotpaint\system\classes\Kohana\Request.php(151): Kohana_Cookie::get('_Associator_ses...')
#2 C:\wamp\www\dotpaint\index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in C:\wamp\www\dotpaint\system\classes\Kohana\Cookie.php:67
2013-09-11 14:49:27 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH\classes\Kohana\Cookie.php [ 151 ] in C:\wamp\www\dotpaint\system\classes\Kohana\Cookie.php:67
2013-09-11 14:49:27 --- DEBUG: #0 C:\wamp\www\dotpaint\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('_Associator_ses...', NULL)
#1 C:\wamp\www\dotpaint\system\classes\Kohana\Request.php(151): Kohana_Cookie::get('_Associator_ses...')
#2 C:\wamp\www\dotpaint\index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in C:\wamp\www\dotpaint\system\classes\Kohana\Cookie.php:67
2013-09-11 14:49:30 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH\classes\Kohana\Cookie.php [ 151 ] in C:\wamp\www\dotpaint\system\classes\Kohana\Cookie.php:67
2013-09-11 14:49:30 --- DEBUG: #0 C:\wamp\www\dotpaint\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('_Associator_ses...', NULL)
#1 C:\wamp\www\dotpaint\system\classes\Kohana\Request.php(151): Kohana_Cookie::get('_Associator_ses...')
#2 C:\wamp\www\dotpaint\index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in C:\wamp\www\dotpaint\system\classes\Kohana\Cookie.php:67
2013-09-11 14:50:52 --- CRITICAL: ErrorException [ 1 ]: Access to undeclared static property: Cookie::$Salt ~ APPPATH\bootstrap.php [ 145 ] in file:line
2013-09-11 14:50:52 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-09-11 15:09:35 --- CRITICAL: View_Exception [ 0 ]: The requested view user/info could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in C:\wamp\www\dotpaint\system\classes\Kohana\View.php:137
2013-09-11 15:09:35 --- DEBUG: #0 C:\wamp\www\dotpaint\system\classes\Kohana\View.php(137): Kohana_View->set_filename('user/info')
#1 C:\wamp\www\dotpaint\system\classes\Kohana\View.php(30): Kohana_View->__construct('user/info', NULL)
#2 C:\wamp\www\dotpaint\application\classes\Controller\user.php(7): Kohana_View::factory('user/info')
#3 C:\wamp\www\dotpaint\system\classes\Kohana\Controller.php(84): Controller_User->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\dotpaint\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 C:\wamp\www\dotpaint\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\dotpaint\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\dotpaint\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\dotpaint\system\classes\Kohana\View.php:137
2013-09-11 15:10:05 --- CRITICAL: View_Exception [ 0 ]: The requested view user/info could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in C:\wamp\www\dotpaint\system\classes\Kohana\View.php:137
2013-09-11 15:10:05 --- DEBUG: #0 C:\wamp\www\dotpaint\system\classes\Kohana\View.php(137): Kohana_View->set_filename('user/info')
#1 C:\wamp\www\dotpaint\system\classes\Kohana\View.php(30): Kohana_View->__construct('user/info', NULL)
#2 C:\wamp\www\dotpaint\application\classes\Controller\user.php(7): Kohana_View::factory('user/info')
#3 C:\wamp\www\dotpaint\system\classes\Kohana\Controller.php(84): Controller_User->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\dotpaint\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 C:\wamp\www\dotpaint\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\dotpaint\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\dotpaint\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\dotpaint\system\classes\Kohana\View.php:137
2013-09-11 15:10:06 --- CRITICAL: View_Exception [ 0 ]: The requested view user/info could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in C:\wamp\www\dotpaint\system\classes\Kohana\View.php:137
2013-09-11 15:10:06 --- DEBUG: #0 C:\wamp\www\dotpaint\system\classes\Kohana\View.php(137): Kohana_View->set_filename('user/info')
#1 C:\wamp\www\dotpaint\system\classes\Kohana\View.php(30): Kohana_View->__construct('user/info', NULL)
#2 C:\wamp\www\dotpaint\application\classes\Controller\user.php(7): Kohana_View::factory('user/info')
#3 C:\wamp\www\dotpaint\system\classes\Kohana\Controller.php(84): Controller_User->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\dotpaint\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 C:\wamp\www\dotpaint\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\dotpaint\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\dotpaint\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\dotpaint\system\classes\Kohana\View.php:137
2013-09-11 15:10:07 --- CRITICAL: View_Exception [ 0 ]: The requested view user/info could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in C:\wamp\www\dotpaint\system\classes\Kohana\View.php:137
2013-09-11 15:10:07 --- DEBUG: #0 C:\wamp\www\dotpaint\system\classes\Kohana\View.php(137): Kohana_View->set_filename('user/info')
#1 C:\wamp\www\dotpaint\system\classes\Kohana\View.php(30): Kohana_View->__construct('user/info', NULL)
#2 C:\wamp\www\dotpaint\application\classes\Controller\user.php(7): Kohana_View::factory('user/info')
#3 C:\wamp\www\dotpaint\system\classes\Kohana\Controller.php(84): Controller_User->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\dotpaint\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 C:\wamp\www\dotpaint\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\dotpaint\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\dotpaint\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\dotpaint\system\classes\Kohana\View.php:137
2013-09-11 15:10:07 --- CRITICAL: View_Exception [ 0 ]: The requested view user/info could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in C:\wamp\www\dotpaint\system\classes\Kohana\View.php:137
2013-09-11 15:10:07 --- DEBUG: #0 C:\wamp\www\dotpaint\system\classes\Kohana\View.php(137): Kohana_View->set_filename('user/info')
#1 C:\wamp\www\dotpaint\system\classes\Kohana\View.php(30): Kohana_View->__construct('user/info', NULL)
#2 C:\wamp\www\dotpaint\application\classes\Controller\user.php(7): Kohana_View::factory('user/info')
#3 C:\wamp\www\dotpaint\system\classes\Kohana\Controller.php(84): Controller_User->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\dotpaint\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 C:\wamp\www\dotpaint\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\dotpaint\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\dotpaint\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\dotpaint\system\classes\Kohana\View.php:137
2013-09-11 15:10:08 --- CRITICAL: View_Exception [ 0 ]: The requested view user/info could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in C:\wamp\www\dotpaint\system\classes\Kohana\View.php:137
2013-09-11 15:10:08 --- DEBUG: #0 C:\wamp\www\dotpaint\system\classes\Kohana\View.php(137): Kohana_View->set_filename('user/info')
#1 C:\wamp\www\dotpaint\system\classes\Kohana\View.php(30): Kohana_View->__construct('user/info', NULL)
#2 C:\wamp\www\dotpaint\application\classes\Controller\user.php(7): Kohana_View::factory('user/info')
#3 C:\wamp\www\dotpaint\system\classes\Kohana\Controller.php(84): Controller_User->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\dotpaint\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 C:\wamp\www\dotpaint\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\dotpaint\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\dotpaint\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\dotpaint\system\classes\Kohana\View.php:137
2013-09-11 15:10:08 --- CRITICAL: View_Exception [ 0 ]: The requested view user/info could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in C:\wamp\www\dotpaint\system\classes\Kohana\View.php:137
2013-09-11 15:10:08 --- DEBUG: #0 C:\wamp\www\dotpaint\system\classes\Kohana\View.php(137): Kohana_View->set_filename('user/info')
#1 C:\wamp\www\dotpaint\system\classes\Kohana\View.php(30): Kohana_View->__construct('user/info', NULL)
#2 C:\wamp\www\dotpaint\application\classes\Controller\user.php(7): Kohana_View::factory('user/info')
#3 C:\wamp\www\dotpaint\system\classes\Kohana\Controller.php(84): Controller_User->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\dotpaint\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 C:\wamp\www\dotpaint\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\dotpaint\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\dotpaint\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\dotpaint\system\classes\Kohana\View.php:137
2013-09-11 15:16:27 --- CRITICAL: View_Exception [ 0 ]: The requested view user/info could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in C:\wamp\www\dotpaint\system\classes\Kohana\View.php:137
2013-09-11 15:16:27 --- DEBUG: #0 C:\wamp\www\dotpaint\system\classes\Kohana\View.php(137): Kohana_View->set_filename('user/info')
#1 C:\wamp\www\dotpaint\system\classes\Kohana\View.php(30): Kohana_View->__construct('user/info', NULL)
#2 C:\wamp\www\dotpaint\application\classes\Controller\user.php(7): Kohana_View::factory('user/info')
#3 C:\wamp\www\dotpaint\system\classes\Kohana\Controller.php(84): Controller_User->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\dotpaint\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 C:\wamp\www\dotpaint\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\dotpaint\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\dotpaint\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\dotpaint\system\classes\Kohana\View.php:137
2013-09-11 15:18:41 --- CRITICAL: View_Exception [ 0 ]: The requested view user/info could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in C:\wamp\www\dotpaint\system\classes\Kohana\View.php:137
2013-09-11 15:18:41 --- DEBUG: #0 C:\wamp\www\dotpaint\system\classes\Kohana\View.php(137): Kohana_View->set_filename('user/info')
#1 C:\wamp\www\dotpaint\system\classes\Kohana\View.php(30): Kohana_View->__construct('user/info', NULL)
#2 C:\wamp\www\dotpaint\application\classes\Controller\user.php(7): Kohana_View::factory('user/info')
#3 C:\wamp\www\dotpaint\system\classes\Kohana\Controller.php(84): Controller_User->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\dotpaint\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 C:\wamp\www\dotpaint\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\dotpaint\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\dotpaint\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\dotpaint\system\classes\Kohana\View.php:137
2013-09-11 15:18:42 --- CRITICAL: View_Exception [ 0 ]: The requested view user/info could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in C:\wamp\www\dotpaint\system\classes\Kohana\View.php:137
2013-09-11 15:18:42 --- DEBUG: #0 C:\wamp\www\dotpaint\system\classes\Kohana\View.php(137): Kohana_View->set_filename('user/info')
#1 C:\wamp\www\dotpaint\system\classes\Kohana\View.php(30): Kohana_View->__construct('user/info', NULL)
#2 C:\wamp\www\dotpaint\application\classes\Controller\user.php(7): Kohana_View::factory('user/info')
#3 C:\wamp\www\dotpaint\system\classes\Kohana\Controller.php(84): Controller_User->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\dotpaint\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 C:\wamp\www\dotpaint\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\dotpaint\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\dotpaint\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\dotpaint\system\classes\Kohana\View.php:137
2013-09-11 15:18:42 --- CRITICAL: View_Exception [ 0 ]: The requested view user/info could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in C:\wamp\www\dotpaint\system\classes\Kohana\View.php:137
2013-09-11 15:18:42 --- DEBUG: #0 C:\wamp\www\dotpaint\system\classes\Kohana\View.php(137): Kohana_View->set_filename('user/info')
#1 C:\wamp\www\dotpaint\system\classes\Kohana\View.php(30): Kohana_View->__construct('user/info', NULL)
#2 C:\wamp\www\dotpaint\application\classes\Controller\user.php(7): Kohana_View::factory('user/info')
#3 C:\wamp\www\dotpaint\system\classes\Kohana\Controller.php(84): Controller_User->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\dotpaint\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 C:\wamp\www\dotpaint\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\dotpaint\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\dotpaint\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\dotpaint\system\classes\Kohana\View.php:137
2013-09-11 15:18:42 --- CRITICAL: View_Exception [ 0 ]: The requested view user/info could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in C:\wamp\www\dotpaint\system\classes\Kohana\View.php:137
2013-09-11 15:18:42 --- DEBUG: #0 C:\wamp\www\dotpaint\system\classes\Kohana\View.php(137): Kohana_View->set_filename('user/info')
#1 C:\wamp\www\dotpaint\system\classes\Kohana\View.php(30): Kohana_View->__construct('user/info', NULL)
#2 C:\wamp\www\dotpaint\application\classes\Controller\user.php(7): Kohana_View::factory('user/info')
#3 C:\wamp\www\dotpaint\system\classes\Kohana\Controller.php(84): Controller_User->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\dotpaint\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 C:\wamp\www\dotpaint\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\dotpaint\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\dotpaint\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\dotpaint\system\classes\Kohana\View.php:137
2013-09-11 15:18:42 --- CRITICAL: View_Exception [ 0 ]: The requested view user/info could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in C:\wamp\www\dotpaint\system\classes\Kohana\View.php:137
2013-09-11 15:18:42 --- DEBUG: #0 C:\wamp\www\dotpaint\system\classes\Kohana\View.php(137): Kohana_View->set_filename('user/info')
#1 C:\wamp\www\dotpaint\system\classes\Kohana\View.php(30): Kohana_View->__construct('user/info', NULL)
#2 C:\wamp\www\dotpaint\application\classes\Controller\user.php(7): Kohana_View::factory('user/info')
#3 C:\wamp\www\dotpaint\system\classes\Kohana\Controller.php(84): Controller_User->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\dotpaint\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 C:\wamp\www\dotpaint\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\dotpaint\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\dotpaint\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\dotpaint\system\classes\Kohana\View.php:137
2013-09-11 15:18:43 --- CRITICAL: View_Exception [ 0 ]: The requested view user/info could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in C:\wamp\www\dotpaint\system\classes\Kohana\View.php:137
2013-09-11 15:18:43 --- DEBUG: #0 C:\wamp\www\dotpaint\system\classes\Kohana\View.php(137): Kohana_View->set_filename('user/info')
#1 C:\wamp\www\dotpaint\system\classes\Kohana\View.php(30): Kohana_View->__construct('user/info', NULL)
#2 C:\wamp\www\dotpaint\application\classes\Controller\user.php(7): Kohana_View::factory('user/info')
#3 C:\wamp\www\dotpaint\system\classes\Kohana\Controller.php(84): Controller_User->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\dotpaint\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 C:\wamp\www\dotpaint\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\dotpaint\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\dotpaint\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\dotpaint\system\classes\Kohana\View.php:137
2013-09-11 15:18:43 --- CRITICAL: View_Exception [ 0 ]: The requested view user/info could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in C:\wamp\www\dotpaint\system\classes\Kohana\View.php:137
2013-09-11 15:18:43 --- DEBUG: #0 C:\wamp\www\dotpaint\system\classes\Kohana\View.php(137): Kohana_View->set_filename('user/info')
#1 C:\wamp\www\dotpaint\system\classes\Kohana\View.php(30): Kohana_View->__construct('user/info', NULL)
#2 C:\wamp\www\dotpaint\application\classes\Controller\user.php(7): Kohana_View::factory('user/info')
#3 C:\wamp\www\dotpaint\system\classes\Kohana\Controller.php(84): Controller_User->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\dotpaint\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 C:\wamp\www\dotpaint\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\dotpaint\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\dotpaint\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\dotpaint\system\classes\Kohana\View.php:137
2013-09-11 15:18:59 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH\classes\Controller\user.php [ 16 ] in file:line
2013-09-11 15:18:59 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line