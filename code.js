function togglePasswordVisibility() {
    var passwordInput = document.getElementById("regPas");
    if (passwordInput.type === "password") {
        passwordInput.type = "text";
    } else {
        passwordInput.type = "password";
    }
}

function validate() {
    var $valid = true;
    document.getElementById("user_info").innerHTML = "";
    document.getElementById("password_info").innerHTML = "";

    var userName = document.getElementById("user_name").value;
    var password = document.getElementById("password").value;
    if (userName == "") {
        document.getElementById("user_info").innerHTML = "required";
        $valid = false;
    }
    if (password == "") {
        document.getElementById("password_info").innerHTML = "required";
        $valid = false;
    }
    return $valid;
}