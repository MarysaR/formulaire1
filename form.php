<?php 
if (isset($_POST["name"])) {
$name = $_POST["name"];
if ($name != "") {
    $lastname = $_POST["lastname"];
    $sujet = $_POST["sujet"];
    $email = $_POST["email"];
    $tel = $_POST["tel"];
    $message = $_POST["message"];
}
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="thank.php" method="post">
        <div>
            <label for="name">Prénom</label>
            <input type="text" id="name" name="prénom" value="name" required>
        </div>

        <div>
            <label for="lastname">Nom</label>
            <input type="text" id="lastname" name="nom" value="lastname" required>
        </div>

        <div>
            <label for="email">E-mail</label>
            <input type="email" id="email" name="email" value="email" required>
        </div>

        <div>
            <label for="tel">Téléphone</label>
            <input type="tel" id="tel" name="tel" value="tel" required>
        </div>
        
        <div>
            <label for="sujet">Sujet</label>
            <select name="nom" id="3">
                <option disabled>Choisir un sujet</option> 
                <option>Demande de cours PHP</option>
                <option>Demande de soutien PHP</option>
                <option>Demande de soutien CSS</option>
            </select>
            
        </div>
        <div>
            <label for="message">Message</label>
            <textarea name="message" id="message" value="message" ></textarea required>
        </div>

        <div class="button">
            <button type="submit">Submit</button>
        </div>
        <!----<?php var_dump($_GET);?>--->
        <?php echo $_POST['name']; ?>
    </form>
</body>

</html>