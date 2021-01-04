@extends('layouts.plantilla')

@section('title', 'Carga de Archivos')

@section('content')
    <html>
        <head>
        </head>
    <body>
        <form action="subida/subeHotel.php" method="POST" enctype="multipart/form-data">
            <input type="file" name="archivo">
            <br><br>
            <input type="submit" value="HOTEL">
        </form>       
        <br><br>
        <form action="subida/subeHistorial.php" method="POST" enctype="multipart/form-data">
            <input type="file" name="archivo">
            <br><br>
            <input type="submit" value="HISTORIAL">
        </form>    
        <br><br>
        <form action="subida/subeCliente.php" method="POST" enctype="multipart/form-data">
            <input type="file" name="archivo">
            <br><br>
            <input type="submit" value="CLIENTE">
        </form>   
    </body>
    </html>
@endsection