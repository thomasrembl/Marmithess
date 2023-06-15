<?php include 'assets/partials/_header.php'; ?>


<?php 
$age = 18;
$note = 5;

if ($age >= 18) {
    echo "<p>Vous êtes majeur</p>";
} else {
    echo "<p>Vous êtes mineur</p>";
}

if ($note > 18 && $note <= 20) {
    echo "<p>Mention très bien</p>";
} elseif ($note >= 14) {
    echo "<p>mention bien</p>";
} elseif ($note >= 10) {
    echo "<p>diplome</p>";
} elseif ($note >= 8) {
    echo "<p>ratrapage</p>";
} elseif ($note <= 7 && $note >= 0) {
    echo "<p>tu es vraiment vraiment nul</p>";
} else {
    echo "<p>tu as rentré une note qui n'est pas possible</p>";
}


?>


<?php include 'assets/partials/_footer.php'; ?>