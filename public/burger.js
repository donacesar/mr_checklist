document.addEventListener('DOMContentLoaded', function () {

    let burgers = document.querySelectorAll('.burger');

    burgers.forEach(function (item) {
        item.addEventListener('click', function() {
            item.classList.toggle('open')
        })
    });


});
