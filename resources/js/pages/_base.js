initialScript = () => {
    if(window.location.href.includes('/home/employee/file')) {
        document.querySelectorAll('.nav__employee-view').forEach(e => {
            e.classList.add('sidenav--active');
        });
    }
    
    if(window.location.href.includes('/home/employee/search')) {
        document.querySelectorAll('.nav__employee-view').forEach(e => {
            e.classList.add('sidenav--active');
        });
    }

    if(window.location.href.includes('/home/employee/new')) {
        document.querySelectorAll('.nav__employee-new').forEach(e => {
            e.classList.add('sidenav--active');
        });
    }

    if(window.location.href.includes('/Setting/Index')) {
        document.querySelectorAll('.nav__setting').forEach(e => {
            e.classList.add('sidenav--active');
        });
    }

    if(window.location.href.includes('/home/dashboard')) {
        document.querySelectorAll('.nav__dashboard').forEach(e => {
            e.classList.add('sidenav--active');
        });
    }
}

initialScript();