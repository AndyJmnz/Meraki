<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Servicios - Grupo Meraki</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Albert+Sans:wght@100;200;300;400;500;600;700&display=swap" rel="stylesheet">
    
    <style>
        :root {
            --primary-green: #5a6b5e;
            --light-green: #7a8b7e;
            --text-gray: #666;
            --light-bg: #f5f5f5;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Albert Sans', sans-serif;
            background-color: var(--light-bg);
            overflow-x: hidden;
        }

        /* NAVEGACIÓN */
        .navbar {
            background-color: rgba(245, 245, 245, 0.95) !important;
            backdrop-filter: blur(10px);
            padding: 1.5rem 0;
            box-shadow: 0 2px 10px rgba(0,0,0,0.05);
        }

        .nav-pill {
            text-decoration: none;
            color: var(--text-gray);
            padding: 10px 20px;
            border: 1px solid #999;
            border-radius: 25px;
            font-size: 11px;
            text-transform: uppercase;
            letter-spacing: 1px;
            transition: all 0.3s ease;
            font-weight: 400;
            margin: 0 5px;
            display: inline-block;
        }

        .nav-pill:hover,
        .nav-pill.active {
            background-color: var(--primary-green);
            color: white;
            border-color: var(--primary-green);
        }

        .logo-nav {
            width: 50px;
            height: 50px;
        }

        /* HERO SECTION SERVICIOS */
        .hero-servicios {
            position: relative;
            height: 100vh;
            max-height: 800px;
            display: flex;
            align-items: center;
            justify-content: flex-end;
            overflow: hidden;
            background: linear-gradient(135deg, #f5f5f5 0%, #e8e8e8 100%);
        }

        .hero-servicios::before {
            content: '';
            position: absolute;
            left: 0;
            top: 0;
            width: 50%;
            height: 100%;
            background: url('img/arquitectura-moderna.jpg') center/cover;
            filter: grayscale(100%);
            opacity: 0.9;
        }

        .hero-image-left {
            position: absolute;
            left: 0;
            top: 0;
            width: 45%;
            height: 100%;
            overflow: hidden;
            z-index: 3;
            display: block;
        }

        .hero-image-left img {
            display: block;
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: left center;
        }

        .hero-content-servicios {
            position: relative;
            z-index: 2;
            text-align: right;
            padding: 0 5% 20px;
            margin-left: 22%;
            width: 80%;
            display: flex;
            flex-direction: column;
            align-items: flex-end;
            margin-top: auto;
        }

        .hero-title-servicios {
            font-size: clamp(55px, 15vw, 122px);
            font-weight: 200;
            letter-spacing: 0.05em;
            line-height: 0.95;
            color: #333;
            margin-bottom: 25px;
            text-align: right;
            max-width: 900px;
        }

        .hero-subtitle-servicios {
            font-size: clamp(12px, 1.5vw, 16px);
            font-weight: 300;
            color: var(--text-gray);
            text-transform: uppercase;
            letter-spacing: 1.5px;
            margin-bottom: 25px;
            text-align: right;
            max-width: 600px;
        }

        .btn-conoce-mas {
            padding: 12px 30px;
            margin-bottom: 20px;
            background-color: var(--light-green);
            color: white;
            border-radius: 25px;
            font-size: 11px;
            text-transform: uppercase;
            letter-spacing: 1px;
            transition: all 0.3s ease;
            border: none;
            text-decoration: none;
            display: inline-block;
        }

        .btn-conoce-mas:hover {
            background-color: var(--primary-green);
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0,0,0,0.2);
            color: white;
        }

        /* SERVICIOS GRID */
        .servicios-section {
            padding: 80px 0;
            padding-left: 50px;
            background-color: white;
        }

        .servicio-card {
            position: relative;
            padding: 30px 25px;
            margin: 20px 0 40px;
            transition: all 0.4s ease;
            border-radius: 0;
            height: 100%;
        }

        .col-servicio {
            display: flex;
        }

        .col-servicio .servicio-card {
            width: 100%;
        }

        .servicio-title {
            font-size: clamp(18px, 2.5vw, 24px);
            font-weight: 600;
            color: #333;
            margin-bottom: 15px;
            text-align: center;
        }

        .servicio-description {
            font-size: clamp(14px, 1.8vw, 16px);
            font-weight: 300;
            color: var(--text-gray);
            line-height: 1.6;
            text-align: center;
        }

        .servicio-icon {
            width: 50px;
            height: 50px;
            margin: 0 auto 15px;
            display: block;
            filter: grayscale(100%);
            transition: all 0.3s ease;
        }

        .servicio-card:hover .servicio-icon {
            filter: grayscale(0%);
            transform: scale(1.1);
        }

        .servicios-destacados {
            position: relative;
            display: flex;
            align-items: center;
            justify-content: flex-end;
            background: linear-gradient(120deg, #f4f7f6 0%, #e7f1ef 100%);
            overflow: hidden;
            padding: 120px 0;
        }

        /* Imagen lateral (similar a portada) */
        .imagen-lateral {
            position: absolute;
            left: 0;
            top: 0;
            width: 50%;
            height: 100%;
            overflow: hidden;
            clip-path: polygon(0 0, 85% 0, 100% 100%, 0 100%);
        }

        .imagen-lateral img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: center;
            filter: brightness(85%);
            transition: transform 0.5s ease;
        }


        /* Contenido a la derecha */
        .contenido-servicios {
            position: relative;
            z-index: 2;
            width: 50%;
            padding-left: 80px;
            padding-right: 5%;
        }

        /* Tarjetas traslapadas */
        .contenido-servicios .servicio-card {
            padding: 40px 30px;
            position: relative;
            transition: all 0.3s ease;
            background: #edf4f2;
        }

        .contenido-servicios .card-uno {
            transform: translateY(10px);
            transform: translateX(-100px);
            z-index: 3;
        }

        .contenido-servicios .card-dos {
            margin-top: 20px; /* traslape */
            transform: translateX(90px);
            z-index: 2;
        }

        /* IMAGEN LATERAL DE SERVICIOS */
        .hero-image-right {
            display: block;
            width: 100%;
            height: 100%;
            min-height: 700px;
            overflow: hidden;
            position: sticky;
            top: 80px;
        }

        .hero-image-right img {
            display: block;
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: center;
        }

        .hero-image-right-wrapper {
            padding: 0 !important;
            margin: 0 !important;
        }

        /* SECCIONES CON IMAGEN */
        .imagen-section {
            position: relative;
            min-height: 500px;
            display: flex;
            align-items: center;
            margin: 60px 0;
            overflow: hidden;
        }

        .imagen-bg {
            position: absolute;
            width: 60%;
            height: 100%;
            background-size: cover;
            background-position: center;
            filter: grayscale(100%);
            transition: all 0.5s ease;
        }

        .imagen-bg.left {
            left: 0;
            clip-path: polygon(0 0, 85% 0, 100% 100%, 0 100%);
        }

        .imagen-bg.right {
            right: 0;
            clip-path: polygon(15% 0, 100% 0, 100% 100%, 0 100%);
        }

        .imagen-section:hover .imagen-bg {
            filter: grayscale(0%);
        }

        .content-box {
            position: relative;
            z-index: 2;
            background-color: rgba(255, 255, 255, 0.95);
            padding: 50px;
            max-width: 500px;
            backdrop-filter: blur(10px);
        }

        .content-box.right {
            margin-left: auto;
        }

        .content-title {
            font-size: clamp(24px, 4vw, 36px);
            font-weight: 600;
            color: #333;
            margin-bottom: 20px;
            text-align: center;
        }

        .content-text {
            font-size: clamp(14px, 1.8vw, 16px);
            font-weight: 300;
            color: var(--text-gray);
            line-height: 1.7;
            text-align: justify;
        }

        /* SERVICIOS ADICIONALES */
        .servicios-adicionales {
            padding: 80px 0 10px 0;
            background:#fff;
        }

        .servicios-adicionales .wrap-servicios {
            display: grid;
            gap: 40px 40px;
        }

        .edificio-image-right {
            width: 100%;
            height: 100%;
            min-height: 650px;
            overflow: hidden;
        }
        .edificio-image-right img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: center;
            display:block;
        }

        @media (min-width:992px) {
            .servicios-adicionales .layout {
                display:grid;
                grid-template-columns: 1fr 40vw; /* servicios | imagen */
                align-items:start;
                gap:60px;
            }
            .servicios-adicionales .wrap-servicios {
                grid-template-columns: repeat(2,minmax(0,1fr));
            }
            .servicios-adicionales .servicio-item {
                margin:0;
                background:transparent;
                border-left: 2px solid var(--light-green);
                padding: 30px 0 0 0;
            }
        }

        @media (max-width:991.98px) {
            .servicios-adicionales .layout {
                display:block;
            }
            .servicios-adicionales .wrap-servicios {
                display:block;
                padding:30px, 0, 0,0;
            }
            .servicios-adicionales .servicio-item {
                margin-bottom:35px;
                background: #fff;
                border-left: 2px solid var(--light-green);
            }
            .edificio-image-right {
                min-height: auto;
                height:auto;
                margin-top:10px;
            }
            .edificio-image-right img {
                height:auto;
                object-fit:contain;
                max-width:420px;
                margin:0 auto;
                display:block;
            }
        }

        /* Sección servicio extra (el 5° separado) */
        .servicio-extra {
            padding: 32px 0 8px; /* menos arriba y casi nada abajo */
            margin-bottom: 0;
            background:#f5f5f5;
        }
        .servicio-extra .servicio-item {
            max-width:900px;
            margin:0 auto;
            border-left:4px solid var(--primary-green);
            background:#fff;
        }

        /* FOOTER */
        .footer {
            position: relative;
            background: linear-gradient(to bottom right, #f5f5f5 0%, #f5f5f5 50%, var(--light-green) 50%, var(--light-green) 100%);
            padding: 60px 0;
            overflow: hidden;
            border-top: 3px solid var(--primary-green);
        }

        .footer-logo {
            max-width: 200px;
            margin-bottom: 20px;
        }

        .footer-title {
            font-size: clamp(24px, 4vw, 36px);
            font-weight: 200;
            text-transform: uppercase;
            letter-spacing: 2px;
            margin-bottom: 10px;
        }

        .footer-subtitle {
            font-size: clamp(14px, 2vw, 18px);
            font-weight: 300;
            margin-bottom: 30px;
        }

        .footer-rights {
            font-size: 12px;
            color: #999;
            margin-top: 30px;
        }

        .footer-contact {
            color: #333;
        }

        .footer-contact h4 {
            color: #333;
            font-weight: 500;
            margin-bottom: 15px;
        }

        .footer-contact p {
            margin-bottom: 8px;
            font-size: clamp(12px, 1.5vw, 16px);
            font-weight: 300;
            color: #666;
        }

        .footer-map {
            width: 100%;
            height: 300px;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0,0,0,0.2);
        }

        .footer-map iframe {
            width: 100%;
            height: 100%;
            border: none;
        }

        /* RESPONSIVE */
        @media (max-width: 992px) {
            .hero-servicios {
                flex-direction: column;
                height: auto;
                min-height: 100vh;
                justify-content: flex-start;
                padding-top: 100px;
            }

            .hero-image-left {
                position: relative;
                width: 100%;
                height: 50vh;
                min-height: 400px;
                order: 2;
                z-index: 1;
            }

            .hero-image-left img {
                object-position: left center;
            }

            .hero-content-servicios {
                order: 1;
                width: 100%;
                max-width: 100%;
                text-align: center;
                padding: 40px 5%;
                margin: 0;
                align-items: center;
            }

            .hero-title-servicios {
                text-align: center;
            }

            .hero-subtitle-servicios {
                text-align: center;
            }

            .hero-image-right {
                height: auto;
                position: relative;
                min-height: auto;
            }
            
            .hero-image-right img {
                object-fit: contain;
                max-height: 60vh;
                width: 100%;
                height: auto;
            }

            .imagen-bg {
                width: 100%;
                clip-path: none !important;
                opacity: 0.3;
            }

            .content-box {
                max-width: 100%;
                margin: 20px;
            }

            .footer {
                background: #f5f5f5;
            }

            .footer-logo {
                display: block;
                margin-left: auto;
                margin-right: auto;
            }

            .footer-title,
            .footer-subtitle {
                text-align: center;
            }

            .footer-rights {
                text-align: center;
            }

            .footer-contact {
                background-color: var(--light-green);
                padding: 30px;
                border-radius: 10px;
                margin-top: 30px;
                color: white;
            }

            .footer-contact h4 {
                color: white;
            }

            .footer-contact p {
                color: white;
            }
        }

        @media (max-width: 768px) {
            .servicio-card {
                padding: 30px 20px;
            }

            .servicios-section {
                padding: 50px 0;
            }

            .servicios-adicionales {
                padding: 50px 0 10px 0;
            }

            .content-box {
                padding: 30px 20px;
            }
           /* aún menos espacio en móvil */
           .servicio-extra { padding: 20px 0 4px; }
        }

        /* Imagen pluma en móvil, entre cards */
