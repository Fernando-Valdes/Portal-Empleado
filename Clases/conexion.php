<?php
    //Establecer conexión

    $mysqlilocal=new mysqli("192.168.1.121", "declaraciones", "TA2020Chiapas", "db_declaraciones");
    if(mysqli_connect_error())
    {
        echo 'Conexión Fallida: ', mysqli_connect_error();
        exit();
    }

    $mysqlLenovo=new mysqli("localhost", "SIAI_USER", 'ChiapasInformatica$10', "siai");
    if(mysqli_connect_error())
    {
        echo 'Conexión Fallida: ', mysqli_connect_error();
        exit();
    }

    $mysqlDell=new mysqli("192.168.1.224", "siga", 'siga&%$admvo01', "siga_administrativo");
    if(mysqli_connect_error())
    {
        echo 'Conexión Fallida: ', mysqli_connect_error();
        exit();
    }
?>