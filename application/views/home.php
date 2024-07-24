<style>
    /* Default to hide both videos */
    .desktop-video,
    .mobile-video {
        display: none;
    }

    @media only screen and (min-width: 768px) {
        .desktop-video {
            display: block;
        }
    }

    @media only screen and (max-width: 767px) {
        .mobile-video {
            display: block;
        }
    }

    /* new text anim */

    .typewrite:hover {
        color: white;
    }

    .typewrite:active {
        text-decoration: none;
        color: white !important;
    }

    .typewrite:focus {
        text-decoration: none;
        color: white !important;
    }

    /* end anim  */
</style>
<div class="container-fluid head-2">

    <div class="container">

        <div class="row">

            <div class="col-md-12">
                <h1>Welcome to Fiora Hotel</h1>
                <div class="row locat">
                    <a href="javascript:void(0)" style="text-decoration: none;" class="typewrite locat" data-period="2000" data-type='[ "Indulge in Mountain Majesty located at less than 1 Km from Mall Road, Murree"]'>
                        <span class="wrap"></span>
                    </a>
                </div>

                <div class="hd-btns"><a href="<?= base_url() ?>all-rooms">Know More</a></div>

                <div id="myDatePicker"></div>

            </div>


        </div>

    </div>

</div>

<div class="overlay"></div>

<div style="min-height: unset;" id="block" class="dim">
    <video id="video-desktop" class="video-main desktop-video" style="max-width: 100%; width:100%;" autoplay muted loop playsinline preload="none" poster="<?= asset_url() ?>images/video-poster.jpg" data-src="<?= asset_url() ?>video/orchestra.mp4">
        <!-- Provide a poster image as a fallback -->
        <source src="<?= asset_url() ?>video/orchestra.webm" type="video/webm">
    </video>
</div>

<div style="min-height: unset;" id="block-mobile" class="dim video-mobile">
    <video class="video-main mobile-video" id="video-mobile" style="max-width: 100%; width:100%;" autoplay muted loop playsinline preload="none" poster="<?= asset_url() ?>video/mobile-frame_new.jpg" data-src="<?= asset_url() ?>video/mobile_new.mp4">
        <!-- Provide a poster image as a fallback -->
        <source src="<?= asset_url() ?>video/mobile-frame_new.jpg" type="video/webm">
    </video>
</div>


<div class="container">

    <div class="row">

        <div class="col-md-12">

            <div class="mt-1 form-box">

                <div class="top-form-box" id="video-form">

                    <form class="head-form" method="get" action="https://hotel4u.pk/fioramurree/" target="_blank">

                        <div class="col-md-3 prow">
                            <label>Arrival Date*</label>
                            <div class="datetime-picker-container">
                                <input type="text" id="ChkinDate" name="checkin_date" class="datepicker" placeholder="DD/MM/YYYY">
                                <label for="ChkinDate" class="calendar-icon"><i class="fa fa-calendar"></i></label>
                            </div>
                        </div>
                        <div class="col-md-3 prow">
                            <label>Departure Date*</label>
                            <div class="datetime-picker-container">
                                <input type="text" id="ChkoutDate" name="checkout_date" class="datepicker" placeholder="DD/MM/YYYY">
                                <label for="ChkoutDate" class="calendar-icon"><i class="fa fa-calendar"></i></label>
                            </div>
                        </div>
                        <div class="col-md-3 prow">
                            <!-- <label for="">Adults</label> -->
                            <select name="adults" class="select-css" id="adultsDropdown">

                                <option value="adults" disabled>Adults </option>
                                <option selected value="1">01</option>
                                <option value="2">02</option>
                                <option value="3">03</option>
                                <option value="5">04</option>
                                <option value="5">05</option>

                            </select>

                        </div>

                        <div class="col-md-3 prow">
                            <!-- <label for="">Children</label> -->
                            <select class="select-css" id="childrenDropdown" name="children">
                                <option value="children" disabled>Children </option>
                                <option selected value="1">01</option>
                                <option value="2">02</option>
                                <option value="3">03</option>
                                <option value="4">04</option>
                                <option value="5">05</option>

                            </select>

                        </div>

                        <div class="col-md-3">
                            <!--<button onclick="javascript:location.href='https://hotel4u.pk/fioramurree/'" type="button" class="book-btn">Book This-->
                            <!--    Room</button>-->

                            <input class="book-btn" name="action" type="submit" class="btn btn-dark" value="Book Now">
                        </div>

                        <div class="clearfix"></div>

                    </form>

                </div>

            </div>

        </div>

    </div>

</div>

<!---->

<div class="container content-ptb">

    <div class="row">

        <div class="col-md-6"><img src="<?= asset_url() ?>images/abt-img.webp" class="img-responsive" /></div>

        <div class="col-md-6 p-1">

            <div class="sec-title"><span>Stay With Us, Feel Like Home</span>Best Hotel in murree</div>

            <p>Luxury Resort & Rooms, Staying true; we believe in a culture that includes people, one that celebrates
                the individuality of our guests and employees alike. We’re equally devoted to the greater good and have
                led the hospitality industry with us.</p>

            <div class="gen-btn"><a href="<?= base_url() ?>all-rooms">Bookings</a></div>

        </div>

    </div>

</div>

<!---->

