<?php defined('SYSPATH') OR die('No direct access allowed.');

return array(

	/*Uses the ORM Driver.*/
	'driver'       => 'orm',
	'hash_method'  => 'sha256',
	/*Hash Key for the Hash Method.*/
	'hash_key'     => "CpnYgVlrU6IQgVx636dxcCDVJLFyE3gOfvWMvCAM8MAZc2G3z1zzRDMjieUZ",
	'lifetime'     => 1209600,
	'session_type' => Session::$default,
	'session_key'  => 'auth_user',

	// Username/password combinations for the Auth File driver
	// 'users' => array(
	// 	// 'admin' => 'b3154acf3a344170077d11bdb5fff31532f679a1919e716a02',
	// ),

);
