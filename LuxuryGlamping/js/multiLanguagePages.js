var xhr = new XMLHttpRequest();
var translator = new MultiLanguage("es");

xhr.open("GET", "../js/translation.js");

xhr.onreadystatechange = (e) => {
    if (xhr.readyState === 4 && xhr.status === 200) {
        var jsonResponse = JSON.parse(xhr.responseText);
        translator.addSheet(jsonResponse);
    }
}
xhr.send()
translator.registerSelect(document.getElementById("languages1"));
translator.registerSelect(document.getElementById("languages2"));
translator.registerSelect(document.getElementById("languages3"));
translator.registerSelect(document.getElementById("languages4"));
