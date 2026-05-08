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
    var message = document.forms["messageForm"]["content"].value;
    //HTML Elements
    var contentField = document.getElementById("content");
    var contentLegend = document.getElementById("contentlegend");
    var contentFieldset = document.getElementById("contentfieldset");
    var errorMessage = document.getElementById("errormessage");
    //Initialize error messagebox - Reset error messagebox for subsequent runs of the function
    errorMessage.style.display = 'none';
    errorMessage.innerHTML = "";

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