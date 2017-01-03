jQuery(function($) {'use strict',
    $(document).ready(function() {
        $('#signin-DateNaissance').datepicker({ dateFormat: 'yy-mm-dd' });
    });
    $(function(){
        $("form[name='form-signin']").validate({
            rules: {
                Civilite: "required",
                Nom: "required",
                Prenom: "required",
                DateNaissance: "required",
                Adresse: "required",
                CodePostal: {
                    required: true,
                    rangelength: [2, 5]
                },
                Ville: "required",
                Email: {
                    required: true,
                    email: true
                },
                NiveauEtude: "required",
                TypeContrat: "required",
                startDate: {
                    required: true,
                    dpDate: true
                }
            },
            messages: {
                Civilite: "Veuillez sélectionner une civilité.",
                Nom: "Veuillez saisir votre nom.",
                Prenom: "Veuillez saisir votre prenom.",
                DateNaissance: "Veuillez saisir votre date de naissance.",
                Adresse: "Veuillez saisir votre adresse.",
                CodePostal: {
                    required: "Veuillez saisir votre code postal.",
                    rangelength: "Le code postal doit comprendre 2 à 5 caractéres."
                },
                Ville: "Veuillez saisir votre ville.",
                Email: {
                    required: "Veuillez saisir votre adresse email.",
                    email: "Veuillez saisir une adresse email valide."
                },
                NiveauEtude: "Veuillez sélectionner votre niveau d'étude.",
                TypeContrat: "Veuillez sélectionner un type de contrat."
            },
            submitHandler: function(form) {
              form.submit();
            }
        });
    });
});