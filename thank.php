<?php
// define variables and set to empty values
$prenom = $name = $email = $sujet = $message = $tel = "";

$errors = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
}
if (empty($_POST["prenom"])) {
  $errors['prenom'] = "Ton prénom est requis";
} else {
  $prenom = test_input($_POST["prenom"]);
}

if (empty($_POST["name"])) {
  $errors['name'] = "Le nom est requis";
} else {
  $name = test_input($_POST["name"]);
}

if (empty($_POST["email"])) {
}
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  $errors['email'] = "L'email n'est pas valable";
} else {
  $email = test_input($_POST["email"]);
}

if (empty($_POST["tel"])) {
  $errors['tel'] = "Veuillez saisir votre numéro";
} else {
  $tel = test_input($_POST["tel"]);
}

if (empty($_POST["sujet"])) {
  $errors['sujet'] = "Le choix du sujet est requis";
} else {
  $sujet = test_input($_POST["sujet"]);
}

function test_input($data)
{
  $data = trim($data);
  $data = htmlspecialchars($data);
  return $data;
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
  <?php if (empty($errors)) : ?>
    <p>Merci <?= $_POST["prenom"] . " " . $_POST["name"] ?> de nous avoir contacté à propos de “<?= $_POST["sujet"] ?> <br>

      Un de nos conseiller vous contactera soit à l’adresse <?= $_POST["email"] ?> <br>

      ou par téléphone au <?= $_POST["tel"] ?> dans les plus brefs délais pour traiter votre demande :

      <?= $_POST["message"] ?></p>
  <?php endif; ?>

  <?php 
        if (!empty($errors)) : ?>
        <ul>
            <?php foreach ($errors as $error) : ?>
                <li><?= $error ?></li>
                
            <?php endforeach; ?>
        </ul>
         <?php endif; ?>
</body>

</html>