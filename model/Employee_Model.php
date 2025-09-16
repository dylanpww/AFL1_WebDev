<?php
require_once("DB.php");

class Employee_Model extends DB
{

    public function getEmployee()
    {
        $sql = "SELECT e.*, o.nama AS office_nama, e.usia
            FROM employee e 
            LEFT JOIN office o ON e.office_id = o.office_id";

        $result = $this->conn->query($sql);
        return $result ? $result->fetch_all(MYSQLI_ASSOC) : [];
    }

    public function create($nama, $jabatan, $usia, $office_id)
    {
        $stmt = $this->conn->prepare("INSERT INTO employee (nama, jabatan, usia, office_id) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssii", $nama, $jabatan, $usia, $office_id);
        return $stmt->execute();
    }

    public function update($id, $nama, $jabatan, $usia, $office_id)
    {
        $stmt = $this->conn->prepare("UPDATE employee SET nama=?, jabatan=?, usia=?, office_id=? WHERE employee_id=?");
        $stmt->bind_param("ssiii", $nama, $jabatan, $usia, $office_id, $id);
        return $stmt->execute();
    }

    public function delete($id)
    {
        $stmt = $this->conn->prepare("DELETE FROM employee WHERE employee_id=?");
        $stmt->bind_param("i", $id);
        return $stmt->execute();
    }

    public function getEmployeeById($id)
    {
        $stmt = $this->conn->prepare("SELECT * FROM employee WHERE employee_id = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_assoc();
    }



}

?>