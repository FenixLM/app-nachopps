@extends('inicio')

@section('content')
<div class="mt-8 nosotros">

    <h1 class=" text-4xl text-center font-bold">SOBRE LA EMPRESA</h1>

    <div class="valores-organizacionales">
        <div>
            <h3 class="uppercase">
                misión
            </h3>

            <div class="mision-container">
                <div class="mision-container-img">
                    <img src="../assets/img/mision.jpg" alt="Mision">
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
                    <img src="../assets/img/vision.jpg" alt="Mision">
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

@endsection