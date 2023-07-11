(function () {
    /* declaratio des variables */

    const menu_bar_mob = document.getElementById('menu_mob');
    let navbar_mob = document.querySelector('.navbar_mob');
    const titre_for_head_3 = document.querySelectorAll('#ttle');
    const link_en_survole = document.querySelectorAll('#survole');
    const grands_titre = document.querySelector('.grands_titre');
    const All_link_of_header = document.querySelectorAll('#les_links');
    const header_3 = document.querySelector('.header_3');
    let info = header_3.getBoundingClientRect();
    let height = info.height;

    /* les Functions */

    function ActionBtn() {
        //navbar_mob.classList.toggle('active');
        menu_bar_mob.classList.toggle('fa-times');
        header_3.classList.toggle('active');
    }

    function Remouve() {
        navbar_mob.classList.remove('active');
        //menu_bar_mob.classList.remove('fa-times');
        //header_3.classList.remove('active');
    }

    function grild(grid) {
        let boxes = document.querySelectorAll(grid);
        for (let b = 0; b < boxes.length; b++) {
            let box = boxes[b];
            var boxPosition = box.getBoundingClientRect().top;
            if (boxPosition < window.innerHeight * 0.7) {
                box.classList.add('affiche');
            } else {
                box.classList.remove('affiche');
            }
        }
    }

    function verifie(classe) {
        let cls = document.querySelector(classe)
        if (cls.classList.contains.length <= 1) {
            cls.style.height = '0px';
        }
    }
    //verifie('.header_3');

    // les boucles
    for (let i = 0; i < link_en_survole.length; i++) {
        link_en_survole[i].addEventListener('mouseover', () => {
            let parent_of_this = link_en_survole[i].parentNode.parentNode.parentNode.firstElementChild
            parent_of_this.classList.add('ajouts_avec_js');
            grands_titre.classList.add('active_translate');
            let selection = parent_of_this.parentNode.parentNode.parentNode
            let selection_h3 = selection.querySelector('.grands_titre');
            selection_h3.classList.add('active_translate')
        })
        link_en_survole[i].addEventListener('mouseout', () => {
            let parent_of_this = link_en_survole[i].parentNode.parentNode.parentNode.firstElementChild
            parent_of_this.classList.remove('ajouts_avec_js');
            grands_titre.classList.remove('active_translate');
            let selection = parent_of_this.parentNode.parentNode.parentNode
            let selection_h3 = selection.querySelector('.grands_titre');
            selection_h3.classList.remove('active_translate')
        })
    }

    for (let l = 0; l < All_link_of_header.length; l++) {
        All_link_of_header[l].addEventListener('click', () => {
            header_3.classList.toggle('active');
            header_3.style.height = 'auto';
        });

        /*
        header_3.addEventListener('transitionend', () => {
            if (!header_3.classList.contains('active')) {
                header_3.style.height = '0px';
            }
        });
        */

    }

    /* les Evernements */

    menu_bar_mob.addEventListener('click', ActionBtn);
    window.addEventListener('scroll', Remouve);
    window.addEventListener('scroll', function () {
        grild('.box_mob');
        grild('.coll_box')
    });


    window.addEventListener('DOMContentLoaded', () => {
        const pageTitle = document.querySelector('.blog');
        const targetText = 'Bienvenue sur notre site web HKservices';
        let currentIndex = 0;

        function typeText() {
            pageTitle.innerHTML = targetText.substring(0, currentIndex);
            currentIndex++;

            if (currentIndex <= targetText.length) {
                setTimeout(typeText, 100); // Vitesse de frappe (ajustez selon vos besoins)
            }
        }

        typeText();
    });


})();