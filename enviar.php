<?php 
 $destino = "kevinstikbernalbaccapro@gmail.com";
 $nombre = ($_POST["nombre"]);
 $correo = ($_POST["correo"]);
 $mensaje = ($_POST["mensaje"]);
 $contenido = "\nnombre: " . $nombre . "\ncorreo: " . $correo . "\nmensaje: " . $mensaje;
 mail($destino, "contacto desde nuestra web", $contenido); 
  header("location:index.html");
  ?>
  