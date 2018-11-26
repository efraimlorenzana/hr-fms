deleteRecord = (id) => {
    
    $.get('/File/delete', {id}, data => {
        $('.employee__content--result').html(data);
    });
}

backToRecord = (e, emp_id, file_id) => {
    let tab = document.querySelector('.tab-active');
    getRecords(e, emp_id, file_id);
    tab.classList.add('tab-active');
}