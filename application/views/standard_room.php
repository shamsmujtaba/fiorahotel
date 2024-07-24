<div class="container-fluid head-3">

    <div class="container">

        <div class="row">

            <div class="col-md-12">
                <h1>Standard king Room</h1>
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
                <div class="tab-pane active" id="pic-1"><img src="<?= asset_url() ?>images/standard_room_img_new_1.webp" /></div>
                <div class="tab-pane" id="pic-2"><img src="<?= asset_url() ?>images/standard_room_img_new_2.webp" /></div>
                <div class="tab-pane" id="pic-3"><img src="<?= asset_url() ?>images/standard_room_img_new_3.webp" /></div>
                <div class="tab-pane" id="pic-4"><img src="<?= asset_url() ?>images/standard_room_img_new_4.webp" /></div>
                <div class="tab-pane" id="pic-5"><img src="<?= asset_url() ?>images/rooms/Standard-bathroom_1_.webp" /></div>

            </div>
            <ul class="preview-thumbnail nav nav-tabs">
                <li class="active"><a data-target="#pic-1" data-toggle="tab"><img src="<?= asset_url() ?>images/standard_room_img_new_1.webp" /></a></li>
                <li><a data-target="#pic-2" data-toggle="tab"><img src="<?= asset_url() ?>images/standard_room_img_new_2.webp" /></a></li>
                <li><a data-target="#pic-3" data-toggle="tab"><img src="<?= asset_url() ?>images/standard_room_img_new_3.webp" /></a></li>
                <li><a data-target="#pic-4" data-toggle="tab"><img src="<?= asset_url() ?>images/standard_room_img_new_4.webp" /></a></li>
                <li><a data-target="#pic-5" data-toggle="tab"><img src="<?= asset_url() ?>images/rooms/Standard-bathroom_1_.webp" /></a></li>

            </ul>

        </div>

        <div class="details col-md-7">

            <div class="acc-box"><!--Accomodation Box-->

                <div class="acc-desc-2">

                    <div class="big-txt">Standard King Room</div>

                    <p> 1-Bed 2-Guests</p>

                    <div class="room-stats">

                        <div class="rm-stat"><span class="fa fa-bed"></span> 1-Bed</div>

                        <div class="rm-stat"><span style=" color: #d49136; " class="fa fa-group"></span> 2-guests</div>

                        <div class="rm-stat"><span class="fa fa-bathtub"></span> 1-Bathroom</div>

                    </div>

                    <p>Indulge in comfort and style in our Standard King Room, where luxury meets affordability. Nestled in the heart of our 4-star Fiora Hotel, this room offers you a peaceful retreat with a beautiful, plush bed that promises a restful night's sleep.</p>

                    <p>Experience a harmonious blend of elegance and functionality in our Standard King Room – your ideal choice for a memorable stay in our 4-star haven.</p>

                    <div class="rm-price"><span class="disc-price">Rs 24,000</span> <span style="color: red;">Rs 12,000 </span></div>

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

                <p>In standard king room we have one seat sofa, and King size bed its specious in size, also we can adjust extra mattress in it 3 person can also accommodate with extra mattress.</p>

            </div>

            <div class="rm-features-head"><span class="fa fa-bath"></span> 1-Bathroom</div>

            <div class="rm-features-desc">

                <p>Step into your ensuite bathroom, featuring a rejuvenating shower and modern amenities to elevate your stay. Freshen up and prepare for your day in style.</p>

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

                <p>Stay connected with high-speed internet, and enjoy the convenience of room service whenever you desire. Our central heating system ensures your comfort in any season, while fresh air ducts guarantee a breath of revitalizing air. For your peace of mind, we provide a state-of-the-art digital locker, keeping your valuables secure throughout your stay.</p>

            </div>

            <div class="rm-features-head"><span class="fa fa-mug-saucer"></span> Extras</div>

            <div class="rm-features-desc">


                <p>A Complementary Breakfast</p>
                <p>Gym is Complementary with this Room</p>
                <p>No pets are allowed</p>

            </div>

            <div class="rm-features-head"><span class="fa fa-person-hiking"></span> Suitable-For</div>

            <div class="rm-features-desc">

                <p>Couples or groups of friends travelling together.</p>

            </div>

        </div>

        <div class="col-md-4">

            <?php
            $data['rid'] = 6;
            $this->load->view('includes/make_reserervation.php', $data);
            ?>

        </div>

    </div>

</div>


<!--Footer-->