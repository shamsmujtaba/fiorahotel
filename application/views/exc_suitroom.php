<div class="container-fluid head-3">

    <div class="container">

        <div class="row">

            <div class="col-md-12">
                <h1>Executive Suite Room</h1>
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
                <div class="tab-pane active" id="pic-1">
                <div class="ribbon-red">50% Off</div>
                    <img src="<?= asset_url() ?>images/rooms/executive_suite_room_img_new_1.webp" />

                </div>
                <div class="tab-pane" id="pic-2"><img src="<?= asset_url() ?>images/rooms/executive_suite_room_img_new_2.webp" /></div>
                <div class="tab-pane" id="pic-3"><img src="<?= asset_url() ?>images/rooms/executive_suite_room_img_new_3.webp" /></div>
                <div class="tab-pane" id="pic-4"><img src="<?= asset_url() ?>images/rooms/executive_suite_room_img_new_4.webp" /></div>
                <div class="tab-pane" id="pic-5"><img src="<?= asset_url() ?>images/rooms/executive_suite_room_img_new_5.webp" /></div>
                <div class="tab-pane" id="pic-6"><img src="<?= asset_url() ?>images/rooms/executive_suite_room_img_new_6.webp" /></div>
                <div class="tab-pane" id="pic-7"><img src="<?= asset_url() ?>images/rooms/executive_suite_room_img_new_7.webp" /></div>
                <div class="tab-pane" id="pic-8"><img src="<?= asset_url() ?>images/rooms/executive_suite_room_img_new_8.webp" /></div>


            </div>
            <ul class="preview-thumbnail nav nav-tabs">
                <li class="active"><a data-target="#pic-1" data-toggle="tab"><img src="<?= asset_url() ?>images/rooms/executive_suite_room_img_new_1.webp" /></a></li>
                <li><a data-target="#pic-2" data-toggle="tab"><img src="<?= asset_url() ?>images/rooms/executive_suite_room_img_new_2.webp" /></a></li>
                <li><a data-target="#pic-3" data-toggle="tab"><img src="<?= asset_url() ?>images/rooms/executive_suite_room_img_new_3.webp" /></a></li>
                <li><a data-target="#pic-4" data-toggle="tab"><img src="<?= asset_url() ?>images/rooms/executive_suite_room_img_new_4.webp" /></a></li>
                <li><a data-target="#pic-5" data-toggle="tab"><img src="<?= asset_url() ?>images/rooms/executive_suite_room_img_new_5.webp" /></a></li>
                <li><a data-target="#pic-6" data-toggle="tab"><img src="<?= asset_url() ?>images/rooms/executive_suite_room_img_new_6.webp" /></a></li>
                <li><a data-target="#pic-7" data-toggle="tab"><img src="<?= asset_url() ?>images/rooms/executive_suite_room_img_new_7.webp" /></a></li>
                <li><a data-target="#pic-8" data-toggle="tab"><img src="<?= asset_url() ?>images/rooms/executive_suite_room_img_new_8.webp" /></a></li>


            </ul>

        </div>

        <div class="details col-md-7">

            <div class="acc-box"><!--Accomodation Box-->

                <div class="acc-desc-2">

                    <div class="big-txt">EXECUTIVE SUITE ROOM</div>

                    <p>Great Mountain View / 3 Guests</p>

                    <div class="room-stats">

                        <div class="rm-stat"><span class="fa fa-bed"></span> 1-Bed</div>

                        <div class="rm-stat"><span style=" color: #d49136; " class="fa fa-group"></span> 3-guests</div>

                        <div class="rm-stat"><span class="fa fa-bathtub"></span> 1-Bathroom</div>

                    </div>

                    <p>A hotel double room is an accommodation intended for two people. Typically, it has one king bed or two twin beds along with furniture including a desk, chair, dresser, and wardrobe. Fiora provides these.</p>

                    <div class="rm-price"><span class="disc-price">Rs 45,000</span> <span style="color: red;">Rs 22,500 </span></div>

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

                <p>Our Executive Suite offers one king-sized bed, one sofa cum bed, and a dining area with a window view. This spacious suite is designed to accommodate up to six guests comfortably.</p>

            </div>

            <div class="rm-features-head"><span class="fa fa-bath"></span> 1-Bathroom</div>

            <div class="rm-features-desc">

                <p>Each standard double room has a full bathroom with a shower, toilet, and basin.</p>

            </div>

            <div class="rm-features-head"><span class="fa fa-couch"></span> Storage &amp; Furniture</div>

            <div class="rm-features-desc">

                <p>A typical double room has five pieces of furniture. The rooms have little storage space, such as a tiny closet beside the door and a tiny dresser.</p>

            </div>

            <div class="rm-features-head"><span class="fa fa-chair"></span> Others</div>

            <div class="rm-features-desc">

                <p>Contains a normal work desk and chair, one or two bedside tables, and one or two rockers.</p>

            </div>

            <div class="rm-features-head"><span class="fa fa-tv"></span> Amenities</div>

            <div class="rm-features-desc">

                <p>A TV, a desk, Wi-Fi, air conditioning or heating, and room service.</p>

            </div>

            <div class="rm-features-head"><span class="fa fa-mug-saucer"></span> Extras</div>

            <div class="rm-features-desc">

                <p>Electric kettles, and a balcony with a view.</p>

            </div>

            <div class="rm-features-head"><span class="fa fa-person-hiking"></span> Suitable-For</div>

            <div class="rm-features-desc">

                <p>Couples or groups of friends traveling together.</p>
                <p>No pets are allowed</p>

            </div>

        </div>

        <div class="col-md-4">

        <?php 
            $data['rid'] = 4;
            $this->load->view('includes/make_reserervation.php', $data);
            ?>

        </div>

    </div>

</div>

<!--Footer-->