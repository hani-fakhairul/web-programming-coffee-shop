<?php
$namaProduk = "Cafe Latte";
$harga = 22000;
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Coffee Shop Khairul</title>
</head>
<body>

    <h1>Coffee Shop Khairul</h1>
    <h2><?php echo $namaProduk; ?></h2>
    <p>Harga: Rp <?php echo number_format($harga, 0, ',', '.'); ?></p>

</body>
</html>