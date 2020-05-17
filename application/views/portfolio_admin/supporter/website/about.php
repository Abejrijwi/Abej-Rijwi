<!--About Section Start-->
<section id="about" class="about-section pt-page">
    <div class="section-container">
        <!--Page Heading-->
        <div class="page-heading">
            <span class="icon"><i class="lnr lnr-user"></i></span>
            <h2>About Me.</h2>
        </div>

        <!-- About Info Row Start-->
        <div class="row about mb-50">

            <div class="col-lg-12" style="text-align: center">
                <!--Personal Intro-->
                <h2 class="mb-20" style="text-transform: capitalize;"><?php echo $query->employee_designation ?></h2>
            </div>
            <div class="col-lg-12">
                <p>Dolor reprehenderit aut repudiandae maiores recusandae. Consequatur dolor nisi labore commodi ipsa? Excepturi velit laboriosam at voluptatibus cupiditate est vel. Dolorem praesentium itaque fugiat placeat quas consequatur? Obcaecati natus rerum</p>
                <p>Consectetur consectetur nesciunt nesciunt blanditiis amet? Quod quis unde aliquid excepturi laudantium? Illo architecto aliquam velit illo magnam neque perferendis sint Incidunt eius ipsa inventore labore eos velit. Minus hic magni reiciendis necessitatibus ex Quidem officia deleniti accusamus obcaecati dolores. Porro culpa quibusdam impedit porro praesentium excepturi. Alias ab consequatur?</p>

                <!--Signature Image-->
                <div class="signature mt-20">
                    <img src="<?php echo base_url('public/img/signature-white.png'); ?>" style="width: 50%">
                </div>
            </div>
        </div>
        <!-- About Personal Info Row Start-->
        <div class="row about mb-70">

            <div class="col-lg-12 subheading" style="text-align: center">
                <h2 class="mb-20">Personal Information</h2>
            </div>
            <!--Personal Info-->
            <div class="col-md-6 mb-20">
                <label style="font-weight: bold;">Name</label>
                <input class="input__field" style="border-radius: 40px;" disabled="" value="<?php echo $query->first_name . " " . $query->last_name ?>">
            </div>
            <div class="col-md-6 mb-20">
                <label style="font-weight: bold;">Email Id</label>
                <input class="input__field" style="border-radius: 40px;" disabled="" value="<?php echo $query->email ?>">
            </div>
            <div class="col-md-6 mb-20">
                <label style="font-weight: bold;">Date Of Birth</label>
                <input class="input__field" style="border-radius: 40px;" disabled="" value="<?php echo $query->dob ?>">
            </div>
            <div class="col-md-6 mb-20">
                <label style="font-weight: bold;">Mobile Number</label>
                <input class="input__field" style="border-radius: 40px;" disabled="" value="<?php echo $query->mobile ?>">
            </div>
            <div class="col-md-6 mb-20">
                <label style="font-weight: bold;">Address</label>
                <input class="input__field" style="border-radius: 40px;" disabled="" value="<?php echo $query->address ?>">
            </div>
            <div class="col-md-6 mb-20">
                <label style="font-weight: bold;">Zip Code</label>
                <input class="input__field" style="border-radius: 40px;" disabled="" value="<?php echo $query->zipcode ?>">
            </div>
            <div class="resume-button mt-30" style="margin-left: 450px">
                <a class="btn-main" href="#">Download Resume</a>
            </div>


        </div>
        <!-- About Info Row End-->

        <!--Services Row Start-->
        <div class="row services mb-30">
            <div class="col-md-12">
                <div class="subheading">
                    <h3>Services</h3>
                </div>
            </div>

            <!--Service Item-->
            <div class="col-lg-3 col-sm-6">
                <div class="service-item">
                    <div class="icon"><i class="lnr lnr-laptop"></i></div>
                    <h4>Web Development</h4>
                    <p>Amet aspernatur delectus maxime ducimus similique Ratione asperiores corporis provident aut libero.</p>
                </div>
            </div>

            <!--Service Item-->
            <div class="col-lg-3 col-sm-6">
                <div class="service-item">
                    <div class="icon"><i class="lnr lnr-eye"></i></div>
                    <h4>Web Design</h4>
                    <p>Amet aspernatur delectus maxime ducimus similique Ratione asperiores corporis provident aut libero.</p>
                </div>
            </div>

            <!--Service Item-->
            <div class="col-lg-3 col-sm-6">
                <div class="service-item">
                    <div class="icon"><i class="lnr lnr-laptop-phone"></i></div>
                    <h4>Responsive Design</h4>
                    <p>Amet aspernatur delectus maxime ducimus similique Ratione asperiores corporis provident aut libero.</p>
                </div>
            </div>

            <!--Service Item-->
            <div class="col-lg-3 col-sm-6">
                <div class="service-item">
                    <div class="icon"><i class="lnr lnr-camera"></i></div>
                    <h4>Photography</h4>
                    <p>Amet aspernatur delectus maxime ducimus similique Ratione asperiores corporis provident aut libero.</p>
                </div>
            </div>
        </div>
        <!--Services Row End-->

        <!--Clients Row Start-->
        <div class="row clients mb-70">
            <div class="col-md-12">
                <div class="subheading">
                    <h3>Clients</h3>
                </div>
            </div>

            <div class="owl-carousel owl-theme">

                <!--Client Logo-->
                <div class="client-logo">
                    <a href="#">
                        <img src="<?php echo base_url('public/img/clients/client-01.png'); ?>" alt="">
                    </a>
                </div>

                <!--Client Logo-->
                <div class="client-logo">
                    <a href="#">
                        <img src="<?php echo base_url('public/img/clients/client-02.png') ?>" alt="">
                    </a>
                </div>

                <!--Client Logo-->
                <div class="client-logo">
                    <a href="#">
                        <img src="<?php echo base_url('public/img/clients/client-03.png') ?>" alt="">
                    </a>
                </div>

                <!--Client Logo-->
                <div class="client-logo">
                    <a href="#">
                        <img src="<?php echo base_url('public/img/clients/client-04.png') ?>" alt="">
                    </a>
                </div>

                <!--Client Logo-->
                <div class="client-logo">
                    <a href="#">
                        <img src="<?php echo base_url('public/img/clients/client-05.png') ?>" alt="">
                    </a>
                </div>

                <!--Client Logo-->
                <div class="client-logo">
                    <a href="#">
                        <img src="<?php echo base_url('public/img/clients/client-06.png') ?>" alt="">
                    </a>
                </div>

                <!--Client Logo-->
                <div class="client-logo">
                    <a href="#">
                        <img src="<?php echo base_url('public/img/clients/client-07.png') ?>" alt="">
                    </a>
                </div>

                <!--Client Logo-->
                <div class="client-logo">
                    <a href="#">
                        <img src="<?php echo base_url('public/img/clients/client-08.png') ?>" alt="">
                    </a>
                </div>

                <!--Client Logo-->
                <div class="client-logo">
                    <a href="#">
                        <img src="<?php echo base_url('public/img/clients/client-09.png') ?>" alt="">
                    </a>
                </div>

            </div>
        </div>
        <!--Clients Row End-->

        <!--Testimonials Row Start-->
        <div class="row testimonials mb-50">
            <div class="col-md-12">
                <div class="subheading">
                    <h3>Testimonials</h3>
                </div>
                <div class="owl-carousel owl-theme">

                    <!--Testimonail Item-->
                    <div class="testimonial-item">
                        <div class="testimonial-content">
                            <p>Ipsum ab necessitatibus numquam vitae quis. Nobis nostrum deserunt suscipit eos fugit. Consectetur dolorum temporibus facilis impedit exercitationem dignissimos.</p>
                        </div>
                        <div class="testimonial-meta">
                            <img src="<?php echo base_url('public/img/testimonials/author-1.jpg') ?>" alt="">
                            <div class="meta-info">
                                <h4>Kate Fox</h4>
                                <p>Digital Marketing Executive</p>
                            </div>
                        </div>
                    </div>

                    <!--Testimonail Item-->
                    <div class="testimonial-item">
                        <div class="testimonial-content">
                            <p>Ipsum ab necessitatibus numquam vitae quis. Nobis nostrum deserunt suscipit eos fugit. Consectetur dolorum temporibus facilis impedit exercitationem dignissimos.</p>
                        </div>
                        <div class="testimonial-meta">
                            <img src="<?php echo base_url('public/img/testimonials/author-2.jpg') ?>" alt="">
                            <div class="meta-info">
                                <h4>Emma Jones</h4>
                                <p>Creative Director</p>
                            </div>
                        </div>
                    </div>

                    <!--Testimonail Item-->
                    <div class="testimonial-item">
                        <div class="testimonial-content">
                            <p>Ipsum ab necessitatibus numquam vitae quis. Nobis nostrum deserunt suscipit eos fugit. Consectetur dolorum temporibus facilis impedit exercitationem dignissimos.</p>
                        </div>
                        <div class="testimonial-meta">
                            <img src="<?php echo base_url('public/img/testimonials/author-3.jpg') ?>" alt="">
                            <div class="meta-info">
                                <h4>Jack Smith</h4>
                                <p>Marketing Director</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <!--Testimonials Row End-->

        </div>
    </div>
</section>
<!--About Section End-->