<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="description" content="Metro, a sleek, intuitive, and powerful framework for faster and easier web development for Windows Metro Style.">
    <meta name="keywords" content="HTML, CSS, JS, JavaScript, framework, metro, front-end, frontend, web development">
    <meta name="author" content="Sergey Pimenov and Metro UI CSS contributors">

    <link rel='shortcut icon' type='image/x-icon' href='../favicon.ico' />

    <title>Login form :: Metro UI CSS - The front-end framework for developing projects on the web in Windows Metro Style</title>


    <link href="{{asset('HMS/resources/assets/css/metro.css')}}" rel="stylesheet">
    <link href="{{asset('HMS/resources/assets/css/metro-icons.css')}}" rel="stylesheet">
    <link href="{{ asset('HMS/resources/assets/css/metro-responsive.css')}}" rel="stylesheet">
    <link href="{{ asset('HMS/resources/assets/css/metro-schemes.min.css')}}" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.10/js/jquery.dataTables.min.js"></script>

    <script src=" {{ asset('HMS/resources/assets/js/metro.js') }}"></script>
    <style>
        .login-form {
            width: 25rem;
            /*height: 18.75rem; */
            position: fixed;
            top: 50%;
            margin-top: -9.375rem;
            left: 50%;
            margin-left: -12.5rem;
            background-color: #ffffff;
            opacity: 0;
            -webkit-transform: scale(.8);
            transform: scale(.8);
        }
    </style>

    <script>

        $(function(){
            var form = $(".login-form");

            form.css({
                opacity: 1,
                "-webkit-transform": "scale(1)",
                "transform": "scale(1)",
                "-webkit-transition": ".5s",
                "transition": ".5s"
            });
        });
    </script>
</head>
<body class="bg-darkTeal">
    <div class="login-form padding20 block-shadow">
        <form method="POST">
            {!! csrf_field() !!}
            <h1 class="text-light">Login to service</h1>
            @if(count($errors) >0)
                <hr class="thin"/>
            <div class="padding10 bg-red fg-white text-accent">
                <h5>There are some problems with you input:</h5>
            <div>
                    @foreach($errors->all() as $error)
                        <li class="padding10 text-secondary">{{$error}}</li>
                    @endforeach
            </div>
            </div>
            @endif
            <hr class="thin"/>
            <br />
            <div class="input-control text full-size" data-role="input">
                <label for="user_login">User email:</label>
                <input type="text" name="email" id="user_login">
                <button class="button helper-button clear"><span class="mif-cross"></span></button>
            </div>
            <br />
            <br />
            <div class="input-control password full-size" data-role="input">
                <label for="user_password">User password:</label>
                <input type="password" name="password" id="user_password">
                <button class="button helper-button reveal"><span class="mif-looks"></span></button>
            </div>
            <br />
            <br />
            <div class="form-actions">
                <button type="submit" class="button primary">Login to...</button>
                <button type="button" class="button link">Cancel</button>
            </div>
        </form>
    </div>
</body>
</html>