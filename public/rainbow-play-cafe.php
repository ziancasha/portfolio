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
        <meta name="description" content="Descubre cómo Rainbow Play Café aumentó sus reservaciones mediante un rediseño estratégico de su página web. Este caso de estudio detalla el proceso y las estrategias implementadas para mejorar la experiencia del usuario y generar resultados positivos en el incremento de reservaciones. ¡Explora cómo el rediseño de la página web llevó a Rainbow Play Café a nuevos niveles de éxito ahora!">

        <!-- Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="stylesheet" href="https://unpkg.com/bs-brain@2.0.4/components/projects/project-3/assets/css/project-3.css">
        <link rel="stylesheet" href="https://unpkg.com/bs-brain@2.0.4/components/heroes/hero-2/assets/css/hero-2.css">
        <link rel="stylesheet" href="https://unpkg.com/bs-brain@2.0.4/components/facts/fact-4/assets/css/fact-4.css" />


        <!-- Librería de icons -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.0/font/bootstrap-icons.min.css">

        <title> casha | Rainbow Play Cafe Rediseño Sitio Web </title>
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
                            <a href="/images/cv/Cinthya Castañeda ES.pdf" download="x">
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
                                                <a class="dropdown-item text-end" style="color: #0C141D;" href="/pages/rainbow-play-cafe.html">
                                                    Español
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item text-end" style="color: #0C141D;" href="/pages/rainbow-play-cafe-en.html">
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
            <!-- Hero Area -->
            <section class="bsb-hero-5 px-3 bsb-overlay heroCaseStudies-Container image-fluid">
                <div class="container">
            </section>
            <!-- Presentación -->
            <section class="presentacionContainer">
                <div class="container">
                    <div class="row justify-content-md-center">
                        <div class="col-12 col-md-10 col-lg-8 col-xl-7 col-xxl-10 textTitulos">
                            <h2 class="mb-4 display-5 text-center textTitulos fw-bold">
                            Caso de Estudio
                            </h2>
                            <p class="text-style mb-5 text-center lead fs-4">
                                Xanat Guiot, CEO de <strong>Rainbow Play Café</strong>, llegó con una solicitud específica: <em>"Quiero un sitio web nuevo que fomente la reservación de horarios de juego para evitar aglomeraciones y mejorar la experiencia de los clientes en el playground"</em>.
                            </p>
                            <hr class="w-50 mx-auto border-dark-subtle">
                        </div>
                    </div>
                </div>
            </section>
            <!-- Project Details -->
            <section class="py-5 py-xl-4 projectDetails">
                <!-- OverView -->
                <div class="container overflow-hidden">
                    <div class="row gy-5 gy-md-6 gy-lg-0">
                        <!-- Duración -->
                        <div class="col-6 col-lg-3">
                            <div class="text-center text-overlay">
                                <div class="d-flex align-items-center justify-content-center iconBGProjectDetails mb-3 mx-auto bsb-circle">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="currentColor" class="bi bi-stopwatch-fill iconProjectDetails" viewBox="0 0 16 16">
                                        <path d="M6.5 0a.5.5 0 0 0 0 1H7v1.07A7.001 7.001 0 0 0 8 16a7 7 0 0 0 5.29-11.584l.013-.012.354-.354.353.354a.5.5 0 1 0 .707-.707l-1.414-1.415a.5.5 0 1 0-.707.707l.354.354-.354.354-.012.012A6.97 6.97 0 0 0 9 2.071V1h.5a.5.5 0 0 0 0-1zm2 5.6V9a.5.5 0 0 1-.5.5H4.5a.5.5 0 0 1 0-1h3V5.6a.5.5 0 1 1 1 0"/>
                                    </svg>
                                </div>
                                <p class="h1 fw-bold m-1">
                                    1 mes
                                </p>
                                <p class="text-overlay m-0">
                                    Duración
                                </p>
                            </div>
                        </div>
                        <!-- Equipo -->
                        <div class="col-6 col-lg-3">
                            <div class="text-center text-overlay">
                                <div class="d-flex align-items-center justify-content-center iconBGProjectDetails mb-3 mx-auto bsb-circle">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="currentColor" class="bi bi-microsoft-teams iconProjectDetails" viewBox="0 0 16 16">
                                        <path d="M9.186 4.797a2.42 2.42 0 1 0-2.86-2.448h1.178c.929 0 1.682.753 1.682 1.682zm-4.295 7.738h2.613c.929 0 1.682-.753 1.682-1.682V5.58h2.783a.7.7 0 0 1 .682.716v4.294a4.197 4.197 0 0 1-4.093 4.293c-1.618-.04-3-.99-3.667-2.35Zm10.737-9.372a1.674 1.674 0 1 1-3.349 0 1.674 1.674 0 0 1 3.349 0m-2.238 9.488-.12-.002a5.2 5.2 0 0 0 .381-2.07V6.306a1.7 1.7 0 0 0-.15-.725h1.792c.39 0 .707.317.707.707v3.765a2.6 2.6 0 0 1-2.598 2.598z"/>
                                        <path d="M.682 3.349h6.822c.377 0 .682.305.682.682v6.822a.68.68 0 0 1-.682.682H.682A.68.68 0 0 1 0 10.853V4.03c0-.377.305-.682.682-.682Zm5.206 2.596v-.72h-3.59v.72h1.357V9.66h.87V5.945z"/>
                                      </svg>
                                </div>
                                <p class="h1 fw-bold m-1">
                                    3
                                </p>
                                <p class="text-overlay m-0">
                                    Personas
                                </p>
                            </div>
                        </div> 
                        <!-- Entrevistas -->
                        <div class="col-6 col-lg-3">
                            <div class="text-center text-overlay">
                                <div class="d-flex align-items-center justify-content-center mb-3 mx-auto bsb-circle iconBGProjectDetails">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="currentColor" class="bi bi-people-fill iconProjectDetails" viewBox="0 0 16 16">
                                        <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6m-5.784 6A2.24 2.24 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.3 6.3 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1zM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5"/>
                                    </svg>
                                </div>
                                <p class="h1 fw-bold m-1">
                                    8
                                </p>
                                <p class="text-overlay m-0">
                                    Entrevistas
                                </p>
                            </div>
                        </div>
                        <!-- Componentes -->
                        <div class="col-6 col-lg-3">
                            <div class="text-center text-overlay">
                                <div class="d-flex align-items-center justify-content-center iconBGProjectDetails mb-3 mx-auto bsb-circle">
                                    <svg width="60" height="60" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <rect width="48" height="48" fill="white" fill-opacity="0.01"></rect> <path d="M17 12L24 5L31 12L24 19L17 12Z" fill="#" stroke="#EAF2F8" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M17 36L24 29L31 36L24 43L17 36Z" fill="#" stroke="#EAF2F8" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M29 24L36 17L43 24L36 31L29 24Z" fill="#" stroke="#EAF2F8" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M5 24L12 17L19 24L12 31L5 24Z" fill="#" stroke="#EAF2F8" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"></path> </g>
                                    </svg>
                                </div>
                                <p class="h1 fw-bold m-1">
                                    107
                                </p>
                                <p class="text-overlay m-0">
                                    Componentes
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Team -->
            <section class="py-3 py-md-5 py-xl-8 teamContainer">
                <div class="container">
                    <div class="row justify-content-md-center">
                        <div class="col-12 col-md-10 col-lg-8 col-xl-7 col-xxl-6">
                            <h2 class="mb-4 display-5 fw-bold text-center">
                               El Equipo
                            </h2>
                            <p class="text-overlay mb-5 text-center lead fs-4">
                                El increíble equipo que hizo realidad este proyecto está compuesto por estas tres talentosas diseñadoras UX/UI.
                            </p>
                        </div>
                    </div>
                </div>
                <!-- Team information -->
                <div class="container overflow-hidden">
                  <div class="row gy-4 gy-lg-0 gx-xxl-5">
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="card border-0 border-bottom border-primary shadow-sm overflow-hidden text-center">
                            <div class="card-body p-0">
                                <figcaption class="m-0 p-4">
                                    <h3 class="mb-1">
                                        Amanda
                                    </h3>
                                    <p class="text-style mb-0">
                                        Diseñadora UX/UI
                                    </p>
                                </figcaption>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="card border-0 border-bottom border-primary shadow-sm overflow-hidden text-center">
                            <div class="card-body p-0">
                                <figcaption class="m-0 p-4">
                                    <h3 class="mb-1">
                                        Miyu
                                    </h3>
                                    <p class="text-style mb-0">
                                        Diseñadora UX/UI
                                    </p>
                                </figcaption>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="card border-0 border-bottom border-primary shadow-sm overflow-hidden text-center">
                            <div class="card-body p-0">
                                <figcaption class="m-0 p-4">
                                    <h3 class="mb-1">
                                        Cinthya
                                    </h3>
                                    <p class="text-style mb-0">
                                        Diseñadora UX/UI
                                    </p>
                                </figcaption>
                            </div>
                        </div>
                    </div>
                  </div>
                </div>
            </section>
            <!-- Nuestro Journey -->
            <section class="py-3 py-md-5 py-xl-8 procesosContainer">
                <div class="container mt-5">
                    <div class="row justify justify-content-md-center">
                        <div class="col-12 col-md-10 col-lg-8 col-xl-7 col-xxl-6 textTitulos">
                            <h2 class="mb-4 display-5 fw-bold text-center">
                                El Proceso
                            </h2>
                            <p class="text-style mb-5 text-center lead fs-4">
                                El proceso se dividirá en dos secciones, UX Research y Diseño UI del proyecto.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="container overflow-hidden">
                    <div class="row gy-5 gy-md-6 gy-lg-0 mx-1">
                        <!-- Opciones nav-tab -->
                        <ul class="nav nav-pills nav-fill mb-1" id="pills-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active fw-bold" id="pills-ux-tab" data-bs-toggle="pill" data-bs-target="#pills-ux" type="button" role="tab" aria-controls="pills-ux" aria-selected="true">
                                    UX Research
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link fw-bold" id="pills-ui-tab" data-bs-toggle="pill" data-bs-target="#pills-ui" type="button" role="tab" aria-controls="pills-ui" aria-selected="false">
                                    Diseño UI
                                </button>
                            </li>
                        </ul>
                        <div class="tab-content bg-light rounded" id="pills-tabContent">
                            <!-- UX -->
                            <div class="tab-pane fade show active" id="pills-ux" role="tabpanel" aria-labelledby="pills-ux-tab" tabindex="0">
                                <!-- Tools -->
                                <div class="my-5">
                                    <h3 class="my-1">
                                        Herramientas
                                    </h3>
                                    <div class="row justify-content-between mt-3 px-5 py-3">
                                        <div class="col-6 col-md-3 col-lg-3 px-1 mb-1 py-3">
                                            <div class="row justify-content-center align-items-center">
                                                <svg fill="#0C141D" height="48px" width="48px" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 219.376 219.376" xml:space="preserve"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M127.518,0H40.63c-6.617,0-12,5.383-12,12v195.376c0,6.617,5.383,12,12,12h138.117c6.617,0,12-5.383,12-12V59.227 c0-3.204-1.248-6.217-3.514-8.484l-51.364-47.36C133.619,1.2,130.661,0,127.518,0z M175.747,204.376H43.63V15h71.768v40.236 c0,8.885,7.225,16.114,16.105,16.114h44.244V204.376z M131.503,56.35c-0.609,0-1.105-0.5-1.105-1.114v-31.58l34.968,32.693H131.503z M65.499,97.805c-5.14,0-9.321,4.182-9.321,9.321c0,5.14,4.182,9.321,9.321,9.321c5.14,0,9.321-4.182,9.321-9.321 C74.82,101.987,70.638,97.805,65.499,97.805z M82.499,99.627h79.5v15h-79.5V99.627z M65.499,127.805 c-5.14,0-9.321,4.182-9.321,9.321s4.182,9.321,9.321,9.321c5.14,0,9.321-4.182,9.321-9.321S70.638,127.805,65.499,127.805z M82.499,129.626h79.5v15h-79.5V129.626z M65.499,157.805c-5.14,0-9.321,4.182-9.321,9.321s4.182,9.321,9.321,9.321 c5.14,0,9.321-4.182,9.321-9.321S70.638,157.805,65.499,157.805z M82.499,159.626h79.5v15h-79.5V159.626z"></path> </g>
                                                </svg>
                                                <p class="text-style text-center my-2">
                                                    Google Forms
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-6 col-md-3 col-lg-3 px-1 mb-1 py-3">
                                            <div class="row justify-content-center align-items-center">
                                                <svg width="48px" height="48px" viewBox="-5.76 -5.76 59.52 59.52" xmlns="http://www.w3.org/2000/svg" fill="#0C141D" stroke="#0C141D" stroke-width="3.4560000000000004"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><defs><style>.a{fill:none;stroke:#0C141D;stroke-linejoin:round;}</style></defs><path class="a" d="M34.86,18.63V29.16l8.64,7.16V11.68Z"></path><path class="a" d="M6.42,12.31h21.7c3.16,0,6.53,2.53,6.53,5.9V33.37a2.11,2.11,0,0,1-2.1,2.11H10.22c-3.59,0-5.69-3.37-5.69-6.53V14.41A1.83,1.83,0,0,1,6.42,12.31Z"></path></g></svg>
                                                <p class=" text-style text-center my-2">
                                                    Zoom
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-6 col-md-3 col-lg-3 px-1 mb-1 py-3">
                                            <div class="row justify-content-center align-items-center">
                                                <svg width="48px" height="48px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M12 3H9C7.34315 3 6 4.34315 6 6C6 7.65685 7.34315 9 9 9M12 3V9M12 3H15C16.6569 3 18 4.34315 18 6C18 7.65685 16.6569 9 15 9M12 9H9M12 9H15M12 9V15M9 9C7.34315 9 6 10.3431 6 12C6 13.6569 7.34315 15 9 15M15 9C16.6569 9 18 10.3431 18 12C18 13.6569 16.6569 15 15 15C13.3431 15 12 13.6569 12 12C12 10.3431 13.3431 9 15 9ZM12 15H9M12 15V18C12 19.6569 10.6569 21 9 21C7.34315 21 6 19.6569 6 18C6 16.3431 7.34315 15 9 15" stroke="#0C141D" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g>
                                                </svg>
                                                <p class=" text-style text-center my-2">
                                                    Figma
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-6 col-md-3 col-lg-3 px-1 mb-1 py-3">
                                            <div class="row justify-content-center align-items-center">
                                                <svg fill="#0C141D" width="48px" height="48px" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" stroke="#0C141D"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M5.948 5.609c0.99 0.807 1.365 0.75 3.234 0.625l17.62-1.057c0.375 0 0.063-0.375-0.063-0.438l-2.927-2.115c-0.557-0.438-1.307-0.932-2.74-0.813l-17.057 1.25c-0.625 0.057-0.75 0.37-0.5 0.62zM7.005 9.719v18.536c0 0.995 0.495 1.37 1.615 1.307l19.365-1.12c1.12-0.063 1.25-0.745 1.25-1.557v-18.411c0-0.813-0.313-1.245-1-1.182l-20.234 1.182c-0.75 0.063-0.995 0.432-0.995 1.24zM26.12 10.708c0.125 0.563 0 1.12-0.563 1.188l-0.932 0.188v13.682c-0.813 0.438-1.557 0.688-2.177 0.688-1 0-1.25-0.313-1.995-1.245l-6.104-9.583v9.271l1.932 0.438c0 0 0 1.12-1.557 1.12l-4.297 0.25c-0.125-0.25 0-0.875 0.438-0.995l1.12-0.313v-12.255l-1.557-0.125c-0.125-0.563 0.188-1.37 1.057-1.432l4.609-0.313 6.354 9.708v-8.589l-1.62-0.188c-0.125-0.682 0.37-1.182 0.995-1.24zM2.583 1.38l17.745-1.307c2.177-0.188 2.74-0.063 4.109 0.932l5.667 3.984c0.932 0.682 1.245 0.87 1.245 1.615v21.839c0 1.37-0.5 2.177-2.24 2.302l-20.615 1.245c-1.302 0.063-1.927-0.125-2.615-0.995l-4.172-5.417c-0.745-0.995-1.057-1.74-1.057-2.609v-19.411c0-1.12 0.5-2.052 1.932-2.177z"></path> </g></svg>
                                                <p class=" text-style text-center my-2">
                                                    Notion
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr class="w-50 mx-auto border-dark-subtle py-2 mb-lg-0 mb-sm-3">
                                <!-- Encuesta -->
                                <div class="my-5">
                                    <h3 class="my-1">
                                        Resultados Encuestra
                                    </h3>
                                    <div class="row justify-content-between mt-3 px-5">
                                        <div class="col-12 col-md-6 col-lg-5 px-1 mb-1">
                                            <div class="encuestasBGContainer px-5 py-5 d-flex justify-content-center align-items-center">
                                                <p class="text-style text-center">
                                                Los padres de familia encontraron <strong>confuso</strong> entender los precios de reservación ya que se cuentan con <em>dos listas de precios</em>.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6 col-lg-5 px-1 mb-1">
                                            <div class="encuestasBGContainer px-5 py-5 d-flex justify-content-center align-items-center">
                                                <p class=" text-style text-center">
                                                    En cuanto a las actividades, <strong>no entendieron</strong> bien qué <em>tipo de actividades</em> ofrece y <em>cuándo</em> estás se llevarán a cabo.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr class="w-50 mx-auto border-dark-subtle py-2 mb-lg-0 mb-sm-3">
                                <!-- Keywords -->
                                <div class="my-5">   
                                    <h3 class="my-1">
                                        Keywords
                                    </h3>
                                    <div class="row justify-content-around align-items-center my-4">
                                        <div class="col-12 col-md-6 col-lg-2 mx-2 py-md-0 py-2">
                                            <p class="text-style mb-0 text-center shadow" style="background-color: #E8C64D; border-radius: 6px; padding: 1rem;">
                                                Comunidad
                                            </p>
                                        </div>
                                        <div class="col-12 col-md-6 col-lg-2 mx-2 py-md-0 py-2">
                                            <p class="text-style mb-0 text-center shadow" style="background-color: #D87C75; border-radius: 6px; padding: 1rem;">
                                                Juego con propósito
                                            </p>
                                        </div>
                                        <div class="col-12 col-md-6 col-lg-2 mx-2 py-md-0 py-2">
                                            <p class="text-style mb-0 text-center shadow" style="background-color: #83C3BD; border-radius: 6px; padding: 1rem;">
                                                Multi-cultural
                                            </p>
                                        </div>
                                        <div class="col-12 col-md-6 col-lg-2 mx-2 py-md-0 py-2">
                                            <p class="text-style mb-0 text-center shadow" style="background-color: #F5F5F5; border-radius: 6px; padding: 1rem;">
                                                Juegos sofisticados
                                            </p>
                                        </div>
                                        <div class="col-12 col-md-6 col-lg-2 mx-2 py-md-0 py-2">
                                            <p class="text-overlay mb-0 text-center shadow" style="background-color: #161616; border-radius: 6px; padding: 1rem;">
                                                Negocio local
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <hr class="w-50 mx-auto border-dark-subtle py-2 mb-lg-0 mb-sm-3">
                                <!-- User Flow -->
                                <div class="py-3 userflowContainer">
                                    <h3 class="py-5 text-center">
                                        User Flow
                                    </h3>
                                    <div class="row justify-content-center align-items-center mx-1 py-3  userFlowCardContainer">
                                        <div class="col-12 col-md-6 col-lg-5 mx-3 userFlowCard">
                                            <div class="d-flex justify-content-start align-items-start mt-2 mb-4">
                                                <p class="h5 fw-bold text-overlay text-start">
                                                    Antes
                                                </p>
                                            </div>
                                            <div class="d-flex justify-content-start align-items-start">
                                                <img src="/images/proyectos/userflowPrevious.png" class="userflowImage mb-4" alt="Diagrama de flujo de un proceso de selección de tareas. El proceso comienza en 'Home', luego pasa a 'Task Selection' que tiene dos opciones: 'General Admission' y 'Parties'. Si se selecciona 'General Admission', se procede a 'Buy Ticket' y luego a 'Purchase'. Si se selecciona 'Parties', se procede a 'Pay Deposit' y luego a 'Purchase'.">
                                            </div>
                                            <div class="d-flex justify-content-start align-items-start my-2">
                                                <p class="text-overlay text-start">
                                                    El sitio web actual cuenta con dos páginas diferentes para hacer reservaciones, lo cual ocasiona que los usuarios se confundan al momento de realizar su reservación.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6 col-lg-5 mx-3 userFlowCard">
                                            <div class="d-flex justify-content-start align-items-start mt-2 mb-4">
                                                <p class="h5 fw-bold text-overlay text-start">
                                                    Después
                                                </p>
                                            </div>
                                            <div class="d-flex justify-content-start align-items-start">
                                                <img src="/images/proyectos/userflowAfter.png" class="userflowImage mb-4" alt="Diagrama de flujo de un proceso de selección de tareas. El proceso comienza en 'Home', luego pasa a 'Task Selection' que tiene tres opciones: 'All Admission', 'General Admission' y 'Parties'. Si se selecciona 'All Admission', se procede a 'Buy Ticket' y luego a 'Purchase'. Si se selecciona 'General Admission', se procede a 'Buy Ticket' y luego a 'Purchase'. Si se selecciona 'Parties', se procede a 'Pay Deposit' y luego a 'Purchase'.">
                                            </div>
                                            <div class="d-flex justify-content-start align-items-start my-2">
                                                <p class="text-overlay text-start">
                                                    Después de hacer un análisis, determinamos que sería más fácil para el usuario elegir el tipo de reservación en una misma página. De esta manera, evitaríamos que el usuario se estrese por no contar con un layout accesible.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr class="w-50 mx-auto border-dark-subtle py-2 mb-lg-0 mb-sm-3">
                                <!-- Information Architecture -->
                                <div class="my-5 row justify-content-md-center">
                                    <h3 class="text-center">
                                        Arquitectura de la Información
                                    </h3>
                                    <div class="col-12 col-md-10 col-lg-8 col-xl-7 col-xxl-9 mt-2">
                                        <p class="text-style text-center">
                                            Tomando la información recopilada en las encuestas, así como del análisis que realizamos, propusimos que la arquitectura de la información quedará como acontinuación se presenta:
                                        </p>
                                    </div>
                                    <div class="row justify-content-center align-items-center mx-1 py-3  arqInformacionContainer">
                                        <!-- Antes -->
                                        <div class="row justify-content-center align-items-start mb-2">
                                            <div class="col-12 col-md-6 col-lg-9 mx-3 arqInformacionCard order-2 order-md-1">
                                                <div class="row d-flex justify-content-start align-items-start">
                                                    <img src="/images/proyectos/informationArchitectureBefore.png" class="arqInformacionImage mb-4" alt="Diagrama de arquitectura de información que muestra la estructura de un sitio web. La página principal 'Home' está en la parte superior y se ramifica en varias secciones: 'Book', 'Parties', 'Activities', 'Shop', 'Admission Fees', 'Menu' y 'More'. La sección 'More' se subdivide en 'Contact us' y 'About us'. Las cajas de las secciones principales están coloreadas en morado claro, mientras que las sub-secciones están en verde claro.">
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-6 col-lg-2 mx-3 arqInformacionCard pt-4 order-1 order-md-2">
                                                <p class="h5 fw-bold text-style text-start">
                                                    Antes
                                                </p>
                                                <div class="d-flex justify-content-start align-items-start my-2">
                                                    <p class="textCard text-start">
                                                        La organización de la información puede resultar en una <strong>sobrecarga cognitiva</strong>  debido a la <em>cantidad de elementos</em> en el nivel superior de navegación.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Después -->
                                        <div class="row justify-content-center align-items-start mt-2">
                                            <div class="col-12 col-md-6 col-lg-5 mx-3 arqInformacionCard pt-4">
                                                <p class="h5 fw-bold text-style text-start">
                                                    Después
                                                </p>
                                                <div class="justify-content-start align-items-start my-2">
                                                    <p class="textCard text-start">
                                                        En la estructura propuesta, se ha realizado una reestructuración para <strong>agrupar funcionalidades similares</strong> bajo categorías más generales, con el fin de <strong>mejorar</strong> la <em>jerarquía de la información</em> y <strong>reducir</strong> la <em>carga cognitiva</em>.
                                                    </p>
                                                    <p class="textCard text-start">
                                                        Este diseño busca proporcionar una <strong>navegación más intuitiva</strong> y coherente, facilitando el acceso a las diferentes secciones del sitio y <strong>mejorando la eficiencia</strong> de la búsqueda de información para el usuario.
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-6 col-lg-6 mx-3 arqInformacionCard">
                                                <div class="d-flex justify-content-start align-items-start">
                                                    <img src="/images/proyectos/informationArchitectureAfter.png" class="arqInformacionImage mb-4" alt="Diagrama de arquitectura de información que muestra la estructura de un sitio web. La página principal 'Home' está en la parte superior y se ramifica en tres secciones: 'Services', 'About us' y 'Shop'. La sección 'Services' se subdivide en tres sub-secciones: 'Booking', 'Activities' y 'Menu'. Las cajas de las secciones principales están coloreadas en morado claro, mientras que las sub-secciones están en verde claro.">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr class="w-50 mx-auto border-dark-subtle py-2 mb-lg-0 mb-sm-3">
                            </div>
                            <!-- UI -->
                            <div class="tab-pane fade" id="pills-ui" role="tabpanel" aria-labelledby="pills-ui-tab" tabindex="0">
                                <!-- Tools -->
                                <div class="my-5">
                                    <h3 class="my-1">
                                        Herramientas
                                    </h3>
                                    <div class="row justify-content-between mt-3 px-5 py-3">
                                        <div class="col-6 col-md-3 col-lg-3 px-1 mb-1 py-3">
                                            <div class="row justify-content-center align-items-center">
                                                <svg width="48px" height="48px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M12 3H9C7.34315 3 6 4.34315 6 6C6 7.65685 7.34315 9 9 9M12 3V9M12 3H15C16.6569 3 18 4.34315 18 6C18 7.65685 16.6569 9 15 9M12 9H9M12 9H15M12 9V15M9 9C7.34315 9 6 10.3431 6 12C6 13.6569 7.34315 15 9 15M15 9C16.6569 9 18 10.3431 18 12C18 13.6569 16.6569 15 15 15C13.3431 15 12 13.6569 12 12C12 10.3431 13.3431 9 15 9ZM12 15H9M12 15V18C12 19.6569 10.6569 21 9 21C7.34315 21 6 19.6569 6 18C6 16.3431 7.34315 15 9 15" stroke="#0C141D" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g>
                                                </svg>
                                                <p class=" text-style text-center my-2">
                                                    Figma
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-6 col-md-3 col-lg-3 px-1 mb-1 py-3">
                                            <div class="row justify-content-center align-items-center">
                                                <svg width="48px" height="48px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill="#0C141D"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <title>ai</title> <path d="M19,5V19H5V5H19m0-2H5A2,2,0,0,0,3,5V19a2,2,0,0,0,2,2H19a2,2,0,0,0,2-2V5a2,2,0,0,0-2-2Z"></path> <g> <path d="M12.3,16.18l-.57-1.87H8.86l-.57,1.87H6.5L9.27,8.29h2l2.78,7.89Zm-1-3.27c-.53-1.69-.82-2.65-.89-2.87s-.11-.4-.14-.53c-.12.46-.46,1.6-1,3.4Z"></path> <path d="M14.88,8.62c0-.53.3-.8.89-.8s.89.27.89.8a.76.76,0,0,1-.22.59.9.9,0,0,1-.67.22C15.18,9.43,14.88,9.16,14.88,8.62Zm1.71,7.56H15v-6h1.64Z"></path> </g> <rect width="24" height="24" fill="none"></rect> </g></svg>
                                                <p class=" text-style text-center my-2">
                                                    Ai
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-6 col-md-3 col-lg-3 px-1 mb-1 py-3">
                                            <div class="row justify-content-center align-items-center">
                                                <svg width="48px" height="48px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" stroke="#0C141D" stroke-width="1.392"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M9.33315 2C8.22858 2 7.33328 2.89731 7.33328 4.00388C7.33302 4.26677 7.38454 4.52714 7.4849 4.77012C7.58526 5.0131 7.73249 5.23393 7.9182 5.42001C8.1039 5.60609 8.32444 5.75377 8.56722 5.85462C8.80999 5.95546 9.07026 6.0075 9.33315 6.00777H11.3333V4.00388C11.3338 3.47292 11.1233 2.96353 10.7482 2.58774C10.3731 2.21194 9.86411 2.00053 9.33315 2ZM9.33315 7.34369H3.99984C2.89527 7.34369 1.99997 8.241 1.99997 9.34791C1.99997 10.4545 2.89527 11.3518 3.99984 11.3518H9.33348C10.4377 11.3518 11.3333 10.4545 11.3333 9.34791C11.3333 8.241 10.4377 7.34369 9.33315 7.34369Z" stroke="#0C141D" stroke-linejoin="round"></path> <path d="M22 9.34791C22 8.241 21.1043 7.34369 19.9998 7.34369C18.8952 7.34369 17.9999 8.241 17.9999 9.34791V11.3518H19.9998C20.5307 11.3513 21.0397 11.1398 21.4148 10.7641C21.7899 10.3883 22.0004 9.87887 22 9.34791ZM16.6667 9.34791V4.00388C16.6671 3.47292 16.4566 2.96353 16.0815 2.58774C15.7064 2.21194 15.1974 2.00053 14.6665 2C13.5619 2 12.6666 2.89731 12.6666 4.00388V9.34757C12.6666 10.4548 13.5619 11.3521 14.6665 11.3521C15.1974 11.3516 15.7064 11.1402 16.0815 10.7644C16.4566 10.3886 16.6671 9.87887 16.6667 9.34791Z" stroke="#0C141D" stroke-linejoin="round"></path> <path d="M14.6665 22.0395C15.1974 22.039 15.7064 21.8276 16.0815 21.4518C16.4566 21.076 16.6671 20.5666 16.6667 20.0356C16.6671 19.5047 16.4566 18.9953 16.0815 18.6195C15.7064 18.2437 15.1974 18.0323 14.6665 18.0317H12.6666V20.0356C12.6666 21.1422 13.5619 22.0395 14.6665 22.0395ZM14.6665 16.6958H20.0001C21.1043 16.6958 22 15.7985 22 14.6916C22.0004 14.1606 21.7899 13.6512 21.4148 13.2755C21.0397 12.8997 20.5307 12.6882 19.9998 12.6877H14.6665C13.5619 12.6877 12.6666 13.585 12.6666 14.6916C12.6663 14.9545 12.7178 15.2149 12.8182 15.4578C12.9186 15.7008 13.0658 15.9216 13.2515 16.1077C13.4372 16.2938 13.6577 16.4415 13.9005 16.5423C14.1433 16.6432 14.4036 16.6956 14.6665 16.6958Z" stroke="#0C141D" stroke-linejoin="round"></path> <path d="M1.99997 14.6916C1.99971 14.9545 2.05123 15.2149 2.15159 15.4578C2.25194 15.7008 2.39918 15.9216 2.58489 16.1077C2.77059 16.2938 2.99113 16.4415 3.2339 16.5423C3.47668 16.6432 3.73695 16.6952 3.99984 16.6955C4.5308 16.6949 5.0398 16.4835 5.41491 16.1077C5.79001 15.732 6.00048 15.2226 6.00004 14.6916V12.6877H3.99984C2.89527 12.6877 1.99997 13.585 1.99997 14.6916ZM7.33328 14.6916V20.0353C7.33328 21.1422 8.22858 22.0395 9.33315 22.0395C9.86411 22.039 10.3731 21.8276 10.7482 21.4518C11.1233 21.076 11.3338 20.5666 11.3333 20.0356V14.6916C11.3336 14.4287 11.2821 14.1683 11.1817 13.9253C11.0813 13.6823 10.9341 13.4614 10.7483 13.2754C10.5626 13.0893 10.342 12.9416 10.0992 12.8408C9.85636 12.7399 9.59606 12.6879 9.33315 12.6877C8.22858 12.6877 7.33328 13.585 7.33328 14.6916Z" stroke="#0C141D" stroke-linejoin="round"></path> </g></svg>
                                                <p class=" text-style text-center my-2">
                                                    Slack
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-6 col-md-3 col-lg-3 px-1 mb-1 py-3">
                                            <div class="row justify-content-center align-items-center">
                                                <svg fill="#0C141D" width="48px" height="48px" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" stroke="#0C141D"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M5.948 5.609c0.99 0.807 1.365 0.75 3.234 0.625l17.62-1.057c0.375 0 0.063-0.375-0.063-0.438l-2.927-2.115c-0.557-0.438-1.307-0.932-2.74-0.813l-17.057 1.25c-0.625 0.057-0.75 0.37-0.5 0.62zM7.005 9.719v18.536c0 0.995 0.495 1.37 1.615 1.307l19.365-1.12c1.12-0.063 1.25-0.745 1.25-1.557v-18.411c0-0.813-0.313-1.245-1-1.182l-20.234 1.182c-0.75 0.063-0.995 0.432-0.995 1.24zM26.12 10.708c0.125 0.563 0 1.12-0.563 1.188l-0.932 0.188v13.682c-0.813 0.438-1.557 0.688-2.177 0.688-1 0-1.25-0.313-1.995-1.245l-6.104-9.583v9.271l1.932 0.438c0 0 0 1.12-1.557 1.12l-4.297 0.25c-0.125-0.25 0-0.875 0.438-0.995l1.12-0.313v-12.255l-1.557-0.125c-0.125-0.563 0.188-1.37 1.057-1.432l4.609-0.313 6.354 9.708v-8.589l-1.62-0.188c-0.125-0.682 0.37-1.182 0.995-1.24zM2.583 1.38l17.745-1.307c2.177-0.188 2.74-0.063 4.109 0.932l5.667 3.984c0.932 0.682 1.245 0.87 1.245 1.615v21.839c0 1.37-0.5 2.177-2.24 2.302l-20.615 1.245c-1.302 0.063-1.927-0.125-2.615-0.995l-4.172-5.417c-0.745-0.995-1.057-1.74-1.057-2.609v-19.411c0-1.12 0.5-2.052 1.932-2.177z"></path> </g></svg>
                                                <p class=" text-style text-center my-2">
                                                    Notion
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr class="w-50 mx-auto border-dark-subtle py-2 mb-lg-0 mb-sm-3">
                                <!-- Tipografía -->
                                <div class="row py-5 tipografiaContainer justify-content-md-center">
                                    <h3 class="my-2 text-center">
                                        Tipografía
                                    </h3>
                                    <div class="col-12 col-md-10 col-lg-8 col-xl-7 col-xxl-9 mt-2">
                                        <p class="text-style text-center" style="color:  #EAF2F8;">
                                            Buscando preservar la <strong>identidad visual</strong> del logo de Rainbow Play Café, elegimos utilizar las fuentes <em>Goldplay ALT y Poppins</em> en el rediseño web, haciendo <strong>armonía</strong> con las formas redondeadas y los colores cálidos del logo.
                                        </p>
                                    </div>
                                    <!-- Tarjetas de presentación tipografía -->
                                    <div class="row justify-content-center align-items-center mx-1 py-3 arqInformacionContainer">
                                        <div class="row justify-content-between mt-3 px-5 pt-3 pb-1">
                                            <!-- Header -->
                                            <div class="col-12 col-md-5 col-lg-5 px-1 mb-1 py-2 tipografiaCardContainer">
                                                <div class="pb-2 justify-content-center align-items-center">
                                                    <p class="h5 fw-bold text-center">
                                                        Encabezados
                                                    </p>
                                                </div>
                                                <div class="pb-4 justify-content-center align-items-center">
                                                    <p class="text-overlay text-center">
                                                        Esta tipografía aporta versatilidad y excelente legibilidad, haciendo que los encabezados se integren de manera coherente y atractiva con la identidad visual del café.
                                                    </p>
                                                </div>
                                                <div class="card-stack my-4">
                                                    <div class="card"></div>
                                                    <div class="card"></div>
                                                    <div class="card">
                                                        <div class="card-body">
                                                            <p style="font-family: 'Goldplay Alt', sans-serif; font-size: 5rem; margin: 0;">
                                                                Aa
                                                            </p>
                                                            <p style="font-family: 'Goldplay Alt', sans-serif; margin: 0;">
                                                                Goldplay ALT
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Body -->
                                            <div class="col-12 col-md-5 col-lg-5 px-1 mb-1 py-2 tipografiaCardContainer">
                                                <div class="pb-2 justify-content-center align-items-center">
                                                    <p class="h5 fw-bold text-center">
                                                        Cuerpo
                                                    </p>
                                                </div>
                                                <div class="pb-xxl-4 pb-xl-5 pb-lg-5 pb-5 justify-content-center align-items-center">
                                                    <p class="text-overlay text-center">
                                                        Su estilo claro permite una lectura cómoda en tamaños pequeños, manteniendo la funcionalidad y sin desviar la atención del diseño principal.
                                                    </p>
                                                </div>
                                                <div class="card-stack2 my-4">
                                                    <div class="card"></div>
                                                    <div class="card"></div>
                                                    <div class="card">
                                                        <div class="card-body">
                                                            <p style="font-family: 'Poppins', sans-serif; font-size: 5rem; margin: 0;">
                                                                Aa
                                                            </p>
                                                            <p style="font-family: 'Poppins', sans-serif; margin: 0;">
                                                                Poppins
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr class="w-50 mx-auto border-dark-subtle py-2 mb-lg-0 mb-sm-3">
                                <!-- Paleta de colores -->
                                <div class="row my-5 justify-content-md-center">   
                                    <h3 class="my-2 text-center">
                                        Paleta de Colores
                                    </h3>
                                    <!-- Introducción -->
                                    <div class="row justify-content-center align-items-center mb-2">
                                        <div class="col-12 col-md-12 col-lg-8 col-xl-7 col-xxl-9 mt-2">
                                            <p class="text-style text-center">
                                                En el sitio web utilizamos la misma paleta de colores que el logo, para asegurar una <strong>experiencia visual coherente</strong> y <strong>armoniosa</strong> que refuerce el <strong>reconocimiento de la marca</strong> y cree una <strong>conexión emocional</strong> con los usuarios.
                                            </p>
                                        </div>
                                    </div>
                                    <!-- Colores -->
                                    <div class="d-none d-md-block">
                                        <div class="row justify-content-around align-items-center my-2">
                                            <div class="col-11 col-md-5 col-lg-2 mb-3 mb-lg-0 py-md-0 py-2 shadow paletacoloresAmarillo">
                                                <div class="paletacoloresCodigos">
                                                    <p class="text-start mt-3">
                                                        <strong>Hex:</strong> #E8C64D
                                                    </p>
                                                    <p class="text-start">
                                                        <strong>RGB:</strong> 232, 198, 77
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="col-11 col-md-5 col-lg-2 mb-3 mb-lg-0 py-md-0 py-2 shadow paletacoloresRosa">
                                                <div class="paletacoloresCodigos">
                                                    <p class="text-start mt-3">
                                                        <strong>Hex:</strong> #D87C75
                                                    </p>
                                                    <p class="text-start">
                                                        <strong>RGB:</strong> 216, 124, 117
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="col-11 col-md-5 col-lg-2 mb-3 mb-lg-0 py-md-0 py-2 shadow paletacoloresAzul">
                                                <div class="paletacoloresCodigos">
                                                    <p class="text-start mt-3">
                                                        <strong>Hex:</strong> #83C3BD
                                                    </p>
                                                    <p class="text-start">
                                                        <strong>RGB:</strong> 131, 195, 189
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="col-11 col-md-5 col-lg-2 mb-3 mb-lg-0 py-md-0 py-2 shadow paletacoloresBlanco">
                                                <div class="paletacoloresCodigos">
                                                    <p class="text-start mt-3">
                                                        <strong>Hex:</strong> #F5F5F5
                                                    </p>
                                                    <p class="text-start">
                                                        <strong>RGB:</strong> 245, 245, 245
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="col-11 col-md-5 col-lg-2 mb-3 mb-lg-0 py-md-0 py-2 shadow paletacoloresNegro">
                                                <div class="paletacoloresCodigos">
                                                    <p class="text-start text-overlay mt-3">
                                                        <strong>Hex:</strong> #161616
                                                    </p>
                                                    <p class="text-start text-overlay">
                                                        <strong>RGB:</strong> 22, 22, 22
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Slider small screens -->
                                    <div id="smallScreenSlider" class="carousel slide d-md-none" data-bs-ride="carousel">
                                        <div class="carousel-inner">
                                            <div class="carousel-item active">
                                                <div class="shadow paletacoloresAmarillo">
                                                    <div class="paletacoloresCodigos">
                                                        <p class="text-start mt-3">
                                                            <strong>Hex:</strong> #E8C64D
                                                        </p>
                                                        <p class="text-start">
                                                            <strong>RGB:</strong> 232, 198, 77
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="carousel-item">
                                                <div class="shadow paletacoloresRosa">
                                                    <div class="paletacoloresCodigos">
                                                        <p class="text-start mt-3">
                                                            <strong>Hex:</strong> #D87C75
                                                        </p>
                                                        <p class="text-start">
                                                            <strong>RGB:</strong> 216, 124, 117
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="carousel-item">
                                                <div class="shadow paletacoloresAzul">
                                                    <div class="paletacoloresCodigos">
                                                        <p class="text-start mt-3">
                                                            <strong>Hex:</strong> #83C3BD
                                                        </p>
                                                        <p class="text-start">
                                                            <strong>RGB:</strong> 131, 195, 189
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="carousel-item">
                                                <div class="shadow paletacoloresBlanco">
                                                    <div class="paletacoloresCodigos">
                                                        <p class="text-start mt-3">
                                                            <strong>Hex:</strong> #F5F5F5
                                                        </p>
                                                        <p class="text-start">
                                                            <strong>RGB:</strong> 245, 245, 245
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="carousel-item">
                                                <div class="shadow paletacoloresNegro">
                                                    <div class="paletacoloresCodigos">
                                                        <p class="text-start text-overlay mt-3">
                                                            <strong>Hex:</strong> #161616
                                                        </p>
                                                        <p class="text-start text-overlay">
                                                            <strong>RGB:</strong> 22, 22, 22
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <button class="carousel-control-prev" type="button" data-bs-target="#smallScreenSlider" data-bs-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="visually-hidden">
                                                Anterior
                                            </span>
                                        </button>
                                        <button class="carousel-control-next" type="button" data-bs-target="#smallScreenSlider" data-bs-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="visually-hidden">
                                                Siguiente
                                            </span>
                                        </button>
                                    </div>
                                </div>
                                <hr class="w-50 mx-auto border-dark-subtle py-2 mb-lg-0 mb-sm-3"> 
                            </div>
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