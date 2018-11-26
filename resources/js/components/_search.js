searchEmployee = (e) => {
    let list = "";
    let search__list = document.querySelector('.search__suggestion');
    let search__text = document.querySelector('.search__text');

    $.get('/employee/search', {
        term : e.target.value
    }, data => {
        data.forEach(result => {
            list = list + `<li onclick="returnTerm(event)" class="search__item">${result}</li>`;
        });

        document.querySelector('.search__list').innerHTML = list;
        search__list.hidden = false;
    });

    e.target.onblur = () => {
        setTimeout(() => {
            search__list.hidden = true;
        }, 500);
    }

    returnTerm = (e) => {
        search__text.value = e.target.textContent.trim();

        search__text.focus();
    }
}
