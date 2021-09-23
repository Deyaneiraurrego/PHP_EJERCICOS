<html>
    <head>
    </br></br></br></br><tittle><h1 style='text-align:center;'>
     <!-- se le esta aignando un color a la letra del titulo-->
    <font color="#C554E4">Formulario de precios</font></h1></tittle>              
    </head>

    <body style='background: #C6FFDD;  /* fallback for old browsers */
    background: -webkit-linear-gradient(to top, #f7797d, #FBD786, #C6FFDD);  /* Chrome 10-25, Safari 5.1-6 */
    background: linear-gradient(to top, #f7797d, #FBD786, #C6FFDD); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */'>

        <p style='text-align:center;'>Por medio del siguiente formulariio usted podra elejir el servicio y a este le colocara la cantidad de que desea obtener</p></br></br>

        <!-- metodo POST envia los datos internamente-->
        <form style='text-align:center;' action='nuevo.php' method='POST'>
                <!-- primer input que contiene la cantidad de servicios de mantenimiento-->
                 <label for='Mantenimiento'>Mantenimiento a equipos
                 <input type='number' name='mantenimiento' id='Mantenimiento'>

                 <!-- segundo input que contiene la cantidad de servicios de Bases de Datos-->
                <label for='basedatos'>Bases de Datos
                <input type='number' name='basedatos' id='bd'>

                 <!-- tercero input que contiene la cantidad de servicios de Implementacion de Infrestructura-->
                 <label for='Implementacion'>Implementacion de Infrestructura
                <input type='number' name='diseñoimplementacion' id='Implementacion'></br></br>

                <!-- cuarto input que contiene la cantidad de servicios de Directorio Activo -->
                <label for='Directorio'> Directorio Activo
                <input type='number' name='directorioactivo' id='Directorio'>
                
                <!-- quinto input que contiene la cantidad de servicios de Optimizacion -->
                <label for='Optimizacion'> Optimizacion
                <input type='number' name='optimizacion' id='Optimizacion'></br></br>

                <!-- boton de envio -->
                <input type='Submit' value='Enviar' name='envio' style="background: #DAF7A6 "/>
        </form>
    </body>
</html>