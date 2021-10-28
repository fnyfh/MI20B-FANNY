<?php
// error_reporting(0);
$con = new mysqli("localhost", "root", "", "dbsuratfanny");

$tgl = date('d F Y');
$id = $_GET['id'];
$query = mysqli_query($con, "SELECT * FROM tbl_surat where id = '$id'");
$isi = $query->fetch_assoc();
if ($isi['jenis_surat'] == 1) {
  $js = 'SURAT KEPUTUSAN';
} else if ($isi['jenis_surat'] == 2) {
  $js = 'SURAT PERNYATAAN';
} else if ($isi['jenis_surat'] == 3) {
  $js = 'SURAT PEMINJAMAN';
} else {
  $js = 'Jenis Surat Tidak Terdaftar';
}

?>

<!DOCYTYPE html>
  <html>

  <head>
    <title>Update Surat</title>
    <!-- <link rel="stylesheet" href="../asset/css/bootstrap.min.css"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </head>

  <body>
    <div class="container">
      <row>
        <div class="card">
          <h2 align="center">Tambah Surat</h2>
          <div class="card-body">
            <form class="row g-3" method="post" action="edit.php?id=<?php echo $isi['id'] ?>" name="form1">
              <div class="col-md-12">
                <input type="hidden" class="form-control" name="id" value="<?php echo $isi['id'] ?>">
              </div>
              <div class="col-md-6">
                <label for="noSurat" class="form-label">Nomor Surat</label>
                <input type="text" class="form-control" name="noSurat" value="<?php echo $isi['no_surat'] ?>">
              </div>
              <div class="col-md-4">
                <label for="jenisSurat" class="form-label">Jenis Surat</label>
                <select id="jenisSurat" class="form-select" name="jenisSurat">
                  <option selected value="<?php echo $isi['jenis_surat'] ?>"><?php echo $js ?></option>
                  <option value="1">Surat Keputusan</option>
                  <option value="2">Surat Pernyataan</option>
                  <option value="3">Surat Peminjaman</option>
                </select>
              </div>
              <div class="col-md-6">
                <label for="tglSurat" class="form-label">Tanggal Surat</label>
                <input type="date" class="form-control" name="tglSurat" value="<?php echo $isi['tgl_surat'] ?>">
              </div>
              <div class="col-12">
                <label for="ttdSurat" class="form-label">Pembuat Surat</label>
                <input type="text" class="form-control" name="ttdSurat" value="<?php echo $isi['ttd_surat'] ?>">
              </div>
              <div class="col-md-6">
                <label for="ttdMengetahui" class="form-label">TTD Mengetahui</label>
                <input type="text" class="form-control" name="ttdMengetahui" value="<?php echo $isi['ttd_mengetahui'] ?>">
              </div>
              <div class="col-md-6">
                <label for="ttdMenyetujui" class="form-label">TTD Menyetujui</label>
                <input type="text" class="form-control" name="ttdMenyetujui" value="<?php echo $isi['ttd_menyetujui'] ?>">
              </div>
              <div class="col-1">
                <button type="submit" class="btn btn-primary" name="update">Update</button>
              </div>
              <div class="col-1">
                <button type="submit" class="btn btn-danger" name="batal">Cancel</button>
              </div>
            </form>
          </div>
        </div>
      </row>
    </div>
    <?php
    if (isset($_POST['update'])) {
      $id = $_POST['id'];
      $no_surat = $_POST['noSurat'];
      $jenis_surat = $_POST['jenisSurat'];
      $tgl_surat = $_POST['tglSurat'];
      $ttd_surat = $_POST['ttdSurat'];
      $ttd_mengetahui = $_POST['ttdMengetahui'];
      $ttd_menyetujui = $_POST['ttdMenyetujui'];

      $result = mysqli_query($con, "UPDATE tbl_surat SET `no_surat`='$no_surat',
      `jenis_surat`='$jenis_surat',`tgl_surat`='$tgl_surat',`ttd_surat`='$ttd_surat',`ttd_mengetahui`='$ttd_mengetahui',
      `ttd_menyetujui`='$ttd_menyetujui'
      where `id` = '$id'");

      echo "Surat updated successfully, <a href='view2.php'>List Surat</a>";
      header("Location:view2.php");
    }
    ?>
  </body>
  <!-- <script src="../asset/js/bootstrap.min.js"></script> -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

  </html>