<div class="container-fluid dark-bg">

    <div class="container-fluid">

        <div class="row">

            <div class="col-md-6 col-md-offset-3">

                <div class="sec-title-drk"><span>Choose From A Wide Range of Rooms</span>Accomodation</div>

            </div>

        </div>

        <div class="row">

            <div class="col-md-12">

                <section class="accomodation-box slider">


                    <div class="slide">

                        <div class="acc-box"><!--Accomodation Box-->

                            <div class="acc-img hover-zoom-anim">

                                <div class="ribbon-red">50% Off</div>

                                <div class="acc-head">Pent House</div>

                                <img src="<?= asset_url() ?>images/penthouse.webp" class="img-responsive" />

                            </div>

                            <div class="acc-desc">

                                <p>PentHouse are comfortable which are decorated in pastel designs. They are equipped
                                    with All facilities.</p>

                                <div class="gen-btn"><a href="<?= base_url() ?>all-rooms/pent-house">Details</a></div>

                            </div>

                        </div>

                        <!--Accomodation Box-->

                    </div>

                    <div class="slide">

                        <div class="acc-box">
                            <!--Accomodation Box-->

                            <div class="acc-img hover-zoom-anim">

                                <div class="ribbon-red">50% Off</div>

                                <div class="acc-head">Deluxe</div>

                                <img src="<?= asset_url() ?>images/deluxe_room.webp" class="img-responsive" />

                            </div>

                            <div class="acc-desc">

                                <p>A hotel Deluxe room is an accommodation intended for two people. Typically, it has
                                    one king bed or two twin...</p>

                                <div class="gen-btn"><a href="<?= base_url() ?>all-rooms/deluxe-room">Details</a></div>

                            </div>

                        </div><!--Accomodation Box-->

                    </div>

                    <div class="slide">

                        <div class="acc-box "><!--Accomodation Box-->

                            <div class="acc-img hover-zoom-anim">

                                <div class="ribbon-red">50% Off</div>

                                <div class="acc-head">Studio</div>

                                <img src="<?= asset_url() ?>images/studio_room.webp" class="img-responsive" />

                            </div>

                            <div class="acc-desc">

                                <p>Enjoy all the amenities and international card scan room key system for your security
                                    and ease.</p>

                                <div class="gen-btn"><a href="<?= base_url() ?>all-rooms/studio-room">Details</a></div>

                            </div>

                        </div><!--Accomodation Box-->

                    </div>

                    <div class="slide">

                        <div class="acc-box"><!--Accomodation Box-->

                            <div class="acc-img hover-zoom-anim">

                                <div class="ribbon-red">50% Off</div>

                                <div class="acc-head">Standard</div>

                                <img src="<?= asset_url() ?>images/standard_room.webp" class="img-responsive" />

                            </div>

                            <div class="acc-desc">

                                <p>Fiora provides Standard room services. Our Standard room is roomy and pleasant and
                                    has upgraded amenities.</p>

                                <div class="gen-btn"><a href="<?= base_url() ?>all-rooms/standard-room">Details</a>
                                </div>

                            </div>

                        </div><!--Accomodation Box-->

                    </div>


                </section>

            </div>

        </div>

    </div>

</div>


<!-- ----------------50% off cta-------------- -->

<div class="container-fluid counter-bg-2">

    <div class="container">

        <div class="row order-offer">

            <div class="col-md-4 col-sm-4">
                <img src="<?= asset_url() ?>images/50-off-cta.png" class="img-responsive button-jittery w-100">
            </div>

            <div class="col-md-8 col-sm-8  mobile-center">

                <div class="limited-right">
                    <h2 class="sec-title-drk head-m-bottom title-divider-left">Limited Time Offer!</h2>

                    <!-- <p class="text-white offer-text">Act quickly to seize our exclusive Limited Time Offer before it
                        disappears
                        – your chance to save is now!</p> -->

                    <p class="text-white">Reserve your room today and unlock exceptional discounts and added perks. Don't miss out; this
                        offer won't last long. Book now and experience luxury for less!"</p>
                    <div class="counter2">
                        <ul class="count-down">
                            <li><span class="hours_m"></span>
                                <p>Hour</p>
                            </li>
                            <li><span class="minutes_m"></span>
                                <p>Mins</p>
                            </li>
                            <li><span class="seconds_m"></span>
                                <p>Secs</p>
                            </li>
                        </ul>
                    </div>
                    <!-- <div class="book-btn btn-limited-offer"><a href="https://hotel4u.pk/fioramurree/">Book Now</a></div> -->
                    <button onclick="javascript:location.href='https://hotel4u.pk/fioramurree/'" type="button" class="book-btn btn-limited-offer">Book Now</button>

                </div>

            </div>


        </div>

    </div>

</div>


<!---->

<div class="container content-ptb sec-hotel-facilites" style="padding-bottom: 40px;">

    <div class="row">

        <div class="col-md-6 col-md-offset-3">

            <div class="sec-title-lt"><span>Feel Yourself At Home</span>Hotel Facilities</div>

        </div>

    </div>

    <div class="row">

        <div class="col-md-4">

            <div class="fac-box">

                <div class="fac-img">

                    <div class="fac-desc">

                        <div class="fac-title">Gym</div>

                        <p>Stay fit during your stay with our state-of-the-art gym facilities, equipped for all your
                            fitness needs</p>

                    </div>

                    <img src="<?= asset_url() ?>images/gallery/gym_img.webp" class="img-responsive" />

                </div>

            </div>

        </div>

        <div class="col-md-4">

            <div class="fac-box">

                <div class="fac-img">

                    <div class="fac-desc">

                        <div class="fac-title">Conference Room</div>

                        <p>Elevate your business meetings with our well-equipped meeting rooms.</p>

                    </div>

                    <img src="<?= asset_url() ?>images/fac-img-02.webp" class="img-responsive" />

                </div>

            </div>

        </div>

        <div class="col-md-4">

            <div class="fac-box">

                <div class="fac-img">

                    <div class="fac-desc">

                        <div class="fac-title">In House Italian Coffee Bar</div>

                        <p>Indulge in the rich flavors of Italy right at our hotel with our cozy in-house Italian coffee
                            bar.</p>

                    </div>

                    <img src="<?= asset_url() ?>images/fac-italian-bar.webp" class="img-responsive" style=" height: 247px; " />

                </div>

            </div>

        </div>

        <div class="col-md-4">

            <div class="fac-box">

                <div class="fac-img">

                    <div class="fac-desc">

                        <div class="fac-title">24/7 Electricity Backup</div>

                        <p>Uninterrupted Comfort: Our Promise of Round-the-Clock Power!</p>

                    </div>

                    <img src="<?= asset_url() ?>images/27_7_backup.webp" class="img-responsive" />

                </div>

            </div>

        </div>

        <div class="col-md-4">

            <div class="fac-box">

                <div class="fac-img">

                    <div class="fac-desc">

                        <div class="fac-title">Restaurant</div>

                        <p>Savor exquisite flavors at our restaurant for a memorable dining experience.</p>

                    </div>

                    <img src="<?= asset_url() ?>images/resturant_img.webp" class="img-responsive" style=" height: 247px; " />

                </div>

            </div>

        </div>

        <div class="col-md-4">

            <div class="fac-box">

                <div class="fac-img">

                    <div class="fac-desc">

                        <div class="fac-title">Free Wifi</div>

                        <p>Stay connected with our reliable and high-speed internet service during your visit</p>

                    </div>

                    <img src="<?= asset_url() ?>images/free_wifi.webp" class="img-responsive" />

                </div>

            </div>

        </div>

    </div>

