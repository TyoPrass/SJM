<?php
// Tangkap parameter 'page' dari URL
$page = isset($_GET['page']) ? $_GET['page'] : 'dashboard';

// Tentukan file yang akan di-include berdasarkan parameter
switch ($page) {
    case 'dashboard':
        include 'View/dashboard.php';
        break;
    case 'customer':
        include 'modules/customer.php';
        break;
    case 'part-project':
        include 'modules/halo.php';
        break;
    case 'proses':
        include 'modules/proses.php';
        break;
    case 'trial-report':
        include 'modules/trial.php';
        break;
    default:
        echo "Halaman tidak ditemukan!";
        break;
}
?>