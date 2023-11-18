<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <link rel="stylesheet" href="consultas.css">
    <link rel="shortcut icon" href="../../Images/CONSULTORIO SANTA APOLONIA.png">
    <script src="https://kit.fontawesome.com/5abdef1bef.js" crossorigin="anonymous"></script>
    <script defer src="app.js"></script>
    <title>Consultas</title>
</head>

<header class="header">

    <h1 class="h1">
        <a href="../index.html">
            <img class="img" src="../../Images/CONSULTORIO SANTA APOLONIA.png" alt="">
        </a> 
    </h1>

    <button class="button">
        <svg class="svg" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M4.5 11.5A.5.5 0 0 1 5 11h10a.5.5 0 0 1 0 1H5a.5.5 0 0 1-.5-.5zm-2-4A.5.5 0 0 1 3 7h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm-2-4A.5.5 0 0 1 1 3h10a.5.5 0 0 1 0 1H1a.5.5 0 0 1-.5-.5z"/>
        </svg>
    </button>

    <nav class="nav">
        <ul class="ul">
            <li class="li"> <i class="fas fa-user-friends"></i><a href="#"class="a" >Servicios</a></li>
            <li class="li"> <i class="fa-solid fa-message"></i><a href="PHP/consultas.php"class="a" >Consultas</a></li>
            <li class="li"> <i class="fa-solid fa-location-dot"></i><a href="localizacion.html"class="a">Localización</a></li>
        </ul>
    
    </nav>
</header>

<body>
    <div class="titulo">
        <h2 id="tit">Consultas</h2>
    </div>

    <h3 class="h3">Escribenos un correo para que puedas aclarar tus dudas o reservar una consulta</h3>
    
    <section class="container">
        
    <div class="formulario">
        <form action="correo.php" method="post"><!-- Reemplaza "enviar_correo.php" con la acción del formulario en tu servidor -->
          <input type="text" class="nombre" placeholder="Nombre" id="nombre" name="nombre" required>
    
          <input type="tel" class="telefono" placeholder="Télefono" id="telefono" name="telefono" required>
    
          <input type="email" class="correo" placeholder="Correo Electronico" id="correo" name="correo" required>
    
          <input type="text" class="asunto" placeholder="Asunto" id="asunto" name="asunto" required>
    
          <textarea id="mensaje" placeholder="Contenido o Mensaje" name="mensaje" required></textarea>
    
          <button type="submit" name="enviar">Enviar</button>
        </form>
      </div>

    </section>

    <script>
        function validarSoloLetras(input) {
          // Eliminar caracteres no alfabéticos
          input.value = input.value.replace(/[^a-zA-Z]/g, '');
        }

        function validarSoloNumeros(input) {
        // Eliminar caracteres no numéricos
        input.value = input.value.replace(/\D/g, '');
        }
    </script>

    <button id="btnVolverArriba"><i class="fa-solid fa-arrow-up"></i></button>

    <script src="script.js"></script> <!-- Agrega un archivo JavaScript para manejar el comportamiento del botón -->

    <footer class="footer">
        <p>COPYRIGHT © 2023 CONSULTORIO SANTA APOLONIA ALL RIGHTS RESERVED</p>
    </footer>

    <?php
    include("correo.php");
    ?>


    
</body>
</html>