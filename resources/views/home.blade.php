@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-1 nav-col">
            <div class="sidenav">
                <ul class="sidenav__list">
                    <li class="sidenav__item nav__dashboard">
                        <a href="/home/dashboard" class="sidenav__link">
                            <i class="fas fa-home fa-3x"></i>
                        </a>
                    </li>

                    <li class="sidenav__item nav__employee-new">
                        <a href="/home/employee/new" class="sidenav__link">
                            <i class="fas fa-user-plus fa-3x"></i>
                        </a>
                    </li>
                    
                    <li class="sidenav__item nav__employee-view">
                        <a href="/home/employee/file" class="sidenav__link">
                            <i class="far fa-address-card fa-3x"></i>
                        </a>
                    </li>

                    <li class="sidenav__item nav__setting">
                        <a href="/Setting/Index" class="sidenav__link">
                            <i class="fas fa-cogs fa-3x"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="col-lg-11 main-content">
            @yield('main-content')
        </div>
    </div>
</div>
@endsection
