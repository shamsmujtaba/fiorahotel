
<div class="container-fluid head-2">
	
    <div class="container">
    
        <div class="row">
        
            <div class="col-md-12"><h1>Welcome to Fiora Hotel</h1>

            <div class="hd-btns"><a href="<?= base_url() ?>all-rooms">Know More</a></div>
          </div>
        
        </div>
    
    </div>

</div>

<div class="overlay"></div>

<!--<div id="block" class="dim" data-vide-bg="<?= asset_url() ?>video/orchestra"></div>-->
<div style="min-height: unset;" id="block" class="dim">
  <video class="video-main" style="max-width: 100%;" autoplay muted loop playsinline preload="none" poster="<?= asset_url() ?>images/video-poster.jpg" data-src="<?= asset_url() ?>video/orchestra.mp4">
    <!-- Provide a poster image as a fallback -->
     <source src="<?= asset_url() ?>video/orchestra.webm" type="video/webm"> 
    <!-- Add WebM source if needed -->
  </video>
</div>

<div class="container">

    <div class="row">
    
        <div class="col-md-12">
        
            <div class="mt-1 form-box">
            
                <div class="top-form-box">
                
                    <form class="head-form">
                    
                        <div class="col-md-2 prow"><label>Arrival Date*</label><input type="date" id="ChkinDate" placeholder="Check-in Date" name="DeadlineDate"></div>

                        <div class="col-md-2 prow"><label>Departure Date*</label><input type="date" id="ChkoutDate" placeholder="Check-out Date" name="DeadlineDate"></div>

                        <div class="col-md-3 prow">
                        <label for="">Adults</label>
                            <select class="select-css">
                               
                               <option value="">01</option> <option value="">02</option> <option value="">03</option> <option value="">04</option> <option value="">05</option>
                                 
                            </select>
                        
                        </div>
                        
                        <div class="col-md-3 prow">
                        <label for="">Children</label>
                            <select class="select-css">
                               <option value="">01</option> <option value="">02</option> <option value="">03</option> <option value="">04</option> <option value="">05</option>
                                 
                            </select>
                        
                        </div>

                        <div style="top: 25px;" class="col-md-2"><button type="submit" class="book-btn">Book This Room</button></div>
                        
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
            
            <p>Luxury Resort & Rooms, Staying true; we believe in a culture that includes people, one that celebrates the individuality of our guests and employees alike. We’re equally devoted to the greater good and have led the hospitality industry with us.</p>
            
            <div class="gen-btn"><a href="<?= base_url() ?>all-rooms">Bookings</a></div>
        
        </div>
    
    </div>

</div>

<!---->

