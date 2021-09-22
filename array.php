<?php
$biodata = array(
  'Nama' => 'Fanny Fietya Herlambang',
  'Kelas' => 'MI20B',
  'Jurusan' => 'Manajemen Informatika',
  'NO HP' => '08122145678'
);
?>
<!DOCTYPE html>
<html>

<head>
  <title>Array - Fanny Fietya</title>
</head>

<body>
  <?php
  echo "================";
  echo "<br>";
  echo "BIODATA";
  echo "<br>";
  echo "================";
  echo "<br>";
  echo "<br>";
  echo $biodata['Nama'];
  echo "<br>";
  echo $biodata['Kelas'];
  echo "<br>";
  echo $biodata['Jurusan'];
  echo "<br>";
  echo $biodata['NO HP'];
  ?>
</body>

</html>