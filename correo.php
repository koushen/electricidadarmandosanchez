<!DOCTYPE HTML>
<!--
	Tessellate 1.0 by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>koushenwd</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link href="http://fonts.googleapis.com/css?family=Roboto:100,100italic,300,300italic,400,400italic" rel="stylesheet" type="text/css" />
		<!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]

		<link rel="stylesheet" type="text/css" href="css/jquery.fancybox-1.3.1.css" media="screen" />-->
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js" type="text/javascript"></script>
		<!--<script type="text/javascript" src="js/jquery.fancybox-1.3.1.js"></script>-->


		<!--<script src="js/jquery.min.js"></script>-->
		<script src="js/skel.min.js"></script>
		<script src="js/init.js"></script>
		<script src="js/modernizr.custom.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel-noscript.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-wide.css" />
			
  		
		</noscript> 
	</head>

<?php
$nombre = $_POST['Name'];
$mail = $_POST['Email'];


$header = 'From: ' . $mail . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$mensaje = "Este mensaje fue enviado por " . $nombre . " \r\n";
$mensaje .= "Su e-mail es: " . $mail . " \r\n";
$mensaje .= "Mensaje: " . $_POST['Message'] . " \r\n";
$mensaje .= "Enviado el " . date('d/m/Y', time());

$para = 'koushenwd@gmail.com';
$asunto = 'Asunto del mail recibido';



?>

<body>
		
			<section id="header" class="dark">
				<header>
					<?php if (!empty($nombre)&!empty($mensaje)&!empty($mail)) { 

						mail($para, $nombre, $mensaje, null, $mail);?>
    					<h1>¡ Muchas gracias por tu mensaje ! </h1>
    					</header>
    					<span class="feature-icon cbp-so-side cbp-so-side-left"><span class="fa fa-rocket"></span></span>
    					
					<?php } else { ?>
    					<h1>Faltan datos para mandar el mensaje.</h1>
    					</header>
    					<span class="feature-icon cbp-so-side cbp-so-side-left"><span class="fa fa-frown-o"></span></span>
    					</header>
					<?php } ?>
						
					
					<!--<img src="images/koushen.png">-->
					
				
				
			</section>

</body>

