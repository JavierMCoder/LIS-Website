function yourAge() {

    var age = prompt("Please enter your age:");

    if (!age) {
        alert("Please fill in all the required field!");
        return false;
    }

    var regex=/^[0-9]+$/;
    if (!age.match(regex))
    {
        alert("Must input numbers!");
        return false;
    }


    if (age >= 18) {
        document.location = "welcome.html";
    }

    else {
        document.location = "old.html";
    }

} 