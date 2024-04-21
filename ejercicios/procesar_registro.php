<?php
  $matricula = $_POST['matricula'];
  $nombre = $_POST['nombre'];
  $apellidopaterno = $_POST['apellidopaterno'];
  $apellidomaterno = $_POST['apellidomaterno'];
  $edad = $_POST['edad'];
  $carrera = $_POST['carrera'];

  $conexion = mysqli_connect("localhost","root","","basedatosclase");

  $query = "insert into alumnos values
            (".$matricula.", '".$apellidopaterno."', '".$apellidomaterno."', '".$nombre."', ".$edad.",
              '".$carrera."');";

  mysqli_query($conexion, $query);



 ?>
