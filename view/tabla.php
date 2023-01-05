<?php
    session_start();
    $db = $_SESSION['db'];
    $conexion = new mysqli('localhost', 'root', '', 'db_' . $db);
    $sql = 'SELECT * FROM tabla_usuarios';
    $datos = $conexion->query($sql);
    while($datos_tabla = mysqli_fetch_array($datos)) {
?>
        <tr>
            <td><?php echo $datos_tabla['nombres_usuario']?></td>
        </tr>
<?php
    }
?>