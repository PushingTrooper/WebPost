let storage = window.localStorage

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
                storage.setItem("userId", data.user_id);
                storage.setItem("roleId", data.role_id);
                storage.setItem("warehouseId", data.warehouse_id);

                switch (data.role_id) {
                    case 1: {
                        message.innerHTML = "Jeni loguar si admin!";
                        window.location = "../admin"
                        break;
                    }
                    case 2: {
                        message.innerHTML = "Jeni loguar si magazinier!";
                        window.location = "../packages"
                        break;
                    }
                    case 3: {
                        message.innerHTML = "Jeni loguar si postier!";
                        window.location = "../packages"
                        break;
                    }
                    case 4: {
                        message.innerHTML = "Jeni loguar si klient!";
                        window.location = "../packages"
                        break;
                    }
                }

                //console.log("punon");
            },
            error: function (jqXhr, textStatus, errorMessage) {
                message.style.visibility = "visible";
                message.innerHTML = jqXhr.responseJSON.message;
                storage.removeItem("userId")
                storage.removeItem('warehouseId');
            }
        });
    }
}
