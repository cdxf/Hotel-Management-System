
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

    <title>QUAN LI KHACH SAN</title>

    <link href="{{asset('assets/css/metro.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/metro-icons.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/metro-responsive.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/mystyle.css')}}" rel="stylesheet">    

    <script src="{{ asset('assets/js/jquery-2.1.3.min.js')}}"></script>
    <script src="{{ asset('assets/js/jquery.dataTables.min.js')}}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.10/js/jquery.dataTables.min.js"></script>

    <script src=" {{ asset('assets/js/metro.js') }}"></script>

    <style>
        html, body {
            height: 100%;
        }
        body {
        }
        .page-content {
            padding-top: 3.125rem;
            min-height: 100%;
            height: 100%;
        }
        .table .input-control.checkbox {
            line-height: 1;
            min-height: 0;
            height: auto;
        }

        @media screen and (max-width: 800px){
            #cell-sidebar {
                flex-basis: 52px;
            }
            #cell-content {
                flex-basis: calc(100% - 52px);
            }
        }
    </style>

    <script>
        function pushMessage(t){
            var mes = 'Info|Implement independently';
            $.Notify({
                caption: mes.split("|")[0],
                content: mes.split("|")[1],
                type: t
            });
        }

        $(function(){
            $('.sidebar').on('click', 'li', function(){
                if (!$(this).hasClass('active')) {
                    $('.sidebar li').removeClass('active');
                    $(this).addClass('active');
                }
            })
        })
    </script>
</head>
<body class="bg-steel" >
<div class="app-bar fixed-top darcula" data-role="appbar">
    <a class="app-bar-element branding">HOTEL MANAGE SYSTEM</a>
    <span class="app-bar-divider"></span>
    <ul class="app-bar-menu">
        <li><a href="">Dashboard</a></li>
        <li>
            <a href="" class="dropdown-toggle">ROOM</a>
            <ul class="d-menu" data-role="dropdown">
                <li><a href="">New project</a></li>
                <li class="divider"></li>
                <li>
                    <a href="" class="dropdown-toggle">Reopen</a>
                    <ul class="d-menu" data-role="dropdown">
                        <li><a href="">Project 1</a></li>
                        <li><a href="">Project 2</a></li>
                        <li><a href="">Project 3</a></li>
                        <li class="divider"></li>
                        <li><a href="">Clear list</a></li>
                    </ul>
                </li>
            </ul>
        </li>
        <li>
            <a href="" class="dropdown-toggle">Language</a>
            <ul class="d-menu" data-role="dropdown">
                <li><a href="">English</a></li>
                <li><a href="">Vietnamese</a></li>
                <li class="divider"></li>
          </ul>
        </li>
        <li><a href="">BILL</a></li>
        <li>
            <a href="" class="dropdown-toggle">Help</a>
            <ul class="d-menu" data-role="dropdown">
                <li><a href="">ChatOn</a></li>
                <li><a href="">Community support</a></li>
                <li class="divider"></li>
                <li><a href="">About</a></li>
            </ul>
        </li>
    </ul>

    <div class="app-bar-element place-right">
        <span class="dropdown-toggle"><span class="mif-cog"></span>
        
         {{{ isset(Auth::user()->email) ?  Auth::user()->email : "Quyen" }}}


          </span>
        <div class="app-bar-drop-container padding10 place-right no-margin-top block-shadow fg-dark" data-role="dropdown" data-no-close="true" style="width: 220px">
            <h2 class="text-light">Quick settings</h2>
            <ul class="unstyled-list fg-dark">
                <li><a href="" class="fg-white1 fg-hover-yellow">Profile</a></li>
                <li><a href="" class="fg-white2 fg-hover-yellow">Security</a></li>
                <li><a href="{{ route('logout') }}" class="fg-white3 fg-hover-yellow">Logout</a></li>
            </ul>
        </div>
    </div>
</div>

