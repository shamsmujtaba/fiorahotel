<style>
  /* Add 3D text effect to the "3D" link */
  .nav-item-3d a {
    text-decoration: none;
    color: #007bff;
    /* Link color */
    font-size: 24px;
    font-weight: bold;
    text-transform: uppercase;
    letter-spacing: 2px;
    position: relative;
    display: inline-block;
    transition: color 0.3s;
  }

  .nav-item-3d a::before {
    content: attr(data-text);
    position: absolute;
    top: 10px;
    left: 16px;
    z-index: -1;
    color: #000;
    text-transform: uppercase;
    letter-spacing: 2px;
  }

  .nav-item-3d a:hover {
    color: #0056b3;
    /* Hover color */
  }
</style>
<div class=" top-navbar">

  <div class="container-fluid">

    <div class="row">

      <div class="col-md-3 text-center col-12" style="margin-top: 2px;">

        <div class="row mbd-none">

          <div class="col-md-12 text-end text-white">

            <a href="javascript:void(Tawk_API.toggle())" class="top-link-1 mx-3"> <span class="text-white">

                <i class="fa fa-comments-o topbar_ico" aria-hidden="true">
                </i>&nbsp; Personal Live Chat</span></a>

            <a href="mailto:info@fiorahotel.com" class="top-link-1 ">
              <span class="text-white mx-2">
                <i class="fa fa-envelope-o topbar_ico" aria-hidden="true"></i> &nbsp; info@fiorahotel.com </span>
            </a>

          </div>
        </div>

      </div>
      

      <div class="col-md-6 col-12 text-center d-flex align-items-center justify-content-center" style="margin-top: 2px;">
        <span class="topbar-badge badge-anim mx-2"><a class="offers_a " href="tel:+92 311 1134672"><span class="fa fa-phone"></span> +92 311 1134672
          </a></span>

        <a href="https://api.whatsapp.com/send?phone=923111134672"> <span class="text-white">
            <img src="<?= asset_url() ?>images/wt2.png" alt=""> +92 311 1134672
          </span> </a>

        <span class="topbar-badge blink-soft mx-2"><a class="offers_a " href="">50% Discount on All Rooms
          </a></span>
      </div>

      <div class="col-md-3 d-flex align-items-center">

        <div class="row mbd-none">

          <div class="col-md-12">

            <div class="social-icon-alignment" style="z-index:9999999999;">
              <a href="https://www.facebook.com/fiorahotel1"> <i class="fa fa-facebook-f topbar_ico top-bar-social-icon padding-t"></i></a>

              <a href="https://www.instagram.com/fiorahotel"> <i class="fa fa-instagram topbar_ico top-bar-social-icon padding-t"></i></a>
              <a href="https://x.com/fiorahotel1"> <i class="fa fa-twitter topbar_ico top-bar-social-icon padding-t"> </i></a>
              <a href="https://www.tiktok.com/@fiorahotel1?_t=8g4cme2WWpD&_r=1"><i class="bi bi-tiktok topbar_ico top-bar-social-icon"> </i></a>
            </div>

          </div>

        </div>

      </div>

    </div>

  </div>
  <!-- 
      <div class="col-md-6">


      </div> -->

</div>

<!--</div>-->

<!--</div>-->


<!-- ----------mobile Top bar------------ -->

