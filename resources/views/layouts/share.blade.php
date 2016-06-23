<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="og:description" content="他總共獲得了 ... " />
    <meta property="og:title" content="{{ $loginUserEmail }} 在 TedxHsinchu 的體驗"/>
    <meta property="og:type" content="website"/>
    <meta property="og:url" content="{{ url('/result/'+$loginUserId) }}"/>
    <meta property="og:image" content="http://i.imgur.com/bFlbGGd.png?1"/>
    <meta property="og:site_name" content="心願體驗 | Heart CreAction" />

    <title>Ted x Hsinchu</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/speaker.css"/>
    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}


    <style>
        body {
            font-family: '微軟正黑體';
        }

        .fa-btn {
            margin-right: 2px;
        }
        #speaker-background {
          width: 100%;
          height: 500px;
          background-image: url('../images/test.jpg');
          background-repeat: round;
          position: relative;
        }

        #feeling-form {
          width: 100%;
          height: 50%;
          background-color: white;
          position: absolute;
          bottom: 0;
          left: 0;
        }
        .col-xs-4{
          padding-left:35px;
        }
    </style>
</head>
<body id="app-layout">
    

    @yield('content')

    <!-- JavaScripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}

    @yield('scripts')
</body>
</html>
