
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
   
</head> 

<body> <!-- News Modal 1-->
    <div  class="news-modal modal  modal-fullscreen">
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