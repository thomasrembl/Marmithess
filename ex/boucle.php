<?php include 'assets/partials/_header.php'; ?>

<h1>Les boucles</h1>
<?php
    $note = 10;
    while ($note <= 15) {
        echo "<p>La note est de $note</p>";
        $note++;
    }
    for($age = 0; $age < 18; $age++) {
        echo "<p>Vous avez $age ans</p>";
    }
?>

<h2>Tp boucles</h2>
<?php
    for($i = 0; $i < 10; $i++) {
        echo "<p>Je suis dev junior $i</p>";
    }
    $v=0;
    while ($v < 10) {
        echo "<p>Je suis dev junior. $v</p>";
        $v++;
    }
?>

<?php include 'assets/partials/_footer.php'; ?>