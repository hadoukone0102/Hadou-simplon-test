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
    suivant.addEventListener('click', () => {
        // Votre code 
        let result = i;
        let chemin = `img/${result}.jpg`;
        image.src = chemin;
        i++;
        if (i > 4) {
            i = 1;
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
})();