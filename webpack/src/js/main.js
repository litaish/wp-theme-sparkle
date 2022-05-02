$( document ).ready( function() {

    var $w = $( window );
    var $d = $( document );
    var $b = $( 'body' );

    /*
    Navbar functionality
    */
    const toggleBtn = document.getElementsByClassName('toggle-btn')[0];
    const navLinks = document.getElementsByClassName('nav-links')[0];

    const firstBar = document.getElementById('firstBar');
    const secondBar = document.getElementById('secondBar');
    const thirdBar = document.getElementById('thirdBar');

    toggleBtn.addEventListener('click', () => {
        navLinks.classList.toggle('active');
        firstBar.classList.toggle('active-bar-one');
        secondBar.classList.toggle('active-bar-two');
        thirdBar.classList.toggle('active-bar-three');
    });

    /**
     * Language selection
     */
    const langContainer = document.getElementById('langContainer')

    langContainer.addEventListener('click', (e) => {
        // Get child nodes
        let children = langContainer.children;
        let clicked = e.target;
        // Toggle underline class for selected item
        for (let i = 0; i < children.length; i++) {
            if (children[i] == clicked){
                clicked.classList.toggle('lang-active');
            } else {
                children[i].classList.remove('lang-active');
            }
        }
    });

    /**
     * Prepending data-pdg-cf7 to generated contact form
     */

    // Add classes and validation data attribute to form wrapper
    // const formWrapper = document.getElementById("wpcf7-f361-p15-o1");
    const formWrapper = document.querySelector(".wpcf7");
    formWrapper.classList.add("form-wrapper");
    formWrapper.setAttribute("data-pdg-cf7", '');

    // Add classes to form
    const contactForm = document.querySelector(".wpcf7-form");
    contactForm.classList.add("contact-form");

    // Add classes to checkbox label
    const checkTosLabel = document.querySelector(".wpcf7-list-item-label");
    checkTosLabel.classList.add("f-mont-tos");

} );




