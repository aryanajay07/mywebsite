function registerUser() {
    var name = document.getElementById("name").value;
    var email = document.getElementById("email").value;
    var password = document.getElementById("password").value;

    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function () {
        if (xhr.readyState == 4 && xhr.status == 200) {
            var response = xhr.responseText;
            console.log(response);
            // Handle the response from the server
        }
    };
    xhr.open("POST", "signup.php", true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    var data = "name=" + encodeURIComponent(name) + "&email=" + encodeURIComponent(email) + "&password=" + encodeURIComponent(password);
    xhr.send(data);
}