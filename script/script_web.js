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