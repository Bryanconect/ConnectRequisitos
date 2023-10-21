(function (win, doc) {
    'use strict';

    function confirmDel(event) {
        event.preventDefault();
        //  console.log(event.target.parentNode.href);

        let token = document.getElementsByName("_token")[0].value;
        if (confirm("Deseja mesmo apagar?")) {
            let ajax = new XMLHttpRequest();
            ajax.open("DELETE", event.target.parentNode.href);
            ajax.setRequestHeader('X-CSRF-TOKEN', token);
            ajax.onreadystatechange = function () {
                if (ajax.readyState === 4 && ajax.status === 200) {
                    win.location.href = "books/inicio";
                }
            }
            ajax.send();
        } else {
            return false;
        }


    }

    if (document.querySelector('.js-del')) {
        let btn = document.querySelectorAll('.js-del');
        for (let i = 0; i < btn.length; i++) {
            btn[i].addEventListener('click', confirmDel, false);
        }
    }

})(window.document);