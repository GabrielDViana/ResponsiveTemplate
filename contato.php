
<!DOCTYPE html>
<html>
<head>
  <title>Ta Viajando?</title>
  	<link rel="stylesheet" media="all" href="/assets/stylesheets/bootstrap.min.css" data-turbolinks-track="true" />
	<link rel="stylesheet" media="all" href="/assets/stylesheets/font-awesome.min.css" data-turbolinks-track="true" />
	<link rel="stylesheet" media="all" href="/assets/stylesheets/home.css" data-turbolinks-track="true" />
	<link rel="stylesheet" media="all" href="/assets/stylesheets/main.css" data-turbolinks-track="true" />
	<link rel="stylesheet" media="all" href="/assets/stylesheets/preset.css" data-turbolinks-track="true" />
	<link rel="stylesheet" media="all" href="/assets/stylesheets/responsive.css" data-turbolinks-track="true" />
	<link rel="stylesheet" media="all" href="/assets/stylesheets/user.css" data-turbolinks-track="true" />
	<link rel="stylesheet" media="all" href="/assets/stylesheets/application.css" data-turbolinks-track="true" />
	<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Lato" />
</head>
<body>

<nav >
    <div class="collapse navbar-collapse">
      <ul class="nav navbar-nav">
        <li><a href="/projeto.php">Projeto</a></li>
        <li><a href="/livro.php">Livro</a></li>
        <li><a href="/index.php"><img src="/assets/images/Logo.png" class="logo" alt=""></a></li>
        <li><a href="/autora.php">Autora</a></li>
        <li><a href="/contato.php">Contato</a></li>
      </ul>
    </div>
</nav>

  </section>
  <div class="border2"></div>

  <section id="atendimento">
    <div id="contact-us">
      <div class="container" style="padding-top: 5%;">
        <div class="container">
  <div class="row col-sm-10 col-sm-offset-1">
    <h1><i style="font-size:72px;"class="fa fa-group icone" aria-hidden="true"></i>Contato</h1>
    <svg class="svg" width="100%" height="30px" viewBox="0 75 400 50">
      <line x1="-200" x2="620" y1="100" y2="100" stroke="#000" stroke-width="20" stroke-linecap="round" stroke-dasharray="1, 30"/>
    </svg>
    <div class="col-sm-6">
      <div class="wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
        <form action="/send_mail" accept-charset="UTF-8" method="post"><input name="utf8" type="hidden" value="&#x2713;" /><input type="hidden" name="authenticity_token" value="scnEbOak2rvkRCYhrEN71KHC1We+y1Cu8CgHEkWWjtyD0LP2v3DAn4Ry3nL5D0psWcMgra29+Q1OZoFaWyel/g==" />
          <div>
            <i class="fa fa-group f-icons" aria-hidden="true"></i>
            <input type="text" name="name" id="name" class="form-control form" placeholder="Nome Completo" />
          </div>
          <div>
            <i class="fa fa-envelope f-icons" aria-hidden="true"></i>
            <input type="email" name="email" id="email" class="form-control form" placeholder="E-mail" />
          </div>
          <div>
            <i class="fa fa-phone f-icons" aria-hidden="true"></i>
            <input type="text" name="phone" id="phone" class="form-control form" placeholder="Telefone" />
          </div>
          <div>
            <i class="fa fa-map-marker f-icons" aria-hidden="true"></i>
            <input type="text" name="state" id="state" class="form-control form" placeholder="Estado" />
          </div>
      </div>
    </div>
    <div class="col-sm-6">
      <div class="wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
        <textarea name="comments" id="comments" class="form-control" rows="7" placeholder="Digite sua mensagem" style="height:100%;">
</textarea>
      </div>
    </div>
    <input type="submit" name="commit" value="Enviar" class="btn submit" />
</form>  </div>
</div>

      </div>
    </div>
  </section>


</body>
</html>
