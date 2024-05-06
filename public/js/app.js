$(document).on('click', '.logout', function() {
    $('#logout_form').submit();
});

$(document).on('click', '.open-login-modal', function() {
    $('#registerModalCenter').modal('hide');
    $('#loginModalCenter').modal('show');
});

$(document).on('click', '.open-register-modal', function() {
    $('#loginModalCenter').modal('hide');
    $('#registerModalCenter').modal('show');
});

$(document).ready(function () {
    let url = sessionStorage.getItem('url')
    if(url != null && url != undefined && url != '')
    {
        // window.location.href=url;
    }
});

