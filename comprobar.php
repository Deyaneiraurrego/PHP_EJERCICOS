<html>
    <head>
        <title>Factura</title>
    </head>
<body>
<h1>Su precio: </h1>
<p>Su Factura:</p>
<?php 
$Cantidadmantenimiento= $_POST['Mantenimento'];
$Cantidadbd= $_POST['Bd'];
$CantidadImplementacion = $_POST['Implementacion'];
$CantidadOptimizacion = $_POST['Optimizacion'];

$costoMantenimiento = 5000;
$costoBd = 1000;
$costoImplementacion = 1000;
$costoOptimizacion = 2000;

$CostoTotalMantenimiento = $costoMantenimiento *  $Cantidadmantenimiento;
$CostoTotalCantidadDb = $costoBd * $Cantidadbd;
$costoTotalImplementacion = $costoImplementacion *  $CantidadImplementacion;
$costoTotalOptimizacion = $costoOptimizacion * $CantidadOptimizacion;

echo "Mantenimento: "; echo $CostoTotalMantenimiento ; echo '</br>';
echo "Bd: "; echo $CostoTotalCantidadDb ; echo '</br>';
echo "Implementacion: "; echo $costoTotalImplementacion ;  echo '</br>';
echo "Optimizacion: "; echo $costoTotalOptimizacion ; echo '</br>';
?>
</body>
</html>