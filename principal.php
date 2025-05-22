<?php

    session_start();

    if(!isset($_SESSION['id_usuario'])){
        header("location: startbootstrap-sb-admin-2-gh-pages/indexdash.php");
		
    }

    $nombre = $_SESSION['nombre'];

?>


<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>Electro - HTML Ecommerce Template</title>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />

	<!-- Slick -->
	<link type="text/css" rel="stylesheet" href="css/slick.css" />
	<link type="text/css" rel="stylesheet" href="css/slick-theme.css" />

	<!-- nouislider -->
	<link type="text/css" rel="stylesheet" href="css/nouislider.min.css" />

	<!-- Font Awesome Icon -->
	<link rel="stylesheet" href="css/font-awesome.min.css">

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="css/style.css" />

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

</head>

<body>
	<!-- HEADER -->
	<header>
		<!-- TOP HEADER -->
		<div id="top-header">
			<div class="container">
				<ul class="header-links pull-left">
					<li><a href="#"><i class="fa fa-phone"></i> 321 205 03 26 </a></li>
					<li><a href="#"><i class="fa fa-envelope-o"></i> stuntridersbogota@hotmail.com </a></li>
					<li><a href="#"><i class="fa fa-map-marker"></i> Cra. 15 Bis # 18A - 07 local 101</a></li>
				</ul>
				<ul class="header-links pull-right">
					<li><a href="#"><i class="fa fa-dollar"></i> COL</a></li>
					<li><a href="startbootstrap-sb-admin-2-gh-pages/indexlogin.php"><i class="fa fa-user-o"></i> Mi Usuario</a></li>
				</ul>
			</div>
		</div>
		<!-- /TOP HEADER -->

		<!-- MAIN HEADER -->
		<div id="header">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<!-- LOGO -->
					<div class="col-md-3">
						<div class="header-logo">
							<a href="#" class="logo">
								<img class="logostun" src="img/logo.jpg" alt="">
							</a>
						</div>
					</div>
					<!-- /LOGO -->

					<!-- SEARCH BAR -->
					<div class="col-md-6">
						<div class="header-search">
							<form>
								<select class="input-select">
									<option value="0">Categorias</option>
									<option value="1">Exostos</option>
									<option value="2">Ropa</option>
									<option value="3">Maniguetas</option>
									<option value="4">Cascos</option>
								</select>
								<input class="input" placeholder="Encuentra tu producto">
								<button class="search-btn">Buscar</button>
							</form>
						</div>
					</div>
					<!-- /SEARCH BAR -->

					<!-- ACCOUNT -->
					<div class="col-md-3 clearfix">
						<div class="header-ctn">
							<!-- Wishlist -->
							<div>
								<a href="#">
									<i class="fa fa-heart-o"></i>
									<span>Tus Favoritos</span>
									<div class="qty">2</div>
								</a>
							</div>
							<!-- /Wishlist -->

							<!-- Cart -->
							<div class="dropdown">
								<a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
									<i class="fa fa-shopping-cart"></i>
									<span>Tu carrito</span>
									<div class="qty">3</div>
								</a>
								<div class="cart-dropdown">
									<div class="cart-list">
										<div class="product-widget">
											<div class="product-img">
												<img src="img/mani.png" alt="">
											</div>
											<div class="product-body">
												<h3 class="product-name"><a href="#">Maniguetas de lujo Pulsar NS 200
														Color Naranja</a></h3>
												<h4 class="product-price"><span class="qty">1x</span>$54.900</h4>
											</div>
											<button class="delete"><i class="fa fa-close"></i></button>
										</div>

										<div class="product-widget">
											<div class="product-img">
												<img src="img/calapies.png" alt="">
											</div>
											<div class="product-body">
												<h3 class="product-name"><a href="#">CALAPIÉS RAPTOR ORIGINAL RIDER</a>
												</h3>
												<h4 class="product-price"><span class="qty">3x</span>$780.000</h4>
											</div>
											<button class="delete"><i class="fa fa-close"></i></button>
										</div>
									</div>
									<div class="cart-summary">
										<small>4 Productos seleccionados</small>
										<h5>SUBTOTAL: $834.900</h5>
									</div>
									<div class="cart-btns">
										<a href="#">Ver el Carrito</a>
										<a href="#">Ir a Comprar <i class="fa fa-arrow-circle-right"></i></a>
									</div>
								</div>
							</div>
							<!-- /Cart -->

							<!-- Menu Toogle -->
							<div class="menu-toggle">
								<a href="#">
									<i class="fa fa-bars"></i>
									<span>Menu</span>
								</a>
							</div>
							<!-- /Menu Toogle -->
						</div>
					</div>
					<!-- /ACCOUNT -->
				</div>
				<!-- row -->
			</div>
			<!-- container -->
		</div>
		<!-- /MAIN HEADER -->
	</header>
	<!-- /HEADER -->

	<!-- NAVIGATION -->
	<nav id="navigation">
		<!-- container -->
		<div class="container">
			<!-- responsive-nav -->
			<div id="responsive-nav">
				<!-- NAV -->
				<ul class="main-nav nav navbar-nav">
					<li class="active"><a href="#">Inicio</a></li>
					<li><a href="#">Lo Mas Vendido!!</a></li>
					<li><a href="#">Categorias</a></li>
					<li><a href="#">Exostos</a></li>
					<li><a href="#">Carenajes</a></li>
					<li><a href="#">Ropa</a></li>
					<li><a href="#">Cascos</a></li>
				</ul>
				<!-- /NAV -->
			</div>
			<!-- /responsive-nav -->
		</div>
		<!-- /container -->
	</nav>
	<!-- /NAVIGATION -->

	<!-- SECTION -->
	<div class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<!-- shop -->
				<div class="col-md-4 col-xs-6">
					<div class="shop">
						<div class="shop-img">
							<img src="img/carbu.png" alt="">
						</div>
						<div class="shop-body">
							<h3>Carburadores<br>Lujosos</h3>
							<a href="#" class="cta-btn">Compra Ya!! <i class="fa fa-arrow-circle-right"></i></a>
						</div>
					</div>
				</div>
				<!-- /shop -->

				<!-- shop -->
				<div class="col-md-4 col-xs-6">
					<div class="shop">
						<div class="shop-img">
							<img src="img/Exostos.png" alt="">
						</div>
						<div class="shop-body">
							<h3>Exostos<br>Galvanizados</h3>
							<a href="#" class="cta-btn">Compra Ya!! <i class="fa fa-arrow-circle-right"></i></a>
						</div>
					</div>
				</div>
				<!-- /shop -->

				<!-- shop -->
				<div class="col-md-4 col-xs-6">
					<div class="shop">
						<div class="shop-img">
							<img src="img/oso.png" alt="">
						</div>
						<div class="shop-body">
							<h3>Cameras<br>Collection</h3>
							<a href="#" class="cta-btn">Compra Ya!! <i class="fa fa-arrow-circle-right"></i></a>
						</div>
					</div>
				</div>
				<!-- /shop -->
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /SECTION -->

	<!-- SECTION -->
	<div class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">

				<!-- section title -->
				<div class="col-md-12">
					<div class="section-title">
						<h3 class="title">Nuevos Productos!!</h3>
						<div class="section-nav">
							<ul class="section-tab-nav tab-nav">
								<li class="active"><a data-toggle="tab" href="#tab1">Maniguetas</a></li>
								<li><a data-toggle="tab" href="#tab1">Exostos</a></li>
								<li><a data-toggle="tab" href="#tab1">Maletas</a></li>
								<li><a data-toggle="tab" href="#tab1">Carburadores</a></li>
							</ul>
						</div>
					</div>
				</div>
				<!-- /section title -->

				<!-- Products tab & slick -->
				<div class="col-md-12">
					<div class="row">
						<div class="products-tabs">
							<!-- tab -->
							<div id="tab1" class="tab-pane active">
								<div class="products-slick" data-nav="#slick-nav-1">
									<!-- product -->
									<div class="product">
										<div class="product-img">
											<img src="img/mani.png" alt="">
											<div class="product-label">
												<span class="sale">-30%</span>
												<span class="new">Nuevo</span>
											</div>
										</div>
										<div class="product-body">
											<p class="product-category">Maniguetas</p>
											<h3 class="product-name"><a href="#">Maniguetas de lujo Pulsar NS 200 Color
													Naranja</a></h3>
											<h4 class="product-price">$54.900 <del
													class="product-old-price">$89.900</del></h4>
											<div class="product-rating">
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
											</div>
											<div class="product-btns">
												<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span
														class="tooltipp">Agregar Favoritos</span></button>
												<button class="add-to-compare"><i class="fa fa-exchange"></i><span
														class="tooltipp">Compara Productos</span></button>
												<button class="quick-view"><i class="fa fa-eye"></i><span
														class="tooltipp">Vista Rapida</span></button>
											</div>
										</div>
										<div class="add-to-cart">
											<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> Agregar
												al Carrito</button>
										</div>
									</div>
									<!-- /product -->

									<!-- product -->
									<div class="product">
										<div class="product-img">
											<img src="img/exo1.png" alt="">
											<div class="product-label">
												<span class="new">Lo mas Vendido</span>
											</div>
										</div>
										<div class="product-body">
											<p class="product-category">Exostos</p>
											<h3 class="product-name"><a href="#">Exosto Moto Sc Project Puntera Tornasol
													Escape </a></h3>
											<h4 class="product-price">$211.600 <del
													class="product-old-price">$411.600</del></h4>
											<div class="product-rating">
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star-o"></i>
											</div>
											<div class="product-btns">
												<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span
														class="tooltipp">Agregar Favoritos</span></button>
												<button class="add-to-compare"><i class="fa fa-exchange"></i><span
														class="tooltipp">Compara Productos</span></button>
												<button class="quick-view"><i class="fa fa-eye"></i><span
														class="tooltipp">Vista Rapida</span></button>
											</div>
										</div>
										<div class="add-to-cart">
											<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> Agregar
												al carrito</button>
										</div>
									</div>
									<!-- /product -->

									<!-- product -->
									<div class="product">
										<div class="product-img">
											<img src="img/explo1.png" alt="">
											<div class="product-label">
												<span class="sale">-30%</span>
												<span class="new">Lo mas Vendido</span>
											</div>

										</div>
										<div class="product-body">
											<p class="product-category">Exploradoras</p>
											<h3 class="product-name"><a href="#">EXPLORADORA 12V55W HALÓGENA KC
													HILITES</a></h3>
											<h4 class="product-price">$388.000 <del
													class="product-old-price">$750.999</del></h4>
											<div class="product-rating">
												<div class="product-rating">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
												</div>
											</div>
											<div class="product-btns">
												<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span
														class="tooltipp">Agregar Favoritos</span></button>
												<button class="add-to-compare"><i class="fa fa-exchange"></i><span
														class="tooltipp">Compara Productos</span></button>
												<button class="quick-view"><i class="fa fa-eye"></i><span
														class="tooltipp">Vista Rapida</span></button>
											</div>
										</div>
										<div class="add-to-cart">
											<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> Agregar
												al carrito</button>
										</div>
									</div>
									<!-- /product -->

									<!-- product -->
									<div class="product">
										<div class="product-img">
											<img src="img/leva.png" alt="">
											<div class="product-label">
												<span class="sale">-40%</span>
												<span class="new">Nuevo</span>
											</div>
										</div>
										<div class="product-body">
											<p class="product-category">Maniguetas</p>
											<h3 class="product-name"><a href="#">LEVA DE FRENO RETRÁCTIL FACTORY YCF</a>
											</h3>
											<h4 class="product-price">$160.000 <del
													class="product-old-price">$210.999</del></h4>
											<div class="product-rating">
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
											</div>
											<div class="product-btns">
												<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span
														class="tooltipp">Agregar Favoritos</span></button>
												<button class="add-to-compare"><i class="fa fa-exchange"></i><span
														class="tooltipp">Compara Productos</span></button>
												<button class="quick-view"><i class="fa fa-eye"></i><span
														class="tooltipp">Vista Rapida</span></button>
											</div>
										</div>
										<div class="add-to-cart">
											<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> Agregar
												al carrito</button>
										</div>
									</div>
									<!-- /product -->

									<!-- product -->
									<div class="product">
										<div class="product-img">
											<img src="img/oso1.png" height="263px" alt="">
											<div class="product-label">
												<span class="sale">-40%</span>
												<span class="new">Nuevo</span>
											</div>
										</div>
										<div class="product-body">
											<p class="product-category">Ropa</p>
											<h3 class="product-name"><a href="#">MOCHILA OSO NEGRA RING OF FIRE</a></h3>
											<h4 class="product-price">$799.900 <del
													class="product-old-price">$1.299.000</del></h4>
											<div class="product-rating">
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
											</div>
											<div class="product-btns">
												<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span
														class="tooltipp">Agregar Favoritos</span></button>
												<button class="add-to-compare"><i class="fa fa-exchange"></i><span
														class="tooltipp">Compara Productos</span></button>
												<button class="quick-view"><i class="fa fa-eye"></i><span
														class="tooltipp">Vista Rapida</span></button>
											</div>
										</div>
										<div class="add-to-cart">
											<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> Agregar
												al carrito</button>
										</div>
									</div>
									<!-- /product -->
								</div>
								<div id="slick-nav-1" class="products-slick-nav"></div>
							</div>
							<!-- /tab -->
						</div>
					</div>
				</div>
				<!-- Products tab & slick -->
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /SECTION -->

	<!-- HOT DEAL SECTION -->
	<div id="hot-deal" class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<div class="col-md-12">
					<div class="hot-deal">
						<ul class="hot-deal-countdown">
							<li>
								<div>
									<h3>02</h3>
									<span>Dias</span>
								</div>
							</li>
							<li>
								<div>
									<h3>10</h3>
									<span>Horas</span>
								</div>
							</li>
							<li>
								<div>
									<h3>34</h3>
									<span>Minutos</span>
								</div>
							</li>
							<li>
								<div>
									<h3>60</h3>
									<span>Segundos</span>
								</div>
							</li>
						</ul>
						<h2 class="text-uppercase">Gran oferta esta semana</h2>
						<p>Nueva Colección Hasta 50% de DESCUENTO</p>
						<a class="primary-btn cta-btn" href="#">Compra Aqui</a>
					</div>
				</div>
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /HOT DEAL SECTION -->

	<!-- SECTION -->
	<div class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">

				<!-- section title -->
				<div class="col-md-12">
					<div class="section-title">
						<h3 class="title">Lo mas Vendido</h3>
						<div class="section-nav">
							<ul class="section-tab-nav tab-nav">
								<li class="active"><a data-toggle="tab" href="#tab2">Maniguetas</a></li>
								<li><a data-toggle="tab" href="#tab2">Pipetas</a></li>
								<li><a data-toggle="tab" href="#tab2">Maletas</a></li>
								<li><a data-toggle="tab" href="#tab2">calapies</a></li>
							</ul>
						</div>
					</div>
				</div>
				<!-- /section title -->

				<!-- Products tab & slick -->
				<div class="col-md-12">
					<div class="row">
						<div class="products-tabs">
							<!-- tab -->
							<div id="tab2" class="tab-pane fade in active">
								<div class="products-slick" data-nav="#slick-nav-2">
									<!-- product -->
									<div class="product">
										<div class="product-img">
											<img src="img/pipeta2.png" alt="">
											<div class="product-label">
												<span class="sale">-30%</span>
												<span class="new">nuevo</span>
											</div>
										</div>
										<div class="product-body">
											<p class="product-category">Pipetas</p>
											<h3 class="product-name"><a href="#">Pipetas powercore2 fmf</a></h3>
											<h4 class="product-price">$320.000 <del
													class="product-old-price">$399.900</del></h4>
											<div class="product-rating">
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
											</div>
											<div class="product-btns">
												<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span
														class="tooltipp">AGREGAR FAVORITOS</span></button>
												<button class="add-to-compare"><i class="fa fa-exchange"></i><span
														class="tooltipp">COMPARA PRODUCTOS</span></button>
												<button class="quick-view"><i class="fa fa-eye"></i><span
														class="tooltipp">VISTA RAPIDA</span></button>
											</div>
										</div>
										<div class="add-to-cart">
											<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i>Agregar al carrito</button>
										</div>
									</div>
									<!-- /product -->

									<!-- product -->
									<div class="product">
										<div class="product-img">
											<img src="img/oso.png" alt="">
											<div class="product-label">
												<span class="sale">-30%</span>
												<span class="new">nuevo</span>
											</div>
										</div>
										<div class="product-body">
											<p class="product-category">Maletas</p>
											<h3 class="product-name"><a href="#">mochila oso dorado ring of fire</a></h3>
											<h4 class="product-price">$799.900 <del
													class="product-old-price">$1.299.000</del></h4>
											<div class="product-rating">
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star-o"></i>
											</div>
											<div class="product-btns">
												<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span
													class="tooltipp">AGREGAR FAVORITOS</span></button>
											<button class="add-to-compare"><i class="fa fa-exchange"></i><span
													class="tooltipp">COMPARA PRODUCTOS</span></button>
											<button class="quick-view"><i class="fa fa-eye"></i><span
													class="tooltipp">VISTA RAPIDA</span></button>
											</div>
										</div>
										<div class="add-to-cart">
											<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> Agregar al carrito</button>
										</div>
									</div>
									<!-- /product -->

									<!-- product -->
									<div class="product">
										<div class="product-img">
											<img src="img/pipeta.png" alt="">
											<div class="product-label">
												<span class="sale">-30%</span>
												<span class="new">nuevo</span>
											</div>
										</div>
										<div class="product-body">
											<p class="product-category">Maniguetas</p>
											<h3 class="product-name"><a href="#">Combo recamara/pipeta tipo original</a></h3>
											<h4 class="product-price">$440.000 <del
													class="product-old-price">$620.000</del></h4>
											<div class="product-rating">
											</div>
											<div class="product-rating">
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
											</div>
											<div class="product-btns">
												<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span
													class="tooltipp">AGREGAR FAVORITOS</span></button>
											<button class="add-to-compare"><i class="fa fa-exchange"></i><span
													class="tooltipp">COMPARA PRODUCTOS</span></button>
											<button class="quick-view"><i class="fa fa-eye"></i><span
													class="tooltipp">VISTA RAPIDA</span></button>
											</div>
										</div>
										<div class="add-to-cart">
											<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> Agregar al carrito</button>
										</div>
									</div>
									<!-- /product -->

									<!-- product -->
									<div class="product">
										<div class="product-img">
											<img src="img/Exostos.png" alt="">
											<div class="product-label">
												<span class="sale">-30%</span>
												<span class="new">nuevo</span>
											</div>
										</div>
										<div class="product-body">
											<p class="product-category">Pipetas</p>
											<h3 class="product-name"><a href="#">pipetas power factory black blue grey</a></h3>
											<h4 class="product-price">$540.000 <del
													class="product-old-price">$620.000</del></h4>
											<div class="product-rating">
											</div>
											<div class="product-rating">
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
											</div>
											<div class="product-btns">
												<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span
													class="tooltipp">AGREGAR FAVORITOS</span></button>
											<button class="add-to-compare"><i class="fa fa-exchange"></i><span
													class="tooltipp">COMPARA PRODUCTOS</span></button>
											<button class="quick-view"><i class="fa fa-eye"></i><span
													class="tooltipp">VISTA RAPIDA</span></button>
											</div>
										</div>
										<div class="add-to-cart">
											<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> Agregar al carrito</button>
										</div>
									</div>
									<!-- /product -->

									<!-- product -->
									<div class="product">
										<div class="product-img">
											<img src="img/exo1.png" alt="">
											<div class="product-label">
												<span class="sale">-30%</span>
												<span class="new">nuevo</span>
											</div>
										</div>
										<div class="product-body">
											<p class="product-category">Exotos</p>
											<h3 class="product-name"><a href="#">Exosto Moto Sc Project Puntera Tornasol</a></h3>
											<h4 class="product-price">$211.000 <del
													class="product-old-price">$411.000</del></h4>
											<div class="product-rating">
											</div>
											<div class="product-rating">
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
											</div>
											<div class="product-btns">
												<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span
													class="tooltipp">AGREGAR FAVORITOS</span></button>
											<button class="add-to-compare"><i class="fa fa-exchange"></i><span
													class="tooltipp">COMPARA PRODUCTOS</span></button>
											<button class="quick-view"><i class="fa fa-eye"></i><span
													class="tooltipp">VISTA RAPIDA</span></button>
											</div>
										</div>
										<div class="add-to-cart">
											<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> Agregar al carrito</button>
										</div>
									</div>
									<!-- /product -->
								</div>
								<div id="slick-nav-2" class="products-slick-nav"></div>
							</div>
							<!-- /tab -->
						</div>
					</div>
				</div>
				<!-- /Products tab & slick -->
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /SECTION -->

	<!-- SECTION -->
	<div class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<div class="col-md-4 col-xs-6">
					<div class="section-title">
						<h4 class="title">Lo mas Vendido</h4>
						<div class="section-nav">
							<div id="slick-nav-3" class="products-slick-nav"></div>
						</div>
					</div>

					<div class="products-widget-slick" data-nav="#slick-nav-3">
						<div>
							<!-- product widget -->
							<div class="product-widget">
								<div class="product-img">
									<img src="./img/oso.png" alt="">
								</div>
								<div class="product-body">
									<p class="product-category">Maletas</p>
									<h3 class="product-name"><a href="#">mochila oso dorado</a></h3>
									<h4 class="product-price">$980.000 <del class="product-old-price">$1.200.00</del></h4>
								</div>
							</div>
							<!-- /product widget -->

							<!-- product widget -->
							<div class="product-widget">
								<div class="product-img">
									<img src="./img/oso1.png" alt="">
								</div>
								<div class="product-body">
									<p class="product-category">Maletas</p>
									<h3 class="product-name"><a href="#">mochila oso negro/naranja</a></h3>
									<h4 class="product-price">$980.000 <del class="product-old-price">$1.200.000</del></h4>
								</div>
							</div>
							<!-- /product widget -->

							<!-- product widget -->
							<div class="product-widget">
								<div class="product-img">
									<img src="./img/pipeta.png" alt="">
								</div>
								<div class="product-body">
									<p class="product-category">pipetas</p>
									<h3 class="product-name"><a href="#">Combo recamara/pipeta tipo original</a></h3>
									<h4 class="product-price">$440.000 <del class="product-old-price">$620.000</del></h4>
								</div>
							</div>
							<!-- product widget -->
						</div>

						<div>
							<!-- product widget -->
							<div class="product-widget">
								<div class="product-img">
									<img src="./img/pipeta2.png" alt="">
								</div>
								<div class="product-body">
									<p class="product-category">pipetas</p>
									<h3 class="product-name"><a href="#">Pipetas powercore2 fmf</a></h3>
									<h4 class="product-price">$320.000 <del class="product-old-price">$390.000</del></h4>
								</div>
							</div>
							<!-- /product widget -->

							<!-- product widget -->
							<div class="product-widget">
								<div class="product-img">
									<img src="./img/leva.png" alt="">
								</div>
								<div class="product-body">
									<p class="product-category">maniguetas</p>
									<h3 class="product-name"><a href="#">leva de freno retractil factory ycf</a></h3>
									<h4 class="product-price">$160.000 <del class="product-old-price">$210.000</del></h4>
								</div>
							</div>
							<!-- /product widget -->

							<!-- product widget -->
							<div class="product-widget">
								<div class="product-img">
									<img src="./img/explo1.png" alt="">
								</div>
								<div class="product-body">
									<p class="product-category">Exploradoras</p>
									<h3 class="product-name"><a href="#">exploradora 12v55w halogena kc hilites </a></h3>
									<h4 class="product-price">$380.000 <del class="product-old-price">$750.900</del></h4>
								</div>
							</div>
							<!-- product widget -->
						</div>
					</div>
				</div>

				<div class="col-md-4 col-xs-6">
					<div class="section-title">
						<h4 class="title">Lo mas Vendido</h4>
						<div class="section-nav">
							<div id="slick-nav-4" class="products-slick-nav"></div>
						</div>
					</div>

					<div class="products-widget-slick" data-nav="#slick-nav-4">
						<div>
							<!-- product widget -->
							<div class="product-widget">
								<div class="product-img">
									<img src="./img/Exostos.png" alt="">
								</div>
								<div class="product-body">
									<p class="product-category">pipetas</p>
									<h3 class="product-name"><a href="#">pipetas power factory black blue grey</a></h3>
									<h4 class="product-price">$540.000 <del class="product-old-price">$620.000</del></h4>
								</div>
							</div>
							<!-- /product widget -->

							<!-- product widget -->
							<div class="product-widget">
								<div class="product-img">
									<img src="./img/calapies.png" alt="">
								</div>
								<div class="product-body">
									<p class="product-category">calapies</p>
									<h3 class="product-name"><a href="#">calapies negros</a></h3>
									<h4 class="product-price">$80.000 <del class="product-old-price">$110.000</del></h4>
								</div>
							</div>
							<!-- /product widget -->

							<!-- product widget -->
							<div class="product-widget">
								<div class="product-img">
									<img src="./img/carbu.png" alt="">
								</div>
								<div class="product-body">
									<p class="product-category">Carburadores</p>
									<h3 class="product-name"><a href="#">carburador lujoso dorado</a></h3>
									<h4 class="product-price">$1.950.000 <del class="product-old-price">$2.100.00</del></h4>
								</div>
							</div>
							<!-- product widget -->
						</div>

						<div>
							<!-- product widget -->
							<div class="product-widget">
								<div class="product-img">
									<img src="./img/pipeta.png" alt="">
								</div>
								<div class="product-body">
									<p class="product-category">pipetas</p>
									<h3 class="product-name"><a href="#">Combo recamara/pipeta tipo original</a></h3>
									<h4 class="product-price">$440.000 <del class="product-old-price">$620.000</del></h4>
								</div>
							</div>
							<!-- /product widget -->

							<!-- product widget -->
							<div class="product-widget">
								<div class="product-img">
									<img src="./img/pipeta2.png" alt="">
								</div>
								<div class="product-body">
									<p class="product-category">pipetas/p>
									<h3 class="product-name"><a href="#">Pipetas powercore2 fmf</a></h3>
									<h4 class="product-price">$320.000 <del class="product-old-price">$390.000</del></h4>
								</div>
							</div>
							<!-- /product widget -->

							<!-- product widget -->
							<div class="product-widget">
								<div class="product-img">
									<img src="./img/oso.png" alt="">
								</div>
								<div class="product-body">
									<p class="product-category">Maletas</p>
									<h3 class="product-name"><a href="#">mochila oso dorado</a></h3>
									<h4 class="product-price">$799.000 <del class="product-old-price">$1.299.000</del></h4>
								</div>
							</div>
							<!-- product widget -->
						</div>
					</div>
				</div>

				<div class="clearfix visible-sm visible-xs"></div>

				<div class="col-md-4 col-xs-6">
					<div class="section-title">
						<h4 class="title">Lo mas Vendido</h4>
						<div class="section-nav">
							<div id="slick-nav-5" class="products-slick-nav"></div>
						</div>
					</div>

					<div class="products-widget-slick" data-nav="#slick-nav-5">
						<div>
							<!-- product widget -->
							<div class="product-widget">
								<div class="product-img">
									<img src="./img/pipeta.png" alt="">
								</div>
								<div class="product-body">
									<p class="product-category">pipeta</p>
									<h3 class="product-name"><a href="#">Combo recamara/pipeta tipo original</a></h3>
									<h4 class="product-price">$440.000 <del class="product-old-price">$620.000</del></h4>
								</div>
							</div>
							<!-- /product widget -->

							<!-- product widget -->
							<div class="product-widget">
								<div class="product-img">
									<img src="./img/leva.png" alt="">
								</div>
								<div class="product-body">
									<p class="product-category">maniguetas</p>
									<h3 class="product-name"><a href="#">leva de freno retractil factory ycf</a></h3>
									<h4 class="product-price">$160.000 <del class="product-old-price">$210.000</del></h4>
								</div>
							</div>
							<!-- /product widget -->

							<!-- product widget -->
							<div class="product-widget">
								<div class="product-img">
									<img src="./img/mani.png" alt="">
								</div>
								<div class="product-body">
									<p class="product-category">manigueta</p>
									<h3 class="product-name"><a href="#">manigueta de lujo pulsar ns200 color naranja</a></h3>
									<h4 class="product-price">$54.900 <del class="product-old-price">$89.900</del></h4>
								</div>
							</div>
							<!-- product widget -->
						</div>

						<div>
							<!-- product widget -->
							<div class="product-widget">
								<div class="product-img">
									<img src="./img/carbu.png" alt="">
								</div>
								<div class="product-body">
									<p class="product-category">Category</p>
									<h3 class="product-name"><a href="#">carburafor lujos dorado</a></h3>
									<h4 class="product-price">$1.950.000<del class="product-old-price">$2.100.000</del></h4>
								</div>
							</div>
							<!-- /product widget -->

							<!-- product widget -->
							<div class="product-widget">
								<div class="product-img">
									<img src="./img/exo1.png" alt="">
								</div>
								<div class="product-body">
									<p class="product-category">Exostos</p>
									<h3 class="product-name"><a href="#">exostos moto sc project puntera tornasol escape</a></h3>
									<h4 class="product-price">$211.600 <del class="product-old-price">$411.600</del></h4>
								</div>
							</div>
							<!-- /product widget -->

							<!-- product widget -->
							<div class="product-widget">
								<div class="product-img">
									<img src="./img/Exostos.png" alt="">
								</div>
								<div class="product-body">
									<p class="product-category">pipetas</p>
									<h3 class="product-name"><a href="#">pipetas power factory black blue grey</a></h3>
									<h4 class="product-price">$540.000<del class="product-old-price">$620.000</del></h4>
								</div>
							</div>
							<!-- product widget -->
						</div>
					</div>
				</div>

			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /SECTION -->

	<!-- NEWSLETTER -->
	<div id="newsletter" class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<div class="col-md-12">
					<div class="newsletter">
						<p>Suscribete a Nuestro <strong>BOLETÍN DE NOTICIAS</strong></p>
						<form>
							<input class="input" type="email" placeholder="Correo Electronico">
							<button class="newsletter-btn"><i class="fa fa-envelope"></i> Subscribete</button>
						</form>
						<ul class="newsletter-follow">
							<li>
								<a href="#"><i class="fa fa-facebook"></i></a>
							</li>
							<li>
								<a href="#"><i class="fa fa-twitter"></i></a>
							</li>
							<li>
								<a href="#"><i class="fa fa-instagram"></i></a>
							</li>
							<li>
								<a href="#"><i class="fa fa-pinterest"></i></a>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /NEWSLETTER -->

	<!-- FOOTER -->
	<footer id="footer">
		<!-- top footer -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-3 col-xs-6">
						<div class="footer">
							<h3 class="footer-title">Sobre Nosotros</h3>
							<p>Stunt Riders nace como un proyecto con el fin de expandir y promover la practica del Stunt como deporte de alto riesgo y posicionandose como una tienda especializada en los productos mas exclucivos para motos de bajo silindraje.</p>
							<ul class="footer-links">
								<li><a href="#"><i class="fa fa-map-marker"></i> Cra. 15 Bis # 18A - 07 local 101</a></li>
								<li><a href="#"><i class="fa fa-phone"></i> 321 205 0326</a></li>
								<li><a href="#"><i class="fa fa-envelope-o"></i>stuntridersbogota@hotmail.com</a></li>
							</ul>
						</div>
					</div>

					<div class="col-md-3 col-xs-6">
						<div class="footer">
							<h3 class="footer-title">Categorias</h3>
							<ul class="footer-links">
								<li><a href="#">Exostos</a></li>
								<li><a href="#">Maniguetas</a></li>
								<li><a href="#">Ropa</a></li>
								<li><a href="#">Cascos</a></li>
								<li><a href="#">Motos</a></li>
							</ul>
						</div>
					</div>

					<div class="clearfix visible-xs"></div>

					<div class="col-md-3 col-xs-6">
						<div class="footer">
							<h3 class="footer-title">Información</h3>
							<ul class="footer-links">
								<li><a href="#">Sobre Nosotros</a></li>
								<li><a href="#">Contactanos</a></li>
								<li><a href="#">Politicas de Privacidad</a></li>
								<li><a href="#">Pedidos y Devoluciones</a></li>
								<li><a href="#">Terminos y condiciones</a></li>
							</ul>
						</div>
					</div>

					<div class="col-md-3 col-xs-6">
						<div class="footer">
							<h3 class="footer-title">Servicio</h3>
							<ul class="footer-links">
								<li><a href="#">Mi Cuenta</a></li>
								<li><a href="#">Ver Carrito</a></li>
								<li><a href="#">Favoritos</a></li>
								<li><a href="#">Seguimiento del Pedido</a></li>
								<li><a href="#">Ayuda</a></li>
							</ul>
						</div>
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /top footer -->

		<!-- bottom footer -->
		<div id="bottom-footer" class="section">
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-12 text-center">
						<ul class="footer-payments">
							<li><a href="#"><i class="fa fa-cc-visa"></i></a></li>
							<li><a href="#"><i class="fa fa-credit-card"></i></a></li>
							<li><a href="#"><i class="fa fa-cc-paypal"></i></a></li>
							<li><a href="#"><i class="fa fa-cc-mastercard"></i></a></li>
							<li><a href="#"><i class="fa fa-cc-discover"></i></a></li>
							<li><a href="#"><i class="fa fa-cc-amex"></i></a></li>
						</ul>
						<span class="copyright">
							<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
							Copyright &copy;
							<script>document.write(new Date().getFullYear());</script> All rights reserved | This
							template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a
								href="https://colorlib.com" target="_blank">Colorlib</a>
							<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						</span>
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /bottom footer -->
	</footer>
	<!-- /FOOTER -->

	<!-- jQuery Plugins -->
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/slick.min.js"></script>
	<script src="js/nouislider.min.js"></script>
	<script src="js/jquery.zoom.min.js"></script>
	<script src="js/main.js"></script>

</body>

</html>