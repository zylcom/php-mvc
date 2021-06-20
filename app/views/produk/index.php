<div class="row">
    <div class="col d-flex justify-content-center">
        <?php Flasher::flash(); ?>
    </div>
</div>

<h3 class="text-center">Daftar Produk</h3>
<div class="container w-50 mb-3">
    <form action="<?= BASE_URL; ?>/produk/cari" method="post">
        <div class="row">
            <div class="col">
                <div class="input-group shadow">
                    <input type="text" class="form-control" placeholder="Cari Produk" name="keyword" id="keyword">
                    <div class="input-group-append">
                        <button class="btn btn-outline-primary" type="submit" id="tombolCari">Cari</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
<div class="row justify-content-md-center">
    <div class="col-6">
        <ol class="list-group list-group-numbered">
            <?php foreach ($data["prdk"] as $prdk) : ?>
                <li class="list-group-item d-flex justify-content-between shadow">

                    <div class="ms-2 me-auto fw-bold">
                        <?= $prdk['nama_produk'] ?>
                    </div>

                    <div class="d-flex">
                        <div class="p-1">
                            <a href="<?= BASE_URL; ?>/produk/detail/<?= $prdk['id']; ?>" class="badge bg-primary text-decoration-none">
                                Detail
                            </a>
                        </div>
                        <div class="p-1">|</div>
                        <div class="p-1">
                            <a href="<?= BASE_URL; ?>/produk/detail/<?= $prdk['id']; ?>" class="badge bg-success text-decoration-none tampilModalEdit" data-bs-toggle="modal" data-bs-target="#formModal" data-id="<?= $prdk["id"]; ?>">
                                Edit
                            </a>
                        </div>
                        <div class="p-1">|</div>
                        <div class="p-1">
                            <a href="<?= BASE_URL; ?>/produk/hapus/<?= $prdk['id']; ?>" class="badge bg-danger text-decoration-none" onclick="return confirm('Yakin ingin menghapus data?')">
                                Hapus
                            </a>
                        </div>
                    </div>

                </li>
            <?php endforeach; ?>
        </ol>
    </div>
</div>

<div class="row">
    <div class="col d-flex justify-content-center">
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary shadow mt-3 tombolTambahData" data-bs-toggle="modal" data-bs-target="#formModal">
            Tambah Data Produk
        </button>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="formModaljudul" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="formModaljudul">Form Tambah Data</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <!-- form insert data -->
                <form action="<?= BASE_URL; ?>/Produk/tambah" method="post">
                    <input type="hidden" name="id" id="id">
                    <div class="form-group">
                        <label for="nama">Nama Produk</label>
                        <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan nama produk" required>
                    </div>

                    <div class="form-group">
                        <label for="floatingTextarea2">Keterangan</label>
                        <textarea class="form-control" placeholder="Masukkan keterangan" id="keterangan" style="height: 100px" name="keterangan"></textarea>
                    </div>

                    <div class="form-group">
                        <label for="harga">Harga</label>
                        <input type="number" class="form-control" id="harga" name="harga" placeholder="Masukkan harga" required>
                    </div>

                    <div class="form-group">
                        <label for="jumlah">Jumlah</label>
                        <input type="number" class="form-control" id="jumlah" name="jumlah" placeholder="Masukkan jumlah" min="1" required>
                    </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-primary">Tambah</button>
            </div>
            </form>
        </div>
    </div>
</div>