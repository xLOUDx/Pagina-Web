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
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>

    <title>Tabla</title>

    <!-- Bootstrap Core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">
	
	<!-- UploadFoto CSS -->
    <link href="js/cssup.css" rel="stylesheet">

    <!-- DataTables CSS -->
    <link href="../vendor/datatables-plugins/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="../vendor/datatables-responsive/dataTables.responsive.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

<script type="text/javascript">
function edt_id(id)
{
	if(confirm('Seguro de editar?'))
	{
		window.location.href='edit_data.php?edit_id='+id;
	}
}
function delete_id(id)
{
	if(confirm('Seguro que quiere borrar al ejecutor?'))
	{
		window.location.href='index.php?delete_id='+id;
	}
}
</script>

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Navegacion</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Panel de control</a>
            </div>
            <!-- /.HEADER -->

          <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-envelope fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-messages">
                        <li>
                            <a href="#">
                                <div>
                                    <strong>Juanito Perez</strong>
                                    <span class="pull-right text-muted">
                                        <em>Ayer</em>
                                    </span>
                                </div>
                                <div>Wena xoro, como le baila?</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <strong>Jefe</strong>
                                    <span class="pull-right text-muted">
                                        <em>25-6</em>
                                    </span>
                                </div>
                                <div>Estuvo bien hecho el trabajo. ¡Felicitaciones!</div>
                            </a>
                        </li>
                    </ul> 
			
					
                </li>

              
                <!-- /.perfil -->
                               <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> Mi perfil</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="../login/logout.php"><i class="fa fa-sign-out fa-fw"></i> Cerrar Sesión</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /. FIN HEADER -->
            </ul>
            <!-- /.navbar-top-links -->

                      <!-- /.NAVEGACION -->
                     <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                                        <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                            </div>
                            <!-- /input-group -->
                        </li>
						 <!-- /MENU-group -->
                        <li>
                            <a href="panel.php"><i class="fa fa-dashboard fa-fw"></i> Mi tablero</a>
                        </li>
                       
                        <li>
                            <a href="tables.php"><i class="fa fa-table fa-fw"></i> Tablas</a>
                        </li>
						<li>
                            <a href="ejec.php"><i class="fa fa-user"></i> Ejecutores</a>
							             <ul class="nav nav-second-level">
                                 <li>
                                    <a href="ejec.php">Revisar lista</a>
                                </li>
								<li>
                                    <a href="nuevo.php">Nuevo ejecutor</a>
                                </li>
                               </ul>
                        </li>
						<li>
                            <a href="galeria.php"><i class="fa fa-photo"></i> Galeria</a>
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                   
                </div>
                      <div class="panel-body">
					  
					  <div class="panel panel-green">
                        <div class="panel-heading">
                            Editar datos
                        </div>
						  <form method="post">
                        <div class="panel-body">
                            
							<div class="form-group">
							<input class="form-control" type="text" name="ID" placeholder="ID" value="<?php echo $fetched_row['ID']; ?>" disabled />
							</div>
							<div class="form-group">
                                   <input  class="form-control" type="text" name="nombre" placeholder="Nombre" value="<?php echo $fetched_row['Nombre']; ?>" required />
							</div>
							<div class="form-group">
                                   <input  class="form-control" type="text" name="trabajo" placeholder="trabajo" value="<?php echo $fetched_row['Trabajo']; ?>" required />
							</div>
							<div class="form-group">
                                   <input class="form-control" type="text" name="rut" placeholder="rut" value="<?php echo $fetched_row['RUT']; ?>" required /><required />
							</div>
							<div class="form-group">
                                   <input type="text" class="form-control" name="direccion" placeholder="direccion" value="<?php echo $fetched_row['Direccion']; ?>" required />
							</div>
							<div class="form-group">
                                   <input type="number" class="form-control"  name="region"  min="1" max="15" placeholder="region" value="<?php echo $fetched_row['Region'];?>" required />
							</div>
							<div class="form-group">
                                   <input class="form-control" type="text" name="usuario" placeholder="usuario" value="<?php echo $fetched_row['Usuario']; ?>" required />
							</div>	

					                      <div class="col-lg-4">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            Foto de perfil
                        </div>
                        <div class="panel-body">
                            
							
							<img class="profile-pic" src="http://cdn.cutestpaw.com/wp-content/uploads/2012/07/l-Wittle-puppy-yawning.jpg" />
							
							<input class="file-upload" type="file" accept="image/*"/>

							
                        </div>
                        <div class="panel-footer">
                            <div class="btn btn-default" >Upload Image</div>
                        </div>
                    </div>
                </div>  
											
											
											
											
											
							<div class="panel-footer">
                               	 <button type="submit" name="btn-update"><strong>Actualizar</strong></button>
							<button type="submit" name="btn-cancel"><strong>Cancelar edicion</strong></button>	
                        </div>
                        </div>
						
						</form>
						

                    </div>
                           


    </td>
    </tr>
    </table>
    </form>
    </div>
</div>
    <!-- /#wrapper -->
	<!-- subir foto -->
    <script src="js/upload.js"></script>
	
    <!-- jQuery -->
    <script src="../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- DataTables JavaScript -->
    <script src="../vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="../vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
    <script src="../vendor/datatables-responsive/dataTables.responsive.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>
	

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
            responsive: true
        });
    });
    </script>

</body>

</html>































