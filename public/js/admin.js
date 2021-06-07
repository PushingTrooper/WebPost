document.addEventListener("DOMContentLoaded", (event) => {
    let added = document.getElementById('added');
    let waiting = document.getElementById('waiting');
    let nisur = document.getElementById('nisur');
    let inventory = document.getElementById('inventory');
    let arrived = document.getElementById('arrived');
    let returning = document.getElementById('returning');
    let returned = document.getElementById('returned');
    let lost = document.getElementById('lost');
    let deleted = document.getElementById('deleted');

    let admin = document.getElementById('admin');
    let warehouse = document.getElementById('warehouse');
    let postman = document.getElementById('postman');

    let express = document.getElementById('express');
    let normal = document.getElementById('normal');
    let letter = document.getElementById('letter');
    let packageSum = document.getElementById('package');

    $.ajax({
        url: "../api/getAdminMetrics",
        type: 'GET',
        context: document.body,
        success: function (data, status, xhr) {
            added.innerHTML = data.added
            waiting.innerHTML = data.pritje
            nisur.innerHTML = data.niusr
            inventory.innerHTML = data.inventory
            arrived.innerHTML = data.arrived
            returning.innerHTML = data.returning
            returned.innerHTML = data.returned
            lost.innerHTML = data.lost
            deleted.innerHTML = data.deleted

            admin.innerHTML = data.admin
            warehouse.innerHTML = data.warehouse
            postman.innerHTML = data.postman

            express.innerHTML = data.express
            normal.innerHTML = data.normal
            letter.innerHTML = data.letter
            packageSum.innerHTML = data.package

        },
        error: function (jqXhr, textStatus, errorMessage) {
            console.log("error")
        }
    })
});

function uploadImage() {
    let imageSelect = document.getElementById('image');
    let image = document.getElementById('image');
    let userId = window.localStorage.getItem('userId');
    var resp;
    let formData = new FormData();
    formData.append("image", imageSelect.files[0]);
    formData.append("user_id", userId);
    $.ajax({
        mimeType: "multipart/form-data",
        url: "../api/storeImage",
        type: 'POST',
        data: formData,
        processData: false,
        contentType: false,
        context: document.body,
        success: function (data, status, xhr) {
            resp = JSON.parse(data);

        },
        error: function (jqXhr, textStatus, errorMessage) {
            resp = jqXhr.responseJSON.message;
        }
    }).done(() => {
        resp = resp['path'].replace('public', 'storage')
        document.querySelector('#profile-image').src = resp;
        document.querySelector('.image-input-container').classList.add('finished')
    }).fail(() => {
       console.log('err');
    });
}

function onUpload() {
    window.location = "../admin"
}
