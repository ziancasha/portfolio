<?php
/**
 * The template for displaying the header
 *
 * 
 * @package casha.mx
 * @since casha.mx 1.0.0
 */
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Este es el código para enlazar el CSS con el HTML -->
        <link href="./css/main.css" rel="stylesheet" type="text/css" />

        <!-- Este es el código para agregar favicon. Se pueden cambiar las dimensiones por: 16x16, 32x32, 48x48, 64x64  -->
        <link rel="icon" href="./assets/images/brand/icon.png" sizes="16x16" type="image/png" />

        <!-- Fuentes: Montserrat Alternates & Quicksand -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat+Alternates:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Quicksand:wght@300..700&display=swap" rel="stylesheet">

        <!-- Información SEO -->
        <meta name="author" content="Alex Castañeda">
        <meta name="contact" content="contacto@casha.mx">
        <meta name="description" content="Soy Casha, un consultor digital dedicado a llevar a las empresas al dinámico mundo online. Creo y optimizo la presencia digital de los negocios con un enfoque detallado e innovador. Soy experto en optimización de tasas de conversión, marketing digital, investigación de experiencia de usuario, redacción UX y diseño de interfaces. Ayudo a las marcas a sobresalir en el entorno digital.">

        <!-- Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="stylesheet" href="https://unpkg.com/bs-brain@2.0.4/components/projects/project-3/assets/css/project-3.css">
        <link rel="stylesheet" href="https://unpkg.com/bs-brain@2.0.4/components/heroes/hero-2/assets/css/hero-2.css">


        <!-- Librería de icons -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.0/font/bootstrap-icons.min.css">

        <title> casha | Consultor Digital </title>
    </head>
    <body>
        <!-- Navbar -->
        <header>
            <nav class="navbar fixed-top navbar-container bsb-navbar bsb-navbar-caret">
                <div class="container position-relative justify-content-center">
                    <a class="navbar-brand" href="index.php">
                        <img src="./assets/images/brand/monograma.png" alt="casha logo" width="135" height="44">
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
                                    <a class="menu-text active d-flex align-items-center justify-content-start" aria-current="page" href="index.php">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-heart-fill icon-padding" viewBox="0 0 16 16">
                                            <path d="M7.293 1.5a1 1 0 0 1 1.414 0L11 3.793V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v3.293l2.354 2.353a.5.5 0 0 1-.708.707L8 2.207 1.354 8.853a.5.5 0 1 1-.708-.707z"/>
                                            <path d="m14 9.293-6-6-6 6V13.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5zm-6-.811c1.664-1.673 5.825 1.254 0 5.018-5.825-3.764-1.664-6.691 0-5.018"/>
                                        </svg>
                                        Home 
                                    </a>
                                </li>
                                <!-- Proyectos -->
                                <li class="nav-item">
                                    <a class="menu-text d-flex align-items-center justify-content-start" href="./public/casos-estudio.php">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-zip-fill icon-padding" viewBox="0 0 16 16">
                                            <path d="M5.5 9.438V8.5h1v.938a1 1 0 0 0 .03.243l.4 1.598-.93.62-.93-.62.4-1.598a1 1 0 0 0 .03-.243"/>
                                            <path d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0M9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1m-4-.5V2h-1V1H6v1h1v1H6v1h1v1H6v1h1v1H5.5V6h-1V5h1V4h-1V3zm0 4.5h1a1 1 0 0 1 1 1v.938l.4 1.599a1 1 0 0 1-.416 1.074l-.93.62a1 1 0 0 1-1.109 0l-.93-.62a1 1 0 0 1-.415-1.074l.4-1.599V8.5a1 1 0 0 1 1-1"/>
                                        </svg>
                                        Casos de estudio
                                    </a>
                                </li>
                                <!-- Conóceme -->
                                <li class="nav-item">
                                    <a class="menu-text d-flex align-items-center justify-content-start" href="./public/conoceme.php">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-hearts icon-padding" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd" d="M4.931.481c1.627-1.671 5.692 1.254 0 5.015-5.692-3.76-1.626-6.686 0-5.015m6.84 1.794c1.084-1.114 3.795.836 0 3.343-3.795-2.507-1.084-4.457 0-3.343M7.84 7.642c2.71-2.786 9.486 2.09 0 8.358-9.487-6.268-2.71-11.144 0-8.358"/>
                                        </svg>
                                        Conóceme
                                    </a>
                                </li>
                            </ul>
                            <hr class="w-50 mx-auto border-dark-subtle mt-5 mb-4">
                            <a href="./public/contactame.php">
                                <button class="btn-lg w-100 buttonp mb-3" type="button" value="input"> 
                                    <i class="bi bi-chat-heart-fill icon-padding"></i>
                                    Charlemos
                                </button>
                            </a>
                            <a href="x" download="Alex-Castaneda">
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
                                        <a class="me-2 icon-style" href="https://github.com/alexcasha">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-github text-style" viewBox="0 0 16 16">
                                                <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27s1.36.09 2 .27c1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.01 8.01 0 0 0 16 8c0-4.42-3.58-8-8-8"/>
                                            </svg>
                                        </a>
                                        <a class="me-2 icon-style" href="https://www.linkedin.com/in/alexcasha/">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-linkedin text-style" viewBox="0 0 16 16">
                                                <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854zm4.943 12.248V6.169H2.542v7.225zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248S2.4 3.226 2.4 3.934c0 .694.521 1.248 1.327 1.248zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016l.016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225z"/>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </header>
