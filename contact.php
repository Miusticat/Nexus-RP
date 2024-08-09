<!doctype html>
<html lang="es">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Nexus</title>
    <link rel="icon" href="img/favicon.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- animate CSS -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="css/all.css">
    <!-- flaticon CSS -->
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="css/magnific-popup.css">
    <!-- swiper CSS -->
    <link rel="stylesheet" href="css/slick.css">
    <!-- style CSS -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Kanit:wght@500&family=Signika:wght@700&family=Zen+Dots&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Kanit:wght@500&family=Oswald:wght@600&family=Signika:wght@700&family=Zen+Dots&display=swap" rel="stylesheet">

    <style>

        button {
            position: relative;
            left: 380px;
            padding: 15px 25px;
            font-size: 16px;
            font-weight: bold;
            text-transform: uppercase;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: transform 0.2s ease-in-out, box-shadow 0.2s ease-in-out;
          }
      
          button:hover {
            transform: translateY(-3px); /* Mueve el botón hacia arriba cuando se pasa el ratón sobre él */
            box-shadow: 0 6px 8px rgba(0, 0, 0, 0.2);
          }

        section {
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            opacity: 0;
            transition: opacity 0.5s ease;
        }

        section img,
        section div {
            opacity: 0;
            transition: opacity 0.5s ease;
        }

        section img {
            max-width: 60%;
            height: auto;
            border-radius: 8px;
            margin-left: 20px; /* Espacio entre la imagen y el texto */
        }

        body {
            margin: 0;
            padding: 0;
            font-family: 'Arial', sans-serif;
            scroll-behavior: smooth; /* Desplazamiento suave al hacer scroll */
        }


        .section1 {
            background-color: #f4f4f4;
            flex-direction: row-reverse; /* Texto a la izquierda de la imagen */
        }

        .section2 {
            background-color: #1a0241;
            flex-direction: row; /* Texto a la derecha de la imagen */
        }

        .section2 p {
            font-family: 'Oswald', sans-serif;
            font-size: 30px;
            color: #f4f4f4;
        }

        .section2 h2{
            font-family: 'Oswald', sans-serif;
            font-size: 60px;
            color: #f4f4f4;
        }

        .section3 {
            background-color: #230443;
            flex-direction: row-reverse; /* Texto a la izquierda de la imagen */
        }

        .section3 p {
            font-family: 'Oswald', sans-serif;
            font-size: 30px;
            color: #f4f4f4;
        }

        .section3 h2{
            font-size: 50px;
            color: #f4f4f4;
        }

        /* Ajusta la posición de los elementos cuando están visibles */
        section.visible {
            opacity: 1;
            transform: translateX(0);
        }

        /* Estilo adicional para el contenedor del texto */
        .section div {
            flex: 1; /* Hace que el texto ocupe el espacio restante */
        }

        h2,
        p {
            margin: 0; /* Elimina el margen predeterminado para una apariencia más limpia */
        }

        h2 {
            text-align: center;
            font-size: 72px;
            color: #333; /* Color del título */
            margin-bottom: 10px;
        }

        p {
            text-align: center;
            font-size: 30px;
            color: #666; /* Color del texto */
        }

        #fondomenu {
            background-color: #0b0218; /* Azul oscuro */
            height: 80px;
            width: 100%;
            position: fixed;
            top: 0;
            z-index: 1000;
        }

        #tamañoimagen1 {
            width: 55%;
        }

        #tamañoimagen2 {
            width: 50%;
        }

        .fondopantalla {
            background-color: #0b0218;
        }
      </style>
</head>

