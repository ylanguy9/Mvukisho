<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
ob_start();
session_start();
include "config/db.config.php";


?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
   <link rel="stylesheet" href="./style.css" />
  <title>Document</title>
</head>
<body class="bg-gray-100">

<!-- formulaire de connexion -->

    <?php include "./header.php"; ?>
  <div class="flex items-center justify-center min-h-screen px-4">
    <form class="space-y-6 w-full max-w-md bg-white p-6 rounded-lg shadow-md" method="POST">
      <div>
        <label for="username" class="block text-sm font-medium text-gray-900">Nom d'utilisateur</label>
        <div class="mt-2">
          <input type="text" name="username" id="username" autocomplete="username" required class="block w-full rounded-md bg-white px-3 py-2 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600">
        </div>
      </div>

      <div>
        <label for="password" class="block text-sm font-medium text-gray-900">Mot de passe</label>
        <div class="mt-2">
          <input type="password" name="password" id="password" autocomplete="current-password" required class="block w-full rounded-md bg-white px-3 py-2 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600">
        </div>
      </div>

      <div>
        <button name="submit" type="submit" class="w-full rounded-md bg-black px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-[#B7F4C7] focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
          Sign in
        </button>
      </div>
    </form>
  </div>

  <?php include "./footer.php"?>
</body>
</html>
