let response;
let user_id = window.localStorage.getItem('userId') ?? undefined;
let warehouse_id = window.localStorage.getItem('warehouseId') ?? undefined;
let hyrje = document.querySelector('#hyrjet');
let dalje = document.querySelector('#daljet');
if (user_id && warehouse_id) {
    showLoading();
    $.ajax({
        url: "../api/getLogistics",
        type: 'GET',
        data: {user_id: user_id, warehouse_id: warehouse_id},
        context: document.body,
        success: function (data, status, xhr) {
            response = data;
            addItems(data.coming_in, hyrje);
            addItems(data.goung_out, dalje);
        },
        error: function (jqXhr, textStatus, errorMessage) {
            response = jqXhr.responseJSON.message;
        }
    }).done(() => {
        console.log(response);
        hideLoading();
    });
} else {
    console.log("Ju nuk jeni loguar si magazinier!")
}

/*
coming_in: [
tracking_code,
last_status,
last_updated,
receiver: { name, address },
sender_name,
package_priority
],
going_out: [
tracking_code,
last_status,
last_updated,
receiver: { name, address },
sender_name,
package_priority
]
 */
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
    let itemSet = [];
    for (let item in data) {
        if (!data.hasOwnProperty(item)) continue;
        let priorityType;
        (item.package_priority) === "normal" ? priorityType='green' : priorityType='red';
        let cloneHTML = '<div class="col-12 col-xl-6">\n' +
            '                                <div class="h-100 float-left d-inline-block stock-image-holder">\n' +
            '                                    <img src="http://127.0.0.1:8000/storage/icons/in-stock.png" alt="stock">\n' +
            '                                </div>\n' +
            '                                <div class="float-right content-info-holder">\n' +
            '                                    <p><b>Kodi: </b>' + item.tracking_code +'</p>\n' +
            '                                    <p><b>Marresi: </b>' + item.receiver +'</p>\n' +
            '                                    <p><b>Derguesi: </b>' + item.sender_name +'</p>\n' +
            '                                    <p><b>Adresa: </b>sda sda</p>\n' +
            '                                    <p><b>Statusi: </b>' + item.last_status +'</p>\n' +
            '                                    <p><b>Perditesuar: </b>' + item.last_updated +'</p>\n' +
            '                                    <p><b>Prioriteti: </b><span class="priority-type  '+ priorityType +' ">' + item.package_priority +'</span></p>\n' +
            '                                </div>\n' +
            '                            </div>'
        location.innerHTML+= cloneHTML;
    }
}
