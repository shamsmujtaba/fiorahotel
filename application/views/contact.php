<div class="container-fluid head-3">

    <div class="container">

        <div class="row">

            <div class="col-md-12">
                <h1>Contact Us</h1>
            </div>

        </div>

    </div>

</div>

<div id="block" class="inner-header"></div>

<!---->

<div class="container content-ptb">

    <div class="row">

        <div class="col-md-12">

            <div class="sec-title-con mobile-center">Feel free to drop us a message</div>

        </div>

    </div>

    <div class="row">

        <div class="col-md-8">

            <div class="grey-box">

                <form class="contact-form" method="post" action="<?= base_url() ?>contact">
                    <div class="col-md-6 p-row">
                        <label for="first_name">Full Name<span>*</span></label>
                        <input type="text" class="form-control" id="first_name" placeholder="Full Name" name="first_name">
                        <span class="error-message"></span>
                    </div>
                    <div class="col-md-6 p-row">
                        <label for="phone">Phone<span>*</span></label>
                        <input onkeypress="if(this.value.length==12) return false;" type="number" class="form-control" id="phone" placeholder="ex. 03001234567" name="phone">
                        <span class="error-message"></span>
                    </div>
                    <div class="col-md-12 p-row">
                        <label for="phone">Email<span></span></label>
                        <input type="text" class="form-control" id="" placeholder="Email" name="email">
                        <span class="error-message"></span>
                    </div>
                    <div class="col-md-12 p-row">
                        <label for="message">Message<span>*</span></label>
                        <input type="text" class="form-control" id="message" placeholder="Message" name="message">
                        <span class="error-message"></span>
                    </div>
                    <!-- <div class="col-md-8">
                        <div class="g-recaptcha" data-sitekey="<?php echo $this->config->item('google_key') ?>"></div>
                        <span class="error-message recaptcha-error"></span>
                    </div> -->

                    <div class="col-md-8">
                        <div class="g-recaptcha" data-sitekey="<?php echo $this->config->item('google_key') ?>" style="transform:scale(0.9); transform-origin:0 0;"></div>
                        <span class="error-message recaptcha-error"></span>
                    </div>


                    <div class="col-md-4">
                        <div class="mobile-center" style="text-align:right;"><button type="submit" class="submit-btn">Send</button></div>
                    </div>

                    <div class="clearfix"></div>

                </form>

            </div>

        </div>

        <div class="col-md-4">

            <div class="gl-box">

                <div class="con-title"><span class="fa fa-map-marker"></span> Address</div>

                <div class="con-desc">Kashmir point, Plot 29B Viewforth Rd, Murree, Rawalpindi, Khyber Pakhtunkhwa 47150</div>

            </div>
            <!-- <div class="gl-box">

                <div class="con-title"><a style="color:white" href="https://wa.me/+923111134672">
                <span class="fa fa-whatsapp"></span> Whatsapp</a></div>

            </div> -->
            <div class="gl-box">

                <div class="con-title"> Contact Number</div>

                <div class="con-desc"> <span class="fa fa-phone"></span><a href="tel:+923111134672">+92 311 1134672</a></div>

                <div class="con-desc"> <span class="fa fa-whatsapp"></span><a href="https://wa.me/+923111134672">Whatsapp</a></div>


            </div>



            <div class="gl-box">

                <div class="con-title"><span class="fa fa-paper-plane"></span> Email</div>

                <div class="con-desc"><a href="mailto:info@fiorahotel.com">info@fiorahotel.com</a></div>

            </div>

        </div>

    </div>

</div>

<section>
    <div class="row">
        <div class="col-md-12 text-center">
            <h2>Find Fiora on the Map, Your Murree Adventure Awaits</h2><br>
            <iframe class="embed-responsive-item" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3311.310948311873!2d73.39901547487963!3d33.907395825366216!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38dfd749f22fdb69%3A0x48b2bcb25364709f!2sFiora%20Hotel!5e0!3m2!1sen!2s!4v1696880424446!5m2!1sen!2s" width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

        </div>
    </div>
</section>


<!---->

<!--Footer-->
<script>
    document.addEventListener("DOMContentLoaded", function() {
        document.querySelector("form.contact-form").addEventListener("submit", function(event) {
            const firstNameInput = document.querySelector("input[name='first_name']");
            const phoneInput = document.querySelector("input[name='phone']");
            const messageInput = document.querySelector("input[name='message']");
            const firstNameErrorMessage = document.querySelector("input[name='first_name'] + .error-message");
            const phoneErrorMessage = document.querySelector("input[name='phone'] + .error-message");
            const messageErrorMessage = document.querySelector("input[name='message'] + .error-message");


            if (firstNameInput.value.trim() === "") {
                firstNameErrorMessage.textContent = "Full Name is required";
                event.preventDefault();
            } else {
                firstNameErrorMessage.textContent = "";
            }

            if (phoneInput.value.trim() === "") {
                phoneErrorMessage.textContent = "Phone is required";
                event.preventDefault();
            } else {
                phoneErrorMessage.textContent = "";
            }

            if (messageInput.value.trim() === "") {
                messageErrorMessage.textContent = "Message field is required";
                event.preventDefault();
            } else {
                messageErrorMessage.textContent = "";
            }

            const recaptchaError = document.querySelector(".recaptcha-error");
            const recaptchaResponse = grecaptcha.getResponse();

            if (recaptchaResponse === "") {
                recaptchaError.textContent = "Please complete the reCAPTCHA.";
                event.preventDefault();
            } else {
                recaptchaError.textContent = "";
            }
        });
    });
</script>