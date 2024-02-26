<?
    // echo json_encode($_REQUEST);
    $data = $_POST;
    
    // $trimmedData = array_slice($data, 0, array_search('consult', array_keys($data)) + 1, true);
    unset($data['auth']);

    $postReq = [];
    $name = $_POST['name'];
    $surnname = $_POST['name'];
    $dir = $_POST['direc'];
    $floor = $_POST['floor'];
    $dep = $_POST['dep'];
    $cp = $_POST['cp'];
    $loc = $_POST['loc'];
    $prov = $_POST['prov'];
    $tel = $_POST['tel'];
    $email = $_POST['email'];
    $consult = $_POST['consult'];
    $g_recaptcha_response = $_POST['g-recaptcha-response'];


    $namePreg = "/[A-Za-z]{3,30}/";
    $surnamePreg = "/[A-Za-z]{3,30}/";
    $dirPreg = "/[A-Za-z][0-9]{3,30}/";
    $floorPreg = "/[0-9]{1,2}/";
    $depPreg = "/[A-Za-z]{1}/";;
    $cpPreg = "/[0-9]{4}/";
    $locPreg = "/[a-z A-Z][0-9]{3-30}/";
    $provPreg = "/[a-z A-Z][0-9]{3-30}/";
    $telPreg = "/[0-9]{8-12}/";
    $emailPreg = "/[a-zA-Z0-9._%+-]{1,64}@[a-zA-Z0-9.-]{1,64}[a-zA-Z]{2,5}$/";
    $consultPreg = "/^[a-zA-Z0-9\s]{3,300}$/";
    $g_recaptcha_responsePreg = "/^\S$/"

    // $telPreg = "/[0-9]{8,12}/";
    // var_dump(preg_match($telPreg,$tel));
?>
<div class="banner">
    <img src="./ASSETS/contacto.png" alt="cont-banner">
</div>
<main class="grac-main main">
    <h1>
        ¡CONSULTA ENVIADA!
    </h1>
    <h2>
    Gracias por su consulta, en breve nos pondremos en contacto con usted.
    </h2>
    <a href="/index.php?page=home">
        Volver a inicio
    </a>
</main>