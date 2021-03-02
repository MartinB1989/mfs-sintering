<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" data-auto-a11y="true"
    ></script>
    <title>MSN Sinterin</title>
</head>
<body>
    <!-- BARRA DE NAVEGACIÓN -->
    <nav class="nav-bar">
        <img src="assets/img/Logo-MFS 2.png" alt="Logo" class="logo">
        
        <div class="nav-items nav-out" id="nav-items">
            <a href="#item0" class="nav-item" data-scroll-spy>HOME</a>
            <a href="#item1" class="nav-item" data-scroll-spy>SINTERIZADO</a>
            <a href="#item2" class="nav-item" data-scroll-spy>EMPRESA</a>
            <a href="#item3" class="nav-item" data-scroll-spy>CLIENTES</a>
            <a href="#item4" class="nav-item" data-scroll-spy>CONTACTO</a>
            <a href="#" class="nav-item" style="text-align: center;">DESCARGA PRESENTACION<br>CORPORATIVA</a>
            
            <div class="tel-lang" id="tel-lang">
                <p class="tel">+94683 51 33</p>
                <div class="idiomas">
                    <p class="lang" style="color:#424242;">ES</p>
                    <p class="lang">EN</p>
                    <p class="lang">FR</p>
                    <p class="lang">SE</p>
                </div>
            </div>
        </div>
        <div class="btn-burger burger" id="btn-burger">
            <div class="burger burger-container">
                <div class="burger burger-div"></div>
                <div class="burger burger-div"></div>
                <div class="burger burger-div"></div>
                <div class="burger cross-1 no cross"></div>
                <div class="burger cross-2 no cross"></div>
            </div>
            <!-- <i class="fas fa-bars burger" id="burger"></i>
            <i class="fas fa-times burger burger-no" id="cruz"></i> -->
        </div>
    </nav>

    <main>
        <!-- HEADER  -->
        <header class="section-0 section" id="item0" data-scroll-spy>
            <div class="box box-1" >
                <div class="s-box">
                    <h1 class="black-title">¿Qué es el sinterisado?</h1>
                    <h2 class="sub-t1">un método de producción de piezas que puede
                        aportarte <span class="celeste">grandes beneficios</span>
                    </h2>
                    <h3 class="sub-t2">En MFS Sintering estamos especializados en la
                        producción en gran escala de piezas metálicas
                    </h3>
                    <div class="calidad">
                        <img src="assets/img/Calidad2.png" alt="calidad-img" class="calidad-img">
                        <img src="assets/img/Calidad.png" alt="calidad-img" class="calidad-img">
                    </div>
                </div>
            </div>
            <div class="box box-2 d-none" id="formulario-emergente">
                <div class="s-box">
                    <h1 class="text-1">Descarga la presentación
                        corporativo y conoce nuestras capacidades
                    </h1>
                    <form action="./php/send.php" method="post" class="grid-form">
                        <input type="text"  name="nombre" class="inp" placeholder="Nombre" required>
                        <input type="text"  name="apellido" class="inp" placeholder="Apellido" required>
                        <input type="text"  name="empresa" class="inp" placeholder="Empresa" required>
                      <input type="email" name="correo" class="inp" placeholder="Correo" required>
                        <div class="grid-child">
                            <input type="checkbox" name="checkbox" id="checkbox">
                            <label for="" class="label-checkbox">He leído y acepto la política de cookies y privacidad</label> 
                        </div>
                        <div class="download">
                            <button type="submit" class="btn-download">
                                Descargar 
                                <img src="assets/img/arrow.png" alt="arrow" class="arrow">
                            </button>
                        </div>
                    </form>
                    
                </div>
            </div>
            <div class="popup-form btn-none down-guia">
                <p class="p-to-popup down-guia">
                    Descargar presentación corporativa
                </p>
                <img src="assets/img/arrow.png" alt="arrow" class="arrow2 down-guia">
            </div>
        </header>

        <section class="emergente emergente-no" id="emergente"></section>
        <!-- SINTERIZADO -->
        <section class="seccion-1 section" id="item1" data-scroll-spy>
            <article class="flex-1">
                <div class="flex-1-h">
                    <h2 class="t-subrayado">sinterizado</h2>
                    <h1 class="black-title">
                        Descubre las ventajas
                        de la pulvimetalurgia
                    </h1>
                </div>
                <div class="flex-1-p">
                    <p class="sub-indice">
                        El sinterizado es un proceso que consiste en aplicar presión y alta
                        termperatura a un material en polvo. De esta manera el material se compacta y
                        forma una pieza sólida. Es un proceso prodictivo muy ventajoso respecto los
                        tradicionales procesos como la forja o estampación, con una amplia gama
                        de aplicaciones.                   
                    </p>
                </div>
            </article>

            <article class="flex-2">
                <div class="grid-lista">
                    <img src="assets/img/checkblue.png" alt="check" class="checkblue"><p class="lista-p"> Menores costes en la producción de series largas</p>
                    <img src="assets/img/checkblue.png" alt="check" class="checkblue"><p class="lista-p"> Proceso eficiente medioambientalmente, con mayor aprovechamiento de la materia prima</p>
                    <img src="assets/img/checkblue.png" alt="check" class="checkblue"><p class="lista-p"> Elimina las operaciones complementarias como el mecanizado, sacando la pieza directamente de molde  </p>
                    <img src="assets/img/checkblue.png" alt="check" class="checkblue"><p class="lista-p"> Garantiza las características de resistencia exacta de cada pieza</p>
                    <img src="assets/img/checkblue.png" alt="check" class="checkblue"><p class="lista-p"> Permite la producción de piezas autolubricadas</p>
                    <img src="assets/img/checkblue.png" alt="check" class="checkblue"><p class="lista-p"> Posibilita el uso de materiales únicos e isotrópicos</p>
                </div>

                <section class="sectores-relevantes">
                    
                    <div class="black-div">
                        <h1 class="sec-rel-title">Sectores relevantes</h1>
                        <p class="black-div-p">Línea Blanca</p>
                        <div class="degre-box"></div>
                        <p class="black-div-p">Herramienta eléctrica</p>
                        <div class="degre-box"></div>
                        <p class="black-div-p">Automatización</p>
                        <div class="degre-box"></div>
                        <p class="black-div-p">Cerrajería y Control de accesos</p>
                        <div class="degre-box"></div>
                        <p class="black-div-p">Sector eléctrico</p>
                        <div class="degre-box"></div>

                        <div class="to-form down-guia">
                            <p class="to-form-p down-guia">Descárgate nuestra guía sobre el sinterizado</p>
                            <img src="assets/img/arrow.png" alt="arrow" class="arrow-3 down-guia">
                        </div>
                        <div class="to-form sp">
                                <p class="to-form-p sp">Solicita Presupuesto</p>
                                <img src="assets/img/arrow.png" alt="arrow" class="arrow-3 sp">
                        </div>
                    </div>
                </section>
            </article>
        
        </section>
        
        <div class="arrow-down">
            <a href="#item2">
                <img src="assets/img/arrow-down.png" alt="arrow-down">
            </a>
        </div>
        
        <section class="section" id="item2" data-scroll-spy>
            <section class="seccion-2 section" >
                <article class="flex-empresa">
                    <div class="esp-en-sin">
                        <h2 class="t-subrayado">empresa</h2>
                        <h1 class="black-title">
                            Especialistas en sinterizado
                        </h1>
                        <p class="sub-t2 p-text">
                            En MFS contamos con mas de 80 años de experiencia en el 
                            sector P/M, fabricando componentes metálicos para los
                            principales Tier-1 y OEM mundiales
                            <br><br>
                            <span class="como-trabajamos-desktop">¿Cómo trabajamos?</span>
                        </p>
                    </div>
                    <div class="empresa-img">
                        <p class="sub-indice como-trabajamos-tablet">¿Cómo trabajamos?</p>
                        <div class="img-emp">
                            <img src="assets/img/ECO_GRIS.png" alt="imagen">
                            <p class="img-emp-p">Sostenibilidad</p>
                        </div>
                        <div class="img-emp">
                            <img src="assets/img/I+D_GRIS.png" alt="imagen">
                            <p class="img-emp-p">I + D + I</p>
                        </div>
                        <div class="img-emp">
                            <img src="assets/img/checkgris.png" alt="imagen">
                            <p class="img-emp-p">Satisfacción</p>
                        </div>
                    </div>

                    <p class="sub-indice como-trabajamos-movil">¿Cómo trabajamos?</p>
                </article>

                <article class="cards">
                    <div class="card-1">
                        <p class="number">01</p>
                        <h1 class="black-title card-title">Estudio</h1>
                        <p class="sub-t2 sub">
                            - Factibilidad <br>
                            - Diseño de la pieza <br>
                            - Propuestas de mejora <br>
                            - Oferta
                        </p>
                    </div>
                    <div class="middle-down-arrow-movil">
                        <img src="assets/img/arrow-down-large.png" alt="arrow">
                    </div>
                    <div class="middle-down-arrow-desktop">
                        <img src="assets/img/arrow-right-large.png" alt="arrow">
                    </div>
                    <div class="card-2">
                        <p class="number">02</p>
                        <h1 class="white-title card-title">Utillaje</h1>
                        <p class="sub-t2-white sub-p sub ">
                            -Dpto. Troquelaría interno para
                            la fabricación completa de utillaje
                        </p>
                    </div>
                    <div class="middle-down-arrow-movil">
                        <img src="assets/img/arrow-down-large.png" alt="arrow">
                    </div>
                    <div class="middle-down-arrow-desktop">
                        <img src="assets/img/arrow-right-large.png" alt="arrow">
                    </div>
                    <div class="card-3">
                        <p class="number">03</p>
                        <h1 class="white-title card-title">producción</h1>
                        <p class="sub-t2-white sub">
                            - Mezclado <br>
                            - Moldeo <br>
                            - Sinterizado <br>
                            - Calibrado <br>
                            - Mecanizado <br>
                            - Tratamientos térmicos
                        </p>
                    </div>
                </article>>

            </section>
            <div class="to-form-under-section-2 sp">
                <p class="p-under sp">
                    Solicitar presupuesto
                </p>
                <img src="assets/img/arrow.png" alt="arrow" class="arrow-5 sp">
            </div>
            <!-- CARROUSEL -->
            <section class="carrousel">
                <div class="container">
                    <button class="previous button btn-pan">
                        <span>
                            <img src="./assets/img/arrow-left-large.png" alt="atras">
                        </span>
                    </button>
                    <div class="slider">
                        <img src="./assets/img/carrusel-img/image-1.jpg" class="slider-img active" >
                        <img src="./assets/img/carrusel-img/image-2.jpg" class="slider-img" >
                        <img src="./assets/img/carrusel-img/image-3.jpg" alt="" class="slider-img">
                        <img src="./assets/img/carrusel-img/image-4.jpg" alt="" class="slider-img">
                        <img src="./assets/img/carrusel-img/image-5.jpg" alt="" class="slider-img">
                        <img src="./assets/img/carrusel-img/image-6.jpg" alt="" class="slider-img">
                        <img src="./assets/img/carrusel-img/image-7.jpg" alt="" class="slider-img">
                        <img src="./assets/img/carrusel-img/image-8.jpg" alt="" class="slider-img">
                        <img src="./assets/img/carrusel-img/image-9.jpg" alt="" class="slider-img">
                        <img src="./assets/img/carrusel-img/image-10.jpg" alt="" class="slider-img">
                        <img src="./assets/img/carrusel-img/image-11.jpg" alt="" class="slider-img">
                        <img src="./assets/img/carrusel-img/image-12.jpg" alt="" class="slider-img">
                        <img src="./assets/img/carrusel-img/image-13.jpg" alt="" class="slider-img">
                        <img src="./assets/img/carrusel-img/image-14.jpg" alt="" class="slider-img">
                        <img src="./assets/img/carrusel-img/image-15.jpg" alt="" class="slider-img">
                        <img src="./assets/img/carrusel-img/image-16.jpg" alt="" class="slider-img">
                        <img src="./assets/img/carrusel-img/image-17.jpg" alt="" class="slider-img">
                        <img src="./assets/img/carrusel-img/image-18.jpg" alt="" class="slider-img">
                        <img src="./assets/img/carrusel-img/image-19.jpg" alt="" class="slider-img">
                        <img src="./assets/img/carrusel-img/image-20.jpg" alt="" class="slider-img">
                        <img src="./assets/img/carrusel-img/image-21.jpg" alt="" class="slider-img">   
                    </div>
                    <button class="next button btn-pan">
                        <span>
                            <img src="./assets/img/arrow-right-large.png" alt="adelante">
                        </span>
                    </button>                    
                    <nav class="slider-nav">
                        <ul>
                            <li class="arrow">
                                <button class="previous button">
                                    <span>
                                        <img src="./assets/img/arrow-left-large.png" alt="atras">
                                    </span>
                                </button>
                            </li>
                            <li class="arrow">
                            <button class="next button">
                                <span>
                                    <img src="./assets/img/arrow-right-large.png" alt="adelante">
                                </span>
                            </button>
                            </li>
                        </ul>
                    </nav>
                </div>
            </section>
            <!-- RECURSOS Y CAPACIDADES -->
            <section class="seccion-3">
                <article class="recursos">
                    <h1 class="black-title blue-text">Recurso</h1>
                    <div class="box-inclinada">
                        <ul class="list-box-1">
                            <li class="box-li">
                                Más de 100 empleados
                            </li>
                            <li class="box-li">
                                26 líneas de producción con prensas
                                desde 5t hasta 250t
                            </li>
                            <li class="box-li li-3">
                                Instalaciones de 35.000m2
                            </li>
                            <img src="assets/img/eco-friendly-logo-.png" alt="eco-friendly" class="eco-friendly">
                            <li class="box-li">
                                Producción de Nitrógeno propia e Instalaciones
                                de 15.000m2 de placas solares fotovoltaicas
                            </li>
                            
                        </ul>
                    </div>
                </article>
                <article class="capacidades">
                    <h1 class="black-title blue-text">capacidades</h1>
                    <div class="box-inclinada">
                        <ul class="list-box-1">
                            <li class="box-li">
                                Diseño e  ingeniería de las piezas
                            </li>
                            <li class="box-li">
                                Producción de hasta 90 millones de 
                                piezas al año
                            </li>
                            <li class="box-li li-3">
                                Concepción y fabricación de utillaje propio
                            </li>
                            <li class="box-li">
                                Sistema MES integrado al ERP con control total de 
                                la calidad producción y stocks en tiempo real
                            </li>
                            
                        </ul>
                    </div>
                </article>
            </section>
        </section>
        <div class="arrow-down">
            <a href="#item3">
            <img src="assets/img/arrow-down.png" alt="arrow-down">
            </a>
        </div>
        
        <section class="seccion-4 section" id="item3" data-scroll-spy>
            <article class="clientes">
                <h2 class="t-subrayado-white clientes-title">
                    clientes
                </h2>
                <h1 class="white-title aval">
                    nuestro mejor aval
                </h1>

                <p class="sub-t2-white">
                    Empresas de reconocido prestigio
                    confían en nosotros para la fabricación
                    de sus piezas
                </p>

            </article>
        </section>

        <!-- CARROUSEL -->
        <section class="carrousel"></section>
        
        <div class="arrow-down">
            <a href="#item4">
                <img src="assets/img/arrow-down.png" alt="arrow-down">
            </a>
        </div>
        
        <section class="seccion-5 section" id="item4" data-scroll-spy>
            <div class="bg-opaco">
                <article class="contacto">
                    <h2 class="t-subrayado-white clientes-title">
                        contacto
                    </h2>
                    <h1 class="white-title aval">
                        Si quieres analizar la posibilidad
                        de producir tus piezas mediante el 
                        sinterisado, contacta con nosotros
                    </h1>

                    <p class="sub-t2-white">
                        MFS-Sinteing,<br>
                        Carretera San Vicente 10, 48510 <br>
                        Trapagaran, Vizcaya, Spain <br>
                        944 86 38 12
                    </p>

                </article>
                <div class="formulario-de-contacto">
                    <h1 class="contact-title">Contáctanos</h1>
                    <form action="./php/contact.php" class="contact-form" method="post">
                        <input type="text" name="nombre" placeholder="Nombre" class="i1" required>
                        <input type="text" name="apellido" placeholder="Apellido" class="i1" required>
                        <input type="text" name="empresa" placeholder="Empresa" class="i1" required>
                        <input type="email" name="correo" placeholder="Email" class="i1" required>
                        <input type="tel" name="telefono" placeholder="Teléfono" class="i2" required>
                        <textarea name="mensaje" id="" cols="30" rows="10" placeholder="Consulta" class="i2"></textarea>
                        <label for="check-1" class="i2 label-1">
                            <p>¿Desea cerrar una reunión?</p> 
                            <input type="checkbox" name="cerrar-reunion" id="check-1" class="checkbox" required>
                        </label>
                        <label for="check-2" class="i2 label-2" >
                            <input type="checkbox" name="checkbox" id="check-2" class="checkbox" required>
                            <p>He leído y aceptado la política de cookies y 
                            privacidad</p> 
                        </label>
                        <div class="enviar i2">
                            <button type="submit" class="btn-enviar">
                                Enviar 
                                <img src="assets/img/arrow.png" alt="arrow" class="arrow">
                            </button>
                        </div>
                        
                    </form>
                </div>
            </div>
        </section>

        <footer>
            <br>
            <p>MFS-SINTERING SL</p>
            <br>
            <p>Aviso legal y política de privacidad</p>
            <br>
            <p>Diseñado por HASITAGO </p>
            <br>
        </footer>
    </main>
    <script src="js/script.js" type="module"></script>
</body>
</html>