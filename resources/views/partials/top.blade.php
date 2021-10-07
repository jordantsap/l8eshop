<header class="header_area">
    <div class="nav bg-grey">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <nav class="d-flex justify-content-center">

                        <div class="mail-nav"><a href="mailto:info@e-karonis.gr">info@e-karonis.gr</a> |</div>
                        <div class="position-nav"><a
                                href="https://www.google.gr/maps/place/%CE%9A%CE%91%CE%A1%CE%A9%CE%9D%CE%97%CE%A3+%CE%97%CE%9B%CE%95%CE%9A%CE%A4%CE%A1%CE%99%CE%9A%CE%91+%CE%9C%CE%9F%CE%9D%CE%9F%CE%A0%CE%A1%CE%9F%CE%A3%CE%A9%CE%A0%CE%97+%CE%95.%CE%A0.%CE%95/@38.0379127,23.6982427,17z/data=!4m16!1m10!4m9!1m0!1m6!1m2!1s0x14a1a309b10ff57b:0xbbd0ac04a2095ea1!2zzprOkc6hzqnOnc6XzqMgzpfOm86VzprOpM6hzpnOms6RIM6czp_Onc6fzqDOoc6fzqPOqc6gzpcgzpUuzqAuzpUsIM6VzrvOsc65z47OvSA1NCwgzorOu865zr_OvSAxMzEgMjM!2m2!1d23.7002514!2d38.0380388!3e0!3m4!1s0x14a1a309b10ff57b:0xbbd0ac04a2095ea1!8m2!3d38.0380388!4d23.7002514"
                                target="_blank">Ελαιών 54, Ίλιον, Αθήνα</a>&nbsp;|</div>
                        <div class="position-nav"><strong>Ωράριο καταστήματος:&nbsp; &nbsp;Καθημερινά</strong> 9πμ -
                            9μμ&nbsp; &nbsp;/&nbsp; &nbsp;<strong>Σάββατο</strong> 9πμ - 6μμ&nbsp; &nbsp;/&nbsp;
                            &nbsp;<strong>Κυριακή</strong> κλειστά</div>
                        <div class="social_header">
                            <ul>
                                <li class="facebook">
                                    <a class="_blank"
                                        href="https://www.facebook.com/KARONISELECTRICS/" target="_blank">
                                        <span>Facebook</span>
                                    </a></li>
                            </ul>
                        </div>
                        <div class="header_userinfo d-flex justify-content-end">
                            <div class="top-userinfo">

                                    <li class="dropdownlang pt-3">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" id="dropdownMenuButton1" data-bs-toggle="" aria-expanded="false">
                                            {{ app()->getLocale() }}
                                            {{-- <i class="fas fa-lg fa-globe"></i> --}}
                                        </a>
                                        <ul class="dropdown-lang-menu" aria-labelledby="dropdownMenuButton1">


                                            @foreach (config('translatable.locales') as $lang => $language)
                                                @if ($lang != app()->getLocale())
                                                    <li>
                                                        <a href="{{ route('lang.switch', $lang) }}">
                                                            {{ $language }}
                                                        </a>
                                                    </li>
                                                @endif
                                            @endforeach

                                        </ul>
                                    </li>
                                {{-- <div class="dropdown top-links current"> <span>User Name</span></div> --}}
                                {{-- <div class="dropdown">
                                    <a class="position-nav dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                      Λογαριασμός
                                    </a>
                                    <br>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                      <li><a class="dropdown-item" href="login">{{ __('Login') }}</a></li>
                                      <li><a class="dropdown-item" href="backend/dashboard">{{__('Dashboard')}}</a></li>

                                    </ul>
                                  </div> --}}

                            </div>
                        </div>
                        <li class="">
                            @auth
                            <a class="btn btn-link" href="{{route('dashboard')}}">Dashboard</a>
                            @endauth
                            @guest
                            <a class="btn btn-link" href="{{route('login')}}">Login</a>
                            @endguest
                        </li>
                    </nav>
                </div>
            </div>
        </div>
    </div>



    {{-- <div class="">
        <div class="nav">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div>
                            <div class="header_userinfo">
                                <div class="top-userinfo">
                                    <ul class="nav navbar-nav menu_nav list-group">
                                        @if (Route::has('login'))
                                            <div class="">
                                                @auth
                                                    <li class="nav-item">
                                                        <a href="{{ route('dashboard') }}"
                                                            class="nav-link text-sm text-gray-700 underline"><i
                                                                class="fas fa-user"></i></a>
                                                    </li>
                                                @else
                                                    <li class="nav-item">
                                                        <a href="{{ route('login') }}"
                                                            class="nav-link text-sm text-gray-700 underline">Log in</a>
                                                    </li>
                                                @endauth
                                            </div>
                                        @endif
                                        <li class="list-group-item">
                                            <i class="fas fa-search"></i>
                                        </li>
                                        <li class="list-group-item">
                                            <i class="fas fa-shopping-cart"></i>
                                            <span class="nav-shop__circle">3</span>
                                        </li>
                                    </ul>

                                </div>
                            </div>
                            <div class="mail-nav"><a href="mailto:info@e-karonis.gr">info@e-karonis.gr</a> |</div>
                            <div class="position-nav"><a
                                    href="https://www.google.gr/maps/place/%CE%9A%CE%91%CE%A1%CE%A9%CE%9D%CE%97%CE%A3+%CE%97%CE%9B%CE%95%CE%9A%CE%A4%CE%A1%CE%99%CE%9A%CE%91+%CE%9C%CE%9F%CE%9D%CE%9F%CE%A0%CE%A1%CE%9F%CE%A3%CE%A9%CE%A0%CE%97+%CE%95.%CE%A0.%CE%95/@38.0379127,23.6982427,17z/data=!4m16!1m10!4m9!1m0!1m6!1m2!1s0x14a1a309b10ff57b:0xbbd0ac04a2095ea1!2zzprOkc6hzqnOnc6XzqMgzpfOm86VzprOpM6hzpnOms6RIM6czp_Onc6fzqDOoc6fzqPOqc6gzpcgzpUuzqAuzpUsIM6VzrvOsc65z47OvSA1NCwgzorOu865zr_OvSAxMzEgMjM!2m2!1d23.7002514!2d38.0380388!3e0!3m4!1s0x14a1a309b10ff57b:0xbbd0ac04a2095ea1!8m2!3d38.0380388!4d23.7002514"
                                    target="_blank">Ελαιών 54, Ίλιον, Αθήνα</a>&nbsp;|</div>
                            <div class="position-nav"><strong>Ωράριο καταστήματος:&nbsp; &nbsp;Καθημερινά</strong> 9πμ -
                                9μμ&nbsp; &nbsp;/&nbsp; &nbsp;<strong>Σάββατο</strong> 9πμ - 6μμ&nbsp; &nbsp;/&nbsp;
                                &nbsp;<strong>Κυριακή</strong> κλειστά</div>
                            <div class="social_header">
                                <ul>
                                    <li class="facebook"> <a class="_blank"
                                            href="https://www.facebook.com/KARONISELECTRICS/" target="_blank">
                                            <span>Facebook</span> </a></li>
                                </ul>
                            </div>
                        </div>
                        <!----nav end ---->
                    </div>
                </div>
            </div>
        </div>

    </div> --}}

</header>
