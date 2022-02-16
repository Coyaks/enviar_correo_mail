<?php
    $destinatario='coyaks19@gmail.com'; //destinatario ->cliente
    $asunto='Venta exitosa';
    $mensaje='Este es el body del correo';
    //$header="From: noreply@example.com".'\r\n';
    $header="From: stuxnetpl19@gmail.com"."\r\n";
    $header.="Reply-To: noreply@example.com"."\r\n";
    $header.="X-Mailer: PHP/".phpversion();
    //$header="Enviado desde skoy";

    $mail=mail($destinatario, $asunto, $mensaje, $header);
    
    if($mail){
        echo 'Correo enviado exitosamente';
    }else{
        echo 'Error al enviar correo';
    }
?>