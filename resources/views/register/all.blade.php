<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulir Registrasi</title>
  <link rel="stylesheet" href="/css/registrasi.css">

   
</head>
<body>

  <div class="container">
    
    <form action="{{ route('register')}}" method="post">
      <div class="row">

        
      <div class="txt">
         
        <h2>Buat Akun</h2>
        <p>Memudahkan kalian untuk les</p>
    
          @csrf
          
          <input type="text" id="name" placeholder="Nama" name="name" id="exampleFormControllerInput1" required>
          @if ($errors->has('name'))
              <span class="text-danger">{{ $errors->first('name') }}</span>
          @endif


          <input type="text" id="email" placeholder="Email" name="email" id="exampleFormControllerInput1">
          @if ($errors->has('email'))
              <span class="text-danger">{{ $errors->first('email') }}</span>
          @endif
          


        <input type="text" id="alamat" placeholder="Alamat" id="exampleFormControllerInput1" name="alamat">
        @if ($errors->has('alamat'))
          <span class="text-danger">{{ $errirs->first('email')}}</span>
          
        @endif

        <input type="number" id="no_hp" placeholder="No Handphone" id="exampleFormControllerInput1" name="no_hp">
        @if ($errors->has('no_hp'))
          <span class="text-danger">{{ $errirs->first('no_hp')}}</span>
          
        @endif


        <input type="password" id="password" placeholder="Password" name="password">
        @if ($errors->has('password'))
          <span class="text-danger">{{$errors->first('password')}}</span>
          
        @endif


        <button type="submit">{{ __('Register')}}</button>
            <div class="row">
            <p class="sdh">Sudah punya akun?</p>
            <a class="lgn" href="login">Login</a>
            </div>
     </div>
  
        <div class="retro">
          <img src="img/regist.png" alt="">
        </div>

      </div>

      
    </form>
  </div>

</body>
</html>
