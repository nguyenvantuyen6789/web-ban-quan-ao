<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link rel="stylesheet" href="public/CSS/custom_login.css">

</head>
<body>
    <div class="container-fluid" style = "min-height: 46.3em; background-color:#000;">
        <div class="row" style = "padding-top:10em;">
            <div class="col-6 mx-auto">
                    <h2 class = "text-white">Đăng ký</h2>
                    <form method="POST" class = "" action="index.php?controller=login&action=store">

                        <div class="mb-3">
                            <input class="border-0 border-bottom col-12 py-3 bg-transparent text-white" placeholder = "Tên đăng nhập" name = "user_name" style="outline: none;">
                        </div>
                        <div class="mb-3">
                            <input type="email" class="border-0 border-bottom col-12 py-3 bg-transparent text-white" placeholder = "Email" name = "user_email" style="outline: none;">
                        </div>
                        <div class="mb-3">
                            <input type="password" class="border-0 border-bottom col-12 py-3 bg-transparent text-white" placeholder= "Mật khẩu" name = "password" style="outline: none;">
                        </div>

                        <button  type="submit" name= "register_btn" class = "text-dark py-3 mt-3 col-12 border-0 bg-transparent login__button position-relative">
                            <div class="text-white">ĐĂNG KÝ</div>
                        </button>

                    </form>
            </div>
        
        </div>
    </div>
</body>
</html>