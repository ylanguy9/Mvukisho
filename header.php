<?php
$current_page = basename($_SERVER['PHP_SELF']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Document</title>
</head>
<body>
    <header>
    <div class="image">
       <a href="index.php"><img src="./assets/photos/logo MYM.png" alt="logo"></a> 
    </div>
    <nav>
        <a href="Qsn.php" class="nav-link <?= $current_page == 'Qsn.php' ? 'active' : '' ?>">Qui sommes nous</a>
        <a href="FAQ.php" class="nav-link <?= $current_page == 'FAQ.php' ? 'active' : '' ?>">FAQ</a>
        <a href="actualites.php" class="nav-link <?= $current_page == 'actualites.php' ? 'active' : '' ?>">Actualités</a>
        <a href="contact.php" class="nav-link <?= $current_page == 'contact.php' ? 'active' : '' ?>">Contact</a>
        <a href="adhesion.php" class="nav-link <?= $current_page == 'adhesion.php' ? 'active' : '' ?>"><button>Adhésion</button></a>
        <a href="don.html" class="nav-link <?= $current_page == 'don.html' ? 'active' : '' ?>"><button>Don</button></a>
        
    </nav>
</header>
</body>
</html>




    

