<?php
// define variables and set to empty values
//$prenom = $name = $email = $sujet = $message = $tel = "";


// Fonction des errors : test_input
if (!empty($_POST)) {

  // Déclarer son tableau
  $errors = [];

  function test_input($data)
  {
    $test = array_map('trim', $data);
    $test = array_map('htmlspecialchars', $data);
    return $test;
  }

  $data = test_input($_POST);

  if (empty($data["prenom"])) {
    $errors['prenom'] = "Ton prénom est requis";
  }

  if (empty($data["name"])) {
    $errors['name'] = "Le nom est requis";
  }

  if (empty($data['email'])) {
    $errors['email'] = "L'email est requis";
  } else {
    if (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
      $errors['email'] = "L'email n'est pas valable";
    }
  }

  if (empty($data["tel"])) {
    $errors['tel'] = "Veuillez saisir votre numéro";
  }

  if (empty($data["sujet"])) {
    $errors['sujet'] = "Le choix du sujet est requis";
  }
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
  <?php if (empty($errors)) { ?>

    <p>Merci <?= $data["prenom"] . " " . $data["name"] ?> de nous avoir contacté à propos de “<?= $data["sujet"] ?> <br>

      Un de nos conseiller vous contactera soit à l’adresse <?= $data["email"] ?> <br>

      ou par téléphone au <?= $data["tel"] ?> dans les plus brefs délais pour traiter votre demande :

      <?= $data["message"] ?></p>

  <?php } else { ?>
    <ul>
      <?php foreach ($errors as $error) : ?>
        <li><?= $error ?></li>

      <?php endforeach; ?>
    </ul>
  <?php } ?>

</body>

</html>