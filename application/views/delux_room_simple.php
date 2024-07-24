<div class="container-fluid head-3">

    <div class="container">

        <div class="row">

            <div class="col-md-12">
                <h1>DELUXE Room</h1>
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
                <div class="tab-pane active" id="pic-1"><img src="<?= asset_url() ?>images/rooms/deluxe_room_simple_img_1.webp" /></div>
                <div class="tab-pane " id="pic-2"><img src="<?= asset_url() ?>images/rooms/deluxe_room_simple_img_2.webp" /></div>
                <div class="tab-pane " id="pic-3"><img src="<?= asset_url() ?>images/rooms/deluxe_room_simple_img_3.webp" /></div>



            </div>
            <ul class="preview-thumbnail nav nav-tabs">
                <li class="active"><a data-target="#pic-1" data-toggle="tab"><img src="<?= asset_url() ?>images/rooms/deluxe_room_simple_img_1.webp" /></a></li>
                <li class=""><a data-target="#pic-2" data-toggle="tab"><img src="<?= asset_url() ?>images/rooms/deluxe_room_simple_img_2.webp" /></a></li>
                <li class=""><a data-target="#pic-3" data-toggle="tab"><img src="<?= asset_url() ?>images/rooms/deluxe_room_simple_img_3.webp" /></a></li>



            </ul>

        </div>

        <div class="details col-md-7">

            <div class="acc-box"><!--Accomodation Box-->

                <div class="acc-desc-2">

                    <div class="big-txt">DELUXE Room</div>

                    <p>Great Mountain View / 2 Guests</p>

                    <div class="room-stats">

                        <div class="rm-stat"><span class="fa fa-bed"></span> 1 Bed King Size Valley View
                        </div>

                        <div class="rm-stat"><span style=" color: #d49136; " class="fa fa-group"></span> 2-guests</div>

                        <div class="rm-stat"><span class="fa fa-bathtub"></span> 1-Bathroom</div>

                    </div>

                    <p>Indulge in sheer luxury within our spacious Deluxe King Room. Open the doors to your charming private terrace and soak in breathtaking views.</p>
                    <p>Enjoy the comfort of two cozy sofas within the room while relishing the beauty of your personal outdoor space. With a capacity for two individuals, and the flexibility to accommodate a third with an extra mattress, immerse yourself in comfort and elegance.</p>
                    <div class="rm-price"> <span class="disc-price"> Rs 30,000</span><span style="color: red;"> Rs 15,000 </span> </div>

                </div>

            </div><!--Accomodation Box-->

        </div>
    </div>

</div>

<!---->

<div class="container content-pb">

    <div class="row">

        <div class="col-md-8">

            <div class="rm-features-head"><span class="fa fa-bed"></span>1 Bed King size Valley View</div>

            <div class="rm-features-desc">

                <p>One king-sized bed for a couple, providing a luxurious sleeping experience.</p>

            </div>

            <div class="rm-features-head"><span class="fa fa-bath"></span> 1-Bathroom</div>

            <div class="rm-features-desc">

                <p>Enjoy a sumptuous bed and a stylish ensuite bathroom with a shower.</p>

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

                <p>"Stay connected with room service, high-speed internet, and a 55-inch media TV. Rest easy with a digital locker and access to our gym. Cap off your day at our beautiful rooftop restaurant."</p>

            </div>

            <div class="rm-features-head"><span class="fa fa-mug-saucer"></span> Extras</div>

            <div class="rm-features-desc">

                <p>A safe and a balcony with a view.</p>
                <p>A Complementary Breakfast</p>
                <p>Gym is Complementary with this Deluxe King Room</p>


            </div>

            <div class="rm-features-head"><span class="fa fa-person-hiking"></span> Suitable-For</div>

            <div class="rm-features-desc">

                <p>Couples or groups of friends traveling together.</p>

            </div>

        </div>

        <div class="col-md-4">

            <?php
            $data['rid'] = 10;
            $this->load->view('includes/make_reserervation.php', $data);
            ?>
        </div>

    </div>

</div>

<!--Footer-->