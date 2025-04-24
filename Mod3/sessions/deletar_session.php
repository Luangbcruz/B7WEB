<?php

//session não é recomendado em sessions
    session_start();

    $_SESSION['teste']=123;
     unset($_SESSION['Nome']);
    
?>