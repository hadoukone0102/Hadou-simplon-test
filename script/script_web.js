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

})();

document.getElementById('contact-form').addEventListener('submit', function (event) {
    event.preventDefault();

    // Obtenez les valeurs des champs du formulaire
    var form = this;
    var name = form.name.value;
    var email = form.email.value;
    var message = form.message.value;

    // Envoyer l'e-mail via EmailJS
    var templateParams = {
        from_name: name,
        from_email: email,
        message: message
    };

    emailjs.send('9G6jljGttPQu_tHCj', 'template_kawxqyo', templateParams)
        .then(function (response) {
            console.log('E-mail envoyé avec succès :', response.status);
            // Réinitialiser le formulaire
            form.reset();
        }, function (error) {
            console.error("Erreur lors de l'envoi de l'e-mail :", error);
        });

    console.log('ça passe super bien');
});