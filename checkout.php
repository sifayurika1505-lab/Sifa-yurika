<?php
session_start();
include "products.php";

$grandTotal = 0;
foreach ($_SESSION['cart'] as $id => $qty) {
    $grandTotal += $products[$id - 1]['price'] * $qty;
}
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style.css">
    <title>Checkout</title>
</head>
<body>

<h2>Checkout Pembayaran</h2>

<p>Total yang harus dibayar:</p>
<h3>Rp <?= number_format($grandTotal) ?></h3>

<form method="POST" action="thankyou.php" onsubmit="return validateCheckout()">
    <label>Nama Pelanggan</label><br>
    <input type="text" required><br><br>

    <label>Alamat</label><br>
    <textarea required></textarea><br><br>
    <button type="submit">Bayar Sekarang</button> kode nya masukin
</form>
</body>
</html>
