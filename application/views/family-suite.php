<div class="container-fluid head-3">

    <div class="container">

        <div class="row">

            <div class="col-md-12">
                <h1>Family Suite</h1>
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
                <div class="tab-pane active" id="pic-1"><img src="<?= asset_url() ?>images/rooms/family_suite_img_new_1.webp" /></div>
                <div class="tab-pane" id="pic-2"><img src="<?= asset_url() ?>images/rooms/family_suite_img_new_2.webp" /></div>
                <div class="tab-pane" id="pic-3"><img src="<?= asset_url() ?>images/rooms/family_suite_img_new_3.webp" /></div>
                <div class="tab-pane" id="pic-4"><img src="<?= asset_url() ?>images/rooms/familysuite-image-for-room.webp" /></div>
                <div class="tab-pane" id="pic-5"><img src="<?= asset_url() ?>images/rooms/family-suite-room-wasroom-img.webp" /></div>

                


            </div>
            <ul class="preview-thumbnail nav nav-tabs">
                <li class="active"><a data-target="#pic-1" data-toggle="tab"><img src="<?= asset_url() ?>images/rooms/family_suite_img_new_1.webp" /></a></li>
                <li ><a data-target="#pic-2" data-toggle="tab"><img src="<?= asset_url() ?>images/rooms/family_suite_img_new_2.webp" /></a></li>
                <li ><a data-target="#pic-3" data-toggle="tab"><img src="<?= asset_url() ?>images/rooms/family_suite_img_new_3.webp" /></a></li>
                <li ><a data-target="#pic-4" data-toggle="tab"><img src="<?= asset_url() ?>images/rooms/familysuite-image-for-room.webp" /></a></li>
                <li ><a data-target="#pic-5" data-toggle="tab"><img src="<?= asset_url() ?>images/rooms/family-suite-room-wasroom-img.webp" /></a></li>


                


            </ul>

        </div>

        <div class="details col-md-7">

            <div class="acc-box"><!--Accomodation Box-->

                <div class="acc-desc-2">

                    <div class="big-txt">Family Suite</div>

                    <p>Great Mountain View / 4 Guests</p>

                    <div class="room-stats">

                        <div class="rm-stat"><span class="fa fa-bed"></span> 2 King Size Beds</div>

                        <div class="rm-stat"><span style=" color: #d49136; " class="fa fa-group"></span> 4 Guests</div>

                        <div class="rm-stat"><span class="fa fa-bathtub"></span> 2-Bathrooms</div>

                    </div>

                    <p>Perfect for families or groups seeking the ultimate in comfort and space, our Family Suite combines two interconnected Deluxe Rooms, offering a sprawling 240 square meters of luxury. With a stunning view of the Murree mountains, this suite provides an unforgettable retreat for up to 4 guests.
                    </p>

                    <div class="rm-price"> <span class="disc-price"> Rs 60,000</span><span style="color: red;"> Rs 30,000 </span> </div>

                </div>

            </div><!--Accomodation Box-->

        </div>
    </div>

</div>

<!---->

<div class="container content-pb">

    <div class="row">

        <div class="col-md-8">

            <div class="rm-features-head"><span class="fa fa-bed"></span>2 King Size Beds</div>

            <div class="rm-features-desc">

                <p>Enjoy two spacious and well-appointed bedrooms, each featuring a plush king-size bed with a valley view to ensure a restful night's sleep for all family members.
                </p>

            </div>

            <div class="rm-features-head"><span class="fa fa-bath"></span> 2-Bathrooms</div>

            <div class="rm-features-desc">

                <p>Indulge in the convenience of two stylish ensuite bathrooms, each equipped with a rejuvenating shower and modern amenities to elevate your stay. Freshen up and prepare for your day in style.
                </p>

            </div>

            <div class="rm-features-head"><span class="fa fa-couch"></span> Storage &amp; Furniture</div>

            <div class="rm-features-desc">

                <p>Our Family Suite boasts ample storage space with a wardrobe, dresser, and additional furniture to ensure a comfortable and clutter-free stay. Each room is furnished with a work desk and chair, bedside tables, and comfortable rockers.
                </p>

            </div>

            <div class="rm-features-head"><span class="fa fa-chair"></span> Others</div>

            <div class="rm-features-desc">

                <p>Contains a normal work desk and chair, one or two bedside tables, and one or two rockers.</p>

            </div>

            <div class="rm-features-head"><span class="fa fa-tv"></span> Amenities</div>

            <div class="rm-features-desc">

                <p>Stay connected with high-speed internet, enjoy the convenience of room service, and access a 55-inch media TV for entertainment. Our central heating system ensures your comfort in any season, while fresh air ducts guarantee a breath of revitalizing mountain air. For your peace of mind, we provide a state-of-the-art digital locker, keeping your valuables secure throughout your stay. Guests also have access to our gym facilities.
                </p>

            </div>

            <div class="rm-features-head"><span class="fa fa-mug-saucer"></span> Extras</div>

            <div class="rm-features-desc">

                <p>The Family Suite offers a mini-fridge, a safe for your valuables, and a private balcony with breathtaking mountain views to enhance your experience.
                </p>

            </div>

            <div class="rm-features-head"><span class="fa fa-person-hiking"></span> Suitable-For</div>

            <div class="rm-features-desc">

                <p>Families, friends, or groups traveling together who desire spacious, luxurious accommodations with the convenience of interconnected rooms. </p>
                <p>No pets are allowed</p>
            </div>

        </div>

        <div class="col-md-4">

            <?php
            $data['rid'] = 9;
            $this->load->view('includes/make_reserervation.php', $data);
            ?>
        </div>

    </div>

</div>
