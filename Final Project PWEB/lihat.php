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

<div class="menu4">
  <ul>
    <font color="white">
      <li><a aling="center" href="buku.html" class="btn btn-primary btn-lg">Buku Tamu</a></li>
      <li><a aling="center" href="lihat.php" class="btn btn-info btn-lg">Lihat Pengunjung</a></li>
  
  </font></ul>
</div>

<div class="menu3">
  
    <br>
    <div class="lihattamu">
<?php
echo "<head><title>DATA BAYAR</title></head>";
$fp = fopen("databayar.txt","r"); //membuka file databayar.txt dan membaca = r
echo "<table border=0>";
while ($isi = fgets($fp,160)) //membaca/read satu baris dari variabel fp
{
$pisah = explode(" ",$isi); //memecahkan isi dari variabel$isi dengan menggunakan " " sehingga menjadi array. apabila isi variabel ada " " maka akan di pecah/dibagi
echo "<tr><td>Nama Pelanggan</td><td>: $pisah[0]</td></tr>"; //mencetak isi dari array $pisah
echo "<tr><td>Nama Barang </td><td>: $pisah[1]</td></tr>"; //mencetak isi dari array $pisah
echo "<tr><td>Jumlah </td><td>: $pisah[2]</td></tr>"; //mencetak isi dari array $pisah
echo "<tr><td>Harga </td><td>: $pisah[3]</td></tr>"; //mencetak isi dari array $pisah
echo "<tr><td>Total </td><td>: $pisah[4]</td></tr>"; //mencetak isi dari array $pisah
echo "<tr><td>Bukti </td><td>: <img src=images/$pisah[5] width=250 height=250 ></td></tr><tr><td>&nbsp;<hr></td><td>&nbsp;<hr></td></tr>";
}
echo "</table>";
echo "<a class=btn href=buku.html> Isi Buku tamu </a>";
echo "<a class=btn href=index.php> Profile </a>";
?>
</div>
</div>
</body>

</html>