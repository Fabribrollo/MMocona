document.getElementById("main-verMas-1").addEventListener("click", dropdown);
document.getElementById("button-menu-header").addEventListener("click", menuFixed);
document.getElementById("languages1").addEventListener("change", scrollLanguajes);
document.getElementById("languages2").addEventListener("change", scrollLanguajes);
document.getElementById("languages3").addEventListener("change", scrollLanguajes);
document.getElementById("languages4").addEventListener("change", scrollLanguajes);


var languageImg = document.getElementById("img-languaje");
var languageImg2 = document.getElementById("img-languaje2");
var languageImg3 = document.getElementById("img-languaje3");
if (document.getElementById("languages1").value == 'es') {
    languageImg.src = "img/spanish.svg";
    languageImg2.src = "img/spanish.svg";
    languageImg3.src = "img/spanish.svg";
} else if (document.getElementById("languages1").value == 'en') {
    languageImg.src = "img/english.svg";
    languageImg2.src = "img/english.svg";
    languageImg3.src = "img/english.svg";
} else if (document.getElementById("languages1").value == 'pt') {
    languageImg.src = "img/portugues.svg";
    languageImg2.src = "img/portugues.svg";
    languageImg3.src = "img/portugues.svg";
}

function menuFixed() {
    var menu = document.getElementById("navbar-header");
    var headerTitle = document.getElementById("row-header-title");
    var overlayMenu = document.getElementById("sl-overlay-menu");
    var instagram = document.getElementById("social-media-header-instagram");
    var whatsapp = document.getElementById("social-media-header-whatsapp");
    if (menu.classList.contains('open-menu')) {
        menu.classList.remove('open-menu');
        headerTitle.classList.remove('row-header-title-open-menu')
        overlayMenu.style.display = 'none';
        instagram.style.display = 'inline';
        whatsapp.style.display = 'inline';
    } else {
        menu.classList.add('open-menu');
        overlayMenu.style.display = 'block';
        headerTitle.classList.add('row-header-title-open-menu');
        instagram.style.display = 'none';
        whatsapp.style.display = 'none';
    }
}

function dropdown() {
    var p1 = document.querySelector("#main-p-desde-los-miradores");
    var p2 = document.querySelector("#main-p-en-nuestra-orilla");
    var p3 = document.querySelector("#main-p-el-house-espacio-podemos");
    var arrow = document.getElementById("arrow-ver-mas");
    var languages = document.getElementById("languages1").value;
    if (p1.classList.contains("pNone")) {
        p1.classList.remove("pNone");
        p1.classList.add("pVisible");
        p2.classList.remove("pNone");
        p2.classList.add("pVisible");
        p3.classList.remove("pNone");
        p3.classList.add("pVisible");
        arrow.src = "img/arrowTop.svg";
        if (languages == 'es') {
            this.innerHTML = "Ver menos";
            this.id = "ver-menos";
            document.getElementById("ver-menos").addEventListener("click", dropdown);
        } else if (languages == 'en') {
            this.innerHTML = "See less";
            this.id = "ver-menos";
            document.getElementById("ver-menos").addEventListener("click", dropdown);
        }
    } else {
        p1.classList.add("pNone");
        p1.classList.remove("pVisible");
        p2.classList.add("pNone");
        p2.classList.remove("pVisible");
        p3.classList.add("pNone");
        p3.classList.remove("pVisible");
        arrow.src = "img/arrowDownHeader.svg";
        if (languages == 'es') {
            this.innerHTML = "Ver más"
            this.id = "main-verMas-1";
        } else if (languages == 'en') {
            this.innerHTML = "See more";
            this.id = "main-verMas-1";
        }
    }
}

function scrollLanguajes() {
    var languageImg = document.getElementById("img-languaje");
    var languageImg2 = document.getElementById("img-languaje2");
    var languageImg3 = document.getElementById("img-languaje3");
    if (this.value == 'es') {
        languageImg.src = "img/spanish.svg";
        languageImg2.src = "img/spanish.svg";
        languageImg3.src = "img/spanish.svg";
    } else if (this.value == 'en') {
        languageImg.src = "img/english.svg";
        languageImg2.src = "img/english.svg";
        languageImg3.src = "img/english.svg";
    } else if (this.value == 'pt') {
        languageImg.src = "img/portugues.svg";
        languageImg2.src = "img/portugues.svg";
        languageImg3.src = "img/portugues.svg";
    }
    window.scrollTo(0, 0);
}
