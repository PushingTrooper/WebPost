
function getTrElement(str) {
    var div = document.createElement('table');
    div.innerHTML += str;
    return div.firstElementChild.firstElementChild;
}

let response;
let user_id = window.localStorage.getItem('userId') ?? undefined;
let role_id = window.localStorage.getItem('roleId') ?? undefined;
if (user_id) {
    showLoading();

    let url;
    if(role_id == 4) {
        url = "../api/getPackagesForUser"
    } else {
        url = "../api/getAllPackages"
    }

    $.ajax({
        url: url,
        type: 'POST',
        data: {user_id: user_id},
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
        addPackages(response.packages);
    }).fail(() => {
        console.log('err');
    });
} else {
    console.log("Ju nuk jeni loguar sic duhet!");
}

function addPackages(packages) {
    let parent = document.querySelector('#package-list-table-container');
    if (parent) {
        for (let item in packages) {
            if (!packages.hasOwnProperty(item)) continue;
            console.log(packages[item]);
            let priorityType;
            (packages[item].package_priority) === "normal" ? priorityType='green' : priorityType='red';
            let packageHTML = '<tr>\n' +
                '                                <td>' + packages[item].tracking_code + '</td>\n' +
                '                                <td>' + packages[item].sender_name + 'm</td>\n' +
                '                                <td>' + packages[item].receiver.name + '</td>\n' +
                '                                <td>' + packages[item].receiver.address + '</td>\n' +
                '                                <td>' + packages[item].last_status + '</td>\n' +
                '                                <td>\n' + packages[item].last_updated + '</td>\n' +
                '                                <td><span class="priority-type  '+ priorityType +' ">' + packages[item].package_priority +'</span></td>\n' +
                '                            </tr>'
            parent.appendChild(getTrElement(packageHTML));
        }
    }
}
