<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pastelería Temática | Tortas Personalizadas</title>
    
    <style>
    
    
    
    html {
    scroll-behavior: smooth;
    scroll-padding-top: 80px; /* Ajusta este número según la altura real de tu menú */
}



        /* ESTILOS DE ESTRUCTURA Y DISEÑO (BOOTSTRAP INTERNO) */
        * { box-sizing: border-box; margin: 0; padding: 0; }
        body { font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; background-color: #fff9f9; color: #333; line-height: 1.6; }
        .container { width: 100%; max-width: 1200px; margin: 0 auto; padding: 0 20px; }
        
        /* BARRA DE NAVEGACIÓN */
        .navbar { background-color: #ffffff; padding: 15px 0; box-shadow: 0 2px 10px rgba(0,0,0,0.05); position: sticky; top: 0; z-index: 1000; }
        .navbar .container { display: flex; justify-content: space-between; align-items: center; }
        .navbar-brand { font-size: 24px; font-weight: bold; color: #ff6b81; text-decoration: none; }
        .navbar-menu { display: flex; list-style: none; }
        .navbar-menu li { margin-left: 20px; }
        .navbar-menu a { text-decoration: none; color: #555; font-weight: 600; }
        .navbar-menu a:hover { color: #ff6b81; }

        /* HERO / BIENVENIDA */
        .hero-section { background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('https://unsplash.com') no-repeat center center/cover; color: white; padding: 100px 0; text-align: center; }
        .hero-section h1 { font-size: 45px; margin-bottom: 15px; font-weight: bold; }
        .hero-section p { font-size: 20px; margin-bottom: 30px; opacity: 0.9; }
        
        /* BOTÓN */
        .btn-pasteleria { display: inline-block; background-color: #ff6b81; color: white; border: none; padding: 15px 30px; font-size: 18px; font-weight: bold; border-radius: 50px; text-decoration: none; transition: background 0.3s; }
        .btn-pasteleria:hover { background-color: #ff4757; }

        /* SECCIÓN SECCIONES (NOSOTROS / CATEGORÍAS) */
        .py-5 { padding: 60px 0; }
        .bg-light { background-color: #f8f9fa; }
        .text-center { text-align: center; }
        .mb-5 { margin-bottom: 40px; }
        
        /* FILAS Y COLUMNAS */
        .row { display: flex; flex-wrap: wrap; margin: 0 -15px; }
        .col-6 { width: 50%; padding: 0 15px; }
        .col-4 { width: 33.33%; padding: 0 15px; }
        @media (max-width: 768px) { .col-6, .col-4 { width: 100%; margin-bottom: 30px; } .row { flex-direction: column; } }

        /* IMÁGENES Y TARJETAS */
        .img-fluid { width: 100%; height: auto; display: block; }
        .rounded-3 { border-radius: 10px; }
        .shadow { box-shadow: 0 4px 15px rgba(0,0,0,0.1); }
        .card { background: white; border-radius: 10px; overflow: hidden; box-shadow: 0 2px 10px rgba(0,0,0,0.05); height: 100%; }
        .card img { width: 100%; height: 250px; object-fit: cover; }
        .card-body { padding: 20px; }
        .card-title { font-size: 20px; margin-bottom: 10px; color: #222; }
        .card-text { color: #666; font-size: 15px; }

        /* PIE DE PÁGINA */
        footer { background-color: #222; color: white; text-align: center; padding: 30px 0; margin-top: 40px; }
        footer p { margin-bottom: 5px; }
        .text-white-50 { color: rgba(255,255,255,0.5); font-size: 14px; }
                
                
                
                
                
                
                /* BOTÓN FLOTANTE DE WHATSAPP */
.whatsapp-float {
    position: fixed;
    width: 60px;
    height: 60px;
    bottom: 40px;
    right: 40px;
    background-color: #25d366;
    color: #fff;
    border-radius: 50px;
    text-align: center;
    font-size: 35px;
    box-shadow: 2px 2px 3px #999;
    z-index: 100;
    display: flex;
    align-items: center;
    justify-content: center;
    text-decoration: none;
    transition: transform 0.3s;
}
.whatsapp-float:hover {
    transform: scale(1.1);
    background-color: #20ba5a;
    color: #fff;
}

                
                
                
/* ESTILOS DEL FORMULARIO */
.form-section { background-color: #ffffff; padding: 60px 0; }
.form-group { margin-bottom: 20px; text-align: left; }
.form-group label { display: block; font-weight: 600; margin-bottom: 8px; color: #444; }
.form-control { width: 100%; padding: 12px; border: 1px solid #ccc; border-radius: 8px; font-family: inherit; font-size: 15px; }
.form-control:focus { border-color: #ff6b81; outline: none; box-shadow: 0 0 5px rgba(255,107,129,0.3); }
                     
                     
                     
                     
                     
                     
                     /* --- ESTILOS DE LA BARRA DE NAVEGACIÓN --- */
.navbar {
    background-color: #ffffff;
    box-shadow: 0 2px 10px rgba(0,0,0,0.06);
    position: sticky;
    top: 0;
    z-index: 1000;
    padding: 15px 0;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
}

.navbar .container {
    max-width: 1200px;
    margin: 0 auto;
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 0 20px;
}

.navbar-brand {
    font-size: 22px;
    font-weight: 700;
    color: #222;
    text-decoration: none;
}

.navbar-menu {
    list-style: none;
    display: flex;
    align-items: center;
    gap: 25px;
    margin: 0;
    padding: 0;
}

.navbar-menu a {
    text-decoration: none;
    color: #555;
    font-size: 16px;
    font-weight: 500;
    transition: color 0.3s ease;
}

.navbar-menu a:hover {
    color: #e07a5f; /* Color de acento de tu pastelería */
}

/* Estilo especial para el botón de Cotizar/Contacto */
.nav-btn-contacto {
    background-color: #25D366; /* Verde WhatsApp */
    color: white !important;
    padding: 8px 18px;
    border-radius: 20px;
    font-weight: 600 !important;
    transition: transform 0.2s, background-color 0.3s ease !important;
}

.nav-btn-contacto:hover {
    background-color: #128C7E !important;
    transform: scale(1.05);
}

/* Botón Hamburguesa (Oculto por defecto en PC) */
.menu-toggle {
    display: none;
    background: none;
    border: none;
    font-size: 28px;
    cursor: pointer;
    color: #222;
}

/* --- ADAPTACIÓN PARA CELULARES (RESPONSIVE) --- */
@media (max-width: 768px) {
    .menu-toggle {
        display: block; /* Muestra el botón hamburguesa */
    }

    .navbar-menu {
        display: none; /* Oculta el menú por defecto en móviles */
        flex-direction: column;
        position: absolute;
        top: 100%;
        left: 0;
        width: 100%;
        background-color: #ffffff;
        box-shadow: 0 4px 10px rgba(0,0,0,0.1);
        padding: 20px 0;
        gap: 20px;
    }

    /* Clase activa que se añadirá con JavaScript para mostrar el menú */
    .navbar-menu.active {
        display: flex;
    }

    .nav-btn-contacto {
        display: inline-block;
        margin-top: 5px;
    }
}


                     
                     /* --- ANIMACIONES DE SCROLL --- */

/* Estado inicial: oculto y un poco desplazado hacia abajo */
.reveal {
    opacity: 0;
    transform: translateY(40px);
    transition: opacity 0.8s ease, transform 0.8s ease;
}

/* Estado activo: visible y en su posición original */
.reveal.active {
    opacity: 1;
    transform: translateY(0);
}

/* Efecto de cascada opcional para las tarjetas de categorías (aparecen una tras otra) */
.delay-1 { transition-delay: 0.2s; }
.delay-2 { transition-delay: 0.4s; }
.delay-3 { transition-delay: 0.6s; }

                     
        
                     
                     /* --- CONTROL DE TAMAÑO DE IMÁGENES --- */

/* Ajuste para las secciones Inicio y Nosotros */
.hero-image img, 
.about-image img {
    width: 100%;
    max-width: 450px;    /* Limita el ancho máximo en pantallas grandes */
    height: 450px;       /* Define una altura fija cuadrada y moderna */
    object-fit: cover;   /* ¡Clave! Corta y ajusta la foto sin deformarla */
    border-radius: 15px; /* Bordes redondeados elegantes */
    box-shadow: 0 8px 20px rgba(0,0,0,0.06);
}

/* Ajuste para las Tarjetas de Categorías */
.category-card img {
    width: 100%;
    height: 250px;       /* Altura horizontal perfecta para tarjetas */
    object-fit: cover;   /* Evita que la foto se estire horizontal o verticalmente */
    border-radius: 8px;  /* Bordes redondeados más sutiles */
    margin-bottom: 15px;
}

                     
                     
                     
                     
/* Contenedor de tarjetas: oculta el exceso de imagen al agrandarse */
.img-container {
    overflow: hidden;
    border-radius: 8px;
    margin-bottom: 15px;
}

/* Contenedor de Inicio y Nosotros */
.img-container-grande {
    overflow: hidden;
    border-radius: 15px;
}

/* Efecto base para las imágenes */
.img-container img, 
.img-container-grande img {
    transition: transform 0.4s ease !important;
    cursor: pointer;
}

/* Ejecución del Zoom al pasar el mouse por encima del contenedor */
.img-container:hover img {
    transform: scale(1.08); /* Zoom del 8% para categorías */
}

.img-container-grande:hover img {
    transform: scale(1.04); /* Zoom del 4% para imágenes grandes */
}


                     
                     /* --- ESTILOS DEL PIE DE PÁGINA (FOOTER) --- */
.footer {
    background-color: #222222; /* Fondo oscuro elegante */
    color: #ffffff;
    padding: 60px 0 20px 0;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    margin-top: 50px;
}

.footer-content {
    display: flex;
    justify-content: space-between;
    align-items: flex-start;
    gap: 40px;
    flex-wrap: wrap; /* Permite que las columnas bajen en celulares */
}

/* Columna de la Marca */
.footer-brand {
    flex: 1;
    min-width: 250px;
}

.footer-logo {
    font-size: 22px;
    font-weight: 700;
    margin-bottom: 15px;
}

.footer-brand p {
    color: #b3b3b3;
    line-height: 1.6;
    font-size: 15px;
}

/* Columnas de Títulos */
.footer h4 {
    font-size: 18px;
    margin-bottom: 20px;
    position: relative;
    padding-bottom: 8px;
}

.footer h4::after {
    content: '';
    position: absolute;
    left: 0;
    bottom: 0;
    width: 40px;
    height: 2px;
    background-color: #e07a5f; /* Color de acento de tu pastelería */
}

/* Columna de Enlaces */
.footer-links {
    flex: 1;
    min-width: 150px;
}

.footer-links ul {
    list-style: none;
    padding: 0;
    margin: 0;
}

.footer-links li {
    margin-bottom: 12px;
}

.footer-links a {
    color: #b3b3b3;
    text-decoration: none;
    font-size: 15px;
    transition: color 0.3s ease;
}

.footer-links a:hover {
    color: #e07a5f;
}

/* Columna de Info y Redes */
.footer-info {
    flex: 1;
    min-width: 200px;
}

.footer-info p {
    color: #b3b3b3;
    font-size: 15px;
    margin-bottom: 12px;
}

.footer-socials {
    display: flex;
    gap: 15px;
    margin-top: 15px;
    font-size: 20px;
}

.footer-socials a {
    text-decoration: none;
    transition: transform 0.2s ease;
}

.footer-socials a:hover {
    transform: scale(1.2);
}

/* Barra Inferior de Copyright */
.footer-bottom {
    text-align: center;
    border-top: 1px solid #333333;
    margin-top: 40px;
    padding-top: 20px;
}

.footer-bottom p {
    color: #777777;
    font-size: 14px;
    margin: 0;
}

/* --- RESPONSIVE PARA CELULARES --- */
@media (max-width: 768px) {
    .footer-content {
        flex-direction: column;
        text-align: center;
    }
    .footer h4::after {
        left: 50%;
        transform: translateX(-50%); /* Centra la línea decorativa en móviles */
    }
    .footer-socials {
        justify-content: center;
    }
}

                     
/* --- VENTANA EMERGENTE DE LA GALERÍA (MODAL) --- */
.modal-galeria {
    display: none; /* Oculto por defecto */
    position: fixed;
    z-index: 2000; /* Por encima de la barra de navegación */
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.9); /* Fondo negro translúcido */
    overflow-y: auto; /* Permite hacer scroll si hay muchos modelos */
    padding: 60px 20px;
    box-sizing: border-box;
}

/* Botón para cerrar (X) */
.cerrar-modal {
    position: absolute;
    top: 20px;
    right: 30px;
    color: #ffffff;
    font-size: 40px;
    font-weight: bold;
    cursor: pointer;
    transition: color 0.3s;
}

.cerrar-modal:hover {
    color: #e07a5f;
}

/* Contenedor interno del modal */
.modal-contenido {
    max-width: 1100px;
    margin: 0 auto;
    text-align: center;
}

.modal-contenido h2 {
    color: white;
    font-size: 28px;
    margin-bottom: 30px;
    font-family: 'Segoe UI', sans-serif;
}

/* Grilla de imágenes de los modelos dentro del modal */
.fotos-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 20px;
}

.foto-modelo-item {
    width: 100%;
    height: 280px;
    object-fit: cover;
    border-radius: 8px;
    border: 3px solid #ffffff;
    transition: transform 0.3s ease;
    cursor: pointer;
}

.foto-modelo-item:hover {
    transform: scale(1.03);
}

                     
    </style>
        
        
        <!-- Coloca esto dentro de la etiqueta <head> -->
<title>Mila's Cake | Cotiza tus Tortas Personalizadas</title>
<meta name="description" content="Diseñamos las mejores tortas artesanales y personalizadas para tus eventos. ¡Cotiza directo por WhatsApp!">
<meta property="og:title" content="Mila's Cake - Tortas Personalizadas">
<meta property="og:description" content="¡Haz tu pedido hoy mismo! Tortas temáticas hechas con amor.">
<meta property="og:image" content="img/torta-principal.jpg">

</head>
<body>
        
        
        
    <!-- 1. BARRA DE NAVEGACIÓN -->
<nav class="navbar">
    <div class="container">
        <a class="navbar-brand" href="#">🍰 Mila´s Cake</a>
        
        <!-- Botón Hamburguesa para Celulares -->
        <button class="menu-toggle" aria-label="Abrir menú" onclick="toggleMenu()">☰</button>
        
        <ul class="navbar-menu" id="navbarMenu">
        	<li><a href="#inicio" onclick="cerrarMenu()">Inicio</a></li>
            <li><a href="#nosotros" onclick="cerrarMenu()">Nosotros</a></li>
            <li><a href="#categorias" onclick="cerrarMenu()">Categorías</a></li>
            <!-- Enlace de Contacto que ejecuta tu función de scroll suave -->
            <li><a href="javascript:void(0);" onclick="irAContacto(); cerrarMenu();" class="nav-btn-contacto">Cotizar</a></li>
        </ul>
    </div>
</nav>

        
        
        
        
        

 
        <!-- 2. BIENVENIDA (HERO SECTION) -->
        
          <section id="inicio" class="py-5">
        <!-- Busca esta línea en tu sección #inicio y cámbiala así: -->



    <header class="hero-section">
        <div class="container">
        
        <img src="img/tortasmila.jpg" alt="Torta destacada Mila's Cake" style="width: 100%; max-width: 450px; height: 450px; object-fit: cover; border-radius: 15px;">


            <h1>Tortas Temáticas que Hacen Realidad tus Sueños</h1>
            <p>Diseños personalizados, sabores inolvidables hechos con amor para tus momentos más especiales.</p>
            <!-- Cambiado a botón con scroll suave automático -->
            <button type="button" onclick="irAContacto()" class="btn-pasteleria" style="cursor: pointer;">Cotiza tu Torta Aquí</button>
        </div>
    </header>
</section>

    <!-- 3. PRESENTACIÓN / NOSOTROS -->
    <section id="nosotros" class="py-5">
        <div class="container">
            <div class="row" style="align-items: center;">
                <div class="col-6">
                    <img src="img/nosotros.jpg" alt="Equipo Mila's Cake" style="width: 100%; max-width: 450px; height: 450px; object-fit: cover; border-radius: 15px;">

                </div>
                <div class="col-6" style="padding-left: 30px;">
                    <h2 style="font-size: 36px; margin-bottom: 20px;">Bienvenidos a Nuestra Pastelería</h2>
                    <p style="font-size: 18px; color: #555; margin-bottom: 15px;">En <strong>Dulce Magia</strong>, no solo creamos tortas; esculpimos tus ideas en pasteles deliciosos. Cada detalle está finamente cuidado para que el centro de mesa de tu fiesta sea una verdadera obra de arte.</p>
                    <p style="color: #666;">Utilizamos ingredientes premium y recetas tradicionales para garantizar que tu torta sea tan sabrosa por dentro como espectacular por fuera.</p>
                </div>
            </div>
        </div>
    </section>

                        
                        
                        
   
    <!-- 4. CATEGORÍAS -->
    <section id="categorias" class="bg-light py-5">
        <div class="container">
            <h2 class="text-center mb-5" style="font-size: 36px;">Nuestras Especialidades</h2>
                         <p class="section-subtitle reveal">Haz clic en una categoría para ver todos nuestros modelos</p>
            <div class="row">
                <div class="col-4">
                    <div class="card">
                        
                        
                         <div class="img-container">
                        <img src="img/infantiles.jpg" alt="Tortas Infantiles" style="width: 100%; height: 400px; object-fit: cover; border-radius: 8px; margin-bottom: 15px;">
                        </div>
                        
                        
                        <div class="card-body text-center">
                            <h3 class="card-title">Cumpleaños Infantiles</h3>
                            <p class="card-text">Tus personajes favoritos moldeados en fondant o crema.</p>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card">
                        
                        <div class="img-container">
                        <img src="img/aniversarios.jpg" alt="Tortas Infantiles" style="width: 100%; height: 400px; object-fit: cover; border-radius: 8px; margin-bottom: 15px;">
                        </div>
                        
                        <div class="card-body text-center">
                            <h3 class="card-title">Bodas y Aniversarios</h3>
                            <p class="card-text">Elegancia, texturas sofisticadas y flores comestibles hechas a mano.</p>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card">
                        
                        <div class="img-container">
                        <img src="img/tematica.jpg" alt="Tortas Infantiles" style="width: 100%; height: 400px; object-fit: cover; border-radius: 8px; margin-bottom: 15px;">
                        </div>
                        
                        <div class="card-body text-center">
                            <h3 class="card-title">Divertidas y Geek</h3>
                            <p class="card-text">Diseños en 3D basados en películas, videojuegos y hobbies.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
              
             

                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
<!-- 5. SECCIÓN DE CONTACTO Y FORMULARIO (SIN ETIQUETA FORM PARA EVITAR ERRORES DE URL) -->
    <section id="contacto" class="py-5">
        <div class="container" style="max-width: 600px;">
            <div class="form-section text-center">
               
                <h2 style="font-size: 32px; margin-bottom: 15px; color: #222;">¡Cotiza tu Torta Personalizada!</h2>
                
                <!-- Aquí usamos un div contenedor en lugar de un form -->
                <div class="form-contenedor">
                    <div class="form-group">
                        <label for="nombre">Nombre Completo</label>
                        <input type="text" id="nombre" class="form-control" placeholder="Ej. María García">
                    </div>
                    <div class="form-group">
                        <label for="telefono">Teléfono / WhatsApp</label>
                        <input type="tel" id="telefono" class="form-control" placeholder="Ej. +51 999 999 999">
                    </div>
                    <div class="form-group">
                        <label for="fecha">Fecha del Evento</label>
                        <input type="date" id="fecha" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="detalles">Detalles de la Torta (Temática, porciones, sabor)</label>
                        <textarea id="detalles" class="form-control" rows="4" placeholder="Cuéntanos cómo te imaginas tu torta..."></textarea>
                    </div>
                    
                    <!-- Botón normal con evento onclick directo -->
                    <button type="button" onclick="enviarFormularioWhatsApp()"  class="btn-pasteleria" 
                        style="cursor: pointer; display: inline-block; background-color: #25d366; color: white; padding: 18px 40px; font-size: 20px; border: none; border-radius: 50px; font-weight: bold; box-shadow: 0 4px 10px rgba(37,211,102,0.3);">
                        Enviar Solicitud por WhatsApp
                    </button>
                </div>

            </div>
        </div>
    </section>

                        
                        
                  
   <!-- 5. PIE DE PÁGINA (FOOTER) -->
<footer class="footer">
    <div class="container footer-content">
        <!-- Columna 1: Marca y Eslogan -->
        <div class="footer-brand">
            <h3 class="footer-logo">🍰 Mila´s Cake</h3>
            <p>Transformamos tus dulces sueños en deliciosas realidades hechas con amor.</p>
        </div>

        <!-- Columna 2: Enlaces Rápidos -->
        <div class="footer-links">
            <h4>Navegación</h4>
            <ul>
                
                <li><a href="javascript:void(0);" onclick="document.getElementById('inicio').scrollIntoView({behavior:'smooth'})">Inicio</a></li>
                <li><a href="javascript:void(0);" onclick="document.getElementById('nosotros').scrollIntoView({behavior:'smooth'})">Nosotros</a></li>
                <li><a href="javascript:void(0);" onclick="document.getElementById('categorias').scrollIntoView({behavior:'smooth'})">Categorías</a></li>
                <li><a href="javascript:void(0);" onclick="irAContacto()">Cotizar</a></li>
            </ul>
        </div>

        <!-- Columna 3: Horarios y Contacto -->
        <div class="footer-info">
            <h4>Atención</h4>
            <p>📅 Lun a Sáb: 9:00 AM - 7:00 PM</p>
            <p>📍 Surquillo / Lima, Perú</p>;
            <!-- Enlaces a tus Redes Sociales (Reemplaza los # por tus links reales) -->
            <div class="footer-socials">
                <a href="#" target="_blank" aria-label="Facebook">📘</a>
                <a href="#" target="_blank" aria-label="Instagram">📸</a>
                <a href="https://whatsapp.com" target="_blank" aria-label="WhatsApp">🟢</a>
            </div>
        </div>
    </div>
    
    <!-- Barra de Derechos de Autor -->
    <div class="footer-bottom">
        <p>&copy; 2026 Mila´s Cake. Todos los derechos reservados.</p>
    </div>
</footer>


    <!-- AQUÍ LO PEGAS -->
    <a href="https://wa.me/51946495057/" class="whatsapp-float" target="_blank">📞</a>




      <script>
        // Función para bajar hasta el formulario sin alterar la URL de la barra de direcciones
        function irAContacto() {
            document.getElementById('contacto').scrollIntoView({ behavior: 'smooth' });
        }

        // Función para enviar los datos a WhatsApp
        function enviarFormularioWhatsApp() {
            // Capturar elementos de forma segura
            const txtNombre = document.getElementById('nombre');
            const txtTelefono = document.getElementById('telefono');
            const txtFecha = document.getElementById('fecha');
            const txtDetalles = document.getElementById('detalles');

            if (!txtNombre || !txtTelefono || !txtFecha || !txtDetalles) {
                alert("Error técnico: Uno de los campos no fue encontrado en el HTML.");
                return;
            }

            const nombre = txtNombre.value.trim();
            const telefono = txtTelefono.value.trim();
            const fecha = txtFecha.value.trim();
            const detalles = txtDetalles.value.trim();

            if (!nombre || !telefono || !fecha || !detalles) {
                alert("Por favor, completa todos los campos antes de enviar.");
                return;
            }

            // REEMPLAZA AQUÍ: Pon tu número de negocio (ej. 51999999999)
            const numeroNegocio = "51946495057"; 

            const mensaje = `Hola Milas Cake, quiero cotizar una torta:%0A` +
                            `*Nombre:* ${encodeURIComponent(nombre)}%0A` +
                            `*Teléfono:* ${encodeURIComponent(telefono)}%0A` +
                            `*Fecha:* ${encodeURIComponent(fecha)}%0A` +
                            `*Detalles:* ${encodeURIComponent(detalles)}`;

            const urlWhatsApp = `https://api.whatsapp.com/send/?phone=51946495057&text=${mensaje}`;
            
            // Abrir en pestaña nueva de forma limpia
            window.open(urlWhatsApp, '_blank', 'noopener,noreferrer');
        }
          
                    
          
          // Función para abrir cerrar el menú en celulares
function toggleMenu() {
    const menu = document.getElementById('navbarMenu');
    menu.classList.toggle('active');
}

// Función para cerrar el menú automáticamente al hacer clic en una opción (móvil)
function cerrarMenu() {
    const menu = document.getElementById('navbarMenu');
    if (menu.classList.contains('active')) {
        menu.classList.remove('active');
    }
}


     // Base de datos de imágenes por categoría
const modelosPorCategoria = {
    infantiles: {
        titulo: "Modelos de Tortas Infantiles",
        fotos: ["img/infantiles.jpg", "img/infantil2.jpg", "img/infantil3.jpg", "img/infantil4.jpg"]
    },
    bodas: {
        titulo: "Modelos de Tortas para Bodas y Aniversarios",
        fotos: ["img/boda1.jpg", "img/boda2.jpg", "img/boda3.jpg"]
    },
    tematicas: {
        titulo: "Modelos de Tortas Temáticas",
        fotos: ["img/tematica1.jpg", "img/tematica2.jpg", "img/tematica3.jpg", "img/tematica4.jpg", "img/tematica5.jpg"]
    }
};

// Función para abrir la galería según la categoría seleccionada
function abrirGaleria(categoria) {
    const modal = document.getElementById('modalGaleria');
    const titulo = document.getElementById('tituloGaleria');
    const contenedorGrid = document.getElementById('contenedorFotosGrid');

    // Conseguir la información de la categoría elegida
    const datos = modelosPorCategoria[categoria];

    if (!datos) return;

    // Asignar el título correspondiente
    titulo.innerText = datos.titulo;

    // Limpiar fotos anteriores e inyectar las nuevas
    contenedorGrid.innerHTML = "";
    datos.fotos.forEach(rutaFoto => {
        const img = document.createElement('img');
        img.src = rutaFoto;
        img.className = 'foto-modelo-item';
        img.alt = 'Modelo Mila\'s Cake';
        
        // OPCIONAL: Si hacen clic en una foto del catálogo, los manda directo a cotizar
        img.onclick = function() {
            cerrarGaleria();
            irAContacto();
        };

        contenedorGrid.appendChild(img);
    });

    // Mostrar la ventana modal en pantalla
    modal.style.display = "block";
    document.body.style.overflow = "hidden"; // Bloquea el scroll del fondo web
}

// Función para cerrar la ventana modal
function cerrarGaleria() {
    document.getElementById('modalGaleria').style.display = "none";
    document.body.style.overflow = "auto"; // Devuelve el scroll a la página principal
}

// Cerrar también si hacen clic fuera de la grilla de fotos (en el fondo negro)
window.onclick = function(event) {
    const modal = document.getElementById('modalGaleria');
    if (event.target == modal) {
        cerrarGaleria();
    }
}
                                          
                                               
                                               
                                               
                                               
</script>





</body>
</html>
