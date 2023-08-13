<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Online Food Delivery System</title>

    <!-- Template CSS -->
    <link rel="stylesheet" href="assets/css/style-starter.css">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
  </head>
  <body id="home">
<section class=" w3l-header-4 header-sticky">
	<!--header-->
	<header id="site-header" class="fixed-top">
		<div class="container">
			<nav class="navbar navbar-expand-lg navbar-dark stroke">
				<a class="navbar-brand" href="index.html">
					<span class="TASTE DELIGHT"></span>"TASTE DELIGHT"
				</a>
				<!-- if logo is image enable this   
			<a class="navbar-brand" href="#index.html">
				<img src="image-path" alt="Your logo" title="Your logo" style="height:35px;" />
			</a> -->
				<button class="navbar-toggler  collapsed bg-gradient" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
					<span class="navbar-toggler-icon fa icon-close fa-times"></span>
					
				</button>
	  
				<div class="collapse navbar-collapse" id="navbarTogglerDemo02">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item active">
							<a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
						</li>
						<li class="nav-item @@about__active">
							<a class="nav-link" href="about.php">About</a>
						</li>
						<li class="nav-item @@services__active">
							<a class="nav-link" href="servicesPage.php">Menu</a>
						</li>
						<li class="nav-item @@contact__active">
							<a class="nav-link" href="contact.php">Contact</a>
						</li>
						<li class="nav-item ml-4">
							<a class="nav-link phone" href="tel:9999999999"><span class="fa fa-phone"></span> 9999999999</a>
						</li>
					</ul>
				</div>
			</nav>
		</div>
	  </header>
	<!--/header-->
</section>

<script src="assets/js/jquery-3.3.1.min.js"></script> <!-- Common jquery plugin -->
<!--bootstrap working-->
<script src="assets/js/bootstrap.min.js"></script>
<!-- //bootstrap working-->
<!--/MENU-JS-->
<script>
	$(window).on("scroll", function () {
	  var scroll = $(window).scrollTop();
  
	  if (scroll >= 80) {
		$("#site-header").addClass("nav-fixed");
	  } else {
		$("#site-header").removeClass("nav-fixed");
	  }
	});
  
	//Main navigation Active Class Add Remove
	$(".navbar-toggler").on("click", function () {
	  $("header").toggleClass("active");
	});
	$(document).on("ready", function () {
	  if ($(window).width() > 991) {
		$("header").removeClass("active");
	  }
	  $(window).on("resize", function () {
		if ($(window).width() > 991) {
		  $("header").removeClass("active");
		}
	  });
	});
  </script>
  <!--//MENU-JS-->
<!-- disable body scroll which navbar is in active -->
<script>
$(function () {
  $('.navbar-toggler').click(function () {
    $('body').toggleClass('noscroll');
  })
});
</script>
<!-- disable body scroll which navbar is in active -->

<section class="w3l-hero-headers-9" id="home">
  <div class="slide text-center header11" data-selector="header11">
      <div class="container">
          <div class="banner-text ">
              <h5 class=" ">Only taste is <br>real for food</h5>
             <p>
              <a href="services.php" class="btn logo-button top-margin">View Our Menu</a>
          </div>
      </div>

  </div>
</section>
<section class="w3l-teams-15">
	<div class="team-single-main ">
		<div class="container">

		<div  class="row">
				
					<div class="nature-row ">
						
				</div>
			
		</div>
		</div>
		</div>
	</div>
</section>
<section class="w3l-specification-6">
    <div class="specification-layout ">
        <div class="container">
            <div class="main-titles-head ">
                <h3 class="header-name ">
					Our Special Feature
                </h3>
             
            </div>
                    <div class="call-grids-w3 d-grid">
                        <div class="grids-1  grids-effect-2">
                            <span class="fa fa-beer"></span>
                            <h2><a href="#feature" class="title-head">Well Decorated</a></h4>
                           
                        </div>
                        <div class="grids-1  grids-effect-2">
                            <div class="color-white">
                                <span class="fa fa-cutlery"></span>
                            <h2><a href="#page" class=" title-head">Breakfast</a></h4>
                        
                        </div>
                    </div>
                        <div class="grids-1 grids-effect-2">
                            <span class="fa fa-handshake-o"></span>
                            <h2><a href="#feature" class="title-head">Expert Chef</a></h4>
                         
                        </div>
                        <div class="grids-1  grids-effect-2">
                            <div class="color-white">
                                <span class="fa fa-spoon"></span>
                            <h2><a href="#page" class=" title-head">Lunch</a></h4>
                         
                        </div>
                    </div>
                            <div class="grids-1 grids-effect-2">
                                <span class="fa fa-smile-o"></span>
                                <h2><a href="#feature" class="title-head">Quick Serve</a></h4>
                               
                            </div>
                            
                        <div class="grids-1  grids-effect-2">
                            <div class="color-white">
                                <span class="fa fa-apple"></span>
                            <h2><a href="#page" class=" title-head">Dinner</a></h4>
                          
                        </div>
                    </div>
                            <div class="grids-1 grids-effect-2">
                                <span class="fa fa-diamond"></span>
                                <h2><a href="#feature" class="title-head title-head">Delicious Food</a></h4>
                              
                            </div>  
                        <div class="grids-1  grids-effect-2">
                            <div class="color-white">
                                <span class="fa fa-thumbs-o-up"></span>
                            <h2><a href="#page" class=" title-head">Desert</a></h4>
                          
                        </div>
                    </div>
                  </div>
        </div>
