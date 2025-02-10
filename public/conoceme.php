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
        <meta name="description" content="Soy Casha, una consulora digital dedicada a llevar a las empresas al dinámico mundo online. Creo y optimizo la presencia digital de los negocios con un enfoque detallado e innovador. Soy experta en optimización de tasas de conversión, marketing digital, investigación de experiencia de usuario, redacción UX y diseño de interfaces. Ayudo a las marcas a sobresalir en el entorno digital.">

        <!-- Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="stylesheet" href="https://unpkg.com/bs-brain@2.0.4/components/projects/project-3/assets/css/project-3.css">
        <link rel="stylesheet" href="https://unpkg.com/bs-brain@2.0.4/components/heroes/hero-2/assets/css/hero-2.css">
        <link rel="stylesheet" href="https://unpkg.com/bs-brain@2.0.4/components/projects/project-2/assets/css/project-2.css" />

        <script src="https://unpkg.com/jquery@3.6.1/dist/jquery.min.js"></script>
        <script src="https://unpkg.com/isotope-layout@3.0.6/dist/isotope.pkgd.min.js"></script>
        <script src="https://unpkg.com/isotope-packery@2.0.1/packery-mode.pkgd.min.js"></script>
        <script src="https://unpkg.com/imagesloaded@5.0.0/imagesloaded.pkgd.min.js"></script>

        <!-- Javascript Files: Controllers -->
        <script src="https://unpkg.com/bs-brain@2.0.4/components/projects/project-2/assets/controller/project-2.js"></script>


        <!-- Librería de icons -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.0/font/bootstrap-icons.min.css">

        <title> casha | Consultor Digital en Marketing y UX/UI </title>
    </head>
    <body>
        <!-- Navbar -->
        <header>
            <nav class="navbar fixed-top navbar-container bsb-navbar bsb-navbar-caret">
                <div class="container position-relative justify-content-center">
                    <a class="navbar-brand" href="index.html">
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
                                                <a class="dropdown-item text-end" style="color: #0C141D;" href="/pages/conoceme.html">
                                                    Español
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item text-end" style="color: #0C141D;" href="/pages/about-me.html">
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
            <!-- Presentación -->
            <section class="py-3 py-md-5 mt-5 conocemeContainer">
                <div class="container mb-4 mb-md-5">
                    <div class="row justify-content-md-center">
                        <div class="col-12 col-md-10 col-xxl-6">
                            <img class="img-fluid rounded" loading="lazy" src="/images/cin.png" alt="Yo">
                        </div>
                    </div>
                </div>
                <div class="container overflow-hidden">
                    <div class="row gy-2 gy-md-0 justify-content-xxl-center">
                        <div class="col-12 order-md-1 col-md-8 col-xxl-8">
                            <div class="text-center text-md-start textTitulos">
                                <h2 class="display-3 fw-bold lh-1">
                                    Cinthya Castañeda
                                </h2>
                                <p class="textTitulos fs-4 mb-2">
                                    UX/UI Designer | FrondEnd | e-commerce | Marketing digital
                                </p>
                                <hr class="w-25 mx-auto ms-md-0 mb-4 textCardHeader">
                                <p class="fs-5">¡Bienvenid@! Qué alegría que estés en esta sección. No solo porque hablaré sobre mí, sino porque sé que será nuestro primer punto de contacto antes de poder hablar en persona.</p>
                                <p class="fs-5">Tengo 32 años y mi trayectoria ha sido tan diversa como emocionante. El año 2018 fue un año muy importante para mí, porque decidí <strong>cambiar</strong> el rumbo de mi carrera profesional. Fue ahí donde comenzó mi viaje en el <strong>mundo digital</strong>. Venía de estar trabajando como Segurista a comenzar a trabajar en los más grandes marketplaces de México, <strong>Mercado Libre y Amazon</strong>.</p>
                                <p class="fs-5">Dos años después, en 2020, tuve mi primer contacto con un desarrollador web, lo que despertó mi curiosidad por entender cómo funcionaba el comercio electrónico utilizando una plataforma propia. Este descubrimiento fue un punto de inflexión en mi desarrollo profesional, llevándome a sumergirme en el fascinante mundo del <strong>Marketing Digital</strong> y el <strong>Desarrollo Front-End</strong>.</p>
                                <p class="fs-5">En 2021 tuve otra gran oportunidad: hacer un Diplomado en <strong>UX/UI Design</strong> en Vancouver, Canadá. En este punto, ya había adquirido una inmensa cantidad de habilidades necesarias para operar una empresa de comercio electrónico, pero me hacía falta entender más a mis usuarios y cómo mejorar su experiencia. Sabía que un buen diseño de UX/UI es crucial para crear <strong>interfaces intuitivas</strong> y <strong>atractivas</strong> que realmente resuenen con los usuarios. Por lo cual, al recibir la oportunidad, no pude rechazarla.</p>
                                <p class="fs-5">Hoy en día, mi vocación es poder <strong>servir</strong> a todas esas personas que aún están en el comercio convencional. Quiero ayudarlas a entrar en esta nueva economía, que no solo está aquí para quedarse, sino que <strong>continuará transformándose</strong>.</p>
                                <p class="fs-5">Ten por seguro que, ante cualquier problema, buscaré una <strong>solución</strong>, y sin importar lo que tenga que aprender o lo que tenga que desarrollar, lo haré para brindarte el <strong>mejor resultado</strong>.</p>
                            </div>
                        </div>
                        <div class="col-12 order-md-0 col-md-4 col-xxl-4">
                            <div class="text-center text-md-start me-md-3 me-xl-5">
                                <p class="mb-4">
                                    <span class="d-block display-6 lh-1">7+</span>
                                    <span class="fs-4 textTitulos">años de experiencia</span>
                                </p>
                                <div class="d-grid">
                                    <a href="/pages/contactame.html" class="mb-2">
                                        <button class="buttonp btn-lg w-50" type="button">¡Contáctame!</button>
                                    </a>
                                    <a href="/images/cv/Cinthya Castañeda ES.pdf" download="Cinthya-Castaneda">
                                        <button class="btn-lg buttons w-50" type="button">
                                            Currículum 
                                        </button>
                                    </a>
                                </div>
                                <div class="d-grid mt-5">
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
                                            <a class="me-2 icon-style" href="https://www.goodreads.com/user/show/43152858">
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                width="25" height="25"
                                                 viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M299.9 191.2c5.1 37.3-4.7 79-35.9 100.7-22.3 15.5-52.8 14.1-70.8 5.7-37.1-17.3-49.5-58.6-46.8-97.2 4.3-60.9 40.9-87.9 75.3-87.5 46.9-.2 71.8 31.8 78.2 78.3zM448 88v336c0 30.9-25.1 56-56 56H56c-30.9 0-56-25.1-56-56V88c0-30.9 25.1-56 56-56h336c30.9 0 56 25.1 56 56zM330 313.2s-.1-34-.1-217.3h-29v40.3c-.8 .3-1.2-.5-1.6-1.2-9.6-20.7-35.9-46.3-76-46-51.9 .4-87.2 31.2-100.6 77.8-4.3 14.9-5.8 30.1-5.5 45.6 1.7 77.9 45.1 117.8 112.4 115.2 28.9-1.1 54.5-17 69-45.2 .5-1 1.1-1.9 1.7-2.9 .2 .1 .4 .1 .6 .2 .3 3.8 .2 30.7 .1 34.5-.2 14.8-2 29.5-7.2 43.5-7.8 21-22.3 34.7-44.5 39.5-17.8 3.9-35.6 3.8-53.2-1.2-21.5-6.1-36.5-19-41.1-41.8-.3-1.6-1.3-1.3-2.3-1.3h-26.8c.8 10.6 3.2 20.3 8.5 29.2 24.2 40.5 82.7 48.5 128.2 37.4 49.9-12.3 67.3-54.9 67.4-106.3z"/>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Hard Skills -->
            <section class="hardSkillsContainer py-3 py-md-5 py-xl-8 pt-5">
                <div class="container">
                    <div class="row gy-3 gy-md-5 gy-lg-0 align-items-center">
                        <div class="col-12 col-lg-4">
                            <h2 class="mb-4 display-5 fw-semibold text-center">
                                Herramientas y tecnologías
                            </h2>
                            <p class="mb-2 lead fs-4">
                                Estas son mis habilidades técnicas en áreas clave como <strong>Front-end, Diseño UX/UI, ecommerce y Marketing Digital</strong>.
                            </p>
                            <p class="mb-5 lead fs-4">
                                El contar con una <strong>visión 360°</strong> de las empresas me permite crear <strong>soluciones</strong> específicas y eficientes para alcanzar los <strong>objetivos establecidos</strong>.
                            </p>
                        </div>
                    <div class="col-12 col-lg-8">
                      <div class="row justify-content-xl-end">
                        <div class="col-12 col-xl-11">
                          <div class="row gy-3 gy-md-4 d-flex justify-content-center align-items-center">
                            <!-- Front End-->
                            <div class="col-9 col-sm-6">
                                <div class="card border-0 border-bottom border-primary shadow-sm skill-container">
                                    <div class="card-body text-center p-4 p-xxl-2">
                                        <h3 class="display-4 mb-4">
                                            Front End
                                        </h3>
                                        <div class="col-12 mb-3">
                                            <div class="row justify-content-center align-items-center">
                                                <div class="col-auto">
                                                    <p>HTML</p>
                                                    <p>CSS</p>
                                                    <p>JS</p>
                                                </div>
                                                <div class="col-auto">
                                                    <p>Webflow</p>
                                                    <p>Framer</p>
                                                    <p>WordPress</p>
                                                </div>
                                                <div class="col-auto">
                                                    <p>Bootstrap</p>
                                                    <p>VSCode</p>
                                                    <p>Github</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div> 
                                </div>
                            </div>
                            <!-- UX/UI -->
                            <div class="col-9 col-sm-6">
                                <div class="card border-0 border-bottom border-primary shadow-sm skill-container">
                                    <div class="card-body text-center p-4 p-xxl-2">
                                        <h3 class="display-4 mb-4">
                                            UX/UI
                                        </h3>
                                        <div class="col-12 mb-3">
                                            <div class="row justify-content-center align-items-start">
                                                <div class="col-auto">
                                                    <p>
                                                        Figma
                                                    </p>
                                                    <p>
                                                        Miro
                                                    </p>
                                                    <p>
                                                        Optimal
                                                    </p>
                                                </div>
                                                <div class="col-auto">
                                                    <p>
                                                        Maze
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div> 
                                </div>
                            </div>
                            <!-- ecommerce -->
                            <div class="col-9 col-sm-6">
                                <div class="card border-0 border-bottom border-primary shadow-sm skill-container">
                                    <div class="card-body text-center p-4 p-xxl-2">
                                        <h3 class="display-4 mb-4">
                                            ecommerce
                                        </h3>
                                        <div class="col-12 mb-3">
                                            <div class="row justify-content-center align-items-start">
                                                <div class="col-auto">
                                                    <p>Amazon</p>
                                                    <p>Mercado Libre</p>
                                                    <p>Walmart</p>
                                                </div>
                                                <div class="col-auto">
                                                    <p>Woocommerce</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div> 
                                </div>
                            </div>
                            <!-- Marketing -->
                            <div class="col-9 col-sm-6">
                                <div class="card border-0 border-bottom border-primary shadow-sm skill-container">
                                    <div class="card-body text-center p-4 p-xxl-2">
                                        <h3 class="display-4 mb-4"> Marketing </h3>
                                        <div class="col-12 mb-3">
                                            <div class="row justify-content-center align-items-start">
                                                <div class="col-auto">
                                                    <p> Google Analytics </p>
                                                    <p> SEO </p>
                                                    <p> SEM </p>
                                                </div>
                                                <div class="col-auto">
                                                    <p> Meta </p>
                                                    <p> Hotjar </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div> 
                                </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    </div>
                </div>
            </section>
            <!-- Soft Skills -->
            <section class="py-3 py-md-5 py-xl-8 softSkillsContainer">
                <div class="container">
                    <div class="row justify-content-md-center">
                        <div class="col-12 col-md-10 col-lg-10 col-xl-10 col-xxl-10">
                            <h2 class="mb-4 mt-5 display-5 text-center text-overlay">
                                Soft Skills
                            </h2>
                            <p class="text-overlay mb-4 text-center lead fs-4">
                                En mi trayectoria profesional, he tenido el privilegio de desarrollar y fortalecer una variedad de habilidades blandas que considero fundamentales para el éxito en cualquier entorno laboral.
                            </p>
                            <p class="text-overlay mb-5 text-center lead fs-4">
                                Estas habilidades, han sido esenciales para mi crecimiento personal y profesional, permitiéndome no solo adaptarme a diferentes desafíos, sino también contribuir de manera significativa a los equipos y proyectos en los que he participado.                            </p>
                            <hr class="w-50 mx-auto mb-5 mb-xl-9 border-dark-subtle">
                        </div>
                    </div>
                </div>
                <!-- Habilidades Blandas -->
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="container-fluid">
                                <div class="row gy-3 gy-md-4">
                                    <div class="col-7 col-md-6 col-lg-4">
                                        <div class="card border-dark">
                                            <div class="card-body text-center p-4 p-xxl-5">
                                                <h3 class="mb-4">
                                                    Comunicación Efectiva
                                                </h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-4 col-md-6 col-lg-4">
                                        <div class="card border-dark">
                                            <div class="card-body text-center p-4 p-xxl-5">
                                                <h3 class="mb-4">
                                                    Trabajo en Equipo
                                                </h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6 col-md-6 col-lg-4">
                                        <div class="card border-dark">
                                            <div class="card-body text-center p-4 p-xxl-5">
                                                <h3 class="mb-4">
                                                    Resolución de Problemas
                                                </h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6 col-md-6 col-lg-4">
                                        <div class="card border-dark">
                                            <div class="card-body text-center p-4 p-xxl-5">
                                                <h3 class="mb-4">
                                                    Gestión del Tiempo
                                                </h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-4 col-md-6 col-lg-4">
                                        <div class="card border-dark">
                                            <div class="card-body text-center p-4 p-xxl-5">
                                                <h3 class="mb-4">
                                                    Empatía
                                                </h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-7 col-md-6 col-lg-4">
                                        <div class="card border-dark">
                                            <div class="card-body text-center p-4 p-xxl-5">
                                                <h3 class="mb-4">
                                                    Adaptabilidad
                                                </h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Banner Contactame -->
            <section class="bannerConactameContainer">
                <div class=" bsb-overlay overflow-hidden">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-12 col-md-10 col-xl-8 col-xxl-7 text-center mb-5 text-overlay">
                            <h3 class="h5 mb-4 mt-5 pt-5 text-uppercase">
                                ¡Ahora te toca a ti!
                            </h3>
                            <p class="display-5 text-overlay mb-5">
                                Ya conoces algo sobre mí, ¿qué tal si me cuentas un poco sobre ti?
                            </p>
                            <a href="/pages/contactame.html" class="mb-5">
                                <button class="buttons btn-lg px-5" type="button">¡Charlemos!</button>
                            </a>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Un vistazo a mis intereses -->
            <section class="interesesContainer py-5 py-xl-8">
                <div class="container mt-4">
                    <div class="row justify-content-md-center">
                        <div class="col-12 col-md-10 col-lg-8 col-xl-7 col-xxl-10">
                            <h2 class="mb-4 display-5 text-center">
                                Un vistazo a mis intereses
                            </h2>
                            <p class="textTitulos mb-4 text-center lead fs-4">
                                ¡Bienvenid@ a mi mundo! Soy una entusiasta de la ciencia ficción, los deportes al aire libre, los viajes y la fotografía.
                            </p>
                            <p class="textTitulos mb-5 text-center lead fs-4">
                                Me encanta aprender de otras culturas, mi sueño es ir a Asia.
                            </p>
                            <hr class="w-50 mx-auto mb-5 mb-xl-9 border-dark-subtle">
                        </div>
                    </div>
                </div>
                <!-- Fotos -->
                <div class="container overflow-hidden">
                    <div class="row gy-2 g-md-2 g-xl-3 bsb-project-2-grid">
                        <div class="col-12 col-md-4 bsb-project-2-item">
                            <figure class="rounded rounded-3 overflow-hidden bsb-overlay-hover m-0">
                                <a href="#!">
                                    <img class="img-fluid bsb-scale bsb-hover-scale-up" loading="lazy" src="/images/intereses/doordash.jpeg" alt="Cena del equipo van-054 Doordash.">
                                </a>
                                <figcaption>
                                    <h3 class="text-overlay bsb-hover-fadeInUp">
                                        Laboral
                                    </h3>
                                    <div class="text-overlay bsb-hover-fadeInDown">
                                        Cena de equipo
                                    </div>
                                </figcaption>
                            </figure>
                        </div>
                        <div class="col-12 col-md-4 bsb-project-2-item">
                            <figure class="rounded rounded-3 overflow-hidden bsb-overlay-hover m-0">
                                <a href="#!">
                                    <img class="img-fluid bsb-scale-up bsb-hover-scale" loading="lazy" src="/images/intereses/cursoingles.jpeg" alt="Grupo de 3 alumnas y la profesora en la graduación del curso de inglés. Ganamos la mejor nota del curso en Cornerstone, Van, Ca.">
                                </a>
                                <figcaption>
                                    <h3 class="text-overlay bsb-hover-fadeInLeft">
                                        Crecimiento Profesional
                                    </h3>
                                    <div class="text-overlay bsb-hover-fadeInRight">
                                        Curso Intensivo de Inglés
                                    </div>
                                </figcaption>
                            </figure>
                        </div>
                        <div class="col-12 col-md-4 bsb-project-2-item">
                            <figure class="rounded rounded-3 overflow-hidden bsb-overlay-hover m-0">
                                <a href="#!">
                                    <img class="img-fluid bsb-scale bsb-hover-scale-up" loading="lazy" src="/images/intereses/inversiones.jpeg" alt="Gráfica que representa como se mueve el precio de las acciones en el mercado financiero, siendo motivado por las emociones de los inversionistas.">
                                </a>
                                <figcaption>
                                    <h3 class="text-overlay bsb-hover-fadeInUp">
                                        Inversiones
                                    </h3>
                                    <div class="text-overlay bsb-hover-fadeInDown text-center">
                                        Gráfico de como mueven las emociones el precio en mercado.
                                    </div>
                                </figcaption>
                            </figure>
                        </div>
                        <div class="col-12 col-md-4 bsb-project-2-item">
                            <figure class="rounded rounded-3 overflow-hidden bsb-overlay-hover m-0">
                                <a href="#!">
                                    <img class="img-fluid bsb-scale bsb-hover-scale-up" loading="lazy" src="/images/intereses/trabajando.jpeg" alt="Una foto de la pantalla de mi computadora, mostrando de fondo un archivo de figma y una frase que me encanto 'ten un super día'.">
                                </a>
                                <figcaption>
                                    <h3 class="text-overlay bsb-hover-fadeInUp">
                                        Laboral
                                    </h3>
                                    <div class="text-overlay bsb-hover-fadeInDown">
                                        Un día normal de trabajo, con un mensaje inesperado.
                                    </div>
                                </figcaption>
                            </figure>
                        </div>
                        <div class="col-12 col-md-4 bsb-project-2-item">
                            <figure class="rounded rounded-3 overflow-hidden bsb-overlay-hover m-0">
                                <a href="#!">
                                    <img class="img-fluid bsb-scale-up bsb-hover-scale" loading="lazy" src="/images/intereses/fotografia1.jpeg" alt="Reflejo de los árboles en un charco de agua del asfalto.">
                                </a>
                                <figcaption>
                                    <h3 class="text-overlay bsb-hover-fadeInLeft">
                                        Fotografía
                                    </h3>
                                    <div class="text-overlay bsb-hover-fadeInRight">
                                        Naturaleza
                                    </div>
                                </figcaption>
                            </figure>
                        </div>
                        <div class="col-12 col-md-4 bsb-project-2-item">
                            <figure class="rounded rounded-3 overflow-hidden bsb-overlay-hover m-0">
                                <a href="#!">
                                    <img class="img-fluid bsb-scale bsb-hover-scale-up" loading="lazy" src="/images/intereses/fotografia2.jpeg" alt="Preparando la parrillada de despedida. Dentro de 3 días me iba a Canadá.">
                                </a>
                                <figcaption>
                                    <h3 class="text-overlay bsb-hover-fadeInUp">
                                        Familia
                                    </h3>
                                    <div class="text-overlay bsb-hover-fadeInDown">
                                        Preparando un momento familiar.
                                    </div>
                                </figcaption>
                            </figure>
                        </div>
                        <div class="col-12 col-md-4 bsb-project-2-item">
                            <figure class="rounded rounded-3 overflow-hidden bsb-overlay-hover m-0">
                                <a href="#!">
                                    <img class="img-fluid bsb-scale-up bsb-hover-scale" loading="lazy" src="/images/intereses/lectura.jpeg" alt="Foto de un libro de ciencia ficción, llamado 'Una educación mortal', junto con un vaso de café en un grupo de lectura.">
                                </a>
                                <figcaption>
                                    <h3 class="text-overlay   bsb-hover-fadeInLeft">
                                        Lectura
                                    </h3>
                                    <div class="text-overlay   bsb-hover-fadeInRight">
                                        Debate en el grupo de lectura.
                                    </div>
                                </figcaption>
                            </figure>
                        </div>
                        <div class="col-12 col-md-4 bsb-project-2-item">
                            <figure class="rounded rounded-3 overflow-hidden bsb-overlay-hover m-0">
                                <a href="#!">
                                    <img class="img-fluid bsb-scale-up bsb-hover-scale" loading="lazy" src="/images/intereses/legos.jpeg" alt="Un superhéroe de lego.">
                                </a>
                                <figcaption>
                                    <h3 class="text-overlay   bsb-hover-fadeInLeft">
                                        Ocio
                                    </h3>
                                    <div class="text-overlay   bsb-hover-fadeInRight">
                                        Armado de legos.
                                    </div>
                                </figcaption>
                            </figure>
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