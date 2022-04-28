<?php
/**
 * Created by PhpStorm.
 * User: Starglob2
 * Date: 28/04/2022
 * Time: 10:40
 */
?>
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->  
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->  
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->  
<head>
    <title>Responsive website template for restaurants</title>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">    
    <link rel="shortcut icon" href="favicon.ico">  
    <link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Dancing+Script:400,700' rel='stylesheet' type='text/css'>
    <!-- Global CSS -->
    <link rel="stylesheet" href="{{ asset('plugins/bootstrap/css/bootstrap.min.css') }}">   
    <!-- Plugins CSS -->    
    <link rel="stylesheet" href="{{ asset('plugins/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/flexslider/flexslider.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/Gallery/css/blueimp-gallery.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/Bootstrap-Image-Gallery/css/bootstrap-image-gallery.min.css') }}">
    
    <!-- Theme CSS -->
    <link id="theme-style" rel="stylesheet" href="css/styles.css">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->

      <script src="{{ asset('https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js') }}"></script>
      <script src="{{ asset('https://oss.maxcdn.com/respond/1.4.2/respond.min.js') }}"></script>
    <![endif]-->
</head> 

<body data-spy="scroll">     
    <!-- ******HEADER****** --> 
    <header id="header" class="header navbar-fixed-top">  
        <div class="container ">       
            <nav class="main-nav" role="navigation">
                <div class="navbar-header text-center">
                    <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-collapse">
                        <span class="toggle-title">Menu</span>
                        <span class="icon-bar-wrapper">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </span><!--//icon-bar-wrapper-->
                    </button><!--//nav-toggle-->
                </div><!--//navbar-header-->
                <div id="navbar-collapse" class="navbar-collapse collapse  text-center">
                    <ul class="nav navbar-nav center-block">
                        <li class="nav-item"><a class="scrollto" href="#hero">Home</a></li>
                        <li class="nav-item"><a class="scrollto" href="#menus">Menus</a></li>
                        <li class="nav-item"><a class="scrollto" href="#news">News &amp; Events</a></li>                                              
                        <li class="nav-item"><a class="scrollto" href="#about">About</a></li>
                        <li class="nav-item"><a href="#" data-toggle="modal" data-target="#reserve-modal">Reservations</a></li>
                        <li class="nav-item"><a class="scrollto" href="#contact">Contact</a></li>
                    </ul><!--//nav-->
                </div><!--//navabr-collapse-->
            </nav><!--//main-nav-->
        </div><!--//container-->
    </header><!--//header-->
    
    <div id="hero" class="hero-section">
        <div class="content-wrapper">
            <div class="container text-center">
                <div class="branding">
                    <div class="script">Welcome to</div>
                    <h1 class="logo text-center">
                        <!--/*
                        <span class="border border-l"></span>
                        <span class="text">Epicure</span>
                        <span class="border border-r"></span>
                        */ -->
                        <img class="img-responsive block-center" src="{{ asset('images/logo.png') }}" alt="logo" />
                    </h1><!--//logo-->
                    <div class="tagline text-center">
                        <ul class="list center-block">
                            <li class="type">Cafe</li>
                            <li role="presentation" class="dot"><i class="fa fa-circle"></i></li>
                            <li class="type">Restaurant</li>
                            <li role="presentation" class="dot"><i class="fa fa-circle"></i></li>
                            <li class="type">Wine Bar</li>
                        </ul>
                    </div><!--//tagline-->
                </div><!--//branding-->
                <h2 class="promo-line">
                    Promoting your restaurant in a powerful way
                </h2><!--//promo-->
                <div class="cta-container">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#reserve-modal">Book a Table</button>
                </div><!--//cta-container-->
            </div><!--//container-->
        </div><!--//content-wrapper-->
        
        <div class="scroll-link text-center">
            <p><a class="scrollto" href="#menus">View Our Menus</a></p>
            <a class="arrow-holder animate scrollto" href="#menus"><img src="{{ asset('images/arrow.svg') }}" alt="" /></a>
        </div>
        
        <div class="bg-slider-wrapper">
            <div id="bg-slider" class="flexslider bg-slider">
                <ul class="slides">
                    <li class="slide slide-1"></li>
                    <li class="slide slide-2"></li>
                    <li class="slide slide-3"></li>
                </ul>
            </div>
        </div><!--//bg-slider-wrapper-->
    </div><!--//hero-section-->
    
    <!-- ******Reviews Section****** -->
    <section id="reviews" class="reviews-section section">
        <div class="container text-center">
            <div id="reviews-carousel" class="carousel slide" data-ride="carousel">
                <!--//wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <h3 class="review-title"><i class="fa fa-quote-left"></i>This is the best restaurant in London</h3>
                        <blockquote class="review center-block">
                            <p>The food there is exquisite. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis rhoncus porta libero, id maximus eros maximus quis. Etiam imperdiet fringilla massa eget efficitur.</p>
                        </blockquote><!--//review-->
                        <div class="source">
                            <img class="profile" src="{{ asset('images/people/profile-1.png') }}" alt="" />
                            <div class="name">Dylan Davis</div>
                            <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div><!--//rating-->
                        </div><!--//source-->    
                    </div><!--//item-->
                    <div class="item">
                        <h3 class="review-title"><i class="fa fa-quote-left"></i>Amazing service and food</h3>
                        <blockquote class="review center-block">
                            <p>Excellent steak consectetur adipiscing elit. Duis rhoncus porta libero, id maximus eros maximus quis. Etiam imperdiet fringilla massa eget efficitur.</p>
                        </blockquote><!--//review-->
                        <div class="source">
                            <img class="profile" src="{{ asset('images/people/profile-2.png') }}" alt="" />
                            <div class="name">Annie Wang</div>
                            <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div><!--//rating-->
                        </div><!--//source-->    
                    </div><!--//item-->
                    <div class="item">
                        <h3 class="review-title"><i class="fa fa-quote-left"></i>Exceeds expectations</h3>
                        <blockquote class="review center-block">
                            <p>Our high expectations were met! Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis rhoncus porta libero, id maximus eros maximus quis. Etiam imperdiet fringilla massa eget efficitur.</p>
                        </blockquote><!--//review-->
                        <div class="source">
                            <img class="profile" src="{{ asset('images/people/profile-3.png') }}" alt="" />
                            <div class="name">James Cooper</div>
                            <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div><!--//rating-->
                        </div><!--//source-->    
                    </div><!--//item-->
                </div><!--//carousel-inner-->
                
                <!--//Indicators-->
                <ol class="carousel-indicators">
                    <li class="active" data-target="#reviews-carousel" data-slide-to="0" >
                        <img class="img-responsive" src="{{ asset('images/press/press-1.png') }}"  alt="" />
                    </li>
                    <li data-target="#reviews-carousel" data-slide-to="1">
                        <img class="img-responsive" src="{{ asset('images/press/press-2.png') }}" alt="" />
                    </li>
                    <li data-target="#reviews-carousel" data-slide-to="2">
                        <img class="img-responsive" src="{{ asset('images/press/press-3.png') }}"  alt="" />
                    </li>
                </ol><!--//carousel-indicators-->
                
            </div><!--//reviews-carousel-->
        </div><!--//container-->
    </section><!--//reviews-->
       
    <!-- ******Menus section****** -->
    <div id="menus" class="menus-section">
        <div class="container text-center">
            <h2 class="section-title">
                <span class="script">Discover</span>
                <span class="title-text">Our Menus</span>
                <span class="title-border"></span>
            </h2>
            <div class="intro center-block">
                <p>At Epicure you will find morden European dishes lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec.</p>
            </div>
            <div class="menu-links">
                <ul class="list-inline block-center">
                    <li><a class="btn btn-secondary" href="{{ asset('media/pdf-file.pdf') }}" target="_blank">Lunch Menu</a></li>
                    <li><a class="btn btn-secondary" href="{{ asset('media/pdf-file.pdf') }}" target="_blank">Dinner Menu</a></li>
                    <li><a class="btn btn-secondary" href="{{ asset('media/pdf-file.pdf') }}" target="_blank">Wine List</a></li>
                </ul>
            </div><!--//menu-links-->
            <div class="featured">
                <h3 class="title script">Signature Dishes</h3>
                <div class="media-wrapper row">
                    <div class="col-left col-xs-12 col-sm-8">
                        <div id="links" class="row">
                            <div class="col-xs-12"> 
                                <div class="media-item">
                                    <div class="media-item-inner">
                                        <img class="img-responsive" src="{{ asset('images/menu/media-1.jpg') }}" alt="">
                                        <a class="mask" href="{{ asset('images/menu/media-1-lg.jpg')}}" data-gallery>
                                            <span class="mask-inner">
                                                <span class="item-title script">Charbroiled Sterling Silver Pork Chop</span>
                                                <span class="desc">Description about the dish goes here luctus leo, vitae tempor nulla. Nam iaculis turpis ac cursus interdum.</span>
                                                <span class="price">£46</span>
                                            </span><!--//mask-inner-->
                                        </a><!--//mask-->
                                    </div><!--//media-item-inner-->
                                </div><!--//media-item-->
                            </div>
                            
                            <div class="clearfix"></div>
                            
                            <div class="col-xs-12 col-sm-6">    
                                <div class="media-item">
                                    <div class="media-item-inner">
                                        <img class="img-responsive" src="{{ asset('images/menu/media-2.jpg') }}" alt="">
                                        <a class="mask" href="{{ asset('images/menu/media-2-lg.jpg')}}" data-gallery>
                                            <span class="mask-inner">
                                                <span class="item-title script">Wild Salmon</span>
                                                <span class="desc">Description about the dish goes here lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor aenean massa.</span>
                                                <span class="price">£28</span>
                                            </span><!--//mask-inner-->
                                        </a><!--//mask-->
                                    </div><!--//media-item-inner-->
                                </div><!--//media-item-->
                            </div>
                            <div class="col-xs-12 col-sm-6"> 
                                <div class="media-item">
                                    <div class="media-item-inner">
                                        <img class="img-responsive" src="{{ asset('images/menu/media-3.jpg') }}" alt="">
                                        <a class="mask" href="{{ asset('images/menu/media-3-lg.jpg') }}" data-gallery>
                                            <span class="mask-inner">
                                                <span class="item-title script">Crab and Avacado Salad</span>
                                                <span class="desc">Description about the dish goes here lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor aenean massa.</span>
                                                <span class="price">£16</span>
                                            </span><!--//mask-inner-->
                                        </a><!--//mask-->
                                    </div><!--//media-item-inner-->
                                </div><!--//media-item-->
                            </div>
                        </div><!--//row-->
                    </div>
                    
                    <div class="col-right col-xs-12 col-sm-4">
                        <div class="media-item">
                            <div class="media-item-inner">
                                <img class="img-responsive" src="{{ asset('images/menu/media-4.jpg') }}" alt="">
                                <a class="mask" href="{{ asset('images/menu/media-4-lg.jpg') }}" data-gallery>
                                    <span class="mask-inner">
                                        <span class="item-title script">Ocean Seafood Platter</span>
                                        <span class="desc">Description about the dish goes here lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor aenean massa.</span>
                                        <span class="price">£32</span>
                                    </span><!--//mask-inner-->
                                </a><!--//mask-->
                            </div><!--//media-item-inner-->
                        </div><!--//media-item-->
                        
                        <div class="media-item">
                            <div class="media-item-inner">
                                <img class="img-responsive" src="{{ asset('images/menu/media-5.jpg') }}" alt="">
                                <a class="mask" href="{{ asset('images/menu/media-5-lg.jpg') }}" data-gallery>
                                    <span class="mask-inner">
                                        <span class="item-title script">Duo of Lamb</span>
                                        <span class="desc">Description about the dish goes here lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor aenean massa.</span>
                                        <span class="price">£36</span>
                                    </span><!--//mask-inner-->
                                </a><!--//mask-->
                            </div><!--//media-item-inner-->
                        </div><!--//media-item-->
                    </div><!--//col-right-->

                </div><!--//media-wrapper-->
            </div><!--//featured-->
        </div><!--//container-->
    </div><!--//menus-section-->
        
    <!-- ******News section****** -->
    <div id="news" class="news-section">
        <div class="container text-center">
            <h2 class="section-title">
                <span class="script">Latest</span>
                <span class="title-text">News &amp; Events</span>
                <span class="title-border"></span>
            </h2>
            <div class="row text-left">
                <div class="news-wrapper col-sm-8 col-xs-12 col-md-push-2 col-sm-push-2 col-xs-push-0">
                    <div class="item">
                        <h4 class="title">Wine Tasting</h4>
                        <div class="meta">Saturday, 17th August</div>
                        <p class="excerpt">
                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis.
                        </p><!--//excerpt-->
                        <a href="#" class="more-link" data-toggle="modal" data-target="#news-modal-1">Read more</a>
                        <div class="date-badge">
                            <span class="month">AUG</span>
                            <span class="date">17</span>
                        </div><!--/date-badge-->
                    </div><!--//item-->
                    <div class="item">
                        <h4 class="title">Cooking Lesson</h4>
                        <div class="meta">Saturday, 8th July</div>
                        <p class="excerpt">
                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis.
                        </p><!--//excerpt-->
                        <a href="#" class="more-link" data-toggle="modal" data-target="#news-modal-2">Read more</a>
                        <div class="date-badge">
                            <span class="month">JUL</span>
                            <span class="date">08</span>
                        </div><!--/date-badge-->
                    </div><!--//item-->
                    <div class="item">
                        <h4 class="title">Exclusive Offers</h4>
                        <div class="meta">Tuesday, 1st June</div>
                        <p class="excerpt">
                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis.
                        </p><!--//excerpt-->
                        <a href="#" class="more-link" data-toggle="modal" data-target="#news-modal-3">Read more</a>
                        <div class="date-badge">
                            <span class="month">JUN</span>
                            <span class="date">01</span>
                        </div><!--/date-badge-->
                    </div><!--//item-->
                </div><!--//col-news-->
            </div><!--//row-->
        </div><!--//container-->
    </div><!--//news-section-->

    <!-- ******About section****** -->
    <div id="about" class="about-section">
        <div class="container text-center">
            <h2 class="section-title">
                <span class="script">Our Story</span>
                <span class="title-text">Behind The Scenes</span>
                <span class="title-border"></span>
            </h2>
            <div class="intro center-block">
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt.</p>
            </div>
            <div class="suppliers">
                <h3 class="title script">Our Suppliers</h3>
                <div class="supplier-list center-block">
                    <div class="supplier-type">
                        <h4 class="type-title">Meat</h4>
                        <ul class="list-unstyled">
                            <li>Anderson Meat</li>
                            <li>Sheppard John</li>
                        </ul>
                    </div><!--//supplier-type-->
                    <div class="supplier-type">
                        <h4 class="type-title">Fish</h4>
                        <ul class="list-unstyled">
                            <li>M&amp;T Seafood</li>
                            <li>Collins Seafoods</li>
                        </ul>
                    </div><!--//supplier-type-->
                    <div class="supplier-type">
                        <h4 class="type-title">Fruit &amp; Veg</h4>
                        <ul class="list-unstyled">
                            <li>The Farm</li>
                            <li>Fruitdrop Ltd</li>
                        </ul>
                    </div><!--//supplier-type-->
                </div><!--//supplier-list-->
            </div><!--//suppliers-->
            <a class="btn btn-secondary text-center" href="{{ asset('media/pdf-file.pdf')}}" target="_blank">View full supplier list</a>
        </div><!--//container-->
    </div><!--//about-section-->
    
    <div id="contact" class="contact-section">
        <div class="container">
            <h2 class="section-title text-center">
                <span class="script">Contact Us</span>
                <span class="title-text">Get in Touch</span>
                <span class="title-border"></span>
            </h2>
            <div class="contact-content">
                <div class="row">
                    <div class="map-col col-xs-12 col-sm-6">
                        <div id="map" class="map-container">
                            <!--//You need to embed your own google map below-->
                            <!--//Ref: https://support.google.com/maps/answer/144361?co=GENIE.Platform%3DDesktop&hl=en -->
                            <iframe src="{{ asset('https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d79461.78853986299!2d-0.22087714166825928!3d51.50989724581101!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4876052ddef3fe71%3A0x7f465130c3e2cba7!2sScott&#39;s!5e0!3m2!1sen!2suk!4v1469620593905') }}" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                            
                        </div><!--//map-->
                    </div><!--//map-col-->
                    <div class="info-col col-xs-12 col-sm-6">
                        <div class="row">
                            <div class="col-xs-12 col-md-6">
                                <div class="general">
                                    <h4 class="title">Come to find us</h4>
                                    <div class="adr-group">       
                                        <span class="street-address">68 King Street</span><br>
                                        <span class="city">London</span><br>
                                        <span class="postal-code">SW1Y 8DJ</span><br>
                                        <span class="country-name">London</span>
                                    </div>
                                    <div class="contact-methods">
                                        <h5 class="subtitle">General Enquiries</h5>
                                        <ul class="list-unstyled">
                                            <li><i class="fa fa-envelope-o"></i> <a href="#">info@website.com</a></li>
                                            <li><i class="fa fa-phone"></i> <a href="tel:0800123456">0800 123 456</a></li>
                                        </ul>
                                    </div>
                                    <div class="contact-reserve">
                                        <h5 class="subtitle" >Want to book a table?</h5>
                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#reserve-modal">Book Now</button>
                                    </div>
                                </div><!--//general-->
                            </div>
                            <div class="col-xs-12 col-md-6">
                                <div class="press">
                                    <h4 class="title">Press Enquiries</h4>
                                    <p>Please contact us for any press related enquiries</p>
                                    <p><i class="fa fa-envelope-o"></i> <a href="#">press@website.com</a></p>
                                    <p><a class="btn btn-secondary" href="#">Download Press Kit</a></p>
                                </div><!--//press-->
                            </div>
                        </div><!--//row-->
                    </div><!--//info-col-->
                </div><!--//row-->
            </div><!--//contact-content-->
        </div><!--//container-->
    </div><!--//contact-section-->
    
    
    <!-- ******FOOTER****** --> 
    <footer class="footer">
        <div class="footer-content">
            <div class="container">
                <div class="row">
                    <div class="footer-col col-xs-12 col-sm-3">
                        <div class="footer-col-inner">
                            <h3 class="title">Opening Time</h3>
                            <ul class="list-unstyled">
                                <li><span>Mon - Fri:</span> 08:00 - 22:30</li>
                                <li><span>Sat:</span> 09:00 - 23:00</li>
                                <li><span>Sun:</span> 09:00 - 22:30</li>
                            </ul>
                        </div><!--//footer-col-inner-->
                    </div><!--//footer-col-->
                    <div class="footer-col col-xs-12 col-sm-6">
                        <div class="footer-col-inner">
                            <h3 class="title">Newsletter</h3>
                            <p>Subscribe to our newsletter to get the latest offers and news.</p>  
                            <form class="subscribe-form form-inline">
                                <div class="form-group">
                                    <label class="sr-only" for="semail">Your Email</label>
                                    <input type="text" id="semail" class="form-control email-field" placeholder="Enter your email address" name="email" required="" aria-required="true">
                                    <button type="submit" class="btn btn-primary">Subscribe</button>  
                                </div>                              
                            </form><!--//subscribe-form-->                                      
                        </div><!--//footer-col-inner-->
                    </div><!--//foooter-col--> 
                    <div class="footer-col col-xs-12 col-sm-3">
                        <div class="footer-col-inner">
                            <h3 class="title">Follow us</h3> 
                            <ul class="social-icons list-inline">
                                <li><a href="https://twitter.com/3rdwave_themes" target="_blank"><i class="fa fa-twitter"></i></a></li>                        
                                <li><a href="https://www.facebook.com/3rdwavethemes" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                <li class="last"><a href="#"><i class="fa fa-pinterest"></i></a></li>                     
                            </ul>                                     
                        </div><!--//footer-col-inner-->
                    </div><!--//foooter-col--> 
                </div>   
            </div>        
        </div><!--//footer-content-->
        <div class="bottom-bar">
            <div class="container text-center">                                   
                <ul class="list-inline links">
                    <li><a href="#">Privacy Policy</a></li>
                    <li role="presentation">|</li>
                    <li><a href="#">Terms &amp; Conditions</a></li>
                </ul>
                <small class="copyright text-center">Copyright @ 2015 <a href="http://themes.3rdwavemedia.com/" target="_blank">3rd Wave Media</a></small>                 
            </div><!--//container-->
        </div><!--//bottom-bar-->
    </footer><!--//footer-->
    
    <!-- The Bootstrap Image Gallery lightbox -->
    <div id="blueimp-gallery" class="blueimp-gallery" data-use-bootstrap-modal="false">
        <!-- The container for the modal slides -->
        <div class="slides"></div>
        <!-- Controls for the borderless lightbox -->
        <h3 class="title"></h3>
        <a class="prev">‹</a>
        <a class="next">›</a>
        <a class="close">×</a>
        <a class="play-pause"></a>
        <ol class="indicator"></ol>
        <!-- The modal dialog, which will be used to wrap the lightbox content -->
        <div class="modal fade" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" aria-hidden="true">&times;</button>
                        <h4 class="modal-title"></h4>
                    </div>
                    <div class="modal-body next"></div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default pull-left prev">
                            <i class="glyphicon glyphicon-chevron-left"></i>
                            Previous
                        </button>
                        <button type="button" class="btn btn-primary next">
                            Next
                            <i class="glyphicon glyphicon-chevron-right"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div><!--blueimp-gallery-->
    
    <!-- Reserve Modal -->
    <div id="reserve-modal" class="modal modal-reserve"  tabindex="-1" role="dialog" aria-labelledby="reserveModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h2 id="reserveModalLabel" class="modal-title text-center">
                        <span class="script">Reservations</span>
                        <span class="title-text">Book a Table</span>
                        <span class="title-border"></span>
                    </h2>
                    <div class="intro text-center">
                        <p class="blurb">Call us now to book a table</p>
                        <p class="phone subtitle">0800 123 456</p>
                        <hr>
                        <p class="booking-intro">Or book online</p>
                    </div>
                </div><!--//modal-header-->
                <div class="modal-body">
                    <form id="reserve-form" class="reserve-form form" method="post" action="mailer.php">
                        <div id="form-messages"></div>              
                        <div class="row text-center">
                            <div class="datepicker-group col-xs-12 col-sm-6 form-group">
                                <div class="form-group-inner">
                                    <i class="fa fa-calendar-o"></i>
                                    <label class="sr-only" for="cdate">Date</label>
                                    <input type='text' id="cdate" class="form-control add-padding make-datepicker" name="date" required="" aria-required="true">
                                </div>
                            </div>    
                            <div class="timepicker-group col-xs-12 col-sm-6 form-group">
                                <div class="form-group-inner">
                                    <i class="fa fa-clock-o"></i>
                                    <label class="sr-only" for="ctime">Time</label>
                                    <input type='text' id="ctime" class="form-control add-padding make-timepicker" placeholder="18:00 PM" name="time" aria-required="true" required>
                                </div>
                            </div>   
                            <div class="guest-group col-xs-12 col-sm-6 form-group">
                                <div class="form-group-inner">
                                    <i class="fa fa-users"></i>
                                    <label class="sr-only" for="cguests">Guests</label>
                                    <select class="form-control add-padding" id="cguests" name="guests" aria-required="true" required>
                                      <option value="" selected>Please select</option>
                                      <option value="1">1 People</option>
                                      <option value="2">2 People</option>
                                      <option value="3">3 People</option>
                                      <option value="4">4 People</option>
                                      <option value="5">5 People</option>
                                      <option value="6">6 People</option>
                                      <option value="7">7 People</option>
                                      <option value="8">8 People</option>
                                      <option value="9">9 People</option>
                                      <option value="10">10 People</option>
                                      <option value="11">11 People</option>
                                      <option value="12">12 People</option>
                                      <option value="13">13 People</option>
                                      <option value="14">14 People</option>
                                      <option value="15">15 People</option>
                                      <option value="16">16 People</option>
                                      <option value="17">17 People</option>
                                      <option value="18">18 People</option>
                                      <option value="19">19 People</option>
                                      <option value="20">20 People</option>
                                      <option value="20+">20+ People</option>
                                    </select>   
                                </div>       
                            </div>         
                                                                                         
                            <div class="name-group col-xs-12 col-sm-6 form-group">
                                <div class="form-group-inner">
                                    <i class="fa fa-user"></i>
                                    <label class="sr-only" for="cname">Name</label>
                                    <input type="text" class="form-control add-padding" id="cname" name="name" placeholder="Your name" minlength="2" aria-required="true" required>
                                </div>
                            </div>                    
                            <div class="email-group col-xs-12 col-sm-6 form-group">
                                <div class="form-group-inner">
                                    <i class="fa fa-envelope"></i>
                                    <label class="sr-only" for="cemail">Email</label>
                                    <input type="email" class="form-control add-padding" id="cemail" name="email" placeholder="Email Address" aria-required="true" required>
                                </div>
                            </div>
                            <div class="phone-group col-xs-12 col-sm-6 form-group">
                                <div class="form-group-inner">
                                    <i class="fa fa-phone"></i>
                                    <label class="sr-only" for="cphone">Phone</label>
                                    <input type="tel" class="form-control add-padding" id="cphone" name="phone" placeholder="Phone Number" aria-required="true" required>
                                </div>
                            </div>
                             <div class="col-xs-12 form-group">
                                <button type="submit" class="btn btn-block btn-primary">Book Now</button>
                            </div>                           
                        </div><!--//row-->
                    </form><!--//reserve-form-->
                </div><!--//modal-body-->
            </div><!--//modal-content-->
        </div><!--//modal-dialog-->
    </div><!--//modal-->
    
    
    <!-- News Modal 1-->
    <div id="news-modal-1" class="news-modal modal modal-fullscreen" tabindex="-1" role="dialog" aria-labelledby="newsModal1Label">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title text-center" id="newsModal1Label">Wine Tasting</h4>
                    <div class="meta text-center">Saturday, 17th August</div>
                </div><!--//modal-header-->
                <div class="modal-body">
                    <div class="post">
                        <p><img class="img-responsive" src="{{ asset('images/news/news-1.jpg') }}" alt="" /></p>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.</p>
                        <p>Maecenas ac turpis sit amet leo semper ultricies lobortis sed purus. Integer erat felis, maximus in placerat vel, fermentum a libero. Ut quis mollis est. Pellentesque semper nibh ut scelerisque tincidunt. Nullam commodo quam eu lectus ullamcorper, quis sagittis ligula sagittis. Fusce id pellentesque risus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae.</p>
                    </div>
                </div><!--//modal-body-->
                <div class="modal-footer text-center">
                    <button type="button" class="btn btn-primary center-block" data-dismiss="modal">Close</button>
                </div>
            </div><!--//modal-content-->
        </div>
    </div><!--//modal-->
    
    <!-- News Modal 2-->
    <div id="news-modal-2" class="news-modal modal modal-fullscreen" tabindex="-1" role="dialog" aria-labelledby="newsModal2Label">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title text-center" id="newsModal2Label">Cooking Lesson</h4>
                    <div class="meta text-center">Saturday, 8th July</div>
                </div><!--//modal-header-->
                <div class="modal-body">
                    <div class="post">
                        <p><img class="img-responsive" src="{{ asset('images/news/news-2.jpg') }}" alt="" /></p>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.</p>
                        <p>Maecenas ac turpis sit amet leo semper ultricies lobortis sed purus. Integer erat felis, maximus in placerat vel, fermentum a libero. Ut quis mollis est. Pellentesque semper nibh ut scelerisque tincidunt. Nullam commodo quam eu lectus ullamcorper, quis sagittis ligula sagittis. Fusce id pellentesque risus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae.</p>
                        <p>Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum.</p>
                    </div>
                </div><!--//modal-body-->
                <div class="modal-footer text-center">
                    <button type="button" class="btn btn-primary center-block" data-dismiss="modal">Close</button>
                </div>
            </div><!--//modal-content-->
        </div>
    </div><!--//modal-->
    
    <!-- News Modal 3-->
    <div id="news-modal-3" class="news-modal modal modal-fullscreen" tabindex="-1" role="dialog" aria-labelledby="newsModal3Label">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title text-center" id="newsModal3Label">Exclusive Offers</h4>
                    <div class="meta text-center">Tuesday, 1st June</div>
                </div><!--//modal-header-->
                <div class="modal-body">
                    <div class="post">
                        <p><img class="img-responsive" src="{{ asset('images/news/news-3.jpg') }}" alt="" /></p>
                        <p>Suspendisse et accumsan velit, non sollicitudin nisl. Donec dapibus augue eu viverra eleifend. Etiam finibus eu arcu nec tempus. Sed luctus metus leo, non pellentesque tortor tempor aliquam. Sed sit amet egestas est. Sed varius, urna ac bibendum porta, nunc risus suscipit turpis, sed condimentum neque metus non purus. Quisque volutpat nulla dignissim diam malesuada, id tincidunt orci scelerisque. Phasellus est orci, varius sit amet imperdiet ac, faucibus id urna. Mauris varius odio et nisl finibus, sed fringilla ligula eleifend.</p>
                        <p>Curabitur volutpat bibendum mi sed hendrerit. Etiam commodo molestie facilisis. Nulla sed lectus eu metus consequat vehicula eu ac justo. Phasellus posuere vehicula rhoncus. Praesent a molestie tortor. Phasellus ornare imperdiet vehicula. Vivamus nec odio vitae ligula semper facilisis quis id odio.</p>
                    </div>
                </div><!--//modal-body-->
                <div class="modal-footer text-center">
                    <button type="button" class="btn btn-primary center-block" data-dismiss="modal">Close</button>
                </div>
            </div><!--//modal-content-->
        </div>
    </div><!--//modal-->
    
    
    
    <!-- *****CONFIGURE STYLE (REMOVE ON YOUR PRODUCTION SITE)****** -->  
    <div class="config-wrapper">
        <div class="config-wrapper-inner">
            <a id="config-trigger" class="config-trigger" href="#"><i class="fa fa-cog"></i></a>
            <div id="config-panel" class="config-panel">
                <h5>Choose Colour</h5>
                <ul id="color-options" class="list-unstyled list-inline">
                    <li class="theme-1 active" ><a data-style="{{ asset('css/styles.css') }}" href="#"></a></li>
                    <li class="theme-2"><a data-style="{{ asset('css/styles-2.css') }}" href="#"></a></li>
                    <li class="theme-3"><a data-style="{{ asset('css/styles-3.css') }}" href="#"></a></li>
                    <li class="theme-4"><a data-style="{{ asset('css/styles-4.css') }}" href="#"></a></li>                   
                    <li class="theme-5"><a data-style="{{ asset('css/styles-5.css') }}" href="#"></a></li>                     
                    <li class="theme-6"><a data-style="{{ asset('css/styles-6.css') }}" href="#"></a></li>
                    <li class="theme-7"><a data-style="{{ asset('css/styles-7.css') }}" href="#"></a></li>
                    <li class="theme-8"><a data-style="{{ asset('css/styles-8.css') }}" href="#"></a></li>                    
                    <li class="theme-9"><a data-style="{{ asset('css/styles-9.css') }}" href="#"></a></li>
                    <li class="theme-10"><a data-style="{{ asset('css/styles-10.css') }}" href="#"></a></li>
                </ul><!--//color-options-->
                <a id="config-close" class="close" href="#"><i class="fa fa-times-circle"></i></a>
            </div><!--//configure-panel-->
        </div><!--//config-wrapper-inner-->
    </div><!--//config-wrapper-->
 
    <!-- Main Javascript -->          
    <script type="text/javascript" src="{{ asset('plugins/jquery-1.11.3.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('plugins/bootstrap/js/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('plugins/jquery-scrollTo/jquery.scrollTo.min.js') }}"></script>  
    <script type="text/javascript" src="{{ asset('plugins/back-to-top.js') }}"></script>             
    <script type="text/javascript" src="{{ asset('plugins/jquery-placeholder/jquery.placeholder.js') }}"></script> 
    <script type="text/javascript" src="{{ asset('plugins/flexslider/jquery.flexslider-min.js') }}"></script>

    <!--//form related JS -->
    <script type="text/javascript" src="{{ asset('plugins/moment.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('plugins/bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('plugins/jquery-validation/dist/jquery.validate.min.js') }}"></script>

    <!--//Image Gallery related JS -->
    <script type="text/javascript" src="{{ asset('plugins/Gallery/js/jquery.blueimp-gallery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('plugins/Bootstrap-Image-Gallery/js/bootstrap-image-gallery.min.js') }}"></script>  
        
    <!-- Form iOS fix -->
    <script type="text/javascript" src="{{ asset('plugins/isMobile/isMobile.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/form-mobile-fix.js') }}"></script>
    
    <!--//Ajax Form */-->
    <script type="text/javascript" src="{{ asset('js/ajax-form.js') }}"></script> 
    
    <script type="text/javascript" src="{{ asset('js/main.js') }}"></script> 
        
    <!-- Style Switcher (REMOVE ON YOUR PRODUCTION SITE) -->
    <script src="{{ asset('js/demo/style-switcher.js') }}"></script>
    
</body>






























































































































































































































