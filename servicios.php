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
            height: 200vh;
            max-height: 1000px;
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

        .hero-content-servicios {
            position: relative;
            z-index: 2;
            text-align: right;
            padding: 0 8%;
            max-width: 60%;
        }

        .hero-title-servicios {
            font-size: clamp(60px, 10vw, 120px);
            font-weight: 100;
            letter-spacing: 0.05em;
            line-height: 1;
            color: #333;
            margin-bottom: 20px;
            margin-top: 70px;
        }

        .hero-subtitle-servicios {
            font-size: clamp(14px, 2vw, 18px);
            font-weight: 300;
            color: var(--text-gray);
            text-transform: uppercase;
            letter-spacing: 2px;
            margin-bottom: 30px;
        }

        .btn-conoce-mas {
            padding: 12px 30px;
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
            background-color: white;
        }

        .servicio-card {
            position: relative;
            padding: 40px;
            margin-bottom: 40px;
            transition: all 0.4s ease;
            background-color: var(--light-bg);
            border-radius: 0;
        }

        .servicio-card:hover {
            background-color: white;
            box-shadow: 0 10px 40px rgba(0,0,0,0.1);
            transform: translateY(-5px);
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
            width: 60px;
            height: 60px;
            margin: 0 auto 20px;
            display: block;
            filter: grayscale(100%);
            transition: all 0.3s ease;
        }

        .servicio-card:hover .servicio-icon {
            filter: grayscale(0%);
            transform: scale(1.1);
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
            background-color: var(--light-bg);
            padding: 80px 0;
        }

        .section-title {
            font-size: clamp(36px, 6vw, 56px);
            font-weight: 100;
            text-align: center;
            color: #333;
            margin-bottom: 60px;
            letter-spacing: 0.05em;
        }

        .servicio-item {
            background-color: white;
            padding: 40px;
            margin-bottom: 30px;
            transition: all 0.3s ease;
            border-left: 3px solid transparent;
        }

        .servicio-item:hover {
            border-left-color: var(--light-green);
            box-shadow: 0 5px 20px rgba(0,0,0,0.1);
            transform: translateX(10px);
        }

        .servicio-item-title {
            font-size: clamp(18px, 2.5vw, 22px);
            font-weight: 600;
            color: #333;
            margin-bottom: 10px;
        }

        .servicio-item-description {
            font-size: clamp(14px, 1.8vw, 16px);
            font-weight: 300;
            color: var(--text-gray);
            line-height: 1.6;
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
            .hero-servicios::before {
                width: 100%;
                opacity: 0.3;
            }

            .hero-content-servicios {
                max-width: 100%;
                text-align: center;
                padding: 0 5%;
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
                padding: 50px 0;
            }

            .content-box {
                padding: 30px 20px;
            }
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
        <div class="hero-content-servicios">
            <h1 class="hero-title-servicios">IT ALL BEGINS<br>WITH AN IDEA</h1>
            <p class="hero-subtitle-servicios">Donde la creatividad se encuentra con la funcionalidad,<br>nacen nuevas posibilidades.</p>
            <a href="#servicios" class="btn-conoce-mas">Conoce más</a>
        </div>
    </section>

    <!-- SERVICIOS PRINCIPALES -->
    <section class="servicios-section" id="servicios">
        <div class="container">
            <div class="row">
                <!-- Servicio 1 -->
                <div class="col-lg-4 col-md-6">
                    <div class="servicio-card">
                        <img src="img/pluma.png" alt="Consultoría" class="servicio-icon">
                        <h3 class="servicio-title">Consultoría en Desarrollo<br>de Proyectos Inmobiliarios.</h3>
                        <p class="servicio-description">Asesoría integral desde la conceptualización del proyecto hasta su ejecución.</p>
                    </div>
                </div>

                <!-- Servicio 2 -->
                <div class="col-lg-4 col-md-6">
                    <div class="servicio-card">
                        <img src="img/inversion.png" alt="Gestión" class="servicio-icon">
                        <h3 class="servicio-title">Gestión de Inversores.</h3>
                        <p class="servicio-description">Atracción y administración de inversionistas para proyectos inmobiliarios.</p>
                    </div>
                </div>

                <!-- Servicio 3 -->
                <div class="col-lg-4 col-md-6">
                    <div class="servicio-card">
                        <img src="img/impacto.png" alt="Impacto" class="servicio-icon">
                        <h3 class="servicio-title">Estudios de Impacto<br>Ambiental–de tránsito.</h3>
                        <p class="servicio-description">Análisis del impacto ambiental y estudios de tráfico cumpliendo con las normativas locales.</p>
                    </div>
                </div>

                <!-- Servicio 4 -->
                <div class="col-lg-4 col-md-6">
                    <div class="servicio-card">
                        <img src="img/inversion.png" alt="Análisis" class="servicio-icon">
                        <h3 class="servicio-title">Análisis de pre–viabilidad<br>financiera.</h3>
                        <p class="servicio-description">Pre-Evaluación financiera, técnica y de mercado para asegurar el éxito del desarrollo.</p>
                    </div>
                </div>

                <!-- Servicio 5 -->
                <div class="col-lg-4 col-md-6">
                    <div class="servicio-card">
                        <img src="img/inversion.png" alt="Financiamiento" class="servicio-icon">
                        <h3 class="servicio-title">Gestión de Financiamiento.</h3>
                        <p class="servicio-description">Asesoramiento en la obtención de créditos, financiamiento y estructuración financiera.</p>
                    </div>
                </div>

                <!-- Servicio 6 -->
                <div class="col-lg-4 col-md-6">
                    <div class="servicio-card">
                        <img src="img/denver.png" alt="Urbano" class="servicio-icon">
                        <h3 class="servicio-title">Planeación Urbana y Diseño<br>Arquitectónico.</h3>
                        <p class="servicio-description">Desarrollo de propuestas arquitectónicas y urbanísticas que maximicen el uso del espacio.</p>
                    </div>
                </div>

                <!-- Servicio 7 -->
                <div class="col-lg-6 col-md-6">
                    <div class="servicio-card">
                        <img src="img/gancho.png" alt="Ingeniería" class="servicio-icon">
                        <h3 class="servicio-title">Proyectos de Ingeniería y<br>Construcción.</h3>
                        <p class="servicio-description">Dirección y supervisión de obras, incluyendo la contratación de proveedores y constructores.</p>
                    </div>
                </div>

                <!-- Servicio 8 -->
                <div class="col-lg-6 col-md-6">
                    <div class="servicio-card">
                        <img src="img/gancho.png" alt="360" class="servicio-icon">
                        <h3 class="servicio-title">Gestión 360</h3>
                        <p class="servicio-description">Con sede en Guadalajara, contamos con una red de aliados comerciales que nos ayudan a gestionar cada aspecto para un desarrollo inmobiliario.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SERVICIOS ADICIONALES -->
    <section class="servicios-adicionales">
        <div class="container">
            <h2 class="section-title">SERVICIOS ADICIONALES</h2>
            <div class="row">
                <div class="col-lg-6">
                    <div class="servicio-item">
                        <h3 class="servicio-item-title">Administración de Propiedades</h3>
                        <p class="servicio-item-description">Gestión integral de inmuebles, incluyendo mantenimiento, arrendamiento y cobro de rentas.</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="servicio-item">
                        <h3 class="servicio-item-title">Asesoría Jurídica</h3>
                        <p class="servicio-item-description">Servicios legales especializados en contratos de compra-venta, arrendamiento, y regularización de propiedades.</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="servicio-item">
                        <h3 class="servicio-item-title">Evaluación y Tasación de Propiedades + Opiniones de valor</h3>
                        <p class="servicio-item-description">Valoración de terrenos y construcciones para el correcto posicionamiento en el mercado.</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="servicio-item">
                        <h3 class="servicio-item-title">Comercialización de Inmuebles</h3>
                        <p class="servicio-item-description">Estrategias de marketing, ventas y promoción de los desarrollos inmobiliarios.</p>
                    </div>
                </div>
            </div>
        </div>
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