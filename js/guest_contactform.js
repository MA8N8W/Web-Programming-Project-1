//Hide error messagebox on page load and set styling
window.onload = function () {
    document.getElementById("errormessage").innerHTML = "";
    document.getElementById("errormessage").style.border = '1px solid red';
    document.getElementById("errormessage").style.background = '#FFE0EA';
    document.getElementById("errormessage").style.color = 'red';
    document.getElementById("errormessage").style.display = 'none';
}
function validateForm() {
    //Form Values
    var name = document.forms["messageForm"]["name"].value;
    var email = document.forms["messageForm"]["email"].value;
    var message = document.forms["messageForm"]["content"].value;
    //HTML Elements
    var nameField = document.getElementById("name");
    var nameLegend = document.getElementById("namelegend");
    var nameFieldset = document.getElementById("namefieldset");
    var emailField = document.getElementById("email");
    var emailLegend = document.getElementById("emaillegend");
    var emailFieldset = document.getElementById("emailfieldset");
    var contentField = document.getElementById("content");
    var contentLegend = document.getElementById("contentlegend");
    var contentFieldset = document.getElementById("contentfieldset");
    var errorMessage = document.getElementById("errormessage");
    //Initialize error messagebox - Reset error messagebox for subsequent runs of the function
    errorMessage.style.display = 'none';
    errorMessage.innerHTML = "";

    //event.preventDefault();

    if (name && name.length < 5) {
        errorMessage.innerHTML = "<p>Name must be longer than 5 characters.</p>";
        nameFieldset.style.border = '1px solid red';
        nameLegend.style.color = 'red';
        nameField.style.background = '#FFE0EA';
    } else {
        nameFieldset.style.border = '1px solid green';
        nameLegend.style.color = 'green';
        nameField.style.background = '#FFF';
    }

    if (!email) {
        emailFieldset.style.border = '1px solid green';
        emailLegend.style.color = 'green';
        emailField.style.background = '#FFF';
    } else {
        var emailRegex = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})/;
        if (!emailRegex.test(email)) {
            errorMessage.innerHTML += "<p>Email Address format is invalid.</p>"
            emailFieldset.style.border = '1px solid red';
            emailLegend.style.color = 'red';
            emailField.style.background = '#FFE0EA';
        } else {
            emailFieldset.style.border = '1px solid green';
            emailLegend.style.color = 'green';
            emailField.style.background = '#FFF';
        }
    }

    if (!message) {
        errorMessage.innerHTML += "<p>Message Content must contain a message.</p>"
        contentFieldset.style.border = '1px solid red';
        contentLegend.style.color = 'red';
        contentField.style.background = '#FFE0EA';
    } else {
        contentFieldset.style.border = '1px solid green';
        contentLegend.style.color = 'green';
        contentField.style.background = '#FFF';
    }

    if (errorMessage.innerHTML !== "") {
        errorMessage.style.display = 'block';
        return false;
    } else {
        return true;
    }
}

function submitForm() {
    if (validateForm()) {
        alert("Form Submitted");
        document.getElementById("messageForm").submit();
    } else {
        event.preventDefault();
    }
}