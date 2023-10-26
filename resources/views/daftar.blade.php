<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link  rel="stylesheet" href="/fontawesome/css/all.css">
    <link  rel="stylesheet" href="/css/daftar.css">
    <link  type="text/css" rel="stylesheet" href="/css/font.css">
    <title>Document</title>
</head>
<body>

    <div class="row">
        
        
            <div class="daftar">
              
                <input id="file-input" class="file-input" type="file">
                <img id="uploaded-image" class="uploaded-image"  alt="">
                <label for="file-input" class="file-label">
                    <p>Aplod Picture Anda</p></label>
            </div>
            
        
           
        


            <div class="jrk">
                <div>
                    <p class="s">Nama Lengkap</p>
                    <input class="input1" type="text" >
                </div>
        
                <div>
                    <p class="p">Materi Pelajar </p>
                    <input class="input1" type="text" >
                </div>
        
                <div>
                    <p class="p">Biaya Perbulan</p>
                    <input class="input1" type="text" >
                    
                </div>
                <div>
                    <p class="p">Lama Mengajar Perhari</p>
                    <input class="input1" type="text" >
                </div>
        
                <div>
                    <p class="p">Portofolio</p>
                    <input class="input1" type="text" >
                </div>

                <div>
                    <p class="p">Rekening</p>
                    <input class="input1" type="number" >
                </div>

                <div>
                    <p class="p">Alamat</p>
                    <input class="input1" type="text" >
                </div>

                <div>
                    <p class="p">Deskripsi</p>
                    <textarea></textarea>


                </div>
        
                <div>
                    <button class="btn2">Kirim</button>
                </div>
    
            </div>
    </div>
       
        
       

       
        
       

    </div>

    <script>
        const fileInput = document.getElementById('file-input');
        const uploadedImage = document.getElementById('uploaded-image');
      
        fileInput.addEventListener('change', function (event) {
          const file = event.target.files[0];
          const reader = new FileReader();
      
          reader.onload = function (e) {
            uploadedImage.src = e.target.result;
          };
      
          reader.readAsDataURL(file);
        });
      </script>
   
   
</body>
</html>