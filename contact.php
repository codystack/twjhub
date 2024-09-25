<?php
include "./components/header.php";
include "./components/navbar.php";
?>

        <div class="inner-banner-one pt-225 lg-pt-200 md-pt-150 pb-100 md-pb-70 position-relative" style="background-image: url(images/contact-bg.webp);">
			<div class="container position-relative">
				<div class="row align-items-center">
					<div class="col-lg-7">
						<h1 class="hero-heading d-inline-block text-dark position-relative">Get in touch, connect.<img src="images/shape/shape_33.svg" alt=""></h1>
					</div>
				</div>
			</div>
		</div>

		
		<div class="contact-us-section pt-150 lg-pt-80 mb-70">
			<div class="container">
                <div class="position-relative">
                    <div class="row">
						<div class="col-12 m-auto">
							<div class="row">
								<div class="col-md-4">
									<div class="address-block-one text-center mb-40 wow fadeInUp">
										<div class="icon rounded-circle d-flex align-items-center justify-content-center m-auto"><img src="images/lazy.svg" data-src="images/icon/email-svg.svg" alt="" class="lazy-img"></div>
										<h5 class="title text-dark">Email us</h5>
										<p><a href="mailto:hello@twjhub.com" class="call text-lg fw-500">hello@twjhub.com</a></p>
									</div>
								</div>
								<div class="col-md-4">
									<div class="address-block-one text-center mb-40 wow fadeInUp">
										<div class="icon rounded-circle d-flex align-items-center justify-content-center m-auto"><img src="images/lazy.svg" data-src="images/icon/icon_91.svg" alt="" class="lazy-img"></div>
										<h5 class="title text-dark">Talk to us</h5>
										<p><a href="tel:+2348108514863" class="call text-lg fw-500">+234 810-851-4863</a></p>
									</div>
								</div>
								<div class="col-md-4">
									<div class="address-block-one text-center mb-40 wow fadeInUp">
										<div class="icon rounded-circle d-flex align-items-center justify-content-center m-auto"><img src="images/lazy.svg" data-src="images/icon/icon_92.svg" alt="" class="lazy-img"></div>
										<h5 class="title text-dark">24/7 support</h5>
										<p><a class="call text-lg fw-500" id="launch-freshchat">Start chat</a></p>
									</div>
								</div>
							</div>
						</div>
					</div>

                    <div class="bg-wrapper mt-80 lg-mt-40" style="background-color: #f6f6f6;">
                        <div class="row">
                            <div class="col-lg-5">
                                <div class="d-flex flex-column flex-lg-column-reverse">
									<div class="row">
										<div class="col-md-8 col-6 me-auto ms-auto"><img src="images/lazy.svg" data-src="images/assets/ils_07.svg" alt="" class="lazy-img me-auto ms-auto"></div>
									</div>
									<div class="title-one text-center text-lg-start md-mt-20 mb-70 md-mb-30">
										<h2 class="text-dark">Have inquiries? We’d love to hear from you</h2>
									</div>
								</div>
                            </div>
                            <div class="col-lg-7">
                                <div class="form-style-one ps-xl-5">
                                    <form action="inc/contact.php.html" id="contact-form" data-toggle="validator">
                                        <div class="messages"></div>
                                        <div class="row controls">
                                            <div class="col-12">
                                                <div class="input-group-meta form-group mb-30">
                                                    <label for="">Name*</label>
                                                    <input type="text" placeholder="Your name*" name="name" required="required" data-error="Name is required.">
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="input-group-meta form-group mb-40">
                                                    <label for="">Email*</label>
                                                    <input type="email" placeholder="Email address*" name="email" required="required" data-error="Valid email is required.">
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="input-group-meta form-group mb-40">
                                                    <label for="">Phone*</label>
                                                    <input type="tel" placeholder="Phone number*" name="phone" required="required" data-error="Valid phone is required.">
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="input-group-meta form-group mb-35">
                                                    <textarea placeholder="Your message*" name="message" required="required" data-error="Please,leave us a message."></textarea>
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>
                                            <div class="col-12"><button class="btn-four1 tran3s w-100 d-block">Send Message</button></div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
		</div>

        <?php include "./components/app-cta.php"; ?>


<?php include "./components/footer.php"; ?>