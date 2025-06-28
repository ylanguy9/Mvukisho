<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css" />
    <title>Document</title>
</head>
<body>
     <?php include "./header.php"; ?>

     <ul class="accordeon">
        <li>
            <input type="radio" name="accordeon" id="first" checked>
            <label class="questions" for="first">Comment devenir membre ? </label>
            <div class="content">
                <p>Il suffit de nous contacter via nos réseaux et nous communiquer un numéro de téléphone. Ensuite vous recevrez un appel d'un des membres du bureau pour un échange téléphonique dans le but de vous présenter l'association et de discuter de vos motivations à rejoindre l'association
</p>

            </div>
        </li>
        <li>
            <input type="radio" name="accordeon" id="second">
            <label class="questions" for="second">Comment être partenaire de l'association ?</label>
            <div class="content">
                <p>Il suffit de nous contacter via nos réseaux et nous communiquer un numéro de téléphone, le nom de l'organisme avec les thématiques abordés zu sein de l'organisme. Ensuite vous recevrez un appel d'un des membres du bureau pour un échange téléphonique dans le but de vous présenter l'association et de discuter des motivations de votre structure à rejoindre l'association</p>

            </div>
        </li>
        <li>
            <input type="radio" name="accordeon" id="third">
            <label class="questions" for="third">Puis-je être membre si je ne réside pas en ile-de-France ?</label>
            <div class="content">
                <p>Oui sans problème, nous comptons actuellement 7 ou 8 membres résidants aux Comores, 2 résidants à la réunion. 1 résidant en chine
</p>

            </div>
        </li>
        <li>
            <input type="radio" name="accordeon" id="fourth">
            <label class="questions" for="fourth">Comment puis-je aider </label>
            <div class="content">
                <p>L'association a régulièrement besoin d'aide pour la logistique des évènements que nous organisons, nous manquons de bénévoles compétents en communication et agile avec le numérique (création de flyer, montage vidéo...)</p>

            </div>
        </li>
     </ul>

     <?php include "./footer.php"?>
</body>
</html>