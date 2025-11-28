<?php
session_start();
include "products.php";

if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

if (isset($_GET['add'])) {
    $id = $_GET['add'];
    $_SESSION['cart'][$id] = ($_SESSION['cart'][$id] ?? 0) + 1;
    header("Location: index.php");
}
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style.css">
    <title>Daftar Produk</title>
</head>
<body>

<h2>Daftar Produk Baju</h2>
<a href="cart.php">Lihat Keranjang (<?= array_sum($_SESSION['cart']) ?>)</a>

<hr>

<?php foreach ($products as $p): ?>
<div class="card">
    <img src="<?= $p['img'] ?>" width="150"><br>
    <b><?= $p['name'] ?></b><br>
    Rp <?= number_format($p['price'],0,',','.') ?><br><br>
    <a href="index.php?add=<?= $p['id'] ?>">
        <button>Tambah ke Keranjang</button>
    </a>
</div>
<?php endforeach; ?>

</body>
</html>
