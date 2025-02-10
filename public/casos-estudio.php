<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Este es el código para enlazar el CSS con el HTML -->
        <link href="/css/main.css" rel="stylesheet" type="text/css"/>

        <!-- Este es el código para agregar favicon. Se pueden cambiar las dimensiones por: 16x16, 32x32, 48x48, 64x64  -->
        <link rel="icon" href="/images/brand/icon.png" sizes="16x16" type="image/png"/>

        <!-- Fuentes: Montserrat Alternates & Quicksand -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat+Alternates:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Quicksand:wght@300..700&display=swap" rel="stylesheet">

        <!-- Información SEO -->
        <meta name="author" content="Cinthya Castañeda">
        <meta name="contact" content="contacto@casha.mx">
        <meta name="description" content="Soy Casha, experta en optimización web y experiencia de usuario. Descubre mis proyectos donde he mejorado los KPI's clave y la usabilidad de las páginas web para aumentar la eficiencia y satisfacción de los usuarios en las empresa.">

        <!-- Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="stylesheet" href="https://unpkg.com/bs-brain@2.0.4/components/projects/project-3/assets/css/project-3.css">
        <link rel="stylesheet" href="https://unpkg.com/bs-brain@2.0.4/components/heroes/hero-2/assets/css/hero-2.css">


        <!-- Librería de icons -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.0/font/bootstrap-icons.min.css">

        <title> casha | Casos de Estudio en Marketing y UX/UI </title>
    </head>
    <body>
        <!-- Navbar -->
        <header>
            <nav class="navbar fixed-top navbar-container bsb-navbar bsb-navbar-caret">
                <div class="container position-relative justify-content-center">
                    <a class="navbar-brand" href="/index.html">
                        <img src="/images/brand/logo.png" alt="casha logo" width="135" height="44">
                    </a>
                    <button class="navbar-toggler border-0 position-absolute start-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
                        </svg>
                    </button>
                    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                        <div class="offcanvas-header menu-container">
                            <h3 class="offcanvas-title menu-textHeader" id="offcanvasNavbarLabel">
                                Menú
                            </h3>
                            <button type="button" class="btn-close icon-style " data-bs-dismiss="offcanvas" aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body menu-container">
                            <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                                <!-- Home -->
                                <li class="nav-item">
                                    <a class="menu-text active d-flex align-items-center justify-content-start" aria-current="page" href="/index.html">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-heart-fill icon-padding" viewBox="0 0 16 16">
                                            <path d="M7.293 1.5a1 1 0 0 1 1.414 0L11 3.793V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v3.293l2.354 2.353a.5.5 0 0 1-.708.707L8 2.207 1.354 8.853a.5.5 0 1 1-.708-.707z"/>
                                            <path d="m14 9.293-6-6-6 6V13.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5zm-6-.811c1.664-1.673 5.825 1.254 0 5.018-5.825-3.764-1.664-6.691 0-5.018"/>
                                        </svg>
                                        Home 
                                    </a>
                                </li>
                                <!-- Proyectos -->
                                <li class="nav-item">
                                    <a class="menu-text d-flex align-items-center justify-content-start" href="/pages/casos-estudio.html">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-zip-fill icon-padding" viewBox="0 0 16 16">
                                            <path d="M5.5 9.438V8.5h1v.938a1 1 0 0 0 .03.243l.4 1.598-.93.62-.93-.62.4-1.598a1 1 0 0 0 .03-.243"/>
                                            <path d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0M9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1m-4-.5V2h-1V1H6v1h1v1H6v1h1v1H6v1h1v1H5.5V6h-1V5h1V4h-1V3zm0 4.5h1a1 1 0 0 1 1 1v.938l.4 1.599a1 1 0 0 1-.416 1.074l-.93.62a1 1 0 0 1-1.109 0l-.93-.62a1 1 0 0 1-.415-1.074l.4-1.599V8.5a1 1 0 0 1 1-1"/>
                                        </svg>
                                        Casos de Estudio
                                    </a>
                                </li>
                                <!-- Conóceme -->
                                <li class="nav-item">
                                    <a class="menu-text d-flex align-items-center justify-content-start" href="/pages/conoceme.html">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-hearts icon-padding" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd" d="M4.931.481c1.627-1.671 5.692 1.254 0 5.015-5.692-3.76-1.626-6.686 0-5.015m6.84 1.794c1.084-1.114 3.795.836 0 3.343-3.795-2.507-1.084-4.457 0-3.343M7.84 7.642c2.71-2.786 9.486 2.09 0 8.358-9.487-6.268-2.71-11.144 0-8.358"/>
                                        </svg>
                                        Conóceme
                                    </a>
                                </li>
                            </ul>
                            <hr class="w-50 mx-auto border-dark-subtle mt-5 mb-4">
                            <a href="/pages/contactame.html">
                                <button class="btn-lg w-100 buttonp mb-3" type="button" value="input"> 
                                    <i class="bi bi-chat-heart-fill icon-padding"></i>
                                    Charlemos
                                </button>
                            </a>
                            <a href="/images/cv/Cinthya Castañeda ES.pdf" download="Cinthya-Castaneda">
                                <button class="btn-lg w-100 buttons" type="button"> 
                                    <i class="bi bi-cloud-download-fill icon-padding "></i>
                                    Currículum 
                                </button>
                            </a>
                        </div>
                        <div class="menu-container" tabindex="-1">
                            <div class="row justify-content-between align-items-end mx-3 mb-3">
                                <div class="col-auto align-items-center">
                                    <p class="text-style">
                                        <strong>Conectemos:</strong> 
                                    </p>
                                    <div>
                                        <a class="me-2 icon-style" href="https://github.com/cinthyacasha">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-github text-style" viewBox="0 0 16 16">
                                                <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27s1.36.09 2 .27c1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.01 8.01 0 0 0 16 8c0-4.42-3.58-8-8-8"/>
                                            </svg>
                                        </a>
                                        <a class="me-2 icon-style" href="https://www.linkedin.com/in/cinthyacastaneda/">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-linkedin text-style" viewBox="0 0 16 16">
                                                <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854zm4.943 12.248V6.169H2.542v7.225zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248S2.4 3.226 2.4 3.934c0 .694.521 1.248 1.327 1.248zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016l.016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225z"/>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                                <!-- Idiomas -->
                                <div class="col-auto align-items-center">
                                    <div class="dropdown dropup">
                                        <button class="btn dropdown-toggle" type="button" id="languageDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="bi bi-globe"></i>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-end shadow" aria-labelledby="languageDropdown">
                                            <li>
                                                <a class="dropdown-item text-end" style="color: #0C141D;" href="/pages/proyectos.html">
                                                    Español
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item text-end" style="color: #0C141D;" href="/pages/case-studies.html">
                                                    English
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </header>
        <main>
            <!-- Sección de Proyectos -->
            <section class="py-3 py-md-5 py-xl-8 mt-5 proyectosContainer">
                <div class="container">
                    <div class="row d-flex justify-content-center align-items-center">
                        <div class="col-12 col-md-10 col-lg-8 col-xl-7 col-xxl-11 textTitulos">
                            <h1 class="display-5 fw-bold mt-5 mb-4 text-uppercase text-center textTitulos">
                                Casos de Estudio
                            </h1>
                            <p class="text-style mb-5 text-center lead fs-4">
                                En está página podrás encontrar algunos de los proyectos en los que he tenido la oportunidad de participar.
                                Cada caso ofrece un análisis detallado de los retos enfrentados y los resulados obtenidos, brindando insights que me ayudaron a crecer.
                            </p>
                        </div>
                        <hr class="w-50 mx-auto mb-5 mb-xl-9 border-dark-subtle">
                    </div>
                </div>
                <!-- Proyectos -->
                <div class="container overflow-hidden">
                    <div class="row gy-5 mx-5 d-flex justify-content-center align-items-center">
                        <!-- Rainbow -->
                        <div class="col-12 d-flex justify-content-center align-items-center">
                            <div class="row align-items-center gy-3 gy-md-0 gx-xl-5">
                                <div class="col-xs-12 col-md-5">
                                    <div class="img-wrapper position-relative bsb-hover-push">
                                        <a href="/pages/rainbow-play-cafe.html">
                                            <span class="badge rounded-pill pillColorRW position-absolute top-0 start-0 m-3">
                                                Rediseño Web
                                            </span>
                                            <div class="d-flex justify-content-end px-3">
                                                <img class="img-fluid rounded w-60 h-60 object-fit-cover" loading="lazy" src="/images/proyectos/rainbow.png" alt="Tablero de juego con clavijas de colores formando figuras de frutas y objetos en Rainbow Play Café.">
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-md-6">
                                    <div>
                                        <p class="textSecundario mb-1">
                                            Ene 26, 2024
                                        </p>
                                        <h2 class="card-title entry-title h4 mb-3">
                                            <a class="textTitulos" href="/pages/rainbow-play-cafe.html">
                                                Impulsando el incremento en reservaciones de Rainbow Play Cafe 
                                            </a>
                                        </h2>
                                        <p class="mb-4 textCard">
                                            Descubre cómo Rainbow Play Café multiplicó sus reservaciones tras una renovación de su página web. ¡Explora cómo un cambio digital transformó su negocio! 
                                        </p>
                                        <a href="/pages/rainbow-play-cafe.html">
                                            <button type="button" class="buttonpCards btn-sm px-3">
                                                Leer más
                                            </button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- GC Security Solutions -->
                        <div class="col-12 d-flex justify-content-center align-items-center">
                            <div class="row align-items-center flex-row-reverse gy-3 gy-md-0 gx-xl-5">
                                <div class="col-xs-12 col-md-5">
                                    <div class="img-wrapper position-relative bsb-hover-push">
                                        <a href="/pages/gcss.html">
                                            <span class="badge rounded-pill pillColorRW position-absolute top-0 start-0 m-3">
                                                Rediseño Web
                                            </span>
                                            <div class="d-flex justify-content-end px-3">
                                                <img class="img-fluid rounded w-60 h-60 object-fit-cover" loading="lazy" src="/images/proyectos/gss.png" alt="Técnico revisando los sistemas de seguridad EAS para optimizar su funcionamiento.">
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-md-6">
                                    <div>
                                        <p class="textSecundario mb-1">
                                            May 28, 2024
                                        </p>
                                        <h2 class="card-title entry-title h4 mb-3">
                                            <a class="textTitulos" href="/pages/gcss.html">
                                                Cómo Multiplicamos Nuestra Presencia Online con Rediseño Web y Branding 
                                            </a>
                                        </h2>
                                        <p class="mb-4 textCard">
                                            Revitalizamos el sitio web de GCSS con un rediseño completo y una campaña estratégica en LinkedIn, aumentando su presencia online y obteniendo resultados tangibles.
                                        </p>
                                        <a href="/pages/gcss.html">
                                            <button type="button" class="buttonpCards btn-sm px-3">
                                                Leer más
                                            </button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Bannner CTA -->
            <section class="bsb-cta-1 bsb-overlay" style="background-image: url('/images/contact-us.png');">
                <div class="container pt-5 py-5">
                    <div class="row">
                        <div class="col-12 col-md-9 col-lg-8 col-xl-7 col-xxl-6">
                            <h3 class="display-5 text-white mb-4">
                                ¡Hablemos sobre tu proyecto digital y descubramos cómo podemos llevarlo al éxito juntos!
                            </h3>
                            <a href="/pages/contactame.html">
                                <button type="button" class="buttons btn-lg bsb-btn-3xl px-3">
                                    ¡Charlemos!
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        <!-- Footer -->
        <footer class="footer">
            <div class="footer-container py-3 py-md-5 py-xl-8 border-top border-light-subtle">
                <div class="container overflow-hidden">
                    <div class="row gy-3 gy-md-5 gy-xl-0 align-items-sm-center">
                        <!-- Texto -->
                        <div class="col-xs-12 col-sm-6 col-xl-3 order-0 order-xl-0">
                            <div class="footer-logo-wrapper text-center text-sm-center">
                                <div class="footer-copyright-wrapper d-block mb-1 fs-8 text-center text-lg-start">
                                    &copy; 2024, casha
                                </div>
                                <div class="credit-wrapper d-block fs-8 text-center text-lg-start">
                                <em>Derechos reservados</em>
                                </div>
                            </div>
                        </div>
                        <!-- Logo container -->
                        <div class="col-xs-12 col-xl-6 order-2 order-xl-1">
                            <div class="footer-logo-wrapper text-center text-sm-center">
                                <a href="/index.html" class=" text-decoration-none">
                                    <img src="/images/brand/monograma.png" alt="Monograma del logo casha." width="100" height="40"/>
                                </a>
                            </div>
                        </div>
                        <!-- Social Media wrapper -->
                        <div class="col-xs-12 col-sm-6 col-xl-3 order-1 order-xl-2">
                            <div class="social-media-wrapper">
                                <ul class="list-unstyled m-0 p-0 d-flex justify-content-center justify-content-sm-end">
                                    <!-- Github -->
                                    <li class="ms-6">
                                        <a class="text-muted" href="https://github.com/cinthyacasha">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-github footer-icon" viewBox="0 0 16 16">
                                                <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27s1.36.09 2 .27c1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.01 8.01 0 0 0 16 8c0-4.42-3.58-8-8-8"/>
                                            </svg>
                                        </a>
                                    </li>
                                    <!-- LinkedIn -->
                                    <li class="ms-3">
                                        <a class="text-muted" href="https://www.linkedin.com/in/cinthyacastaneda/">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-linkedin footer-icon" viewBox="0 0 16 16">
                                                <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854zm4.943 12.248V6.169H2.542v7.225zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248S2.4 3.226 2.4 3.934c0 .694.521 1.248 1.327 1.248zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016l.016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225z"/>
                                            </svg>
                                        </a>
                                    </li>
                                    <!-- Agenda Cita -->
                                    <li class="ms-3">
                                        <a class="text-muted" href="https://calendar.notion.so/meet/cinthyacastaeda/561k14h8n">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-calendar-heart-fill footer-icon" viewBox="0 0 16 16">
                                                <path d="M4 .5a.5.5 0 0 0-1 0V1H2a2 2 0 0 0-2 2v1h16V3a2 2 0 0 0-2-2h-1V.5a.5.5 0 0 0-1 0V1H4zM16 14V5H0v9a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2M8 7.993c1.664-1.711 5.825 1.283 0 5.132-5.825-3.85-1.664-6.843 0-5.132"/>
                                            </svg>
                                        </a>
                                    </li>
                                    <!-- Tiktok -->
                                    <!-- <li class="ms-3">
                                        <a class="text-muted" href="https://www.tiktok.com/@cinthyacasha?_t=8mbScn7q0zF&_r=1">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-tiktok footer-icon" viewBox="0 0 16 16">
                                                <path d="M9 0h1.98c.144.715.54 1.617 1.235 2.512C12.895 3.389 13.797 4 15 4v2c-1.753 0-3.07-.814-4-1.829V11a5 5 0 1 1-5-5v2a3 3 0 1 0 3 3z"/>
                                            </svg>
                                        </a>
                                    </li> -->
                                    <!-- Behance -->
                                    <!-- <li class="ms-3">
                                        <a class="text-muted" href="https://www.behance.net/cinthyacasha">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-behance footer-icon" viewBox="0 0 16 16">
                                                <path d="M4.654 3c.461 0 .887.035 1.278.14.39.07.711.216.996.391s.497.426.641.747c.14.32.216.711.216 1.137 0 .496-.106.922-.356 1.242-.215.32-.566.606-.997.817.606.176 1.067.496 1.348.922s.461.957.461 1.563c0 .496-.105.922-.285 1.278a2.3 2.3 0 0 1-.782.887c-.32.215-.711.39-1.137.496a5.3 5.3 0 0 1-1.278.176L0 12.803V3zm-.285 3.978c.39 0 .71-.105.957-.285.246-.18.355-.497.355-.887 0-.216-.035-.426-.105-.567a1 1 0 0 0-.32-.355 1.8 1.8 0 0 0-.461-.176c-.176-.035-.356-.035-.567-.035H2.17v2.31c0-.005 2.2-.005 2.2-.005zm.105 4.193c.215 0 .426-.035.606-.07.176-.035.356-.106.496-.216s.25-.215.356-.39c.07-.176.14-.391.14-.641 0-.496-.14-.852-.426-1.102-.285-.215-.676-.32-1.137-.32H2.17v2.734h2.305zm6.858-.035q.428.427 1.278.426c.39 0 .746-.106 1.032-.286q.426-.32.53-.64h1.74c-.286.851-.712 1.457-1.278 1.848-.566.355-1.243.566-2.06.566a4.1 4.1 0 0 1-1.527-.285 2.8 2.8 0 0 1-1.137-.782 2.85 2.85 0 0 1-.712-1.172c-.175-.461-.25-.957-.25-1.528 0-.531.07-1.032.25-1.493.18-.46.426-.852.747-1.207.32-.32.711-.606 1.137-.782a4 4 0 0 1 1.493-.285c.606 0 1.137.105 1.598.355.46.25.817.532 1.102.958.285.39.496.851.641 1.348.07.496.105.996.07 1.563h-5.15c0 .58.21 1.11.496 1.396m2.24-3.732c-.25-.25-.642-.391-1.103-.391-.32 0-.566.07-.781.176s-.356.25-.496.39a.96.96 0 0 0-.25.497c-.036.175-.07.32-.07.46h3.196c-.07-.526-.25-.882-.497-1.132zm-3.127-3.728h3.978v.957h-3.978z"/>
                                            </svg>
                                        </a>
                                    </li> -->
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    <!-- Bootstrap script -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>
</html>