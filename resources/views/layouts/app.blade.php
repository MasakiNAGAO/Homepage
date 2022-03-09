<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta description="長尾柾輝の個人サイトです。小ソクラテス派を中心に古典テキストの日本語訳などを掲載しています">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ secure_asset('js/app.js') }}" defer></script>
    <script src="https://kit.fontawesome.com/7ce6cb4385.js" crossorigin="anonymous"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ secure_asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ secure_asset('css/style.css')}}" rel="stylesheet">
    
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:site" content="@msk_ngo" />
    <meta property="og:url" content="https://mnagao.pya.jp" />
    <meta property="og:title" content="MasakiNAGAO" />
    <meta property="og:description" content="小ソクラテス派などに関する情報を公開しています" />
    <meta property="og:image" content="https://mnagao.pya.jp/images/topImage_small.png" />
</head>

<body>
    <div id="app">
        @component('components.header')
        @endcomponent
        
        <main>
            @yield('content')
        </main>

        @component('components.footer')
        @endcomponent
    </div>
</body>

</html>