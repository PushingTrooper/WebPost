function loginClick() {
    let email = document.getElementById("email").value;
    let password = document.getElementById("password").value;
    let message = document.getElementById('request-message');

    if(email && password) {
        $.ajax({
            url: "../api/login",
            type: 'POST',
            data: { email: email, password: password },
            context: document.body,
            success: function(data, status, xhr){
                message.style.visibility = "visible";

                switch (data.role_id) {
                    case 1: {
                        message.innerHTML = "Jeni loguar si admin!";
                        break;
                    }
                    case 2: {
                        message.innerHTML = "Jeni loguar si magazinier!";
                        break;
                    }
                    case 3: {
                        message.innerHTML = "Jeni loguar si postier!";
                        break;
                    }
                    case 4: {
                        message.innerHTML = "Jeni loguar si klient!";
                        break;
                    }
                }

                //console.log("punon");
            },
            error: function (jqXhr, textStatus, errorMessage) {
                message.style.visibility = "visible";
                message.innerHTML = jqXhr.responseJSON.message;
            }
        });
    }
}
