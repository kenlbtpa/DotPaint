<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-09-15 00:35:35 --- CRITICAL: Database_Exception [ 2 ]: mysql_connect() [function.mysql-connect]: Access denied for user ''@'localhost' (using password: NO) ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 67 ] in C:\wamp\www\dotpaint\modules\database\classes\Kohana\Database\MySQL.php:171
2013-09-15 00:35:35 --- DEBUG: #0 C:\wamp\www\dotpaint\modules\database\classes\Kohana\Database\MySQL.php(171): Kohana_Database_MySQL->connect()
#1 C:\wamp\www\dotpaint\modules\database\classes\Kohana\Database\MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 C:\wamp\www\dotpaint\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQL->list_columns('users')
#3 C:\wamp\www\dotpaint\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#4 C:\wamp\www\dotpaint\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#5 C:\wamp\www\dotpaint\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#6 C:\wamp\www\dotpaint\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(NULL)
#7 C:\wamp\www\dotpaint\modules\orm\classes\Kohana\Auth\ORM.php(79): Kohana_ORM::factory('User')
#8 C:\wamp\www\dotpaint\modules\auth\classes\Kohana\Auth.php(92): Kohana_Auth_ORM->_login('asdf', 'adf', false)
#9 C:\wamp\www\dotpaint\application\classes\Controller\user.php(66): Kohana_Auth->login('asdf', 'adf', false)
#10 C:\wamp\www\dotpaint\system\classes\Kohana\Controller.php(84): Controller_User->action_login()
#11 [internal function]: Kohana_Controller->execute()
#12 C:\wamp\www\dotpaint\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#13 C:\wamp\www\dotpaint\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 C:\wamp\www\dotpaint\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#15 C:\wamp\www\dotpaint\index.php(118): Kohana_Request->execute()
#16 {main} in C:\wamp\www\dotpaint\modules\database\classes\Kohana\Database\MySQL.php:171
2013-09-15 00:37:02 --- CRITICAL: Database_Exception [ 2 ]: mysql_connect() [function.mysql-connect]: Access denied for user ''@'localhost' (using password: NO) ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 67 ] in C:\wamp\www\dotpaint\modules\database\classes\Kohana\Database\MySQL.php:171
2013-09-15 00:37:02 --- DEBUG: #0 C:\wamp\www\dotpaint\modules\database\classes\Kohana\Database\MySQL.php(171): Kohana_Database_MySQL->connect()
#1 C:\wamp\www\dotpaint\modules\database\classes\Kohana\Database\MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 C:\wamp\www\dotpaint\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQL->list_columns('users')
#3 C:\wamp\www\dotpaint\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#4 C:\wamp\www\dotpaint\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#5 C:\wamp\www\dotpaint\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#6 C:\wamp\www\dotpaint\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(NULL)
#7 C:\wamp\www\dotpaint\modules\orm\classes\Kohana\Auth\ORM.php(79): Kohana_ORM::factory('User')
#8 C:\wamp\www\dotpaint\modules\auth\classes\Kohana\Auth.php(92): Kohana_Auth_ORM->_login('asdf', 'adf', false)
#9 C:\wamp\www\dotpaint\application\classes\Controller\user.php(66): Kohana_Auth->login('asdf', 'adf', false)
#10 C:\wamp\www\dotpaint\system\classes\Kohana\Controller.php(84): Controller_User->action_login()
#11 [internal function]: Kohana_Controller->execute()
#12 C:\wamp\www\dotpaint\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#13 C:\wamp\www\dotpaint\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 C:\wamp\www\dotpaint\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#15 C:\wamp\www\dotpaint\index.php(118): Kohana_Request->execute()
#16 {main} in C:\wamp\www\dotpaint\modules\database\classes\Kohana\Database\MySQL.php:171
2013-09-15 00:37:05 --- CRITICAL: Database_Exception [ 2 ]: mysql_connect() [function.mysql-connect]: Access denied for user ''@'localhost' (using password: NO) ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 67 ] in C:\wamp\www\dotpaint\modules\database\classes\Kohana\Database\MySQL.php:171
2013-09-15 00:37:05 --- DEBUG: #0 C:\wamp\www\dotpaint\modules\database\classes\Kohana\Database\MySQL.php(171): Kohana_Database_MySQL->connect()
#1 C:\wamp\www\dotpaint\modules\database\classes\Kohana\Database\MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 C:\wamp\www\dotpaint\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQL->list_columns('users')
#3 C:\wamp\www\dotpaint\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#4 C:\wamp\www\dotpaint\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#5 C:\wamp\www\dotpaint\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#6 C:\wamp\www\dotpaint\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(NULL)
#7 C:\wamp\www\dotpaint\modules\orm\classes\Kohana\Auth\ORM.php(79): Kohana_ORM::factory('User')
#8 C:\wamp\www\dotpaint\modules\auth\classes\Kohana\Auth.php(92): Kohana_Auth_ORM->_login('asdf', 'adf', false)
#9 C:\wamp\www\dotpaint\application\classes\Controller\user.php(66): Kohana_Auth->login('asdf', 'adf', false)
#10 C:\wamp\www\dotpaint\system\classes\Kohana\Controller.php(84): Controller_User->action_login()
#11 [internal function]: Kohana_Controller->execute()
#12 C:\wamp\www\dotpaint\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#13 C:\wamp\www\dotpaint\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 C:\wamp\www\dotpaint\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#15 C:\wamp\www\dotpaint\index.php(118): Kohana_Request->execute()
#16 {main} in C:\wamp\www\dotpaint\modules\database\classes\Kohana\Database\MySQL.php:171
2013-09-15 00:42:34 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: login_message ~ APPPATH\views\user\loginorcreate.php [ 18 ] in C:\wamp\www\dotpaint\application\views\user\loginorcreate.php:18
2013-09-15 00:42:34 --- DEBUG: #0 C:\wamp\www\dotpaint\application\views\user\loginorcreate.php(18): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\dot...', 18, Array)
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
#14 {main} in C:\wamp\www\dotpaint\application\views\user\loginorcreate.php:18
2013-09-15 00:44:30 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: login_message ~ APPPATH\views\user\loginorcreate.php [ 18 ] in C:\wamp\www\dotpaint\application\views\user\loginorcreate.php:18
2013-09-15 00:44:30 --- DEBUG: #0 C:\wamp\www\dotpaint\application\views\user\loginorcreate.php(18): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\dot...', 18, Array)
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
#14 {main} in C:\wamp\www\dotpaint\application\views\user\loginorcreate.php:18
2013-09-15 01:19:27 --- CRITICAL: ErrorException [ 1 ]: Cannot access protected property ORM_Validation_Exception::$message ~ APPPATH\classes\Controller\user.php [ 52 ] in file:line
2013-09-15 01:19:27 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-09-15 11:06:12 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: errors ~ APPPATH\views\user\loginorcreate.php [ 46 ] in C:\wamp\www\dotpaint\application\views\user\loginorcreate.php:46
2013-09-15 11:06:12 --- DEBUG: #0 C:\wamp\www\dotpaint\application\views\user\loginorcreate.php(46): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\dot...', 46, Array)
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
#14 {main} in C:\wamp\www\dotpaint\application\views\user\loginorcreate.php:46
2013-09-15 11:06:13 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_User::create_user() ~ APPPATH\classes\Controller\user.php [ 33 ] in file:line
2013-09-15 11:06:13 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-09-15 11:30:49 --- CRITICAL: ErrorException [ 1 ]: Class 'User' not found ~ APPPATH\classes\Controller\user.php [ 39 ] in file:line
2013-09-15 11:30:49 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-09-15 11:31:01 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR, expecting T_STRING or T_VARIABLE or '$' ~ APPPATH\classes\Controller\user.php [ 39 ] in file:line
2013-09-15 11:31:01 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-09-15 11:31:11 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_User::create_user() ~ APPPATH\classes\Controller\user.php [ 39 ] in file:line
2013-09-15 11:31:11 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-09-15 11:31:32 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_User::create_user() ~ APPPATH\classes\Controller\user.php [ 39 ] in file:line
2013-09-15 11:31:32 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-09-15 11:32:03 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_user' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2013-09-15 11:32:03 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-09-15 11:32:18 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_user' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2013-09-15 11:32:18 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-09-15 12:28:31 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_user' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2013-09-15 12:28:31 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-09-15 12:34:05 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ';', expecting T_FUNCTION ~ APPPATH\classes\Model\user.php [ 27 ] in file:line
2013-09-15 12:34:05 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-09-15 12:34:34 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ';', expecting T_FUNCTION ~ APPPATH\classes\Model\user.php [ 25 ] in file:line
2013-09-15 12:34:34 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-09-15 12:34:42 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_User::create_user() ~ APPPATH\classes\Controller\user.php [ 39 ] in file:line
2013-09-15 12:34:42 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-09-15 12:35:19 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_User::create_user() ~ APPPATH\classes\Controller\user.php [ 39 ] in file:line
2013-09-15 12:35:19 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-09-15 12:36:44 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_User::get_password_validation() ~ APPPATH\classes\Model\user.php [ 29 ] in file:line
2013-09-15 12:36:44 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-09-15 12:37:27 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_User' not found ~ APPPATH\classes\Model\user.php [ 3 ] in file:line
2013-09-15 12:37:27 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-09-15 13:21:39 --- CRITICAL: ErrorException [ 2 ]: call_user_func_array() expects parameter 1 to be a valid callback, no array or string given ~ SYSPATH\classes\Kohana\Validation.php [ 383 ] in file:line
2013-09-15 13:21:39 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'call_user_func_...', 'C:\wamp\www\dot...', 383, Array)
#1 C:\wamp\www\dotpaint\system\classes\Kohana\Validation.php(383): call_user_func_array(NULL, Array)
#2 C:\wamp\www\dotpaint\modules\orm\classes\Kohana\ORM.php(1273): Kohana_Validation->check()
#3 C:\wamp\www\dotpaint\modules\orm\classes\Kohana\ORM.php(1302): Kohana_ORM->check(Object(Validation))
#4 C:\wamp\www\dotpaint\modules\orm\classes\Model\Auth\User.php(167): Kohana_ORM->create(Object(Validation))
#5 C:\wamp\www\dotpaint\application\classes\Controller\user.php(43): Model_Auth_User->create_user(Array, Array)
#6 C:\wamp\www\dotpaint\system\classes\Kohana\Controller.php(84): Controller_User->action_create()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\wamp\www\dotpaint\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#9 C:\wamp\www\dotpaint\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\wamp\www\dotpaint\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 C:\wamp\www\dotpaint\index.php(118): Kohana_Request->execute()
#12 {main} in file:line
2013-09-15 14:39:08 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH\classes\Controller\user.php [ 80 ] in file:line
2013-09-15 14:39:08 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-09-15 14:52:55 --- CRITICAL: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH\classes\Controller\Welcome.php [ 8 ] in C:\wamp\www\dotpaint\application\classes\Controller\Welcome.php:8
2013-09-15 14:52:55 --- DEBUG: #0 C:\wamp\www\dotpaint\application\classes\Controller\Welcome.php(8): Kohana_Core::error_handler(2048, 'Creating defaul...', 'C:\wamp\www\dot...', 8, Array)
#1 C:\wamp\www\dotpaint\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\dotpaint\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 C:\wamp\www\dotpaint\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\dotpaint\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\dotpaint\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\dotpaint\application\classes\Controller\Welcome.php:8
2013-09-15 15:10:33 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: errors ~ APPPATH\views\user\loginorcreate.php [ 46 ] in C:\wamp\www\dotpaint\application\views\user\loginorcreate.php:46
2013-09-15 15:10:33 --- DEBUG: #0 C:\wamp\www\dotpaint\application\views\user\loginorcreate.php(46): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\dot...', 46, Array)
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
#14 {main} in C:\wamp\www\dotpaint\application\views\user\loginorcreate.php:46
2013-09-15 16:13:31 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: errors ~ APPPATH\views\user\loginorcreate.php [ 46 ] in C:\wamp\www\dotpaint\application\views\user\loginorcreate.php:46
2013-09-15 16:13:31 --- DEBUG: #0 C:\wamp\www\dotpaint\application\views\user\loginorcreate.php(46): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\dot...', 46, Array)
#1 C:\wamp\www\dotpaint\system\classes\Kohana\View.php(61): include('C:\wamp\www\dot...')
#2 C:\wamp\www\dotpaint\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\dot...', Array)
#3 C:\wamp\www\dotpaint\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\wamp\www\dotpaint\application\views\template.php(65): Kohana_View->__toString()
#5 C:\wamp\www\dotpaint\system\classes\Kohana\View.php(61): include('C:\wamp\www\dot...')
#6 C:\wamp\www\dotpaint\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\dot...', Array)
#7 C:\wamp\www\dotpaint\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\wamp\www\dotpaint\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\wamp\www\dotpaint\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#11 C:\wamp\www\dotpaint\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\wamp\www\dotpaint\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 C:\wamp\www\dotpaint\index.php(118): Kohana_Request->execute()
#14 {main} in C:\wamp\www\dotpaint\application\views\user\loginorcreate.php:46
2013-09-15 16:21:05 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: errors ~ APPPATH\views\user\loginorcreate.php [ 46 ] in C:\wamp\www\dotpaint\application\views\user\loginorcreate.php:46
2013-09-15 16:21:05 --- DEBUG: #0 C:\wamp\www\dotpaint\application\views\user\loginorcreate.php(46): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\dot...', 46, Array)
#1 C:\wamp\www\dotpaint\system\classes\Kohana\View.php(61): include('C:\wamp\www\dot...')
#2 C:\wamp\www\dotpaint\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\dot...', Array)
#3 C:\wamp\www\dotpaint\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\wamp\www\dotpaint\application\views\template.php(65): Kohana_View->__toString()
#5 C:\wamp\www\dotpaint\system\classes\Kohana\View.php(61): include('C:\wamp\www\dot...')
#6 C:\wamp\www\dotpaint\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\dot...', Array)
#7 C:\wamp\www\dotpaint\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\wamp\www\dotpaint\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\wamp\www\dotpaint\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#11 C:\wamp\www\dotpaint\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\wamp\www\dotpaint\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 C:\wamp\www\dotpaint\index.php(118): Kohana_Request->execute()
#14 {main} in C:\wamp\www\dotpaint\application\views\user\loginorcreate.php:46
2013-09-15 16:21:33 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: errors ~ APPPATH\views\user\loginorcreate.php [ 46 ] in C:\wamp\www\dotpaint\application\views\user\loginorcreate.php:46
2013-09-15 16:21:33 --- DEBUG: #0 C:\wamp\www\dotpaint\application\views\user\loginorcreate.php(46): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\dot...', 46, Array)
#1 C:\wamp\www\dotpaint\system\classes\Kohana\View.php(61): include('C:\wamp\www\dot...')
#2 C:\wamp\www\dotpaint\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\dot...', Array)
#3 C:\wamp\www\dotpaint\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\wamp\www\dotpaint\application\views\template.php(65): Kohana_View->__toString()
#5 C:\wamp\www\dotpaint\system\classes\Kohana\View.php(61): include('C:\wamp\www\dot...')
#6 C:\wamp\www\dotpaint\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\dot...', Array)
#7 C:\wamp\www\dotpaint\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\wamp\www\dotpaint\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\wamp\www\dotpaint\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#11 C:\wamp\www\dotpaint\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\wamp\www\dotpaint\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 C:\wamp\www\dotpaint\index.php(118): Kohana_Request->execute()
#14 {main} in C:\wamp\www\dotpaint\application\views\user\loginorcreate.php:46
2013-09-15 16:45:18 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE, expecting T_FUNCTION ~ SYSPATH\classes\Controller\Template.php [ 4 ] in file:line
2013-09-15 16:45:18 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-09-15 16:45:51 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE, expecting T_FUNCTION ~ SYSPATH\classes\Controller\Template.php [ 4 ] in file:line
2013-09-15 16:45:51 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-09-15 16:45:53 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE, expecting T_FUNCTION ~ SYSPATH\classes\Controller\Template.php [ 4 ] in file:line
2013-09-15 16:45:53 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-09-15 16:45:53 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE, expecting T_FUNCTION ~ SYSPATH\classes\Controller\Template.php [ 4 ] in file:line
2013-09-15 16:45:53 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-09-15 16:45:54 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE, expecting T_FUNCTION ~ SYSPATH\classes\Controller\Template.php [ 4 ] in file:line
2013-09-15 16:45:54 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-09-15 16:45:57 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE, expecting T_FUNCTION ~ SYSPATH\classes\Controller\Template.php [ 4 ] in file:line
2013-09-15 16:45:57 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-09-15 16:45:58 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE, expecting T_FUNCTION ~ SYSPATH\classes\Controller\Template.php [ 4 ] in file:line
2013-09-15 16:45:58 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-09-15 16:46:03 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: logged_status ~ APPPATH\views\template.php [ 48 ] in C:\wamp\www\dotpaint\application\views\template.php:48
2013-09-15 16:46:03 --- DEBUG: #0 C:\wamp\www\dotpaint\application\views\template.php(48): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\dot...', 48, Array)
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
2013-09-15 16:48:01 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE, expecting T_FUNCTION ~ SYSPATH\classes\Kohana\Controller\Template.php [ 18 ] in file:line
2013-09-15 16:48:01 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-09-15 16:48:24 --- CRITICAL: ErrorException [ 1 ]: Cannot pass parameter 2 by reference ~ SYSPATH\classes\Kohana\Controller\Template.php [ 34 ] in file:line
2013-09-15 16:48:24 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-09-15 17:02:38 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_STRING ~ SYSPATH\classes\Kohana\Controller\Template.php [ 48 ] in file:line
2013-09-15 17:02:38 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-09-15 20:32:21 --- CRITICAL: View_Exception [ 0 ]: The requested view gallery/display could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in C:\wamp\www\dotpaint\system\classes\Kohana\View.php:137
2013-09-15 20:32:21 --- DEBUG: #0 C:\wamp\www\dotpaint\system\classes\Kohana\View.php(137): Kohana_View->set_filename('gallery/display')
#1 C:\wamp\www\dotpaint\system\classes\Kohana\View.php(30): Kohana_View->__construct('gallery/display', NULL)
#2 C:\wamp\www\dotpaint\application\classes\Controller\gallery.php(7): Kohana_View::factory('gallery/display')
#3 C:\wamp\www\dotpaint\system\classes\Kohana\Controller.php(84): Controller_Gallery->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\dotpaint\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Gallery))
#6 C:\wamp\www\dotpaint\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\dotpaint\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\dotpaint\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\dotpaint\system\classes\Kohana\View.php:137
2013-09-15 20:34:23 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: login_message ~ APPPATH\views\gallery\global.php [ 18 ] in C:\wamp\www\dotpaint\application\views\gallery\global.php:18
2013-09-15 20:34:23 --- DEBUG: #0 C:\wamp\www\dotpaint\application\views\gallery\global.php(18): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\dot...', 18, Array)
#1 C:\wamp\www\dotpaint\system\classes\Kohana\View.php(61): include('C:\wamp\www\dot...')
#2 C:\wamp\www\dotpaint\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\dot...', Array)
#3 C:\wamp\www\dotpaint\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\wamp\www\dotpaint\application\views\template.php(82): Kohana_View->__toString()
#5 C:\wamp\www\dotpaint\system\classes\Kohana\View.php(61): include('C:\wamp\www\dot...')
#6 C:\wamp\www\dotpaint\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\dot...', Array)
#7 C:\wamp\www\dotpaint\system\classes\Kohana\Controller\Template.php(67): Kohana_View->render()
#8 C:\wamp\www\dotpaint\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\wamp\www\dotpaint\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Gallery))
#11 C:\wamp\www\dotpaint\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\wamp\www\dotpaint\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 C:\wamp\www\dotpaint\index.php(118): Kohana_Request->execute()
#14 {main} in C:\wamp\www\dotpaint\application\views\gallery\global.php:18
2013-09-15 21:52:12 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: galleryData ~ APPPATH\views\gallery\global.php [ 26 ] in C:\wamp\www\dotpaint\application\views\gallery\global.php:26
2013-09-15 21:52:12 --- DEBUG: #0 C:\wamp\www\dotpaint\application\views\gallery\global.php(26): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\dot...', 26, Array)
#1 C:\wamp\www\dotpaint\system\classes\Kohana\View.php(61): include('C:\wamp\www\dot...')
#2 C:\wamp\www\dotpaint\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\dot...', Array)
#3 C:\wamp\www\dotpaint\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\wamp\www\dotpaint\application\views\template.php(83): Kohana_View->__toString()
#5 C:\wamp\www\dotpaint\system\classes\Kohana\View.php(61): include('C:\wamp\www\dot...')
#6 C:\wamp\www\dotpaint\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\dot...', Array)
#7 C:\wamp\www\dotpaint\system\classes\Kohana\Controller\Template.php(67): Kohana_View->render()
#8 C:\wamp\www\dotpaint\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\wamp\www\dotpaint\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Gallery))
#11 C:\wamp\www\dotpaint\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\wamp\www\dotpaint\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 C:\wamp\www\dotpaint\index.php(118): Kohana_Request->execute()
#14 {main} in C:\wamp\www\dotpaint\application\views\gallery\global.php:26