<?php
require_once 'app/models/UserHome.php';
class homeController {
    private $homeController;
    

    public function __construct($dbConnection) {
        $this->homeController = new home($dbConnection);
    }

    public function index() {
        $Barang = $this->homeController->tampilkan(); // Ambil semua data barang
        include 'app/views/home.php'; // Tampilkan view barang
    }
}
?>
