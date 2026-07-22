var verMas = document.getElementById("ver-mas");

if (verMas != null) {
    document.getElementById("ver-mas").addEventListener("click", dropdown);
}

document.getElementById("button-menu-header").addEventListener("click", menuFixed);
document.getElementById("languages3").addEventListener("change", scrollLanguajes);
document.getElementById("languages4").addEventListener("change", scrollLanguajes);

var languageImg2 = document.getElementById("img-languaje2");
var languageImg3 = document.getElementById("img-languaje3");
if (document.getElementById("languages3").value == 'es') {
    languageImg2.src = "../img/spanish.svg";
    languageImg3.src = "../img/spanish.svg";
} else if (document.getElementById("languages3").value == 'en') {
    languageImg2.src = "../img/english.svg";
    languageImg3.src = "../img/english.svg";
} else if (document.getElementById("languages3").value == 'pt') {
    languageImg2.src = "../img/portugues.svg";
    languageImg3.src = "../img/portugues.svg";
}

function dropdown() {
    var p = document.querySelector(".p-header-second");
    var arrow = document.getElementById("arrow-ver-mas");
    var languages = document.getElementById("languages3").value;
    if (p.classList.contains("desktop767")) {
        p.classList.remove("desktop767");
        p.classList.add("mobile767");
        arrow.src = "../img/arrowTopLightGreen.svg";
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
        p.classList.add("desktop767");
        p.classList.remove("mobile767");
        arrow.src = "../img/arrowDownLightGreen.svg";
        if (languages == 'es') {
            this.innerHTML = "Ver más"
            this.id = "ver-mas";
        } else if (languages == 'en') {
            this.innerHTML = "See more";
            this.id = "ver-mas";
        }
    }
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

function scrollLanguajes() {
    var languageImg = document.getElementById("img-languaje");
    var languageImg2 = document.getElementById("img-languaje2");
    var languageImg3 = document.getElementById("img-languaje3");
    if (this.value == 'es') {
        languageImg.src = "../img/spanish.svg";
        languageImg2.src = "../img/spanish.svg";
        languageImg3.src = "../img/spanish.svg";
    } else if (this.value == 'en') {
        languageImg.src = "../img/english.svg";
        languageImg2.src = "../img/english.svg";
        languageImg3.src = "../img/english.svg";
    } else if (this.value == 'pt') {
        languageImg.src = "../img/portugues.svg";
        languageImg2.src = "../img/portugues.svg";
        languageImg3.src = "../img/portugues.svg";
    }
    window.scrollTo(0, 0);
}


