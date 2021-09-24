@extends('web.includes.master')
@section('title', 'Snob '.$category->name)
@section('content')

<!-- Category Banner  Section Starts Here -->
   <section class="category-banner cat-bg1 text-center">
      <div class="container">
         <h1> SNOB {{strtoupper($category->name)}} </h1>
         <h4> {{$category->title}}  </h4>
         <p> {{$category->description}} </p>
      </div>
   </section>
   <!-- Category Banner  Section Ends Here -->
   <!-- Featured Vendors Section Starts Here -->
   <section class="our-team-sec">
      <div class="container">
         <div class="sec-head text-center">
            <h3> Featured Vendors </h3>
         </div>
         <div class="feature-slider no-arrows">
            <div>
               <div class="products-box product-box3">
                  <div class="product-image">
                     <img src="{{URL::to('/public/website')}}/images/vendor-1.png">
                  </div>
                  <div class="product-title">
                     <p> What is Pure Living and Beauty? Pure Living is being the "Authentic You", with inner and outer beauty. Our products are handmade with all natural ingredients that infuses into your skin. Especially blended to focus on self-love and self-care, Pure Living and Beauty products give an exclusive and luxurious experience at first use. Your skin will not only be moisturized but enhance your natural glow!
                     </p>
                  </div>
               </div>
            </div>
            <div>
               <div class="products-box product-box3">
                  <div class="product-image">
                     <img src="{{URL::to('/public/website')}}/images/vendor-2.png">
                  </div>
                  <div class="product-title">
                     <p> LaBella Diamond Cosmetics is a dynamic and versatile cosmetics line focused on personal care and beauty. We focus on self-care to develop a skincare routine from our vegan sugar scrubs to our Slick Lip line. Our specially blended formulas are vegan and cruelty-free. LaBella Diamond provides a luxurious journey to healthy, glowing skin for our customers to look and feel their best.
                     </p>
                  </div>
               </div>
            </div>
            <div>
               <div class="products-box product-box3">
                  <div class="product-image">
                     <img src="{{URL::to('/public/website')}}/images/vendor-3.png">
                  </div>
                  <div class="product-title">
                     <p> Shea Culture & Company is a small family-owned business that focuses on creating natural and organic bath and body products. Our mission is to create effective natural products for my customers and educating them on the importance of natural products and how they can be healing to your body. Our products are made in small batches to ensure the best quality with most of our items being vegan and cruelty-free.
                     </p>
                  </div>
               </div>
            </div>
            <div>
               <div class="products-box product-box3">
                  <div class="product-image">
                     <img src="{{URL::to('/public/website')}}/images/vendor-4.png">
                  </div>
                  <div class="product-title">
                     <p> Be True Hair Care was created through a personal journey of growing healthy and natural hair following a big chop from using harsh chemicals. Be True is focused the self-love journey of having healthy hair and scalp. Our researched and handpicked ingredients are designed to strengthen and nourish hair for fast growth.
                     </p>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- Featured Vendors Section Ends Here -->
   <!-- Featured Products Section Starts Here -->
   <section class="category-products">
      <div class="container" style="max-width: 1060px;">
         <div class="sec-head text-center">
            <h3> Featured Products </h3>
         </div>
         <div class="row">
            @foreach($products as $key => $val)
               <div class="col-md-4 col-lg-4 col-sm-6 col-12">
                  <div class="product-box4">
                     <div class="product-image4">
                        <img src="{{URL::to('/public/storage/product/'.$val->image)}}" onerror="this.src='{{URL::to('/public/website')}}/images/product-placeholder.png';">
                     </div>
                     <div class="product-title4">
                        <h4> {{$val->title}}<br><small>{{@$val->category->name}}</small></h4>
                        <p class="cut-text"> {{$val->description}} </p>
                     </div>
                     <div class="product-btn2">
                        <a href="{{$val->product_url}}" target="_blank"> Buy Now </a>
                     </div>
                     <div class="product-tag4">
                        SPECIAL OFFER
                     </div>
                  </div>
               </div>
            @endforeach
            @if(count($products) == '0')
               <div class="col-md-12">
                  <h4>No Products Available.</h4>
               </div>
            @endif
         </div>
      </div>
   </section>
   <!-- Featured Products Section Ends Here -->

@endsection