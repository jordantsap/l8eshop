<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- sidebar menu: : style can be found in sidebar.less -->

        <ul class="sidebar-menu">

            <li class="" title="Αλλαγή Γλώσσας Εμφάνισης">
                @foreach (config('translatable.locales') as $lang => $language)
                    @if ($lang != app()->getLocale())
                    {{-- <li> --}}
                        <a href="{{ route('lang.switch', $lang) }}">
                            <i class="fas fa-lg fa-globe" ></i>
                            {{ __('page.changeto') }}
                            <span class="ml-5">{{ $language }}</span>
                        </a>
                    {{-- </li> --}}
                    @endif
                @endforeach
            </li>


            <li class="active">
                <a href="{{ route('dashboard') }}">
                    <i class="fas fa-tachometer-alt"></i> :
                    <span>{{ Auth::user()->username }}
                        <br> {{__('admin.role')}}
                        {{ Auth::user()->getRoleNames() }} </span></a>
            </li>


            @hasanyrole('Super-Admin|Admin')
            <li class="treeview">
                <a href="{{ config('translation.ui_url') }}">
                    <span> {{ __('admin.maincategories')}}</span></a>

                {{-- <a class="text-center" style="color:white">
                    <i class="fa fa-tasks" aria-hidden="true"></i>
                    <span>{{__("admin.system")}}</span>
                </a> --}}
                <a href="#"><i class="fa fa-link"></i> <span>{{__("admin.system")}}</span>
                  <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                  </span>
                </a>
                <ul class="treeview-menu">
                  <li><a href="{{ route('cache.clear') }}">
                    <i class="fa fa-angle-left pull-right"></i>
                    <span>{{__("Clear Cache")}}</span></a>
                  </li>
                  <li><a href="{{ route('config.clear') }}">
                    <i class="fa fa-angle-left pull-right"></i>
                    <span>{{__("Clear Config")}}</span></a>
                  </li>
                </ul>
              </li>
            <li><a href="{{ route('roles.index') }}">
                    <i class="fas fa-users-cog"></i> <span>{{__("admin.roles")}}</span></a>
            </li>

            <li><a href="{{ route('permissions.index') }}">
                    <i class="fas fa-user-plus"></i> <span>{{__('admin.permissions')}}</span></a></li>
            @endhasanyrole

            @hasanyrole('Super-Admin|Admin|Manager')
            <li>
                <a href="{{ route('users.index') }}">
                    <i class="fas fa-user"></i> <span> {{ __('admin.users')}}</span>
                </a>
            </li>
            <li class="text-center" style="color:white">
                <i class="fa fa-tasks" aria-hidden="true"></i>
                <span> {{__('admin.categories')}} </span>
            </li>
            <div class="divider"></div>
            <li><a href="{{ route('categories.index') }}">
                    <i class="fas fas fa-shopping-cart"></i> <span> {{ __('admin.maincategories')}}</span></a>
            </li>

            <li><a href="{{ route('types.index') }}">
                    <i class="fas fas fa-shopping-bag"></i> <span> {{__("admin.types")}}</span></a>
            </li>

            <li><a href="{{ route('subtypes.index') }}">
                    <i class="fas fas fa-shopping-bag"></i> <span> {{ __('admin.subtypes')}}</span></a>
            </li>
            {{-- <li><a href="{{ route('tags.index') }}">
                    <i class="fas fas fa-shopping-bag"></i> <span> {{__('admin.tags')}}</span></a>
            </li> --}}
            <li><a href="{{ route('brands.index') }}">
                    <i class="fas fas fa-shopping-bag"></i> <span> {{__('admin.brands')}}</span></a>
            </li>
            <li><a href="{{ route('colors.index') }}">
                    <i class="fas fas fa-shopping-bag"></i> <span> {{__('admin.colors')}} </span></a>
            </li>

            <li>
                <a href="{{ route('variants.index') }}">
                    <i class="fas fa-shopping-cart" aria-hidden="true"></i>
                    <span> {{__("admin.variants")}} <br>Προϊόντων</span></a>
            </li>
            <li>
                <a href="{{ route('products.index') }}">
                    <i class="fas fa-shopping-cart" aria-hidden="true"></i>
                    <span> {{__('admin.productlist')}} </span></a>
            </li>

            @endhasanyrole


            <li>
                <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                       document.getElementById('logout-form').submit();">
                    <i class="fas fa-sign-out-alt" aria-hidden="true"></i> <span>{{ __('form.logout') }}</span>
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
            </li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>
