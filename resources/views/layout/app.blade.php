<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title', 'Travel Agency')</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
        <!-- Font awesome -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
        <!-- Styles -->
        <link rel="stylesheet" href="{{'css/app.css'}}">
        <style>
            
        </style>
    </head>
    <body>
      
       <header id="site_header">
            <nav class="container navbar">
            <img class="logo" src="{{asset('img/logo.png')}}" alt="logo">
                 <ul class="list_menu">
                    <li><a href="{{ route('home') }}"><strong>Home</strong></a></li>
                    <li><a href="{{ route('package') }}"><strong>Trip Packages</strong></a></li>
                    <li><a href="{{ route('about') }}"><strong>About</strong></a></li>
                    <li> <a href="{{ route('tours') }}"><strong>Tours</strong></a></li>
                    <li><strong>☏</strong>  333-065-732</li>
                </ul>

            </nav>
               
       </header>
       <main id="site_main">
           @yield('content')
       </main>
       <footer id="site_footer">
           <div class="footer_content container">
               <img class="logo" src="{{asset('img/logo.png')}}" alt="logo">
                <ul>
                    <li><i class="fab fa-facebook"></i></li>
                    <li><i class="fab fa-instagram"></i></li>
                    <li><i class="fab fa-pinterest"></i></li>
                    <li><i class="fab fa-twitter-square"></i></li>
                </ul>
           </div>
       
       </footer>
    </body>
</html>
