<?php 

class Produk extends Controller
{
    public function index()
    {
        $data['judul'] = 'Produk';
        $data["prdk"] = $this->model("Produk_model")->getAllProduk();
        
        $this->view('templates/header', $data);
        $this->view('produk/index', $data);
        $this->view('templates/footer', $data);
    }

    public function detail($id)
    {
        $data['judul'] = 'Detail Produk';
        $data["prdk"] = $this->model("Produk_model")->getProdukById($id);
        
        $this->view('templates/header', $data);
        $this->view('produk/detail', $data);
        $this->view('templates/footer', $data);
    }

    public function tambah()
    {
        if ($this->model("Produk_model")->tambahDataProduk($_POST) > 0) {
            Flasher::setFlash("Berhasil", "ditambahkan", "success");
            header("Location: " . BASE_URL . "/produk");
            exit;
        } else {
            Flasher::setFlash("Gagal", "ditambahkan", "danger");
            header("Location: " . BASE_URL . "/produk");
            exit;
        }
    }

    public function hapus($id)
    {
        if ($this->model("Produk_model")->hapusDataProduk($id) > 0) {
            Flasher::setFlash("Berhasil", "dihapus", "success");
            header("Location: " . BASE_URL . "/produk");
            exit;
        } else {
            Flasher::setFlash("Gagal", "dihapus", "danger");
            header("Location: " . BASE_URL . "/produk");
            exit;
        }
    }

    public function getubah()
    {
        echo json_encode($this->model("Produk_model")->getProdukById($_POST["id"]));
    }

    public function ubah()
    {
        if ($this->model("Produk_model")->ubahDataProduk($_POST) > 0) {
            Flasher::setFlash("Berhasil", "diubah", "success");
            header("Location: " . BASE_URL . "/produk");
            exit;
        } else {
            Flasher::setFlash("Gagal", "diubah", "danger");
            header("Location: " . BASE_URL . "/produk");
            exit;
        }
    }

    public function cari()
    {
        $data["judul"] = "Daftar Produk";
        $data["prdk"] = $this->model("Produk_model")->cariDataProduk();

        $this->view("templates/header", $data);
        $this->view("produk/index", $data);
        $this->view("templates/footer", $data);
    }
}

?>