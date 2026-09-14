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

                        <!-- Pilar 04 -->
                        <div class="about-pillar-row">
                            <span class="pillar-number">04</span>
                            <div class="pillar-body">
                                <h3>Cobertura Nacional</h3>
                                <p>Cubrimos todo el territorio nacional para brindar soluciones de refrigeración a cualquier tipo de sector empresarial.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- ==========================================================================
                 BLOQUE: MISIÓN & VISIÓN (GRID EN PC / CARRUSEL EN MÓVIL)
                 ========================================================================== -->
            <div class="mission-vision-grid mt-5 pt-lg-4">
                <div class="row g-4 mv-carousel-track" id="mv-carousel-track">
                    <!-- Tarjeta 1: Misión -->
                    <div class="col-lg-6 mv-carousel-item reveal-left">
                        <div class="mv-card mv-card-mission h-100">
                            <div class="mv-header justify-content-end">
                                <span class="mv-badge">Propósito & Compromiso</span>
                            </div>
                            <h3 class="mv-title">Nuestra Misión</h3>
                            <p class="mv-text">
                                Brindar soluciones integrales de refrigeración comercial e industrial con la más alta precisión técnica, garantizando la continuidad operativa y la cadena de frío de nuestros clientes mediante tecnología de vanguardia, refacciones originales y atención inmediata.
                            </p>
                            <div class="mv-perks">
                                <div class="mv-perk-item">
                                    <i class="bi bi-patch-check-fill"></i>
                                    <span>Respuesta Técnica Inmediata</span>
                                </div>
                                <div class="mv-perk-item">
                                    <i class="bi bi-patch-check-fill"></i>
                                    <span>Garantía por Escrito de 30 Días</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Tarjeta 2: Visión -->
                    <div class="col-lg-6 mv-carousel-item reveal-right">
                        <div class="mv-card mv-card-vision h-100">
                            <div class="mv-header justify-content-end">
                                <span class="mv-badge">Futuro & Liderazgo</span>
                            </div>
                            <h3 class="mv-title">Nuestra Visión</h3>
                            <p class="mv-text">
                                Consolidarnos como la empresa referente y líder en soluciones térmicas y refrigeración sustentable en todo el Bajío y la República Mexicana, reconocidos por nuestra innovación con tecnología Inverter, responsabilidad ecológica y la excelencia de nuestro equipo humano.
                            </p>
                            <div class="mv-perks">
                                <div class="mv-perk-item">
                                    <i class="bi bi-patch-check-fill"></i>
                                    <span>Tecnología Ecológica Inverter</span>
                                </div>
                                <div class="mv-perk-item">
                                    <i class="bi bi-patch-check-fill"></i>
                                    <span>Liderazgo & Cobertura Nacional</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Indicadores Dots en Móvil -->
                <div class="mv-mobile-dots d-flex d-lg-none justify-content-center gap-2 mt-3" id="mv-mobile-dots">
                    <span class="mv-dot active"></span>
                    <span class="mv-dot"></span>
                </div>
            </div>
        </div>
    </section>

    <!-- Sección Servicios con Mazo de Tarjetas 3D (Inspirado en Clandestine) -->
    <section class="services-section" id="servicios">
        <div class="container">
            <!-- Encabezado de la Sección -->
            <div class="services-header text-center reveal-up">
                <span class="section-label">Nuestros Servicios</span>
                <h2 class="section-title">
                    Soluciones en Climatización & Refrigeración Industrial
                </h2>
                <p class="section-lead">
                    Ingeniería de vanguardia, diagnóstico de precisión y respuesta inmediata. Descubra nuestras especialidades técnicas diseñadas para asegurar el confort y la continuidad operativa de su empresa.
                </p>
            </div>

            <!-- Mazo de Tarjetas 3D + Ficha Técnica (Deck Showcase) -->
            <div class="services-deck-container reveal-up">
                <div class="row align-items-center g-4 g-xl-5">
                    <!-- Columna Izquierda: 3D Stacked Cards Deck -->
                    <div class="col-lg-6 d-flex justify-content-center">
                        <div class="deck-wrapper">
                            <!-- Tarjeta Trasera 2 (Inclinada hacia la izquierda) -->
                            <div class="deck-card deck-card-back-2" id="deck-card-back-2">
                                <img src="image/Services5.jpeg" alt="Servicio en azotea" class="img-fluid">
                            </div>
                            <!-- Tarjeta Trasera 1 (Inclinada hacia la derecha) -->
                            <div class="deck-card deck-card-back-1" id="deck-card-back-1">
                                <img src="image/Service1.jpeg" alt="Cámara frigorífica" class="img-fluid">
                            </div>
                            <!-- Tarjeta Frontal Activa -->
                            <div class="deck-card deck-card-front" id="deck-card-front">
                                <img id="deck-img" src="image/Service2.jpeg" alt="Mantenimiento e Instalación de Chillers Industriales" class="img-fluid">
                                <div class="deck-badge" id="deck-badge">01 / 04</div>
                                <div class="deck-float-pill" id="deck-float-pill">
                                    <i class="bi bi-patch-check-fill"></i>
                                    <span>Garantía de 30 Días</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Columna Derecha: Contenido Detallado y Controles de Navegación -->
                    <div class="col-lg-6">
                        <div class="deck-content-box ps-lg-3" id="deck-content-box">
                            <span class="deck-category-tag" id="deck-tag">Refrigeración Industrial & Procesos</span>
                            <h3 class="deck-service-title" id="deck-title">Chillers y Torres de Enfriamiento</h3>
                            <h4 class="deck-service-subtitle" id="deck-subtitle">Enfriadoras de Agua Helada & Sistemas Industriales</h4>
                            
                            <p class="deck-description" id="deck-desc">
                                Especialistas en enfriadoras de agua (agua helada y enfriadas por aire) y torres de enfriamiento. Esenciales para la manufactura de plásticos, alimentos, bebidas, farmacéutica y climatización de grandes naves.
                            </p>

                            <ul class="deck-features-list" id="deck-features">
                                <li>
                                    <i class="bi bi-check2-circle"></i>
                                    <span>Mantenimiento preventivo y correctivo a compresores y bombas de recirculación.</span>
                                </li>
                                <li>
                                    <i class="bi bi-check2-circle"></i>
                                    <span>Calibración de temperatura estable y monitoreo de presiones de refrigeración.</span>
                                </li>
                                <li>
                                    <i class="bi bi-check2-circle"></i>
                                    <span>Atención integral a chillers de agua helada y equipos de climatización continua.</span>
                                </li>
                                <li>
                                    <i class="bi bi-check2-circle"></i>
                                    <span>Prolongación de vida útil del equipo (15 a 20 años) con rutinas especializadas.</span>
                                </li>
                            </ul>

                            <!-- Controles de Navegación Circulares + Botón CTA (Estilo Clandestine) -->
                            <div class="deck-controls-bar">
                                <div class="deck-nav-buttons">
                                    <button type="button" class="btn-deck-nav" id="btn-deck-prev" aria-label="Servicio anterior">
                                        <i class="bi bi-arrow-left"></i>
                                    </button>
                                    <button type="button" class="btn-deck-nav" id="btn-deck-next" aria-label="Siguiente servicio">
                                        <i class="bi bi-arrow-right"></i>
                                    </button>
                                    <div class="deck-counter" id="deck-counter">
                                        <span class="current">01</span>
                                        <span class="divider">/</span>
                                        <span class="total">04</span>
                                    </div>
                                </div>
                                <a id="deck-cta-btn" href="https://wa.me/524777871179?text=Hola,%20solicito%20cotizaci%C3%B3n%20para%20servicio%20de%20Chillers%20y%20Refrigeraci%C3%B3n%20Industrial" target="_blank" class="btn btn-primary-hero">
                                    <span>Solicitar Cotización</span>
                                    <i class="bi bi-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- ==========================================================================
                 ALCANCE TOTAL: CARRUSEL DE 6 CAPACIDADES (ESTILO BEAN SCENE)
                 ========================================================================== -->
            <div class="services-scope-section">
                <!-- Encabezado Centrado -->
                <div class="services-scope-header text-center reveal-up">
                    <span class="section-label">Alcance Total & Diferenciadores</span>
                    <h3 class="services-scope-title">¿Por qué somos la mejor opción para tu empresa?</h3>
                    <p class="services-scope-subtitle">No solo reparamos equipos, aseguramos la continuidad operativa y la rentabilidad de su negocio con estándares de clase mundial.</p>
                </div>

                <!-- Carrusel Interactivo de Tarjetas -->
                <div class="scope-carousel-wrapper position-relative reveal-up">
                    <!-- Botón Anterior -->
                    <button type="button" class="btn-scope-nav btn-scope-prev" id="btn-scope-prev" aria-label="Servicio anterior">
                        <i class="bi bi-chevron-left"></i>
                    </button>

                    <!-- Pista de Desplazamiento Horizontal (Scroll Snap) -->
                    <div class="scope-carousel-track" id="scope-carousel-track">
                        <!-- Tarjeta 1: Venta y Distribución -->
                        <div class="scope-carousel-item">
                            <div class="service-scope-card h-100">
                                <div class="scope-icon-box">
                                    <i class="bi bi-box-seam"></i>
                                </div>
                                <h4>Venta y Distribución</h4>
                                <p>Equipos de marcas líderes, refacciones 100% originales y refrigerantes ecológicos certificados.</p>
                                <span class="scope-tag">Tecnología Inverter</span>
                            </div>
                        </div>

                        <!-- Tarjeta 2: Diseño e Ingeniería Térmica -->
                        <div class="scope-carousel-item">
                            <div class="service-scope-card h-100">
                                <div class="scope-icon-box">
                                    <i class="bi bi-calculator"></i>
                                </div>
                                <h4>Diseño e Ingeniería</h4>
                                <p>Planificación y cálculo de carga térmica precisa para proyectos comerciales e industriales.</p>
                                <span class="scope-tag">Cálculo de Cargas</span>
                            </div>
                        </div>

                        <!-- Tarjeta 3: Instalación Certificada -->
                        <div class="scope-carousel-item">
                            <div class="service-scope-card h-100">
                                <div class="scope-icon-box">
                                    <i class="bi bi-tools"></i>
                                </div>
                                <h4>Instalación Certificada</h4>
                                <p>Montaje seguro de ductos, tuberías, manejadoras de aire (UMA), chillers y cuartos fríos herméticos.</p>
                                <span class="scope-tag">Montaje Seguro</span>
                            </div>
                        </div>

                        <!-- Tarjeta 4: Mantenimiento Preventivo -->
                        <div class="scope-carousel-item">
                            <div class="service-scope-card h-100">
                                <div class="scope-icon-box">
                                    <i class="bi bi-shield-check"></i>
                                </div>
                                <h4>Mantenimiento Preventivo</h4>
                                <p>Limpieza profunda de serpentines, medición de presiones, amperajes y calibración para evitar paros.</p>
                                <span class="scope-tag">Pólizas Periódicas</span>
                            </div>
                        </div>

                        <!-- Tarjeta 5: Servicio Técnico Urgente 24/7 -->
                        <div class="scope-carousel-item">
                            <div class="service-scope-card h-100">
                                <div class="scope-icon-box">
                                    <i class="bi bi-lightning-charge"></i>
                                </div>
                                <h4>Reparación y Urgencias 24/7</h4>
                                <p>Diagnóstico de fallas urgentes las 24 horas, detección de fugas de gas y cambio de compresores con garantía.</p>
                                <span class="scope-tag">Respuesta 24/7</span>
                            </div>
                        </div>

                        <!-- Tarjeta 6: Sustentabilidad y Ahorro -->
                        <div class="scope-carousel-item">
                            <div class="service-scope-card h-100">
                                <div class="scope-icon-box">
                                    <i class="bi bi-recycle"></i>
                                </div>
                                <h4>Sustentabilidad & Ahorro</h4>
                                <p>Tecnología Inverter y gases ecológicos que reducen sustancialmente el gasto eléctrico y la huella de carbono.</p>
                                <span class="scope-tag">Ahorro de Luz</span>
                            </div>
                        </div>
                    </div>

                    <!-- Botón Siguiente -->
                    <button type="button" class="btn-scope-nav btn-scope-next" id="btn-scope-next" aria-label="Siguiente servicio">
                        <i class="bi bi-chevron-right"></i>
                    </button>
                </div>

                <!-- Indicadores / Dots del Carrusel -->
                <div class="scope-carousel-dots d-flex justify-content-center gap-2 mt-4" id="scope-carousel-dots"></div>

                <!-- Bloque CTA Inferior (Inspirado en Bean Scene: "Great ideas start with...") -->
                <div class="scope-cta-strip text-center mt-5 reveal-up">
                    <h4>Grandes proyectos inician con una asesoría técnica especializada.</h4>
                    <p>Permítanos evaluar sus instalaciones y ofrecerle la solución más eficiente y rentable para su empresa.</p>
                    <a href="https://wa.me/524777871179?text=Hola,%20solicito%20una%20asesor%C3%ADa%20t%C3%A9cnica%20para%20un%20proyecto" target="_blank" class="btn btn-primary-hero">
                        <span>Comenzar Hoy Mismo</span>
                        <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            </div>

            <!-- Banner de Cobertura Regional y Ventajas Competitivas -->
            <div class="services-coverage-banner reveal-up">
                <div class="row align-items-center g-4">
                    <div class="col-lg-7">
                        <span class="coverage-badge">
                            <i class="bi bi-geo-alt-fill"></i> Cobertura Regional & Nacional
                        </span>
                        <h3 class="coverage-title">Servicio y Soporte Técnico en Todo el Bajío y la República</h3>
                        <p class="coverage-desc">
                            Atendemos activamente en <strong>Guadalajara, Guanajuato, Querétaro, Aguascalientes, Romita, Apaseo el Grande</strong> y zonas industriales clave.
                        </p>
                        <div class="coverage-perks">
                            <div class="coverage-perk-item">
                                <i class="bi bi-clock-history"></i>
                                <span>Cotizaciones en menos de 24h</span>
                            </div>
                            <div class="coverage-perk-item">
                                <i class="bi bi-shield-lock-fill"></i>
                                <span>Garantía por escrito de 30 días</span>
                            </div>
                            <div class="coverage-perk-item">
                                <i class="bi bi-award-fill"></i>
                                <span>Técnicos certificados</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 text-lg-end text-center">
                        <a href="https://wa.me/524777871179?text=Hola,%20deseo%20m%C3%A1s%20informaci%C3%B3n%20sobre%20la%20cobertura%20y%20servicios%20de%20refrigeraci%C3%B3n" target="_blank" class="btn btn-banner-cta">
                            <i class="bi bi-whatsapp"></i>
                            <span>Hablar con un Especialista</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Bootstrap 5.3 JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>

    <!-- Scripts de Interactividad y Animaciones -->
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

        // 2. Interactividad del Mazo de Tarjetas 3D (Estilo Clandestine)
        (function() {
            const servicesData = [
                {
                    badge: "01 / 04",
                    currentNum: "01",
                    floatTag: "Garantía de 30 Días",
                    image: "image/Service2.jpeg",
                    alt: "Mantenimiento e Instalación de Chillers Industriales",
                    tag: "Refrigeración Industrial & Procesos",
                    title: "Chillers y Torres de Enfriamiento",
                    subtitle: "Enfriadoras de Agua Helada & Sistemas Industriales",
                    description: "Especialistas en enfriadoras de agua (agua helada y enfriadas por aire) y torres de enfriamiento. Esenciales para la manufactura de plásticos, alimentos, bebidas, farmacéutica y climatización de grandes naves.",
                    features: [
                        "Mantenimiento preventivo y correctivo a compresores y bombas de recirculación.",
                        "Calibración de temperatura estable y monitoreo de presiones de refrigeración.",
                        "Atención integral a chillers de agua helada y equipos de climatización continua.",
                        "Prolongación de vida útil del equipo (15 a 20 años) con rutinas especializadas."
                    ],
                    ctaText: "Solicitar Cotización de Chillers",
                    ctaUrl: "https://wa.me/524777871179?text=Hola,%20solicito%20cotizaci%C3%B3n%20para%20servicio%20de%20Chillers%20y%20Refrigeraci%C3%B3n%20Industrial"
                },
                {
                    badge: "02 / 04",
                    currentNum: "02",
                    floatTag: "Cadena de Frío Segura",
                    image: "image/Service1.jpeg",
                    alt: "Instalación y Montaje de Cámaras Frigoríficas y Cuartos Fríos",
                    tag: "Conservación & Cadena de Frío",
                    title: "Cuartos Fríos y Cámaras Frigoríficas",
                    subtitle: "Montaje, Aislamiento Térmico & Conservación Crítica",
                    description: "Diseño, montaje y mantenimiento para cámaras de conservación y congelación industrial. Aseguramos la integridad térmica requerida para alimentos, perecederos, vacunas y medicamentos sin riesgo de descomposición.",
                    features: [
                        "Preservación crítica de alimentos, perecederos, vacunas y medicamentos seguros.",
                        "Montaje seguro de paneles aislantes, ductos y tuberías de refrigeración.",
                        "Instalación y ajuste de Unidades Manejadoras de Aire (UMA) y difusores.",
                        "Sellado hermético de alta eficiencia y prevención de pérdidas de temperatura."
                    ],
                    ctaText: "Cotizar Cuartos Fríos y Cámaras",
                    ctaUrl: "https://wa.me/524777871179?text=Hola,%20solicito%20cotizaci%C3%B3n%20para%20C%C3%A1maras%20Frigor%C3%ADficas%20y%20Cuartos%20Fr%C3%ADos"
                },
                {
                    badge: "03 / 04",
                    currentNum: "03",
                    floatTag: "Ahorro Energético Inverter",
                    image: "image/Services5.jpeg",
                    alt: "Sistemas de Climatización y Aire Acondicionado Inverter",
                    tag: "Climatización Comercial & Residencial",
                    title: "Aires Acondicionados & Climatización",
                    subtitle: "Mini Split, Paquete, Fan & Coil y Cassette",
                    description: "Equipos de última generación y marcas líderes (LG, Trane, Mirage, York) para confort ambiental en oficinas, industrias y residencias, con tecnología Inverter para máximo ahorro de luz.",
                    features: [
                        "Suministro e instalación de equipos Mini Split, Paquete, Divididos, Fan & Coil y Cassette.",
                        "Tecnología Inverter de alta eficiencia que reduce significativamente el consumo eléctrico.",
                        "Carga y manejo de refrigerantes ecológicos certificados que protegen la capa de ozono.",
                        "Planificación y cálculo de carga térmica para optimizar el rendimiento y confort."
                    ],
                    ctaText: "Cotizar Aire Acondicionado",
                    ctaUrl: "https://wa.me/524777871179?text=Hola,%20solicito%20cotizaci%C3%B3n%20para%20sistemas%20de%20Aire%20Acondicionado"
                },
                {
                    badge: "04 / 04",
                    currentNum: "04",
                    floatTag: "Atención 24/7 en Campo",
                    image: "image/WhatsApp Image 2026-09-02 at 6.04.40 PM.jpeg",
                    alt: "Servicio Técnico Urgente y Mantenimiento 24/7",
                    tag: "Soporte Técnico de Emergencia",
                    title: "Mantenimiento y Urgencias 24/7",
                    subtitle: "Pólizas Preventivas & Reparación Especializada",
                    description: "Respuesta técnica inmediata los 365 días del año para resolver averías críticas, fugas de gas refrigerante o fallas en compresores, respaldado con garantía por escrito de 30 días.",
                    features: [
                        "Atención técnica de emergencias las 24 horas para evitar paros de producción.",
                        "Detección y reparación de fugas de gas refrigerante y fallas eléctricas.",
                        "Diagnóstico especializado, reconstrucción y cambio de compresores.",
                        "Garantía por escrito de 30 días y stock permanente de refacciones originales."
                    ],
                    ctaText: "Solicitar Asistencia Técnica 24/7",
                    ctaUrl: "https://wa.me/524777871179?text=Hola,%20requiero%20asistencia%20t%C3%A9cnica%20de%20emergencia%20para%20un%20equipo"
                }
            ];

            let currentIndex = 0;
            const total = servicesData.length;

            const deckCardFront = document.getElementById("deck-card-front");
            const deckCardBack1 = document.getElementById("deck-card-back-1");
            const deckCardBack2 = document.getElementById("deck-card-back-2");
            const deckImg = document.getElementById("deck-img");
            const deckBadge = document.getElementById("deck-badge");
            const deckFloatPill = document.getElementById("deck-float-pill");
            const deckTag = document.getElementById("deck-tag");
            const deckTitle = document.getElementById("deck-title");
            const deckSubtitle = document.getElementById("deck-subtitle");
            const deckDesc = document.getElementById("deck-desc");
            const deckFeatures = document.getElementById("deck-features");
            const deckCtaBtn = document.getElementById("deck-cta-btn");
            const deckContentBox = document.getElementById("deck-content-box");
            const deckCounterCurrent = document.querySelector("#deck-counter .current");
            const btnPrev = document.getElementById("btn-deck-prev");
            const btnNext = document.getElementById("btn-deck-next");

            if (!deckImg || !btnPrev || !btnNext) return;

            function updateDeck(direction = "next") {
                const data = servicesData[currentIndex];
                const nextData1 = servicesData[(currentIndex + 1) % total];
                const nextData2 = servicesData[(currentIndex + 2) % total];

                // Animación de salida en el mazo y texto
                deckCardFront.style.transition = "transform 0.35s cubic-bezier(0.4, 0, 0.2, 1), opacity 0.3s ease";
                deckCardFront.style.transform = direction === "next" ? "translateX(-25px) rotate(-4deg) scale(0.96)" : "translateX(25px) rotate(4deg) scale(0.96)";
                deckCardFront.style.opacity = "0.4";

                deckContentBox.style.transition = "opacity 0.25s ease, transform 0.25s ease";
                deckContentBox.style.opacity = "0";
                deckContentBox.style.transform = "translateY(10px)";

                setTimeout(() => {
                    // Actualizar imágenes del mazo
                    deckImg.src = data.image;
                    deckImg.alt = data.alt;
                    
                    if (deckCardBack1) {
                        const backImg1 = deckCardBack1.querySelector("img");
                        if (backImg1) backImg1.src = nextData1.image;
                    }
                    if (deckCardBack2) {
                        const backImg2 = deckCardBack2.querySelector("img");
                        if (backImg2) backImg2.src = nextData2.image;
                    }

                    // Actualizar datos del frente
                    deckBadge.textContent = data.badge;
                    if (deckCounterCurrent) deckCounterCurrent.textContent = data.currentNum;
                    if (deckFloatPill) {
                        deckFloatPill.innerHTML = `<i class="bi bi-patch-check-fill"></i><span>${data.floatTag}</span>`;
                    }
                    deckTag.textContent = data.tag;
                    deckTitle.textContent = data.title;
                    deckSubtitle.textContent = data.subtitle;
                    deckDesc.textContent = data.description;

                    // Actualizar características
                    deckFeatures.innerHTML = data.features.map(feat => `
                        <li>
                            <i class="bi bi-check2-circle"></i>
                            <span>${feat}</span>
                        </li>
                    `).join("");

                    // Actualizar botón CTA
                    if (deckCtaBtn) {
                        deckCtaBtn.querySelector("span").textContent = data.ctaText;
                        deckCtaBtn.href = data.ctaUrl;
                    }

                    // Restaurar posición y opacidad con animación fluida
                    deckCardFront.style.transform = "translateX(0) rotate(0deg) scale(1)";
                    deckCardFront.style.opacity = "1";
                    deckContentBox.style.opacity = "1";
                    deckContentBox.style.transform = "translateY(0)";
                }, 220);
            }

            btnNext.addEventListener("click", () => {
                currentIndex = (currentIndex + 1) % total;
                updateDeck("next");
            });

            btnPrev.addEventListener("click", () => {
                currentIndex = (currentIndex - 1 + total) % total;
                updateDeck("prev");
            });
        })();

        // 3. Interactividad del Carrusel de Alcance Total
        (function() {
            const track = document.getElementById('scope-carousel-track');
            const prevBtn = document.getElementById('btn-scope-prev');
            const nextBtn = document.getElementById('btn-scope-next');
            const dotsContainer = document.getElementById('scope-carousel-dots');

            if (!track || !prevBtn || !nextBtn) return;

            const items = track.querySelectorAll('.scope-carousel-item');
            if (items.length === 0) return;

            // Generar dots dinámicos
            items.forEach((_, i) => {
                const dot = document.createElement('button');
                dot.type = 'button';
                dot.className = `scope-dot ${i === 0 ? 'active' : ''}`;
                dot.setAttribute('aria-label', `Ir a diapositiva ${i + 1}`);
                dot.addEventListener('click', () => {
                    const itemWidth = items[0].offsetWidth + 24;
                    track.scrollTo({ left: i * itemWidth, behavior: 'smooth' });
                });
                dotsContainer.appendChild(dot);
            });

            const dots = dotsContainer.querySelectorAll('.scope-dot');

            function getScrollAmount() {
                return items[0].offsetWidth + 24;
            }

            nextBtn.addEventListener('click', () => {
                track.scrollBy({ left: getScrollAmount(), behavior: 'smooth' });
            });

            prevBtn.addEventListener('click', () => {
                track.scrollBy({ left: -getScrollAmount(), behavior: 'smooth' });
            });

            // Actualizar active dot al hacer scroll
            track.addEventListener('scroll', () => {
                const scrollLeft = track.scrollLeft;
                const itemWidth = items[0].offsetWidth + 24;
                const activeIndex = Math.min(items.length - 1, Math.max(0, Math.round(scrollLeft / itemWidth)));
                dots.forEach((d, idx) => {
                    d.classList.toggle('active', idx === activeIndex);
                });
            }, { passive: true });
        })();

        // 4. Indicador de Dots en Móvil para Misión & Visión
        (function() {
            const mvTrack = document.getElementById('mv-carousel-track');
            const mvDots = document.querySelectorAll('#mv-mobile-dots .mv-dot');
            if (!mvTrack || mvDots.length === 0) return;

            mvTrack.addEventListener('scroll', () => {
                const scrollLeft = mvTrack.scrollLeft;
                const width = mvTrack.offsetWidth * 0.75;
                const activeIdx = Math.min(mvDots.length - 1, Math.max(0, Math.round(scrollLeft / width)));
                mvDots.forEach((d, idx) => d.classList.toggle('active', idx === activeIdx));
            }, { passive: true });
        })();

        // 5. Animaciones de Entrada con Scroll (Reveal Up / Left / Right)
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