<div class="page-content">
    <div class="flex-grid no-responsive-future" style="height: 100%;">
        <div class="row" style="height: 100%">
            <div class="cell size-x200" id="cell-sidebar" style="background-color: #71b1d1; height: 100%">
                <ul class="sidebar2 dark">
                    <li>
                        <a href="" class="dropdown-toggle">
                            <span class="mif-apps icon"></span>
                            <span class="title">RESERVATION</span>
                        </a>
                        <ul class="d-menu" data-role="dropdown">
                            <li><a href="{{ route('listroombyicon_com') }}">Booking Room</a></li>
                            <li><a href="{{ route('listbooking_com') }}">List Booking</a></li>
                             <li><a href="{{ route('checkout_rec') }}"> Checkout</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="" class="dropdown-toggle">
                            <span class="mif-apps icon"></span>
                            <span class="title">ROOM</span>
                            <span class="counter">(0)</span>
                        </a>
                        <ul class="d-menu" data-role="dropdown">
                            <li><a href="{{ route('listroom_com') }}">Room list</a></li>
                            <li><a href="{{ route('listroomtype_com') }}">Room-type list</a></li>
                            <li><a href="{{  route('listroom_com') }}">Add room</a></li>
                            <li><a href="{{ route('listroomtype_com') }}">Add room-type</a></li>

                        </ul>
                    </li>
                    <li>
                        <a href="" class="dropdown-toggle">
                            <span class="mif-apps icon"></span>
                            <span class="title">USER</span>
                            <span class="counter">(0)</span>
                        </a>
                        <ul class="d-menu" data-role="dropdown">
                            <li><a href="{{ route('listuser_com') }}">User list</a></li>
                             <li><a href="{{ route('adduser_man') }}">Add user</a></li>
                        </ul>
                    </li>
                     <li>
                        <a href="" class="dropdown-toggle">
                            <span class="mif-apps icon"></span>
                            <span class="title">GUEST</span>
                            <span class="counter">(0)</span>
                        </a>
                        <ul class="d-menu" data-role="dropdown">
                            <li><a href="{{ route('listguest_com') }}">Guest list</a></li>
                        </ul>
                    </li>
                    <li><a href="#" class="dropdown-toggle active-toggle">
                            <span class="mif-apps icon"></span>
                            <span class="title">REPORT</span>
                            <span class="counter">0</span>
                        </a></li>
                    <li><a href="#">
                            <span class="mif-vpn-publ icon"></span>
                            <span class="title">Backup data</span>
                        </a></li>
                    <li class="active"><a href="#">
                            <span class="mif-drive-eta icon"></span>
                            <span class="title">Bill</span>
                            <span class="counter">2</span>
                        </a></li>
                    <li><a href="#">
                            <span class="mif-cloud icon"></span>
                            <span class="title"></span>
                            <span class="counter">0</span>
                        </a></li>
                    <li><a href="#">
                            <span class="mif-database icon"></span>
                            <span class="title">SQL Databases</span>
                            <span class="counter">0</span>
                        </a></li>
                    <li><a href="#">
                            <span class="mif-cogs icon"></span>
                            <span class="title">Automation</span>
                            <span class="counter">0</span>
                        </a></li>
                    <li>
                        <a href="" class="dropdown-toggle">
                            <span class="mif-apps icon"></span>
                            <span class="title">Setting</span>
                            <span class="counter">(0)</span>
                        </a>
                        <ul class="d-menu" data-role="dropdown">
                            <li><a href="">Hotel profile</a></li>
                            
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="cell auto-size padding20 bg-white" id="cell-content">
            <h1 class="text-light"> @yield('title') <span class="mif-drive-eta place-right"></span></h1>
            <hr class="thin bg-grayLighter">
           
             @yield('content')
            </div>
        </div>
    </div>
</div>

<script>
    $(function(){
//    jQuery.getScript("//212.90.50.159:3000/js/so_init.js", function(data, textStatus, jqxhr){});
    })
</script>

</body>
</html>
