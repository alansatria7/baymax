<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulir Registrasi</title>
  <link rel="stylesheet" href="/css/login.css">

   
</head>
<body>

  <div class="container">
    
    <form action="{{route('login')}}" method="post">
      <div class="row">

        
        <div class="txt">
                <h2>Masuk</h2>
                <p>Memudahkan kalian untuk les</p>
             
                  @csrf

                  <input type="text" id="email" placeholder="Email" name="email" id="exampleFormControllerInput1" required='required'>
                @if ($errors->has('email'))
                    <span class="text-danger">{{ $errors->first('email') }}</span>
                @endif
  
                <input type="password" id="password" placeholder="Password" name="password" required="required" style="">
                @if ($errors->has('password'))
                  <span class="text-danger">{{$errors->first('password')}}</span>
                  
                @endif
              
            
                <button type="submit">Daftar</button>
                <p class="mtd">Metode Lain</p>
                <a class="gogel"><img src="img/google.png" alt="">  Sign Up With Google</a>
    
                    <div class="row">
                        <p class="sdh">Sudah punya akun?</p>
                        <a class="lgn" href="{{ route('register')}}">Register!</a>
                    </div>
                
            
          
        </div>
     
            
             


        
    
                <div class="retro">
                    <img src="img/login.png" alt="">
                </div>
    </div>
      

      
    </form>
  </div>

</body>
</html>
