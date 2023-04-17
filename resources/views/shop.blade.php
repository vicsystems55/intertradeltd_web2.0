@extends('layouts.base')

@section('content')

		<!-- :: Breadcrumb Header -->
        <section class="breadcrumb-header style-2" id="page" style="background-image: url(assets/images/header/02_breadcrumb-header.jpg)">
            <div class="overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="banner">
                            <h1>Shop</h1>
                            <ul>
                                <li><a href="index.html">Home</a></li>
                                <li><i class="fas fa-angle-right"></i></li>
                                <li>Shop</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

		<!-- :: Shop Page -->
		<div class="shop-page py-100-70">
            <div class="container">
                <div class="row">
					<div class="col-lg-4">
						<div class="sidebar-shop mr-20">
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
							<div class="widget">
								<div class="widget-title">
									<h3>Price Range</h3>
								</div>
								<div class="widget-body">
									<input type="text" class="js-range-slider" name="my_range" value="" />
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
											<li><a href="#"><i class="fab fa-dribbble"></i></a></li>
											<li><a href="#"><i class="fab fa-behance"></i></a></li>
										</ul>
									</div>
								</div>
							</div>


                        </div>
					</div>
					<div class="col-lg-8">
						<div class="row">

                            @forelse ($products as $product)
                            <div  class="col-md-4">
								<div class="shop-item">
									<div class="item-img">
										<img class="img-fluid" style="width: 200px; height: 200px; object-fit: cover;" src="{{$product->featured_image}}" alt="01 Shop">
										<div class="box-more d-flex align-items-center">
											<a href="01_single-product.html" class="btn-1"><span>Add To Card</span></a>
										</div>
									</div>
									<div class="item-text text-center">
										<a href="01_single-product.html" class="open-item-shop"><h4>{{$product->name}}</h4></a>
										<div class="item-review">
											<span><i class="fas fa-star active"></i></span>
											<span><i class="fas fa-star active"></i></span>
											<span><i class="fas fa-star active"></i></span>
											<span><i class="fas fa-star active"></i></span>
											<span><i class="fas fa-star"></i></span>
										</div>
										<span class="price">$38.00</span>
									</div>
								</div>
							</div>
                            @empty

                            <h6 class="py-5 text-center">No Products..</h6>

                            @endforelse


							<div class="col-lg-12">
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
                </div>
            </div>
        </div>

@endsection
