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

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>


