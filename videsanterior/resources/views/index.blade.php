@extends('layouts.plantilla')

@section('title', 'Vides')

@section('content')

    <section class="page-name">
        <div class="position-title">
            <h1>
                Vides: Repositorio Dinamico de Hoteleria<br>
            </h1>

        </div>
        
        <div class="video-index">
            <video src="/proyecto5Ciclo/proyectoIntegrador/vides/resources/video/videoInicio.m4v" autoplay loop muted></video>    
        </div>
        
    </section>
    <!-- Hoteles -->
    <section class="container-principal shadow-box">
        <h2>Hoteleria</h2>
        <div class="index-hospitality" >
            <article class="article-hospitality">
                <h3>Ocupacion de Hoteles</h3>
                <img class="imageGraphs" src="/proyecto5Ciclo/proyectoIntegrador/vides/resources/views/img/home/exampleImage2.PNG" alt="Image1">
                <a  class="button" href="#">Mas detalles</a>
            </article>
            <article class="article-hospitality">
                <h3>Ocupacion de Hoteles</h3>
                <img class="imageGraphs" src="/proyecto5Ciclo/proyectoIntegrador/vides/resources/views/img/home/exampleImage2.PNG" alt="Image1">
                <a class="button" href="#">Mas detalles</a>
            </article>
            <article class="article-hospitality">
                <a class="link-index" href="#">
                    <h3>Ocupacion de Hoteles</h3>
                    <img class="imageGraphs" src="/proyecto5Ciclo/proyectoIntegrador/vides/resources/views/img/home/moreInformation.PNG" alt="Image1">
                </a>
            </article>
        </div>
    </section>
    <div class="collage">
        <img class= "img1" src="/proyecto5Ciclo/proyectoIntegrador/vides/resources/views/img/collage/collage3.jpg" alt="">
        <img class= "img2" src="/proyecto5Ciclo/proyectoIntegrador/vides/resources/views/img/collage/collage2.jpg" alt="">
        <img class= "img3" src="/proyecto5Ciclo/proyectoIntegrador/vides/resources/views/img/collage/collage4.jpg" alt="">
        <img class= "img4" src="/proyecto5Ciclo/proyectoIntegrador/vides/resources/views/img/collage/collage5.jpg" alt="">
        <img class= "img5" src="/proyecto5Ciclo/proyectoIntegrador/vides/resources/views/img/collage/collage6.jpg" alt="">
        <img class= "img6" src="/proyecto5Ciclo/proyectoIntegrador/vides/resources/views/img/collage/collage7.jpg" alt="">
    </div>
    
    <Section class="container-principal shadow-box">
        <h2>Zonas de Interes</h2>
        <div class="index-hospitality">
            <article class="article-hospitality">
                <h3>Parques</h3>
                <img class="imageGraphs" src="/proyecto5Ciclo/proyectoIntegrador/vides/resources/views/img/home/exampleImage2.PNG" alt="Image1">
                <a class="button" href="#">Mas detalles</a>
            </article>
            <article class="article-hospitality">
                <h3>Monumentos</h3>
                <img class="imageGraphs" src="/proyecto5Ciclo/proyectoIntegrador/vides/resources/views/img/home/exampleImage2.PNG" alt="Image1">
                <a class="button" href="#">Mas detalles</a>
            </article>
            <article class="article-hospitality">
                <a class="link-index" href="#">
                    <h3>Ocupacion de Hoteles</h3>
                    <img class="imageGraphs" src="/proyecto5Ciclo/proyectoIntegrador/vides/resources/views/img/home/turismMoreInformation.PNG" alt="Image1">
                </a>
            </article>
        </div>
    </Section>

@endsection()
