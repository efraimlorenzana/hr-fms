<div class="container-fluid">
    <div class="row">
        <div class="col-lg-6">
            <div class="permission">
                <ul class="permission__list">
                    @foreach ($users as $user)
                    <li class="permission__item" onclick="userDetails({{$user->id}})">
                        <i class="fas fa-user-tie"></i>
                        {{$user->name}}
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="permission">
                <div class="permission__content"></div>
            </div>
        </div>
    </div>
</div>