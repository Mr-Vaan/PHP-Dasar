// DUPLIKAT DARI PERTEMUAN 17
// ambil elemen2 yang dibutuhkan
var keyword = document.getElementById('keyword');
var tombolCari = document.getElementById('tombol-cari');
var cont = document.getElementById('cont');

// PENCARIAN MENGGUNAKAN AJAX
// tambahkan event ketika keyword ditulis
keyword.addEventListener('keyup', function () {
  // keyup adalah event ketika kita ngelepasin tangan kita dari keyboardnya
  // buat object ajax
  var xhr = new XMLHttpRequest();

  // Cek Kesiapan ajax yang siap digunakan
  // panggil cek ajaxnya siap engga xhr.onreadystatechange, lalu jalankan function (), didalam functionnya kita cek if (xhr.readyState == 4 && xhr.status == 200, kita cek siap gk ajaxnya menerima request kita, untuk readyState nilainya dari 0 s/d 4
  xhr.onreadystatechange = function () {
    if (xhr.readyState == 4 && xhr.status == 200) {
      cont.innerHTML = xhr.responseText;
    }
  };

  // Eksekusi Ajaxnya
  xhr.open('GET' /* request methodnya */, 'ajax/mahasiswa.php?keyword=' /* sumber datanya */ + keyword.value /* keyword.value ambil apapun keywordnya */, true); // klo true asyncronouse , klo false syncronouse
  xhr.send(); // xhr.send(); untuk menjalankan ajaxnya
});
