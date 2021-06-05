var pickContainer;
var postContainer;
var warehouseContainer;
var adminContainer;
var clientContainer;
var roleContainer;
var requestMessage;
var cities;
var cityIds;
var warehouses;
var warehouseIds;
var container;

document.addEventListener("DOMContentLoaded", (event) => {
    pickContainer = document.getElementById('pick-user-container');
    postContainer = document.getElementById('postman-container');
    warehouseContainer = document.getElementById('warehouse-container');
    adminContainer = document.getElementById('admin-container');
    clientContainer = document.getElementById('client-container');
    roleContainer = document.getElementById('role-container');
    requestMessage = document.getElementById('request-message');
    cities = []
    cityIds = []
    warehouses = [];
    warehouseIds = [];

    $.ajax({
        url: "../api/getAllCities",
        type: 'GET',
        context: document.body,
        success: function (data, status, xhr) {
            let citiesReq = data.cities

            for(let i=1; i<citiesReq.length; i++) {
                cities.push(citiesReq[i].emer)
                cityIds.push(citiesReq[i].qytet_id)
            }

            fillCities()

        },
        error: function (jqXhr, textStatus, errorMessage) {
            console.log("error")
        }
    })

    $.ajax({
        url: "../api/getAllWarehouses",
        type: 'GET',
        context: document.body,
        success: function (data, status, xhr) {
            let warehousesReq = data.warehouses

            for(let i=1; i<warehousesReq.length; i++) {
                warehouses.push(warehousesReq[i].emer)
                warehouseIds.push(warehousesReq[i].magazine_id)
            }

            fillWarehouses()
        },
        error: function (jqXhr, textStatus, errorMessage) {
            console.log("error")
        }
    })

});

function fillCities() {
    let citySelect = container.find('#city')[0];
    citySelect.innerHTML = '';
    for(let i=0; i<cities.length; i++) {
        var opt = document.createElement('option');
        opt.value = cityIds[i];
        opt.innerHTML = cities[i];
        citySelect.appendChild(opt)
    }
}

function fillWarehouses() {
    let warehouseSelect = container.find('#warehouse')[0];
    warehouseSelect.innerHTML = '';
    for(let i=0; i<warehouses.length; i++) {
        let opt = document.createElement('option');
        opt.value = warehouseIds[i];
        opt.innerHTML = warehouses[i];
        warehouseSelect.appendChild(opt)
    }
}

function openPostman() {
    pickContainer.style.display = "none";
    roleContainer.style.display = "block";

    postContainer.style.display = "block";
    warehouseContainer.style.display = "none";
    adminContainer.style.display = "none";
    clientContainer.style.display = "none";

    container = $("#postman-container")

    fillCities()
}

function openWarehouse() {
    pickContainer.style.display = "none";
    roleContainer.style.display = "block";

    postContainer.style.display = "none";
    warehouseContainer.style.display = "block";
    adminContainer.style.display = "none";
    clientContainer.style.display = "none";

    container = $("#warehouse-container")

    fillCities()

    fillWarehouses()
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
    requestMessage.style.visibility = "hidden";

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
    let admin = $("#admin-container")

    let name = admin.find('#name')[0].value;
    let surname = admin.find('#surname')[0].value;
    let address = admin.find('#address')[0].value;
    let pay = admin.find('#pay')[0].value;
    let email = admin.find('#email')[0].value;
    let password = admin.find('#password')[0].value;
    let confirmPassword = admin.find('#confirm-password')[0].value;

    if(name && surname && address && pay && email && password && confirmPassword) {
        requestMessage.style.visibility = "hidden";

        if(password == confirmPassword) {
            $.ajax({
                url: "../api/registerAdmin",
                type: 'POST',
                data: {email: email, password: password, name: name, surname: surname, pay: pay, address: address},
                context: document.body,
                success: function (data, status, xhr) {
                    requestMessage.style.visibility = "visible";
                    requestMessage.style.backgroundColor = "darkGreen";
                    requestMessage.innerHTML = "U regjistruat me sukses";
                },
                error: function (jqXhr, textStatus, errorMessage) {
                    requestMessage.style.visibility = "visible";
                    requestMessage.innerHTML = jqXhr.responseJSON.message;
                }
            })
        } else {
            requestMessage.style.visibility = "visible";
            requestMessage.innerHTML = "Fjalëkalimet nuk përputhen";
        }

    } else {
        requestMessage.style.visibility = "visible";
        requestMessage.innerHTML = "Plotësoji të gjitha fushat";
    }
}

