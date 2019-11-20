
<?php

    extract($_POST);

    /*echo $nomprenom;
    echo $email;
    echo $telwhatsapp;
    echo $telephone;
    echo $typeSmartphone;
    echo $ville;
    echo $requete;*/

     // Plusieurs destinataires
     $to  = 'CPR.CIV@gmail.com'; // notez la virgule

     // Sujet
     $subject = 'Un client a besoin d\'aide';

     // message
     $message = '
     <html>
      <head>
       <title>Un client a besoin d\'aide</title>
      </head>
      <body>
      <h1>Nom et Prenom du client : '.$nomprenom.'</h1>
      <h4>Numéro Téléphone personnel : '.$telephone.'</h4>
      <h4>Numéro Whatsapp : '.$telwhatsapp.'</h4>
      <h4>Ville : '.$ville.'</h4>
      <h4>Type de Téléphone : '.$typeSmartphone.'</h4>
      <h4>Préoccupation du client : '.$requete.'</h4>
      </body>
     </html>
     ';

     // Pour envoyer un mail HTML, l'en-tête Content-type doit être défini
     $headers[] = 'MIME-Version: 1.0';
     $headers[] = 'Content-type: text/html; charset=iso-8859-1';

     // En-têtes additionnels
     $headers[] = 'From: Demande d\'aide <'.$email.'>';

     // Envoi
     mail($to, $subject, $message, implode("\r\n", $headers));
     header('location: index.php');
?>
