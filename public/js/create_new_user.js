var pickContainer;
var postContainer;
var warehouseContainer;
var adminContainer;
var clientContainer;
var roleContainer;

document.addEventListener("DOMContentLoaded", (event) => {
    pickContainer = document.getElementById('pick-user-container');
    postContainer = document.getElementById('postman-container');
    warehouseContainer = document.getElementById('warehouse-container');
    adminContainer = document.getElementById('admin-container');
    clientContainer = document.getElementById('client-container');
    roleContainer = document.getElementById('role-container');
});


function openPostman() {
    pickContainer.style.display = "none";
    roleContainer.style.display = "block";

    postContainer.style.display = "block";
    warehouseContainer.style.display = "none";
    adminContainer.style.display = "none";
    clientContainer.style.display = "none";
}

function openWarehouse() {
    pickContainer.style.display = "none";
    roleContainer.style.display = "block";

    postContainer.style.display = "none";
    warehouseContainer.style.display = "block";
    adminContainer.style.display = "none";
    clientContainer.style.display = "none";
}

function openAdmin() {
    pickContainer.style.display = "none";
    roleContainer.style.display = "block";

    postContainer.style.display = "none";
    warehouseContainer.style.display = "none";
    adminContainer.style.display = "block";
    clientContainer.style.display = "none";
}

function openClient() {
    pickContainer.style.display = "none";
    roleContainer.style.display = "block";

    postContainer.style.display = "none";
    warehouseContainer.style.display = "none";
    adminContainer.style.display = "none";
    clientContainer.style.display = "block";
}

function changeRole(e) {
    switch(e.selectedIndex) {
        case 0: {
            openAdmin();
            break;
        }
        case 1: {
            openPostman();
            break;
        }
        case 2: {
            openWarehouse();
            break;
        }
        case 3: {
            openClient();
            break;
        }
    }
}

function registerAdmin() {
    let name = adminContainer.getElementById('name');
    let surname = adminContainer.getElementById('surname');
    let address = adminContainer.getElementById('address');
    let pay = adminContainer.getElementById('pay');
    let email = adminContainer.getElementById('email');
    let password = adminContainer.getElementById('password');
    let confirmPassword = adminContainer.getElementById('confirm-password');



}
