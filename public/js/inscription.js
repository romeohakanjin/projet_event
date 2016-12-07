$(function(){
	$("#inputDateNaissance").datepicker();
});

function checkInscription(form) {
    alert("Hello! I am an alert box!!");
    var civilite = document.getElementById('civilite').value;
    var nom = document.getElementById('inputNom').value;
    var prenom = document.getElementById('inputPrenom').value;
    var email = document.getElementById('inputEmail').value;
    var niveau_etude = document.getElementById('niveau_etude').value;

    var regexEmail = /^[_a-zA-Z0-9-]+(.[_a-zA-Z0-9-]+)*@([a-zA-Z0-9-]+.)+[a-zA-Z]{2,4}$/;
    var message = "";

    if(civilite == -1) {
        alert("Veuillez saisir votre civilité svp!");
        document.forms['form-inscription'].elements['civilite'].focus();
    }
    if(nom == "") {
        alert("Veuillez saisir votre nom svp!");
        document.forms['form-inscription'].elements['inputNom'].focus();
    }
    if(prenom == "") {
        alert("Veuillez saisir votre prenom svp!");
        document.forms['form-inscription'].elements['inputPrenom'].focus();
    }
    if(email == "") {
        alert("Veuillez saisir votre email svp!");
        document.forms['form-inscription'].elements['inputEmail'].focus();
    }else if(regexEmail.test(email) == false){
        alert("Veuillez saisir correctment votre email svp!");
        document.forms['form-inscription'].elements['inputEmail'].focus();
    }
    if(niveau_etude == -1) {
        alert("Veuillez saisir votre niveau d'étude svp!");
        document.forms['form-inscription'].elements['niveau_etude'].focus();
    }
}

function checkContrat(type_contrat){
    var type_contrat = document.getElementById('type_contrat').value;
    if(type_contrat == -1) {
        alert("Veuillez saisir votre type de contrat svp!");
        document.forms['form-inscription'].elements['type_contrat'].focus();
    }
}