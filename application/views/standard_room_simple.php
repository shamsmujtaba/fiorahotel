
<div class="container-fluid head-3">
	
    <div class="container">
    
        <div class="row">
        
            <div class="col-md-12"><h1>Standard Room</h1>
          </div>
        
        </div>
    
    </div>

</div>

<div id="block" class="inner-header"></div>

<!---->

<div class="container content-ptb">

    <div class="wrapper row">
      <div class="preview col-md-5">

          <div class="preview-pic hover-zoom-anim tab-content">
          <div class="ribbon-red">50% Off</div>
            <div class="tab-pane active" id="pic-1"><img src="<?= asset_url() ?>images/rooms/standard_room_simple_img.webp" /></div>
            
            
            <div class="tab-pane" id="pic-5"><img src="<?= asset_url() ?>images/rooms/Standard-bathroom_1_.webp" /></div>

          </div>
          <ul class="preview-thumbnail nav nav-tabs">
            <li class="active"><a data-target="#pic-1" data-toggle="tab"><img src="<?= asset_url() ?>images/rooms/standard_room_simple_img.webp" /></a></li>
           
            <li><a data-target="#pic-5" data-toggle="tab"><img src="<?= asset_url() ?>images/rooms/Standard-bathroom_1_.webp" /></a></li>

          </ul>

      </div>
        
      <div class="details col-md-7">
          
          <div class="acc-box"><!--Accomodation Box-->

              <div class="acc-desc-2">
                  
                  <div class="big-txt">Standard Room</div>

                  <p> 1-Bed 2-Guests</p>

                  <div class="room-stats">

                      <div class="rm-stat"><span class="fa fa-bed"></span> 1-Bed</div>

                      <div class="rm-stat"><span style=" color: #d49136; " class="fa fa-group"></span> 2-guests</div>

                      <div class="rm-stat"><span class="fa fa-bathtub"></span> 1-Bathroom</div>

                  </div>

                  <p>Enjoy the perfect blend of comfort and sophistication within our Standard Room at the esteemed Fiora Hotel. Discover affordable luxury at its finest as you relax in the heart of our 4-star establishment. Unwind in a serene environment with a lavish, cozy bed ensuring a rejuvenating night's rest.</p>

                    <p>Embrace the seamless combination of style and practicality within our Standard Room, offering an unforgettable experience during your stay at our 4-star sanctuary.</p>

                  <div class="rm-price"><span class="disc-price">Rs 20,000</span>  <span style="color: red;">Rs 10,000 </span></div>

              </div>

          </div><!--Accomodation Box-->
          
      </div>
  </div>

</div>

<!---->

<div class="container content-pb">

    <div class="row">
    
        <div class="col-md-8">
        
            <div class="rm-features-head"><span class="fa fa-bed"></span> 1-Bed</div>
            
            <div class="rm-features-desc">
            
                <p>1 King Size bed no Valley view smaller in size as compare to standard King no space for extra mattress there is no way to accommodate more than 2 person.</p>
            
            </div>
            
            <div class="rm-features-head"><span class="fa fa-bath"></span> 1-Bathroom</div>
            
            <div class="rm-features-desc">
            
                <p>Enter your private bathroom, complete with a refreshing shower and contemporary amenities designed to enhance your stay. Get ready for your day with a touch of elegance and rejuvenation.</p>
            
            </div>
            
            <div class="rm-features-head"><span class="fa fa-couch"></span> Storage &amp; Furniture</div>
            
            <div class="rm-features-desc">
            
                <p>There's a King Size bed accompanied by two bedside tables and a spacious wardrobe. The setup allows for a cozy space with ample storage, ensuring convenience and functionality.</p>
            
            </div>
            
            <div class="rm-features-head"><span class="fa fa-chair"></span> Others</div>
            
            <div class="rm-features-desc">
            
                <p>Contains one or two bedside tables, and one or two rockers.</p>
            
            </div>
            
            <div class="rm-features-head"><span class="fa fa-tv"></span> Amenities</div>
            
            <div class="rm-features-desc">
            
                <p>Keep in touch with high-speed internet access and relish the convenience of on-demand room service. Our centralized heating system ensures your comfort all year round, while fresh air circulation systems promise a refreshing atmosphere. Rest easy knowing your belongings are safe with our top-notch digital locker, ensuring their security throughout your stay.</p>
            
            </div>
            
            <div class="rm-features-head"><span class="fa fa-mug-saucer"></span> Extras</div>
            
            <div class="rm-features-desc">
            
                <p>A Complementary Breakfast</p>
                <p>Gym is Complementary with this Standard Room</p>

            
            </div>
            
            <div class="rm-features-head"><span class="fa fa-person-hiking"></span> Suitable-For</div>
            
            <div class="rm-features-desc">
            
                <p>Couples or groups of friends travelling together.</p>
                <p>No pets are allowed</p>
            
            </div>
        
        </div>
        
        <div class="col-md-4">
        
        <?php 
            $data['rid'] = 11;
            $this->load->view('includes/make_reserervation.php', $data);
            ?>
        
        </div>
    
    </div>

</div>


<!--Footer-->