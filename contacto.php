<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="./css/style-contacto.css">
  <title>Formulario de contacto</title>
</head>
<body>

  <header>
    <div class="menu"> 
        <ul>
            <li><a href="./index.html">INICIO</li>
            <li><a href="./quevisitar.html">QUÉ VISITAR</a></li>
            <li><a href="./dondealojarse.html">DÓNDE ALOJARSE</a></li>
            <li><a href="./dondecomer.html">DÓNDE COMER</a></li>
            <li><a href="./historia.html">HISTORIA</a></li>
            <li><a href="./contacto.html">CONTACTO</a></li>
        </ul>       
    </div>
</header>

  <div class="container">
    <form method ="post">
      <h2>Formulario de contacto</h2>
      <?php
        include ("consulta.php");
        include ("conexion.php");
      ?>

      <label for="nombre">Nombre completo:</label>
      <input type="text" id="nombre" name="nombre" placeholder="Nombre completo">

      <label for="telefono">Número de teléfono:</label>
      <input type="text" id="telefono" name="telefono" placeholder="Número de teléfono">

      <label for="motivo">Motivo de contacto:</label>
      <input type="text" id="motivo" name="motivo" placeholder="Motivo de contacto">

      <label for="consulta">Escribe tu consulta:</label>
      <textarea id="consulta" name="consulta" placeholder="Escribe tu consulta"></textarea>

      <input type="submit" id="boton" name="bb" value="Enviar">
    </form>
  </div>

 

  <script src="script.js"></script>
</body>
</html>

 