<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="remarques.css">
    <link rel="shortcut icon" href="favicon/3812747-halloween-owl-spooky_109097.ico" type="image/x-icon">
    <title>Remarques</title>
</head>
<body>
    <div class="container-sm">
        <header>
            <h1 class="my-4">BlookWantsToKnow</h1>
            <em>"Life is  ....  you know what I'm meaning"</em>
        </header>

        <form class="mt-2 was-validated" method="post" action="helloPage.php">
            <div class="form-floating my-3">
                <input type="text" class="form-control form-control-md rounded-pill" id="firstname" name="firstname" placeholder="entrer votre nom" required>
                <label for="firstname" class="form-label">Nom:</label>
                <div class="invalid-feedback">Veuillez renseigner ce champ</div>
            </div>

            <div class="form-floating my-3">
                <input type="text" class="form-control form-control-md rounded-pill" id="name" name="name" placeholder="entrer votre prénom" required>
                <label for="name" class="form-label">Prénom(s):</label>
                <div class="invalid-feedback">Veuillez renseigner ce champ</div>
            </div>

            <div class="my-3">
                <select name="genre" id="genre" class="form-select rounded-pill" required>
                    <option value="male">Masculin</option>
                    <option value="female">Féminin</option>
                    <option value="indefine">Ne pas spécifier</option>
                </select>
                <div class="invalid-feedback">Veuillez renseigner ce champ</div>
            </div>

            <div class="my-3 form-floating">
                <input type="number" id="age" class="form-control rounded-pill" name="age" min="18" max="70" required>
                <label for="age" class="form-label">Votre âge</label>
                <div class="invalid-feedback">Veuillez renseigner ce champ</div>
            </div>

            <div class="my-3 input-group">
                <label for="email" class="form-label my-3">Email:&nbsp;</label>
                <span class="input-group-text"><img src="html/photos/gmail.png" alt="favicon gmail" width="40px"></span>
                <input class="form-control form-control-sm" type="email" name="email" id="email" placeholder="Entrer votre email" required>
                <div class="invalid-feedback">Veuillez renseigner ce champ</div>
            </div>

            <div class="my-3">
                <label for="range" id="form-label">Noter notre service:</label>
                <input type="range" id="range" class="form-range" step="10">
            </div>

            <div class="my-3 form-floating">
                <textarea name="comments" class="form-control form-control-sm" id="comments" cols="30" rows="40" placeholder="Entrer vos remarques" required></textarea>
                <label for="comments">Commentaires et remarques:&nbsp;</label>
                <div class="invalid-feedback">Veuillez renseigner ce champ</div>
            </div>

            <div class="my-3 btn-group ">
                <button type="submit" class="btn" name="send" >envoyer</button>
            </div>
        </form>

        <footer id="contact">
                  <div class="copyright">Copyright:IsThisMine</div>
        </footer>
    </div>
    <script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>