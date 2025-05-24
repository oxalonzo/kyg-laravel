<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

       
    </head>
    <body >

        <div id="preloader">
            <div class="preload-content">
              <img src="/img/logok.png" alt="Logo" class="preload-img">
              <p class="preload-text">K&amp;G</p>
            </div>
          </div>
          
          <div id="main-content" style="display: none;">
            <!-- Tu contenido real aquí -->
            <h1 style="color: white;">Contenido principal</h1>
          </div>
          
          <style>
            body, html {
              margin: 0;
              padding: 0;
              height: 100%;
              background: black;
              overflow: hidden;
              font-family: sans-serif;
            }
          
            #preloader {
              position: fixed;
              inset: 0;
              background: white;
              display: flex;
              align-items: center;
              justify-content: center;
              z-index: 9999;
            }
          
            .preload-content {
              display: flex;
              align-items: center;
              gap: 1px;
            }
          
            .preload-img {
              width: 300px;
              height: auto;
            }
          
            .preload-text {
              color: black;
              font-weight: bold;
              font-size: 2rem;
              margin: 0;
            }
          </style>
          
          <script>
            // Simula carga de 3 segundos y luego muestra el contenido
            window.addEventListener('load', () => {
              setTimeout(() => {
                document.getElementById('preloader').style.display = 'none';
                document.getElementById('main-content').style.display = 'block';
              }, 3000); // 3 segundos
            });
          </script>
          

    </body>
</html>
