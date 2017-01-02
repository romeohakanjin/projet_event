/*$(function(){
    $("form[name='form-signin']").validate({
        rules: {
            selectCivilite: "required",
            inputNom: "required",
            inputPrenom: "required",
            inputDateNaissance: "required",
            inputAdresse: "required",
            inputCodePostal: "required",
            inputVille: "required",
            inputEmail: {
                required: true,
                email: true
            },
            selectNiveauEtude: "required",
            selectTypeContrat: "required"
        },
        messages: {
            selectCivilite: "Veuillez sélectionner une civilité",
            inputNom: "Veuillez saisir votre nom",
            inputPrenom: "Veuillez saisir votre prenom",
            inputDateNaissance: "Veuillez saisir votre date de naissance",
            inputAdresse: "Veuillez saisir votre adresse",
            inputCodePostal: "Veuillez saisir votre code postal",
            inputVille: "Veuillez saisir votre ville",
            inputEmail: "Veuillez saisir une adresse email valide",
            selectNiveauEtude: "Veuillez sélectionner votre niveau d'étude",
            selectTypeContrat: "Veuillez sélectionner un type de contrat"
        },
       submitHandler: function(form) {
          form.submit();
        }
    });
});*/

$(document).ready(function() {
    $('#inputDateNaissance').datepicker();
    $('#selectCivilite').on('change', function() {
        var input=$(this);
        var is_civility=input.val();
        if(is_civility && is_civility !== -1){
            input.removeClass("invalid").addClass("valid");
        }
        else{
            input.removeClass("valid").addClass("invalid");
        }
    });
    $('#inputNom').on('input', function() {
        var input=$(this);
        var is_name=input.val();
        if(is_name){
            input.removeClass("invalid").addClass("valid");
        }
        else{
            input.removeClass("valid").addClass("invalid");
        }
    });
    $('#inputPrenom').on('input', function() {
        var input=$(this);
        var is_first_name=input.val();
        if(is_first_name){
            input.removeClass("invalid").addClass("valid");
        }
        else{
            input.removeClass("valid").addClass("invalid");
        }
    });
    $('#inputDateNaissance').on('input', function() {
        var input=$(this);
        var is_birthdate=input.val();
        if(is_birthdate){
            input.removeClass("invalid").addClass("valid");
        }
        else{
            input.removeClass("valid").addClass("invalid");
        }
    });
    $('#inputAdresse').on('input', function() {
        var input=$(this);
        var is_adress=input.val();
        if(is_adress){
            input.removeClass("invalid").addClass("valid");
        }
        else{
            input.removeClass("valid").addClass("invalid");
        }
    });
    $('#inputCodePostal').on('input', function() {
        var input=$(this);
        var is_post_code=input.val();
        if(is_post_code){
            input.removeClass("invalid").addClass("valid");
        }
        else{
            input.removeClass("valid").addClass("invalid");
        }
    });
    $('#inputVille').on('input', function() {
        var input=$(this);
        var is_city=input.val();
        if(is_city){
            input.removeClass("invalid").addClass("valid");
        }
        else{
            input.removeClass("valid").addClass("invalid");
        }
    });
    $('#inputEmail').on('input', function() {
        var input=$(this);
        var re = /^[_a-zA-Z0-9-]+(.[_a-zA-Z0-9-]+)*@([a-zA-Z0-9-]+.)+[a-zA-Z]{2,4}$/;
        var is_email=re.test(input.val());
        if(is_email){
            input.removeClass("invalid").addClass("valid");
        }
        else{
            input.removeClass("valid").addClass("invalid");
        }
    });
    $('#selectNiveauEtude').on('change', function() {
        var input=$(this);
        var is_study_level=input.val();
        if(is_study_level){
            input.removeClass("invalid").addClass("valid");
        }
        else{
            input.removeClass("valid").addClass("invalid");
        }
    });
    $('#selectTypeContrat').on('change', function() {
        var input=$(this);
        var is_contract_type=input.val();
        if(is_contract_type){
            input.removeClass("invalid").addClass("valid");
        }
        else{
            input.removeClass("valid").addClass("invalid");
        }
    });
});

function isDate(d) {
    // Cette fonction permet de vérifier la validité d'une date au format jj/mm/aa ou jj/mm/aaaa
    // Par Romuald

    if (d == "") // si la variable est vide on retourne faux
        return false;

    e = new RegExp("^[0-9]{1,2}\/[0-9]{1,2}\/([0-9]{2}|[0-9]{4})$");

    if (!e.test(d)){ // On teste l'expression régulière pour valider la forme de la date
        return false; // Si pas bon, retourne faux
    }
    // On sépare la date en 3 variables pour vérification, parseInt() converti du texte en entier
    j = parseInt(d.split("/")[0], 10); // jour
    m = parseInt(d.split("/")[1], 10); // mois
    a = parseInt(d.split("/")[2], 10); // année

    // Si l'année n'est composée que de 2 chiffres on complète automatiquement
    if (a < 1000) {
        if (a < 89)	a+=2000; // Si a < 89 alors on ajoute 2000 sinon on ajoute 1900
        else a+=1900;
    }

    // Définition du dernier jour de février
    // Année bissextile si annnée divisible par 4 et que ce n'est pas un siècle, ou bien si divisible par 400
    if (a%4 == 0 && a%100 !=0 || a%400 == 0) fev = 29;
    else fev = 28;

    // Nombre de jours pour chaque mois
    nbJours = new Array(31,fev,31,30,31,30,31,31,30,31,30,31);

    // Enfin, retourne vrai si le jour est bien entre 1 et le bon nombre de jours, idem pour les mois, sinon retourn faux
    return ( m >= 1 && m <=12 && j >= 1 && j <= nbJours[m-1] );
}