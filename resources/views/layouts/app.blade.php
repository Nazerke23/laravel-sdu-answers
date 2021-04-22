<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>COPY_POSTY</title>
    
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Saira&display=swap');
    </style>

    <style>
        /* Navbar container */
        .navbar {
        overflow: hidden;
        background-color: #333;
        font-family: Arial;
        }

        /* Links inside the navbar */
        .navbar a {
        float: left;
        font-size: 16px;
        color: white;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
        }

        /* The dropdown container */
        .dropdown {
        float: left;
        overflow: hidden;
        }

        /* Dropdown button */
        .dropdown .dropbtn {
        font-size: 16px;
        border: none;
        outline: none;
        color: white;
        padding: 14px 16px;
        background-color: inherit;
        font-family: inherit; /* Important for vertical align on mobile phones */
        margin: 0; /* Important for vertical align on mobile phones */
        }

        /* Add a red background color to navbar links on hover */
        .navbar a:hover, .dropdown:hover .dropbtn {
        /* background-color: red; */
        }

        /* Dropdown content (hidden by default) */
        .dropdown-content {
        display: none;
        position: absolute;
        background-color: #f9f9f9;
        min-width: 160px;
        box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
        z-index: 1;
        }

        /* Links inside the dropdown */
        .dropdown-content a {
        float: none;
        color: black;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
        text-align: left;
        }

        /* Add a grey background color to dropdown links on hover */
        .dropdown-content a:hover {
        background-color: #ddd;
        }

        /* Show the dropdown menu on hover */
        .dropdown:hover .dropdown-content {
        display: block;
        }




footer{
    bottom: 0;
    left: 0;
    right: 0;
    background: rgb(30, 91, 206);
    height: auto;
    width: 100vw;
    font-family: "Open Sans";
    padding-top: 40px;
    color: #fff;
}
.footer-content{
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
    text-align: center;
}
.footer-content h3{
    font-size: 1.8rem;
    font-weight: 400;
    text-transform: capitalize;
    line-height: 3rem;
}
.footer-content p{
    max-width: 500px;
    margin: 10px auto;
    line-height: 28px;
    font-size: 14px;
}
.socials{
    list-style: none;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 1rem 0 3rem 0;
}
.socials li{
    margin: 0 10px;
}
.socials a{
    text-decoration: none;
    color: #fff;
}
.socials a i{
    font-size: 1.1rem;
    transition: color .4s ease;

}
.socials a:hover i{
    color: aqua;
}

.footer-bottom{
    background: rgb(39, 126, 226);
    width: 100vw;
    padding: 20px 0;
    text-align: center;
}
.footer-bottom p{
    font-size: 14px;
    word-spacing: 2px;
    text-transform: capitalize;
}
.footer-bottom span{
    text-transform: uppercase;
    opacity: .4;
    font-weight: 200;
}
    </style>

</head>
<body class="" style="background-color: #ffffff">
    <nav class="p-6 bg-white flex justify-between" style="border-bottom: 1px solid rgb(207, 206, 206); font-family: 'Saira', sans-serif; font-size:20px">
        <ul class="flex items-center">
            <li><a href="/" class = "p-3" style="color: #2079ff">{{ __('messages.sduanswers') }}</a></li>
            <li><a href="{{ route('dashboard') }}" class = "p-3">{{ __('messages.aboutus') }}</a></li>
            <li><a href="{{ route('posts') }}" class = "p-3">{{ __('messages.questions') }}</a></li>
        </ul>

        

        <ul class="flex items-center">
            <div class="dropdown">
                <button class="dropbtn" style="color: black; font-size: 20px">
                  {{ Config::get('languages')[App::getLocale()] }}
                </button>
                <div class="dropdown-content">
                  @foreach (Config::get('languages') as $lang => $language)
                    @if ($lang != App::getLocale())
                            <a class="dropdown-item-naz" href="{{ route('lang.switch', $lang) }}"> {{$language}}</a>
                    @endif
                 @endforeach
                </div>
            </div>

            @auth
                <li><a href="{{ url('/profile') }}" class = "p-3">{{ auth()->user()->name  }} 👤</a></li>
                <li>
                    <form action="{{ route('logout') }}" method="POST" class="p-3 inline">
                        @csrf
                        <button type="submit" >Logout 🪦</button>
                    </form>
                </li>
            @endauth

            @guest
                <li><a href="{{ route('login') }}" class = "p-3">Login</a></li>
                <li><a href="{{ route('register') }}" class = "p-3">Register</a></li>
            @endguest

                
  
        </ul>
    </nav>
    @yield('content')

    <footer style="margin-top: 60px">
        <div class="footer-content">
            <h3>SDU Answers</h3>
            <p style="font-size: 18px">We're on a mission to answer every question</p>
            <ul class="socials">
                <li><a href="#"><i class="fa fas-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin-square"></i></a></li>
            </ul>
        </div>
    </footer>
</body>
</html>