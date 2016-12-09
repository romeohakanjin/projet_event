/*
 $(function(){
    $('#inputDateNaissance').datepicker();
 }); 
 */

$(function(){
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
});