@extends('home')

@section('main-content')
<div class="dashboard">
    <div class="dashboard__gallery">
        {{-- Employees --}}
        <div class="dashboard__gallery--item dashboard__gallery--item-1">
            <div class="dashboard__gallery--title">
                <h3>Employees</h3>
            </div>
            <div class="dashboard__gallery--icon">
                <i class="fas fa-users text-success"></i>
            </div>
            <div class="dashboard__gallery--count">
                {{$employees}}
            </div>
        </div>
        
        {{-- Files --}}
        <div class="dashboard__gallery--item dashboard__gallery--item-2">
            <div class="dashboard__gallery--title">
                <h3>Files & Records</h3>
            </div>
            <div class="dashboard__gallery--icon">
                <i class="fas fa-folder-open text-primary"></i>
            </div>
            <div class="dashboard__gallery--count">
                {{$records}}
            </div>
        </div>
        
        {{-- Users --}}
        <div class="dashboard__gallery--item dashboard__gallery--item-3">
            <div class="dashboard__gallery--title">
                <h3>Users</h3>
            </div>
            <div class="dashboard__gallery--icon">
                <i class="fas fa-user-lock text-danger"></i>
            </div>
            <div class="dashboard__gallery--count">
                {{$users}}
            </div>
        </div>
    </div>
</div>
@endsection