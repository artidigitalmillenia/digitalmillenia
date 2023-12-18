<?php include('includes/header.php'); ?>

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


<?php include('includes/footer.php'); ?>
