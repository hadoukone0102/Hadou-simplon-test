(function () {

    let menubar = document.querySelector('#menu');
    let menuderou = document.querySelector('.navBar');
    menubar.addEventListener('click', function () {
        menuderou.classList.toggle('active');
        menubar.classList.toggle('fa-times')
    });

    let image = document.querySelector("#img_change");
    let retour = document.querySelector("#retour");
    let suivant = document.querySelector("#suivant");

    let i = 1;
    image.addEventListener('click', () => {
        let result = i;
        let chemin = `img/${result}.jpg`;
        image.src = chemin;
        i++;
        if (i > 4) {
            i = 1;
        }
    });
    suivant.addEventListener('click', () => {
        // Votre code 
        let result = i;
        let chemin = `img/${result}.jpg`;
        image.src = chemin;
        i++;
        if (i > 4) {
            i = 1;
        }
        if (result == 2) {
            let Hadou = document.querySelector('#Hadou')
            Hadou.innerHTML = "Les Meilleurs Services Pour Vous Satisfaire";
            let details = document.querySelector('#details')
            details.innerHTML = `
                HKservices est une société de développement dirigée par des professionnels passionnés, <br>
                spécialisée dans la création de sites web, d'applications web et mobiles, ainsi que dans <br>
                la conception d'affiches. Notre équipe expérimentée collabore étroitement avec les clients <br>
                pour créer des solutions numériques sur mesure qui correspondent à leur identité de marque <br>
                et offrent une expérience utilisateur optimale. Ils se concentrent sur la qualité, la créativité <br>
                et la satisfaction du client, en offrant des services de développement innovants qui dépassent les <br>
                attentes. Si vous recherchez des solutions numériques personnalisées pour votre entreprise, <br>
                HKservices est là pour vous aider.
            `;
        } else {
            Hadou.innerHTML = "Nous Sommes Des Développeurs Web";
            details.innerHTML = `           
                        Découvrez une expérience unique en vous inscrivant dès maintenant <br>
                        sur notre site ! Rejoignez une communauté dynamique et passionnée, <br>
                        élargissez vos horizons et profitez de nombreux avantages exclusifs.<br>
                        Ne manquez pas cette opportunité de vous connecter avec des personnes <br>
                        partageant les mêmes intérêts, d'accéder à un contenu premium et de participer <br>
                        à des événements passionnants. Laissez votre empreinte dans notre communauté <br>
                        grandissante en vous inscrivant aujourd'hui et préparez-vous à vivre une expérience <br>
                        inoubliable
            `;
        }
    });

    retour.addEventListener('click', () => {
        let result = i;
        let chemin = `img/${result}.jpg`;
        image.src = chemin;
        i--;
        if (i < 4) {
            i = 1;
        }
    })

    window.addEventListener('scroll', () => {
        menuderou.classList.remove('active');
        menubar.classList.remove('fa-times')
    })
    const contacts = document.querySelector("#contacts_h");
    const service = document.querySelector("#service_h");
    const sectionContact = document.querySelector("#section-contact");
    const sectionService = document.querySelector("#section-service");
    contacts.addEventListener('click', () => {
        window.scrollTo({
            top: sectionContact.offsetTop,
            behavior: 'smooth'
        });
    })
    service.addEventListener('click', () => {
        window.scrollTo({
            top: sectionService.offsetTop,
            behavior: 'smooth'
        });
    })
})();