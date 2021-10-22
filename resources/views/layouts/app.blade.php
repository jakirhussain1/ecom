<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Main CSS-->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link rel="stylesheet" type="text/css" href="{{asset('dashboard_asset/css/main.css')}}">
    <!-- Font-icon css-->
     <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
      @livewireStyles

      <!-- js -->
       <script src="{{ mix('js/app.js') }}" defer></script>
  </head>
  <body class="app sidebar-mini rtl">
    <!-- Navbar-->
    <header class="app-header"><a class="app-header__logo" href="index.html">Vali</a>
      <!-- Sidebar toggle button--><a class="app-sidebar__toggle" href="#" data-toggle="sidebar" aria-label="Hide Sidebar"></a>
      <!-- Navbar Right Menu-->
      <ul class="app-nav">
       <div class="hidden sm:flex sm:items-center sm:ml-6">
                <!-- Teams Dropdown -->
                @if (Laravel\Jetstream\Jetstream::hasTeamFeatures())
                    <div class="ml-3 relative">
                        <x-jet-dropdown align="right" width="60">
                            <x-slot name="trigger">
                                <span class="inline-flex rounded-md">
                                    <button type="button" class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:bg-gray-50 hover:text-gray-700 focus:outline-none focus:bg-gray-50 active:bg-gray-50 transition">
                                        {{ Auth::user()->currentTeam->name }}

                                        <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M10 3a1 1 0 01.707.293l3 3a1 1 0 01-1.414 1.414L10 5.414 7.707 7.707a1 1 0 01-1.414-1.414l3-3A1 1 0 0110 3zm-3.707 9.293a1 1 0 011.414 0L10 14.586l2.293-2.293a1 1 0 011.414 1.414l-3 3a1 1 0 01-1.414 0l-3-3a1 1 0 010-1.414z" clip-rule="evenodd" />
                                        </svg>
                                    </button>
                                </span>
                            </x-slot>

                            <x-slot name="content">
                                <div class="w-60">
                                    <!-- Team Management -->
                                    <div class="block px-4 py-2 text-xs text-gray-400">
                                        {{ __('Manage Team') }}
                                    </div>

                                    <!-- Team Settings -->
                                    <x-jet-dropdown-link href="{{ route('teams.show', Auth::user()->currentTeam->id) }}">
                                        {{ __('Team Settings') }}
                                    </x-jet-dropdown-link>

                                    @can('create', Laravel\Jetstream\Jetstream::newTeamModel())
                                        <x-jet-dropdown-link href="{{ route('teams.create') }}">
                                            {{ __('Create New Team') }}
                                        </x-jet-dropdown-link>
                                    @endcan

                                    <div class="border-t border-gray-100"></div>

                                    <!-- Team Switcher -->
                                    <div class="block px-4 py-2 text-xs text-gray-400">
                                        {{ __('Switch Teams') }}
                                    </div>

                                    @foreach (Auth::user()->allTeams() as $team)
                                        <x-jet-switchable-team :team="$team" />
                                    @endforeach
                                </div>
                            </x-slot>
                        </x-jet-dropdown>
                    </div>
                @endif
        <!-- User Menu-->
        <li class="dropdown"><a class="app-nav__item" href="#" data-toggle="dropdown" aria-label="Open Profile Menu"><i class="fa fa-user fa-lg"></i></a>
          <ul class="dropdown-menu settings-menu dropdown-menu-right">
            <li><a class="dropdown-item" href="page-user.html"><i class="fa fa-cog fa-lg"></i> Settings</a></li>
            <li><a class="dropdown-item" href="{{ route('profile.show') }}"><i class="fa fa-user fa-lg"></i> Profile</a></li>
             <form method="POST" action="{{ route('logout') }}">
             @csrf
            <li><a class="dropdown-item" 
            href="{{ route('logout') }}"
            onclick="event.preventDefault();
            this.closest('form').submit();"
            ><i class="fa fa-sign-out fa-lg"></i> Logout</a></li>
            </form>
          </ul>
        </li>
      </ul>
    </header>
    <!-- Sidebar menu-->
    <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    <aside class="app-sidebar">
      <div class="app-sidebar__user"><img class="app-sidebar__user-avatar" src="{{asset('dashboard_asset/img/jn.jpg')}}" alt="User Image" style="width:50px; height:50px;">
        <div>
          <p class="app-sidebar__user-name">Jakir Hussain</p>
          <p class="app-sidebar__user-designation">Frontend Developer</p>
        </div>
      </div>
      <ul class="app-menu">
        <li><a class="app-menu__item active" href="{{url('/dashboard')}}"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Dashboard</span></a></li>
        <li><a class="app-menu__item active" href="{{url('/')}}"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Visit Website</span></a></li>
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-laptop"></i><span class="app-menu__label">Add Product $ Category</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item" href="{{url('/add/product')}}"><i class="icon fa fa-circle-o"></i>Add Product</a></li>
            <li><a class="treeview-item" href="https://fontawesome.com/v4.7.0/icons/" target="_blank" rel="noopener"><i class="icon fa fa-circle-o"></i> Font Icons</a></li>
          </ul>
        </li>
      </ul>
    </aside>
    <main class="app-content">
      {{ $slot }}
    </main>
    @livewireScripts
    <!-- Essential javascripts for application to work-->
    <script src="{{asset('dashboard_asset/js/jquery-3.2.1.min.js')}}"></script>
    <script src="{{asset('dashboard_asset/js/popper.min.js')}}"></script>
    <script src="{{asset('dashboard_asset/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('dashboard_asset/js/main.js')}}"></script>
  </body>
</html>