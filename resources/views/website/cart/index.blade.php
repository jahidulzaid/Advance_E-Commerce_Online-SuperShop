@extends('website.master')

@section('title')
    Shopping Cart page
@endsection

@section('body')
    <div class="breadcrumbs">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="breadcrumbs-content">
                        <h1 class="page-title">Cart</h1>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <ul class="breadcrumb-nav">
                        <li><a href="index.html"><i class="lni lni-home"></i> Home</a></li>
                        <li><a href="index.html">Shop</a></li>
                        <li>Cart</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>


    <div class="shopping-cart section">
        <div class="container">
            <div class="cart-list-head">

                <div class="cart-list-title">
                    <div class="row">
                        <div class="col-lg-1 col-md-1 col-12">
                        </div>
                        <div class="col-lg-4 col-md-3 col-12">
                            <p>Product Name</p>
                        </div>
                        <div class="col-lg-2 col-md-2 col-12">
                            <p>Quantity</p>
                        </div>
                        <div class="col-lg-2 col-md-2 col-12">
                            <p>Subtotal</p>
                        </div>
                        <div class="col-lg-2 col-md-2 col-12">
                            <p>Discount</p>
                        </div>
                        <div class="col-lg-1 col-md-2 col-12">
                            <p>Remove</p>
                        </div>
                    </div>
                </div>


                <div class="cart-single-list">
                    <div class="row align-items-center">
                        <div class="col-lg-1 col-md-1 col-12">
                            <a href="product-details.html"><img src="{{ asset('/') }}website/assets/images/cart/01.jpg" alt="#"></a>
                        </div>
                        <div class="col-lg-4 col-md-3 col-12">
                            <h5 class="product-name"><a href="product-details.html">
                                    Canon EOS M50 Mirrorless Camera</a></h5>
                            <p class="product-des">
                                <span><em>Type:</em> Mirrorless</span>
                                <span><em>Color:</em> Black</span>
                            </p>
                        </div>
                        <div class="col-lg-2 col-md-2 col-12">
                            <div class="count-input">
                                <select class="form-control">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-2 col-12">
                            <p>$910.00</p>
                        </div>
                        <div class="col-lg-2 col-md-2 col-12">
                            <p>$29.00</p>
                        </div>
                        <div class="col-lg-1 col-md-2 col-12">
                            <a class="remove-item" href="javascript:void(0)"><i class="lni lni-close"></i></a>
                        </div>
                    </div>
                </div>


                <div class="cart-single-list">
                    <div class="row align-items-center">
                        <div class="col-lg-1 col-md-1 col-12">
                            <a href="product-details.html"><img src="{{ asset('/') }}website/assets/images/cart/02.jpg" alt="#"></a>
                        </div>
                        <div class="col-lg-4 col-md-3 col-12">
                            <h5 class="product-name"><a href="product-details.html">
                                    Apple iPhone X 256 GB Space Gray</a></h5>
                            <p class="product-des">
                                <span><em>Memory:</em> 256 GB</span>
                                <span><em>Color:</em> Space Gray</span>
                            </p>
                        </div>
                        <div class="col-lg-2 col-md-2 col-12">
                            <div class="count-input">
                                <select class="form-control">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-2 col-12">
                            <p>$1100.00</p>
                        </div>
                        <div class="col-lg-2 col-md-2 col-12">
                            <p>—</p>
                        </div>
                        <div class="col-lg-1 col-md-2 col-12">
                            <a class="remove-item" href="javascript:void(0)"><i class="lni lni-close"></i></a>
                        </div>
                    </div>
                </div>


                <div class="cart-single-list">
                    <div class="row align-items-center">
                        <div class="col-lg-1 col-md-1 col-12">
                            <a href="product-details.html"><img src="{{ asset('/') }}website/assets/images/cart/03.jpg" alt="#"></a>
                        </div>
                        <div class="col-lg-4 col-md-3 col-12">
                            <h5 class="product-name"><a href="product-details.html">HP LaserJet Pro Laser Printer</a></h5>
                            <p class="product-des">
                                <span><em>Type:</em> Laser</span>
                                <span><em>Color:</em> White</span>
                            </p>
                        </div>
                        <div class="col-lg-2 col-md-2 col-12">
                            <div class="count-input">
                                <select class="form-control">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-2 col-12">
                            <p>$550.00</p>
                        </div>
                        <div class="col-lg-2 col-md-2 col-12">
                            <p>—</p>
                        </div>
                        <div class="col-lg-1 col-md-2 col-12">
                            <a class="remove-item" href="javascript:void(0)"><i class="lni lni-close"></i></a>
                        </div>
                    </div>
                </div>

            </div>
            <div class="row">
                <div class="col-12">

                    <div class="total-amount">
                        <div class="row">
                            <div class="col-lg-8 col-md-6 col-12">
                                <div class="left">
                                    <div class="coupon">
                                        <form action="#" target="_blank">
                                            <input name="Coupon" placeholder="Enter Your Coupon">
                                            <div class="button">
                                                <button class="btn">Apply Coupon</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-12">
                                <div class="right">
                                    <ul>
                                        <li>Cart Subtotal<span>$2560.00</span></li>
                                        <li>Shipping<span>Free</span></li>
                                        <li>You Save<span>$29.00</span></li>
                                        <li class="last">You Pay<span>$2531.00</span></li>
                                    </ul>
                                    <div class="button">
                                        <a href="{{ route('checkout') }}" class="btn">Checkout</a>
                                        <a href="product-grids.html" class="btn btn-alt">Continue shopping</a>
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
