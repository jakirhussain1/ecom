@extends('layouts/frontend_master')
@section('main')
	<aside id="colorlib-hero" class="breadcrumbs">
			<div class="flexslider">
				<ul class="slides">
			   	<li style="background-image: url(images/cover-img-1.jpg);">
			   		<div class="overlay"></div>
			   		<div class="container-fluid">
			   			<div class="row">
				   			<div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12 slider-text">
				   				<div class="slider-text-inner text-center">
				   					<h1>Shopping Cart</h1>
				   					<h2 class="bread"><span><a href="index.html">Home</a></span> <span><a href="shop.html">Product</a></span> <span>Shopping Cart</span></h2>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>
			  	</ul>
		  	</div>
		</aside>

		<div class="colorlib-shop">
			<div class="container">
				<div class="row row-pb-md">
					<div class="col-md-10 col-md-offset-1">
						<div class="process-wrap">
							<div class="process text-center active">
								<p><span>01</span></p>
								<h3>Shopping Cart</h3>
							</div>
							<div class="process text-center">
								<p><span>02</span></p>
								<h3>Checkout</h3>
							</div>
							<div class="process text-center">
								<p><span>03</span></p>
								<h3>Order Complete</h3>
							</div>
						</div>
					</div>
				</div>
				<div class="row row-pb-md">
					<div class="col-md-10 col-md-offset-1">
						<div class="product-name">
							<div class="one-forth text-center">
								<span>Product Details</span>
							</div>
							<div class="one-eight text-center">
								<span>Price</span>
							</div>
							<div class="one-eight text-center">
								<span>Quantity</span>
							</div>
							<div class="one-eight text-center">
								<span>Total</span>
							</div>
							<div class="one-eight text-center">
								<span>Remove</span>
							</div>
						</div>
						<div class="product-cart">
							<div class="one-forth">
								<div class="product-img" style="background-image: url(images/item-6.jpg);">
								</div>
								<div class="display-tc">
									<h3>Product Name</h3>
								</div>
							</div>
							<div class="one-eight text-center">
								<div class="display-tc">
									<span class="price">$68.00</span>
								</div>
							</div>
							<div class="one-eight text-center">
								<div class="display-tc">
									<input type="text" id="quantity" name="quantity" class="form-control input-number text-center" value="1" min="1" max="100">
								</div>
							</div>
							<div class="one-eight text-center">
								<div class="display-tc">
									<span class="price">$120.00</span>
								</div>
							</div>
							<div class="one-eight text-center">
								<div class="display-tc">
									<a href="#" class="closed"></a>
								</div>
							</div>
						</div>
						<div class="product-cart">
							<div class="one-forth">
								<div class="product-img" style="background-image: url(images/item-7.jpg);">
								</div>
								<div class="display-tc">
									<h3>Product Name</h3>
								</div>
							</div>
							<div class="one-eight text-center">
								<div class="display-tc">
									<span class="price">$68.00</span>
								</div>
							</div>
							<div class="one-eight text-center">
								<div class="display-tc">
									<form action="#">
										<input type="text" name="quantity" class="form-control input-number text-center" value="1" min="1" max="100">
									</form>
								</div>
							</div>
							<div class="one-eight text-center">
								<div class="display-tc">
									<span class="price">$120.00</span>
								</div>
							</div>
							<div class="one-eight text-center">
								<div class="display-tc">
									<a href="#" class="closed"></a>
								</div>
							</div>
						</div>
                        
					</div>
                    
				</div>
                
                <div class="row cart-buttons">
                    <div class="col-lg-5 col-md-5">
                        <a class="site-btn btn-continue" href="shop.html" style="background: #E26329;padding: 11px;display: inline-block;color: white;font-size: 20px;margin-bottom: 30px;margin-left: 94px;margin-top: -24px;">Continue shooping</a>
                    </div>
                    <div class="col-lg-7 col-md-7 text-lg-right text-right" style="margin-left: -97px;margin-top: -43px;">
                        <a class="site-btn btn-clear" href="" style="background: #403c3c;padding: 10px 15px;font-size: 18px;margin-right: 15px;color: white;">Clear cart</a>
                        <button type="" class="site-btn btn-line " style="background:#363d96;padding: 5px 15px;color: white;border: none;font-size: 18px;">Update Cart</button>
                    </div>
			     </div>
                
                
                
				<div class="row">
					<div class="col-md-10 col-md-offset-1" style="margin-top: 5%">
						<div class="total-wrap">
							<div class="row">
								<div class="col-md-8">
									<form action="#">
										<div class="row form-group">
											<div class="col-md-9">
												<input type="text" name="" class="form-control input-number" placeholder="Your Coupon Number...">
											</div>
											<div class="col-md-3">
												<input type="submit" value="Apply Coupon" class="btn btn-primary cupon-btn">
											</div>
										</div>
									</form>
                                    <div class="shipping_info">
                                      <h4 style="color:red; background:$ddd; padding:10px 20px;">Shipping method</h4>
                                      <p>Select the one you want :</p>
                                      <div class="shipping-chooes">
                                        <div class="shipping-chooes">
                                          <div class="sc-item">
                                            <input type="radio" name="">
                                            <label for="" id="" style="cursor:pointer">Next day delivery<span> ৳ 100</span></label>
                                          </div>
                                          <div class="sc-item">
                                            <input type="radio" name="" >
                                            <label for="" id="" style="cursor:pointer">Standard delivery<span> ৳ 50</span></label>
                                          </div>
                                          <div class="sc-item">
                                            <input type="radio" name=""  style="margin-left: -21px;">
                                            <label for="" id="" style="cursor:pointer;"> Personal Pickup<span> Free</span></label>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
								</div>
                                
								<div class="col-md-3 col-md-push-1 text-center">
									<div class="total">
										<div class="sub">
											<p><span>Subtotal:</span> <span>৳ 0</span></p>
                                            <p><span>Discount:</span> <span>- ৳ 0</span></p>
											<p style="border-bottom:1px solid orange"><span>Delivery:</span><span style="color:white;">৳ </span><span id="">0.00</span></p>
                                            <input type="hidden" name="" id="" value="0">
                                            <p><span></span></p><div style="margin-top: -32px;font-weight: bold;font-size: 20px;color: #020202;">Total:</div>
                                            <span style="color:white">৳ </span><span id="" style="color:white"> 0</span><p></p>
										</div>
										<div class="grand-total">
                                          <form action="checkout.html" method="post">
                                            <input type="hidden" name="_token" value="I8JxVtVLRfFHyOUbN5xzCr8hXjUrg6WCayhbZzNN">                        <input type="hidden" value="0">
                                            <button type="submit" class="btn btn-warning btn-design">Proceed to checkout</button>
                                          </form>
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
	
		

		

