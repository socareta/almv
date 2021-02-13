<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" href="{{ url('img/dummy.png') }}" sizes="32x32" />
    <link rel="icon" href="{{ url('img/dummy.png') }}" sizes="192x192" />
    <link rel="apple-touch-icon" href="{{ url('img/dummy.png') }}" />
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
        <nav class="navbar navbar-expand-md bg-white text-dark fixed-top" style="box-shadow: 0 0 20px grey;">
            <div class="container">
                <a class="navbar-brand" href=" {{ url('/') }} "> <h1>ALOMOVE</h1> </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon icofont-navigation-menu  mt-2"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        
                    </ul>
                </div>
            </div>
        </nav>

        <main >
            <div class="step-1" v-if="step == 1">
                <div class="row" style="height: 100vh;width: 100%;">
                    <div class="col-md-4" style="
                    background-image: url(https://alomoves.s3.amazonaws.com/manual_uploads/shared/surveys/onboarding/landing/large.jpg);
                    background-size: cover;
                    background-position: center;
                    background-repeat: no-repeat;
                    ">
                    </div>
                    <div class="col-md-3"></div>
                    <div class="col-md-5" style="padding-top: 15%;">
                            <h4 style="font-weight:700">WELCOME!</h4>
                            <h1 style="font-weight:900">LET'S FIND WHAT MOVES YOU</h1>
                            <p class="p-two" style="font-weight:600">Answer a few questions to help us personalize your class recommendations.</p>

                            <a href="{{ route('survey',2) }}" class="btn btn-black pl-5 pr-5" style="font-weight:700">TAKE SURVEY</a>
                            <a href="{{ route('login') }}" class="btn btn-brand pl-5 pr-5">SKIP FOR NOW</a>
                    </div>
                </div>
            </div>
            <div class="step-2" v-if="step == 2">
                <div class="row" style="height: 100vh;width: 100%;">
                    <div class="col-md-4" style="
                    background-image: url(https://d67d2miip5sqw.cloudfront.net/manual_uploads/shared/surveys/onboarding/2A7R2095/large.jpg?Policy=eyJTdGF0ZW1lbnQiOlt7IlJlc291cmNlIjoiaHR0cHM6Ly9kNjdkMm1paXA1c3F3LmNsb3VkZnJvbnQubmV0L21hbnVhbF91cGxvYWRzL3NoYXJlZC9zdXJ2ZXlzL29uYm9hcmRpbmcvMkE3UjIwOTUvbGFyZ2UuanBnIiwiQ29uZGl0aW9uIjp7IkRhdGVMZXNzVGhhbiI6eyJBV1M6RXBvY2hUaW1lIjoxNjEyNjE2ODc5fX19XX0_&Signature=BwBLwvckF-zH67PDcHdBarPADqiQdDTEg70SR6ct3Em826Kny~7lAUfs6mRpGkX--O-Qb5fRIb3VtpOFDw-Si3ifLFlVv6uLuVm2lqOnR5Q~H8MSBRXSSCVqxbM0tiENaZup1W4~2O6bSksbXMdnAF4Q21nKBcoD36Kv8OeMJwQKfqcMLyaqh2bgTCQckrxY7FZnkrCCg-mSHREu2LwBw8J0cKAW-bT03EAr-QB7uPqfp66MRPcP3xeN-tEtD6Jzh7OGJSwOVGZQd2yXM0otT9jUvaVh042U3OBipyb1TcXFaF1f~lBIHjuRsVjgEQGG3fLjAS8FZC2l1tIHYnXQrg__&Key-Pair-Id=APKAJWYH6FGHLG2AQTHQ);
                    background-size: cover;
                    background-position: center;
                    background-repeat: no-repeat;
                    ">
                    </div>
                    <div class="col-md-3"></div>
                    <div class="col-md-5" style="padding-top: 110px;">
                            <h5 class="survey-sub-header">QUESTION 1 OF 3!</h5>
                            <h1 style="font-weight:900">WHAT ARE YOU INTERESTED IN?</h1>
                            <p class="p-two">Select <strong>up to 3 areas</strong> .</p>
                            <div class="row">
                                <div class="col-md-6 mt-3">
                                    <div class="form-check" style="border:2px solid grey;border-radius:5px;">
                                        <input class="form-check-input" type="checkbox" value="yoga" v-model="interest" id="defaultCheck1" style="margin-top: -8px;">
                                        <label class="form-check-label" for="defaultCheck1">
                                            <strong>YOGA</strong> 
                                            <p>Vinyasa, Ashtanga, Kundalini, Hatha, Restorative, Prenatal</p> 
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-6 mt-3">
                                    <div class="form-check" style="border:2px solid grey;border-radius:5px;">
                                        <input class="form-check-input" type="checkbox" value="fitness" v-model="interest" id="defaultCheck2" style="margin-top: -8px;">
                                        <label class="form-check-label" for="defaultCheck2">
                                        <strong>FITNESS</strong> 
                                        <p>Strength, Barre, Pilates, HIIT, Core, Stretching</p> 
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-6 mt-3">
                                    <div class="form-check" style="border:2px solid grey;border-radius:5px;">
                                        <input class="form-check-input" type="checkbox" value="mindfulness" v-model="interest" id="defaultCheck3" style="margin-top: -8px;">
                                        <label class="form-check-label" for="defaultCheck3">
                                            <strong>MINDFULNESS</strong> 
                                            <p>Meditation, Breathwork, Sound Bath, Yoga Nidra</p> 
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-6 mt-3">
                                    <div class="form-check" style="border:2px solid grey;border-radius:5px;">
                                        <input class="form-check-input" type="checkbox" value="skills" v-model="interest" id="defaultCheck4" style="margin-top: -8px;">
                                        <label class="form-check-label" for="defaultCheck4">
                                            <strong>SKILLS</strong>    
                                            <p>Handstands, Arm Balances, Flexibility, Mobility</p> 
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <a href="{{ route('survey',3) }}" class="btn btn-black btn-block mt-5" style="font-weight:700">NEXT QUESTION</a>
                    </div>
                </div>
            </div>
            <div class="step-3" v-if="step == 3">
                <div class="row" style="height: 100vh;width: 100%;">
                    <div class="col-md-4" style="
                    background-image: url(https://d67d2miip5sqw.cloudfront.net/manual_uploads/shared/surveys/onboarding/3A7R3934/large.jpg?Policy=eyJTdGF0ZW1lbnQiOlt7IlJlc291cmNlIjoiaHR0cHM6Ly9kNjdkMm1paXA1c3F3LmNsb3VkZnJvbnQubmV0L21hbnVhbF91cGxvYWRzL3NoYXJlZC9zdXJ2ZXlzL29uYm9hcmRpbmcvM0E3UjM5MzQvbGFyZ2UuanBnIiwiQ29uZGl0aW9uIjp7IkRhdGVMZXNzVGhhbiI6eyJBV1M6RXBvY2hUaW1lIjoxNjEyODYwMTQ2fX19XX0_&Signature=GYPifbfdF9zPlg34QoqfbwjSWcNmxpLNoZenBUqdgY-aRwRGFfkB1edcWn33WxXESQcb1inxXIcZzgRI3Iz5eUJ~RNOPaJmrZ11LIevH88CFKNnYrpStcEW1LG2kBvjEDZ-9GVWPfHD22PmOHeGtwqqb4Fds4BbfaWjSrnt4fwjKdxHM2NznMXhr-Ifga07Il3gOCJwYVhga9eVLrBmIBrtlTR7N2CkbFNPF8tzLUY5aGzYggAl0WZMAA8L3qIEFQrt8lq4Tagi~fcEpZ6s2Get-O8hKFLCQ79IbrbZl6fICTn5z4TIoyjJsLnH-nL203X06UVccwaPVOpQpJOkuEA__&Key-Pair-Id=APKAJWYH6FGHLG2AQTHQ);
                    background-size: cover;
                    background-position: center;
                    background-repeat: no-repeat;
                    ">
                    </div>
                    <div class="col-md-3"></div>
                    <div class="col-md-5" style="padding-top: 110px;">
                            <a href="{{ route('survey',2) }}"><h6 class="survey-sub-header a-black"><i class="icofont-long-arrow-left"></i> BONUS QUESTION</h6></a> 
                            <h1 style="font-weight:900">ARE THERE ANY STYLES YOU WANT TO TRY?</h1>
                            <hr>
                            @foreach($categories as $key=>$category)
                            @if($category->parent_id == '0')
                            <h6 class="uppercase mt-3">{{ $category->name }}</h6> 
                            @else
                            <div class="form-check pl-4">
                                <input class="form-check-input" type="checkbox" value="{{$category->name}}" id="style{{$key}}" v-model="style">
                                <label class="form-check-label uppercase" for="style{{$key}}">
                                  {{$category->name}}
                                </label>
                            </div> 
                            @endif
                            @endforeach
                            
                            <a href="{{ route('survey',4) }}" class="btn btn-black pl-5 pr-5 btn-block" style="font-weight:700">NEXT QUESTION</a>
                    </div>
                </div>
            </div>

            <div class="step-4" v-if="step == 4">
                <div class="row" style="height: 100vh;width: 100%;">
                    <div class="col-md-4" style="
                    background-image: url(https://d67d2miip5sqw.cloudfront.net/manual_uploads/shared/surveys/onboarding/ALO02607/large.jpg?Policy=eyJTdGF0ZW1lbnQiOlt7IlJlc291cmNlIjoiaHR0cHM6Ly9kNjdkMm1paXA1c3F3LmNsb3VkZnJvbnQubmV0L21hbnVhbF91cGxvYWRzL3NoYXJlZC9zdXJ2ZXlzL29uYm9hcmRpbmcvQUxPMDI2MDcvbGFyZ2UuanBnIiwiQ29uZGl0aW9uIjp7IkRhdGVMZXNzVGhhbiI6eyJBV1M6RXBvY2hUaW1lIjoxNjEyODYxODQ0fX19XX0_&Signature=WVA0XNa3Eu-50M1xrndwPwj6IHnRrxHbDgEW~xcH2z3OEmuSx1p6oZmAJRiEP9bH1IyrOBCfA7EjH~nh-GBiJcQ-afytaP-LGtbhcGj2ay3~-0-odCMTWyVqbpHmm0xMrYww76~ej~AXADkguqr5s4Me4TSzN3NPuBYEdcjEo-jjH5gBJUMI~BiIBh08Z0IvBCpIg1Q7Dn0lWR-BwOu-6S-HBzujaHTY8n0wDCxngvbnO3lgA-fjEtEmOcRjRp3sGu2dDDMbmRosmZteVmT5Eq9Gn2QGqzZgKThw9WtiiWpFe7Gn37seI8cVUK3APKDiWyHoN9DRpJoeS-VXO~37RA__&Key-Pair-Id=APKAJWYH6FGHLG2AQTHQ);
                    background-size: cover;
                    background-position: center;
                    background-repeat: no-repeat;
                    ">
                    </div>
                    <div class="col-md-3"></div>
                    <div class="col-md-5" style="padding-top: 110px;">
                            <a href="{{ route('survey',3) }}"><h6 class="survey-sub-header"><i class="icofont-long-arrow-left"></i> BONUS QUESTION</h6></a>
                            <h1 style="font-weight:900">HOW EXPERIENCED ARE YOU IN YOGA?</h1>
                            <hr>
                            @php $dificulty =['BEGINNER','MODERATE','INTERMEDIATE','ADVANCED'];  @endphp
                            @foreach($dificulty as $key=>$value)
                            <div class="form-check pl-4 mt-3" style="padding: 15px;border: 2px solid grey;    border-radius: 8px;" :style="border">
                                <input class="form-check-input" type="radio" value="{{$value}}" id="dificulty{{$key}}" v-model="style">
                                <label class="form-check-label uppercase" for="dificulty{{$key}}" style="width: 100%;text-align: center;">
                                  {{$value}}
                                </label>
                            </div> 
                            @endforeach
                            
                            <a href="{{ route('survey',5) }}" class="btn btn-black pl-5 pr-5 btn-block mt-5" style="font-weight:700">NEXT QUESTION</a>
                    </div>
                </div>
            </div>

            <div class="step-25" v-if="step == 25">
                <div class="row" style="height: 100vh;width: 100%;">
                    <div class="col-md-4" style="
                    background-image: url(https://d67d2miip5sqw.cloudfront.net/manual_uploads/shared/surveys/onboarding/ALO02607/large.jpg?Policy=eyJTdGF0ZW1lbnQiOlt7IlJlc291cmNlIjoiaHR0cHM6Ly9kNjdkMm1paXA1c3F3LmNsb3VkZnJvbnQubmV0L21hbnVhbF91cGxvYWRzL3NoYXJlZC9zdXJ2ZXlzL29uYm9hcmRpbmcvQUxPMDI2MDcvbGFyZ2UuanBnIiwiQ29uZGl0aW9uIjp7IkRhdGVMZXNzVGhhbiI6eyJBV1M6RXBvY2hUaW1lIjoxNjEyODYxODQ0fX19XX0_&Signature=WVA0XNa3Eu-50M1xrndwPwj6IHnRrxHbDgEW~xcH2z3OEmuSx1p6oZmAJRiEP9bH1IyrOBCfA7EjH~nh-GBiJcQ-afytaP-LGtbhcGj2ay3~-0-odCMTWyVqbpHmm0xMrYww76~ej~AXADkguqr5s4Me4TSzN3NPuBYEdcjEo-jjH5gBJUMI~BiIBh08Z0IvBCpIg1Q7Dn0lWR-BwOu-6S-HBzujaHTY8n0wDCxngvbnO3lgA-fjEtEmOcRjRp3sGu2dDDMbmRosmZteVmT5Eq9Gn2QGqzZgKThw9WtiiWpFe7Gn37seI8cVUK3APKDiWyHoN9DRpJoeS-VXO~37RA__&Key-Pair-Id=APKAJWYH6FGHLG2AQTHQ);
                    background-size: cover;
                    background-position: center;
                    background-repeat: no-repeat;
                    ">
                    </div>
                    <div class="col-md-3"></div>
                    <div class="col-md-5" style="padding-top: 110px;">
                            <h6 class="survey-sub-header">QUESTION 2 OF 3</h6>
                            <h1 style="font-weight:900">WHAT ARE YOUR GOALS?</h1>
                            <p class="p-two">Select <strong>up to 3 goals</strong> .</p>
                            <hr>
                            @php $dificulty =['BUILD STRENGTH','INCREASE FLEXIBILITY','GET FIT','REDUCE STRESS','IMPROVE A SKILL','TRY SOMETHING NEW'];  @endphp
                            <div class="row">
                            
                            @foreach($dificulty as $key=>$value)
                            <div class="col-md-4">
                                <div class="form-check pl-4 mt-3" style="height:100px;border: 2px solid grey;    border-radius: 8px;" :style="border">
                                    <input class="form-check-input" type="checkbox" value="{{$value}}" id="dificulty{{$key}}" v-model="style" style="    margin-top: -10px;">
                                    <label class="form-check-label uppercase" for="dificulty{{$key}}" style="margin-top:15%;width: 100%;height:100%;text-align: center;">
                                    {{$value}}
                                    </label>
                                </div> 
                            </div>
                            @endforeach
                            </div>
                            <a href="{{ route('survey',5) }}" class="btn btn-black pl-5 pr-5 btn-block mt-5" style="font-weight:700">SUBMIT</a>
                    </div>
                </div>
            </div>
        </main>
       
        
    </div>
    <!-- Scripts -->
    <script  src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
 
    <script>
        new Vue({
            el: '#app',
            data: {
                step: {{$step}},
                interest: [],
                style:[],
                dificulty: null,
            },
            methods: {
                next(){
                    this.step+=1
                },
                interestChange(type){
                    var check = true;
                    array.forEach(element => {
                        if(element == type){
                            check = true
                        }
                    });
                    
                }
            },
        })
        
    </script>
</body>
</html>
