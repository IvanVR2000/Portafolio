<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estilos.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" rel="stylesheet">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js" type="text/javascript"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
</head>
<body>
    <header>
        <nav>
            <div id="head">
                <div id="logo"></div>

                <i id="barras" onclick="Open()" class="fa fa-bars"></i>
                <div  id="va">Ivan Vázquez Rodríguez</div>
                <i id="times" onclick="Close()" class="fa fa-times"></i>

            </div>
            <ul>
                <li><a href="#inicio"><i class="fa fa-home"></i>Inicio</a></li>
                <li><a href="#about"><i class="fa fa-user"></i>Sobre mi</a></li>
                <li><a href="#porta"><i class="fa fa-sliders-h"></i>Portafolio</a></li>
                <li> <a href="#contacto"><i class="fa fa-comments"></i>Contacto</a></li>
            </ul>
            
            
            
        
        </nav>
    </header>

    <div id="inicio">
        <div id="inicio2">
            <h1>I´m <strong> Ivan</strong> Vázquez Rodríguez</h1>
            <p> Soy un programador orientado a la programación web con experiencia en diseño web y el procesamiento de base de datos
                asi mismo eh realizado trabajos web, programas y apps funcionales en android, IOS y apps de escritorios, soy dedicado 
            con cada uno de los trabajos que rezalizo y continuamente mejoro mis habilidades. </p>
                
            <input type="button" value="  Descargar CV   ">
        </div>

        <div id="inicio3">

            <img src="https://cdn.euroinnova.edu.es/img/subidasEditor/programador-1631649462.webp" alt="">

        </div>

    </div>

    

    <div id="about">
        <div id="about2">
            <img src="sobre.png" alt="">
        </div>

        <div id="about3">
            <h1><strong> Sobre mí</strong></h1>
            <p>Los lenguajes de programacion que domino son java, javascript, python, php, c, c#, xamarin, en base de datos 
                manejo mysql, sqlite, postgressql y en el lenguaje de etiquetas Html5, CSS3, Bootstrap asi mismo
                implemento el uso de bases de datos en la programacion web junto con php.
            </p>
        
        
        <img src="https://cdn-icons-png.flaticon.com/128/5968/5968350.png" id="icono" alt="">
        <img src="https://cdn-icons-png.flaticon.com/128/2721/2721614.png" id="icono" alt="">
        <img src="https://cdn-icons-png.flaticon.com/128/274/274439.png" id="icono" alt="">
        <img src="https://cdn-icons-png.flaticon.com/128/29/29594.png" id="icono" alt="">
        <img src="https://cdn-icons-png.flaticon.com/128/4516/4516817.png" id="icono" alt="">
        <img src="https://cdn-icons-png.flaticon.com/128/3668/3668561.png" id="icono" alt="">
        <img src="https://cdn-icons-png.flaticon.com/128/5968/5968267.png" id="icono" alt="">
        <img src="https://cdn-icons-png.flaticon.com/128/5968/5968242.png" id="icono" alt="">
        <img src="https://cdn-icons-png.flaticon.com/128/5968/5968342.png" id="icono" alt="">
        <img src="https://cdn-icons-png.flaticon.com/128/5968/5968672.png" id="icono" alt="">
        <img src="https://img.icons8.com/color/2x/xamarin.png" id="icono" alt="">
        </div>
    </div>

    <div id="porta">
     <h1> <strong> Mí Portafolio</strong></h1>



        <div id="porta2" >
            <div id="porta2logo">
                <img src="logo tranparente.png" alt="">
            </div>
          
            <h1>Despacho Contable Fiscal Minalí</h1>
            <p>Uno de mis trabajos a el despacho contable fiscal minalí el cual se desarrollo en 
                Html5, CSS3, JS y Bootstrap para una mejor vista al usuario.
            </p>
            <img src="https://cdn-icons-png.flaticon.com/128/5968/5968242.png" id="icono" alt="">
            <img src="https://cdn-icons-png.flaticon.com/128/5968/5968267.png" id="icono" alt="">
            <img src="https://cdn-icons-png.flaticon.com/512/5968/5968292.png" id="icono" alt="">
            <img src="https://cdn-icons-png.flaticon.com/128/5968/5968672.png" id="icono" alt=""><br><br>
            
            <button class="btn btn-primary" onclick="location.href='programas/despachoMinali/index.html'"> Visualizar Pagina</button>
        </div>

        <div id="porta3">
            <div id="porta3logo">
                <img src="Nodo JS.png" alt="">
            </div>
            <h1>Diferentes Logins y formularios</h1>
            <p>La mayor parte me la paso creando logins de diferentes formas y estilos usando Html, CSS y php cuando 
                los conecto a bases de datos como Mysql o postgressql
            </p>
            <img src="https://cdn-icons-png.flaticon.com/128/5968/5968242.png" id="icono" alt="">
            <img src="https://cdn-icons-png.flaticon.com/128/5968/5968267.png" id="icono" alt="">
            <img src="https://cdn-icons-png.flaticon.com/512/5968/5968292.png" id="icono" alt="">
            <img src="https://cdn-icons-png.flaticon.com/128/5968/5968672.png" id="icono" alt=""><br><br>
            <button class="btn btn-primary" onclick="location.href='programas/despachoMinali/index.html'"> Login 1</button>
            <button class="btn btn-primary" onclick="location.href='programas/despachoMinali/index.html'"> Login 2</button>

        </div>

        <div id="porta4">
            <div id="porta4logo">
                <img src="https://pa1.narvii.com/6529/7ec2ba3ccb8cf493bfda211bce5878c514f938e3_hq.gif" alt="">
            </div>
            
            <h1>Asistente Omega</h1>
            <p>Aqui se realizo un asistente digital web y otro en el lenguaje python el cual les dejare la documentacion en la parte
                de abajo, el asistente web consta de una lista de comandos previamente programados el cual solo necesita acceso al microfono.
            </p>
            <img src="https://cdn-icons-png.flaticon.com/128/5968/5968242.png" id="icono" alt="">
            <img src="https://cdn-icons-png.flaticon.com/128/5968/5968267.png" id="icono" alt="">
            <img src="https://cdn-icons-png.flaticon.com/512/5968/5968292.png" id="icono" alt="">
            <img src="https://cdn-icons-png.flaticon.com/128/5968/5968350.png" id="icono" alt=""><br><br>
            <button class="btn btn-primary" onclick="location.href='programas/despachoMinali/index.html'"> Vamos al Asistesnte</button>
            <button class="btn btn-primary" onclick="location.href='programas/despachoMinali/index.html'"> Doc en python</button>
            
        </div>

        <div id="porta5">
            <div id="porta5logo">
                <img src="paquito.jpg" alt="">
            </div>

            <h1>Game Geeks</h1>
            <p>Mi primer aplicacion echa en xamarin apta para dispositivos android programada con el lenguaje C++ la cual trata 
                de una app de noticias de peliculas, videojuegos, podemos ver trailers de estreno, consta de un foro para opinar
                y un apartado de productos.
            </p>
            <img src="https://cdn-icons-png.flaticon.com/128/3668/3668561.png" id="icono" alt="">
            <img src="https://img.icons8.com/color/2x/xamarin.png" id="icono" alt=""> <br><br>
            <button class="btn btn-primary" onclick="location.href='programas/despachoMinali/index.html'"> Doc Game Geeks</button>  



        </div>

        <div id="porta6">
            <div id="porta6logo">
                <img src="https://www.qode.pro/wp-content/uploads/2015/02/Xamarin.png" alt="">
            </div>

            <h1>Apps en Xamarin</h1>
            <p>He desarrollado aplicaciones en xamarin para dispositivos android y IOS, una de mis aplicaciones 
                es de un programa basico para inventarios el cual ingresamos los valores en un formulario en el telefono 
                y nos muestra los datos en una tabla los cuales vienen de SQLite.
            </p>

            <img src="https://img.icons8.com/color/2x/xamarin.png" id="icono" alt=""> 
            <img src="https://cdn-icons-png.flaticon.com/128/29/29594.png" id="icono" alt=""><br><br>
            <button class="btn btn-primary" onclick="location.href='programas/despachoMinali/index.html'"> Doc Xamarin apps</button>  

        </div>

        <div id="porta7">
            <div id="porta7logo">
                <img src="https://img.freepik.com/fotos-premium/nombre-lenguaje-java-corchetes-programa-sobre-fondo-morado-3d_327483-703.jpg" alt="">
            </div>

            <h1>Otros Proyectos en Java</h1>

            <p>El primer lenguaje que aprendi fue java en el cual he desarrollado proyectos de inventarios para el almacen de 
                oroductos y programas de ventas todos estos conectados por una base de datos remota y embebidas el cual consiste de un login para
                mas seguridad de la empresa y un menu de operaciones.
            </p>

            <img src="https://cdn-icons-png.flaticon.com/128/274/274439.png" id="icono" alt="">
            <img src="https://cdn-icons-png.flaticon.com/128/4516/4516817.png" id="icono" alt=""><br><br>
            <button class="btn btn-primary" onclick="location.href='programas/despachoMinali/index.html'"> Doc Java</button>  

        </div>

    </div>

    <div  id="contacto">
        


        <div class="contacto">
            <h1>¡Hagamos Algo Increible!</h1>
            <form action="https://formsubmit.co/ivanvazquezivr10@gmail.com" method="POST">
                <label for="Nombre">Nombre</label>
                <br>
                <input class="block" type="text" name="nombre" id="nombre" required placeholder="Ej. Osvaldo Pérez Rodríguez">
                <br><br>
                <label  for="email">Email</label><br>
                <input class="block" type="text" name="email" id="email" required  placeholder="XXXXXXX@gmail.com" >
                <br><br>
                <label  for="text">Teléfono</label><br>
                <input class="block" type="text" name="numero" id="numero" required  placeholder="55-0000-0000" >
                <br><br>
                <label  for="Mensaje">Mensaje</label><br>
                <textarea class="block" name="mensaje" id="mensaje" cols="60" rows="5"></textarea>
                <br>
            
                <button type="submit" value="Enviar">Enviar Mensaje

                </button>
                <br>
            </form>
        </div>

        <div id="contacto2">
           <h1><strong> Contactame por:</strong></h1>
            <img src="https://cdn-icons-png.flaticon.com/512/3670/3670124.png" id="icono2" alt=""> 
            <a href="https://www.facebook.com/ivan.vazquez.73157203">FB/Ivan Vazquez Rodriguez</a>
            <br><br>


            <img src="https://cdn-icons-png.flaticon.com/128/3955/3955024.png"  id="icono2"  alt="">
            <a href="https://l.facebook.com/l.php?u=https%3A%2F%2Fwww.instagram.com%2FIvanvazquezivr%3Ffbclid%3DIwAR2Mi3nIb5MoZJTUyV_KC5QWHUQnZVg80snzpN0QHoTDzRWg82y9ylqt7jw&h=AT37WIMPQY6Jr1-qkHwo1VPNKcoNBv4fUvYRY3fuuNNq6xhTASClPipHb3Wh3tCkwvvfdjKgA01NtwGgsMhzIoM-mhGyNk9QKV__51bgg-DW7zYtPQIVU0T7nLOlxt_Xaetk_JAeeJny_ftMkmpz">Instagram/Ivan Vazquez Rodriguez</a>
            <br><br>
           

            <img src="https://cdn-icons-png.flaticon.com/128/3670/3670211.png"  id="icono2"  alt="">
            <a href="https://twitter.com/GAMEGEEKS7">TW/Game Geeks</a>
            <br><br>
            

            <img src="https://cdn-icons-png.flaticon.com/128/2504/2504911.png"  id="icono2"  alt="">
             <a  href="https://github.com/IvanVR2000">Github/Ivan Vazquez Rodriguez</a>
            <br><br>
           

            <img src="https://cdn-icons-png.flaticon.com/128/2504/2504957.png" id="icono2" alt="">
            <a href="tel:5551087559">55-5108-7559</a>
            <br><br>
            

            <img src="https://cdn-icons-png.flaticon.com/128/732/732200.png" id="icono2" alt="">
            <a href="https://mail.google.com/mail/u/0/?tab=rm&ogbl#inbox?compose=CllgCJTHVVtPTfbbBLXjNDkBMQzmWPdpkfHvZlHhzKKxQrJPmPBcTkZwppzZLspwHwXHxNZmDnB">ivanvazquezivr10@gmail.com</a>
            <br><br>


        </div>

    </div>

    <footer>
        <div id="pie">
            <div id="logopie">
                <img src="LOGO.png" alt="">

            </div>

            <div id="pie2">
                <h2>Ivan Vazquez Rodriguez </h2>
                <h4>Frontend Developer</h4>

                <img src="https://cdn-icons-png.flaticon.com/128/2504/2504911.png" id="icono3" onclick="location.href='https://github.com/IvanVR2000'" alt="">
                <img src="https://cdn-icons-png.flaticon.com/128/3670/3670211.png" id="icono3"  onclick="location.href='https://twitter.com/GAMEGEEKS7'" alt="">
            <br>
                <small>&copy;2022 <b>Ivan Vazquez Rodriguez </b>- Todos los Derechos Reservados</small>
            </div>

            <div id="lista">

                <ul>
                    <li><a href="#inicio"><i class="fa fa-home"></i>Inicio</a></li>
                    <li><a href="#about"><i class="fa fa-user"></i>Sobre mi</a></li>
                    <li><a href="#porta"><i class="fa fa-sliders-h"></i>Portafolio</a></li>
                    <li> <a href="#contacto"><i class="fa fa-comments"></i>Contacto</a></li>
                    
                </ul>

            </div>
        </div>
    </footer>
    <script src="script.js"></script>
</body>
</html>