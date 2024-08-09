

<!DOCTYPE html>
<html lang="es">
<head>
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
<link href="https://fonts.googleapis.com/css2?family=Kanit:wght@500&family=Signika:wght@700&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NEXUS</title>
    <style>
        
        #video-container {
            max-width: 400px; /* Ajusta según tus necesidades */
            margin: 20px auto;
            position: relative;
            opacity: 70%;
        }

        #scan-message {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            display: none;
            font-size: 18px;
            text-align: center;
        }

        body {
            margin: 0;
            overflow: hidden;
            font-family: 'Arial', sans-serif;
            background-color: #000000; /* Fondo gris claro */
        }
        video {
            position: fixed;
            top: 50%;
            left: 50%;
            min-width: 100%;
            min-height: 100%;
            width: auto;
            height: auto;
            transform: translateX(-50%) translateY(-50%);
            z-index: -1;
            opacity: 90%;
          }

          
        #flipbook-container {
            width: 602px;
            height: 860px;
            position: relative;
            perspective: 1000px;
            margin: 50px auto;
        }
        #flipbook {
            width: 100%;
            height: 100%;
            position: absolute;
            transform-style: preserve-3d;
            transition: transform 1s;
        }
        .page {
            width: 100%;
            height: 100%;
            position: absolute;
            backface-visibility: hidden;
            display: flex;
            justify-content: center;
            align-items: center;
            cursor: pointer;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            overflow: hidden;
            transition: transform 0.5s;
        }
        #page1 {
            color: #fff;
        }
        #page2 {
            background: #ecf0f1; /* Gris claro */
            transform: rotateY(180deg);
        }
        #form-container {
            width: 100%;
            height: 100%;
            flex-direction: column;
            align-items: center;
            padding: 20px;
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            box-sizing: border-box;
        }
        h2 {
            color: #1a0241; /* Azul */
        }
        form {
            width: 100%;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        label {
            margin-top: 10px;
            text-align: left;
            font-weight: bold;
            color: #1a0241; /* Azul */
        }
        input {
            width: calc(100% - 20px);
            margin: 5px 0 15px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }
        button {
            width: calc(100% - 20px);
            padding: 12px;
            background-color: #1a0241; /* Azul */
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        button:hover {
            background-color: #1a0241; /* Azul oscuro */
        }
    
    #fondomenu {
        background-color: #0b0218; /* Azul oscuro */
        height: 80px;
        width: 100%;
    }

    #textoregis {
        text-align: center;
font-family: 'Kanit', sans-serif;
font-family: 'Signika', sans-serif;
        position: absolute;
        max-width: 600px;
        top: 150PX;
        left: 25px;
    }

    #minituto{
        position: fixed;
        max-width: 600px;
    }

    #imagentuto{
        position: relative;
        top: 350px;
    }

    #video1{
        opacity: 0.3;
    }



    </style>
</head>
<body>
    <div>
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


    <video id="video1" autoplay loop muted>
        <source src="./mp4/nexusf.mp4" type="video/mp4">
    </video>

<div id="minituto">
    <h1 id="textoregis">Para entrar en la ciudad, necesitas un pasaporte. Aquí está tu primer pasaporte. Haz clic para abrirlo y personalizar tus datos.</h1>
    <img id="imagentuto" src="./img/registro1.png" style="max-width: 100%; max-height: 100%;">
</div>

    <br><br>
<div id="flipbook-container">
    <div id="flipbook">
        <div id="page1" class="page" onclick="openBook()">
            <img src="./img/registro.png" alt="Portada" style="max-width: 100%; max-height: 100%;">
        </div>
        <div id="page2" class="page">
            <div id="form-container">
                <h2>Registro</h2>
                <form method="post" action="procesar_registro.php">
                    <label for="nombre">Nombre:</label>
                    <input type="text" id="nombre" name="nombre" required>

                    <label for="apellido">Correo electronico:</label>
                    <input type="email" id="apellido" name="email" required>

                    <label for="password">Contraseña:</label>
                    <input type="password" id="password" name="password" required>

                    <label for="password">Confirmar Contraseña:</label>
                    <input type="password" id="confirmar_password" name="confirmar_password" required>

                    <button type="submit">Registrarse</button>
                    <br>
                    <br>
                    <button type="button" onclick="submitForm()">Ya tengo una cuenta</button>
                    <br>
                    <br>
                    
                    <button type="button" onclick="closeBook()">Volver</button>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    var isOpen = false;

    function openBook() {
        if (!isOpen) {
            document.getElementById("flipbook").style.transform = "rotateY(-180deg)";
            isOpen = true;
        }
    }

    function closeBook() {
        if (isOpen) {
            document.getElementById("flipbook").style.transform = "rotateY(0deg)";
            isOpen = false;
        }
    }

    // Mostrar el formulario automáticamente al pasar a la segunda página
    document.getElementById("flipbook").addEventListener("transitionend", function () {
        if (document.getElementById("flipbook").style.transform === "rotateY(-180deg)") {
            showForm();
        }
    });

    function showForm() {
        document.getElementById("form-container").style.display = "flex";
    }

    function submitForm() {
        // Aquí puedes agregar lógica para manejar el envío del formulario
        alert("Formulario enviado correctamente");
    }



 ///// JS DE VIDEO
 
    var video = document.getElementById('backgroundVideo');
    video.addEventListener('loadeddata', function() {
        video.play().then(function() {
            video.muted = false;
        });
    });

    // FIN DEL JS DE VIDEO
   

    //VIDEO DE
</script>

</body>
</html>
