
<?php
include "Login/Connectionfile.php";

$conn = mysqli_connect($host, $user, $pass, $db) or die("Connection failed: " . mysqli_connect_error());
/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
} 

$Productid = $_GET['id'];


$sql = "SELECT id,image1,image2,Title,Description,catogary,Discounted_Price,Original_Price FROM Product where ID='$Productid' ORDER by id DESC";    
$rs_result = mysqli_query($conn, $sql); 
 
?> 
<html>
	<head>
		<title>Women's Fashion a Ecommerce Online Shopping Category Flat Bootstrap
			Responsive Website Template | Dresses :: w3layouts</title>
		<!-- for-mobile-apps -->
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="keywords"
			content="Women's Fashion Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
		<script
			type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
		<!-- //for-mobile-apps -->
		<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
		<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
		<link href="css/fasthover.css" rel="stylesheet" type="text/css" media="all" />
		<!-- js -->
		<script src="js/jquery.min.js"></script>
		<!-- //js -->
		<!-- cart -->
		<script src="js/simpleCart.min.js"></script>
		<!-- cart -->
		<!-- for bootstrap working -->
		<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>
		<!-- //for bootstrap working -->
		<link href='//fonts.googleapis.com/css?family=Glegoo:400,700' rel='stylesheet'
			type='text/css'>
		<link
			href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic'
			rel='stylesheet' type='text/css'>
		<!-- start-smooth-scrolling -->
		<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
		<!-- //end-smooth-scrolling -->
	</head>

	<body>
		<!-- header -->
		<div class="modal fade" id="myModal88" tabindex="-1" role="dialog"
			aria-labelledby="myLargeModalLabel"
			aria-hidden="true">
			<div class="modal-dialog modal-lg">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal"
							aria-hidden="true">
							&times;</button>
						<h4 class="modal-title" id="myModalLabel">
							Don't Wait, Login now!</h4>
					</div>
					<div class="modal-body modal-body-sub">
						<div class="row">
							<div class="col-md-8 modal_body_left modal_body_left1"
								style="border-right: 1px dotted #C2C2C2;padding-right:3em;">
								<div class="sap_tabs">
									<div id="horizontalTab"
										style="display: block; width: 100%; margin: 0px;">
										<ul>
											<li class="resp-tab-item" aria-controls="tab_item-0"
												role="tab"><span>Sign in</span></li>
											<li class="resp-tab-item" aria-controls="tab_item-1"
												role="tab"><span>Sign up</span></li>
										</ul>
										<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-0">
											<div class="facts">
												<div class="register">
													<form action="#" method="post">
														<input name="Email" placeholder="Email Address" type="text"
															required>
														<input name="Password" placeholder="Password" type="password"
															required>
														<div class="sign-up">
															<input type="submit" value="Sign in" />
														</div>
													</form>
												</div>
											</div>
										</div>

										<div class="tab-2 resp-tab-content" aria-labelledby="tab_item-1">
											<div class="facts">
												<div class="register">
													<form action="#" method="post">
														<input placeholder="Name" name="Name" type="text" required>
														<input placeholder="Email Address" name="Email" type="email"
															required>
														<input placeholder="Password" name="Password" type="password"
															required>
														<input placeholder="Confirm Password" name="Password"
															type="password" required>
														<div class="sign-up">
															<input type="submit" value="Create Account" />
														</div>
													</form>
												</div>
											</div>
										</div>
									</div>
								</div>
								<script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
								<script type="text/javascript">
								$(document).ready(function () {
									$('#horizontalTab').easyResponsiveTabs({
										type: 'default', //Types: default, vertical, accordion           
										width: 'auto', //auto or any width like 600px
										fit: true   // 100% fit in a container
									});
								});
							</script>
								<div id="OR" class="hidden-xs">
									OR</div>
							</div>
							<div class="col-md-4 modal_body_right modal_body_right1">
								<div class="row text-center sign-with">
									<div class="col-md-12">
										<h3 class="other-nw">
											Sign in with</h3>
									</div>
									<div class="col-md-12">
										<ul class="social">
											<li class="social_facebook"><a href="#"
													class="entypo-facebook"></a></li>
											<li class="social_dribbble"><a href="#"
													class="entypo-dribbble"></a></li>
											<li class="social_twitter"><a href="#"
													class="entypo-twitter"></a></li>
											<li class="social_behance"><a href="#"
													class="entypo-behance"></a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="header">
			<div class="container">
				<div class="w3l_login">
					<a href="#" data-toggle="modal" data-target="#myModal88"><span
							class="glyphicon glyphicon-user" aria-hidden="true"></span></a>
				</div>
				<div class="w3l_logo">
					<h1><a href="index.html">Women's Fashion<span>For Fashion
								Lovers</span></a></h1>
				</div>
				<div class="search">
					<input class="search_box" type="checkbox" id="search_box">
					<label class="icon-search" for="search_box"><span
							class="glyphicon glyphicon-search" aria-hidden="true"></span></label>
					<div class="search_form">
						<form action="#" method="post">
							<input type="text" name="Search" placeholder="Search...">
							<input type="submit" value="Send">
						</form>
					</div>
				</div>
				<div class="cart box_1">
					<a href="checkout.html">
						<div class="total">
							<span class="simpleCart_total"></span> (<span id="simpleCart_quantity"
								class="simpleCart_quantity"></span> items)</div>
						<img src="images/bag.png" alt />
					</a>
					<p><a href="javascript:;" class="simpleCart_empty">Empty Cart</a></p>
					<div class="clearfix"> </div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		
		
		<!-- banner 
		<div class="banner1" id="home1">
			<div class="container">
				<h2>trendy fashion dresses<span>up to</span> 30% <i>Discount</i></h2>
			</div>
		</div>
		 //banner -->

		<!-- breadcrumbs -->
		<div class="breadcrumb_dress">
			<div class="container">
				<ul>
					<li><a href="index.html"><span class="glyphicon glyphicon-home"
								aria-hidden="true"></span> Home</a> <i>/</i></li>
					<li>Dresses</li>
				</ul>
			</div>
		</div>
		<!-- //breadcrumbs -->

		<!-- dresses -->
		<div class="dresses">
			<div class="container">
				<div class="w3ls_dresses_grids">
					
					<div >						
						<div class="clearfix"> </div>

						<div class="w3ls_dresses_grid_right_grid2">							
							<div class="clearfix"> </div>
						</div>
						
						<div >
							<div >
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal"
											aria-label="Close"><span aria-hidden="true">&times;</span></button>
									</div>
									<?php  
										//echo "While loop";
										while ( $row = mysqli_fetch_assoc($rs_result) )
										{

											//id,image1,image2,Title,catogary,Discounted_Price,Original_Price
											$id = $row["id"];
											$image1 = $row["image1"];
											$image2 = $row["image2"];
											$catogary = $row["catogary"];
											$Title = $row["Title"];
											$Description = $row["Description"];
											$Discounted_Price = $row["Discounted_Price"];											
											$Pid = $row["id"];
											$Original_Price = $row["Original_Price"];
											
										

												echo"
												<section>
												<div class='modal-body'>
													<div class='col-md-5 modal_body_left'>
														<img src='images/$image1' alt=' ' class='img-responsive' />
													</div>
													<div class='col-md-7 modal_body_right'>
														<h4>$Title</h4>
														<p>$Description </p>
														<div class='rating'>
															<div class='rating-left'>
																<img src='images/star-.png' alt=' ' class='img-responsive' />
															</div>
															<div class='rating-left'>
																<img src='images/star-.png' alt=' ' class='img-responsive' />
															</div>
															<div class='rating-left'>
																<img src='images/star-.png' alt=' ' class='img-responsive' />
															</div>
															<div class='rating-left'>
																<img src='images/star.png' alt=' ' class='img-responsive' />
															</div>
															<div class='rating-left'>
																<img src='images/star.png' alt=' ' class='img-responsive' />
															</div>
															<div class='clearfix'> </div>
														</div>
														<div class='modal_body_right_cart simpleCart_shelfItem'>
															<p><span>$Original_Price</span> <i class='item_price'>$Discounted_Price</i></p>
															<p><a class='item_add' href='#'>Add to cart</a></p>
														</div>
														<h5>Color</h5>
														<div class='color-quality'>
															<ul>
																<li><a href='#'><span></span>Red</a></li>
																<li><a href='#' class='brown'><span></span>Yellow</a></li>
																<li><a href='#' class='purple'><span></span>Purple</a></li>
																<li><a href='#' class='gray'><span></span>Violet</a></li>
															</ul>
														</div>
													</div>
													<div class='clearfix'> </div>
												</div>
											</section>";
										}
									?>		
								</div>
							</div>
						</div>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
		<div class="w3l_related_products">
			<div class="container">
				<h3>Related Products</h3>
				<ul id="flexiselDemo2">
					<li>
						<div class="w3l_related_products_grid">
							<div class="agile_ecommerce_tab_left dresses_grid">
								<div class="hs-wrapper hs-wrapper3">
									<img src="images/31.jpg" alt=" " class="img-responsive">
									<img src="images/32.jpg" alt=" " class="img-responsive">
									<img src="images/33.jpg" alt=" " class="img-responsive">
									<img src="images/34.jpg" alt=" " class="img-responsive">
									<img src="images/31.jpg" alt=" " class="img-responsive">
									<img src="images/32.jpg" alt=" " class="img-responsive">
									<img src="images/33.jpg" alt=" " class="img-responsive">
									<img src="images/34.jpg" alt=" " class="img-responsive">
									<div class="w3_hs_bottom">
										<div class="flex_ecommerce">
											<a href="#" data-toggle="modal" data-target="#myModal6"><span
													class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
										</div>
									</div>
								</div>
								<h5><a href="single.html">Sweater</a></h5>
								<div class="simpleCart_shelfItem">
									<p class="flexisel_ecommerce_cart"><span>$312</span> <i
											class="item_price">$212</i></p>
									<p><a class="item_add" href="#">Add to cart</a></p>
								</div>
							</div>
						</div>
					</li>
					<li>
						<div class="w3l_related_products_grid">
							<div class="agile_ecommerce_tab_left dresses_grid">
								<div class="hs-wrapper hs-wrapper3">
									<img src="images/32.jpg" alt=" " class="img-responsive" />
									<img src="images/31.jpg" alt=" " class="img-responsive" />
									<img src="images/33.jpg" alt=" " class="img-responsive" />
									<img src="images/34.jpg" alt=" " class="img-responsive" />
									<img src="images/31.jpg" alt=" " class="img-responsive" />
									<img src="images/32.jpg" alt=" " class="img-responsive" />
									<img src="images/33.jpg" alt=" " class="img-responsive" />
									<img src="images/34.jpg" alt=" " class="img-responsive" />
									<div class="w3_hs_bottom">
										<div class="flex_ecommerce">
											<a href="#" data-toggle="modal" data-target="#myModal6"><span
													class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
										</div>
									</div>
								</div>
								<h5><a href="single.html">Sweater</a></h5>
								<div class="simpleCart_shelfItem">
									<p class="flexisel_ecommerce_cart"><span>$432</span> <i
											class="item_price">$323</i></p>
									<p><a class="item_add" href="#">Add to cart</a></p>
								</div>
							</div>
						</div>
					</li>
					<li>
						<div class="w3l_related_products_grid">
							<div class="agile_ecommerce_tab_left dresses_grid">
								<div class="hs-wrapper hs-wrapper3">
									<img src="images/34.jpg" alt=" " class="img-responsive" />
									<img src="images/37.jpg" alt=" " class="img-responsive" />
									<img src="images/30.jpg" alt=" " class="img-responsive" />
									<img src="images/36.jpg" alt=" " class="img-responsive" />
									<img src="images/37.jpg" alt=" " class="img-responsive" />
									<img src="images/30.jpg" alt=" " class="img-responsive" />
									<img src="images/36.jpg" alt=" " class="img-responsive" />
									<img src="images/38.jpg" alt=" " class="img-responsive" />
									<div class="w3_hs_bottom">
										<div class="flex_ecommerce">
											<a href="#" data-toggle="modal" data-target="#myModal6"><span
													class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
										</div>
									</div>
								</div>
								<h5><a href="single.html">Sweater</a></h5>
								<div class="simpleCart_shelfItem">
									<p class="flexisel_ecommerce_cart"><span>$323</span> <i
											class="item_price">$310</i></p>
									<p><a class="item_add" href="#">Add to cart</a></p>
								</div>
							</div>
						</div>
					</li>
					<li>
						<div class="w3l_related_products_grid">
							<div class="agile_ecommerce_tab_left dresses_grid">
								<div class="hs-wrapper hs-wrapper3">
									<img src="images/55.jpg" alt=" " class="img-responsive" />
									<img src="images/34.jpg" alt=" " class="img-responsive" />
									<img src="images/30.jpg" alt=" " class="img-responsive" />
									<img src="images/36.jpg" alt=" " class="img-responsive" />
									<img src="images/37.jpg" alt=" " class="img-responsive" />
									<img src="images/30.jpg" alt=" " class="img-responsive" />
									<img src="images/36.jpg" alt=" " class="img-responsive" />
									<img src="images/38.jpg" alt=" " class="img-responsive" />
									<div class="w3_hs_bottom">
										<div class="flex_ecommerce">
											<a href="#" data-toggle="modal" data-target="#myModal6"><span
													class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
										</div>
									</div>
								</div>
								<h5><a href="single.html">Sweater</a></h5>
								<div class="simpleCart_shelfItem">
									<p class="flexisel_ecommerce_cart"><span>$256</span> <i
											class="item_price">$200</i></p>
									<p><a class="item_add" href="#">Add to cart</a></p>
								</div>
							</div>
						</div>
					</li>
				</ul>
				<script type="text/javascript">
					$(window).load(function() {
						$("#flexiselDemo2").flexisel({
							visibleItems:4,
							animationSpeed: 1000,
							autoPlay: true,
							autoPlaySpeed: 3000,    		
							pauseOnHover: true,
							enableResponsiveBreakpoints: true,
							responsiveBreakpoints: { 
								portrait: { 
									changePoint:480,
									visibleItems: 1
								}, 
								landscape: { 
									changePoint:640,
									visibleItems:2
								},
								tablet: { 
									changePoint:768,
									visibleItems: 3
								}
							}
						});
						
					});
				</script>
				<script type="text/javascript" src="js/jquery.flexisel.js"></script>
			</div>
		</div>
		<!-- //dresses -->
		<!-- newsletter -->
		<div class="newsletter">
			<div class="container">
				<div class="col-md-6 w3agile_newsletter_left">
					<h3>Newsletter</h3>
					<p>we're thrilled to present to you our newest collection that's bound to
						set the fashion scene on fire! Get ready to make heads turn and hearts
						flutter with our exquisite range of women's fashion pieces curated just
						for you</p>
				</div>
				<div class="col-md-6 w3agile_newsletter_right">
					<form action="#" method="post">
						<input type="email" name="Email" value="Email" onfocus="this.value = '';"
							onblur="if (this.value == '') {this.value = 'Email';}" required>
						<input type="submit" value>
					</form>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		<!-- //newsletter -->
		<!-- footer -->
		<div class="footer">
			<div class="container">
				<div class="w3_footer_grids">
					<div class="col-md-3 w3_footer_grid">
						<h3>Contact</h3>
						<p>Thank you for shopping at [women fashion]! We value your
							feedback and are here to assist you with any questions or concerns you
							may have. Please don't hesitate to reach out to us using any of the
							methods below:</p>
						<ul class="address">
							<li><i class="glyphicon glyphicon-map-marker"
									aria-hidden="true"></i>1234k Avenue, 4th block, <span>New York
									City.</span></li>
							<li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i><a
									href="mailto:info@example.com">info@example.com</a></li>
							<li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>+1234
								567 567</li>
						</ul>
					</div>
					<div class="col-md-3 w3_footer_grid">
						<h3>Information</h3>
						<ul class="info">
							<li><a href="about.html">About Us</a></li>
							<li><a href="mail.html">Contact Us</a></li>
							<li><a href="faq.html">FAQ's</a></li>
							<li><a href="products.html">Special Products</a></li>
						</ul>
					</div>
					<div class="col-md-3 w3_footer_grid">
						<h3>Category</h3>
						<ul class="info">
							<li><a href="dresses.html">Dresses</a></li>
							<li><a href="sweaters.html">Sweaters</a></li>
							<li><a href="shirts.html">Shirts</a></li>
							<li><a href="sarees.html">Sarees</a></li>
							<li><a href="skirts.html">Shorts & Skirts</a></li>
						</ul>
					</div>
					<div class="col-md-3 w3_footer_grid">
						<h3>Profile</h3>
						<ul class="info">
							<li><a href="products.html">Summer Store</a></li>
							<li><a href="checkout.html">My Cart</a></li>
						</ul>
						<h4>Follow Us</h4>
						<div class="agileits_social_button">
							<ul>
								<li><a href="#" class="facebook"> </a></li>
								<li><a href="#" class="twitter"> </a></li>
								<li><a href="#" class="google"> </a></li>
								<li><a href="#" class="pinterest"> </a></li>
							</ul>
						</div>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
			<div class="footer-copy">
				<div class="footer-copy1">
					<div class="footer-copy-pos">
						<a href="#home1" class="scroll"><img src="images/arrow.png" alt=" "
								class="img-responsive" /></a>
					</div>
				</div>
				<div class="container">
					<p>&copy; 2024 Women's Fashion. All rights reserved</p>
				</div>
			</div>
		</div>
		<!-- //footer -->
	</body>
</html>