<?php
include_once 'dbconfig.php';
if(isset($_GET['edit_id']))
{
	$sql_query="SELECT * FROM ejecutor WHERE id=".$_GET['edit_id'];
	$result_set=mysql_query($sql_query);
	$fetched_row=mysql_fetch_array($result_set);
}
if(isset($_POST['btn-update']))
{
	// variables for input data
	$nombre = $_POST['nombre'];
	$trabajo = $_POST['trabajo'];
	$rut = $_POST['rut'];
	$direccion = $_POST['direccion'];
	$region = $_POST['region'];
	$usuario = $_POST['usuario'];
	// variables for input data
	
	// sql query for update data into database
	$sql_query = "UPDATE ejecutor SET nombre='$nombre',trabajo='$trabajo',rut='$rut',direccion='$direccion',region='$region' WHERE id=".$_GET['edit_id'];
	// sql query for update data into database
	
	// sql query execution function
	if(mysql_query($sql_query))
	{
		?>
		<script type="text/javascript">
		alert('Data actualizada');
		window.location.href='ejec.php';
		</script>
		<?php
	}
	else
	{
		?>
		<script type="text/javascript">
		alert('error ocurrio al actualizar');
		</script>
		<?php
	}
	// sql query execution function
}
if(isset($_POST['btn-cancel']))
{
	header("Location: ejec.php");
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>CRUD Operations With PHP and MySql - By Coding Cage</title>
<link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>
<center>

<div id="header">
	<div id="content">
    <label>CRUD Operations With PHP and MySql - <a href="http://www.codingcage.com" target="_blank">By Coding Cage</a></label>
    </div>
</div>

<div id="body">
	<div id="content">
    <form method="post">
    <table align="center">
    <tr>
    <td><input type="text" name="first_name" placeholder="ID" value="<?php echo $fetched_row['ID']; ?>" disabled /></td>
    </tr>
    <tr>
    <td><input type="text" name="last_name" placeholder="Nombre" value="<?php echo $fetched_row['Nombre']; ?>" required /></td>
    </tr>
    <tr>
    <td><input type="text" name="city_name" placeholder="Usuario" value="<?php echo $fetched_row['Usuario']; ?>" required /></td>
    </tr>
    <tr>
    <td>
    <button type="submit" name="btn-update"><strong>UPDATE</strong></button>
    <button type="submit" name="btn-cancel"><strong>Cancel</strong></button>
    </td>
    </tr>
    </table>
    </form>
    </div>
</div>

</center>
</body>
</html>