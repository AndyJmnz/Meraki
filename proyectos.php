<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyectos - Grupo Meraki</title>
    
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

        /* PROYECTOS HERO SECTION */
        .proyectos-hero {
            position: relative;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background-image: url('img/proyectos1.png');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            overflow: hidden;
            padding-top: 100px;
        }

        .proyectos-hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            z-index: 1;
        }

        .proyectos-hero-content {
            position: relative;
            z-index: 2;
            text-align: center;
            padding: 40px 20px;
            margin-top: 150px;
        }

        .proyectos-hero-subtitle {
            font-size: clamp(12px, 2vw, 14px);
            font-weight: 300;
            color: var(--text-gray);
            text-transform: uppercase;
            letter-spacing: 3px;
            margin-bottom: 20px;
            animation: fadeInDown 1s ease-out;
        }

        .proyectos-hero-title {
            font-size: clamp(32px, 8vw, 140px);
            font-weight: 100;
            color: #333;
            letter-spacing: clamp(2px, 0.5vw, 12px);
            text-transform: uppercase;
            line-height: 1.1;
            margin-bottom: 30px;
            animation: fadeInUp 1s ease-out 0.2s both;
            white-space: nowrap;
        }

        .proyectos-hero-description {
            font-size: clamp(14px, 2vw, 18px);
            font-weight: 300;
            color: var(--text-gray);
            max-width: 700px;
            margin: 0 auto 40px;
            line-height: 1.8;
            animation: fadeIn 1s ease-out 0.4s both;
        }

        /* Alineación izquierda solo en desktop */
        @media (min-width: 769px) {
            .proyectos-hero-description {
                text-align: left;
                margin-left: 100px;
                margin-right: auto;
            }

            .proyectos-hero-title {
                text-align: left;
                margin-left: 80px;
                margin-top: 40px;
            }
        }

        /* Botón Ver más */
        .btn-custom {
            padding: 15px 35px;
            background-color: var(--light-green);
            color: #fff;
            border-radius: 30px;
            font-size: 12px;
            text-transform: uppercase;
            letter-spacing: 1px;
            transition: all 0.3s ease;
            border: none;
            text-decoration: none;
            display: inline-block;
            animation: fadeIn 1s ease-out 0.6s both;
        }

        .btn-custom:hover {
            background-color: var(--primary-green);
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
            color: #fff;
        }

        .hero-cta-button {
            margin-top: 20px;
        }

        /* Alineación del botón solo en desktop */
        @media (min-width: 769px) {
            .hero-cta-button {
                text-align: left;
                margin-left: 100px;
            }
        }

        /* En móvil, centrado */
        @media (max-width: 768px) {
            .hero-cta-button {
                text-align: center;
            }
        }

        /* ANIMACIONES */
        @keyframes fadeInDown {
            from {
                opacity: 0;
                transform: translateY(-30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }

        @keyframes expandWidth {
            from {
                width: 0;
            }
            to {
                width: 100px;
            }
        }

        /* RESPONSIVE */
        @media (max-width: 768px) {
            .proyectos-hero {
                min-height: 70vh;
                padding-top: 80px;
            }

            .proyectos-hero-content {
                margin-top: 100px;
            }

            .proyectos-hero-title {
                margin-bottom: 20px;
            }

            .proyectos-hero-divider {
                margin: 30px auto;
                width: 80px;
            }
        }

        @media (max-width: 480px) {
            .proyectos-hero {
                min-height: 60vh;
            }

            .proyectos-hero-content {
                padding: 30px 15px;
                margin-top: 80px;
            }
        }

        /* GALERÍA DE PROYECTOS */
        .proyectos-galeria {
            padding: 80px 0;
            background-color: #fff;
        }

        .galeria-container {
            display: flex;
            flex-direction: column;
            gap: 50px;
        }

        .galeria-header {
            text-align: center;
            margin-bottom: 0;
        }

        
        .galeria-title {
            font-size: clamp(36px, 6vw, 64px);
            font-weight: 100;
            color: #333;
            letter-spacing: clamp(2px, 0.5vw, 8px);
            text-transform: uppercase;
            margin-bottom: 20px;
        }


        .galeria-description {
            font-size: 16px;
            font-weight: 300;
            color: var(--text-gray);
            max-width: 700px;
            margin: 0 auto;
            line-height: 1.8;
        }

        /* Grid de Proyectos */
        .proyectos-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 30px;
        }

        /* Layout desktop: header izquierda, grid derecha */
        @media (min-width: 769px) {
            .galeria-container {
                display: grid;
                grid-template-columns: 1fr 2fr;
                gap: 60px;
                align-items: start;
            }

            .galeria-header {
                text-align: left;
                position: sticky;
                top: 120px;
            }

            .galeria-description {
                margin: 0;
            }
        }

        .proyecto-card {
            position: relative;
            overflow: hidden;
            border-radius: 8px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            transition: all 0.4s ease;
            background-color: #fff;
            cursor: pointer;
        }

        .proyecto-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.15);
        }

        /* Quinta imagen ocupa todo el ancho */
        .proyecto-card:nth-child(5) {
            grid-column: 1 / -1;
        }

        /* Ocultar sexta imagen en desktop */
        .proyecto-card:nth-child(6) {
            display: none;
        }

        .proyecto-image {
            width: 100%;
            height: 350px;
            object-fit: cover;
            transition: transform 0.4s ease;
        }

        /* Imagen 5 más alta */
        .proyecto-card:nth-child(5) .proyecto-image {
            height: 450px;
        }

        /* RESPONSIVE */
        @media (max-width: 768px) {
            .proyectos-galeria {
                padding: 60px 0;
            }

            .galeria-header {
                margin-bottom: 40px;
            }

            .proyectos-grid {
                grid-template-columns: 1fr;
                gap: 25px;
            }

            /* En móvil, mostrar todas las imágenes */
            .proyecto-card:nth-child(5) {
                grid-column: auto;
            }

            .proyecto-card:nth-child(6) {
                display: block;
            }

            .proyecto-image {
                height: 280px;
            }

            .proyecto-card:nth-child(5) .proyecto-image {
                height: 280px;
            }

            .proyecto-descripcion {
                opacity: 1;
                max-height: 200px;
            }
        }

        /* SEGUNDO PROYECTO - CENTRADO */
        .proyecto-centrado {
            padding: 80px 0;
            background-color: #f5f5f5;
            position: relative;
        }

        .proyecto-centrado-container {
            display: flex;
            flex-direction: column;
            gap: 50px;
        }

        .proyecto-centrado-header {
            text-align: center;
            margin-bottom: 0;
            position: relative;
            z-index: 10;
        }

        .proyecto-centrado-header .galeria-description {
            margin: 0 auto;
        }

        /* Grid centrado */
        .proyectos-grid-centrado {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 30px;
            max-width: 1000px;
            margin: 0 auto;
        }

        /* Layout desktop: imágenes alrededor del contenido central */
        @media (min-width: 769px) {
            .proyecto-centrado {
                min-height: 100vh;
                display: flex;
                align-items: center;
                justify-content: center;
                padding: 120px 20px;
                position: relative;
            }

            .proyecto-centrado .container {
                position: relative;
                width: 100%;
                max-width: 100%;
                min-height: 80vh;
                display: flex;
                align-items: center;
                justify-content: center;
            }

            .proyecto-centrado-container {
                position: relative;
                z-index: 10;
                max-width: 600px;
                background-color: rgba(255, 255, 255, 0.98);
                padding: 60px 50px;
                border-radius: 12px;
                box-shadow: 0 10px 40px rgba(0, 0, 0, 0.15);
                gap: 30px;
            }

            .proyectos-grid-centrado {
                position: absolute;
                top: -80px;
                left: 0;
                right: 0;
                bottom: -80px;
                width: 100%;
                height: calc(100% + 160px);
                display: block;
                z-index: 1;
                pointer-events: none;
            }

            .proyectos-grid-centrado .proyecto-card {
                pointer-events: all;
            }

            /* Imagen 1 - Superior Izquierda (Grande) */
            .proyectos-grid-centrado .proyecto-card:nth-child(1) {
                position: absolute;
                top: 400px;
                left: 620px;
                width: 550px;
            }

            .proyectos-grid-centrado .proyecto-card:nth-child(1) .proyecto-image {
                height: 260px;
            }

            /* Imagen 2 - Superior Derecha (Mediana) */
            .proyectos-grid-centrado .proyecto-card:nth-child(2) {
                position: absolute;
                top: -130px;
                left: 700px;
                width: 400px;
                height: 300px;
            }

            .proyectos-grid-centrado .proyecto-card:nth-child(2) .proyecto-image {
                height: 320px;
            }

            /* Imagen 3 - Inferior Izquierda (Pequeña) */
            .proyectos-grid-centrado .proyecto-card:nth-child(3) {
                position: absolute;
                top: 430px;
                left: 20px;
                width: 480px;
            }

            .proyectos-grid-centrado .proyecto-card:nth-child(3) .proyecto-image {
                height: 260px;
            }

            /* Imagen 4 - Inferior Derecha (Extra Grande) */
            .proyectos-grid-centrado .proyecto-card:nth-child(4) {
                position: absolute;
                top: -100px;
                right: 750px;
                width: 380px;
            }

            .proyectos-grid-centrado .proyecto-card:nth-child(4) .proyecto-image {
                height: 220px;
            }

            /* Imagen 5 - Centrada abajo o arriba */
            .proyectos-grid-centrado .proyecto-card:nth-child(5) {
                position: absolute;
                bottom: -50px;
                right: 80%;
                transform: translateX(-50%);
                width: 420px;
                display: block;
            }

            .proyectos-grid-centrado .proyecto-card:nth-child(5) .proyecto-image {
                height: 280px;
            }
        }

        /* Quinta imagen ocupa todo el ancho en móvil */
        @media (max-width: 768px) {
            .proyectos-grid-centrado .proyecto-card:nth-child(5) {
                grid-column: 1 / -1;
            }
        }

        /* LIGHTBOX MODAL */
        .lightbox-modal {
            display: none;
            position: fixed;
            z-index: 9999;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.95);
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .lightbox-modal.active {
            display: flex;
            align-items: center;
            justify-content: center;
            opacity: 1;
        }

        .lightbox-content {
            position: relative;
            max-width: 90%;
            max-height: 90vh;
            animation: zoomIn 0.3s ease;
        }

        .lightbox-image {
            width: 100%;
            height: auto;
            max-height: 90vh;
            object-fit: contain;
            border-radius: 8px;
        }

        .lightbox-close {
            position: absolute;
            top: -40px;
            right: 0;
            color: white;
            font-size: 40px;
            font-weight: 300;
            cursor: pointer;
            background: none;
            border: none;
            padding: 0;
            line-height: 1;
            transition: transform 0.2s ease;
        }

        .lightbox-close:hover {
            transform: scale(1.2);
        }

        .lightbox-nav {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            background-color: rgba(255, 255, 255, 0.2);
            color: white;
            border: none;
            font-size: 30px;
            padding: 20px 15px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            border-radius: 4px;
        }

        .lightbox-nav:hover {
            background-color: rgba(255, 255, 255, 0.3);
        }

        .lightbox-prev {
            left: 20px;
        }

        .lightbox-next {
            right: 20px;
        }

        @keyframes zoomIn {
            from {
                transform: scale(0.8);
                opacity: 0;
            }
            to {
                transform: scale(1);
                opacity: 1;
            }
        }

        /* Responsive lightbox */
        @media (max-width: 768px) {
            .lightbox-close {
                top: -50px;
                right: 10px;
                font-size: 35px;
            }

            .lightbox-nav {
                font-size: 25px;
                padding: 15px 10px;
            }

            .lightbox-prev {
                left: 10px;
            }

            .lightbox-next {
                right: 10px;
            }
        }

        /* Overlay con información */
        .proyecto-overlay {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: rgba(90, 107, 94, 0.95); /* Verde oscuro con transparencia */
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 30px;
            opacity: 0;
            transition: opacity 0.4s ease;
            z-index: 2;
        }

        .proyecto-card:hover .proyecto-overlay {
            opacity: 1;
        }

        .proyecto-overlay-title {
            font-size: clamp(20px, 3vw, 28px);
            font-weight: 500;
            color: #fff;
            text-transform: uppercase;
            letter-spacing: 2px;
            margin-bottom: 15px;
            text-align: center;
        }

        .proyecto-overlay-description {
            font-size: clamp(13px, 1.5vw, 15px);
            font-weight: 300;
            color: rgba(255, 255, 255, 0.9);
            text-align: center;
            line-height: 1.6;
            max-width: 90%;
        }

        /* Línea decorativa */
        .proyecto-overlay-divider {
            width: 60px;
            height: 2px;
            background-color: #fff;
            margin: 15px 0;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .proyecto-overlay {
                padding: 20px;
            }

            .proyecto-overlay-title {
                margin-bottom: 10px;
            }

            .proyecto-overlay-divider {
                width: 40px;
                margin: 10px 0;
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
                        <a href="servicios.php" class="nav-link nav-pill">Servicios</a>
                    </li>
                    <li class="nav-item">
                        <a href="proyectos.php" class="nav-link nav-pill active">Proyectos</a>
                    </li>
                    <li class="nav-item">
                        <a href="contacto.php" class="nav-link nav-pill">Contacto</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- HERO SECTION -->
    <section class="proyectos-hero">
        <div class="container">
            <div class="proyectos-hero-content">
                <h1 class="proyectos-hero-title">CREATING IMPACT</h1>
                <p class="proyectos-hero-description">
                    DONDE LA CREATIVIDAD SE ENCUENTRA CON LA<br>
                    FUNCIONALIDAD, NACEN NUEVAS POSIBILIDADES.
                </p>
                <div class="hero-cta-button">
                    <a href="#proyectos-galeria" class="btn-custom">Ver más</a>
                </div>
            </div>
        </div>
    </section>

    <!-- GALERÍA DE PROYECTOS -->
    <section id="proyectos-galeria" class="proyectos-galeria">
        <div class="container">
            <div class="galeria-container">
                <div class="galeria-header">
                    <h2 class="galeria-title">PROYECTO</h2>
                    <p class="galeria-description">
                        This project represents the perfect blend of creativity, innovation, and functionality. Developed with a focus on user experience and practical design, it reflects our commitment to delivering solutions that make a real impact.
                    </p>
                </div>

                <div class="proyectos-grid">
                    <!-- Proyecto 1 -->
                    <div class="proyecto-card" onclick="openLightbox('img/meraki2.png', 0)">
                        <img src="img/meraki2.png" alt="Proyecto 1" class="proyecto-image">
                        <div class="proyecto-overlay">
                            <h3 class="proyecto-overlay-title">Diseño Creativo</h3>
                            <div class="proyecto-overlay-divider"></div>
                            <p class="proyecto-overlay-description">
                                Solución innovadora que combina estética y funcionalidad
                            </p>
                        </div>
                    </div>

                    <!-- Proyecto 2 -->
                    <div class="proyecto-card" onclick="openLightbox('img/meraki2.png', 1)">
                        <img src="img/meraki2.png" alt="Proyecto 2" class="proyecto-image">
                        <div class="proyecto-overlay">
                            <h3 class="proyecto-overlay-title">Desarrollo Web</h3>
                            <div class="proyecto-overlay-divider"></div>
                            <p class="proyecto-overlay-description">
                                Plataforma digital moderna y responsive
                            </p>
                        </div>
                    </div>

                    <!-- Proyecto 3 -->
                    <div class="proyecto-card" onclick="openLightbox('img/meraki2.png', 2)">
                        <img src="img/meraki2.png" alt="Proyecto 3" class="proyecto-image">
                        <div class="proyecto-overlay">
                            <h3 class="proyecto-overlay-title">Branding Corporativo</h3>
                            <div class="proyecto-overlay-divider"></div>
                            <p class="proyecto-overlay-description">
                                Identidad visual única y memorable
                            </p>
                        </div>
                    </div>

                    <!-- Proyecto 4 -->
                    <div class="proyecto-card" onclick="openLightbox('img/meraki2.png', 3)">
                        <img src="img/meraki2.png" alt="Proyecto 4" class="proyecto-image">
                        <div class="proyecto-overlay">
                            <h3 class="proyecto-overlay-title">Marketing Digital</h3>
                            <div class="proyecto-overlay-divider"></div>
                            <p class="proyecto-overlay-description">
                                Estrategia integral para resultados medibles
                            </p>
                        </div>
                    </div>

                    <!-- Proyecto 5 -->
                    <div class="proyecto-card" onclick="openLightbox('img/meraki2.png', 4)">
                        <img src="img/meraki2.png" alt="Proyecto 5" class="proyecto-image">
                        <div class="proyecto-overlay">
                            <h3 class="proyecto-overlay-title">Experiencia de Usuario</h3>
                            <div class="proyecto-overlay-divider"></div>
                            <p class="proyecto-overlay-description">
                                Interfaces intuitivas centradas en el usuario
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SEGUNDO PROYECTO - CENTRADO -->
    <section class="proyecto-centrado">
        <div class="container">
            <div class="proyecto-centrado-container">
                <div class="proyecto-centrado-header">
                    <h2 class="galeria-title">PROYECTO 2</h2>
                    <p class="galeria-description">
                        This project represents the perfect blend of creativity, innovation, and functionality. Developed with a focus on user experience and practical design, it reflects our commitment to delivering solutions that make a real impact.
                    </p>
                </div>

                <div class="proyectos-grid-centrado">
                    <!-- Proyecto 1 -->
                    <div class="proyecto-card" onclick="openLightbox('img/meraki2.png', 5)">
                        <img src="img/meraki2.png" alt="Proyecto 1" class="proyecto-image">
                        <div class="proyecto-overlay">
                            <h3 class="proyecto-overlay-title">Solución Innovadora</h3>
                            <div class="proyecto-overlay-divider"></div>
                            <p class="proyecto-overlay-description">
                                Transformando ideas en realidad digital
                            </p>
                        </div>
                    </div>

                    <!-- Proyecto 2 -->
                    <div class="proyecto-card" onclick="openLightbox('img/meraki2.png', 6)">
                        <img src="img/meraki2.png" alt="Proyecto 2" class="proyecto-image">
                        <div class="proyecto-overlay">
                            <h3 class="proyecto-overlay-title">Diseño Arquitectónico</h3>
                            <div class="proyecto-overlay-divider"></div>
                            <p class="proyecto-overlay-description">
                                Espacios que inspiran y conectan
                            </p>
                        </div>
                    </div>

                    <!-- Proyecto 3 -->
                    <div class="proyecto-card" onclick="openLightbox('img/meraki2.png', 7)">
                        <img src="img/meraki2.png" alt="Proyecto 3" class="proyecto-image">
                        <div class="proyecto-overlay">
                            <h3 class="proyecto-overlay-title">Estrategia Visual</h3>
                            <div class="proyecto-overlay-divider"></div>
                            <p class="proyecto-overlay-description">
                                Comunicación efectiva a través del diseño
                            </p>
                        </div>
                    </div>

                    <!-- Proyecto 4 -->
                    <div class="proyecto-card" onclick="openLightbox('img/meraki2.png', 8)">
                        <img src="img/meraki2.png" alt="Proyecto 4" class="proyecto-image">
                        <div class="proyecto-overlay">
                            <h3 class="proyecto-overlay-title">Contenido Creativo</h3>
                            <div class="proyecto-overlay-divider"></div>
                            <p class="proyecto-overlay-description">
                                Historias que cautivan y conectan
                            </p>
                        </div>
                    </div>

                    <!-- Proyecto 5 -->
                    <div class="proyecto-card" onclick="openLightbox('img/meraki2.png', 9)">
                        <img src="img/meraki2.png" alt="Proyecto 5" class="proyecto-image">
                        <div class="proyecto-overlay">
                            <h3 class="proyecto-overlay-title">Solución Digital</h3>
                            <div class="proyecto-overlay-divider"></div>
                            <p class="proyecto-overlay-description">
                                Tecnología al servicio de la creatividad
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- LIGHTBOX MODAL -->
    <div id="lightboxModal" class="lightbox-modal" onclick="closeLightbox(event)">
        <div class="lightbox-content">
            <button class="lightbox-close" onclick="closeLightbox(event)">&times;</button>
            <button class="lightbox-nav lightbox-prev" onclick="changeImage(-1, event)">&#10094;</button>
            <img id="lightboxImage" class="lightbox-image" src="" alt="Imagen ampliada">
            <button class="lightbox-nav lightbox-next" onclick="changeImage(1, event)">&#10095;</button>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        // Array de todas las imágenes de proyectos
        const projectImages = [
            'img/meraki2.png', // Proyecto 1 - imagen 1
            'img/meraki2.png', // Proyecto 1 - imagen 2
            'img/meraki2.png', // Proyecto 1 - imagen 3
            'img/meraki2.png', // Proyecto 1 - imagen 4
            'img/meraki2.png', // Proyecto 1 - imagen 5
            'img/meraki2.png', // Proyecto 2 - imagen 1
            'img/meraki2.png', // Proyecto 2 - imagen 2
            'img/meraki2.png', // Proyecto 2 - imagen 3
            'img/meraki2.png', // Proyecto 2 - imagen 4
            'img/meraki2.png'  // Proyecto 2 - imagen 5
        ];

        let currentImageIndex = 0;

        function openLightbox(imageSrc, index) {
            currentImageIndex = index;
            const modal = document.getElementById('lightboxModal');
            const img = document.getElementById('lightboxImage');
            
            img.src = projectImages[currentImageIndex];
            modal.classList.add('active');
            document.body.style.overflow = 'hidden'; // Prevenir scroll
        }

        function closeLightbox(event) {
            if (event.target.id === 'lightboxModal' || event.target.classList.contains('lightbox-close')) {
                const modal = document.getElementById('lightboxModal');
                modal.classList.remove('active');
                document.body.style.overflow = 'auto'; // Restaurar scroll
                event.stopPropagation();
            }
        }

        function changeImage(direction, event) {
            event.stopPropagation();
            currentImageIndex += direction;
            
            // Loop: si llega al final, vuelve al inicio y viceversa
            if (currentImageIndex >= projectImages.length) {
                currentImageIndex = 0;
            } else if (currentImageIndex < 0) {
                currentImageIndex = projectImages.length - 1;
            }
            
            const img = document.getElementById('lightboxImage');
            img.src = projectImages[currentImageIndex];
        }

        // Cerrar con tecla ESC
        document.addEventListener('keydown', function(event) {
            if (event.key === 'Escape') {
                const modal = document.getElementById('lightboxModal');
                if (modal.classList.contains('active')) {
                    modal.classList.remove('active');
                    document.body.style.overflow = 'auto';
                }
            }
        });

        // Navegación con flechas del teclado
        document.addEventListener('keydown', function(event) {
            const modal = document.getElementById('lightboxModal');
            if (modal.classList.contains('active')) {
                if (event.key === 'ArrowLeft') {
                    changeImage(-1, event);
                } else if (event.key === 'ArrowRight') {
                    changeImage(1, event);
                }
            }
        });
    </script>
</body>
</html>


