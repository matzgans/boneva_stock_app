<!DOCTYPE html>

<head>
    <link href="./style.css" rel="stylesheet">
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link
        href="https://fonts.googleapis.com/css2?family=Noto+Sans+Arabic:wght@200;300;400;500;600;700;800;900&family=Poppins:wght@400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
    <link rel="stylesheet" href="{{ asset('landing/css/style.css') }}">

</head>

<body>
    <header>
        <div class="logo-container">
            <span class="menu-btn" onclick="menu()"><i class='bx bx-menu'></i></span>
            <img src="{{ asset('landing/images/logo.png') }}" style="height: 100px;width: 100px" />
        </div>
        <nav>
            <ul>
                <li><a href="#home">HOME</a></li>
                <li><a href="#about">ABOUT</a></li>
                <li><a href="#features">FEATURES</a></li>
                <li><a href="#products">PRODUCTS</a></li>
                <li><a href="#service">SERVICES</a></li>
                <li><a href="#testimonial">TESTIMONIALS</a></li>
                <li><a href="#contact">CONTACT US</a></li>
            </ul>
        </nav>
        <div class="side-menu close" id="side-menu">
            <ul>
                <li><a href="#home">HOME</a></li>
                <li><a href="#about">ABOUT</a></li>
                <li><a href="#features">FEATURES</a></li>
                <li><a href="#products">PRODUCTS</a></li>
                <li><a href="#service">SERVICES</a></li>
                <li><a href="#testimonial">TESTIMONIALS</a></li>
                <li><a href="#contact">CONTACT US</a></li>
            </ul>
        </div>
        <span class="call-btn"><i class='bx bxs-phone-call'></i></span>
    </header>
    <main id="home">
        <div class="my-slider">
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide"><img src="{{ asset('landing/images/bg.jpg') }}" class="bg-img" />

                        <div class="slide-info">
                            <span>Selamat Datang di Website Resmi BONEVA </span>
                            <h1>Air Minum Lokal</h1>
                            <h2>Dari Gorontalo </h2>
                            <p>Boneva Telah berdiri sejak 2014, dan menjadi salah satu pilihan Air minum berkualitas di
                                Gorontalo.</p>
                            <button>Pelajari Selengkapnya</button>

                        </div>
                    </div>
                    <div class="swiper-slide"><img src="{{ asset('landing/images/bg.jpg') }}" class="bg-img" />
                        <div class="slide-info">
                            <span>Selamat Datang di Website Resmi BONEVA </span>
                            <h1>Air Minum Lokal</h1>
                            <h2>Dari Gorontalo </h2>
                            <p>Boneva Telah berdiri sejak 2014, dan menjadi salah satu pilihan Air minum berkualitas di
                                Gorontalo.</p>
                            <button>Pelajari Selengkapnya</button>

                        </div>
                    </div>
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </div>
        <div class="sectionWave">
            <svg x="0px" y="0px" viewBox="0 0 1920 45" width="1920" height="45px" preserveAspectRatio="none">
                <style type="text/css"></style>
                <path
                    d="M1920,0c-82.8,0-108.8,44.4-192,44.4c-78.8,0-116.5-43.7-192-43.7c-77.1,0-115.9,44.4-192,44.4c-78.2,0-114.6-44.4-192-44.4c-78.4,0-115.3,44.4-192,44.4C883.1,45,841,0.6,768,0.6C691,0.6,652.8,45,576,45C502.4,45,461.9,0.6,385,0.6C306.5,0.6,267.9,45,191,45C115.1,45,78,0.6,0,0.6V45h1920V0z">
                </path>
            </svg>
        </div>
    </main>
    <section class="description" id="about">
        <div class="flex-conatiner">
            <div class="col-7">
                <img src="{{ asset('landing/images/index-01') }}.png" />
            </div>
            <div class="col-5">
                <h3>
                    Water Purified by Nature and Delivered with Love
                </h3>
                <p>
                    Our pristine water flows from the Penobscot Ridge Mountains. The bountiful “stream” is the
                    wellspring that constantly provides fresh, clean water to our well located just a few steps away
                    from our plant.
                </p>
                <button>Pelajari Selengkapnya</button>
            </div>
        </div>
    </section>
    <section class="attributes" id="features">
        <div class="attribute">
            <i class='bx bxs-shield'></i>
            <div>
                <h4>Protection from Bacteria</h4>
                <p>Though spring water is naturally clean, we try our best to make sure that our water is bacteria-free
                    at all production stages.
                </p>
            </div>

        </div>
        <div class="attribute">
            <i class='bx bxs-leaf'></i>
            <div>
                <h4>No Contaminants
                </h4>
                <p>
                    We control the production process of our water to make sure you receive the best product from the
                    company, which you can trust.
            </div>

        </div>
        <div class="attribute">
            <i class='bx bxs-droplet'></i>
            <div>
                <h4>Automated Bottling Lines
                </h4>
                <p>
                    The process of bottling the spring water at our plant is fully automatized. However, we always
                    control it to ensure the high quality.
                </p>

            </div>
        </div>
    </section>
    <section class="landscape" style="background: url({{ asset('landing/images/background.jpg') }})">
        <div>
            <h3>
                From an Artesian Well to Home and Office
            </h3>
            <p>
                For more than 60 years, we have been supplying the American homes and offices with high-quality spring
                water from a pristine stream near our plant.
            </p>
            <button class="glass-btn">READ MORE</button>
        </div>
    </section>
    <section class="products" id="products">
        <h4>Our Products </h4>
        <div class="product-container">
            <div class="product">
                <div class="product-img">
                    <span class="big-bubble"></span>
                    <span class="small-bubble"></span>
                    <img src="{{ asset('landing/images/product-1') }}.png" />
                </div>
                <div class="product-info">
                    <h5>1 L Spring Water in Glass</h5>
                    <h6>$10</h6>
                    <span><i class='bx bx-info-circle'></i> FOR DAILY USE</span>
                    <p>Enjoy your favorite spring water in the most popular shape! This water is great to share and
                        drink at any weather and is a reasonable offer for any budget.
                    </p>
                </div>
            </div>
            <div class="product">
                <div class="product-img">
                    <span class="big-bubble"></span>
                    <span class="small-bubble"></span>

                    <img src="{{ asset('landing/images/product-1') }}.png" />
                </div>
                <div class="product-info">
                    <h5>1 L Spring Water in Glass</h5>
                    <h6>$10</h6>
                    <span><i class='bx bx-info-circle'></i> FOR DAILY USE</span>
                    <p>Enjoy your favorite spring water in the most popular shape! This water is great to share and
                        drink at any weather and is a reasonable offer for any budget.
                    </p>
                </div>
            </div>
        </div>
        <div class="product-container">
            <div class="product">
                <div class="product-img">
                    <span class="big-bubble"></span>
                    <span class="small-bubble"></span>
                    <img src="{{ asset('landing/images/product-1') }}.png" />
                </div>
                <div class="product-info">
                    <h5>1 L Spring Water in Glass</h5>
                    <h6>$10</h6>
                    <span><i class='bx bx-info-circle'></i> FOR DAILY USE</span>
                    <p>Enjoy your favorite spring water in the most popular shape! This water is great to share and
                        drink at any weather and is a reasonable offer for any budget.
                    </p>
                </div>
            </div>
            <div class="product">
                <div class="product-img">
                    <span class="big-bubble"></span>
                    <span class="small-bubble"></span>

                    <img src="{{ asset('landing/images/product-1') }}.png" />
                </div>
                <div class="product-info">
                    <h5>1 L Spring Water in Glass</h5>
                    <h6>$10</h6>
                    <span><i class='bx bx-info-circle'></i> FOR DAILY USE</span>
                    <p>Enjoy your favorite spring water in the most popular shape! This water is great to share and
                        drink at any weather and is a reasonable offer for any budget.
                    </p>
                </div>
            </div>
        </div>
        <button class="produtcs-btn">VIEW MORE</button>
    </section>
    <section class="customer-service" id="service">
        <h3>We Work to Offer the Best
            <br /> Customer Service
        </h3>
        <div class="services">
            <div class="service">
                <i class='bx bx-mobile-alt'></i>
                <div>
                    <h4>Protection from Bacteria</h4>
                    <p>Though spring water is naturally clean, we try our best to make sure that our water is
                        bacteria-free at all production stages.
                    </p>
                </div>

            </div>
            <div class="service">
                <i class='bx bx-package'></i>
                <div>
                    <h4>No Contaminants
                    </h4>
                    <p>
                        We control the production process of our water to make sure you receive the best product from
                        the company, which you can trust.
                </div>

            </div>
            <div class="service">
                <i class='bx bx-heart'></i>
                <div>
                    <h4>Automated Bottling Lines
                    </h4>
                    <p>
                        The process of bottling the spring water at our plant is fully automatized. However, we always
                        control it to ensure the high quality.
                    </p>

                </div>
            </div>
        </div>

    </section>
    <section class="testimonials" id="testimonial">
        <h3>Testimonials </h3>


        <div class="testimonial-container">
            <div class="swiper">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                    <!-- Slides -->
                    <div class="swiper-slide">
                        <div class="testimonial">
                            <i class='bx bxs-quote-left'></i>
                            <p>I am so grateful for this water delivery to our home! We’ve got our energy back after
                                just a short time and we feel vibrant again! I especially like sparkling water.
                            </p>
                            <div class="user">
                                <img src="{{ asset('landing/images/testimonials-person') }}-1.jpg" />
                                <div class="user-info">
                                    <span class="user-name">Harold Barnett</span>
                                    <span class="user-type">Regular Client</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testimonial">
                            <i class='bx bxs-quote-left'></i>
                            <p>I have looked far and wide in Los Angeles County for the purest water, and BONEVA is
                                without a doubt the cleanest, freshest, most vital water available and it is also
                                affordable.
                            </p>
                            <div class="user">
                                <img src="{{ asset('landing/images/testimonials-person') }}-2.jpg" />
                                <div class="user-info">
                                    <span class="user-name">Harold Barnett</span>
                                    <span class="user-type">Regular Client</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testimonial">
                            <i class='bx bxs-quote-left'></i>
                            <p>I have looked far and wide in Los Angeles County for the purest water, and BONEVA is
                                without a doubt the cleanest, freshest, most vital water available and it is also
                                affordable.
                            </p>
                            <div class="user">
                                <img src="{{ asset('landing/images/testimonials-person') }}-2.jpg" />
                                <div class="user-info">
                                    <span class="user-name">Harold Barnett</span>
                                    <span class="user-type">Regular Client</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- If we need pagination -->
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section>
    <section class="contact" id="contact">
        <div class="contact-from">
            <h3>Contact Us
            </h3>
            <div class="inputs">
                <div>
                    <label>First Name</label>
                    <input />
                </div>
                <div style="margin-left: 3rem;">
                    <label>Last Name</label>
                    <input />
                </div>
            </div>
            <div class="inputs">
                <div>
                    <label>First Name</label>
                    <input />
                </div>
                <div style="margin-left: 3rem;">
                    <label>Last Name</label>
                    <input />
                </div>
            </div>
            <div style="margin-top: 1rem;">
                <label>Your Message</label>
                <textarea></textarea>
            </div>
            <div>
                <button>SEND MESSAGE</button>
                <span>or use</span>
                <button class="outline-button">
                    <i class='bx bxl-messenger'></i>
                    MESSENGER</button>
            </div>

        </div>
        <img src="{{ asset('landing/images/contact.png') }}" />
    </section>
    <section class="footer">
        <div class="sectionWave footer-wave">
            <svg x="0px" y="0px" viewBox="0 0 1920 45" width="1920" height="45px" preserveAspectRatio="none">
                <style type="text/css"></style>
                <path
                    d="M1920,0c-82.8,0-108.8,44.4-192,44.4c-78.8,0-116.5-43.7-192-43.7c-77.1,0-115.9,44.4-192,44.4c-78.2,0-114.6-44.4-192-44.4c-78.4,0-115.3,44.4-192,44.4C883.1,45,841,0.6,768,0.6C691,0.6,652.8,45,576,45C502.4,45,461.9,0.6,385,0.6C306.5,0.6,267.9,45,191,45C115.1,45,78,0.6,0,0.6V45h1920V0z">
                </path>
            </svg>
        </div>
        <div class="footer-inner ">
            <div class="footer-column about">
                <h5>About Us</h5>
                <p>BONEVA is one of the leading spring water providers in the USA. We bottle and deliver bacteria-free
                    spring water throughout the country covering all water needs and tastes. We are proud to be the
                    nation’s #1 water provider!
                </p>
            </div>
            <div class="footer-column">
                <h5>Contact Information </h5>
                <div><i class='bx bxs-location-plus'></i> <span>2130 Fulton Street <br />
                        San Diego, CA 94117-1080 USA</span> </div>
                <div><i class='bx bxs-phone-call'></i><span>1-800-1234-678</span> </div>
                <div><i class='bx bxs-envelope'></i> <span>info@demolink.org</span> </div>
            </div>
            <div class="footer-column">
                <h5>Newsletter </h5>
                <p>Sign up to our newsletter and be the first to know about the latest news, special offers, events, and
                    discounts.
                </p>
                <div>
                    <input class="news-input" />
                    <a class="send-btn"><i class='bx bx-envelope'></i></a>
                </div>
            </div>
        </div>

    </section>

</body>
<script src="https://unpkg.com/scrollreveal"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
<script src="{{ asset('landing/js/script.js') }}"></script>
<script>
    ScrollReveal().reveal("body > section", {
        distance: '101%',
        duration: 1200,
        origin: 'top',
        delay: 500
    });
</script>

</html>
