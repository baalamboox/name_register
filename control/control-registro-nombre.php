<?php
    session_start();
    require_once '../app/conexion.php';
    $_SESSION['db'] = $_POST['db'];
    switch($_POST['db']) {
        case 1: {
            $conexion = conexion_db1();
            $nombres = $_POST['nombres'];
            $sql = "INSERT INTO tabla_usuarios(nombres_usuario) VALUES(?)";
            $query = $conexion->prepare($sql);
            $query->bind_param('s', $nombres);
            $query_executed = $query->execute();
            $query->close();
            echo $query_executed;
            break;
        }
        case 2: {
            $conexion = conexion_db2();
            $nombres = $_POST['nombres'];
            $sql = "INSERT INTO tabla_usuarios(nombres_usuario) VALUES(?)";
            $query = $conexion->prepare($sql);
            $query->bind_param('s', $nombres);
            $query_executed = $query->execute();
            $query->close();
            echo $query_executed;
            break;
        }
        case 3: {
            $conexion = conexion_db3();
            $nombres = $_POST['nombres'];
            $sql = "INSERT INTO tabla_usuarios(nombres_usuario) VALUES(?)";
            $query = $conexion->prepare($sql);
            $query->bind_param('s', $nombres);
            $query_executed = $query->execute();
            $query->close();
            echo $query_executed;
            break;
        }
        default: {
            echo 0;
            break;
        }
    }
?>