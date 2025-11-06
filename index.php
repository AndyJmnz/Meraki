<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Building for the Future</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Albert+Sans:wght@100;200;300;400;500;600;700&display=swap" rel="stylesheet">
    
    <style>
        :root {
            --primary-green: #5a6b5e;
            --light-green: #7a8b7e;
            --text-gray: #666;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Albert Sans', sans-serif;
            background-color: #f5f5f5;
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

        /* HERO SECTION */
        .hero-section {
            min-height: 100vh;
            max-height: 700px;
            padding-top: 80px;
            padding-bottom: 50px;
            position: relative;
            overflow: hidden;
        }

        .hero-content {
             position: relative;
            z-index: 1;
            padding-top: 40px;
        }

        .hero-subtitle {
            font-size: clamp(12px, 2vw, 14px);
            font-weight: 300;
            color: var(--text-gray);
            text-transform: uppercase;
            letter-spacing: 2px;
            line-height: 1.0;
        }

        .hero-title {
           font-size: clamp(48px, 10vw, 128px);
            font-weight: 200;
            color: #333;
            line-height: 1.1;
            margin: 30px 0;
            letter-spacing: -1px;
        }

        .hero-image {
            position: absolute;
            top: 30%;
            left: 50%;
            transform: translateX(-50%);
            width: clamp(500px, 70%, 1200px);
            height: auto;
            z-index: 10;
            pointer-events: none;
        }

        .hero-image img {
            width: 100%;
            height: auto;
            object-fit: contain;
        }

        .btn-custom {
            padding: 15px 35px;
            background-color: var(--light-green);
            color: white;
            border-radius: 30px;
            font-size: 12px;
            text-transform: uppercase;
            letter-spacing: 1px;
            transition: all 0.3s ease;
            border: none;
            text-decoration: none;
            display: inline-block;
        }

        .btn-custom:hover {
            background-color: var(--primary-green);
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0,0,0,0.2);
            color: white;
        }

        /* SECTION TITLES */
        .section-title-large {
            font-size: clamp(36px, 8vw, 64px);
            font-weight: 100;
            color: #333;
            letter-spacing: -1px;
        }

        /* ABOUT SECTION */
        .about-divider {
            width: 2px;
            background-color: #ddd;
            height: 100%;
        }

        .subtitle2 {
            text-align: center;
            font-size: clamp(22px, 4vw, 35px);
            font-weight: 200;
            color: black;
            margin-bottom: 30px;
            text-transform: uppercase;
            letter-spacing: 2px;
        }

        .subtitle2 b {
            font-weight: 700;
        }

        .about-text {
            font-size: clamp(14px, 2vw, 18px);
            color: var(--text-gray);
            line-height: 1.4;
            font-weight: 200;
            text-align: justify;
        }

        .about-quote {
            font-weight: 500;
            color: black;
            font-size: clamp(22px, 4vw, 35px);
            text-align: center;
        }

        /* FEATURES */
        .feature-item {
            display: flex;
            align-items: center;
            gap: 15px;
            margin-bottom: 20px;
        }

        .feature-icon {
            width: 40px;
            height: 40px;
            object-fit: contain;
            flex-shrink: 0;
        }

        .feature-text {
            font-size: clamp(14px, 2vw, 18px);
            font-weight: 200;
        }

        .features-image {
            max-width: 300px;
            width: 100%;
            filter: grayscale(20%);
            transition: all 0.3s ease;
            opacity: 0.8;
        }

        .features-image:hover {
            filter: grayscale(0%);
            transform: scale(1.05);
            opacity: 1;
        }

        /* IMAGE SECTIONS */
        .section-image {
            min-height: 400px;
            overflow: hidden;
        }

        .section-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.3s ease;
        }

        .section-image:hover img {
            transform: scale(1.05);
        }

        .section-content {
            display: flex;
            flex-direction: column;
            justify-content: center;
            padding: 60px;
        }

        .section-text {
            font-size: clamp(16px, 2.5vw, 24px);
            color: var(--text-gray);
            line-height: 1.4;
            text-align: justify;
            font-weight: 200;
        }

        /* OBJETIVOS */
        .objetivo-card {
            padding: 25px;
            border-radius: 10px;
            transition: all 0.3s ease;
            display: flex;
            align-items: flex-start;
            gap: 15px;
            height: 100%;
        }

        .objetivo-card:hover {
            background-color: #f0f0f0;
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0,0,0,0.1);
        }

        .objetivo-bullet {
            color: var(--light-green);
            font-size: clamp(24px, 4vw, 34px);
            font-weight: bold;
            line-height: 1;
            flex-shrink: 0;
        }

        .objetivo-text {
            font-size: clamp(14px, 2.5vw, 24px);
            color: var(--text-gray);
            line-height: 1.4;
            text-align: justify;
            font-weight: 200;
            margin: 0;
        }

        /* RESPONSIVE ADJUSTMENTS */
        @media (max-width: 768px) {
            .about-divider {
                width: 100%;
                height: 2px;
                margin: 20px 0;
            }

            .section-content {
                padding: 40px 20px;
            }

            .hero-section {
                padding-top: 140px;
            }

            .hero-image {
                height: 50%;
            }
        }

        @media (max-width: 480px) {
            .hero-image {
                height: 45%;
                opacity: 0.7;
            }
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

        @media (max-width: 992px) {
            .footer {
                background: #f5f5f5;
                border-top: 3px solid var(--primary-green);
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

            .footer-map {
                margin-top: 20px;
            }
        }
    </style>
</head>
<body>
    <!-- NAVEGACIÓN -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top">
        <div class="container-fluid px-4">
            <!-- Logo (izquierda en móvil) -->
            <a class="navbar-brand" href="index.php">
                <img src="img/LogoSinNombre.png" alt="Logo" class="logo-nav">
            </a>

            <!-- Botón hamburguesa (visible solo en móvil) -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Menú colapsable -->
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a href="index.php" class="nav-link nav-pill active">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="servicios.php" class="nav-link nav-pill">Servicios</a>
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
    <section class="hero-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="hero-content">
                        
                        <h1 class="hero-title">BUILDING FOR<br>THE FUTURE</h1>
                        <p class="hero-subtitle">Transformando ideas</p>
                        <p class="hero-subtitle">en proyectos reales</p>
                        <a href="#" class="btn-custom mt-3">Conoce más</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="hero-image">
            <img src="img/ImagenPortada1.png" alt="Edificio moderno">
        </div>
    </section>

    <!-- ABOUT TITLE -->
    <div class="container my-5">
        <div class="row">
            <div class="col-12 text-center">
                <h2 class="section-title-large">ABOUT</h2>
            </div>
        </div>
    </div>

    <!-- ABOUT SECTION -->
    <section class="pt-3 pb-5">
        <div class="container-fluid">
            <div class="row g-0">
                <!-- About Left -->
                <div class="col-lg-5 col-md-12">
                    <div class="p-4 p-lg-5">
                        <div class="subtitle2">GRUPO <b>MERAKI</b></div>
                        <p class="about-text">Somos Grupo Meraki BTO, consultoría especializada en la Gestión 360 de Proyectos Inmobiliarios. Con sede en Guadalajara, operamos con la filosofia.</p>
                        <p class="about-quote my-4">"Made with passion".</p>
                        <p class="about-text">Nuestro compromiso es ofrecer asesoría integral que abarca desde la conceptualización inicial hasta la ejecución exitosa de tu proyecto. No solo coordinamos procesos; infundimos alma y creatividad en cada desarrollo.</p>
                    </div>
                </div>

                <!-- Divider (hidden on mobile) -->
                <div class="d-none d-lg-block" style="width: 2px; background-color: #ddd;"></div>
                <div class="d-lg-none w-100" style="height: 2px; background-color: #ddd; margin: 20px 0;"></div>

                 <!-- About Center - Nos especializamos -->
                <div class="col-lg-3 col-md-12">
                    <div class="p-4 p-lg-5">
                        <h2 class="h2 mb-4 text-center">Nos especializamos</h2>
                        <div class="feature-item">
                            <img src="img/inversion.png" alt="Icono" class="feature-icon">
                            <span class="feature-text">Viabilidad Financiera y de Negocio</span>
                        </div>
                        <div class="feature-item">
                            <img src="img/gancho.png" alt="Icono" class="feature-icon">
                            <span class="feature-text">Gestión de Proyectos</span>
                        </div>
                        <div class="feature-item">
                            <img src="img/balanza.png" alt="Icono" class="feature-icon">
                            <span class="feature-text">Consultoría Legal</span>
                        </div>
                        <div class="feature-item">
                            <img src="img/denver.png" alt="Icono" class="feature-icon">
                            <span class="feature-text">Desarrollo Arquitectónico</span>
                        </div>
                    </div>
                </div>

                <!-- About Right - Imagen -->
                <div class="col-lg-3 col-md-12">
                    <div class="p-4 p-lg-5 d-flex align-items-center justify-content-center h-100">
                        <img src="img/merakicss.png" alt="Nuestra empresa" class="features-image" style="max-width: 100%; height: auto;">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- MISIÓN SECTION -->
    <section class="my-5">
        <div class="container-fluid">
            <div class="row g-0">
                <div class="col-lg-6 order-2 order-lg-1">
                    <div class="section-image">
                        <img src="img/meraki1.png" alt="Nuestro trabajo">
                    </div>
                </div>
                <div class="col-lg-6 order-1 order-lg-2">
                    <div class="section-content">
                        <h2 class="section-title-large text-center mb-4">MISIÓN</h2>
                        <p class="section-text">Nuestra Misión es ofrecer una consultoría integral y apasionada en el desarrollo de proyectos inmobiliarios, asegurando la Gestión 360 en cada etapa. Nos dedicamos a transformar visiones de negocio en realidades sólidas y rentables, brindando certeza legal y financiera a través de la experiencia, la innovación y la máxima calidad en la ejecución.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- VISIÓN SECTION -->
    <section class="my-5">
        <div class="container-fluid">
            <div class="row g-0">
                <div class="col-lg-6">
                    <div class="section-content">
                        <h2 class="section-title-large text-center mb-4">VISIÓN</h2>
                        <p class="section-text">Nuestra Visión es consolidarnos como el socio consultor indispensable para el desarrollo inmobiliario en la región. Buscamos ser reconocidos por la solidez y seguridad que ofrecemos, distinguiéndonos por nuestra capacidad de simplificar la complejidad de los proyectos, garantizar su viabilidad legal y financiera, y asegurar la máxima rentabilidad para cada uno de nuestros clientes.</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="section-image">
                        <img src="img/meraki2.png" alt="Nuestra visión">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- OBJETIVOS SECTION -->
    <section class="my-5">
        <div class="container-fluid">
            <div class="row g-0">
                <div class="col-lg-5">
                    <div class="section-image">
                        <img src="img/meraki3.png" alt="Nuestros objetivos">
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="section-content">
                        <h2 class="section-title-large text-center mb-5">OBJETIVOS</h2>
                        <div class="row g-4">
                            <div class="col-md-6">
                                <div class="objetivo-card">
                                    <div class="objetivo-bullet">•</div>
                                    <p class="objetivo-text">Nos enfocamos en la viabilidad integral de cada desarrollo: garantizar el 100% de cumplimiento legal y la máxima rentabilidad financiera.</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="objetivo-card">
                                    <div class="objetivo-bullet">•</div>
                                    <p class="objetivo-text">Buscamos superar las expectativas del cliente con una gestión rigurosa y apasionada, para consolidarnos como su socio estratégico de confianza.</p>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="objetivo-card">
                                    <div class="objetivo-bullet">•</div>
                                    <p class="objetivo-text">Impulsar el diseño arquitectónico sostenible e innovador, integrando soluciones creativas y tecnológicamente avanzadas que optimicen los recursos, respeten el entorno y aporten valor estético y funcional a cada proyecto.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FOOTER -->
    <footer class="footer">
        <div class="container">
            <div class="row align-items-center">
                <!-- Left Side - Logo and Info -->
                <div class="col-lg-4 mb-4 mb-lg-0">
                    <img src="img/LogoSinNombre.png" alt="Grupo Meraki" class="footer-logo">
                    <h3 class="footer-title">GRUPO <strong>MERAKI</strong></h3>
                    <p class="footer-subtitle">Made with passion</p>
                    <p class="footer-rights">Todos los derechos reservados</p>
                </div>

                <!-- Center - Contact Info -->
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

                <!-- Right Side - Map -->
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