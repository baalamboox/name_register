<?php
    function conexion_db1() {
        $conexion = new mysqli('localhost', 'root', '', 'db_1');
        if($conexion->errno) {
            echo 'Error: ' . $conexion->error;
        } else {
            return $conexion;
        }
    }
    function conexion_db2() {
        $conexion = new mysqli('localhost', 'root', '', 'db_2');
        if($conexion->errno) {
            echo 'Error: ' . $conexion->error;
        } else {
            return $conexion;
        }
    }
    function conexion_db3() {
        $conexion = new mysqli('localhost', 'root', '', 'db_3');
        if($conexion->errno) {
            echo 'Error: ' . $conexion->error;
        } else {
            return $conexion;
        }
    }
?>