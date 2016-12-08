$(document).ready(function() {
    alert("hey");
    $('#inputDateNaissance').datepicker();
    $('#selectCivilite').on('change', function() {
        alert("0");
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
        alert("1");
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
        alert("2");
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
        alert("3");
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
        alert("4");
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
        alert("5");
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
        alert("6");
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
        alert("7");
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
        alert("8");
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
        alert("9");
        var input=$(this);
        var is_contract_type=input.val();
        if(is_contract_type){
            input.removeClass("invalid").addClass("valid");
        }
        else{
            input.removeClass("valid").addClass("invalid");
        }
    });
    $("#forminscrip button").click(function(event){
        var form_data=$("#form-signin").serializeArray();
        var error_free=true;
        for (var input in form_data){
            var element=$("#form-signin"+form_data[input]['name']);
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
});