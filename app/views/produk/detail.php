<div class="row justify-content-md-center">
    <div class="col-md-4">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title"><?= $data['prdk']['nama_produk'] ?></h5>
                <h6 class="card-subtitle mb-2 text-muted">Harga: <?= $data['prdk']['harga'] ?></h6>
                <h6 class="card-subtitle mb-2 text-muted">Jumlah: <?= $data['prdk']['jumlah'] ?></h6>
                <p class="card-text"><?= $data['prdk']['keterangan'] ?></p>
                <a href="<?= BASE_URL ?>/produk" class="card-link">Kembali</a>
            </div>
        </div>
    </div>
</div>