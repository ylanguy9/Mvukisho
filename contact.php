<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="./style.css" />
  <link href="https://fonts.googleapis.com/css2?family=Fira+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
  <script src="https://cdn.tailwindcss.com"></script>
  <title>Formulaire de Contact</title>
</head>
<body class="bg-gray-50 text-gray-900">

  <?php include "./header.php"; ?>

  <section class="hero">
   <div class="image"> <img src="./assets/photos/maison des asso.png" alt=""></div>
  </section>

  <main class="flex flex-col items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
    <h1 class="titre-form">Formulaire de contact</h1>

    <!-- formulaire de contact -->
    <form action="https://formspree.io/f/mzzgyryw" class="form space-y-6 w-full max-w-xl bg-white p-8 rounded-lg shadow-md" method="POST">
      <div>
        <label for="nom" class="block text-sm font-medium">Nom</label>
        <input type="text" name="nom" id="nom" required class="mt-1 block w-full rounded-md border border-gray-300 px-4 py-2 focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
      </div>

      <div>
        <label for="prenom" class="block text-sm font-medium">Prénom</label>
        <input type="text" name="prenom" id="prenom" required class="mt-1 block w-full rounded-md border border-gray-300 px-4 py-2 focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
      </div>

      <div>
        <label for="mail" class="block text-sm font-medium">Adresse mail</label>
        <input type="email" name="mail" id="mail" required class="mt-1 block w-full rounded-md border border-gray-300 px-4 py-2 focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
      </div>

      <div>
        <label for="commentaire" class="block text-sm font-medium">Votre message</label>
        <textarea name="commentaire" id="commentaire" rows="5" required class="mt-1 block w-full rounded-md border border-gray-300 px-4 py-2 focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"></textarea>
      </div>

      <button name="submit" type="submit" class="w-full bg-black hover:bg-[#B7F4C7] text-white font-semibold py-2 px-4 rounded-md transition-colors">
        Envoyer
      </button>
    </form>


    <div class="contact-container mt-12 w-full max-w-6xl grid grid-cols-1 md:grid-cols-2 gap-8 items-start">
      <div class="map w-full">
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2623.1992802985105!2d2.2055600999999885!3d48.892539199999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e6648eeccd1cbf%3A0xdab1a0f31cc040d!2s15%20Rue%20du%2019%20Mars%201962%2C%2092000%20Nanterre!5e0!3m2!1sfr!2sfr!4v1750145321819!5m2!1sfr!2sfr"
          width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"
          referrerpolicy="no-referrer-when-downgrade"></iframe>
       
      </div>

      <div class="informations flex flex-col justify-center space-y-4">
        <h2 class="text-2xl font-semibold">Contactez-nous</h2>
        <p>Email : collectifmym@gmail.com</p>
        <p>Adresse : 15 Rue du 19 Mars 1962, 92000 Nanterre</p>
      </div>
    </div>
  </main>

  <?php include "./footer.php"; ?>
</body>
</html>
