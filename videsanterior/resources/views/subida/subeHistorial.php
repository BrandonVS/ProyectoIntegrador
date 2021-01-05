<?php
    date_default_timezone_set('America/Bogota');

    $connect = mysqli_connect("127.0.0.1", "root", "", "integrador");
    include("../PHPExcel/IOFactory.php");
    
    $ruta = '../Archivos/';
    $contid = 1;
    $nombre = $_FILES['archivo']['name'];
    $guardado = $_FILES['archivo']['tmp_name'];

    if(move_uploaded_file($guardado, $ruta.$nombre)){
        $objPHPExcel = PHPExcel_IOFactory::load($ruta.$nombre);

        foreach ($objPHPExcel->getWorksheetIterator() as $workSheet){
            $highestRow = $workSheet->getHighestRow();
            for($row=2; $row<=$highestRow; $row++){

                if($workSheet->getTitle() != 'GRAFICAS'){

                    $fecha = $workSheet->getCellByColumnAndRow(5, $row); 
                    if(!strtotime($fecha)){
                        if(PHPExcel_Shared_Date::isDateTime($fecha)){
                            if($workSheet->getCellByColumnAndRow(0, $row)->getValue() == 'SONESTA HOTEL LOJA'){
                                $idHEstadia = sprintf("Hson%d", $contid);
                            }elseif($workSheet->getCellByColumnAndRow(0, $row)->getValue() == 'GRAND VICTORIA BOUTIQUE'){
                                $idHEstadia = sprintf("Hvic%d", $contid);
                            }
                            
                            $idEstablecimiento = $workSheet->getCellByColumnAndRow(0, $row)->getValue();
                            $checkIn = $workSheet->getCellByColumnAndRow(6, $row)->getValue();
                            $checkOut = $workSheet->getCellByColumnAndRow(7, $row)->getValue();
                            $pernotaciones = $workSheet->getCellByColumnAndRow(8, $row)->getValue();
                            
                            $habitOcupadas = $workSheet->getCellByColumnAndRow(11, $row)->getValue();
                            $ventaNeta = $workSheet->getCellByColumnAndRow(16, $row)->getValue();
                            $tipoTarifa = $workSheet->getCellByColumnAndRow(13, $row)->getValue();
                            $promTarifa = $workSheet->getCellByColumnAndRow(14, $row)->getValue(); 
                            $fecha = $workSheet->getCellByColumnAndRow(5, $row)->getFormattedValue();
                            $fechaA = explode('/', $fecha);
                            $aux = $fechaA[0];
                            $fechaA[0] = $fechaA[1];
                            $fechaA[1] = $aux;
                            $fecha = implode('/', $fechaA);
                            
                            if($ventaNeta == 0){
                                intval($habitOcupadas);
                                intval($promTarifa);
                                $ventaNeta = $habitOcupadas*$promTarifa;
                            }
                            
                            if($promTarifa == 0){
                                intval($ventaNeta);
                                intval($habitOcupadas);
                                $promTarifa = $ventaNeta/$habitOcupadas;
                            }
                            if($habitOcupadas == 0){
                                intval($ventaNeta);
                                intval($promTarifa);
                                $habitOcupadas = $ventaNeta/$promTarifa;
                            }
                            intval($ventaNeta);
                            $pernotaciones = intval($pernotaciones);
                            $tarPer = $ventaNeta/$pernotaciones;

                            $query = "INSERT INTO historialestadia (idHEstadia, idEstablecimiento, fecha, checkIn, checkOut, 
                            pernotaciones, habitOcupadas, ventaNeta, tipoTarifa, promTarifa, tarPer) 
                                VALUES ('$idHEstadia','$idEstablecimiento', str_to_date('$fecha', '%d/%m/%Y'), 
                                '$checkIn', '$checkOut', '$pernotaciones', '$habitOcupadas', '$ventaNeta', '$tipoTarifa', 
                                '$promTarifa', '$tarPer')";
                            mysqli_query($connect, $query);
                        }
                    }
                    if($workSheet->getCellByColumnAndRow(0, $row)->getValue() == 'SONESTA HOTEL LOJA'){
                        $idHEstadia = sprintf("Hson%d", $contid);
                        $contid++;
                    }elseif($workSheet->getCellByColumnAndRow(0, $row)->getValue() == 'GRAND VICTORIA BOUTIQUE'){
                        $idHEstadia = sprintf("Hvic%d", $contid);
                        $contid++;
                    }
                    
                    $idEstablecimiento = $workSheet->getCellByColumnAndRow(0, $row)->getValue();
                    $checkIn = $workSheet->getCellByColumnAndRow(6, $row)->getValue();
                    $checkOut = $workSheet->getCellByColumnAndRow(7, $row)->getValue();
                    $pernotaciones = $workSheet->getCellByColumnAndRow(8, $row)->getValue();
                    $habitOcupadas = $workSheet->getCellByColumnAndRow(11, $row)->getValue();
                    $ventaNeta = $workSheet->getCellByColumnAndRow(16, $row)->getValue();
                    $tipoTarifa = $workSheet->getCellByColumnAndRow(13, $row)->getValue();
                    $promTarifa = $workSheet->getCellByColumnAndRow(14, $row)->getValue(); 
                    $fecha = $workSheet->getCellByColumnAndRow(5, $row)->getValue();
                    
                    if($ventaNeta == 0){
                        $habitOcupadas = intval($habitOcupadas);
                        $promTarifa = intval($promTarifa);
                        $ventaNeta = intval($habitOcupadas)*intval($promTarifa);
                    }
                    
                    if($promTarifa == 0){
                        $ventaNeta = intval($ventaNeta);
                        $habitOpcupadas = intval($habitOcupadas);
                        $promTarifa = intval($ventaNeta)/doubleval($habitOcupadas);
                    }
                    if($habitOcupadas == 0){
                        $ventaNeta = intval($ventaNeta);
                        $promTarifa = intval($promTarifa);
                        $habitOcupadas = intval($ventaNeta)/doubleval($promTarifa);
                    }
                    $ventaNeta = intval($ventaNeta);
                    $pernotaciones = intval($pernotaciones);
                    $tarPer = intval($ventaNeta)/doubleval($pernotaciones);

                    $query = "INSERT INTO historialestadia (idHEstadia, idEstablecimiento, fecha, checkIn, checkOut, 
                    pernotaciones, habitOcupadas, ventaNeta, tipoTarifa, promTarifa, tarPer) 
                        VALUES ('$idHEstadia','$idEstablecimiento', str_to_date('$fecha', '%d/%m/%Y'), 
                        '$checkIn', '$checkOut', '$pernotaciones', '$habitOcupadas', '$ventaNeta', '$tipoTarifa', 
                        '$promTarifa', '$tarPer')";
                    mysqli_query($connect, $query);
                }
            }
        } 
    }
    echo "<script>location.href='../carga.php'</script>";
?>