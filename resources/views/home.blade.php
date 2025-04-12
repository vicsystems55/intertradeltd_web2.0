@extends('layouts.base')

@section('content')
        <!-- :: Header -->
        <section class="header" id="page">
            <div class="header-carousel owl-carousel owl-theme">
                <div class="sec-hero display-table" style="background-image: url(assets/images/header/header.jpg)">
                    <div class="table-cell" >
                        <div class="overlay"></div>
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-8">
                                    <div class="banner " style="margin-top: -90px;">
                                        <div class="top-handline">GREEN ENERGY</div>
                                        <h1 class="handline">Solar Installation and Maintenance</h1>
                                        <p class="about-website">we provide end-to-end solutions for setting up and maintaining solar power systems. Our services cover the entire range of equipment required for generating clean and renewable energy, including:</p>
                                        {{-- <ul class="header-list-features ">
                                            <li class="item">
                                                <i class="fas fa-check"></i><h5>Solar panels</h5>
                                            </li>
                                            <li class="item">
                                                <i class="fas fa-check"></i><h5>Battries</h5>
                                            </li>
                                            <li class="item">
                                                <i class="fas fa-check"></i><h5>Inverters and more...</h5>
                                            </li>


                                        </ul> --}}

                                        <div class="btn-box">

                                            <a class="btn-1 btn-2 ml-30" href="/services"><span>Our Services</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="sec-hero display-table" style="background-image: url(assets/images/header/03_header.jpg)">
                    <div class="table-cell">
                        <div class="overlay"></div>
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-8">
                                    <div class="banner">
                                        <div class="top-handline">ULT DEVICES</div>
                                        <h1 class="handline">Cold Chain Equipments Solutions</h1>
                                        <p class="about-website">We provide specialized devices and technologies used to maintain the integrity and safety of temperature-sensitive products throughout the supply chain.</p>

                                        <div class="btn-box">
                                            <a class="btn-1 btn-2" href="/about"><span>About Us</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="sec-hero display-table" style="background-image: url(assets/images/header/02_header.jpg)">
                    <div class="table-cell">
                        <div class="overlay"></div>
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-8">
                                    <div class="banner">
                                        <div class="top-handline">SERVICES </div>
                                        <h1 class="handline">Professional Consulting</h1>
                                        <p class="about-website">We provide professional consulting services for solar power systems and cold chain solutions, offering expert guidance on design, implementation, and optimization to ensure optimal efficiency and performance.</p>

                                        <div class="btn-box">

                                            <a class="btn-1 btn-3 ml-30" href="/about"><span>Read More</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- :: About US -->
        <section class="about-us py-100" id="start">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="about-us-img-box">
                            <div class="img-box" style="background-image: url(assets/images/about-us/01_about-us.jpg)"></div>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="about-us-text-box">
                            <div class="sec-title">

                                <h3>Who we are.</h3>
                                <h6 style="text-transform: none;" class="sec-explain">INTER TRADE LIMITED is a Nigerian limited liability company that was established on May 9th, 2002 as an engineering company. From the outset, the company has focused on providing technical international trading services for solar and engineering solutions. Our services cover everything from consultancy to turnkey projects, and we have extensive experience in a variety of areas, including:</h6>
                            </div>
                            <div class="row">
                                <div class="col-sm-7">

                                    <ul class="about-us-core-list">
                                        <li class="item">
                                            <i class="fas fa-check"></i>
                                            <h4>Cold chain equipment solutions</h4>
                                        </li>
                                        <li class="item">
                                            <i class="fas fa-check"></i>
                                            <h4>Solar Consultancy Solutions</h4>
                                        </li>
                                        <li class="item">
                                            <i class="fas fa-check"></i>
                                            <h4>Solar Powered Systems</h4>
                                        </li>

                                    </ul>
                                    <div class="img-person d-none">
                                        <img class="img-fluid about-us-person" src="assets/images/about-us/01_about-us-person.jpg" alt="About US Person">
                                        <img class="img-fluid signature" src="assets/images/01_signature.png" alt="About US Signature">
                                    </div>
                                    <div class="btn-box">

                                        <a class="btn-1 btn-3 ml-30" href="/about"><span>Read More</span></a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

		<!-- :: Services -->
        <section class="services home-2">
			<div class="bg-section">
                <div class="overlay overlay-2"></div>
            </div>
			<div class="container">
				<div class="sec-title home-2">
                    <div class="row">
                        <div class="col-lg-5">

                            <h3>Services we offer</h3>
                        </div>
                        <div class="col-lg-5 d-flex align-items-center">
                            <p class="sec-explain">Our company specializes in providing comprehensive solutions for cold chain equipment, solar consultancy, and solar power systems, helping clients achieve sustainable and efficient operations.</p>
                        </div>
                    </div>
                </div>
				<div class="services-carousel owl-carousel owl-theme">
                    <div class="services-carousel-item item-1">
						<a href="02_services.html" class="services-item-img-box" style="background-image: url(assets/images/services/01_services-item.jpg)"></a>
                        <div class="item-box " >

							<div class="content-box" style="padding: 10px 10px;">
								<h4>Solar Powered Systems</h4>
								<p>We offer complete solar power system solutions, including design, installation, and maintenance services to help clients achieve sustainable and efficient energy operations.</p>
								<a class="more" href="/services">Read More</a>
							</div>
						</div>
                    </div>
					<div class="services-carousel-item item-2">
						<a href="02_services.html" class="services-item-img-box" style="background-image: url(assets/images/services/02_services-item.jpg)"></a>
                        <div class="item-box">

							<div class="content-box" style="padding: 10px 10px;">
								<h4>Cold Chain Solutions</h4>
								<p>We deliver comprehensive cold chain solutions, including installation, maintenance, and optimization services for reliable temperature-controlled operations across various industries.</p>
								<a class="more" href="02_services.html">Read More</a>
							</div>
						</div>
                    </div>
					<div class="services-carousel-item item-3">
						<a href="02_services.html" class="services-item-img-box" style="background-image: url(assets/images/services/03_services-item.jpg)"></a>
                        <div class="item-box">

							<div class="content-box" style="padding: 10px 10px;">
								<h4>Solar Consultancy</h4>
								<p>Are you in need of guidance on the design, implementation, or optimization of your solar power system? Look no further than Intertrade Limited's expert solar consultancy services.</p>
								<a class="more" href="02_services.html">Read More</a>
							</div>
						</div>
                    </div>


                </div>
			</div>
		</section>



        <!-- :: Statistic -->
        <div class="statistic">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-lg-3">
                        <div class="statistic-item">
                            <i class="ar-icons-checklist"></i>
                            <div class="content">
                                <div class="counter statistic-counter">700</div>
                                <div class="counter-name">Projects Completed in 2024</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="statistic-item">
                            <i class="ar-icons-conveyor-2"></i>
                            <div class="content">
                                <div class="counter statistic-counter">120</div>
                                <div class="counter-name">Satisfied Clients We Have Served</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="statistic-item">
                            <i class="ar-icons-conveyor-3"></i>
                            <div class="content">
                                <div class="counter statistic-counter">50</div>
                                <div class="counter-name">Qualified Employees And Technicians With Us</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="statistic-item">
                            <i class="ar-icons-idea"></i>
                            <div class="content">
                                <div class="counter statistic-counter">20</div>
                                <div class="counter-name">Years experience in the engineering and international trade</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <section class="sponsors-page py-100">
            <div class="container">
                <div class="sec-title home-3">
                    <div class="row">
                        <div class="col-lg-5">
                            <h2>Our Partners</h2>
                            <h3>Working together</h3>
                        </div>
                        <div class="col-lg-5 d-flex align-items-center">

                        </div>
                    </div>
                </div>
                <div class="sponsors-carousel owl-carousel owl-theme">
                    <div class="sponsors-box-item">
                        <img class="img-fluid" src="assets/images/sponsors/01_sponsors.png" alt="01 Sponsors">
                    </div>
                    <div class="sponsors-box-item">
                        <img class="img-fluid" src="assets/images/sponsors/02_sponsors.png" alt="02 Sponsors">
                    </div>
                    <div class="sponsors-box-item">
                        <img class="img-fluid" src="assets/images/sponsors/03_sponsors.png" alt="03 Sponsors">
                    </div>
                    <div class="sponsors-box-item">
                        <img class="img-fluid" src="assets/images/sponsors/04_sponsors.png" alt="04 Sponsors">
                    </div>
                    <div class="sponsors-box-item">
                        <img class="img-fluid" src="assets/images/sponsors/05_sponsors.png" alt="05 Sponsors">
                    </div>
                    <div class="sponsors-box-item">
                        <img class="img-fluid" src="assets/images/sponsors/06_sponsors.png" alt="06 Sponsors">
                    </div>
                    <div class="sponsors-box-item">
                        <img class="img-fluid" src="assets/images/sponsors/07_sponsors.png" alt="07 Sponsors">
                    </div>
                    <div class="sponsors-box-item">
                        <img class="img-fluid" src="assets/images/sponsors/08_sponsors.png" alt="08 Sponsors">
                    </div>

                    <div class="sponsors-box-item">
                        <img class="img-fluid" src="assets/images/sponsors/09_sponsors.png" alt="09 Sponsors">
                    </div>

                    <div class="sponsors-box-item">
                        <img class="img-fluid" src="assets/images/sponsors/010_sponsors.png" alt="010 Sponsors">
                    </div>
                </div>
            </div>
        </section>

        <!-- :: Projects -->
        <section class="projects py-100">
            <div class="container">
                <div class="sec-title">
                    <div class="row">
                        <div class="col-lg-5">
                            <h2>We work with local and global industries!</h2>
                            <h3>Projects For various states in Nigeria and Foreign Clients</h3>
                        </div>
                        <div class="col-lg-5 d-flex align-items-center">
                            <p class="sec-explain"> Intertrade Ltd. has an impressive track record of completing successful projects for clients not only in Nigeria but also in other African countries. Their outstanding services have established them as a top player in the industry.</p>
                        </div>
                    </div>
                </div>
                <div class="projects-carousel owl-carousel owl-theme">
                    <div class="projects-item">
                        <div class="img-box">
                            <img class="img-fluid projects-item-img" src="assets/images/projects/06_projects.jpg" alt="06 projects">
                        </div>
                        <div class="hover-box">
                            <div class="text-box">
                                <div class="tags"><a href="/projects">Solar Power Solutions</a></div>
                                <h4><a href="/projects">PHCs Solar Electricity Supply- Delta State</a></h4>
                            </div>
                            <ul class="projects-icon">
                                <li><a href="/projects"><i class="fas fa-link"></i></a></li>
                                <li><a class="popup" href="assets/images/projects/06_projects.jpg"><i class="far fa-eye"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="projects-item">
                        <div class="img-box">
                            <img class="img-fluid projects-item-img" src="assets/images/projects/01_projects.jpg" alt="01 projects">
                        </div>
                        <div class="hover-box">
                            <div class="text-box">
                                <div class="tags"><a href="/projects">Cold Chain Solutions</a></div>
                                <h4><a href="/projects">Installation and commissioning of 28 UCCs across 19 locations in Nigeria</a></h4>
                            </div>
                            <ul class="projects-icon">
                                <li><a href="/projects"><i class="fas fa-link"></i></a></li>
                                <li><a class="popup" href="assets/images/projects/01_projects.jpg"><i class="far fa-eye"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="projects-item">
                        <div class="img-box">
                            <img class="img-fluid projects-item-img" src="assets/images/projects/02_projects.jpg" alt="02 projects">
                        </div>
                        <div class="hover-box">
                            <div class="text-box">
                                <div class="tags"><a href="/projects">Cold Chain Solutions</a></div>
                                <h4><a href="/projects">Installation of Solar Direct Drive (SDD) Walk in Cold-room (WICR) National Primary Healthcare Development Agency (NPHCDA)</a></h4>
                            </div>
                            <ul class="projects-icon">
                                <li><a href="/projects"><i class="fas fa-link"></i></a></li>
                                <li><a class="popup" href="assets/images/projects/02_projects.jpg"><i class="far fa-eye"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="projects-item">
                        <div class="img-box">
                            <img class="img-fluid projects-item-img" src="assets/images/projects/03_projects.jpg" alt="03 projects">
                        </div>
                        <div class="hover-box">
                            <div class="text-box">
                                <div class="tags"><a href="/projects">Cold Chain Solutions</a></div>
                                <h4><a href="/projects">Installation of Solar Direct Drive (SDD) Walk in Cold-room (WICR) for Benue State Primary Health Care Center</a></h4>
                            </div>
                            <ul class="projects-icon">
                                <li><a href="/projects"><i class="fas fa-link"></i></a></li>
                                <li><a class="popup" href="assets/images/projects/03_projects.jpg"><i class="far fa-eye"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="projects-item">
                        <div class="img-box">
                            <img class="img-fluid projects-item-img" src="assets/images/projects/04_projects.jpg" alt="04 projects">
                        </div>
                        <div class="hover-box">
                            <div class="text-box">
                                <div class="tags"><a href="/projects">Solar Powered Systems</a></div>
                                <h4><a href="/projects">69kw Solar installation at Private Residence (100% Off Grid)</a></h4>
                            </div>
                            <ul class="projects-icon">
                                <li><a href="/projects"><i class="fas fa-link"></i></a></li>
                                <li><a class="popup" href="assets/images/projects/04_projects.jpg"><i class="far fa-eye"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="projects-item">
                        <div class="img-box">
                            <img class="img-fluid projects-item-img" src="assets/images/projects/05_projects.jpg" alt="05 projects">
                        </div>
                        <div class="hover-box">
                            <div class="text-box">
                                <div class="tags"><a href="/projects">Solar Powered Systems</a></div>
                                <h4><a href="/projects">Installation of 120kw Solar Systems at CSS Farms.</a></h4>
                            </div>
                            <ul class="projects-icon">
                                <li><a href="/projects"><i class="fas fa-link"></i></a></li>
                                <li><a class="popup" href="assets/images/projects/05_projects.jpg"><i class="far fa-eye"></i></a></li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- :: Provide 2 -->
        <section class="provide-2 py-100 d-none">
            <div class="bg-section">
                <div class="overlay overlay-2"></div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="sec-title">
                            <h2>Best Creative Industrial!</h2>
                            <h3>We help you to grow your business exponentially</h3>
                        </div>
                        <div class="provide-btn">
                            <a class="btn-1" href="01_about-us.html"><span>Our Brochure</span></a>
                            <a class="btn-1 btn-4" href="01_team.html"><span>Best Team Member</span></a>
                        </div>
                        <div class="have-experience">
                            <i class="ar-icons-warehouse"></i>
                            <h5>we have +45 years of experience for give you better quality Results</h5>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <!-- :: FAQs -->
                        <div class="faq">
                            <div class="faq-box">
                                <button class="btn btn-primary click" type="button" data-bs-toggle="collapse" data-bs-target="#faqs-1" aria-expanded="false" aria-controls="faqs-1">How can i find a job ?<i class="fas fa-angle-right"></i>
                                </button>
                                <div class="collapse show" id="faqs-1">
                                    <div class="card card-body about-text">
                                        <b>InterTrade Ltd. Are A Industry &amp; Manufacturing Services Provider Institutions. Suitable For Factory, Manufacturing, Industry, Engineering, Construction And Any Related Industry Care Field.</b>
                                    </div>
                                </div>
                            </div>
                            <div class="faq-box">
                                <button class="btn btn-primary click" type="button" data-bs-toggle="collapse" data-bs-target="#faqs-2" aria-expanded="false" aria-controls="faqs-2">Where can i find out about problem ?<i class="fas fa-angle-right"></i>
                                </button>
                                <div class="collapse" id="faqs-2">
                                    <div class="card card-body about-text">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusm tmpor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat adipisicing elit, sed do eiusm tempor incididunt ut labore.
                                    </div>
                                </div>
                            </div>
                            <div class="faq-box">
                                <button class="btn btn-primary click" type="button" data-bs-toggle="collapse" data-bs-target="#faqs-3" aria-expanded="false" aria-controls="faqs-3">How can use the product ?<i class="fas fa-angle-right"></i>
                                </button>
                                <div class="collapse" id="faqs-3">
                                    <div class="card card-body about-text">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusm tmpor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat adipisicing elit, sed do eiusm tempor incididunt ut labore.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- :: Get Update -->
                <div class="get-update">
                    <div class="row">
                        <div class="col-lg-4">
                            <h5>Get Your <span>Free</span> Business Industrial</h5>
                        </div>
                        <div class="col-lg-4 d-flex justify-content-center align-items-center">
                            <div class="phone">
                                <a href="tel:01212843661" class="pulse">
                                    <i class="ar-icons-phone"></i>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-4 d-flex align-items-center justify-content-between">
                            <div>
                                <a class="phone-mail" href="tel:01212843661">0121284 3661</a>
                                <a class="phone-mail" href="mailto:support@InterTrade Ltd..com">Support@InterTrade Ltd..com</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- :: Testimonial -->
        <section class="testimonial py-100">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 offset-md-1">
                        <div class="testimonial-carousel owl-carousel owl-theme">
                            <div class="item-box">
                                <div class="text-box">Switching to solar power with this company was the best decision we made for our home. Our energy bills are lower and we feel good about our sustainable choice!</div>
                                <div class="item-name text-center">
                                    <i class="ar-icons-right-quote"></i>
                                    <h5>Lawal Bolaji</h5>
                                    <span>NPHCDA</span>
                                </div>
                            </div>
                            <div class="item-box">
                                <div class="text-box">With the expert guidance of this company's solar power consultants, we were able to confidently make the switch to sustainable energy and save money on our bills.</div>
                                <div class="item-name text-center">
                                    <i class="ar-icons-right-quote"></i>
                                    <h5>Emmanuel Oge</h5>
                                    <span>Delta State</span>
                                </div>
                            </div>
                            <div class="item-box">
                                <div class="text-box">The company's cold chain equipment is top-notch. Our products are always kept at the optimal temperature, ensuring their quality and freshness for our customers.</div>
                                <div class="item-name text-center">
                                    <i class="ar-icons-right-quote"></i>
                                    <h5>Olawande Deborah</h5>
                                    <span>WHO</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="projects home-2 py-100-70">
            <div class="container">
                <div class="sec-title home-2">
                    <div class="row">
                        <div class="col-lg-5">
                            <h2>Stay up to date</h2>
                            <h3>Latest from our social media platforms</h3>
                        </div>
                        <div class="col-lg-5 d-flex align-items-center">

                        </div>
                    </div>
                </div>
				<div class="row">

                    @if(!empty($instagramPosts))

                    @foreach ($instagramPosts as $instagramPost)


					<div class="col-md-4 col-lg-3">
						<div class="projects-item">
							<span></span>
							<div class="img-box">
								<img class="img-fluid projects-item-img" src="{{$instagramPost['media_url']}}" alt="01 projects">
							</div>
							<div class="hover-box">
								<div class="text-box">
									{{-- <div class="tags"><a href="">Cold Chain</div> --}}
									<h4><a href="">{{$instagramPost['caption']??''}}</a></h4>
								</div>
								<ul class="projects-icon">
									<li><a href=""><i class="fas fa-link"></i></a></li>
									<li><a class="popup" href="{{$instagramPost['media_url']}}"><i class="far fa-eye"></i></a></li>
								</ul>
							</div>
						</div>
					</div>




                    @endforeach

                    @endif



				</div>
            </div>
        </section>


        <!-- :: Blog -->
        <section class="blog testimonial py-100-70">
            <div class="container">
                <div class="sec-title">
                    <div class="row">
                        <div class="col-lg-5">
                            <h2>Recent Articles</h2>
                            <h3>Read All News</h3>
                        </div>
                        <div class="col-lg-5 d-flex align-items-center">
                            <p class="sec-explain">Stay updated with the news in the industry.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-lg-4">
                        <div class="blog-item">
                            <div class="img-box">
                                <a href="/blog" class="open-post">
                                    <img class="img-fluid" src="assets/images/blog/00_blog.jpg" alt="01 Blog">
                                </a>
                                <ul>
                                    <li><a href="">Solar Power Systems</a></li>

                                </ul>
                            </div>
                            <div class="text-box">
                                <a href="/blog" class="title-blog">
                                    <h5>50 years of the Nigerian Society For Haematology and Blood Transfusion</h5>
                                </a>
                                <span class="blog-date">Aug 20, 2023</span>
                                <p>The conference was held for haematologist, paediatricians, surgeons, internal physicians, family physicians , doctors, nurses, Lab Scientists, health professionals and infact all lovers of Haematology. </p>
                                <a href="#" class="btn-1 btn-3 link"><span>Read More</span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="blog-item">
                            <div class="img-box">
                                <a href="/blog" class="open-post">
                                    <img class="img-fluid" src="assets/images/blog/01_blog.jpg" alt="01 Blog">
                                </a>
                                <ul>
                                    <li><a href="">Solar Power Systems</a></li>

                                </ul>
                            </div>
                            <div class="text-box">
                                <a href="/blog" class="title-blog">
                                    <h5>Importance of Solar Powered Alternatives</h5>
                                </a>
                                <span class="blog-date">Mar 20, 2023</span>
                                <p>Solar power is becoming an increasingly popular choice for those seeking a sustainable and cost-effective source of energy.</p>
                                <a href="/posts/post-1" class="btn-1 btn-3 link"><span>Read More</span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="blog-item">
                            <div class="img-box">
                                <a href="/blog" class="open-post">
                                    <img class="img-fluid" src="assets/images/blog/02_blog.jpg" alt="02 Blog">
                                </a>
                                <ul>
                                    <li><a href="/blog">Cold Chain Equipments</a></li>

                                </ul>
                            </div>
                            <div class="text-box">
                                <a href="/blog" class="title-blog">
                                    <h5>The Importance of Cold Chain Equipment</h5>
                                </a>
                                <span class="blog-date">Mar 25, 2023</span>
                                <p>Cold chain equipment is a vital component in the preservation and transportation of temperature-sensitive products such as pharmaceuticals, food and beverages, and biological materials. </p>
                                <a href="/posts/post-2" class="btn-1 btn-3 link"><span>Read More</span></a>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="blog-item">
                            <div class="img-box">
                                <a href="/blog" class="open-post">
                                    <img class="img-fluid" src="assets/images/blog/03_blog.jpg" alt="03 Blog">
                                </a>
                                <ul>
                                    <li><a href="/blog">Haier Biomedical</a></li>

                                </ul>
                            </div>
                            <div class="text-box">
                                <a href="/blog" class="title-blog">
                                    <h5>Haier Biomedical's Impact on Healthcare Infrastructure in Africa</h5>
                                </a>
                                <span class="blog-date">Apr 3, 2023</span>
                                <p>Haier Biomedical is a leading provider of cold chain equipment in Africa, offering solutions for vaccine storage, blood banks, and medical research.</p>
                                <a href="/posts/post-3" class="btn-1 btn-3 link"><span>Read More</span></a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

@endsection
