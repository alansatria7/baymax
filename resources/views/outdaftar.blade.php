<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/css/outdaftar.css">
    <link  type="text/css" rel="stylesheet" href="/css/font.css">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.main.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  
</head>

<body >

    @include('nav.nav')
    <div class="row">

        <div>
            <h1 class="d-kata1">Daftarkan diri anda mendjadi<br> guru privat di Lesyuk.</h1>
            <p class="d-kata2">Daftarkan diri anda menjadi guru <br> privat dan dapatkan murid-murid baru dengan Lesyuk,
            di tempat <br>terpercaya di Lesyuk. </i></p>

            <div class="d-btn1">
                <a href="/daftar" >Daftarkan</a>
            </div>

            
           
           
        </div>

       
        <div>
            <img  class="d-foto1" src="img/sma.png" alt="">
        </div>


    </div>

    <div >
   

    </div>
    

     
   
     


    
    <div>
        <h1 class="d-kata3">Bagaimana Mendaftar di Website Lesyuk</h1>
    </div>

    <div class="d-row1">

        <div>
            <img class="d-foto2"src="img/smp.png" alt="">
        </div>
        
        <div class="d-txt">
            <div class="d-step">
              <i class="bi bi-1-square"></i>
              <p>Isi informasi diri anda seperti nama, alamat, nomor telepon, pelajaran, dan lain lain.</p>
            </div>
            <br>
            <div class="d-step">
                <i class="bi bi-2-square"></i>
              <p>Unggah foto anda yang menarik. Pastikan foto tersebut berkualitas dan memberikan gambaran yang menyakinkan.</p>
            </div>
            <br>
            <div class="d-step">
              <i class="bi bi-3-square"></i>
              <p>Tentukan target pasar yang ingin anda capai sesuai yang diinginkan. Apakah anda ingin menjangkau pelajar sekolah dasar, atau pelajar sekolah menengah.</p>
            </div>
            <br>
            <div class="d-step">
                <i class="bi bi-4-square"></i>
              <p>Terus perbarui informasi tentang diri anda di website untuk memastikan informasi yang diberikan selalu akurat dan terbaru.</p>
            </div>
        </div>
          
       
    </div> 
     
    <div>
        <h1 class="d-kata3">Ada pertanyaan tentang pendaftara anda? Kami punya jawaban!</h1>
    </div>

    <div class="d-row2">
        <div class="d-container">
            <div class="d-dropdown">
              <a class="dropdown-toggle">
                <p>Bagaimana cara menentukan harga <br> 
                  dan biaya yang tepat untuk kursus di <i class="fa fa-chevron-down"></i> <br>tempat les? 
                </p >
           
              </a>
              <div class="dropdown-menu">
                <p>Bagaimana cara menentukan harga<br> 
                  dan biaya yang tepat untuk kursus di <br>tempat les?</p>
              </div>
            </div>
          
            <div class="d-dropdown">
              <a class="dropdown-toggle">
                <p>Bagaimana cara menentukan harga<br> 
                  dan biaya yang tepat untuk kursus di <i class="fa fa-chevron-down"></i> <br>tempat les? 
                </p>
              </a>
              <div class="dropdown-menu">
                <p>Bagaimana cara menentukan harga<br> 
                  dan biaya yang tepat untuk kursus di <br>tempat les?</p>
              </div>
            </div>
          
            <div class="d-dropdown">
              <a class="dropdown-toggle">
                <p class="po">Bagaimana cara menentukan harga<br> 
                  dan biaya yang tepat untuk kursus di <i class="fa fa-chevron-down"></i><br>tempat les? 
                </p>
              </a>
              <div class="dropdown-menu">
                <p>Bagaimana cara menentukan harga<br> 
                  dan biaya yang tepat untuk kursus di <br>tempat les?</p>
              </div>
            </div>

            <div class="d-dropdown">
                <a class="dropdown-toggle">
                  <p>Bagaimana cara menentukan harga<br> 
                    dan biaya yang tepat untuk kursus di <i class="fa fa-chevron-down"></i><br>tempat les? 
                  </p>
                </a>
                <div class="dropdown-menu">
                  <p>Bagaimana cara menentukan harga<br> 
                    dan biaya yang tepat untuk kursus di <br>tempat les?</p>
                </div>
              </div>
        </div>
         <div>
            <img  class="foto3" src="img/sd.png" alt="">
        </div> 
    </div>
          






    


      
        @include('nav.footer')

        <script>
            const dropdowns = document.querySelectorAll('.d-dropdown');
        
            dropdowns.forEach(dropdown => {
              const toggle = dropdown.querySelector('.dropdown-toggle');
              const menu = dropdown.querySelector('.dropdown-menu');
              toggle.addEventListener('click', () => {
                dropdowns.forEach(otherDropdown => {
                  if (otherDropdown !== dropdown) {
                    otherDropdown.classList.remove('active');
                    otherDropdown.querySelector('.dropdown-menu').style.maxHeight = '0';
                  }
                });
                dropdown.classList.toggle('active');
                if (dropdown.classList.contains('active')) {
                  menu.style.maxHeight = menu.scrollHeight + 'px';
                } else {
                  menu.style.maxHeight = '0';
                }
              });
            });
        
            document.addEventListener('click', (event) => {
              if (!event.target.closest('.d-dropdown')) {
                dropdowns.forEach(dropdown => {
                  dropdown.classList.remove('active');
                  dropdown.querySelector('.dropdown-menu').style.maxHeight = '0';
                });
              }
            });
          </script>
    
</body>
</html>