<?php
require_once 'config/database.php';
require_once 'app/controllers/barangController.php';

// Koneksi ke database
//$dbConnection = getDBConnection();

// Membuat instance userController
//$controller = new barangController($dbConnection);

// Menampilkan semua pengguna
//$controller->index();



// Koneksi ke database
$dbConnection = getDBConnection();


// Route handling (you can expand this logic as needed)
// $page = isset($_GET['page']) ? $_GET['page'] : 'home'; // Default to home page

// switch ($page) {
//     case 'barang':
//         require_once 'app/controllers/barangController.php';
//         $controller = new barangController($dbConnection);
//         $controller->index(); // Display all barang
        
//         break;

//     case 'pelanggan':
//         require_once 'app/controllers/pelangganController.php';
//         $controller = new pelangganController($dbConnection);
//         $controller->index(); // Display all pelanggan
       
//         break;

//     case 'tambah_brg':
//         require_once 'app/controllers/barangController.php';
//         $controller = new barangController($dbConnection);
//         $controller->tambah();
//         break;

//     case 'tambah_plg':
//             require_once 'app/controllers/pelangganController.php';
//             $controller = new pelangganController($dbConnection);
//             $controller->tambah();
//             break;
   
//     case 'home':
//     default:
//         require_once 'app/controllers/homeController.php';
//         $controller = new homeController($dbConnection);
//         $controller->index(); // Display home
//         break;
// }


// Route handling
$page = $_GET['page'] ?? 'home'; // Default ke halaman home

switch ($page) {
    case 'barang':
        require_once 'app/controllers/barangController.php';
        $controller = new barangController($dbConnection);
        $controller->index(); // Tampilkan semua barang
        break;

    case 'pelanggan':
        require_once 'app/controllers/pelangganController.php';
        $controller = new pelangganController($dbConnection);
        $controller->index(); // Tampilkan semua pelanggan
        break;

    case 'tambah_brg':
        require_once 'app/controllers/barangController.php';
        $controller = new barangController($dbConnection);
        $controller->tambah(); // Form tambah barang
        break;

    case 'tambah_plg':
        require_once 'app/controllers/pelangganController.php';
        $controller = new pelangganController($dbConnection);
        $controller->tambah(); // Form tambah pelanggan
        break;

    case 'edit_barang':
        require_once 'app/controllers/barangController.php';
        $controller = new barangController($dbConnection);
        $kd_barang = $_GET['kd_barang'] ?? null;
        if ($kd_barang) {
            $controller->edit($kd_barang); // Edit barang
        }
        break;

    case 'delete_barang':
        require_once 'app/controllers/barangController.php';
        $controller = new barangController($dbConnection);
        $kd_barang = $_GET['kd_barang'] ?? null;
        if ($kd_barang) {
            $controller->delete($kd_barang); // Hapus barang
        }
        break;

    case 'edit_plg':
        require_once 'app/controllers/pelangganController.php';
        $controller = new pelangganController($dbConnection);
        $id_plg = $_GET['id_plg'] ?? null;
        if ($id_plg) {
            $controller->edit($id_plg); // Edit pelanggan
        }
        break;

    case 'delete_plg':
        require_once 'app/controllers/pelangganController.php';
        $controller = new pelangganController($dbConnection);
        $id_plg = $_GET['id_plg'] ?? null;
        if ($id_plg) {
            $controller->delete($id_plg); // Hapus pelanggan
        }
        break;

    case 'home':
    default:
        require_once 'app/controllers/homeController.php';
        $controller = new homeController($dbConnection);
        $controller->index(); // Tampilkan home
        break;
}
?>


