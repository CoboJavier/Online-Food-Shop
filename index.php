<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
	
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
	<link rel="shortcut icon" href="img/fav.png">
	
	<meta name="author" content="CodePixar">
	
	<meta name="description" content="">
	
	<meta name="keywords" content="">
	
	<meta charset="UTF-8">
	
	<title>Pico Fino</title>

	<!--CSS -->
	<link rel="stylesheet" href="css/linearicons.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/themify-icons.css">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/owl.carousel.css">
	<link rel="stylesheet" href="css/nice-select.css">
	<link rel="stylesheet" href="css/nouislider.min.css">
	<link rel="stylesheet" href="css/ion.rangeSlider.css" />
	<link rel="stylesheet" href="css/ion.rangeSlider.skinFlat.css" />
	<link rel="stylesheet" href="css/magnific-popup.css">
	<link rel="stylesheet" href="css/main.css">
</head>

<body>

	<!-- Encabezado -->
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
							<li class="nav-item active"><a class="nav-link" href="index.php">Inicio</a></li>
							<li class="nav-item submenu dropdown">
								<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
								 aria-expanded="false">Tienda</a>
								<ul class="dropdown-menu">
									<li class="nav-item"><a class="nav-link" href="categoria.php">Categorias</a></li>
									<!--
									<li class="nav-item"><a class="nav-link" href="productos.php">Productos</a></li>	
									-->
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
							<li class="nav-item"><a class="nav-link" href="contacto.php">Contactanos</a></li>
							




						</ul>



						<ul class="nav navbar-nav navbar-right">
							<li class="nav-item"><a href="carrito.php" class="cart"><span class="ti-bag"></span></a></li>
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

}

?>

						<!--Fin Boton Cerrar sesion-->
						
						<script>

						function mostrarOcultar(id){
							var elemento = document.getElementById(id);
							if(!elemento) {
							return true;
							}
							if (elemento.style.display == "none") {
							elemento.style.display = "block"
							} else {
							elemento.style.display = "none"
							};
							return true;
							};
							</script>

					</div>
				</div>
			</nav>
		</div>
		<div class="search_input" id="search_input_box">
			<div class="container">
				<form class="d-flex justify-content-between">
					<input type="text" class="form-control" id="search_input" placeholder="Search Here">
					<button type="submit" class="btn"></button>
					<span class="lnr lnr-cross" id="close_search" title="Close Search"></span>
				</form>
			</div>
		</div>
	</header>
	<!-- Fin Encabezado -->

	<!-- Inicio Banner -->
	<section class="banner-area">
		<div class="container">
			<div class="row fullscreen align-items-center justify-content-start">
				<div class="col-lg-12">
					<div class="active-banner-slider owl-carousel">
						<!-- Slide -->
						<div class="row single-slide align-items-center d-flex">
							<div class="col-lg-5 col-md-6">
								<div class="banner-content">
									<h1>Suvenirs y<br>Comida</h1>
									<p>Regala a esa persona especial algo unico en esa epoca</p>
<!--
									<div class="add-bag d-flex align-items-center">
										<a class="add-btn" href=""><span class="lnr lnr-cross"></span></a>
										<span class="add-text text-uppercase">Añadir al carrito</span>
									</div>
