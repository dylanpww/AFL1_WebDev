<?php 
    require_once("../model/Office_Model.php");

    $officeModel = new Office_Model();

    if (isset($_POST['addOffice'])) {
    $officeModel->create($_POST['alamat'], $_POST['nama'], $_POST['tahun_berdiri']);
    header("Location: ../index.php");
    exit;
}
?>