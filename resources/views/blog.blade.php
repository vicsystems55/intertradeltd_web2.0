@extends('layouts.base')


@section('content')

		<!-- :: Breadcrumb Header -->
        <section class="breadcrumb-header style-2" id="page" style="background-image: url(assets/images/header/blog-banner.jpg)">
            <div class="overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="banner">
                            <h1>News</h1>
                            <ul>
                                <li><a href="index.html">Home</a></li>
                                <li><i class="fas fa-angle-right"></i></li>
                                <li>Our Blog</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- :: Blog -->
        <section class="blog py-100-70">
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
					<div class="col-lg-12 d-none">
                        <div class="pagination-area">
                            <ul class="pagination">
                                <li>Prev</li>
                                <li class="active">1</li>
                                <li>2</li>
                                <li>3</li>
                                <li>Next</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

@endsection
