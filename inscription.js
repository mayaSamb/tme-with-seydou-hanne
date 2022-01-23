function validate() {
    var isValid = true;

    var nom = $("#nom").val();
    var prenom = $("#prenom").val();
    var email = $("#email").val();
    var telephone = $("#telephone").val();
    var mdp = $("#mdp").val();

    if (nom == "") {
        $("#nom").css('border', '#fb0505 1px solid');
        isValid = false;
    }
    if (prenom == "") {
        $("#prenom").css('border', '#fb0505 1px solid');
        isValid = false;
    }
    if (email == "") {
        $("#email").css('border', '#fb0505 1px solid');
        isValid = false;
    }
    if (!email.match(/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/)) {
        $("#info").html("(Adresse email non valide)");
        $("#email").css('border', '#fb0505 1px solid');
        isValid = false;
    }
    if (telephone == "") {
        $("#telephone").css('border', '#fb0505 1px solid');
        isValid = false;
    }
    if (mdp == "") {
        $("#mdp").css('border', '#fb0505 1px solid');
        isValid = false;
    }
    return isValid;
}