<?php include '../app/views/templates/header.php'; ?>
<div class="col-md-6">
          <div class="card card-primary">
            <div class="card-body">
            	<form action="<?= urlTo('/kelas/store'); ?>" method="post">
              <div class="form-group">
                <label for="nama_kelas">Nama Kelas</label>
                <input type="text" id="nama_kelas" name="nama_kelas" class="form-control" required>
              </div>

              <div class="form-group">
                <label for="kompetensi_keahlian">Kompetensi Keahlian</label>
                <input type="text" id="kompetensi_keahlian" name="kompetensi_keahlian" class="form-control" required>
              </div>

              <div class="form-group">
                <a href="<?= urlTo('/kelas'); ?>" class="btn btn-danger">Batal</a>
                <button type="submit" class="btn btn-primary float-right">Tambah Data</button>
              </div>
              </form>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
<?php include '../app/views/templates/footer.php'; ?>