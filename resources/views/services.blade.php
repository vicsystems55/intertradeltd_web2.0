@extends('layouts.base')

@section('content')

        <!-- :: Breadcrumb Header -->
        <section class="breadcrumb-header" id="page" style="background-image: url(assets/images/services/services11.jpg)">
            <div class="overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="banner">
                            <h1>Our Services</h1>
                            <ul>
                                <li><a href="index.html">Home</a></li>
                                <li><i class="fas fa-angle-right"></i></li>
                                <li>Services</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

		<!-- :: Single Projects -->
		<div class="single-services single-projects py-100-70">
			<div class="container">


				<div class="row">
					<div class="col-lg-4" >
						<div class="sidebar-services mr-20"  >
                            <div  class="widget">
                                <div class="widget-title">
                                    <h3>services</h3>
                                </div>
                                <div class="widget-body">
                                    <ul class="single-services-list">

                                        <li class="active"><a href="/services" >Solar Powered Systems <i class="fas fa-angle-right"></i></a></li>
                                        <li><a href="/services?page=services2">Cold Chain Solutions<i class="fas fa-angle-right"></i></a></li>
                                        <li><a href="/services?page=services3">Solar Consultancy <i class="fas fa-angle-right"></i></a></li>

                                    </ul>
                                </div>
                            </div>



                        </div>
					</div>
					<div class="col-lg-8">
						<div id="service1" class="single-services-content-box">
							<h2>Solar Powered Systems</h2>
							<p>We are actively involved in the production and treatment of water using solar powered systems, designs, and training. The firm has worked hand in hand with the National Energy Commission and installed solar systems in Sokoto Energy Research Centre. We have been involved in designs and implementation of solar powered water schemes in the Niger Delta for Communities under Shell Petroleum Community Development Projects and for STATES RURAL WATER SUPPLY AND SANITATION AGENCIES. The company has also been involved in the training for operation and maintenance of pumps in various State</p>

							<div class="single-services-img-box">
                                <img class="img-fluid" src="assets/images/services/01_services-bg.jpg" alt="Team Details">
                            </div>




							<div class="video-presentation d-none">
								<div class="overlay"></div>
								<div class="presentation-box">
									<a href="https://youtu.be/TKnufs85hXk" class="pulse" data-lity="">
										<i class="ar-icons-play-button"></i>
									</a>
								</div>
							</div>


							<div class="faq style-2 d-none">
								<div class="faq-box">
									<button class="btn btn-primary click" type="button" data-bs-toggle="collapse" data-bs-target="#faqs-1" aria-expanded="false" aria-controls="faqs-1">How can i find a job ?<i class="fas fa-angle-right"></i>
									</button>
									<div class="collapse show" id="faqs-1">
										<div class="card card-body about-text">
											<b>Gazolin Are A Industry &amp; Manufacturing Services Provider Institutions. Suitable For Factory, Manufacturing, Industry, Engineering, Construction And Any Related Industry Care Field.</b>
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
				</div>
			</div>
		</div>

@endsection
