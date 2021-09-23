
<html>
    <head>
        <title>Factura</title>
    </head>
    <body style='background: #C6FFDD;  /* fallback for old browsers */
    background: -webkit-linear-gradient(to top, #f7797d, #FBD786, #C6FFDD);  /* Chrome 10-25, Safari 5.1-6 */
    background: linear-gradient(to top, #f7797d, #FBD786, #C6FFDD); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */'>

        </br></br></br></br><h1 style='text-align:center;'><font color="#C554E4">Su factura</font></h1>
        <p style='text-align:center;'>El costo total de los servicios es:</p>

        <?php

            /*se definen las varibales y el motodo de enivio*/ 
            $mantenimiento = $_POST['mantenimiento'];
            $basedatos =  $_POST['basedatos'];
            $diseñoimplementacion = $_POST['diseñoimplementacion'];
            $directorioactivo = $_POST['directorioactivo'];
            $optimizacion = $_POST['optimizacion'];
            

            /*se definen crean nuevas variables a las que se les asigna un valor quemado*/ 
            $resultadoMantenimiento=500;
            $resultadoBaseDeDatos=100;
            $resultadoDiseñoimplementacion=340;
            $resultadoDirectorioactivo=560;
            $resultadoOptimizacion=480;
          

                /*se crea una nueva variable que va a ser igual al servio por su precio, seguido a esto se imprimen los resultados obetnidos llamando la variable recien creada la cual es igual el servicio por su precio.*/ 

                $CostoTotalMantenimiento = $mantenimiento * $resultadoMantenimiento;
                echo "mantenimiento: "; echo $CostoTotalMantenimiento ; echo '</br>';

                $CostoTotalCantidadDb =  $basedatos * $resultadoBaseDeDatos;
                echo "basedatos: "; echo $CostoTotalCantidadDb ; echo '</br>';

                $costoTotalImplementacion = $diseñoimplementacion *  $resultadoDiseñoimplementacion;
                echo "diseñoimplementacio: "; echo $costoTotalImplementacion ;  echo '</br>';

                $costoTotaldirectorio = $directorioactivo * $resultadoDirectorioactivo;
                echo "directorioactivo: "; echo $costoTotaldirectorio ;  echo '</br>';

                $costoTotalOptimizacion = $optimizacion * $resultadoOptimizacion;
                echo "optimizacion: "; echo $costoTotalOptimizacion ; echo '</br>';

               
        ?>
    </body>
</html>
