function uploadImage() {
    let imageSelect = document.getElementById('image');
    let image = document.getElementById('image');
    let userId = window.localStorage.getItem('userId');

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
            data.path;
        },
        error: function (jqXhr, textStatus, errorMessage) {

        }
    }).done(() => {

    }).fail(() => {

    });
}

function onUpload() {
    window.location = "../admin"
}
