

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/edit_profile.css" />
    <title>Document</title>
</head>
<body>
      
  @include('nav.nav') 
    <div class="card">
        <form action="{{route('profile.update', $user->id)}}" method="POST">
            @csrf
        <div class="row">
            <div>
                <p class="btprofile">Edit Profile</p>
                <img class="product-image" src="/img/org7.jpg" alt="">
            </div>


            <div>
            
                <div class="row">
                    
                    <div>
                        <div class="mrgn-nama">
                            <p class="nama">Nama</p>
                            <input type="text" name="name" id="name" value="{{$user['name']}}">
                        </div>
    
                        <div class="mrgn-email">
                            <p class="nama">Email</p>
                            <p class="box-nama">{{$user->email}}</p>
                        </div>
    
                    </div>
    
                    <div>
    
                        <div class="mrgn-nama">
                            <p class="nama">Alamat</p>
                            <input type="text" name="alamat" id="alamat" value="{{$user['alamat']}}">
                        </div>
    
                        <div class="mrgn-email">
                            <p class="nama">Nomer HP</p>
                            <input type="number" name="no_hp" id="no_hp" value="{{$user['no_hp']}}">
                        </div>
    
                    </div>
    
                </div>
                <div class="desc">
                    <p class="des1">Tentang diri anda:</p>
                    <div class="bio">
                        <div>
                            <label class="bio" for="bio">Bio:</label>
                        </div>
    
                        <textarea id="bio" name="bio" row="4">{{ $user['bio'] }}</textarea>
                    </div>
    
                </div>
                <div class="row">
                    <a class="button4">
                        Edit
                    </a>
                    <button type="submit" class="button3">Update</button>
                </div>
            </div>
        </div>
    </form>
    </div>

      @include('nav.footer')
  
</body>