<div class="container-fluid dark-bg">

    <div class="container">
        
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
                
                        <div class="acc-img">
                            
                            <div class="ribbon-red">50% Off</div>
                            
                            <div class="acc-head">Deluxe</div>
                            
                            <img src="<?= asset_url() ?>images/deluxe_room.webp" class="img-responsive" />
                        
                        </div>
                        
                        <div class="acc-desc">
                            
                            <p>A hotel Deluxe room is an accommodation intended for two people. Typically, it has one king bed or two twin...</p>
                        
                            <div class="gen-btn"><a href="<?= base_url() ?>all-rooms/deluxe-room">Details</a></div>
                        
                        </div>

                    </div><!--Accomodation Box-->

                  </div>
                    
                    <div class="slide">

                    <div class="acc-box"><!--Accomodation Box-->
                
                        <div class="acc-img">
                            
                            <div class="ribbon-red">50% Off</div>
                            
                            <div class="acc-head">Studio</div>
                            
                            <img src="<?= asset_url() ?>images/studio_room.webp" class="img-responsive" />
                        
                        </div>
                        
                        <div class="acc-desc">
                            
                            <p>Enjoy all the amenities and international card scan room key system for your security and ease. Discover a spacious oasis.. </p>
                        
                            <div class="gen-btn"><a href="<?= base_url() ?>all-rooms/studio-room">Details</a></div>
                        
                        </div>

                    </div><!--Accomodation Box-->

                  </div>
                    
                    <div class="slide">

                    <div class="acc-box"><!--Accomodation Box-->
                
                        <div class="acc-img">
                            
                            <div class="ribbon-red">50% Off</div>
                            
                            <div class="acc-head">Standard</div>
                            
                            <img src="<?= asset_url() ?>images/standard_room.webp" class="img-responsive" />
                        
                        </div>
                        
                        <div class="acc-desc">
                            
                            <p>Fiora provides Standard room services. Our Standard room is roomy and pleasant and has upgraded amenities such huge.</p>
                        
                            <div class="gen-btn"><a href="<?= base_url() ?>all-rooms/standard-room">Details</a></div>
                        
                        </div>

                    </div><!--Accomodation Box-->

                  </div>
                    
                    <div class="slide">

                    <div class="acc-box"><!--Accomodation Box-->
                
                        <div class="acc-img">
                            
                            <div class="ribbon-red">50% Off</div>
                            
                            <div class="acc-head">Pent House</div>
                            
                            <img src="<?= asset_url() ?>images/penthouse.webp" class="img-responsive" />
                        
                        </div>
                        
                        <div class="acc-desc">
                            
                            <p>PentHouse are comfortable which are decorated in pastel designs. They are equipped with All facilities like shower and other.</p>
                        
                            <div class="gen-btn"><a href="<?= base_url() ?>all-rooms/pent-house">Details</a></div>
                        
                        </div>

                    </div><!--Accomodation Box-->

                  </div>
                    
                </section>
            
            </div>
        
        </div>
    
    </div>

</div>

<!---->

<div class="container content-ptb">

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
                        
                        <p>Stay fit during your stay with our state-of-the-art gym facilities, equipped for all your fitness needs</p>
                    
                    </div>
                    
                    <img src="<?= asset_url() ?>images/fac-img-01.webp" class="img-responsive" />
                
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
                        
                        <p>Indulge in the rich flavors of Italy right at our hotel with our cozy in-house Italian coffee bar.</p>
                    
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
                    
                        <div class="col-md-2 prow"><label>Arrival Date*</label><input type="date" id="ChkinDate" placeholder="Check-in Date" name="DeadlineDate"></div>

                        <div class="col-md-2 prow"><label>Departure Date*</label><input type="date" id="ChkoutDate" placeholder="Check-out Date" name="DeadlineDate"></div>

                        <div class="col-md-3 prow">
                        
                            <select class="select-css">
                                <option value="">Adults</option>
                               <option value="">01</option> <option value="">02</option> <option value="">03</option> <option value="">04</option> <option value="">05</option>
                                 
                            </select>
                        
                        </div>
                        
                        <div class="col-md-3 prow">
                        
                            <select class="select-css">
                                <option value="">Children</option>
                               <option value="">01</option> <option value="">02</option> <option value="">03</option> <option value="">04</option> <option value="">05</option>
                                 
                            </select>
                        
                        </div>

                        <div class="col-md-2"><button type="submit" class="book-btn">Book This Room</button></div>
                        
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
            
            <p>From the heart of elegance, Fiora has been guiding the hospitality industry with unmatched sophistication for over a decade and a half.</p>

        </div>
        
        <div class="col-md-6"><img src="<?= asset_url() ?>images/hosp-img.webp" class="img-responsive" /></div>

    </div>
    
    <div class="row p-2">
        
      <div class="col-md-12">

          <div class="fake-div"></div>

          <div id="counter">

              <div class="col-md-3">
                  
                  <div class="hosp-stat-bg">
                  
                      <div class="hosp-img"><img src="<?= asset_url() ?>images/hosp-img-01.webp" /></div>

                      <div class="stats"><div class="counter-value" data-count="121">0</div> <div class="plus"> New Friendships</div></div>
                  
                  </div>
              
              </div>
              
              <div class="col-md-3">
                  
                  <div class="hosp-stat-bg">
                  
                      <div class="hosp-img"><img src="<?= asset_url() ?>images/hosp-img-02.webp" /></div>

                      <div class="stats"><div class="counter-value" data-count="254">0</div> <div class="plus"> Five Star Ratings</div></div>
                  
                  </div>
              
              </div>
              
              <div class="col-md-3">
                  
                  <div class="hosp-stat-bg">
                  
                      <div class="hosp-img"><img src="<?= asset_url() ?>images/hosp-img-03.webp" /></div>

                      <div class="stats"><div class="counter-value" data-count="430">0</div> <div class="plus"> International Guests</div></div>
                  
                  </div>
              
              </div>
              
              <div class="col-md-3">
                  
                  <div class="hosp-stat-bg">
                  
                      <div class="hosp-img"><img src="<?= asset_url() ?>images/hosp-img-04.webp" /></div>

                      <div class="stats"><div class="counter-value" data-count="782">0</div> <div class="plus"> Served Breakfast</div></div>
                  
                  </div>
              
              </div>

          </div>

          <div class="fake-div"></div>

      </div>

  </div>

