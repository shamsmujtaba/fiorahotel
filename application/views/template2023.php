<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>
        <?= $title ?>
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content=" <?= $description ?>" />
    <link rel="canonical" href="<?=get_canonialTag() ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="follow, index">
    <link rel="stylesheet" type="text/css" href="<?= asset_url() ?>css/bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="<?= asset_url() ?>css/style.css" />
    <link rel="stylesheet" type="text/css" href="<?= asset_url() ?>css/custom-timer.css">
    <link rel="stylesheet" type="text/css" href="<?= asset_url() ?>css/custom.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="icon" type="image/x-icon" href="<?= asset_url() ?>images/favicon.png">
    <meta property="og:image" content="<?= asset_url() ?>images/new-logo.png" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Fiora Hotel:: Hotel Booking in Murree" />
    <meta property="og:description" content="Experience luxury and serenity at Fiora Hotel. Impeccable service and serene ambiance await. Book now for an unforgettable stay." />

    <meta property="og:url" content="https://fiorahotel.com/" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Marcellus&display=swap" rel="stylesheet">
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css'>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700&display=swap" rel="stylesheet">

    <!-- Perfect-DateTimePicker CSS -->
    <link rel="stylesheet" type="text/css" href="css/jquery.datetimepicker.css" />

    <link rel="stylesheet" type="text/css" href="<?= asset_url() ?>css/slick.css">
    <link rel="stylesheet" type="text/css" href="<?= asset_url() ?>css/slick-theme.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <link rel="stylesheet" href="<?= asset_url() ?>swipebox-master/src/css/swipebox.css">

    <style>
        .error-message {
            color: red;
        }

        #swipebox-overlay {
            z-index: 99999999999 !important;
            background: #0d0d0dbd !important;
        }


        label span {
            color: red;
        }

        input[type=number]::-webkit-inner-spin-button,
        input[type=number]::-webkit-outer-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        input[type=number] {
            -moz-appearance: textfield;
        }

        html {
            scroll-behavior: smooth;
        }
    </style>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" type="text/css" href="<?= asset_url() ?>swiper/swiper.css" />

</head>

