<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv=""X-UA-Compatible* content="ie-edge">
    <title>@yield('pestaña', 'Friki Plaza')</title>
	<link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@400;600;700&display=swap" rel="stylesheet">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

	<style>

    body {
  background-image: url('{{ asset('img/afuera.jpeg') }}');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        background-attachment: fixed;
        min-height: 100vh;
        margin: 0;
        position: relative;
    }

    body::before {
        content: "";
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.60);
        backdrop-filter: blur(8px);
        -webkit-backdrop-filter: blur(8px);
        z-index: -1;
    }

    .titulo {
        padding-top: .75rem;
        padding-bottom: .75rem;
        background-color: rgba(223, 190, 159, 0.85);
        color: white;
        text-align: center;
        font-family: 'Fredoka', sans-serif;
        font-size: xx-large;
        font-weight: bold;
        border: 1px solid rgba(39, 41, 43, 0.1);
    }

    .navbar {
        background-color: rgba(143, 114, 86, 0.9) !important;
    }

    /* CONTENEDOR PRINCIPAL DE LA IMAGEN */
    .contenedor-imagen {
        position: relative;
        width: 90%;
        max-width: 600px;
        margin: 30px auto;
        display: block;
    }

    .contenedor-imagen img {
        width: 100%;
        height: auto;
        display: block;
        border-radius: 20px;
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.5);
    }

    .texto {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 80%;
        
        font-family: 'Fredoka', cursive, sans-serif;
        font-size: clamp(0.9rem, 3vw, 1.6rem);
        font-weight: 700;
        color: #ffffff;
        text-align: center;
        text-shadow: 2px 2px 0px #e9a323, -2px -2px 0px #e9a323, 2px -2px 0px #e9a323, -2px 2px 0px #e9a323;
        
        background: rgba(0, 0, 0, 0.55);
        padding: 12px 15px;
        border-radius: 20px;
        backdrop-filter: blur(4px);
        border: 2px solid rgba(255, 255, 255, 0.5);
        box-sizing: border-box;
    }

    .texto-kawaii span {
        font-size: clamp(0.7rem, 2vw, 1rem);
        display: block;
        margin-top: 5px;
        font-weight: 400;
    }

	</style>
</head>


<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <!-- Brand / Logo -->
    <a class="navbar-brand" href="#">MyBrand</a>

    <!-- Mobile Hamburger Button -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Collapsible Links -->
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Features</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Pricing</a>
        </li>
        @yield('titulo')
     @yield('contenido')
      </ul>
    </div>
  </div>
</nav>

	

	<div class="contenedor-imagen">
    <img src="{{asset('img/afuera.jpeg')}}"alt="">
    <div class="texto">
        FrikiPlaza<br>
        <span>Centro asociativo de grupos de gente con gustos en común</span>
    </div>
</div>


	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
		crossorigin="anonymous"></script>
</body>

</html>