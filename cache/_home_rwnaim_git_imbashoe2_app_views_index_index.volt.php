<!DOCTYPE html>
<html>
<head>
	<!-- Meta Tag -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name='copyright' content=''>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<?= $this->assets->outputCss() ?>	
	<!-- Title Tag  -->
    <title>Imbashoe</title>
	<!-- Favicon -->
	<link rel="icon" type="img/png" href="img/Logoimba.png">
	<!-- Web Font -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">
	
	<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?= $this->url->getStatic('css/signin.css') ?>" type="text/css">
    <!-- <link rel="stylesheet" href="<?= $this->url->getStatic('css/fontawesome.min.css') ?>" type="text/css"> -->
</head>
<body class="js">	
	<!-- Header -->
	<header class="header shop">
		<!-- End Topbar -->
		<div class="middle-inner">
			<div class="container">
				<div class="row">
					<div class="col-lg-2 col-md-2 col-12">
						<!-- Logo -->
						<div class="logo">
							<a href="index.volt"><img src="img/Logoimba.png" alt="logo" width="150px"></a>
						</div>
						
						<!--/ End Logo -->
						<!-- Search Form -->
						<div class="search-top">
							<div class="top-search"><a href="#0"><img src="SVG/search-white.svg"width="20px"></a></div>
							<!-- Search Form -->
							<div class="search-top">
								<form class="search-form">
									<input type="text" placeholder="Search here..." name="search">
									<button value="search" type="submit"><img class="searchsvg" src="SVG/search-white.svg" width="20px"></button>
								</form>
							</div>
							<!--/ End Search Form -->
						</div>
						<!--/ End Search Form -->
						<div class="mobile-nav"></div>
					</div>
					<div class="col-lg-8 col-md-7 col-12">
						<div class="search-bar-top">
							<div class="search-bar ">
								
								<form class="posisiform">
									<input name="search" placeholder="Search Products Here....." type="search">
								</form>
								<select class="form-control" id="form_control">
									<option selected="selected">All Category</option>
									<option>Men</option>
									<option>Women</option>
									<option>Kids item</option>
								</select>
								<form>
									<button class="btnn"><img class="searchsvg" src="SVG/search-white.svg" width="20px"></button>
								</form>
								
								
							</div>
						</div>
					</div>
					<div class="col-lg-2 col-md-3 col-12">
						<div class="right-bar">
							<!-- Search Form -->
							
							<div class="sinlge-bar signin">
                                <a href="#" class="single-icon"><i class="fa fa-user-circle-o" aria-hidden="true"></i></a>
                                <div class="signin-popup">
									<div class="dropdown-cart-header">
                                        <p class="signin-text">Sign In</p>
                                        <div class="sign-form">
                                            <form method="POST" class="form-signin">
                                                
                                                <label for="inputEmail" class="sr-only">Email address</label>
                                                <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
                                                <label for="inputPassword" class="sr-only">Password</label>
                                                <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
                                                <div class="checkbox mb-3">
                                                  <label>
                                                    <input type="checkbox" value="remember-me"> Remember me
                                                  </label>
                                                </div>
                                                <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
                                                <div class="belumpunyaakun">
                                                    <p>Belum punya akun?</p> <a href="<?= $this->url->get('/signup') ?>"> Daftar sekarang</a>
                                                </div>  
                                            </form>
                                        </div>
                                    </div>
                                    
                                   
								</div>
                            </div>
                           
							<div class="sinlge-bar shopping">
								<a href="#" class="single-icon"><i class="fa fa-heart-o" aria-hidden="true"></i> <span class="total-count">2</span></a>
								<!-- Shopping Item -->
								<div class="shopping-item">
									<div class="dropdown-cart-header">
										<span>2 Items</span>
										<a href="#">View Wishlist</a>
									</div>
									<ul class="shopping-list">
										<li>
											<a href="#" class="remove" title="Remove this item"><i class="fa fa-remove"></i></a>
											<a class="cart-img" href="#"><img src="https://via.placeholder.com/70x70" alt="#"></a>
											<h4><a href="#">Woman Ring</a></h4>
											<p class="quantity">1x - <span class="amount">$99.00</span></p>
										</li>
										<li>
											<a href="#" class="remove" title="Remove this item"><i class="fa fa-remove"></i></a>
											<a class="cart-img" href="#"><img src="https://via.placeholder.com/70x70" alt="#"></a>
											<h4><a href="#">Woman Necklace</a></h4>
											<p class="quantity">1x - <span class="amount">$35.00</span></p>
										</li>
									</ul>
									<div class="bottom">
										<div class="total">
											<span>Total</span>
											<span class="total-amount">$134.00</span>
										</div>
										<a href="checkout.html" class="btn animate">Lihat Selengkapnya</a>
									</div>
								</div>
								<!--/ End Shopping Item -->
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Header Inner -->
		<div class="header-inner">
			<div class="container">
				<div class="cat-nav-head">
					<div class="row">
						<div class="col-lg-3">
							<div class="all-category">
								<h3 class="cat-heading"><i class="fa fa-bars" aria-hidden="true"></i>CATEGORIES</h3>
								<ul class="main-category">
									<li><a href="#">New Arrivals<i class="fa fa-angle-right"></i></a>
										<ul class="sub-category">
											<li><a href="#">accessories</a></li>
											<li><a href="#">best selling</a></li>
											<li><a href="#">top 100 offer</a></li>
											<li><a href="#">sunglass</a></li>
											<li><a href="#">watch</a></li>
											<li><a href="#">man’s product</a></li>
											<li><a href="#">ladies</a></li>
											<li><a href="#">westrn dress</a></li>
											<li><a href="#">denim </a></li>
										</ul>
									</li>
									<li class="main-mega"><a href="#">best selling <i class="fa fa-angle-right"></i></a>
										<ul class="mega-menu">
											<li class="single-menu">
												<a href="#" class="title-link">Shop Kid's</a>
												<div class="image">
													<img src="https://via.placeholder.com/225x155" alt="#">
												</div>
												<div class="inner-link">
													<a href="#">Kids Toys</a>
													<a href="#">Kids Travel Car</a>
													<a href="#">Kids Color Shape</a>
													<a href="#">Kids Tent</a>
												</div>
											</li>
											<li class="single-menu">
												<a href="#" class="title-link">Shop Men's</a>
												<div class="image">
													<img src="https://via.placeholder.com/225x155" alt="#">
												</div>
												<div class="inner-link">
													<a href="#">Watch</a>
													<a href="#">T-shirt</a>
													<a href="#">Hoodies</a>
													<a href="#">Formal Pant</a>
												</div>
											</li>
											<li class="single-menu">
												<a href="#" class="title-link">Shop Women's</a>
												<div class="image">
													<img src="https://via.placeholder.com/225x155" alt="#">
												</div>
												<div class="inner-link">
													<a href="#">Ladies Shirt</a>
													<a href="#">Ladies Frog</a>
													<a href="#">Ladies Sun Glass</a>
													<a href="#">Ladies Watch</a>
												</div>
											</li>
										</ul>
									</li>
									<li><a href="#">accessories</a></li>
									<li><a href="#">top 100 offer</a></li>
									<li><a href="#">sunglass</a></li>
									<li><a href="#">watch</a></li>
									<li><a href="#">man’s product</a></li>
									<li><a href="#">ladies</a></li>
									<li><a href="#">westrn dress</a></li>
									<li><a href="#">denim </a></li>
								</ul>
							</div>
						</div>
						<div class="col-lg-9 col-12">
							<div class="main-menu"></div>
								<!-- Main Menu -->
								<nav class="navbar navbar-expand-lg">
									<div class="navbar-collapse">	
										<div class="nav-inner">	
											<ul class="nav main-menu menu navbar-nav">
													<li class="active"><a href="#">Home</a></li>
													<li><a href="#">Product</a></li>												
													<li><a href="#">Service</a></li>
													<li><a href="#">Shop</i><span class="new">New</span></a>
														<ul class="dropdown">   
															<li><a href="shop-grid.html">Shop Grid</a></li>
															<li><a href="cart.html">Cart</a></li>
															<li><a href="checkout.html">Checkout</a></li>
														</ul>
													</li>
													<li><a href="#">Pages</a></li>									
													<li><a href="#">Blog <i class="fa fa-angle-down"></i></a> 
														<ul class="dropdown">
															<li><a href="blog-single-sidebar.html">Blog Single Sidebar</a></li>
														</ul>
													</li>
													<li><a href="contact.html">Contact Us</a></li>
												</ul>
										</div>
									</div>
								</nav>
								<!--/ End Main Menu -->	
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--/ End Header Inner -->
	</header>
	<!--/ End Header -->
	
	<!-- Slider Area -->
	<section class="hero-slider">
		<!-- Single Slider -->
		<div class="single-slider">
			<div class="container">
				<div class="row no-gutters">
					<div class="col-lg-9 offset-lg-3 col-12">
						<div class="text-inner">
							<div class="row">
								<div class="col-lg-7 col-12">
									<div class="hero-text">
										<h1><span>UP TO 50% OFF </span>Shirt For Man</h1>
										<p>Maboriosam in a nesciung eget magnae <br> dapibus disting tloctio in the find it pereri <br> odiy maboriosm.</p>
										<div class="button">
											<a href="#" class="btn">Shop Now!</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--/ End Single Slider -->
	</section>
	<!--/ End Slider Area -->
	
	<!-- Start Small Banner  -->
	<section class="small-banner section">
		<div class="container-fluid">
			<div class="row">
				<!-- Single Banner  -->
				<div class="col-lg-4 col-md-6 col-12">
					<div class="single-banner">
						<img src="https://via.placeholder.com/600x370" alt="#">
						<div class="content">
							<p>Man's Collectons</p>
							<h3>Summer travel <br> collection</h3>
							<a href="#">Discover Now</a>
						</div>
					</div>
				</div>
				<!-- /End Single Banner  -->
				<!-- Single Banner  -->
				<div class="col-lg-4 col-md-6 col-12">
					<div class="single-banner">
						<img src="https://via.placeholder.com/600x370" alt="#">
						<div class="content">
							<p>Bag Collectons</p>
							<h3>Awesome Bag <br> 2020</h3>
							<a href="#">Shop Now</a>
						</div>
					</div>
				</div>
				<!-- /End Single Banner  -->
				<!-- Single Banner  -->
				<div class="col-lg-4 col-12">
					<div class="single-banner tab-height">
						<img src="https://via.placeholder.com/600x370" alt="#">
						<div class="content">
							<p>Flash Sale</p>
							<h3>Mid Season <br> Up to <span>40%</span> Off</h3>
							<a href="#">Discover Now</a>
						</div>
					</div>
				</div>
				<!-- /End Single Banner  -->
			</div>
		</div>
	</section>
	<!-- End Small Banner -->
	
	<!-- Start Product Area -->
    <div class="product-area section">
            <div class="container">
				<div class="row">
					<div class="col-12">
						<div class="section-title">
							<h2>Trending Item</h2>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-12">
						<div class="product-info">
							<div class="nav-main">
								<!-- Tab Nav -->
								<ul class="nav nav-tabs" id="myTab" role="tablist">
									<li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#man" role="tab">Man</a></li>
									<li class="nav-item"><a class="nav-link" data-toggle="tab" href="#women" role="tab">Woman</a></li>
									<li class="nav-item"><a class="nav-link" data-toggle="tab" href="#kids" role="tab">Kids</a></li>
									<li class="nav-item"><a class="nav-link" data-toggle="tab" href="#accessories" role="tab">Accessories</a></li>
									<li class="nav-item"><a class="nav-link" data-toggle="tab" href="#essential" role="tab">Essential</a></li>
									<li class="nav-item"><a class="nav-link" data-toggle="tab" href="#prices" role="tab">Prices</a></li>
								</ul>
								<!--/ End Tab Nav -->
							</div>
							<div class="tab-content" id="myTabContent">
								<!-- Start Single Tab -->
								<div class="tab-pane fade show active" id="man" role="tabpanel">
									<div class="tab-single">
										<div class="row">
											<div class="col-xl-3 col-lg-4 col-md-4 col-12">
												<div class="single-product">
													<div class="product-img">
														<a href="product-details.html">
															<img class="default-img" src="https://via.placeholder.com/550x750" alt="#">
															<img class="hover-img" src="https://via.placeholder.com/550x750" alt="#">
														</a>
														<div class="button-head">
															<div class="product-action">
																<!--  <a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>  -->
																<a title="Wishlist" href="#"><i class="fa fa-heart" aria-hidden="true"></i><span>Add to Wishlist</span></a>
																<!--  <a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>   -->
															</div>
															<div class="product-action-2">
																<a title="Tambahkan ke Wishlist" href="#">Lihat Selengkapnya</a>
															</div>
														</div>
													</div>
													<div class="product-content">
														<h3><a href="product-details.html">Women Hot Collection</a></h3>
														<div class="product-price">
															<span>$29.00</span>
														</div>
													</div>
												</div>
											</div>
											<div class="col-xl-3 col-lg-4 col-md-4 col-12">
												<div class="single-product">
													<div class="product-img">
														<a href="product-details.html">
															<img class="default-img" src="https://via.placeholder.com/550x750" alt="#">
															<img class="hover-img" src="https://via.placeholder.com/550x750" alt="#">
														</a>
														<div class="button-head">
															<div class="product-action">    
																<a title="Wishlist" href="#">  <i class="fa fa-heart" aria-hidden="true"></i><span>Add to Wishlist</span></a>
																   
															</div>
															<div class="product-action-2">
																<a title="Tambahkan ke Wishlist" href="#">Lihat Selengkapnya</a>
															</div>
														</div>
													</div>
													<div class="product-content">
														<h3><a href="product-details.html">Awesome Pink Show</a></h3>
														<div class="product-price">
															<span>$29.00</span>
														</div>
													</div>
												</div>
											</div>
											<div class="col-xl-3 col-lg-4 col-md-4 col-12">
												<div class="single-product">
													<div class="product-img">
														<a href="product-details.html">
															<img class="default-img" src="https://via.placeholder.com/550x750" alt="#">
															<img class="hover-img" src="https://via.placeholder.com/550x750" alt="#">
														</a>
														<div class="button-head">
															<div class="product-action">
																  
																<a title="Wishlist" href="#"><i class="fa fa-heart" aria-hidden="true"></i><span>Add to Wishlist</span></a>
																   
															</div>
															<div class="product-action-2">
																<a title="Tambahkan ke Wishlist" href="#">Lihat Selengkapnya</a>
															</div>
														</div>
													</div>
													<div class="product-content">
														<h3><a href="product-details.html">Awesome Bags Collection</a></h3>
														<div class="product-price">
															<span>$29.00</span>
														</div>
													</div>
												</div>
											</div>
											<div class="col-xl-3 col-lg-4 col-md-4 col-12">
												<div class="single-product">
													<div class="product-img">
														<a href="product-details.html">
															<img class="default-img" src="https://via.placeholder.com/550x750" alt="#">
															<img class="hover-img" src="https://via.placeholder.com/550x750" alt="#">
															<span class="new">New</span>
														</a>
														<div class="button-head">
															<div class="product-action">
																  
																<a title="Wishlist" href="#"><i class="fa fa-heart" aria-hidden="true"></i><span>Add to Wishlist</span></a>
																   
															</div>
															<div class="product-action-2">
																<a title="Tambahkan ke Wishlist" href="#">Lihat Selengkapnya</a>
															</div>
														</div>
													</div>
													<div class="product-content">
														<h3><a href="product-details.html">Women Pant Collectons</a></h3>
														<div class="product-price">
															<span>$29.00</span>
														</div>
													</div>
												</div>
											</div>
											<div class="col-xl-3 col-lg-4 col-md-4 col-12">
												<div class="single-product">
													<div class="product-img">
														<a href="product-details.html">
															<img class="default-img" src="https://via.placeholder.com/550x750" alt="#">
															<img class="hover-img" src="https://via.placeholder.com/550x750" alt="#">
														</a>
														<div class="button-head">
															<div class="product-action">
																  
																<a title="Wishlist" href="#"><i class="fa fa-heart" aria-hidden="true"></i><span>Add to Wishlist</span></a>
																   
															</div>
															<div class="product-action-2">
																<a title="Tambahkan ke Wishlist" href="#">Lihat Selengkapnya</a>
															</div>
														</div>
													</div>
													<div class="product-content">
														<h3><a href="product-details.html">Awesome Bags Collection</a></h3>
														<div class="product-price">
															<span>$29.00</span>
														</div>
													</div>
												</div>
											</div>
											<div class="col-xl-3 col-lg-4 col-md-4 col-12">
												<div class="single-product">
													<div class="product-img">
														<a href="product-details.html">
															<img class="default-img" src="https://via.placeholder.com/550x750" alt="#">
															<img class="hover-img" src="https://via.placeholder.com/550x750" alt="#">
															<span class="price-dec">30% Off</span>
														</a>
														<div class="button-head">
															<div class="product-action">
																  
																<a title="Wishlist" href="#"><i class="fa fa-heart" aria-hidden="true"></i><span>Add to Wishlist</span></a>
																   
															</div>
															<div class="product-action-2">
																<a title="Tambahkan ke Wishlist" href="#">Lihat Selengkapnya</a>
															</div>
														</div>
													</div>
													<div class="product-content">
														<h3><a href="product-details.html">Awesome Cap For Women</a></h3>
														<div class="product-price">
															<span>$29.00</span>
														</div>
													</div>
												</div>
											</div>
											<div class="col-xl-3 col-lg-4 col-md-4 col-12">
												<div class="single-product">
													<div class="product-img">
														<a href="product-details.html">
															<img class="default-img" src="https://via.placeholder.com/550x750" alt="#">
															<img class="hover-img" src="https://via.placeholder.com/550x750" alt="#">
														</a>
														<div class="button-head">
															<div class="product-action">
																  
																<a title="Wishlist" href="#"><i class="fa fa-heart" aria-hidden="true"></i><span>Add to Wishlist</span></a>
																   
															</div>
															<div class="product-action-2">
																<a title="Tambahkan ke Wishlist" href="#">Lihat Selengkapnya</a>
															</div>
														</div>
													</div>
													<div class="product-content">
														<h3><a href="product-details.html">Polo Dress For Women</a></h3>
														<div class="product-price">
															<span>$29.00</span>
														</div>
													</div>
												</div>
											</div>
											<div class="col-xl-3 col-lg-4 col-md-4 col-12">
												<div class="single-product">
													<div class="product-img">
														<a href="product-details.html">
															<img class="default-img" src="https://via.placeholder.com/550x750" alt="#">
															<img class="hover-img" src="https://via.placeholder.com/550x750" alt="#">
															<span class="out-of-stock">Hot</span>
														</a>
														<div class="button-head">
															<div class="product-action">
																  
																<a title="Wishlist" href="#"><i class="fa fa-heart" aria-hidden="true"></i><span>Add to Wishlist</span></a>
																   
															</div>
															<div class="product-action-2">
																<a title="Tambahkan ke Wishlist" href="#">Lihat Selengkapnya</a>
															</div>
														</div>
													</div>
													<div class="product-content">
														<h3><a href="product-details.html">Black Sunglass For Women</a></h3>
														<div class="product-price">
															<span class="old">$60.00</span>
															<span>$50.00</span>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!--/ End Single Tab -->
								<!-- Start Single Tab -->
								<div class="tab-pane fade" id="women" role="tabpanel">
									<div class="tab-single">
										<div class="row">
											<div class="col-xl-3 col-lg-4 col-md-4 col-12">
												<div class="single-product">
													<div class="product-img">
														<a href="product-details.html">
															<img class="default-img" src="https://via.placeholder.com/550x750" alt="#">
															<img class="hover-img" src="https://via.placeholder.com/550x750" alt="#">
														</a>
														<div class="button-head">
															<div class="product-action">
																  
																<a title="Wishlist" href="#"><i class="fa fa-heart" aria-hidden="true"></i><span>Add to Wishlist</span></a>
																   
															</div>
															<div class="product-action-2">
																<a title="Tambahkan ke Wishlist" href="#">Lihat Selengkapnya</a>
															</div>
														</div>
													</div>
													<div class="product-content">
														<h3><a href="product-details.html">Women Hot Collection</a></h3>
														<div class="product-price">
															<span>$29.00</span>
														</div>
													</div>
												</div>
											</div>
											<div class="col-xl-3 col-lg-4 col-md-4 col-12">
												<div class="single-product">
													<div class="product-img">
														<a href="product-details.html">
															<img class="default-img" src="https://via.placeholder.com/550x750" alt="#">
															<img class="hover-img" src="https://via.placeholder.com/550x750" alt="#">
														</a>
														<div class="button-head">
															<div class="product-action">
																  
																<a title="Wishlist" href="#"><i class="fa fa-heart" aria-hidden="true"></i><span>Add to Wishlist</span></a>
																   
															</div>
															<div class="product-action-2">
																<a title="Tambahkan ke Wishlist" href="#">Lihat Selengkapnya</a>
															</div>
														</div>
													</div>
													<div class="product-content">
														<h3><a href="product-details.html">Awesome Pink Show</a></h3>
														<div class="product-price">
															<span>$29.00</span>
														</div>
													</div>
												</div>
											</div>
											<div class="col-xl-3 col-lg-4 col-md-4 col-12">
												<div class="single-product">
													<div class="product-img">
														<a href="product-details.html">
															<img class="default-img" src="https://via.placeholder.com/550x750" alt="#">
															<img class="hover-img" src="https://via.placeholder.com/550x750" alt="#">
														</a>
														<div class="button-head">
															<div class="product-action">
																  
																<a title="Wishlist" href="#"><i class="fa fa-heart" aria-hidden="true"></i><span>Add to Wishlist</span></a>
																   
															</div>
															<div class="product-action-2">
																<a title="Tambahkan ke Wishlist" href="#">Lihat Selengkapnya</a>
															</div>
														</div>
													</div>
													<div class="product-content">
														<h3><a href="product-details.html">Awesome Bags Collection</a></h3>
														<div class="product-price">
															<span>$29.00</span>
														</div>
													</div>
												</div>
											</div>
											<div class="col-xl-3 col-lg-4 col-md-4 col-12">
												<div class="single-product">
													<div class="product-img">
														<a href="product-details.html">
															<img class="default-img" src="https://via.placeholder.com/550x750" alt="#">
															<img class="hover-img" src="https://via.placeholder.com/550x750" alt="#">
															<span class="new">New</span>
														</a>
														<div class="button-head">
															<div class="product-action">
																  
																<a title="Wishlist" href="#"><i class="fa fa-heart" aria-hidden="true"></i><span>Add to Wishlist</span></a>
																   
															</div>
															<div class="product-action-2">
																<a title="Tambahkan ke Wishlist" href="#">Lihat Selengkapnya</a>
															</div>
														</div>
													</div>
													<div class="product-content">
														<h3><a href="product-details.html">Women Pant Collectons</a></h3>
														<div class="product-price">
															<span>$29.00</span>
														</div>
													</div>
												</div>
											</div>
											<div class="col-xl-3 col-lg-4 col-md-4 col-12">
												<div class="single-product">
													<div class="product-img">
														<a href="product-details.html">
															<img class="default-img" src="https://via.placeholder.com/550x750" alt="#">
															<img class="hover-img" src="https://via.placeholder.com/550x750" alt="#">
														</a>
														<div class="button-head">
															<div class="product-action">
																  
																<a title="Wishlist" href="#"><i class="fa fa-heart" aria-hidden="true"></i><span>Add to Wishlist</span></a>
																   
															</div>
															<div class="product-action-2">
																<a title="Tambahkan ke Wishlist" href="#">Lihat Selengkapnya</a>
															</div>
														</div>
													</div>
													<div class="product-content">
														<h3><a href="product-details.html">Awesome Bags Collection</a></h3>
														<div class="product-price">
															<span>$29.00</span>
														</div>
													</div>
												</div>
											</div>
											<div class="col-xl-3 col-lg-4 col-md-4 col-12">
												<div class="single-product">
													<div class="product-img">
														<a href="product-details.html">
															<img class="default-img" src="https://via.placeholder.com/550x750" alt="#">
															<img class="hover-img" src="https://via.placeholder.com/550x750" alt="#">
															<span class="price-dec">30% Off</span>
														</a>
														<div class="button-head">
															<div class="product-action">
																  
																<a title="Wishlist" href="#"><i class="fa fa-heart" aria-hidden="true"></i><span>Add to Wishlist</span></a>
																   
															</div>
															<div class="product-action-2">
																<a title="Tambahkan ke Wishlist" href="#">Lihat Selengkapnya</a>
															</div>
														</div>
													</div>
													<div class="product-content">
														<h3><a href="product-details.html">Awesome Cap For Women</a></h3>
														<div class="product-price">
															<span>$29.00</span>
														</div>
													</div>
												</div>
											</div>
											<div class="col-xl-3 col-lg-4 col-md-4 col-12">
												<div class="single-product">
													<div class="product-img">
														<a href="product-details.html">
															<img class="default-img" src="https://via.placeholder.com/550x750" alt="#">
															<img class="hover-img" src="https://via.placeholder.com/550x750" alt="#">
														</a>
														<div class="button-head">
															<div class="product-action">
																  
																<a title="Wishlist" href="#"><i class="fa fa-heart" aria-hidden="true"></i><span>Add to Wishlist</span></a>
																   
															</div>
															<div class="product-action-2">
																<a title="Tambahkan ke Wishlist" href="#">Lihat Selengkapnya</a>
															</div>
														</div>
													</div>
													<div class="product-content">
														<h3><a href="product-details.html">Polo Dress For Women</a></h3>
														<div class="product-price">
															<span>$29.00</span>
														</div>
													</div>
												</div>
											</div>
											<div class="col-xl-3 col-lg-4 col-md-4 col-12">
												<div class="single-product">
													<div class="product-img">
														<a href="product-details.html">
															<img class="default-img" src="https://via.placeholder.com/550x750" alt="#">
															<img class="hover-img" src="https://via.placeholder.com/550x750" alt="#">
															<span class="out-of-stock">Hot</span>
														</a>
														<div class="button-head">
															<div class="product-action">
																  
																<a title="Wishlist" href="#"><i class="fa fa-heart" aria-hidden="true"></i><span>Add to Wishlist</span></a>
																   
															</div>
															<div class="product-action-2">
																<a title="Tambahkan ke Wishlist" href="#">Lihat Selengkapnya</a>
															</div>
														</div>
													</div>
													<div class="product-content">
														<h3><a href="product-details.html">Black Sunglass For Women</a></h3>
														<div class="product-price">
															<span class="old">$60.00</span>
															<span>$50.00</span>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!--/ End Single Tab -->
								<!-- Start Single Tab -->
								<div class="tab-pane fade" id="kids" role="tabpanel">
									<div class="tab-single">
										<div class="row">
											<div class="col-xl-3 col-lg-4 col-md-4 col-12">
												<div class="single-product">
													<div class="product-img">
														<a href="product-details.html">
															<img class="default-img" src="https://via.placeholder.com/550x750" alt="#">
															<img class="hover-img" src="https://via.placeholder.com/550x750" alt="#">
														</a>
														<div class="button-head">
															<div class="product-action">
																  
																<a title="Wishlist" href="#"><i class="fa fa-heart" aria-hidden="true"></i><span>Add to Wishlist</span></a>
																   
															</div>
															<div class="product-action-2">
																<a title="Tambahkan ke Wishlist" href="#">Lihat Selengkapnya</a>
															</div>
														</div>
													</div>
													<div class="product-content">
														<h3><a href="product-details.html">Women Hot Collection</a></h3>
														<div class="product-price">
															<span>$29.00</span>
														</div>
													</div>
												</div>
											</div>
											<div class="col-xl-3 col-lg-4 col-md-4 col-12">
												<div class="single-product">
													<div class="product-img">
														<a href="product-details.html">
															<img class="default-img" src="https://via.placeholder.com/550x750" alt="#">
															<img class="hover-img" src="https://via.placeholder.com/550x750" alt="#">
														</a>
														<div class="button-head">
															<div class="product-action">
																  
																<a title="Wishlist" href="#"><i class="fa fa-heart" aria-hidden="true"></i><span>Add to Wishlist</span></a>
																   
															</div>
															<div class="product-action-2">
																<a title="Tambahkan ke Wishlist" href="#">Lihat Selengkapnya</a>
															</div>
														</div>
													</div>
													<div class="product-content">
														<h3><a href="product-details.html">Awesome Pink Show</a></h3>
														<div class="product-price">
															<span>$29.00</span>
														</div>
													</div>
												</div>
											</div>
											<div class="col-xl-3 col-lg-4 col-md-4 col-12">
												<div class="single-product">
													<div class="product-img">
														<a href="product-details.html">
															<img class="default-img" src="https://via.placeholder.com/550x750" alt="#">
															<img class="hover-img" src="https://via.placeholder.com/550x750" alt="#">
														</a>
														<div class="button-head">
															<div class="product-action">
																  
																<a title="Wishlist" href="#"><i class="fa fa-heart" aria-hidden="true"></i><span>Add to Wishlist</span></a>
																   
															</div>
															<div class="product-action-2">
																<a title="Tambahkan ke Wishlist" href="#">Lihat Selengkapnya</a>
															</div>
														</div>
													</div>
													<div class="product-content">
														<h3><a href="product-details.html">Awesome Bags Collection</a></h3>
														<div class="product-price">
															<span>$29.00</span>
														</div>
													</div>
												</div>
											</div>
											<div class="col-xl-3 col-lg-4 col-md-4 col-12">
												<div class="single-product">
													<div class="product-img">
														<a href="product-details.html">
															<img class="default-img" src="https://via.placeholder.com/550x750" alt="#">
															<img class="hover-img" src="https://via.placeholder.com/550x750" alt="#">
															<span class="new">New</span>
														</a>
														<div class="button-head">
															<div class="product-action">
																  
																<a title="Wishlist" href="#"><i class="fa fa-heart" aria-hidden="true"></i><span>Add to Wishlist</span></a>
																   
															</div>
															<div class="product-action-2">
																<a title="Tambahkan ke Wishlist" href="#">Lihat Selengkapnya</a>
															</div>
														</div>
													</div>
													<div class="product-content">
														<h3><a href="product-details.html">Women Pant Collectons</a></h3>
														<div class="product-price">
															<span>$29.00</span>
														</div>
													</div>
												</div>
											</div>
											<div class="col-xl-3 col-lg-4 col-md-4 col-12">
												<div class="single-product">
													<div class="product-img">
														<a href="product-details.html">
															<img class="default-img" src="https://via.placeholder.com/550x750" alt="#">
															<img class="hover-img" src="https://via.placeholder.com/550x750" alt="#">
														</a>
														<div class="button-head">
															<div class="product-action">
																  
																<a title="Wishlist" href="#"><i class="fa fa-heart" aria-hidden="true"></i><span>Add to Wishlist</span></a>
																   
															</div>
															<div class="product-action-2">
																<a title="Tambahkan ke Wishlist" href="#">Lihat Selengkapnya</a>
															</div>
														</div>
													</div>
													<div class="product-content">
														<h3><a href="product-details.html">Awesome Bags Collection</a></h3>
														<div class="product-price">
															<span>$29.00</span>
														</div>
													</div>
												</div>
											</div>
											<div class="col-xl-3 col-lg-4 col-md-4 col-12">
												<div class="single-product">
													<div class="product-img">
														<a href="product-details.html">
															<img class="default-img" src="https://via.placeholder.com/550x750" alt="#">
															<img class="hover-img" src="https://via.placeholder.com/550x750" alt="#">
															<span class="price-dec">30% Off</span>
														</a>
														<div class="button-head">
															<div class="product-action">
																  
																<a title="Wishlist" href="#"><i class="fa fa-heart" aria-hidden="true"></i><span>Add to Wishlist</span></a>
																   
															</div>
															<div class="product-action-2">
																<a title="Tambahkan ke Wishlist" href="#">Lihat Selengkapnya</a>
															</div>
														</div>
													</div>
													<div class="product-content">
														<h3><a href="product-details.html">Awesome Cap For Women</a></h3>
														<div class="product-price">
															<span>$29.00</span>
														</div>
													</div>
												</div>
											</div>
											<div class="col-xl-3 col-lg-4 col-md-4 col-12">
												<div class="single-product">
													<div class="product-img">
														<a href="product-details.html">
															<img class="default-img" src="https://via.placeholder.com/550x750" alt="#">
															<img class="hover-img" src="https://via.placeholder.com/550x750" alt="#">
														</a>
														<div class="button-head">
															<div class="product-action">
																  
																<a title="Wishlist" href="#"><i class="fa fa-heart" aria-hidden="true"></i><span>Add to Wishlist</span></a>
																   
															</div>
															<div class="product-action-2">
																<a title="Tambahkan ke Wishlist" href="#">Lihat Selengkapnya</a>
															</div>
														</div>
													</div>
													<div class="product-content">
														<h3><a href="product-details.html">Polo Dress For Women</a></h3>
														<div class="product-price">
															<span>$29.00</span>
														</div>
													</div>
												</div>
											</div>
											<div class="col-xl-3 col-lg-4 col-md-4 col-12">
												<div class="single-product">
													<div class="product-img">
														<a href="product-details.html">
															<img class="default-img" src="https://via.placeholder.com/550x750" alt="#">
															<img class="hover-img" src="https://via.placeholder.com/550x750" alt="#">
															<span class="out-of-stock">Hot</span>
														</a>
														<div class="button-head">
															<div class="product-action">
																  
																<a title="Wishlist" href="#"><i class="fa fa-heart" aria-hidden="true"></i><span>Add to Wishlist</span></a>
																   
															</div>
															<div class="product-action-2">
																<a title="Tambahkan ke Wishlist" href="#">Lihat Selengkapnya</a>
															</div>
														</div>
													</div>
													<div class="product-content">
														<h3><a href="product-details.html">Black Sunglass For Women</a></h3>
														<div class="product-price">
															<span class="old">$60.00</span>
															<span>$50.00</span>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!--/ End Single Tab -->
								<!-- Start Single Tab -->
								<div class="tab-pane fade" id="accessories" role="tabpanel">
									<div class="tab-single">
										<div class="row">
											<div class="col-xl-3 col-lg-4 col-md-4 col-12">
												<div class="single-product">
													<div class="product-img">
														<a href="product-details.html">
															<img class="default-img" src="https://via.placeholder.com/550x750" alt="#">
															<img class="hover-img" src="https://via.placeholder.com/550x750" alt="#">
														</a>
														<div class="button-head">
															<div class="product-action">
																  
																<a title="Wishlist" href="#"><i class="fa fa-heart" aria-hidden="true"></i><span>Add to Wishlist</span></a>
																   
															</div>
															<div class="product-action-2">
																<a title="Tambahkan ke Wishlist" href="#">Lihat Selengkapnya</a>
															</div>
														</div>
													</div>
													<div class="product-content">
														<h3><a href="product-details.html">Women Hot Collection</a></h3>
														<div class="product-price">
															<span>$29.00</span>
														</div>
													</div>
												</div>
											</div>
											<div class="col-xl-3 col-lg-4 col-md-4 col-12">
												<div class="single-product">
													<div class="product-img">
														<a href="product-details.html">
															<img class="default-img" src="https://via.placeholder.com/550x750" alt="#">
															<img class="hover-img" src="https://via.placeholder.com/550x750" alt="#">
														</a>
														<div class="button-head">
															<div class="product-action">
																  
																<a title="Wishlist" href="#"><i class="fa fa-heart" aria-hidden="true"></i><span>Add to Wishlist</span></a>
																   
															</div>
															<div class="product-action-2">
																<a title="Tambahkan ke Wishlist" href="#">Lihat Selengkapnya</a>
															</div>
														</div>
													</div>
													<div class="product-content">
														<h3><a href="product-details.html">Awesome Pink Show</a></h3>
														<div class="product-price">
															<span>$29.00</span>
														</div>
													</div>
												</div>
											</div>
											<div class="col-xl-3 col-lg-4 col-md-4 col-12">
												<div class="single-product">
													<div class="product-img">
														<a href="product-details.html">
															<img class="default-img" src="https://via.placeholder.com/550x750" alt="#">
															<img class="hover-img" src="https://via.placeholder.com/550x750" alt="#">
														</a>
														<div class="button-head">
															<div class="product-action">
																  
																<a title="Wishlist" href="#"><i class="fa fa-heart" aria-hidden="true"></i><span>Add to Wishlist</span></a>
																   
															</div>
															<div class="product-action-2">
																<a title="Tambahkan ke Wishlist" href="#">Lihat Selengkapnya</a>
															</div>
														</div>
													</div>
													<div class="product-content">
														<h3><a href="product-details.html">Awesome Bags Collection</a></h3>
														<div class="product-price">
															<span>$29.00</span>
														</div>
													</div>
												</div>
											</div>
											<div class="col-xl-3 col-lg-4 col-md-4 col-12">
												<div class="single-product">
													<div class="product-img">
														<a href="product-details.html">
															<img class="default-img" src="https://via.placeholder.com/550x750" alt="#">
															<img class="hover-img" src="https://via.placeholder.com/550x750" alt="#">
															<span class="new">New</span>
														</a>
														<div class="button-head">
															<div class="product-action">
																  
																<a title="Wishlist" href="#"><i class="fa fa-heart" aria-hidden="true"></i><span>Add to Wishlist</span></a>
																   
															</div>
															<div class="product-action-2">
																<a title="Tambahkan ke Wishlist" href="#">Lihat Selengkapnya</a>
															</div>
														</div>
													</div>
													<div class="product-content">
														<h3><a href="product-details.html">Women Pant Collectons</a></h3>
														<div class="product-price">
															<span>$29.00</span>
														</div>
													</div>
												</div>
											</div>
											<div class="col-xl-3 col-lg-4 col-md-4 col-12">
												<div class="single-product">
													<div class="product-img">
														<a href="product-details.html">
															<img class="default-img" src="https://via.placeholder.com/550x750" alt="#">
															<img class="hover-img" src="https://via.placeholder.com/550x750" alt="#">
														</a>
														<div class="button-head">
															<div class="product-action">
																  
																<a title="Wishlist" href="#"><i class="fa fa-heart" aria-hidden="true"></i><span>Add to Wishlist</span></a>
																   
															</div>
															<div class="product-action-2">
																<a title="Tambahkan ke Wishlist" href="#">Lihat Selengkapnya</a>
															</div>
														</div>
													</div>
													<div class="product-content">
														<h3><a href="product-details.html">Awesome Bags Collection</a></h3>
														<div class="product-price">
															<span>$29.00</span>
														</div>
													</div>
												</div>
											</div>
											<div class="col-xl-3 col-lg-4 col-md-4 col-12">
												<div class="single-product">
													<div class="product-img">
														<a href="product-details.html">
															<img class="default-img" src="https://via.placeholder.com/550x750" alt="#">
															<img class="hover-img" src="https://via.placeholder.com/550x750" alt="#">
															<span class="price-dec">30% Off</span>
														</a>
														<div class="button-head">
															<div class="product-action">
																  
																<a title="Wishlist" href="#"><i class="fa fa-heart" aria-hidden="true"></i><span>Add to Wishlist</span></a>
																   
															</div>
															<div class="product-action-2">
																<a title="Tambahkan ke Wishlist" href="#">Lihat Selengkapnya</a>
															</div>
														</div>
													</div>
													<div class="product-content">
														<h3><a href="product-details.html">Awesome Cap For Women</a></h3>
														<div class="product-price">
															<span>$29.00</span>
														</div>
													</div>
												</div>
											</div>
											<div class="col-xl-3 col-lg-4 col-md-4 col-12">
												<div class="single-product">
													<div class="product-img">
														<a href="product-details.html">
															<img class="default-img" src="https://via.placeholder.com/550x750" alt="#">
															<img class="hover-img" src="https://via.placeholder.com/550x750" alt="#">
														</a>
														<div class="button-head">
															<div class="product-action">
																  
																<a title="Wishlist" href="#"><i class="fa fa-heart" aria-hidden="true"></i><span>Add to Wishlist</span></a>
																   
															</div>
															<div class="product-action-2">
																<a title="Tambahkan ke Wishlist" href="#">Lihat Selengkapnya</a>
															</div>
														</div>
													</div>
													<div class="product-content">
														<h3><a href="product-details.html">Polo Dress For Women</a></h3>
														<div class="product-price">
															<span>$29.00</span>
														</div>
													</div>
												</div>
											</div>
											<div class="col-xl-3 col-lg-4 col-md-4 col-12">
												<div class="single-product">
													<div class="product-img">
														<a href="product-details.html">
															<img class="default-img" src="https://via.placeholder.com/550x750" alt="#">
															<img class="hover-img" src="https://via.placeholder.com/550x750" alt="#">
															<span class="out-of-stock">Hot</span>
														</a>
														<div class="button-head">
															<div class="product-action">
																  
																<a title="Wishlist" href="#"><i class="fa fa-heart" aria-hidden="true"></i><span>Add to Wishlist</span></a>
																   
															</div>
															<div class="product-action-2">
																<a title="Tambahkan ke Wishlist" href="#">Lihat Selengkapnya</a>
															</div>
														</div>
													</div>
													<div class="product-content">
														<h3><a href="product-details.html">Black Sunglass For Women</a></h3>
														<div class="product-price">
															<span class="old">$60.00</span>
															<span>$50.00</span>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!--/ End Single Tab -->
								<!-- Start Single Tab -->
								<div class="tab-pane fade" id="essential" role="tabpanel">
									<div class="tab-single">
										<div class="row">
											<div class="col-xl-3 col-lg-4 col-md-4 col-12">
												<div class="single-product">
													<div class="product-img">
														<a href="product-details.html">
															<img class="default-img" src="https://via.placeholder.com/550x750" alt="#">
															<img class="hover-img" src="https://via.placeholder.com/550x750" alt="#">
														</a>
														<div class="button-head">
															<div class="product-action">
																  
																<a title="Wishlist" href="#"><i class="fa fa-heart" aria-hidden="true"></i><span>Add to Wishlist</span></a>
																   
															</div>
															<div class="product-action-2">
																<a title="Tambahkan ke Wishlist" href="#">Lihat Selengkapnya</a>
															</div>
														</div>
													</div>
													<div class="product-content">
														<h3><a href="product-details.html">Women Hot Collection</a></h3>
														<div class="product-price">
															<span>$29.00</span>
														</div>
													</div>
												</div>
											</div>
											<div class="col-xl-3 col-lg-4 col-md-4 col-12">
												<div class="single-product">
													<div class="product-img">
														<a href="product-details.html">
															<img class="default-img" src="https://via.placeholder.com/550x750" alt="#">
															<img class="hover-img" src="https://via.placeholder.com/550x750" alt="#">
														</a>
														<div class="button-head">
															<div class="product-action">
																  
																<a title="Wishlist" href="#"><i class="fa fa-heart" aria-hidden="true"></i><span>Add to Wishlist</span></a>
																   
															</div>
															<div class="product-action-2">
																<a title="Tambahkan ke Wishlist" href="#">Lihat Selengkapnya</a>
															</div>
														</div>
													</div>
													<div class="product-content">
														<h3><a href="product-details.html">Awesome Pink Show</a></h3>
														<div class="product-price">
															<span>$29.00</span>
														</div>
													</div>
												</div>
											</div>
											<div class="col-xl-3 col-lg-4 col-md-4 col-12">
												<div class="single-product">
													<div class="product-img">
														<a href="product-details.html">
															<img class="default-img" src="https://via.placeholder.com/550x750" alt="#">
															<img class="hover-img" src="https://via.placeholder.com/550x750" alt="#">
														</a>
														<div class="button-head">
															<div class="product-action">
																  
																<a title="Wishlist" href="#"><i class="fa fa-heart" aria-hidden="true"></i><span>Add to Wishlist</span></a>
																   
															</div>
															<div class="product-action-2">
																<a title="Tambahkan ke Wishlist" href="#">Lihat Selengkapnya</a>
															</div>
														</div>
													</div>
													<div class="product-content">
														<h3><a href="product-details.html">Awesome Bags Collection</a></h3>
														<div class="product-price">
															<span>$29.00</span>
														</div>
													</div>
												</div>
											</div>
											<div class="col-xl-3 col-lg-4 col-md-4 col-12">
												<div class="single-product">
													<div class="product-img">
														<a href="product-details.html">
															<img class="default-img" src="https://via.placeholder.com/550x750" alt="#">
															<img class="hover-img" src="https://via.placeholder.com/550x750" alt="#">
															<span class="new">New</span>
														</a>
														<div class="button-head">
															<div class="product-action">
																  
																<a title="Wishlist" href="#"><i class="fa fa-heart" aria-hidden="true"></i><span>Add to Wishlist</span></a>
																   
															</div>
															<div class="product-action-2">
																<a title="Tambahkan ke Wishlist" href="#">Lihat Selengkapnya</a>
															</div>
														</div>
													</div>
													<div class="product-content">
														<h3><a href="product-details.html">Women Pant Collectons</a></h3>
														<div class="product-price">
															<span>$29.00</span>
														</div>
													</div>
												</div>
											</div>
											<div class="col-xl-3 col-lg-4 col-md-4 col-12">
												<div class="single-product">
													<div class="product-img">
														<a href="product-details.html">
															<img class="default-img" src="https://via.placeholder.com/550x750" alt="#">
															<img class="hover-img" src="https://via.placeholder.com/550x750" alt="#">
														</a>
														<div class="button-head">
															<div class="product-action">
																  
																<a title="Wishlist" href="#"><i class="fa fa-heart" aria-hidden="true"></i><span>Add to Wishlist</span></a>
																   
															</div>
															<div class="product-action-2">
																<a title="Tambahkan ke Wishlist" href="#">Lihat Selengkapnya</a>
															</div>
														</div>
													</div>
													<div class="product-content">
														<h3><a href="product-details.html">Awesome Bags Collection</a></h3>
														<div class="product-price">
															<span>$29.00</span>
														</div>
													</div>
												</div>
											</div>
											<div class="col-xl-3 col-lg-4 col-md-4 col-12">
												<div class="single-product">
													<div class="product-img">
														<a href="product-details.html">
															<img class="default-img" src="https://via.placeholder.com/550x750" alt="#">
															<img class="hover-img" src="https://via.placeholder.com/550x750" alt="#">
															<span class="price-dec">30% Off</span>
														</a>
														<div class="button-head">
															<div class="product-action">
																  
																<a title="Wishlist" href="#"><i class="fa fa-heart" aria-hidden="true"></i><span>Add to Wishlist</span></a>
																   
															</div>
															<div class="product-action-2">
																<a title="Tambahkan ke Wishlist" href="#">Lihat Selengkapnya</a>
															</div>
														</div>
													</div>
													<div class="product-content">
														<h3><a href="product-details.html">Awesome Cap For Women</a></h3>
														<div class="product-price">
															<span>$29.00</span>
														</div>
													</div>
												</div>
											</div>
											<div class="col-xl-3 col-lg-4 col-md-4 col-12">
												<div class="single-product">
													<div class="product-img">
														<a href="product-details.html">
															<img class="default-img" src="https://via.placeholder.com/550x750" alt="#">
															<img class="hover-img" src="https://via.placeholder.com/550x750" alt="#">
														</a>
														<div class="button-head">
															<div class="product-action">
																  
																<a title="Wishlist" href="#"><i class="fa fa-heart" aria-hidden="true"></i><span>Add to Wishlist</span></a>
																   
															</div>
															<div class="product-action-2">
																<a title="Tambahkan ke Wishlist" href="#">Lihat Selengkapnya</a>
															</div>
														</div>
													</div>
													<div class="product-content">
														<h3><a href="product-details.html">Polo Dress For Women</a></h3>
														<div class="product-price">
															<span>$29.00</span>
														</div>
													</div>
												</div>
											</div>
											<div class="col-xl-3 col-lg-4 col-md-4 col-12">
												<div class="single-product">
													<div class="product-img">
														<a href="product-details.html">
															<img class="default-img" src="https://via.placeholder.com/550x750" alt="#">
															<img class="hover-img" src="https://via.placeholder.com/550x750" alt="#">
															<span class="out-of-stock">Hot</span>
														</a>
														<div class="button-head">
															<div class="product-action">
																  
																<a title="Wishlist" href="#"><i class="fa fa-heart" aria-hidden="true"></i><span>Add to Wishlist</span></a>
																   
															</div>
															<div class="product-action-2">
																<a title="Tambahkan ke Wishlist" href="#">Lihat Selengkapnya</a>
															</div>
														</div>
													</div>
													<div class="product-content">
														<h3><a href="product-details.html">Black Sunglass For Women</a></h3>
														<div class="product-price">
															<span class="old">$60.00</span>
															<span>$50.00</span>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!--/ End Single Tab -->
								<!-- Start Single Tab -->
								<div class="tab-pane fade" id="prices" role="tabpanel">
									<div class="tab-single">
										<div class="row">
											<div class="col-xl-3 col-lg-4 col-md-4 col-12">
												<div class="single-product">
													<div class="product-img">
														<a href="product-details.html">
															<img class="default-img" src="https://via.placeholder.com/550x750" alt="#">
															<img class="hover-img" src="https://via.placeholder.com/550x750" alt="#">
														</a>
														<div class="button-head">
															<div class="product-action">
																  
																<a title="Wishlist" href="#"><i class="fa fa-heart" aria-hidden="true"></i><span>Add to Wishlist</span></a>
																   
															</div>
															<div class="product-action-2">
																<a title="Tambahkan ke Wishlist" href="#">Lihat Selengkapnya</a>
															</div>
														</div>
													</div>
													<div class="product-content">
														<h3><a href="product-details.html">Women Hot Collection</a></h3>
														<div class="product-price">
															<span>$29.00</span>
														</div>
													</div>
												</div>
											</div>
											<div class="col-xl-3 col-lg-4 col-md-4 col-12">
												<div class="single-product">
													<div class="product-img">
														<a href="product-details.html">
															<img class="default-img" src="https://via.placeholder.com/550x750" alt="#">
															<img class="hover-img" src="https://via.placeholder.com/550x750" alt="#">
														</a>
														<div class="button-head">
															<div class="product-action">
																  
																<a title="Wishlist" href="#"><i class="fa fa-heart" aria-hidden="true"></i><span>Add to Wishlist</span></a>
																   
															</div>
															<div class="product-action-2">
																<a title="Tambahkan ke Wishlist" href="#">Lihat Selengkapnya</a>
															</div>
														</div>
													</div>
													<div class="product-content">
														<h3><a href="product-details.html">Awesome Pink Show</a></h3>
														<div class="product-price">
															<span>$29.00</span>
														</div>
													</div>
												</div>
											</div>
											<div class="col-xl-3 col-lg-4 col-md-4 col-12">
												<div class="single-product">
													<div class="product-img">
														<a href="product-details.html">
															<img class="default-img" src="https://via.placeholder.com/550x750" alt="#">
															<img class="hover-img" src="https://via.placeholder.com/550x750" alt="#">
														</a>
														<div class="button-head">
															<div class="product-action">
																  
																<a title="Wishlist" href="#"><i class="fa fa-heart" aria-hidden="true"></i><span>Add to Wishlist</span></a>
																   
															</div>
															<div class="product-action-2">
																<a title="Tambahkan ke Wishlist" href="#">Lihat Selengkapnya</a>
															</div>
														</div>
													</div>
													<div class="product-content">
														<h3><a href="product-details.html">Awesome Bags Collection</a></h3>
														<div class="product-price">
															<span>$29.00</span>
														</div>
													</div>
												</div>
											</div>
											<div class="col-xl-3 col-lg-4 col-md-4 col-12">
												<div class="single-product">
													<div class="product-img">
														<a href="product-details.html">
															<img class="default-img" src="https://via.placeholder.com/550x750" alt="#">
															<img class="hover-img" src="https://via.placeholder.com/550x750" alt="#">
															<span class="new">New</span>
														</a>
														<div class="button-head">
															<div class="product-action">
																  
																<a title="Wishlist" href="#"><i class="fa fa-heart" aria-hidden="true"></i><span>Add to Wishlist</span></a>
																   
															</div>
															<div class="product-action-2">
																<a title="Tambahkan ke Wishlist" href="#">Lihat Selengkapnya</a>
															</div>
														</div>
													</div>
													<div class="product-content">
														<h3><a href="product-details.html">Women Pant Collectons</a></h3>
														<div class="product-price">
															<span>$29.00</span>
														</div>
													</div>
												</div>
											</div>
											<div class="col-xl-3 col-lg-4 col-md-4 col-12">
												<div class="single-product">
													<div class="product-img">
														<a href="product-details.html">
															<img class="default-img" src="https://via.placeholder.com/550x750" alt="#">
															<img class="hover-img" src="https://via.placeholder.com/550x750" alt="#">
														</a>
														<div class="button-head">
															<div class="product-action">
																  
																<a title="Wishlist" href="#"><i class="fa fa-heart" aria-hidden="true"></i><span>Add to Wishlist</span></a>
																   
															</div>
															<div class="product-action-2">
																<a title="Tambahkan ke Wishlist" href="#">Lihat Selengkapnya</a>
															</div>
														</div>
													</div>
													<div class="product-content">
														<h3><a href="product-details.html">Awesome Bags Collection</a></h3>
														<div class="product-price">
															<span>$29.00</span>
														</div>
													</div>
												</div>
											</div>
											<div class="col-xl-3 col-lg-4 col-md-4 col-12">
												<div class="single-product">
													<div class="product-img">
														<a href="product-details.html">
															<img class="default-img" src="https://via.placeholder.com/550x750" alt="#">
															<img class="hover-img" src="https://via.placeholder.com/550x750" alt="#">
															<span class="price-dec">30% Off</span>
														</a>
														<div class="button-head">
															<div class="product-action">
																  
																<a title="Wishlist" href="#"><i class="fa fa-heart" aria-hidden="true"></i><span>Add to Wishlist</span></a>
																   
															</div>
															<div class="product-action-2">
																<a title="Tambahkan ke Wishlist" href="#">Lihat Selengkapnya</a>
															</div>
														</div>
													</div>
													<div class="product-content">
														<h3><a href="product-details.html">Awesome Cap For Women</a></h3>
														<div class="product-price">
															<span>$29.00</span>
														</div>
													</div>
												</div>
											</div>
											<div class="col-xl-3 col-lg-4 col-md-4 col-12">
												<div class="single-product">
													<div class="product-img">
														<a href="product-details.html">
															<img class="default-img" src="https://via.placeholder.com/550x750" alt="#">
															<img class="hover-img" src="https://via.placeholder.com/550x750" alt="#">
														</a>
														<div class="button-head">
															<div class="product-action">
																  
																<a title="Wishlist" href="#"><i class="fa fa-heart" aria-hidden="true"></i><span>Add to Wishlist</span></a>
																   
															</div>
															<div class="product-action-2">
																<a title="Tambahkan ke Wishlist" href="#">Lihat Selengkapnya</a>
															</div>
														</div>
													</div>
													<div class="product-content">
														<h3><a href="product-details.html">Polo Dress For Women</a></h3>
														<div class="product-price">
															<span>$29.00</span>
														</div>
													</div>
												</div>
											</div>
											<div class="col-xl-3 col-lg-4 col-md-4 col-12">
												<div class="single-product">
													<div class="product-img">
														<a href="product-details.html">
															<img class="default-img" src="https://via.placeholder.com/550x750" alt="#">
															<img class="hover-img" src="https://via.placeholder.com/550x750" alt="#">
															<span class="out-of-stock">Hot</span>
														</a>
														<div class="button-head">
															<div class="product-action">
																  
																<a title="Wishlist" href="#"><i class="fa fa-heart" aria-hidden="true"></i><span>Add to Wishlist</span></a>
																   
															</div>
															<div class="product-action-2">
																<a title="Tambahkan ke Wishlist" href="#">Lihat Selengkapnya</a>
															</div>
														</div>
													</div>
													<div class="product-content">
														<h3><a href="product-details.html">Black Sunglass For Women</a></h3>
														<div class="product-price">
															<span class="old">$60.00</span>
															<span>$50.00</span>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!--/ End Single Tab -->
							</div>
						</div>
					</div>
				</div>
            </div>
    </div>
	<!-- End Product Area -->
	
	<!-- Start Midium Banner  -->
	<section class="midium-banner">
		<div class="container">
			<div class="row">
				<!-- Single Banner  -->
				<div class="col-lg-6 col-md-6 col-12">
					<div class="single-banner">
						<img src="https://via.placeholder.com/600x370" alt="#">
						<div class="content">
							<p>Man's Collectons</p>
							<h3>Man's items <br>Up to<span> 50%</span></h3>
							<a href="#">Shop Now</a>
						</div>
					</div>
				</div>
				<!-- /End Single Banner  -->
				<!-- Single Banner  -->
				<div class="col-lg-6 col-md-6 col-12">
					<div class="single-banner">
						<img src="https://via.placeholder.com/600x370" alt="#">
						<div class="content">
							<p>shoes women</p>
							<h3>mid season <br> up to <span>70%</span></h3>
							<a href="#" class="btn">Shop Now</a>
						</div>
					</div>
				</div>
				<!-- /End Single Banner  -->
			</div>
		</div>
	</section>
	<!-- End Midium Banner -->
	
	<!-- Start Most Popular -->
	<div class="product-area most-popular section">
        <div class="container">
            <div class="row">
				<div class="col-12">
					<div class="section-title">
						<h2>Hot Item</h2>
					</div>
				</div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="owl-carousel popular-slider">
						<!-- Start Single Product -->
						<div class="single-product">
							<div class="product-img">
								<a href="product-details.html">
									<img class="default-img" src="https://via.placeholder.com/550x750" alt="#">
									<img class="hover-img" src="https://via.placeholder.com/550x750" alt="#">
									<span class="out-of-stock">Hot</span>
								</a>
								<div class="button-head">
									<div class="product-action">
										  
										<a title="Wishlist" href="#"><i class="fa fa-heart" aria-hidden="true"></i><span>Add to Wishlist</span></a>
										   
									</div>
									<div class="product-action-2">
										<a title="Tambahkan ke Wishlist" href="#">Lihat Selengkapnya</a>
									</div>
								</div>
							</div>
							<div class="product-content">
								<h3><a href="product-details.html">Black Sunglass For Women</a></h3>
								<div class="product-price">
									<span class="old">$60.00</span>
									<span>$50.00</span>
								</div>
							</div>
						</div>
						<!-- End Single Product -->
						<!-- Start Single Product -->
						<div class="single-product">
                            <div class="product-img">
                                <a href="product-details.html">
                                    <img class="default-img" src="https://via.placeholder.com/550x750" alt="#">
                                    <img class="hover-img" src="https://via.placeholder.com/550x750" alt="#">
                                </a>
								<div class="button-head">
									<div class="product-action">
										  
										<a title="Wishlist" href="#"><i class="fa fa-heart" aria-hidden="true"></i><span>Add to Wishlist</span></a>
										   
									</div>
									<div class="product-action-2">
										<a title="Tambahkan ke Wishlist" href="#">Lihat Selengkapnya</a>
									</div>
								</div>
                            </div>
                            <div class="product-content">
                                <h3><a href="product-details.html">Women Hot Collection</a></h3>
                                <div class="product-price">
                                    <span>$50.00</span>
                                </div>
                            </div>
                        </div>
						<!-- End Single Product -->
						<!-- Start Single Product -->
						<div class="single-product">
                            <div class="product-img">
                                <a href="product-details.html">
                                    <img class="default-img" src="https://via.placeholder.com/550x750" alt="#">
                                    <img class="hover-img" src="https://via.placeholder.com/550x750" alt="#">
									<span class="new">New</span>
                                </a>
								<div class="button-head">
									<div class="product-action">
										  
										<a title="Wishlist" href="#"><i class="fa fa-heart" aria-hidden="true"></i><span>Add to Wishlist</span></a>
										   
									</div>
									<div class="product-action-2">
										<a title="Tambahkan ke Wishlist" href="#">Lihat Selengkapnya</a>
									</div>
								</div>
                            </div>
                            <div class="product-content">
                                <h3><a href="product-details.html">Awesome Pink Show</a></h3>
                                <div class="product-price">
                                    <span>$50.00</span>
                                </div>
                            </div>
                        </div>
						<!-- End Single Product -->
						<!-- Start Single Product -->
						<div class="single-product">
                            <div class="product-img">
                                <a href="product-details.html">
                                    <img class="default-img" src="https://via.placeholder.com/550x750" alt="#">
                                    <img class="hover-img" src="https://via.placeholder.com/550x750" alt="#">
                                </a>
								<div class="button-head">
									<div class="product-action">
										  
										<a title="Wishlist" href="#"><i class="fa fa-heart" aria-hidden="true"></i><span>Add to Wishlist</span></a>
										   
									</div>
									<div class="product-action-2">
										<a title="Tambahkan ke Wishlist" href="#">Lihat Selengkapnya</a>
									</div>
								</div>
                            </div>
                            <div class="product-content">
                                <h3><a href="product-details.html">Awesome Bags Collection</a></h3>
                                <div class="product-price">
                                    <span>$50.00</span>
                                </div>
                            </div>
                        </div>
						<!-- End Single Product -->
                    </div>
                </div>
            </div>
        </div>
    </div>
	<!-- End Most Popular Area -->
	
	<!-- Start Shop Home List  -->
	<section class="shop-home-list section">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-md-6 col-12">
					<div class="row">
						<div class="col-12">
							<div class="shop-section-title">
								<h1>On sale</h1>
							</div>
						</div>
					</div>
					<!-- Start Single List  -->
					<div class="single-list">
						<div class="row">
							<div class="col-lg-6 col-md-6 col-12">
								<div class="list-image overlay">
									<img src="https://via.placeholder.com/115x140" alt="#">
									<a href="#" class="buy"><i class="fa fa-shopping-bag"></i></a>
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-12 no-padding">
								<div class="content">
									<h4 class="title"><a href="#">Licity jelly leg flat Sandals</a></h4>
									<p class="price with-discount">$59</p>
								</div>
							</div>
						</div>
					</div>
					<!-- End Single List  -->
					<!-- Start Single List  -->
					<div class="single-list">
						<div class="row">
							<div class="col-lg-6 col-md-6 col-12">
								<div class="list-image overlay">
									<img src="https://via.placeholder.com/115x140" alt="#">
									<a href="#" class="buy"><i class="fa fa-shopping-bag"></i></a>
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-12 no-padding">
								<div class="content">
									<h5 class="title"><a href="#">Licity jelly leg flat Sandals</a></h5>
									<p class="price with-discount">$44</p>
								</div>
							</div>
						</div>
					</div>
					<!-- End Single List  -->
					<!-- Start Single List  -->
					<div class="single-list">
						<div class="row">
							<div class="col-lg-6 col-md-6 col-12">
								<div class="list-image overlay">
									<img src="https://via.placeholder.com/115x140" alt="#">
									<a href="#" class="buy"><i class="fa fa-shopping-bag"></i></a>
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-12 no-padding">
								<div class="content">
									<h5 class="title"><a href="#">Licity jelly leg flat Sandals</a></h5>
									<p class="price with-discount">$89</p>
								</div>
							</div>
						</div>
					</div>
					<!-- End Single List  -->
				</div>
				<div class="col-lg-4 col-md-6 col-12">
					<div class="row">
						<div class="col-12">
							<div class="shop-section-title">
								<h1>Best Seller</h1>
							</div>
						</div>
					</div>
					<!-- Start Single List  -->
					<div class="single-list">
						<div class="row">
							<div class="col-lg-6 col-md-6 col-12">
								<div class="list-image overlay">
									<img src="https://via.placeholder.com/115x140" alt="#">
									<a href="#" class="buy"><i class="fa fa-shopping-bag"></i></a>
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-12 no-padding">
								<div class="content">
									<h5 class="title"><a href="#">Licity jelly leg flat Sandals</a></h5>
									<p class="price with-discount">$65</p>
								</div>
							</div>
						</div>
					</div>
					<!-- End Single List  -->
					<!-- Start Single List  -->
					<div class="single-list">
						<div class="row">
							<div class="col-lg-6 col-md-6 col-12">
								<div class="list-image overlay">
									<img src="https://via.placeholder.com/115x140" alt="#">
									<a href="#" class="buy"><i class="fa fa-shopping-bag"></i></a>
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-12 no-padding">
								<div class="content">
									<h5 class="title"><a href="#">Licity jelly leg flat Sandals</a></h5>
									<p class="price with-discount">$33</p>
								</div>
							</div>
						</div>
					</div>
					<!-- End Single List  -->
					<!-- Start Single List  -->
					<div class="single-list">
						<div class="row">
							<div class="col-lg-6 col-md-6 col-12">
								<div class="list-image overlay">
									<img src="https://via.placeholder.com/115x140" alt="#">
									<a href="#" class="buy"><i class="fa fa-shopping-bag"></i></a>
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-12 no-padding">
								<div class="content">
									<h5 class="title"><a href="#">Licity jelly leg flat Sandals</a></h5>
									<p class="price with-discount">$77</p>
								</div>
							</div>
						</div>
					</div>
					<!-- End Single List  -->
				</div>
				<div class="col-lg-4 col-md-6 col-12">
					<div class="row">
						<div class="col-12">
							<div class="shop-section-title">
								<h1>Top viewed</h1>
							</div>
						</div>
					</div>
					<!-- Start Single List  -->
					<div class="single-list">
						<div class="row">
							<div class="col-lg-6 col-md-6 col-12">
								<div class="list-image overlay">
									<img src="https://via.placeholder.com/115x140" alt="#">
									<a href="#" class="buy"><i class="fa fa-shopping-bag"></i></a>
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-12 no-padding">
								<div class="content">
									<h5 class="title"><a href="#">Licity jelly leg flat Sandals</a></h5>
									<p class="price with-discount">$22</p>
								</div>
							</div>
						</div>
					</div>
					<!-- End Single List  -->
					<!-- Start Single List  -->
					<div class="single-list">
						<div class="row">
							<div class="col-lg-6 col-md-6 col-12">
								<div class="list-image overlay">
									<img src="https://via.placeholder.com/115x140" alt="#">
									<a href="#" class="buy"><i class="fa fa-shopping-bag"></i></a>
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-12 no-padding">
								<div class="content">
									<h5 class="title"><a href="#">Licity jelly leg flat Sandals</a></h5>
									<p class="price with-discount">$35</p>
								</div>
							</div>
						</div>
					</div>
					<!-- End Single List  -->
					<!-- Start Single List  -->
					<div class="single-list">
						<div class="row">
							<div class="col-lg-6 col-md-6 col-12">
								<div class="list-image overlay">
									<img src="https://via.placeholder.com/115x140" alt="#">
									<a href="#" class="buy"><i class="fa fa-shopping-bag"></i></a>
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-12 no-padding">
								<div class="content">
									<h5 class="title"><a href="#">Licity jelly leg flat Sandals</a></h5>
									<p class="price with-discount">$99</p>
								</div>
							</div>
						</div>
					</div>
					<!-- End Single List  -->
				</div>
			</div>
		</div>
	</section>
	<!-- End Shop Home List  -->
	
	<!-- Start Cowndown Area -->
	<section class="cown-down">
		<div class="section-inner ">
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-6 col-12 padding-right">
						<div class="image">
							<img src="https://via.placeholder.com/750x590" alt="#">
						</div>	
					</div>	
					<div class="col-lg-6 col-12 padding-left">
						<div class="content">
							<div class="heading-block">
								<p class="small-title">Deal of day</p>
								<h3 class="title">Beatutyful dress for women</h3>
								<p class="text">Suspendisse massa leo, vestibulum cursus nulla sit amet, frungilla placerat lorem. Cars fermentum, sapien. </p>
								<h1 class="price">$1200 <s>$1890</s></h1>
								<div class="coming-time">
									<div class="clearfix" data-countdown="2021/02/30"></div>
								</div>
							</div>
						</div>	
					</div>	
				</div>
			</div>
		</div>
	</section>
	<!-- /End Cowndown Area -->
	
	<!-- Start Shop Blog  -->
	<section class="shop-blog section">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="section-title">
						<h2>From Our Blog</h2>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-4 col-md-6 col-12">
					<!-- Start Single Blog  -->
					<div class="shop-single-blog">
						<img src="https://via.placeholder.com/370x300" alt="#">
						<div class="content">
							<p class="date">22 July , 2020. Monday</p>
							<a href="#" class="title">Sed adipiscing ornare.</a>
							<a href="#" class="more-btn">Continue Reading</a>
						</div>
					</div>
					<!-- End Single Blog  -->
				</div>
				<div class="col-lg-4 col-md-6 col-12">
					<!-- Start Single Blog  -->
					<div class="shop-single-blog">
						<img src="https://via.placeholder.com/370x300" alt="#">
						<div class="content">
							<p class="date">22 July, 2020. Monday</p>
							<a href="#" class="title">Man’s Fashion Winter Sale</a>
							<a href="#" class="more-btn">Continue Reading</a>
						</div>
					</div>
					<!-- End Single Blog  -->
				</div>
				<div class="col-lg-4 col-md-6 col-12">
					<!-- Start Single Blog  -->
					<div class="shop-single-blog">
						<img src="https://via.placeholder.com/370x300" alt="#">
						<div class="content">
							<p class="date">22 July, 2020. Monday</p>
							<a href="#" class="title">Women Fashion Festive</a>
							<a href="#" class="more-btn">Continue Reading</a>
						</div>
					</div>
					<!-- End Single Blog  -->
				</div>
			</div>
		</div>
	</section>
	<!-- End Shop Blog  -->
	
	<!-- Start Shop Services Area -->
	<section class="shop-services section home">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-6 col-12">
					<!-- Start Single Service -->
					<div class="single-service">
						<i class="ti-rocket"></i>
						<h4>Free shiping</h4>
						<p>Orders over $100</p>
					</div>
					<!-- End Single Service -->
				</div>
				<div class="col-lg-3 col-md-6 col-12">
					<!-- Start Single Service -->
					<div class="single-service">
						<i class="ti-reload"></i>
						<h4>Free Return</h4>
						<p>Within 30 days returns</p>
					</div>
					<!-- End Single Service -->
				</div>
				<div class="col-lg-3 col-md-6 col-12">
					<!-- Start Single Service -->
					<div class="single-service">
						<i class="ti-lock"></i>
						<h4>Sucure Payment</h4>
						<p>100% secure payment</p>
					</div>
					<!-- End Single Service -->
				</div>
				<div class="col-lg-3 col-md-6 col-12">
					<!-- Start Single Service -->
					<div class="single-service">
						<i class="ti-tag"></i>
						<h4>Best Peice</h4>
						<p>Guaranteed price</p>
					</div>
					<!-- End Single Service -->
				</div>
			</div>
		</div>
	</section>
	<!-- End Shop Services Area -->
	
	<!-- Start Shop Newsletter  -->
	<section class="shop-newsletter section">
		<div class="container">
			<div class="inner-top">
				<div class="row">
					<div class="col-lg-8 offset-lg-2 col-12">
						<!-- Start Newsletter Inner -->
						<div class="inner">
							<h4>Newsletter</h4>
							<p> Subscribe to our newsletter and get <span>10%</span> off your first purchase</p>
							<form action="mail/mail.php" method="get" target="_blank" class="newsletter-inner">
								<input name="EMAIL" placeholder="Your email address" required="" type="email">
								<button class="btn">Subscribe</button>
							</form>
						</div>
						<!-- End Newsletter Inner -->
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Shop Newsletter -->
	
	<!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span class="ti-close" aria-hidden="true"></span></button>
                    </div>
                    <div class="modal-body">
                        <div class="row no-gutters">
                            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                <!-- Product Slider -->
									<div class="product-gallery">
										<div class="quickview-slider-active">
											<div class="single-slider">
												<img src="https://via.placeholder.com/569x528" alt="#">
											</div>
											<div class="single-slider">
												<img src="https://via.placeholder.com/569x528" alt="#">
											</div>
											<div class="single-slider">
												<img src="https://via.placeholder.com/569x528" alt="#">
											</div>
											<div class="single-slider">
												<img src="https://via.placeholder.com/569x528" alt="#">
											</div>
										</div>
									</div>
								<!-- End Product slider -->
                            </div>
                            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                <div class="quickview-content">
                                    <h2>Flared Shift Dress</h2>
                                    <div class="quickview-ratting-review">
                                        <div class="quickview-ratting-wrap">
                                            <div class="quickview-ratting">
                                                <i class="yellow fa fa-star"></i>
                                                <i class="yellow fa fa-star"></i>
                                                <i class="yellow fa fa-star"></i>
                                                <i class="yellow fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <a href="#"> (1 customer review)</a>
                                        </div>
                                        <div class="quickview-stock">
                                            <span><i class="fa fa-check-circle-o"></i> in stock</span>
                                        </div>
                                    </div>
                                    <h3>$29.00</h3>
                                    <div class="quickview-peragraph">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia iste laborum ad impedit pariatur esse optio tempora sint ullam autem deleniti nam in quos qui nemo ipsum numquam.</p>
                                    </div>
									<div class="size">
										<div class="row">
											<div class="col-lg-6 col-12">
												<h5 class="title">Size</h5>
												<select>
													<option selected="selected">s</option>
													<option>m</option>
													<option>l</option>
													<option>xl</option>
												</select>
											</div>
											<div class="col-lg-6 col-12">
												<h5 class="title">Color</h5>
												<select>
													<option selected="selected">orange</option>
													<option>purple</option>
													<option>black</option>
													<option>pink</option>
												</select>
											</div>
										</div>
									</div>
                                    <div class="quantity">
										<!-- Input Order -->
										<div class="input-group">
											<div class="button minus">
												<button type="button" class="btn btn-primary btn-number" disabled="disabled" data-type="minus" data-field="quant[1]">
													<i class="ti-minus"></i>
												</button>
											</div>
											<input type="text" name="quant[1]" class="input-number"  data-min="1" data-max="1000" value="1">
											<div class="button plus">
												<button type="button" class="btn btn-primary btn-number" data-type="plus" data-field="quant[1]">
													<i class="ti-plus"></i>
												</button>
											</div>
										</div>
										<!--/ End Input Order -->
									</div>
									<div class="add-to-cart">
										<a href="#" class="btn">Add to cart</a>
										<a href="#" class="btn min">  <i class="fa fa-heart" aria-hidden="true"></i></a>
										<a href="#" class="btn min"><i class="fa fa-compress"></i></a>
									</div>
                                    <div class="default-social">
										<h4 class="share-now">Share:</h4>
                                        <ul>
                                            <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li><a class="youtube" href="#"><i class="fa fa-pinterest-p"></i></a></li>
                                            <li><a class="dribbble" href="#"><i class="fa fa-google-plus"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    <!-- Modal end -->
	
	<!-- Start Footer Area -->
	<footer class="footer">
		<!-- Footer Top -->
		<div class="footer-top section">
			<div class="container">
				<div class="row">
					<div class="col-lg-5 col-md-6 col-12">
						<!-- Single Widget -->
						<div class="single-footer about">
							<div class="logo">
								<a href="index.volt"><img src="img/Logoimba.png" alt="#" width="100px"></a>
							</div>
							<p class="text">Praesent dapibus, neque id cursus ucibus, tortor neque egestas augue,  magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus.</p>
							<p class="call">Got Question? Call us 24/7<span><a href="tel:123456789">+0123 456 789</a></span></p>
						</div>
						<!-- End Single Widget -->
					</div>
					<div class="col-lg-2 col-md-6 col-12">
						<!-- Single Widget -->
						<div class="single-footer links">
							<h4>Information</h4>
							<ul>
								<li><a href="#">About Us</a></li>
								<li><a href="#">Faq</a></li>
								<li><a href="#">Terms & Conditions</a></li>
								<li><a href="#">Contact Us</a></li>
								<li><a href="#">Help</a></li>
							</ul>
						</div>
						<!-- End Single Widget -->
					</div>
					<div class="col-lg-2 col-md-6 col-12">
						<!-- Single Widget -->
						<div class="single-footer links">
							<h4>Customer Service</h4>
							<ul>
								<li><a href="#">Payment Methods</a></li>
								<li><a href="#">Money-back</a></li>
								<li><a href="#">Returns</a></li>
								<li><a href="#">Shipping</a></li>
								<li><a href="#">Privacy Policy</a></li>
							</ul>
						</div>
						<!-- End Single Widget -->
					</div>
					<div class="col-lg-3 col-md-6 col-12">
						<!-- Single Widget -->
						<div class="single-footer social">
							<h4>Get In Tuch</h4>
							<!-- Single Widget -->
							<div class="contact">
								<ul>
									<li>NO. 342 - London Oxford Street.</li>
									<li>012 United Kingdom.</li>
									<li>info@eshop.com</li>
									<li>+032 3456 7890</li>
								</ul>
							</div>
							<!-- End Single Widget -->
							<ul>
								<li><a href="#"><i class="ti-facebook"></i></a></li>
								<li><a href="#"><i class="ti-twitter"></i></a></li>
								<li><a href="#"><i class="ti-flickr"></i></a></li>
								<li><a href="#"><i class="ti-instagram"></i></a></li>
							</ul>
						</div>
						<!-- End Single Widget -->
					</div>
				</div>
			</div>
		</div>
		<!-- End Footer Top -->
		<div class="copyright">
			<div class="container">
				<div class="inner">
					<div class="row">
						<div class="col-lg-6 col-12">
							<div class="left">
								<p>Copyright © 2020 <a href="http://www.wpthemesgrid.com" target="_blank">Wpthemesgrid</a>  -  All Rights Reserved.</p>
							</div>
						</div>
						<div class="col-lg-6 col-12">
							<div class="right">
								<img src="images/payments.png" alt="#">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<!-- /End Footer Area -->
 
	<?= $this->assets->outputJs() ?>	
</body>
</html> 