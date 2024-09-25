<?php

if (
    isset($_POST['mail'])
    && (isset($_POST['consulta']))
) {
    $success = false;

    if (
        !empty(strip_tags($_POST['mail'])) &&
        !empty(strip_tags($_POST['consulta']))
    ) {
        $to      = 'gigi@weareplanta.com';
        $subject = 'Mensaje dejado en Formulario de Contacto en thisisabortiontoo.org';
        $message = 'Recibiste un mensaje en tu sitio web con la siguiente informaci&oacute;n:<br>
		Consulta: ' . strip_tags($_POST['consulta']) . '<br>
		Mail: ' . strip_tags($_POST['mail']) . '<br>
		IP: ' . $_SERVER['REMOTE_ADDR'];

        $headers  = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        $headers .= "From: <noreply@thisisabortiontoo.org>" . "\r\n";

        if (mail($to, $subject, $message, $headers)) {
            $success = true;
        }
    }
}

?>


<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="msapplication-TileColor" content="#000000">
    <meta name="msapplication-TileImage" content="https://thisisabortiontoo.org/img/apple-icon-114x114.png">
    <meta name="theme-color" content="#000000">
    <meta name="description" content="Idea Start 2.0" />
    <meta property="og:image" content="https://thisisabortiontoo.org/img/ms-icon-310x310.png" />
    <meta property="og:image:type" content="image/png" />
    <meta property="og:image:width" content="600" />
    <meta property="og:image:height" content="600" />
    <meta property="og:description" content="This Is An Abortion Too…">
    <meta property="og:locale" content="es">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://thisisabortiontoo.org/" />
    <link rel="stylesheet" href="https://use.typekit.net/rim3dvc.css">
    <link rel="apple-touch-icon" sizes="57x57" href="img/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="img/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="img/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="img/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="img/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="img/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="img/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="img/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="img/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="img/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="img/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="img/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicon-16x16.png">
    <link rel="manifest" href="/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <script src="js/main.js?version=2"></script>
    <title>This Is Abortion Too…</title>
    <link rel="stylesheet" href="style.min.css?version=4">
</head>

<body>
    <header>

        <section class="postula-ahora-header">
            <a href="mailto:info@thisisabortiontoo.org" class="postulate-ahora" target="_blank">DONATE</a>
            <a href="#share" class="postulate-ahora" >SHARE YOUR STORY</a>
        </section>
    </header>

    <main>
      