<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Primer Proyecto</title>
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/mis-estilos.css">

	
</head>
	

<body>
	<!-- Primer Contenedor-->
	<div class="container-fluid well">
		<div class="row ">
			<div class="col-xs-3 col-sm-3 col-sm-offset-1 col-md-2 col-md-offset-2 col-lag-2 col-offset-2">
				<img src="img/google_logo_41.png" class="img-responsive">
	    	</div>

			<div class="col-xs-4 visible-xs">
				<small><a href="#">Iniciar sesión</a></small>
			</div>

			<div class="col-xs-3 visible-xs">
				<button type="button" class="btn btn-primary">Crear una Cuenta</button>
			</div>

			<div class="col-sm-4 col-sm-offset-3 visible-sm visible-md visible-lg col-md-4 col-md-offset-4 col-lg-4 col-lg-offset-3">
				<small><a href="#" class="elace-menu">Iniciar Sesión</a></small>
				<button type="button" class="btn btn-primary">Crear una Cuenta </button>
			</div>
		</div>
	</div>
	<!-- Fin del Primer Contenedor -->
	
	<!-- Segundo Contenedor-->
	<div class="container">
		<!--Menu secudario visible para sm hasta lg -->
		<div class="row" id="menu-sec">
			<div class="col-sm-12 col-sm-offset-1 visible-sm visible-md col-md-8 col-md-offset-2 visible-lg col-lg-9">
				<img src="img/googlemail-16.png"><strong>Gmail&nbsp;</strong>
				<a href="#" class="enlace-menu2">Funciones &nbsp;</a>
				<a href="#" class="enlace-menu2">Para dispositivos móviles &nbsp;</a>
				<a href="#" class="enlace-menu2">Para empresas  &nbsp;</a>
				<a href="#" class="enlace-menu2">Ayuda  &nbsp;</a>
			</div>

			<!-- Menu Compacto es visible en xs-->
			<div class="col-xs-12 visible-xs">
			<nav class="navbar navbar-default" role="navigation">
				<div class="container-fluid">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
							<span class="sr-only">Toggle Navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="#"><img src="img/googlemail-16.png"><small><strong>Gmail</strong></small></a>
					</div>

					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<ul class="nav navbar-nav">
							<li>
								<a href="#" class="enlace-menu">Funciones</a>
							</li>
							
							<li>
								<a href="#" class="enlace-menu">Para dispositivos moviles</a>
							</li>
							<li>
								<a href="#" class="enlace-menu">Para empresas</a>
							</li>
							<li>
								<a href="#" class="enlace-menu">Ayuda</a>
							</li>
						</ul>
					</div>
				</div>
			</nav>
			</div>
		</div>

	</div><!-- Fin del Segun contenedor-->

	<!-- Tercer Contenedor carrusel de imagenes-->

	<div class="container" id="sha">
		<div class="row">
			<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
			<!-- Indicadores-->
				<ol class="carousel-indicators">
					<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
					<li data-target="#carousel-example-generic" data-slide-to="1" ></li>
					<li data-target="#carousel-example-generic" data-slide-to="2" ></li>
				</ol>

				<div class="carousel-inner">
					<div class="item active">
						<img src="img/about-carousel-1.png" alt="Gmail en todo tipo de dispositivos">
						<div class="carousel-caption">
							<h4>La sencillez y felicidad de Gmail en todo tipo de dispositivos</h4>
							<p><button type="button" class="btn btn-primary">Crear una cuenta</button></p>
						</div>
					</div>
					
					<div class="item">
						<img src="img/about-carousel-2.png" alt="Mensajes por tipo para organizarte mejor">
						<div class="carousel-caption">
							<h4>La bandeja de Gmail clasifica tus mensajes por tipo para organizarte mejor</h4>
							<p><button type="button" class="btn btn-primary">Crear una cuenta</button></p>
						</div>
					</div>

					<div class="item">
						<img src="img/about-carousel-3.jpg" alt="chate con un compañero o llama por telefono">
						<div class="carousel-caption">
							<h4>Habla con amigos en uan videollamada, chatea con un compañero o llama por telefono sin salir de tu bandeja de entrada</h4>
							<p><button type="button" class="btn btn-primary">Crear una cuenta</button></p>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>
	<!-- Fin del Tercer Contenedor-->

	<!-- Cuarto Contenedor - Contenido-->
	<div class="container" id="sha">
		<div class="row">
			<div class="col-xs-12">
				<br />
				<h2><p class="text-center"> Te damos la bienvenida a Gmail</p></h2>
			</div>
		</div>

		<!--Primer bloque izquierda -->		
		<div class="row">
			<div class="col-xs-12 col-sm-3">
				<center><img src="img/mobile-feature-1.png" class="img-responsive"></center>
			</div>
			<div class="col-xs-12 col-sm-3">
				<br />	
				<strong>Disfruta de Gmail en cualquier dispositivo</strong>
				<small><p>
					Tienes lo mejor de Gmail estes donde estes y en cualquier dispositivo.
					<a href="#">Más información sobre Gmail para móviles</a>
				</p></small>
			</div>

			<div class="col-xs-12 col-sm-3">
				<center><img src="img/circle-hangout-video.png" class="img-responsive"></center>
			</div>
			<div class="col-xs-12 col-sm-3">
				<br />	
				<strong>Habla en diferentes dispositivos</strong>
				<small><p>
					Hangouts da vida a las conversaciones con fotos, emojis e incluso videollamadas de grupo gratis. Habla con amigos desde tu ordenador y en dispositivos Android y Apple.
					<a href="#"><br>Más información sobre Hangouts</a>
				</p></small>
			</div>

		</div>
			
		<!--Segundo Bloque -->
		<div class="row">
			<div class="col-xs-12 col-sm-3">
				<center><img src="img/mobile-feature-1.png" class="img-responsive"></center>
			</div>
			<div class="col-xs-12 col-sm-3">
				<br />	
				<strong>Descubre la nueva bandeja de entrada </strong>
				<small><p>
					Con las nuevas pestañas personalizables lo controlas todo: de un vistazo sabes qué hay de nuevo y decides qué mensajes leer y cuándo hacerlo. 
					<a href="#">Más información sobre la nueva bandeja de entrada</a>
				</p></small>
			</div>

			<div class="col-xs-12 col-sm-3">
				<center><img src="img/circle-storage.png" class="img-responsive"></center>
			</div>
			<div class="col-xs-12 col-sm-3">
				<br />	
				<strong>Un montón de espacio gratis </strong>
				<small><p>
					Se acabó lo de borrar mensajes para ahorrar espacio: ahora, entre Gmail, Google Drive y Fotos de Google+, dispones de 15 GB en total de almacenamiento gratuito.
					<a href="#"><br>Más información sobre el almacenamiento</a>
				</p></small>
			</div>

		</div>

		<!--Tercer Bloque -->
		<div class="row">
			<div class="col-xs-12 col-sm-3">
				<center><img src="img/work-feature-1.png" class="img-responsive"></center>
			</div>
			<div class="col-xs-12 col-sm-3">
				<br />	
				<strong>Gmail para el trabajo </strong>
				<small><p>
					Consigue un correo electrónico personalizado tipo @tu_empresa.com con calendarios, documentos, videoconferencias y otras funciones al que podrás acceder con tu teléfono o tablet.
					<a href="#">Más información sobre Gmail para el trabajo</a>
				</p></small>
			</div>

			<div class="col-xs-12 col-sm-3">
				<center><img src="img/circle-help.png" class="img-responsive"></center>
			</div>
			<div class="col-xs-12 col-sm-3">
				<br />	
				<strong>¿Necesitas ayuda? </strong>
				<small><p>
					¿Tienes alguna duda sobre Gmail? En el 
					<a href="#"><br>centro de ayuda </a>
					encontrarás las preguntas más frecuentes y muchas sugerencias. 
				</p></small>
			</div>

		</div>
		
	</div>	
	<!--Fin del Cuarto contendedor -->

	<!--Quinto Contenedor-->
	<div>
		<div class="container-fluid well">
			<div class="row">
				<div class="col-xs-12 col-lg-9 col-lg-offset-3">
					<br />

						<small class="pull-left">
							<a href="#" class="enlace-sesion">Nuestra política&nbsp;</a>
							<a href="#" class="enlace-sesion">Ayuda&nbsp;</a>
							<a href="#" class="enlace-sesion">Para empresas&nbsp;</a>
							<a href="#" class="enlace-sesion">Para dispositivos moviles&nbsp;</a>							
						</small>

						<a href="#" class="full left"><img src="img/gplus.jpg" class="img-responsive"></a>
						<br />
				</div>
			</div>
		</div>
	</div>
	<!--Fin del quinto contenerdor -->.

	<!--Sexto Contenedor -->
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-5 col-sm-push-7 col-md-3 col-md-push-9 col-lg-3 col-lg-push-8">
				<a class="pull-left" href="#">
					<img class="media-object img-responsive" src="img/hl.jpg" alt="Idioma">
				</a>
				<select onchange="var href=this[this.selectedIndex].value;if(href!=''){window.location.href=href};">
					<option value="/intl/id/mail/help/about.html"> Bahasa Indonesia </option>
					<option value="/intl/ms/mail/help/about.html"> Bahasa Melayu </option>
					<option value="/intl/ca/mail/help/about.html"> Català </option>
					<option value="/intl/cs/mail/help/about.html"> Čeština </option>
					<option value="/intl/da/mail/help/about.html"> Dansk </option>
					<option value="/intl/de/mail/help/about.html"> Deutsch </option>
					<option value="/intl/et/mail/help/about.html"> Eesti </option>
					<option value="/intl/en/mail/help/about.html"> English </option>
					<option value="/intl/en_us/mail/help/about.html"> English – United States </option>
					<option value="/intl/es/mail/help/about.html" selected=""> Español </option>
					<option value="/intl/es-419/mail/help/about.html"> Español (Latinoamérica) </option>
					<option value="/intl/eu/mail/help/about.html"> Euskara </option>
					<option value="/intl/fil/mail/help/about.html"> Filipino </option>
					<option value="/intl/tl/mail/help/about.html"> Filipino </option>
					<option value="/intl/fr/mail/help/about.html"> Français </option>
					<option value="/intl/hr/mail/help/about.html"> Hrvatski </option>
					<option value="/intl/is/mail/help/about.html"> Íslenska </option>
					<option value="/intl/it/mail/help/about.html"> Italiano </option>
					<option value="/intl/sw/mail/help/about.html"> Kiswahili </option>
					<option value="/intl/lv/mail/help/about.html"> Latviešu </option>
					<option value="/intl/lt/mail/help/about.html"> Lietuvių </option>
					<option value="/intl/hu/mail/help/about.html"> Magyar </option>
					<option value="/intl/nl/mail/help/about.html"> Nederlands </option>
					<option value="/intl/no/mail/help/about.html"> Norsk </option>
					<option value="/intl/pl/mail/help/about.html"> Polski </option>
					<option value="/intl/pt-BR/mail/help/about.html"> Português (Brasil) </option>
					<option value="/intl/pt-PT/mail/help/about.html"> Português (Portugal) </option>
					<option value="/intl/ro/mail/help/about.html"> Română </option>
					<option value="/intl/sk/mail/help/about.html"> Slovenčina </option>
					<option value="/intl/sl/mail/help/about.html"> Slovenščina </option>
					<option value="/intl/fi/mail/help/about.html"> Suomi </option>
					<option value="/intl/sv/mail/help/about.html"> Svenska </option>
					<option value="/intl/vi/mail/help/about.html"> Tiếng Việt </option>
					<option value="/intl/tr/mail/help/about.html"> Türkçe </option>
					<option value="/intl/el/mail/help/about.html"> Ελληνικά </option>
					<option value="/intl/bg/mail/help/about.html"> Български </option>
					<option value="/intl/ru/mail/help/about.html"> Русский </option>
					<option value="/intl/sr/mail/help/about.html"> Српски </option>
					<option value="/intl/uk/mail/help/about.html"> Українська </option>
					<option value="/intl/iw/mail/help/about.html"> ‫עברית‬ </option>
					<option value="/intl/ur/mail/help/about.html"> ‫اردو‬ </option>
					<option value="/intl/ar/mail/help/about.html"> ‫العربية‬ </option>
					<option value="/intl/fa/mail/help/about.html"> ‫فارسی‬ </option>
					<option value="/intl/am/mail/help/about.html"> አማርኛ </option>
					<option value="/intl/mr/mail/help/about.html"> मराठी </option>
					<option value="/intl/hi/mail/help/about.html"> हिन्दी </option>
					<option value="/intl/bn/mail/help/about.html"> বাংলা </option>
					<option value="/intl/gu/mail/help/about.html"> ગુજરાતી </option>
					<option value="/intl/or/mail/help/about.html"> ଓଡ଼ିଆ </option>
					<option value="/intl/ta/mail/help/about.html"> தமிழ் </option>
					<option value="/intl/te/mail/help/about.html"> తెలుగు </option>
					<option value="/intl/kn/mail/help/about.html"> ಕನ್ನಡ </option>
					<option value="/intl/ml/mail/help/about.html"> മലയാളം </option>
					<option value="/intl/th/mail/help/about.html"> ไทย </option>
					<option value="/intl/ko/mail/help/about.html"> 한국어 </option>
					<option value="/intl/zh-CN/mail/help/about.html"> 中文（简体中文） </option>
					<option value="/intl/zh-TW/mail/help/about.html"> 中文（繁體中文） </option>
					<option value="/intl/ja/mail/help/about.html"> 日本語 </option>
				</select>
			</div>
			<div class="col-xs-12 col-sm-5 col-sm-pull-5 col-md-5 col-md-pull-3 col-lag-4 col-lag-pull-2">
				<small>
					<a class="menu-footer"href="#">Google -	&nbsp;</a>
					<a class="menu-footer"href="#">Acerca de Google - &nbsp;</a>
					<a class="menu-footer"href="#">Privacidad y Condiciones &nbsp;</a>
				</small>
				<br /><br />
			</div>
		</div>
	</div>
	<script src="js/jquery.js"></script>	
	<script src="js/bootstrap.js"></script>	
</body>
</html>