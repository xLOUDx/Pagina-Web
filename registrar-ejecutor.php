<?php

 $host_db = "localhost";
 $user_db = "root";
 $pass_db = "canada4233";
 $db_name = "Master";
 $tbl_name = "ejecutor";
 
 $nombre = $_POST['nombre'];
  $trabajo = $_POST['trabajo'];
   $rut = $_POST['rut'];
    $direccion = $_POST['direccion'];
	 $region = $_POST['region'];
		$username = $_POST['username'];
 
 
 $form_pass = $_POST['password'];
 
 $hash = password_hash($form_pass, PASSWORD_BCRYPT); 

 $conexion = new mysqli($host_db, $user_db, $pass_db, $db_name);

 if ($conexion->connect_error) {
 die("La conexion falló: " . $conexion->connect_error);
}

 $buscarUsuario = "SELECT * FROM $tbl_name
 WHERE usuario = '$_POST[username]' ";

 $result = $conexion->query($buscarUsuario);

 $count = mysqli_num_rows($result);

 if ($count == 1) {

 ?>
	   <script languaje="javascript">
		alert("El nombre de usuario ya esta registrado. Pruebe con otro !");
		location.href = "nuevo.php";
		</script>
	
	<?php
 
 
 }
 else{

 $query = "INSERT INTO ejecutor (ID, Nombre, Trabajo, RUT, Direccion, Region, Usuario, Password) VALUES 
 ('',' $nombre','$trabajo','$rut','$direccion','$region','$username','$hash')";

 if ($conexion->query($query) === TRUE) {
 
 ?>
	   <script languaje="javascript">
		alert("Ejecutor creado con exito!");
		location.href = "ejec.php";
		</script>
	
	<?php
 }

 else {
 echo "Error al crear el usuario." . $query . "<br>" . $conexion->error; 
   }
 }
 mysqli_close($conexion);
?>