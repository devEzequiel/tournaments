<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Tournaments</title>
</head>
<body>
	<h1>Torneios</h1>
	<a href="<?php echo BASE_URL; ?>">Torneios</a>
	<a href="<?php echo BASE_URL; ?>galeria">Galeria</a>

	<?php echo $this->loadViewInTemplate($viewName, $viewData);?>
</body>
</html>