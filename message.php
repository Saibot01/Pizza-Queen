//Form de contacto php
<?php
  $name = htmlspecialchars($_POST['name']);
  $email = htmlspecialchars($_POST['email']);
  $message = htmlspecialchars($_POST['message']);

  if(!empty($email) && !empty($message)){
    if(filter_var($email, FILTER_VALIDATE_EMAIL)){
      $receiver = "tobiascasco@fpuna.edu.py"; 
      $subject = "From: $name <$email>";
      $body = "Name: $name\nEmail: $email
      \n\nMessage:\n$message\n\nRegards,\n$name";
      $sender = "From: $email";
      if(mail($receiver, $subject, $body, $sender)){
         echo "Tu mensaje ha sido enviado.";
      }else{
         echo "Error al enviar su mensaje.";
      }
    }else{
      echo "Introduce un email valido!";
    }
  }else{
    echo "Debe llenar los campos de mensaje y email!";
  }
?>