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
            <label for="prenom">Prénom: </label>
            <input type="text" id="prenom" name="prenom" required>
        </div>

        <div>
            <label for="name">Nom :</label>
            <input type="text" id="name" name="name" required>
        </div>

        <div>
            <label for="tel">Téléphone :</label>
            <input type="text" id="tel" name="tel" required>
        </div>

        <div>
            <label for="email">Email :</label>
            <input type="email" id="email" name="email">
        </div>

        <div>
            <label for="sujet">Sujet :</label>
            <select name="sujet" id="sujet">
                <option disabled>Choisir un sujet</option> 
                <option value="cours">Demande de cours PHP</option>
                <option value="soutienphp">Demande de soutien PHP</option>
                <option value="soutcss">Demande de soutien CSS</option>
            </select>
            
        </div>
        
        <div>
            <label for="message">Message :</label>
            <textarea name="message" id="message" value="message" ></textarea required>
        </div>

        <div class="button">
            <button type="submit" name="submit">Submit </button>
        </div>
        <!----<?php var_dump($_POST);?>--->
        <!---<?php echo $_POST['name']; ?>--->
    </form>
</body>

</html>