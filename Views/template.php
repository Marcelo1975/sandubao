<!--
* @Template HTML
* @version 1.0
* @Copyright m18web 2019
* @access public
* @Author Marcelo A. Rodrigues
-->
<!DOCTYPE html>
<html>
<head>
	<title>Sandubão-Itapecerica venha logo experimentar o melhor hambúrguer do centroeste</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no" />
    <script type="text/javascript" src="assets/js/jquery-3.3.1.min.js"></script>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/carousel.css" />
    <link rel="stylesheet" href="assets/css/style.css" />

    <meta name="description" content="Já estamos atendendo,Temos o hambúrguer artesanal, peça já o seu Venha logo fazer o seu pedido levamos a maquina de cartão." />
    <meta name="author" content="Marcelo A. Rodrigues" />
    <meta name="keywords" content="Sandubão, Itapecerica, hambúrguer, melhor, artesanal, centroeste"/>
</head>
<body>
  <div class="container">
  <header>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="<?php echo BASE_URL; ?>"><img src="<?php echo BASE_URL; ?>assets/images/logosandubaosite.png" /></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" href="<?php echo BASE_URL; ?>dishes">Cardápio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo BASE_URL; ?>about">Sobre</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo BASE_URL; ?>contact">Fale conosco</a>
        </li>
      </ul>
      <div class="app">
        <a href="" onclick="alert('App em desenvolvimento, em breve estará disponível na Play-store!');"><img src="<?php echo BASE_URL; ?>assets/images/icons/play-store.png" alt="Play-store" /></a>
        <a href="" onclick="alert('App em desenvolvimento, em breve estará disponível na App-store!');"><img src="<?php echo BASE_URL; ?>assets/images/icons/app-store.png" alt="App-store" /></a>
      </div>
    </div>
  </nav>
</header>
  <div class="container">
    <?php $this->loadViewInTemplate($viewName, $viewData); ?>
  </div>

  <footer class="container">
    <p class="float-right"><button class="main_footer_scroll">Voltar ao topo</button></p>
    <p>&copy; <?php echo date('Y'); ?> - Sandubão Itapecerica - <a href="<?php echo BASE_URL; ?>privacypolicy">Política de privacidade</a></p>
  </footer>

<script type="text/javascript" src="assets/js/script.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>