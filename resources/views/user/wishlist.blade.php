@extends('user.layout')
@section('content')

    <!-- PAGE-TITLE-AREA -->
    <section class="page-title-area">
        <div class="page-title-overlay">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="page-title">
                            <h3>Wishlist</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- PAGE-TITLE-AREA:END -->
	
    <!-- BREADCRUMBS -->
    <div class="title-breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="bred-title">
                        <h3>Wishlist</h3>
                    </div>
                    <ol class="breadcrumb">
                        <li><a href="index.html">Home</a>
                        </li>
                        <li><a href="about-us.html">Wishlist</a>
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- BREADCRUMBS:END -->
	
    <!-- WISH-AREA     -->
    <div class="wish-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-3 col-xs-12">
                    <div class="product-single">
                        <a href="#"><img src="{{ asset('public/user-templates/images/wish1.png') }}" alt="#">
                        </a>
                        <div class="tag new">
                            <span>new</span>
                        </div>
                        <div class="hot-wid-rating">
                            <h4><a href="single-product.html">Black office chair</a></h4>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>

                            <div class="product-wid-price">
                                <ins>$220.00</ins>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-12">
                    <div class="product-single">
                        <a href="#"><img src="{{ asset('public/user-templates/images/wish2.png') }}" alt="#">
                        </a>
                        
                        <div class="hot-wid-rating">
                            <h4><a href="single-product.html">Living room sofa</a></h4>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>

                            <div class="product-wid-price">
                                <ins>$200.00</ins>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-12">
                    <div class="product-single">
                        <a href="#"><img src="{{ asset('public/user-templates/images/wish3.png') }}" alt="#">
                        </a>
                        <div class="tag percent">
                            <span>15%</span>
                        </div>
                        <div class="hot-wid-rating">
                            <h4><a href="single-product.html">Trendy chair</a></h4>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>

                            <div class="product-wid-price">
                                <ins>$150.00</ins>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-12">
                    <div class="product-single">
                        <a href="#"><img src="{{ asset('public/user-templates/images/wish4.png') }}" alt="#">
                        </a>
                        
                        <div class="hot-wid-rating">
                            <h4><a href="single-product.html">Modern chair</a></h4>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>

                            <div class="product-wid-price">
                                <ins>$180.00</ins>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-12">
                    <div class="product-single">
                        <a href="#"><img src="{{ asset('public/user-templates/images/wish5.png') }}" alt="#">
                        </a>
                        <div class="tag percent">
                            <span>10%</span>
                        </div>
                        <div class="hot-wid-rating">
                            <h4><a href="single-product.html">Sofa beauty</a></h4>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>

                            <div class="product-wid-price">
                                <ins>$250.00</ins>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-12">
                    <div class="product-single">
                        <a href="#"><img src="{{ asset('public/user-templates/images/wish6.png') }}" alt="#">
                        </a>
                        <div class="tag new">
                            <span>new</span>
                        </div>
                        <div class="hot-wid-rating">
                            <h4><a href="single-product.html">Milky sofa</a></h4>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>

                            <div class="product-wid-price">
                                <ins>$110.00</ins>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="wish-button">
                        <button type="button" class="btn btn-default add-cart">Add all to the cart</button>
                        <button type="button" class="btn btn-default clear-list">Clear the list</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- WISH-AREA:END   -->
	
   @endsection