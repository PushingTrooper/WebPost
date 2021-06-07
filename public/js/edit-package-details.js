var tracking_code;

document.addEventListener("DOMContentLoaded", (event) => {
    tracking_code = document.getElementById('tracking-code').innerHTML;
    let value = document.getElementById('value');
    let is_completed = document.getElementById('is-completed');
    let receiver_name = document.getElementById('receiver-name');
    let receiver_address = document.getElementById('receiver-address');
    let package_priority = document.getElementById('priority');
    let package_type = document.getElementById('type');
    let city = document.getElementById('city');
    let last_status_name = document.getElementById('last-status-name');
    let last_date = document.getElementById('last-date');
    let last_user = document.getElementById('last-user');
    let comment = document.getElementById('comment');
    showLoading()

    $.ajax({
        url: "../api/getPackageDetails",
        type: 'POST',
        data: {tracking_code: tracking_code},
        context: document.body,
        success: function (data, status, xhr) {
            let history = data.history;
            if(history.length > 0) {
                let lastIndex = history.length-1;
                let lastStatus = history[lastIndex];

                last_status_name.innerHTML = lastStatus.status
                last_date.innerHTML = lastStatus.date
                last_user.innerHTML = lastStatus.user.name
            }

            value.innerHTML = data.payment.value
            if(data.payment.is_completed) {
                is_completed.innerHTML = data.payment.is_completed
            } else {
                is_completed.innerHTML = "Nuk është paguar"
            }

            if(data.type == "paketë") {
                package_type.selectedIndex = 1
            } else {
                package_type.selectedIndex = 0
            }

            if(data.package_priority == "normal") {
                package_priority.selectedIndex = 1
            } else {
                package_type.selectedIndex = 0
            }

            receiver_name.value = data.receiver.name
            receiver_address.value = data.receiver.address
            comment.value = data.comment
            hideLoading()
        },
        error: function (jqXhr, textStatus, errorMessage) {
            console.log("error")
            hideLoading()
        }
    })
});

function editPackage() {
    let receiver_name = document.getElementById('receiver-name').value;
    let receiver_address = document.getElementById('receiver-address').value;
    let package_priority = document.getElementById('priority');
    let package_type = document.getElementById('type');
    let comment = document.getElementById('comment').value;
    let user_id = window.localStorage.getItem('userId');

    var type;
    if(package_type.selectedIndex == 0) type = "letër"
    else type = "paketë"

    var priority;
    if(package_priority.selectedIndex == 0) priority = "ekspres"
    else priority = "normal"

    $.ajax({
        url: "../api/editPackage",
        type: 'POST',
        data: {tracking_code: tracking_code, user_id: user_id, receiver_name: receiver_name,
            receiver_surname: 'mbiemerKot', receiver_address: receiver_address, type: type,
            package_priority: priority, comment: comment},
        context: document.body,
        success: function (data, status, xhr) {
            window.location = "../packageDetails/"+tracking_code
        },
        error: function (jqXhr, textStatus, errorMessage) {
            console.log("error")
            hideLoading()
        }
    })
}
