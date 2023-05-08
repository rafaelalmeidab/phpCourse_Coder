<?php

    session_start();
        
    if(!$_SESSION['usuario']){
        header('Location: login.php');
    }

    if($_COOKIE['usuario']){
        $_SESSION['usuario'] = $_COOKIE['usuario'];
    }