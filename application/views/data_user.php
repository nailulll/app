<div class="">
	<h3>Klik dibawah ini untuk menambah data</h3>
   <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-default">
      Tambah Data
  </button>
</div>
<br>
<br>
<div class="box">
   <div class="box-header">
      <h3 class="box-title">Data User</h3>
  </div>
  <div class="box-body no-padding">
      <table class="table table-condensed">
         <tr>
            <th>ID User</th>
            <th>Nama</th>
            <th>Aksi</th>
        </tr>
        <?php 
        foreach ($data_user as $tampilkan) {
            echo "<tr>";
            echo "<td>$tampilkan->id_user</td>";
            echo "<td>$tampilkan->nama</td>";
            echo "<td><a href='EditDataUser/$tampilkan->id_user'><button class='btn btn-success btn-xs'>Edit</button></a><button class='btn btn-danger btn-xs' type='button' onClick='hapus($tampilkan->id_user)'>Hapus</button></td>";
            echo "</tr>";
        }
        ?>
    </table>
</div>
</div>
<!-- MODAL TAMBAH DATA -->
<div class="modal fade" id="modal-default">
   <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header">
            <h4 class="modal-title">Tambah Data</h4>
        </div>
        <div class="modal-body">
            <form action="<?php echo base_url() ?>index.php/Welcome/simpanUser" method="POST">
               <input class="form-control input-lg" type="text" placeholder="Nama" name="nama">
               <br>
               <input class="form-control input-lg" type="text" placeholder="Username" name="username">
               <br>
               <input class="form-control input-lg" type="text" placeholder="Password" name="password">
               <br>
           </div>
           <div class="modal-footer">
               <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Tutup</button>
               <button type="submit" class="btn btn-success">Simpan</button>
           </div>
       </form>
   </div>
</div>
</div>
<!-- MODAL HAPUS-->
<div class="modal modal-danger fade" id="modal-danger">
   <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true"></span></button>
               <h4 class="modal-title">Peringatan</h4>
           </div>
           <form action="<?php echo base_url() ?>index.php/Welcome/hapusDataUser" method="POST" id="fromHapus">
               <input type="hidden" name="id_user" value="">
               <div class="modal-body">
                  <p>Apakah anda ingin menghapus data ini</p>
              </div>
              <div class="modal-footer">
                  <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Tutup</button>
                  <button type="submit" class="btn btn-outline">Iya</button>
              </div>
          </form>
      </div>
  </div>
</div>
<!-- SCRIPT MODAL -->
<script type="text/javascript">
  function hapus(id) {
     $('#fromHapus')[0].reset();
     $.ajax({
        url :"<?php echo base_url('index.php/Welcome/getIdUser') ?>/"+id,
        type:"GET",
        dataType:"JSON",
        success: function(data){
           $('[name="id_user"]').val(data.id_user);
           $('#modal-danger').modal('show');
       }
   });
 }
</script>
