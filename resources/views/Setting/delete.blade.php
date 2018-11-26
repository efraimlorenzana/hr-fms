<form action="/User/delete/{{$user->id}}" method="POST" class="users">
    {{ csrf_field() }}
    <div class="users__delete">
        <div class="users__delete--message">
            <span class="users__delete--message-text">
                Are you sure you want to delete this user? 
                <strong>{{$user->name}}</strong>
            </span>
        </div>
        <div class="users__delete--button">
            <a href="/Setting/Index" 
            class="users__delete--button-cancel c_btn c_btn--primary">
                cancel
            </a>
            
            <button class="users__delete--button-proceed c_btn c_btn--primary">
                proceed
            </button>
        </div>
    </div>
</form>