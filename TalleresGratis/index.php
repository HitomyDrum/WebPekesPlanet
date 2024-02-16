<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Talleres Gratis Pekes Planet</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />


    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="../formTalleresFree.css">
</head>

<body>
    <div hidden class="top-banner">
        <a href="tu-enlace-aqui">Tu primera clase GRATIS, dale click aquí para empezar.</a>
    </div>
    <!-- Navbar -->
    <div class="container-fluid navbar-pekes">
        <nav class="navbar navbar-expand-lg navbar-dark bg-transparent ">
            <div class="container-fluid">
                <img src="../images/logo-pekes-final.png" class="img-fluid logo-pekes" alt="">
                <button class="navbar-toggler shadow-none border-0" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                    <i class="fa-solid fa-bars fa-lg"></i>
                </button>
                <!-- Sidebar -->
                <div class="sidebar offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar"
                    aria-labelledby="offcanvasNavbarLabel">
                    <!-- Sidebar Header -->
                    <div class="offcanvas-header text-white border-bottom">
                        <img src="../images/logo-pekes-final.png" class="img-fluid" alt="">
                        <button type="button" class="btn-close btn-close-white shadow-none" data-bs-dismiss="offcanvas"
                            aria-label="Close"></button>
                    </div>
                    <!-- Sidebar Body -->
                    <div class="offcanvas-body d-flex flex-column flex-lg-row p-4 p-lg-0">
                        <ul class="navbar-nav justify-content-center align-items-center fs-5 flex-grow-1 pe-4">
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="#">Inicio</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="./about/">Talleres</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="./book-fotos/">Conócenos</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="./reel-actoral/">Fotitos</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Shows</a>
                            </li>
                        </ul>
                        <div class="links d-flex justify-content-center align-items-center">
                            <a hidden href="https://www.facebook.com/maffer.escajadillo">Iniciar</i></a>

                            <div class="outer button">
                                <button>Inscribirse</button>
                                <span></span>
                                <span></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>

    </div>
    <!-- Formulario Clases Gratis -->
    <div class="container-fluid" style="background-color: #f1f4fa;"><br><br>
        <div class="row">
            <form action="./" method="POST" role="form" class="col go-right">
                <div class="franja-ofrecemos">
                    <h2 class="text-center h2-planet">Clase de plastilina sábado 9 de Diciembre 11am</h2>
                    <h3 class="text-center h2-planet">¡GRATIS!</h3>
                    <br>
                </div>
                <p style="margin-bottom: 25px; font-weight: bold;">Clase demostrativa de PLASTILINA para el engreído de la casa 🥰🚀.</p>
                <figcaption class="blockquote-footer">
                    Estimula la <cite title="Source Title">imaginación</cite>
                </figcaption>
                <figcaption class="blockquote-footer">
                    Fomenta habilidades <cite title="Source Title">sociales</cite>
                </figcaption>
                <figcaption class="blockquote-footer">
                    Mejora la <cite title="Source Title">concentración</cite>
                </figcaption><hr>
                <p class="text-info bg-dark text-center"></p>
                <div class="form-group">
                    <input id="cell" name="cell" type="tel" class="form-control" maxlength="9" oninput="validarNumero(this)" required>
                    <label for="cell">Número celular * Ejemplo: 963245070</label>
                </div>
                <div class="form-group">
                    <input id="nomApo" name="nomApo" type="text" class="form-control" oninput="validarTexto(this)" required>
                    <label for="nomApo">Nombre del Apoderado *</label>
                </div>
                <div class="form-group">
                    <input id="nomPeke1" name="nomPeke1" type="text" class="form-control" oninput="validarTexto(this)" required>
                    <label for="nomPeke1">Nombre y Apellido del Peke *</label>
                </div>
                <div class="form-group">
                    <input id="nomPeke2" name="nomPeke2" type="text" class="form-control" oninput="validarTexto(this)">
                    <label for="nomPeke2">Nombre y Apellido del Peke 2 (Opcional)</label>
                </div>
                <br>
                <button type="submit" name="botonPresionado" class="btn btn-lg btn-success">Reservar clase GRATIS</button>
                <div hidden class="form-group">
                    <textarea id="message" name="phone" class="form-control"></textarea>
                    <label for="message">Message</label>
                </div>
            </form>
            <div class="bg-primary" style="padding:10px;margin-top:20px;clear:both;color:white;">
                <p>• El Link de ZOOM se enviará horas antes de la clase por Whatsapp. </p>
            </div>
        </div>

        
    </div>
    <!-- Footer -->
    <footer class="deneb_footer">
        <div class="widget_wrapper" style="background-image: url('');">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="widget widegt_about">
                            <div class="widget_title">
                                <img src="../images/logo-pekes-final.png" class="img-fluid" alt="">
                            </div>
                            <p>Síguenos en nuestras redes.</p>
                            <ul class="social">
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="widget widget_link">
                            <div class="widget_title">
                                <h4>Acceso rápido</h4>
                            </div>
                            <ul>
                                <li><a href="#planetas-talleres">Planetas</a></li>
                                <li><a href="#precios">Precios</a></li>
                                <li><a href="#ofrecemos">¿Qué ofrecemos?</a></li>
                                <li><a href="#fomentamos">¿Qué fomentamos?</a></li>

                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="widget widget_contact">
                            <div class="widget_title">
                                <h4>Contacto</h4>
                            </div>
                            <div class="contact_info">
                                <div class="single_info">
                                    <div class="icon">
                                        <i class="fas fa-phone-alt"></i>
                                    </div>
                                    <div class="info">
                                        <p><a href="tel:+51900800700">+51 900 800 700</a></p>
                                        <p hidden><a href="tel:+919246147999">+91 924-614-7999</a></p>
                                    </div>
                                </div>
                                <div class="single_info">
                                    <div class="icon">
                                        <i class="fas fa-envelope"></i>
                                    </div>
                                    <div class="info">
                                        <p><a href="mailto:info@deneb.com">talleres@pekesplanet.com</a></p>
                                        <p><a href="mailto:services@deneb.com">developer@pekesplanet.com</a></p>
                                    </div>
                                </div>
                                <div class="single_info">
                                    <div class="icon">
                                        <i class="fas fa-map-marker-alt"></i>
                                    </div>
                                    <div class="info">
                                        <p>Lima, Metropolitana<span>Perú.</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright_area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="copyright_text">
                            <p>2023 Copyright &copy; Web por Tomy.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
        crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="./sweetAlert.js"></script>
    <?php
        if (isset($_POST['botonPresionado'])) {
            require_once("./registrarPeke.php");
        }
    ?>
</body>

</html>