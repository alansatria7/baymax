  <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/pembayaran.css">
    <link  type="text/css" rel="stylesheet" href="/css/font.css">
    <link  rel="stylesheet" href="fontawesome/css/all.css">
    <title>Document</title>
</head>
<body class="body">
  <div class="row1">
    <div class="card">
      <div class="mdl">
        <i class="fa-solid fa-medal"></i>
        <a class="fa-sharp fa-regular fa-heart"></a>
      </div>
      <img class="foto1" src="img/org1.png" alt="">
      <div class="card-content">
        <h1>ALAN</h1>
        <div class="step">
          <div class="number"><i class="fa-solid fa-star"></i>5</div>
          <p class="ulasan">(53 Ulasan)</p>
        </div>

        <div class="step">
          <div class="tarif">Tarif per bulan</div>
          <p class="harga">Rp120.000</p>
        </div>

        <div class="step">
          <div class="waktu">Lama waktu</div>
          <p class="jm">2j/hari</p>
        </div> 
      </div> 
    </div>

    <div class="container">
      <h1>Jadwal</h1>
      <p>Kursus pertama dengan Alan</p>
      <a>Perkenalkan diri anda kepada M. Amrol<br>
        dan ceritakan apa yang anda ingin<br>
        pelajari opsional
      </a>
      <div class="card1">
        <b>
        Ceritakan kepada M. Amrol sedikit lebih banyak tentang
        kursus yang Anda cari, kapan ketersediaan Anda, dil. Semakin
        banyak informasi yang Anda berikan kepada guru anda,
        semakin besar kemungkinan mereka akan menerima permintaan Anda.
      </b>
      </div>
    </div>
  </div>

  <div class="row5">
    <div>
      <div class="container1">
        <h2>Untuk siapa kursus ini diadakan?
        </h2>
        <div class="row3">
        <div class="card2">
          <div class="button-container1">
            <a class="btn">Anda</a>
            <br>
            <a class="btn">Orang Lain</a>
          </div>
        </div>
        <input type="text" class="text-box" placeholder="Masukkan nama depan ...">
      </div>
      </div>
    
      <div class="container2">
        <h2>Tanggal Kursus
        </h2>
        <div class="row4">
        <div class="card3">
          <div class="button-container2">
            <a class="btn2">Secepatnya</a>
            <br>
            <a class="btn2">Ajukan Tanggal</a>
          </div>

        </div>
        <input type="date" class="date-input">
      </div>
      </div>
    </div>

    <div class="vertical-line"></div>

    <div class="container3">
      <h1>Informasi kontak</h1>
      <p>Informasi ini hanya akan diberikan kepada<br> guru yang Anda pilih.
      </p>

      <div class="row6">
        <div >
          <h1>Alamat</h1>
          <input type="text" class="text-box1" placeholder="Alamat anda">   
        </div>

        <div class="lft">
          <h1>Nomor HP</h1>
          <input type="number" class="text-box2" placeholder="Nomor anda">  
        </div>
      </div>
      <div class="bt">
        <a class="button1" href="/bayar" >Selanjutnya</a>
      </div>
  
      
    </div>

    

  </div>

  <script>

  const buttons1 = document.querySelectorAll('.button-container1 .btn');
  const buttons2 = document.querySelectorAll('.button-container2 .btn2');

  buttons1.forEach(function(button) {
    button.addEventListener('click', function() {
      buttons1.forEach(function(btn) {
        btn.classList.remove('active');
      });
      button.classList.add('active');
    });
  });

  buttons2.forEach(function(button) {
    button.addEventListener('click', function() {
      buttons2.forEach(function(btn) {
        btn.classList.remove('active');
      });
      button.classList.add('active');
    });
  });




  </script>

</body>
</html>