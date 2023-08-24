/*=============== SHOW MENU ===============*/
const navMenu = document.getElementById('nav-menu'),
    navToggle = document.getElementById('nav-toggle'),
    navClose = document.getElementById('nav-close'),
    hoverRemove = document.getElementById('toggle');

    // menu show

if (navToggle) {
    navToggle.addEventListener('click', () => {
        navMenu.classList.add('show-menu')
  
        hoverRemove.classList.add('remoevI')
    })
}
if (navClose) {
    navClose.addEventListener('click', () => {
        navMenu.classList.remove('show-menu')

        hoverRemove.classList.remove('remoevI')
    })
}


/*=============== REMOVE MENU MOBILE ===============*/
const navLink = document.querySelectorAll('.nav__link')

const linkAction = () => {
    const navMenu = document.getElementById('nav-menu')
    navMenu.classList.remove('show-menu')
     navToggle.classList.remove('toggle-color')
}
navLink.forEach(n => n.addEventListener('click', linkAction))
/*=============== SHADOW HEADER ===============*/
const shadowHeader = () => {
    const header = document.getElementById('header')
    this.scrollY >= 50 ? header.classList.add('shadow-header') : header.classList.remove('shadow-header')

}
window.addEventListener('scroll',shadowHeader)

/*=============== EMAIL JS ===============*/
const contactForm = document.getElementById('contact-form'),
contactMessage = document.getElementById('contact-message')

const sendEmail = (e) => {
    e.preventDefult()

    emailjs.sendForm('service_50t3m24','template_076vrp4','#contact-form','BuOUt-JIGuIIPqAwI')
        .then(() => {
        contactMessage.textContent = 'Message sent successfully ✅'
            setTimeout(() => {
            contactMessage.textContent=''

            }, 5000)
            
            contactForm.reset()
        }, () => {
            contactMessage.textContent = 'Message not sent (service error) ❌'
    })
}
contactForm.addEventListener('submit', sendEmail)
/*=============== SHOW SCROLL UP ===============*/
// const scrollUp = () =>{
// 	const scrollUp = document.getElementById('scroll-up')
//     // When the scroll is higher than 350 viewport height, add the show-scroll class to the a tag with the scrollup class
//     if (scrollUp >= 350) {
        
//     }
// }
// window.addEventListener('scroll', scrollUp())

document.addEventListener("DOMContentLoaded", function () {
    const scrollUp = document.getElementById("scroll-up");
  
    // Show the button when user scrolls down
    window.onscroll = function () {
        if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
            scrollUp.style.display = "block";
        } else {
            scrollUp.style.display = "none";
        }
    };
  
    // Scroll to the top when the button is clicked
    scrollUp.addEventListener("click", function () {
        document.body.scrollTop = 0; // For Safari
        document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE, and Opera
    });
});
/*=============== SCROLL SECTIONS ACTIVE LINK ===============*/
const sections = document.querySelectorAll('section[id]')
const scrollActive = () => {
    const scrollDown = window.scrollY
    sections.forEach(current => {
        const sectionHegiht = current.offsetHeight,
            sectionTop = current.offsetTop - 58,
            sectionId = current.getAttribute('id'),
            sectionClass = document.querySelector('.nav__menu a[href*=' + sectionId + ']')
        if (scrollDown > sectionTop && scrollDown <= sectionTop + sectionHegiht) {
            sectionClass.classList.add('active-link')
        } else {
            sectionClass.classList.remove('active-link')
        }

    })
}
window.addEventListener('scroll', scrollActive)
/*=============== DARK LIGHT THEME ===============*/ 


/*=============== SCROLL REVEAL ANIMATION ===============*/
