<div class="main-panel">
   <div class="content-wrapper">
      <div class="row">
         <div class="col-12">
            <div class="card">
               <div class="card-body">
                  <h4 class="card-title">Form Tambah Ruangan</h4>
                  <form class="forms-sample" action="../admin/module_founder/data_ruangan/aksi_simpan.php" method="post" enctype="multipart/form-data">
                     <input type="hidden" name="id_founder" value="<?php echo $id_user; ?>">
                     <div class="form-group">
                        <label for="nama_ruangan">Nama Ruangan</label>
                        <input type="text" class="form-control" id="nama_ruangan" name="nama_ruangan" placeholder="Nama Ruangan">
                     </div>
                     <div class="form-group">
                        <label>Gambar</label>
                        <div class="input-group mb-3">
                           <input type="file" id="gambar" name="gambar">
                        </div>
                     </div>
                     <div class="form-group">
                        <label for="jenis_ruangan">Kategori Ruangan</label>
                        <select class="form-control" id="jenis_ruangan" name="jenis_ruangan">
                           <option value="R01">Gedung</option>
                           <option value="R02">Kafe Perkotaan</option>
                           <option value="R03">Peggunungan</option>
                           <option value="R04">Pedesaan</option>
                           <option value="R05">Pesisir Pantai</option>
                        </select>
                     </div>
                     <div class="form-group ">
                        <label for="ukuran">Ukuran</label>
                        <code>*dalam satuan m2</code>
                        <input type="text" class="form-control" id="ukuran" name="ukuran" placeholder="999">
                     </div>
                     <div class="form-group">
                        <label for="kapasitas">Kapasitas Max Ruangan</label>
                        <select class="form-control" id="kapasitas" name="kapasitas">
                           <option value="5">5 orang</option>
                           <option value="10">10 orang</option>
                           <option value="15">15 orang</option>
                           <option value="20">20 orang</option>
                           <option value="25">25 orang</option>
                        </select>
                     </div>
                     <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <textarea class="form-control" id="alamat" name="alamat" rows="2"></textarea>
                     </div>
                     <div class="form-group">
                        <label for="deskripsi">Deskripsi</label>
                        <textarea class="form-control" id="deskripsi" name="deskripsi" rows="2"></textarea>
                     </div>
                     <button type="submit" class="btn btn-success mr-2">Submit</button>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </div>