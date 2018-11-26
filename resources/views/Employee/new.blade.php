@extends('home')

@section('main-content')
<form action="/home/employee/enroll" method="POST" enctype="multipart/form-data">
    {{ csrf_field() }}
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                {{-- Image --}}
                <div class="enroll__picture">
                    <img id="preview" src="{{asset('img/male.png')}}" alt="Picture" class="enroll__picture--img">
                    <label for="employee_image" class="enroll__picture--label">Upload Image</label>
                    <input name="employee_image" type="file" id="employee_image" class="enroll__picture--file textbox" placeholder="Upload Image" onchange="previewImage(event)">
                </div>
            </div>
            
            <div class="col-lg-6">
                <div class="enroll">
                    {{-- Fullname --}}
                    <div class="enroll__field">
                        <input id="Fullname" name="Fullname" type="text" class="enroll__field--input textbox textbox-white" placeholder="Fullname">
                        <label for="Fullname" class="enroll__field--label">Fullname</label>
                    </div>
                    
                    {{-- Position --}}
                    <div class="enroll__field">
                        <select name="position_id" id="position_id" class="enroll__field--input textbox textbox-white" placeholder="Position">
                            @foreach ($positions as $position)
                            <option value="{{$position->id}}">{{$position->title}}</option>
                            @endforeach
                        </select>
                        <label for="Position" class="enroll__field--label">Position</label>
                    </div>
                    
                    {{-- Birthday --}}
                    <div class="enroll__field">
                        <input id="Birthday" name="Birthday" type="date" class="enroll__field--input textbox textbox-white" placeholder="Birthday">
                        <label for="Birthday" class="enroll__field--label">Birthday</label>
                    </div>
                    
                    {{-- Gender --}}
                    <div class="enroll__field">
                        <select name="gender" id="gender" class="enroll__field--input textbox textbox-white" placeholder="Gender">
                            <option value="1">Male</option>
                            <option value="2">Female</option>
                        </select>
                        <label for="gender" class="enroll__field--label">Gender</label>
                    </div>
                </div>
                
                <div class="enroll__button">
                    <input type="submit" class="c_btn c_btn--primary">
                </div>
            </div>
            
        </div>
    </div>
</form>

<div class="notif {{Session::get('entry')}}">
    <div class="notif__message">
        <div class="notif__message--icon">
            <i class="fas fa-check fa-5x"></i>
        </div>
        <div class="notif__message--text">
            Success
        </div>
    </div>
</div>
@endsection