</div>

<!---->

<!---->

<div class="container-fluid form-bg">

    <div class="container">

        <div class="row">

            <div class="col-md-12">

                <div class="mt-2">

                    <div class="top-form-box">

                        <form class="head-form">

                            <div class="col-md-3 prow">
                                <label>Arrival Date*</label>
                                <div class="datetime-picker-container">
                                    <input type="text" id="ChkinDate2" name="checkin_date" class="datepicker" placeholder="DD/MM/YYYY">
                                    <label for="ChkinDate2" class="calendar-icon"><i class="fa fa-calendar"></i></label>
                                </div>
                            </div>
                            <div class="col-md-3 prow">
                                <label>Departure Date*</label>
                                <div class="datetime-picker-container">
                                    <input type="text" id="ChkoutDate2" name="checkout_date" class="datepicker" placeholder="DD/MM/YYYY">
                                    <label for="ChkoutDate2" class="calendar-icon"><i class="fa fa-calendar"></i></label>
                                </div>
                            </div>

                            <div class="col-md-3 prow">

                                <select class="select-css" name="adults" id="adultsDropdown">
                                    <option value="adults" disabled>Adults</option>
                                    <option value="">01</option>
                                    <option value="">02</option>
                                    <option value="">03</option>
                                    <option value="">04</option>
                                    <option value="">05</option>

                                </select>

                            </div>

                            <div class="col-md-3 prow">

                                <select class="select-css" name="children" id="childrenDropdown">
                                    <option value="children" disabled>Children</option>
                                    <option value="">01</option>
                                    <option value="">02</option>
                                    <option value="">03</option>
                                    <option value="">04</option>
                                    <option value="">05</option>

                                </select>

                            </div>

                            <div class="col-md-3"><button onclick="javascript:location.href='https://hotel4u.pk/fioramurree/'" type="button" class="book-btn">Book This Room</button></div>

                            <div class="clearfix"></div>

                        </form>

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>

<!---->

<!---->

<div class="container content-ptb">

    <div class="row">

        <div class="col-md-6 p-1a">

            <div class="sec-title"><span>Experience Hospitality</span>Beyond the Ordinary!</div>

            <p>From the heart of elegance, Fiora has been guiding the hospitality industry with unmatched sophistication
                for over a decade and a half.</p>

        </div>

        <div class="col-md-6">

            <div class="hover-zoom-anim">
                <img src="<?= asset_url() ?>images/image00002.jpeg" class="img-responsive" />
            </div>

        </div>

    </div>

    <div class="row p-2">

        <div class="col-md-12" style="padding-left: 0px; padding-right: 0px;">

            <div class="fake-div"></div>

            <div id="counter">

                <div class="col-md-3">

                    <div class="hosp-stat-bg">

                        <div class="hosp-img"><img src="<?= asset_url() ?>images/hosp-img-01.webp" /></div>

                        <div class="stats">
                            <div class="counter-value" data-count="13">0</div>
                            <div class="plus"> Conferences</div>
                        </div>

                    </div>

                </div>

                <div class="col-md-3">

                    <div class="hosp-stat-bg">

                        <div class="hosp-img"><img src="<?= asset_url() ?>images/hosp-img-02.webp" /></div>

                        <div class="stats">
                            <div class="counter-value" data-count="122">0</div>
                            <div class="plus"> Five Star Ratings</div>
                        </div>

                    </div>

                </div>

                <div class="col-md-3">

                    <div class="hosp-stat-bg">

                        <div class="hosp-img"><img src="<?= asset_url() ?>images/hosp-img-03.webp" /></div>

                        <div class="stats">
                            <div class="counter-value" data-count="91">0</div>
                            <div class="plus"> International Guests</div>
                        </div>

                    </div>

                </div>

                <div class="col-md-3">

                    <div class="hosp-stat-bg">

                        <div class="hosp-img"><img src="<?= asset_url() ?>images/hosp-img-04.webp" /></div>

                        <div class="stats">
                            <div class="counter-value" data-count="3">0</div>
                            <div class="plus"> Awards </div>
                        </div>

                    </div>

                </div>

            </div>

            <div class="fake-div"></div>

        </div>

    </div>

</div>

<!---->

<!---->

