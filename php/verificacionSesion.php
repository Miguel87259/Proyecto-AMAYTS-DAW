<?php

//Verifico que sen envien los datos
if (isset($_POST['IniciarSesion'])) {
    //Verifico que los campos no vengan vacios
    if (!empty($_POST['user']) && !empty($_POST['pass'])) {

        $user = $_POST['user'];
        $pass = $_POST['pass'];

        $userAdmin = "admin";
        $passAdmin = "1234";

        $userMotorista = "motorista";
        $passMotorista = "4321";

        if ($user == $userAdmin && $pass == $passAdmin) {
            session_start();
            $_SESSION["rol"] = 'admin';
            header("Location: http://localhost:8080/PROYECTO/DashboardAdmin.php");
            exit();

        } else if ($user == $userMotorista && $pass == $passMotorista) {
            session_start();
            $_SESSION["rol"] = 'motorista';
            header("Location: http://localhost:8080/PROYECTO/DashboardUser.php");
            exit();
        }

        echo "Datos incorrectos";
        header("Location: http://localhost:8080/PROYECTO/login.html");

    } else {
        header("Location: http://localhost:8080/PROYECTO/login.html");
    }
}
?>