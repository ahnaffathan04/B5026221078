<!DOCTYPE html>
<html lang="en">

<head>
    <title>Portofolio Ahnaf Fathan Nabiha</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, i nitial-scale=1.0">
    <link rel="stylesheet" href="./styles/style.css" />
    <script>
        function validateForm() {
            var name = document.getElementById("name");
            var email = document.getElementById("email");
            var msg = document.getElementById("msg");


            if (name.value == "") {
                alert("You must fill your name!");
                return false;
            }

            if (email.value == "") {
                alert("You must fill your email!");
                return false;
            }
        }
    </script>

</head>

<body>
    <!---header-->
    <header>
        <div class="main-container">
            <div class="nav">
                <div class="logo">
                    <a href="">AFN</a>
                </div>

                <nav>
                    <ul>
                        <li><a href="#fathan">Home</a></li>
                        <li><a href="#educations">Education</a></li>
                        <li><a href="#skills">Skills</a></li>
                        <li><a href="#services">Services</a></li>
                        <li><a href="#portofolios">Portofolio</a></li>
                        <li><a href="#contact">Contact</a></li>
                        <li><a href="#works">Works</a></li>
                    </ul>
                </nav>

                <div class="burgerMenu">
                    <div class="lines-1"></div>
                    <div class="lines-2"></div>
                    <div class="lines-3"></div>
                </div>
            </div>

            <section id="fathan">
                <div class="fathan-left">
                    <h1 class="pre-title">Ahnaf Fathan Nabiha</h1>
                    <h2>I'm a <span>Web Developer</span></h2>
                    <p>A student from Information System Departemenr at Institut Teknologi Sepuluh Nopember from batsh 2022</p>
                </div>

                <div class="fathan-right">
                    <img src="./images/fathan.jpg" alt="Fathan's photo" width="500px">
                </div>
            </section>
        </div>

    </header>
    <!---header end-->

    <!-- education -->
    <section id="educations">
        <div class="skills main-container">
            <h1 class="section-title">Education</h1>

            <!-- education-1 -->
            <div class="education">
                <div class="line">
                    <div></div>
                </div>

                <div class="education-info">
                    <h4 class="education-title">Institut Teknologi Sepuluh Nopember</h4>
                    <p>Undergraduate - Information System</p>
                    <h4 class="education-years">2022 - Present</h4>
                </div>
            </div>

            <!-- education-2 -->
            <div class="education">
                <div class="line">
                    <div></div>
                </div>

                <div class="education-info">
                    <h4 class="education-title">SMA Pesantren Unggul Albayan</h4>
                    <p>Saintek Class</p>
                    <h4 class="education-years">2019 - 2022</h4>
                </div>
            </div>

        </div>
    </section>
    <!-- end of education -->

    <!-- skills -->
    <section id="skills">
        <div class="skills main-container">
            <h1 class="middle-title">My Skills</h1>

            <div class="skills-grid">
                <div class="skills-desc">
                    <p>The following are my skills at programming language that I have gained from Web Programming class at ITS or even my self</p>

                    <div class="skill-list">
                        <div class="row">
                            <div class="col-6">
                                <ul>
                                    <li>HTML</li>
                                    <li>CSS</li>
                                    <li>JavaScript</li>
                                </ul>
                            </div>

                            <div class="col-6">

                                <ul>
                                    <li>Java</li>
                                    <li>Solidity</li>
                                    <li>Cairo</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end of skills -->

    <!-- service-->
    <section id="services">
        <div class="services main-container">
            <h1 class="section-title services-title">My Service</h1>
            <div class="grid-3">

                <!--Service 1-->
                <div class="service">
                    <div class="service-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <path
                                d="M16.896 10l-4.896-8-4.896 8-7.104-4 3 11v5h18v-5l3-11-7.104 4zm-11.896 10v-2h14v2h-14zm14.2-4h-14.4l-1.612-5.909 4.615 2.598 4.197-6.857 4.197 6.857 4.615-2.598-1.612 5.909z" />
                        </svg>
                    </div>
                    <h4>UI/UX Design</h4>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit....</p>
                    <h6>Read More</h6>
                </div>


                <!--Service 2-->
                <div class="service">
                    <div class="service-icon">
                        <svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd"
                            clip-rule="evenodd">
                            <path
                                d="M18 24h-12c-1.104 0-2-.896-2-2v-20c0-1.104.896-2 2-2h12c1.104 0 2 .896 2 2v20c0 1.104-.896 2-2 2zm1-5.083h-14v3.083c0 .552.449 1 1 1h12c.552 0 1-.448 1-1v-3.083zm-7 3c-.553 0-1-.448-1-1s.447-1 1-1c.552 0 .999.448.999 1s-.447 1-.999 1zm7-17h-14v13h14v-13zm-1-3.917h-12c-.551 0-1 .449-1 1v1.917h14v-1.917c0-.551-.448-1-1-1zm-4.5 1.917h-3c-.276 0-.5-.224-.5-.5s.224-.5.5-.5h3c.276 0 .5.224.5.5s-.224.5-.5.5z" />
                        </svg>
                    </div>
                    <h4>Application Development</h4>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit....</p>
                    <h6>Read More</h6>
                </div>


                <!--Service 3-->
                <div class="service">
                    <div class="service-icon">
                        <svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd"
                            clip-rule="evenodd">
                            <path
                                d="M12.02 0c6.614.011 11.98 5.383 11.98 12 0 6.623-5.376 12-12 12-6.623 0-12-5.377-12-12 0-6.617 5.367-11.989 11.981-12h.039zm3.694 16h-7.427c.639 4.266 2.242 7 3.713 7 1.472 0 3.075-2.734 3.714-7m6.535 0h-5.523c-.426 2.985-1.321 5.402-2.485 6.771 3.669-.76 6.671-3.35 8.008-6.771m-14.974 0h-5.524c1.338 3.421 4.34 6.011 8.009 6.771-1.164-1.369-2.059-3.786-2.485-6.771m-.123-7h-5.736c-.331 1.166-.741 3.389 0 6h5.736c-.188-1.814-.215-3.925 0-6m8.691 0h-7.685c-.195 1.8-.225 3.927 0 6h7.685c.196-1.811.224-3.93 0-6m6.742 0h-5.736c.062.592.308 3.019 0 6h5.736c.741-2.612.331-4.835 0-6m-12.825-7.771c-3.669.76-6.671 3.35-8.009 6.771h5.524c.426-2.985 1.321-5.403 2.485-6.771m5.954 6.771c-.639-4.266-2.242-7-3.714-7-1.471 0-3.074 2.734-3.713 7h7.427zm-1.473-6.771c1.164 1.368 2.059 3.786 2.485 6.771h5.523c-1.337-3.421-4.339-6.011-8.008-6.771" />
                        </svg>
                    </div>
                    <h4>Web3 Developer</h4>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit....</p>
                    <h6>Read More</h6>
                </div>
            </div>
        </div>
    </section>
    <!--end of services-->

    <!--portofolio-->
    <section id="portofolios">
        <div class="portofolios main-container">
            <h1 class="section-title services-title">My Portofolios</h1>

            <div class="grid-3">
                <!--porto 1 -->
                <div class="portofolio">
                    <div class="portofolio-cover">
                        <img src="./images/porto1.png" alt="foto portofolio 1" />
                    </div>

                    <div class="portofolio-info">
                        <div class="portofolio-title">
                            <h4>Agency website</h4>
                        </div>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ut omnis magnam, similique fuga,
                            quo
                            impedit aspernatur dolorum numquam distinctio sequi possimus! Quod sapiente rerum vero modi
                            voluptates odit rem reprehenderit.</p>
                    </div>
                </div>

                <!--porto 2 -->
                <div class="portofolio">
                    <div class="portofolio-cover">
                        <img src="./images/porto2.jpg" alt="foto portofolio 2" />
                    </div>

                    <div class="portofolio-info">
                        <div class="portofolio-title">
                            <h4>Landing Page</h4>
                        </div>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ut omnis magnam, similique fuga,
                            quo
                            impedit aspernatur dolorum numquam distinctio sequi possimus! Quod sapiente rerum vero modi
                            voluptates odit rem reprehenderit.</p>
                    </div>
                </div>

                <!--porto 3 -->
                <div class="portofolio">
                    <div class="portofolio-cover">
                        <img src="./images/porto3.jpg" alt="foto portofolio 3" />
                    </div>

                    <div class="portofolio-info">
                        <div class="portofolio-title">
                            <h4>Dashboard Admin</h4>
                        </div>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ut omnis magnam, similique fuga,
                            quo
                            impedit aspernatur dolorum numquam distinctio sequi possimus! Quod sapiente rerum vero modi
                            voluptates odit rem reprehenderit.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--end of portofolio-->

    <!-- contact -->
    <section id="contact">
        <h1 class="section-title services-title">Contact Me</h1>

        <div class="contact main-container">

            <div class="contact-left">
                <form class="contact-form" action="#fathan" method="get" onsubmit="return validateForm()">
                    <div>
                        <label for="name">Your Name:</label>
                        <input type="text" placeholder="Name" id="name">
                        <div class="text danger" id="msg"></div>
                    </div>
                    <div>
                        <label for="email">Your Email:</label>
                        <input type="email" placeholder="Email" id="email">
                        <div class="text danger" id="msg"></div>
                    </div>
                    <div>
                        <label for="pesan">Your Message:</label>
                        <textarea name="message" id="message" placeholder="Message" cols="30" rows="10"></textarea>
                    </div>
                    <div>
                        <button class="btn-submit">Send</button>
                    </div>
                </form>
            </div>

            <div class="contact-right">
                <h4>Let's talk about everything!</h4>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                <!-- adress -->
                <div class="contact-item">
                    <div class="contact-item-detail">
                        <h4>Address</h4>
                        <div class="contact-item-detail-icon">
                            <svg width="24" height="24" xmlns="http://www.w3.org/2000/svg"
                                fill-rule="evenodd" clip-rule="evenodd">
                                <path
                                    d="M12 10c-1.104 0-2-.896-2-2s.896-2 2-2 2 .896 2 2-.896 2-2 2m0-5c-1.657 0-3 1.343-3 3s1.343 3 3 3 3-1.343 3-3-1.343-3-3-3m-7 2.602c0-3.517 3.271-6.602 7-6.602s7 3.085 7 6.602c0 3.455-2.563 7.543-7 14.527-4.489-7.073-7-11.072-7-14.527m7-7.602c-4.198 0-8 3.403-8 7.602 0 4.198 3.469 9.21 8 16.398 4.531-7.188 8-12.2 8-16.398 0-4.199-3.801-7.602-8-7.602" />
                            </svg>
                            <p>123 Street, New York, USA</p>
                        </div>
                    </div>
                </div>

                <!-- phone -->
                <div class="contact-item">
                    <div class="contact-item-detail">
                        <h4>Phone</h4>
                        <div class="contact-item-detail-icon">
                            <svg width="24" height="24" xmlns="http://www.w3.org/2000/svg"
                                fill-rule="evenodd" clip-rule="evenodd">
                                <path
                                    d="M8.26 1.289l-1.564.772c-5.793 3.02 2.798 20.944 9.31 20.944.46 0 .904-.094 1.317-.284l1.542-.755-2.898-5.594-1.54.754c-.181.087-.384.134-.597.134-2.561 0-6.841-8.204-4.241-9.596l1.546-.763-2.875-5.612zm7.746 22.711c-5.68 0-12.221-11.114-12.221-17.832 0-2.419.833-4.146 2.457-4.992l2.382-1.176 3.857 7.347-2.437 1.201c-1.439.772 2.409 8.424 3.956 7.68l2.399-1.179 3.816 7.36s-2.36 1.162-2.476 1.215c-.547.251-1.129.376-1.733.376" />
                            </svg>
                            <p>+6281214314164</p>
                        </div>
                    </div>
                </div>

                <!-- email -->
                <div class="contact-item">
                    <div class="contact-item-detail">
                        <h4>Email</h4>
                        <div class="contact-item-detail-icon">
                            <svg width="24" height="24" xmlns="http://www.w3.org/2000/svg"
                                fill-rule="evenodd" clip-rule="evenodd">
                                <path
                                    d="M24 21h-24v-18h24v18zm-23-16.477v15.477h22v-15.477l-10.999 10-11.001-10zm21.089-.523h-20.176l10.088 9.171 10.088-9.171z" />
                            </svg>
                            <p>ahnaf.fathan@gmail.com</p>
                        </div>
                    </div>
                </div>

                <!-- website -->
                <div class="contact-item">
                    <div class="contact-item-detail">
                        <h4>Website</h4>
                        <div class="contact-item-detail-icon">
                            <svg width="24" height="24" xmlns="http://www.w3.org/2000/svg"
                                fill-rule="evenodd" clip-rule="evenodd">
                                <path
                                    d="M12.02 0c6.614.011 11.98 5.383 11.98 12 0 6.623-5.376 12-12 12-6.623 0-12-5.377-12-12 0-6.617 5.367-11.989 11.981-12h.039zm3.694 16h-7.427c.639 4.266 2.242 7 3.713 7 1.472 0 3.075-2.734 3.714-7m6.535 0h-5.523c-.426 2.985-1.321 5.402-2.485 6.771 3.669-.76 6.671-3.35 8.008-6.771m-14.974 0h-5.524c1.338 3.421 4.34 6.011 8.009 6.771-1.164-1.369-2.059-3.786-2.485-6.771m-.123-7h-5.736c-.331 1.166-.741 3.389 0 6h5.736c-.188-1.814-.215-3.925 0-6m8.691 0h-7.685c-.195 1.8-.225 3.927 0 6h7.685c.196-1.811.224-3.93 0-6m6.742 0h-5.736c.062.592.308 3.019 0 6h5.736c.741-2.612.331-4.835 0-6m-12.825-7.771c-3.669.76-6.671 3.35-8.009 6.771h5.524c.426-2.985 1.321-5.403 2.485-6.771m5.954 6.771c-.639-4.266-2.242-7-3.714-7-1.471 0-3.074 2.734-3.713 7h7.427zm-1.473-6.771c1.164 1.368 2.059 3.786 2.485 6.771h5.523c-1.337-3.421-4.339-6.011-8.008-6.771" />
                            </svg>
                            <p>www.mynameisfathan.com</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- end of contact -->

    <!-- works -->
    <section id="works">
        <div class="works main-container">
            <h1 class="middle-title">My Works</h1>
            <p>These are my works that I have done in the third semester at Web Programming class</p>

            <div class="works-grid">
                <div class="works-desc">
                    <div class="works-list">
                        <ul>
                            <h3>
                                <a href="http://127.0.0.1:8000/hello">- Hello</a>
                            </h3>
                            <h3>
                                <a href="http://127.0.0.1:8000/link">- Link</a>
                            </h3>
                            <h3>
                                <a href="http://127.0.0.1:8000/style">- Style</a>
                            </h3>
                            <h3>
                                <a href="http://127.0.0.1:8000/kkado">- Linktree</a>
                            </h3>
                            <h3>
                                <a href="http://127.0.0.1:8000/figma">- Bootstrap</a>
                            </h3>
                        </ul>
                        <ul>
                            <h3>
                                <a href="http://127.0.0.1:8000/responsive">- Responsive</a>
                            </h3>
                            <h3>
                                <a href="http://127.0.0.1:8000/js1">- JS1</a>
                            </h3>
                            <h3>
                                <a href="http://127.0.0.1:8000/js2">- JS2</a>
                            </h3>
                            <h3>
                                <a href="http://127.0.0.1:8000/validation_form">- Form Validation</a>
                            </h3>
                            <h3>
                                <a href="http://127.0.0.1:8000/my_portofolio">- ETS</a>
                            </h3>
                            <div>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end of works -->

    <!-- footer -->
    <footer>
        <section id="contact">
            <div class="contact main-container">
                <div class="contact-left">&#169 All Rights Reserved.2023</div>

                <div class="contact-right">
                    <div class="footer-icons">
                        <div class="contact-item">
                            <a href="https://www.facebook.com/ahnaf.nabiha/">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24">
                                    <path
                                        d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z" />
                                </svg>
                            </a>
                            <a href="https://twitter.com/?lang=id">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24">
                                    <path
                                        d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z" />
                                </svg>
                            </a>
                            <a href="https://www.instagram.com/fathan.nabiha/">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24">
                                    <path
                                        d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z" />
                                </svg>
                            </a>
                            <a href="https://www.linkedin.com/in/ahnaf-fathan-nabiha-67067111a/">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24">
                                    <path
                                        d="M4.98 3.5c0 1.381-1.11 2.5-2.48 2.5s-2.48-1.119-2.48-2.5c0-1.38 1.11-2.5 2.48-2.5s2.48 1.12 2.48 2.5zm.02 4.5h-5v16h5v-16zm7.982 0h-4.968v16h4.969v-8.399c0-4.67 6.029-5.052 6.029 0v8.399h4.988v-10.131c0-7.88-8.922-7.593-11.018-3.714v-2.155z" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </footer>
    <!-- end footer -->

</body>

</html>