<div class=" top-navbar top-navbar-mobile d-none">

  <div class="container-fluid">

    <div class="row">

      <div class="col-md-3 text-center">

        <div class="mbd-none">

          <div class="row text-end text-white">


            <div class="col-xs-3 px-0">

              <a href="javascript:void(Tawk_API.toggle())" class="top-link-1 mx-0"> <span class="text-white">

                  <i class="fa fa-comments-o topbar_ico" aria-hidden="true">
                  </i>&nbsp; Live Chat</span></a>
            </div>

            <div class="col-xs-5 px-0">


              <a href="mailto:info@fiorahotel.com" class="top-link-1 ">
                <span class="text-white">
                  <i class="fa fa-envelope-o topbar_ico" aria-hidden="true"></i> &nbsp; info@fiorahotel.com </span>
              </a>

            </div>

            <div class="col-xs-4 px-0">

              <a href="https://api.whatsapp.com/send?phone=923111134672" class="top-link-1"> <span class="text-white">
                  <img src="<?= asset_url() ?>images/wt2.png" alt=""> +92 311 1134672
                </span> </a>

            </div>

          </div>
        </div>

      </div>

      <div class="col-md-5 col-12 text-center d-flex align-items-center justify-content-center my-2">
        <!--<span class="topbar-badge badge-anim mx-2"><a class="offers_a" href="">Pay 50% Upfront 50% Later-->
        <!--  </a></span>-->
        <!-- <span class="topbar-badge badge-anim mx-2"><a class="offers_a " href="tel:+92 311 1134672"><span class="fa fa-phone"></span> +92 311 1134672
          </a></span> -->

        <span class="topbar-badge blink-soft mx-2"><a class="offers_a" href="">50% Discount on All Rooms</a></span>
      </div>

      <div class="col-md-4">

        <div class="row mbd-none">

          <div class="col-md-12 px-0">

            <div class="social-icon-alignment">

              <a href="https://www.facebook.com/fiorahotel1"> <i class="fa fa-facebook-f topbar_ico top-bar-social-icon padding-t"></i></a>

              <a href="https://www.instagram.com/fiorahotel"><i class="fa fa-instagram topbar_ico top-bar-social-icon padding-t"></i></a>


              <a href="https://x.com/fiorahotel1"><i class="fa fa-twitter topbar_ico top-bar-social-icon padding-t">
                </i></a>

              <a href="https://www.tiktok.com/@fiorahotel1?_t=8g4cme2WWpD&_r=1"><i class="bi bi-tiktok topbar_ico top-bar-social-icon"> </i></a>
            </div>



          </div>


        </div>

      </div>
      <!-- 
<div class="col-md-6">


</div> -->

    </div>

  </div>

</div>


<div class="container-fluid head" id="myHeader">

  <div class="container">

    <div class="row">

      <div class="head-collapse">
        <!--Mobile View Menu-->

        <div class="col-xs-8">
          <div class="m-logo"><a href="<?= base_url() ?>"><img src="<?= asset_url() ?>images/logo.webp" class="img-responsive" /></a></div>
        </div>

        <div class="col-xs-4">

          <div class="container-fluid burger">

            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="slide-collapse" data-target="#slide-navbar-collapse" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="fa fa-bars"></span>
              </button>

            </div>

          </div>

        </div>

        <div class="clearfix"></div>

      </div><!--Mobile View Menu-->

    </div>

    <div class="row logo-container">

      <div class="col-md-2">
        <div class="logo"><a href="<?= base_url() ?>"><img src="<?= asset_url() ?>images/logo.webp" /></a></div>
      </div>

      <div class="col-md-10 menu"><!--Main Navigation Start-->

        <nav class="navbar navbar-default navbar-right">
          <div class="container-fluid">

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="slide-navbar-collapse">

              <div class="logo-2"><img src="<?= asset_url() ?>images/logo.webp" class="img-responsive" style=" max-width: 63%; " /></div>
              <ul class="nav navbar-nav">
                <li><a href="<?= base_url() ?>">Home</a></li>
                <li><a href="<?= base_url() ?>all-rooms">Rooms</a></li>
                <li><a href="<?= base_url() ?>blog">Blogs</a></li>
                <li><a href="<?= base_url() ?>faqs">FAQs</a></li>
                <li><a href="<?= base_url() ?>gallery">Gallery</a></li>
                <li><a href="<?= base_url() ?>contact">Contact Us</a></li>
                <li class="nav-item-3d"><a target="_blank" href="https://3d.fiorahotel.com/" data-text="3D">3D</a></li>

                <li class="fireworks"><a href="<?= base_url() ?>google-reviews">Reviews</a></li>
                <div class="bn-btn">
                  <li><a href="https://hotel4u.pk/fioramurree/">Book Now</a></li>
                </div>
              </ul>
            </div><!-- /.navbar-collapse -->
          </div><!-- /.container-fluid -->
        </nav>

        <div class="menu-overlay"> &nbsp;</div>

      </div><!--Main Navigation End-->

    </div>

  </div>

</div>