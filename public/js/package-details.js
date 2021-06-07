var tracking_code;

document.addEventListener("DOMContentLoaded", (event) => {
    tracking_code = document.getElementById('tracking-code').innerHTML;
    let value = document.getElementById('value');
    let is_completed = document.getElementById('is-completed');
    let receiver_name = document.getElementById('receiver-name');
    let receiver_address = document.getElementById('receiver-address');
    let package_priority = document.getElementById('package-priority');
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

            receiver_name.innerHTML = data.receiver.name
            receiver_address.innerHTML = data.receiver.address
            package_priority.innerHTML = data.package_priority
            comment.innerHTML = data.comment
            hideLoading()
        },
        error: function (jqXhr, textStatus, errorMessage) {
            console.log("error")
            hideLoading()
        }
    })
});

function goToEdit() {
    window.location = "../editPackage/"+tracking_code
}
