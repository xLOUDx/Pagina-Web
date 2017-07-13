<?php

 $host_db = "localhost";
 $user_db = "u445153335_root";
 $pass_db = "canada4233";
 $db_name = "u445153335_maste";
 $tbl_name = "tareas";
 
 $ejecutor = $_POST['ejecutor'];
  $descripcion = $_POST['descripcion'];
   $comentarios = $_POST['comentarios'];
    $calificacion = $_POST['calificacion'];

 
 $hash = password_hash($form_pass, PASSWORD_BCRYPT); 

 $conexion = new mysqli($host_db, $user_db, $pass_db, $db_name);

 if ($conexion->connect_error) {
 die("La conexion falló: " . $conexion->connect_error);
}

 
$query = "INSERT INTO tareas (ID, Ejecutor, Descripcion, Comentarios, Fecha, Calificacion) VALUES 
 ('','$ejecutor','$descripcion','$comentarios',CURRENT_TIMESTAMP,'$calificacion')";

 if ($conexion->query($query) === TRUE) {
 
 ?>
	   <script languaje="javascript">
		alert("Proceso creado con exito!");
		location.href = "tables.php";
		</script>
	
	<?php
 }

 else {
 echo "Error al crear el proceso." . $query . "<br>" . $conexion->error; 
   }
 mysqli_close($conexion);
?>