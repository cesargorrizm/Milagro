
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
    <link id="theme2-style" rel="stylesheet" href="public/css/slider.css">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->

      <script src="{{ asset('https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js') }}"></script>
      <script src="{{ asset('https://oss.maxcdn.com/respond/1.4.2/respond.min.js') }}"></script>
    <!-- Slider theme values -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700|Open+Sans" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
        .carousel {
    	margin: 50px auto;
    	padding: 0 70px;
        }
    .carousel .item {
    	color: #999;
    	font-size: 14px;
        text-align: center;
    	overflow: hidden;
        min-height: 290px;
    }
    .carousel .item .img-box {
    	width: 135px;
    	height: 135px;
    	margin: 0 auto;
    	padding: 5px;
    	border: 1px solid #ddd;
    	border-radius: 50%;
    }
    .carousel .img-box img {
    	width: 100%;
    	height: 100%;
    	display: block;
    	border-radius: 50%;
    }
    .carousel .testimonial {
    	padding: 30px 0 10px;
    }
    .carousel .overview {	
    	font-style: italic;
    }
    .carousel .overview b {
    	text-transform: uppercase;
    	color: #7AA641;
    }
    .carousel .carousel-control {
    	width: 40px;
        height: 40px;
        margin-top: -20px;
        top: 50%;
    	background: none;
    }
    .carousel-control i {
        font-size: 68px;
    	line-height: 42px;
        position: absolute;
        display: inline-block;
    	color: rgba(0, 0, 0, 0.8);
        text-shadow: 0 3px 3px #e6e6e6, 0 0 0 #000;
    }
    .carousel .carousel-indicators {
    	bottom: -40px;
    }
    .carousel-indicators li, .carousel-indicators li.active {
    	width: 10px;
    	height: 10px;
    	margin: 1px 3px;
    	border-radius: 50%;
    }
    .carousel-indicators li {	
    	background: #999;
    	border-color: transparent;
    	box-shadow: inset 0 2px 1px rgba(0,0,0,0.2);
    }
    .carousel-indicators li.active {	
    	background: #555;		
    	box-shadow: inset 0 2px 1px rgba(0,0,0,0.2);
    }
</style>
</head> 

<body> <!-- News Modal 1-->
    
    <div  class="news-modal   modal-fullscreen">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title text-center" id="newsModal1Label">{{$det[0]->titulo}}</h4>
                </div><!--//modal-header-->
                <div class="modal-body">
                    <div class="post">
                       
                        <div class="container">
                            <div class="row">
                                <div class="col-md-6 col-center">
                                    <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                        <!-- Carousel indicators -->
                                        <ol class="carousel-indicators">
                                            
                                            @for($i =0 ; $i < count($imagenes); $i++)
                                            <li data-target="#myCarousel" data-slide-to={{$i}} class="active"></li>
                                            @endfor
                                        </ol>   
                                        <!-- Wrapper for carousel items -->
                                        <div class="carousel-inner"  >
                                            <?php $i = 0; ?>
                                            @for($i =0 ; $i < count($imagenes); $i++)
                                             @if($i == 0)
                                            <div class="item active">  
                                                <div><img  class="img-responsive" src="{{$imagenes[$i]->url}}" ></div>
                                            </div>
                                            
                                             @else
                                            <div class="item ">
                                                <div><img class="img-responsive"src="{{$imagenes[$i]->url}}"></div>
                                            </div>
                                            @endif
                                             @endfor
                                             
                                            
                                        </div>
                                        <!-- Carousel controls -->
                                        <a class="carousel-control left" href="#myCarousel" data-slide="prev">
                                            <i class="fa fa-angle-left"></i>
                                        </a>
                                        <a class="carousel-control right" href="#myCarousel" data-slide="next">
                                            <i class="fa fa-angle-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                       <p>{{$det[0]->descripcion}}</p>
                    </div>
                </div><!--//modal-body-->
                <div class="modal-footer text-center">
                    <button type="button" class="btn btn-primary center-block" data-dismiss="modal"
                    onclick="window.location='{{ route('home')}}'">Cerrar</button>
                    {{-- <div class="col-xs-12 col-sm-4 row justify-content-center">
                        <button type="submit" class="btn btn-block btn-primary">Reservar ahora</button>
                    </div>     --}}
                </div>
            </div><!--//modal-content-->
        </div>
    </div>
</div><!--//modal-->





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