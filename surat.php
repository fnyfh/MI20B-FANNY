<?php
$kota = "Tasikmalaya";
$ttd = "Fanny Fietya Herlambang";
$nomor = "001-07/PAN-HUTRI/IX/21";
$brg = array('', 'Kamera SLR', 'Webcam', 'Tripod', 'Monitor', 'LED');
$ins = array('LP3I', 'Kota Tasikmalaya', '02154658');
?>
<!DOCTYPE html>
<html>

<head>
  <title>Surat Peminjaman - Fanny Fietya</title>
</head>

<body>
  <table border="2" align="center">
    <tr>
      <td>
        <?php
        echo $kota . ", ";
        echo date('d-m-Y');
        echo "<br>";
        echo "<br>";
        echo "Nomor : " . $nomor;
        echo "<br>";
        echo "Perihal : Peminjaman";
        echo "<br>";
        echo "<br>";
        echo "Kepada";
        echo "<br>";
        echo "  Yth.";
        echo "<br>";
        for ($x = 0; $x < count($ins); $x++) {
          echo $ins[$x] . "<br/>";
        }
        echo "<br>";
        echo "di";
        echo "<br>";
        echo "tempat";
        echo "<br>";
        echo "<br>";
        echo "Dengan hormat,";
        echo "<br>";
        echo "<br>";
        echo "Sehubungan akan diselenggarakannya kegiatan HUT RI oleh HIMA TSC-LCC yang akan diselenggarakan pada : ";
        echo "<br>";
        echo "<br>";
        echo "Hari, tanggal : " . date('l, d-m-Y');
        echo "<br>";
        echo "Waktu : " . date('H:i:s a');
        echo "<br>";
        echo "Tempat : " . $ins[0];
        echo "<br>";
        echo "<br>";
        echo "untuk keberlangsungan acara tersebut, kami selaku panitia pelaksana bermaksud untuk meminjam barang-barang IT
diantaranya : ";
        echo "<br>";
        for ($x = 1; $x < count($brg); $x++) {
          echo "$x. " . $brg[$x] . "<br/>";
        }
        echo "<br>";
        echo "Kami berharap agar permohonan izin tersebut diperkenankan sehingga kegiatan ini dapat terlaksana";
        echo "<br>";
        echo "Demikian surat ini kami buat, atas perhatian Bapak/Ibu kami ucapkan terimakasih.";
        echo "<br>";
        echo "<br>";
        echo "Hormat kami, ";
        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "ttd,";
        echo "<br>";
        echo $ttd;
        ?>
      </td>
    </tr>
</body>

</html>