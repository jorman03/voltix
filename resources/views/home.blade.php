<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido </title>
    <style>
        /* Estilos globales */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            background-color: #f4f4f9;
        }

        /* Estilos del contenedor principal */
        .container {
            text-align: center;
            padding: 20px;
        }

        /* Estilos de la barra de navegación */
        .navbar {
            width: 100%;
            background-color: #007bff;
            padding: 10px 0;
            text-align: center;
            color: #fff;
            font-weight: bold;
            position: relative; /* Cambiado a relative para posicionar el menú desplegable */
        }

        /* Estilos del menú */
        .menu {
            display: flex;
            justify-content: center;
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .menu-item {
            margin: 0 15px;
            position: relative; /* Añadido para el menú desplegable */
        }

        .menu-link {
            color: #fff;
            text-decoration: none;
            padding: 8px 15px;
            transition: background-color 0.3s ease;
        }

        .menu-link:hover {
            background-color: #0056b3;
            border-radius: 4px;
        }

        /* Estilos del menú desplegable */
        .dropdown-menu {
            background-color: #ffffff;
            border-radius: 8px;
            padding: 10px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
            min-width: 180px;
            position: absolute;
            top: 100%; /* Cambiado para posicionar debajo del menú */
            right: 0; /* Alineado a la derecha del elemento padre */
            display: none;
            z-index: 1000; /* Asegura que el menú desplegable esté sobre otros elementos */
        }

        .dropdown-item {
            color: #333333;
            padding: 10px;
            border-radius: 4px;
            display: block;
            text-decoration: none;
            transition: background-color 0.3s ease, color 0.3s ease;
            font-weight: 500;
        }

        .dropdown-item:hover {
            background-color: #f0f0f0;
            color: #007bff;
        }

        /* Mostrar menú desplegable en hover */
        .menu-item:hover .dropdown-menu {
            display: block;
        }

        /* Estilos del mensaje de bienvenida */
        h1 {
            font-size: 2.5em;
            color: #333;
        }

        p {
            font-size: 1.2em;
            color: #666;
        }
  /* Contenedor principal */
    .gallery {
            display: flex;
            flex-wrap: wrap;
            max-width: 1600px;
            gap: 70px;
            padding: 50px;
            justify-content:end;
        }

        /* Estilos de cada tarjeta */
        .gallery-item {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
            overflow: hidden;
            width: 300px;
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
            transition: transform 0.3s ease;
        }

        /* Efecto hover para las tarjetas */
        .gallery-item:hover {
            transform: translateY(-8px);
        }

        /* Estilos de la imagen */
        .gallery-item img {
            width: 100%;
            height: 250px;
            object-fit: cover;
        }

        /* Estilos de la descripción */
        .description {
            padding: 20px;
            color: #333;
            font-size: 1.1em;
        }
        /* Responsividad para dispositivos móviles */
        @media (max-width: 768px) {
            .gallery-item {
                width: 48%; /* Dos columnas en pantallas más pequeñas */
            }
        }

        @media (max-width: 480px) {
            .gallery-item {
                width: 100%; /* Una columna en pantallas muy pequeñas */
            }
        }
    </style>
</head>
<body>
    <div class="navbar">
        VOLTIX <br><br>
        <ul class="menu">
            <li class="menu-item"><a class="menu-link" href="#home">Inicio</a></li>
            <li class="menu-item"><a class="menu-link" href="#about">Acerca de</a></li>
            <li class="menu-item"><a class="menu-link" href="#services">Servicios</a></li>
            <li class="menu-item"><a class="menu-link" href="#contact">Contacto</a></li>
            <li class="menu-item">
                <a class="menu-link" href="#">Opciones</a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('logout') }}"
                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </li>
        </ul>
    </div>

    <div class="gallery">
        <div class="gallery-item">
            <img src="https://via.placeholder.com/300" alt="Imagen 1">
            <div class="description">
                <p>Descripción de la imagen 1</p>
            </div>
        </div>
        <div class="gallery-item">
            <img src="https://via.placeholder.com/300" alt="Imagen 2">
            <div class="description">
                <p>Descripción de la imagen 2</p>
            </div>
        </div>
        <div class="gallery-item">
            <img src="https://via.placeholder.com/300" alt="Imagen 3">
            <div class="description">
                <p>Descripción de la imagen 3</p>
            </div>
        </div>
        <div class="gallery-item">
            <img src="https://via.placeholder.com/300" alt="Imagen 4">
            <div class="description">
                <p>Descripción de la imagen 4</p>
            </div>
        </div>
        <div class="gallery-item">
            <img src="https://via.placeholder.com/300" alt="Imagen 5">
            <div class="description">
                <p>Descripción de la imagen 4</p>
            </div>
        </div>
        <div class="gallery-item">
            <img src="https://via.placeholder.com/300" alt="Imagen 6">
            <div class="description">
                <p>Descripción de la imagen 4</p>
            </div>
        </div>
        <div class="gallery-item">
            <img src="https://via.placeholder.com/300" alt="Imagen 7">
            <div class="description">
                <p>Descripción de la imagen 4</p>
            </div>
        </div>
        <div class="gallery-item">
            <img src="https://via.placeholder.com/300" alt="Imagen 8">
            <div class="description">
                <p>Descripción de la imagen 4</p>
            </div>
        </div>
    </div>


    <div class="container">
        <h1>Bienvenido
</body>
</html>
