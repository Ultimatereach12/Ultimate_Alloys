function validate(){
    var one = document.getElementById("username").value;
    var two = document.getElementById("password").value;
    if (one == "" || two == ""){
        document.getElementById("username").style.borderColor = "#b21f2d";
        document.getElementById("password").style.borderColor = "#b21f2d";
        document.getElementById("error").style.display = "block";
        return false;
    } else {
        return true;
    }
}