<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	
	<link rel="stylesheet" href="css/estilos.css">
	<script src="https://code.jquery.com/jquery-1.10.2.js"></script>

	<title>Infanto-Juvenil</title>
</head>
<body>

	<div id="fb-root">


		<div class="contenedor">
			
			<div class="centrado">

				<iframe style="border: 0; width: 100%; height: 42px; margin-bottom: 40px" src="https://bandcamp.com/EmbeddedPlayer/album=1179711940/size=small/bgcol=ffffff/linkcol=de270f/transparent=true/" seamless><a href="http://infantojuvenil.bandcamp.com/album/infanto-juvenil">Infanto-Juvenil by Infanto-Juvenil</a></iframe>

				<img src="img/layout/mensaje-play.svg" alt="Dale al play y disfrutá de la buena música">
					
					<section>
						<a>
							<img src="img/layout/logo.svg" alt="Infanto-Juvenil">
						</a>
						<a class="menu-integrantes">
							<img src="img/layout/integrantes.svg" alt="integrantes">
							<img class="over" src="img/layout/integrantes-baba.gif" alt="Oscar babeando">
						</a>
					</section>

					<nav>
						<ul>
							<li>
								<a id="menu-historia">
									<img src="img/layout/menu-historia.svg" alt="Historia">
								</a>
							</li>
							<li>
								<a class="menu-integrantes">
									<img src="img/layout/menu-integrantes.svg" alt="Integrantes">
								</a>
							</li>
							<li>
								<a id="menu-discografia">
									<img src="img/layout/menu-discografia.svg" alt="Discografía">
								</a>
							</li>
							<li>
								<a href="https://www.facebook.com/yosoytuinfantojuvenil/photos/?tab=albums" target="_parent">
									<img src="img/layout/menu-fotos.svg" alt="Fotos">
								</a>
							</li>
							<li>
								<a id="menu-letras">
									<img src="img/layout/menu-letras.svg" alt="Letras">
								</a>
							</li>
							<li class="fans">
								<img src="img/layout/menu-fans.svg" alt="Club de Fans">
								<img class="over" src="img/layout/menu-fans-over.svg" alt="Unite al club de fans de Infanto-Juvenil, la mejor banda!!">
							</li>
							<li class="like">
								<div class="fb-like" data-href="https://www.facebook.com/yosoytuinfantojuvenil" data-width="230" data-layout="button_count" data-action="like" data-size="small" data-show-faces="true" data-share="false"></div>	
								<img class="over" src="img/layout/menu-fans-like.svg" alt="Excelente decisión!!">
							</li>
						</ul>			
					</nav>

					<?php include "historia.inc" ?>

					<?php include "integrantes.inc" ?>		

					<?php include "discografia.inc" ?>
					
					<?php include "letras.inc" ?>

			</div>

		</div>
		
	</div>

	<script>  
		(function(d, s, id) {
			var js, fjs = d.getElementsByTagName(s)[0];
			if (d.getElementById(id)) return;
			js = d.createElement(s); js.id = id;
			js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.9";
			fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));
	</script>

	<script>

	$( ".centrado > iframe" ).hover(
	 	function() {
	    	$( ".like .over" ).css( "display", "block" );
	  	}, 
		function() {
    		$( ".like .over" ).css( "display", "none" );
  		}
	);

	$( "#menu-historia" ).click(function() {
		$( "#historia" ).css( "display", "block" );
		var $video = '<span class="video"><iframe src="https://www.facebook.com/plugins/video.php?href=https%3A%2F%2Fwww.facebook.com%2Fyosoytuinfantojuvenil%2Fvideos%2F1337157236367935%2F&width=540&show_text=false&height=303&appId" width="540" height="303" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe></span>'
		$("#historia .cerrar").after($video);
	});

	$( ".menu-integrantes" ).click(function() {
		$( "#integrantes" ).fadeIn("slow");
	});

	$( "#menu-discografia" ).click(function() {
		$( "#discografia" ).fadeIn("slow");
	});

	$( "#menu-letras" ).click(function() {
		$( "#letras" ).fadeIn("slow");
	});
	
	$( ".cerrar" ).click(function() {
		$( "article" ).fadeOut("fast");
		$( "#historia iframe" ).remove();
	});

	
	$( "#letras ul li a" ).click(function() {
		
		var $numero = $(this).parent().index() + 1; //Tomo número del botón
		
		$( "#letras div div" ).css( "display", "none" );
		$( "#letras ul li a" ).removeClass( "seleccionado" );
		$( "#letras div" ).scrollTop( 0 );
		$( "#letras div div:nth-of-type(" + $numero + ")" ).fadeIn("slow");
		$( this ).addClass( "seleccionado" );
	
	});

	</script>

</body>
</html>