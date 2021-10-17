    let link = document.getElementById('links');
    let ham_open = document.getElementById('ham-open');
    let ham_close = document.getElementById('ham-close');

    function open_link() {
        ham_open.classList.add('d-none');
        ham_close.classList.remove('d-none');
        link.classList.remove('d-none');
    }

    function close_link() {
        ham_open.classList.remove('d-none');
        ham_close.classList.add('d-none');
        link.classList.add('d-none');
    }




    window.onscroll = function() { myFunction() };



    function myFunction() {
        var navbar = document.getElementById("nav-bar");
        var sticky = navbar.offsetTop;

        if (window.pageYOffset > sticky) {
            navbar.classList.add("nav-bar")
        } else {
            navbar.classList.remove("nav-bar");
        }
    }



    // function  on click login page


    var box_login = document.getElementById('box-login');
    var box_register = document.getElementById('box-register');
    var btn_login = document.getElementById('btn-login');
    var btn_register = document.getElementById('btn-register');

    function login() {
        btn_login.classList.add('active');
        btn_register.classList.remove('active');
        box_login.classList.remove('flex-none');
        box_register.classList.add('flex-none');
    }

    function register() {
        btn_login.classList.remove('active');
        btn_register.classList.add('active');
        box_login.classList.add('flex-none');
        box_register.classList.remove('flex-none');
    }