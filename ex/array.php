<?php include 'assets/partials/_header.php'; ?>

<h1>Les listes</h1>
<?php
    $fruits = array('pomme', 'poire', 'banane', 'fraise', 'framboise');
    echo "<ul>";
    foreach($fruits as $fruit) {
        echo "<li>$fruit</li>";
    }
    echo "</ul>";

    $prenom = array('Jean', 'Marc', 'Paul', 'Luc', 'Pierre', 'Thomas');
    $nom = array('Dupont', 'Durand', 'Dubois', 'Duchemin', 'Ducroc', 'Dufour');
    $age = array(20, 25, 30, 35, 40, 45);
    $metier = array('dev', 'designer', 'chef de projet', 'webmaster', 'webdesigner', 'webdev');
    $mail = array('test@gmail.com','test@gmail.com','test@gmail.com','test@gmail.com','test@gmail.com','test@gmail.com');

    for($i = 0; $i < 6; $i++) {
        echo "<p>Je m'appelle $prenom[$i] $nom[$i], j'ai $age[$i] ans, je suis $metier[$i] et mon mail est $mail[$i]</p>";
        echo "<br>";
    }
    $arrIdentity = [
        "nom" => "Grealish",
        "prenom" => "Jack",
        "age" => "27",
        "passion" => "Alcoolique",
        "metier" => "footbolleur",
        "email" => "ldc@gmail.com"
    ];
    
    
    
    echo "<p>Je suis {$arrIdentity["prenom"]}  {$arrIdentity["nom"]} et j'ai {$arrIdentity["age"]} ans, je suis {$arrIdentity["metier"]}, mais en réalité je suis {$arrIdentity["passion"]} et si vous avez besoin de moi contactez moi par mail {$arrIdentity["email"]}</p>";
    
    $cars =[
    [
        'name' => 'Aston Martin',
        'model' => 'DB9',
        'color' => 'black',
    ],
    [
        'name' => 'Lamborghini',
        'model' => 'Aventador',
        'color' => 'yellow'
    ],
    [
        'name' => 'Ferrarie',
        'model' => 'F40',
        'color' => 'red'
    ],
    [
        'name' => 'mcLaren',
        'model' => '720S Spider',
        'color' => 'orange'
    ]
    ];
    echo "<br>";
    echo $cars[0]['name'];
    echo "<br>";
    
    
?>

<h3>Voiture</h3>

<?php
echo "<br>";
    foreach($cars as $car) {
        echo "<p>La voiture est une {$car['name']} {$car['model']} de couleur {$car['color']}</p>";
        echo "<br>";
    }
?>
<?php include 'assets/partials/_footer.php'; ?>