<div class="container-fluid test-bg" id="reviews">

    <div class="container">

        <div class="row">

            <div class="col-md-12">

                <div class="sec-title-wt">Google Reviews Of Real Guest Experiences</div>

            </div>

        </div>

        <div class="row">

            <div class="col-md-12">

                <section class="testim-box slider">


                    <?php

                    if (isset($reviews) && $reviews != '') {
                        foreach ($reviews as $review) {
                    ?>
                            <div class="slide">

                                <div style="height:165px;" class="test-box">
                                    <div class="col-md-7 text-left">
                                        <div class="cl-img"><a href="<?= $review['author_url']; ?>" target="_blank"><img src="<?= $review['profile_photo_url']; ?>" class="img-circle" /></a></div>
                                        <div class="cl-name"><a href="<?= $review['author_url']; ?>" target="_blank">
                                                <span class="google-icon-container">
                                                    <span class="author-name">
                                                        <?= $review['author_name']; ?>
                                                    </span>
                                                    <span><a href="https://search.google.com/local/reviews?placeid=ChIJadsv8knX3zgRn3BkU7K8skg&q=Fiora+Hotel&hl=en&gl=PK" target="_blank"><img class="google-icon" src="<?= asset_url() ?>images/google-icon.png" class="img-circle" /></a></span>
                                                </span>
                                            </a>
                                        </div>

                                    </div>

                                    <div class="col-md-5">

                                        <ul class="rating">

                                            <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>

                                        </ul>

                                    </div>

                                    <div class="clearfix"></div>

                                    <div class="test-desc">

                                        <p>
                                            <?= truncateString($review['text'], 18, 'https://search.google.com/local/reviews?placeid=ChIJadsv8knX3zgRn3BkU7K8skg&q=Fiora+Hotel&hl=en&gl=PK'); ?>
                                        </p>

                                    </div>

                                </div>
                                <!--Testimonial Box-->

                            </div>

                        <?php }
                    } else { ?>
<div class="slide">

                                <div style="height:165px;" class="test-box">
                                    <div class="col-md-7 text-left">
                                        <div class="cl-img"><a href="https://www.google.com/maps/place/Fiora+Hotel/@33.9073656,73.4015612,15z/data=!4m11!3m10!1s0x38dfd749f22fdb69:0x48b2bcb25364709f!5m2!4m1!1i2!8m2!3d33.9073656!4d73.4015612!9m1!1b1!16s%2Fg%2F11v4g02hpk?entry=ttu" target="_blank"><img src="<?= asset_url() ?>images/ict-pk.png" class="img-circle" /></a></div>
                                        <div class="cl-name"><a href="https://www.google.com/maps/place/Fiora+Hotel/@33.9073656,73.4015612,15z/data=!4m11!3m10!1s0x38dfd749f22fdb69:0x48b2bcb25364709f!5m2!4m1!1i2!8m2!3d33.9073656!4d73.4015612!9m1!1b1!16s%2Fg%2F11v4g02hpk?entry=ttu" target="_blank">
                                                <span class="google-icon-container">
                                                    <span class="author-name">
                                                        ICD Pakistan
                                                    </span>
                                                    <span><a href="https://search.google.com/local/reviews?placeid=ChIJadsv8knX3zgRn3BkU7K8skg&q=Fiora+Hotel&hl=en&gl=PK" target="_blank"><img class="google-icon" src="<?= asset_url() ?>images/google-icon.png" class="img-circle" /></a></span>
                                                </span>
                                            </a>
                                        </div>

                                    </div>

                                    <div class="col-md-5">

                                        <ul class="rating">

                                            <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>

                                        </ul>

                                    </div>

                                    <div class="clearfix"></div>

                                    <div class="test-desc">

                                        <p>
                                            <?= truncateString('Very good experience. Stayed December 2023 with family for three nights. Rooms were good with clean sheets large TV and well maintained wash room with hot water available. Location is very near to Mall road with good mountain view if you have selected 4 floor or above level. They arrange car park in adjacent plot. Very courteous staff especially reception girls and Haris.', 18, 'https://search.google.com/local/reviews?placeid=ChIJadsv8knX3zgRn3BkU7K8skg&q=Fiora+Hotel&hl=en&gl=PK'); ?>
                                        </p>

                                    </div>

                                </div>
                                <!--Testimonial Box-->

                            </div>
                            
                            
                            <div class="slide">

                                <div style="height:165px;" class="test-box">
                                    <div class="col-md-7 text-left">
                                        <div class="cl-img"><a href="https://www.google.com/maps/place/Fiora+Hotel/@33.9073656,73.4015612,15z/data=!4m11!3m10!1s0x38dfd749f22fdb69:0x48b2bcb25364709f!5m2!4m1!1i2!8m2!3d33.9073656!4d73.4015612!9m1!1b1!16s%2Fg%2F11v4g02hpk?entry=ttu" target="_blank"><img src="<?= asset_url() ?>images/Maria.png" class="img-circle" /></a></div>
                                        <div class="cl-name"><a href="https://www.google.com/maps/place/Fiora+Hotel/@33.9073656,73.4015612,15z/data=!4m11!3m10!1s0x38dfd749f22fdb69:0x48b2bcb25364709f!5m2!4m1!1i2!8m2!3d33.9073656!4d73.4015612!9m1!1b1!16s%2Fg%2F11v4g02hpk?entry=ttu" target="_blank">
                                                <span class="google-icon-container">
                                                    <span class="author-name">
                                                        Maria Zahid
                                                    </span>
                                                    <span><a href="https://search.google.com/local/reviews?placeid=ChIJadsv8knX3zgRn3BkU7K8skg&q=Fiora+Hotel&hl=en&gl=PK" target="_blank"><img class="google-icon" src="<?= asset_url() ?>images/google-icon.png" class="img-circle" /></a></span>
                                                </span>
                                            </a>
                                        </div>

                                    </div>

                                    <div class="col-md-5">

                                        <ul class="rating">

                                            <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>

                                        </ul>

                                    </div>

                                    <div class="clearfix"></div>

                                    <div class="test-desc">

                                        <p>
                                            <?= truncateString('Fiora hotel is amazing beautiful with a very beautiful interior friendly terrace with a warm hospitality.A beautiful place to relax and make us feel at home.The rooms are very classy with all facilities to fulfill our needs The food served there is very delicious.And also not forgetting to mention about the management and serving of food  on time.
Atif mehmood restaurant supervisor
He is well mannered,calam person and perfect in his hospitality.
', 18, 'https://search.google.com/local/reviews?placeid=ChIJadsv8knX3zgRn3BkU7K8skg&q=Fiora+Hotel&hl=en&gl=PK'); ?>
                                        </p>

                                    </div>

                                </div>
                                <!--Testimonial Box-->

                            </div>
                            
                            
                            <div class="slide">

                                <div style="height:165px;" class="test-box">
                                    <div class="col-md-7 text-left">
                                        <div class="cl-img"><a href="https://www.google.com/maps/place/Fiora+Hotel/@33.9073656,73.4015612,15z/data=!4m11!3m10!1s0x38dfd749f22fdb69:0x48b2bcb25364709f!5m2!4m1!1i2!8m2!3d33.9073656!4d73.4015612!9m1!1b1!16s%2Fg%2F11v4g02hpk?entry=ttu" target="_blank"><img src="<?= asset_url() ?>images/talat.png" class="img-circle" /></a></div>
                                        <div class="cl-name"><a href="https://www.google.com/maps/place/Fiora+Hotel/@33.9073656,73.4015612,15z/data=!4m11!3m10!1s0x38dfd749f22fdb69:0x48b2bcb25364709f!5m2!4m1!1i2!8m2!3d33.9073656!4d73.4015612!9m1!1b1!16s%2Fg%2F11v4g02hpk?entry=ttu" target="_blank">
                                                <span class="google-icon-container">
                                                    <span class="author-name">
                                                        Talat khan
                                                    </span>
                                                    <span><a href="https://search.google.com/local/reviews?placeid=ChIJadsv8knX3zgRn3BkU7K8skg&q=Fiora+Hotel&hl=en&gl=PK" target="_blank"><img class="google-icon" src="<?= asset_url() ?>images/google-icon.png" class="img-circle" /></a></span>
                                                </span>
                                            </a>
                                        </div>

                                    </div>

                                    <div class="col-md-5">

                                        <ul class="rating">

                                            <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>

                                        </ul>

                                    </div>

                                    <div class="clearfix"></div>

                                    <div class="test-desc">

                                        <p>
                                            <?= truncateString('Fiora Hotel is an absolute gem! My recent stay was an exceptional experience, characterized by fantastic food and remarkable rooms. The culinary offerings at this hotel are nothing short of extraordinary. From the diverse breakfast options to the exquisite dinner choices, every meal was a delight to the taste buds. The chefs have an incredible talent for blending flavors and presenting dishes that are both visually stunning and delicious. The quality and variety of the food provided made every dining experience a memorable one.', 18, 'https://search.google.com/local/reviews?placeid=ChIJadsv8knX3zgRn3BkU7K8skg&q=Fiora+Hotel&hl=en&gl=PK'); ?>
                                        </p>

                                    </div>

                                </div>
                                <!--Testimonial Box-->

                            </div>
                            
                            
                            <div class="slide">

                                <div style="height:165px;" class="test-box">
                                    <div class="col-md-7 text-left">
                                        <div class="cl-img"><a href="https://www.google.com/maps/place/Fiora+Hotel/@33.9073656,73.4015612,15z/data=!4m11!3m10!1s0x38dfd749f22fdb69:0x48b2bcb25364709f!5m2!4m1!1i2!8m2!3d33.9073656!4d73.4015612!9m1!1b1!16s%2Fg%2F11v4g02hpk?entry=ttu" target="_blank"><img src="<?= asset_url() ?>images/paris.png" class="img-circle" /></a></div>
                                        <div class="cl-name"><a href="https://www.google.com/maps/place/Fiora+Hotel/@33.9073656,73.4015612,15z/data=!4m11!3m10!1s0x38dfd749f22fdb69:0x48b2bcb25364709f!5m2!4m1!1i2!8m2!3d33.9073656!4d73.4015612!9m1!1b1!16s%2Fg%2F11v4g02hpk?entry=ttu" target="_blank">
                                                <span class="google-icon-container">
                                                    <span class="author-name">
                                                        Paris Azeem
                                                    </span>
                                                    <span><a href="https://search.google.com/local/reviews?placeid=ChIJadsv8knX3zgRn3BkU7K8skg&q=Fiora+Hotel&hl=en&gl=PK" target="_blank"><img class="google-icon" src="<?= asset_url() ?>images/google-icon.png" class="img-circle" /></a></span>
                                                </span>
                                            </a>
                                        </div>

                                    </div>

                                    <div class="col-md-5">

                                        <ul class="rating">

                                            <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>

                                        </ul>

                                    </div>

                                    <div class="clearfix"></div>

                                    <div class="test-desc">

                                        <p>
                                            <?= truncateString('I have never stayed in a hotel which is not a part of brand but after watching so many nice reels about this hotel i thought to give it a try. I was amazed by staying at this hotel. Starting from reservation till the breakfast everything was up to the mark. Misbah was quite helpful with my reservation which i really appreciate. Then Inam and Sheryar during the breakfast were amazing. Rooms were amazing. But a few things need to be improved which i am going to mention. Food quality and its portion. Especially butter chicken is not really a butter chicken, breakfast items are way less than expectations. Also the elevator is too slow. Rest of the things are amazing. Highly recommended and expecting hotel to improve these few lapses.', 18, 'https://search.google.com/local/reviews?placeid=ChIJadsv8knX3zgRn3BkU7K8skg&q=Fiora+Hotel&hl=en&gl=PK'); ?>
                                        </p>

                                    </div>

                                </div>
                                <!--Testimonial Box-->

                            </div>
                            
                            <div class="slide">

                                <div style="height:165px;" class="test-box">
                                    <div class="col-md-7 text-left">
                                        <div class="cl-img"><a href="https://www.google.com/maps/place/Fiora+Hotel/@33.9073656,73.4015612,15z/data=!4m11!3m10!1s0x38dfd749f22fdb69:0x48b2bcb25364709f!5m2!4m1!1i2!8m2!3d33.9073656!4d73.4015612!9m1!1b1!16s%2Fg%2F11v4g02hpk?entry=ttu" target="_blank"><img src="<?= asset_url() ?>images/kamran.png" class="img-circle" /></a></div>
                                        <div class="cl-name"><a href="https://www.google.com/maps/place/Fiora+Hotel/@33.9073656,73.4015612,15z/data=!4m11!3m10!1s0x38dfd749f22fdb69:0x48b2bcb25364709f!5m2!4m1!1i2!8m2!3d33.9073656!4d73.4015612!9m1!1b1!16s%2Fg%2F11v4g02hpk?entry=ttu" target="_blank">
                                                <span class="google-icon-container">
                                                    <span class="author-name">
                                                        kamran zafar
                                                    </span>
                                                    <span><a href="https://search.google.com/local/reviews?placeid=ChIJadsv8knX3zgRn3BkU7K8skg&q=Fiora+Hotel&hl=en&gl=PK" target="_blank"><img class="google-icon" src="<?= asset_url() ?>images/google-icon.png" class="img-circle" /></a></span>
                                                </span>
                                            </a>
                                        </div>

                                    </div>

                                    <div class="col-md-5">

                                        <ul class="rating">

                                            <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>

                                        </ul>

                                    </div>

                                    <div class="clearfix"></div>

                                    <div class="test-desc">

                                        <p>
                                            <?= truncateString('A great place to stay, starting with the staff behavior, they were amazing, Caring, friendly, decent, well spoken and always available to assist. Rooms were really neat and clean, very comfortable bed, bathrooms were very clean too. When it comes to the food, it was delicious. Rooms are not that expensive too. Gave great value for our money. Highly recommended.', 18, 'https://search.google.com/local/reviews?placeid=ChIJadsv8knX3zgRn3BkU7K8skg&q=Fiora+Hotel&hl=en&gl=PK'); ?>
                                        </p>

                                    </div>

                                </div>
                                <!--Testimonial Box-->

                            </div>
                            
                            <div class="slide">

                                <div style="height:165px;" class="test-box">
                                    <div class="col-md-7 text-left">
                                        <div class="cl-img"><a href="https://www.google.com/maps/place/Fiora+Hotel/@33.9073656,73.4015612,15z/data=!4m11!3m10!1s0x38dfd749f22fdb69:0x48b2bcb25364709f!5m2!4m1!1i2!8m2!3d33.9073656!4d73.4015612!9m1!1b1!16s%2Fg%2F11v4g02hpk?entry=ttu" target="_blank"><img src="<?= asset_url() ?>images/dr arif.png" class="img-circle" /></a></div>
                                        <div class="cl-name"><a href="https://www.google.com/maps/place/Fiora+Hotel/@33.9073656,73.4015612,15z/data=!4m11!3m10!1s0x38dfd749f22fdb69:0x48b2bcb25364709f!5m2!4m1!1i2!8m2!3d33.9073656!4d73.4015612!9m1!1b1!16s%2Fg%2F11v4g02hpk?entry=ttu" target="_blank">
                                                <span class="google-icon-container">
                                                    <span class="author-name">
                                                        Dr Hammad Arif
                                                    </span>
                                                    <span><a href="https://search.google.com/local/reviews?placeid=ChIJadsv8knX3zgRn3BkU7K8skg&q=Fiora+Hotel&hl=en&gl=PK" target="_blank"><img class="google-icon" src="<?= asset_url() ?>images/google-icon.png" class="img-circle" /></a></span>
                                                </span>
                                            </a>
                                        </div>

                                    </div>

                                    <div class="col-md-5">

                                        <ul class="rating">

                                            <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>

                                        </ul>

                                    </div>

                                    <div class="clearfix"></div>

                                    <div class="test-desc">

                                        <p>
                                            <?= truncateString('It was a great saying here. The ambiance was really great. The staff was really and helping people. The open glass covered dining area was really something to look for as you can enjoy scenery and not get chilly at the same time.
They have all the amenities including gym and really breath taking Terrece.
', 18, 'https://search.google.com/local/reviews?placeid=ChIJadsv8knX3zgRn3BkU7K8skg&q=Fiora+Hotel&hl=en&gl=PK'); ?>
                                        </p>

                                    </div>

                                </div>
                                <!--Testimonial Box-->

                            </div>

                        <!--<div class="slide">-->

                        <!--    <div class="test-box"><!--Testimonial Box-->-->

                        <!--        <div class="col-md-7">-->

                        <!--            <div class="cl-img"><img src="<?= asset_url() ?>images/wr-01a.webp" class="img-circle" /></div>-->

                        <!--            <div class="cl-name">Ali Azaz</div>-->

                        <!--        </div>-->

                        <!--        <div class="col-md-5">-->

                        <!--            <ul class="rating">-->

                        <!--                <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>-->

                        <!--            </ul>-->

                        <!--        </div>-->

                        <!--        <div class="clearfix"></div>-->

                        <!--        <div class="test-desc">-->

                        <!--            <p>I had a fantastic stay at Fiora Hotel! The complimentary breakfast was a delightful-->
                        <!--                surprise – a wide array of options, from continental classics to local specialties.-->
                        <!--                The Italian coffee bar was my daily retreat, offering the perfect place to unwind-->
                        <!--                and savor a cappuccino.-->
                        <!--            </p>-->

                        <!--        </div>-->

                        <!--    </div><!--Testimonial Box-->-->

                        <!--</div>-->
                        <!--<div class="slide">-->

                        <!--    <div class="test-box"><!--Testimonial Box-->-->

                        <!--        <div class="col-md-7">-->

                        <!--            <div class="cl-img"><img src="<?= asset_url() ?>images/wr-01a.webp" class="img-circle" /></div>-->

                        <!--            <div class="cl-name">Shams Mujtaba</div>-->

                        <!--        </div>-->

                        <!--        <div class="col-md-5">-->

                        <!--            <ul class="rating">-->

                        <!--                <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>-->

                        <!--            </ul>-->

                        <!--        </div>-->

                        <!--        <div class="clearfix"></div>-->

                        <!--        <div class="test-desc">-->

                        <!--            <p>Fiora Hotel exceeded my expectations! The complimentary breakfast was a gastronomic-->
                        <!--                journey, and the Italian coffee bar was a delightful bonus. The terrace with its-->
                        <!--                panoramic view was the perfect backdrop for a serene evening. I couldn't have asked-->
                        <!--                for a better experience.</p>-->

                        <!--        </div>-->

                        <!--    </div><!--Testimonial Box-->-->

                        <!--</div>-->

                        <!--<div class="slide">-->

                        <!--    <div class="test-box"><!--Testimonial Box-->-->

                        <!--        <div class="col-md-7">-->

                        <!--            <div class="cl-img"><img src="<?= asset_url() ?>images/wr-01a.webp" class="img-circle" /></div>-->

                        <!--            <div class="cl-name">Usman Mehmood</div>-->

                        <!--        </div>-->

                        <!--        <div class="col-md-5">-->

                        <!--            <ul class="rating">-->

                        <!--                <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>-->

                        <!--            </ul>-->

                        <!--        </div>-->

                        <!--        <div class="clearfix"></div>-->

                        <!--        <div class="test-desc">-->

                        <!--            <p>Fiora Hotel offered a comfortable and enjoyable stay. The complimentary breakfast was-->
                        <!--                a nice touch, and the Italian coffee bar provided a relaxing atmosphere. The view-->
                        <!--                from the terrace was a definite highlight, especially in the evening.</p>-->

                        <!--        </div>-->

                        <!--    </div><!--Testimonial Box-->-->

                        <!--</div>-->
                    <?php } ?>

                </section>

            </div>

        </div>

    </div>

</div>

<!---->

<!---->

<div class="container content-ptb" style="padding-bottom: 30px">

    <div class="row">

        <div class="col-md-12">

            <div class="sec-title-lt"><span>Where Your Adventure Finds Its Soul</span>Explore Murree With Fiora </div>

            <p class=" text-center mobile-center">Enjoy Murree's Wonders The Peaks of Beauty Await!</p>

        </div>

    </div>

    <div class="row p-3">

        <div class="col-md-6">

            <div class="offer-img"><img src="<?= asset_url() ?>images/conference-room.webp" class="img-responsive" />
            </div>

            <div class="offer-desc">

                <div class="row">

                    <div class="col-md-6">

                        <div class="off-txt">Avail Conference Rooms Facility</div>

                    </div>

                    <div class="col-md-6">

                        <div class="gen-btn"><a href="<?= base_url() ?>contact">Know More</a></div>

                    </div>

                </div>

            </div>

        </div>

        <div class="col-md-6">

            <div class="offer-img"><img src="<?= asset_url() ?>images/gym.webp" class="img-responsive" /></div>

            <div class="offer-desc">

                <div class="row">

                    <div class="col-md-6">


                        <div class="off-txt">Get GYM Facility 24/7</div>


                    </div>

                    <div class="col-md-6">

                        <div class="gen-btn"><a href="<?= base_url() ?>contact">Know More</a></div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>

<!---->


<div class="container-fluid mb-4" id="pent-house-slider">
    <div id="CrossFade">
        <img src="<?= asset_url() ?>images/pent-house-slide-1.webp" alt="img" />
        <img src="<?= asset_url() ?>images/pent-house-slide-2.webp" alt="img" />
        <img src="<?= asset_url() ?>images/pent-house-slide-3.webp" alt="img" />
        <img src="<?= asset_url() ?>images/pent-house-slide-4.webp" alt="img" />
        <img src="<?= asset_url() ?>images/pent-house-slide-5.webp" alt="img" />
        <div class="intro">
            <h2 class="">Exclusive Penthouse</h2>
            <p>Experience a Stay at Your Personal Slice of Heaven Amidst the Clouds!</p>
        </div>
    </div>

</div>
<!---->

<div class="container cta-form-bg">

    <div class="container make-res">

        <div class="row">

            <div class="col-md-6 col-md-offset-3">

                <div class="mt-3 mx-no-padding">

                    <form class="head-form">

                        <div class="row">

                            <div class="col-md-12">

                                <div class="sec-title-wt res-font-size">Make Reservation</div>

                            </div>

                        </div>

                        <div class="form-fields">
                            <div class="col-md-5 row-p">
                                <label>Arrival Date*</label>
                                <div class="datetime-picker-container">
                                    <input type="text" id="ChkinDate3" name="checkin_date" class="datepicker" placeholder="DD/MM/YYYY">
                                    <label for="ChkinDate3" class="calendar-icon"><i class="fa fa-calendar"></i></label>
                                </div>
                            </div>
                            <div class="col-md-5 row-p">
                                <label>Departure Date*</label>
                                <div class="datetime-picker-container">
                                    <input type="text" id="ChkoutDate3" name="checkout_date" class="datepicker" placeholder="DD/MM/YYYY">
                                    <label for="ChkoutDate3" class="calendar-icon"><i class="fa fa-calendar"></i></label>
                                </div>
                            </div>


                            <div class="col-md-5 row-p">
                                <!-- <label for="">Adults</label> -->
                                <select class="select-css" name="adults" id="adultsDropdown">

                                    <option value="adults" disabled>Adults</option>
                                    <option value="">01</option>
                                    <option value="">02</option>
                                    <option value="">03</option>
                                    <option value="">04</option>
                                    <option value="">05</option>

                                </select>

                            </div>

                            <div class="col-md-5 row-p">
                                <!-- <label for="">Children</label> -->
                                <select class="select-css" name="children" id="childrenDropdown">
                                    <option value="children" disabled>Children</option>
                                    <option value="">01</option>
                                    <option value="">02</option>
                                    <option value="">03</option>
                                    <option value="">04</option>
                                    <option value="">05</option>

                                </select>

                            </div>
                        </div>
                        <div class="col-md-12 text-center"><button onclick="javascript:location.href='https://hotel4u.pk/fioramurree/'" type="button" class="book-btn btn-limited-offer">Book This Room</button></div>

                        <div class="clearfix"></div>

                    </form>

                </div>

            </div>

        </div>

    </div>

</div>

<!-- 
<div class="container">

    <div class="row">

        <div class="col-md-3">
        <img src="<?= asset_url() ?>images/hosp-img.webp" class="img-responsive" />
        </div>

        <div class="col-md-3">

        </div>

        <div class="col-md-3">

        </div>

    </div>

</div> -->

<!---->

<!---->



<!--pop up -->

<div id="pop-up" class="pop-up modal">
    <div class="pop-up-modal container">
        <div class="row">
            <div class="col-md-5 pl-0 pr-0 d-nonee d-md-block" style="padding-left: 0px !important;">
                <div class="pop-up-set">
                    <img src="<?= asset_url() ?>images/limited-offer.png" alt="image">
                </div>
            </div>
            <div class="col-md-7 pl-0">
                <div class="pop-up-set text-center" style="font-family: 'Marcellus', serif;">
                    <h1>LEAVING WITHOUT New Year<span class="off-big-text"> 50%</span> DISCOUNT?<span class="pop-close hide_discountmodal" data-dismiss="modal">×</span>
                    </h1>
                    <h3>You wouldn't want to miss our New Year Limited Time 50% <br> Discount Offer.</h3>
                    <a href="<?=base_url('all-rooms')?>" style="background-color:#d49136; border-color:#d49136;" class="pop-close-3 btn btn-primary black-btn2 mtt-3 mr-2 hide_discountmodal" data-dismiss="modal">YES, I NEED 50% OFF </a>
                    <br>
                    <!--<a class="pop-close-2 mt-1 d-inline-block hide_discountmodal" data-dismiss="modal">No thanks, I will pay the full price.</a>-->
                    <h4 class="mt-2">This Offer Expires in</h4>
                    <div class="counter2">
                        <ul class="count-down">
                            <!--<li><span id="days"></span>Days</li>-->
                            <li><span class="hours_m"></span>
                                <p>Hour</p>
                            </li>
                            <li><span class="minutes_m"></span>
                                <p>Mins</p>
                            </li>
                            <li><span class="seconds_m"></span>
                                <p>Secs</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--end pop up -->




<script>
    var flashSuccess = "<?php echo $this->session->flashdata('success'); ?>";

    if (flashSuccess) {
        // Flash Data "success" has a value, perform some action
        alert(flashSuccess); // Display a message, for example
    }
</script>



<script>
    document.addEventListener("DOMContentLoaded", function() {
        // Hide all gallery images initially
        const allGalleryImages = document.querySelectorAll(".gallery_product");
        allGalleryImages.forEach(function(image) {
            image.style.display = "none";
        });

        // Show only the "Restaurant" images initially
        const restaurantImages = document.querySelectorAll(".rooms_gallery");
        restaurantImages.forEach(function(image) {
            image.style.display = "block";
        });

        // Add click event listeners to tab buttons to toggle image visibility
        const tabButtons = document.querySelectorAll(".filter-button");
        tabButtons.forEach(function(button) {
            button.addEventListener("click", function() {
                const tab = button.getAttribute("data-filter");
                allGalleryImages.forEach(function(image) {
                    if (image.classList.contains(tab)) {
                        image.style.display = "block";
                    } else {
                        image.style.display = "none";
                    }
                });
            });
        });
    });
</script>


<script>
    document.addEventListener("DOMContentLoaded", function() {
        var videoElementMobile = document.querySelector("#video-mobile");
        var videoElementDesktop = document.querySelector("#video-desktop");

        var video = '';
        if (window.innerWidth > 767) {
            // Hide the mobile video and show the desktop video
            if (videoElementMobile) {
                videoElementMobile.style.display = "none";
            }
            if (videoElementDesktop) {
                videoElementDesktop.style.display = "block";
            }
            video = document.querySelector("#block video");
        } else {
            // Hide the desktop video and show the mobile video
            video = document.querySelector("#block-mobile video");
            if (videoElementMobile) {
                videoElementMobile.style.display = "block";
            }
            if (videoElementDesktop) {
                videoElementDesktop.style.display = "none";
            }
        }

        // Add a listener for when the video enters the viewport
        const options = {
            root: null,
            rootMargin: "0px",
            threshold: 0.1 // Adjust this threshold as needed
        };

        const observer = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    // Load the video when it enters the viewport
                    const videoSrc = video.getAttribute("data-src");
                    video.src = videoSrc;
                    video.load(); // Load the video

                    // Unobserve the video to stop the intersection observer
                    observer.unobserve(video);
                }
            });
        }, options);

        // Start observing the video
        observer.observe(video);
    });
