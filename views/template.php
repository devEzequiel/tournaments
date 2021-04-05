<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">


	<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/css/style.css">
	<title>Tournaments</title>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light navegacao">
	  <a class="navbar-brand" href="<?php echo BASE_URL;?>"><img style="width: 200px" src="<?php echo BASE_URL;?>assets/images/logo.png"></a>
	  <button class="navbar-toggler" id="boton-3" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon" id="toggler"></span>
	  </button>
	  <div class="collapse navbar-collapse" id="navbarNavDropdown">
	    <ul class="navbar-nav ml-auto">
	      <li class="nav-item link-nav">
	        <a class="nav-link" id="link-nav" href="#">Jogadores</a>
	      </li>
	      <li class="nav-item link-nav">
	        <a class="nav-link" id="link-nav" href="<?php echo BASE_URL; ?>teams" >Times</a>
	      </li>
	      <li class="nav-item link-nav">
	        <a class="nav-link" id="link-nav" href="#">Estatisticas</a>
	      </li>
	      <li class="nav-item link-nav">
	        <a class="nav-link" id="link-nav" href="#">Nova Partida</a>
	      </li>
	      <li class="nav-item dropdown" id="nav-link">
	        <a class="nav-link dropdown-toggle" id="link-nav" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	          Zeke
	        </a>
	        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
	          <a class="dropdown-item" href="#" >Sair</a>
	        </div>
	      </li>
	    </ul>
	  </div>
	</nav>
	<?php echo $this->loadViewInTemplate($viewName, $viewData);?>


	<script type="text/javascript" src="<?php BASE_URL; ?>assets/js/teams.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>