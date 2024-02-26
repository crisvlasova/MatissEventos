<?php
////// SENDMAIL ////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////
function sendmailBoxL($email, $subj, $mail_body, $type)
{
	$cuenta = "paulukkarina@hotmail.com";
	// $cuenta = "";
	require_once 'PHPMailer/PHPMailerAutoload.php';
	$mail = new PHPMailer;
	// $mail->isSendmail();
	$mail->IsHTML(true);
	$mail->setFrom($cuenta, '');
	$mail->addReplyTo($cuenta, '');
	$mail->addAddress($email, '');
	$mail->Subject = $subj;
	$mail->msgHTML($mail_body);

	if (!$mail->send()) {
		return "Mailer Error: " . $mail->ErrorInfo;
	} else {
		// return "Message sent!";
		return "Message sent!";
	}
}


// function DBconnect()
// {
// 	global $link;
// 	$db_host = 'localhost';
// 	$db_user = "madem";
// 	$db_pass = "ppa2em5ysh";
// 	$db_database = "madem";
// 	$link = mysqli_connect($db_host, $db_user, $db_pass, $db_database) or die('Unable to establish a NHT_DB connection');
// 	if (mysqli_connect_errno()) {
// 		printf("Mqsql Connect Error %s\n", mysqli_connect_error());
// 		exit();
// 	}
// 	mysqli_set_charset($link, "utf8");
// }

// function fetchProducts($ptype) {
// 	DBconnect();
// 	global $link;
// 	$data = Array();
// 	$query = "SELECT * FROM productos WHERE prodtype = '$ptype'";
// 	$result = mysqli_query($link, $query) or die("SQL error: getCateg()<b>$query</b><br>at line: " . __LINE__);
// 	if(!empty($result)) {
// 		while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
	
// 			$data[] = $row;
			
// 		}
		
// 		return $data;

// 	} else {
// 		return "no hay";
// 	}

// }

// function fetchProd($name)
// {
// 	DBconnect();
// 	global $link;
// 	$data = Array();
// 	$query = "SELECT * FROM productos WHERE product = '$name'";
// 	$result = mysqli_query($link, $query) or die("SQL error: getCateg()<b>$query</b><br>at line: " . __LINE__);

// 	while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {

// 		// echo json_encode($row);

//         $data[] = $row;

//     }

//     return $data;

// }