
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/font.css" />
    <link rel="stylesheet" href="css/nav.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head> 
<header>


    {{-- <label for="toggler" class="fas fa-bars"></label> --}}


    <a href="images/KanataIcons.png" class="logo">Lesyuk<span>.</span></a>

    <nav class="navbar">
      <div class="row">
      <a href="home.html">Home</a>
      <div class="foo-dropdown">
        <button class="foo-dropbtn">Temukan<i class="bi bi-caret-down-fill"></i></button>
        <div class="foo-dropdown-content">
            <a href="/outdaftar">Daftar Guru</a>
            <a href="/listteacher">Daftar Les</a>
        </div>
    </div>
      <a href="">Konsultasi</a>

      </div>
    </div>
      
    </nav>

    <div class="row">

      {{-- <div class="circle">
        <a class="heart">
            <i class="bi bi-suit-heart"></i>
        </a>
    </div> --}}

    
     

    
    
    

    @auth

    <div class="avatar-dropdown">
      <a class="avatar-dropbtn" id="avatar-button">
        <div class="row">
          <img class="avatar" src="img/org3.jpeg" alt="User Avatar">
    
        </div>
       
      </a>
      <div class="avatar-dropdown-content" id="avatar-dropdown-content">
        <div class="prfl">
          <div class="centered-content">    
              <img class="avatar2" src="img/org3.jpeg" alt="User Avatar">
                <div>

                    
                    {{-- <p class="prfl2">{{$user->name}}</p>
                    <p class="prfl3">{{$user->email}}</p> --}}
              </div>
          </div>
        </div>
        <hr class="line4">
        <div class="gap4">
         
        <button class="btnn" onclick="goToProfile()">Profile</button>
        
        <button class="btnn" href="/outdaftar">Favorit</button>
        <form method="POST" action="{{route('logout')}}">
          @csrf
        <button class="btnn" >Keluar</button>
        </div>
        
          </form>
      </div>
    </div>

    @else
      <form>
      <div class="button-container2">
        <a class="btn2" href="{{route('login')}}">Login</a>
       
        <br>
        <a class="btn2"  href="{{route('register')}}">
        Sign Up
        </a>
      </div>
      </form>
    @endauth

   



    <script>
       function goToProfile() {
      window.location.href = "/profile";
    }
  
      const avatarButton = document.getElementById('avatar-button');
      const avatarDropdownContent = document.getElementById('avatar-dropdown-content');
      
      avatarButton.addEventListener('click', function() {
        if (avatarDropdownContent.style.display === 'block') {
          avatarDropdownContent.style.display = 'none';
        } else {
          avatarDropdownContent.style.display = 'block';
        }
      });
      
    
      document.addEventListener('click', function(event) {
        if (!event.target.closest('.avatar-dropdown')) {
          avatarDropdownContent.style.display = 'none';
        }
      });


      

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
  </header>