let trackButton = document.querySelector('input[type="submit"]');
let idInput = document.querySelector('#gjurmo');
let historyContainer = document.querySelector('#package-history-container');
let packageNumberContainer = document.querySelector('#package-number-container');


$(trackButton).click(() => {
    if(idInput.value && idInput.value !== "" && idInput.value.trim() !== "") {
        window.location = '../track/'+idInput.value;
    }
})
showLoading();
$.ajax({
    url: '../api/getPackageDetails/',
    type: 'POST',
    data: {tracking_code: idInput.value},
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
    addInfo(response);
}).fail(() => {
    console.log('err');
});

function addInfo(data) {
    packageNumberContainer.innerText += ' ' + idInput.value ?? '-';
    let history = data.history;
    for (let item in history) {
        if (!history.hasOwnProperty(item)) continue;
        console.log(history[item]);
        let historyHTML = '<div class="tracking-section active">\n' +
            '                                <h5>Statusi: '+ history[item].status +'</h5>\n' +
            '                                <h5>Data: '+ history[item].date +'</h5>\n' +
            '                            </div>'
        historyContainer.innerHTML += historyHTML;
    }
}
