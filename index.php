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
        <div style="font-weigh: bold; font-size: 1.5rem;">password</br><input type="password" id="password" name="password" placeholder="mdp de l'expediteur"></div>
        <div><input type="submit" value="submit"></div>
    </form>
</body>
</html>