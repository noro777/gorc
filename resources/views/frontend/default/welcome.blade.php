@extends('frontend.default.layouts.app')

{{--@section('styles')--}}
{{--<link rel="stylesheet" href="{{asset(asset_path('frontend/default/css/page_css/welcome.css'))}}" />--}}
{{--@endsection--}}

{{--@section('share_meta')--}}
{{--  @php--}}
{{--      $tags = str_replace(',', ' ',app('general_setting')->meta_tags);--}}
{{--  @endphp--}}
{{--  <meta name="keywords" content="{{$tags}}">--}}
{{--  <meta name="description" content="{{app('general_setting')->meta_description}}">--}}
{{--  <link rel="canonical" href="{{url()->current()}}"/>--}}
{{--@endsection--}}

@section('content')


{{-- <!-- banner paer here -->--}}
{{--    @dd($headers)--}}
{{-- @include('frontend.default.partials._mega_menu')--}}
{{--  <!-- banner paer end -->--}}

{{--  <!-- best product list here -->--}}
{{--  <section class="best_product_list mt_40">--}}
{{--    @php--}}
{{--        $best_deal = $widgets->where('section_name','best_deals')->first();--}}

{{--    @endphp--}}
{{--    <div class="container">--}}
{{--      <div class="row">--}}
{{--        <div id="best_deals" class="{{$best_deal->column_size}} {{$best_deal->status == 0?'d-none':''}}">--}}
{{--          <div class="best_product_list_iner p_30 bg-white">--}}
{{--            <div class="product_list_tittle">--}}
{{--              <h5 id="best_deals_title">{{$best_deal->title}}</h5>--}}
{{--              <a href="{{route('frontend.category-product',['slug' =>  ($best_deal->section_name), 'item' =>'product'])}}" class="product_btn">{{ __('common.view_all') }}</a>--}}

{{--            </div>--}}
{{--            <div class="best_product_slider product_slider_1 owl-carousel">--}}
{{--              @foreach($best_deal->getProductByQuery() as $key => $product)--}}
{{--              <div class="single_best_product_list product_tricker">--}}
{{--                <a href="{{singleProductURL($product->seller->slug, $product->slug)}}"  class="product_img">--}}
{{--                  <img @if ($product->thum_img != null) src="{{showImage($product->thum_img)}}" @else src="{{showImage($product->product->thumbnail_image_source)}}" @endif alt="#" class="img-fluid" />--}}
{{--                </a>--}}
{{--                <div class="product_text d-flex justify-content-between">--}}
{{--                  <div class="product_text_iner">--}}
{{--                    <a href="{{singleProductURL($product->seller->slug, $product->slug)}}"><h5>@if($product->product_name != null) {{ \Illuminate\Support\Str::limit(@$product->product_name, 15, $end='...') }} @else {{ \Illuminate\Support\Str::limit(@$product->product->product_name, 15, $end='...') }} @endif</h5></a>--}}
{{--                    <p>--}}
{{--                      @if($product->hasDeal)--}}
{{--                        {{single_price(selling_price(@$product->skus->first()->selling_price,$product->hasDeal->discount_type,$product->hasDeal->discount))}}--}}
{{--                      @else--}}
{{--                        @if($product->hasDiscount == 'yes')--}}
{{--                        {{single_price(selling_price(@$product->skus->first()->selling_price,$product->discount_type,$product->discount))}}--}}
{{--                        @else--}}
{{--                        {{single_price(@$product->skus->first()->selling_price)}}--}}
{{--                        @endif--}}

{{--                      @endif--}}
{{--                    </p>--}}

{{--                  </div>--}}
{{--                  @if($product->hasDeal)--}}
{{--                    @if($product->hasDeal->discount >0)--}}
{{--                      <span class="product_btn">--}}

{{--                        @if($product->hasDeal->discount_type ==0)--}}
{{--                          {{$product->hasDeal->discount}} % off--}}
{{--                        @else--}}
{{--                        {{single_price($product->hasDeal->discount)}} off--}}
{{--                        @endif--}}


{{--                      </span>--}}
{{--                    @endif--}}
{{--                  @else--}}

{{--                    @if($product->hasDiscount == 'yes')--}}

{{--                      @if($product->discount >0)--}}
{{--                        <span class="product_btn">--}}

{{--                          @if($product->discount_type ==0)--}}
{{--                            {{$product->discount}} % off--}}
{{--                          @else--}}
{{--                          {{single_price($product->discount)}} off--}}
{{--                          @endif--}}


{{--                        </span>--}}
{{--                      @endif--}}
{{--                    @endif--}}
{{--                  @endif--}}
{{--                </div>--}}
{{--              </div>--}}
{{--              @endforeach--}}

{{--            </div>--}}
{{--          </div>--}}
{{--        </div>--}}
{{--      </div>--}}
{{--    </div>--}}
{{--  </section>--}}
{{--  <!-- best product list end -->--}}

{{--  <!-- feature category start -->--}}
{{--  <section class="feature_product mt_40">--}}
{{--    <div class="container">--}}
{{--      @php--}}
{{--        $feature_categories = $widgets->where('section_name','feature_categories')->first();--}}
{{--      @endphp--}}
{{--      <div class="row">--}}
{{--        <div id="feature_categories" class="{{$feature_categories->column_size}} {{$feature_categories->status == 0?'d-none':''}}">--}}
{{--          <div class="product_list_tittle">--}}
{{--            <h5 id="feature_categories_title">{{$feature_categories->title}}</h5>--}}
{{--          </div>--}}
{{--          <div class="feature_slide owl-carousel">--}}
{{--            @foreach($feature_categories->getCategoryByQuery() as $key => $category)--}}

{{--            @php--}}
{{--              $category_products = @$category->sellerProducts();--}}
{{--            @endphp--}}

{{--            @if($key % 2 == 0)--}}
{{--            <div class="single_feature_slide bg-white p_15">--}}
{{--              <div class="product_list_tittle">--}}
{{--                <h5>{{$category->name}}</h5>--}}
{{--                <a href="{{route('frontend.category-product',['slug' => $category->slug, 'item' =>'category'])}}" class="product_btn">{{ __('common.view_all') }}</a>--}}
{{--              </div>--}}
{{--              <div class="feature_slide_img colum6">--}}

{{--                @foreach($category_products as $key => $product)--}}

{{--                <a href="{{singleProductURL($product->seller->slug, $product->slug)}}" class="single_feature_slide_img">--}}
{{--                  <img @if ($product->thum_img != null) src="{{showImage($product->thum_img)}}" @else src="{{showImage($product->product->thumbnail_image_source)}}" @endif alt="{{$product->product->product_name}}" class="img-fluid" />--}}
{{--                </a>--}}

{{--                @endforeach--}}

{{--              </div>--}}
{{--            </div>--}}
{{--            @else--}}
{{--            <div class="single_feature_slide bg-white p_20">--}}
{{--              <div class="product_list_tittle">--}}
{{--                <h5>{{$category->name}}</h5>--}}
{{--                <a href="{{route('frontend.category-product',['slug' => $category->slug, 'item' =>'category'])}}" class="product_btn">{{ __('common.view_all') }}</a>--}}
{{--              </div>--}}
{{--              <div class="feature_slide_img colum3">--}}

{{--                <div class="single_img">--}}
{{--                  @if(isset($category_products[0]))--}}

{{--                  <a href="{{singleProductURL($category_products[0]->seller->slug, $category_products[0]->slug)}}" class="single_feature_slide_img">--}}
{{--                    <img src="{{showImage(@$category_products[0]->product->thumbnail_image_source)}}" alt="#" />--}}
{{--                  </a>--}}
{{--                  @endif--}}
{{--                  @if(isset($category_products[1]))--}}
{{--                  <a href="{{singleProductURL($category_products[1]->seller->slug, $category_products[1]->slug)}}" class="single_feature_slide_img">--}}
{{--                    <img src="{{showImage($category_products[1]->product->thumbnail_image_source)}}" alt="#" />--}}
{{--                  </a>--}}
{{--                  @endif--}}
{{--                </div>--}}
{{--                @if(isset($category_products[2]))--}}
{{--                <div class="big_img">--}}
{{--                  <a href="{{singleProductURL($category_products[2]->seller->slug, $category_products[2]->slug)}}" class="single_feature_slide_img">--}}
{{--                    <img src="{{showImage($category_products[2]->product->thumbnail_image_source)}}" alt="#" />--}}
{{--                  </a>--}}
{{--                </div>--}}
{{--                @endif--}}

{{--              </div>--}}
{{--            </div>--}}
{{--            @endif--}}

{{--            @endforeach--}}

{{--          </div>--}}
{{--        </div>--}}
{{--      </div>--}}
{{--    </div>--}}
{{--  </section>--}}
{{--  <!-- feature product end -->--}}

{{--  <!--feature brands start-->--}}
{{--  <section class="feature_brands mt_40">--}}
{{--    <div class="container">--}}
{{--      @php--}}
{{--        $top_brands = $widgets->where('section_name','top_brands')->first();--}}
{{--      @endphp--}}
{{--      <div class="row">--}}
{{--        <div id="top_brands" class="{{$top_brands->column_size}} {{$top_brands->status == 0?'d-none':''}}">--}}
{{--          <div class="best_product_list_iner p_20 bg-white">--}}
{{--            <div class="product_list_tittle">--}}
{{--              <h5 id="top_brands_title">{{$top_brands->title}}</h5>--}}

{{--            </div>--}}
{{--            <div class="best_product_slider product_slider_2 owl-carousel pb-15">--}}
{{--              @foreach($top_brands->getBrandByQuery() as $key => $brand)--}}
{{--              <div class="single_best_product_list product_tricker">--}}
{{--                <a href="{{route('frontend.category-product',['slug' => $brand->slug, 'item' =>'brand'])}}" class="product_img">--}}
{{--                  <img--}}
{{--                    src="{{ showImage($brand->logo?$brand->logo:'frontend/default/img/brand_image.png') }}"--}}
{{--                    alt="#"--}}
{{--                    class="img-fluid"--}}
{{--                  />--}}
{{--                </a>--}}
{{--                <div class="product_text d-flex justify-content-between">--}}
{{--                  <div class="product_text_iner top_brand_product_text">--}}
{{--                    <a href="{{route('frontend.category-product',['slug' => $brand->slug, 'item' =>'brand'])}}"><h5 class="brand_name">{{$brand->name}}</h5></a>--}}

{{--                  </div>--}}
{{--                </div>--}}
{{--              </div>--}}
{{--              @endforeach--}}


