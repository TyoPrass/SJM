<?php
// Tangkap parameter 'page' dari URL
$page = isset($_GET['page']) ? $_GET['page'] : 'dashboard';

// Tentukan file yang akan di-include berdasarkan parameter
switch ($page) {
    case 'dashboard':
        $title = 'dashboard';
        include 'View/dashboard.php';
        break;
    case 'customer':
        $title = 'customer';
        include 'modules/customer/customer.php';
        break;
    case 'part-project':
        $title = 'part';
        include 'modules/part/halo.php';
        break;
    case 'proses':
        $title = 'proses';
        include 'modules/proses/proses.php';
        break;
    case 'trial-report':
        $title = 'trial&report';
        include 'modules/trial/trial.php';
        break;
    default:
        echo "Halaman tidak ditemukan!";
        break;
}
?>