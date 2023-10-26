 <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="/css/detailguru_2.css">
    <link type="text/css" rel="stylesheet" href="/css/font.css">
    <link rel="stylesheet" href="fontawesome/css/all.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    {{-- @vite(['resources/sass/app.scss', 'resources/js/app.js '])  --}}
    <title>Document</title>
</head>

<body>
    @include('nav.nav')
    
    @foreach ($data as $detail)
    <div class="container">
        <div class="row1">
            <div>
                <div class="brd">
                    <div class="row">

                    <p>{{$detail->mapel}}</p>
                    <p>{{$detail->mapel2}}</p>
                    <p>{{$detail->mapel3}}</p>
                   
                    </div>
                     <p class="pp">{{$detail->mapel4}}</p>
                    <h1>{{$detail->intro}}</h1>
                </div>
                <div class="tmpt">
                    <h2>Tempat Kursus</h2>
                    <div class="row">
                        <p class="ap"> <i class="bi bi-camera-video"></i>{{$detail->meet}}</p>
                    </div>
                </div>
                <div class="tnt">
                    <h2>Tentang Alan</h2>
                    <p class="tnt1">{{$detail->tentang}}</p>
                    <p>{{$detail->tentang_2}}</p>
                  
                </div>
            </div>


            <div class="card">
                <div class="mdl">
                    {{-- <div class="star">
                        <a>
                            <i class="bi bi-star-fill"></i>
                        </a>
                    </div>
                    <div class="center-box">
                        <div class="rating-box">
                            <div class="stars">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                            </div>
                        </div>
                        <div>
                            <p>Ulasan</p>
                        </div>
                        <form>
                            <textarea>Bagikan ulasan anda...</textarea>
                        </form>

                        <div class="gap">

                            <a href="listteacher" class="btn-cn">Cencel</a>
                            <a class="btn-sc">Succees</a>

                        </div>


                    </div> --}}

                    {{-- <div class="heart"><i class="fa-solid fa-heart"></i></div> --}}
                </div>
                <img class="foto1" src="img/org1.png" alt="">
                <div class="card-content1">
                    <h1>{{$detail->nama}}</h1>
                    {{-- <div class="step">
                        <div class="number"><i class="fa-solid fa-star"></i>5</div>
                        <p class="ulasan"></i>(53 Ulasan)</p>
                    </div> --}}

                    <div class="step">
                        <div class="tarif">Tarif per bulan</div>
                        <p class="harga">{{$detail->tarif}}</p>
                    </div>

                    <div class="step">
                        <div class="waktu">Waktu Respon</div>
                        <p class="jm">{{$detail->waktu}}</p>
                    </div>

                    <div class="step">
                        <div class="jmlh">Jumlah murid</div>
                        <p class="no">{{$detail->jumlah_murid}}</p>
                    </div>
                    <div class="bt">
                        <a class="btn" href="/pembayaran">
                            Reservesi Kursus</a>

                    </div>

                    {{-- <p class="op">Sesi ke 1 gratis</p> --}}
                </div>
            </div>

        </div>

        <div>
            <h2 class="tentang">Tentang kursus ini</h2>
            <div class="klmp">
                <i class="fa-solid fa-graduation-cap"></i>
               
                <p>{{$detail->sma}} </p>
                
            </div>
            <div class="tntini">
            <p class="tnt1">{{$detail->tentang_3}}</p>
            <p>{{$detail->tentang_4}}</p>
            </div>
        </div>

        <div>
            <h2 class="tentang">Tarif</h2>
            <div class="klmpp">
                <div  class="mrgt">
                    <h3>Tarif per jam</h3>
                <p>{{$detail->tarif5}}</p>
                
                </div>
                <div class="mrgt">
                    <h3>Tarfi Paket</h3>
                <p>{{$detail->tarif3}}</p>
                <p>{{$detail->tarif4}}</p>
                </div>
                <div class="mrgt">
                    <h3>Online</h3>
                <p>{{$detail->tarif2}}</p>
                
                </div>
              
                
                
               
               
                
            </div>
            
        </div>

        
       @endforeach



        <div class="vondas">
            <div class="row3">
                <h2>Rekomendasi Guru Lainnya</h2>
                <a class="scroll-left-btn" onclick="scrollLeft()">&#8249;</a>
                <a class="scroll-right-btn" onclick="scrollRight()">&#8250;</a>
            </div>
            <div class="scroll-container">  
                <div class="row9">
                    

                    <div class="dis">
                        <div class="card5">
                            <div class="card-image">

                                <img class="pct" src="img/org3.jpeg" alt="Image 1">

                                <div class="image-text">Adiarja Halimn</div>
                                <div class="image-text1">Singocandi</div>
                            </div>

                            <div class="card-content">
                                {{-- <div class="step">
                                    <div class="number-cr"><i class="fa-solid fa-star"></i>4</div>
                                    <p class="ulasan-cr"></i>(53 Ulasan)</p>
                                </div> --}}



                                <div class="row">
                                    <a class="btn1" href="">Rp60.000/jam</a>
                                    <a class="btn23" href="">Sesi ke 1 gratis</a>

                                </div>
                            </div>
                        </div>
                    </div>   

                    <div class="dis">
                        <div class="card5">
                            <div class="card-image">

                                <img class="pct" src="img/org3.jpeg" alt="Image 1">

                                <div class="image-text">Adiarja Halimn</div>
                                <div class="image-text1">Singocandi</div>
                            </div>

                            <div class="card-content">
                                {{-- <div class="step">
                                    <div class="number-cr"><i class="fa-solid fa-star"></i>4</div>
                                    <p class="ulasan-cr"></i>(53 Ulasan)</p>
                                </div> --}}



                                <div class="row">
                                    <a class="btn1" href="">Rp60.000/jam</a>
                                    <a class="btn23" href="">Sesi ke 1 gratis</a>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="dis">
                        <div class="card5">
                            <div class="card-image">

                                <img class="pct" src="img/org3.jpeg" alt="Image 1">

                                <div class="image-text">Adiarja Halimn</div>
                                <div class="image-text1">Singocandi</div>
                            </div>

                            <div class="card-content">
                                {{-- <div class="step">
                                    <div class="number-cr"><i class="fa-solid fa-star"></i>5</div>
                                    <p class="ulasan-cr">(53 Ulasan)</p>
                                </div> --}}



                                <div class="row">
                                    <a class="btn1" href="">Rp60.000/jam</a>
                                    <a class="btn23" href="">Sesi ke 1 gratis</a>

                                </div>
                            </div>
                        </div>
                    </div>



                    <div class="dis">
                        <div class="card5">
                            <div class="card-image">

                                <img class="pct" src="img/org3.jpeg" alt="Image 1">

                                <div class="image-text">Adiarja Halimn</div>
                                <div class="image-text1">Singocandi</div>
                            </div>

                            <div class="card-content">
                                {{-- <div class="step">
                                    <div class="number-cr"><i class="fa-solid fa-star"></i>5</div>
                                    <p class="ulasan-cr">(53 Ulasan)</p>
                                </div> --}}



                                <div class="row">
                                    <a class="btn1" href="">Rp60.000/jam</a>
                                    <a class="btn23" href="">Sesi ke 1 gratis</a>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="dis">
                        <div class="card5">
                            <div class="card-image">

                                <img class="pct" src="img/org3.jpeg" alt="Image 1">

                                <div class="image-text">Adiarja Halimn</div>
                                <div class="image-text1">Singocandi</div>
                            </div>

                            <div class="card-content">
                                {{-- <div class="step">
                                    <div class="number-cr"><i class="fa-solid fa-star"></i>5</div>
                                    <p class="ulasan-cr">(53 Ulasan)</p>
                                </div> --}}



                                <div class="row">
                                    <a class="btn1" href="">Rp60.000/jam</a>
                                    <a class="btn23" href="">Sesi ke 1 gratis</a>

                                </div>
                            </div>
                        </div>       
                    </div>

                    <div class="dis">
                        <div class="card5">
                            <div class="card-image">

                                <img class="pct" src="img/org3.jpeg" alt="Image 1">

                                <div class="image-text">Adiarja Halimn</div>
                                <div class="image-text1">Singocandi</div>
                            </div>

                            <div class="card-content">
                                {{-- <div class="step">
                                    <div class="number-cr"><i class="fa-solid fa-star"></i>5</div>
                                    <p class="ulasan-cr">(53 Ulasan)</p>
                                </div> --}}



                                <div class="row">
                                    <a class="btn1" href="">Rp60.000/jam</a>
                                    <a class="btn23" href="">Sesi ke 1 gratis</a>

                                </div>
                            </div>
                        </div>

                    </div>


                </div>
            </div>
          
        </div>



        @include('nav.footer')
     




                            <script>
                                // let scrollContainer = document.querySelector(".gallery");
                                // let backBtn = document.getElementById("backBtn");
                                // let nextBtn = document.getElementById("nextBtn");

                                // scrollContainer.addEventListener("wheel", (evt) => {
                                //     evt.preventDefault();
                                //     scrollContainer.scrollLeft += evt.deltaY;
                                //     scrollContainer.style.scrollBehavior = "auto";
                                // });

                                // nextBtn.addEventListener("click", () => {
                                //     scrollContainer.style.scrollBehavior = "smooth";
                                //     scrollContainer.scrollLeft += 950;
                                // });

                                // backBtn.addEventListener("click", () => {
                                //     scrollContainer.style.scrollBehavior = "smooth";
                                //     scrollContainer.scrollLeft -= 950;
                                // });



                                function scrollLeft() {
                                    const scrollContainer = document.querySelector('.scroll-container');
                                    scrollContainer.scrollBy({
                                        left: -300,
                                        behavior: 'smooth',
                                    });
                                }

                                function scrollRight() {
                                    const scrollContainer = document.querySelector('.scroll-container');
                                    scrollContainer.scrollBy({
                                        left: 300,
                                        behavior: 'smooth',
                                    });
                                }

                                function scrollHorizontally(event) {
                                    const scrollContainer = document.querySelector('.scroll-container');
                                    const scrollAmount = 100;

                                    event.preventDefault();
                                    scrollContainer.scrollLeft += event.deltaY > 0 ? scrollAmount : -scrollAmount;
                                }

                                document.addEventListener('DOMContentLoaded', () => {
                                    const scrollContainer = document.querySelector('.scroll-container');
                                    scrollContainer.addEventListener('wheel', scrollHorizontally);
                                });


                                document.querySelector('.scroll-left-btn').addEventListener('click', scrollLeft);
                                document.querySelector('.scroll-right-btn').addEventListener('click', scrollRight);






                                function handleHeartClick(event) {
                                    event.currentTarget.classList.toggle('liked');
                                }

                                document.querySelectorAll('.fa-heart').forEach(icon => {
                                    icon.addEventListener('click', handleHeartClick);
                                });

                                function handleStarClick(event) {
                                    const starIcon = event.currentTarget;
                                    starIcon.classList.toggle('liked');

                                    // Show/hide the center box
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
                            </script>



</body> 
