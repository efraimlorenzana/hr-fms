@extends('home')

@section('main-content')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-3">
            <div class="setting">
                <div class="setting__menu">
                    <ul class="setting__menu--list">
                        <li class="setting__menu--item">
                            <a href="#" name="register" 
                            onclick="getAction(event)" 
                            class="setting__menu--link"
                            >
                            <i class="fas fa-user-edit"></i>
                            Create User
                        </a>
                    </li>
                    <li class="setting__menu--item">
                        <a href="#" name="list" 
                        onclick="getAction(event)" 
                        class="setting__menu--link"
                        >
                        <i class="fas fa-users"></i>
                        User List
                    </a>
                </li>
                <li class="setting__menu--item">
                    <a href="#" name="permission" 
                    onclick="getAction(event)" 
                    class="setting__menu--link"
                    >
                    <i class="fas fa-users-cog"></i>
                    User Permission
                </a>
            </li>
            <li class="setting__menu--item">
                <a href="#" name="reset" 
                onclick="getAction(event)" 
                class="setting__menu--link"
                >
                <i class="fas fa-key"></i>
                Password
            </a>
        </li>
    </ul>
</div>
</div>
</div>
<div class="col-lg-9">
    <div class="setting">
        <div class="setting__content"></div>
    </div>
</div>
</div>
</div>

<div class="notif {{Session::get('register')}}">
    <div class="notif__message">
        <div class="notif__message--icon">
            <i class="fas fa-check fa-5x"></i>
        </div>
        <div class="notif__message--text">
            <strong>{{Session::get('user_name')}}</strong> Successfully Registered
        </div>
    </div>
</div>

<div class="notif {{Session::get('delete')}}">
    <div class="notif__message">
        <div class="notif__message--icon">
            <i class="fas fa-check fa-5x"></i>
        </div>
        <div class="notif__message--text">
            <strong>{{Session::get('user_name')}}</strong> Deleted
        </div>
    </div>
</div>
@endsection