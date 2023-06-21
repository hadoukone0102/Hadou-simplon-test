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

    var path = window.location.pathname;
    const chemin_href = document.querySelectorAll('#chemin_href');
    var url = path;
    var filename = url.split('/').pop();
    const tableau_chemin = [
        'site_web.html',
        'affiche.html',
        'app_mobile.html'
    ];

    var fichierExiste = false;

    for (let j = 0; j < tableau_chemin.length; j++) {


        for (let k = 0; k < chemin_href.length; k++) {

            if (tableau_chemin[j] === filename) {
                fichierExiste = true;

                let search_Attrib = chemin_href[k].getAttribute('href');
                const Attribute = search_Attrib.split('/').pop();
                if (tableau_chemin[j] === Attribute) {
                    chemin_href[k].parentNode.style.display = 'none';
                    break;
                }
            } else {
                console.log('chemin incorrect');
            }

            break; //  Si le fichier est trouvé, on peut sortir de la boucle
        }
    }



    if (fichierExiste) {
        console.log("Le fichier existe dans le tableau.");
    } else {
        console.log("Le fichier n'existe pas dans le tableau.");
    }

    var protocol = window.location.protocol;
    var hostname = window.location.hostname;
    var query = window.location.search;

    /*
    console.log("Protocole :", protocol);
    console.log("Nom d'hôte :", hostname);
    console.log("Chemin :", path);
    console.log("Paramètres de requête :", query);

    console.log(search_Attrib)
    console.log(Attribute)
    */

    //console.log(filename); // Résultat: "site_web.html"


})();
