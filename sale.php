<?php include 'assets/partials/_header.php'; ?>
<h1>Salé</h1>
<?php include 'assets/utils/data_sale.php'; ?>
<div class="container">
    <?php  
        foreach ($platsSale as $plat) {
            echo "<div class='card'>";
            echo "<img src='".$plat['img']."' alt=''>";
            echo "<h2>".$plat['title']."</h2>";
            echo "<p>".$plat['description']."</p>";
            echo "<p>".$plat['category']."</p>";
            echo "</div>";
        }
    ?>
</div>
<?php include 'assets/partials/_footer.php'; ?>