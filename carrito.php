<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>

<script language="JavaScript"> 
function pregunta(){ 
    if (confirm('¿Estas seguro de realziar la compra?')){ 
		document.forms["miform"].submit();
    }		
} 
</script> 

	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link rel="shortcut icon" href="img/fav.png">
	
	<meta name="author" content="CodePixar">
	
	<meta name="description" content="">

	<meta name="keywords" content="">
	
	<meta charset="UTF-8">
	
	<title>Pico Fino</title>

	<!--CSS-->
	 <link rel="stylesheet" href="css/linearicons.css">
	<link rel="stylesheet" href="css/owl.carousel.css">
	<link rel="stylesheet" href="css/themify-icons.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/nice-select.css">
	<link rel="stylesheet" href="css/nouislider.min.css">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/main.css">
	      
		  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

      
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>

<body>

	<header class="header_area sticky-header">
		<div class="main_menu">
			<nav class="navbar navbar-expand-lg navbar-light main_box">
				<div class="container">
					
					<a class="navbar-brand logo_h" href="index.php"><img src="img/logo2.jpg" alt=""></a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
					 aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					
					<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
						<ul class="nav navbar-nav menu_nav ml-auto">
							<li class="nav-item"><a class="nav-link" href="index.php">Inicio</a></li>
							<li class="nav-item submenu dropdown">
								<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
								 aria-expanded="false">Tienda</a>
								<ul class="dropdown-menu">
									<li class="nav-item"><a class="nav-link" href="categoria.php">Categorias</a></li>
									
								</ul>
							</li>
							
							<li class="nav-item submenu dropdown">
								<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
								 aria-expanded="false">Usuario</a>
								<ul class="dropdown-menu">
									<li class="nav-item"><a class="nav-link" href="login.html">Inicio de sesión</a></li>
									<li class="nav-item"><a class="nav-link" href="registro.html">Registro</a></li>
								</ul>
							</li>
							
						</ul>
											<!--Boton Cerrar sesion-->
						

<?php
session_start();

if(isset($_SESSION["user_id"]))
{
print "<ul class='nav navbar-nav navbar-right'>
<div id='ocultable'>
	<li class='nav-item'><a class='nav-link' href='php/logout.php' type='hidden'>Cerrar sesion</a></li>
</div>

</ul>";

}else{
	print "<script>alert(\"Carrito vacio, inicio de sesion requerido.\");window.location='login.html';</script>";
}

?>

						<!--Fin Boton Cerrar sesion-->
					</div>
				</div>
			</nav>
		</div>
	
	</header>

	<!-- Inicio Banner  -->
	<section class="banner-area organic-breadcrumb">
		<div class="container">
			
		</div>
	</section>
    <!-- Fin Banner -->
    


	<!-- Contenido -->
	<?php
	include "php/conexion.php";
	
	$z=$_SESSION['user_id'];
	$s = "select * from carrito where id=$z;";
	$query = $con->query($s);
	?>
	
	<h6>Carrito de compras</h6>


	<table class="striped">
        <thead>
          <tr>


              <th>Fecha de atención</th>
              <th>Nombre producto </th>
              <th>Precio Unitario</th>
			  <th>Cantidad</th>
			  <th>Sub Total</th>
              <th></th>
                          
          </tr>
        </thead>

        <tbody>

		<?php
$t=0;
while ($r=$query->fetch_array()) {
	?>
	    <tr>
              <td><?php echo date("Y-m-d")?></td>                       
              <td><?php echo $r[1];?> </td>
			  <td><?php echo $r[2];?> </td>
			  <td><?php echo $r[3];?> </td>
			  <td><?php $t = $t + ($r[2]*$r[3]); echo "$"; echo $t;?> </td> 
			  <td>
			  <form method="post" action="php/eliminar.php">
			  <input id="nom" name="nom" type="hidden" value='<?php echo $r[1];?>'/>
				<button type="submit" ><img src="img/clear.png" width="15" hight="15" /></button>
			  


			  
			  </form>
			   </td>       
                 
 
              
          </tr>
	


<?php
}
?>
      <tr>
		<td></td>
		<td></td>
		<td></td>
		<td><b>Total</b></td>
		<td><?php echo "$"; echo $total=($t*0.12)+$t; ?></td>
	</tr>




        </tbody>
      </table>   


