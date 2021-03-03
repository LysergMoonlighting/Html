<!DOCTYPE html>
<html lang="es" xml:lang="es">
	<head>
    <?php include("../html/meta.php")?>
    <?php include("../html/menu.php")?>
	</head>
  <body>
    <div id="texto" class="seccion">
    <form action="/action_page.php">

    <label for="fname">Nombre</label>
    <input type="text" id="fname" name="firstname" placeholder="Tu nombre....">

    <label for="lname">Apellidos</label>
    <input type="text" id="lname" name="lastname" placeholder="Tus apellidos....">

    <label for="ciudad">Ciudad</label>
    <select id="ciudad" name="ciudad">
      <option value="australia">Australia</option>
      <option value="canada">Canada</option>
      <option value="españa">España</option>
      <option value="usa">USA</option>
      <option value="mexico">México</option>
      <option value="peru">Perú</option>
    </select>

    <label for="motivo">Motivo</label>
    <textarea id="motivo" name="motivo" placeholder="Escribe tu motivo..." style="height:200px"></textarea>

    <button type="submit">Enviar</button>

  </form>

</div>  
  
  </body>
</html> 