{{--            </div>--}}
{{--          </div>--}}
{{--        </div>--}}

{{--        @php--}}
{{--        $top_picks = $widgets->where('section_name','top_picks')->first();--}}
{{--        @endphp--}}
{{--        <div id="top_picks" class="{{$top_picks->column_size}} {{$top_picks->status == 0?'d-none':''}}">--}}
{{--          <div class="best_product_list_iner p_20 bg-white">--}}
{{--            <div class="product_list_tittle">--}}
{{--              <h5 id="top_picks_title">{{$top_picks->title}}</h5>--}}
{{--              <a href="{{route('frontend.category-product',['slug' => ($top_picks->section_name), 'item' =>'product'])}}" class="product_btn">{{ __('common.view_all') }}</a>--}}
{{--            </div>--}}
{{--            <div class="best_product_slider product_slider_2 owl-carousel">--}}

{{--              @foreach($top_picks->getProductByQuery() as $key => $product)--}}
{{--                  @if($key % 2 == 0)--}}
{{--                  <div class="single_best_product_list product_tricker">--}}
{{--                    <a href="{{singleProductURL($product->seller->slug, $product->slug)}}" class="product_img">--}}
{{--                      <img @if ($product->thum_img != null) src="{{showImage($product->thum_img)}}" @else src="{{showImage(@$product->product->thumbnail_image_source)}}" @endif alt="{{@$product->product->product_name}}" class="img-fluid" />--}}
{{--                    </a>--}}
{{--                    <div class="product_text d-flex justify-content-between">--}}
{{--                      <div class="product_text_iner">--}}
{{--                        <a href="{{singleProductURL($product->seller->slug, $product->slug)}}"><h5>@if ($product->product_name) {{ \Illuminate\Support\Str::limit(@$product->product_name, 15, $end='...') }} @else {{ \Illuminate\Support\Str::limit(@$product->product->product_name, 15, $end='...') }} @endif</h5></a>--}}
{{--                        <p>--}}
{{--                          @if($product->hasDeal)--}}
{{--                            {{single_price(selling_price($product->skus->first()->selling_price,$product->hasDeal->discount_type,$product->hasDeal->discount))}}--}}
{{--                          @else--}}
{{--                            @if($product->hasDiscount == 'yes')--}}
{{--                            {{single_price(selling_price($product->skus->first()->selling_price,$product->discount_type,$product->discount))}}--}}
{{--                            @else--}}
{{--                            {{single_price($product->skus->first()->selling_price)}}--}}
{{--                            @endif--}}
{{--                          @endif--}}
{{--                        </p>--}}
{{--                      </div>--}}

{{--                      @if($product->hasDeal)--}}
{{--                        @if($product->hasDeal->discount >0)--}}
{{--                          <span class="product_btn">--}}

{{--                            @if($product->hasDeal->discount_type ==0)--}}
{{--                              {{$product->hasDeal->discount}} % off--}}
{{--                            @else--}}
{{--                            {{single_price($product->hasDeal->discount)}} off--}}
{{--                            @endif--}}


{{--                          </span>--}}
{{--                        @endif--}}
{{--                      @else--}}
{{--                        @if($product->hasDiscount == 'yes')--}}
{{--                          @if($product->discount >0)--}}
{{--                            <span class="product_btn">--}}

{{--                              @if($product->discount_type ==0)--}}
{{--                                {{$product->discount}} % off--}}
{{--                              @else--}}
{{--                              {{single_price($product->discount)}} off--}}
{{--                              @endif--}}


{{--                            </span>--}}
{{--                          @endif--}}
{{--                        @endif--}}
{{--                      @endif--}}


