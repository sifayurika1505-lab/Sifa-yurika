<?php
session_start();
include "products.php";

if (isset($_GET['add'])) {
    $id = $_GET['add'];
    $_SESSION['cart'][$id]++;
}

if (isset($_GET['min'])) {
    $id = $_GET['min'];
    $_SESSION['cart'][$id]--;
    if ($_SESSION['cart'][$id] <= 0) unset($_SESSION['cart'][$id]);
}

if (isset($_GET['del'])) {
    unset($_SESSION['cart'][$_GET['del']]);
}
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style.css">
    <title>Keranjang Belanja</title>
</head>
<body>

<h2>Keranjang Belanja</h2>
<a href="index.php">Kembali ke Produk</a>
<hr>

<?php if (empty($_SESSION['cart'])): ?>
    <p>Keranjang masih kosong.</p>
<?php else: ?>

<table border="1" cellpadding="10" cellspacing="0">
<tr>
    <th>Produk</th>
    <th>Qty</th>
    <th>Harga</th>
    <th>Total</th>
    <th>Aksi</th>
</tr>

<?php
$grandTotal = 0;
foreach ($_SESSION['cart'] as $id => $qty):
    $p = $products[$id - 1];
    $total = $p['price'] * $qty;
    $grandTotal += $total;
?>
<tr>
    <td><?= $p['name'] ?></td>
    <td><?= $qty ?></td>
    <td><?= number_format($p['price']) ?></td>
    <td><?= number_format($total) ?></td>
    <td>
        <a href="cart.php?add=<?= $id ?>">+</a> |
        <a href="cart.php?min=<?= $id ?>">-</a> |
        <a href="cart.php?del=<?= $id ?>">Hapus</a>
    </td>
</tr>
<?php endforeach; ?>
</table>

<h3>Total Belanja: Rp <?= number_format($grandTotal) ?></h3>

<a href="checkout.php"><button>Checkout</button></a>

<?php endif; ?>

</body>
</html>