<body>

    <?php $this->load->view('header'); ?>
    <?= $content ?>
    <?php $this->load->view('footer'); ?>



    <!-- $footer -->

    <!--Footer-->
    <script>
        var base_url = '<?= base_url(); ?>';
    </script>

    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="<?= asset_url() ?>js/jquery-3.1.1.js"></script>

    <!-- Perfect-DateTimePicker JS -->
    <script type="text/javascript" src="src/jquery.datetimepicker.js"></script>

    <script src="<?= asset_url() ?>js/bootstrap.js"></script>
    <script src="<?= asset_url() ?>js/jquery.vide.js"></script>
    <script src="<?= asset_url() ?>js/scrolltopcontrol.js"></script>
    <script src="<?= asset_url() ?>js/ddaccordion.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <script src="<?= asset_url() ?>swipebox-master/src/js/jquery.swipebox.js"></script>
    <script type="text/javascript">
        ;
        (function($) {

            $('.swipebox').swipebox();

        })(jQuery);

        ;
        (function($) {
            $('.swipebox').swipebox({
                useCSS: true, // false will force the use of jQuery for animations
                useSVG: true, // false to force the use of png for buttons
                initialIndexOnArray: 0, // which image index to init when a array is passed
                hideCloseButtonOnMobile: false, // true will hide the close button on mobile devices
                removeBarsOnMobile: true, // false will show top bar on mobile devices
                hideBarsDelay: 3000, // delay before hiding bars on desktop
                videoMaxWidth: 1140, // videos max width
                beforeOpen: function() {}, // called before opening
                afterOpen: null, // called after opening
                afterClose: function() {}, // called after closing
                loopAtEnd: false // true will return to the first image after the last image is reached
            });
        })(jQuery);
    </script>
    <script>
        $(document).ready(function() {
            $('.accomodation-box').slick({
                slidesToShow: 3,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 3000,
                arrows: false,
                dots: true,
                pauseOnHover: true,
                responsive: [{
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 1
                    }
                }, {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }]
            });
        });
    </script>

    <script>
        $(document).ready(function() {
            $('.testim-box').slick({
                slidesToShow: 2,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 3000,
                arrows: false,
                dots: true,
                pauseOnHover: true,
                responsive: [{
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 2
                    }
                }, {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }]
            });
        });

        flatpickr('.datepicker', {
            dateFormat: "d-m-Y",
            minDate: "today",
            disableMobile: "true"
        });
    </script>

    <script>
        var a = 0;
        $(window).scroll(function() {

            var oTop = $('#counter').offset().top - window.innerHeight;
            if (a == 0 && $(window).scrollTop() > oTop) {
                $('.counter-value').each(function() {
                    var $this = $(this),
                        countTo = $this.attr('data-count');
                    $({
                        countNum: $this.text()
                    }).animate({
                            countNum: countTo
                        },

                        {

                            duration: 2000,
                            easing: 'swing',
                            step: function() {
                                $this.text(Math.floor(this.countNum));
                            },
                            complete: function() {
                                $this.text(this.countNum);
                                //alert('finished');
                            }

                        });
                });
                a = 1;
            }

        });
    </script>

    <script>
        $(document).ready(function() {

            $(".filter-button").click(function() {
                var value = $(this).attr('data-filter');

                if (value == "all") {
                    //$('.filter').removeClass('hidden');
                    $('.filter').show('1000');
                } else {
                    //            $('.filter[filter-item="'+value+'"]').removeClass('hidden');
                    //            $(".filter").not('.filter[filter-item="'+value+'"]').addClass('hidden');
                    $(".filter").not('.' + value).hide('3000');
                    $('.filter').filter('.' + value).show('3000');

                }
            });

            if ($(".filter-button").removeClass("active")) {
                $(this).removeClass("active");
            }
            $(this).addClass("active");

        });
    </script>

    <script>
        $(function() {
            $(".abb").slice(0, 3).show();
            $("#load").click(function(e) {
                e.preventDefault();
                $(".abb:hidden").slice(0, 3).show();
                if ($(".abb:hidden").length == 0) {
                    event.target.style.display = 'none';
                }
            });
        });
    </script>

    <script>
        $('[data-toggle="slide-collapse"]').on('click', function() {
            $navMenuCont = $($(this).data('target'));
            $navMenuCont.animate({
                'width': 'toggle'
            }, 350);
            $(".menu-overlay").fadeIn(500);

        });
        $(".menu-overlay").click(function(event) {
            $(".navbar-toggle").trigger("click");
            $(".menu-overlay").fadeOut(500);
        });
    </script>

    <script>
        window.onscroll = function() {
            myFunction()
        };

        var header = document.getElementById("myHeader");
        var sticky = header.offsetTop;

        function myFunction() {
            if (window.pageYOffset > sticky) {
                header.classList.add("sticky");
            } else {
                header.classList.remove("sticky");
            }
        }
    </script>


    <script type="text/javascript">
        ddaccordion.init({
            headerclass: "submenuheader", //Shared CSS class name of headers group
            contentclass: "submenu", //Shared CSS class name of contents group
            revealtype: "click", //Reveal content when user clicks or onmouseover the header? Valid value: "click", "clickgo", or "mouseover"
            mouseoverdelay: 200, //if revealtype="mouseover", set delay in milliseconds before header expands onMouseover
            collapseprev: true, //Collapse previous content (so only one open at any time)? true/false 
            defaultexpanded: [], //index of content(s) open by default [index1, index2, etc] [] denotes no content
            onemustopen: false, //Specify whether at least one header should be open always (so never all headers closed)
            animatedefault: false, //Should contents open by default be animated into view?
            persiststate: true, //persist state of opened contents within browser session?
            toggleclass: ["", ""], //Two CSS classes to be applied to the header when it's collapsed and expanded, respectively ["class1", "class2"]
            togglehtml: ["suffix", "<img src='<?= asset_url() ?>images/plus.svg' class='statusicon' />", "<img src='<?= asset_url() ?>images/minus.svg' class='statusicon' />"], //Additional HTML added to the header when it's collapsed and expanded, respectively  ["position", "html1", "html2"] (see docs)
            animatespeed: "fast", //speed of animation: integer in milliseconds (ie: 200), or keywords "fast", "normal", or "slow"
            oninit: function(headers, expandedindices) { //custom code to run when headers have initalized
                //do nothing
            },
            onopenclose: function(header, index, state, isuseractivated) { //custom code to run whenever a header is opened or closed
                //do nothing
            }
        })
    </script>


    <script>
        $(document).ready(function() {
            $('.abt-sl').slick({
                slidesToShow: 1,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 20000,
                arrows: false,
                dots: true,
                pauseOnHover: true,
                responsive: [{
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 1
                    }
                }, {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }]
            });
        });
    </script>


    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
        var Tawk_API = Tawk_API || {},
            Tawk_LoadStart = new Date();
        (function() {
            var s1 = document.createElement("script"),
                s0 = document.getElementsByTagName("script")[0];
            s1.async = true;
            s1.src = 'https://embed.tawk.to/651f8e59eb150b3fb99e9dbd/1hc1k83jv';
            s1.charset = 'UTF-8';
            s1.setAttribute('crossorigin', '*');
            s0.parentNode.insertBefore(s1, s0);
        })();
    </script>

    <!-- Your JavaScript code for the timer -->
    <script>
        $(document).ready(function() {
            // Timer for showing the popup after 2 seconds


            if ($(window).width() > 767) {
                // Timer for showing the popup after 10 seconds
                setTimeout(function() {
                    // Show the popup by adding the "show-popup" class and setting display to "block"
                    $('#pop-up').addClass('show-popup').css('display', 'block');
                }, 60000); // 60000 milliseconds = 1 min
            }

            $('.pop-close').on('click', function() {
                // Add the "hide-popup" class to trigger the fade-out animation
                $('#pop-up').addClass('hide-popup');

                // After a delay to allow the animation to complete, remove the popup from the DOM
                setTimeout(function() {
                    $('#pop-up').remove();
                }, 500); // Adjust the delay as needed to match the animation duration
            });


            // Timer for the popup
            var second = 1000;
            var minute = 60 * second;
            var hour = 60 * minute;
            // Set the initial time for the timer (1 hour, 50 minutes, and 59 seconds)
            var popupCountDown = new Date().getTime() + (12 * hour) + (50 * minute) + (59 * second);
            var popupTimer = setInterval(function() {
                var now = new Date().getTime();
                var distance = popupCountDown - now;
                if (distance < 1000) {
                    clearInterval(popupTimer);
                    // Handle the action when the timer expires, for example, close the popup or take some other action.
                    // You can add your code here.
                } else {
                    function updateInnerTextByClassName(className, value) {
                        var elements = document.getElementsByClassName(className);
                        for (var i = 0; i < elements.length; i++) {
                            elements[i].innerText = value;
                        }
                    }

                    // Calculate the values
                    var hours_m = Math.floor(distance / hour);
                    var minutes_m = Math.floor((distance % hour) / minute);
                    var seconds_m = Math.floor((distance % minute) / second);

                    // Update elements with class names
                    updateInnerTextByClassName('hours_m', hours_m);
                    updateInnerTextByClassName('minutes_m', minutes_m);
                    updateInnerTextByClassName('seconds_m', seconds_m);
                }
            }, second);
        });
    </script>

    <!--End of Tawk.to Script-->


    <!-- --------------Js gallery lightbox--------- -->


    <script>
        // JS available on https://github.com/colinlohner/FSM-JS

        //Setup
        var fsmActual = document.createElement("div");
        fsmActual.setAttribute("id", "fsm_actual");
        document.body.appendChild(fsmActual);
        // var $fsm = document.querySelectorAll(".fsm");
        var $fsmActual = document.querySelector("#fsm_actual");
        $fsmActual.style.position = "absolute";

        var position = {};
        var size = {};

        //modal action stuffs
        var openFSM = function(event) {
            var $this = event.currentTarget;
            position = $this.getBoundingClientRect();
            size = {
                width: window.getComputedStyle($this).width,
                height: window.getComputedStyle($this).height,
            };

            $fsmActual.style.position = "absolute";
            $fsmActual.style.top = position.top + "px";
            $fsmActual.style.left = position.left + "px";
            $fsmActual.style.height = size.height;
            $fsmActual.style.width = size.width;
            $fsmActual.style.margin = $this.style.margin;

            setTimeout(function() {
                $fsmActual.innerHTML = $this.innerHTML;
                var classes = $this.classList.value.split(" ");
                for (var i = 0; i < classes.length; i++) {
                    $fsmActual.classList.add(classes[i]);
                }
                $fsmActual.classList.add("growing");
                $fsmActual.style.height = "100vh";
                $fsmActual.style.width = "100vw";
                $fsmActual.style.top = "0";
                $fsmActual.style.left = "0";
                $fsmActual.style.margin = "0";
            }, 1);

            setTimeout(function() {
                $fsmActual.classList.remove("growing");
                $fsmActual.classList.add("full-screen");
            }, 1000);
        };

        var closeFSM = function(event) {
            var $this = event.currentTarget;

            $this.style.height = size.height;
            $this.style.width = size.width;
            $this.style.top = position.top + "px";
            $this.style.left = position.left + "px";
            $this.style.margin = "0";
            $this.classList.remove("full-screen");
            $this.classList.add("shrinking");

            setTimeout(function() {
                while ($this.firstChild) $this.removeChild($this.firstChild);
                var classList = $this.classList;
                while (classList.length > 0) {
                    classList.remove(classList.item(0));
                }
                $this.style = "";
            }, 1000);
        };

        for (var i = 0; i < $fsm.length; i++) {
            $fsm[i].addEventListener("click", openFSM);
        }
        $fsmActual.addEventListener("click", closeFSM);
    </script>

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="<?= asset_url() ?>swiper/swiper.js"></script>
</body>

</html>