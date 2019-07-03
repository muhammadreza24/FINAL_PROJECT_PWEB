function tanda(){
	alert("Haii, Enjoy to use this website :)");
}

function search(){
var kata = document.formcari.keyword.value; //menyimpan data dari inputan keyword pada pencarian.html
var hasil = "http://www.google.com/search?q=" + kata ; // fungsinya untuk mengakses kata di dalam var hasil
window.open(hasil, 'google', config='height=500, width=750, scrollbars=yes location=yes') //untuk membuka browser dengan window baru dari laptop 
}

function cekNama() {
var nama = document.formdaftar.nama.value; //var nama berfungsi menyimpan variabel masukan dari input "nama"
var number=/^[0-9]+$/; //berfungsi deklarasi angka
var text;
if(nama == "") {alert("nama tidak boleh kosong"); //jika nama kosong maka keluar peringatan.  alert=pesan peringatan
return false ;} //nilai pengembalian

if (nama.length>10) {
	alert("nama tidak boleh lebih dari 10 ")  //fungsi agar kata tdk lebih dari 10
	return false;
}
else {
	alert("selamat datang "+nama);
}
}