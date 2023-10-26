<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/bayar.css">
    <link rel="stylesheet" href="/css/font.css">
    <link  rel="stylesheet" href="/fontawesome/css/all.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <title>Document</title>
</head>
<body class="body">
    <a class="iconrow"> <i class="bi bi-arrow-left"></i></a>
   
    <div class="row">
        <div class="card">
            
            <img class="foto1" src="img/org1.png" alt="">
            <div class="card-content">
              <h1>ALAN</h1>
              <div class="step">
                <div class="number"><i class="fa-solid fa-star"></i>2</div>
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

       
    
        <div>
            <div  class="row1">
                <h1>Terakses selama <br>30 hari</h1>
                <p>Rp 50.000</p>
            </div>

            <div class="card1">
                <p class="ttx">
                    <i class="fa-sharp fa-regular fa-circle-check"></i>
                    Biaya registrasi (biaya ini di luar regristasi) 
                </p>
                <a class="ttx1">
                    <i class="fa-sharp fa-regular fa-circle-check"></i>
                    Fitur untuk dapat mengajukan permintaan <br>kursus ke semua guru Lesyuk
                </a>
            </div> 
            <div class="btn22"> <a class="btn" href="/bayar">Bayar</a></div>
           
        </div>
    </div>

   

   

    

 
    
    
    <script >
        const dropdownBtn = document.getElementById('dropdown-btn');
        const dropdownList = document.getElementById('dropdown-list');

        dropdownBtn.addEventListener('click', function() {
        dropdownList.style.display = dropdownList.style.display === 'block' ? 'none' : 'block';
        });

        document.addEventListener('click', function(event) {
        if (!dropdownList.contains(event.target) && event.target !== dropdownBtn) {
            dropdownList.style.display = 'none';
        }
        });

      </script>
    
    
</body>
</html>