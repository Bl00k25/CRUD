<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"><meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="remarques.css">
    <link rel="shortcut icon" href="favicon/3812747-halloween-owl-spooky_109097.ico" type="image/x-icon">
    <title>Hello</title>
</head>
<body>
<div id="centerPage">
    <?php require "denomination.php" ;
        $denomination = denomination::getDenomination($_POST['genre']) ;
    ?>
    <p>Bonjour , <?php echo "".$denomination." ".$_POST['firstname']." ." ?><br>Votre remarque a bien été prise en compte.</p>
    <div class="my-3 btn-group ">
        <a href="remarques.php">
            <button type="submit" class="btn">Retour</button>
        </a>
    </div>
</div>
</body>
</html>