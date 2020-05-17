<!--Contact Section Start-->
<section id="contact" class="contact-section pt-page">
    <div class="section-container">

        <!--Page Heading-->
        <div class="page-heading">
            <span class="icon"><i class="lnr lnr-envelope"></i></span>
            <h2>Contact Me.</h2>
        </div>

        <!--Form Row-->
        <div class="row mb-70">
            <div class="col-lg-8  offset-lg-2">
                <div class="subheading">
                    <h3>Let's Talk</h3>
                </div>

                <!--Form Start-->
                <form id="contact-form" method="post" action="https://watson-vcard.netlify.com/mail.php">
                    <div class="row">


                        <!--Name Field-->
                        <div class="col-md-6 mb-50">
                            <span class="input">
                                <input class="input__field cf-validate" type="text" id="cf-name" name="name" />
                                <label class="input__label" for="cf-name">Name</label>
                            </span>
                        </div>

                        <!--Email Field-->
                        <div class="col-md-6 mb-50">
                            <span class="input">
                                <input class="input__field cf-validate" type="text" id="cf-email" name="email" />
                                <label class="input__label" for="cf-email">Email</label>
                            </span>
                        </div>

                        <!--Message Box-->
                        <div class="col-md-12 mb-30">
                            <span class="input">
                                <textarea  class="input__field cf-validate" id="cf-message" name="message" rows="5" ></textarea>
                                <label class="input__label" for="cf-message">How can we help you?</label>
                            </span>
                        </div>

                        <div class="alert-container col-md-12"></div>

                        <!--Submit Button-->
                        <div class="col-md-12 text-center">
                            <button id="cf-submit" class="btn-main">Send Message</button>
                        </div>


                    </div>
                </form>
                <!--Form End-->

            </div>
        </div>

        <!--Contact Info Row Start-->
        <div class="row contact-info mb-70">

            <!--Contact Info Item-->
            <div class="col-md-4 info-item">
                <span class="icon"><i class="fas fa-paper-plane"></i></span>
                <h5><a href="mailto:example@example.com">example@example.com</a></h5>
            </div>

            <!--Contact Info Item-->
            <div class="col-md-4 info-item">
                <span class="icon"><i class="fas fa-map-marker-alt"></i></span>
                <h5>123 Lorem Ipsum, USA</h5>
            </div>

            <!--Contact Info Item-->
            <div class="col-md-4 info-item">
                <span class="icon"><i class="fas fa-phone"></i></span>
                <h5>(+1) 123 456 7890</h5>
            </div>

        </div>
        <!--Contact Info Row End-->

    </div>
    <!--Google Map Start-->
    <div class="google-map">
        <div id="map" data-latitude="-37.817214" data-longitude="144.955925" data-zoom="15"></div>
    </div>
    <!--Google Map End-->
</section>
<!--Contact Section End-->