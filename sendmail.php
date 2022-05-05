<?php
    //necesitamos obtener nuestras variables primero
    
    $email_to =   'ramonfelipeperezosorio@gmail.com'; //la dirección a la que se enviará el correo electrónico
    $name     =   $_POST['name'];  
    $email    =   $_POST['email'];
    $subject  =   $_POST['subject'];
    $message  =   $_POST['message'];

    /*la variable $header es para los encabezados adicionales en la función de correo,
      estamos asignando 2 valores, el primero es DESDE y el segundo es RESPONDER A.
      De esa manera cuando queramos responder el correo electrónico gmail (o yahoo o hotmail...) sabrá
      a quien respondemos. */
    $headers  = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    
    if(mail($email_to, $subject, $message, $headers)){
        echo 'sent'; // estamos enviando este texto a la solicitud de ajax diciéndole que se envió el correo..    
    }else{
        echo 'failed';// ... o este para decirle que no fue enviado    
    }
?>