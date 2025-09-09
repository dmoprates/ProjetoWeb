<?php

session_start();

$autoload = function ($class) {
    if($class== 'Email'){
        include('classes/PHPMailer/autoload.php');
    }
    include('classes/'.$class.'.php');
};
spl_autoload_register($autoload);

define('INCLUDE_PATH', 'http://localhost/ProjetoWeb/');
define('INCLUDE_PATH_PAINEL', INCLUDE_PATH.'painel/');
/*CONFIGURAÇÃO DO BANCO DE DADOS*/
/*PC TRABALHO*/
define('HOST', '127.0.0.1');
define('USER', 'root');
define('PASSWORD', '');
define('DATABASE', 'projetoweb');
/*PC pessoal*/
/*
define('HOST', 'xxxxxx');
define('USER', 'xxxxx');
define('PASSWORD', 'xxxxx');
define('DATABASE', 'xxxxx');
*/

//CONSTANTES PARA PAINEL DE CONTROLE
$nomeEmpresa = 'AtionDev';

//FUNÇÕES
function pegaCargo($cargo){
    $arr = [
        '0' => 'Normal',
        '1' => 'Sub-Administrador',
        '2' => 'Administrador'
    ];
    return $arr[$cargo];
}

?>