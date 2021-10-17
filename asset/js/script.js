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

    var navbar = document.getElementById("nav-bar");
    var sticky = navbar.offsetTop;

    function myFunction() {
        if (window.pageYOffset > sticky) {
            navbar.classList.add("nav-bar")
        } else {
            navbar.classList.remove("nav-bar");
        }
    }