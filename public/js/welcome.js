function goToLogin() {
    window.location = "./login"
}

function goToRegister() {
    window.location = "./register"
}

function goToTracking() {
    let trackingCode = document.getElementById('gjurmo').value;

    window.location = "./track/"+trackingCode
}
