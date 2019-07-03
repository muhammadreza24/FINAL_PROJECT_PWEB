<html>
<head>
<title>Home</title>

</head>
<link rel="stylesheet" type="text/css" href="css/style.css">
<body>
<script>
alert("SELAMAT DATANG"); //fungsi javascript untuk memberi pesan peringatan (alert(""))
</script>

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
			<li><a aling="center" href="buku.html" class="btn btn-primary btn-lg">form pembayaran</a></li>
			<li><a aling="center" href="lihat.php" class="btn btn-info btn-lg">data form pembayaran</a></li>
			<!--<li> <a href="materi.html">Materi </a></li>
			<li> <a href="pencarian.html">Pencarian</a></li>-->
	
	</font></ul>
</div>

<div class="menu2">
			<br>
			<br>
			<table border="0">
				<tr>
					<td>&nbsp
					</td><td>&nbsp</td><td><h3>Post test PWEB.</h3></td>
				</tr>
				<tr>
					<td>&nbsp</td><td>&nbsp</td><td><h3>. pengisian Form pembayaran</h3></td>
				</tr>
				<tr>
					<td>&nbsp</td><td>&nbsp</td><td><h3>. penampilan daftar form pembayaran</h3></td>
				</tr>
			</table>

			<div class="menu5">
				<ul>
					<h3>
			<li><a href="buku.html" class="btn btn-primary btn-lg">Isi Form Pembayaran</a></li>
			<br>
			<li><a href="lihat.php" class="btn btn-info btn-lg">Data form pembayaran</a></li>
			<br>
			<li><a href="pencarian.html">Pencarian javascript</a></li>
			<br>
			<li><a href="profil.html">Profil pembuat</a></li>
			<br>

			</h3>
			</div>
<?php
$filecounter="counter.txt"; //mendeklarasikan counter.txt menjadi variabel filecounter
$fl=fopen($filecounter,"r+"); //fopen=perintah membuka file, membuka filecounter lalu melakukan r+= read/write
$hit=fread($fl,filesize($filecounter)); //membaca isi dari filecounter
echo("<table width=250 align=center border=0 cellspacing=0 cellpadding=0
><tr>");
echo("<td width=250 valign=middle align=center>");
echo("<font face=Mistral size=5 color=333333<b>");
echo("Anda pengunjung yang ke:");
echo($hit); //mencetak isi dari hit
echo("</b></font>");
echo("</td>");
echo("</tr></table>");
fclose($fl); //apabila diatas membuka ada fopen maka lebih baik di akhir ditutup dengan fopen
$fl=fopen($filecounter,"w+"); //w+= melakukan write dan menghapus isi sebelumnya
$hit=$hit+1; //menambah isi hit +1
fwrite($fl,$hit,strlen($hit)); //memperbarui dan mencetak data untuk variabel fl,hit
fclose($fl); //perintah menutup variabel fl
?>

<button onclick="document.getElementById('demo').innerHTML=Date()"> <!-- (javascript) apabila perintah onclik di klik maka perintah Date() akan dijalankan -->
Waktu saat ini?</button>
<p id="demo"></p>
</div>

<div class="footer">
	
</div>
</body>
</html>