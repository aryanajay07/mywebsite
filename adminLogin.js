function adminCheck() {
    // Get the values entered by the user
    var username = document.getElementById("username").value;
    var password = document.getElementById("password").value;
    
    // Check if the username and password are correct
    if (username == "admin" && password == "password") {
       // alert("Successful");
        window.location.assign("adminPage.html"); 
    } else {
        alert("Invalid username or password.");
    }
}

