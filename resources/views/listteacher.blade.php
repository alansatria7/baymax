
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- custom css file link  -->
    <link rel="stylesheet" href="{{asset('css/listteacher.css')}}" />
    <link type="text/css" rel="stylesheet" href="{{ asset('css/font.css') }}">
    <link  rel="stylesheet" href="{{asset('fontawesome/css/all.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>
<body>
  
  @include('nav.nav') 
    <!-- header section starts  -->  
 

    <h2 class="mtr" >Guru semua materi</h2>
    <form action="/listteacher" method="GET" id="filterForm"> 
      <select name="mapel" id="mapel" onchange="handleChange()">
          <option value="">Semua Mapel</option>
          @foreach ($mapels as $mapel)
              <option class="menu22" value="{{ $mapel }}" {{ $selectedMapel == $mapel ? 'selected' : '' }}>
                  {{ $mapel }}
              </option>
          @endforeach
      </select>
  </form>


      
    {{-- <div class="row01">
   
        <div class="dropdown">
          <div class="select">
            <span class="selected">Pilih Mata Pelajaran</span>
            <div class="caret"></div>  
          </div>
          <ul class="menu">
            <li>Semua</li>
            <li>Matematika</li>
            <li>Fisika</li>
            <li>Biologi</li>
            <li>Kimia</li>
            <li>Sejarah</li>  
            <li>Sejarah</li>  
            <li>Sejarah</li>  
            <li>Sejarah</li>  
            <li>Sejarah</li>  
          </ul> 
        </div>
    
        <div class="dpd">
          <div class="dropdown">
            <div class="select">
              <span class="selected">Tipe Kelas</span>
              <div class="caret"></div>  
            </div>
            <ul class="menu">
              
                <li>Semua</li>
                <li>SD</li>
                <li>SMP</li>
                <li>SMA</li>  
              
            </ul> 
          </div>
        </div>  
      </div>
      
    </div> --}}
  
    {{-- <div class="overlay"></div> --}}
    <h2 class="terse" >6 Guru  tersedia</h2>



    <section class="card-section"> 
      


     

      
      
     
    

      @foreach ($guru as $guru) 
        
                
          <div class="card-container">
            <div class="card5">
                <div class="card-image">
                    <img class="pct" src="{{$guru->image}}" alt="1">
                    <div class="heart"><i class="fa-solid fa-heart"></i></div>
                    <div class="image-text">{{$guru->nama}}</div>
                    <div class="image-text1">{{$guru->mapel}}</div>
                </div>
        
                <div class="card-content">
                    
                    <div class="lokasi">
                        {{$guru->intro}}
                    </div>
       
                    <div>
                        <a class="btn" href="{{ route('detailguru.show', $guru) }}"><p>Lihat Selengkapnya</p></a>
                    </div>
                </div>
            </div>
          </div>
      
      @endforeach

{{-- 
      <div class="card-container">
        

        <div class="psc2">
          <div>
            <div>
              <div class="dis">
                <div class="card5">
                  <div class="card-image">
                    
                    <img class="pct" src="img/org5.png" alt="Image 1">
                    
                     
                      
                      <div class="heart"><i class="fa-solid fa-heart"></i></div>
                    <div class="image-text">Adiarja Halimn</div>
                    <div class="image-text1">Singocandi</div>
                  </div>
          
                  <div class="card-content">
                    <div class="step">
                      <div class="number"><i class="fa-solid fa-star"></i>4</div>
                      <p class="ulasan"></i>(53 Ulasan)</p>
                    </div>
                    <div class="lokasi">Belajar Bahasa Inggris menjadi lebih mudah, nyaman dan ...</div>
                  
                    
                    <div >
                      <a class="btn" href="/detailguru"><p>Lihat Selengkapnya</p></a>
                    </div>
                </div>
              </div>
  
              <div class="dis">
                <div class="card5">
                  <div class="card-image">
                    
                    <img class="pct" src="img/org6.png" alt="Image 1">
                   
                 
                      
                      <div class="heart"><i class="fa-solid fa-heart"></i></div>
                    <div class="image-text">Adiarja Halimn</div>
                    <div class="image-text1">Singocandi</div>
                  </div>
          
                  <div class="card-content">
                    <div class="step">
                      <div class="number"><i class="fa-solid fa-star"></i>4</div>
                      <p class="ulasan"></i>(53 Ulasan)</p>
                    </div>
                    <div class="lokasi">Belajar Bahasa Inggris menjadi lebih mudah, nyaman dan ...</div>
                  
                    
                    <div >
                      <a class="btn" href="/detailguru"><p>Lihat Selengkapnya</p></a>
                    </div>
                </div>
              </div>

              <div class="dis">
                <div class="card5">
                  <div class="card-image">
                    
                    <img class="pct" src="img/org2.png" alt="Image 1">
                  
                   
                      
                      <div class="heart"><i class="fa-solid fa-heart"></i></div>
                    <div class="image-text">Adiarja Halimn</div>
                    <div class="image-text1">Singocandi</div>
                  </div>
          
                  <div class="card-content">
                    <div class="step">
                      <div class="number"><i class="fa-solid fa-star"></i>4</div>
                      <p class="ulasan"></i>(53 Ulasan)</p>
                    </div>
                    <div class="lokasi">Belajar Bahasa Inggris menjadi lebih mudah, nyaman dan ...</div>
                  
                    
                    <div >
                      <a class="btn" href="/detailguru"><p>Lihat Selengkapnya</p></a>
                    </div>
                </div>
              </div>
  
            </div> 
          </div>
        </div>


      </div>

      

    </div>     --}}



        
    
    </section>
      
    @include('nav.footer') 

    <script  >
        function handleChange() {
        document.getElementById('filterForm').submit();
    }



        const buttons = document.querySelectorAll(".btn");
        buttons.forEach(btn => {
          btn.onmousemove = function (e){
            const x = e.pageX - btn.offsetLeft;
            const y = e.pageY - btn.offsetTop;
    
            btn.style.setProperty("--x", x + "px");
            btn.style.setProperty("--y", y + "px");
          };
        });

   
        function handleHeartClick(event) {
          event.currentTarget.classList.toggle('liked');
        }

        document.querySelectorAll('.fa-heart').forEach(icon => {
          icon.addEventListener('click', handleHeartClick);
        });

        function handleStarClick(event) {
      const starIcon = event.currentTarget;
      starIcon.classList.toggle('liked');

 
      const centerBox = document.querySelector('.center-box');
      centerBox.style.display = starIcon.classList.contains('liked') ? 'block' : 'none';
    }

    document.querySelectorAll('.bi-star-fill').forEach(icon => {
      icon.addEventListener('click', handleStarClick);
    });







    document.addEventListener("DOMContentLoaded", function() {
      const stars = document.querySelectorAll('.stars i');

      stars.forEach((star, index) => {
        star.addEventListener('click', () => {
          stars.forEach((star, starIndex) => {
            if (starIndex <= index) {
              star.classList.add('active');
            } else {
              star.classList.remove('active');
            }
          });
        });
      });

      document.addEventListener('click', (event) => {
        const isStar = event.target.classList.contains('bi-star-fill');
        if (!isStar) {
          stars.forEach((star) => {
            star.classList.remove('active');
          });
        }
      });
    });







        
    const dropdowns = document.querySelectorAll('.dropdown');
