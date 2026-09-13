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
    
    <!-- Estilos Personalizados -->
    <link href="style.css" type="text/css" rel="stylesheet">
</head>

<body>
    <!-- Encabezado y Barra de Navegación -->
    <header class="main-header">
        <div class="container">
            <nav class="navbar navbar-expand-lg main-navbar">
                <!-- Marca / Logotipo -->
                <a class="brand-wrapper" href="#inicio">
                    <img src="image/logo.png" alt="Logo Multiservicios Aguilar" class="img-fluid brand-logo">
                    <span class="brand-title">Multiservicios Aguilar</span>
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

    <!-- Bootstrap 5.3 JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>

    <!-- Script de Rotación de Palabra -->
    <script>
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
    </script>
</body>
</html>