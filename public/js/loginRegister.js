
function showForm(formType) {
    var loginBtn = document.querySelector(".modal-content .modal-header .login-header-tab");
    var registerBtn = document.querySelector(".modal-content .modal-header .register-header-tab");;

    var loginTab = document.querySelector(".modal-content .modal-body .login-modal-form");
    var registerTab = document.querySelector(".modal-content .modal-body .register-modal-form");;

    loginTab.style.display = "none";
    registerTab.style.display = "none";

    loginBtn.style.backgroundColor = "#545454";
    loginBtn.style.color = "white";

    registerBtn.style.backgroundColor = "#545454";
    registerBtn.style.color = "white";

    if (formType === "login") {
        loginBtn.style.backgroundColor = "White";
        loginBtn.style.color = "#545454";
        loginTab.style.display = "flex";

    } else if (formType === "register") {
        registerBtn.style.backgroundColor = "White";
        registerBtn.style.color = "#545454";
        registerTab.style.display = "flex";
    }
}

function closeMsg() {
    var alertMsg = document.getElementById('alert-msg');
    alertMsg.style.display = 'none';
}
