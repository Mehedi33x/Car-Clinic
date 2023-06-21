
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="webthemez">
    <title>Car Clinic</title>
	<!-- core CSS -->
    <link href="{{url('frontend/assets/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{url('frontend/assets/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{url('frontend/assets/css/animate.min.css')}}" rel="stylesheet">
    <link href="{{url('frontend/assets/css/owl.carousel.css')}}" rel="stylesheet">
    <link href="{{url('frontend/assets/css/owl.transitions.css')}}" rel="stylesheet">
    <link href="{{url('frontend/assets/css/prettyPhoto.css')}}" rel="stylesheet">
	<link href="{{url('frontend/assets/css/magnific-popup.css')}}" rel="stylesheet">
	<link href="{{url('frontend/assets/css/gallery-1.css')}}" rel="stylesheet">
    <link href="{{url('frontend/assets/css/styles.css')}}" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
    <link rel="shortcut icon" href="{{url('frontend/assets/images/ico/favicon.ico')}}">
</head>

<body id="home">

    <header id="header">
        <nav id="main-nav" class="navbar navbar-default navbar-fixed-top" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.html"><img src="{{url('frontend/assets/images/logo.png')}}" alt="logo"></a>
                </div>

                <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">
                        <li class="scroll active"><a href="#home">Home</a></li>
                        <li class="scroll"><a href="#services">Our Service</a></li>
                        <li class="scroll"><a href="#about">About Us</a></li>
                        <li class="scroll"><a href="#portfolio">Gallery</a></li>
                        <li class="scroll"><a href="#our-team">Team</a></li>
                        <li class="scroll"><a href="#pricing">Pricing</a></li>
                        <li class="scroll"><a href="#contact-us">Contact</a></li>
                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->
    </header><!--/header-->

    <section id="main-slider">
        <div class="owl-carousel">
            <div class="item" style="background-image: url({{url('frontend/assets/images/slider/bg1.jpg')}});">
                <div class="slider-inner">
                    <div class="container">
                        <div class="row">
							<div class="carousel-caption">
                                <div class="carousel-content">
                                    <h2>Car Servicing</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elitsed do eiusmod.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--/.item-->
             <div class="item" style="background-image: url({{url('frontend/assets/images/slider/bg2.jpg')}});">
                <div class="slider-inner">
                    <div class="container">
                        <div class="row">
							<div class="carousel-caption">
                                <div class="carousel-content">
                                    <h2>Quick Car Wash</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elitsed do eiusmod.</p>
                                </div>
                            </div>
							</div>
                        </div> </div>
                    </div>
                </div>
            </div><!--/.item-->
        </div><!--/.owl-carousel-->
    </section><!--/#main-slider-->
    <section id="services" >
        <div class="container">

            <div class="section-header">
                <h2 class="section-title text-center wow fadeInDown">Our Services</h2>
                <p class="text-center wow fadeInDown">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent eget risus vitae massa <br> semper aliquam quis mattis quam.</p>
            </div>

            <div class="row">
                <div class="features">
                    <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="0ms">
                        <div class="media service-box">
						<div class="hexagon">
						  <div class="inner">
							  <i class="fa fa-heart-o"></i>
						  </div>
						</div>
                            <div class="media-body">
                                <h4 class="media-heading">Car Wash</h4>
                                <p>Backed by some of the biggest names in the industry, Firefox OS is an open platform that fosters greater</p>
                            </div>
                        </div>
                    </div><!--/.col-md-4-->

                    <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="100ms">
                        <div class="media service-box">
						<div class="hexagon">
						  <div class="inner">
							<i class="fa fa-line-chart"></i>
						  </div>
						</div>
                            <div class="media-body">
                                <h4 class="media-heading">Car Servicing</h4>
                                <p>Backed by some of the biggest names in the industry, Firefox OS is an open platform that fosters greater</p>
                            </div>
                        </div>
                    </div><!--/.col-md-4-->

                    <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="200ms">
                        <div class="media service-box">
								<div class="hexagon">
						  <div class="inner">
                                <i class="fa fa-star-o"></i>
						  </div>
						</div>
                            <div class="media-body">
                                <h4 class="media-heading">Car Checkup</h4>
                                <p>Morbi vitae tortor tempus, placerat leo et, suscipit lectus. Phasellus ut euismod massa, eu eleifend ipsum.</p>
                            </div>
                        </div>
                    </div><!--/.col-md-4-->

                    <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="300ms">
                        <div class="media service-box">

								<div class="hexagon">
						  <div class="inner">
                                <i class="fa fa-clock-o"></i>
						  </div>
						</div>
                            <div class="media-body">
                                <h4 class="media-heading">Alignment</h4>
                                <p>Morbi vitae tortor tempus, placerat leo et, suscipit lectus. Phasellus ut euismod massa, eu eleifend ipsum.</p>
                            </div>
                        </div>
                    </div><!--/.col-md-4-->

                    <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="400ms">
                        <div class="media service-box">
							<div class="hexagon">
						  <div class="inner">
                                <i class="fa fa-paper-plane-o"></i>
						  </div>
						</div>
                            <div class="media-body">
                                <h4 class="media-heading">Painting</h4>
                                <p>Morbi vitae tortor tempus, placerat leo et, suscipit lectus. Phasellus ut euismod massa, eu eleifend ipsum.</p>
                            </div>
                        </div>
                    </div><!--/.col-md-4-->

                    <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="500ms">
                        <div class="media service-box">
							<div class="hexagon">
						  <div class="inner">
                                <i class="fa fa-calendar"></i>
						  </div>
						</div>
                            <div class="media-body">
                                <h4 class="media-heading">Modifiying</h4>
                                <p>Morbi vitae tortor tempus, placerat leo et, suscipit lectus. Phasellus ut euismod massa, eu eleifend ipsum.</p>
                            </div>
                        </div>
                    </div><!--/.col-md-4-->
                </div>
            </div><!--/.row-->
        </div><!--/.container-->
    </section><!--/#services-->

 <section id="about">
        <div class="container">

            <div class="section-header">
                <h2 class="section-title text-center wow fadeInDown">About Us</h2>
                <p class="text-center wow fadeInDown">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent eget risus vitae massa <br> semper aliquam quis mattis quam.</p>
            </div>

            <div class="row">
                <div class="col-sm-6 wow fadeInLeft">
                  <img class="img-responsive" src="{{url('frontend/assets/images/about.png')}}" alt="">
                </div>

                <div class="col-sm-6 wow fadeInRight">
                    <h3 class="column-title">High Quality Process</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent eget risus vitae massa semper aliquam quis mattis quam. Morbi vitae tortor tempus, placerat leo et, suscipit lectus. Phasellus ut euismod massa, eu eleifend ipsum.</p>

                    <p>Nulla eu neque commodo, dapibus dolor eget, dictum arcu. In nec purus eu tellus consequat ultricies. Donec feugiat tempor turpis, rutrum sagittis mi venenatis at. Sed molestie lorem a blandit congue. Ut pellentesque odio quis leo volutpat, vitae vulputate felis condimentum. </p>

					<p>Praesent vulputate fermentum lorem, id rhoncus sem vehicula eu. Quisque ullamcorper, orci adipiscing auctor viverra, velit arcu malesuada metus, in volutpat tellus sem at justo.</p>


                    <a class="btn btn-primary" href="#">Learn More</a>

                </div>
            </div>
        </div>
    </section><!--/#about-->
   <section id="portfolio">
            <!-- Start Gallery 1-2 -->
    <section id="gallery-1" data-section="gallery-1" class="data-section"  class="content-block section-wrapper gallery-1">

    	<div class="container">

	   <div class="section-header">
                <h2 class="section-title text-center wow fadeInDown animated" style="visibility: visible; animation-name: fadeInDown;">Portfolio</h2>
                <p class="text-center wow fadeInDown animated" style="visibility: visible; animation-name: fadeInDown;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent eget risus vitae massa <br> semper aliquam quis mattis quam.</p>
            </div>
			<div class="editContent">
	            <ul class="filter">
	                <li class="active"><a href="#" data-filter="*">All</a></li>
	                <li><a href="#" data-filter=".artwork">Cars</a></li>
	                <li><a href="#" data-filter=".creative">Checkup</a></li>
	                <li><a href="#" data-filter=".nature">Servicing</a></li>
	                <li><a href="#" data-filter=".outside">Painting</a></li>
	                <li><a href="#" data-filter=".photography">Modifiying</a></li>
	            </ul>
			</div>
            <!-- /.gallery-filter -->

            <div class="row">
                <div id="isotope-gallery-container">
                    <div class="col-md-4 col-sm-6 col-xs-12 gallery-item-wrapper artwork creative">
                        <div class="gallery-item">
                            <div class="gallery-thumb">
                                <img src="{{url('frontend/assets/images/portfolio/1.jpg')}}" class="img-responsive" alt="1st gallery Thumb">
                                <div class="image-overlay"></div>
                                <a href="{{url('frontend/assets/images/portfolio/1.jpg')}}" class="gallery-zoom"><i class="fa fa-eye"></i></a>
                                <a href="#" class="gallery-link"><i class="fa fa-link"></i></a>
                            </div>
                            <div class="gallery-details">
                            	<div class="editContent">
	                                <h5>1st gallery Item</h5>
                            	</div>
                            	<div class="editContent">
	                                <p>Nullam id dolor id nibh ultricies vehicula.</p>
                            	</div>
                            </div>
                        </div>
                    </div>
                    <!-- /.gallery-item-wrapper -->
                    <div class="col-md-4 col-sm-6 col-xs-12 gallery-item-wrapper nature outside">
                        <div class="gallery-item">
                            <div class="gallery-thumb">
                                <img src="{{url('frontend/assets/images/portfolio/2.jpg')}}" class="img-responsive" alt="2nd gallery Thumb">
                                <div class="image-overlay"></div>
                                <a href="{{url('frontend/assets/images/portfolio/2.jpg')}}" class="gallery-zoom"><i class="fa fa-eye"></i></a>
                                <a href="#" class="gallery-link"><i class="fa fa-link"></i></a>
                            </div>
                            <div class="gallery-details">
                            	<div class="editContent">
                                	<h5>2nd gallery Item</h5>
                            	</div>
                            	<div class="editContent">
                                	<p>Nullam id dolor id nibh ultricies vehicula.</p>
                            	</div>
                            </div>
                        </div>
                    </div>
                    <!-- /.gallery-item-wrapper -->
                    <div class="col-md-4 col-sm-6 col-xs-12 gallery-item-wrapper photography artwork">
                        <div class="gallery-item">
                            <div class="gallery-thumb">
                                <img src="{{url('frontend/assets/images/portfolio/3.jpg')}}" class="img-responsive" alt="3rd gallery Thumb">
                                <div class="image-overlay"></div>
                                <a href="{{url('frontend/assets/images/portfolio/3.jpg')}}" class="gallery-zoom"><i class="fa fa-eye"></i></a>
                                <a href="#" class="gallery-link"><i class="fa fa-link"></i></a>
                            </div>
                            <div class="gallery-details">
                            	<div class="editContent">
                                	<h5>3rd gallery Item</h5>
                            	</div>
                            	<div class="editContent">
                                	<p>Nullam id dolor id nibh ultricies vehicula.</p>
                            	</div>
                            </div>
                        </div>
                    </div>
                    <!-- /.gallery-item-wrapper -->
                    <div class="col-md-4 col-sm-6 col-xs-12 gallery-item-wrapper creative nature">
                        <div class="gallery-item">
                            <div class="gallery-thumb">
                                <img src="{{url('frontend/assets/images/portfolio/4.jpg')}}" class="img-responsive" alt="4th gallery Thumb">
                                <div class="image-overlay"></div>
                                <a href="{{url('frontend/assets/images/portfolio/4.jpg')}}" class="gallery-zoom"><i class="fa fa-eye"></i></a>
                                <a href="#" class="gallery-link"><i class="fa fa-link"></i></a>
                            </div>
                            <div class="gallery-details">
                            	<div class="editContent">
                                	<h5>4th gallery Item</h5>
                            	</div>
                            	<div class="editContent">
                                	<p>Nullam id dolor id nibh ultricies vehicula.</p>
                            	</div>
                            </div>
                        </div>
                    </div>
                    <!-- /.gallery-item-wrapper -->
                    <div class="col-md-4 col-sm-6 col-xs-12 gallery-item-wrapper nature">
                        <div class="gallery-item">
                            <div class="gallery-thumb">
                                <img src="{{url('frontend/assets/images/portfolio/5.jpg')}}" class="img-responsive" alt="5th gallery Thumb">
                                <div class="image-overlay"></div>
                                <a href="{{url('frontend/assets/images/portfolio/5.jpg')}}" class="gallery-zoom"><i class="fa fa-eye"></i></a>
                                <a href="#" class="gallery-link"><i class="fa fa-link"></i></a>
                            </div>
                            <div class="gallery-details">
                            	<div class="editContent">
                                	<h5>5th gallery Item</h5>
                            	</div>
                            	<div class="editContent">
                                	<p>Nullam id dolor id nibh ultricies vehicula.</p>
                            	</div>
                            </div>
                        </div>
                    </div>
                    <!-- /.gallery-item-wrapper -->
                    <div class="col-md-4 col-sm-6 col-xs-12 gallery-item-wrapper artwork creative">
                        <div class="gallery-item">
                            <div class="gallery-thumb">
                                <img src="{{url('frontend/assets/images/portfolio/6.jpg')}}" class="img-responsive" alt="6th gallery Thumb">
                                <div class="image-overlay"></div>
                                <a href="{{url('frontend/assets/images/portfolio/6.jpg')}}" class="gallery-zoom"><i class="fa fa-eye"></i></a>
                                <a href="#" class="gallery-link"><i class="fa fa-link"></i></a>
                            </div>
                            <div class="gallery-details">
                            	<div class="editContent">
                                	<h5>6th gallery Item</h5>
                            	</div>
                            	<div class="editContent">
                                	<p>Nullam id dolor id nibh ultricies vehicula.</p>
                            	</div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.isotope-gallery-container -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>
    <!--// End Gallery 1-2 -->
   </section><!--/#portfolio-->



    <section id="our-team">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title text-center wow fadeInDown">Experts Team</h2>
                <p class="text-center wow fadeInDown">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent eget risus vitae massa <br> semper aliquam quis mattis quam.</p>
            </div>

            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="team-member wow fadeInUp" data-wow-duration="400ms" data-wow-delay="0ms">
                        <div class="team-img">
                            <img class="img-responsive" src="{{url('frontend/assets/images/team/01.jpg')}}" alt="">
                        </div>
                        <div class="team-info">
                            <h3>John Deo</h3>
                            <span>CEO</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="team-member wow fadeInUp" data-wow-duration="400ms" data-wow-delay="100ms">
                        <div class="team-img">
                            <img class="img-responsive" src="{{url('frontend/assets/images/team/02.jpg')}}" alt="">
                        </div>
                        <div class="team-info">
                            <h3>Mike Timobbs</h3>
                            <span>Manager</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="team-member wow fadeInUp" data-wow-duration="400ms" data-wow-delay="200ms">
                        <div class="team-img">
                            <img class="img-responsive" src="{{url('frontend/assets/images/team/03.jpg')}}" alt="">
                        </div>
                        <div class="team-info">
                            <h3>Remo Silvaus</h3>
                            <span>Designer</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="team-member wow fadeInUp" data-wow-duration="400ms" data-wow-delay="300ms">
                        <div class="team-img">
                            <img class="img-responsive" src="{{url('frontend/assets/images/team/04.jpg')}}" alt="">
                        </div>
                        <div class="team-info">
                            <h3>Niscal Deon</h3>
                            <span>Engineer</span>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section><!--/#our-team-->

    <section id="pricing">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title text-center wow fadeInDown">Best Plans</h2>
                <p class="text-center wow fadeInDown">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent eget risus vitae massa <br> semper aliquam quis mattis quam.</p>
            </div>

            <div class="row">
                <div class="col-sm-6 col-md-3">
                    <div class="wow zoomIn" data-wow-duration="400ms" data-wow-delay="0ms">
                        <ul class="pricing">
                            <li class="plan-header">
                                <div class="price-duration">
                                    <span class="price">
                                        $45
                                    </span>
                                    <span class="duration">
                                        per month
                                    </span>
                                </div>

                                <div class="plan-name">
                                    Basic
                                </div>
                            </li>
                            <li><p>Nique porriqua tquises dolorem
							desumquia doloresamet consectet adipisci.
							Masagni dolores eoquie voluptate sequi
							saliquam quaerat voluptate.</p></li>
                            <li class="plan-purchase"><a class="btn btn-primary" href="#">Order Now!</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="wow zoomIn" data-wow-duration="400ms" data-wow-delay="200ms">
                        <ul class="pricing featured">
                            <li class="plan-header">
                                <div class="price-duration">
                                    <span class="price">
                                        $85
                                    </span>
                                    <span class="duration">
                                        per month
                                    </span>
                                </div>

                                <div class="plan-name">
                                    Standard
                                </div>
                            </li>
                             <li><p>Nique porriqua tquises dolorem
							desumquia doloresamet consectet adipisci.
							Masagni dolores eoquie voluptate sequi
							saliquam quaerat voluptate.</p></li>
                            <li class="plan-purchase"><a class="btn btn-primary" href="#">Order Now!</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="wow zoomIn" data-wow-duration="400ms" data-wow-delay="400ms">
                        <ul class="pricing">
                            <li class="plan-header">
                                <div class="price-duration">
                                    <span class="price">
                                        $125
                                    </span>
                                    <span class="duration">
                                        per month
                                    </span>
                                </div>

                                <div class="plan-name">
                                    Gold
                                </div>
                            </li>
                             <li><p>Nique porriqua tquises dolorem
							desumquia doloresamet consectet adipisci.
							Masagni dolores eoquie voluptate sequi
							saliquam quaerat voluptate.</p></li>
                            <li class="plan-purchase"><a class="btn btn-primary" href="#">Order Now!</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="wow zoomIn" data-wow-duration="400ms" data-wow-delay="600ms">
                        <ul class="pricing">
                            <li class="plan-header">
                                <div class="price-duration">
                                    <span class="price">
                                        $185
                                    </span>
                                    <span class="duration">
                                        per month
                                    </span>
                                </div>

                                <div class="plan-name">
                                    Platinum
                                </div>
                            </li>
                            <li><p>Nique porriqua tquises dolorem
							desumquia doloresamet consectet adipisci.
							Masagni dolores eoquie voluptate sequi
							saliquam quaerat voluptate.</p></li>
                            <li class="plan-purchase"><a class="btn btn-primary" href="#">Order Now!</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section><!--/#pricing-->

    <section id="testimonial">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2">

                    <div id="carousel-testimonial" class="carousel slide text-center" data-ride="carousel">
                        <!-- Wrapper for slides -->
                        <div class="carousel-inner" role="listbox">
                            <div class="item active">
                                <p><img class="img-thumbnail" src="{{url('frontend/assets/images/pic1.jpg')}}" alt=""></p>
                                <h4>John Deo</h4>
                                <p>Fusce non fermentum mi. Praesent vel lobortis elit. Nulla sodales, risus quis sollicitudin iaculis, felis dolor aliquet purus, eget elementum velit nunc eu dolor. Curabitur elit tellus.</p>
                            </div>
                            <div class="item">
                                <p><img class="img-thumbnail" src="{{url('frontend/assets/images/pic2.jpg')}}" alt=""></p>
                                <h4>Gramth Larry</h4>
                                <p>Fusce non fermentum mi. Praesent vel lobortis elit. Nulla sodales, risus quis sollicitudin iaculis, felis dolor aliquet purus, eget elementum velit nunc eu dolor. Curabitur elit tellus, dictu.</p>
                            </div>
                        </div>

                        <!-- Controls -->
                        <div class="btns">
                            <a class="btn btn-primary btn-sm" href="#carousel-testimonial" role="button" data-slide="prev">
                                <span class="fa fa-angle-left" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="btn btn-primary btn-sm" href="#carousel-testimonial" role="button" data-slide="next">
                                <span class="fa fa-angle-right" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!--/#testimonial-->


    <section id="contact-us">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title text-center wow fadeInDown">Contact Us</h2>
                <p class="text-center wow fadeInDown">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent eget risus vitae massa <br> semper aliquam quis mattis quam.</p>
            </div>
        </div>
    </section><!--/#contact-us-->


    <section id="contact">

        <div class="container">
            <div class="container contact-info">
                <div class="row">
				  <div class="col-sm-4 col-md-4">
                        <div class="contact-form">
                            <h3>Contact Info</h3>

                            <address>
                              <strong>Amazing Company, Inc.</strong><br>
                              12345 NewYork, Street 125<br>
                              United States 94107<br>
                              <abbr title="Phone">P:</abbr> (123) 456-7890
                            </address>
					</div></div>
                    <div class="col-sm-8 col-md-8">
                        <div class="contact-form">

                        <!--NOTE: Update your email Id in "contact_me.php" file in order to receive emails from your contact form-->

		<form name="sentMessage" id="contactForm"  novalidate>
		 <div class="control-group">
                    <div class="controls">
			<input type="text" class="form-control"
			   	   placeholder="Full Name" id="name" required
			           data-validation-required-message="Please enter your name" />
			  <p class="help-block"></p>
		   </div>
	         </div>
                <div class="control-group">
                  <div class="controls">
			<input type="email" class="form-control" placeholder="Email"
			   	            id="email" required
			   		   data-validation-required-message="Please enter your email" />
		</div>
	    </div>

               <div class="control-group">
                 <div class="controls">
				 <textarea rows="10" cols="100" class="form-control"
                       placeholder="Message" id="message" required
		       data-validation-required-message="Please enter your message" minlength="5"
                       data-validation-minlength-message="Min 5 characters"
                        maxlength="999" style="resize:none"></textarea>
		</div>
               </div>
	     <div id="success"> </div> <!-- For success/fail messages -->
	    <button type="submit" class="btn btn-primary pull-right">Send</button><br />
          </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<div id="google-map" style="height:400px" data-latitude="40.7141667" data-longitude="-74.00638891"></div>
   </section><!--/#bottom-->

    <footer id="footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    &copy; 2019 Company Name. <a href="https://webthemez.com/free-bootstrap-templates/" target="_blank">Free Bootstrap Theme</a> by WebThemez
                </div>
                <div class="col-sm-6">
                    <ul class="social-icons">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                        <li><a href="#"><i class="fa fa-github"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer><!--/#footer-->

    <script src="{{url('frontend/assets/js/jquery.js')}}"></script>
    <script src="{{url('frontend/assets/js/bootstrap.min.js')}}"></script>
    <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
    <script src="{{url('frontend/assets/js/owl.carousel.min.js')}}"></script>
    <script src="{{url('frontend/assets/js/mousescroll.js')}}"></script>
    <script src="{{url('frontend/assets/js/smoothscroll.js')}}"></script>
    <script src="{{url('frontend/assets/js/jquery.prettyPhoto.js')}}"></script>
    <script src="{{url('frontend/assets/js/jquery.inview.min.js')}}"></script>
    <script src="{{url('frontend/assets/js/wow.min.js')}}"></script>
    <script src="{{url('frontend/assets/contact/jqBootstrapValidation.js')}}"></script>
    <script src="{{url('frontend/assets/contact/contact_me.js')}}"></script>

    <script type="text/javascript" src="{{url('frontend/assets/js/jquery.isotope.min.js')}}"></script><!-- Gallery Filter -->
	<script type="text/javascript" src="{{url('frontend/assets/js/jquery.magnific-popup.min.js')}}"></script><!-- Gallery Popup -->

    <script src="{{url('frontend/assets/js/custom-scripts.js')}}"></script>
</body>
</html>
