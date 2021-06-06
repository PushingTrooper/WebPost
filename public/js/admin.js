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
