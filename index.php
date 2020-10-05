<?php include_once 'includes/templates/header.php'; ?>

    <section class="contenedor seccion">
        <h2>La mejor conferencia de diseño web en español</h2>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vitae harum perspiciatis iure asperiores nemo voluptate totam eius, distinctio corporis accusamus ex illum deserunt blanditiis officiis sunt eaque quasi magni! Lorem ipsum dolor sit amet
            consectetur, adipisicing elit. Iure, veritatis quos. Aperiam aspernatur quaerat architecto, veritatis quae excepturi nam ratione repellat maiores dicta soluta expedita sequi aliquid aliquam tenetur ullam.</p>
    </section>

    <section class="programa">
        <div class="contenedor-video">
            <video autoplay loop poster="img/bg-talleres.jpg">
                <source src="video/video.mp4" type="video/mp4">
                <source src="video/video.webm" type="video/webm">
                <source src="video/video.ogv" type="video/ogg">
            </video>
        </div>

        <div class="contenido-programa">
            <div class="contenedor">
                <div class="programa-evento">
                    <h2>Programa del evento</h2>
                    <nav class="menu-programa">
                        <a href="#talleres"><i class="fas fa-code"></i>Talleres</a>
                        <a href="#conferencias"><i class="fas fa-comment"></i>Conferencias</a>
                        <a href="#seminarios"><i class="fas fa-university"></i>Seminarios</a>
                    </nav>
                    <div id="talleres" class="info-curso ocultar clearfix">
                        <div class="detalle-evento">
                            <h3>HTML5, CSS3 y JavaScript</h3>
                            <p><i class="fas fa-clock"></i>16:00hrs</p>
                            <p><i class="fas fa-calendar-alt"></i>10 de Diciembre</p>
                            <p><i class="fas fa-user"></i>Juanito del pilar</p>
                        </div>
                        <div class="detalle-evento">
                            <h3>Responsive web design</h3>
                            <p><i class="fas fa-clock"></i>16:00hrs</p>
                            <p><i class="fas fa-calendar-alt"></i>10 de Diciembre</p>
                            <p><i class="fas fa-user"></i>Juanito del pilar</p>
                        </div>
                        <a href="#" class="btn float-right">Ver Todos</a>
                    </div>

                    <div id="conferencias" class="info-curso ocultar clearfix">
                        <div class="detalle-evento">
                            <h3>Como ser freelancer</h3>
                            <p><i class="fas fa-clock"></i>16:00hrs</p>
                            <p><i class="fas fa-calendar-alt"></i>10 de Diciembre</p>
                            <p><i class="fas fa-user"></i>Juanito del pilar</p>
                        </div>
                        <div class="detalle-evento">
                            <h3>Tecnologías del futuro</h3>
                            <p><i class="fas fa-clock"></i>16:00hrs</p>
                            <p><i class="fas fa-calendar-alt"></i>10 de Diciembre</p>
                            <p><i class="fas fa-user"></i>Juanito del pilar</p>
                        </div>
                        <a href="#" class="btn float-right">Ver Todos</a>
                    </div>

                    <div id="seminarios" class="info-curso ocultar clearfix">
                        <div class="detalle-evento">
                            <h3>Diseño UI/UX Mobile First</h3>
                            <p><i class="fas fa-clock"></i>16:00hrs</p>
                            <p><i class="fas fa-calendar-alt"></i>10 de Diciembre</p>
                            <p><i class="fas fa-user"></i>Juanito del pilar</p>
                        </div>
                        <div class="detalle-evento">
                            <h3>Aprende a programar en una mañana</h3>
                            <p><i class="fas fa-clock"></i>16:00hrs</p>
                            <p><i class="fas fa-calendar-alt"></i>10 de Diciembre</p>
                            <p><i class="fas fa-user"></i>Juanito del pilar</p>
                        </div>
                        <a href="#" class="btn float-right">Ver Todos</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include_once 'includes/templates/section-invitados.php'; ?>

    <div class="contador parallax">
        <div class="contenedor">
            <ul class="resumen-evento clearfix">
                <li>
                    <p class="numero"></p>Invitados</li>
                <li>
                    <p class="numero"></p>Talleres</li>
                <li>
                    <p class="numero"></p>Dias</li>
                <li>
                    <p class="numero"></p>Conferencias</li>
            </ul>
        </div>
    </div>

    <section class="precios seccion">
        <h2>Precios</h2>
        <div class="contenedor">
            <ul class="lista-precios clearfix">
                <li>
                    <div class="tabla-precio">
                        <h3>Pase Por 1 Dia</h3>
                        <p class="numero">$30</p>
                        <ul>
                            <li><i class="fas fa-check"></i>Bocadillos Gratis</li>
                            <li><i class="fas fa-check"></i>Todas Las Conferencias</li>
                            <li><i class="fas fa-check"></i>Todos Los Talleres</li>
                        </ul>
                        <a href="#" class="btn hollow">Comprar</a>
                    </div>
                </li>
                <li>
                    <div class="tabla-precio">
                        <h3>Todos Los Dias</h3>
                        <p class="numero">$50</p>
                        <ul>
                            <li><i class="fas fa-check"></i>Bocadillos Gratis</li>
                            <li><i class="fas fa-check"></i>Todas Las Conferencias</li>
                            <li><i class="fas fa-check"></i>Todos Los Talleres</li>
                        </ul>
                        <a href="#" class="btn">Comprar</a>
                    </div>
                </li>
                <li>
                    <div class="tabla-precio">
                        <h3>Pase Por 2 Dias</h3>
                        <p class="numero">$45</p>
                        <ul>
                            <li><i class="fas fa-check"></i>Bocadillos Gratis</li>
                            <li><i class="fas fa-check"></i>Todas Las Conferencias</li>
                            <li><i class="fas fa-check"></i>Todos Los Talleres</li>
                        </ul>
                        <a href="#" class="btn hollow">Comprar</a>
                    </div>
                </li>
            </ul>
        </div>
    </section>

    <div id="mapa" class="mapa"></div>

    <section class="seccion">
        <h2>Testimonalies</h2>
        <div class="testimoniales contenedor clearfix">
            <div class="testimonial">
                <blockquote>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod unde delectus iure facilis. Ea similique quidem sapiente fugiat, reiciendis labore in voluptas modi facere magnam maxime facilis aliquid aut aspernatur.</p>
                    <footer class="block-footer clearfix">
                        <img src="img/testimonial.jpg" alt="Imagen testimonial">
                        <cite>Elsa Payo <span>Diseñador en @ChimaguaRecords</span></cite>
                    </footer>
                </blockquote>
            </div>
            <div class="testimonial">
                <blockquote>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod unde delectus iure facilis. Ea similique quidem sapiente fugiat, reiciendis labore in voluptas modi facere magnam maxime facilis aliquid aut aspernatur.</p>
                    <footer class="block-footer clearfix">
                        <img src="img/testimonial.jpg" alt="Imagen testimonial">
                        <cite>Elsa Payo <span>Diseñador en @ChimaguaRecords</span></cite>
                    </footer>
                </blockquote>
            </div>
            <div class="testimonial">
                <blockquote>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod unde delectus iure facilis. Ea similique quidem sapiente fugiat, reiciendis labore in voluptas modi facere magnam maxime facilis aliquid aut aspernatur.</p>
                    <footer class="block-footer clearfix">
                        <img src="img/testimonial.jpg" alt="Imagen testimonial">
                        <cite>Elsa Payo <span>Diseñador en @ChimaguaRecords</span></cite>
                    </footer>
                </blockquote>
            </div>
        </div>
    </section>

    <div class="newsletter parallax">
        <div class="contenido contenedor">
            <p>Registrate al newsletter</p>
            <h3>StgoWebCamp</h3>
            <a href="#" class="btn transparente">Resgistro</a>
        </div>
    </div>

    <section class="seccion">
        <h2>Faltan</h2>
        <div class="cuenta-regresiva contenedor">
            <ul class="clearfix">
                <li>
                    <p id='dias' class="numero"></p>Dias</li>
                <li>
                    <p id='horas' class="numero"></p>Horas</li>
                <li>
                    <p id='minutos' class="numero"></p>Minutos</li>
                <li>
                    <p id='segundos' class="numero"></p>Segundos</li>
            </ul>
        </div>
    </section>

    <?php include_once 'includes/templates/site-footer.php'; ?>