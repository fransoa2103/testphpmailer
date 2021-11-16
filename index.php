<?php
    session_start();
    if (isset($_SESSION['send_email_true'])){
        if ($_SESSION['send_email_true'] == true){
            echo "<h3 style='color: green';>votre message a été envoyé avec succès!<h3>";
        }
        else {
            echo "<p style='color: red';>Echec à l'envoi. Merci de renouveler votre opération.</p>";
        }
        $_SESSION['send_email_true'] = false;
    }
    else {
        echo "<p style='color: blue';>Bienvenue sur votre formulaire mail</p>";
        $_SESSION['send_email_true'] = false;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>TEST PHPMAILER</h1>
    <form action="./mail.php" method="POST">
        <div style="font-weigh: bold; font-size: 1.5rem;">email destinataire</br><input type="email" id="email" name="email" placeholder="email destinataire"></div>
        <div style="font-weigh: bold; font-size: 1.5rem;">Sujet</br><input type="text" id="sujet" name="subject" placeholder="sujet du message"></div>
        <div style="font-weigh: bold; font-size: 1.5rem;">Votre message</br><textarea id="message" name="message" rows="5" cols="50" placeholder="message"></textarea></div>
        <div><input type="submit" value="submit"></div>
    </form>
</body>
</html>