</script>


<!-- ----------------Booking Form Adult text disable------------ -->

<script>
    // Function to initialize a dropdown
    function initializeDropdown(dropdownId) {
        const dropdown = document.getElementById(dropdownId);
        // Set the default selected option to "Adults" or "Children"
        dropdown.value = dropdown.options[0].value; // The first option is always "Adults" or "Children"

        // Add an event listener to prevent selecting "Adults" or "Children" again
        dropdown.addEventListener("change", function() {
            if (this.value === dropdown.options[0].value) {
                this.value = ""; // Reset the selection to empty
            }
        });
    }

    // Initialize both dropdowns
    initializeDropdown("adultsDropdown");
    initializeDropdown("childrenDropdown");
</script>
<script>
    var TxtType = function(el, toRotate, period) {
        this.toRotate = toRotate;
        this.el = el;
        this.loopNum = 0;
        this.period = parseInt(period, 10) || 2000;
        this.txt = '';
        this.tick();
        this.isDeleting = false;
    };

    TxtType.prototype.tick = function() {
        var i = this.loopNum % this.toRotate.length;
        var fullTxt = this.toRotate[i];

        if (this.isDeleting) {
            this.txt = fullTxt.substring(0, this.txt.length - 1);
        } else {
            this.txt = fullTxt.substring(0, this.txt.length + 1);
        }

        this.el.innerHTML = '<span class="wrap">' + this.txt + '</span>';

        var that = this;
        var delta = 200 - Math.random() * 100;

        if (this.isDeleting) {
            delta /= 2;
        }

        if (!this.isDeleting && this.txt === fullTxt) {
            delta = this.period;
            this.isDeleting = true;
        } else if (this.isDeleting && this.txt === '') {
            this.isDeleting = false;
            this.loopNum++;
            delta = 500;
        }

        setTimeout(function() {
            that.tick();
        }, delta);
    };

    window.onload = function() {
        var elements = document.getElementsByClassName('typewrite');
        for (var i = 0; i < elements.length; i++) {
            var toRotate = elements[i].getAttribute('data-type');
            var period = elements[i].getAttribute('data-period');
            if (toRotate) {
                new TxtType(elements[i], JSON.parse(toRotate), period);
            }
        }
        // INJECT CSS
        var css = document.createElement("style");
        css.type = "text/css";
        css.innerHTML = ".typewrite > .wrap { border-right: 0.08em solid #fff}";
        document.body.appendChild(css);
    };
</script>

<!--Footer-->