<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Digital Millenia Tech solutions">

  <title>Home - Digital Millenia Tech solutions</title>

  <!-- Fav Icon -->
  <link rel="icon" type="image/x-icon" href="assets/imgs/logo/favicon.png">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com/">
  <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300;400;500;600;700&amp;display=swap" rel="stylesheet">

  <!-- All CSS files -->
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/all.min.css">
  <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">
  <link rel="stylesheet" href="assets/css/progressbar.css">
  <link rel="stylesheet" href="assets/css/meanmenu.min.css">
  <link rel="stylesheet" href="assets/css/master.css">
  <!-- Add these links in the head section of your HTML file -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">

  <link rel="stylesheet" href="style.css">
</head>


<body>
  <!-- Cursor Animation -->
  <div class="cursor1"></div>
  <div class="cursor2"></div>


  <!-- Preloader -->
  <div class="preloader">
    <div class="loading">
      <div class="bar bar1"></div>
      <div class="bar bar2"></div>
      <div class="bar bar3"></div>
      <div class="bar bar4"></div>
      <div class="bar bar5"></div>
      <div class="bar bar6"></div>
      <div class="bar bar7"></div>
      <div class="bar bar8"></div>
    </div>
  </div>

  <!-- Scroll Smoother -->
  <div class="has-smooth" id="has_smooth"></div>


  <!-- Go Top Button -->
  <button id="scroll_top" class="scroll-top"><i class="fa-solid fa-arrow-up"></i></button>


  <!-- Header area start -->
  <header class="header__area-7">
    <div class="header__inner-2">
      <div class="header__logo-2">
        <a href="index.php" class="logo-dark"><img src="assets/imgs/logo/logo-black.png" alt="Site Logo"></a>
        <a href="index.php" class="logo-light"><img src="assets/imgs/logo/logo-black.png" alt="Site Logo"></a>
      </div>
      <div class="header__nav-2">
        <ul class="main-menu-4 menu-anim">
            <li><a href="about.php">About</a></li>
            <li><a href="solution.php">Solutions</a></li>
            <li><a href="work.php">Work</a></li>
            <li><a href="team.php">Team</a></li>
            <li><a href="career.php">Career</a></li>
            <li><a href="contact.php">Contact</a></li>
        </ul>
        
      </div>
      <div class="header__nav-icon-7">
        <button class="menu-icon-2" id="open_offcanvas"><img src="assets/imgs/icon/menu-dark.png"
            alt="Menubar Icon"></button>
      </div>
    </div>
  </header>
  <!-- Header area end -->


  <!-- Offcanvas area start -->
  <div class="offcanvas__area">
    <div class="offcanvas__body">
      <div class="offcanvas__left">
        <div class="offcanvas__logo">
          <a href="index.php"><img src="assets/imgs/logo/logo-black.png" alt="Offcanvas Logo"></a>
        </div>
        <div class="offcanvas__social">
          <h3 class="social-title">Follow Us On</h3>
          <ul>
            <li><a href="#">Dribbble</a></li>
            <li><a href="#">Behance</a></li>
            <li><a href="#">Instagram</a></li>
            <li><a href="#">Facebook</a></li>
            <li><a href="#">Twitter</a></li>
            <li><a href="#">YouTube</a></li>
          </ul>
        </div>
        
      </div>
      <div class="offcanvas__mid">
        <div class="offcanvas__menu-wrapper">
          <nav class="offcanvas__menu">
            <ul class="menu-anim">
            <li><a href="about.php">About</a></li>
            <li><a href="solution.php">Solutions</a></li>
            <li><a href="work.php">Work</a></li>
            <li><a href="team.php">Team</a></li>
            <li><a href="career.php">Career</a></li>
            <li><a href="contact.php">Contact</a></li>
            </ul>
          </nav>
        </div>
      </div>
      <div class="offcanvas__right">
        <div class="offcanvas__search">
          
        </div>
        <div class="offcanvas__contact">
          <h3>Get in touch</h3>
          <ul>
            <li><a href="tel:02094980547">+(02) - 094 980 547</a></li>
            <li><a href="mailto:info@extradesign.com">info@extradesign.com</a></li>
            <li>230 Norman Street New York, QC (USA) H8R 1A1</li>
          </ul>
        </div>
        <img src="assets/imgs/shape/11.png" alt="shape" class="shape-1">
        <img src="assets/imgs/shape/12.png" alt="shape" class="shape-2">
      </div>
      <div class="offcanvas__close">
        <button type="button" id="close_offcanvas"><i class="fa-solid fa-xmark"></i></button>
      </div>
    </div>
  </div>
  <!-- Offcanvas area end -->




  <div id="smooth-wrapper">
    <div id="smooth-content">
      <main>

        <!-- cart wrapper  -->
        <div class="woocomerce__cart checkout-page">
          <div class="woocomerce__cart-wrapper">
            <div class="woocomerce__cart-left checkout">
              <span class="woocomerce__cart-checktitle">Payment</span>
              <p class="woocomerce__cart-checkdis">* All transactions are secure and encrypted.</p>
              <div class="woocomerce__cart-paymentmenu">
                <div class="accordion" id="accordionExample">
                  <div class="accordion-item">
                    <div class="accordion-header" id="headingOne">
                      <label for="visa">
                        <div class="accordion-button" role="contentinfo" data-bs-toggle="collapse"
                          data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                          <div class="woocomerce__cart-payheader">
                            <div class="woocomerce__cart-payleft">
                              <input type="radio" name="paypal" id="visa" checked>
                              <p>Credit Card</p>
                            </div>
                            <div class="woocomerce__cart-checkright">
                              <ul class="woocomerce__cart-cardlist">
                                <li><img src="assets/imgs/woocomerce/pay-1.png" alt="pay-1"></li>
                                <li><img src="assets/imgs/woocomerce/pay-2.png" alt="pay-1"></li>
                                <li><img src="assets/imgs/woocomerce/pay-3.png" alt="pay-1"></li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </label>
                    </div>
                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                      data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        <div class="woocomerce__checkout-field">
                          <label>Card Number*</label>
                          <input type="text" name="checkout" placeholder="XXXX    XXXX    XXXX    XXXX    XXXX">
                        </div>
                        <div class="woocomerce__checkout-fieldwrapper">
                          <div class="woocomerce__checkout-field">
                            <label>Expire Date*</label>
                            <input type="text" name="Expire" placeholder="mm/dd/yyyy">
                          </div>
                          <div class="woocomerce__checkout-field cvvfield">
                            <label>CVV*</label>
                            <input type="text" name="checkout" placeholder="cvv">
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="accordion-item">
                    <div class="accordion-header" id="headingTwo">
                      <label for="paypal">
                        <div class="accordion-button collapsed" role="contentinfo" data-bs-toggle="collapse"
                          data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                          <div class="woocomerce__cart-payheader">
                            <div class="woocomerce__cart-payleft">
                              <input type="radio" name="paypal" id="paypal">
                              <p>PayPal</p>
                            </div>
                            <div class="woocomerce__cart-checkright">
                              <ul class="woocomerce__cart-cardlist">
                                <li><img src="assets/imgs/woocomerce/paypal.png" alt="pay-1"></li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </label>
                    </div>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                      data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        <div class="woocomerce__checkout-field">
                          <label>Card Number*</label>
                          <input type="text" name="checkout" placeholder="XXXX    XXXX    XXXX    XXXX    XXXX">
                        </div>
                        <div class="woocomerce__checkout-fieldwrapper">
                          <div class="woocomerce__checkout-field">
                            <label>Expire Date*</label>
                            <input type="text" name="Expire" placeholder="mm/dd/yyyy">
                          </div>
                          <div class="woocomerce__checkout-field cvvfield">
                            <label>CVV*</label>
                            <input type="text" name="checkout" placeholder="cvv">
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="accordion-item">
                    <div class="accordion-header" id="headingThree">
                      <label for="bank">
                        <div class="accordion-button collapsed" role="contentinfo" data-bs-toggle="collapse"
                          data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                          <div class="woocomerce__cart-payheader">
                            <div class="woocomerce__cart-payleft">
                              <input type="radio" name="paypal" id="bank">
                              <p>Bank Transfer</p>
                            </div>
                            <div class="woocomerce__cart-checkright">
                              <ul class="woocomerce__cart-cardlist">
                                <li><img src="assets/imgs/woocomerce/bank.png" alt="pay-1"></li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </label>
                    </div>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                      data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        <div class="woocomerce__checkout-field">
                          <label>Card Number*</label>
                          <input type="text" name="checkout" placeholder="XXXX    XXXX    XXXX    XXXX    XXXX">
                        </div>
                        <div class="woocomerce__checkout-fieldwrapper">
                          <div class="woocomerce__checkout-field">
                            <label>Expire Date*</label>
                            <input type="text" name="Expire" placeholder="mm/dd/yyyy">
                          </div>
                          <div class="woocomerce__checkout-field cvvfield">
                            <label>CVV*</label>
                            <input type="text" name="checkout" placeholder="cvv">
                          </div>
                        </div>
                      </div>
                    </div>

                  </div>

                  <div class="accordion-item">
                    <div class="accordion-header" id="headingFour">
                      <label for="cash">
                        <div class="accordion-button collapsed" role="contentinfo" data-bs-toggle="collapse"
                          data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                          <div class="woocomerce__cart-payheader">
                            <div class="woocomerce__cart-payleft">
                              <input type="radio" name="paypal" id="cash">
                              <p>Cash</p>
                            </div>
                            <div class="woocomerce__cart-checkright">
                              <ul class="woocomerce__cart-cardlist">
                                <li><img src="assets/imgs/woocomerce/cash.png" alt="pay-1"></li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </label>
                    </div>
                    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                      data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        <p class="cash-text">you can pay cash on delivery.</p>
                      </div>
                    </div>

                  </div>
                </div>
                <div class="woocomerce__checkout-btnwrapper">
                  <button class="woocomerce__checkout-submitbtn" type="submit">Place Order</button>
                </div>
              </div>
            </div>
            <div class="woocomerce__cart-right checkout">
              <span class="woocomerce__checkout-rtitle">Shipping Address</span>
              <div class="woocomerce__checkout-rform">
                <div class="woocomerce__checkout-frfieldwrapper">
                  <div class="woocomerce__checkout-rformfield">
                    <label for="email">Email*</label>
                    <input type="email" id="email" placeholder="Your email">
                  </div>
                  <div class="woocomerce__checkout-fieldright">
                    <p>Already have an account? <br>
                      <a href="#">Log in</a>
                    </p>
                  </div>
                </div>
                <div class="woocomerce__checkout-frfieldwrapperc">
                  <div class="woocomerce__checkout-rformfield">
                    <label for="country">Country / Region*</label>
                    <input type="text" id="country" placeholder="Country">
                  </div>
                </div>
                <div class="woocomerce__checkout-frfieldwrapper2">
                  <div class="woocomerce__checkout-rformfield">
                    <label for="fname">First Name*</label>
                    <input type="text" id="fname" placeholder="First Name">
                  </div>
                  <div class="woocomerce__checkout-rformfield">
                    <label for="lname">Last Name*</label>
                    <input type="text" id="lname" placeholder="Last Name">
                  </div>
                </div>
                <div class="woocomerce__checkout-frfieldwrapper2">
                  <div class="woocomerce__checkout-rformfield">
                    <label for="address">Street Address*</label>
                    <input type="text" id="address" placeholder="Address">
                  </div>
                  <div class="woocomerce__checkout-rformfield">
                    <label for="address2">Address 2*</label>
                    <input type="text" id="address2" placeholder="Address">
                  </div>
                </div>
                <div class="woocomerce__checkout-frfieldwrapper3">
                  <div class="woocomerce__checkout-rformfield">
                    <label for="city">City/ Town*</label>
                    <input type="text" id="city" placeholder="City">
                  </div>
                  <div class="woocomerce__checkout-rformfield">
                    <label for="area">Area*</label>
                    <input type="text" id="area" placeholder="Area*">
                  </div>
                  <div class="woocomerce__checkout-rformfield">
                    <label for="pcode">Postal Code*</label>
                    <input type="text" id="pcode" placeholder="Postal Code*">
                  </div>
                </div>
                <div class="woocomerce__checkout-frfieldwrapper2">
                  <div class="woocomerce__checkout-rformfield">
                    <label for="phone">Phone*</label>
                    <input type="text" id="phone" placeholder="Phone">
                  </div>
                  <div class="woocomerce__checkout-rformfield">
                    <label for="company">Company</label>
                    <input type="text" id="company" placeholder="Company">
                  </div>
                </div>
                <div class="woocomerce__checkout-frfieldwrapperc">
                  <div class="woocomerce__checkout-checker">
                    <input type="checkbox" id="agree">
                    <label for="agree">Ship to a different address?</label>
                  </div>
                </div>
                <div class="woocomerce__checkout-frfieldwrapperc">
                  <div class="woocomerce__checkout-msg">
                    <label for="msg">Order Notes (Optional)</label>
                    <textarea id="msg" placeholder="Write your order note....."></textarea>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /cart wrapper  -->


      </main>



      <!-- Footer area start -->
      <footer class="footer__area-2 pt-130">
        <div class="container">
         

          <div class="footer__middle-2">
            <div class="row">
              <div class="col-md-12">
                <div class="footer__location-2">
                  <div class="location">
                    <h3>London</h3>
                    <p>Baltia Squar, Mark Street, <br>
                      London</p>
                  </div>
                  <div class="location">
                    <h3>New York</h3>
                    <p>Nenuya Centre, Elia Street <br>
                      New York, USA</p>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="footer__btm-2">
            <div class="row">
              <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-5">
                <div class="footer__copyright-2">
                  <p>© 2022 - 2025 | Alrights reserved by <a href="https://digitalmillenia.com/" target="_blank">Digital Millenia</a>
                  </p>
                </div>
              </div>
              <div class="col-xxl-8 col-xl-8 col-lg-8 col-md-7">
                <div class="footer__nav">
                  <ul class="footer-menu menu-anim">
                    <li><a href="about.php">about us</a></li>
                    <li><a href="blog.php">Blog</a></li>
                    <li><a href="career.php">Career</a></li>
                    <li><a href="payment.php">Payment</a></li>
                    <li><a href="contact.php">contact</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </footer>
      <!-- Footer area end -->


    </div>
  </div>



  <!-- All JS files -->
  <script src="assets/js/jquery-3.6.0.min.js"></script>
  <script src="assets/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/swiper-bundle.min.js"></script>
  <script src="assets/js/counter.js"></script>
  <script src="assets/js/gsap.min.js"></script>
  <script src="assets/js/ScrollTrigger.min.js"></script>
  <script src="assets/js/ScrollToPlugin.min.js"></script>
  <script src="assets/js/ScrollSmoother.min.js"></script>
  <script src="assets/js/SplitText.min.js"></script>
  <script src="assets/js/chroma.min.js"></script>
  <script src="assets/js/mixitup.min.js"></script>
  <script src="assets/js/vanilla-tilt.js"></script>
  <script src="assets/js/jquery.meanmenu.min.js"></script>
  <script src="assets/js/main.js"></script>

</body>


</html>
