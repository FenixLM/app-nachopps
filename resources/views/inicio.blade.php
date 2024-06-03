<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NACHOPPS RESTAURANTE</title>


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    @Vite(['resources/css/app.css','resources/js/app.js'])

</head>

<body>

    <nav class="navegacion">
        <div class="img-logo">
            <a href="index.html">
                <img src="{{ Vite::asset('resources/images/logo.jpg') }}" alt="Logo">
            </a>
        </div>
        <ul>
            <li><a href="index.html">Inicio</a></li>
            <li><a href="menu.html">Menu</a></li>
            <li><a href="pages/nosotros.html">Nosotros</a></li>
            <li><a href="contacto.html">Contactanos</a></li>
        </ul>
    </nav>

    <section>
        <div class="img-header">
            <img src="{{ Vite::asset('resources/images/fondo-rectangular.jpg') }}" alt="Fondo nachopps">
        </div>
    </section>

    <section>
        <div class="content">
            @yield('content')
        </div>
            {{-- <div id="menus-container" class="contenedor-productos">

            </div> --}}
                <!-- <div class="card">
                    <div class="card-img">
                        <img src="assets/img/anticucho-1.jpg" alt="Producto1">
                    </div>
                    <div class="card-body">
                        <h4 class="text-center">Producto 1</h4>
                        <div class="mt-1">
                            <p>Descripcion del producto 1</p>
                            <p>Precio: $10.00</p>
                        </div>

                    </div>

                    <div class="m-1 text-center">
                        <button type="button" class="btn btn-primary">Comprar</button>
                    </div>
                </div> -->
                <!-- 

                <div class="card">
                    <div class="card-img">
                        <img src="assets/img/anticucho-1.jpg" alt="Producto1">
                    </div>
                    <div class="card-body">
                        <h4 class="text-center">Producto 1</h4>
                        <div class="mt-1">
                            <p>Descripcion del producto 1</p>
                            <p>Precio: $10.00</p>
                        </div>

                    </div>

                    <div class="m-1 text-center">
                        <button type="button" class="btn btn-primary">Comprar</button>
                    </div>
                </div>


                <div class="card">
                    <div class="card-img">
                        <img src="assets/img/anticucho-1.jpg" alt="Producto1">
                    </div>
                    <div class="card-body">
                        <h4 class="text-center">Producto 1</h4>
                        <div class="mt-1">
                            <p>Descripcion del producto 1</p>
                            <p>Precio: $10.00</p>
                        </div>

                    </div>

                    <div class="m-1 text-center">
                        <button type="button" class="btn btn-primary">Comprar</button>
                    </div>
                </div>


                <div class="card">
                    <div class="card-img">
                        <img src="assets/img/anticucho-1.jpg" alt="Producto1">
                    </div>
                    <div class="card-body">
                        <h4 class="text-center">Producto 1</h4>
                        <div class="mt-1">
                            <p>Descripcion del producto 1</p>
                            <p>Precio: $10.00</p>
                        </div>

                    </div>

                    <div class="m-1 text-center">
                        <button type="button" class="btn btn-primary">Comprar</button>
                    </div>
                </div>


                <div class="card">
                    <div class="card-img">
                        <img src="assets/img/anticucho-1.jpg" alt="Producto1">
                    </div>
                    <div class="card-body">
                        <h4 class="text-center">Producto 1</h4>
                        <div class="mt-1">
                            <p>Descripcion del producto 1</p>
                            <p>Precio: $10.00</p>
                        </div>

                    </div>

                    <div class="m-1 text-center">
                        <button type="button" class="btn btn-primary">Comprar</button>
                    </div>
                </div>



                <div class="card">
                    <div class="card-img">
                        <img src="assets/img/anticucho-1.jpg" alt="Producto1">
                    </div>
                    <div class="card-body">
                        <h4 class="text-center">Producto 1</h4>
                        <div class="mt-1">
                            <p>Descripcion del producto 1</p>
                            <p>Precio: $10.00</p>
                        </div>

                    </div>

                    <div class="m-1 text-center">
                        <button type="button" class="btn btn-primary">Comprar</button>
                    </div>
                </div> -->



        </div>

    </section>

    <footer class="footer">

        <div>
            <div class="footer-logo">
                <img src="{{ Vite::asset('resources/images/logo.jpg') }}" alt="">
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

    <a id="wssp" class="whatsapp d-none" target="_blank"> <i class="fa fa-whatsapp whatsapp-icon"></i></a>

    @Vite('resources/js/app.js')
</body>

</html>