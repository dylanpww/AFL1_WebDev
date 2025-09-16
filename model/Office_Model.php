<?php
require_once("DB.php");


    class Office_Model extends DB{
    
        public function getOffice()
    {
        $sql = "SELECT * FROM office";
        $result = $this->conn->query($sql);
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function create($alamat, $nama, $tahun_berdiri) {
        $stmt = $this->conn->prepare("INSERT INTO office (alamat, nama, tahun_berdiri) VALUES (?, ?, ?)");
        $stmt->bind_param("ssi", $alamat, $nama, $tahun_berdiri);
        return $stmt->execute();
    }

    public function update($id, $alamat, $nama, $tahun_berdiri){
        $stmt = $this->conn->prepare("UPDATE office SET alamat=?, nama=?, tahun_berdiri=? WHERE office_id=?");
        $stmt->bind_param("ssi", $alamat, $nama, $tahun_berdiri, $id);
        return $stmt->execute();
    }

    public function delete($id) {
        $stmt = $this->conn->prepare("DELETE FROM office WHERE office_id=?");
        $stmt->bind_param("i", $id);
        return $stmt->execute();
    }

    }

?>