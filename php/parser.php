<?php
if( isset($_POST['nume']) && isset($_POST['prenume']) && isset($_POST['nrtel']) && isset($_POST['mail']) && isset($_POST['tipfirma']) && isset($_POST['comentarii']) ){
	$nume = $_POST['nume']; // HINT: use preg_replace() to filter the data
    $prenume = $_POST['prenume'];
    $nrtel = $_POST['nrtel'];
    $tipfirma = $_POST['tipfirma'];
	$mail = $_POST['mail'];
	$comentarii = nl2br($_POST['comentarii']);
	$to = "scorppion2005@yahoo.com";	
	$from = $mail;
	$subject = 'Inscriere formular.';
	$message = '<b>Nume:</b> '.$nume.' '.$prenume.' <br><b>Mail:</b> '.$mail.' <br><b>Tipul firmei:</b> '.$tipfirma.' <p><b>Comentarii: </b>'.$comentarii.'</p>';
  
    $message = '<html><body>';
    $message .= '<img src="http://milie37.000webhostapp.com/img/MihaelaIlieLogoMic.jpg" alt="Mihaela Ilie" />';
    $message .= '<table rules="all" style="border: solid 3px #253340; border-radius: 2px; border-spacing: 0;" cellpadding="10">';
    $message .= "<tr><td  style='background: #E5E5E5; color: #081727; padding: 2px;'><strong>Nume:</strong> </td><td style='background: #081727; color: #E5E5E5; padding: 2px;'>".$nume." ".$prenume."</td></tr>";
    $message .= "<tr><td  style='background: #E5E5E5; color: #081727; padding: 2px;'><strong>Numar de telefon:</strong> </td><td style='background: #081727; color: #E5E5E5; padding: 2px;'>".$nrtel."</td></tr>";
    $message .= "<tr><td  style='background: #E5E5E5; color: #081727; padding: 2px;'><strong>Mail:</strong> </td><td style='background: #081727; color: #E5E5E5; padding: 2px;'>".$mail."</td></tr>";
    $message .= "<tr><td  style='background: #E5E5E5; color: #081727; padding: 2px;'><strong>Tipul de firma:</strong> </td><td style='background: #081727; color: #E5E5E5; padding: 2px;'>".$tipfirma."</td></tr>";
    $message .= "<tr><td  style='background: #E5E5E5; color: #081727; padding: 2px;'><strong>Comentarii:</strong> </td><td style='background: #081727; color: #E5E5E5; padding: 2px;'>".$comentarii."</td></tr>";
    $message .= "</table>";
    $message .= "</body></html>";
	$headers = "From: $from\n";
	$headers .= "MIME-Version: 1.0\n";
	$headers .= "Content-type: text/html; charset=iso-8859-1\n";
	if( mail($to, $subject, $message, $headers) ){
		echo "Succes";
	} else {
		echo "Mesajul nu s-a putut trimite. Va rugam incercati mai tarziu.";
	}
}
?>