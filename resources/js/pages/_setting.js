getAction = (e) => {
    let url = "";

    let link = document.querySelector('.set-active');

    if(link) {
        link.classList.remove('set-active');
    }

    switch(e.target.name) {
        case "register" :
            url = "/register";
            break;
        case "list" :
            url = "/Users";
            break;
        case "permission" :
            url = "/User/permission";
            break;
        case "reset" :
            url = "/password/reset";
            break;

        default: break;
    }

    e.target.classList.add('set-active');

    $.get(url, {}, data => {
        $('.setting__content').html(data);
    });
}

deleteUser = (id) => {
    console.log(id);
    $.get('/User/delete', {id}, data => {
        $('.setting__content').html(data);
    });
}

userDetails = (user_id) => {
    $.get('/User/permission/roles', { user_id }, data => {
        $('.permission__content').html(data);
    });
}

changeRole = (e) => {
    let role_id = e.target.dataset.role_id;
    let user_id = e.target.dataset.user_id;

    $.post('/User/permission/role/change', { role_id, user_id }, data => {
        // $('').html(data);
        document.querySelector('.roles__notification').classList.add('notify');
    });
}