const overlay = document.querySelector('.overlay');
const navbar = document.querySelector('.navbar');

dropdowns.forEach(dropdown => {
  const select = dropdown.querySelector('.select');
  const caret = dropdown.querySelector('.caret');
  const menu = dropdown.querySelector('.menu');
  const options = dropdown.querySelectorAll('.menu li');
  const selected = dropdown.querySelector('.selected');

  const closeOtherDropdowns = () => {
    dropdowns.forEach(otherDropdown => {
      if (otherDropdown !== dropdown) {
        otherDropdown.querySelector('.menu').classList.remove('menu-open');
        otherDropdown.querySelector('.select').classList.remove('select-clicked');
        otherDropdown.querySelector('.caret').classList.remove('caret-rotate');
      }
    });
  };

  const closeDropdown = () => {
    select.classList.remove('select-clicked');
    caret.classList.remove('caret-rotate');
    menu.classList.remove('menu-open');
    overlay.style.display = 'none';
    dropdown.style.zIndex = 'auto'; 
  };

  select.addEventListener('click', (event) => {
    event.stopPropagation();
    closeOtherDropdowns();
    select.classList.toggle('select-clicked');
    caret.classList.toggle('caret-rotate');
    menu.classList.toggle('menu-open');
    overlay.style.display = menu.classList.contains('menu-open') ? 'block' : 'none';
    dropdown.style.zIndex = menu.classList.contains('menu-open') ? '2' : 'auto'; // Set z-index when opening

    if (menu.classList.contains('menu-open')) {
      const menuItems = menu.querySelectorAll('li');
      if (menuItems.length > 4) {
        menu.style.overflowY = 'scroll';
        menu.style.maxHeight = '190px';
      } else {
        menu.style.overflowY = 'initial';
        menu.style.maxHeight = 'auto';
      }
    }
  });

  options.forEach(option => {
    option.addEventListener('click', () => {
      selected.innerHTML = option.innerHTML;
      closeDropdown();

      options.forEach(option => {
        option.classList.remove('active');
      });

      option.classList.add('active');
    });
  });

  document.addEventListener('click', (event) => {
    if (!event.target.closest('.dropdown')) {
      dropdowns.forEach(dropdown => {
        dropdown.querySelector('.menu').classList.remove('menu-open');
        dropdown.style.zIndex = 'auto'; 
      });
      overlay.style.display = 'none';
    }
  });

  dropdowns.forEach(dropdown => {
    const select = dropdown.querySelector('.select');
    const menu = dropdown.querySelector('.menu');

    select.addEventListener('click', () => {
      dropdowns.forEach(otherDropdown => {
        if (otherDropdown !== dropdown) {
          otherDropdown.querySelector('.menu').classList.remove('menu-open');
          otherDropdown.style.zIndex = 'auto';
        }
      });
      menu.classList.toggle('menu-open');
      overlay.style.display = menu.classList.contains('menu-open') ? 'block' : 'none';
      dropdown.style.zIndex = menu.classList.contains('menu-open') ? '2' : 'auto'; // Set z-index when opening
    });
  });


  menu.addEventListener('transitionend', () => {
    if (menu.classList.contains('menu-open')) {
      navbar.style.zIndex = '1';
    } else {
      navbar.style.zIndex = 'auto';
    }
  });
});






    </script>
    
</body>
</html>

