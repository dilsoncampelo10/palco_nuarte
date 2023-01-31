<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="format-detection" content="telephone=no">
    <link rel="shortcut icon" href="{{asset('assets/images/logo.png')}}" type="image/x-icon">
    <title>@yield('title')</title>
    <!-- CSS-->
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Montserrat:400,500,600,700%7CPoppins:400%7CTeko:300,400">
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/fonts.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <style>
        html {
            height: 0;
        }

        body {
            background-color: #212121;
        }

        .ie-panel {
            display: none;
            background: #212121;
            padding: 10px 0;
            box-shadow: 3px 3px 5px 0 rgba(0, 0, 0, .3);
            clear: both;
            text-align: center;
            position: relative;
            z-index: 1;
        }

        html.ie-10 .ie-panel,
        html.lt-ie-10 .ie-panel {
            display: block;
        }

        .banner {
            background-image: url('assets/images/teste.png');
            width: 50%;
            height: 100%;
            position: absolute;
            right: 0;
            background-size: cover;
        }

        #danger,
        #success {
            color: #DC3545;
            text-align: center;
            margin-top: 0;
            margin-bottom: 0;
            width: 100%;
            position: absolute;
            left: 2%;
            top: 0;
            z-index: 5;
        }

        #success {
            background-color: #157347;
        }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>

    @if(session('success'))
    <div class="alert alert-success alert-dismissible fade show container mt-2" role="alert">
        <strong> {{session('success')}}</strong>

    </div>
    @endif

    @if(session('danger'))
    <div class="alert alert-danger alert-dismissible fade show container mt-2" role="alert" id="danger">
        <strong> {{session('danger')}} </strong>

    </div>
    @endif

    @yield('content')


</body>

</html>