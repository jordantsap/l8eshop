{{-- All starts here --}}
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{config('app.name')}} {{ __('meta.hometitle') }}</title>
    <meta name="description" content="{{ __('meta.homedescription') }}">
    <meta name="keywords" content="{{ __('meta.homekeywords') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/png">

    <link rel="stylesheet"
        href="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css') }}"
        integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
        crossorigin="anonymous" />

    {{-- @livewireStyles --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/theme.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/hovereffects.css') }}">
    <link rel="stylesheet" href='{{ URL::asset('css/media.css') }}'>
    {{-- <link rel="stylesheet" href="{{ URL::asset('css/animate.css') }}"> --}}
    {{-- <link rel="stylesheet" href="{{ URL::asset('css/animateme.css') }}"> --}}
    <link rel="stylesheet" href="{{ URL::asset('css/app.css') }}">
    {{-- @livewireStyles --}}
    <!-- Accessibility Code for "antonogloy.local" -->
    <script src="https://d2twz9av6or5hk.cloudfront.net/1.6/adally.js"></script>
    <style>
        #mic-init-access-tool {
            position: absolute !important;
            top: 0 !important;
        }

    </style>

</head>

<body>

    <div id="app">

        @include('partials.top')

        @include('partials.header')
        @include('partials.slider')

        <div class="container-fluid bg-white mb-3">
            @include('new-products')

            @include('featured-products')
        </div>
        @include('home-wedo')

        {{-- @include('home23categories') --}}
        @include('home-categories')


        {{-- @include('home-products') --}}




        @include('partials.footer')
    </div>

</body>

</html>
