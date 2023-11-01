

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('/css/profile.css')}}" />
    <title>Document</title>
</head>
<body>
    @include('nav.nav') 
   
        <div class="card">
            <div class="row">
                <div >
                    <p class="btprofile">Profile</p>
                    <img class="product-image" src="img/org7.jpg" alt="">
                </div>
                <div>
                    <div class="row">
                        <div>
                            <div class="mrgn-nama">
                                <p class="nama">Nama</p>
                                <p class="box-nama">{{$user->name}}</p>
                            </div>
            
                            <div class="mrgn-email">
                                <p class="nama">Email</p>
                                <p class="box-nama">{{$user->email}}</p>
                            </div>
                            
                        </div>
                        <div>
                           
                                <div class="mrgn-nama">
                                    <p class="nama">Alamat</p>
                                    <p class="box-nama">{{$user->alamat}}</p>
                                </div>
                
                                <div class="mrgn-email">
                                    <p class="nama">Nomer HP</p>
                                    <p class="box-nama">{{$user->no_hp}}</p>
                                </div>
                          
                        </div>
                       
                     
                       
                    </div>
                    <div class="desc">
                        <p class="des1">Tentang diri anda:</p>
                        <div class="bio">   
                            <label class="bio" for="bio">Bio:</label>
                            <textarea id="bio" name="bio" row="4" readonly>{{ $user['bio'] }}</textarea>
                        </div>
                       
                        {{-- <p class="des2">Aku adalah yin dan tidak akan pernah berubah apapun yang terjadi.
                            Dexter ada kabar bahwa teman ku adalah seorang gadis yang imut.</p> --}}
                    </div>
                    <div class="row">
                        <a href="{{route('profile.edit' , $user->id)}}" class="button"> 
                            <button>Edit</button>
                        </a>
                        <a class="button2">Update</a>
                    </div>
                </div>
                    
            </div>
           
        </div>

    
      

        @include('nav.footer')

</body>
