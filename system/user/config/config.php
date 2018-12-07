<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

// ExpressionEngine Config Items
// Find more configs and overrides at
// https://docs.expressionengine.com/latest/general/system_configuration_overrides.html

$config['app_version'] = '5.0.1';
$config['encryption_key'] = '82589123ab914eb61f52aa9093184fb61bf506ed';
$config['session_crypt_key'] = 'b781aa46d349ddcef99a005e1f855fbc6a2854a6';
$config['database'] = array(
	'expressionengine' => array(
		'hostname' => 'db',
		'database' => 'site',
		'username' => 'site',
		'password' => 'secret',
		'dbprefix' => 'exp_',
		'char_set' => 'utf8mb4',
		'dbcollat' => 'utf8mb4_unicode_ci',
		'port'     => ''
	),
);

// EOF
