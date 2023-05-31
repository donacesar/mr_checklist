document.addEventListener('DOMContentLoaded', function () {

    // Меню Бургер

    let main_burger = document.getElementById('main-burger');
    let all_menu = document.getElementById('all-menu');

    main_burger.addEventListener('click', () => {
        main_burger.classList.toggle('open')
        all_menu.classList.toggle('active')
    })

    // Аккордеон

    let acc = document.getElementsByClassName("accordion-header");
    let i;

    for (i = 0; i < acc.length; i++) {
        acc[i].addEventListener("click", function () {
            this.classList.toggle("open");
            let panel = this.nextElementSibling;
            if (panel.style.maxHeight) {
                panel.style.maxHeight = null;
            } else {
                panel.style.maxHeight = panel.scrollHeight + "px";
            }
        });
    }

    // Выпадающее меню

    // let drops = document.getElementsByClassName("drop-menu");
    // let j;
    //
    //
    // for (j = 0; j < drops.length; j++) {
    //     let drop_item;
    //     drops[j].addEventListener("click", function () {
    //         this.classList.toggle('drop-menu-show')
    //         drop_item = this.nextElementSibling;
    //         if (drop_item.style.maxHeight) {
    //             drop_item.classList.toggle("show");
    //             drop_item.style.maxHeight = null;
    //         } else {
    //             drop_item.classList.toggle("show");
    //             drop_item.style.maxHeight = drop_item.scrollHeight + "px";
    //         }
    //     });
    // }



   // Бургеры для меню EDIT

let burgers = document.querySelectorAll('.edit-burger');
    burgers.forEach(function (item) {
        item.addEventListener('click', function () {
            item.classList.toggle('edit-open');
            console.log( item.nextElementSibling);
            item.nextElementSibling.classList.toggle('edit-open');
        });
    });

});
