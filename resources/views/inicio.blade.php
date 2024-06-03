
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NACHOPPS RESTAURANTE</title>

    @Vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>

    <nav class="navegacion">
        <div class="img-logo">
            <a href="index.html">
                <img src="assets/img/logo-sinfondo.png" alt="Logo">
            </a>
        </div>
        <ul>
            <li><a href="index.html">Inicio</a></li>
            <li><a href="menu.html">Menu</a></li>
            <li><a href="nosotros.html">Nosotros</a></li>
            <li><a href="contacto.html">Contactanos</a></li>
        </ul>
    </nav>

    <section>
        <table id="miTabla">
            <tr>
                <td data-info="Información 1">Elemento 1</td>
            </tr>
            <tr>
                <td data-info="Información 2">Elemento 2</td>
            </tr>
            <tr>
                <td data-info="Información 3">Elemento 3</td>
            </tr>
        </table>
    </section>

    <section>
        <div class="img-header">
            <img src="assets/img/fondo-rectangular.jpg" alt="Fondo nachopps">
        </div>
    </section>

    <section>
        <h1 class="m-1"> Lo que te podria apetecer </h1>


        <div id="infoContainer"></div>
        <div>
            <div class="contenedor-productos">

                <table border="0">

                    <tr>
                        <td width="25%">
                            <div>
                                <img src="assets/img/anticucho-1.jpg" width="350" height="400">

                                <div class="card-body">
                                    <h4 class="text-center">Producto 1</h4>
                                    <div class="mt-1">
                                        <p>Descripcion del producto 1</p>
                                        <p>Precio: S/10.00</p>
                                    </div>

                                    <div class="m-1 text-center">
                                        <button class="btn-comprar">Comprar</button>
                                    </div>
                                </div>
                            </div>
                        </td>

                        <td width="25%">
                            <div>
                                <img src="assets/img/anticucho-2.jpg" width="350" height="400">

                                <div class="card-body">
                                    <h4 class="text-center">Producto 2</h4>
                                    <div class="mt-1">
                                        <p>Descripcion del producto 2</p>
                                        <p>Precio: S/20.00</p>
                                    </div>

                                    <div class="m-1 text-center">
                                        <button class="btn-comprar">Comprar</button>
                                    </div>
                                </div>
                            </div>
                        </td>

                        <td width="25%">
                            <div class="card-img">
                                <img src="assets/img/parihuela-2.jpg" width="350" height="400">

                                <div class="card-body">
                                    <h4 class="text-center">Producto 3</h4>
                                    <div class="mt-1">
                                        <p>Descripcion del producto 3</p>
                                        <p>Precio: S/30.00</p>
                                    </div>

                                    <div class="m-1 text-center">
                                        <button class="btn-comprar">Comprar</button>
                                    </div>
                                </div>
                            </div>
                        </td>

                        <td width="25%">
                            <div class="card-img">
                                <img src="assets/img/PIZZA 1.jpg" width="350" height="400">

                                <div class="card-body">
                                    <h4 class="text-center">Producto 4</h4>
                                    <div class="mt-1">
                                        <p>Descripcion del producto 4</p>
                                        <p>Precio: S/40.00</p>
                                    </div>

                                    <div class="m-1 text-center">
                                        <button class="btn-comprar">Comprar</button>
                                    </div>
                                </div>
                            </div>
                        </td>

                    </tr>

                </table>

            </div>
        </div>

    </section>

    <section>

        <div class="mt-2 nosotros">

            <h1 class="text-center">SOBRE LA EMPRESA</h1>

            <div class="valores-organizacionales">

                <div>

                    <h3 class="uppercase">
                        misión
                    </h3>

                    <div class="mision-container">
                        <div class="mision-container-img">
                            <img src="assets/img/mision.jpg" alt="Mision">
                        </div>

                        <p class="mt-1">
                            Ofrecer a nuestros clientes una experiencia gastronómica excepcional, utilizando
                            ingredientes
                            frescos y de calidad para crear platos innovadores que satisfagan los paladares más
                            exigentes.
                            Además, brindar un servicio cálido y personalizado que genere vínculos duraderos con
                            nuestros
                            clientes.
                        </p>
                    </div>




                </div>


                <div>

                    <h3 class="uppercase">
                        visión
                    </h3>

                    <div class="mision-container">
                        <div class="vision-container-img">
                            <img src="assets/img/vision.jpg" alt="Mision">
                        </div>

                        <p class="mt-1">
                            Ser el punto de encuentro preferido de la comunidad sullanera, ofreciendo experiencias
                            culinarias únicas y un ambiente acogedor que promueva la conexión y el disfrute de momentos
                            especiales.
                        </p>
                    </div>




                </div>

            </div>

        </div>

    </section>

    <footer class="footer">

        <div>
            <div class="footer-logo">
                <img src="assets/img/logo.jpg" alt="">
            </div>
        </div>


        <div>
            <ul>
                <li><a href="index.html">Inicio</a></li>
                <li><a href="menu.html">Menu</a></li>
                <li><a href="nosotros.html">Nosotros</a></li>
                <li><a href="contacto.html">Contactanos</a></li>
            </ul>
        </div>



        <div class="">


            <div class="mt-1">
                <strong>
                    Contáctanos
                </strong>
                <p>
                    Teléfono: 073 123456
                </p>
            </div>

            <div class="mt-1">
                <strong>
                    Ubicanos en:
                </strong>
                Calle Grau 892 - Sullana
            </div>

            <!-- NACHOPPS todos los derechos reservados &copy; 2024 -->

        </div>

        <div>


            <div>
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3975.2784861602195!2d-80.69014447501945!3d-4.8929724950828275!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9035fb2a51bdf809%3A0xb904471064523b00!2sNa&#39;%20Chopps%20RestoBar!5e0!3m2!1ses-419!2spe!4v1713058797922!5m2!1ses-419!2spe"
                    width="300" height="250" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>

    </footer>


    <script src="app.js"></script>

</body>

</html>