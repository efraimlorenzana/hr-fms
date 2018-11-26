@extends('home')

@section('main-content')

<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <div class="employee">
                <h3 class="employee__name">{{$employee->Fullname}}</h3>
                <span class="employee__joined">
                    Joined : 
                    <span class="employee__joined--value">{{$employee->Birthday}}</span>
                </span>
                <div class="employee__position">{{$employee->position->title}}</div>
                <div class="employee__picture">
                    <img src="{{ asset($employee->image)}}" alt="Picture" class="employee__picture--img">
                </div>
                
                <div class="employee__content">
                    <nav class="employee__content--nav nav nav-pills">
                        @foreach ($files as $file)
                        <a onclick="getRecords(event,{{$employee->id}},{{$file->id}})" 
                            class="nav-link subNavLink employee__content--nav-link" 
                            href="#">
                            {{$file->file_category}}
                        </a>
                        @endforeach
                    </nav>
                    <div class="employee__content--result"></div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="notif {{Session::get('upload')}}">
    <div class="notif__message">
        <div class="notif__message--icon">
            <i class="fas fa-check fa-5x"></i>
        </div>
        <div class="notif__message--text">
            {{Session::get('message')}}
        </div>
    </div>
</div>
@endsection