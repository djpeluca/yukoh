<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport"    content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author"      content="djpeluca (djpeluca.com)">
	
	<title>Yukoh! Films</title>

	<link rel="shortcut icon" href="assets/images/gt_favicon.png">
	
	<!-- Bootstrap -->
	<link href="http://netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet" type="text/css">

	<!-- Custom styles -->
	<link rel="stylesheet" href="assets/css/yukoh.css">
    <?php
    $i = rand(1, 34); // generate random number size of the array 
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
				<li><a href="#about">About me</a></li>
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
			<div class="col-lg-3 col-sm-4 col-xs-6" ><a title="yukoh! films" href="#"><img class="thumbnail img-responsive" src="assets/images/videos/78796323.jpg" id="78796323" title="yukoh! films"></a></div>
			<div class="col-lg-3 col-sm-4 col-xs-6"><a title="yukoh! films" href="#"><img class="thumbnail img-responsive" src="assets/images/videos/28521836.jpg" id="28521836" title="yukoh! films"></a></div>
			<div class="col-lg-3 col-sm-4 col-xs-6"><a title="yukoh! films" href="#"><img class="thumbnail img-responsive" src="assets/images/videos/22158107.jpg" id="22158107" title="yukoh! films"></a></div>
			<div class="col-lg-3 col-sm-4 col-xs-6"><a title="yukoh! films" href="#"><img class="thumbnail img-responsive" src="assets/images/videos/36234305.jpg" id="36234305" title="yukoh! films"></a></div>
			<div class="col-lg-3 col-sm-4 col-xs-6"><a title="yukoh! films" href="#"><img class="thumbnail img-responsive" src="assets/images/videos/42131596.jpg" id="42131596" title="yukoh! films"></a></div>
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
	<div class="container">
	
		<h2 class="text-center title">About me</h2>
		<div class="row">
			<div class="col-sm-4 col-sm-offset-2">    
				<h5><strong>Where's my lorem ipsum?<br></strong></h5>
				<p>Well, here it is: Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum, ullam, ducimus, eaque, ex autem est dolore illo similique quasi unde sint rerum magnam quod amet iste dolorem ad laudantium molestias enim quibusdam inventore totam fugit eum iusto ratione alias deleniti suscipit modi quis nostrum veniam fugiat debitis officiis impedit ipsum natus ipsa. Doloremque, id, at, corporis, libero laborum architecto mollitia molestiae maxime aut deserunt sed perspiciatis quibusdam praesentium consectetur in sint impedit voluptates! Deleniti, sequi voluptate recusandae facere nostrum?</p>    
			</div>
			<div class="col-sm-4">
				<h5><strong>More, more lipsum!<br></strong></h5>    
				<p>Tempore, eos, voluptatem minus commodi error aut eaque neque consequuntur optio nesciunt quod quibusdam. Ipsum, voluptatibus, totam, modi perspiciatis repudiandae odio ad possimus molestias culpa optio eaque itaque dicta quod cupiditate reiciendis illo illum aspernatur ducimus praesentium quae porro alias repellat quasi cum fugiat accusamus molestiae exercitationem amet fugit sint eligendi omnis adipisci corrupti. Aspernatur.</p>    
				<h5><strong>Author links<br></strong></h5>    
				<p><a href="http://be.net/pozhilov9409">Behance</a> / <a href="https://twitter.com/serggg">Twitter</a> / <a href="http://linkedin.com/pozhilov">LinkedIn</a> / <a href="https://www.facebook.com/pozhilov">Facebook</a></p>
			</div>
		</div>
	</div>
</section>

<!-- Third (Works) section -->
<section class="section" id="themes">
	<div class="container">
	
		<h2 class="text-center title">More Themes</h2>
		<p class="lead text-center">
			Huge thank you to all people who publish<br>
			their photos at <a href="http://unsplash.com">Unsplash</a>, thank you guys!
		</p>
		<div class="row">
			<div class="col-sm-4 col-sm-offset-2">
				<div class="thumbnail">
					<img src="assets/screenshots/sshot1.jpg" alt="">
					<div class="caption">
						<h3>Thumbnail label</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque doloribus enim vitae nam cupiditate eius at explicabo eaque facere iste.</p>
						<p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
					</div>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="thumbnail">
					<img src="assets/screenshots/sshot4.jpg" alt="">
					<div class="caption">
						<h3>Thumbnail label</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque doloribus enim vitae nam cupiditate eius at explicabo eaque facere iste.</p>
						<p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
					</div>
				</div>
			</div>
			<div class="col-sm-4 col-sm-offset-2">
				<div class="thumbnail">
					<img src="assets/screenshots/sshot5.jpg" alt="">
					<div class="caption">
						<h3>Thumbnail label</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque doloribus enim vitae nam cupiditate eius at explicabo eaque facere iste.</p>
						<p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
					</div>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="thumbnail">
					<img src="assets/screenshots/sshot3.jpg" alt="">
					<div class="caption">
						<h3>Thumbnail label</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque doloribus enim vitae nam cupiditate eius at explicabo eaque facere iste.</p>
						<p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
					</div>
				</div>
			</div>

		</div>

	</div>
</section>

<!-- Fourth (Contact) section -->
<section class="section" id="contact">
	<div class="container">
	
		<h2 class="text-center title">Get in touch</h2>

		<div class="row">
			<div class="col-sm-8 col-sm-offset-2 text-center">
				<p class="lead">Have a question about this template, or want to suggest a new feature?</p>
				<p>Feel free to email me, or drop me a line in Twitter!</p>
				<p><b>gt@gettemplate.com</b><br><br></p>
				<ul class="list-inline list-social">
					<li><a href="https://twitter.com/serggg" class="btn btn-link"><i class="fa fa-twitter fa-fw"></i> Twitter</a></li>
					<li><a href="https://github.com/pozhilov" class="btn btn-link"><i class="fa fa-github fa-fw"></i> Github</a></li>
					<li><a href="http://linkedin/in/pozhilov" class="btn btn-link"><i class="fa fa-linkedin fa-fw"></i> LinkedIn</a></li>
				</ul>
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