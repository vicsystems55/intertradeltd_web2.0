@extends('layouts.base')

@section('content')

		<!-- :: Breadcrumb Header -->
        <section class="breadcrumb-header style-2" id="page" style="background-image: url({{asset('/')}}assets/images/header/02_breadcrumb-header.jpg)">
            <div class="overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="banner">
                            <h1>Haier Biomedical's Impact On Healthcare Infrastructure In Africa</h1>
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
									<img class="img-fluid" src="{{asset('/')}}assets/images/blog/03_blog.jpg" alt="01 Blog">
								</a>
                                <ul>
                                    <li><a href="">Haier Biomedical</a></li>

                                </ul>
							</div>
							<div class="text-box">
								<h5>Haier Biomedical's Impact On Healthcare Infrastructure In Africa</h5>
								<span class="blog-date">Apr 3, 2023</span>
								<span class="author-name d-none">By : Anwar Ramadan</span>
								<p>Haier Biomedical is a leading provider of medical equipment and solutions, with a strong presence in Africa. The company's commitment to innovation and quality has resulted in a significant impact on the healthcare infrastructure in Africa, especially in terms of improving access to high-quality medical equipment.</p>
								<p>One of the key areas where Haier Biomedical has made a significant impact is in the field of vaccine storage. In many parts of Africa, access to reliable vaccine storage is a major challenge. Haier Biomedical has developed a range of vaccine storage solutions that are specifically designed to meet the needs of healthcare providers in Africa. These solutions are highly efficient and reliable, ensuring that vaccines are stored at the correct temperature and remain effective for longer periods.</p>
								<p>Haier Biomedical has also developed a range of other medical equipment and solutions, including laboratory freezers, blood bank refrigerators, and medical refrigerators. These products are designed to meet the specific needs of healthcare providers in Africa, where resources are often limited and access to medical equipment is a challenge.</p>
								<p>Overall, Haier Biomedical's impact on healthcare infrastructure in Africa has been significant. By providing high-quality medical equipment and solutions that are specifically designed to meet the needs of healthcare providers in Africa, Haier Biomedical has played an important role in improving access to healthcare and enhancing the quality of healthcare services in the region.</p>

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
