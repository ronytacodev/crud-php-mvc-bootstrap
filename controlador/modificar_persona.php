<?php

if (!empty($_POST["btnActualizar"])) {
    if (!empty($_POST["nombre"]) and !empty($_POST["apellido"]) and !empty($_POST["dni"]) and !empty($_POST["fecha"]) and !empty($_POST["correo"])) {
        $id = $_POST["id"];
        $nombre = $_POST["nombre"];
        $apellido = $_POST["apellido"];
        $dni = $_POST["dni"];
        $fecha = $_POST["fecha"];
        $correo = $_POST["correo"];
        $sql = $conexion->query("UPDATE persona SET nombre = '$nombre', apellido = '$apellido', dni = '$dni', fecha_nac = '$fecha', correo = '$correo' WHERE id_persona = $id");
        if ($sql == 1) {
            header("Location: index.php");
        } else {
            echo "<div class='alert alert-danger'>Error al modificar datos de la persona.</div>";
        }
    } else {
        echo "<div class='alert alert-warning'>Campos vacíos</div>";
    }
}
