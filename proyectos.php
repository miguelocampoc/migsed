<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<link rel="stylesheet" href="css/estilos.css">

        <title>TecnoVirtual</title>
</head>
<!--<body class=" #212121 grey darken-4">!-->
<body>
<style>

#side:hover{
    background-color:#8D858D;
}
#header1{
    background-color:#2E7087;
    color:black;
	padding:5%;
	font-size:20px;
}
#header2{
	color:white;
	padding:5%;
	font-size:38px;

}

</style>
<ul class="sidenav" id="menu-responsive">
	  	 <li class="material-icons"></li>
	  	 	<li id="side"><a  href="index.php">Home</a></li>
			   <li id="side"><a  href="proyectos.php">Proyectos</a></li>


	  </ul>





	<div  class="navbar-fixed">
	 <nav class="#616161 grey darken-4 " >
	 	<div class="nav-wrapper" >
	 		<div class="container-fluid">
			 <a class="pt-2"><img width="20px"  height="20px" src="images/favicon.jpeg"></img></a>

	 			<a style="display:block;" href="#" data-target="menu-responsive" class="sidenav-trigger">
	             <i class="material-icons">menu</i>
	             </a>
                 <a >  MIGSED</a>
	 			<ul class="right hide-on-med-and-down">
                  <!--
	 			<li><a href="#">2</a></li>
	 			<li><a href="">3</a></li>
	 			<li><a href="#">4</a></li>
                 !-->
	 			</ul>
	 		</div>

	 	</div>
	 </nav>
    </div>
    <br>
  <div class="container-fluid">
      <div class="row">
          <div class="col  m2 l2">
        </div>
        <div class="col m8 l8">
                <p> Trabajos realizados </p>
                <p> Listado de los trabajos realizados</p>

            <table>
        <thead>
          <tr>
              <th>Nombre</th>
              <th>Link</th>
          </tr>
        </thead>

        <tbody>
          <tr>
            <td>OFFICESERVICE SAS</td>
            <td> <a href="https://officeservices.herokuapp.com/index.php">OFFICESERVICE SAS</a></td>
          </tr>
         
          
        </tbody>
      </table>
        </div>
        <div class="col l2 m2">
        </div>
   </div>

<script>
     M.AutoInit();

</script>

</body>
</html>