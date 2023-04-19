@extends('layouts.base')

@section('content')

		<!-- :: Breadcrumb Header -->
        <section class="breadcrumb-header style-2" id="page" style="background-image: url({{asset('/')}}assets/images/header/02_breadcrumb-header.jpg)">
            <div class="overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="banner">
                            <h1>Importance Of Solar Powered Alternatives</h1>
                            <ul>
                                <li><a href="/">Home</a></li>
                                <li><i class="fas fa-angle-right"></i></li>
                                <li>Post</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

		<!-- :: Single Blog -->
		<div class="single-blog-page py-100-70">
			<div class="container">
                <div class="row">
					<div class="col-lg-8">
						<div class="blog-item">
							<div class="img-box">
								<a href="/posts/post-1" class="open-post">
									<img class="img-fluid" src="{{asset('/')}}assets/images/blog/01_blog.jpg" alt="01 Blog">
								</a>
                                <ul>
                                    <li><a href="">Solar Power Systems</a></li>

                                </ul>
							</div>
							<div class="text-box">
								<h5>Importance Of Solar Powered Alternatives</h5>
								<span class="blog-date">Jan 20, 2023</span>
								<span class="author-name d-none">By : Anwar Ramadan</span>
								<p>Solar-powered alternatives are becoming increasingly important in today's world. With growing concerns about climate change and the finite nature of fossil fuels, it's becoming more and more apparent that we need to find alternative sources of energy that are both sustainable and renewable. Solar power is one of the most promising alternatives, and it's being adopted by individuals, businesses, and governments all over the world. In this post, we'll explore the importance of solar-powered alternatives and why we need to invest in this technology.</p>
								<p>First and foremost, solar-powered alternatives are crucial because they're renewable. Unlike fossil fuels, which are finite and will eventually run out, solar power comes from the sun, which will continue to shine for billions of years. This means that solar power is a sustainable and long-term solution to our energy needs. By investing in solar-powered alternatives, we're investing in a future where we won't have to worry about running out of energy.</p>
								<p>Secondly, solar-powered alternatives are environmentally friendly. Fossil fuels release greenhouse gases into the atmosphere when they're burned, which contribute to climate change. Solar power, on the other hand, doesn't produce any emissions or pollutants, which means it's a clean and sustainable source of energy. By adopting solar-powered alternatives, we can reduce our carbon footprint and do our part to combat climate change.</p>
								<p>Thirdly, solar-powered alternatives are becoming increasingly affordable. As technology improves and production scales up, the cost of solar panels and related equipment is dropping rapidly. This means that more people and businesses can afford to invest in solar power and reap the benefits of this technology. In fact, in many parts of the world, solar power is now cheaper than fossil fuels, making it a financially viable alternative to traditional energy sources.</p>
								<p>In conclusion, the importance of solar-powered alternatives cannot be overstated. These technologies are renewable, environmentally friendly, and increasingly affordable, making them an attractive alternative to fossil fuels. By investing in solar power, we're investing in a future that's sustainable, clean, and secure.</p>
                                <div class="share-post">
									<span>Share Post :</span>
									<ul>
										<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
										<li><a href="#"><i class="fab fa-twitter"></i></a></li>
										<li><a href="#"><i class="fab fa-instagram"></i></a></li>
								
									</ul>
								</div>
							</div>
						</div>
						<div class="quotes-people d-none">
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                            <div class="people-name">
                                <h5>Ahmed Mohamed</h5>
                                <span>Student</span>
                            </div>
                        </div>
						<div class="single-blog-nav d-none">
							<a href="/posts/post-2" class="blog-nav-prev">
								<div class="img-box">
									<img class="img-fluid" src="assets/images/blog/02_blog.jpg" alt="02 Blog">
								</div>
								<div class="text-box">
									<span class="subtitle"><i class="fas fa-caret-left"></i> Prev Post</span>
									<div class="title">how to build a powerful building Construction plan</div>
								</div>
							</a>
							<a href="/posts/post-3" class="blog-nav-next">
								<div class="img-box">
									<img class="img-fluid" src="assets/images/blog/03_blog.jpg" alt="03 Blog">
								</div>
								<div class="text-box">
									<span class="subtitle">Next Post <i class="fas fa-caret-right"></i></span>
									<div class="title">we are designing industry materials of innovation</div>
								</div>
							</a>
						</div>
						<div class="item-comments d-none">
                            <div class="title">
                                <h4>Comments</h4>
                            </div>
                            <div class="inner-comments">
                                <div class="comments-box">
                                    <div class="img-box">
                                        <img class="img-fluid" src="assets/images/testimonial/01_testimonial.jpg" alt="01 Testimonial">
                                    </div>
                                    <div class="text-box">
                                        <h5>Anwar Ramadan</h5>
                                        <div class="time">25 Nov 22 5:33 am</div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusm tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim Magna, sed diam nonumy eirmod tempor.</p>
                                        <a>Reply</a>
                                    </div>
                                </div>
                                <div class="comments-box reply">
                                    <div class="img-box">
                                        <img class="img-fluid" src="assets/images/testimonial/02_testimonial.jpg" alt="02 Testimonial">
                                    </div>
                                    <div class="text-box">
                                        <h5>Osama Bakri</h5>
                                        <div class="time">25 Nov 22 10:33 am</div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusm tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim Magna, sed diam nonumy eirmod tempor.</p>
                                        <a>Reply</a>
                                    </div>
                                </div>
                                <div class="comments-box">
                                    <div class="img-box">
                                        <img class="img-fluid" src="assets/images/testimonial/03_testimonial.jpg" alt="03 Testimonial">
                                    </div>
                                    <div class="text-box">
                                        <h5>Amina Taha</h5>
                                        <div class="time">25 Nov 22 11:33 am</div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusm tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim Magna, sed diam nonumy eirmod tempor.</p>
                                        <a>Reply</a>
                                    </div>
                                </div>
                            </div>
                        </div>
						<div class="add-comments d-none">
                            <div class="title">
                                <h4>Add Comment</h4>
                            </div>
                            <form class="inner-add-comments">
                                <div class="row">
                                    <div class="col-md-6 inner-add-comments-box">
                                        <input type="text" placeholder="Name" required>
                                    </div>
                                    <div class="col-md-6 inner-add-comments-box">
                                        <input type="Email" placeholder="Email" required>
                                    </div>
                                    <div class="col-md-12 inner-add-comments-box">
                                        <input type="text" placeholder="Website" required>
                                    </div>
                                    <div class="col-md-12 inner-add-comments-box">
                                        <textarea placeholder="Your Message Here " required></textarea>
                                    </div>
                                    <div class="col-md-12 inner-add-comments-box">
										<button class="btn-1 btn-3 submit" type="submit"><span>Post Comment</span></button>
                                    </div>
                                </div>
                            </form>
                        </div>















					</div>
					<div class="col-lg-4">
						<div class="sidebar-blog ml-20">
							<div class="widget">
                                <div class="widget-title">
                                    <h3>Search</h3>
                                </div>
                                <div class="widget-body">
                                    <form class="search">
                                        <input type="search" name="search" placeholder="Search Your Keywords..." required="">
                                        <button class="click" type="submit">
                                            <i class="fas fa-search"></i>
                                        </button>
                                    </form>
                                </div>
                            </div>
							<div class="widget d-none">
                                <div class="widget-title">
                                    <h3>Instagram</h3>
                                </div>
                                <div class="widget-body">
                                    <div class="instagram">
                                        <ul>
                                            <li>
                                                <img class="img-fluid" src="assets/images/projects/01_projects.jpg" alt="01 projects">
                                                <a class="open-photo" href="#">
                                                    <i class="fas fa-plus"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <img class="img-fluid" src="assets/images/projects/02_projects.jpg" alt="02 projects">
                                                <a class="open-photo" href="#">
                                                    <i class="fas fa-plus"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <img class="img-fluid" src="assets/images/projects/03_projects.jpg" alt="02 projects">
                                                <a class="open-photo" href="#">
                                                    <i class="fas fa-plus"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <img class="img-fluid" src="assets/images/projects/04_projects.jpg" alt="04 projects">
                                                <a class="open-photo" href="#">
                                                    <i class="fas fa-plus"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <img class="img-fluid" src="assets/images/projects/05_projects.jpg" alt="05 projects">
                                                <a class="open-photo" href="#">
                                                    <i class="fas fa-plus"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <img class="img-fluid" src="assets/images/projects/06_projects.jpg" alt="06 projects">
                                                <a class="open-photo" href="#">
                                                    <i class="fas fa-plus"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
							<div class="widget">
								<div class="widget-title">
									<h3>Follow Us</h3>
								</div>
								<div class="widget-body">
									<div class="follow">
										<ul class="icon">
											<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
											<li><a href="#"><i class="fab fa-twitter"></i></a></li>
											<li><a href="#"><i class="fab fa-instagram"></i></a></li>

										</ul>
									</div>
								</div>
							</div>
							<div class="widget">
								<div class="widget-title">
									<h3>More News :</h3>
								</div>
								<div class="news-box">
									<div class="news-item">
										<img class="img-fluid" style="object-fit: cover;" src="{{asset('/')}}assets/images/blog/01_blog.jpg" alt="01 Blog">
										<div class="item-content">
											<span><a href="#">Mar 20, 2022</a></span>
											<a href="#" class="title-blog">
												<h5>Importance Of Solar Powered Alternatives</h5>
											</a>
										</div>
									</div>
									<div class="news-item">
										<img class="img-fluid" style="object-fit: cover;" src="{{asset('/')}}assets/images/blog/02_blog.jpg" alt="02 Blog">
										<div class="item-content">
											<span><a href="#">Mar 25, 2023</a></span>
											<a href="#" class="title-blog">
												<h5>The Importance Of Cold Chain Equipment</h5>
											</a>
										</div>
									</div>
									<div class="news-item">
										<img class="img-fluid" style="object-fit: cover;" src="{{asset('/')}}assets/images/blog/03_blog.jpg" alt="03 Blog">
										<div class="item-content">
											<span><a href="#">Apr 3, 2023</a></span>
											<a href="#" class="title-blog">
												<h5>Haier Biomedical's Impact On Healthcare Infrastructure In Africa</h5>
											</a>
										</div>
									</div>
								</div>
							</div>
                            <div  class="widget">
                                <div class="widget-title">
                                    <h3>services</h3>
                                </div>
                                <div class="widget-body">
                                    <ul class="single-services-list">

                                        <li><a href="/services" >Solar Powered Systems <i class="fas fa-angle-right"></i></a></li>
                                        <li><a href="/services?page=services2">Cold Chain Solutions<i class="fas fa-angle-right"></i></a></li>
                                        <li><a href="/services?page=services3">Solar Consultancy <i class="fas fa-angle-right"></i></a></li>

                                    </ul>
                                </div>
                            </div>

                        </div>
					</div>
                </div>
            </div>
		</div>

@endsection