</section>

<section class="w3l-call-to-action_9">
    <div class="call-w3">
        <div class="container text-center">
            <div class="title-head">
            <h3>Enjoy Our<br>
                Delicious Food</h3>
           
        </div>
          
              </div>
        </div>
    </div>
</section>

<section class="w3l-covers-18">
        <div class="covers-main ">
            <div class="container">
              <div class="main-titles-head ">
                <h3 class="header-name ">
                 
              
                      </div>
                  </div>
                </div>
            </div>
        </div>
    </section>

<section class="w3l-clients" id="client">
    <div class="main-w3 text-center">
        <div class="container">
            <div class="form-right-inf"> 
                <div class="form-inner-cont">
                  <div class="main-titles-head ">
                    <h3 class="header-name white ">
                       LOGIN
                    </h3>
                  
                </div>
                    <form action="search-results.html" method="post" class="signin-form">	
                        <div class="row book-form">
                            <div class="form-input col-lg-6 col-md-6">
                                <input type="text" name="" placeholder="Enter Your Name" required="">
                            </div>
                            <div class="form-input col-lg-6 col-md-6 mt-md-0 mt-3">
                               <input type="email" name="" placeholder="Email" required="">
                                 
                           </div>
                           <div class="form-input col-md-4 mt-3">
                               <input type="date" name="" placeholder="Date" required="">
                           </div>
                          <div class="form-input  col-lg-3 col-md-2 mt-md-3 col-1">
		<input type="tel"name=""placeholder="Mobile Number">
                          </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="w3l-footer-29-main">
	<div class="footer-29 py-5 text-center">
	  <div class="container">
		<div class="footer-list-29 footer-1 ">
				<h2><a href="index.php" class="footer-logo"><span class="TASTE DELIGHT"></span> TASTE DELIGHT </a></h2>
				
		  </div>
		<div class="row footer-top-29">

		  <div class="col-lg-4 col-md-4 col-sm-6 footer-list-29 footer-2 ">
				<h6 class="footer-title-29">For You</h6>
				<ul>
					<li><p></span> <p>Privacy</p>
									<p>Terms</p>
									<p>Security</p> 
				</ul>
		  </div>
		 
		  <div class="col-lg-4 col-md-4 col-sm-6 footer-list-29 footer-2 ">
				<h6 class="footer-title-29">Contact Us</h6>
				<ul>
					<li><a href="text:94269817573"><span class="fa fa-phone"></span>9999999999</a></li>
					<li><a href="mailto:corporate-mail@support.com" class="mail"><span class="fa fa-envelope-open-o"></span> tastedelight-mail@support.com</a></li>
				</ul>
		  </div>
		</div>
	</div>
  </section>
  <section class="w3l-footer-29-main w3l-copyright">
	<div class="container">
	  <div class=" bottom-copies text-center">
		<p>Developed at <a href="http://www.avpt.cteguj.in/">A.V.Parekh Technical Institute</a> Designed by : Netra,Juhi,Bhumit,Aayush
	  </div>
	</div>
  </section>
<!-- move top -->
<button onclick="topFunction()" id="movetop" title="Go to top">
	<span class="fa fa-long-arrow-up"></span>
</button>
<script>
	// When the user scrolls down 20px from the top of the document, show the button
	window.onscroll = function () {
		scrollFunction()
	};

	function scrollFunction() {
		if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
			document.getElementById("movetop").style.display = "block";
		} else {
			document.getElementById("movetop").style.display = "none";
		}
	}

	// When the user clicks on the button, scroll to the top of the document
	function topFunction() {
		document.body.scrollTop = 0;
		document.documentElement.scrollTop = 0;
	}
</script>
<!-- /move top -->
</body>

</html>
