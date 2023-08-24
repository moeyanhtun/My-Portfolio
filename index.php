<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!--=============== FAVICON ===============-->
    <link rel="shortcut icon" href="assets/img/Logo.png" type="image/x-icon" />

    <!--=============== REMIXICONS ===============-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/3.4.0/remixicon.css" crossorigin="" />

    <!--=============== CSS ===============-->
    <link rel="stylesheet" href="assets/css/styles.css" />

    <title>Moe Yan Htun Portfolio</title>
</head>

<body>
    <!--==================== HEADER ====================-->
    <header class="header" id="header">
        <nav class="nav container">
            <a href="#" class="nav__logo">
                <span class="nav__logo-circle">M</span>
                <span class="nav__logo-name">Moe Yan Htun</span>
            </a>
            <div class="nav__menu" id="nav-menu">
                <span class="nav__title">Menu</span>
                <h3 class="nav__name">Moe Yan</h3>

                <ul class="nav__list">
                    <li class="nav__item">
                        <a href="#home" class="nav__link">Home</a>
                    </li>
                    <li class="nav__item">
                        <a href="#about" class="nav__link">About Me</a>
                    </li>
                    <li class="nav__item">
                        <a href="#projects" class="nav__link">Projects</a>
                    </li>
                    <li class="nav__item">
                        <a href="#services" class="nav__link">Services</a>
                    </li>
                    <li class="nav__item">
                        <a href="#contact" class="nav__link">Contact Me</a>
                    </li>
                </ul>
                <!-- close button -->
                <div class="nav__close" id="nav-close">
                    <i class="ri-close-line"></i>
                </div>
            </div>
            <div class="nav__buttons">
                <!-- Toggle button -->
                <div class="nav__toggle" id="nav-toggle">
                    <i class="ri-menu-4-line"></i>
                </div>
            </div>
        </nav>
    </header>

    <!--==================== MAIN ====================-->
    <main class="main">
        <!--==================== HOME ====================-->
        <section class="home section" id="home"></section>
        <div class="home__container container grid">
            <h1 class="home__name">Moe Yan Htun</h1>
            <div class="home__prefil">
                <div class="home__image">
                    <img src="./assets/img/IMG_0679.JPG" alt="image" class="home__img" />
                    <div class="home__shadow"></div>
                    <img src="./assets/img/curved-arrow.svg" alt="" class="home__arrow" />
                    <img src="./assets/img/random-lines.svg" alt="" class="home__line" />
                    <div class="geometric-box"></div>
                </div>
                <div class="home__social">
                    <a href="" target="_blank" class="home__social-link"><i class="ri-instagram-line"></i></a>
                    <a href="" target="_blank" class="home__social-link">
                        <i class="ri-linkedin-box-line"></i>
                    </a>
                    <a href="" target="_blank" class="home__social-link">
                        <i class="ri-github-fill"></i>
                    </a>
                </div>
            </div>
            <div class="home__info">
                <p class="home__description">
                    <b>Frontend Developer</b>, with knowledge in web development and
                    design, I offer the best projects resulting in quality work.
                </p>
                <a href="#about" class="home__scroll">
                    <div class="home__scroll-box">
                        <i class="ri-arrow-down-s-line"></i>
                    </div>
                    <span class="home__scroll-text">Scroll Down</span>
                </a>
            </div>
        </div>
        <!--==================== ABOUT ====================-->
        <section class="about section" id="about">
            <div class="about__container container grid">
                <h2 class="section__title-1"><span>About Me.</span></h2>
                <div class="about__perfil">
                    <div class="about__image">
                        <img src="./assets/img/about-perfil.jpg" alt="image" class="about__img" />
                        <div class="about__shadow"></div>
                        <div class="geometric-box"></div>
                        <img src="./assets/img/random-lines.svg" alt="" class="about__line" />
                        <div class="about__box"></div>
                    </div>
                </div>
                <div class="about__info">
                    <p class="about__description">
                        Passionate about creating <b>Web Pages</b> with
                        <b>UI/UX User Interface</b>, I have years of experience and many
                        clients are happy with the projects carried out.
                    </p>
                    <ul class="about__list">
                        <li class="about__item">
                            <b>My Skills Are:</b> HTML, CSS, JavaScript, PHP, Git & GitHub,
                            Bootstrap & Photoshop.
                        </li>
                    </ul>
                    <div class="about__buttons">
                        <a href="#contact" class="button">
                            <i class="ri-send-plane-line"></i> Contact Me
                        </a>
                        <a href="" class="button__ghost" target="_blank"><i class="ri-linkedin-box-fill"></i></a>
                    </div>
                </div>
            </div>
        </section>

        <!--==================== SERVICES ====================-->
        <section class="services section" id="services">
            <h2 class="section__title-2">
                <span>Services.</span>
            </h2>
            <div class="services__container container grid">
                <article class="services__card">
                    <div class="services__border"></div>

                    <div class="services__content">
                        <div class="services__icon">
                            <div class="services__box">
                                <i class="ri-layout-4-line"></i>
                            </div>
                        </div>

                        <h2 class="services__title">Web Design</h2>

                        <p class="services__description">
                            Beautiful and elegant designs with interfaces that are
                            intuitive, efficient and pleasant to use for the user.
                        </p>
                    </div>
                </article>
                <article class="services__card">
                    <div class="services__border"></div>

                    <div class="services__content">
                        <div class="services__icon">
                            <div class="services__box">
                                <i class="ri-code-box-line"></i>
                            </div>
                        </div>

                        <h2 class="services__title">Development</h2>

                        <p class="services__description">
                            Custom web development tailored to your specifications, designed
                            to provide a flawless user experience.
                        </p>
                    </div>
                </article>
                <article class="services__card">
                    <div class="services__border"></div>

                    <div class="services__content">
                        <div class="services__icon">
                            <div class="services__box">
                                <i class="ri-smartphone-line"></i>
                            </div>
                        </div>

                        <h2 class="services__title">Mobile App</h2>

                        <p class="services__description">
                            Design and transform website projects into mobile apps to
                            provide a seamless user experience.
                        </p>
                    </div>
                </article>
            </div>
        </section>

        <!--==================== PROJECTS ====================-->
        <section class="projects section" id="projects">
            <h2 class="section__title-1">Projects.</h2>

            <div class="projects__container container grid">
                <article class="projects__card">
                    <div class="projects__image">
                        <img src="./assets/img/project-1.jpg" alt="image
              class=" projects__img" />
                        <a href="" class="projects__button button">
                            <i class="ri-arrow-right-up-line"></i>
                        </a>
                    </div>

                    <div class="projects__content">
                        <h3 class="projects__subtitle">Website</h3>
                        <h2 class="projects__title">Restaurant Website</h2>

                        <p class="projects__description">
                            Project that you carry out in the design and structure of the
                            layout, showing the design at the client's request.
                        </p>
                    </div>

                    <div class="projects__buttons">
                        <a href="" target="_blank" class="projects__link">
                            <i class="ri-github-line"></i> View
                        </a>

                        <a href="" target="_blank" class="projects__link">
                            <i class="ri-dribbble-line"></i> View
                        </a>
                    </div>
                </article>
                <article class="projects__card">
                    <div class="projects__image">
                        <img src="./assets/img/project-2.jpg" alt="image
              class=" projects__img" />
                        <a href="" class="projects__button button">
                            <i class="ri-arrow-right-up-line"></i>
                        </a>
                    </div>

                    <div class="projects__content">
                        <h3 class="projects__subtitle">App</h3>
                        <h2 class="projects__title">Yoga App</h2>

                        <p class="projects__description">
                            Project that you carry out in the design and structure of the
                            layout, showing the design at the client's request.
                        </p>
                    </div>

                    <div class="projects__buttons">
                        <a href="" target="_blank" class="projects__link">
                            <i class="ri-github-line"></i> View
                        </a>

                        <a href="" target="_blank" class="projects__link">
                            <i class="ri-dribbble-line"></i> View
                        </a>
                    </div>
                </article>
                <article class="projects__card">
                    <div class="projects__image">
                        <img src="./assets/img/project-3.jpg" alt="image
              class=" projects__img" />
                        <a href="" class="projects__button button">
                            <i class="ri-arrow-right-up-line"></i>
                        </a>
                    </div>

                    <div class="projects__content">
                        <h3 class="projects__subtitle">App</h3>
                        <h2 class="projects__title">Fast Food App</h2>

                        <p class="projects__description">
                            Project that you carry out in the design and structure of the
                            layout, showing the design at the client's request.
                        </p>
                    </div>

                    <div class="projects__buttons">
                        <a href="" target="_blank" class="projects__link">
                            <i class="ri-github-line"></i> View
                        </a>

                        <a href="" target="_blank" class="projects__link">
                            <i class="ri-dribbble-line"></i> View
                        </a>
                    </div>
                </article>
                <article class="projects__card">
                    <div class="projects__image">
                        <img src="./assets/img/project-2.jpg" alt="image
              class=" projects__img" />
                        <a href="" class="projects__button button">
                            <i class="ri-arrow-right-up-line"></i>
                        </a>
                    </div>

                    <div class="projects__content">
                        <h3 class="projects__subtitle">Website</h3>
                        <h2 class="projects__title">Coffee Delivery Website</h2>

                        <p class="projects__description">
                            Project that you carry out in the design and structure of the
                            layout, showing the design at the client's request.
                        </p>
                    </div>

                    <div class="projects__buttons">
                        <a href="" target="_blank" class="projects__link">
                            <i class="ri-github-line"></i> View
                        </a>

                        <a href="" target="_blank" class="projects__link">
                            <i class="ri-dribbble-line"></i> View
                        </a>
                    </div>
                </article>
                <article class="projects__card">
                    <div class="projects__image">
                        <img src="./assets/img/project-1.jpg" alt="image
              class=" projects__img" />
                        <a href="" class="projects__button button">
                            <i class="ri-arrow-right-up-line"></i>
                        </a>
                    </div>

                    <div class="projects__content">
                        <h3 class="projects__subtitle">Website</h3>
                        <h2 class="projects__title">Barbershop Website</h2>

                        <p class="projects__description">
                            Project that you carry out in the design and structure of the
                            layout, showing the design at the client's request.
                        </p>
                    </div>

                    <div class="projects__buttons">
                        <a href="" target="_blank" class="projects__link">
                            <i class="ri-github-line"></i> View
                        </a>

                        <a href="" target="_blank" class="projects__link">
                            <i class="ri-dribbble-line"></i> View
                        </a>
                    </div>
                </article>
            </div>
        </section>

        <!--==================== CONTACT ====================-->
        <section class="contact section" id="contact">
            <div class="contact__container grid">
                <div class="contact__data">
                    <h2 class="section__title-2">
                        <span>Contact Me.</span>
                    </h2>

                    <p class="contact__description-1">
                        I will read all emails. Send me any message you want and I'll get
                        back to you.
                    </p>
                    <p class="contact__description-2">
                        I need your <b>Name</b> and <b>Email Address</b>, but you won't
                        receive anything other than your reply.
                    </p>

                    <div class="geometric-box"></div>
                </div>

                <div class="contact__mail">
                    <h2 class="contact__title">Send Me A Message</h2>

                    <form action="" class="contact__form" id="contact-form">
                        <div class="contact__group">
                            <div class="contact__box">
                                <input type="text" name="user_name" class="contact__input" id="name" required
                                    placeholder="First Name " />
                                <label for="name" class="contact__label">First Name </label>
                            </div>
                            <div class="contact__box">
                                <input type="email" name="user_email" class="contact__input" id="email" required
                                    placeholder="Email Address" />
                                <label for="email" class="contact__label">Email Address</label>
                            </div>
                        </div>
                        <div class="contact__box">
                            <input type="text" name="user_subject" class="contact__input" id="subject" required
                                placeholder="Subject" />
                            <label for="subject" class="contact__label">Subject</label>
                        </div>
                        <div class="contact__box contact__area">
                            <textarea name="user_message" id="message" class="contact__input" required
                                placeholder="Message"></textarea>
                            <label for="name" class="contact__label">Message</label>
                        </div>
                        <p class="contact__message" id="contact-message"></p>
                        <button class="contact__button button" type="submit">
                            <i class="ri-send-plane-line"></i> Send Message
                        </button>
                    </form>
                </div>

                <div class="contact__social">
                    <img src="./assets/img/curved-arrow.svg" alt="" class="contact__social-arrow" />

                    <div class="contact__social-data">
                        <p class="contact__social-descriptopn-1">Does not send emails</p>

                        <p class="contact__social-description-2">
                            Write me on my social networks
                        </p>
                    </div>

                    <div class="contact__social-links">
                        <a href="" target="_blank" class="contact__social-link"><i
                                class="ri-facebook-circle-line"></i></a>
                        <a href="" target="_blank" class="contact__social-link"><i class="ri-instagram-line"></i></a>
                        <a href="" target="_blank" class="contact__social-link"><i class="ri-linkedin-box-line"></i></a>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!--==================== FOOTER ====================-->
    <footer class="footer">
        <div class="footer__container container grid">
            <ul class="footer__links">
                <li><a href="#about" class="footer__link">About</a></li>
                <li><a href="#services" class="footer__link">Services</a></li>
                <li><a href="#projects" class="footer__link">Projects</a></li>

            </ul>
            <span class='footer__copy'>
                &#169; All Rights Reserved
                <a href="#">Bedimcode.</a>
            </span>

        </div>
    </footer>

    <!--========== SCROLL UP ==========-->

    <!--=============== SCROLLREVEAL ===============-->
    <script src=""></script>

    <!--=============== EMAIL JS ===============-->
    <script src="https://cdn.jsdelivr.net/npm/@emailjs/browser@3/dist/email.min.js"></script>

    <!--=============== MAIN JS ===============-->
    <script src="assets/js/main.js"></script>
</body>

</html>