<CENTER>
<form id="miform" method="post" action="factura.php">

	  <div class="col-md-12 form-group">
		<input id="nom" name="nom" type="hidden" value='<?php echo $r[0];?>'/>
		<input id="tota" name="tota" type="hidden" value='<?php echo $total;?>'/>
		<button type="submit" onclick="pregunta()" value="submit" class="primary-btn">Comprar</button>
		</div>
		
</form>							
</CENTER>					


    <!-- Fin Contenido -->











		<!-- Inicio pie de pagina -->
		<footer class="footer-area section_gap">
			<div class="container">
				<div class="row">
					<div class="col-lg-3  col-md-6 col-sm-6">
						<div class="single-footer-widget">
							<h6>Acerca de nosotros</h6>
							<p>
								Hola! Somos Paulina y Gustavo, una pareja de emprendedores que se han sabido complementar para llevarte lo mejor de nuestra cocina a tu casa o trabajo.
							</p>
						</div>
					</div>
					<div class="col-lg-4  col-md-6 col-sm-6">
						<div class="single-footer-widget">
							<h6>Boletin de noticias</h6>
							<p>Mantente actualizado</p>
							<div class="" id="mc_embed_signup">
	
								<form target="_blank" novalidate="true" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
								 method="get" class="form-inline">
	
									<div class="d-flex flex-row">
	
										<input class="form-control" name="EMAIL" placeholder="Ingrese correo" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Ingrese correo '"
										 required="" type="email">
	
	
										<button class="click-btn btn btn-default"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></button>
										<div style="position: absolute; left: -5000px;">
											<input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
										</div>
	
									
									</div>
									<div class="info"></div>
								</form>
	
	
							</div>
						</div>
					</div>
					<div class="col-lg-3  col-md-6 col-sm-6">
						<div class="single-footer-widget mail-chimp">
							<h6 class="mb-20">Feed de Instagram</h6>
							<ul class="instafeed d-flex flex-wrap">
								<li><img src="img/ins1.jpg" alt=""></li>
								<li><img src="img/ins2.jpg" alt=""></li>
								<li><img src="img/ins3.jpg" alt=""></li>
								
								
							</ul>
						</div>
					</div>
					<div class="col-lg-2 col-md-6 col-sm-6">
						<div class="single-footer-widget">
							<h6>Redes Sociales</h6>
							<p>Siguenos</p>
							<div class="footer-social d-flex align-items-center">
								<a href="https://www.facebook.com/picofinodomicilio/"><i class="fa fa-facebook"></i></a>
					
								<a href="https://twitter.com"><i class="fa fa-twitter"></i></a>
								<a href="https://instagram.com"><i class="fa fa-instagram"></i></a>
								
							</div>
						</div>
					</div>
				</div>
				<div class="footer-bottom d-flex justify-content-center align-items-center flex-wrap">
					<p class="footer-text m-0">
	Copyright &copy;<script>document.write(new Date().getFullYear());</script> Todos los derechos reservados by <a href="https://linkedin.com/in/Javier-Cobo96" target="_blank">Cobo Javier</a>
	
				</div>
			</div>
		</footer>
		<!-- Fin pie de pagina -->


	<script src="js/vendor/jquery-2.2.4.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4"
	 crossorigin="anonymous"></script>
	<script src="js/vendor/bootstrap.min.js"></script>
	<script src="js/jquery.ajaxchimp.min.js"></script>
	<script src="js/jquery.nice-select.min.js"></script>
	<script src="js/jquery.sticky.js"></script>
	<script src="js/nouislider.min.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<!--gmaps Js-->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
	<script src="js/gmaps.min.js"></script>
	<script src="js/main.js"></script>
</body>

</html>