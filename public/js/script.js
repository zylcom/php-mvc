$(function () {
  $(".tombolTambahData").on("click", function () {
    $("#formModaljudul").html("Tambah Data Produk");
    $(".modal-footer button[type=submit]").html("Tambah");
  });

  $(".tampilModalEdit").on("click", function () {
    $("#formModaljudul").html("Edit Data Produk");
    $(".modal-footer button[type=submit]").html("Edit");
    $(".modal-body form").attr(
      "action",
      "http://localhost/fazztrack/public/produk/ubah"
    );

    const id = $(this).data("id");

    $.ajax({
      url: "http://localhost/fazztrack/public/produk/getubah",
      data: { id: id },
      method: "post",
      dataType: "json",
      success: function (data) {
        console.log(data);
        $("#nama").val(data.nama_produk);
        $("#keterangan").val(data.keterangan);
        $("#harga").val(data.harga);
        $("#jumlah").val(data.jumlah);
        $("#id").val(data.id);
      },
    });
  });
});
