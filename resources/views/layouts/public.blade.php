@include('partials.head')
@include('partials.top')
@include('partials.header')
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-T9ZF8Q9"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

<div class="c-body">
    <main class="c-main">
        @include('partials.alerts')
        @yield('content')

    </main>
</div>

@include('partials.footer')
