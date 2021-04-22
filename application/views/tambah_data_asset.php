<div class="box box-primary">
    <div class="box-header with-border">
      <h3 class="box-title">Tambah Data Asset</h3>
  </div>
  <div class="box-body">
    <form action="<?php echo base_url() ?>index.php/Welcome/simpanAsset" method="POST">
      <input class="form-control input-lg" type="text" placeholder="Nama Barang" name="nama_barang">
      <br>
      <input class="form-control input-lg" type="text" placeholder="Jumlah" name="jumlah">
      <br>
      <input class="form-control input-lg" type="text" placeholder="Kondisi" name="kondisi">
      <br>
      <input class="form-control input-lg" type="text" placeholder="Keterangan" name="keterangan">
      <br>
  </div>
</div>
<div class="btn">
  <button class="btn btn-primary btn-md">Tambah Data</button>
</div>
  </form>