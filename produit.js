function validate() {
    var isValid = true;

    var nom = $("#nom").val();
    var prix = $("#prix").val();
    

    if (nom == "") {
        $("#nom").css('border', '#fb0505 1px solid');
        isValid = false;
    }
    if (prix == "") {
        $("#prix").css('border', '#fb0505 1px solid');
        isValid = false;
    }
    return isValid;
}