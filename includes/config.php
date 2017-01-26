<?php

session_start();

require __DIR__. '/../vendor/autoload.php';

define('HOST', 'localhost');
define('USERNAME', 'root');
define('PASSWORD', '');
define('DATABASE', 'parking');
define('DOMAIN', 'http://localhost/parking');
define('SMTP_HOST', 'smtp.livemail.co.uk');
define('COMPANY_NAME', 'Excalibur Improvement Systems Ltd');
define('SMTP_USERNAME', 'alexe@wts-group.com');
define('SMTP_EMAIL', 'alexe@wts-group.com');
define('SMTP_PASSWORD', 'roses111!');
define('SALT', 'OmUBTgokcb4tPRLiHSlfZ793qwXMYCD1xpEyIQrWnjeFdAH5Nv02Krahus6V8zJG');
define('SESSION', 'OmUBTgokcb4tPRLiHSlfZ793qwXM');
date_default_timezone_set('Europe/London');
define('DT', date('Y-m-d H:i:s'));


$user = new App\User;
//$cartObj = new App\Cart;
$categoryObj = new App\Category;


if( !$user->uniqueId() ){

	$user->setUniqueId();

}

App\Helpers\Tools::boot();

function redirect($url, $message = null, $type = null){

	if($message){

		$message = $type == 'e' ? App\Helpers\Tools::error($message) : App\Helpers\Tools::flash($message);

	}

header('Location: '.$url); exit;

}
