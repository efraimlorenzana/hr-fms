<div class="roles">
    <div class="roles__notification">
        <i class="fas fa-check-circle"></i>
        New Role Successfully Save
    </div>
    <div class="roles__user--info">
        <h3 class="roles__user--info-name">{{$user->name}}</h3>
    </div>
    @foreach ($role_arr as $role => $arr_value)
    <div class="roles__details">
        <input 
        data-role_id="{{$arr_value['id']}}" 
        data-user_id="{{$user->id}}" 
        onclick="changeRole(event)" 
        id="role{{$arr_value['id']}}" 
        type="radio" 
        name="role_radio" 
        class="roles__details--radio" {{$arr_value['isCheck']}}
        >
        <label for="role{{$arr_value['id']}}" class="roles__details--label">{{$role}}</label>
    </div>
    @endforeach
    
    <div class="roles__note">
        <p class="roles__paragraph">
            <strong>Note:</strong>
            <em>
                Please Select to change user role
            </em>
        </p>
    </div>
</div>