<body>
    <div class="fondopantalla">
         <!--::header part start::-->
         <header class="main_menu single_page_menu" id="fondomenu">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12">
                        <nav class="navbar navbar-expand-lg navbar-light">
                            <a class="navbar-brand" href="index.php"> <img src="img/logo.png" alt="logo"> </a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse"
                                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                aria-expanded="false" aria-label="Toggle navigation">
                                <span class="menu_icon"><i class="fas fa-bars"></i></span>
                            </button>

                            <div class="collapse navbar-collapse main-menu-item" id="navbarSupportedContent">
                                <ul class="navbar-nav">
                                    <li class="nav-item">
                                        <a class="nav-link" href="index.php">Inicio</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="fighter.php">Servidor</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="contact.php">Redes Sociales</a>
                                    </li>
                                </ul>
                            </div>
                            <a href="login.php" class="btn_1 d-none d-sm-block">Jugar</a>
                        </nav>
                    </div>
                </div>
            </div>
        </header>
        </header>

        <!-- AQUI INICIA LAS SECCIONES-->
        <section class="section section1" id="section1">
            <img id="tamañoimagen1" src="./img/redes1.png" alt="Imagen 1">
            <div>
                <h2>NEXUS</h2>
                <p>
                  Disfruta de nuestro contenido exclusivo en Instagram
                <br>
                @nexus.gtav</p>
            </div>
        </section>

        <!---- PARA DESPUES
        <section class="section section2" id="section2">
            <img id="tamañoimagen2" src="./img/server2.png" alt="Imagen 2">
            <div>
                <h2>Servidor exclusivo para la plataforma RAGEMP.</h2>
                <p>IP: PRÓXIMAMENTE</p>
            </div>
        </section>

        <section class="section section3" id="section3">
            <img src="./img/server3.png" alt="Imagen 3">
            <div>
                <h2>LA AVENTURA INICIA AQUÍ</h2>
                <button>JUGAR</button>
            </div>
        </section>
      -->

        <!--  AQUI TERMINAN LAS SECCIONES-->


    </div>


    <!-- jquery plugins here-->
    <script src="js/jquery-1.12.1.min.js"></script>
    <!-- popper js -->
    <script src="js/popper.min.js"></script>
    <!-- bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- easing js -->
    <script src="js/jquery.magnific-popup.js"></script>
    <!-- swiper js -->
    <script src="js/swiper.min.js"></script>
    <!-- swiper js -->
    <script src="js/masonry.pkgd.js"></script>
    <!-- particles js -->
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <!-- slick js -->
    <script src="js/slick.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/contact.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/jquery.form.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/mail-script.js"></script>
    <!-- custom js -->
    <script src="js/custom.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const sections = document.querySelectorAll('.section');

            const observer = new IntersectionObserver(entries => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        // Oculta todas las secciones
                        sections.forEach(section => {
                            section.style.opacity = 0;
                            section.querySelector('img').style.opacity = 0;
                            section.querySelector('div').style.opacity = 0;
                        });

                        // Muestra la sección activa
                        entry.target.style.opacity = 1;

                        // Muestra la imagen después de un pequeño retraso
                        setTimeout(() => {
                            entry.target.querySelector('img').style.opacity = 1;
                        }, 200);

                        // Muestra el texto después de un retraso mayor
                        setTimeout(() => {
                            entry.target.querySelector('div').style.opacity = 1;
                        }, 600);
                    }
                });
            }, { threshold: 0.5 });

            sections.forEach(section => {
                observer.observe(section);
            });

            // Actualizamos el event listener para manejar el scroll y el desplazamiento suave
            document.addEventListener('scroll', function () {
                sections.forEach(section => {
                    const bounding = section.getBoundingClientRect();
                    if (bounding.top <= window.innerHeight / 2 && bounding.bottom >= window.innerHeight / 2) {
                        // Muestra solo la sección activa
                        section.classList.add('visible');
                    }
                });
            });

            // Agregamos un event listener para el click en los enlaces del menú
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function (e) {
                    e.preventDefault();

                    const targetId = this.getAttribute('href').substring(1);
                    const targetSection = document.getElementById(targetId);

                    targetSection.scrollIntoView({
                        behavior: 'smooth' // Desplazamiento suave
                    });
                });
            });
        });
    </script>
</body>

</html>