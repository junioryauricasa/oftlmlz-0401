<?php
  /*
    name
    email
    subject
    message
  */
  $name = $_POST['name'];
  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];

  $titulo = "Oftalmoluz";
  // the message
  $msg = '

    <div>
      <img src="https://oftalmoluz.com/junioryauricasa/img/logo-oftalmoluz.png" alt="" width="300px">
      <br>
      <p>Mensaje enviado desde: <a href="https://oftalmoluz.com/junioryauricasa/contact" style="    background-color: #4caf50; border: none; color: white; padding: 1px 10px; text-align: center; text-decoration: none; display: inline-block; border-radius:4px">Oftalmoluz - Contactos</a></p>
      <br>
      <p>
        <b>
            Doctor, mi nombre es '.$name.' mi consulta es por el siguiente asunto '.$subject.' quisiera saber lo siguiente '.$message.', agradeceria que me pueda responder al siguiente correo electrónico '.$email.', gracias.
        </b>
      </p>
    </div>
  ';
  $msg = wordwrap($msg,500); //Ancho de mensaje

  //cabecera
  /*
  $headers = "MIME-Version: 1.0\r\n"; 
  $headers .= "Content-type: text/html; charset=iso-8859-1\r\n"; 
  */
  //dirección del remitente 
  $headers = 'MIME-Version: 1.0' . "\r\n";
  $headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
  $headers .= "From: Oftalmoluz - Contactos <soporte@oftalmoluz.com>\r\n";

  // send email
  //mail("junioryauricasa@gmail.com","Oftalmoluz - Correo",$msg);
  mail("junioryauricasa@gmail.com",$titulo,$msg,$headers); // a quien llegara el correo

  echo "
      <script>
        alert('Mensaje enviado correctamente');
        location.replace('https://oftalmoluz.com/junioryauricasa/contact.php');
      </script>
  ";

  // confirmacion condicional
  /*if ($enviado)
    echo 'Email enviado correctamente';
  else
    echo 'Error en el envío del email';
  }*/
?>