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

        $body="$name <$email> te envia el siguiente mensaje:<br><br>
        $message";
        //mandar email
        sendEmail($subject,$body,$email,$name,html:true);


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
