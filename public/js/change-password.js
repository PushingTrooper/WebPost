//POST changePassword(user_id)
//Returns: { message, success }
var usersList = document.querySelector('#users-list');
showLoading();
$.ajax({
    url: "../api/getAllUsers",
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
    addUsers(response.users);
}).fail(() => {
    console.log('err');
});

function getTrElement(str) {
    var div = document.createElement('table');
    div.innerHTML += str;
    return div.firstElementChild.firstElementChild;
}

function addUsers(users) {
    for (let user in users) {
        if (!users.hasOwnProperty(user)) continue;
        console.log(user);

        let userHTML = '<tr>\n' +
            '                                <td>'+ users[user].name +'</td>\n' +
            '                                <td>'+ users[user].email +'</td>\n' +
            '                                <td>1234567</td>\n' +
            '                                <td><input type="password" placeholder="Shkruani ketu"></td>\n' +
            '                                <td><input type="password" placeholder="Shkruani ketu"></td>\n' +
            '                                <td>\n' +
            '                                    <div data-id="'+ users[user].user_id +'" class="confirm">Konfirmoni</div>\n' +
            '                                </td>\n' +
            '                            </tr>'
        usersList.appendChild(getTrElement(userHTML));
    }
    $(".confirm").prop("onclick", null).off("click");
    $('.confirm').click(() => {
        let element = event.target;
        let parent = element.parentElement.parentElement;
        let inputs = parent.querySelectorAll('input[type="password"]')
        let id = element.dataset.id;
        let password = (inputs[0].value === inputs[1].value && inputs[0].value !== "") ? inputs[0].value : undefined;
        if(password) {
            changePass(id, password).then(r => {console.log(r)});
        } else {
            console.log("Passwords not written correctly");
        }

    })
}

async function changePass(id, password) {
    showLoading();
    $.ajax({
        url: "../api/changePassword",
        type: 'POST',
        data: {user_id: id, password: password},
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
        console.log('success');
    }).fail(() => {
        console.log('err');
    });
}
