<?php 
  
  $nombre = $_POST{'nombre'};
  $correo = $_POST{'correo'};
  $mensaje = $_POST{'mensaje'};


  $destinatario = "kevinstikbernalbaccapro@gmail.com";
  $asunto = "Contacto desde nuestra web";


  $carta = "De: $nombre \n";
  $carta .= "Correo: $correo \n";
  $carta .= "Mensajee: $mensaje";


  mail($destinatario, $asunto, $carta);
  header('Location:index.html');


 ?>