</div>

<!---->

<!---->

<div class="container-fluid test-bg">

    <div class="container">
    
        <div class="row">
        
            <div class="col-md-12">
            
                <div class="sec-title-wt">What our clients say</div>
            
            </div>
        
        </div>
        
        <div class="row">
        
            <div class="col-md-12">
            
                <section class="testim-box slider">
                    
                    <div class="slide">

                    <div class="test-box"><!--Testimonial Box-->
                        
                        <div class="col-md-7">
                        
                            <div class="cl-img"><img src="<?= asset_url() ?>images/wr-01a.webp" class="img-circle" /></div>
                            
                            <div class="cl-name">Ali Azaz</div>
                        
                        </div>
                        
                        <div class="col-md-5">
                        
                            <ul class="rating">

                                <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>

                            </ul>
                        
                        </div>
                        
                        <div class="clearfix"></div>
                        
                        <div class="test-desc">
                            
                            <p>I had a fantastic stay at Fiora Hotel! The complimentary breakfast was a delightful surprise – a wide array of options, from continental classics to local specialties. The Italian coffee bar was my daily retreat, offering the perfect place to unwind and savor a cappuccino while taking in the soothing ambiance. The breathtaking view from the terrace overlooking the city was truly remarkable. A memorable experience!</p>
                        
                        </div>

                    </div><!--Testimonial Box-->

                  </div>
                    
                    <div class="slide">

                    <div class="test-box"><!--Testimonial Box-->
                        
                        <div class="col-md-7">
                        
                            <div class="cl-img"><img src="<?= asset_url() ?>images/wr-01a.webp" class="img-circle" /></div>
                            
                            <div class="cl-name">Zain Shah</div>
                        
                        </div>
                        
                        <div class="col-md-5">
                        
                            <ul class="rating">

                                <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>

                            </ul>
                        
                        </div>
                        
                        <div class="clearfix"></div>
                        
                        <div class="test-desc">
                            
                            <p>My recent stay at Fiora Hotel was quite pleasant. The complimentary breakfast provided a good start to my day with a variety of choices. The Italian coffee bar was a charming spot to enjoy some espresso. The view from the terrace was lovely; it's a nice place to relax and soak in the cityscape.</p>
                        
                        </div>

                    </div><!--Testimonial Box-->

                  </div>
                    
                    <div class="slide">

                    <div class="test-box"><!--Testimonial Box-->
                        
                        <div class="col-md-7">
                        
                            <div class="cl-img"><img src="<?= asset_url() ?>images/wr-01a.webp" class="img-circle" /></div>
                            
                            <div class="cl-name">Shams Mujtaba</div>
                        
                        </div>
                        
                        <div class="col-md-5">
                        
                            <ul class="rating">

                                <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>

                            </ul>
                        
                        </div>
                        
                        <div class="clearfix"></div>
                        
                        <div class="test-desc">
                            
                            <p>Fiora Hotel exceeded my expectations! The complimentary breakfast was a gastronomic journey, and the Italian coffee bar was a delightful bonus. The terrace with its panoramic view was the perfect backdrop for a serene evening. I couldn't have asked for a better experience.</p>
                        
                        </div>

                    </div><!--Testimonial Box-->

                  </div>
                    
                    <div class="slide">

                    <div class="test-box"><!--Testimonial Box-->
                        
                        <div class="col-md-7">
                        
                            <div class="cl-img"><img src="<?= asset_url() ?>images/wr-01a.webp" class="img-circle" /></div>
                            
                            <div class="cl-name">Usman Mehmood</div>
                        
                        </div>
                        
                        <div class="col-md-5">
                        
                            <ul class="rating">

                                <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>

                            </ul>
                        
                        </div>
                        
                        <div class="clearfix"></div>
                        
                        <div class="test-desc">
                            
                            <p>Fiora Hotel offered a comfortable and enjoyable stay. The complimentary breakfast was a nice touch, and the Italian coffee bar provided a relaxing atmosphere. The view from the terrace was a definite highlight, especially in the evening. Overall, a solid choice for accommodations.</p>
                        
                        </div>

                    </div><!--Testimonial Box-->

                  </div>
                    
                </section>
            
                </div>
            
            </div>
        
        </div>
    
    </div>

