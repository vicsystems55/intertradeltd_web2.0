@extends('layouts.base')

@section('content')

        <!-- :: Breadcrumb Header -->
        <section class="breadcrumb-header" id="page" style="background-image: url(assets/images/services/services2-bg.jpg)">
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

                                        <li ><a href="/services" >Solar Powered Systems <i class="fas fa-angle-right"></i></a></li>
                                        <li class="active"><a href="/services?page=services2">Cold Chain Solutions<i class="fas fa-angle-right"></i></a></li>
                                        <li><a href="/services?page=services3">Solar Consultancy <i class="fas fa-angle-right"></i></a></li>

                                    </ul>
                                </div>
                            </div>



                        </div>
					</div>
					<div class="col-lg-8">
						<div id="service1" class="single-services-content-box">
							<h2>Cold Chain Solutions</h2>
							<p>he company has outstanding relationships with WHO PQS Manufacturers like Haier Biomedical Company Ltd. Haier Biomedical Co., Ltd is a reputable manufacturer of vaccine cold chain equipment based in Qingdao, P.R. China. The vaccine cold chain equipment we supplied is qualified by WHO/PQS, and we are qualified long term of supplier of UNICEF, WHO, COVAX and GAVI CCEOP platform.
                                Inter-Trade ltd is a professional company providing service of Procurement, Supply, Distribution, Installation, Routine Maintenance and Training on all cold chain equipment, and the official representative of Haier Biomedical Co., Ltd in Nigeria, and the sub region.
                                </p>

							<div class="single-services-img-box">
                                <img class="img-fluid" src="assets/images/services/01_services2-bg.jpg" alt="Team Details">
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
