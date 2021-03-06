<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>美国买买买</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Website Template by FreeHTML5.co" />
	<meta name="keywords" content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
	<meta name="author" content="FreeHTML5.co" />

	<!-- 
	//////////////////////////////////////////////////////

	FREE HTML5 TEMPLATE 
	DESIGNED & DEVELOPED by FreeHTML5.co
		
	Website: 		http://freehtml5.co/
	Email: 			info@freehtml5.co
	Twitter: 		http://twitter.com/fh5co
	Facebook: 		https://www.facebook.com/fh5co

	//////////////////////////////////////////////////////
	 -->

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet"> -->
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body >
		
	<div class="fh5co-loader"></div>
	
	<div id="page">
	<nav class="fh5co-nav" role="navigation">
		<div class="container">
			<div class="fh5co-top-logo">
				<div id="fh5co-logo"><a href="index.html"></a>


				</div>
			</div>
			<div class="fh5co-top-menu menu-1 text-center">
				<ul>
					<li><a href="#">Product</a></li>

					<li><a href="contact.html">Contact</a></li>
				</ul>
			</div>
			<div class="fh5co-top-social menu-1 text-right">
				<ul class="fh5co-social">
					<li><a href="#"><i class="icon-twitter"></i></a></li>
					<li><a href="#"><i class="icon-dribbble"></i></a></li>
					<li><a href="#"><i class="icon-github"></i></a></li>
				</ul>
			</div>
		</div>
	</nav>


	
	<div id="fh5co-work">
		<div class="container">
			<!-- <div class="row top-line animate-box">
				<div class="col-md-7 col-md-push-5 text-left intro">
					<h2>Shift is a free html5 template to showcase your work. <span class="fh5co-highlight">Made with <i class="icon-heart2"></i> by <a href="http://freehtml5.co">FreeHTML5.co</a> </span></h2>
					<h2>Shift is a Collection of a Beautiful &amp; Premium Themes.</h2>
				</div>
				
			</div> -->
				<div class="row" v-for="productSet in products">
					<div   class="col-md-4 text-center animate-box fadeInUp animated-fast" v-for=" product in productSet">
						<a class="work" >
							<img   class="lazyload" v-bind:src ="'./daigou_opt/' + product" width="100%" :data-src="'./daigou_opt/' + product">
					<!-- 		<div class="work-grid" v-bind:style="{ 'background-image': 'url(./daigou_opt/' + product + ')' }">
								<div class="inner">
									<div class="desc">
									<h3>Folding Light</h3>
									<span class="cat">Branding</span>
								</div>
								</div>
							</div> -->
						</a>
					</div>
					
				</div>
			
		</div>
	</div>
	


	<div id="fh5co-started">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					<h2>Get Started</h2>
					<p>We create beautiful themes for your site behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
					<p><a href="#" class="btn btn-primary">Let's work together</a></p>
				</div>
			</div>
		</div>
	</div>

	<footer id="fh5co-footer" role="contentinfo">
		<div class="container">
			<div class="row copyright">
				<div class="col-md-12 text-center">
					<p>
						<small class="block">&copy; 2016 Free HTML5. All Rights Reserved.</small> 
						<small class="block">Designed by <a href="http://freehtml5.co/" target="_blank">FreeHTML5.co</a> Demo Images: <a href="http://unsplash.co/" target="_blank">Unsplash</a> &amp; <a href="http://blog.gessato.com/" target="_blank">Gessato</a></small>
					</p>
					
					<ul class="fh5co-social-icons">
						<li><a href="#"><i class="icon-twitter"></i></a></li>
						<li><a href="#"><i class="icon-facebook"></i></a></li>
						<li><a href="#"><i class="icon-linkedin"></i></a></li>
						<li><a href="#"><i class="icon-dribbble"></i></a></li>
					</ul>
					
				</div>
			</div>

		</div>
	</footer>
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>
	
	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Main -->
	<script src="js/main.js"></script>

	<script src="https://cdn.jsdelivr.net/npm/vue"></script>

	<script type="text/javascript">

	var app = new Vue({
	    el: '#page',
	    data: {
	     	products:[],
	      },
    created:function(){
    	var formData={
		    	'path':'../daigou_opt/',
				'action':'getProduct'
			}
			$.ajax({
		   		url : "./php/index.php",
		    	type: "POST",
		    	data : formData,
		    success: function(data, textStatus, jqXHR)
		    {
		       		console.log("get product:  ")
		       		console.log(data)


		       		while(data.data.length) {
						   app.products.push(data.data.splice(0,3));
						}

		    },
		    error: function (jqXHR, textStatus, errorThrown)
		    {
		 			console.log(textStatus)
		    }
			});
    }

  });

	</script>
	</body>
</html>

