<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title', 'Travel Agency')</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="{{'css/app.css'}}">
        <style>
            
        </style>
    </head>
    <body>
       <header id="ssite_header"></header>
       <main id="site_main">
           @yield('content')
       </main>
       <footer id="site_footer"></footer>
    </body>
</html>
