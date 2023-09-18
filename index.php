<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CDN bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <!-- Estilos Css local -->
    <link rel="stylesheet" href="public/css/nav.css">
    <link rel="stylesheet" href="public/css/index.css">
    <!-- CDN hamburger button -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/hamburgers/1.2.1/hamburgers.min.css" integrity="sha512-+mlclc5Q/eHs49oIOCxnnENudJWuNqX5AogCiqRBgKnpoplPzETg2fkgBFVC6WYUVxYYljuxPNG8RE7yBy1K+g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Document</title>
</head>

<body>

    <!-- NAVBAR DE LA WEB -->
    <?php include("./public/vista/nav-index.php") ?>


    <!-- CONTENIDO DE PAGINA PRINCIPAL -->
    <div class="contenedor-home-page" id="inicio">
        <div class="descripcion-home">
            <h1>Proyecto,<br> Equipamiento, Soluciones</h1>
            <p>FDC CORPORATION con mas de 7 años en el mercado Peruano.</p>
            <div class="contenedor-propiedades">
                <a href="#descripcion">Empezar</a>
                <div class="contenido-propiedades">
                    <p>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-lock-fill" viewBox="0 0 16 16">
                            <path d="M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2zm3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2z" />
                        </svg>
                        Velocidad y <br> Seguridad
                    </p>
                    <p>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-lightning-fill" viewBox="0 0 16 16">
                            <path d="M5.52.359A.5.5 0 0 1 6 0h4a.5.5 0 0 1 .474.658L8.694 6H12.5a.5.5 0 0 1 .395.807l-7 9a.5.5 0 0 1-.873-.454L6.823 9.5H3.5a.5.5 0 0 1-.48-.641l2.5-8.5z" />
                        </svg>
                        Flexibilidad y <br> Actitud
                    </p>
                    <p>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-lightbulb-fill" viewBox="0 0 16 16">
                            <path d="M2 6a6 6 0 1 1 10.174 4.31c-.203.196-.359.4-.453.619l-.762 1.769A.5.5 0 0 1 10.5 13h-5a.5.5 0 0 1-.46-.302l-.761-1.77a1.964 1.964 0 0 0-.453-.618A5.984 5.984 0 0 1 2 6zm3 8.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1l-.224.447a1 1 0 0 1-.894.553H6.618a1 1 0 0 1-.894-.553L5.5 15a.5.5 0 0 1-.5-.5z" />
                        </svg>
                        Pasion,<br> Colaboracion
                    </p>
                </div>
            </div>
        </div>
        <div class="img-home">
            <img src="public/assets/img/fondo-header.jpg" alt="">
        </div>
    </div>
    <div class="barra-contenido" id="descripcion">
        <div class="contenedor">
            <div class="titulo-barra">
                Brinda Mantenimientos y Equipos de Calidad
            </div>
            <div class="descripcion" id="productos">
                FDC CORPORATION cuenta con un amplia gama de servicios,
                desde mantenimiento preventivos y evaluaciones hasta
                llegar a la raíz del problema ,Disponibles a las 24
                horas del dia en los 7 días de las semanas en casos
                de servicios de emergencia. 
            </div>
        </div>
    </div>
    <div class="main-productos">
        <div class="contenedor-productos">
            <div class="header-productos">
                <h2>¿QUE OFRECEMOS?</h2>
                <p>Desde Servicios, Software de Mantenimiento y
                    Equipos / Accesorios en las Distintas Marcas que
                    ofrecemos al mercado Peruano.</p>
            </div>
            <div class="productos">
                <div class="img-productos">
                    <img src="public/assets/img/portada-chicago.webp" alt="">
                </div>
                <div class="text-productos">
                    <a href="public/cmpresores.php">
                        <h2>Compresores de Tornillos</h2>
                    </a>
                    <div class="descripcion">
                        El aire comprimido extensamente usado en diversas
                        aplicaciones industriales , comerciales y
                        medicinales, está considerado como el cuarto
                        servicio auxiliar (facilities) en importancia
                        junto a la energía, agua y combustibles. Tenemos
                        como objetivo proporcionar los conceptos destinados
                        al proyecto o verificación de instalaciones de aire
                        comprimido industrial bajo la óptica del uso racional
                        de energía.
                    </div>
                </div>
            </div>
            <div class="productos">
                <div class="img-productos">
                    <img src="public/assets/img/portada-storage.png" alt="">
                </div>
                <div class="text-productos">
                    <a href="">
                        <h2>Storage Compat</h2>
                    </a>
                    <div class="descripcion">
                        Con los productos STORAGE COMPAT el almacenamiento
                        de mercancías y, en general, el mobiliario de taller,
                        almacén u oficina será más simple, ordenado y
                        seguro. Laampliagamade equipamientos
                        industriales y mobiliario de taller que ofrecemos es
                        perfecto para cualquier entorno de trabajo, desde
                        el almacén hasta el taller, desde la oficina al
                        simple vestuario de un gimnasio. Indispensables
                        en un equipamiento industrial o mobi l iario de
                        tal ler organi zados son los ar m arios
                        portaherramientas
                    </div>
                </div>
            </div>
            <div class="productos">
                <div class="img-productos">
                    <img src="public/assets/img/portada-karcher.png" alt="">
                </div>
                <div class="text-productos">
                    <a href="">
                        <h2>Karcher</h2>
                    </a>
                    <div class="descripcion">
                        La solución óptima de las tareas de limpieza es
                        un factor económico clave en el sector industrial
                        y comercial. Los aspec tos medioambientales
                        también desempeñan un papel muy importante. Por
                        esta razón, hemos adaptado nuestra amplia gama
                        de productos exactamente a sus requisitos
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br><br><br><br><br>
    <hr style="z-index: 700; position: relative;">
    <div class="main-contacto">
        <div class="contenedor-primario">
            <div class="item">
                <div class="header-contenedor">
                    <h1>¿Quieres conocer mas de nosotros y nuestros productos ?</h1>
                    <p class="parrafo">Contamos con objetivos y productos que apuntan
                        al mercado Peruano por la cual invitamos a
                        rellenar un formulario de suscripción y recibir
                        toda información nueva sobre nuestros servicios y
                        productos</p>
                    <div class="items-descripcion">
                        <p class="icon-descripcion">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-basket-fill" viewBox="0 0 16 16">
                                <path d="M5.071 1.243a.5.5 0 0 1 .858.514L3.383 6h9.234L10.07 1.757a.5.5 0 1 1 .858-.514L13.783 6H15.5a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.5.5H15v5a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V9H.5a.5.5 0 0 1-.5-.5v-2A.5.5 0 0 1 .5 6h1.717L5.07 1.243zM3.5 10.5a.5.5 0 1 0-1 0v3a.5.5 0 0 0 1 0v-3zm2.5 0a.5.5 0 1 0-1 0v3a.5.5 0 0 0 1 0v-3zm2.5 0a.5.5 0 1 0-1 0v3a.5.5 0 0 0 1 0v-3zm2.5 0a.5.5 0 1 0-1 0v3a.5.5 0 0 0 1 0v-3zm2.5 0a.5.5 0 1 0-1 0v3a.5.5 0 0 0 1 0v-3z" />
                            </svg>Compras<br> Seguras
                        </p>
                        <p class="icon-descripcion">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-chat-dots-fill" viewBox="0 0 16 16">
                                <path d="M16 8c0 3.866-3.582 7-8 7a9.06 9.06 0 0 1-2.347-.306c-.584.296-1.925.864-4.181 1.234-.2.032-.352-.176-.273-.362.354-.836.674-1.95.77-2.966C.744 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7zM5 8a1 1 0 1 0-2 0 1 1 0 0 0 2 0zm4 0a1 1 0 1 0-2 0 1 1 0 0 0 2 0zm3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
                            </svg>
                            Comunicacion <br>Instantanea
                        </p>
                        <p class="icon-descripcion">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-bell-fill" viewBox="0 0 16 16">
                                <path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zm.995-14.901a1 1 0 1 0-1.99 0A5.002 5.002 0 0 0 3 6c0 1.098-.5 6-2 7h14c-1.5-1-2-5.902-2-7 0-2.42-1.72-4.44-4.005-4.901z" />
                            </svg>
                            Informacion y<br>Cooperacion
                        </p>
                    </div>
                    <a href="public/contactos.php">Formulario</a>
                </div>
                <div class="img-contenedor">
                    <img src="public/assets/img/info-img.jpg" alt="">
                </div>
                <div class="circulo"></div>
                <div class="cuadrado"></div>
                <img src="public/assets/img/ondas-page.avif" class="ondas" alt="">
            </div>
        </div>
    </div>
    <div class="main-marcas">
        <div class="contenedor-marcas">
            <div class="header-marcas">
                <h1>Confianza entre los líderes del sector</h1>
                <p>Manejamos el mercado Peruano con las mejores marcas </p>
            </div>
            <div class="marcas">
                <img src="public/assets/img/marca- storage.png" alt="storage-marca">
                <img src="public/assets/img/marca-chicago.png" alt="storage-marca">
                <img src="public/assets/img/marca-kaeser" alt="storage-marca">
                <img src="public/assets/img/marca-karcher.png" alt="storage-marca">
                <img src="public/assets/img/marca-schulz.png" alt="storage-marca">
                <img src="public/assets/img/marca-ingresol.png" alt="storage-marca">
            </div>
        </div>
    </div>
    <div id="btn-scroll" class="scroll-buton">
        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-caret-up-fill" viewBox="0 0 16 16">
            <path d="m7.247 4.86-4.796 5.481c-.566.647-.106 1.659.753 1.659h9.592a1 1 0 0 0 .753-1.659l-4.796-5.48a1 1 0 0 0-1.506 0z" />
        </svg>
    </div>
    <a href="" target="_blank" class="mensaje-buton">
        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
            <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z" />
        </svg>
    </a>
    <div class="formulario-mensaje">
        <div class="img">
            <img src="public/assets/img/footer-persona.png" alt="">

        </div>
        <div class="circulo"></div>
        <div class="cuadrado"></div>
        <img src="public/assets/img/ondas-page.avif" class="ondas" alt="">
        <div class="form-mensaje">
            <form action="https://formsubmit.co/ventas@fdc-corporation.com" method="post">
                <h1>Envíanos un mensaje
                    y pronto nos pondremos en contacto contigo.</h1>
                <input type="text" name="nombre" placeholder="Nombre">
                <input type="text0" name="asunto" placeholder="Asunto">
                <input type="email" name="correo" placeholder="Correo Electronico">
                <textarea name="mensaje" id="" cols="30" rows="10"></textarea>
                <input type="submit" value="Enviar">
                <span>¡Gracias por su Mensaje!</span>
            </form>
        </div>
    </div>


    <!-- SECCION DEL FOOTER DE PAGINA -->
    <div class="footer">
        <div class="header-footer">
            <img src="public/assets/img/logo-empresa.png" alt="">
            <a href="index.php">
                <h2>FDC CORPORATION</h2>
                <span>Proyecto, Equipamiento, Soluciones</span>
            </a>

        </div>
        <div class="contenido-footer">
            <div>
                <h3>Contacto</h3>
                <p>Av. Separadora Industrial 2103 – Ate – Lima</p>
                <p>Consultas Gnerales:</p>
                <p>+51 951 722 440</p>
            </div>
            <div>
                <h3>Enlaces Rapidos</h3>
                <p>Terminos y condiciones</p>
                <a class="enlace" href="">Inicio</a>
                <a class="enlace" href="">Catalogo</a>
                <a class="enlace" href="">Productos</a>
                <a class="enlace" href="">Contactos</a>
            </div>
            <div>
                <h3>Seguir</h3>
                <p>Suscríbete y recibe las últimas noticias <br> de los productos.</p>
                <form action="https://formsubmit.co/ventas@fdc-corporation.com" method="post">
                    <strong for="">Email</strong><br><br>
                    <input type="email" name="correo">
                    <input type="submit" value="Enviar  ">
                </form>
            </div>
            <div>
                <a href="">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                        <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" />
                    </svg>
                </a>
                <a href="">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                        <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
                    </svg>
                </a>
                <a href="">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
                        <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z" />
                    </svg>
                </a>
                <a href="">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-youtube" viewBox="0 0 16 16">
                        <path d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.007 2.007 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.007 2.007 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31.4 31.4 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.007 2.007 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A99.788 99.788 0 0 1 7.858 2h.193zM6.4 5.209v4.818l4.157-2.408L6.4 5.209z" />
                    </svg>
                </a>
            </div>
        </div>
    </div>
    <script src="public/js/nav.js"></script>
    <script src="public/js/scroll-button.js"></script>
</body>

</html>