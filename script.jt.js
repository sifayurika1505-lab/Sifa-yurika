// Notifikasi saat menambah ke keranjang
function addedToCart(productName) {
    alert(productName + " berhasil ditambahkan ke keranjang!");
}

// Konfirmasi hapus item
function confirmDelete() {
    return confirm("Yakin ingin menghapus produk ini dari keranjang?");
}

// Validasi form checkout
function validateCheckout() {
    let name = document.getElementById("name").value;
    let address = document.getElementById("address").value;

    if (name.trim() === "" || address.trim() === "") {
        alert("Nama dan alamat wajib diisi!");
        return false;
    }

    alert("Pembayaran berhasil! Terima kasih telah berbelanja.");
    return true;
}

// UPDATE total harga (jika qty berubah)
function updateTotal(qtyId, price, totalId) {
    let qty = document.getElementById(qtyId).value;
    let total = qty * price;
    document.getElementById(totalId).innerText = "Rp " + total.toLocaleString();
}
