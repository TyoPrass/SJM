<?php
// Tangkap parameter "page" dari URL


switch ($page) {
    case 'index':
        $title = "Dashboard";
        include 'indexpage/index.php';
        break;

    // <-- Data Customer -->    
    case 'customer':
        $title = "Data Customer";
        include 'modules/customer/customer.php';
        break;

    // <-- Data Source Problem -->
    case 'manage-source-problem':
        $title = "Manage Source Problem";
        include './manage-source-problem.php';
        break;

    case 'data-all-cust':
        if (!empty($add)) {
            include 'modules/data-all-cust/form.php'; 
        } elseif (!empty($edit)) {
            include 'modules/data-all-cust/form.php'; 
        }else {
            include 'modules/data-all-cust/view.php'; 
        }
        break;

    case 'model':
        include './model.php';
        break;

    // <-- Data Part -->    
    case 'datapart':
        $title = "Data Part";
        include 'modules/data-part/view.php';
        break;



    // <-- Resume Claim -->
    case 'resume-claim':
        include 'modules/resume/index.php';
        break;
    case 'add-form-resume':
        include 'modules/resume/add-form.php';
        break;


    default:
        $title = "Halaman Tidak Ditemukan";
        echo "<h2>Halaman tidak ditemukan</h2>";
        break;
}
