<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.typekit.net/owm1mgb.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="assets/style/style.css">

    <style>
        
    </style>
</head>
<body>
    <div class="alert"><i class="ri-alert-line"></i> Educationnal Project no responsive <i class="ri-alert-line"></i></div>
    <header style="position: sticky;top: 0;width: 100%;">
        <nav>
            <div class="toggle_btn">
                <i class="fa-solid fa-bars"></i>
            </div>
            <div><a href="index.php">Marmithess</a></div>
            <div>
                <form method="GET" action="recherche.php">
                    <input type="text" name="query" placeholder="Rechercher...">
                    <button type="submit"><i class="ri-search-line"></i></button>
                </form>
            </div>
            <div class="btn_head">
                <div><button class="btn_2">Mon panier</button></div>
                <div><button class="btn_1">connexion</button></div>
            </div>
            
            <div class="dropdown_menu ">
                <div class="content">
                    <div><a href="index.php">Accueil</a></div>
                    <div><a href="sucre.php">Sucré</a></div>
                    <div><a href="sale.php">Salé</a></div>
                    <div><a href="newplate.php">New plate</a></div>
                </div>
            </div>

            <!-- <div><a href="index.php">Logo</a></div>
            <div class="nav_link">
                <a href="conditions.php">Accueil</a>
                <a href="boucle.php">Sucré</a>
                <a href="array.php">Salé</a>
                <a href="fonction.php">Contact</a>
            </div> -->
        </nav>
        <div class="sub_head">
            <div class="sub_head-1"><a class="txt" href="#"><i class="ri-book-read-line"></i>Le magazine</a></div>
            <div class="sub_head-2"><a class="txt" href="#"><i class="ri-goblet-line"></i>Spécial apéro</a></div>
            <div class="sub_head-3"><a class="txt" href="#"><i class="ri-money-euro-circle-line"></i>Cusiner pas cher</a></div>
            <div class="sub_head-4"><a class="txt" href="#"><i class="ri-megaphone-line"></i>Actus</a></div>
            <div><a class="txt" href="#">Mieux manger</a></div>
            <div class="sub_head-5"><a class="txt" href="#">recette aléatoire</a></div>
        </div>
    </header>