<!---->

<!---->

<div class="container content-ptb">

    <div class="row">
        
        <div class="col-md-12">

            <div class="sec-title-lt">Special Offers</div>

        </div>
        
        <div class="col-md-6 col-md-offset-3"><p>Capitalize on low hanging fruit to identify a ballpark value added</p></div>

    </div>
    
    <div class="row p-3">
    
        <div class="col-md-6">
        
            <div class="offer-img"><img src="<?= asset_url() ?>images/honeymoon_package.webp" class="img-responsive" /></div>
            
            <div class="offer-desc">
            
                <div class="row">
                
                    <div class="col-md-6">
                    
                        <div class="off-txt"><span>50% Off on this packages</span>Honeymoon package</div>
                    
                    </div>
                    
                    <div class="col-md-6">
                    
                        <div class="gen-btn"><a href="<?= base_url() ?>contact">Know More</a></div>
                    
                    </div>
                
                </div>
            
            </div>
        
        </div>
        
        <div class="col-md-6">
        
            <div class="offer-img"><img src="<?= asset_url() ?>images/birthday_celebration.webp" class="img-responsive" /></div>
            
            <div class="offer-desc">
            
                <div class="row">
                
                    <div class="col-md-6">
                    
                        <div class="off-txt"><span>50% Off on this packages</span>Birthday Celebration</div>
                    
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

<!---->

<div class="container-fluid cta-form-bg">

    <div class="container">
    
        <div class="row">
        
            <div class="col-md-6 col-md-offset-3">
            
            <div class="mt-3">
                
                    <form class="head-form">
                        
                        <div class="row">
        
                            <div class="col-md-12">

                                <div class="sec-title-wt">Make Reservation</div>

                            </div>

                        </div>
                    
                        <div class="col-md-6 row-p"><label>Arrival Date*</label><input type="date" id="ChkinDate" placeholder="Check-in Date" name="DeadlineDate"></div>

                        <div class="col-md-6 row-p"><label>Departure Date*</label><input type="date" id="ChkinDate" placeholder="Check-in Date" name="DeadlineDate"></div>

                        <div class="col-md-6 row-p">
                        <label for="">Adults</label>
                            <select class="select-css">
                                
                               <option value="">01</option> <option value="">02</option> <option value="">03</option> <option value="">04</option> <option value="">05</option>
                                 
                            </select>
                        
                        </div>
                        
                        <div class="col-md-6 row-p">
                        <label for="">Children</label>
                            <select class="select-css">
                               <option value="">01</option> <option value="">02</option> <option value="">03</option> <option value="">04</option> <option value="">05</option>
                                 
                            </select>
                        
                        </div>

                        <div class="col-md-12"><button type="submit" class="book-btn">Book This Room</button></div>
                        
                        <div class="clearfix"></div>
                    
                    </form>
            
            </div>
            
            </div>
        
        </div>
    
    </div>

