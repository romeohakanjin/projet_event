jQuery(function($) {'use strict',
    $(document).ready(function() {
        $('#signin-DateNaissance').datepicker();
        $('#signin-Civilite').on('change', function() {
            var input=$(this);
            var is_civility=input.val();
            console.log("civilité");
            console.log(is_civility);
            if(is_civility && is_civility !== -1){
                input.removeClass("invalid").addClass("valid");
            }
            else{
                input.removeClass("valid").addClass("invalid");
            }
        });
        $('#signin-Nom').on('input', function() {
            var input=$(this);
            var is_name=input.val();
            console.log("nom");console.log(is_name);
            if(is_name){
                input.removeClass("invalid").addClass("valid");
            }
            else{
                input.removeClass("valid").addClass("invalid");
            }
        });
        $('#signin-Prenom').on('input', function() {
            var input=$(this);
            var is_first_name=input.val();
            console.log("prenom");console.log(is_firt_name);
            if(is_first_name){
                input.removeClass("invalid").addClass("valid");
            }
            else{
                input.removeClass("valid").addClass("invalid");
            }
        });
        $('#signin-DateNaissance').on('input', function() {
            var input=$(this);
            var is_birthdate=input.val();
            console.log("date naiss");console.log(is_birthdate);
            if(is_birthdate){
                input.removeClass("invalid").addClass("valid");
            }
            else{
                input.removeClass("valid").addClass("invalid");
            }
        });
        $('#signin-Adresse').on('input', function() {
            var input=$(this);
            var is_adress=input.val();
            console.log("adre");console.log(is_adress);
            if(is_adress){
                input.removeClass("invalid").addClass("valid");
            }
            else{
                input.removeClass("valid").addClass("invalid");
            }
        });
        $('#signin-CodePostal').on('input', function() {
            var input=$(this);
            var is_post_code=input.val();
            console.log("cp");console.log(is_post_code);
            if(is_post_code){
                input.removeClass("invalid").addClass("valid");
            }
            else{
                input.removeClass("valid").addClass("invalid");
            }
        });
        $('#signin-Ville').on('input', function() {
            var input=$(this);
            var is_city=input.val();
            console.log("city");console.log(is_city);
            if(is_city){
                input.removeClass("invalid").addClass("valid");
            }
            else{
                input.removeClass("valid").addClass("invalid");
            }
        });
        $('#signin-Email').on('input', function() {
            var input=$(this);
            var re = /^[_a-zA-Z0-9-]+(.[_a-zA-Z0-9-]+)*@([a-zA-Z0-9-]+.)+[a-zA-Z]{2,4}$/;
            var is_email=re.test(input.val());

            console.log("mail");console.log(is_email);
            if(is_email){
                input.removeClass("invalid").addClass("valid");
            }
            else{
                input.removeClass("valid").addClass("invalid");
            }
        });
        $('#signin-NiveauEtude').on('change', function() {
            var input=$(this);
            var is_study_level=input.val();
            console.log("niveu");console.log(is_study_level);
            if(is_study_level){
                input.removeClass("invalid").addClass("valid");
            }
            else{
                input.removeClass("valid").addClass("invalid");
            }
        });
        $('#signin-TypeContrat').on('change', function() {
            var input=$(this);
            var is_contract_type=input.val();
            console.log("contr");console.log(is_contract_type);
            if(is_contract_type){
                input.removeClass("invalid").addClass("valid");
            }
            else{
                input.removeClass("valid").addClass("invalid");
            }
        });
    });
    $("#signin-submit button").click(function(event){
        var form_data=$("#form-signin").serializeArray();
        var error_free=true;
        console.log("hello");
        for (var input in form_data){
            var element=$("#signin-"+form_data[input]['name']);
            var valid=element.hasClass("valid");
            var error_element=$("span", element.parent());
            if (!valid){error_element.removeClass("error").addClass("error_show"); error_free=false;}
            else{error_element.removeClass("error_show").addClass("error");}
        }
        if (!error_free){
            event.preventDefault();
        }
        else{
            alert('No errors: Form will be submitted');
        }
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
            if (a < 89) a+=2000; // Si a < 89 alors on ajoute 2000 sinon on ajoute 1900
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
});