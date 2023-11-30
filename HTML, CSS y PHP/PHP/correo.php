<?php

$destinatario = "kennethbret19@gmail.com";

if (isset($_POST['enviar'])){
    if (!empty($_POST['nombre']) && !empty($_POST['correo']) && !empty($_POST['asunto']) && !empty($_POST['mensaje'])){
        $name = $_POST["nombre"];
        $asunto = $_POST["asunto"];
        $correo = $_POST['correo'];
        $mensaje = $_POST['mensaje'];
        $header = "From:". "\r\n";
        $header .= "Reply-To: noreply@example.com". "\r\n";
        $header .= "X-Mailer: PHP/". phpversion();
        $mail = @mail($destinatario,$name,$asunto,$mensaje,$header);
        if ($mail){
            echo "<h4>¡Mail enviado exitosamente!</h4>";
        }
    }
}
?>