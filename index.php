<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport"    content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Hello, we are yukohfilms® An indie film factory based in Montevideo, Uruguay. We are a young independent film factory of visual arts which manifests itself through fresh film products ready for any format and media.">
    <meta name="Keywords" content="yukohfilms, indie, film factory, montevideo, uruguay, independent, film products">
	<meta name="author"      content="djpeluca (djpeluca.com)">	
    <meta property="og:title" content="Yukoh! Films">
    <meta property="og:url" content="http://www.yukohfilms.com">
    <meta property="og:image" content="http://www.yukohfilms.com/assets/images/yukohfilms.jpg">
	
    <title>Yukoh! Films</title>

	<link rel="shortcut icon" href="assets/images/favicon.ico">
	
	<!-- Bootstrap -->
	<link href="http://netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet" type="text/css">

	<!-- Custom styles -->
	<link rel="stylesheet" href="assets/css/yukoh.css">
    <?php
    $i = rand(1, 32); // generate random number size of the array 
    ?>
    <style>
        html {
	       background-image: url(assets/images/backgrounds/body<?php echo $i; ?>.jpg); 
        }
    </style>

	<!-- Fonts -->
	<link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link href='http://fonts.googleapis.com/css?family=Wire+One' rel='stylesheet' type='text/css'>
</head>

<!-- Coded by @djpeluca -->
<body>

<nav class="mainmenu">
    <!-- Header Logo -->
    <div class="container logo">
        <div class="row">
            <img class="logo" src="assets/images/yukoh-white.png" />
        </div>
    </div>
	<div class="container menu">
		<div class="dropdown">
			<button type="button" class="navbar-toggle" data-toggle="dropdown"><span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
			<!-- <a data-toggle="dropdown" href="#">Dropdown trigger</a> -->
			<ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
				<li><a href="#head" class="active">Videos</a></li>
				<li><a href="#about">About us</a></li>
			</ul>
		</div>
	</div>
</nav>

<!-- Main section -->
<section class="section" id="head">
	<div class="container">
		<div class="row">
			<div class="col-lg-3 col-sm-4 col-xs-6"><a class="videothumb" title="Image 1" href="#"><img class="thumbnail img-responsive" src="assets/images/videos/104191747.jpg" id="104191747" title="yukoh! films"></a></div>
			<div class="col-lg-3 col-sm-4 col-xs-6"><a title="yukoh! films" href="#"><img class="thumbnail img-responsive" src="assets/images/videos/11168959.jpg" id="11168959" title="yukoh! films"></a></div>
			<div class="col-lg-3 col-sm-4 col-xs-6" ><a title="yukoh! films" href="#"><img class="thumbnail img-responsive" src="assets/images/videos/103864773.jpg" id="103864773" title="yukoh! films"></a></div>
			<div class="col-lg-3 col-sm-4 col-xs-6"><a title="yukoh! films" href="#"><img class="thumbnail img-responsive" src="assets/images/videos/28521836.jpg" id="28521836" title="yukoh! films"></a></div>
			<div class="col-lg-3 col-sm-4 col-xs-6"><a title="yukoh! films" href="#"><img class="thumbnail img-responsive" src="assets/images/videos/35299491.jpg" id="35299491" title="yukoh! films"></a></div>
			<div class="col-lg-3 col-sm-4 col-xs-6"><a title="yukoh! films" href="#"><img class="thumbnail img-responsive" src="assets/images/videos/36234305.jpg" id="36234305" title="yukoh! films"></a></div>
			<div class="col-lg-3 col-sm-4 col-xs-6"><a title="yukoh! films" href="#"><img class="thumbnail img-responsive" src="assets/images/videos/21925430.jpg" id="21925430" title="yukoh! films"></a></div>
			<div class="col-lg-3 col-sm-4 col-xs-6"><a title="yukoh! films" href="#"><img class="thumbnail img-responsive" src="assets/images/videos/42674191.jpg" id="42674191" title="yukoh! films"></a></div>
			<div class="col-lg-3 col-sm-4 col-xs-6"><a title="yukoh! films" href="#"><img class="thumbnail img-responsive" src="assets/images/videos/48704395.jpg" id="48704395" title="yukoh! films"></a></div>
			<div class="col-lg-3 col-sm-4 col-xs-6"><a title="yukoh! films" href="#"><img class="thumbnail img-responsive" src="assets/images/videos/49933877.jpg" id="49933877" title="yukoh! films"></a></div>
			<div class="col-lg-3 col-sm-4 col-xs-6"><a title="yukoh! films" href="#"><img class="thumbnail img-responsive" src="assets/images/videos/65479167.jpg" id="65479167" title="yukoh! films"></a></div>
			<div class="col-lg-3 col-sm-4 col-xs-6"><a title="yukoh! films" href="#"><img class="thumbnail img-responsive" src="assets/images/videos/25051839.jpg" id="25051839" title="yukoh! films"></a></div>
		</div> <!-- /row -->
	</div>
	
	<div class="modal" id="myModal" role="dialog">
		  <div class="modal-dialog">
		  <div class="modal-content">
			<div class="modal-body">
				<div id="modalCarousel" class="carousel">
				  <div class="carousel-inner">
				  </div>
				  <a class="carousel-control left" href="#modalCarousel" data-slide="prev"><i class="glyphicon glyphicon-chevron-left"></i></a>
				  <a class="carousel-control right" href="#modalCarousel" data-slide="next"><i class="glyphicon glyphicon-chevron-right"></i></a>
				</div>
			</div>
		   </div>
		  </div>
	</div>
