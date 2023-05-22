document.addEventListener('DOMContentLoaded', function () {

    let main_burger = document.getElementById('main-burger');

    // let burgers = document.querySelectorAll('.burger');
    let all_menu = document.getElementById('all-menu');

    main_burger.addEventListener('click', () => {
        main_burger.classList.toggle('open')
        all_menu.classList.toggle('active')
    })


    // burgers.forEach(function (item) {
    //     item.addEventListener('click', function () {
    //         item.classList.toggle('open')
    //     })
    // });


});
