@extends('layouts.plantilla')

@section('title', 'Vides')

@section('content')

<!-- Hoteles -->

    <div class="hoteles | border border-light">
    </div>
    
    <section class="container | indexTitle">
        <h1 class= "title">Vides: Repositorio Dinamico de Hoteleria</h1>
    <h2 class= "title">Hoteles Loja</h2>
    </section>
        <section class= "container | showGraphs"> 
        <div class=" row justify-content-md-center ">
            <article class="spaceGraphs col-4 col-md-4 border">
                <h3 class= "title">Ocupacion de Hoteles</h3>
                <img class="imageGraphs" src="/proyecto5Ciclo/blog/resources/views/img/home/exampleImage1.PNG" alt="Image1">
                <div class="dropdown">
                    <button class="btn | btn-secondary | dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                        Mes: Enero
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">>
                        <li class="dropdown-item" href="#">Enero</li>
                        <li class="dropdown-item" href="#">Febrero</li>
                        <li class="dropdown-item" href="#">Marzo</li>
                        <li class="dropdown-item" href="#">Abril</li>
                    </ul>
                </div>
            </article>
            <article class="spaceGraphs | col-4 col-md-4 | border">
                <h3 class= "title">distribucion de Huespedes</h3>
                <img class="imageGraphs" src="/proyecto5Ciclo/blog/resources/views/img/home/exampleImage2.PNG" alt="Image2">
                <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                    Mes: Enero
                </button>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">>
                    <li class="dropdown-item" href="#">Enero</li>
                    <li class="dropdown-item" href="#">Febrero</li>
                    <li class="dropdown-item" href="#">Marzo</li>
                    <li class="dropdown-item" href="#">Abril</li>
                </ul>
            </div>
            </article>
            <article class="spaceGraphs | col-4  | border">
                <a href="#moreInformation">
                <h3 class= "title">Mas Informacion</h3>
                <img class="moreInformation" src="/proyecto5Ciclo/blog/resources/views/img/home/moreInformation.PNG" alt="Image3">
                </a>
            </div>
            </article>
        </div>
        <!---------------------------------------- Second Block -------------------------------------->
        <div class= "Turismo">
            <section class="container | indexTitle">
                <h2 class= "title">Lugares Turisticos</h2>
            </section>
        </div>
        <section class= "container | showGraphs "> 
            <div class=" row justify-content-md-center ">
                <article class="spaceGraphs col-4 col-md-4 border">
                    <h3 class= "title">Lugares Populares</h3>
                    <img class="imageGraphs" src="/proyecto5Ciclo/blog/resources/views/img/home/exampleImage1.PNG" alt="Image3">
                    <div class="dropdown">
                        <button class="btn | btn-secondary | dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                            Mes: Enero
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">>
                            <li class="dropdown-item" href="#">Enero</li>
                            <li class="dropdown-item" href="#">Febrero</li>
                            <li class="dropdown-item" href="#">Marzo</li>
                            <li class="dropdown-item" href="#">Abril</li>
                        </ul>
                    </div>
                </article>
                <article class="spaceGraphs | col-4 col-md-4 | border">
                    <h3 class= "title">Horarios de Atencion</h3>
                    <img class="imageGraphs" src="/proyecto5Ciclo/blog/resources/views/img/home/exampleImage2.PNG" alt="Example Image 1">
                    <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                        Mes: Enero
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">>
                        <li class="dropdown-item" href="#">Enero</li>
                        <li class="dropdown-item" href="#">Febrero</li>
                        <li class="dropdown-item" href="#">Marzo</li>
                        <li class="dropdown-item" href="#">Abril</li>
                    </ul>
                </div>
                </article>
                <article class="spaceGraphs | col-4  | border">
                    <h3 class= "title">Mas Informacion</h3>
                    <a href="#moreInformation">
                    <img class="moreInformation" src="/proyecto5Ciclo/blog/resources/views/img/home/turismMoreInformation.PNG" alt="Example Image 1">
                    </a>
                </div>
                </article>
            </div>
    </section>
@endsection()
