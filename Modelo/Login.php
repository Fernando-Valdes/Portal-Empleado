<?php

if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    include "../Clases/conexion.php";
    header("Content-Type: application/json");
    $array_devolver=[];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $PassEncryp = md5($email).hash('sha256', $password);


    $sql=" SELECT 
            id_usuario,
            nombre,
            paterno,
            materno,
            email,
            siglas,
            PASSWORD,
            token,
            Enlace,
            id_rol,
            rol,
            descripcion_rol,
            id_sistema,
            sistema,
            alias,
            IdPadreSistema,
            url_declaracion
            FROM bd_seguridad_sistemas.cat_usuario
            INNER JOIN bd_seguridad_sistemas.pri_usuario_rol_sistema on(pri_usuario_rol_sistema.fk_usuario = cat_usuario.id_usuario and pri_usuario_rol_sistema.activo= 1)
            INNER JOIN  bd_seguridad_sistemas.cat_sistema on(pri_usuario_rol_sistema.fk_sistema = cat_sistema.id_sistema)
            INNER JOIN bd_seguridad_sistemas.cat_rol on(pri_usuario_rol_sistema.fk_rol = cat_rol.id_rol)
            WHERE email = '$email'
            AND password = '$PassEncryp'
            AND bd_seguridad_sistemas.cat_usuario.activo = 1
            AND bd_seguridad_sistemas.cat_sistema.id_sistema = 2";


        $resultado = $mysqlLenovo->query($sql);
        $row= $resultado->fetch_assoc();

        if($row>0)
        {
            session_start();
            $_SESSION['id_usuario']=$row['id_usuario'];
            $_SESSION['nombre']=$row['nombre'];
            $_SESSION['paterno']=$row['paterno'];
            $_SESSION['materno']=$row['materno'];
            $_SESSION['email']=$row['email'];
            $_SESSION['siglas']=$row['siglas'];
            $_SESSION['PASSWORD']=$row['PASSWORD'];
            $_SESSION['token']=$row['token'];
            $_SESSION['Enlace']=$row['Enlace'];
            $_SESSION['id_rol']=$row['id_rol'];
            $_SESSION['rol']=$row['rol'];
            $_SESSION['descripcion_rol']=$row['descripcion_rol'];
            $_SESSION['id_sistema']=$row['id_sistema'];
            $_SESSION['sistema']=$row['sistema'];
            $_SESSION['alias']=$row['alias'];
            $_SESSION['url_declaracion']=$row['url_declaracion'];
            $_SESSION['IdPadreSistema']=$row['IdPadreSistema'];
            $array_devolver['redirect'] ='../view/Home/home.php';
        }else
        {
            $array_devolver['error']="Los datos que ingresó no son validos.";
        }
        echo json_encode($array_devolver);
}else
{
        //exit("!ACCESO DENEGADO¡");
        exit(header("location: ../index.php"));
}
?>
