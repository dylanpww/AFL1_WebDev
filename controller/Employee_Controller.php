<?php

require_once("../model/Employee_Model.php");
require_once("../model/Office_Model.php");

$employeeModel = new Employee_Model();

if (isset($_GET['action'])) {

    if ($_GET['action'] == 'delete' && isset($_GET['id'])) {
        $id_to_delete = $_GET['id'];
        $employeeModel->delete($id_to_delete);
        header("Location: ../index.php");
        exit;
    }
    if ($_GET['action'] == 'edit' && isset($_GET['id'])) {
        $id_to_edit = $_GET['id'];
        $employee = $employeeModel->getEmployeeById($id_to_edit);
        $officeModel = new Office_Model();
        $offices = $officeModel->getOffice();
        require_once('../view/editEmployee.php');
        exit;
    }
}

if (isset($_POST['addEmployee'])) {
    $employeeModel->create($_POST['nama'], $_POST['jabatan'], $_POST['usia'], $_POST['office_id']);
    header("Location: ../index.php");
    exit;
}


if (isset($_POST['updateEmployee'])) {
    $employeeModel->update(
        $_POST['employee_id'],
        $_POST['nama'],
        $_POST['jabatan'],
        $_POST['usia'],
        $_POST['office_id']
    );
    header("Location: ../index.php");
    exit;
}

?>