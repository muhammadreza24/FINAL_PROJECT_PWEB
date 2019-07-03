<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/style.css">

</head>
<body>
 <div class="header">
  
</div>
<div class="menubar">
    <ul>
      <li><a href="index.php">Home</a></li>
    <li><a aling="center" href="buku.html" class="btn btn-primary btn-lg">Buku Tamu</a></li>
      <li><a aling="center" href="lihat.php" class="btn btn-info btn-lg">Lihat Pengunjung</a></li>
      <li><a href="pencarian.html">Pencarian [JS]</a></li>
      <li><a href="profil.html">Profil</a></li>
      <li></li>
    </ul>
</div>  

<div class="menu1">
  <ul>
    <font color="white">
      <li><a aling="center" href="buku.html" class="btn btn-primary btn-lg">Buku Tamu</a></li>
      <li><a aling="center" href="lihat.php" class="btn btn-info btn-lg">Lihat Pengunjung</a></li>
  
  </font></ul>
</div>

<div class="menu2">
  
    <br>
    <div class="jumbotron">

<?php
echo "<head><title>DATA BAYAR</head></title>";
$fp = fopen("databayar.txt","a+"); //membuka file databayar.txt dan menggunakan tipe a+ yaitu mencetak data baru tanpa menghapus data sebelumnya
$nama = $_POST['nama']; //menggisi variable nama dengan data dari form dengan method post dengan name=nama
$nama_barang = $_POST['nama_barang'];//menggisi variable nama_barang dengan data dari form dengan method post dengan name=nama_barang
$jumlah = $_POST['jumlah'];//menggisi variable jumlah dengan data dari form dengan method post dengan name=jumlah
$harga = $_POST['harga'];//menggisi variable harga dengan data dari form dengan method post dengan name=harga
$total = $jumlah*$harga; //mengkalikan 2 variabel
$file = $_FILES["file"]["name"];  //file yang kita upload akan ditampung di dalam $_FILES dan name ialah nama dari file yg diupload
$tmp_name = $_FILES["file"]["tmp_name"]; //tmp_name iyalah nama file yang berada di dalam direktori temporer server
move_uploaded_file($tmp_name, "images/".$file); //memindahkan isi ke dalam file images

fputs($fp,"$nama $nama_barang $jumlah $harga $total $file\n"); //mencetak semua isi dari variabel ke dalam variabel fp yaitu databayar.txt
fclose($fp); //menutup variabel fp
echo " Terima Kasih Atas Partisipasi Anda Mengisi Pembayaran<br>";
echo "<a class=btn href=buku.html> Isi Buku Tamu </a><br>";
echo "<a class=btn href=index.php> Lihat Profile </a><br> ";
?>
</div>
</div>
<div class="footer">
</div>
</body>
</html>