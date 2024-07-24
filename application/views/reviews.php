<div class="container-fluid head-3">

    <div class="container">

        <div class="row">

            <div class="col-md-12">
                <h1>Our Reviews</h1>
            </div>

        </div>

    </div>

</div>

<div id="block" class="inner-header"></div>

<!---->
<div style="padding-bottom:20px;" class="container-fluid test-bgg" id="reviews">

    <div class="container">

        <div style="border-bottom-right-radius: 80px 80px; border: 2px solid #d89e52; border-bottom-left-radius: 80px 80px; background-color: #d89e52;" class="row">

            <div class="col-md-12">

                <div class="sec-title-wt">Google Reviews Of Real Guest Experiences</div>

            </div>

        </div>

        <div class="row">
            <div style="display: flex; justify-content: center; align-items: center; margin: 20px" class="col-10">
                <span style="color:green; font-size:x-large">
                    <?php echo $this->session->flashdata('message'); ?>
                </span>
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

                                <div style="heightt:165px;" class="test-box">
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
                    <?php } ?>

                </section>

                <section>

                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="bn-btn " style=" display: flex; justify-content: center; ">
                                    <a style=" color: #ffffff; background: #d49136; " href="<?= base_url() ?>add-a-reviews" target="_blank" rel="noopener noreferrer">Add a Review</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </section>

            </div>

        </div>

    </div>

</div>