.pen-mobile { display: none; }

@media (max-width: 991.98px) {
  /* ocultar la imagen grande derecha en móvil */
  .hero-image-right-wrapper, .hero-image-right { display: none !important; }

  .pen-mobile {
    display: block;
    width: 100vw;          /* tamaño moderado */
    max-width: 1000px;
    margin: 10px -12px 20px auto; /* empuja a la orilla derecha (ajusta -12px si ves borde) */
  }
  .pen-mobile img {
    display: block;
    width: 100%;
    height: auto;
    object-fit: contain;
  }

  /* DESTACADOS: imagen arriba a pantalla completa y servicios abajo */
  .servicios-destacados {
    display: block;
    padding: 0;                 /* sin padding para que la imagen llene */
    background: #edf4f2;        /* fondo neutro debajo de la imagen */
  }

  .servicios-destacados .imagen-lateral {
    position: relative;         /* saca del absoluto */
    left: auto;
    top: auto;
    width: 100%;
    height: 85vh;               /* casi pantalla completa */
    max-height: 100svh;         /* soporta iOS/Android barras dinámicas */
    min-height: 70vh;
    clip-path: none;            /* sin recortes */
    overflow: hidden;
  }

  .servicios-destacados .imagen-lateral img {
    width: 100%;
    height: 100%;
    object-fit: cover;          /* llena sin deformar */
    object-position: center;
    transform: none;
    filter: brightness(90%);
  }

  .servicios-destacados .contenido-servicios {
    width: 100%;
    padding: 20px 16px 32px;    /* servicios abajo con aire */
  }

  .servicios-destacados .contenido-servicios .servicio-card {
    padding: 24px 20px;
    margin: 12px 0;
    transform: none !important; /* quitar traslapes de desktop */
  }

  .servicios-destacados .contenido-servicios .card-uno,
  .servicios-destacados .contenido-servicios .card-dos {
    transform: none !important;
    z-index: 1;
  }
}

