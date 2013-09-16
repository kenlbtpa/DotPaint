<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-09-14 15:31:34 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH\classes\Controller\user.php [ 16 ] in file:line
2013-09-14 15:31:34 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-09-14 15:34:53 --- CRITICAL: View_Exception [ 0 ]: The requested view user/info could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in C:\wamp\www\dotpaint\system\classes\Kohana\View.php:137
2013-09-14 15:34:53 --- DEBUG: #0 C:\wamp\www\dotpaint\system\classes\Kohana\View.php(137): Kohana_View->set_filename('user/info')
#1 C:\wamp\www\dotpaint\system\classes\Kohana\View.php(30): Kohana_View->__construct('user/info', NULL)
#2 C:\wamp\www\dotpaint\application\classes\Controller\user.php(7): Kohana_View::factory('user/info')
#3 C:\wamp\www\dotpaint\system\classes\Kohana\Controller.php(84): Controller_User->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\dotpaint\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 C:\wamp\www\dotpaint\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\dotpaint\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\dotpaint\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\dotpaint\system\classes\Kohana\View.php:137
2013-09-14 15:35:28 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH\classes\Controller\user.php [ 16 ] in file:line
2013-09-14 15:35:28 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-09-14 15:35:46 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH\classes\Controller\user.php [ 16 ] in file:line
2013-09-14 15:35:46 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-09-14 15:37:34 --- CRITICAL: View_Exception [ 0 ]: The requested view users/login could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in C:\wamp\www\dotpaint\system\classes\Kohana\View.php:137
2013-09-14 15:37:34 --- DEBUG: #0 C:\wamp\www\dotpaint\system\classes\Kohana\View.php(137): Kohana_View->set_filename('users/login')
#1 C:\wamp\www\dotpaint\system\classes\Kohana\View.php(30): Kohana_View->__construct('users/login', NULL)
#2 C:\wamp\www\dotpaint\application\classes\Controller\user.php(60): Kohana_View::factory('users/login')
#3 C:\wamp\www\dotpaint\system\classes\Kohana\Controller.php(84): Controller_User->action_login()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\dotpaint\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 C:\wamp\www\dotpaint\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\dotpaint\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\dotpaint\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\dotpaint\system\classes\Kohana\View.php:137
2013-09-14 15:41:31 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '=' ~ APPPATH\views\template.php [ 24 ] in file:line
2013-09-14 15:41:31 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-09-14 15:46:20 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_IF ~ APPPATH\classes\Controller\user.php [ 62 ] in file:line
2013-09-14 15:46:20 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-09-14 17:42:31 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: logged_status ~ APPPATH\views\template.php [ 48 ] in C:\wamp\www\dotpaint\application\views\template.php:48
2013-09-14 17:42:31 --- DEBUG: #0 C:\wamp\www\dotpaint\application\views\template.php(48): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\dot...', 48, Array)
#1 C:\wamp\www\dotpaint\system\classes\Kohana\View.php(61): include('C:\wamp\www\dot...')
#2 C:\wamp\www\dotpaint\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\dot...', Array)
#3 C:\wamp\www\dotpaint\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\wamp\www\dotpaint\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\dotpaint\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#7 C:\wamp\www\dotpaint\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\dotpaint\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\dotpaint\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\dotpaint\application\views\template.php:48
2013-09-14 17:42:38 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: logged_status ~ APPPATH\views\template.php [ 48 ] in C:\wamp\www\dotpaint\application\views\template.php:48
2013-09-14 17:42:38 --- DEBUG: #0 C:\wamp\www\dotpaint\application\views\template.php(48): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\dot...', 48, Array)
#1 C:\wamp\www\dotpaint\system\classes\Kohana\View.php(61): include('C:\wamp\www\dot...')
#2 C:\wamp\www\dotpaint\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\dot...', Array)
#3 C:\wamp\www\dotpaint\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\wamp\www\dotpaint\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\dotpaint\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#7 C:\wamp\www\dotpaint\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\dotpaint\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\dotpaint\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\dotpaint\application\views\template.php:48
2013-09-14 17:43:04 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: logged_status ~ APPPATH\views\template.php [ 48 ] in C:\wamp\www\dotpaint\application\views\template.php:48
2013-09-14 17:43:04 --- DEBUG: #0 C:\wamp\www\dotpaint\application\views\template.php(48): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\dot...', 48, Array)
#1 C:\wamp\www\dotpaint\system\classes\Kohana\View.php(61): include('C:\wamp\www\dot...')
#2 C:\wamp\www\dotpaint\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\dot...', Array)
#3 C:\wamp\www\dotpaint\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\wamp\www\dotpaint\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\dotpaint\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#7 C:\wamp\www\dotpaint\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\dotpaint\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\dotpaint\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\dotpaint\application\views\template.php:48
2013-09-14 17:43:12 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE, expecting T_FUNCTION ~ APPPATH\classes\Controller\user.php [ 5 ] in file:line
2013-09-14 17:43:12 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-09-14 17:43:16 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE, expecting T_FUNCTION ~ APPPATH\classes\Controller\user.php [ 5 ] in file:line
2013-09-14 17:43:16 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-09-14 17:43:24 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR, expecting ',' or ';' ~ APPPATH\classes\Controller\user.php [ 5 ] in file:line
2013-09-14 17:43:24 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-09-14 17:43:41 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_GLOBAL, expecting T_FUNCTION ~ APPPATH\classes\Controller\user.php [ 5 ] in file:line
2013-09-14 17:43:41 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-09-14 17:43:42 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_GLOBAL, expecting T_FUNCTION ~ APPPATH\classes\Controller\user.php [ 5 ] in file:line
2013-09-14 17:43:42 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-09-14 17:43:44 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_GLOBAL, expecting T_FUNCTION ~ APPPATH\classes\Controller\user.php [ 5 ] in file:line
2013-09-14 17:43:44 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-09-14 17:43:44 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_GLOBAL, expecting T_FUNCTION ~ APPPATH\classes\Controller\user.php [ 5 ] in file:line
2013-09-14 17:43:44 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-09-14 17:43:44 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_GLOBAL, expecting T_FUNCTION ~ APPPATH\classes\Controller\user.php [ 5 ] in file:line
2013-09-14 17:43:44 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-09-14 17:43:45 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_GLOBAL, expecting T_FUNCTION ~ APPPATH\classes\Controller\user.php [ 5 ] in file:line
2013-09-14 17:43:45 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-09-14 17:45:17 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_GLOBAL, expecting T_FUNCTION ~ APPPATH\classes\Controller\user.php [ 5 ] in file:line
2013-09-14 17:45:17 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-09-14 17:45:18 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_GLOBAL, expecting T_FUNCTION ~ APPPATH\classes\Controller\user.php [ 5 ] in file:line
2013-09-14 17:45:18 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-09-14 20:10:59 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '[', expecting ')' ~ APPPATH\views\user\loginorcreate.php [ 39 ] in file:line
2013-09-14 20:10:59 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-09-14 20:11:15 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '[', expecting ')' ~ APPPATH\views\user\loginorcreate.php [ 39 ] in file:line
2013-09-14 20:11:15 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-09-14 20:11:25 --- CRITICAL: ErrorException [ 2 ]: strpos() expects parameter 1 to be string, array given ~ SYSPATH\classes\Kohana\Form.php [ 48 ] in file:line
2013-09-14 20:11:25 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'strpos() expect...', 'C:\wamp\www\dot...', 48, Array)
#1 C:\wamp\www\dotpaint\system\classes\Kohana\Form.php(48): strpos(Array, '://')
#2 C:\wamp\www\dotpaint\application\views\user\loginorcreate.php(39): Kohana_Form::open(Array)
#3 C:\wamp\www\dotpaint\system\classes\Kohana\View.php(61): include('C:\wamp\www\dot...')
#4 C:\wamp\www\dotpaint\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\dot...', Array)
#5 C:\wamp\www\dotpaint\system\classes\Kohana\View.php(228): Kohana_View->render()
#6 C:\wamp\www\dotpaint\application\views\template.php(66): Kohana_View->__toString()
#7 C:\wamp\www\dotpaint\system\classes\Kohana\View.php(61): include('C:\wamp\www\dot...')
#8 C:\wamp\www\dotpaint\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\dot...', Array)
#9 C:\wamp\www\dotpaint\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#10 C:\wamp\www\dotpaint\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#11 [internal function]: Kohana_Controller->execute()
#12 C:\wamp\www\dotpaint\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#13 C:\wamp\www\dotpaint\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 C:\wamp\www\dotpaint\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#15 C:\wamp\www\dotpaint\index.php(118): Kohana_Request->execute()
#16 {main} in file:line
2013-09-14 20:30:22 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_ECHO ~ APPPATH\views\user\loginorcreate.php [ 21 ] in file:line
2013-09-14 20:30:22 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-09-14 20:35:04 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_STRING, expecting ')' ~ APPPATH\views\user\loginorcreate.php [ 23 ] in file:line
2013-09-14 20:35:04 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-09-14 20:56:07 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_ECHO, expecting ',' or ';' ~ APPPATH\views\user\loginorcreate.php [ 22 ] in file:line
2013-09-14 20:56:07 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-09-14 21:13:22 --- CRITICAL: ErrorException [ 8 ]: Use of undefined constant checkString - assumed 'checkString' ~ APPPATH\views\user\loginorcreate.php [ 30 ] in C:\wamp\www\dotpaint\application\views\user\loginorcreate.php:30
2013-09-14 21:13:22 --- DEBUG: #0 C:\wamp\www\dotpaint\application\views\user\loginorcreate.php(30): Kohana_Core::error_handler(8, 'Use of undefine...', 'C:\wamp\www\dot...', 30, Array)
#1 C:\wamp\www\dotpaint\system\classes\Kohana\View.php(61): include('C:\wamp\www\dot...')
#2 C:\wamp\www\dotpaint\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\dot...', Array)
#3 C:\wamp\www\dotpaint\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\wamp\www\dotpaint\application\views\template.php(66): Kohana_View->__toString()
#5 C:\wamp\www\dotpaint\system\classes\Kohana\View.php(61): include('C:\wamp\www\dot...')
#6 C:\wamp\www\dotpaint\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\dot...', Array)
#7 C:\wamp\www\dotpaint\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\wamp\www\dotpaint\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\wamp\www\dotpaint\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#11 C:\wamp\www\dotpaint\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\wamp\www\dotpaint\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 C:\wamp\www\dotpaint\index.php(118): Kohana_Request->execute()
#14 {main} in C:\wamp\www\dotpaint\application\views\user\loginorcreate.php:30