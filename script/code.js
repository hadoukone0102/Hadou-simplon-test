(function () {

    let menubar = document.querySelector('#menu');
    menubar.addEventListener('click', function () {
        console.log("merci seigneur");
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
})();