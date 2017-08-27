<?php
session_start();
// menghapus session tertentu
unset($_SESSION['status_login']);

// menghapus semua session aktif
session_destroy();
?>
