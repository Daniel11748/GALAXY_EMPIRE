<?php
include('header.php');


?>
<!-- PROPIETARIO -->
<div class="row">
    <div class="col-md-5 mx-auto my-auto rounded-3 bg-secondary bg-opacity-75 border border-1 border-dark p-2 mt-2 text-center">
        <h3>Propietario</h3>
        <img src="../image/propietario.jpeg" alt="#">
        <div class="info">
            <h5>Nombre: Senior Velorio Rodas</h5>
            <p> Empresario y diseñador de software.</p>

            <p>Velorio Rodas es un emprendedor audaz y visionario que ha dejado una marca indeleble en el mundo de la tecnología. Con una mente creativa y una pasión por la innovación, ha fundado y dirigido Galaxy Empire, una empresa líder en el desarrollo de software.

                Rodas es conocido por su enfoque vanguardista en el desarrollo de soluciones tecnológicas que no solo satisfacen las necesidades del presente, sino que también anticipan las demandas del futuro.
            </p>
        </div>
    </div>
</div>

<!-- CARRUSEL -->
<div class="row">
    <div class="col-md-8 mx-auto my-auto rounded-3 bg-light bg-opacity-50 border border-1 border-dark p-2 mt-2 mb-2 text-center">

        <div id="carouselExampleCaptions" class="carousel slide mt-5">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="container  w-75">
                    <div class="carousel-item active contenedor-imagen size">
                        <h3>Gerente de Proyectos</h3>
                        <img src="../image/pedro.jpg" class="d-block w-50 mx-auto" alt="#">
                        <div class="info">
                            <h5>Nombre: Pedro Sánchez</h5>
                            <p> Ingeniero en Sistemas y Administración de Empresas con Especialización en Gestión de Proyectos</p>

                            <p>Pedro es un gerente de proyectos con experiencia en liderar equipos multidisciplinarios hacia el éxito. Con habilidades en planificación, seguimiento y gestión de riesgos, se encarga de coordinar el desarrollo de proyectos en Galaxy Empire, asegurando la entrega oportuna y la satisfacción del cliente.
                            </p>
                        </div><br><br>
                        <div class="carousel-caption d-none d-md-block">
                        </div>

                    </div>

                    <div class="carousel-item contenedor-imagen">
                        <h3> Desarrolladora Frontend</h3>
                        <img src="../image/maria.jpg" class="d-block w-50 mx-auto" alt="#">
                        <div class="info">
                            <h5>Nombre:María Luna </h5>
                            <p> Ingeniera en Sistemas de Información</p>

                            <p>María es una desarrolladora frontend apasionada por la creación de interfaces de usuario elegantes y funcionales. Con experiencia en tecnologías como HTML, CSS y JavaScript, se encarga de convertir los diseños creativos en experiencias interactivas que cautivan a los usuarios.
                            </p>
                        </div><br><br>
                        <div class="carousel-caption d-none d-md-block">

                        </div>
                    </div>

                    <div class="carousel-item contenedor-imagen">
                        <h3>Diseñadora UX/UI</h3>
                        <img src="../image/carolina.jpg" class="d-block w-25 mx-auto" alt="#">
                        <div class="info">
                            <h5>Nombre: Carolina Martínez</h5>
                            <p>Diseñador Gráfico</p>

                            <p>Carolina es una diseñadora UX/UI comprometida con la creación de experiencias digitales intuitivas y atractivas. Con habilidades en diseño de interfaces, prototipado y pruebas de usabilidad, se enfoca en comprender las necesidades de los usuarios para diseñar soluciones que mejoren su interacción con los productos de Galaxy Empire.
                            </p>
                        </div><br><br>
                        <div class="carousel-caption d-none d-md-block">

                        </div>
                    </div>
                </div>
            </div>

            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- TERMINA CARRUSEL -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>