@extends('layouts.declaration')

@section('declaration')
<div id="app">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                201 File Management System
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto navbar__main text-center">
                    <li class="sidenav__item nav__dashboard">
                        <a href="/home/dashboard" class="sidenav__link">
                            Home
                        </a>
                    </li>
                    
                    <li class="sidenav__item nav__employee-new">
                        <a href="/home/employee/new" class="sidenav__link">
                            Enroll Employee
                        </a>
                    </li>
                    
                    <li class="sidenav__item nav__employee-view">
                        <a href="/home/employee/file" class="sidenav__link">
                            Employee File
                        </a>
                    </li>
                    
                    <li class="sidenav__item nav__setting">
                        <a href="/Setting/Index" class="sidenav__link">
                            Advance Setting
                        </a>
                    </li>
                </ul>
                
                <div class="search__bar">
                    <div class="search">
                        <form action="/home/employee/search/name" class="search__form">
                            {{ csrf_field() }}
                            <span class="search__icon">
                                <i class="fas fa-search"></i>
                            </span>
                            <input name="search_name" oninput="searchEmployee(event)" type="text" class="search__text" autocomplete="off"
                            placeholder="Search Employee Name">
                            <input type="submit" hidden>
                        </form>
                    </div>
                    <div class="search__suggestion" hidden>
                        <ul class="search__list"></ul>
                    </div>
                </div>
                
                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
                    @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    <li class="nav-item">
                        @if (Route::has('register'))
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        @endif
                    </li>
                    @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            <i class="fas fa-user-circle"></i>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>
                        
                        <div  class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>
                        
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>

<main class="content">
    @yield('content')
</main>
<footer class="footer">
    <div class="footer__content">
        <span class="footer__details--app">
            201 file management system
        </span>
        <span class="footer__details--user">
            &copy; 2018 - Efraim A. Lorenzana
        </span>
        <span class="footer__details--project">
            Capstone Project 3
        </span>
    </div>
</footer>
</div>

@endsection