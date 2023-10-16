<?php
session_start();


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clinic Website</title>
    <!-- icon -->
    <link rel="icon" href="images/logo.ico" type="image/icon type">
    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css"
        integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- normalize css -->
    <link rel="stylesheet" href="css/normalize.css">
    <!-- custom css -->
    <link rel="stylesheet" href="css/main.css">
</head>

<body>


    <!-- header -->
    <header class="header bg-blue">

        <?php
        include "sesssion.php";
        include "navigationlogin.php";
    ?>

        <div class="header-inner text-white text-center">
            <div class="container grid">
                <div class="header-inner-left">
                    <h1>your most trusted<br> <span>health partner</span></h1>
                    <p class="lead">the best match services for you</p>
                    <p class="text text-md">When you are young and healthy, it never
                    occurs to you that in a single second your whole life could change..!</p>
                    
                </div>
                <div class="header-inner-right">
                    <img src="images/header.png">
                </div>
            </div>
        </div>
    </header>
    <!-- end of header -->

    <main>
        <!-- about section -->
        <section id="about" class="about py">
            <div class="about-inner">
                <div class="container grid">
                    <div class="about-left text-center">
                        <div class="section-head">
                            <h2>About Us</h2>
                            <div class="border-line"></div>
                        </div>
                        <p class="text text-lg">We believe in providing quality health and medical care to you and your
                            family. We strive to provide the best, most comprehensive care to patients without
                            scrificing convienience or the overall patient experience.</p>
                        <a href=" " class="btn btn-white">Learn More</a>
                    </div>
                    <div class="about-right flex">
                        <div class="img">
                            <img src="images/about-img.png">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end of about section -->

        <!-- banner one -->
        <section id="banner-one" class="banner-one text-center">
            <div class="container text-white">
                <blockquote class="lead"><i class="fas fa-quote-left"></i> When you are young and healthy, it never
                    occurs to you that in a single second your whole life could change. <i
                        class="fas fa-quote-right"></i></blockquote>
                <small class="text text-sm">- Dr.Sanjay Gajera</small>
            </div>
        </section>
        <!-- end of banner one -->

        <!-- services section -->
        <section id="services" class="services py">
            <div class="container">
                <div class="section-head text-center">
                    <h2 class="lead">The Best Doctor gives the least medicines</h2>
                    <p class="text text-lg">A perfect way to show your clinical services</p>
                    <div class="line-art flex">
                        <div></div>
                        <img src="images/4-dots.png">
                        <div></div>
                    </div>
                </div>
                <div class="services-inner text-center grid">
                    <article class="service-item">
                        <div class="icon">
                            <img src="images/service-icon-1.png">
                        </div>
                        <h3>Cardio Monitoring</h3>
                        <p class="text text-sm">A cardioc event monitor is a device that you control to record the electrical activity of your heart(ECG). this device is about the size of a pager.</p>
                    </article>

                    <article class="service-item">
                        <div class="icon">
                            <img src="images/service-icon-2.png">
                        </div>
                        <h3>Medical Treatment</h3>
                        <p class="text text-sm">Medical treatment is the attempted remediation of health problem, usually following a medical diagnosis.As a rule, each therapy has indications and contraindications.</p>
                    </article>

                    <article class="service-item">
                        <div class="icon">
                            <img src="images/service-icon-3.png">
                        </div>
                        <h3>Emergency Help</h3>
                        <p class="text text-sm">Your get emergency help anytime if you need amd also get emergency medicine and emergency treatment at a time with our emergency physician!</p>
                    </article>

                    <article class="service-item">
                        <div class="icon">
                            <img src="images/service-icon-4.png">
                        </div>
                        <h3>First Aid</h3>
                        <p class="text text-sm">First Aid is First Choice of every person who injured that we provide that facilitate to the every person or a patient to get instant solution!</p>
                    </article>
                </div>
            </div>
        </section>
        <!-- end of services section -->

        <!-- banner two section -->
        <section id="banner-two" class="banner-two text-center">
            <div class="container grid">
                <div class="banner-two-left">
                    <img src="images/banner-2-img.png">
                </div>
                <div class="banner-two-right">
                    <p class="lead text-white">When you are young and healthy, it never occurs to you that in a single
                        second your whole life could change.</p>
                    <div class="btn-group">
                        <a href="#" class="btn btn-white">Learn More</a>
                        <a href="#" class="btn btn-light-blue">Sign In</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- end of banner two section -->

        <!-- doctors section -->
        <section id="doc-panel" class="doc-panel py">
            <div class="container">
                <div class="section-head">
                    <h2>Our Doctor Panel</h2>
                </div>

                <div class="doc-panel-inner grid" >
                    <div class="doc-panel-item">
                        <div class="img flex">
                            <img src="images/doc-1.png" alt="doctor image">
                            <div class="info text-center bg-blue text-white flex">
                                <p class="lead">Dr.Raj Patel</p>
                                <p class="text-lg">Homeopathy</p>
                            </div>
                        </div>
                    </div>

                    <div class="doc-panel-item">
                        <div class="img flex">
                            <img src="images/doc-2.png" alt="doctor image">
                            <div class="info text-center bg-blue text-white flex">
                                <p class="lead">Dr.Tusharpatel</p>
                                <p class="text-lg">Homeopathy</p>
                            </div>
                        </div>
                    </div>

                    <!-- <div class="doc-panel-item">
                        <div class="img flex">
                            <img src="images/doc-3.png" alt="doctor image">
                            <div class="info text-center bg-blue text-white flex">
                                <p class="lead">Dr.Radhi patel</p>
                                <p class="text-lg">Medicine</p>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
        </section>
        <!-- end of doctors section -->

        <!-- package services section -->
        <!-- <section id = "package-service" class = "package-service py text-center">
            <div class = "container">
                <div class = "package-service-head text-white">
                    <h2>Package Service</h2>
                    <p class = "text text-lg">Best service package for you</p>
                </div>
                <div class = "package-service-inner grid">
                    <div class = "package-service-item bg-white">
                        <div class = "icon flex">
                            <i class = "fas fa-phone fa-2x"></i>
                        </div>
                        <h3>Regular Case</h3>
                        <p class = "text text-sm">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Consequatur, asperiores. Expedita, reiciendis quos beatae at consequatur voluptatibus fuga iste adipisci.</p>
                        <a href = "#" class = "btn btn-blue">Read More</a>
                    </div>

                    <div class = "package-service-item bg-white">
                        <div class = "icon flex">
                            <i class = "fas fa-calendar-alt fa-2x"></i>
                        </div>
                        <h3>Serious Case</h3>
                        <p class = "text text-sm">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Consequatur, asperiores. Expedita, reiciendis quos beatae at consequatur voluptatibus fuga iste adipisci.</p>
                        <a href = "#" class = "btn btn-blue">Read More</a>
                    </div>
                    
                    <div class = "package-service-item bg-white">
                        <div class = "icon flex">
                            <i class = "fas fa-comments fa-2x"></i>
                        </div>
                        <h3>Emergency Case</h3>
                        <p class = "text text-sm">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Consequatur, asperiores. Expedita, reiciendis quos beatae at consequatur voluptatibus fuga iste adipisci.</p>
                        <a href = "#" class = "btn btn-blue">Read More</a>
                    </div>
                </div>
            </div>
        </section> -->
        <!-- end of package services section -->

        <!-- posts section -->
        <!-- <section id = "posts" class = "posts py">
            <div class = "container">
                <div class = "section-head">
                    <h2>Latest Post</h2>
                </div>
                <div class = "posts-inner grid">
                    <article class = "post-item bg-white">
                        <div class = "img">
                            <img src = "images/post-1.jpg">
                        </div>
                        <div class = "content">
                            <h4>Inspiring stories of person and family centered care during a global pandemic.</h4>
                            <p class = "text text-sm">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolor voluptas eius recusandae sunt obcaecati esse facere cumque. Aliquid, cupiditate debitis.</p>
                            <p class = "text text-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis quia ipsam, quis iure sed nulla.</p>
                            <div class = "info flex">
                                <small class = "text text-sm"><i class = "fas fa-clock"></i> October 27, 2021</small>
                                <small class = "text text-sm"><i class = "fas fa-comment"></i> 5 comments</small>
                            </div>
                        </div>
                    </article>

                    <article class = "post-item bg-white">
                        <div class = "img">
                            <img src = "images/post-2.jpg">
                        </div>
                        <div class = "content">
                            <h4>Inspiring stories of person and family centered care during a global pandemic.</h4>
                            <p class = "text text-sm">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolor voluptas eius recusandae sunt obcaecati esse facere cumque. Aliquid, cupiditate debitis.</p>
                            <p class = "text text-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis quia ipsam, quis iure sed nulla.</p>
                            <div class = "info flex">
                                <small class = "text text-sm"><i class = "fas fa-clock"></i> October 27, 2021</small>
                                <small class = "text text-sm"><i class = "fas fa-comment"></i> 5 comments</small>
                            </div>
                        </div>
                    </article>

                    <article class = "post-item bg-white">
                        <div class = "img">
                            <img src = "images/post-3.jpg">
                        </div>
                        <div class = "content">
                            <h4>Inspiring stories of person and family centered care during a global pandemic.</h4>
                            <p class = "text text-sm">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolor voluptas eius recusandae sunt obcaecati esse facere cumque. Aliquid, cupiditate debitis.</p>
                            <p class = "text text-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis quia ipsam, quis iure sed nulla.</p>
                            <div class = "info flex">
                                <small class = "text text-sm"><i class = "fas fa-clock"></i> October 27, 2021</small>
                                <small class = "text text-sm"><i class = "fas fa-comment"></i> 5 comments</small>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </section> -->
        <!-- end of posts section -->

        <!-- contact section -->
        <section id="contact" class="contact py1">
            <div class="container grid">
                <div class="contact-left">
                    <img src="images/post-2.jpg">
                </div>
                <div class="contact-right text-white text-center bg-blue">
                    <div class="contact-head">
                        <h3 class="lead">Contact Us</h3>
                    </div>
                    <form>
                        <div class="col-md-6">
                            <div class="form-element">
                                <input name="txtreg" type="text" placeholder="Enter Registration number"
                                    class="form-control input-md">
                            </div>
                        </div>
                        <!-- Text input-->
                        <div class="col-md-6">
                            <div class="form-element">

                                <input name="txtowner" type="text" placeholder="Enter Owner Name"
                                    class="form-control input-md">
                            </div>
                        </div>
                        <div class="form-element">
                            <input type="text" class="form-control" placeholder="Your name">
                        </div>
                        <div class="form-element">
                            <input type="email" class="form-control" placeholder="Your email">
                        </div>
                        <div class="form-element">
                            <textarea rows="5" placeholder="Your Message" class="form-control"></textarea>
                        </div>
                        <button type="submit" class="btn btn-white btn-submit">
                            <i class="fas fa-arrow-right"></i> Send Message
                        </button>
                    </form>
                </div>
            </div>
        </section>
        <!-- end of contact section -->
    </main>

    <!-- footer  -->
    <?php
    include "footer.php";
    ?>
    <!-- end of footer  -->


    <!-- custom js -->
    <script src="js/script.js"></script>
</body>

</html>