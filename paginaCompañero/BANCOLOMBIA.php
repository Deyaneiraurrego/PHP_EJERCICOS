<!DOCTYPE html>
<html>
    <head>
        <title>Bancolombia</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=devie-width, initial-scale=1">

        <link href="STYLE.CSS" rel="stylesheet">

    </head>

    <body>

        <main class="main">
            <div class="container">
                <h1>BIENVENIDOS</h1></br>
            </div>
        </main>
    

        <!-- primera secion -->
        <main>
            <section class="services">
                <section class="grid">
                    <div class="items">
                        <div class="item">
                            <img src="1/targeta.jpg" class="img">
                            <h3 class="titulo-services"></h3>
                            <p>Recive y envia dinero a Colombia y el mundo  .</p>
                        </div>

                        <div class="item">
                            <i class="fas fa-money-bill-alt"> </i>
                            <h3 class="titulo-services"></br></br>Giros Bancarios</h3>
                            <p>Recive y envia dinero a Colombia y el mundo.</p>
                        </div>

                        <div class="item">
                            <i class="fas fa-chart-bar"></i>
                            <h3 class="titulo-services"></br>Alivios Financieros</h3>
                            <p>Hoy mas que nunca estamos comprometidos con el bienestar de todos.</p>
                        </div>

                    </div>
                </section>
            </section>




            <!-- segunda secion -->
            <section class="about-us">
               <div class="grid">
                   <div class="textos-about-us">
                      <h2 class="subtitulo">seguros</h2>
                      <p class="parrafo">Tu seguridad es la de todos, con nuestros seguros protegiendo siempre a nuestros aliados.</p>
                   </div>

                    <div class="numbers">
                         <div class="number">confiabilidad</div>
                         <div class="number">Seguridad</div>
                         <div class="number">Eficiencia</div>
                         <div class="number">Calidad</div>
                    </div>
              </div>
            </section>
        
        

        <!-- probrar si esta mal -->

        
        <section class="mission grid">
            <div class="textos-mission">

                <div class="texto-mission">
                    <h3>Subcidios de Vivienda</h3>
                     <p>El beneficio consiste en un valor máximo de cobertura fija mensual de $454.263, que se aplican al valor de interés corrientes. Este subsidio aplica durante los primeros 7 años, es decir las primeras 84 cuotas, lo que equivale a recibir 42 salarios mínimos, que representan un beneficio total de $38.152,092 para obligaciones desembolsadas en el 2021. Para los años 2021 y 2022, el valor del subsidio se ajustará de acuerdo con la actualización del salario mínimo.</p>
                </div>

                <div class="texto-mission">
                    <h3>Lleva las cuentas al dia</h3>
                    <p>Día a Día es una función de App Bancolombia que te ayuda a tener un mejor panorama de tus ingresos, gastos y ahorros para que puedas manejar mejor la plata que tanto quieres cuidar.
                    </p>
                </div>

                <div class="texto-mission">
                    <h3>Identidad digital con SoyYo.</h3>
                    <p>La Identidad Digital te permite almacenar tus datos personales en un solo lugar de manera segura y privada.

                        SoyYo te permite validar esta Identidad Digital para centralizar, controlar y compartir tu información personal desde un solo lugar, de una manera privada y manteniendo tus datos seguros.
                        
                        Muy pronto con la app SoyYo, podrás identificarte fácil y rápido ante entidades o comercios aliados, sin necesidad de presentar toda la documentación física o ingresar usuarios y contraseñas.</p>
                </div>
            </div>

            <div class="img-mission">
                <img src="1/familia.png" alt="" class="img">
            </div>
        </section>


        <header class="header">

            <figure></figure>
            <a href="#" style="position: relative; left: 300px; top: 45px; font-family: cursive; font-size: 40px;">BANCOLOMBIA</a>
            <div class="container logo-nav-container">
                  <nav class="Navegation">
                    <nav id="menu">
                        <ul>
                          <li><a href="#">Inicio</a></li>
                          <li><a href="#">Proyecto</a>
                            <ul>
                                <li><a href="https://github.com/SamuelBustos/Proyecto-sena-Tg_Samuel_Bustos">GitHub</a></li>
                              <li><a href="https://drive.google.com/drive/folders/1ghMha1XdGbfgluFbN5ch7I9w87yJrNvS?usp=sharing">Carpeta Proyecto</a></li>
                              <li><a href="https://sites.google.com/misena.edu.co/e-sbdu/inicio">Sitio WEB</a></li>
                            </ul>
                          </li>
                          <li><a href="SERVICIOS.HTML">Servicios</a></li>
                          <li><a href="#">Clientes</a></li>
                          <li><a href="#">Mantenimiento</a></li>
                        </ul>
                        </nav>
                    </nav>
            </div>

  
        </header>



        <footer>
            <div class="grid">
                <div class="textos-footer">
                     <p>@ Todos los derechos reservados | Deyaneira Urrego y Samuel Bustos 
                     </p>
                </div>
            </div>
        </footer> <hr>

        <!--Contador de vistas con su estilo -->
        <style>
            span{
                width: 100%;
                padding: 15px 25px;
                border-radius: 5px;
                font-weight: 900;
                font-size: 60px;
                text-align: center;
                color: #fff;
                background-color: #ff6a00;
            }
            h3{
                font-size: 35px;
                font-weight: 900;
                color: #ffa900;
                margin-top: 150px;
            }
        </style>
    
      <div class="container mt-7">
      <h3 class="text-center">
          Contador de vistas 
      </h3>
      <hr><br><br><br><br>

      <!--Codigo php-->
                <?php
            if (file_exists('sumaVista.txt'))
            //Este comando lo que hace es verificar si el archivo ya esta creado
            $variableArchivo = fopen('sumaVista.txt','r+');
            //Este comando lo que hace es que si el archivo uya esta creado lo abre
            else $variableArchivo = fopen('sumaVista.txt','w+'); 
            //Este comando lo que hace es que si el archivo no esta creado lo crea
            $leerArchivo = fgets($variableArchivo,20);  
            //Este comando sirve para leer los archivos
            if ($leerArchivo == '')  
            //Este comando sirve para leer si el archivo esta vacio 
            $leerArchivo = "10";  
            //Este comando sirve para iniciar el conteo desde 0
            rewind($variableArchivo); 
            //este comando sirve para ir al inicio del archivo
            fputs($variableArchivo,++$leerArchivo);  
            //Esta linea de codigo es para ir al inicio del archivo empezar a escribir e irle sumando 1

            fclose($variableArchivo);  
            //este comando se utiliza para cerrar el archivo

            ?>

      <!--fin del Codigo php-->

      <div class="row text-center">
        <div class="col-12 col-md-12">
            <span>
                <?php echo $leerArchivo; ?>
            </span>
        </div>
      </div>
    
    
    </div>
    <form action="?controller=equipo&method=save" enctype="multipart/form-data"   method="post"  id="wizard">
            <ul>
              <li class="ad" ><a href="index.php">Plan de Mantenimiento</a></li>
            </ul>
        </form>
    </body>

</html>