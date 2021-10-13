<?php
//error_reporting(0);
$con = new mysqli("localhost", "root", "", "dbsuratfanny");

$tgl = date('d F Y');

$sql = "SELECT * FROM tbl_surat";
$result = $con->query($sql);
$isi = $result->fetch_assoc();

?>
<!DOCYTYPE html>
  <html>

  <head>
    <title>View Surat</title>
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
          <td>No</td>
          <td>Nama</td>
          <td>Alamat</td>
          <td>Kelas</td>
        </thead>
        <tbody>
          <tr>
            <td class="text-center">1</td>
            <td>Siti Aas Latipah</td>
            <td>Turki</td>
            <td class="text-center">MI20B</td>
          </tr>
          <tr>
            <td class="text-center">2</td>
            <td>Adinda Nur Aulia Rizki</td>
            <td>Gangnam</td>
            <td class="text-center">MI20B</td>
          </tr>
          <tr>
            <td class="text-center">3</td>
            <td>Dinda Rachmayanti</td>
            <td>Meulbourne</td>
            <td class="text-center">MI20B</td>
          </tr>
          <tr>
            <td class="text-center">4</td>
            <td>Hilda Yuliani</td>
            <td>Mesir</td>
            <td class="text-center">MI20B</td>
          </tr>
          <tr>
            <td class="text-center">5</td>
            <td>Depa Melina</td>
            <td>Seoul</td>
            <td class="text-center">MI20B</td>
          </tr>
        </tbody>
      </table>
    </div>

  </body>
  <!-- <script src="../asset/js/bootstrap.min.js"></script> -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

  </html>