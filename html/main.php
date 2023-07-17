<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="../js/script1.js"></script>
    <script src="../js/script.js"></script>
    <link rel="stylesheet" href="../css/main.css">

    <title>Registro Fungí</title>
</head>

<body>

    <nav class="navbar">
        <div class="navbar-logo">
            <img src="../img/logo-fungi.png" alt="Logo">
        </div>
        <h1 class="navbar-title">FUNGI EXPLORER</h1>
        <ul class="navbar-menu">

            <li><a href="#" onclick="cambiarContenido(event, 'contenido-registro')" class="nav-button">Registrar
                    Hongo</a></li>
            <li><a href="#">Bienvenido</a></li>
            <li class="navbar-dropdown">
                <button class="navbar-dropdown-toggle">
                    <img src="user.png" alt="Foto de usuario" class="user-photo">
                    <i class="fas fa-chevron-down"></i>
                </button>
                <ul class="navbar-dropdown-menu">
                    <li><a href="#" id="configuracion">Configuración</a></li>
                    <li><a href="#" id="cerrar-sesion">Cerrar sesión</a></li>
                </ul>
            </li>
        </ul>
    </nav>

    <aside class="sidebar">
        <div class="logo">
            <label for="search-input"><b>BUSCAR</b></label>
            <input id="search-input" type="text" placeholder="¿Qué buscas?">
        </div>
        <ul class="menu">
            <li><a href="#" onclick="cambiarContenido(event, 'contenido-inicio')" class="nav-button">Inicio</a></li>
            <li><a href="#" onclick="cambiarContenido(event, 'contenido-introduccion')"
                    class="nav-button">Introducción</a></li>
            <li><a href="#" onclick="cambiarContenido(event, 'contenido-indice')" class="nav-button">Índice
                    Taxonómico</a></li>
            <li><a href="#" onclick="cambiarContenido(event, 'contenido-quienes')" class="nav-button">Quiénes Somos</a>
            </li>
            <li><a href="#" onclick="cambiarContenido(event, 'contenido-glosario')" class="nav-button">Glosario</a></li>
            <li><a href="#" onclick="cambiarContenido(event, 'contenido-contacto')" class="nav-button">Contáctenos</a>
            </li>
        </ul>
    </aside>

    <main class="content-container">
        <section id="contenido-inicio">
            <h3>Bienvenido al mundo Fungi</h3>
            <img id="home" src="../imagenes/inicio.png" alt="">
        </section>

        <section id="contenido-introduccion" style="display: none;">
            <h2>Introducción</h2>
            <div class="intro">
                <img class="intro1" src="../img/fondo3.jpg" alt="intro">
                <img class="intro2" src="../img/img5.jpg" alt="intro2">
            </div>
            <div class="textintro">
                <p>Fungí Explorer tiene como objetivo poner a disposición el compendio de información más completo de
                    hongos macroscópicos del Ecuador.</p>
            </div>
        </section>

        <section id="contenido-indice" style="display: none;">
            <h2>Indice Taxonomico</h2>

            <table id="tabla-especies">

                <tbody>
                    <?php include('../php/selecionar.php'); ?>
                </tbody>
            </table>
        </section>

        <section id="contenido-quienes" style="display: none;">
            <h2>Quiénes Somos</h2>
            <p>Contenido de la sección de Quiénes Somos.</p>
        </section>

        <section id="contenido-glosario" style="display: none;">
            <h2>Glosario</h2>
            <p>Contenido de la sección de Glosario.</p>
        </section>

        <section id="contenido-contacto" style="display: none;">
            <h2>Contáctenos</h2>
            <p>Jeremy Pavon: jjpavonb@utn.edu.ec / 0997786962</p>
        </section>

    </main>


    <section id="contenido-registro" style="display: none;">

        <form id="msform" enctype="multipart/form-data" method="POST" action="../php/guardar_datos.php">
            <!-- progressbar -->
            <ul id="progressbar">
                <li class="active">Datos Generales</li>
                <li>Clasificación</li>
                <li>Descripción</li>
            </ul>
            <!-- fieldsets -->
            <fieldset>
                <h2 class="fs-title">Ingrese datos del Hongo</h2>
                <h3 class="fs-subtitle">Reino Fungí</h3>

                <input type="text" name="nombrehongo" placeholder="Nombre Científico" />
                <label for="division">División:</label>
                <select id="division" name="" onchange="actualizarCombo()">
                    <option value="opcion1">Basidiomycota</option>
                    <option value="opcion2">Ascomycota</option>
                </select>
                <label for="clases">Clase:</label>
                <select id="clase" name="">
                    <option value="">Homobasidiomycetes</option>
                </select>
                <input type="button" name="next" class="next action-button" value="Next" />
            </fieldset>
            <fieldset>
                <h2 class="fs-title">Orden de los Hongos</h2>
                <h3 class="fs-subtitle">Complete los campos</h3>
                <label for="hongos">Orden:</label>
                <select id="clase" name="">
                    <option value="Aga">Agaricales</option>
                    <option value="Au">Auriculiares</option>
                    <option value="Bole">Boletales</option>
                    <option value="Bo">Bolitiales</option>
                    <option value="Botry">Botryosphaeriales</option>
                    <option value="Cri">Cribrarriida</option>
                    <option value="Dan">Dancrymycetales</option>
                    <option value="Do">Dothideales</option>
                    <option value="Geas">Geastrales</option>
                    <option value="Geo">Geoglossales</option>
                    <option value="Gloe">Gleophyllales</option>
                    <option value="Gomp">Gomphales</option>
                    <option value="helo">Helotiales</option>
                    <option value="hym">Hymenochaetales</option>
                    <option value="hypo">Hypocreales</option>
                    <option value="Per">Pertusariales</option>
                    <option value="Pezi">Pezizales</option>
                    <option value="Pha">Phallales</option>
                    <option value="Poly">Polyporales</option>
                    <option value="Pro">Protostelina</option>
                    <option value="Pyxi">Pyxidiophorales</option>
                    <option value="Russ">Russulales</option>
                    <option value="Sor">Sordariales</option>
                    <option value="The">Thelephorales</option>
                    <option value="Tre">Tremellales</option>
                    <option value="Aga">Trichiida</option>
                    <option value="Aga">Xylariales</option>
                </select>

                <label for="hongos">Familia:</label>
                <select id="clase" name="">
                    <option value="Aga">Agaricaceae</option>
                    <option value="Au">Amanitaceae</option>
                    <option value="Bole">Bolbitiaceae</option>
                    <option value="Bo">Cortinariaceae</option>
                    <option value="Botry">Entomataceae</option>
                    <option value="Cri">Hydnangiaceae</option>
                    <option value="Dan">Inocybaceae</option>
                    <option value="Do">Omphalotacea</option>
                    <option value="Geas">Pluteaceae</option>
                    <option value="Geo">Schizophyllaceae</option>
                    <!-- Auriculares -->
                    <option value="Au">Auriculariaceae</option>
                </select>

                <label for="hongos">Género:</label>
                <select id="clase" name="">
                    <option value="Aga">Agaricus</option>
                    <option value="Au">Lepiota</option>
                    <option value="Bole">Macrolepiota</option>
                    <option value="Bo">Leucoagaricus</option>
                </select>
                <input type="button" name="previous" class="previous action-button" value="Previous" />
                <input type="button" name="next" class="next action-button" value="Next" />
            </fieldset>
            <fieldset>
                <h2 class="fs-title">Detalles del Hongo</h2>
                <h3 class="fs-subtitle">Estamos en la parte final</h3>

                <label for="hongos">Especie:</label>
                <select id="clase" name="">
                    <option value="Aga">Agaricus campestris</option>
                    <option value="Au">Lepiota atrodisca</option>
                    <option value="Bole">Macrolepiota procera</option>
                    <option value="Bo">Leucoagaricus leucothites</option>
                </select>

                <input type="text" name="habitat" placeholder="Habitat" />
                <input type="text" name="cantidad" placeholder="Cantidad" />
                <input type="file" name="imagen" placeholder="Imagen" />
                <textarea name="descripcion" placeholder="Descripcion"></textarea>
                <input type="button" name="previous" class="previous action-button" value="Previous" />
                <input type="submit" class="submit action-button" value="Submit" />
            </fieldset>
        </form>


    </section>

    <script src="https://kit.fontawesome.com/a8638e0a1d.js" crossorigin="anonymous"></script>
    <script src="../js/main.js"></script>
</body>

</html>