<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiservicios Aguilar | Refrigeración y Aires Acondicionados</title>
    
    <!-- Google Fonts: Outfit & Inter -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Outfit:wght@600;700;800&display=swap" rel="stylesheet">
    
    <!-- Bootstrap 5.3 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    
    <!-- Estilos Personalizados con Cache-Buster -->
    <link href="style.css?v=<?php echo time(); ?>" type="text/css" rel="stylesheet">
</head>

<body>
    <!-- Encabezado y Barra de Navegación -->
    <header class="main-header">
        <div class="container">
            <nav class="navbar navbar-expand-lg main-navbar">
                <!-- Marca / Logotipo Limpio -->
                <a class="brand-wrapper" href="#inicio">
                    <span class="brand-icon-pill">
                        <i class="bi bi-fan"></i>
                    </span>
                    <span class="brand-title">Multiservicios <span>Aguilar</span></span>
                </a>

                <!-- Botón Hamburguesa Responsive -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMain" aria-controls="navbarMain" aria-expanded="false" aria-label="Abrir navegación">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- Menú de Enlaces a la Derecha -->
                <div class="collapse navbar-collapse justify-content-end" id="navbarMain">
                    <ul class="navbar-nav align-items-lg-center mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#inicio">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#nosotros">Nosotros</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#servicios">Servicios</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#contacto">Contacto</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>

    <!-- Sección Hero Principal -->
    <section class="hero-section" id="inicio">
        <div class="container">
            <div class="row align-items-center justify-content-between g-4 g-lg-5">
                <!-- Columna Izquierda: Textos y Acciones Limpias -->
                <div class="col-lg-6">
                    <div class="hero-content">
                        <!-- Título Principal -->
                        <h1 class="hero-title">
                            Soluciones que <br>
                            inspiran <br>
                            <span id="hero-animated-word" class="hero-animated-word">garantía</span>
                        </h1>

                        <!-- Descripción Comercial -->
                        <p class="hero-subtitle">
                            Venta, mantenimiento preventivo y reparación urgente de chillers, cuartos fríos y aires acondicionados industriales con atención 24/7.
                        </p>
                        
                        <!-- Botones Minimalistas de Alta Gama -->
                        <div class="hero-cta-group">
                            <a href="https://wa.me/524777871179?text=Hola,%20solicito%20una%20cotizaci%C3%B3n%20para%20un%20servicio%20de%20refrigeraci%C3%B3n" target="_blank" class="btn btn-primary-hero">
                                <span>Solicitar Cotización</span>
                                <i class="bi bi-arrow-right"></i>
                            </a>
                            <a href="#servicios" class="btn btn-secondary-hero">
                                <span>Ver Servicios</span>
                            </a>
                        </div>

                        <!-- Lista Minimalista de Confianza -->
                        <div class="hero-trust-list">
                            <div class="trust-check-item">
                                <i class="bi bi-check-circle-fill"></i>
                                <span>Garantía de 30 días</span>
                            </div>
                            <div class="trust-check-item">
                                <i class="bi bi-check-circle-fill"></i>
                                <span>Atención 24/7</span>
                            </div>
                            <div class="trust-check-item">
                                <i class="bi bi-check-circle-fill"></i>
                                <span>Cobertura a nivel nacional</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Columna Derecha: Tarjeta de Imagen 100% Limpia -->
                <div class="col-lg-6 d-flex justify-content-center justify-content-lg-end">
                    <div class="hero-image-wrapper">
                        <img src="image/image.png" alt="Técnico especialista de Multiservicios Aguilar trabajando en panel de control y refrigeración" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Sección Nosotros / ¿Quiénes Somos? (Espaciosa, Sin Saturación) -->
    <section class="about-section" id="nosotros">
        <div class="container">
            <!-- Encabezado Superior a Ancho Completo / Centrado -->
            <div class="about-header text-center reveal-up">
                <span class="section-label">Sobre Nosotros</span>
                <h2 class="section-title">
                    Liderazgo y precisión técnica en cada grado de temperatura
                </h2>
                <p class="section-lead">
                    En <strong>Multiservicios Aguilar</strong> somos especialistas en soluciones integrales de refrigeración comercial e industrial. Respaldamos a nuestros clientes con tecnología de vanguardia y respuesta inmediata para garantizar que su cadena de frío nunca se detenga.
                </p>
            </div>

            <!-- Grilla Inferior: Fotografía a la Izquierda + Tarjetas a la Derecha -->
            <div class="row align-items-stretch g-4 g-lg-5">
                <!-- Columna Izquierda: Fotografía Real -->
                <div class="col-lg-5 reveal-left">
                    <div class="about-image-container h-100">
                        <div class="about-image-wrapper h-100">
                            <img src="image/about-technician.jpg" alt="Personal técnico certificado de Multiservicios Aguilar" class="img-fluid">
                        </div>
                    </div>
                </div>

                <!-- Columna Derecha: Tarjetas de Pilares Principales -->
                <div class="col-lg-7 reveal-right">
                    <div class="about-pillars-list">
                        <!-- Pilar 01 -->
                        <div class="about-pillar-row">
                            <span class="pillar-number">01</span>
                            <div class="pillar-body">
                                <h3>Soluciones Integrales de Principio a Fin</h3>
                                <p>Nuestra misión es cubrir cada etapa de su proyecto: cálculo de carga térmica, venta de equipos, montaje especializado y pólizas de mantenimiento preventivo.</p>
                            </div>
                        </div>

                        <!-- Pilar 02 -->
                        <div class="about-pillar-row">
                            <span class="pillar-number">02</span>
                            <div class="pillar-body">
                                <h3>Compromiso Ético & Sustentabilidad</h3>
                                <p>Nuestra visión es liderar con tecnología Inverter y refrigerantes ecológicos certificados bajo estrictas normas de seguridad ambiental que reducen su gasto eléctrico.</p>
                            </div>
                        </div>

                        <!-- Pilar 03 -->
                        <div class="about-pillar-row">
                            <span class="pillar-number">03</span>
                            <div class="pillar-body">
                                <h3>Respuesta Técnica Urgente 24/7</h3>
                                <p>Atención especializada de emergencia las 24 horas para resolver fugas, fallas eléctricas o compresores, garantizando la continuidad de su negocio.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Bootstrap 5.3 JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>

    <!-- Scripts de Animación y Rotación -->
    <script>
        // 1. Rotación de Palabras en Hero
        (function() {
            const words = [
                "garantía",
                "confianza",
                "eficiencia",
                "innovación",
                "tranquilidad"
            ];
            
            let index = 0;
            const wordElement = document.getElementById("hero-animated-word");
            if (!wordElement) return;

            setInterval(() => {
                wordElement.classList.add("word-exit");

                setTimeout(() => {
                    index = (index + 1) % words.length;
                    wordElement.textContent = words[index];

                    wordElement.classList.remove("word-exit");
                    wordElement.classList.add("word-enter");

                    setTimeout(() => {
                        wordElement.classList.remove("word-enter");
                    }, 450);
                }, 280);

            }, 2400);
        })();

        // 2. Animaciones de Entrada con Scroll (Reveal Up / Left / Right)
        document.addEventListener('DOMContentLoaded', () => {
            const directionalReveals = document.querySelectorAll('.reveal-left, .reveal-right, .reveal-up');
            
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('active');
                    }
                });
            }, {
                threshold: 0.15,
                rootMargin: '0px 0px -40px 0px'
            });

            directionalReveals.forEach(el => observer.observe(el));
        });
    </script>
</body>
</html>