<?php
    if (isset($_POST['fecha_nacimiento'])) {
        $fecha_nacimiento = $_POST['fecha_nacimiento'];
        $hoy = date('Y-m-d');
        $edad = date_diff(date_create($fecha_nacimiento), date_create($hoy))->y;

        echo "<p>Fecha de Nacimiento: $fecha_nacimiento</p>";
        echo "<p>Edad: $edad años</p>";
    } else {
        echo "<p>No se proporcionó una fecha de nacimiento.</p>";
    }
    ?>
