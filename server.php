<?php

require "mail.php";

// funcion para validar que el formulario no llego vacio al servidor
function validateData($name, $email, $subject, $message, $btnSend)
{
    return !empty(trim($name)) && !empty(trim($email)) && !empty(trim($subject)) && !empty(trim($message));
}

if (isset($_POST["btnSend"])) {
    if (validateData(...$_POST)) {
        $name = $_POST["name"];
        $email = $_POST["email"];
        $subject = $_POST["subject"];
        $message = $_POST["message"];

        $greeting = "<p style='text-align: justify;'><b>¡Hola!</b></p>";
        $thanks = "<p style='text-align: justify;'>Gracias por usar mi proyecto en Github para enviar correos electrónicos. Este correo fue generado a través de un proyecto creado en el lenguaje de programación PHP, el cual tiene como UNICO propósito <b>enseñar</b> cómo enviar correos reales desde el código.</p>";
        $response = "<p style='text-align: justify;'>El correo fue enviado por <b>$name</b>.<br>El asunto del mensaje es: <b>$subject</b>.<br>A continuación se muestra el contenido del mensaje:</p><p style='text-align: justify;'><i>$message</i></p>";
        $additionalInfo = "<p style='text-align: justify;'>Si recibes mensajes indiscriminados, ofensivos o demasiados correos electrónicos de este servicio, no dudes en escribirme a jcomte23@outlook.com y con mucho gusto te daré una solución.</p>
        <p style='text-align: justify;'>Si eres un programador y te gusto el proyecto visita https://github.com/jcomte23/ContactForm y regalame un click en 'Star'</p>";
        $closing = "<p style='text-align: justify;'>Te deseo una feliz vida y recuerda que <b><i>por encima de nosotros, solo están las estrellas</i><b>.</p>";
        $signature = "<p style='text-align: justify;'>Atentamente,<br>
        <b>Javier Cómbita Téllez</b><br>
        Jcomte23<br>
        https://github.com/jcomte23
        </p>";

        $body = "$greeting $thanks $response $additionalInfo $closing $signature";


        //mandar email
        sendEmail($subject, $body, $email, $name, html: true);


        $status = "success";
        echo '<form action="index.php" method="post" id="status-form">';
        echo '<input type="hidden" name="status" value="' . $status . '">';
        echo '</form>';
        echo '<script>document.getElementById("status-form").submit();</script>';
    } else {

        $status = "danger";
        echo '<form action="index.php" method="post" id="status-form">';
        echo '<input type="hidden" name="status" value="' . $status . '">';
        echo '</form>';
        echo '<script>document.getElementById("status-form").submit();</script>';
    }
} else {
    echo "el servidor no ha recibido ninguna peticion";
}