-->
								</div>
							</div>
							<div class="col-lg-7">
								<div class="banner-img">
									<img class="img-fluid" src="img/banner/bann.png" alt="">
								</div>
							</div>
						</div>
						<!-- Slide unico -->
						<div class="row single-slide">
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Fin Banner -->

	<!-- Inicio de caracteristicas -->
	<section class="features-area section_gap">
		<div class="container">
			<div class="row features-inner">
				
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="single-features">
						<div class="f-icon">
							<img src="img/features/f-icon1.png" alt="">
						</div>
						<h6>Entrega Gratis</h6>
						<p>Entrega gratis en todas las ordenes</p>
					</div>
				</div>
				
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="single-features">
						<div class="f-icon">
							<img src="img/features/f-icon2.png" alt="">
						</div>
						<h6>Politica de devolución</h6>
						<p>Reembolso en sus compras</p>
					</div>
				</div>
				
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="single-features">
						<div class="f-icon">
							<img src="img/features/f-icon3.png" alt="">
						</div>
						<h6>Ayuda 24/7</h6>
						<p>Atención siempre</p>
					</div>
				</div>
				
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="single-features">
						<div class="f-icon">
							<img src="img/features/f-icon4.png" alt="">
						</div>
						<h6>Pago Seguro</h6>
						<p>PayPal/Efectivo</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Fin de caracteristicas -->



	<!-- Inicio Productos -->
	<section class="owl-carousel active-product-area section_gap">

		<!-- Seccion de productos -->
		<div class="single-product-slider">
			<div class="container">
				
				<div class="row justify-content-center">
					<div class="col-lg-6 text-center">
						<div class="section-title">
							<h1>Productos</h1>
							<p>Detalles unicos, especiales y deliciosos.</p>
						</div>
					</div>
				</div>

				<div class="row">
					


					<!-- producto -->
					<div class="col-lg-3 col-md-6">
						<div class="single-product">
							<img class="img-fluid" src="img/productos/pr1.jpg" alt="">
							<div class="product-details">
								<h6>Enrollados de carne 
									</h6>
								<div class="price">
									<h6>$10.00</h6>
									<h6 class="l-through">$15.00</h6>
								</div>
								<div class="prd-bottom">

									
									<a href="productos.php?var1=1&var2=img/productos/pr1.jpg" class="social-info">
										<span class="lnr lnr-move"></span>
										<p class="hover-text">Detalles</p>
									</a>
								</div>
							</div>
						</div>
					</div>
					<!-- producto -->
					<div class="col-lg-3 col-md-6">
						<div class="single-product">
							<img class="img-fluid" src="img/productos/pr2.jpg" alt="">
							<div class="product-details">
								<h6>Palillos de Queso</h6>
								<div class="price">
									<h6>$15.00</h6>
									<h6 class="l-through">$20.00</h6>
								</div>
								<div class="prd-bottom">

									
									<a href="productos.php?var1=2&var2=img/productos/pr2.jpg" class="social-info">
										<span class="lnr lnr-move"></span>
										<p class="hover-text">Detalles</p>
									</a>
									
								</div>
							</div>
						</div>
					</div>
					<!-- producto -->
					<div class="col-lg-3 col-md-6">
						<div class="single-product">
							<img class="img-fluid" src="img/productos/pr3.jpg" alt="">
							<div class="product-details">
								<h6>Enrrollados de Tocino</h6>
								<div class="price">
									<h6>$25.00</h6>
									<h6 class="l-through">$30.00</h6>
								</div>
								<div class="prd-bottom">

									
									<a href="productos.php?var1=3&var2=img/productos/pr3.jpg" class="social-info">
										<span class="lnr lnr-move"></span>
										<p class="hover-text">Detalles</p>
									</a>
								</div>
							</div>
						</div>
					</div>
					<!-- producto -->
					<div class="col-lg-3 col-md-6">
						<div class="single-product">
							<img class="img-fluid" src="img/productos/pr4.jpg" alt="">
							<div class="product-details">
								<h6>Varios</h6>
								<div class="price">
									<h6>$70.00</h6>
									<h6 class="l-through">$80.00</h6>
								</div>
								<div class="prd-bottom">

									
									<a href="productos.php?var1=4&var2=img/productos/pr4.jpg" class="social-info">
										<span class="lnr lnr-move"></span>
										<p class="hover-text">Detalles</p>
									</a>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		





		
		<!-- Seccion de products -->
		<div class="single-product-slider">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-lg-6 text-center">
						<div class="section-title">
							<h1>Regalos</h1>
							<p>Innovando para ofrecerte mas y mejor.</p>
						</div>
					</div>
				</div>
				<div class="row">

				
					

					<!-- producto -->
					<div class="col-lg-3 col-md-6">
						<div class="single-product">
							<img class="img-fluid" src="img/productos/pr5.jpg" alt="">
							<div class="product-details">
								<h6>Regalo 1</h6>
								<div class="price">
									<h6>$50.00</h6>
									<h6 class="l-through">$70.00</h6>
								</div>
								<div class="prd-bottom">

									
									<a href="productos.php?var1=5&var2=img/productos/pr5.jpg" class="social-info">
										<span class="lnr lnr-move"></span>
										<p class="hover-text">Detalles</p>
									</a>
								</div>
							</div>
						</div>
					</div>
					<!-- producto -->
					<div class="col-lg-3 col-md-6">
						<div class="single-product">
							<img class="img-fluid" src="img/productos/pr6.jpg" alt="">
							<div class="product-details">
								<h6>Regalo 2</h6>
								<div class="price">
									<h6>$40.00</h6>
									<h6 class="l-through">$45.00</h6>
								</div>
								<div class="prd-bottom">

									
									<a href="productos.php?var1=6&var2=img/productos/pr6.jpg" class="social-info">
										<span class="lnr lnr-move"></span>
										<p class="hover-text">Detalles</p>
									</a>
								</div>
							</div>
						</div>
					</div>
					<!-- producto -->
					<div class="col-lg-3 col-md-6">
						<div class="single-product">
							<img class="img-fluid" src="img/productos/pr7.jpg" alt="">
							<div class="product-details">
								<h6>Regalo 3</h6>
								<div class="price">
									<h6>$25.00</h6>
									<h6 class="l-through">$30.00</h6>
								</div>
								<div class="prd-bottom">

									
									<a href="productos.php?var1=7&var2=img/productos/pr7.jpg" class="social-info">
										<span class="lnr lnr-move"></span>
										<p class="hover-text">Detalles</p>
									</a>
								</div>
							</div>
						</div>
					</div>
					
					
					<!-- producto -->
					<div class="col-lg-3 col-md-6">
						<div class="single-product">
							<img class="img-fluid" src="img/productos/pr8.jpg" alt="">
							<div class="product-details">
								<h6>Cangrejada</h6>
								<div class="price">
									<h6>$99.00</h6>
									<h6 class="l-through">$150.00</h6>
								</div>
								<div class="prd-bottom">

									
									<a href="productos.php?var1=8&var2=img/productos/pr8.jpg" class="social-info">
										<span class="lnr lnr-move"></span>
										<p class="hover-text">Detalles</p>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Fin Productos -->





	

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

</p>
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
	<script src="js/countdown.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
	<script src="js/gmaps.min.js"></script>
	<script src="js/main.js"></script>


</body>

</html>