<?php
if(!isset($_SESSION)) { 
    session_start(); 
}
if(!$_SESSION['nome']) {
	header('Location: entrar.php');
	exit();
}