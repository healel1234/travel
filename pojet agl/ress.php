<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmation de Réservation</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h2>Confirmation de Réservation</h2>
        <p>Merci, <?= $_POST['name'] ?>, pour votre réservation.</p>
        <p>Nous avons enregistré votre email: <?= $_POST['email'] ?></p>
        <p>Votre billet d'avion pour <?= $_POST['flight'] ?> et votre hôtel à <?= $_POST['hotel'] ?> sont réservés.</p>
    </div>
</body>
</html>