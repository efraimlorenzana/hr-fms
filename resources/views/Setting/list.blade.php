<div class="users">
    <h3>Users</h3>
    <table class="users__table table table-dark table-hover">
        <thead class="users__table--header">
            <tr class="users__table--header-row">
                <th class="users__table--header-col">Name</th>
                <th class="users__table--header-col">Email</th>
                <th class="users__table--header-col">Date Register</th>
                <th class="users__table--header-col">Role</th>
                <th class="users__table--header-col">Action</th>
            </tr>
        </thead>
        
        <tbody class="users__table--body">
            @foreach ($users as $user)
            <tr class="users__table--body-row">
                <td class="users__table--body-col">{{$user->name}}</td>
                <td class="users__table--body-col">{{$user->email}}</td>
                <td class="users__table--body-col text-center">{{$user->created_at}}</td>
                <td class="users__table--body-col text-center">{{$user->role->role_type}}</td>
                <td class="users__table--body-col text-center">
                    <a href="#" onclick="deleteUser({{$user->id}})"
                        class="users__table--body-col--link">
                        <i class="fas fa-trash-alt fa-2x text-danger"></i>
                    </a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>