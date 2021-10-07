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

    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-T9ZF8Q9');
    </script>
    <!-- End Google Tag Manager -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }}">

    {{-- jqueryui range slider cdn --}}
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"
        integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU=" crossorigin="anonymous"></script>
    <script>
        $(function() {
            $("#slider-range").slider({
                range: true,
                min: 0,
                max: 500,
                values: [75, 300],
                slide: function(event, ui) {
                    $("#amount").val("€" + ui.values[0] + " - €" + ui.values[1]);
                }
            });
            $("#amount").val("€" + $("#slider-range").slider("values", 0) +
                " - €" + $("#slider-range").slider("values", 1));
        });
    </script>
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/theme.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/hovereffects.css') }}">
    <link rel="stylesheet" href='{{ URL::asset('css/media.css') }}'>
    {{-- <link rel="stylesheet" href='{{ URL::asset('css/loading.css') }}'> --}}
    {{-- <link rel="stylesheet" href="{{ URL::asset('css/animate.css') }}"> --}}
    {{-- <link rel="stylesheet" href="{{ URL::asset('css/animateme.css') }}"> --}}
    {{-- <link rel="stylesheet" href="{{ URL::asset('css/app.css') }}"> --}}

    <script src="https://d2twz9av6or5hk.cloudfront.net/1.6/adally.js"></script>
        <style>
            #mic-init-access-tool .mic-access-tool-general-button>div img {
                display: inline-block;
                max-width: 60px !important;
            }

        </style>

    <script>
        window.trans = <?php
// copy all translations from /resources/lang/CURRENT_LOCALE/* to global JS variable
$lang_files = File::files(resource_path() . '/lang/' . App::getLocale());
$trans = [];
foreach ($lang_files as $f) {
    $filename = pathinfo($f)['filename'];
    $trans[$filename] = trans($filename);
}
echo json_encode($trans);
?>;
    </script>


</head>

<body>
    @routes

    <div id="app">
