@extends('layouts.base')

@section('content')


        <!-- :: Breadcrumb Header -->
        <section class="breadcrumb-header style-2" id="page" style="background-image: url(assets/images/header/03_breadcrumb-header.jpg)">
            <div class="overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="banner">
                            <h1>contact US</h1>
                            <ul>
                                <li><a href="index.html">Home</a></li>
                                <li><i class="fas fa-angle-right"></i></li>
                                <li>contact US</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

		<!-- :: contact us -->
		<div class="contact-us py-100">
            <div class="container">
                <div class="contact-info-content">
                    <div class="row">
                        <div class="col-md-6 col-lg-4">
                            <div class="contact-box">
                                <i class="ar-icons-call"></i>
                                <div class="box">
                                    <a class="phone" href="tel:01212843661">012128 43661</a>
                                    <a class="phone" href="tel:01029134630">010291 34630</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="contact-box">
                                <i class="ar-icons-email"></i>
                                <div class="box">
                                    <a class="mail" href="mailto:support@Gazolin.com">Support@Gazolin.com</a>
                                    <a class="mail" href="mailto:mailbox@ar-coder.com">MailBox@AR-Coder.com</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="contact-box">
                                <i class="ar-icons-location"></i>
                                <div class="box">
                                    <p>14D Street Brooklyn,</p>
                                    <p>New York.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <!-- :: Map -->
                        <div class="map-box">
                            <iframe src="https://maps.google.com/maps?q=manhatan&amp;t=&amp;z=13&amp;ie=UTF8&amp;iwloc=&amp;output=embed"></iframe>
                        </div>
                    </div>
                    <div class="col-lg-6">
						<div class="add-comments">
							<form class="inner-add-comments form-contact-2">
								<div class="row">
									<div class="col-md-6 inner-add-comments-box">
										<input type="text" name="name" placeholder="Name" required>
									</div>
									<div class="col-md-6 inner-add-comments-box">
										<input type="Email" name="email" placeholder="Email" required>
									</div>
									<div class="col-md-12 inner-add-comments-box">
										<input type="text" name="website" placeholder="Website" required>
									</div>
									<div class="col-md-12 inner-add-comments-box">
										<textarea name="message" placeholder="Your Message Here" required></textarea>
									</div>
									<div class="col-md-12 inner-add-comments-box last">
										<button class="btn-1 btn-3 submit" type="submit"><span>Submit</span></button>
										<span class="out-message"></span>
									</div>
								</div>
							</form>
						</div>
                    </div>
                </div>
            </div>
        </div>


@endsection
