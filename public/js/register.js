function registerClick() {
    let email = document.getElementById("email").value;
    let password = document.getElementById("password").value;
    let name = document.getElementById("name").value;
    let surname = document.getElementById("surname").value;
    let address = document.getElementById("address").value;
    let message = document.getElementById('request-message');

    if(email && password) {
        $.ajax({
            url: "../api/registerCustomer",
            type: 'POST',
            data: { email: email, password: password, name: name, surname: surname, address: address },
            context: document.body,
            success: function(data, status, xhr){
                message.style.visibility = "hidden";

                window.location = "./login"
            },
            error: function (jqXhr, textStatus, errorMessage) {
                message.style.visibility = "visible";
                message.innerHTML = jqXhr.responseJSON.message;
            }
        });
    }
}
