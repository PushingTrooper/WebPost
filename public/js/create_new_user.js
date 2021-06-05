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

function goBack() {
    //TODO: Remove when dropdown is finished
    pickContainer.style.display = "block";
    roleContainer.style.display = "none";

    postContainer.style.display = "none";
    warehouseContainer.style.display = "none";
    adminContainer.style.display = "none";
    clientContainer.style.display = "none";
}
