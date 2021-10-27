<?php
error_reporting(0);
$con = new mysqli("localhost", "root", "", "dbsuratfanny");
$tgl = date('d F Y');

$sql = "SELECT * FROM tbl_surat";
$result = $con->query($sql);
?>

<!DOCYTYPE html>
  <html>

  <head>
    <title>View Surat - Database</title>
    <!-- <link rel="stylesheet" href="../asset/css/bootstrap.min.css"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </head>

  <body>
    <div class="container">
      <br>
      <h1>
        <center>LIST SURAT</center>
      </h1>
      <br>
      <table class="table table-bordered table-striped">
        <thead class="table-dark text-center">
          <td>No Surat</td>
          <td>Jenis Surat</td>
          <td>Tanggal Surat</td>
          <td>TTD Surat</td>
          <td colspan=2>ACTION</td>
        </thead>
        <tbody>
          <?php foreach ($result as $isi) { ?>
            <?php
            if ($isi['jenis_surat'] == 1) {
              $js = 'SURAT KEPUTUSAN';
            } else if ($isi['jenis_surat'] == 2) {
              $js = 'SURAT PERNYATAAN';
            } else if ($isi['jenis_surat'] == 3) {
              $js = 'SURAT PEMINJAMAN';
            } else {
              $js = "Jenis Surat Tidak Terdaftar";
            }
            ?>
            <tr>
              <td><?= $isi["no_surat"]; ?></td>
              <td><?= $js ?></td>
              <td><?= $isi["tgl_surat"]; ?></td>
              <td><?= $isi["ttd_surat"]; ?></td>
              <td><a href="edit.php?id=<?php echo $isi['id']; ?>">Edit</a></td>
              <td><a href="#" data-bs-toggle="modal" data-bs-target="#deletesurat<?php echo $isi['id']; ?>">Delete</a></td>
            </tr>
            <div class="example-modal">
              <div id="deletesurat<?php echo $isi['id'] ?>" class="modal fade" role="dialog" style="display: none;">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <form class="row g-3" method="post" action="delete.php" name="form1">
                      <div class="modal-header">
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times</span></button>
                        <h3 class="modal-title">Konfirmasi Delete Data Surat</h3>
                      </div>
                      <div class="modal-body">
                        <input type="hidden" class="form-control" name="id" value="<?php echo $isi['id']; ?>">
                        <h4 align="center">Apakah anda yakin ingin menghapus no surat <?php echo $isi['no_surat']; ?>
                          <strong><span class="grt"></span></strong>?
                        </h4>
                      </div>
                      <div class="modal-footer">
                        <button id="nodelete" type="button" class="btn btn-danger pull-left" data-bs-dismiss="modal">
                          Cancel</button>
                        <button type="submit" class="btn btn-primary" name="delete">Delete</button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          <?php } ?>
        </tbody>
      </table>
      <?php

      ?>
    </div>

  </body>
  <!-- <script src="../asset/js/bootstrap.min.js"></script> -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

  </html>