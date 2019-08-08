<link href="https://fonts.googleapis.com/css?family=Lato:400,700|Open+Sans&display=swap">

<?php
   /**

   * Template Name: Front Page
    *
    */
   get_header('without-header-footer-1'); 

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LoanGuys</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/css/local.css">
    <style>.home .site-content_wrap.container {
    margin: 0;
    padding: 0 15px;
    max-width: 100%;
}

.footer-cover {
    display: none;
}

body.home {
    padding: 0;
}
.home .site-content_wrap.container div#primary {
    padding: 0;
}</style>
</head>
<body>
    <!--video area-->
    <div class="modal" id="videoModal">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="video-area">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <iframe width="100%" height="auto" src="https://www.youtube.com/embed/L4wSRG8zkh4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
          </div>
        </div>
    </div>
    <!--video area end-->

    <!--wrapper-->
    <div class="wrapper-area">
    <!--header area-->
    <header class="custom-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 order-lg-1 col-3">
                    <div class="logo">
                        <a href="https://loanguys.com/">
                            <img src="<?php echo get_template_directory_uri();?>/assets/images/loanguys-icon-3.png" alt="" class="img-fluid">
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 order-lg-3 col-9">
                    <div class="contact-links">
                        <ul>
                            <li class="phone"><a href="tel:1(833)615-6267"><i class="fas fa-phone"></i></a></li>
                            <li class="read-more"><a href="https://loanguys.com/contact/">Apply Now</a></li>
                            <li class="login">
                                <a href="javascript:;"><i class="fas fa-user"></i><i class="fas fa-caret-down"></i> </a>
                                <div class="user-account">
                                    <ul>
                                        <li><a href="javascript:;">Login</a></li>
                                        <li><a href="javascript:;">Sign Up</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li id="toggle"><a href="#"><i class="fas fa-bars"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-7 order-lg-2">
                    <div class="menu-area">
                        <ul>
                            <li class="current-menu-item"><a href="https://loanguys.com/">Home</a></li>
                            <li><a href="https://loanguys.com/about-us/">About Us</a></li>
                            <li><a href="https://loanguys.com/cherry-services/hard-money-loans/">Hard Money Fix/Flip</a></li>
                            <li><a href="https://loanguys.com/elements/services/">Services</a></li>
                            <li><a href="https://loanguys.com/privacy-policy/">Privacy Policy</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div id="headerHeight"></div>
    <!--header area end-->
    <!--banner-area-->
    <div class="banner-area">
        <div class="banner-slider">
            <div class="slider-item">
                <div class="container">
                    <div class="banner-caption">
                        <p>Hard Money/Fix & Flip</p>
                        <h2>90% loan to value 90% construction and 100% rehab cost</h2>
                        <ul>
                            <li>- No Experience Required</li>
                            <li>- Rates starting from 6.99%</li>
                            <li>- 24 hour approvals</li>
                            <li>- Close within 5-7 days</li>
                        </ul>
                        <a href="https://loanguys.com/contact/">Apply Today</a>
                    </div>
                </div>
                <img src="<?php echo get_template_directory_uri();?>/assets/images/banner1.jpg" alt="" class="img-fluid">
            </div>
            <div class="slider-item">
                <div class="container">
                    <div class="banner-caption">
                        <p>Stated Income Loans</p>
                        <h2>No tax returns necessary</h2>
                        <ul>
                            <li>- 2 weeks or less closing time</li>
                            <li>- Credit as low as 650</li>
                            <li>- Rates as low as 4.99%</li>
                            <li>- 30 year fixed rates</li>
                        </ul>
                        <a href="https://loanguys.com/contact/">Apply Today</a>
                    </div>
                </div>
                <img src="<?php echo get_template_directory_uri();?>/assets/images/banner2.jpg" alt="" class="img-fluid">
            </div>
            <div class="slider-item">
                <div class="container">
                    <div class="banner-caption">
                        <p>Conventional Home Loan</p>
                        <h2>Get Your 30 year Fixed Today!</h2>
                        <ul>
                            <li>- Purchase/ Refinance</li>
                            <li>- Down payment as low as 3.5%</li>
                            <li>- Interest rate as low as 3.75%</li>
                            <li>- Loan amounts up to 3 million</li>
                        </ul>
                        <a href="https://loanguys.com/contact/">Apply Today</a>
                    </div>
                </div>
                <img src="<?php echo get_template_directory_uri();?>/assets/images/banner3.jpg" alt="" class="img-fluid">
            </div>
        </div> 
        <div class="banner-thumb">
            <img src="<?php echo get_template_directory_uri();?>/assets/images/banner1.jpg" alt="">
            <img src="<?php echo get_template_directory_uri();?>/assets/images/banner2.jpg" alt="">
            <img src="<?php echo get_template_directory_uri();?>/assets/images/banner3.jpg" alt="">
        </div>           
    </div>
    <!--banner-area end-->

    <!--about area-->
    <section class="about-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <div class="about-content wow fadeInLeft">
                        <span class="backtext">30 Years</span>
                        <h2>We are passionate about achieving better results for our clients.</h2>
                        <hr>
                        <h5>WHAT WE DO</h5>
                        <p>We constantly work on delivering the best loan services to our clients. Our officers will walk you through every step of the loan application and approval process – from answering questions, to closing your loan as quickly as possible.</p>
                        <h5>CLIENT RESULTS</h5>
                        <p>We have satisfied clients all over USA and one of the fastest closing rates offered by any mortgage company. In most cases, we can close your home loan in 14 to 24 days from receipt of a complete loan file.</p>
                        <h5>SOCIAL IMPACT</h5>
                        <p>By doing our work on the highest level we not just provide people with places to live, but also ensure families with their own home where they can raise their children and make their dreams come true.</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="video-poster wow fadeInRight">
                        <a href="javascript:;" data-toggle="modal" data-target="#videoModal"><i class="fas fa-play"></i></a>
                        <img src="<?php echo get_template_directory_uri();?>/assets/images/about.jpg" alt="" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--about area end-->

    <!--services area-->
    <section class="services-area">
        <div class="container">
            <div class="heading">
                <p>Find Loan Products We Offer</p>
                <h2>OUR SERVICES</h2>
            </div>
            <div class="services wow fadeInUp">
                <div class="services-item">
                    <a href="https://loanguys.com/cherry-services/hard-money-loans/">
                        <div class="services-text">
                            <h4>Hard Money / Fix and Flip</h4>
                            <p>Get the lowest Fix and Flip rates Available Today</p>
                        </div>
                        <img src="<?php echo get_template_directory_uri();?>/assets/images/service1.jpg" alt="" class="img-fluid">
                    </a>
                </div>
                <div class="services-item">
                    <a href="https://loanguys.com/cherry-services/stated-income-loans/">
                        <div class="services-text">
                            <h4>Stated Income Loans</h4>
                            <p>We service your loan with no income tax forms!</p>
                        </div>
                        <img src="<?php echo get_template_directory_uri();?>/assets/images/service2.jpg" alt="" class="img-fluid">
                    </a>
                </div>
                <div class="services-item">
                    <a href="https://loanguys.com/cherry-services/credit-service/">
                        <div class="services-text">
                            <h4>Conventional Loans</h4>
                            <p>Credit is a financial instrument used to help clients…</p>
                        </div>
                        <img src="<?php echo get_template_directory_uri();?>/assets/images/service3.jpg" alt="" class="img-fluid">
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!--services area end-->

    <!--recently funded deals-->
    <section class="recently-funded-deals">
        <div class="container">
            <div class="heading">
                <h2>RECENTLY FUNDED DEALS</h2>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 wow fadeIn" data-wow-delay="0.5s">
                    <div class="funded-deals-item">
                        <div class="funded-slide">
                            <img src="<?php echo get_template_directory_uri();?>/assets/images/1.jpg" alt="" class="img-fluid">
                            <img src="<?php echo get_template_directory_uri();?>/assets/images/2.jpg" alt="" class="img-fluid">
                            <img src="<?php echo get_template_directory_uri();?>/assets/images/3.jpg" alt="" class="img-fluid">
                            <img src="<?php echo get_template_directory_uri();?>/assets/images/4.jpg" alt="" class="img-fluid">
                        </div>
                        <p>1300 Dolphin Terrace, Corona Del Mar Ca 92625</p>
                        <ul>
                            <li><label>Loan Funded:</label> $5.37M</li>
                            <li><label>After Repair value:</label>  $8.25M</li>
                            <li><label>Profit:</label> $2.88M</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeIn" data-wow-delay="0.6s">
                    <div class="funded-deals-item">
                        <div class="funded-slide">
                            <img src="<?php echo get_template_directory_uri();?>/assets/images/5.webp" alt="" class="img-fluid">
                            <img src="<?php echo get_template_directory_uri();?>/assets/images/6.webp" alt="" class="img-fluid">
                            <img src="<?php echo get_template_directory_uri();?>/assets/images/7.webp" alt="" class="img-fluid">
                            <img src="<?php echo get_template_directory_uri();?>/assets/images/8.webp" alt="" class="img-fluid">
                            <img src="<?php echo get_template_directory_uri();?>/assets/images/9.webp" alt="" class="img-fluid">
                        </div>
                        <p>1235 2nd Street, Hermosa Beach CA 90254 </p>
                        <ul>
                            <li><label>Loan Funded: </label> $2.1M</li>
                            <li><label>After Repair value: </label> $3M</li>
                            <li><label>Profit: </label> 900k</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeIn" data-wow-delay="0.7s">
                    <div class="funded-deals-item">
                        <div class="funded-slide">
                            <img src="<?php echo get_template_directory_uri();?>/assets/images/10.jpg" alt="" class="img-fluid">
                            <img src="<?php echo get_template_directory_uri();?>/assets/images/11.jpg" alt="" class="img-fluid">
                            <img src="<?php echo get_template_directory_uri();?>/assets/images/12.jpg" alt="" class="img-fluid">
                            <img src="<?php echo get_template_directory_uri();?>/assets/images/13.jpg" alt="" class="img-fluid">
                            <img src="<?php echo get_template_directory_uri();?>/assets/images/14.jpg" alt="" class="img-fluid">
                        </div>
                        <p>6554 Ethel Avenue, North Hollywood CA 91606</p>
                        <ul>
                            <li><label>Loan Funded:</label> $1.3M</li>
                            <li><label>After Repair value:</label>  1.75M</li>
                            <li><label>Profit:</label> 450k</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--recently funded deals end-->

    
    <!--client testimonial area-->
    <section class="client-testimonial-area">
        <div class="container">
            <div class="heading">
                <p>Some of our Awesome Testimonials</p>
                <h2>WHAT PEOPLE SAY</h2>   
            </div>
            <div class="testimonial-slider wow fadeInUp">
                <div class="testimonial">
                    <div class="testimonial-head"></div>
                    <div class="testimonial-profile">
                        <img src="<?php echo get_template_directory_uri();?>/assets/images/tipacti.png" alt="" class="img-fluid">
                    </div>
                    <div class="testimonial-body">
                        <h4>Mr. tipacti</h4>
                        <hr>
                        <p id="text3" class="collapse">Loan Guys got me more leverage than I anticipated which allowed to complete another project at the same time. I highly recommend.</p>
                    </div>
                    <div class="testimonial-footer">
                        <div class="row">
                            <div class="col-8">
                                <a href="javscript:;" class="read-more" data-toggle="collapse" data-target="#text3">Read More</a>
                            </div>
                            <div class="col-4">
                                <a href="javascript:;" class="share"><i class="fas fa-share-alt"></i></a></li>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="testimonial">
                    <div class="testimonial-head"></div>
                    <div class="testimonial-profile">
                        <img src="<?php echo get_template_directory_uri();?>/assets/images/issac.jpg" alt="" class="img-fluid">
                    </div>
                    <div class="testimonial-body">
                        <h4>Issac Nouri</h4>
                        <hr>
                        <p id="text1" class="collapse">I am a mortgage broker and I trust Loan Guys with all of my clients.</p>
                    </div>
                    <div class="testimonial-footer">
                        <div class="row">
                            <div class="col-8">
                                <a href="javscript:;" class="read-more" data-toggle="collapse" data-target="#text1">Read More</a>
                            </div>
                            <div class="col-4">
                                <a href="javascript:;" class="share"><i class="fas fa-share-alt"></i></a></li>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="testimonial">
                    <div class="testimonial-head"></div>
                    <div class="testimonial-profile">
                        <img src="<?php echo get_template_directory_uri();?>/assets/images/Shawn.jpg" alt="" class="img-fluid">
                    </div>
                    <div class="testimonial-body">
                        <h4>Shawn rabban</h4>
                        <hr>
                        <p id="text2" class="collapse">Josh from Loan Guys closed my loan in 5 business days. I will definitely be using them again.</p>
                    </div>
                    <div class="testimonial-footer">
                        <div class="row">
                            <div class="col-8">
                                <a href="javscript:;" class="read-more" data-toggle="collapse" data-target="#text2">Read More</a>
                            </div>
                            <div class="col-4">
                                <a href="javascript:;" class="share"><i class="fas fa-share-alt"></i></a></li>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--client testimonial area end-->
    <!--call to action-->
    <section class="call-to-action-area">
        <div class="container wow zoomIn">
            <h3>Need a loan? Short on time?</h3>
            <p>Closings within 5-7 business days. Don't waste another day. Call a loan guy now!</p>
            <a href="https://loanguys.com/contact/">get in touch</a>
        </div>
    </section>
    <!--call to action end-->
    <!--counter and partner area-->
    <section class="counter-and-partner">
        <div class="counter-area">
            <div class="counter wow fadeInLeft" data-wow-delay="0.5s">
                <h5>1989</h5>
                <p>Year of Foundation</p>
            </div>
            <div class="counter wow fadeInLeft" data-wow-delay="0.6s">
                <h5>2000</h5>
                <p>Issued Loans</p>
            </div>
            <div class="counter wow fadeInLeft" data-wow-delay="0.7s">
                <h5>45+</h5>
                <p>Business Parthners</p>
            </div>
            <div class="counter wow fadeInLeft" data-wow-delay="0.8s">
                <h5>2005</h5>
                <p>Happy Clients</p>
            </div>
        </div>
        <div class="partner-area">
            <div class="partner-slider">
                <div class="partner-img wow zoomIn" data-wow-delay="0.8s">
                    <img src="<?php echo get_template_directory_uri();?>/assets/images/AAPL-Full-logo_-color_web-min.jpg" alt="" class="img-fluid">
                </div>
                <div class="partner-img wow zoomIn" data-wow-delay="0.9s">
                    <img src="<?php echo get_template_directory_uri();?>/assets/images/entrepreneur.jpg" alt="" class="img-fluid">
                </div>
                <div class="partner-img wow zoomIn" data-wow-delay="1s">
                    <img src="<?php echo get_template_directory_uri();?>/assets/images/forbes.jpg" alt="" class="img-fluid">
                </div>
                <div class="partner-img wow zoomIn" data-wow-delay="1.1s">
                    <img src="<?php echo get_template_directory_uri();?>/assets/images/namb.jpg" alt="" class="img-fluid">
                </div>
            </div>
        </div>
    </section>
    <!--counter and partner area end-->
    </div>
    <!--wrapper end-->

    <!--footer area-->
    <div class="footer-cover"></div>
    <footer class="custom-footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-sm-6">
                    <div class="footer-content">
                        <h4>Contact Info</h4>
                        <ul>
                            <li><i class="fas fa-map-marker-alt"></i> <span>21777 VENTURA BLVD. WOODLAND HILLS CA, 91367</span></li>
                            <li><i class="fas fa-phone"></i> <span><a href="tel:1(833)615-6267">1 (833) 615-6267</a></span></li>
                            <li><i class="fas fa-envelope"></i> <span><a href="mailto:support@loanguys.com">Support@loanguys.com</a></span></li>
                        </ul>
                    </div>
                    <div class="footer-content">
                        <h4>Follow Us</h4>
                        <ul class="social-media">
                            <li><a href="https://www.linkedin.com/company/18088573/" target="_blank"> <i class="fab fa-linkedin-in"></i> </a></li>
                            <li><a href="https://twitter.com/zemezlab" target="_blank"> <i class="fab fa-twitter"></i> </a></li>
                            <li><a href="https://www.facebook.com/Loanguys3/" target="_blank"> <i class="fab fa-facebook-f"></i> </a></li>
                            <li><a href="https://www.instagram.com/zemezlab" target="_blank"> <i class="fab fa-instagram"></i> </a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="footer-content">
                        <h4>Quick Links</h4>
                        <ul>
                            <li><a href="https://loanguys.com/">Home</a></li>
                            <li><a href="https://loanguys.com/about-us/">About Us</a></li>
                            <li><a href="https://loanguys.com/cherry-services/hard-money-loans/">Hard Money Fix/Flip</a></li>
                            <li><a href="https://loanguys.com/elements/services/">Services</a></li>
                            <li><a href="https://loanguys.com/privacy-policy/">Privacy Policy</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="footer-content">
                        <h4>Stay Always In Touch</h4>
                        <p>Subscribe to our newsletter and get exclusive deals you wont find anywhere else straight to your inbox!</p>
                        <div class="subscribe-form">
                            <!--<input type="text" placeholder="Your E-mail Address">
                            <input type="submit" value="Subscribe">-->
                            <?php es_subbox($desc = "", $group = ""); ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copy-rights">
                <p>© 2019 LoanGuys.com. All rights reserved. <a href="https://ogrelogic.com/" target="_blank">Ogrelogic</a></p>
            </div>
        </div>
    </footer>
    <!--footer area end-->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
    <script src="<?php echo get_template_directory_uri();?>/assets/js/local.js"></script>
</body>
</html>