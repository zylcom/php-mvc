<?php

class Produk_model
{
    private $table = " produk ",
        $db;

    public function __construct()
    {
        return $this->db = new Database();
    }

    public function getAllProduk()
    {
        $this->db->query("SELECT * FROM" . $this->table);

        return $this->db->resultSet();
    }

    public function getProdukById($id)
    {
        $this->db->query("SELECT * FROM" . $this->table . "WHERE id=:id");
        $this->db->bind("id", $id);

        return $this->db->single();
    }

    public function tambahDataProduk($data)
    {
        $this->db->query("INSERT INTO" . $this->table . "VALUES ('', :nama, :keterangan, :harga, :jumlah)");
        $this->db->bind("nama", $data["nama"]);
        $this->db->bind("keterangan", $data["keterangan"]);
        $this->db->bind("harga", $data["harga"]);
        $this->db->bind("jumlah", $data["jumlah"]);
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function hapusDataProduk($id)
    {
        $this->db->query("DELETE FROM" . $this->table . "WHERE id=:id");
        $this->db->bind("id", $id);
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function ubahDataProduk($data)
    {
        $this->db->query("UPDATE" . $this->table . "SET nama_produk = :nama, keterangan = :keterangan, harga = :harga, jumlah = :jumlah WHERE id=:id");
        $this->db->bind("nama", $data["nama"]);
        $this->db->bind("keterangan", $data["keterangan"]);
        $this->db->bind("harga", $data["harga"]);
        $this->db->bind("jumlah", $data["jumlah"]);
        $this->db->bind("id", $data["id"]);
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function cariDataProduk()
    {
        $keyword = $_POST["keyword"];
        $query = "SELECT * FROM " . $this->table . " 
        WHERE 
        nama_produk LIKE :keyword OR
        keterangan LIKE :keyword OR
        harga LIKE :keyword OR
        jumlah LIKE :keyword";
        $this->db->query($query);
        $this->db->bind("keyword", "%$keyword%");

        return $this->db->resultSet();
    }
}
