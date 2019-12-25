var see = document.getElementById('see');
see.addEventListener('click', function () {
    if (see.className == "fas fa-fw fa-eye") {
        see.className = "fas fa-fw fa-eye-slash";
        document.getElementById('pass').type = 'text';
    } else {
        see.className = "fas fa-fw fa-eye";
        document.getElementById('pass').type = 'password';
    }
});