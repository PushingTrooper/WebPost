function loginClick() {
    var email = document.getElementById("email").value;
    var password = document.getElementById("password").value;

    if(email && password) {
        $.ajax({
            url: "../api/login",
            type: 'POST',
            data: { email: email, password: password },
            context: document.body,
            success: function(){
                console.log("punon");
            },
            error: function () {
                console.log("NUK punon");
            }
        });
    }
}
