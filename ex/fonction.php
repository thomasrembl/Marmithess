<?php include 'assets/partials/_header.php'; ?>
<h1>Fonction</h1>

<?php 
$a= [''];
$b= [''];
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $a = $_POST["a"];
    $b = $_POST["b"];
    addition($a, $b);
}
$nom = "Jean";

function direBonjour($nom) {
    echo "<p>Bonjour $nom</p>";
}

direBonjour($nom);

function addition($a, $b) {
    $resultat = $a + $b;
    echo "<p>Le résultat est $resultat</p>";
}

?>
<form method="POST" action="" class="form">
    <label for="mot">Veuillez renseigner un mot a :</label>
    <input require type="text" name="a" id="a">
    <label for="mot">Veuillez renseigner un mot b :</label>
    <input require type="text" name="b" id="b">
    <input type="submit" value="Envoyer">
</form>
<style>
    .form {
        display: flex;
        flex-direction: column;
        width: 50%;
        margin: auto;
    }
</style>

<h2>TP 1</h2>

<form method="POST" action="" class="form">
    <label for="mot">Entre ton nom :</label>
    <input require type="text" name="name" id="name">
    <label for="mot">entre ton age :</label>
    <input require type="text" name="age" id="age">
    <input type="submit" value="Envoyer">
</form>
<?php 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $age = $_POST["age"];
    
    authValidate($name, $age);
}

function authValidate($name, $age) {
    if ($age < 18) {
        echo "<p>Bonjour $name tu est trop jeune</p>";
    } else {
        echo "<p>Bonour $name tu peux rentrer</p>";
    }
}


?>

<?php include 'assets/partials/_footer.php'; ?>