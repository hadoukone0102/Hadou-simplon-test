(function () {
    const links = document.querySelectorAll(".links");
    for (let i = 0; i < links.length; i++) {
        links[i].addEventListener("click", function AjoutClass(e) {

            if (this.classList.contains('active')) { return false; }
            let div = this.parentNode.parentNode;
            div.querySelector('.elmnt_nav .active').classList.remove("active");
            this.classList.add('active');

            const element = div.querySelector('.element_content .active');
            element.classList.remove("active")
            let moo = this.getAttribute('href')
            div.querySelector(moo).classList.add('active');
        })
    }

    const contact = document.querySelector('#contacts_h');
    const formulaire = document.querySelector('#formul');
    const fleche = document.querySelector('#fleche');
    contact.addEventListener('click', () => {
        formulaire.classList.toggle('active')
    })
    fleche.addEventListener('click', () => {
        formulaire.classList.remove('active');
    })


    const contient_tous = document.querySelector('.contient_tous');
    const bt_hover = document.querySelectorAll('#bt_hover');
    const croix_rouge = document.querySelector('#croix_rouge');
    const affichage_of_elements = document.querySelector('#affichage_of_elements')
    for (let i = 0; i < bt_hover.length; i++) {
        bt_hover[i].addEventListener('click', () => {

            let parent_de_this = bt_hover[i].parentNode.firstElementChild;
            let h3_of_this = parent_de_this.querySelector('#essaie').innerHTML;
            affichage_of_elements.innerHTML = h3_of_this;
            contient_tous.classList.add('active');
        })
    }
    croix_rouge.addEventListener('click', () => {
        contient_tous.classList.remove('active')
    })

    window.addEventListener('scroll', () => {
        formulaire.classList.remove('active');
    })

})();
