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
	if(confirm('Sure to edit ?'))
	{
		window.location.href='edit_data.php?edit_id='+id;
	}
}
function delete_id(id)
{
	if(confirm('Sure to Delete ?'))
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
                        <li>
                            <a href="panel.php"><i class="fa fa-dashboard fa-fw"></i> Mi tablero</a>
                        </li>
                       
                        <li>
                            <a href="tables.html"><i class="fa fa-table fa-fw"></i> Tablas</a>
                        </li>
						<li>
                            <a href="ejec.php"><i class="fa fa-table fa-fw"></i> Ejecutores</a>
							             <ul class="nav nav-second-level">
                                 <li>
                                    <a href="ejec.php">Revisar lista</a>
                                </li>
								<li>
                                    <a href="nuevo.php">Nuevo ejecutor</a>
                                </li>
                               </ul>
                        </li>
                       
                 
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
        </nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Registrar nuevo ejecutor</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                   <div class="panel panel-green">
                        <div class="panel-heading">
                            Agregar a nuevo ejecutor de tareas
                        </div>
                        <div class="panel-body">
                            
							 <form action="registrar-ejecutor.php" method="post"> 
								
							<div class="form-group">
                                    <input class="form-control" placeholder="Nombre completo" name="nombre" type="text" id="nombre" maxlength="200" required autofocus>
							</div>

							<div class="form-group">
                                    <input class="form-control" placeholder="Trabajo" name="trabajo" type="text" id="trabajo" maxlength="200" required>
							</div>
							
							<div class="form-group">
                                    <input class="form-control" placeholder="RUT (12345678-9)" name="rut" type="text" id="rut" maxlength="10" required>
							</div>
							
							<div class="form-group">
                                    <input class="form-control" placeholder="Dirección" name="direccion" type="text" id="direccion" maxlength="255" required>
							</div>

							<div class="form-group">
									<select name="region" id="region">
							   <option value="15">XV Región de Arica y Parinacota</option>
								<option value="1">I Región de Tarapacá</option>
								<option value="2">II Región de Antofagasta</option>								 								
								<option value="3">III Región de Atacama</option>								
								<option value="4">IV Región de Coquimbo</option>								
								<option value="5">V Región de Valparaíso</option>								
								<option value="13">XIII Región Metropolitana de Santiago</option>								 
								<option value="6">VI Región de O'Higgins</option>								
								<option value="7">VII Región del Maule</option>								
								<option value="8">VIII Región del Bio Bio</option>								
								<option value="9">IX Región de la Araucanía</option>								
								<option value="14">XIV Región de Los Ríos</option>								
								<option value="10">X Región de Los Lagos</option>								
								<option value="11">XI Región de Aysén</option>								
								<option value="12">XII Región de Magallanes</option>
	                        </select>
							</div>

							<div class="form-group">
                                    <input class="form-control" placeholder="Nombre de usuario" name="username" type="text" id="username" maxlength="64" required>
							</div>
							
							<div class="form-group">
                                    <input class="form-control" placeholder="Contraseña" name="password" type="password" id="password" maxlength="64" required>
							</div>
							
							<div class="form-group">
                                    <input class="form-control" placeholder="Confirme contraseña" name="confirm_password" type="password" id="confirm_password" maxlength="64" required>
							</div>
							
							<br/>
								 <input type="submit" name="submit" value="Registrar">
								 <input type="reset" name="clear" value="Resetear campos">

							</form>
							
							<script> 

var password = document.getElementById("password")
  , confirm_password = document.getElementById("confirm_password");

function validatePassword(){
  if(password.value != confirm_password.value) {
    confirm_password.setCustomValidity("Passwords no coinciden");
  } else {
    confirm_password.setCustomValidity('');
  }
}

password.onchange = validatePassword;
confirm_password.onkeyup = validatePassword;



</script>
							
                       
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
    </div>
    <!-- /#wrapper -->

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