.servicio-card,
.servicios-adicionales .servicio-item,
.servicio-extra .servicio-item {
  background: #fff;
  border-left: none !important;
}
    </style>
</head>
<body>
    <!-- NAVEGACIÓN -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top">
        <div class="container-fluid px-4">
            <a class="navbar-brand" href="index.php">
                <img src="img/LogoSinNombre.png" alt="Logo" class="logo-nav">
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a href="index.php" class="nav-link nav-pill">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="servicios.php" class="nav-link nav-pill active">Servicios</a>
                    </li>
                    <li class="nav-item">
                        <a href="proyectos.php" class="nav-link nav-pill">Proyectos</a>
                    </li>
                    <li class="nav-item">
                        <a href="contacto.php" class="nav-link nav-pill">Contacto</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- HERO SECTION -->
    <section class="hero-servicios">
        <!-- Imagen a la izquierda -->
        <div class="hero-image-left">
            <img src="img/portadaServicios.png" alt="Arquitectura moderna">
        </div>
        
        <!-- Contenido a la derecha -->
        <div class="hero-content-servicios">
            <p class="hero-subtitle-servicios">Donde la creatividad se encuentra con<br>la funcionalidad,nacen nuevas posibilidades</p>
            <a href="#servicios" class="btn-conoce-mas">Conoce más</a>
            <h1 class="hero-title-servicios">IT ALL BEGINS<br>WITH AN IDEA</h1>
        </div>
    </section>

    <!-- SERVICIOS PRINCIPALES -->
    <section class="servicios-section" id="servicios">
        <div class="container-fluid px-0">
            <div class="row g-0">
                <!-- Columna izquierda: Servicios (70%) -->
                <div class="col-lg-7">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-servicio">
                                <div class="servicio-card">
                                    <h3 class="servicio-title">Consultoría en Desarrollo<br>de Proyectos Inmobiliarios.</h3>
                                    <p class="servicio-description">Asesoría integral desde la conceptualización del proyecto hasta su ejecución.</p>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6 col-servicio">
                                <div class="servicio-card">
                                    <h3 class="servicio-title">Gestión de Inversores.</h3>
                                    <p class="servicio-description">Atracción y administración de inversionistas para proyectos inmobiliarios.</p>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6 col-servicio">
                                <div class="servicio-card">
                                    <h3 class="servicio-title">Estudios de Impacto<br>Ambiental–de tránsito.</h3>
                                    <p class="servicio-description">Análisis del impacto ambiental y estudios de tráfico cumpliendo con las normativas locales.</p>
                                </div>
                            </div>

                            <!-- Imagen pluma entre cards (solo móvil) -->
                            <div class="col-12 d-lg-none">
                                <div class="pen-mobile">
                                    <img src="img/pluma.png" alt="Pluma servicios">
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6 col-servicio">
                                <div class="servicio-card">
                                    <h3 class="servicio-title">Análisis de pre–viabilidad<br>financiera.</h3>
                                    <p class="servicio-description">Pre-Evaluación financiera, técnica y de mercado para asegurar el éxito del desarrollo.</p>
                                </div>
                            </div>

                            <div class="col-12 col-servicio">
                                <div class="servicio-card">
                                    <h3 class="servicio-title">Gestión de Financiamiento.</h3>
                                    <p class="servicio-description">Asesoramiento en la obtención de créditos, financiamiento y estructuración financiera.</p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <!-- Columna derecha: Imagen grande (30%) -->
                <div class="col-lg-5 p-0 m-0 d-none d-lg-block">
                    <div class="hero-image-right w-100 h-100">
                        <img src="img/pluma.png" alt="Imagen servicios">
                    </div>
                </div>
            </div>

    </section>

    <!-- Sección de Servicios Adicionales -->
    <section class="servicios-destacados">
        <div class="imagen-lateral">
            <img src="img/grua2.png" alt="Imagen de servicios adicionales">
        </div>

        <div class="contenido-servicios">
            <div class="servicio-card card-uno">
                <h3 class="servicio-title">Planeación Urbana y Diseño<br>Arquitectónico.</h3>
                <p class="servicio-description">Desarrollo de propuestas arquitectónicas y <br>urbanísticas que maximicen <br>el uso del espacio.</p>
            </div>

            <div class="servicio-card card-dos">
                <h3 class="servicio-title">Proyectos de Ingeniería y<br>Construcción.</h3>
                <p class="servicio-description">Dirección y supervisión de obras,<br>incluyendo la contratación de proveedores y <br> constructores.</p>
            </div>
        </div>
    </section>


    <!-- SERVICIOS ADICIONALES -->
    <section class="servicios-adicionales">
        <div class="container">
            <div class="layout">
                <!-- 4 servicios a la izquierda -->
                <div class="wrap-servicios">
                    <div class="servicio-item">
                        <h3 class="servicio-title">Gestión 360</h3>
                        <p class="servicio-description">Con sede en Guadalajara, contamos con una red de aliados comerciales que nos ayudan a gestionar cada aspecto para un desarrollo inmobiliario.</p>
                    </div>
                    <div class="servicio-item">
                        <h3 class="servicio-title">Administración de Propiedades</h3>
                        <p class="servicio-description">Gestión integral de inmuebles, incluyendo mantenimiento, arrendamiento y cobro de rentas.</p>
                    </div>
                    <div class="servicio-item">
                        <h3 class="servicio-title">Asesoría Jurídica</h3>
                        <p class="servicio-description">Servicios legales especializados en contratos de compra-venta, arrendamiento y regularización de propiedades.</p>
                    </div>
                    <div class="servicio-item">
                        <h3 class="servicio-title">Evaluación y Tasación de Propiedades + Opiniones de valor</h3>
                        <p class="servicio-description">Valoración de terrenos y construcciones para el correcto posicionamiento en el mercado.</p>
                    </div>
                    <!-- Imagen edificio (en desktop a la derecha; en móvil queda al final centrada) -->
                    <div class="edificio-image-right d-lg-none mt-3">
                        <img src="img/edificio.png" alt="Edificio">
                    </div>
                </div>
                <!-- Imagen derecha solo desktop -->
                <div class="edificio-image-right d-none d-lg-block">
                    <img src="img/edificio.png" alt="Edificio">
                </div>
            </div>
        </div>
    </section>

    <!-- Sección separada para el 5° servicio restante -->
    <section class="servicio-extra" style="background: #edf4f2;">
        <div class="container-fluid px-0">
            <div class="row g-0 align-items-center">
                <!-- Contenido (aparece primero en móvil, a la derecha en escritorio) -->
                <div class="col-12 col-lg-6 order-1 order-lg-2 d-flex align-items-center justify-content-center px-4 px-lg-5 py-5">
                    <div class="servicio-item" style="background:#edf4f2;border-left:none;padding:40px;max-width:900px;width:100%;">
                        <h3 class="servicio-title text-center">Comercialización de Inmuebles</h3>
                        <p class="servicio-description text-center">Estrategias de marketing, ventas y promoción de los desarrollos inmobiliarios.</p>
                    </div>
                </div>

                <!-- Imagen (grande en escritorio a la izquierda; en móvil queda abajo, full-width sin márgenes) -->
                <div class="col-12 col-lg-6 order-2 order-lg-1 px-0">
                    <img src="img/edificios.png" alt="Edificios" style="display:block;width:100%;height:100%;min-height:520px;object-fit:cover;">
                </div>
            </div>
        </div>

        <style>
            /* Asegura que en móvil la imagen ocupe todo el ancho sin márgenes y que la tarjeta luzca igual que el fondo */
            @media (max-width: 991.98px) {
                .servicio-extra .servicio-item { padding: 24px 16px; }
                .servicio-extra img { min-height: auto; height: auto; object-fit: contain; }
            }
            @media (min-width: 992px) {
                .servicio-extra img { min-height: 520px; }
            }
        </style>
    </section>

    <!-- FOOTER -->
    <footer class="footer">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4 mb-4 mb-lg-0">
                    <img src="img/LogoSinNombre.png" alt="Grupo Meraki" class="footer-logo">
                    <h3 class="footer-title">GRUPO <strong>MERAKI</strong></h3>
                    <p class="footer-subtitle">Made with passion</p>
                    <p class="footer-rights">Todos los derechos reservados</p>
                </div>

                <div class="col-lg-4 mb-4 mb-lg-0">
                    <div class="footer-contact">
                        <h4>Ubicación:</h4>
                        <p>Correo@gmail.com</p>
                        <p>Tel: +52 (33) 15847256</p>
                        <p>Torre Cube 2, Av. Paseo</p>
                        <p>Royal Country 4596, Puerta</p>
                        <p>de Hierro, Zapopan, Jal.</p>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="footer-map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3732.248558245956!2d-103.4304896!3d20.685847!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8428ae8b8b8b8b8b%3A0x8b8b8b8b8b8b8b8b!2sTorre%20Cube%202!5e0!3m2!1ses!2smx!4v1234567890" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>