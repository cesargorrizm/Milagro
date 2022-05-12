
<?php
/**
 * Created by PhpStorm.
 * User: Starglob2
 * Date: 28/04/2022
 * Time: 10:40
 */
 $i = 0;
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
                        <li class="nav-item"><a class="scrollto" href="#hero">Inicio</a></li>
                        <li class="nav-item"><a class="scrollto" href="#menus">Salones &amp; Espacios</a></li>
                        <li class="nav-item"><a class="scrollto" href="#news">News &amp; Events</a></li>                                              
                        <li class="nav-item"><a class="scrollto" href="#about">Servicios</a></li>
                        <li class="nav-item"><a href="#" data-toggle="modal" data-target="#reserve-modal">Reservar</a></li>
                        <li class="nav-item"><a class="scrollto" href="#contact">Contacto</a></li>
                    </ul><!--//nav-->
                </div><!--//navabr-collapse-->
            </nav><!--//main-nav-->
        </div><!--//container-->
    </header><!--//header-->
    
    <div id="hero" class="hero-section">
        <div class="content-wrapper">
            <div class="container text-center">
                <div class="branding">
                    <div class="script">Celebra tu boda en </div>
                    <h1 class="logo text-center">
                        <!--/*
                        <span class="border border-l"></span>
                        <span class="text">Epicure</span>
                        <span class="border border-r"></span>
                        */ -->
                        <img class="img-responsive block-center" src="{{ asset('images/logo/logoGrupoMilagro.png') }}" alt="logo" />
                    </h1><!--//logo-->
                    <div class="tagline text-center">
                        <ul class="list center-block">
                            <li class="type">Tu boda</li>
                            <li role="presentation" class="dot"><i class="fa fa-circle"></i></li>
                            <li class="type">Tus sueños</li>
                            <li role="presentation" class="dot"><i class="fa fa-circle"></i></li>
                            <li class="type">Hechos realidad</li>
                        </ul>
                    </div><!--//tagline-->
                </div><!--//branding-->
                <h2 class="promo-line">
                    Más de 25 años realizando sueños
                </h2><!--//promo-->
                <div class="cta-container">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#reserve-modal">Concierta una cita</button>
                </div><!--//cta-container-->
            </div><!--//container-->
        </div><!--//content-wrapper-->
        
        <div class="scroll-link text-center">
            <p><a class="scrollto" href="#menus">View Our Menus</a></p>
            <a class="arrow-holder animate scrollto" href="#menus"><img src="{{ asset('images/arrow.svg') }}" alt="" /></a>
        </div>
        
        <div class="bg-slider-wrapper">
            <div id="bg-slider" class="flexslider bg-slider" style="opacity: 0.5">
                <ul class="slides">
                    <li class="slide slide-1"></li>
                    <li class="slide slide-2"></li>
                    <li class="slide slide-3"></li>
                </ul>
            </div>
        </div><!--//bg-slider-wrapper-->
    </div><!--//hero-section-->
    
    <!-- ******Reviews Section****** -->
    {{-- <section id="reviews" class="reviews-section section">
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
    </section><!--//reviews--> --}}
       
    <!-- ******Menus section****** -->
    <div id="menus" class="menus-section">
        <div class="container text-center">
            <h2 class="section-title">
                <span class="script">Instalaciones y detalles</span>
                <span class="title-text">Todo lo que has imaginado</span>
                <span class="title-border"></span>
            </h2>
            <div class="intro center-block">
                <p>¿Quieres un banquete al aire libre en un lugar único? ¿Prefieres un salón acondicionado y adaptado a tus necesidades? Nosotros lo hacemos realidad. Donde quieras y como quieras.</p>
            </div>
            {{-- <div class="menu-links">
                <ul class="list-inline block-center">
                    <li><a class="btn btn-secondary" href="{{ asset('media/pdf-file.pdf') }}" target="_blank">Lunch Menu</a></li>
                    <li><a class="btn btn-secondary" href="{{ asset('media/pdf-file.pdf') }}" target="_blank">Dinner Menu</a></li>
                    <li><a class="btn btn-secondary" href="{{ asset('media/pdf-file.pdf') }}" target="_blank">Wine List</a></li>
                </ul>
            </div><!--//menu-links--> --}}
            <div class="featured">
                <h3 class="title script">Nuestros salones</h3>
                <div class="media-wrapper row">
                    {{-- {{$salas[$sala]['titulo']}} --}}
                    {{-- @foreach($salas as $sala) --}}
                    <div class="col-left col-xs-12 col-sm-12">
                        <div id="links" class="row">
                            {{-- {{count($salas)}}
                            {{$salas[$sala]}} --}}
                            
                        @for($sala = 0; $sala<count($salas); ++$sala)
                            @if(count($salas)==1)
                            <div class="col-xs-12 col-sm-12">    
                                <div class="media-item">
                                    <div class="media-item-inner">
                                        @foreach($imagenes as $image)
                                            @if($image->sector_id==$salas[$sala]->id)
                                                <img class="img-responsive" src="{{ $image->url}}" alt="">
                                                <a class="mask" href="{{ $image->url}}" data-gallery>
                                            @endif
                                            @endforeach
                                            <span class="mask-inner">
                                                <span class="item-title script">{{$salas[$sala]->titulo}}</span>    
                                                <span class="desc">{{$salas[$sala]->descripcion}}</span>
                                                {{-- <span class="price">400 personas</span> --}}
                                            </span><!--//mask-inner-->
                                        </a><!--//mask-->
                                    </div><!--//media-item-inner-->
                                </div><!--//media-item-->
                            </div>
                            @elseif(count($salas)%3==0)
                            <div class="col-xs-12 col-sm-4">    
                                <div class="media-item">
                                    <div class="media-item-inner">
                                        @foreach($imagenes as $image)
                                            @if($image->sector_id==$salas[$sala]->id)
                                                <img class="img-responsive" src="{{ $image->url}}" alt="">
                                                <a class="mask" href="{{ $image->url}}" data-gallery>
                                            @endif
                                            @endforeach
                                            <span class="mask-inner">
                                                <span class="item-title script">{{$salas[$sala]->titulo}}</span>    
                                                <span class="desc">{{$salas[$sala]->descripcion}}</span>
                                                {{-- <span class="price">400 personas</span> --}}
                                            </span><!--//mask-inner-->
                                        </a><!--//mask-->
                                    </div><!--//media-item-inner-->
                                </div><!--//media-item-->
                            </div>
                            @elseif((count($salas)+1)%3==0)
                                @if($sala==0 || $sala==1)
                                <div class="col-xs-12 col-sm-6">    
                                    <div class="media-item">
                                        <div class="media-item-inner">
                                            @foreach($imagenes as $image)
                                                @if($image->sector_id==$salas[$sala]->id)
                                                    <img class="img-responsive" src="{{ $image->url}}" alt="">
                                                    <a class="mask" href="{{ $image->url}}" data-gallery>
                                                @endif
                                                @endforeach
                                                <span class="mask-inner">
                                                    <span class="item-title script">{{$salas[$sala]->titulo}}</span>    
                                                    <span class="desc">{{$salas[$sala]->descripcion}}</span>
                                                    {{-- <span class="price">400 personas</span> --}}
                                                </span><!--//mask-inner-->
                                            </a><!--//mask-->
                                        </div><!--//media-item-inner-->
                                    </div><!--//media-item-->
                                </div>
                                @else
                                <div class="col-xs-12 col-sm-4">    
                                    <div class="media-item">
                                        <div class="media-item-inner">
                                            @foreach($imagenes as $image)
                                                @if($image->sector_id==$salas[$sala]->id)
                                                    <img class="img-responsive" src="{{ $image->url}}" alt="">
                                                    <a class="mask" href="{{ $image->url}}" data-gallery>
                                                @endif
                                                @endforeach
                                                <span class="mask-inner">
                                                    <span class="item-title script">{{$salas[$sala]->titulo}}</span>    
                                                    <span class="desc">{{$salas[$sala]->descripcion}}</span>
                                                    {{-- <span class="price">400 personas</span> --}}
                                                </span><!--//mask-inner-->
                                            </a><!--//mask-->
                                        </div><!--//media-item-inner-->
                                    </div><!--//media-item-->
                                </div>
                                @endif
                            @elseif((count($salas)+2)%3==0)
                                    @if($sala==0 || $sala==1 || $sala==count($salas)-1 || $sala==count($salas)-2)
                                <div class="col-xs-12 col-sm-6">    
                                    <div class="media-item">
                                        <div class="media-item-inner">
                                            @foreach($imagenes as $image)
                                                @if($image->sector_id==$salas[$sala]->id)
                                                    <img class="img-responsive" src="{{ $image->url}}" alt="">
                                                    <a class="mask" href="{{ $image->url}}" data-gallery>
                                                @endif
                                                @endforeach
                                                <span class="mask-inner">
                                                    <span class="item-title script">{{$salas[$sala]->titulo}}</span>    
                                                    <span class="desc">{{$salas[$sala]->descripcion}}</span>
                                                    {{-- <span class="price">400 personas</span> --}}
                                                </span><!--//mask-inner-->
                                            </a><!--//mask-->
                                        </div><!--//media-item-inner-->
                                    </div><!--//media-item-->
                                </div>
                                @else
                                <div class="col-xs-12 col-sm-4">    
                                    <div class="media-item">
                                        <div class="media-item-inner">
                                            @foreach($imagenes as $image)
                                                @if($image->sector_id==$salas[$sala]->id)
                                                    <img class="img-responsive" src="{{ $image->url}}" alt="">
                                                    <a class="mask" href="{{ $image->url}}" data-gallery>
                                                @endif
                                                @endforeach
                                            {{-- <img class="img-responsive" src="{{$espacio->image}}" alt="">
                                            <a class="mask" href="{{ $espacio->image}}" data-gallery> --}}
                                                <span class="mask-inner">
                                                    <span class="item-title script">{{$salas[$sala]->titulo}}</span>    
                                                    <span class="desc">{{$salas[$sala]->descripcion}}</span>
                                                    {{-- <span class="price">400 personas</span> --}}
                                                </span><!--//mask-inner-->
                                            </a><!--//mask-->
                                        </div><!--//media-item-inner-->
                                    </div><!--//media-item-->
                                </div>
                                @endif
                                
                            @endif




                            {{-- @if($sala+1==1)
                            <div class="col-xs-12"> 
                                <div class="media-item">
                                    <div class="media-item-inner">
                                        @foreach($imagenes as $image)
                                                @if($image->sector_id==$salas[$sala]->id)
                                                    <img class="img-responsive"  src="{{ $image->url}}" alt="">
                                                    <a class="mask" href="{{ $image->url}}" data-gallery>
                                                @endif
                                        @endforeach
                                                    <span class="mask-inner">
                                                        <span class="item-title script">{{$salas[$sala]->titulo}}</span>
                                                        <span class="desc">{{$salas[$sala]->descripcion}}</span>
                                                        <span class="price">400 personas</span>
                                                    </span><!--//mask-inner-->
                                                        
                                        </a><!--//mask-->
                                    </div><!--//media-item-inner-->
                                </div><!--//media-item-->
                            </div>
                            @endif
                            @if($sala+1==2 | )
                            
                            <div class="col-xs-12 col-sm-6">    
                                <div class="media-item">
                                    <div class="media-item-inner">
                                        @foreach($imagenes as $image)
                                                @if($image->sector_id==$salas[$sala]->id)
                                                    <img class="img-responsive"  src="{{ $image->url}}" alt="">
                                                    <a class="mask" href="{{ $image->url}}" data-gallery>
                                                @endif
                                        @endforeach
                                            <span class="mask-inner">
                                                <span class="item-title script">{{$salas[$sala]['titulo']}}</span>
                                                <span class="desc">{{$salas[$sala]['descripcion']}}</span>
                                                <span class="price">400 personas</span>
                                            </span><!--//mask-inner-->
                                        </a><!--//mask-->
                                    </div><!--//media-item-inner-->
                                </div><!--//media-item-->
                            </div>
                            @endif
                            @if($sala+1==3)
                       
                            <div class="col-xs-12 col-sm-6"> 
                                <div class="media-item">
                                    <div class="media-item-inner">
                                        @foreach($imagenes as $image)
                                                @if($image->sector_id==$salas[$sala]->id)
                                                    <img class="img-responsive"  src="{{ $image->url}}" alt="">
                                                    <a class="mask" href="{{ $image->url}}" data-gallery>
                                                @endif
                                        @endforeach
                                        <span class="mask-inner">
                                            <span class="item-title script">{{$salas[$sala]['titulo']}}</span>
                                            <span class="desc">{{$salas[$sala]['descripcion']}}</span>
                                            <span class="price">400 personas</span>
                                        </span><!--//mask-inner-->
                                    </a><!--//mask-->
                                </div><!--//media-item-inner-->
                            </div><!--//media-item-->
                        </div>
                        @endif --}}
                        {{-- @endforeach --}}
                        @endfor
                    </div><!--//row-->
                </div>

                    {{-- <div class="col-right col-xs-12 col-sm-5">
                        <div class="media-item">
                            <div class="media-item-inner">
                                @foreach($imagenes as $image)
                                                @if($image->sector_id==$salas[3]->id)
                                                    <img class="img-responsive"  src="{{ $image->url}}" alt="">
                                                    <a class="mask" href="{{ $image->url}}" data-gallery>
                                                @endif
                                        @endforeach
                                    <span class="mask-inner">
                                        <span class="item-title script">{{$salas[3]['titulo']}}</span>
                                        <span class="desc">{{$salas[3]['descripcion']}}</span>
                                        <span class="price">£32</span>
                                    </span><!--//mask-inner-->
                                </a><!--//mask-->
                            </div><!--//media-item-inner-->
                        </div><!--//media-item-->
                        
                        <div class="media-item">
                            <div class="media-item-inner">
                                <img class="img-responsive" src="{{ asset('images/salones/jardin2.jpg') }}" alt="">
                                @foreach($imagenes as $image)
                                                @if($image->sector_id==$salas[4]->id)
                                                    <img class="img-responsive"  src="{{ $image->url}}" alt="">
                                                    <a class="mask" href="{{ $image->url}}" data-gallery>
                                                @endif
                                        @endforeach
                                        <span class="item-title script">{{$salas[4]['titulo']}}</span>
                                        <span class="desc">{{$salas[4]['descripcion']}}</span>
                                        <span class="price">£36</span>
                                    </span><!--//mask-inner-->
                                </a><!--//mask-->
                            </div><!--//media-item-inner-->
                        </div><!--//media-item-->
                    </div><!--//col-right--> --}}

                </div><!--//media-wrapper-->
            </div><!--//featured-->
            <div class="featured">
                <h3 class="title script">Nuestros espacios</h3>
                <div class="media-wrapper row">
                    <div class="col-left col-xs-12 col-sm-12">
                        <div id="links" class="row justify-content-center">
                            @for($espacio = 0; $espacio<count($espacios); ++$espacio)
                            @if(count($espacios)==1)
                            <div class="col-xs-12 col-sm-12">    
                                <div class="media-item">
                                    <div class="media-item-inner">
                                        @foreach($imagenes as $image)
                                            @if($image->sector_id==$espacios[$espacio]->id)
                                                <img class="img-responsive" src="{{ $image->url}}" alt="">
                                                <a class="mask" href="{{ $image->url}}" data-gallery>
                                            @endif
                                            @endforeach
                                            <span class="mask-inner">
                                                <span class="item-title script">{{$espacios[$espacio]->titulo}}</span>    
                                                <span class="desc">{{$espacios[$espacio]->descripcion}}</span>
                                                {{-- <span class="price">400 personas</span> --}}
                                            </span><!--//mask-inner-->
                                        </a><!--//mask-->
                                    </div><!--//media-item-inner-->
                                </div><!--//media-item-->
                            </div>

                            @elseif(count($espacios)%3==0)
                            <div class="col-xs-12 col-sm-4">    
                                <div class="media-item">
                                    <div class="media-item-inner">
                                        @foreach($imagenes as $image)
                                            @if($image->sector_id==$espacios[$espacio]->id)
                                                <img class="img-responsive" src="{{ $image->url}}" alt="">
                                                <a class="mask" href="{{ $image->url}}" data-gallery>
                                            @endif
                                            @endforeach
                                            <span class="mask-inner">
                                                <span class="item-title script">{{$espacios[$espacio]->titulo}}</span>    
                                                <span class="desc">{{$espacios[$espacio]->descripcion}}</span>
                                                {{-- <span class="price">400 personas</span> --}}
                                            </span><!--//mask-inner-->
                                        </a><!--//mask-->
                                    </div><!--//media-item-inner-->
                                </div><!--//media-item-->
                            </div>
                            @elseif((count($espacios)+1)%3==0)
                                @if($espacio==0 || $espacio==1)
                                <div class="col-xs-12 col-sm-6">    
                                    <div class="media-item">
                                        <div class="media-item-inner">
                                            @foreach($imagenes as $image)
                                                @if($image->sector_id==$espacios[$espacio]->id)
                                                    <img class="img-responsive" src="{{ $image->url}}" alt="">
                                                    <a class="mask" href="{{ $image->url}}" data-gallery>
                                                @endif
                                                @endforeach
                                                <span class="mask-inner">
                                                    <span class="item-title script">{{$espacios[$espacio]->titulo}}</span>    
                                                    <span class="desc">{{$espacios[$espacio]->descripcion}}</span>
                                                    {{-- <span class="price">400 personas</span> --}}
                                                </span><!--//mask-inner-->
                                            </a><!--//mask-->
                                        </div><!--//media-item-inner-->
                                    </div><!--//media-item-->
                                </div>
                                @else
                                <div class="col-xs-12 col-sm-4">    
                                    <div class="media-item">
                                        <div class="media-item-inner">
                                            @foreach($imagenes as $image)
                                                @if($image->sector_id==$espacios[$espacio]->id)
                                                    <img class="img-responsive" src="{{ $image->url}}" alt="">
                                                    <a class="mask" href="{{ $image->url}}" data-gallery>
                                                @endif
                                                @endforeach
                                                <span class="mask-inner">
                                                    <span class="item-title script">{{$espacios[$espacio]->titulo}}</span>    
                                                    <span class="desc">{{$espacios[$espacio]->descripcion}}</span>
                                                    {{-- <span class="price">400 personas</span> --}}
                                                </span><!--//mask-inner-->
                                            </a><!--//mask-->
                                        </div><!--//media-item-inner-->
                                    </div><!--//media-item-->
                                </div>
                                @endif
                            @elseif((count($espacios)+2)%3==0)
                                    @if($espacio==0 || $espacio==1 || $espacio==count($espacios)-1 || $espacio==count($espacios)-2)
                                <div class="col-xs-12 col-sm-6">    
                                    <div class="media-item">
                                        <div class="media-item-inner">
                                            @foreach($imagenes as $image)
                                                @if($image->sector_id==$espacios[$espacio]->id)
                                                    <img class="img-responsive" src="{{ $image->url}}" alt="">
                                                    <a class="mask" href="{{ $image->url}}" data-gallery>
                                                @endif
                                                @endforeach
                                                <span class="mask-inner">
                                                    <span class="item-title script">{{$espacios[$espacio]->titulo}}</span>    
                                                    <span class="desc">{{$espacios[$espacio]->descripcion}}</span>
                                                    {{-- <span class="price">400 personas</span> --}}
                                                </span><!--//mask-inner-->
                                            </a><!--//mask-->
                                        </div><!--//media-item-inner-->
                                    </div><!--//media-item-->
                                </div>
                                @else
                                <div class="col-xs-12 col-sm-4">    
                                    <div class="media-item">
                                        <div class="media-item-inner">
                                            @foreach($imagenes as $image)
                                                @if($image->sector_id==$espacios[$espacio]->id)
                                                    <img class="img-responsive" src="{{ $image->url}}" alt="">
                                                    <a class="mask" href="{{ $image->url}}" data-gallery>
                                                @endif
                                                @endforeach
                                            {{-- <img class="img-responsive" src="{{$espacio->image}}" alt="">
                                            <a class="mask" href="{{ $espacio->image}}" data-gallery> --}}
                                                <span class="mask-inner">
                                                    <span class="item-title script">{{$espacios[$espacio]->titulo}}</span>    
                                                    <span class="desc">{{$espacios[$espacio]->descripcion}}</span>
                                                    {{-- <span class="price">400 personas</span> --}}
                                                </span><!--//mask-inner-->
                                            </a><!--//mask-->
                                        </div><!--//media-item-inner-->
                                    </div><!--//media-item-->
                                </div>
                                @endif
                            @endif
                        @endfor


                            {{-- @foreach($espacios as $espacio)
                                
                                <div class="col-xs-12 col-sm-4">    
                                    <div class="media-item">
                                        <div class="media-item-inner">
                                            @foreach($imagenes as $image)
                                                @if($image->sector_id==$espacio->id)
                                                    <img class="img-responsive" src="{{ $image->url}}" alt="">
                                                    <a class="mask" href="{{ $image->url}}" data-gallery>
                                                @endif
                                                @endforeach

                                                <span class="mask-inner">
                                                    <span class="item-title script">{{$espacio->titulo}}</span>    
                                                    <span class="desc">{{$espacio->descripcion}}</span>
                                                </span><!--//mask-inner-->
                                            </a><!--//mask-->
                                        </div><!--//media-item-inner-->
                                    </div><!--//media-item-->
                                </div>

                            @endforeach --}}

                            {{-- <div class="col-xs-12 col-sm-4"> 
                                <div class="media-item">
                                    <div class="media-item-inner">
                                        <img class="img-responsive" src="{{ asset('images/espacios/lago-azul-vista-al-lago.jpg') }}" alt="">
                                        <a class="mask" href="{{ asset('images/espacios/lago-azul-vista-al-lago.jpg') }}" data-gallery>
                                            <span class="mask-inner">
                                                <span class="item-title script">EL LAGO AZUL</span>
                                                <span class="desc">Description about the dish goes here lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor aenean massa.</span>
                                                <span class="price">400 personas</span> --}}
                                            {{-- </span><!--//mask-inner-->
                                        </a><!--//mask-->
                                    </div><!--//media-item-inner-->
                                </div><!--//media-item-->
                            </div> --}}
                            {{-- <div class="col-xs-12 col-sm-4"> 
                                <div class="media-item">
                                    <div class="media-item-inner">
                                        <img class="img-responsive" src="{{ asset('images/espacios/mesa-central.jpg') }}" alt="">
                                        <a class="mask" href="{{ asset('images/espacios/mesa-central.jpg') }}" data-gallery>
                                            <span class="mask-inner">
                                                <span class="item-title script">La Escaleruela</span>
                                                <span class="desc">Description about the dish goes here lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor aenean massa.</span>
                                                <span class="price">400 personas</span>
                                            </span><!--//mask-inner-->
                                        </a><!--//mask-->
                                    </div><!--//media-item-inner-->
                                </div><!--//media-item-->
                            </div> --}}
                        {{-- </div><!--//row--> --}}
                        {{-- <div id="links" class="row">
                            <div class="col-xs-12 col-sm-4">    
                                <div class="media-item">
                                    <div class="media-item-inner">
                                        <img class="img-responsive" src="{{ asset('images/espacios/finca.jpg') }}" alt="">
                                        <a class="mask"  href="#" class="more-link" data-toggle="modal" data-target="#news-modal-1">
                                            
                                            <span class="mask-inner">
                                                <span class="item-title script">FINCA SANTA ANA</span>
                                                <span class="desc">Description about the dish goes here lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor aenean massa.</span>
                                                <span class="price">400 personas</span>
                                            </span><!--//mask-inner-->
                                        </a><!--//mask-->
                                    </div><!--//media-item-inner-->
                                </div><!--//media-item-->
                            </div>
                            <div class="col-xs-12 col-sm-4"> 
                                <div class="media-item">
                                    <div class="media-item-inner">
                                        <img class="img-responsive" src="{{ asset('images/espacios/navarrete2.jpg') }}" alt="">
                                        <a class="mask" href="{{ asset('images/espacios/navarrete2.jpg') }}" data-gallery>
                                            <span class="mask-inner">
                                                <span class="item-title script">RINCON DE NAVARRETE</span>
                                                <span class="desc">Description about the dish goes here lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor aenean massa.</span>
                                                <span class="price">400 personas</span>
                                            </span><!--//mask-inner-->
                                        </a><!--//mask-->
                                    </div><!--//media-item-inner-->
                                </div><!--//media-item-->
                            </div>
                            <div class="col-xs-12 col-sm-4"> 
                                <div class="media-item">
                                    <div class="media-item-inner">
                                        <img class="img-responsive" src="{{ asset('images/espacios/bonet6.jpg') }}" alt="">
                                        <a class="mask" href="{{ asset('images/espacios/bonet6.jpg') }}" data-gallery>
                                            <span class="mask-inner">
                                                <span class="item-title script">HUERTO DE BONET</span>
                                                <span class="desc">Description about the dish goes here lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor aenean massa.</span>
                                                <span class="price">400 personas</span>
                                            </span><!--//mask-inner-->
                                        </a><!--//mask-->
                                    </div><!--//media-item-inner-->
                                </div><!--//media-item-->
                            </div>
                        </div><!--//row--> --}}
                    </div>
                </div><!--//media-wrapper-->
            </div><!--//featured-->
        </div><!--//container-->
    </div><!--//menus-section-->
        
    <!-- ******News section****** -->
    <div id="news" class="news-section">
        <div class="container text-center">
            <h2 class="section-title">
                <span class="script">Servicios</span>
                <span class="title-text">¿Qué te ofrecemos?</span>
                <span class="title-border"></span>
            </h2>
            <div class="row text-left">
                <div class="news-wrapper col-left col-xs-12 col-sm-12">
                    <div id="links" class="row">
                        
                        @foreach($eventos as $evento)
                        
                            <div class="col-xs-12 col-sm-6">    
                                <div class="item">
                                    <h4 class="title">{{$evento->titulo}}</h4>
                                    {{-- <div class="meta">Saturday, 17th August</div> --}}
                                    <p class="excerpt">
                                        {{substr($evento->descripcion,0,150)}}...
                                        {{-- {{$evento->descripcion}} --}}
                                    </p><!--//excerpt-->
                                    <a href="{{ route('detalle',$evento->id) }}" >Read more</a>
                                    <div class="date-badge">
                                        {{-- <span class="month">AUG</span> --}}
                                        <span class="date">{{$i = $i +1}}</span>
                                    </div><!--/date-badge-->
                                </div><!--//item-->
                            </div>
                        @endforeach
                    </div>
                </div>
            </div><!--//media-wrapper-->
            {{-- <div class="row text-left">
                <div class="news-wrapper col-sm-6 col-xs-10 ">
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
            
            
                <div class="news-wrapper col-sm-6 col-xs-10" style="float: right">
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
            </div><!--//row--> --}}
        </div><!--//container-->
    </div><!--//news-section-->

    <!-- ******About section****** -->
    <div id="about" class="about-section">
        <div class="container text-center">
            <h2 class="section-title">
                <span class="script">Servicios </span>
                <span class="title-text">¿Qué te ofrecemos?</span>
                <span class="title-border"></span>
            </h2>
            <div class="intro center-block">
                <p>“Si quiero”… todo empieza con una simple frase. A partir de ese momento comienza una carrera a contra-reloj con el objetivo de que todo esté a punto para el gran día. Por el simple motivo de que cada persona es completamente diferente, creemos que cada celebración debe ser totalmente diferente, poniendo en valor los gustos y detalles de cada pareja. </p>
            </div>
            <div class="suppliers">
                <h3 class="title script">SERVICIOS INCLUIDOS</h3>
                <div class="supplier-list" style="text-align:left">
                    <div class="supplier-type" style="text-align:left">
                        <ul>
                    <li>                        
                        Degustación del Menú para 6 personas previamente elegido (para contrataciones superiores a 120 plazas)
                    </li>
                    <li>
                        Decoración floral para la presidencia así como para el resto de las mesas
                    </li> 
                    <li>
                        Tarjetones de minuta para todos los comensales
                    </li>
                    <li>
                        Seating plan invitados
                    </li>
                    <li>
                        Habitación para los novios la noche de la boda en HOTEL TORICO PLAZA en régimen de alojamiento y desayuno. Check out 16.00 horas
                    </li> 
                    <li>
                        Zona infantil de juegos e hinchables con monitores
                    </li>
                    <li>
                        Impuestos SGAE
                    </li>
                    <li>
                        Descuento en celebraciones especiales: San Valentín , Nochevieja , Reyes, etc
                    </li>
                        </ul>
                    </div><!--//supplier-type-->
                </div><!--//supplier-list-->
            </div><!--//suppliers-->
            <div class="suppliers">
                <h3 class="title script">Para vuestros invitados</h3>
                <div class="supplier-list" style="text-align:left">
                    <div class="supplier-type" style="text-align:left">
                        <ul style="text-align:left">
                        <li>Aparcamiento amplio, vigilado y de fácil accesibilidad</li>
                        <li>Tarifas especiales para el alojamiento de vuestros invitados en el Hotel Torico Plaza (Yagüe de Salas,5)</li>
                        </ul>
                    </div><!--//supplier-type-->
                </div><!--//supplier-list-->
            </div><!--//suppliers-->
            {{-- <a class="btn btn-secondary text-center" href="{{ asset('media/pdf-file.pdf')}}" target="_blank">View full supplier list</a> --}}
        </div><!--//container-->
    </div><!--//about-section-->
    
    <div id="contact" class="contact-section">
        <div class="container">
            <h2 class="section-title text-center">
                <span class="script">Contacta con nosotros</span>
                <span class="title-text">Te estamos esperando</span>
                <span class="title-border"></span>
            </h2>
            <div class="contact-content">
                <div class="row">
                    <div class="map-col col-xs-12 col-sm-6">
                        <div id="map" class="map-container">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3040.2441709279183!2d-1.1404536841435613!3d40.359109979371844!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd5e7476835c7345%3A0x119f4ed6c51b5f23!2sRestaurante+EL+MILAGRO+de+Teruel!5e0!3m2!1ses!2ses!4v1471437910842" width="1280" height="420" frameborder="0" style="border:0" allowfullscreen=""></iframe>
    
                        </div>
                    </div><!--//map-col-->
                    <div class="info-col col-xs-12 col-sm-6">
                        {{-- <div class="row"> --}}
                            <div class="col-xs-12 col-md-12">
                                <div class="general">
                                    <h4 class="title"><b>Visita nuestras instalaciones</b></h4>
                                    <div class="adr-group">       
                                        <span class="street-address">Carretera Sagunto-Burgos Km. 123</span><br>
                                        <span class="city">Teruel</span><br>
                                        <span class="postal-code">44195</span><br>
                                        <span class="country-name">España</span>
                                    </div>
                                    <div class="contact-methods">
                                        <h5 class="subtitle">Correo y teléfono</h5>
                                        <ul class="list-unstyled">
                                            <li><i class="fa fa-envelope-o" aria-hidden="true"></i> <a href="mailto:info@restauranteelmilagro.com">{{$contacto->email}}</a></li>
                                            <li><i class="fa fa-phone"></i> <a href="tel:0800123456">{{$contacto->telefono}}</a></li>
                                        </ul>
                                    </div>
                                    <div class="contact-reserve">
                                        <h5 class="subtitle" >¿Quieres concertar una cita?</h5>
                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#reserve-modal">Reserva ahora</button>
                                    </div>
                                </div><!--//general-->
                            </div>
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
                    <div class="footer-col col-xs-12 col-sm-5">
                        <div class="footer-col-inner">
                            <h3 class="title">Horario</h3>
                            <ul>
                                <li><span>Lunes a Viernes:</span> 08:00 - 17:00</li>
                                <li><span>Sábados:</span>08:00 - CIERRE</li>
                            </ul>
                            <span>PARA RESERVAS FUERA DE ESTOS HORARIOS PÓNGASE EN CONTACTO CON NOSOTROS</span>
                        </div><!--//footer-col-inner-->
                    </div><!--//footer-col-->
                    
                    <div class="footer-col col-xs-12 col-sm-5">
                        <div class="footer-col-inner">
                            <h3 class="title">Contacto</h3>
                            <ul class="list-unstyled">
                                {{-- <li><i class="fa fa-map-marker" aria-hidden="true"></i>{{$contacto->direccion}}</li> --}}
                                <li><i class="fa fa-envelope-o" aria-hidden="true"></i> <a href="mailto:info@restauranteelmilagro.com">{{$contacto->email}}</a></li>
                                <li><i class="fa fa-phone" aria-hidden="true"></i>{{$contacto->telefono}}</li>
                            </ul>
                        </div><!--//footer-col-inner-->
                    </div>

                    {{-- <div class="footer-col col-xs-12 col-sm-6">
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
                    </div><!--//foooter-col-->  --}}
                    <div class="footer-col col-xs-12 col-sm-2">
                        <div class="footer-col-inner">
                            <h3 class="title">Redes sociales</h3> 
                            <ul class="social-icons list-inline">
                                <li><a href="{{ $contacto->miNube }}" target="_blank"><i class="fa fa-twitter"></i></a></li>                        
                                <li><a href="{{ $contacto->facebook }}" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="{{ $contacto->tripadvisor }}" target="_blank"><i class="fa fa-tria"></i></a></li>
                                {{-- <li><a href=""><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                <li class="last"><a href="#"><i class="fa fa-pinterest"></i></a></li>                      --}}
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
                        <span class="script">Ven a visitarnos</span>
                        <span class="title-text">Concierta una cita</span>
                        <span class="title-border"></span>
                            {{-- <h1>
                            <img class="img-responsive block-center" src="{{ asset('images/logo/logoPequeño.png') }}" alt="logo" />
                            </h1> --}}
                    </h2>
                    <div class="intro text-center">
                        <p class="blurb">Llámanos para concertar una cita</p>
                        <p class="phone subtitle">{{$contacto->telefono}}</p>
                        <hr>
                        <p class="booking-intro">O envíanos un correo</p>
                    </div>
                </div><!--//modal-header-->
                <div class="modal-body">
                    <form id="reserve-form" class="reserve-form form" method="post" action="mailer.php">
                        <div id="form-messages"></div>              
                        <div class="row text-center">
                            <div class="datepicker-group col-xs-12 col-sm-6 form-group">
                                <div class="form-group-inner">
                                    <i class="fa fa-calendar-o"></i>
                                    <label class="sr-only" for="cdate">Fecha</label>
                                    <input type='text' id="cdate" class="form-control add-padding make-datepicker" name="date" required="" aria-required="true">
                                </div>
                            </div>    
                            <div class="timepicker-group col-xs-12 col-sm-6 form-group">
                                <div class="form-group-inner">
                                    <i class="fa fa-clock-o"></i>
                                    <label class="sr-only" for="ctime">Hora</label>
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
                                    <label class="sr-only" for="cname">Nombre</label>
                                    <input type="text" class="form-control add-padding" id="cname" name="name" placeholder="Your name" minlength="2" aria-required="true" required>
                                </div>
                            </div>                    
                            <div class="email-group col-xs-12 col-sm-6 form-group">
                                <div class="form-group-inner">
                                    <i class="fa fa-envelope"></i>
                                    <label class="sr-only" for="cemail">Correo</label>
                                    <input type="email" class="form-control add-padding" id="cemail" name="email" placeholder="Email Address" aria-required="true" required>
                                </div>
                            </div>
                            <div class="phone-group col-xs-12 col-sm-6 form-group">
                                <div class="form-group-inner">
                                    <i class="fa fa-phone"></i>
                                    <label class="sr-only" for="cphone">Telefono</label>
                                    <input type="tel" class="form-control add-padding" id="cphone" name="phone" placeholder="Phone Number" aria-required="true" required>
                                </div>
                            </div>
                             <div class="col-xs-12 form-group">
                                <button type="submit" class="btn btn-block btn-primary">Reservar ahora</button>
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
                       
                        <p><img class="img-responsive" src="{{ asset('images/salones/garden2.jpg') }}" alt="" /></p>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.</p>
                        <p>Maecenas ac turpis sit amet leo semper ultricies lobortis sed purus. Integer erat felis, maximus in placerat vel, fermentum a libero. Ut quis mollis est. Pellentesque semper nibh ut scelerisque tincidunt. Nullam commodo quam eu lectus ullamcorper, quis sagittis ligula sagittis. Fusce id pellentesque risus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae.</p>
                    </div>
                </div><!--//modal-body-->
                <div class="modal-footer text-center">
                    <button type="button" class="btn btn-primary center-block" data-dismiss="modal">Close</button>
                    {{-- <div class="col-xs-12 col-sm-4 row justify-content-center">
                        <button type="submit" class="btn btn-block btn-primary">Reservar ahora</button>
                    </div>     --}}
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
