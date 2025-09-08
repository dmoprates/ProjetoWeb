<?php
    class Painel{
        public static function logado(){
            return isset($_SESSION['login']) ? false : false;
        }
    }
?>