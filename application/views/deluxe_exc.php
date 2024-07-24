<div class="container-fluid head-3">

    <div class="container">

        <div class="row">

            <div class="col-md-12">
                <h1>Royal Suite</h1>
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
                    <img src="<?= asset_url() ?>images/rooms/royal_suite_room_img_1.webp" />

                </div>
                <div class="tab-pane" id="pic-2"><img src="<?= asset_url() ?>images/rooms/royal_suite_room_img_2.webp" /></div>
                <div class="tab-pane" id="pic-3"><img src="<?= asset_url() ?>images/rooms/royal_suite_room_img_3.webp" /></div>
                <div class="tab-pane" id="pic-4"><img src="<?= asset_url() ?>images/rooms/royal_suite_room_img_4.webp" /></div>
                <div class="tab-pane" id="pic-5"><img src="<?= asset_url() ?>images/rooms/royal_suite_room_img_5.webp" /></div>
                <div class="tab-pane" id="pic-6"><img src="<?= asset_url() ?>images/rooms/royal_suite_room_img_6.webp" /></div>
                <div class="tab-pane" id="pic-7"><img src="<?= asset_url() ?>images/rooms/royal_suite_room_img_7.webp" /></div>

            </div>
            <ul class="preview-thumbnail nav nav-tabs">
                <li class="active"><a data-target="#pic-1" data-toggle="tab"><img src="<?= asset_url() ?>images/rooms/royal_suite_room_img_1.webp" /></a></li>
                <li><a data-target="#pic-2" data-toggle="tab"><img src="<?= asset_url() ?>images/rooms/royal_suite_room_img_2.webp" /></a></li>
                <li><a data-target="#pic-3" data-toggle="tab"><img src="<?= asset_url() ?>images/rooms/royal_suite_room_img_3.webp" /></a></li>
                <li><a data-target="#pic-4" data-toggle="tab"><img src="<?= asset_url() ?>images/rooms/royal_suite_room_img_4.webp" /></a></li>
                <li><a data-target="#pic-5" data-toggle="tab"><img src="<?= asset_url() ?>images/rooms/royal_suite_room_img_5.webp" /></a></li>
                <li><a data-target="#pic-6" data-toggle="tab"><img src="<?= asset_url() ?>images/rooms/royal_suite_room_img_6.webp" /></a></li>
                <li><a data-target="#pic-7" data-toggle="tab"><img src="<?= asset_url() ?>images/rooms/royal_suite_room_img_7.webp" /></a></li>
            </ul>

        </div>

        <div class="details col-md-7">

            <div class="acc-box"><!--Accomodation Box-->

                <div class="acc-desc-2">

                    <div class="big-txt">Royal Suite</div>

                    <p>Great Mountain View / 2 Guests</p>

                    <div class="room-stats">

                        <div class="rm-stat"><span class="fa fa-bed"></span> 1-Bed</div>

                        <div class="rm-stat"><span style=" color: #d49136; " class="fa fa-group"></span> 2-guests</div>
                    
                        <div class="rm-stat"><span class="fa fa-bathtub"></span> 1-Bathroom</div>

                    </div>

                    <p>Indulge in lavish comfort as you enter this opulent abode, featuring a sumptuous bed and an ensuite bathroom complete with a rejuvenating shower and a relaxing bathtub. Step out onto your private balcony and savor the breathtaking views of the mountains.</p>

                    <div class="rm-price"><span class="disc-price">Rs 50,000</span> <span style="color: red;">Rs 25,000 </span></div>

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

                <p>Has one king size bed and one single bed are specious in size and having a beautiful valley view a private terrace , a bathtub in it , it has 3 person accommodation but 4 can also accommodate with extra mattress , and there is 2 seat sofas in it .</p>

            </div>

            <div class="rm-features-head"><span class="fa fa-bath"></span> 1-Bathroom</div>

            <div class="rm-features-desc">

                <p>Each standard double room has a full bathroom with a bathtub, shower, toilet and basin.</p>

            </div>

            <div class="rm-features-head"><span class="fa fa-couch"></span> Storage &amp; Furniture</div>

            <div class="rm-features-desc">

                <p>Enjoy round-the-clock room service, high-speed internet, and the cozy embrace of central heating. Entertainment is elevated with a grand 55-inch media TV.</p>

            </div>

            <div class="rm-features-head"><span class="fa fa-chair"></span> Others</div>

            <div class="rm-features-desc">

                <p>And for the grand finale, ascend to our exquisite rooftop restaurant, offering an enticing fusion of Pakistani, Chinese, and Italian cuisine. Savor Italian coffee at the bar while immersing yourself in the captivating ambiance.</p>

            </div>

            <div class="rm-features-head"><span class="fa fa-tv"></span> Amenities</div>

            <div class="rm-features-desc">

                <p>A TV, a desk, Wi-Fi, air conditioning or heating, and room service</p>

            </div>

            <div class="rm-features-head"><span class="fa fa-mug-saucer"></span> Extras</div>

            <div class="rm-features-desc">

                <p>As our esteemed guest, you'll enjoy complimentary access to our well-equipped gym.</p>

            </div>

            <div class="rm-features-head"><span class="fa fa-person-hiking"></span> Suitable-For</div>

            <div class="rm-features-desc">

                <p>Couples or groups of friends travelling together.</p>

            </div>

        </div>

        <div class="col-md-4">

        <?php 
            $data['rid'] = 5;
            $this->load->view('includes/make_reserervation.php', $data);
            ?>

        </div>

    </div>

</div>

<!--Footer-->