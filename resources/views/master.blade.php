<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- 1. Aquí irá el título dinámico de cada página -->
	<title>@yield('titulo', 'Santuario')</title>
	
	<link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@400;600;700&display=swap" rel="stylesheet">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

	<style>
        body {
            background-image: url('https://www.sinaloa360.com/wp-content/uploads/2019/07/santuario-de-culiacan-1568x1045.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            background-attachment: fixed;
            min-height: 100vh;
            margin: 0;
            position: relative;
        }
        /* ... (el resto de tus estilos) ... */
	</style>
</head>

<body>

	<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #8f7256;">
		<div class="container-fluid">
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse"
				data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
				aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav mx-auto mb-2 mb-lg-0">
					<li class="nav-item"><a class="nav-link" href="/">Presentación</a></li>
					<li class="nav-item"><a class="nav-link" href="/caracteristicas">Características</a></li>
					<li class="nav-item"><a class="nav-link" href="/historia">Historia</a></li>
					<li class="nav-item"><a class="nav-link" href="/ubicacion">Ubicación</a></li>
					<li class="nav-item"><a class="nav-link" href="/formulario">Formulario de Opinión</a></li>
				</ul>
			</div>
		</div>
	</nav>

	<!-- 2. AQUÍ SE INYECTARÁ EL CONTENIDO DE CADA PÁGINA -->
	<main>
		@yield('contenido')
	</main>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
		crossorigin="anonymous"></script>
</body>

</html>