{{--                    </div>--}}
{{--                  </div>--}}
{{--                  @else--}}
{{--                  <div class="single_best_product_list product_tricker">--}}
{{--                    <div class="feature_slide_img colum3">--}}
{{--                      <div class="single_img">--}}
{{--                        <a href="{{singleProductURL($product->seller->slug, $product->slug)}}" class="single_feature_slide_img">--}}
{{--                          <img src="--}}
{{--                            @if($product->thum_img)--}}
{{--                            {{showImage(@$product->thum_img)}}--}}
{{--                            @else--}}
{{--                            {{showImage(@$product->product->thumbnail_image_source)}}--}}
{{--                            @endif--}}
{{--                          " alt="#" />--}}
{{--                        </a>--}}
{{--                        <a href="{{singleProductURL($product->seller->slug, $product->slug)}}" class="single_feature_slide_img">--}}
{{--                          <img src="--}}
{{--                            @if(@$product->product->gallary_images[0]->images_source)--}}
{{--                            {{showImage(@$product->product->gallary_images[0]->images_source)}}--}}
{{--                            @elseif(@$product->thum_img)--}}
{{--                            {{showImage(@$product->thum_img)}}--}}
{{--                            @else--}}
{{--                            {{showImage(@$product->product->thumbnail_image_source)}}--}}
{{--                            @endif--}}
{{--                          " alt="#" />--}}
{{--                        </a>--}}
{{--                      </div>--}}
{{--                      <div class="big_img">--}}
{{--                        <a href="{{singleProductURL($product->seller->slug, $product->slug)}}" class="single_feature_slide_img">--}}
{{--                          <img src="--}}
{{--                          @if(@$product->product->gallary_images[1]->images_source)--}}
{{--                          {{showImage(@$product->product->gallary_images[1]->images_source)}}--}}
{{--                          @elseif(@$product->thum_img)--}}
{{--                          {{showImage(@$product->thum_img)}}--}}
{{--                          @else--}}
{{--                          {{showImage(@$product->product->thumbnail_image_source)}}--}}
{{--                          @endif--}}
{{--                          " alt="#" />--}}
{{--                        </a>--}}
{{--                      </div>--}}
{{--                    </div>--}}
{{--                    <div class="product_text d-flex justify-content-between">--}}
{{--                      <div class="product_text_iner">--}}
{{--                        <a href="{{singleProductURL($product->seller->slug, $product->slug)}}"><h5>@if ($product->product_name) {{ \Illuminate\Support\Str::limit(@$product->product_name, 15, $end='...') }} @else {{ \Illuminate\Support\Str::limit(@$product->product->product_name, 15, $end='...') }} @endif</h5></a>--}}
{{--                        <p>--}}
{{--                          @if($product->hasDeal)--}}
{{--                            {{single_price(selling_price($product->skus->first()->selling_price,$product->hasDeal->discount_type,$product->hasDeal->discount))}}--}}
{{--                          @else--}}
{{--                            @if($product->hasDiscount == 'yes')--}}
{{--                            {{single_price(selling_price($product->skus->first()->selling_price,$product->discount_type,$product->discount))}}--}}
{{--                            @else--}}
{{--                            {{single_price($product->skus->first()->selling_price)}}--}}
{{--                            @endif--}}
{{--                          @endif--}}
{{--                        </p>--}}
{{--                      </div>--}}

{{--                      @if($product->hasDeal)--}}
{{--                        @if($product->hasDeal->discount >0)--}}
{{--                          <span class="product_btn">--}}

{{--                            @if($product->hasDeal->discount_type ==0)--}}
{{--                              {{$product->hasDeal->discount}} % off--}}
{{--                            @else--}}
{{--                            {{single_price($product->hasDeal->discount)}} off--}}
{{--                            @endif--}}


{{--                          </span>--}}
{{--                        @endif--}}
{{--                      @else--}}
{{--                        @if($product->hasDiscount == 'yes')--}}
{{--                          @if($product->discount >0)--}}
{{--                            <span class="product_btn">--}}

{{--                              @if($product->discount_type ==0)--}}
{{--                                {{$product->discount}} % off--}}
{{--                              @else--}}
{{--                              {{single_price($product->discount)}} off--}}
{{--                              @endif--}}


{{--                            </span>--}}
{{--                          @endif--}}
{{--                        @endif--}}
{{--                      @endif--}}



{{--                    </div>--}}
{{--                  </div>--}}
{{--                  @endif--}}
{{--              @endforeach--}}

{{--            </div>--}}
{{--          </div>--}}
{{--        </div>--}}
{{--      </div>--}}
{{--    </div>--}}
{{--  </section>--}}
{{--  <!--feature brands end-->--}}

{{--  <!-- all product -->--}}
{{--  <section class="all_product mt_40">--}}
{{--    @php--}}
{{--        $more_products = $widgets->where('section_name','more_products')->first();--}}

{{--    @endphp--}}
{{--    <div class="container">--}}
{{--      <div class="row dataApp">--}}
{{--        <div id="more_products" class="{{$more_products->column_size}} {{$more_products->status == 0?'d-none':''}}">--}}
{{--          <div class="row mb_32">--}}
{{--            <div class="col-lg-12">--}}
{{--              <div class="product_list_tittle">--}}
{{--                <h5 id="more_products_title">{{$more_products->title}}</h5>--}}
{{--              </div>--}}
{{--            </div>--}}
{{--            @foreach($more_products->getHomePageProductByQuery() as $key => $product)--}}

{{--                <div class="col-6 col-xl-2 col-lg-3 col-sm-6 col-md-4 single_product_item">--}}
{{--                    <div class="single_product_list product_tricker">--}}
{{--                        <div class="product_img">--}}
{{--                            <a href="{{singleProductURL($product->seller->slug, $product->slug)}}" class="product_img_iner">--}}
{{--                                <img @if ($product->thum_img != null) src="{{showImage($product->thum_img)}}" @else src="{{showImage(@$product->product->thumbnail_image_source)}}" @endif alt="{{@$product->product->product_name}}" class="img-fluid" />--}}
{{--                            </a>--}}
{{--                            <div class="socal_icon">--}}
{{--                                <a href="" class="add_to_wishlist {{$product->is_wishlist() == 1?'is_wishlist':''}}" id="wishlistbtn_{{$product->id}}" data-product_id="{{$product->id}}" data-seller_id="{{$product->user_id}}"> <i class="ti-heart"></i> </a>--}}
{{--                                <a href="" class="addToCompareFromThumnail" data-producttype="{{ @$product->product->product_type }}" data-seller={{ $product->user_id }} data-product-sku={{ @$product->skus->first()->id }} data-product-id={{ $product->id }}> <i class="ti-exchange-vertical"></i> </a>--}}
{{--                                <a class="addToCartFromThumnail" data-producttype="{{ @$product->product->product_type }}" data-seller={{ $product->user_id }} data-product-sku={{ @$product->skus->first()->id }}--}}
{{--                                @if(@$product->hasDeal)--}}
{{--                                data-base-price={{ selling_price(@$product->skus->first()->selling_price,@$product->hasDeal->discount_type,@$product->hasDeal->discount) }}--}}
{{--                                @else--}}
{{--                                  @if($product->hasDiscount == 'yes')--}}
{{--                                  data-base-price={{ selling_price(@$product->skus->first()->selling_price,@$product->discount_type,@$product->discount) }}--}}
{{--                                  @else--}}
{{--                                  data-base-price={{ @$product->skus->first()->selling_price }}--}}
{{--                                  @endif--}}

{{--                                @endif--}}
{{--                                data-shipping-method=0--}}
{{--                                data-product-id={{ $product->id }}--}}
{{--                                data-stock_manage="{{$product->stock_manage}}"--}}
{{--                                data-stock="{{@$product->skus->first()->product_stock}}"--}}
{{--                                data-min_qty="{{$product->product->minimum_order_qty}}"> <i class="ti-bag"></i> </a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    <div class="product_text">--}}
{{--                    <h5>--}}
{{--                    <a href="{{singleProductURL($product->seller->slug, $product->slug)}}">@if ($product->product_name) {{ \Illuminate\Support\Str::limit(@$product->product_name, 22, $end='...') }} @else {{ \Illuminate\Support\Str::limit(@$product->product->product_name, 22, $end='...') }} @endif</a>--}}

{{--                  </h5>--}}
{{--                        <div class="product_review_star d-flex justify-content-between align-items-center flex-wrap">--}}
{{--                        <p>--}}
{{--                            @if($product->hasDeal)--}}
{{--                                {{single_price(selling_price($product->skus->first()->selling_price,$product->hasDeal->discount_type,$product->hasDeal->discount))}}--}}
{{--                            @else--}}
{{--                                @if($product->hasDiscount == 'yes')--}}
{{--                                    {{single_price(selling_price(@$product->skus->first()->selling_price,@$product->discount_type,@$product->discount))}}--}}

{{--                                @else--}}
{{--                                    {{single_price(@$product->skus->first()->selling_price)}}--}}
{{--                                @endif--}}
{{--                            @endif--}}
{{--                        </p>--}}
{{--                            <div class="review_star_icon">--}}
{{--                                @php--}}
{{--                                    $reviews = $product->reviews->where('status',1)->pluck('rating');--}}

{{--                                    if(count($reviews)>0){--}}
{{--                                        $value = 0;--}}
{{--                                        $rating = 0;--}}
{{--                                        foreach($reviews as $review){--}}
{{--                                            $value += $review;--}}
{{--                                        }--}}
{{--                                        $rating = $value/count($reviews);--}}
{{--                                        $total_review = count($reviews);--}}
{{--                                    }else{--}}
{{--                                        $rating = 0;--}}
{{--                                        $total_review = 0;--}}
{{--                                    }--}}
{{--                                @endphp--}}
{{--                                @if($rating == 0)--}}
{{--                                    <i class="fas fa-star non_rated "></i>--}}
{{--                                    <i class="fas fa-star non_rated "></i>--}}
{{--                                    <i class="fas fa-star non_rated "></i>--}}
{{--                                    <i class="fas fa-star non_rated "></i>--}}
{{--                                    <i class="fas fa-star non_rated "></i>--}}
{{--                                @elseif($rating < 1 && $rating > 0)--}}
{{--                                    <i class="fas fa-star-half-alt"></i>--}}
{{--                                    <i class="fas fa-star non_rated "></i>--}}
{{--                                    <i class="fas fa-star non_rated "></i>--}}
{{--                                    <i class="fas fa-star non_rated "></i>--}}
{{--                                    <i class="fas fa-star non_rated "></i>--}}
{{--                                @elseif($rating <= 1 && $rating > 0)--}}
{{--                                    <i class="fas fa-star"></i>--}}
{{--                                    <i class="fas fa-star non_rated "></i>--}}
{{--                                    <i class="fas fa-star non_rated "></i>--}}
{{--                                    <i class="fas fa-star non_rated "></i>--}}
{{--                                    <i class="fas fa-star non_rated "></i>--}}
{{--                                @elseif($rating < 2 && $rating > 1)--}}
{{--                                    <i class="fas fa-star"></i>--}}
{{--                                    <i class="fas fa-star-half-alt"></i>--}}
{{--                                    <i class="fas fa-star non_rated "></i>--}}
{{--                                    <i class="fas fa-star non_rated "></i>--}}
{{--                                    <i class="fas fa-star non_rated "></i>--}}
{{--                                @elseif($rating <= 2 && $rating > 1)--}}
{{--                                    <i class="fas fa-star"></i>--}}
{{--                                    <i class="fas fa-star"></i>--}}
{{--                                    <i class="fas fa-star non_rated "></i>--}}
{{--                                    <i class="fas fa-star non_rated "></i>--}}
{{--                                    <i class="fas fa-star non_rated "></i>--}}
{{--                                @elseif($rating < 3 && $rating > 2)--}}
{{--                                    <i class="fas fa-star"></i>--}}
{{--                                    <i class="fas fa-star"></i>--}}
{{--                                    <i class="fas fa-star-half-alt"></i>--}}
{{--                                    <i class="fas fa-star non_rated "></i>--}}
{{--                                    <i class="fas fa-star non_rated "></i>--}}
{{--                                @elseif($rating <= 3 && $rating > 2)--}}
{{--                                    <i class="fas fa-star"></i>--}}
{{--                                    <i class="fas fa-star"></i>--}}
{{--                                    <i class="fas fa-star "></i>--}}
{{--                                    <i class="fas fa-star non_rated "></i>--}}
{{--                                    <i class="fas fa-star non_rated "></i>--}}
{{--                                @elseif($rating < 4 && $rating > 3)--}}
{{--                                    <i class="fas fa-star"></i>--}}
{{--                                    <i class="fas fa-star"></i>--}}
{{--                                    <i class="fas fa-star "></i>--}}
{{--                                    <i class="fas fa-star-half-alt"></i>--}}
{{--                                    <i class="fas fa-star non_rated "></i>--}}
{{--                                @elseif($rating <= 4 && $rating > 3)--}}
{{--                                    <i class="fas fa-star"></i>--}}
{{--                                    <i class="fas fa-star"></i>--}}
{{--                                    <i class="fas fa-star "></i>--}}
{{--                                    <i class="fas fa-star "></i>--}}
{{--                                    <i class="fas fa-star non_rated "></i>--}}
{{--                                @elseif($rating < 5 && $rating > 4)--}}
{{--                                    <i class="fas fa-star"></i>--}}
{{--                                    <i class="fas fa-star"></i>--}}
{{--                                    <i class="fas fa-star "></i>--}}
{{--                                    <i class="fas fa-star "></i>--}}
{{--                                    <i class="fas fa-star-half-alt"></i>--}}
{{--                                @else--}}
{{--                                    <i class="fas fa-star"></i>--}}
{{--                                    <i class="fas fa-star"></i>--}}
{{--                                    <i class="fas fa-star "></i>--}}
{{--                                    <i class="fas fa-star "></i>--}}
{{--                                    <i class="fas fa-star "></i>--}}
{{--                                @endif--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    @if($product->hasDeal)--}}
{{--                        @if($product->hasDeal->discount >0)--}}
{{--                            <span class="new_price">--}}
{{--                                @if($product->hasDeal->discount >0)--}}
{{--                                    @if($product->hasDeal->discount_type ==0)--}}
{{--                                        {{$product->hasDeal->discount}} % off--}}
{{--                                    @else--}}
{{--                                        {{single_price($product->hasDeal->discount)}} off--}}
{{--                                    @endif--}}

{{--                                @endif--}}
{{--                            </span>--}}
{{--                        @endif--}}
{{--                    @else--}}
{{--                        @if($product->hasDiscount == 'yes')--}}
{{--                          @if($product->discount > 0)--}}
{{--                            <span class="new_price">--}}
{{--                                @if($product->discount >0)--}}
{{--                                    @if($product->discount_type ==0)--}}
{{--                                        {{$product->discount}} % off--}}
{{--                                    @else--}}
{{--                                        {{single_price($product->discount)}} off--}}
{{--                                    @endif--}}
{{--                                @endif--}}
{{--                            </span>--}}
{{--                          @endif--}}
{{--                        @endif--}}
{{--                    @endif--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            @endforeach--}}
{{--          </div>--}}
{{--        </div>--}}
{{--      </div>--}}
{{--    </div>--}}

{{--    <a id="loadmore" class="load_more_btn_homepage mt-2"> <i class="ti-reload"></i> {{ __('defaultTheme.load_more') }}</a>--}}
{{--    <input type="hidden" id="login_check" value="@if(auth()->check()) 1 @else 0 @endif">--}}

{{--    <div class="add-product-to-cart-using-modal">--}}

{{--    </div>--}}
{{--  </section>--}}
{{--  @include(theme('partials._subscription_modal'))--}}


{{--@php--}}
{{--    $headerSliderSection = $headers->where('type','slider')->first();--}}
{{--    $headerCategorySection = $headers->where('type','category')->first();--}}
{{--    $headerProductSection = $headers->where('type','product')->first();--}}
{{--    $headerNewUserZoneSection = $headers->where('type','new_user_zone')->first();--}}
{{--@endphp--}}
{{--@php--}}
{{--    $sliders = $headerSliderSection->sliders();--}}
{{--@endphp--}}
<main>

    @include('includes.mainInclude')

    <section class="wrapper">
        <div class="slide_section">
    @include('frontend.default.partials._mega_menu')

{{--            <div class="slide_full_img">--}}
{{--                <img src="{{asset('new/img/slide.jpg')}}" alt="">--}}
{{--            </div>--}}
{{--            <div class="slide_full_img">--}}
{{--                <img src="{{asset('new/img/slide.jpg')}}" alt="">--}}
{{--            </div>--}}
{{--            <div class="slide_full_img">--}}
{{--                <img src="{{asset('new/img/slide.jpg')}}" alt="">--}}
{{--            </div>--}}
        </div>
    </section>
    <section class="wrapper">
        <div class="new_models_section sto_ d_flex">
            <div class="d_flex sto_">
                <span class="second_title">New Models</span>
                <a href="category.html" class="view_all">View All</a>
            </div>
            <div class="products_slide sto_ d_flex gray_slider">
                <div class="model_product">
                    <a href="product.html" class="model_img">
                        <img src="img/modelimg.jpg" alt="">
                    </a>
                    <div class="add_to_fav">
                        <svg width="27" height="23" viewBox="0 0 27 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M23.4972 1.67509C20.524 -0.836734 15.9617 -0.477902 13.1423 2.44402C10.2716 -0.477902 5.70932 -0.836734 2.73614 1.67509C-1.1085 4.90459 -0.544619 10.1846 2.22352 13.004L11.1943 22.1798C11.7069 22.6924 12.3734 23 13.1423 23C13.8599 23 14.5263 22.6924 15.039 22.1798L24.061 13.004C26.7779 10.1846 27.3418 4.90459 23.4972 1.67509ZM22.2669 11.261L13.2961 20.4369C13.1935 20.5394 13.091 20.5394 12.9372 20.4369L3.96642 11.261C2.06973 9.36436 1.7109 5.77604 4.32525 3.57178C6.32446 1.88014 9.40017 2.13645 11.3481 4.0844L13.1423 5.92982L14.9364 4.0844C16.8331 2.13645 19.9088 1.88014 21.908 3.52052C24.5224 5.77604 24.1636 9.36436 22.2669 11.261Z" fill="#00AAAD"/>
                        </svg>
                    </div>
                    <div class="about_model sto_ d_flex">
                        <div class="d_flex sto_">
                            <a class="model_name" href="product.html">Rings</a>
                            <span class="data_of_model">20.04.2022</span>
                        </div>
                        <div class="d_flex sto_">
                            <div class="d_flex eye_cool">
                                <div class="watched_">
                                    <svg width="18" height="12" viewBox="0 0 18 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M9 2.5C8.65625 2.53125 8.3125 2.5625 8 2.65625C8.15625 2.90625 8.21875 3.21875 8.25 3.5C8.25 4.46875 7.4375 5.25 6.5 5.25C6.1875 5.25 5.875 5.1875 5.65625 5.03125C5.5625 5.34375 5.5 5.65625 5.5 6C5.5 7.9375 7.0625 9.5 9 9.5C10.9375 9.5 12.5 7.9375 12.5 6C12.5 4.09375 10.9375 2.53125 9 2.53125V2.5ZM17.875 5.5625C16.1875 2.25 12.8125 0 9 0C5.15625 0 1.78125 2.25 0.09375 5.5625C0.03125 5.6875 0 5.84375 0 6C0 6.1875 0.03125 6.34375 0.09375 6.46875C1.78125 9.78125 5.15625 12 9 12C12.8125 12 16.1875 9.78125 17.875 6.46875C17.9375 6.34375 17.9688 6.1875 17.9688 6.03125C17.9688 5.84375 17.9375 5.6875 17.875 5.5625ZM9 10.5C5.90625 10.5 3.0625 8.78125 1.5625 6C3.0625 3.21875 5.90625 1.5 9 1.5C12.0625 1.5 14.9062 3.21875 16.4062 6C14.9062 8.78125 12.0625 10.5 9 10.5Z" fill="#717171"/>
                                    </svg>
                                    <span>0</span>
                                </div>
                                <a class="like_post">
                                    <svg width="15" height="16" viewBox="0 0 15 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M14.5625 8.96875C14.8438 8.5 15 8 15 7.40625C15 6.03125 13.8125 4.75 12.3125 4.75H11.1562C11.3125 4.34375 11.4375 3.875 11.4375 3.28125C11.4375 1 10.25 0 8.46875 0C6.53125 0 6.65625 2.96875 6.21875 3.40625C5.5 4.125 4.65625 5.5 4.0625 6H1C0.4375 6 0 6.46875 0 7V14.5C0 15.0625 0.4375 15.5 1 15.5H3C3.4375 15.5 3.84375 15.1875 3.9375 14.7812C5.34375 14.8125 6.3125 16 9.5 16C9.75 16 10 16 10.2188 16C12.625 16 13.6875 14.7812 13.7188 13.0312C14.1562 12.4688 14.375 11.6875 14.2812 10.9375C14.5938 10.375 14.6875 9.6875 14.5625 8.96875ZM12.625 10.6562C13.0312 11.3125 12.6562 12.1875 12.1875 12.4688C12.4375 13.9688 11.625 14.5 10.5312 14.5H9.34375C7.125 14.5 5.65625 13.3438 4 13.3438V7.5H4.3125C5.21875 7.5 6.4375 5.3125 7.28125 4.46875C8.15625 3.59375 7.875 2.09375 8.46875 1.5C9.9375 1.5 9.9375 2.53125 9.9375 3.28125C9.9375 4.5 9.0625 5.0625 9.0625 6.25H12.3125C12.9688 6.25 13.4688 6.84375 13.5 7.4375C13.5 8 13.0938 8.59375 12.7812 8.59375C13.2188 9.0625 13.3125 10.0312 12.625 10.6562ZM2.75 13.5C2.75 13.9375 2.40625 14.25 2 14.25C1.5625 14.25 1.25 13.9375 1.25 13.5C1.25 13.0938 1.5625 12.75 2 12.75C2.40625 12.75 2.75 13.0938 2.75 13.5Z" fill="#717171"/>
                                    </svg>
                                    <span>0</span>
                                </a>
                            </div>
                            <span class="price_of_prod">125$</span>
                        </div>
                        <a class="add_catalog_btn">
                            +
                            <svg width="21" height="18" viewBox="0 0 21 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M19.645 2.25H5.33643L5.02002 0.703125C4.94971 0.316406 4.59815 0 4.21143 0H0.695801C0.449707 0 0.273926 0.210938 0.273926 0.421875V1.26562C0.273926 1.51172 0.449707 1.6875 0.695801 1.6875H3.5083L5.93408 14.2031C5.54736 14.625 5.33643 15.1523 5.33643 15.75C5.33643 17.0156 6.3208 18 7.58643 18C8.8169 18 9.83643 17.0156 9.83643 15.75C9.83643 15.3633 9.6958 14.9766 9.52002 14.625H14.6177C14.4419 14.9766 14.3364 15.3633 14.3364 15.75C14.3364 17.0156 15.3208 18 16.5864 18C17.8169 18 18.8364 17.0156 18.8364 15.75C18.8364 15.1172 18.5552 14.5547 18.1333 14.1328L18.1685 13.9922C18.2739 13.4648 17.8872 12.9375 17.3247 12.9375H7.41065L7.09424 11.25H18.063C18.4849 11.25 18.8013 11.0039 18.9067 10.6172L20.4888 3.30469C20.5942 2.77734 20.2075 2.25 19.645 2.25ZM7.58643 16.5938C7.09424 16.5938 6.74268 16.2422 6.74268 15.75C6.74268 15.293 7.09424 14.9062 7.58643 14.9062C8.04346 14.9062 8.43018 15.293 8.43018 15.75C8.43018 16.2422 8.04346 16.5938 7.58643 16.5938ZM16.5864 16.5938C16.0942 16.5938 15.7427 16.2422 15.7427 15.75C15.7427 15.293 16.0942 14.9062 16.5864 14.9062C17.0435 14.9062 17.4302 15.293 17.4302 15.75C17.4302 16.2422 17.0435 16.5938 16.5864 16.5938ZM17.395 9.5625H6.74268L5.65283 3.9375H18.6255L17.395 9.5625Z" fill="white"/>
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="model_product">
                    <a href="product.html" class="model_img">
                        <img src="img/modelimg.jpg" alt="">
                    </a>
                    <div class="add_to_fav">
                        <svg width="27" height="23" viewBox="0 0 27 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M23.4972 1.67509C20.524 -0.836734 15.9617 -0.477902 13.1423 2.44402C10.2716 -0.477902 5.70932 -0.836734 2.73614 1.67509C-1.1085 4.90459 -0.544619 10.1846 2.22352 13.004L11.1943 22.1798C11.707 22.6924 12.3734 23 13.1423 23C13.8599 23 14.5263 22.6924 15.039 22.1798L24.061 13.004C26.7779 10.1846 27.3418 4.90459 23.4972 1.67509ZM22.2669 11.261L13.2961 20.4369C13.1935 20.5394 13.091 20.5394 12.9372 20.4369L3.96642 11.261C2.06973 9.36436 1.7109 5.77604 4.32525 3.57178C6.32446 1.88014 9.40017 2.13645 11.3481 4.0844L13.1423 5.92982L14.9364 4.0844C16.8331 2.13645 19.9088 1.88014 21.908 3.52052C24.5224 5.77604 24.1636 9.36436 22.2669 11.261Z" fill="#00AAAD"/>
                            <path d="M22.2669 11.261L13.2961 20.4369C13.1935 20.5394 13.091 20.5394 12.9372 20.4369L3.96642 11.261C2.06973 9.36436 1.7109 5.77604 4.32525 3.57178C6.32446 1.88014 9.40017 2.13645 11.3481 4.0844L13.1423 5.92982L14.9364 4.0844C16.8331 2.13645 19.9088 1.88014 21.908 3.52052C24.5224 5.77604 24.1636 9.36436 22.2669 11.261Z" fill="#CE3C5C"/>
                        </svg>
                    </div>
                    <div class="about_model sto_ d_flex">
                        <div class="d_flex sto_">
                            <a class="model_name" href="product.html">Rings</a>
                            <span class="data_of_model">20.04.2022</span>
                        </div>
                        <div class="d_flex sto_">
                            <div class="d_flex eye_cool">
                                <div class="watched_">
                                    <svg width="18" height="12" viewBox="0 0 18 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M9 2.5C8.65625 2.53125 8.3125 2.5625 8 2.65625C8.15625 2.90625 8.21875 3.21875 8.25 3.5C8.25 4.46875 7.4375 5.25 6.5 5.25C6.1875 5.25 5.875 5.1875 5.65625 5.03125C5.5625 5.34375 5.5 5.65625 5.5 6C5.5 7.9375 7.0625 9.5 9 9.5C10.9375 9.5 12.5 7.9375 12.5 6C12.5 4.09375 10.9375 2.53125 9 2.53125V2.5ZM17.875 5.5625C16.1875 2.25 12.8125 0 9 0C5.15625 0 1.78125 2.25 0.09375 5.5625C0.03125 5.6875 0 5.84375 0 6C0 6.1875 0.03125 6.34375 0.09375 6.46875C1.78125 9.78125 5.15625 12 9 12C12.8125 12 16.1875 9.78125 17.875 6.46875C17.9375 6.34375 17.9688 6.1875 17.9688 6.03125C17.9688 5.84375 17.9375 5.6875 17.875 5.5625ZM9 10.5C5.90625 10.5 3.0625 8.78125 1.5625 6C3.0625 3.21875 5.90625 1.5 9 1.5C12.0625 1.5 14.9062 3.21875 16.4062 6C14.9062 8.78125 12.0625 10.5 9 10.5Z" fill="#717171"/>
                                    </svg>
                                    <span>0</span>
                                </div>
                                <a class="like_post">
                                    <svg width="15" height="16" viewBox="0 0 15 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M14.5625 8.96875C14.8438 8.5 15 8 15 7.40625C15 6.03125 13.8125 4.75 12.3125 4.75H11.1562C11.3125 4.34375 11.4375 3.875 11.4375 3.28125C11.4375 1 10.25 0 8.46875 0C6.53125 0 6.65625 2.96875 6.21875 3.40625C5.5 4.125 4.65625 5.5 4.0625 6H1C0.4375 6 0 6.46875 0 7V14.5C0 15.0625 0.4375 15.5 1 15.5H3C3.4375 15.5 3.84375 15.1875 3.9375 14.7812C5.34375 14.8125 6.3125 16 9.5 16C9.75 16 10 16 10.2188 16C12.625 16 13.6875 14.7812 13.7188 13.0312C14.1562 12.4688 14.375 11.6875 14.2812 10.9375C14.5938 10.375 14.6875 9.6875 14.5625 8.96875ZM12.625 10.6562C13.0312 11.3125 12.6562 12.1875 12.1875 12.4688C12.4375 13.9688 11.625 14.5 10.5312 14.5H9.34375C7.125 14.5 5.65625 13.3438 4 13.3438V7.5H4.3125C5.21875 7.5 6.4375 5.3125 7.28125 4.46875C8.15625 3.59375 7.875 2.09375 8.46875 1.5C9.9375 1.5 9.9375 2.53125 9.9375 3.28125C9.9375 4.5 9.0625 5.0625 9.0625 6.25H12.3125C12.9688 6.25 13.4688 6.84375 13.5 7.4375C13.5 8 13.0938 8.59375 12.7812 8.59375C13.2188 9.0625 13.3125 10.0312 12.625 10.6562ZM2.75 13.5C2.75 13.9375 2.40625 14.25 2 14.25C1.5625 14.25 1.25 13.9375 1.25 13.5C1.25 13.0938 1.5625 12.75 2 12.75C2.40625 12.75 2.75 13.0938 2.75 13.5Z" fill="#717171"/>
                                    </svg>
                                    <span>0</span>
                                </a>
                            </div>
                            <span class="price_of_prod">125$</span>
                        </div>
                        <a class="add_catalog_btn">
                            +
                            <svg width="21" height="18" viewBox="0 0 21 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M19.645 2.25H5.33643L5.02002 0.703125C4.94971 0.316406 4.59815 0 4.21143 0H0.695801C0.449707 0 0.273926 0.210938 0.273926 0.421875V1.26562C0.273926 1.51172 0.449707 1.6875 0.695801 1.6875H3.5083L5.93408 14.2031C5.54736 14.625 5.33643 15.1523 5.33643 15.75C5.33643 17.0156 6.3208 18 7.58643 18C8.8169 18 9.83643 17.0156 9.83643 15.75C9.83643 15.3633 9.6958 14.9766 9.52002 14.625H14.6177C14.4419 14.9766 14.3364 15.3633 14.3364 15.75C14.3364 17.0156 15.3208 18 16.5864 18C17.8169 18 18.8364 17.0156 18.8364 15.75C18.8364 15.1172 18.5552 14.5547 18.1333 14.1328L18.1685 13.9922C18.2739 13.4648 17.8872 12.9375 17.3247 12.9375H7.41065L7.09424 11.25H18.063C18.4849 11.25 18.8013 11.0039 18.9067 10.6172L20.4888 3.30469C20.5942 2.77734 20.2075 2.25 19.645 2.25ZM7.58643 16.5938C7.09424 16.5938 6.74268 16.2422 6.74268 15.75C6.74268 15.293 7.09424 14.9062 7.58643 14.9062C8.04346 14.9062 8.43018 15.293 8.43018 15.75C8.43018 16.2422 8.04346 16.5938 7.58643 16.5938ZM16.5864 16.5938C16.0942 16.5938 15.7427 16.2422 15.7427 15.75C15.7427 15.293 16.0942 14.9062 16.5864 14.9062C17.0435 14.9062 17.4302 15.293 17.4302 15.75C17.4302 16.2422 17.0435 16.5938 16.5864 16.5938ZM17.395 9.5625H6.74268L5.65283 3.9375H18.6255L17.395 9.5625Z" fill="white"/>
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="model_product">
                    <a href="product.html" class="model_img">
                        <img src="img/modelimg.jpg" alt="">
                    </a>
                    <div class="add_to_fav">
                        <svg width="27" height="23" viewBox="0 0 27 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M23.4972 1.67509C20.524 -0.836734 15.9617 -0.477902 13.1423 2.44402C10.2716 -0.477902 5.70932 -0.836734 2.73614 1.67509C-1.1085 4.90459 -0.544619 10.1846 2.22352 13.004L11.1943 22.1798C11.7069 22.6924 12.3734 23 13.1423 23C13.8599 23 14.5263 22.6924 15.039 22.1798L24.061 13.004C26.7779 10.1846 27.3418 4.90459 23.4972 1.67509ZM22.2669 11.261L13.2961 20.4369C13.1935 20.5394 13.091 20.5394 12.9372 20.4369L3.96642 11.261C2.06973 9.36436 1.7109 5.77604 4.32525 3.57178C6.32446 1.88014 9.40017 2.13645 11.3481 4.0844L13.1423 5.92982L14.9364 4.0844C16.8331 2.13645 19.9088 1.88014 21.908 3.52052C24.5224 5.77604 24.1636 9.36436 22.2669 11.261Z" fill="#00AAAD"/>
                        </svg>
                    </div>
                    <div class="about_model sto_ d_flex">
                        <div class="d_flex sto_">
                            <a class="model_name" href="product.html">Rings</a>
                            <span class="data_of_model">20.04.2022</span>
                        </div>
                        <div class="d_flex sto_">
                            <div class="d_flex eye_cool">
                                <div class="watched_">
                                    <svg width="18" height="12" viewBox="0 0 18 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M9 2.5C8.65625 2.53125 8.3125 2.5625 8 2.65625C8.15625 2.90625 8.21875 3.21875 8.25 3.5C8.25 4.46875 7.4375 5.25 6.5 5.25C6.1875 5.25 5.875 5.1875 5.65625 5.03125C5.5625 5.34375 5.5 5.65625 5.5 6C5.5 7.9375 7.0625 9.5 9 9.5C10.9375 9.5 12.5 7.9375 12.5 6C12.5 4.09375 10.9375 2.53125 9 2.53125V2.5ZM17.875 5.5625C16.1875 2.25 12.8125 0 9 0C5.15625 0 1.78125 2.25 0.09375 5.5625C0.03125 5.6875 0 5.84375 0 6C0 6.1875 0.03125 6.34375 0.09375 6.46875C1.78125 9.78125 5.15625 12 9 12C12.8125 12 16.1875 9.78125 17.875 6.46875C17.9375 6.34375 17.9688 6.1875 17.9688 6.03125C17.9688 5.84375 17.9375 5.6875 17.875 5.5625ZM9 10.5C5.90625 10.5 3.0625 8.78125 1.5625 6C3.0625 3.21875 5.90625 1.5 9 1.5C12.0625 1.5 14.9062 3.21875 16.4062 6C14.9062 8.78125 12.0625 10.5 9 10.5Z" fill="#717171"/>
                                    </svg>
                                    <span>0</span>
                                </div>
                                <a class="like_post">
                                    <svg width="15" height="16" viewBox="0 0 15 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M14.5625 8.96875C14.8438 8.5 15 8 15 7.40625C15 6.03125 13.8125 4.75 12.3125 4.75H11.1562C11.3125 4.34375 11.4375 3.875 11.4375 3.28125C11.4375 1 10.25 0 8.46875 0C6.53125 0 6.65625 2.96875 6.21875 3.40625C5.5 4.125 4.65625 5.5 4.0625 6H1C0.4375 6 0 6.46875 0 7V14.5C0 15.0625 0.4375 15.5 1 15.5H3C3.4375 15.5 3.84375 15.1875 3.9375 14.7812C5.34375 14.8125 6.3125 16 9.5 16C9.75 16 10 16 10.2188 16C12.625 16 13.6875 14.7812 13.7188 13.0312C14.1562 12.4688 14.375 11.6875 14.2812 10.9375C14.5938 10.375 14.6875 9.6875 14.5625 8.96875ZM12.625 10.6562C13.0312 11.3125 12.6562 12.1875 12.1875 12.4688C12.4375 13.9688 11.625 14.5 10.5312 14.5H9.34375C7.125 14.5 5.65625 13.3438 4 13.3438V7.5H4.3125C5.21875 7.5 6.4375 5.3125 7.28125 4.46875C8.15625 3.59375 7.875 2.09375 8.46875 1.5C9.9375 1.5 9.9375 2.53125 9.9375 3.28125C9.9375 4.5 9.0625 5.0625 9.0625 6.25H12.3125C12.9688 6.25 13.4688 6.84375 13.5 7.4375C13.5 8 13.0938 8.59375 12.7812 8.59375C13.2188 9.0625 13.3125 10.0312 12.625 10.6562ZM2.75 13.5C2.75 13.9375 2.40625 14.25 2 14.25C1.5625 14.25 1.25 13.9375 1.25 13.5C1.25 13.0938 1.5625 12.75 2 12.75C2.40625 12.75 2.75 13.0938 2.75 13.5Z" fill="#717171"/>
                                    </svg>
                                    <span>0</span>
                                </a>
                            </div>
                            <span class="price_of_prod">125$</span>
                        </div>
                        <a class="add_catalog_btn">
                            +
                            <svg width="21" height="18" viewBox="0 0 21 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M19.645 2.25H5.33643L5.02002 0.703125C4.94971 0.316406 4.59815 0 4.21143 0H0.695801C0.449707 0 0.273926 0.210938 0.273926 0.421875V1.26562C0.273926 1.51172 0.449707 1.6875 0.695801 1.6875H3.5083L5.93408 14.2031C5.54736 14.625 5.33643 15.1523 5.33643 15.75C5.33643 17.0156 6.3208 18 7.58643 18C8.8169 18 9.83643 17.0156 9.83643 15.75C9.83643 15.3633 9.6958 14.9766 9.52002 14.625H14.6177C14.4419 14.9766 14.3364 15.3633 14.3364 15.75C14.3364 17.0156 15.3208 18 16.5864 18C17.8169 18 18.8364 17.0156 18.8364 15.75C18.8364 15.1172 18.5552 14.5547 18.1333 14.1328L18.1685 13.9922C18.2739 13.4648 17.8872 12.9375 17.3247 12.9375H7.41065L7.09424 11.25H18.063C18.4849 11.25 18.8013 11.0039 18.9067 10.6172L20.4888 3.30469C20.5942 2.77734 20.2075 2.25 19.645 2.25ZM7.58643 16.5938C7.09424 16.5938 6.74268 16.2422 6.74268 15.75C6.74268 15.293 7.09424 14.9062 7.58643 14.9062C8.04346 14.9062 8.43018 15.293 8.43018 15.75C8.43018 16.2422 8.04346 16.5938 7.58643 16.5938ZM16.5864 16.5938C16.0942 16.5938 15.7427 16.2422 15.7427 15.75C15.7427 15.293 16.0942 14.9062 16.5864 14.9062C17.0435 14.9062 17.4302 15.293 17.4302 15.75C17.4302 16.2422 17.0435 16.5938 16.5864 16.5938ZM17.395 9.5625H6.74268L5.65283 3.9375H18.6255L17.395 9.5625Z" fill="white"/>
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="model_product">
                    <a href="product.html" class="model_img">
                        <img src="img/modelimg.jpg" alt="">
                    </a>
                    <div class="add_to_fav">
                        <svg width="27" height="23" viewBox="0 0 27 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M23.4972 1.67509C20.524 -0.836734 15.9617 -0.477902 13.1423 2.44402C10.2716 -0.477902 5.70932 -0.836734 2.73614 1.67509C-1.1085 4.90459 -0.544619 10.1846 2.22352 13.004L11.1943 22.1798C11.7069 22.6924 12.3734 23 13.1423 23C13.8599 23 14.5263 22.6924 15.039 22.1798L24.061 13.004C26.7779 10.1846 27.3418 4.90459 23.4972 1.67509ZM22.2669 11.261L13.2961 20.4369C13.1935 20.5394 13.091 20.5394 12.9372 20.4369L3.96642 11.261C2.06973 9.36436 1.7109 5.77604 4.32525 3.57178C6.32446 1.88014 9.40017 2.13645 11.3481 4.0844L13.1423 5.92982L14.9364 4.0844C16.8331 2.13645 19.9088 1.88014 21.908 3.52052C24.5224 5.77604 24.1636 9.36436 22.2669 11.261Z" fill="#00AAAD"/>
                        </svg>
                    </div>
                    <div class="about_model sto_ d_flex">
                        <div class="d_flex sto_">
                            <a class="model_name" href="product.html">Rings</a>
                            <span class="data_of_model">20.04.2022</span>
                        </div>
                        <div class="d_flex sto_">
                            <div class="d_flex eye_cool">
                                <div class="watched_">
                                    <svg width="18" height="12" viewBox="0 0 18 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M9 2.5C8.65625 2.53125 8.3125 2.5625 8 2.65625C8.15625 2.90625 8.21875 3.21875 8.25 3.5C8.25 4.46875 7.4375 5.25 6.5 5.25C6.1875 5.25 5.875 5.1875 5.65625 5.03125C5.5625 5.34375 5.5 5.65625 5.5 6C5.5 7.9375 7.0625 9.5 9 9.5C10.9375 9.5 12.5 7.9375 12.5 6C12.5 4.09375 10.9375 2.53125 9 2.53125V2.5ZM17.875 5.5625C16.1875 2.25 12.8125 0 9 0C5.15625 0 1.78125 2.25 0.09375 5.5625C0.03125 5.6875 0 5.84375 0 6C0 6.1875 0.03125 6.34375 0.09375 6.46875C1.78125 9.78125 5.15625 12 9 12C12.8125 12 16.1875 9.78125 17.875 6.46875C17.9375 6.34375 17.9688 6.1875 17.9688 6.03125C17.9688 5.84375 17.9375 5.6875 17.875 5.5625ZM9 10.5C5.90625 10.5 3.0625 8.78125 1.5625 6C3.0625 3.21875 5.90625 1.5 9 1.5C12.0625 1.5 14.9062 3.21875 16.4062 6C14.9062 8.78125 12.0625 10.5 9 10.5Z" fill="#717171"/>
                                    </svg>
                                    <span>0</span>
                                </div>
                                <a class="like_post">
                                    <svg width="15" height="16" viewBox="0 0 15 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M14.5625 8.96875C14.8438 8.5 15 8 15 7.40625C15 6.03125 13.8125 4.75 12.3125 4.75H11.1562C11.3125 4.34375 11.4375 3.875 11.4375 3.28125C11.4375 1 10.25 0 8.46875 0C6.53125 0 6.65625 2.96875 6.21875 3.40625C5.5 4.125 4.65625 5.5 4.0625 6H1C0.4375 6 0 6.46875 0 7V14.5C0 15.0625 0.4375 15.5 1 15.5H3C3.4375 15.5 3.84375 15.1875 3.9375 14.7812C5.34375 14.8125 6.3125 16 9.5 16C9.75 16 10 16 10.2188 16C12.625 16 13.6875 14.7812 13.7188 13.0312C14.1562 12.4688 14.375 11.6875 14.2812 10.9375C14.5938 10.375 14.6875 9.6875 14.5625 8.96875ZM12.625 10.6562C13.0312 11.3125 12.6562 12.1875 12.1875 12.4688C12.4375 13.9688 11.625 14.5 10.5312 14.5H9.34375C7.125 14.5 5.65625 13.3438 4 13.3438V7.5H4.3125C5.21875 7.5 6.4375 5.3125 7.28125 4.46875C8.15625 3.59375 7.875 2.09375 8.46875 1.5C9.9375 1.5 9.9375 2.53125 9.9375 3.28125C9.9375 4.5 9.0625 5.0625 9.0625 6.25H12.3125C12.9688 6.25 13.4688 6.84375 13.5 7.4375C13.5 8 13.0938 8.59375 12.7812 8.59375C13.2188 9.0625 13.3125 10.0312 12.625 10.6562ZM2.75 13.5C2.75 13.9375 2.40625 14.25 2 14.25C1.5625 14.25 1.25 13.9375 1.25 13.5C1.25 13.0938 1.5625 12.75 2 12.75C2.40625 12.75 2.75 13.0938 2.75 13.5Z" fill="#717171"/>
                                    </svg>
                                    <span>0</span>
                                </a>
                            </div>
                            <span class="price_of_prod">125$</span>
                        </div>
                        <a class="add_catalog_btn">
                            +
                            <svg width="21" height="18" viewBox="0 0 21 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M19.645 2.25H5.33643L5.02002 0.703125C4.94971 0.316406 4.59815 0 4.21143 0H0.695801C0.449707 0 0.273926 0.210938 0.273926 0.421875V1.26562C0.273926 1.51172 0.449707 1.6875 0.695801 1.6875H3.5083L5.93408 14.2031C5.54736 14.625 5.33643 15.1523 5.33643 15.75C5.33643 17.0156 6.3208 18 7.58643 18C8.8169 18 9.83643 17.0156 9.83643 15.75C9.83643 15.3633 9.6958 14.9766 9.52002 14.625H14.6177C14.4419 14.9766 14.3364 15.3633 14.3364 15.75C14.3364 17.0156 15.3208 18 16.5864 18C17.8169 18 18.8364 17.0156 18.8364 15.75C18.8364 15.1172 18.5552 14.5547 18.1333 14.1328L18.1685 13.9922C18.2739 13.4648 17.8872 12.9375 17.3247 12.9375H7.41065L7.09424 11.25H18.063C18.4849 11.25 18.8013 11.0039 18.9067 10.6172L20.4888 3.30469C20.5942 2.77734 20.2075 2.25 19.645 2.25ZM7.58643 16.5938C7.09424 16.5938 6.74268 16.2422 6.74268 15.75C6.74268 15.293 7.09424 14.9062 7.58643 14.9062C8.04346 14.9062 8.43018 15.293 8.43018 15.75C8.43018 16.2422 8.04346 16.5938 7.58643 16.5938ZM16.5864 16.5938C16.0942 16.5938 15.7427 16.2422 15.7427 15.75C15.7427 15.293 16.0942 14.9062 16.5864 14.9062C17.0435 14.9062 17.4302 15.293 17.4302 15.75C17.4302 16.2422 17.0435 16.5938 16.5864 16.5938ZM17.395 9.5625H6.74268L5.65283 3.9375H18.6255L17.395 9.5625Z" fill="white"/>
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="model_product">
                    <a href="product.html" class="model_img">
                        <img src="img/modelimg.jpg" alt="">
                    </a>
                    <div class="add_to_fav">
                        <svg width="27" height="23" viewBox="0 0 27 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M23.4972 1.67509C20.524 -0.836734 15.9617 -0.477902 13.1423 2.44402C10.2716 -0.477902 5.70932 -0.836734 2.73614 1.67509C-1.1085 4.90459 -0.544619 10.1846 2.22352 13.004L11.1943 22.1798C11.707 22.6924 12.3734 23 13.1423 23C13.8599 23 14.5263 22.6924 15.039 22.1798L24.061 13.004C26.7779 10.1846 27.3418 4.90459 23.4972 1.67509ZM22.2669 11.261L13.2961 20.4369C13.1935 20.5394 13.091 20.5394 12.9372 20.4369L3.96642 11.261C2.06973 9.36436 1.7109 5.77604 4.32525 3.57178C6.32446 1.88014 9.40017 2.13645 11.3481 4.0844L13.1423 5.92982L14.9364 4.0844C16.8331 2.13645 19.9088 1.88014 21.908 3.52052C24.5224 5.77604 24.1636 9.36436 22.2669 11.261Z" fill="#00AAAD"/>
                            <path d="M22.2669 11.261L13.2961 20.4369C13.1935 20.5394 13.091 20.5394 12.9372 20.4369L3.96642 11.261C2.06973 9.36436 1.7109 5.77604 4.32525 3.57178C6.32446 1.88014 9.40017 2.13645 11.3481 4.0844L13.1423 5.92982L14.9364 4.0844C16.8331 2.13645 19.9088 1.88014 21.908 3.52052C24.5224 5.77604 24.1636 9.36436 22.2669 11.261Z" fill="#CE3C5C"/>
                        </svg>
                    </div>
                    <div class="about_model sto_ d_flex">
                        <div class="d_flex sto_">
                            <a class="model_name" href="product.html">Rings</a>
                            <span class="data_of_model">20.04.2022</span>
                        </div>
                        <div class="d_flex sto_">
                            <div class="d_flex eye_cool">
                                <div class="watched_">
                                    <svg width="18" height="12" viewBox="0 0 18 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M9 2.5C8.65625 2.53125 8.3125 2.5625 8 2.65625C8.15625 2.90625 8.21875 3.21875 8.25 3.5C8.25 4.46875 7.4375 5.25 6.5 5.25C6.1875 5.25 5.875 5.1875 5.65625 5.03125C5.5625 5.34375 5.5 5.65625 5.5 6C5.5 7.9375 7.0625 9.5 9 9.5C10.9375 9.5 12.5 7.9375 12.5 6C12.5 4.09375 10.9375 2.53125 9 2.53125V2.5ZM17.875 5.5625C16.1875 2.25 12.8125 0 9 0C5.15625 0 1.78125 2.25 0.09375 5.5625C0.03125 5.6875 0 5.84375 0 6C0 6.1875 0.03125 6.34375 0.09375 6.46875C1.78125 9.78125 5.15625 12 9 12C12.8125 12 16.1875 9.78125 17.875 6.46875C17.9375 6.34375 17.9688 6.1875 17.9688 6.03125C17.9688 5.84375 17.9375 5.6875 17.875 5.5625ZM9 10.5C5.90625 10.5 3.0625 8.78125 1.5625 6C3.0625 3.21875 5.90625 1.5 9 1.5C12.0625 1.5 14.9062 3.21875 16.4062 6C14.9062 8.78125 12.0625 10.5 9 10.5Z" fill="#717171"/>
                                    </svg>
                                    <span>0</span>
                                </div>
                                <a class="like_post">
                                    <svg width="15" height="16" viewBox="0 0 15 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M14.5625 8.96875C14.8438 8.5 15 8 15 7.40625C15 6.03125 13.8125 4.75 12.3125 4.75H11.1562C11.3125 4.34375 11.4375 3.875 11.4375 3.28125C11.4375 1 10.25 0 8.46875 0C6.53125 0 6.65625 2.96875 6.21875 3.40625C5.5 4.125 4.65625 5.5 4.0625 6H1C0.4375 6 0 6.46875 0 7V14.5C0 15.0625 0.4375 15.5 1 15.5H3C3.4375 15.5 3.84375 15.1875 3.9375 14.7812C5.34375 14.8125 6.3125 16 9.5 16C9.75 16 10 16 10.2188 16C12.625 16 13.6875 14.7812 13.7188 13.0312C14.1562 12.4688 14.375 11.6875 14.2812 10.9375C14.5938 10.375 14.6875 9.6875 14.5625 8.96875ZM12.625 10.6562C13.0312 11.3125 12.6562 12.1875 12.1875 12.4688C12.4375 13.9688 11.625 14.5 10.5312 14.5H9.34375C7.125 14.5 5.65625 13.3438 4 13.3438V7.5H4.3125C5.21875 7.5 6.4375 5.3125 7.28125 4.46875C8.15625 3.59375 7.875 2.09375 8.46875 1.5C9.9375 1.5 9.9375 2.53125 9.9375 3.28125C9.9375 4.5 9.0625 5.0625 9.0625 6.25H12.3125C12.9688 6.25 13.4688 6.84375 13.5 7.4375C13.5 8 13.0938 8.59375 12.7812 8.59375C13.2188 9.0625 13.3125 10.0312 12.625 10.6562ZM2.75 13.5C2.75 13.9375 2.40625 14.25 2 14.25C1.5625 14.25 1.25 13.9375 1.25 13.5C1.25 13.0938 1.5625 12.75 2 12.75C2.40625 12.75 2.75 13.0938 2.75 13.5Z" fill="#717171"/>
                                    </svg>
                                    <span>0</span>
                                </a>
                            </div>
                            <span class="price_of_prod">125$</span>
                        </div>
                        <a class="add_catalog_btn">
                            +
                            <svg width="21" height="18" viewBox="0 0 21 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M19.645 2.25H5.33643L5.02002 0.703125C4.94971 0.316406 4.59815 0 4.21143 0H0.695801C0.449707 0 0.273926 0.210938 0.273926 0.421875V1.26562C0.273926 1.51172 0.449707 1.6875 0.695801 1.6875H3.5083L5.93408 14.2031C5.54736 14.625 5.33643 15.1523 5.33643 15.75C5.33643 17.0156 6.3208 18 7.58643 18C8.8169 18 9.83643 17.0156 9.83643 15.75C9.83643 15.3633 9.6958 14.9766 9.52002 14.625H14.6177C14.4419 14.9766 14.3364 15.3633 14.3364 15.75C14.3364 17.0156 15.3208 18 16.5864 18C17.8169 18 18.8364 17.0156 18.8364 15.75C18.8364 15.1172 18.5552 14.5547 18.1333 14.1328L18.1685 13.9922C18.2739 13.4648 17.8872 12.9375 17.3247 12.9375H7.41065L7.09424 11.25H18.063C18.4849 11.25 18.8013 11.0039 18.9067 10.6172L20.4888 3.30469C20.5942 2.77734 20.2075 2.25 19.645 2.25ZM7.58643 16.5938C7.09424 16.5938 6.74268 16.2422 6.74268 15.75C6.74268 15.293 7.09424 14.9062 7.58643 14.9062C8.04346 14.9062 8.43018 15.293 8.43018 15.75C8.43018 16.2422 8.04346 16.5938 7.58643 16.5938ZM16.5864 16.5938C16.0942 16.5938 15.7427 16.2422 15.7427 15.75C15.7427 15.293 16.0942 14.9062 16.5864 14.9062C17.0435 14.9062 17.4302 15.293 17.4302 15.75C17.4302 16.2422 17.0435 16.5938 16.5864 16.5938ZM17.395 9.5625H6.74268L5.65283 3.9375H18.6255L17.395 9.5625Z" fill="white"/>
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="model_product">
                    <a href="product.html" class="model_img">
                        <img src="img/modelimg.jpg" alt="">
                    </a>
                    <div class="add_to_fav">
                        <svg width="27" height="23" viewBox="0 0 27 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M23.4972 1.67509C20.524 -0.836734 15.9617 -0.477902 13.1423 2.44402C10.2716 -0.477902 5.70932 -0.836734 2.73614 1.67509C-1.1085 4.90459 -0.544619 10.1846 2.22352 13.004L11.1943 22.1798C11.7069 22.6924 12.3734 23 13.1423 23C13.8599 23 14.5263 22.6924 15.039 22.1798L24.061 13.004C26.7779 10.1846 27.3418 4.90459 23.4972 1.67509ZM22.2669 11.261L13.2961 20.4369C13.1935 20.5394 13.091 20.5394 12.9372 20.4369L3.96642 11.261C2.06973 9.36436 1.7109 5.77604 4.32525 3.57178C6.32446 1.88014 9.40017 2.13645 11.3481 4.0844L13.1423 5.92982L14.9364 4.0844C16.8331 2.13645 19.9088 1.88014 21.908 3.52052C24.5224 5.77604 24.1636 9.36436 22.2669 11.261Z" fill="#00AAAD"/>
                        </svg>
                    </div>
                    <div class="about_model sto_ d_flex">
                        <div class="d_flex sto_">
                            <a class="model_name" href="product.html">Rings</a>
                            <span class="data_of_model">20.04.2022</span>
                        </div>
                        <div class="d_flex sto_">
                            <div class="d_flex eye_cool">
                                <div class="watched_">
                                    <svg width="18" height="12" viewBox="0 0 18 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M9 2.5C8.65625 2.53125 8.3125 2.5625 8 2.65625C8.15625 2.90625 8.21875 3.21875 8.25 3.5C8.25 4.46875 7.4375 5.25 6.5 5.25C6.1875 5.25 5.875 5.1875 5.65625 5.03125C5.5625 5.34375 5.5 5.65625 5.5 6C5.5 7.9375 7.0625 9.5 9 9.5C10.9375 9.5 12.5 7.9375 12.5 6C12.5 4.09375 10.9375 2.53125 9 2.53125V2.5ZM17.875 5.5625C16.1875 2.25 12.8125 0 9 0C5.15625 0 1.78125 2.25 0.09375 5.5625C0.03125 5.6875 0 5.84375 0 6C0 6.1875 0.03125 6.34375 0.09375 6.46875C1.78125 9.78125 5.15625 12 9 12C12.8125 12 16.1875 9.78125 17.875 6.46875C17.9375 6.34375 17.9688 6.1875 17.9688 6.03125C17.9688 5.84375 17.9375 5.6875 17.875 5.5625ZM9 10.5C5.90625 10.5 3.0625 8.78125 1.5625 6C3.0625 3.21875 5.90625 1.5 9 1.5C12.0625 1.5 14.9062 3.21875 16.4062 6C14.9062 8.78125 12.0625 10.5 9 10.5Z" fill="#717171"/>
                                    </svg>
                                    <span>0</span>
                                </div>
                                <a class="like_post">
                                    <svg width="15" height="16" viewBox="0 0 15 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M14.5625 8.96875C14.8438 8.5 15 8 15 7.40625C15 6.03125 13.8125 4.75 12.3125 4.75H11.1562C11.3125 4.34375 11.4375 3.875 11.4375 3.28125C11.4375 1 10.25 0 8.46875 0C6.53125 0 6.65625 2.96875 6.21875 3.40625C5.5 4.125 4.65625 5.5 4.0625 6H1C0.4375 6 0 6.46875 0 7V14.5C0 15.0625 0.4375 15.5 1 15.5H3C3.4375 15.5 3.84375 15.1875 3.9375 14.7812C5.34375 14.8125 6.3125 16 9.5 16C9.75 16 10 16 10.2188 16C12.625 16 13.6875 14.7812 13.7188 13.0312C14.1562 12.4688 14.375 11.6875 14.2812 10.9375C14.5938 10.375 14.6875 9.6875 14.5625 8.96875ZM12.625 10.6562C13.0312 11.3125 12.6562 12.1875 12.1875 12.4688C12.4375 13.9688 11.625 14.5 10.5312 14.5H9.34375C7.125 14.5 5.65625 13.3438 4 13.3438V7.5H4.3125C5.21875 7.5 6.4375 5.3125 7.28125 4.46875C8.15625 3.59375 7.875 2.09375 8.46875 1.5C9.9375 1.5 9.9375 2.53125 9.9375 3.28125C9.9375 4.5 9.0625 5.0625 9.0625 6.25H12.3125C12.9688 6.25 13.4688 6.84375 13.5 7.4375C13.5 8 13.0938 8.59375 12.7812 8.59375C13.2188 9.0625 13.3125 10.0312 12.625 10.6562ZM2.75 13.5C2.75 13.9375 2.40625 14.25 2 14.25C1.5625 14.25 1.25 13.9375 1.25 13.5C1.25 13.0938 1.5625 12.75 2 12.75C2.40625 12.75 2.75 13.0938 2.75 13.5Z" fill="#717171"/>
                                    </svg>
                                    <span>0</span>
                                </a>
                            </div>
                            <span class="price_of_prod">125$</span>
                        </div>
                        <a class="add_catalog_btn">
                            +
                            <svg width="21" height="18" viewBox="0 0 21 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M19.645 2.25H5.33643L5.02002 0.703125C4.94971 0.316406 4.59815 0 4.21143 0H0.695801C0.449707 0 0.273926 0.210938 0.273926 0.421875V1.26562C0.273926 1.51172 0.449707 1.6875 0.695801 1.6875H3.5083L5.93408 14.2031C5.54736 14.625 5.33643 15.1523 5.33643 15.75C5.33643 17.0156 6.3208 18 7.58643 18C8.8169 18 9.83643 17.0156 9.83643 15.75C9.83643 15.3633 9.6958 14.9766 9.52002 14.625H14.6177C14.4419 14.9766 14.3364 15.3633 14.3364 15.75C14.3364 17.0156 15.3208 18 16.5864 18C17.8169 18 18.8364 17.0156 18.8364 15.75C18.8364 15.1172 18.5552 14.5547 18.1333 14.1328L18.1685 13.9922C18.2739 13.4648 17.8872 12.9375 17.3247 12.9375H7.41065L7.09424 11.25H18.063C18.4849 11.25 18.8013 11.0039 18.9067 10.6172L20.4888 3.30469C20.5942 2.77734 20.2075 2.25 19.645 2.25ZM7.58643 16.5938C7.09424 16.5938 6.74268 16.2422 6.74268 15.75C6.74268 15.293 7.09424 14.9062 7.58643 14.9062C8.04346 14.9062 8.43018 15.293 8.43018 15.75C8.43018 16.2422 8.04346 16.5938 7.58643 16.5938ZM16.5864 16.5938C16.0942 16.5938 15.7427 16.2422 15.7427 15.75C15.7427 15.293 16.0942 14.9062 16.5864 14.9062C17.0435 14.9062 17.4302 15.293 17.4302 15.75C17.4302 16.2422 17.0435 16.5938 16.5864 16.5938ZM17.395 9.5625H6.74268L5.65283 3.9375H18.6255L17.395 9.5625Z" fill="white"/>
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="model_product">
                    <a href="product.html" class="model_img">
                        <img src="img/modelimg.jpg" alt="">
                    </a>
                    <div class="add_to_fav">
                        <svg width="27" height="23" viewBox="0 0 27 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M23.4972 1.67509C20.524 -0.836734 15.9617 -0.477902 13.1423 2.44402C10.2716 -0.477902 5.70932 -0.836734 2.73614 1.67509C-1.1085 4.90459 -0.544619 10.1846 2.22352 13.004L11.1943 22.1798C11.7069 22.6924 12.3734 23 13.1423 23C13.8599 23 14.5263 22.6924 15.039 22.1798L24.061 13.004C26.7779 10.1846 27.3418 4.90459 23.4972 1.67509ZM22.2669 11.261L13.2961 20.4369C13.1935 20.5394 13.091 20.5394 12.9372 20.4369L3.96642 11.261C2.06973 9.36436 1.7109 5.77604 4.32525 3.57178C6.32446 1.88014 9.40017 2.13645 11.3481 4.0844L13.1423 5.92982L14.9364 4.0844C16.8331 2.13645 19.9088 1.88014 21.908 3.52052C24.5224 5.77604 24.1636 9.36436 22.2669 11.261Z" fill="#00AAAD"/>
                        </svg>
                    </div>
                    <div class="about_model sto_ d_flex">
                        <div class="d_flex sto_">
                            <a class="model_name" href="product.html">Rings</a>
                            <span class="data_of_model">20.04.2022</span>
                        </div>
                        <div class="d_flex sto_">
                            <div class="d_flex eye_cool">
                                <div class="watched_">
                                    <svg width="18" height="12" viewBox="0 0 18 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M9 2.5C8.65625 2.53125 8.3125 2.5625 8 2.65625C8.15625 2.90625 8.21875 3.21875 8.25 3.5C8.25 4.46875 7.4375 5.25 6.5 5.25C6.1875 5.25 5.875 5.1875 5.65625 5.03125C5.5625 5.34375 5.5 5.65625 5.5 6C5.5 7.9375 7.0625 9.5 9 9.5C10.9375 9.5 12.5 7.9375 12.5 6C12.5 4.09375 10.9375 2.53125 9 2.53125V2.5ZM17.875 5.5625C16.1875 2.25 12.8125 0 9 0C5.15625 0 1.78125 2.25 0.09375 5.5625C0.03125 5.6875 0 5.84375 0 6C0 6.1875 0.03125 6.34375 0.09375 6.46875C1.78125 9.78125 5.15625 12 9 12C12.8125 12 16.1875 9.78125 17.875 6.46875C17.9375 6.34375 17.9688 6.1875 17.9688 6.03125C17.9688 5.84375 17.9375 5.6875 17.875 5.5625ZM9 10.5C5.90625 10.5 3.0625 8.78125 1.5625 6C3.0625 3.21875 5.90625 1.5 9 1.5C12.0625 1.5 14.9062 3.21875 16.4062 6C14.9062 8.78125 12.0625 10.5 9 10.5Z" fill="#717171"/>
                                    </svg>
                                    <span>0</span>
                                </div>
                                <a class="like_post">
                                    <svg width="15" height="16" viewBox="0 0 15 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M14.5625 8.96875C14.8438 8.5 15 8 15 7.40625C15 6.03125 13.8125 4.75 12.3125 4.75H11.1562C11.3125 4.34375 11.4375 3.875 11.4375 3.28125C11.4375 1 10.25 0 8.46875 0C6.53125 0 6.65625 2.96875 6.21875 3.40625C5.5 4.125 4.65625 5.5 4.0625 6H1C0.4375 6 0 6.46875 0 7V14.5C0 15.0625 0.4375 15.5 1 15.5H3C3.4375 15.5 3.84375 15.1875 3.9375 14.7812C5.34375 14.8125 6.3125 16 9.5 16C9.75 16 10 16 10.2188 16C12.625 16 13.6875 14.7812 13.7188 13.0312C14.1562 12.4688 14.375 11.6875 14.2812 10.9375C14.5938 10.375 14.6875 9.6875 14.5625 8.96875ZM12.625 10.6562C13.0312 11.3125 12.6562 12.1875 12.1875 12.4688C12.4375 13.9688 11.625 14.5 10.5312 14.5H9.34375C7.125 14.5 5.65625 13.3438 4 13.3438V7.5H4.3125C5.21875 7.5 6.4375 5.3125 7.28125 4.46875C8.15625 3.59375 7.875 2.09375 8.46875 1.5C9.9375 1.5 9.9375 2.53125 9.9375 3.28125C9.9375 4.5 9.0625 5.0625 9.0625 6.25H12.3125C12.9688 6.25 13.4688 6.84375 13.5 7.4375C13.5 8 13.0938 8.59375 12.7812 8.59375C13.2188 9.0625 13.3125 10.0312 12.625 10.6562ZM2.75 13.5C2.75 13.9375 2.40625 14.25 2 14.25C1.5625 14.25 1.25 13.9375 1.25 13.5C1.25 13.0938 1.5625 12.75 2 12.75C2.40625 12.75 2.75 13.0938 2.75 13.5Z" fill="#717171"/>
                                    </svg>
                                    <span>0</span>
                                </a>
                            </div>
                            <span class="price_of_prod">125$</span>
                        </div>
                        <a class="add_catalog_btn">
                            +
                            <svg width="21" height="18" viewBox="0 0 21 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M19.645 2.25H5.33643L5.02002 0.703125C4.94971 0.316406 4.59815 0 4.21143 0H0.695801C0.449707 0 0.273926 0.210938 0.273926 0.421875V1.26562C0.273926 1.51172 0.449707 1.6875 0.695801 1.6875H3.5083L5.93408 14.2031C5.54736 14.625 5.33643 15.1523 5.33643 15.75C5.33643 17.0156 6.3208 18 7.58643 18C8.8169 18 9.83643 17.0156 9.83643 15.75C9.83643 15.3633 9.6958 14.9766 9.52002 14.625H14.6177C14.4419 14.9766 14.3364 15.3633 14.3364 15.75C14.3364 17.0156 15.3208 18 16.5864 18C17.8169 18 18.8364 17.0156 18.8364 15.75C18.8364 15.1172 18.5552 14.5547 18.1333 14.1328L18.1685 13.9922C18.2739 13.4648 17.8872 12.9375 17.3247 12.9375H7.41065L7.09424 11.25H18.063C18.4849 11.25 18.8013 11.0039 18.9067 10.6172L20.4888 3.30469C20.5942 2.77734 20.2075 2.25 19.645 2.25ZM7.58643 16.5938C7.09424 16.5938 6.74268 16.2422 6.74268 15.75C6.74268 15.293 7.09424 14.9062 7.58643 14.9062C8.04346 14.9062 8.43018 15.293 8.43018 15.75C8.43018 16.2422 8.04346 16.5938 7.58643 16.5938ZM16.5864 16.5938C16.0942 16.5938 15.7427 16.2422 15.7427 15.75C15.7427 15.293 16.0942 14.9062 16.5864 14.9062C17.0435 14.9062 17.4302 15.293 17.4302 15.75C17.4302 16.2422 17.0435 16.5938 16.5864 16.5938ZM17.395 9.5625H6.74268L5.65283 3.9375H18.6255L17.395 9.5625Z" fill="white"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="subscribe_section sto_">
            <div class="subscribe_block d_flex">
                <h1>Subscribe To Our Newsletter</h1>
                <span class="under_title">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>
                <form class="add_mail_section d_flex">
                    <input type="email" required class="add_email_adr" placeholder="Email">
                    <button class="subs_btn">Subscribe now</button>
                </form>
            </div>
        </div>
    </section>
</main>

@endsection

{{--@include(theme('partials.add_to_cart_script'))--}}
{{--@include(theme('partials.add_to_compare_script'))--}}



