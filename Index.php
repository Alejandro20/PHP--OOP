<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Pagina PHP </title>

<link href="CSS/PaginaPHP.css" rel="stylesheet" type="text/css">
</head>

<body>
<?php 

	require_once("Pagina.php");
	
	$pag = new Pagina("Bienvenido a mi Web","Desarrollado por Alejandro Zarcero");

	$pag->iniciar_contenido(
	"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam aliquet lectus sit amet tortor imperdiet iaculis. Cras 		ornare scelerisque libero et pellentesque. Mauris malesuada interdum sapien a porta. Curabitur cursus odio et nibh pretium, quis ornare purus aliquet. Aliquam gravida sodales convallis. Fusce nec viverra quam. Proin ultrices augue massa, in accumsan dui volutpat a. Quisque fringilla augue at nisl sagittis vestibulum. Duis venenatis, mauris in pharetra aliquet, ipsum massa aliquam lectus, ut volutpat nisl arcu iaculis turpis. Ut vehicula sollicitudin diam, ut pulvinar justo ornare vitae. Sed gravida auctor faucibus. Sed vel risus ac lorem commodo tincidunt a in dui. Fusce tellus magna, adipiscing et suscipit eget, malesuada at orci. Aenean vitae dignissim velit. Sed facilisis tempor lacus ac bibendum.
<br/>
<br/>
Nullam et lacus lobortis, congue erat at, lacinia eros. Ut dictum sodales nisi id convallis. Fusce posuere quam eget orci interdum sagittis. Maecenas vitae elementum sem. Sed et massa sem. Phasellus ac lobortis est. Praesent sit amet euismod leo. Maecenas sagittis vel ligula vitae imperdiet. Etiam condimentum elit nibh. Aliquam urna purus, sollicitudin quis est nec, convallis aliquet leo. Cras elementum, est sed feugiat sollicitudin, lorem ante venenatis urna, quis consectetur libero odio sed libero. Mauris nisi arcu, molestie ac enim nec, sagittis scelerisque turpis. Fusce sodales, nulla a venenatis eleifend, quam velit venenatis dui, vel aliquam lorem odio a lacus. Morbi vehicula felis lectus. Mauris faucibus, ante sed cursus imperdiet, est urna suscipit libero, vitae. "
);

	$pag->vista();
?>
	
</body>
</html>