function registerPostman() {
    let postman = $("#postman-container")

    let name = postman.find('#name')[0].value;
    let surname = postman.find('#surname')[0].value;
    let city = postman.find('#city')[0].value;
    let pay = postman.find('#pay')[0].value;
    let address = postman.find('#address')[0].value;
    let email = postman.find('#email')[0].value;
    let password = postman.find('#password')[0].value;
    let confirmPassword = postman.find('#confirm-password')[0].value;

    if(name && surname && city && address && pay && email && password && confirmPassword) {
        requestMessage.style.visibility = "hidden";

        if(password == confirmPassword) {
            $.ajax({
                url: "../api/registerPostman",
                type: 'POST',
                data: {email: email, password: password, name: name, surname: surname, pay: pay, city_id: city, address: address},
                context: document.body,
                success: function (data, status, xhr) {
                    requestMessage.style.visibility = "visible";
                    requestMessage.style.backgroundColor = "darkGreen";
                    requestMessage.innerHTML = "U regjistruat me sukses";
                },
                error: function (jqXhr, textStatus, errorMessage) {
                    requestMessage.style.visibility = "visible";
                    requestMessage.innerHTML = jqXhr.responseJSON.message;
                }
            })
        } else {
            requestMessage.style.visibility = "visible";
            requestMessage.innerHTML = "Fjalëkalimet nuk përputhen";
        }

    } else {
        requestMessage.style.visibility = "visible";
        requestMessage.innerHTML = "Plotësoji të gjitha fushat";
    }
}

function registerWarehouseman() {
    let warehouse = $("#warehouse-container")

    let name = warehouse.find('#name')[0].value;
    let surname = warehouse.find('#surname')[0].value;
    let city = warehouse.find('#city')[0].value;
    let warehouseId = warehouse.find('#warehouse')[0].value;
    let pay = warehouse.find('#pay')[0].value;
    let address = warehouse.find('#address')[0].value;
    let email = warehouse.find('#email')[0].value;
    let password = warehouse.find('#password')[0].value;
    let confirmPassword = warehouse.find('#confirm-password')[0].value;

    if(name && surname && city && address && warehouseId && pay && email && password && confirmPassword) {
        requestMessage.style.visibility = "hidden";

        if(password == confirmPassword) {
            $.ajax({
                url: "../api/registerWarehouseman",
                type: 'POST',
                data: {email: email, password: password, name: name, surname: surname, pay: pay, magazine_id: warehouseId, city_id: city, address: address},
                context: document.body,
                success: function (data, status, xhr) {
                    requestMessage.style.visibility = "visible";
                    requestMessage.style.backgroundColor = "darkGreen";
                    requestMessage.innerHTML = "U regjistruat me sukses";
                },
                error: function (jqXhr, textStatus, errorMessage) {
                    requestMessage.style.visibility = "visible";
                    requestMessage.innerHTML = jqXhr.responseJSON.message;
                }
            })
        } else {
            requestMessage.style.visibility = "visible";
            requestMessage.innerHTML = "Fjalëkalimet nuk përputhen";
        }

    } else {
        requestMessage.style.visibility = "visible";
        requestMessage.innerHTML = "Plotësoji të gjitha fushat";
    }
}

function registerClient() {
    let client = $("#client-container")

    let name = client.find('#name')[0].value;
    let surname = client.find('#surname')[0].value;
    let address = client.find('#address')[0].value;
    let email = client.find('#email')[0].value;
    let password = client.find('#password')[0].value;
    let confirmPassword = client.find('#confirm-password')[0].value;

    if(name && surname && address && email && password && confirmPassword) {
        requestMessage.style.visibility = "hidden";

        if(password == confirmPassword) {
            $.ajax({
                url: "../api/registerCustomer",
                type: 'POST',
                data: {email: email, password: password, name: name, surname: surname, address: address},
                context: document.body,
                success: function (data, status, xhr) {
                    requestMessage.style.visibility = "visible";
                    requestMessage.style.backgroundColor = "darkGreen";
                    requestMessage.innerHTML = "U regjistruat me sukses";
                },
                error: function (jqXhr, textStatus, errorMessage) {
                    requestMessage.style.visibility = "visible";
                    requestMessage.innerHTML = jqXhr.responseJSON.message;
                }
            })
        } else {
            requestMessage.style.visibility = "visible";
            requestMessage.innerHTML = "Fjalëkalimet nuk përputhen";
        }

    } else {
        requestMessage.style.visibility = "visible";
        requestMessage.innerHTML = "Plotësoji të gjitha fushat";
    }
}
