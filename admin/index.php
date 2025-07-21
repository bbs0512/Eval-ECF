<!DOCTYPE html>
<html lang="en" data-bs-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/bootstrapcss/bootstrap.css">
    <link rel="stylesheet" href="../assets/css/admin/admin-styles.css">
    <title>Connexion Administration</title>
</head>
<body class="d-flex align-items-center py-4 bg-body-tertiary">
    <main class="form-signin w-100 m-auto">
        <form action="includes/login.inc.php" method="post">
            <h1 class="h3 mb-3 fw-normal text-center">Connexion à l'administration</h1>
            <div class="mb-3">
                <label for="uid" class="form-label">Adresse email ou Nom</label>
                <input type="text" name="uid" class="form-control" id="uid" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">Accès uniquement réservé aux employés.</div>
            </div>
            <div class="mb-3">
                <label for="pwd" class="form-label">Mot de passe</label>
                <input type="password" name="pwd" class="form-control" id="pwd">
            </div>
            <button type="submit" name="submit" class="btn btn-primary w-100">Connexion</button>
        </form>
    </main>

    <script type="text/javascript" src="../assets/js/bootstrapjs/bootstrap.bundle.js"></script>
</body>
</html>