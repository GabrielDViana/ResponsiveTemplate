<!--Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
  <?php
   ini_set('default_charset','UTF-8');
  ?>
  <title>Ta Viajando?</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" media="all" href="/assets/stylesheets/bootstrap.min.css" data-turbolinks-track="true" />
	<link rel="stylesheet" media="all" href="/assets/stylesheets/font-awesome.min.css" data-turbolinks-track="true" />
	<link rel="stylesheet" media="all" href="/assets/stylesheets/team.css" data-turbolinks-track="true" />
	<link rel="stylesheet" media="all" href="/assets/stylesheets/portfolio.css" data-turbolinks-track="true" />
	<link rel="stylesheet" media="all" href="/assets/stylesheets/progressbar.css" data-turbolinks-track="true" />
	<link rel="stylesheet" media="all" href="/assets/stylesheets/style.css" data-turbolinks-track="true" />
	<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Lato" />
  <!-- /css files -->
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">
<!-- navigation -->
<nav class=" navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li><a href="/projeto.php">Projeto</a></li>
            <li><a href="/livro.php">Livro</a></li>
            <li><a href="/autora.php">Autora</a></li>
            <li><a href="/index.php"><img src="/assets/images/Logo.png" class="logo" alt=""></a></li>
            <li><a href="/guia.php">Guia</a></li>
            <li><a href="/comoadquirir.php">Como adquirir</a></li>
            <li><a href="/contato.php">Contato</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
<!-- /navigation -->
<!-- banner section -->
<!-- /banner section -->
<!-- about section -->
<section class="index-section" id="main">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-md-6" style="margin-top:20%;">
        <div>
          <img src="/assets/images/Logo1.png" class="logo1" alt="">
        </div>
        <p style="margin-bottom: 2.5%;">Um e-Book interativo que é divertido</p>
        <p> e inovador voltado para as pessoas</p>
        <p>de todas as idades.</p>
			</div>
			<div class="col-lg-6 col-md-6 ">
        <img src="/assets/images/tablet.png" class="phone" alt="">
			</div>
		</div>
	</div>
</section>


<section class="footer" >
	<div class="container">
		<div class="copyright">
			<p></p>
		</div>
	</div>
</section>

<script src="/assets/js/jquery.min.js"></script>
<script src="/assets/js/bootstrap.min.js"></script>
<script src="/assets/js/SmoothScroll.min.js"></script>
<!-- js for banner -->
<script src="/assets/js/index.js"></script>
<!-- js for banner -->
<!-- js for skill section -->
<script src="/assets/js/progressbar.js"></script>
<script>
    // Display the progress bar calling progressbar.js
	$('.progressbarPhp').progressBar({
		shadow : true,
		percentage : false,
		animation : true,
		animateTarget : true,
		barColor : "rgb(51,122,183)",
	});
	//Menu
	$(".spinDown").click(function() {
		var target = $(this).data("target");
		var scrollFix = -80;
		target = "#" + target;
		$("html,body").animate({
			scrollTop : $(target).offset().top + scrollFix
		}, 1000);
		return false;
	});
</script>
<!-- /js for skill section -->
<!-- js for portfolio section -->
<script src="/assets/js/imagesloaded.pkgd.min.js"></script>
<script src="/assets/js/masonry.pkgd.min.js"></script>
<script src="/assets/js/classie.js"></script>
<script src="/assets/js/cbpGridGallery.js"></script>
<script>
	new CBPGridGallery( document.getElementById( 'grid-gallery' ) );
</script>
<!-- js for portfolio section -->
<!-- js for smooth scrolling -->
<script>
$(document).ready(function(){
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {

  // Store hash
  var hash = this.hash;

  // Using jQuery's animate() method to add smooth page scroll
  // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
  $('html, body').animate({
    scrollTop: $(hash).offset().top
  }, 900, function(){

    // Add hash (#) to URL when done scrolling (default click behavior)
    window.location.hash = hash;
    });
  });
})
</script>
<!-- /js for smooth scrolling -->
<!-- js for sliding animations -->
<script>
$(window).scroll(function() {
  $(".slideanim").each(function(){
    var pos = $(this).offset().top;

    var winTop = $(window).scrollTop();
    if (pos < winTop + 600) {
      $(this).addClass("slide");
    }
  });
});
</script>
<!-- /js for sliding animations -->
<!-- js for back to top -->
<script src="/assets/js/main.js"></script>

</body>
</html>
