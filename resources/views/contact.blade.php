@extends('layouts.base')

@section('content')


        <!-- :: Breadcrumb Header -->
        <section class="breadcrumb-header style-2" id="page" style="background-image: url(assets/images/header/contact-banner.jpg)">
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
                                    <a class="phone" href="tel:+2348057674378">+234 805 767 4378
                                    </a>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="contact-box">
                                <i class="ar-icons-location"></i>
                                <div class="box">
                                    <p>Plot 798 Olajide Laleye Street, Jahi, Abuja Nigeria</p>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="contact-box">
                                <i class="ar-icons-email"></i>
                                <div class="box">
                                    <a class="mail" href="mailto:enquiry@intertradeltd.biz">enquiry@intertradeltd.biz</a>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <!-- :: Map -->
                        <div class="map-box">
                            <iframe src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=Olajide%20laleye%20street%20Jahi,%20Abuja%20Nigeria+(InterTrade%20Ltd.)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"><a href="https://www.maps.ie/distance-area-calculator.html"></iframe>
                        </div>
                    </div>

                    <div class="col-lg-6">
						<div class="add-comments">
                            @if (Session::has('msg'))

                            <p class="alert alert-success">{{Session::get('msg')}}</p>

                            @endif
                            <form method="post" action="/post-message" class="inner-add-comments form-contact-2">

                                @csrf
								<div class="row">
									<div class="col-md-6 inner-add-comments-box">
										<input type="text" name="name" placeholder="Name" required>
									</div>
									<div class="col-md-6 inner-add-comments-box">
										<input type="Email" name="email" placeholder="Email" required>
									</div>
									<div class="col-md-12 inner-add-comments-box">
										<input type="text" name="phone" placeholder="Phone" required>
									</div>
									<div class="col-md-12 inner-add-comments-box">
										<textarea name="message" placeholder="Your Message Here" required></textarea>
									</div>
                                    <div class="col-md-12 inner-add-comments-box">
                                        <div class="g-recaptcha mt-4" data-sitekey={{config('services.recaptcha.key')}}></div>
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
