 <?php
 
	ECHO "<!DOCTYPE html>

<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset=\"UTF-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    </head>
    <body>
        <div>Informacion Proporcionada</div>
        ";
 
$nombre = $_POST['nombre' ];
echo $nombre;

$fecha = $_POST['fecha' ];
echo $fecha;

$edad = $_POST['edad' ];
echo $edad;


$menu = $_POST['menu' ];
echo $menu;

$tratamientomed = $_POST['tratamientomed' ];
echo $tratamientomed;

$enfermedad= $_POST['enfermedad' ];
echo $enfermedad;

$limitaciónf = $_POST['limitaciónf' ];
echo $limitaciónf;

$practicado = $_POST['practicado' ];
echo $practicado;

$medicamento = $_POST['medicamento' ];
echo $medicamento;

$drogasalcohol = $_POST['drogasalcohol' ];
echo $drogasalcohol;

$emocionalnervioso = $_POST['emocionalnervioso' ];
echo $emocionalnervioso;


ECHO "

    </body>
</html>";
?>