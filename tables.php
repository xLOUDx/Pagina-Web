<?php
include_once 'dbconfig.php';

// delete condition
if(isset($_GET['delete_id']))
{
	$sql_query="DELETE FROM tareas WHERE id=".$_GET['delete_id'];
	mysql_query($sql_query);
	header("Location: $_SERVER[PHP_SELF]");
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

    <!-- DataTables CSS -->
    <link href="../vendor/datatables-plugins/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="../vendor/datatables-responsive/dataTables.responsive.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

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
                    <h1 class="page-header">Tabla de tareas</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Tabla con algunas tareas
							 <a href="agreg.php"><button type="button" class="btn btn-success">Agregar nueva tarea</button></a>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Ejecutor tarea</th>
                                        <th>Descripcion Tarea</th>
                                        <th>Fecha tarea</th>
                                        <th>Calificacion trabajo</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="odd gradeX">
                                        <td>0</td>
                                        <td>Jesus de Nazareth</td>
                                        <td>Conversion agua en vino</td>
                                        <td class="center">11-35</td>
                                        <td class="center">5</td>
                                    </tr>
                                    <tr class="even gradeC">
                                        <td>2</td>
                                        <td>Jesus de Nazareth</td>
                                        <td>Resucitacion de Lázaro</td>
                                        <td class="center">21-11-2016</td>
                                        <td class="center">5</td>
                                    </tr>
                                    <tr class="odd gradeA">
                                        <td>3</td>
                                        <td>Jesus de Nazareth</td>
                                        <td>Recuperar la vista a hombre</td>
                                        <td class="center">22-2-2016</td>
                                        <td class="center">A</td>
                                    </tr>
                                    <tr class="even gradeA">
                                        <td>4</td>
                                        <td>Jesus de Nazareth</td>
                                        <td>Sanar a paralitico</td>
                                        <td class="center">11-4-2016</td>
                                        <td class="center">5</td>
                                    </tr>
                                    <tr class="odd gradeA">
                                        <td>5</td>
                                        <td>Jesus de Nazareth</td>
                                        <td>Curar a leprosos</td>
                                        <td class="center">20-5-2017</td>
                                        <td class="center">4</td>
                                    </tr>
                                    <tr class="even gradeA">
                                        <td>6</td>
                                        <td>Jesus de Nazareth</td>
                                        <td>Multiplicacion de panes y chelas</td>
                                        <td class="center">20-11-2016</td>
                                        <td class="center">A</td>
                                    </tr>
                                    <tr class="gradeA">
                                        <td>7</td>
                                        <td>Jesus de Nazareth</td>
                                        <td>Contar Parabola del Hijo prodigo</td>
                                        <td class="center">4-04-2017</td>
                                        <td class="center">4</td>
                                    </tr>
                                    <tr class="gradeA">
                                        <td>8</td>
                                        <td>Jesus de Nazareth</td>
                                        <td>Enseñar el padrenuestro</td>
                                        <td class="center">20-3-2017</td>
                                        <td class="center">5</td>
                                    </tr>
                                    <tr class="gradeA">
                                        <td>9</td>
                                        <td>Jesus de Nazareth</td>
                                        <td>Rajarse con la ultima cena</td>
                                        <td class="center">20-3-2017</td>
                                        <td class="center">5</td>
                                    </tr>
                                    <tr class="gradeA">
                                        <td>10</td>
                                        <td>Jesus de Nazareth</td>
                                        <td>Entregarse a los Romanos</td>
                                        <td class="center">21-3-2017</td>
                                        <td class="center">2</td>
                                    </tr>
                                    <tr class="gradeA">
                                        <td>11</td>
                                        <td>Judas Iscariote</td>
                                        <td>Predicar la palabra</td>
                                        <td class="center">12-12-2016</td>
                                        <td class="center">A</td>
                                    </tr>
                                    <tr class="gradeA">
                                        <td>12</td>
                                        <td>Judas Iscariote</td>
                                        <td>Traicionar a Jesus</td>
                                        <td class="center">14-03-2017</td>
                                        <td class="center">3</td>
                                    </tr>
                                    <tr class="gradeA">
                                        <td>13</td>
                                        <td>Judas Iscariote</td>
                                        <td>Traicionar a Jesus</td>
                                        <td class="center">14-03-2017</td>
                                        <td class="center">3</td>
                                    </tr>
                                    <tr class="gradeA">
                                        <td>14</td>
                                        <td>Judas Iscariote</td>
                                        <td>Traicionar a Jesus</td>
                                        <td class="center">14-03-2017</td>
                                        <td class="center">3</td>
                                    </tr>
                                    <tr class="gradeA">
                                        <td>15</td>
                                        <td>Judas Iscariote</td>
                                        <td>Traicionar a Jesus</td>
                                        <td class="center">14-03-2017</td>
                                        <td class="center">3</td>
                                    </tr>
                                    <tr class="gradeA">
                                        <td>16</td>
                                        <td>Judas Iscariote</td>
                                       <td>Traicionar a Jesus</td>
                                        <td class="center">14-03-2017</td>
                                        <td class="center">3</td>
                                    </tr>
                                    <tr class="gradeA">
                                        <td>17</td>
                                        <td>Judas Iscariote</td>
                                        <td>Traicionar a Jesus</td>
                                        <td class="center">14-03-2017</td>
                                        <td class="center">3</td>
                                    </tr>
                                    <tr class="gradeA">
                                        <td>18</td>
                                        <td>Judas Iscariote</td>
                                        <td>Traicionar a Jesus</td>
                                        <td class="center">14-03-2017</td>
                                        <td class="center">3</td>
                                    </tr>
                                    <tr class="gradeA">
                                        <td>19</td>
                                        <td>Judas Iscariote</td>
                                        <td>Traicionar a Jesus</td>
                                        <td class="center">14-03-2017</td>
                                        <td class="center">3</td>
                                    </tr>
                                    <tr class="gradeA">
                                        <td>20</td>
                                        <td>Judas Iscariote</td>
										<td>Traicionar a Jesus</td>
                                        <td class="center">14-03-2017</td>
                                        <td class="center">3</td>
                                    </tr>
                                    <tr class="gradeA">
                                        <td>21</td>
                                        <td>Juan El Bautista</td>
                                        <td>Bautizar</td>
                                        <td class="center">12-12-2016</td>
                                        <td class="center">5</td>
                                    </tr>
                                    <tr class="gradeA">
                                        <td>22</td>
                                        <td>Juan El Bautista</td>
                                        <td>Bautizar</td>
                                        <td class="center">12-12-2016</td>
                                        <td class="center">5</td>
                                    </tr>
                                    <tr class="gradeA">
                                        <td>23</td>
                                        <td>Juan El Bautista</td>
                                        <td>Bautizar</td>
                                        <td class="center">12-12-2016</td>
                                        <td class="center">5</td>
                                    </tr>
                                    <tr class="gradeA">
                                        <td>24</td>
                                        <td>Juan El Bautista</td>
                                        <td>Bautizar</td>
                                        <td class="center">12-12-2016</td>
                                        <td class="center">5</td>
                                    </tr>
                                    <tr class="gradeA">
                                        <td>25</td>
                                        <td>Juan El Bautista</td>
                                        <td>Bautizar</td>
                                        <td class="center">12-12-2016</td>
                                        <td class="center">5</td>
                                    </tr>
                                    <tr class="gradeA">
                                        <td>26</td>
                                        <td>Juan El Bautista</td>
                                        <td>Bautizar</td>
                                        <td class="center">12-12-2016</td>
                                        <td class="center">5</td>
                                    </tr>
                                    <tr class="gradeA">
                                        <td>27</td>
                                        <td>Juan El Bautista</td>
                                        <td>Bautizar</td>
                                        <td class="center">12-12-2016</td>
                                        <td class="center">5</td>
                                    </tr>
                                    <tr class="gradeA">
                                        <td>28</td>
                                        <td>Juan El Bautista</td>
                                        <td>Bautizar</td>
                                        <td class="center">12-12-2016</td>
                                        <td class="center">5</td>
                                    </tr>
                                    <tr class="gradeA">
                                        <td>29</td>
                                        <td>Juan El Bautista</td>
                                        <td>Bautizar</td>
                                        <td class="center">12-12-2016</td>
                                        <td class="center">5</td>
                                    </tr>
                                    <tr class="gradeA">
                                        <td>30</td>
                                        <td>Juan El Bautista</td>
                                        <td>Bautizar</td>
                                        <td class="center">12-12-2016</td>
                                        <td class="center">5</td>
                                    </tr>
									 <?php
											$sql_query="SELECT * FROM tareas";
											$result_set=mysql_query($sql_query);
											if(mysql_num_rows($result_set)>=0)
											{
												while($row=mysql_fetch_row($result_set))
												{
										?>
									<tr class="gradeA">
										<td><?php echo $row[0]; ?></td>
										<td><?php echo $row[1]; ?></td>
										<td><?php echo $row[2]; ?></td>
										<td><?php echo $row[4]; ?></td>
										<td><?php echo $row[5]; ?></td>
										
                                    </tr>
									<?php
												}
											}
											else
											{
												?>
												<tr>
												<td colspan="5">Sin datos encontrados!</td>
												</tr>
												<?php
											}
											?>
                                </tbody>
                            </table>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
           <button type="button" class="btn btn-primary btn-lg btn-block" id="btnExport">Exportar a Excel</button>
			<button type="button" class="btn btn-primary btn-lg btn-block" id="exportButton">Exportar a PDF</button>
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
	
	<!-- Exportar a Excel -->
	<script src="js/export.js"></script>
	<link rel="stylesheet" type="text/css" href="http://www.shieldui.com/shared/components/latest/css/light/all.min.css" />
	<script type="text/javascript" src="http://www.shieldui.com/shared/components/latest/js/shieldui-all.min.js"></script>
<script type="text/javascript" src="http://www.shieldui.com/shared/components/latest/js/jszip.min.js"></script>
	
	<!-- Exportar a PDF -->
	<script type="text/javascript">
    jQuery(function ($) {
        $("#exportButton").click(function () {
            // parse the HTML table element having an id=dataTables-example
            var dataSource = shield.DataSource.create({
                data: "#dataTables-example",
                schema: {
                    type: "table",
                    fields: {
                        ID: { type: Number },
						Ejec: { type: String },
                        Desc: { type: String },
						Date: { type: String },
                        Calif: { type: Number }
                    }
                }
            });

            // when parsing is done, export the data to PDF
            dataSource.read().then(function (data) {
                var pdf = new shield.exp.PDFDocument({
                    author: "PrepBootstrap",
                    created: new Date()
                });

                pdf.addPage("a4", "Landscape");

                pdf.table(
                    50,
                    50,
                    data,
                    [
                        { field: "ID", title: "ID", width: 50 },
						{ field: "Ejec", title: "Ejecutor", width: 200 },
                        { field: "Desc", title: "Descripcion", width: 200 },
                        { field: "Date", title: "Fecha", width: 150 },
						{ field: "Calif", title: "Calificacion", width: 80 }
                    ],
                    {
                        margins: {
                            top: 50,
                            left: 50
                        }
                    }
                );

                pdf.saveAs({
                    fileName: "PrepBootstrapPDF"
                });
            });
        });
    });
</script>

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