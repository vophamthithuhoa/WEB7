<!DOCTYPE html>
<html>
<head>
    <title>Product Discount Calculator</title>
    <link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
    <?php
        $ten = $_POST['product_description'];
        $gia = $_POST['list_price'];
        $giamGia = $_POST['discount_percent'];
        $soTienGiam = $gia * $giamGia / 100;
        $giaKhiGiam = $gia - $soTienGiam;
    ?>
    <main>
        <h1>This page is under construction</h1>

        <label>Product Description:</label>
        <span><?php echo $ten; ?></span><br>

        <label>List Price:</label>
        <span>$<?php echo number_format($gia, 2); ?></span><br>

        <label>Standard Discount:</label>
        <span><?php echo number_format($giamGia, 2); ?>%</span><br>

        <label>Discount Amount:</label>
        <span>$<?php echo number_format($soTienGiam, 2); ?></span><br>

        <label>Discount Price:</label>
        <span>$<?php echo number_format($giaKhiGiam, 2); ?></span><br>
    </main>
</body>
</html>