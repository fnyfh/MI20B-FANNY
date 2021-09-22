<?php
$biodata = array(
  'Nama' => 'Fanny Fietya Herlambang',
  'Kelas' => 'MI20B',
  'Jurusan' => 'Manajemen Informatika',
  'NO HP' => '08122145678'
);
$matkul = array('', 'Web Programming', 'Java Programming', 'Mobile Programming');
?>
<!DOCTYPE html>
<html>

<head>
  <title>Week 2 - Fanny Fietya</title>
</head>

<body>
  <table border="2" align="center">
    <tr>
      <td>
        <?php
        echo "<center>";
        echo "<br>";
        echo "++BIODATA++";
        echo "<br>";
        echo "<br>";
        echo "Nama : " . $biodata['Nama'];
        echo "<br>";
        echo "Kelas : " . $biodata['Kelas'];
        echo "<br>";
        echo "Jurusan : " . $biodata['Jurusan'];
        echo "<br>";
        echo "NO HP : " . $biodata['NO HP'];
        echo "<br>";
        echo "<br>";
        echo "Saya mengambil mata kuliah sebagai berikut : ";
        echo "<br>";
        for ($x = 1; $x < count($matkul); $x++) {
          echo "$x. " . $matkul[$x] . "<br/>";
        }
        ?>
      </td>
    </tr>
  </table>
</body>

</html>