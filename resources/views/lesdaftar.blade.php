<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link  type="text/css" rel="stylesheet" href="/css/daftarles.css">
    <link  type="text/css" rel="stylesheet" href="/css/font.css">
    <link  rel="stylesheet" href="fontawesome/css/all.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <title>Document</title>
</head>
<body>

  
    <div class="atur-l">
        <div class="card-l">

            <div class="row-l">
                <div>   
                    <p class="kata-1">Daftar Sekarang</p>
                    <p class="kata-2">Informasi kontak</p>
                    <p class="kata-3">Informasi ini hanya akan diberikan <br> kepada guru yang Anda pilih.</p>
                    <input type="text" id="fname" name="firstname" placeholder="Nama  Lengkap">
                    <input type="text" id="fname" name="firstname" placeholder="Alamat">
                    <input type="text" id="fname" name="firstname" placeholder="Jam">
                    
                    <div class="drp-l">
                        <div class="dropdown">
                            <button class="dropbtn" id="selectedOption">Online / Offline<i class="bi bi-chevron-down"></i></button>
                            <div class="dropdown-content">
                              <a href="#">Online</a>
                              <a href="#">Ofline</a>
                            
                            </div>
                          </div>
                    </div>
                </div>
              
                <div>
                    <div class="card">
        
                        <img class="foto1" src="img/org1.png" alt="">
                        <div class="card-content1">
                          <h1>ALAN</h1>
                          <div class="step">
                            <div class="number"><i class="fa-solid fa-star"></i>5</div>
                            <p class="ulasan"></i>(53 Ulasan)</p>
                          </div>
                  
                          <div class="step">
                            <div class="tarif">Tarif per bulan</div>
                            <p class="harga">Rp120.000</p>
                          </div>
                  
                          <div class="step">
                            <div class="waktu">Lama waktu</div>
                            <p class="jm">2j/hari</p>
                          </div> 
            
                          <div class="step">
                            <div class="jmlh">Jumlah murid</div>
                            <p class="no">21</p>
                          </div>
                        
                        </div> 
                    </div>
                    
                </div>

                
                
            </div>
            
            <div class="row-pp">
                <a class="btn-k">Kembali</a>

                <a class="btn-j">Konfirmasi</a>
            </div>

        </div>

           
        </div>
       
    </div>
    
    <script>
        document.addEventListener("DOMContentLoaded", function() {
  const dropdownContent = document.querySelector(".dropdown-content");
  const selectedOptionBtn = document.getElementById("selectedOption");

  dropdownContent.addEventListener("click", function(event) {
    if (event.target.tagName === "A") {
      const selectedValue = event.target.textContent;
      selectedOptionBtn.textContent = selectedValue;
      dropdownContent.style.display = "none";
    }
  });

  selectedOptionBtn.addEventListener("click", function() {
    if (dropdownContent.style.display === "none") {
      dropdownContent.style.display = "block";
    } else {
      dropdownContent.style.display = "none";
    }
  });

  window.addEventListener("click", function(event) {
    if (!event.target.matches(".dropbtn")) {
      if (dropdownContent.style.display === "block") {
        dropdownContent.style.display = "none";
      }
    }
  });
});

    </script>
</body>
</html>