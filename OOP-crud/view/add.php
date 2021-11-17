<?php
error_reporting(0);
include '../controller/Anggota.php';

$ctrl = new Anggota();
$query2 = $ctrl->getJenisData($id);
$query3 = $ctrl->getJenisData2($id);


// $query = mysqli_query($con, "SELECT * FROM tbl_jurusan");
// $query2 = mysqli_query($con, "SELECT * FROM tbl_jabatan");
// $result = $con->query($sql);

?>

<!DOCTYPE html>
<html>

<head>
  <title>Tambah Anggota</title>
  <!-- <link rel="stylesheet" href="../asset/css/bootstrap.min.css"> -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>

<body>
  <div class="container">
    <row>
      <div class="card">
        <h2 align="center">Tambah Anggota</h2>
        <div class="card-body">
          <form class="row g-3" method="post" action="<?php $ctrl->simpanData();?>" name="form1">
            <div class="col-md-6">
              <label for="noSurat" class="form-label">NIM</label>
              <input type="text" class="form-control" id="nim" name="nim" required>
            </div>
            <div class="col-md-6">
              <label for="nama" class="form-label">Nama Lengkap</label>
              <input type="text" class="form-control" id="nama" name="nama" required>
            </div>
            <div class="col-md-6">
              <label for="no_hp" class="form-label">NO HP</label>
              <input type="text" class="form-control" id="no_hp" name="no_hp" required>
            </div>
            <div class="col-md-6">
              <label for="alamat" class="form-label">Alamat</label>
              <input type="text" class="form-control" id="alamat" name="alamat" required>
            </div>
            <div class="col-md-6">
              <label for="jurusan" class="form-label">Jurusan</label>
              <select id="jurusan" class="form-select" name="jurusan" required>
                <option selected>Masukan Pilihan</option>
                <?php
                foreach ($query2 as $jurusan) {
                ?>
                  <option value="<?= $jurusan['id_jurusan'] ?>"><?= $jurusan['jurusan'] ?></option>
                <?php
                }
                ?>
              </select>
            </div>
            <div class="col-md-6">
              <label for="jabatan" class="form-label">Jabatan</label>
              <select id="jabatan" class="form-select" name="jabatan" required>
                <option selected>Masukan Pilihan</option>
                <?php
                foreach ($query3 as $jabatan) {
                ?>
                  <option value="<?= $jabatan['id_jabatan'] ?>"><?= $jabatan['jabatan'] ?></option>
                <?php
                }
                ?>
              </select>
            </div>
            <div class="d-grid gap-2 d-md-block">
              <button type="submit" class="btn btn-primary" name="tambah">Add</button>
              <a href="content.php" class="btn btn-danger" name="batal">Cancel</a>
            </div>
          </form>
        </div>
      </div>
    </row>
  </div>
  
</body>
<!-- <script src="../asset/js/bootstrap.min.js"></script> -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

</html>