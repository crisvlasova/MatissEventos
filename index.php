<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matiss Eventos</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
    </link>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="shortcut icon" href="./ASSETS/favicon.ico" type="image/png">
    <script src="functions.php"></script>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <?
    global $mode;
    $mode = 0;
    ?>
    
</head>

<body style="background-color:<?= $mode == 0 ? 'var(--azul1)' : 'var(--piel1)' ?>">


    <?
    // DBconnect();
    // echo $_SERVER['HTTP_HOST'];
    require('functions.php');
    require('header.php');
    require('home.php');
    require('servicios.php');
    require('galeria.php');
    require('contacto.php');

    ?>
    <?php
    $reqArray = $_REQUEST;
    function alert($msg)
    {
        echo "<script type='text/javascript'>alert('$msg');</script>";
    }

    if ($_REQUEST['name'] and $_REQUEST['surname'] and $_REQUEST['direc'] and $_REQUEST['floor'] and $_REQUEST['dep'] and $_REQUEST['cp'] and $_REQUEST['loc'] and $_REQUEST['prov'] and $_REQUEST['tel'] and $_REQUEST['email'] and $_REQUEST['consult']) {

        $_REQUEST['auth'] = false;

        $name = $_REQUEST['name'];
        $surname = $_REQUEST['surname'];
        $direc = $_REQUEST['direc'];
        $floor = $_REQUEST['floor'];
        $dep = $_REQUEST['dep'];
        $cp = $_REQUEST['cp'];
        $loc = $_REQUEST['loc'];
        $prov = $_REQUEST['prov'];
        $tel = $_REQUEST['tel'];
        $email = $_REQUEST['email'];
        $consult = $_REQUEST['consult'];



        $subj = "Consulta por sitio WEB MADEM";
        $mail_body = "<p style='font-size: 15px;'><strong>Nombre</strong>: $name $surname.<br>
        <strong>Direcci&#243;n</strong>: $direc.<br>
        <strong>Depto.</strong>: $dep.<br>
        <strong>Piso</strong>: $floor.<br>
        <strong>CP</strong>: $cp.<br>
        <strong>Localidad</strong>: $loc.<br>
        <strong>Provincia</strong>: $prov.<br>
        <strong>Tel&#233;fono</strong>: $tel.<br>
        <strong>Consulta</strong>: $consult.</p>";

        $res = sendmailBoxL($email, $subj, $mail_body, "contact");

        if ($res !== "Message sent!") {
            alert("Ha ocurrido un error: $res");
            header('Location: https://madem.com.ar/index.php?page=home');
        }
        // else {
        //     alert("¡Consulta enviada exitosamente!");
        // }
    } else if ($_REQUEST['name2'] and $_REQUEST['surname2'] and $_REQUEST['tel2'] and $_REQUEST['email2'] and $_REQUEST['consult2'] and $_REQUEST['prod']) {

        $_REQUEST['auth'] = false;

        $name2 = $_REQUEST['name2'];
        $surname2 = $_REQUEST['surname2'];
        $tel2 = $_REQUEST['tel2'];
        $email2 = $_REQUEST['email2'];
        $consult2 = $_REQUEST['consult2'];
        $prod = $_REQUEST['prod'];



        $subj2 = "Consulta por sitio WEB MADEM";
        $mail_body2 = "<p style='font-size: 15px;'><strong>Nombre</strong>: $name2 $surname2.<br>
            <strong>Tel&#233;fono</strong>: $tel2.<br>
            <strong>Producto</strong>: $prod.<br>
            <strong>Consulta</strong>: $consult2.</p>";

        $res2 = sendmailBoxL($email2, $subj2, $mail_body2, "consult");

        if ($res2 !== "Message sent!") {
            alert("Ha ocurrido un error: $res2");
            header('Location: https://madem.com.ar/index.php?page=home');
        }
        // else {
        //     alert("¡Consulta enviada exitosamente!");
        // }
    }
    ;

    ?>


    <a href="https://api.whatsapp.com/send?phone=5491124596656" rel="noopener noreferer" target="_blank"
        style="position: fixed;top: 90%;right: 1%;z-index: 10">
        <img src="./ASSETS/whatsapp.png" alt="whatsapp" style="width: 50px;">
    </a>
    <? require('footer.php') ?>
</body>

</html>