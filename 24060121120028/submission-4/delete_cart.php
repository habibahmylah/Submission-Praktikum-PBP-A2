<?php 
// File         : delete_cart.php
// Deskripsi    : untuk menghapus session

// TODO 1: Inisialisasi data session
session_start();
if (isset($_SESSION['cart'])){
    unset($_SESSION['cart']);
}

header('Location: show_cart.php');
// TODO 2: Hapus session

// TODO 3: Redirect ke halaman show_cart.php
?>