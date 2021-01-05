<?php
    date_default_timezone_set('America/Bogota');
    
    $connect = mysqli_connect("127.0.0.1", "root", "", "vides");
    include("/proyecto5Ciclo/proyectoIntegrador/vides/resources/views/PHPExcel/IOFactory.php");

    $ruta = '/proyecto5Ciclo/proyectoIntegrador/vides/resources/views/Archivos';

    $nombre = $_FILES['archivo']['name'];
    $guardado = $_FILES['archivo']['tmp_name'];
    
    if(move_uploaded_file($guardado, $ruta.$nombre)){
        $objPHPExcel = PHPExcel_IOFactory::load($ruta.$nombre);
        $sheetCount = $objPHPExcel->getSheetCount();
        $lastSheet = $sheetCount - 1;
        $objPHPExcel->setActiveSheetIndex($lastSheet);
        $workSheet = $objPHPExcel->getActiveSheet();
        $highestRow = $workSheet->getHighestRow();

        $idEstablecimiento = $workSheet->getCellByColumnAndRow(0, $highestRow - 3)->getValue();
        $nombres = $workSheet->getCellByColumnAndRow(0, $highestRow - 3)->getValue();
        $categoria = $workSheet->getCellByColumnAndRow(2, $highestRow - 3)->getValue();
        $numHabitaciones = $workSheet->getCellByColumnAndRow(3, $highestRow - 3)->getValue();
        $plazas = $workSheet->getCellByColumnAndRow(4, $highestRow - 3)->getValue();
        $empTemp = $workSheet->getCellByColumnAndRow(19, $highestRow - 3)->getValue();
        $query = "INSERT INTO hotel (idEstablecimiento, nombres, categoria, numHabitaciones, plazas, empTemp)
            VALUES ('$idEstablecimiento','$nombres','$categoria','$numHabitaciones','$plazas','$empTemp')";
        mysqli_query($connect, $query);
    }else{
        echo "El archivo no se pudo guardar";
    }
    echo "<script>location.href='/proyecto5Ciclo/proyectoIntegrador/vides/resources/views/carga.blade.php'</script>";
?>
