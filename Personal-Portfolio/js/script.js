// --------------scroll section active link---------------

let sections= document.querySelectorAll('section');
let navlinks= document.querySelectorAll('id nav a');

window.onscroll = () =>{
    sections.forEach(sec => {
        let top = window.scrollY;
        let offset = sec.offsetTop - 150;
        let height = sec.offsetHeight;
        let id = sec.getAttribute('id');

        if(top >= offset && top < offset + height){
            navlinks.forEach(links => {
                links.classList.remove('active');
                document.querySelector('header nav a[href*=' + id + ']').classList.add('active');
            })
        }
    })

// --------------scroll section active link---------------
let header = document.querySelector('header');

header.classList.toggle('sticky', window.scrollY >100);

// =====remove toggle icon and navbar when click navbar link (scroll)===/
menuIcon.classList.remove('bx-x');
navbar.classList.remove('active');

};

// scroll reveal
ScrollReveal({
     reset: true, 
     distance: '80px',
     duration: 2000,
     delay: 200  
});

ScrollReveal().reveal('.header, .container, #header', { origin: 'top' });
ScrollReveal().reveal('.about-col-1 img, .about-container, .services-container, .interest-container, .languages-container, .contact-container', { origin: 'bottom' });
ScrollReveal().reveal('.header-content h1, .about-col-1, tab-contents active-tab, .box, .interest-list, .languages,  .h2, .row', { origin: 'left' });
ScrollReveal().reveal('.header-text p, .class h1, .about-content', { origin: 'right' });


// typed js

const typed = new Typed('.multiple-text',{
    strings: ['BSIT Student', 'Block 3A'],
    typeSpeed: 100,
    backSpeed: 100,
    backDelay: 1000,
    loop: true
})