@extends('layout')
 @section('content')
 <div class="agileinfo-ads-display col-md-9">
				<div class="wrapper">
					<!-- first section (nuts) -->
					<div class="product-sec1">
						<h3 class="heading-tittle">Nổi Bật</h3>
						@foreach($product_noibat as $key=>$high)
						<div class="col-md-4 product-men">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
								<img src="{{URL::to('public/uploads/product/'.$high->product_image)}}" alt="" width="160" height="150" />
									<div class="men-cart-pro">
										<div class="inner-men-cart-pro">
											<a href="{{URL::TO('/Chi-Tiet-San-Pham/'.$high->product_id)}}" class="link-product-add-cart">Xem Ngay</a>
										</div>
									</div>
									<span class="product-new-top">Light</span>
								</div>
								<div class="item-info-product ">
									<h4>
										<a href="{{URL::TO('/Chi-Tiet-San-Pham/'.$high->product_id)}}">{{$high->product_name}}</a>
									</h4>
									<div class="info-product-price">
										<span class="item_price">{{number_format($high->product_price).' '.'VNĐ'}}</span>
										<?php
										 $number_hehe = $high->product_price /7; 
										?>
										<del>{{number_format($high->product_price + $number_hehe)}}</del>
									</div>
									<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button">
											<form action="{{URL::to('/Luu-Gio-Hang')}}" method="post">
                                                @csrf
                                                <input type="hidden" value="{{$high->product_id}}" >
                                                <input type="hidden" value="{{$high->product_name}}" >
                                                <input type="hidden" value="{{$high->product_image}}" >
                                                <input type="hidden" value="{{$high->product_price}}" >
                                                <input type="hidden" value="1" name="qty">
                                                <input name="productid_hidden" type="hidden"  value="{{$high->product_id}}" />

                                                <button type="submit" class="btn-cart add-to-cart" data-id_product="{{$high->product_id}}" name="add-to-cart">
                                                Thêm Giỏ Hàng
                                                </button>
                                            </form>

									
										
								
									</div>

								</div>
							</div>
						</div>
						@endforeach
						<div class="clearfix"></div>
					</div>
					<!-- //first section (nuts) -->
					<!-- second section (nuts special) -->
					<div class="product-sec1 product-sec2">
						<div class="col-xs-7 effect-bg">
							<h3 class="">Giá Đở Cây Cảnh</h3>
							<h6>Tận hưởng tất cả các Sản phẩm lành mạnh của chúng tôi</h6>
							<p>Được Giảm Giá Thêm 10%</p>
						</div>
					
						<div class="col-xs-5 bg-right-nut">
							<img src="{{('public/frontend/images/cay-canh1.png')}}" alt="" width="300px">
						</div>
						<div class="clearfix"></div>
					</div>
					<!-- //second section (nuts special) -->
					<!-- third section (oils) -->
					<div class="product-sec1">
						<h3 class="heading-tittle"> Sản Phẩm Mới </h3>
						@foreach($product as $key=>$new)
						<div class="col-md-4 product-men">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
								<img src="{{URL::to('public/uploads/product/'.$new->product_image)}}" alt="" width="160" height="150" />
									<div class="men-cart-pro">
										<div class="inner-men-cart-pro">
											<a href="{{URL::TO('/Chi-Tiet-San-Pham/'.$new->product_id)}}" class="link-product-add-cart">Xem Ngay</a>
										</div>
									</div>
									<span class="product-new-top">new</span>
								</div>
								<div class="item-info-product ">
									<h4>
										<a href="{{URL::TO('/Chi-Tiet-San-Pham/'.$new->product_id)}}">{{$new->product_name}}</a>
									</h4>
									<div class="info-product-price">
										<span class="item_price">{{number_format($new->product_price).' '.'VNĐ'}}</span>
										<?php
										 $number_hehe = $new->product_price /7; 
										?>
										<del>{{number_format($new->product_price + $number_hehe)}}</del>
									</div>
									<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button">
											<form action="{{URL::to('/Luu-Gio-Hang')}}" method="post">
                                                @csrf
                                                <input type="hidden" value="{{$new->product_id}}" >
                                                <input type="hidden" value="{{$new->product_name}}" >
                                                <input type="hidden" value="{{$new->product_image}}" >
                                                <input type="hidden" value="{{$new->product_price}}" >
                                                <input type="hidden" value="1" name="qty">
                                                <input name="productid_hidden" type="hidden"  value="{{$new->product_id}}" />

                                                <button type="submit" class="btn-cart add-to-cart" data-id_product="{{$new->product_id}}" name="add-to-cart">
                                                Thêm Giỏ Hàng
                                                </button>
                                            </form>
									</div>

								</div>
							</div>
						</div>
						@endforeach
						<div class="clearfix"></div>
					</div>
					<!-- //third section (oils) -->
				
				</div>
			</div>
@endsection