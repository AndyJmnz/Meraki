<?php
$sent = false;
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Aquí podrías enviar correo con mail() o PHPMailer
    // mail($to, $subject, $message, $headers);
    $sent = true;
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Contacto — Grupo Meraki</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Albert+Sans:wght@100;200;300;400;500;600;700&display=swap" rel="stylesheet">

    <style>
        :root {
            --primary-green: #5a6b5e;
            --light-green: #7a8b7e;
            --text-gray: #666;
        }
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { font-family: 'Albert Sans', sans-serif; background-color: #f5f5f5; overflow-x: hidden; }

        /* NAVBAR */
        .navbar { background-color: rgba(245,245,245,0.95) !important; backdrop-filter: blur(10px); padding: 1.5rem 0; box-shadow: 0 2px 10px rgba(0,0,0,0.05); }
        .nav-pill { text-decoration: none; color: var(--text-gray); padding: 10px 20px; border: 1px solid #999; border-radius: 25px; font-size: 11px; text-transform: uppercase; letter-spacing: 1px; transition: all .3s ease; font-weight: 400; margin: 0 5px; display: inline-block; }
        .nav-pill:hover, .nav-pill.active { background-color: var(--primary-green); color: #fff; border-color: var(--primary-green); }
        .logo-nav { width: 50px; height: 50px; }

        /* HERO */
        .hero-section { min-height: 90vh; max-height: none; padding-top: 140px; padding-bottom: 0; position: relative; overflow: visible; }
        .hero-content { position: relative; z-index: 2; padding-top: 0; overflow: visible; }
        .hero-title { 
            font-size: clamp(56px, 10vw, 140px); 
            font-weight: 200; 
            color: var(0,0,0,0.05); 
            line-height: .95; 
            letter-spacing: 6px; 
            text-transform: uppercase; 
            margin: 0 0 24px; 
        }
        .hero-title .title-main { display:block; white-space:nowrap; }
        .hero-title .title-shift {
            display: block;
            width: 100%;
            white-space: nowrap;   /* un solo renglón */
            text-align: right;     /* alineado a la derecha */
            margin-left: 0;        /* sin desplazamiento manual */
        }
        .hero-title .title-main { display:block; white-space:nowrap; }

        /* A STORY alineado al borde derecho del viewport */
        .hero-title .title-shift {
            display:block;
            white-space:nowrap;
            text-align:right;
            width: 100vw;                    /* ocupa todo el ancho del viewport */
            margin-left: calc(50% - 50vw);   /* centra el bloque de 100vw sobre el contenedor */
        }

        @media (max-width: 992px) {
            .hero-title .title-shift { width:100%; margin-left:0; }
        }
        @media (max-width: 992px) {
            .hero-title .title-shift {
                margin-left:0;      /* en pantallas pequeñas el container ya es 100% */
                width:100%;
            }
        }
        .hero-subtitle { 
            font-size: clamp(12px, 1.6vw, 14px); 
            font-weight: 300; 
            color: var(--text-gray); 
            text-transform: uppercase; 
            letter-spacing: 2px; 
            max-width: 440px; 
        }
        .hero-image { 
            position: absolute; 
            bottom: -6vh; 
            right: 0; 
            left: auto; 
            transform: none; 
            width: clamp(520px, 55vw, 1100px); 
            height: auto; 
            z-index: 1; 
            pointer-events: none; 
        }
        .hero-image img { width: 100%; height: auto; object-fit: contain; }

        .btn-custom { padding: 15px 35px; background-color: var(--light-green); color: #fff; border-radius: 30px; font-size: 12px; text-transform: uppercase; letter-spacing: 1px; transition: all .3s ease; border: none; text-decoration: none; display: inline-block; }
        .btn-custom:hover { background-color: var(--primary-green); transform: translateY(-2px); box-shadow: 0 5px 15px rgba(0,0,0,0.2); color: #fff; }

        /* Coloca subtítulo + botón justo debajo de "DESIGN" */
        .hero-cta {
            position: relative;
            top: clamp(-80px, -8vw, -140px); /* súbelos en desktop */
            max-width: 460px;                /* ancho cómodo para el texto */
        }
        @media (max-width: 992px) {
            .hero-cta { top: 0; }            /* normal en tablet/móvil */
        }

        /* CONTACT SECTION */
        .contact-section { margin: 80px 0 40px; }
        .contact-card { background: transparent; border: 1px solid #ddd; border-radius: 14px; padding: 32px; transition: all .3s ease; }
        .contact-card:hover { transform: translateY(-4px); box-shadow: 0 10px 25px rgba(0,0,0,0.08); }
        .contact-title { font-size: clamp(28px, 6vw, 48px); font-weight: 100; color: #333; letter-spacing: -1px; margin-bottom: 20px; text-align: left; }
        .contact-sub { font-size: 14px; color: var(--text-gray); text-transform: uppercase; letter-spacing: 2px; margin-bottom: 10px; }
        .form-label { font-weight: 400; color: #333; }
        .form-control, .form-select, textarea.form-control { border-radius: 12px; border-color: #ddd; }
        .form-control:focus, .form-select:focus, textarea.form-control:focus { border-color: var(--primary-green); box-shadow: 0 0 0 .2rem rgba(90,107,94,0.15); }
        .contact-info { padding: 32px; border: 1px solid #ddd; border-radius: 14px; height: 100%; display: flex; flex-direction: column; gap: 10px; }
        .contact-info h4 { font-weight: 500; color: #333; margin-bottom: 10px; }
        .contact-info p { margin: 0; color: #666; font-weight: 300; }
        .contact-map { width: 100%; height: 280px; border-radius: 10px; overflow: hidden; box-shadow: 0 5px 15px rgba(0,0,0,0.15); margin-top: 14px; }
        .contact-map iframe { width: 100%; height: 100%; border: 0; }

        /* CONTACT SECTION (nuevo layout) */
        #contacto { position: relative; padding: 140px 0 110px; }
        .contact-wrapper { position: relative; }
        .contact-intro {
            text-align: center;
            max-width: 320px;
            margin: 0 auto;
        }
        .contact-intro h3 {
            font-size: clamp(24px, 3vw, 32px);
            font-weight: 500;
            margin-bottom: 14px;
            color: #333;
        }
        .contact-intro p {
            font-size: clamp(14px, 1.4vw, 16px);
            line-height: 1.6;
            color: #444;
            font-weight: 300;
            margin: 0 0 12px;
        }
        .contact-form-box {
            max-width: 520px;
            margin-left: auto;
            margin-right: auto;
        }
        .contact-form-box label {
            font-size: 14px;
            font-weight: 400;
            color: #333;
            margin-bottom: 6px;
        }
        .contact-form-box .form-control {
            height: 46px;
            font-size: 15px;
            border-radius: 22px;
        }
        .contact-form-box textarea.form-control {
            height: 180px;
            font-size: 15px;
            resize: vertical;
            border-radius: 24px;
            padding-top: 16px;
        }
        .contact-form-box .btn-custom {
            display: block;
            width: 200px;
            padding: 14px 28px;
            font-size: 14px;
            margin: 26px auto 0;
            letter-spacing: .6px;
        }
        /* Teléfonos decorativos */
        .phone-deco {
            position: absolute;
            width: clamp(180px, 12vw, 260px);
            height: auto;
            pointer-events: none;
            opacity: .9;
        }
        .phone-left-top { top: -80px; left: -40px; }
        .phone-left-mid { top: 360px; left: 80px; } /* movido más abajo y a la derecha */
        .phone-right-mid { top: 180px; right: -25px; }
        .phone-right-bottom { bottom: -160px; right: -30px; }
        @media (max-width: 992px) {
            #contacto { padding: 90px 0 70px; }
            .phone-deco { display: none; }
            .contact-intro h3 { font-size: 22px; }
            .contact-intro p { font-size: 14px; }
            .contact-form-box { max-width: 100%; }
            .contact-form-box .form-control,
            .contact-form-box textarea.form-control { font-size: 14px; }
        }

        /* FOOTER (igual que index) */
        .footer { position: relative; background: linear-gradient(to bottom right, #f5f5f5 0%, #f5f5f5 50%, var(--light-green) 50%, var(--light-green) 100%); padding: 60px 0; overflow: hidden; border-top: 3px solid var(--primary-green); }
        .footer-logo { max-width: 200px; margin-bottom: 20px; }
        .footer-title { font-size: clamp(24px, 4vw, 36px); font-weight: 200; text-transform: uppercase; letter-spacing: 2px; margin-bottom: 10px; }
        .footer-subtitle { font-size: clamp(14px, 2vw, 18px); font-weight: 300; margin-bottom: 30px; }
        .footer-rights { font-size: 12px; color: #999; margin-top: 30px; }
        .footer-contact { color: #333; }
        .footer-contact h4 { color: #333; font-weight: 500; margin-bottom: 15px; }
        .footer-contact p { margin-bottom: 8px; font-size: clamp(12px, 1.5vw, 16px); font-weight: 300; color: #666; }
        .footer-map { width: 100%; height: 300px; border-radius: 10px; overflow: hidden; box-shadow: 0 5px 15px rgba(0,0,0,0.2); }
        .footer-map iframe { width: 100%; height: 100%; border: none; }

        @media (max-width: 992px) {
            .hero-section { padding-top: 140px; }
            .hero-image { right: -4vw; bottom: -2vh; width: 80vw; }
            .hero-title .title-shift { text-align:right; margin-left:0; }
            .footer { background: #f5f5f5; border-top: 3px solid var(--primary-green); }
            .footer-logo { display: block; margin-left: auto; margin-right: auto; }
            .footer-title, .footer-subtitle, .footer-rights { text-align: center; }
            .footer-contact { background-color: var(--light-green); padding: 30px; border-radius: 10px; margin-top: 30px; color: #fff; }
            .footer-contact h4, .footer-contact p { color: #fff; }
            .footer-map { margin-top: 20px; }
        }
        @media (max-width: 480px) {
            .hero-image { width: 100vw; right: -8vw; bottom: -1vh; opacity: .75; }
        }

        /* Más altura al hero en desktop para separar título e imagen */
        @media (min-width: 992px) {
            .hero-section { min-height: 120vh; }  /* ajusta a 115–130vh según necesites */
        }

        /* MOBILE POLISH – solo afecta a móviles, desktop intacto */
        @media (max-width: 768px) {
            .container { padding-left: 20px; padding-right: 20px; }

            /* HERO – mantener proporciones similares a desktop y CENTRAR */
            .hero-section { 
                min-height: auto !important;
                padding-top: 120px;
                padding-bottom: 0 !important;
                text-align: center; /* centra todo el hero */
            }
            .hero-content {
                display: flex;
                flex-direction: column;
                align-items: center; /* centra los elementos hijos */
            }
            .hero-title { 
                font-size: clamp(34px, 12vw, 72px); 
                letter-spacing: 2px;
                line-height: .95;
                text-align: center;
            }
            .hero-title .title-main,
            .hero-title .title-shift { 
                line-height: 1;
                text-align: center; /* ambas líneas centradas */
                width: 100%;
                margin-left: 0;
            }
            .hero-cta { 
                top: 0; 
                margin-top: 20px;
                text-align: center;
                max-width: 100%;
            }
            .hero-subtitle { 
                font-size: 11px; 
                max-width: 90%; 
                letter-spacing: 1.5px;
                margin-left: auto;
                margin-right: auto; /* centra el párrafo */
            }
            .btn-custom { 
                padding: 12px 28px; 
                font-size: 11px;
                margin-left: auto;
                margin-right: auto; /* centra el botón */
            }
            .hero-image { 
                position: relative;
                right: 0;
                left: 0;
                bottom: 0 !important;
                width: 100%;
                margin-top: 16px;
                opacity: 1;
            }

            /* CONTACT – CENTRADO */
            #contacto { 
                margin-top: 0; 
                padding: 80px 0 70px;
                text-align: center; /* centra todo el contacto */
            }
            .contact-wrapper .row { 
                row-gap: 3rem;
                justify-content: center; /* centra las columnas */
            }
            .contact-intro { 
                max-width: 100%;
                text-align: center; /* texto centrado */
                margin-left: auto;
                margin-right: auto;
            }
            .contact-intro h3 { 
                font-size: clamp(24px, 5vw, 32px);
                font-weight: 500;
                text-align: center;
            }
            .contact-intro p { 
                font-size: 13px; 
                line-height: 1.6;
                font-weight: 300;
                text-align: center;
            }
            .contact-form-box { 
                max-width: 100%;
                margin-left: auto;
                margin-right: auto;
            }
            .contact-form-box label { 
                font-size: 13px;
                font-weight: 400;
                text-align: left; /* mantiene labels a la izq dentro del form */
                display: block;
            }
            .contact-form-box .form-control { 
                height: 44px; 
                font-size: 14px;
                border-radius: 22px;
            }
            .contact-form-box textarea.form-control { 
                height: 160px; 
                font-size: 14px;
                border-radius: 24px;
            }
            .contact-form-box .btn-custom { 
                width: 180px; 
                padding: 13px 26px; 
                font-size: 12px;
                letter-spacing: 1px;
                margin-left: auto;
                margin-right: auto; /* centra el botón de enviar */
            }
            .phone-deco { display: none; }

            /* FOOTER – CENTRADO */
            .footer { text-align: center; }
            .footer-logo { 
                margin-left: auto;
                margin-right: auto;
            }
            .footer-title, .footer-subtitle, .footer-rights {
                text-align: center;
            }
        }

        @media (max-width: 576px) {
            .hero-title { font-size: clamp(30px, 11vw, 56px); }
            #contacto { padding: 60px 0 50px; }
        }

        @media (max-width: 380px) {
            .contact-form-box .btn-custom { width: 100%; }
        }

        /* MOBILE – que #contacto inicie justo debajo de la imagen del hero */
        @media (max-width: 576px) {
            .hero-section { padding-bottom: 0; }
            .hero-image {
                position: relative;      /* saca la imagen del posicionamiento absoluto */
                bottom: 0 !important;    /* ignora offsets previos */
                right: 0;
                left: 0;
                width: 100%;
                margin-top: 12px;        /* pequeño respiro bajo el título */
            }
            #contacto { margin-top: 0; } /* sin solapes ni huecos extra */
        }

        /* MÓVIL — reduce altura del hero y elimina el espacio extra antes de #contacto */
        @media (max-width: 576px) {
            .hero-section {
                min-height: auto !important;   /* sin altura forzada */
                padding-top: 120px;            /* mantiene aire bajo la navbar */
                padding-bottom: 0 !important;  /* quita espacio extra al final */
            }
            .hero-image {
                position: relative;
                bottom: 0 !important;
                right: 0; left: 0;
                width: 100%;
                margin-top: 8px;               /* pequeño respiro bajo el título */
            }
            #contacto { margin-top: 0; padding-top: 56px; } /* arranca justo después de la imagen */
        }

        /* Tablet pequeña: mismo comportamiento, sin tocar desktop */
        @media (min-width: 577px) and (max-width: 768px) {
            .hero-section {
                min-height: auto !important;
                padding-top: 120px;
                padding-bottom: 0 !important;
            }
        }
    </style>
</head>
<body>
    <!-- NAV -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top">
        <div class="container-fluid px-4">
            <a class="navbar-brand" href="index.php">
                <img src="img/LogoSinNombre.png" alt="Logo" class="logo-nav">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item"><a href="index.php" class="nav-link nav-pill">Home</a></li>
                    <li class="nav-item"><a href="servicios.php" class="nav-link nav-pill">Servicios</a></li>
                    <li class="nav-item"><a href="proyectos.php" class="nav-link nav-pill">Proyectos</a></li>
                    <li class="nav-item"><a href="contacto.php" class="nav-link nav-pill active">Contacto</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- HERO -->
    <section class="hero-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="hero-content">
                        <h1 class="hero-title">
                            <span class="title-main">DESIGN THAT TELLS</span>
                            <span class="title-shift">A STORY</span>
                        </h1>
                        <div class="hero-cta">
                            <p class="hero-subtitle">
                                Donde la visión se fusiona con la técnica, cobra vida la arquitectura.
                            </p>
                            <a href="#contacto" class="btn-custom mt-3">Conoce más</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="hero-image">
            <img src="img/contacto.png" alt="Edificio moderno">
        </div>
    </section>

    <!-- CONTACT SECTION -->
    <section id="contacto" class="contact-section">
        <div class="container contact-wrapper">
            <img src="img/phone.png" alt="" class="phone-deco phone-left-top">
            <img src="img/phones.png" alt="" class="phone-deco phone-left-mid">
            <img src="img/phoneup.png" alt="" class="phone-deco phone-right-bottom">
            <?php if ($sent): ?>
                <div class="alert alert-success mb-4" role="alert">
                    Gracias por escribirnos. Hemos recibido tu mensaje y nos pondremos en contacto.
                </div>
            <?php endif; ?>

            <div class="row justify-content-center g-5">
                <div class="col-md-4">
                    <div class="contact-intro">
                        <h3>Contacto</h3>
                        <p>Estamos disponibles para resolver tus dudas y acompañarte en cada etapa del proyecto.</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <form method="post" action="contacto.php" novalidate class="contact-form-box">
                        <div class="mb-3">
                            <label for="nombre">Nombre completo del contacto:</label>
                            <input class="form-control" type="text" id="nombre" name="nombre" required>
                        </div>
                        <div class="mb-3">
                            <label for="email">Correo electrónico del contacto:</label>
                            <input class="form-control" type="email" id="email" name="email" required>
                        </div>
                        <div class="mb-3">
                            <label for="mensaje">Mensaje sobre el proyecto:</label>
                            <textarea class="form-control" id="mensaje" name="mensaje" required></textarea>
                        </div>
                        <button type="submit" class="btn-custom">ENVIAR</button>
                    </form>
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
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3732.248558245956!2d-103.4304896!3d20.685847!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8428ae8b8b8b8b8b%3A0x8b8b8b8b8b8b8b8b!2sTorre%20Cube%202!5e0!3m2!1ses!2smx!4v1234567890" allowfullscreen loading="lazy"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>