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
            hoverRemove.classList.remove('remoevI')

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


document.addEventListener("DOMContentLoaded", function () {
    const scrollUp = document.getElementById("scroll-up");
  
    // Show the button when user scrolls down
    window.onscroll = function () {
        if (document.body.scrollTop > 380 || document.documentElement.scrollTop > 380) {
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
const themeButton = document.getElementById('theme-button')
const darkTheme = 'dark-theme'
const iconTheme = 'ri-sun-line'

// Previously selected topic (if user selected)
const selectedTheme = localStorage.getItem('selected-theme')
const selectedIcon = localStorage.getItem('selected-icon')

// We obtain the current theme that the interface has by validating the dark-theme class
const getCurrentTheme = () => document.body.classList.contains(darkTheme) ? 'dark' : 'light'
const getCurrentIcon = () => themeButton.classList.contains(iconTheme) ? 'ri-moon-line' : 'ri-sun-line'

// We validate if the user previously chose a topic
if (selectedTheme) {
  // If the validation is fulfilled, we ask what the issue was to know if we activated or deactivated the dark
  document.body.classList[selectedTheme === 'dark' ? 'add' : 'remove'](darkTheme)
  themeButton.classList[selectedIcon === 'ri-moon-line' ? 'add' : 'remove'](iconTheme)
}

// Activate / deactivate the theme manually with the button
themeButton.addEventListener('click', () => {
    // Add or remove the dark / icon theme
    document.body.classList.toggle(darkTheme)
    themeButton.classList.toggle(iconTheme)
    // We save the theme and the current icon that the user chose
    localStorage.setItem('selected-theme', getCurrentTheme())
    localStorage.setItem('selected-icon', getCurrentIcon())
})
/*=============== SCROLL REVEAL ANIMATION ===============*/
