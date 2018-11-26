@extends('layouts.declaration')

@section('declaration')
    

<div class="forbidden">
    <div class="forbidden__message">
        <div class="forbidden__message--icon">
            <i class="fas fa-exclamation-triangle text-warning"></i>
        </div>
        <div class="forbidden__message--text">
            <h1>
                Access Denied
            </h1>

            <h3>
                the page you are trying to request is for Authorized user only. please contact website administrator. thank you
            </h3>
        </div>
    </div>
    
    <div class="forbidden__button">
        <a href="/home/dashboard" class="forbidden__button--dashboard c_btn c_btn--primary">
            I understand | Go Back to Home
        </a>
    </div>
</div>

@endsection