<!-- <div class="container-fluid head-3">

    <div class="container">

        <div class="row">

            <div class="col-md-12">
                <h1>Checkout</h1>
            </div>

        </div>

    </div>

</div> -->

<!-- <div id="block" class="inner-header"></div> -->


<div class="container wrapper checkout-container">

    <div class="row cart-head-cont">

        <div class="container" id="myForm"> 

            <div class="row">

                <div style="display: table; margin: auto;">

                <ul class="nav nav-tabs">
                            <li class="active" class="step step_complete"><a href="#step1" class="check-bc"
                                    data-toggle="tab">Cart</a>
                            </li>
                            <li><a href="#step2" data-toggle="tab">Checkout</a></li>
                            <li><a href="#step3" data-toggle="tab">Thank you</a></li>
                        </ul>

                    <!-- <span class="step step_complete"> <a href="#" class="check-bc">Cart</a> <span
                            class="step_line step_complete"> </span> <span class="step_line backline"> </span> </span>
                    <span class="step step_complete"> <a href="#" class="check-bc">Checkout</a> <span
                            class="step_line "> </span> <span class="step_line step_complete"> </span> </span>
                    <span class="step_thankyou check-bc step_complete">Thank you</span> -->
                </div>


            </div>

        </div>
    </div>

    <div class="row cart-body">

        <form class="form-horizontal" method="post" action="">

            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 col-md-push-6 col-sm-push-6">

                <div class="panel panel-info">

                    <div class="panel-heading bg-head-brown">

                        Review Order <div class="pull-right"><small><a class="afix-1" href="#">Edit</a></small>
                        </div>
                    </div>

                    <div class="panel-body">

                        <div class="form-group">

                        </div>

                        <div class="form-group">

                            <div class="col-sm-3 col-xs-3">

                                <img class="img-responsive room-img"
                                    src="<?= asset_url() ?>images/rooms/executive_suite_room_img_new_1.webp" />


                            </div>

                            <div class="col-sm-6 col-xs-6">

                                <div class="col-xs-12">Room</div>

                                <div class="col-xs-12"><small>No of Rooms:<span>1</span></small></div>

                            </div>

                            <div class="col-sm-3 col-xs-3 text-right">
                                <h6><span>Rs</span>21300</h6>

                            </div>

                        </div>

                        <div class="form-group">
                            <hr />

                        </div>

                        <div class="form-group">

                            <div class="col-sm-3 col-xs-3">

                                <img class="img-responsive room-img"
                                    src="<?= asset_url() ?>images/rooms/executive_suite_room_img_new_1.webp" />


                            </div>

                            <div class="col-sm-6 col-xs-6">
                                <div class="col-xs-12">Room</div>
                                <div class="col-xs-12"><small>No of Rooms:<span>2</span></small></div>

                            </div>

                            <div class="col-sm-3 col-xs-3 text-right">
                                <h6><span>Rs</span>50000</h6>
                            </div>


                        </div>

                        <div class="form-group">
                            <hr />

                        </div>

                        <div class="form-group">

                            <div class="col-xs-12">

                                <strong>Subtotal</strong>

                                <div class="pull-right"><span>Rs</span><span>20000</span></div>

                            </div>

                            <div class="col-xs-12">

                                <small>Tax</small>

                                <div class="pull-right"><span>-</span></div>

                            </div>

                        </div>

                        <div class="form-group">
                            <hr />

                        </div>

                        <div class="form-group">
                            <div class="col-xs-12">
                                <strong class="total-pay">Total Payment</strong>
                                <div class="pull-right"><span>Rs</span><span>1500000</span></div>
                            </div>

                        </div>
                    </div>
                </div>
                <!--REVIEW ORDER END-->
            </div>

            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 col-md-pull-6 col-sm-pull-6">

                <div class="">
                    <form  role="form">

                        <div class="tab-content">
                            <!-- Step 1 -->
                            <div class="tab-pane fade in active" id="step1">
                                <div class="panel panel-info">

                                    <div class="panel-heading">Address</div>

                                    <div class="panel-body cont-bg-grey">

                                        <div class="form-group">

                                            <div class="col-md-12">

                                                <h4>Reservation Details</h4>

                                            </div>

                                        </div>



                                        <div class="form-group">

                                            <div class="col-md-6 col-xs-12">

                                                <strong>Full Name:</strong>

                                                <input type="text" name="first_name" class="form-control" value=""
                                                    style="background-image: url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAABHklEQVQ4EaVTO26DQBD1ohQWaS2lg9JybZ+AK7hNwx2oIoVf4UPQ0Lj1FdKktevIpel8AKNUkDcWMxpgSaIEaTVv3sx7uztiTdu2s/98DywOw3Dued4Who/M2aIx5lZV1aEsy0+qiwHELyi+Ytl0PQ69SxAxkWIA4RMRTdNsKE59juMcuZd6xIAFeZ6fGCdJ8kY4y7KAuTRNGd7jyEBXsdOPE3a0QGPsniOnnYMO67LgSQN9T41F2QGrQRRFCwyzoIF2qyBuKKbcOgPXdVeY9rMWgNsjf9ccYesJhk3f5dYT1HX9gR0LLQR30TnjkUEcx2uIuS4RnI+aj6sJR0AM8AaumPaM/rRehyWhXqbFAA9kh3/8/NvHxAYGAsZ/il8IalkCLBfNVAAAAABJRU5ErkJggg==&quot;); background-repeat: no-repeat; background-attachment: scroll; background-size: 16px 18px; background-position: 98% 50%;">

                                            </div>

                                            <div class="span1"></div>

                                            <div class="col-md-6 col-xs-12">
                                                <div class="form-group">
                                                    <div class="col-md-12"><strong>Email Address:</strong></div>
                                                    <div class="col-md-12"><input type="text" name="email_address"
                                                            class="form-control" value=""></div>
                                                </div>

                                            </div>

                                        </div>

                                        <div class="form-group">
                                            <div class="col-md-12"><strong>City:</strong></div>
                                            <div class="col-md-12">
                                                <input type="text" name="city" class="form-control" value="">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="col-md-12"><strong>Address:</strong></div>
                                            <div class="col-md-12">
                                                <input type="text" name="address" class="form-control" value="">
                                            </div>
                                        </div>

                                        <div class="form-group">

                                            <div class="col-md-6 col-xs-12">
                                                <div class="form-group">
                                                    <div class="col-md-12"><strong>Phone Number:</strong></div>
                                                    <div class="col-md-12"><input type="tel" name="phone_number"
                                                            class="form-control" value=""></div>
                                                </div>

                                            </div>

                                            <div class="span1"></div>

                                            <div class="col-md-6 col-xs-12">

                                                <div class="form-group">
                                                    <div class="col-md-12"><strong>No.of Persons</strong></div>
                                                    <div class="col-md-12"><input type="number" name="no--of-person"
                                                            class="form-control" value=""></div>
                                                </div>

                                            </div>

                                        </div>

                                        <!-- <div class="form-group">
            <div class="col-md-12"><strong>State:</strong></div>
            <div class="col-md-12">
                <input type="text" name="state" class="form-control" value="" />
            </div>
        </div> -->
                                        <!-- <div class="form-group">
            <div class="col-md-12"><strong>Zip / Postal Code:</strong></div>
            <div class="col-md-12">
                <input type="text" name="zip_code" class="form-control" value="" />
            </div>
        </div> -->

                                        <div class="form-group">

                                            <div class="col-md-6 col-xs-12">

                                                <strong>No.of Rooms</strong>

                                                <input type="text" name="first_name" class="form-control" value="">

                                            </div>

                                            <div class="span1"></div>

                                            <div class="col-md-6 col-xs-12">

                                                <strong>Room Category</strong>
                                                <select id="room-categ" name="room-categ" class="form-control">
                                                    <option value="5">Standard Room</option>
                                                    <option value="6">Standard King Room</option>
                                                    <option value="7">Studio</option>
                                                    <option value="8">Deluxe Room</option>
                                                    <option value="8">EXC Suit Room</option>
                                                    <option value="8">Family Suite</option>
                                                    <option value="8">Pent House</option>


                                                </select>

                                            </div>

                                        </div>

                                        <div class="form-group">

                                            <div class="col-md-6 col-xs-12">

                                                <strong>Arrival Date</strong>

                                                <div class="datetime-picker-container">
                                                    <input type="text" id="ChkinDate" name="checkin_date"
                                                        class="datepicker flatpickr-input" placeholder="DD/MM/YYYY"
                                                        readonly="readonly">
                                                    <label for="ChkinDate" class="calendar-icon"><i
                                                            class="fa fa-calendar"></i></label>
                                                </div>
                                            </div>

                                            <div class="span1"></div>

                                            <div class="col-md-6 col-xs-12">

                                                <strong>Departure Date</strong>

                                                <div class="datetime-picker-container">
                                                    <input type="text" id="ChkoutDate" name="checkout_date"
                                                        class="datepicker flatpickr-input" placeholder="DD/MM/YYYY"
                                                        readonly="readonly">
                                                    <label for="ChkoutDate" class="calendar-icon"><i
                                                            class="fa fa-calendar"></i></label>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="form-group">
                                            <div class="col-md-12 col-sm-12 col-xs-12 text-end">
                                                <button type="button" class="btn btn-primary btn-submit-fix"
                                                    onclick="nextStep(1)">Proceed to Checkout</button>

                                            </div>
                                        </div>
                                    </div>
                                </div>



                            </div>

                            <!-- Step 2 -->
                            <div class="tab-pane fade" id="step2">
                                <div class="panel panel-info">

                                    <div class="panel-heading"><span><i class="glyphicon glyphicon-lock"></i></span>
                                        Your Payment
                                        Details

                                    </div>

                                    <div class="panel-body cont-bg-grey">

                                        <!-- <div class="form-group">

        <div class="col-md-12"><strong>Card Type:</strong></div>

        <div class="col-md-12">

            <select id="CreditCardType" name="CreditCardType" class="form-control">
                <option value="5">Visa</option>
                <option value="6">MasterCard</option>
                <option value="7">American Express</option>
                <option value="8">Discover</option>
            </select>
        </div>
    </div> -->

                                        <div class="form-group">
                                            <div class="col-md-12"><strong>Name on Card:</strong></div>
                                            <div class="col-md-12"><input type="text" placeholder="Card Holder Name"
                                                    class="form-control" name="car_number" value="">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="col-md-12"><strong>Card Number:</strong></div>
                                            <div class="col-md-12"><input type="text" placeholder="Card Number"
                                                    class="form-control" name="car_number" value="">
                                            </div>
                                        </div>

                                        <div class="form-group">

                                            <div class="col-md-6 col-xs-12">

                                                <strong>MM/YY</strong>

                                                <input type="text" placeholder="MM/YY" name="MM/YY" class="form-control"
                                                    value="">

                                            </div>

                                            <div class="span1"></div>

                                            <div class="col-md-6 col-xs-12">
                                                <div class="form-group">
                                                    <div class="col-md-12"><strong>CVV Number:</strong></div>
                                                    <div class="col-md-12"><input type="text" name="cvv_number"
                                                            class="form-control" value=""></div>
                                                </div>

                                            </div>

                                        </div>

                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <span>Pay secure using your credit card.</span>
                                            </div>

                                            <div class="col-md-12">
                                                <ul class="cards">
                                                    <li class="visa hand">Visa</li>
                                                    <li class="mastercard hand">MasterCard</li>
                                                    <li class="amex hand">Amex</li>
                                                </ul>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <button type="button" class="btn btn-primary btn-submit-fix"
                                                    onclick="nextStep(2)">Book
                                                    Now</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>



                            </div>

                            <!-- Step 3 -->
                            <div class="tab-pane fade" id="step3">
                                <h3>Thank you!</h3>
                                <p>Please contact us for more details and queries.</p>
                            </div>
                        </div>
                    </form>
                </div>

                <!--CREDIT CART PAYMENT END-->
            </div>

        </form>
    </div>
    <div class="row cart-footer">

    </div>
</div>









<script>
    function nextStep(currentStep) {
        $('#myForm a[href="#step' + (currentStep + 1) + '"]').tab('show');
    }
</script>