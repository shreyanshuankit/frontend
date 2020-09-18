<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
</head>
<?php
include('../header/header.html');
?>

<body>

    <?php
    include('../homepage/slider.html');
    ?>

    <div style="padding:80px; ">
        <h2 style="margin-bottom: 3vh;font-weight: bold;">Today's Deal</h2>
        <?php
        include('../homepage/todaysDeal.html');
        ?>
    </div>

    <div style="background:#dedede; padding:80px">
        <h2 style="margin-bottom: 3vh;font-weight: bold;">Latest Featured Products</h2>
        <?php
        include('../homepage/LatestFeaturedProducts.html');
        ?>
    </div>

    <div style="padding:80px">
        <h2 style="margin-bottom: 3vh;font-weight: bold;">Bundled Products</h2>
        <?php
        include('../homepage/BundledProducts.html');
        ?>
    </div>
    <div style="padding:80px; background:#dedede;">

        <?php
        include('../homepage/LatestProducts.html');
        ?>
    </div>

</body>


<footer><?php
        include('../footer/footer.html');
        ?></footer>

</html>