</section>

<!-- Second (About) section -->
<section class="section" id="about">
	<div class="container about">
	
		<h2 class="text-center title">About Us</h2>
		<div class="row">
			<div class="col-sm-4 col-sm-offset-2">    
				<h5><strong>Hello, we are yukohfilms®<br></strong></h5>
				<p>An indie film factory based in Montevideo, Uruguay. We are a young independent film factory of visual arts which manifests itself
through fresh film products ready for any format and media.We make projects with great artistic freedom that allow us to express our creativity
through high-level audiovisual product craftsmanship.</p> 
                <h5><strong>contact mail<br></strong></h5>    
				<p><a  href=mailto:contact@yukohfilms.com>contact@yukohfilms.com</a> </p>
			</div>
			<div class="col-sm-4">
				<h5><strong>Hola, somos yukohfilms®<br></strong></h5>    
				<p>Una fábrica de cine independiente con sede en Montevideo , Uruguay . Somos una empresa joven de artes visuales que se manifiesta a través de producciones de películas frescas listas para cualquier formato y medio. Hacemos proyectos con gran libertad artística que nos permiten expresar nuestra creatividad a través de altos niveles de artesan&iacute;a.</p>    
				<h5><strong>links<br></strong></h5>    
				<p><a rel="nofollow" target="_blank" href="http://vimeo.com/yukoh">Vimeo</a> / <a rel="nofollow" target="_blank" href="https://twitter.com/maxcontenti">Twitter</a> / <a rel="nofollow" target="_blank" href="https://www.facebook.com/pages/yukoh-films/523735727651861">Facebook</a></p>
			</div>
		</div>
	</div>
</section>

<!-- Load js libs only when the page is loaded. -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
<script src="assets/js/modernizr.custom.72241.js"></script>
<!-- Custom template scripts -->
<script src="assets/js/magister.js"></script>

<script type='text/javascript'>
        
$(document).ready(function() {
        
    /* copy loaded thumbnails into carousel */
    $('.row .thumbnail').on('load', function() {

    }).each(function(i) {
      if(this.complete) {
        var item = $('<div class="item"></div>');
        var itemDiv = $(this).parents('div');
        var title = $(this).parent('a').attr("title");
          
          
        /*fix for vimeo frames */
        var frame = "<iframe class=\"videoframe\" src=\"//player.vimeo.com/video/" + $(this).attr('id') + "?byline=0&amp;portrait=0&amp;color=ff5a60\" width=\"960\" height=\"540\"   frameborder=\"0\" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>";

        item.attr("title",title);
        $(frame).appendTo(item);
        item.appendTo('.carousel-inner'); 
        if (i==0){ // set first item active
         item.addClass('active');
        }
      }
    });

    /* activate the carousel */
    $('#modalCarousel').carousel({interval:false});

    /* change modal title when slide changes */
    $('#modalCarousel').on('slid.bs.carousel', function () {
      $('.modal-title').html($(this).find('.active').attr("title"));
    })

    /* when clicking a thumbnail */
    $('.row .thumbnail').click(function(){
        var idx = $(this).parents('div').index();
        var id = parseInt(idx);
        $('#myModal').modal('show'); // show the modal
        $('#modalCarousel').carousel(id); // slide carousel to selected
    });
});

</script>
       <!-- Yukoh! template from djpeluca - http://djpeluca.com is based on single-page Bootstrap template  Magister from  **Sergey Pozhilov** - http://pozhilov.com
        **Creative Commons Attribution 3.0** - http://creativecommons.org/licenses/by/3.0/ -->
</body>
</html>