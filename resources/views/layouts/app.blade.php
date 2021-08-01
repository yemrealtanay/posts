<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Playfair&#43;Display:700,900" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{asset('css/blog.css') }}" rel="stylesheet">

    <style>
        .bd-placeholder-img {
          font-size: 1.125rem;
          text-anchor: middle;
          -webkit-user-select: none;
          -moz-user-select: none;
          -ms-user-select: none;
          user-select: none;
        }
  
        @media (min-width: 768px) {
          .bd-placeholder-img-lg {
            font-size: 3.5rem;
          }
        }
      </style>

</head>
<body>
    <div id="app">

        <div class="container">
            <header class="blog-header py-3">
              <div class="row flex-nowrap justify-content-between align-items-center">
                <div class="col-4 pt-1">
                  <a class="text-muted" href="#">Subscribe</a>
                </div>
                <div class="col-4 text-center">
                    <img src="img/logo.fw.png" alt="Posts" width="165">
                </div>
                <div class="col-4 d-flex justify-content-end align-items-center">
                  
                  @guest
                    @if (Route::has('login'))  
                  
                  <a class="btn btn-sm btn-outline-secondary" href="{{ route('login') }}">Giriş Yap</a>
                    
                    @endif

                    @if (Route::has('register'))
                  <a class="btn btn-sm btn-outline-secondary" href="{{ route('register') }}">Kayıt Ol</a>
                    @endif
                @else
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }}
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </li>
            @endguest
                </div>
              </div>
            </header>

            <!--Buraya kategoriler basılacak-->
            
            <div class="nav-scroller py-1 mb-2">
                <nav class="nav d-flex justify-content-between">
                  <a class="p-2 text-muted" href="#">World</a>
                  <a class="p-2 text-muted" href="#">U.S.</a>
                  <a class="p-2 text-muted" href="#">Technology</a>
                  <a class="p-2 text-muted" href="#">Design</a>
                  <a class="p-2 text-muted" href="#">Culture</a>
                  <a class="p-2 text-muted" href="#">Business</a>
                  <a class="p-2 text-muted" href="#">Politics</a>
                  <a class="p-2 text-muted" href="#">Opinion</a>
                  <a class="p-2 text-muted" href="#">Science</a>
                  <a class="p-2 text-muted" href="#">Health</a>
                  <a class="p-2 text-muted" href="#">Style</a>
                  <a class="p-2 text-muted" href="#">Travel</a>
                </nav>
              </div>

        <main class="py-4">
            @yield('content')
        </main>
    </div>

    <footer class="blog-footer">
        <p>Posts <a href="https://yemrealtanay.wordpress.com/">Yunus Emre Altanay</a> tarafından yapılmıştır</a>.</p>
        <p>
          <a href="#">Back to top</a>
        </p>
      </footer>

</body>
</html>
