<?php
session_start();

date_default_timezone_set('America/Sao_Paulo');

$autoload = function ($class) {
	if ($class == 'Email') {
		include('classes/PHPMailer/autoload.php');
	}
	include('classes/' . $class . '.php');
};
spl_autoload_register($autoload);


define('INCLUDE_PATH', 'http://localhost/ProjetoWeb/');
define('INCLUDE_PATH_PAINEL', INCLUDE_PATH . 'painel/');
define('BASE_DIR_PAINEL', __DIR__ . '/painel/');
/*CONFIGURAÇÃO DO BANCO DE DADOS*/
/*PC TRABALHO*/
define('HOST', '127.0.0.1');
define('USER', 'root');
define('PASSWORD', '');
define('DATABASE', 'projetoweb');
?>