// METODE JQUERY
// Pemanggilan JQUERY DIBAWAH INI :
// <script src="js/jquery-3.6.0.min.js"></script>
// <script src="js/script.js"></script>

// Dibawah Ini artinya, Jquery tolong ambilkan saya dokumen, lalu ketika dokumen tersebut siap, jalankan fungsi berikut.
// $(document).ready(function() {

//})
// Dibawah ini, jadi yang pertama kita membuat event ketika keyword ditulis, $('#keyword') artinya jquery tolong carikan saya element keyword(element keyword inputnya dapet), lalu .on ini event listenernya ketika di keyup, ketika di keyup lakukan fungsi berikut ini function () {} , jadi ketika keyword ditulis. lalu didalamnya kita bisa panggil jquery, tolong carikan saya sebuah element $('#container') lalu .load() -> isinya ubah isinya dengan data yang kita ambil dari sumber, sumbernya dimana? sumbernya ajax/mahasiswa.php lalu kirimkan data keywordnya ?keyword=, diisi dengan, atau dikirimkan dengan apapun yang diketikkan oleh usernya + $('#keyword') kalo di jquery cukup -> .val()); sama aja = value. Selesai.
// memanggil ajax menggunakan 1 baris aja cukup memanggil fungsi .load() saja.
// tapi fungsi .load() ini memiliki keterbatasan karena dia hanya bisa menggunakan GET aja, klo menggunakan POST gabisa, harus menggunakan fungsi ajax yang lain.
$(document).ready(function () {
  // menghilangkan tombol cari
  $('#tombol-cari').hide();

  // event ketika keyword ditulis
  $('#keyword').on('keyup', function () {
    // Munculkan icon cari
    $('#loader').show();

    // Ajax menggunakan .load()
    // $('#container').load('ajax/mahasiswa.php?keyword=' + $('#keyword').val());

    // $.get
    // fungsi dibawah ini sama saja dengan fungsi diatas -> .load()
    $.get('ajax/mahasiswa.php?keyword=' + $('#keyword').val(), function (data) {
      $('#container').html(data);
      $('#loader').hide();
    });
  });
});
