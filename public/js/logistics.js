let response;
let user_id = window.localStorage.getItem('userId') ?? undefined;
let warehouse_id = window.localStorage.getItem('warehouseId') ?? undefined;
let hyrje = document.querySelector('#hyrjet');
let dalje = document.querySelector('#daljet');
if (user_id && warehouse_id) {
    showLoading();
    $.ajax({
        url: "../api/getLogistics",
        type: 'POST',
        data: {user_id: user_id, warehouse_id: warehouse_id},
        context: document.body,
        success: function (data, status, xhr) {
            response = data;
            hideLoading();
        },
        error: function (jqXhr, textStatus, errorMessage) {
            response = jqXhr.responseJSON.message;
            hideLoading();
        }
    }).done(() => {
        console.log(response);
        addItems(response.coming_in, hyrje);
        addItems(response.going_out, dalje);
    }).fail(() => {
        console.log('err');
    });
} else {
    console.log("Ju nuk jeni loguar si magazinier!")
}

class Package {
    tracking_code;
    last_status;
    last_updated;
    receiver;
    sender_name;
    package_priority;

    constructor(tracking_code, last_status, last_updated, receiver, sender_name, package_priority) {
        this.tracking_code = tracking_code;
        this.last_status = last_status;
        this.last_updated = last_updated;
        this.receiver = receiver;
        this.sender_name = sender_name;
        this.package_priority = package_priority;
    }
}

function addItems(data, location) {
    console.log('happening');
    let itemSet = [];
    console.log(data);
    for (let item in data) {
        if (!data.hasOwnProperty(item)) continue;
        console.log(data[item]);
        let priorityType;
        (data[item].package_priority) === "normal" ? priorityType='green' : priorityType='red';
        let cloneHTML = '<div class="col-12 col-xl-6">\n' +
            '                                <div class="h-100 float-left d-inline-block stock-image-holder">\n' +
            '                                    <img src="http://127.0.0.1:8000/storage/icons/in-stock.png" alt="stock">\n' +
            '                                </div>\n' +
            '                                <div class="float-right content-info-holder">\n' +
            '                                    <p><b>Kodi: </b>' + data[item].tracking_code +'</p>\n' +
            '                                    <p><b>Marresi: </b>' + data[item].receiver.name +'</p>\n' +
            '                                    <p><b>Derguesi: </b>' + data[item].sender_name +'</p>\n' +
            '                                    <p><b>Adresa: </b>sda sda</p>\n' +
            '                                    <p><b>Statusi: </b>' + data[item].last_status +'</p>\n' +
            '                                    <p><b>Perditesuar: </b>' + data[item].last_updated +'</p>\n' +
            '                                    <p><b>Prioriteti: </b><span class="priority-type  '+ priorityType +' ">' + data[item].package_priority +'</span></p>\n' +
            '                                </div>\n' +
            '                            </div>'
        location.innerHTML+= cloneHTML;
    }
}
