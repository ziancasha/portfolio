<?php
/**
 * The template for displaying the index page
 *
 * 
 * @package casha.mx
 * @since casha.mx 1.0.0
 */
?>

<?php get_template_part('parts/header'); ?>

<main>
    <!-- Hero area -->
    <section class="bsb-hero-2 px-3 container-ha">
        <div class="container overflow-hidden">
            <div class="row gy-3 gy-lg-0 align-items-lg-center justify-content-lg-between">
                <!-- HA Texto -->
                <div class="col-12 col-lg-6 order-1 order-lg-0">
                    <h1 class="display-3 fw-bold mb-3">
                        ¡Hola! Soy casha :)
                    </h1>
                    <p class="fs-4 mb-5">
                        <em>Ingenierx en Sistemas Ambientales</em> con formación en <strong>Diseño UX/UI</strong> y <strong>Web Developer</strong>, y más de 5 años de experiencia en <strong>Comercio Electrónico</strong> y <strong>Marketing Digital</strong>.
                    </p>
                    <div class="d-grid gap-2 d-sm-flex">
                        <a href="./public/contactame.php">
                            <button type="button" class="buttonp bsb-btn-3xl px-3">
                                ¡Charlemos!
                            </button>
                        </a>
                        <a href="./public/casos-estudio.php">
                            <button type="button" class="buttons bsb-btn-3xl px-3">
                                Casos de estudio
                            </button>
                        </a>
                    </div>
                </div>
                <!-- HA Imagen -->
                <div class="col-12 col-lg-5 text-center">
                    <div class="position-relative">
                        <div class="bsb-circle ha-burbujas bsb-circle-1"></div>
                        <div class="bsb-circle ha-burbujas bsb-circle-2"></div>
                        <div class="bsb-circle ha-burbujas bsb-circle-3"></div>
                        <img class="img-fluid position-relative z-2" loading="lazy" src="./assets/images/heroimg.png" alt="Es una foto mía." width="600">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Tagline/moto -->
    <section>
        <div class="card-container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-8 col-lg-6">
                    <div class="card-tagline shadow">
                        <div class="card-body p-4 p-md-5 text-center">
                            <i class="fas fa-quote-left fa-2x mb-4"></i>
                            <p class="lead text-overlay">
                                <strong>Let's make something great together!</strong> 💻🚀
                            </p>
                            <hr class="w-50 mx-auto border-dark-subtle">
                            <div class="mb-0">
                                <p class="mb-0 text-overlay">
                                    Alex CasHa
                                    <i class="bi bi-hearts"></i>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Projectos -->
    <section class="py-3 py-md-5 py-xl-8 section-casos-de-estudio">
        <!-- Descripción -->
        <div class="container text-style">
            <div class="row justify-content-md-center">
                <div class="col-12 col-md-10 col-lg-8">
                    <h2 class="mb-4 display-5 text-center fw-semibold">
                        Casos de Estudio
                    </h2>
                    <p class="mb-5 text-center lead fs-4">
                        Te invito a que des un vistazo al desarrollo de mis proyectos, en el cual explicaré el <strong>proceso</strong> que se ha llevado a cabo y las <strong>herramientas</strong> que se han utilizado para lograr los <strong>objetivos</strong>.
                    </p>
                    <div class="text-center mb-5">
                        <a href="./public/casos-estudio.php">
                            <button type="button" class="buttonp btn-lg bsb-btn-3xl px-3">
                                Ver más
                            </button>
                        </a>
                    </div>
                    <hr class="w-50 mx-auto border-dark-subtle mt-5 mb-5">
                </div>
            </div>
        </div>
        <!-- Fotos de Proyectos -->
        <div class="container overflow-hidden">
            <div class="row gy-3 gy-lg-4 gy-lg-0x justify-content-center">
                <!-- 1er caso de estudio -->
                <div class="col-12 col-lg-4 mx-5">
                    <figure class="rounded rounded-3 overflow-hidden bsb-overlay-hover m-0">
                        <a href="./public/rainbow-play-cafe.php">
                            <img class="img-fluid bsb-scale-up bsb-hover-scale" loading="lazy" src="./assets/images/proyectos/rainbow.png" alt="Tablero de juego con clavijas de colores formando figuras de frutas y objetos en Rainbow Play Café.">
                        </a>
                        <figcaption>
                            <h3 class="text-overlay bsb-hover-fadeInLeft text-center">
                                Incrementar el % de Reservaciones
                            </h3>
                            <div class="text-overlay bsb-hover-fadeInRight">
                                mediante el rediseño del sitio web.
                            </div>
                        </figcaption>
                    </figure>
                </div>
                <!-- 2do caso de estudio -->
                <div class="col-12 col-lg-4 mx-5">
                    <figure class="rounded rounded-3 overflow-hidden bsb-overlay-hover m-0">
                        <a href="./public/gcss.php">
                            <img class="img-fluid bsb-scale-up bsb-hover-scale" loading="lazy" src="./assets/images/proyectos/gss.png" alt="Técnico revisando los sistemas de seguridad EAS para optimizar su funcionamiento.">
                        </a>
                        <figcaption>
                            <h3 class="text-overlay bsb-hover-fadeInLeft text-center">
                                Aumentar la presencia online
                            </h3>
                            <div class="text-overlay bsb-hover-fadeInRight">
                                mediante el rediseño del sitio web & branding.
                            </div>
                        </figcaption>
                    </figure>
                </div>
            </div>
        </div>
    </section>
    <!-- Banner Conóceme -->
    <section class="bsb-cta-1 px-2 bsb-overlay" style="background-image: url('./assets/images/conocemeBanner2.jpg');">
        <div class="container py-5">
            <div class="row">
                <div class="col-12 col-md-9 col-lg-8 col-xl-7 col-xxl-6 py-5">
                    <h2 class="display-5 text-white mb-2">
                        ¡Qué alegría! Llegaste hasta aquí.
                    </h2>
                    <p class="fs-4 text-white mb-5">
                        Conoce un poco más sobre mí, tanto en lo personal como en mi trayectoria profesional. Veamos si hay compatibilidad y conexión para crear cosas increíbles juntos.
                    </p>
                    <a href="./public/conoceme.php">
                        <button type="button" class="buttonp btn-lg bsb-btn-3xl px-3">
                            ¿Hacemos match?
                        </button>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- Contactame -->
    <section class="bg-light py-3 py-md-5 py-xl-8">
        <div class="container">
            <div class="row gy-3 gy-md-4 gy-lg-0 align-items-md-center">
            <div class="col-12 col-lg-6">
                <div class="row justify-content-xl-center">
                    <div class="col-12 col-xl-11">
                        <h2 class="display-4 fw-bold textTitulos mb-3">
                            ¡Ahora, quiero conocerte!
                        </h2>
                        <p class="lead fs-4 text-style mb-2">
                            Aquí abajo encontrarás toda la información necesaria para que podamos conectar.
                        </p>
                        <p class="lead fs-4 text-style mb-5">
                            ¡Veamos como podemos colaborar!
                        </p>
                        <!-- Redes Sociales -->
                        <div class="d-flex mb-5">
                            <div class="me-4 text-primary">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-chat-dots icon-style" viewBox="0 0 16 16">
                                    <path d="M5 8a1 1 0 1 1-2 0 1 1 0 0 1 2 0m4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0m3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2"/>
                                    <path d="m2.165 15.803.02-.004c1.83-.363 2.948-.842 3.468-1.105A9 9 0 0 0 8 15c4.418 0 8-3.134 8-7s-3.582-7-8-7-8 3.134-8 7c0 1.76.743 3.37 1.97 4.6a10.4 10.4 0 0 1-.524 2.318l-.003.011a11 11 0 0 1-.244.637c-.079.186.074.394.273.362a22 22 0 0 0 .693-.125m.8-3.108a1 1 0 0 0-.287-.801C1.618 10.83 1 9.468 1 8c0-3.192 3.004-6 7-6s7 2.808 7 6-3.004 6-7 6a8 8 0 0 1-2.088-.272 1 1 0 0 0-.711.074c-.387.196-1.24.57-2.634.893a11 11 0 0 0 .398-2"/>
                                </svg>
                            </div>
                            <div>
                                <h3 class="textTitulos mb-3">
                                    Redes Sociales
                                </h3>
                                <a href="https://github.com/alexcasha" class="mx-2  icon-style">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-github" viewBox="0 0 16 16">
                                        <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27s1.36.09 2 .27c1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.01 8.01 0 0 0 16 8c0-4.42-3.58-8-8-8"/>
                                    </svg>
                                </a>
                                <a href="https://www.linkedin.com/in/alexcasha/" class="mx-2  icon-style">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-linkedin" viewBox="0 0 16 16">
                                        <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854zm4.943 12.248V6.169H2.542v7.225zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248S2.4 3.226 2.4 3.934c0 .694.521 1.248 1.327 1.248zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016l.016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225z"/>
                                    </svg>
                                </a>
                            </div>
                        </div>
                        <!-- Agenda y correo -->
                        <div class="row mb-5">
                            <!-- Agendar Cita -->
                            <div class="col-12 col-sm-6">
                                <div class="d-flex mb-5 mb-sm-0">
                                    <div class="me-4 text-primary">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-calendar-day icon-style" viewBox="0 0 16 16">
                                            <path d="M4.684 11.523v-2.3h2.261v-.61H4.684V6.801h2.464v-.61H4v5.332zm3.296 0h.676V8.98c0-.554.227-1.007.953-1.007.125 0 .258.004.329.015v-.613a2 2 0 0 0-.254-.02c-.582 0-.891.32-1.012.567h-.02v-.504H7.98zm2.805-5.093c0 .238.192.425.43.425a.428.428 0 1 0 0-.855.426.426 0 0 0-.43.43m.094 5.093h.672V7.418h-.672z"/>
                                            <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5M1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4z"/>
                                        </svg>
                                    </div>
                                    <div>
                                        <h3 class="textTitulos mb-3">
                                            Mi Agenda
                                        </h3>
                                        <p class="mb-0">
                                            <a class="text-style text-decoration-none" href="https://calendar.notion.so/meet/alexcasha/of1k34mwc">
                                                <em>Agenda aquí</em>  
                                            </a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- Correo -->
                            <div class="col-12 col-sm-6">
                                <div class="d-flex mb-0">
                                    <div class="me-4 text-primary">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-envelope-at icon-style" viewBox="0 0 16 16">
                                            <path d="M2 2a2 2 0 0 0-2 2v8.01A2 2 0 0 0 2 14h5.5a.5.5 0 0 0 0-1H2a1 1 0 0 1-.966-.741l5.64-3.471L8 9.583l7-4.2V8.5a.5.5 0 0 0 1 0V4a2 2 0 0 0-2-2H2Zm3.708 6.208L1 11.105V5.383l4.708 2.825ZM1 4.217V4a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v.217l-7 4.2-7-4.2Z" />
                                            <path d="M14.247 14.269c1.01 0 1.587-.857 1.587-2.025v-.21C15.834 10.43 14.64 9 12.52 9h-.035C10.42 9 9 10.36 9 12.432v.214C9 14.82 10.438 16 12.358 16h.044c.594 0 1.018-.074 1.237-.175v-.73c-.245.11-.673.18-1.18.18h-.044c-1.334 0-2.571-.788-2.571-2.655v-.157c0-1.657 1.058-2.724 2.64-2.724h.04c1.535 0 2.484 1.05 2.484 2.326v.118c0 .975-.324 1.39-.639 1.39-.232 0-.41-.148-.41-.42v-2.19h-.906v.569h-.03c-.084-.298-.368-.63-.954-.63-.778 0-1.259.555-1.259 1.4v.528c0 .892.49 1.434 1.26 1.434.471 0 .896-.227 1.014-.643h.043c.118.42.617.648 1.12.648Zm-2.453-1.588v-.227c0-.546.227-.791.573-.791.297 0 .572.192.572.708v.367c0 .573-.253.744-.564.744-.354 0-.581-.215-.581-.8Z" />
                                        </svg>
                                    </div>
                                    <div>
                                        <h3 class="textTitulos mb-3">
                                            Correo
                                        </h3>
                                        <p class="mb-0">
                                            <a class="text-decoration-none text-style" href="mailto:contacto@casha.mx">
                                                contacto@casha.mx
                                            </a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Horas de atención -->
                        <div class="d-flex">
                            <div class="me-4 text-primary">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-alarm icon-style" viewBox="0 0 16 16">
                                    <path d="M8.5 5.5a.5.5 0 0 0-1 0v3.362l-1.429 2.38a.5.5 0 1 0 .858.515l1.5-2.5A.5.5 0 0 0 8.5 9V5.5z" />
                                    <path d="M6.5 0a.5.5 0 0 0 0 1H7v1.07a7.001 7.001 0 0 0-3.273 12.474l-.602.602a.5.5 0 0 0 .707.708l.746-.746A6.97 6.97 0 0 0 8 16a6.97 6.97 0 0 0 3.422-.892l.746.746a.5.5 0 0 0 .707-.708l-.601-.602A7.001 7.001 0 0 0 9 2.07V1h.5a.5.5 0 0 0 0-1h-3zm1.038 3.018a6.093 6.093 0 0 1 .924 0 6 6 0 1 1-.924 0zM0 3.5c0 .753.333 1.429.86 1.887A8.035 8.035 0 0 1 4.387 1.86 2.5 2.5 0 0 0 0 3.5zM13.5 1c-.753 0-1.429.333-1.887.86a8.035 8.035 0 0 1 3.527 3.527A2.5 2.5 0 0 0 13.5 1z" />
                                </svg>
                            </div>
                            <div>
                                <h3 class="textTitulos mb-3">
                                    Horario de atención
                                </h3>
                                <div class="d-flex mb-1">
                                        <p class="text-style fw-bold mb-0 me-5">
                                            Lu - Vi
                                        </p>
                                        <p class="text-style mb-0">
                                            9am - 6pm
                                        </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Forma de contacto -->
            <div class="col-12 col-lg-6 formContainer d-flex align-items-stretch">
                <div class="row justify-content-xl-center">
                    <div class="col-12 col-xl-11">
                        <div class="bg-white border rounded shadow-sm overflow-hidden">
                            <!-- Opciones a llenar -->
                            <form name="contact" method="POST" data-netlify="true">
                                <div class="row gy-4 gy-xl-5 p-4 p-xl-5">
                                    <!-- Nombre completo -->
                                    <div class="col-12">
                                        <label for="fullname" class="form-label">
                                            Nombre Completo 
                                            <span class="text-danger">*</span>
                                        </label>
                                        <input type="text" class="form-control" id="fullname" name="fullname" value="" required>
                                    </div>
                                    <!-- Correo -->
                                    <div class="col-12 col-md-6">
                                        <label for="email" class="form-label">
                                            Correo 
                                            <span class="text-danger">*</span>
                                        </label>
                                        <div class="input-group">
                                            <span class="input-group-text">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
                                                <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z" />
                                                </svg>
                                            </span>
                                            <input type="email" class="form-control" id="email" placeholder="nombre@ejemplo.com" name="email" value="" required>
                                        </div>
                                    </div>
                                    <!-- Teléfono -->
                                    <div class="col-12 col-md-6">
                                        <label for="phone" class="form-label">
                                            Teléfono
                                        </label>
                                        <div class="input-group">
                                            <span class="input-group-text">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">
                                                <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
                                                </svg>
                                            </span>
                                            <input type="tel" class="form-control" id="phone" placeholder="(xx) xxxx xxxx" name="phone" value="">
                                        </div>
                                    </div>
                                    <!-- Motivo de consulta -->
                                    <div class="col-12">
                                        <label for="subject" class="form-label">
                                            Motivo de Consulta 
                                            <span class="text-danger">*</span>
                                        </label>
                                        <input type="text" class="form-control" id="subject" name="subject" value="" required>
                                    </div>
                                    <!-- Mensaje -->
                                    <div class="col-12">
                                        <label for="message" class="form-label">
                                            Mensaje
                                            <span class="text-danger">*</span>
                                        </label>
                                        <textarea class="form-control" id="message" name="message" rows="3" required></textarea>
                                    </div>
                                    <!-- Botón -->
                                    <div class="col-12">
                                        <div class="d-grid">
                                            <button class="buttonp y btn-lg" type="submit">
                                                Enviar
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_template_part('parts/footer'); ?>

        