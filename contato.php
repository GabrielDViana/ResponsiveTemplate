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

<section class="contato">
  <h1 class="text-center"><i style="font-size: 76px;" class="fa fa-pencil-square-o icone" aria-hidden="true"></i>Contato</h1>
  <svg style="margin-bottom:2.5%;" class="svg" width="100%" height="30px" viewBox="0 75 400 50">
    <line x1="-200" x2="620" y1="100" y2="100" stroke="#000" stroke-width="20" stroke-linecap="round" stroke-dasharray="1, 30"/>
  </svg>
  <div class="container">
    <div class="row">
      <div class="col-lg-6 col-md-6">
        <?php
        //if "email" variable is filled out, send email
          if (isset($_REQUEST['email']))  {

          //Email information
          $admin_email = "taviajando@taviajando.com.br";
          $name = $_REQUEST['name'];
          $email = $_REQUEST['email'];
          $phone = $_REQUEST['phone'];
          $comment = $_REQUEST['comment'];

          $email_message .= "Nome: ".$name."\n";

          $email_message .= "Email: ".$email."\n";

          $email_message .= "Telefone: ".$phone."\n";

          $email_message .= "Comments: ".$comment."\n";
          //send email
          mail($admin_email, "$subject", $email_message, "From:" . $email);

          //Email response
          echo "Obrigado por entrar em contato!";
          }

          //if "email" variable is not filled out, display the form
          else  {
        ?>
        <form method="post">
          <div>
            <i class="fa fa-user f-icons" aria-hidden="true"></i>
            <input type="text" name="name" class="form-control form" placeholder="Nome Completo" />
          </div>
          <div>
            <i class="fa fa-envelope f-icons" aria-hidden="true"></i>
            <input type="email" name="email" class="form-control form" placeholder="E-mail" />
          </div>
          <div>
            <i class="fa fa-phone f-icons" aria-hidden="true"></i>
            <input type="text" name="phone" class="form-control form" placeholder="Telefone" />
          </div>
          <div>
            <i class="fa fa-paper-plane f-icons" aria-hidden="true"></i>
            <textarea name="comment"  class="form-control form" rows="7" placeholder="Digite sua mensagem"></textarea>
          </div>
          <input type="submit" value="Enviar" class="btn submit" />
          </form>
          <?php
            }
          ?>
      </div>
      <div class="col-lg-6 col-md-6" style="text-align:center;">
        <h2>PONTO COM</h2>
        <h3>Acessoria & Comunicação</h3>
        <h4>Aline Sanchotene</h4>
        <div class="center-div">
          <table >
            <tr>
              <th>
                <i class="fa fa-mobile icone-contato"></i>
              </th>
              <th style="font-weight: normal;">
                <a>(61) 9979-0644</a></br><a>(61) 8207-1189</a>
              </th>
            </tr>
          </table>
        </div>

        <p>
          <a>
            <i class="fa fa-envelope icone-contato-env"></i>
            PCOMBSB@gmail.com
          </a>
        </p>
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
