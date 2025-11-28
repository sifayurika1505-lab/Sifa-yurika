<?php
session_start();

// Hapus keranjang setelah transaksi selesai
unset($_SESSION['cart']);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Terima Kasih</title>
    <link rel="stylesheet" href="style.css">
    <style>
        .thanks-box {
            background: white;
            padding: 40px;
            margin: 50px auto;
            width: 450px;
            text-align: center;
            border-radius: 20px;
            box-shadow: 0 0 10px #bbb;
        }
        h1 {
            color: #4CAF50;
        }
        p {
            font-size: 18px;
        }
        a button {
            margin-top: 20px;
        }
    </style>
</head>
<body>

<div class="thanks-box">
    <h1>Terima Kasih!</h1>
    <p>Pesanan Anda telah berhasil diproses.</p>
    <p>Kami akan segera mengirimkan barang pesanan Anda.</p>
    <p><b>Terima kasih telah berbelanja di toko kami!</b></p>

    <a href="index.php"><button>Kembali ke Halaman Produk</button></a>
</div>

</body>
</html>
