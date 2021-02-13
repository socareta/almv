<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" href="{{ url('img/Blue-Karma-Secrets-Blue-logo.png') }}" sizes="32x32" />
    <link rel="icon" href="{{ url('img/Blue-Karma-Secrets-Blue-logo.png') }}" sizes="192x192" />
    <link rel="apple-touch-icon" href="{{ url('img/Blue-Karma-Secrets-Blue-logo.png') }}" />
    <title>ALOMOVE</title>
    <meta name="description" content="Get inspired by the fantastic resilience of the Balinese, who have captured from crisis the wisdom to overcome with creativity. Participating as a voter will keep the feeling of connection going."/>
    <meta name="robots" content="index, follow, max-snippet:-1, max-video-preview:-1, max-image-preview:large"/>
    <link rel="canonical" href="{{ url('/') }}" />
    <meta property="og:locale" content="en_US">
    <meta property="og:type" content="website">
    <meta property="og:title" content="THE SACRED SPIRIT OF BALI​ - Blue karma Photos Contest">
    <meta property="og:description" content="Get inspired by the fantastic resilience of the Balinese, who have captured from crisis the wisdom to overcome with creativity. Participating as a voter will keep the feeling of connection going.">
    <meta property="og:url" content="{{ url('/') }}">
    <meta property="og:site_name" content="Blue karma Photos Contest">
    <meta property="og:updated_time" content="{{ date('Y-m-d') }}T09:58:20+08:00">
    <meta property="og:image" content="{{ url('img/Keliki-Sunrise.jpg') }}">
    <meta property="og:image:secure_url" content="{{ url('img/Keliki-Sunrise.jpg') }}">
    <meta property="og:image:width" content="1452">
    <meta property="og:image:height" content="868">
    <meta property="og:image:alt" content="Home page">
    <meta property="og:image:type" content="image/jpeg">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="THE SACRED SPIRIT OF BALI​ - Blue karma Photos Contest">
    <meta name="twitter:description" content="Get inspired by the fantastic resilience of the Balinese, who have captured from crisis the wisdom to overcome with creativity. Participating as a voter will keep the feeling of connection going.">
    <meta name="twitter:image" content="{{ url('img/Keliki-Sunrise.jpg') }}">
    <script type="application/ld+json" class="rank-math-schema">{
        "@context": "https://schema.org",
        "@graph": [
            {
                "@type": [
                    "Person",
                    "Organization"
                ],
                "@id": "{{ url('/') }}/#person",
                "name": "sukerta",
                "image": {
                    "@type": "ImageObject",
                    "url": "{{ url('img/bleu.png') }}"
                }
            },
            {
                "@type": "WebSite",
                "@id": "{{ url('/') }}/#website",
                "url": "{{ url('/') }}",
                "name": "sukerta",
                "publisher": {
                    "@id": "{{ url('/') }}/#person"
                },
                "inLanguage": "en-US",
                "potentialAction": {
                    "@type": "SearchAction",
                    "target": "{{ url('/') }}/?s={search_term_string}",
                    "query-input": "required name=search_term_string"
                }
            },
            {
                "@type": "ImageObject",
                "@id": "{{ url('/') }}/#primaryImage",
                "url": "{{ url('img/Keliki-Sunrise.jpg') }}",
                "width": 1452,
                "height": 868
            },
            {
                "@type": "WebPage",
                "@id": "{{ url('/') }}/#webpage",
                "url": "{{ url('/') }}",
                "name": "THE SACRED SPIRIT OF BALI\u200b - Blue karma Photos Contest",
                "datePublished": "2020-09-07T07:25:35+08:00",
                "dateModified": "2020-12-08T09:58:20+08:00",
                "isPartOf": {
                    "@id": "{{ url('/') }}"
                },
                "primaryImageOfPage": {
                    "@id": "{{ url('/') }}/#primaryImage"
                },
                "inLanguage": "en-US"
            }
        ]
    }</script>
    
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.12/dist/vue.js"></script>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/icofont.min.css') }}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
    <div id="app" style="">
        <nav class="navbar navbar-expand-md bg-white text-dark fixed-top ">
            <div class="container">
                <a class="navbar-brand" href=" {{ url('/') }} ">ALOMOVE</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon icofont-navigation-menu  mt-2"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('explore') }}">EXPLORE</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('instructors') }}">INSTRUCTORS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/photos') }}">SHOP</a>
                        </li>
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('SIGN IN') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle uppercase" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('dashboard') }}">Dashboard</a>
                                    <a class="dropdown-item" href="{{ route('product.index') }}">Products</a>
                                    @if(Auth::user()->role == 'admin')
                                    <a class="dropdown-item" href="{{ route('dinstructor.index') }}">Intructors</a>
                                    @endif
                                    <a class="dropdown-item" href="{{ route('profile') }}">Profile</a>
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
                    </ul>
                </div>
            </div>
        </nav>

        <main>
            @yield('content')
        </main>
       
        
    </div>
    <footer class="bg-brand2 p-5">
            <div class="container text-center">
                    <a href="/#beVoter" class="ml-3 mr-3 ">FAQ</a>
                    <a href="/#bePhotographer" class="ml-3 mr-3 ">SHARE</a>
                    <a href="" class="ml-3 mr-3 ">GIFT CARDS</a>
                    <a href="" class="ml-3 mr-3 " >BLOG</a>
                    <a href="" class="ml-3 mr-3 " >CAREERS</a>
                    <a href="" class="ml-3 mr-3 " >ALO YOGA</a>
            </div>
    </footer>
    
    <!-- Scripts -->
    <script  src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    @yield('footer')
    <script>
    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
    })
        
    </script>
</body>
</html>
