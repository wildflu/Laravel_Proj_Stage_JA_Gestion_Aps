<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title','Laravel')</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="{{ url('css/app.css') }}">
        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
        <script src="{{ url('js/anp.js') }}"></script>
        <script src="https://kit.fontawesome.com/167cca3008.js" crossorigin="anonymous"></script>
    </head>
    <body class="antialiased">
        <div class="head">
            <div class="icon-menu">
              <i onclick="geton()" class="fa-solid fa-bars"></i>
              {{-- <i class="fa-solid fa-list"></i> --}}
              {{-- <img src="{{ url('icons/align-justify.png') }}" alt=""> --}}
            </div>
            <div class="titel-head">
              <h1>L9arda & Aziza</h1>
              <img src="{{ url('icons_images/iii.png') }}" alt="">
            </div>
            <form class="search-head" action="" method="post">
              <input type="search" name="" id="" placeholder="Search Here">
              <i id="forser" class="fa-solid fa-magnifying-glass"></i>
            </form>
        </div>
        <div class="menuleftphne">
          <ul>
            <li><a href="{{ route('home.index') }}"><strong>Home</strong><i class="fa-solid fa-house"></i></a></li>
            <li><a href="{{ route('notes.index') }}"><strong>Notes</strong><i class="fa-solid fa-user"></i></a></li>
            <li><a href="{{ route('settings.index') }}"><strong>Settings</strong><i class="fa-solid fa-user"></i></a></li>
            <li><a href="{{ route('usage.index') }}"><strong>Usage</strong><i class="fa-solid fa-hands"></i></a></li>
            <li><a href="{{ route('login.index') }}"><strong>Login</strong><i class="fa-regular fa-cart-shopping"></i></a></li>
          </ul>
          <div class="getback">
            <i onclick="getback()" class="fa-solid fa-arrow-left"></i>
          </div>
        </div>

        
        @yield('thisbody')



<!-- foter -->
        <footer  class="footerpc">
            <div class="firstfooter">
                <div class="part1">
                <div class="part12">
                    <h3>Aps Gestion</h3>
                    <p>
                        Safi Ntic <br>
                        NG 12, Maroc<br>
                        <br>
                        <strong>Phone:</strong> +1 5589 55488 55<br>
                        <strong>Email:</strong> Email@gmail.com<br>
                    </p>
                </div>
                <div class="part22">
                    <h4>Pages Links</h4>
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Settings</a></li>
                        <li><a href="#">Notes</a></li>
                        <li><a href="#">Usage</a></li>
                        <li><a href="#">Login</a></li>
                    </ul>
                </div>
                <div class="part32">
                    <h4>Services</h4>
                    <ul>
                        <li><a href="#">aaaaaaaaaaa</a></li>
                        <li><a href="#">bbbbbbbbbbb</a></li>
                        <li><a href="#">ccccccccccc</a></li>
                        <li><a href="#">ddddddddddd</a></li>
                        <li><a href="#">eeeeeeeeeee</a></li>
                    </ul>
                </div>
                </div>
                <div class="part2">
                    <h4>Our Newsletter</h4>
                    <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
                    <form action="" method="post">
                        <input type="email" name="searsh" placeholder="  Email"><input type="submit" value="Subscribe">
                    </form>
                </div>
            </div>
        </footer>

        <div class="footerlegal">
            <div class="outputfoot">
                <div class="firstpartofit">
                    <div class="copyright">
                        © Copyright
                        <strong>
                            <span class="clonspan">Aps Gestion</span>
                            </strong>
                        . All Rights Reserved
                    </div>
                </div>
                <div class="footerlinks">
                    <a href="#" class="twitter">twitter</a>
                    <a href="#" class="facebook">facebook</a>
                    <a href="#" class="instagram">instagram</a>
                    <a href="#" class="google-plus">google</a>
                </div>
            </div>
        </div>

<!-- end footer -->

    </body>
</html>
