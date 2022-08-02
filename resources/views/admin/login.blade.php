<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('admin/assets/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/vendors/bootstrap-icons/bootstrap-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/css/pages/auth.css') }}">
</head>

<body>
    <div id="login_form">

        <div class="row">
            <div class="cent col-lg-3 col-md-6 col-sm-6">
                <div id="main_content">
                    <div class="logo d-flex justify-content-center">
                        <a href="#"><img src="{{ asset('admin/assets/images/logo/logo.jpeg') }}" alt="Logo" height="100px" width="150px"></a>
                    </div>
                    
                    
                     @include('includes.admin.form-login')
                    <div class="card">
                        <div class="card-body">
                             <form action="{{ route('admin.login.submit') }}" method="POST">
                                @csrf
                                <div class="form-group position-relative has-icon-left mb-3 mt-9">
                                    <input type="text" class="form-control form-control-xl" placeholder="Username" name="email">
                                    <div class="form-control-icon">
                                        <i class="bi bi-person"></i>
                                    </div>
                                </div>
                                <div class="form-group position-relative has-icon-left mb-3">
                                    <input type="password" class="form-control form-control-xl" placeholder="Password" name="password">
                                    <div class="form-control-icon">
                                        <i class="bi bi-shield-lock"></i>
                                    </div>
                                </div>
                                
                                <div class="lgn d-flex justify-content-center"><button class="btn btn-sm shadow-lg mt-1">Login</button><div>
                            </form>
                        </div>
                    </div>
                   
                </div>
            </div>
        </div>

    </div>
    <style>
        .cent{
            margin:auto;
            margin-top:8%;
           
        }
        .logo{
            /* margin-left:25%; */
            margin-bottom:30px;
        }
        .card-body{
            padding-top:50px;
            height:200px;
            background-color:#faf5f5;
            border-radius:10px;
        }
        .form-group input{
            height:35px;
            background-color:white;
        }
        .btn{margin:auto; padding:3px 20px; background-color:#32b39f;}
    </style>
</body> 

</html>