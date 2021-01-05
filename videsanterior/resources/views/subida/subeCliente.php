<?php
    date_default_timezone_set('America/Bogota');

    $connect = mysqli_connect("127.0.0.1", "root", "", "integrador");
    include("../PHPExcel/IOFactory.php");

    $ruta = '../Archivos/';

    $nombre = $_FILES['archivo']['name'];
    $guardado = $_FILES['archivo']['tmp_name'];
    $contid = 1;
    $contid1 = 1;
    if(move_uploaded_file($guardado, $ruta.$nombre)){
        $objPHPExcel = PHPExcel_IOFactory::load($ruta.$nombre);

        foreach ($objPHPExcel->getWorksheetIterator() as $workSheet){
            $highestRow = $workSheet->getHighestRow();
            for($row=2; $row<=$highestRow; $row++){
                if($workSheet->getTitle() != 'GRAFICAS'){
                    if($workSheet->getCellByColumnAndRow(0, $row)->getValue() == 'SONESTA HOTEL LOJA'){
                        $idHEstadia = sprintf("Hson%d", $contid);
                        $idCliente = sprintf("CsonN%d", $contid);
                        $contid++;
                        $tipoCliente = 'Nacional';
                        $numClientes = $workSheet->getCellByColumnAndRow(9, $row)->getValue();

                        $query = "INSERT INTO clientes (idCliente, idHEstadia, tipoCliente, numClientes) 
                            VALUES ('$idCliente','$idHEstadia','$tipoCliente','$numClientes')";
                        mysqli_query($connect, $query);

                        $idCliente = sprintf("CsonE%d", $contid1);
                        $contid1++;
                        $tipoCliente1 = 'Extranjero';
                        $numClientes = $workSheet->getCellByColumnAndRow(10, $row)->getValue();

                        $query = "INSERT INTO clientes (idCliente, idHEstadia, tipoCliente, numClientes) 
                            VALUES ('$idCliente','$idHEstadia','$tipoCliente1','$numClientes')";
                        mysqli_query($connect, $query);

                    }elseif($workSheet->getCellByColumnAndRow(0, $row)->getValue() == 'GRAND VICTORIA BOUTIQUE'){
                        $idHEstadia = sprintf("Hvic%d", $contid);
                        $idCliente = sprintf("CvicN%d", $contid);
                        $contid++;
                        $tipoCliente = 'Nacional';
                        $numClientes = $workSheet->getCellByColumnAndRow(9, $row)->getValue();

                        $query = "INSERT INTO clientes (idCliente, idHEstadia, tipoCliente, numClientes) 
                            VALUES ('$idCliente','$idHEstadia','$tipoCliente','$numClientes')";
                        mysqli_query($connect, $query);

                        $idCliente = sprintf("CvicE%d", $contid1);
                        $contid1++;
                        $tipoCliente1 = 'Extranjero';
                        $numClientes = $workSheet->getCellByColumnAndRow(10, $row)->getValue();

                        $query = "INSERT INTO clientes (idCliente, idHEstadia, tipoCliente, numClientes) 
                            VALUES ('$idCliente','$idHEstadia','$tipoCliente1','$numClientes')";
                        mysqli_query($connect, $query);
                    }


                    
                }
            }
        } 
    }
    echo "<script>location.href='../carga.php'</script>";
?>