</div>

<!---->

<!---->

<div class="container content-ptb">
    <div class="row">
        
    <div class="col-md-12">

        <div class="sec-title-lt">Our Gallery</div>

    </div>

    <div align="center">
        
        <button class="btn btn-default filter-button" data-filter="resturant_gallery">Restaurant</button>
        <button class="btn btn-default filter-button" data-filter="rooms_gallery">Rooms</button>
        <button class="btn btn-default filter-button" data-filter="outdoor_gallery">OutDoor</button>
    </div>
    <br/>



            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter resturant_gallery">
                <img src="<?= asset_url() ?>images/gallery/gallery-image-1.webp" class="img-responsive">
            </div>

           

            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter resturant_gallery">
                <img src="<?= asset_url() ?>images/gallery/gallery-image-3.webp" class="img-responsive">
            </div>
            
             <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter resturant_gallery">
                <img src="<?= asset_url() ?>images/gallery/resturant_gallery_image_1.webp" class="img-responsive">
            </div>
            
            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter resturant_gallery">
                <img src="<?= asset_url() ?>images/gallery/resturant_gallery_image_2.webp" class="img-responsive">
            </div>
            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter resturant_gallery">
                <img src="<?= asset_url() ?>images/gallery/resturant_gallery_image_5.webp" class="img-responsive">
            </div>
            
            
            <!--outdoor images -->

            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter outdoor_gallery">
                <img src="<?= asset_url() ?>images/gallery/gallery-image-4.webp" class="img-responsive">
            </div>

            

            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter outdoor_gallery">
                <img src="<?= asset_url() ?>images/gallery/gallery-image-6.webp" class="img-responsive">
            </div>
            
            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter outdoor_gallery">
                <img src="<?= asset_url() ?>images/gallery/outdoor_gallery-image-1.webp" class="img-responsive">
            </div>
            
             <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter outdoor_gallery">
                <img src="<?= asset_url() ?>images/gallery/outdoor_gallery-image-3.webp" class="img-responsive">
            </div>
            
             <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter outdoor_gallery">
                <img src="<?= asset_url() ?>images/gallery/outdoor_gallery-image-4.webp" class="img-responsive">
            </div>
            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter outdoor_gallery">
                <img src="<?= asset_url() ?>images/gallery/rooms_gallery_img_new_5.webp" class="img-responsive">
            </div>
            
            
            <!--rooms gallery -->
            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter rooms_gallery">
                <img src="<?= asset_url() ?>images/gallery/rooms_gallery_img_new_1.webp" class="img-responsive">
            </div>
            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter rooms_gallery">
                <img src="<?= asset_url() ?>images/gallery/rooms_gallery_img_new_2.webp" class="img-responsive">
            </div>
            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter rooms_gallery">
                <img src="<?= asset_url() ?>images/gallery/rooms_gallery_img_new_3.webp" class="img-responsive">
            </div>
             <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter rooms_gallery">
                <img src="<?= asset_url() ?>images/gallery/rooms_gallery_img_new_4.webp" class="img-responsive">
            </div>
            

			
    </div>
</div>
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
    const restaurantImages = document.querySelectorAll(".resturant_gallery");
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
  const video = document.querySelector("#block video");
  
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
        
        // Unobserve the video to stop the intersection observer
        observer.unobserve(video);
      }
    });
  }, options);
  
  // Start observing the video
  observer.observe(video);
});
</script>


<!--Footer-->