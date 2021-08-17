@extends('web.includes.master')
@section('title', 'Home')
@section('content')

<!-- Banner Section Starts Here -->
  <section class="banner-sec">
     <div class="container">
       
        <div class="row center-row">
           <div class="col-md-6 col-lg-6 col-sm-12 col-12 order-lg-2">
              <div class="banner-image">
                 <img src="{{URL::to('/public/website')}}/images/gift-box.png">	
              </div>
           </div>
           <div class="col-md-6 col-lg-6 col-sm-12 col-12 order-lg-1">
              <div class="banner-text">
                 <h3 class="col-yellow"> The bsb Collaborative LLC 
                 </h3>
                 <p class="col-white"> BSB Collaborative LLC is an online business that provides an engaging virtual space for Beautè Snob Boîte box subscribers with exclusive access to thousands of small and minority-owned entrepreneurs and businesses looking for collaboration and support in today’s retail space </p>
                 <a href="#contact-us-sec" class="custom-btn1"> Register as Vendor </a>
              </div>
           </div>
        </div>
     </div>
  </section>
  <!-- Banner Section Ends Here -->
  <!-- About Us Section Starts Here -->
  <section class="about-us-sec">
     <div class="container">
        <div class="row center-row">
           <div class="col-md-6 col-lg-6 col-sm-6 col-12">
              <div class="about-image">
                 <img src="{{URL::to('/public/website')}}/images/about-image.png">
              </div>
           </div>
           <div class="col-md-6 col-lg-6 col-sm-6 col-12">
              <div class="experience-text about-text">
                 <h3 class="col-yellow"> Connecting Small Businesses To Their Ideal Customers </h3>
                 <p class="col-white"> BSB Collaborative LLC is one of the fastest-growing eCommerce stores in the digital space and is on a mission to help minority-owned and small businesses improve the visibility of their products, services, and online stores. </p>
                 <p class="col-white"> Through cross-marketing we collaborate with small businesses and give them access to a boutique of powerful marketing tools and potential buyers, increasing sales and their brand’s digital exposure. </p>
                 <a href="" class="custom-btn1"> Know Our Story </a>
                 <!-- <p class="collapse-text1 col-white"> BSB Collaborative LLC is an online business that provides an engaging virtual space for Beautè Snob Boîte box subscribers with exclusive access to thousands of small and minority-owned entrepreneurs and businesses looking for collaboration and support in today’s retail space  </p>
                 <a   class="custom-btn1 collapse-anchor1"> READ MORE </a> -->
              </div>
           </div>
        </div>
     </div>
  </section>

  <section class="categories-sec">
     <div class="container">
        <div class="sec-head text-center">
           <h3> Categories </h3>
           <p class="col-white" style="max-width: 750px;"> Get your products featured on BSB Collaborative and accelerate your business. We give you exposure to hundreds of potential customers in search of your products and services, ready to engage in business with you through our cross-marketing services. </p>
        </div>


         <div class="row">
            @foreach($categories as $val)
               <div class="col-md-4 col-lg-4 col-sm-6 col-12">
                  <div class="cat-box">
                     <a href="{{route('web.category', [base64_encode($val->id), $val->name])}}"> 
                        <img src="{{URL::to('/public/website')}}/images/categories/{{$val->id.'.jpg'}}"> 
                     </a>
                  </div>
               </div>
            @endforeach   
        </div>
     </div>
  </section>



  <!-- Categories Section Ends Here -->
  <!-- Featured Products Section Starts Here -->
  <section class="featured-products">
     <div class="container">
        <div class="sec-head text-center">
           <h3> Featured Vendors </h3>
        </div>
        <div class="feature-slider no-arrows">
           <div>
              <div class="products-box">
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
              <div class="products-box">
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
              <div class="products-box">
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
              <div class="products-box">
                 <div class="product-image">
                    <img src="{{URL::to('/public/website')}}/images/vendor-4.png">
                 </div>
                 <div class="product-title">
                    <p> Be True Hair Care was created through a personal journey of growing healthy and natural hair following a big chop from using harsh chemicals. Be True is focused the self-love journey of having healthy hair and scalp. Our researched and handpicked ingredients are designed to strengthen and nourish hair for fast growth.
                    </p>
                 </div>
              </div>
           </div>
           <div>
              <div class="products-box">
                 <div class="product-image">
                    <img src="{{URL::to('/public/website')}}/images/vendor-5.png">
                 </div>
                 <div class="product-title">
                    <p> Imfinite Stylish Silvers offer a variety of unique design pieces of jewelry made from the highest quality Italian silver alloyed together with our top-secret master mix to provide a high-grade Sterling silver with a minimum of 92.5 purity. Manufactured and designed in Korea, IMF Stylish Silver jewelry creates an exclusively classy and stylish quality.
                    </p>
                 </div>
              </div>
           </div>
           <div>
              <div class="products-box">
                 <div class="product-image">
                    <img src="{{URL::to('/public/website')}}/images/vendor-6.png">
                 </div>
                 <div class="product-title">
                    <p> FT&D is a multifaceted training and development firm focused on building foundational personal and professional goals through focused coaching sessions, action-planning, collaborations, and organizational structure. Their motto is "We all rise when we all thrive!"
                    </p>
                 </div>
              </div>
           </div>
        </div>
     </div>
  </section>
  <!-- Featured Products Section Ends Here -->
  <!-- Experience the Best Service Section Starts Here -->
  <section class="experience-sec">
     <div class="container">
        <div class="row center-row">
           <div class="col-md-6 col-lg-6 col-sm-6 col-12">
              <div class="experience-image">
                 <img src="{{URL::to('/public/website')}}/images/product-big.jpg">
              </div>
           </div>
           <div class="col-md-6 col-lg-6 col-sm-6 col-12">
              <div class="experience-text">
                 <h3 class="col-yellow upper"> Experience the best Selling
                    service with benefit  
                 </h3>
                 <p class="col-white">From the comfort of your home or office, you can browse our large catalog of small and minority businesses while enjoying exclusive products delivered to your door in our signature black Beauty Snob Boxes </p>
                 <a href="#contact-us-sec" class="custom-btn1"> READ MORE </a>
              </div>
           </div>
        </div>
     </div>
  </section>
  <!-- Experience the Best Service Section Ends Here -->



  <!-- Page Content Section Starts Here -->
  <section class="our-team-sec">
     <div class="container">

     
     <div class="row">

     <div class="col-md-6 col-lg-6 col-sm-12 col-12">
     <div class="snob-box">
                 <h3 class="col-yellow "> Snob Customers
                 </h3>
                 <p class="col-black m-b-10">  Unbox Something Exciting Every Month! </p>
                 <p class="col-black m-b-10"> From beauty and fashion to food and everything in between, get quality products from 1000+ brands delivered to your doorstep each month. With a recurring monthly subscription, you will receive the Beaute Snob Boite box and exclusive discount coupons that allow you to get your new favorite products from undiscovered brands at a fraction of the price, all while supporting small and minority-owned businesses. </p>
                 <p class="col-black m-b-10"> Not one for surprises? We’ve got you covered! </p>
                 <p class="col-black m-b-10"> You can explore our online eCommerce platform and discover thousands of products and services we have to offer. </p>
                 <p class="col-black m-b-10"> Ready To Take A Look? Subscribe Below! </p>
              </div>
     </div>

     <div class="col-md-6 col-lg-6 col-sm-12 col-12">
     <div class="snob-box">
                 <h3 class="col-yellow "> Snob Vendors  </h3>
                 <p class="col-black m-b-10">  Give Your Brand More Visibility and Exposure </p>
                 <p class="col-black m-b-10"> Expanding your digital reach can be difficult, especially for small businesses. Let us give your products and services more visibility and give you a competitive edge in your business domain. </p>
                 <p class="col-black m-b-10"> Through our eCommerce store, we give you access to customers in search of the products and services you offer, allowing you to improve your online visibility. What sets us apart are our subscription boxes with quarterly featured vendor products. As a result, more people experience the benefits your products have to offer, allowing you to develop a loyal customer base. </p>
                 <p class="col-black m-b-10"> Collaborate with us to give your products and services the visibility they deserve. </p>
                 <p class="col-black m-b-10"> Choose Your Subscription Plan and Get Started Today! </p>
              </div>
     </div> 

     </div>   

     </div>
  </section>
  <!-- Page Content Section Ends Here -->
   


  <!-- Pricing Plan Section Starts Here -->
  <section class="pricing-sec">
     <div class="container" style="max-width: 1100px;">
        <div class="sec-head text-center">
           <h3> Pricing Plan </h3>
        </div>
        <div class="row">
           <div class="col-md-4 col-lg-4 col-sm-4 col-12 no-pad">
              <div class="pricing-box">
                 <div class="pricing-box-head">
                    <h6> Vendor side </h6>
                    <h5> Exclusive Experience </h5>
                    <h4> $40 </h4>
                 </div>
                 <div class="pricing-box-features">
                    <ul>
                       <li> <i class="fa fa-check"> </i>  Low Monthly Service fee </li>
                       <li> <i class="fa fa-check"> </i>  List up to 4 products </li>
                       <li> <i class="fa fa-check"> </i> Customer Buy direct from 
                          your website  
                       </li>
                       <li> <i class="fa fa-check"> </i> No inventory fees  </li>
                       <li> <i class="fa fa-check"> </i> No Profit Share  </li>
                       <li> <i class="fa fa-check"> </i> Cross marketing with other 
                          vendor  
                       </li>
                       <li> <i class="fa fa-check"> </i>  A Personalized Vendor Portal </li>
                       <li> <i class="fa fa-check"> </i>  Business development training </li>
                       <li> <i class="fa fa-check"> </i> Onsite Advertising Tools  </li>
                       <li> <i class="fa fa-check"> </i>  Virtual BSB experience </li>
                       <li> <i class="fa fa-check"> </i> Monthly drawing for Physical BSB 
                          add o Personalized vendor portal  
                       </li>
                    </ul>
                 </div>
                 <div class="pricing-box-button">
                    <a href="#contact-us-sec" class="custom-btn1"> DISCOVER NOW </a>
                 </div>
              </div>
           </div>
           <div class="col-md-4 col-lg-4 col-sm-4 col-12 no-pad">
              <div class="pricing-box bg-yellow active">
                 <div class="pricing-box-head">
                    <h5 class="col-white"> Consumer Side </h5>
                    <h4 class="col-white"> $25 </h4>
                 </div>
                 <div class="pricing-box-features">
                    <ul>
                       <li class="col-white"> <i class="fa fa-check col-white"> </i>  Monthly Male  or Female Box  </li>
                       <li class="col-white"> <i class="fa fa-check col-white"> </i> Recurring  Subscription w/30 day cancellation   </li>
                       <li class="col-white"> <i class="fa fa-check col-white"> </i>  Access to over 10k business and services  </li>
                       <li class="col-white"> <i class="fa fa-check col-white"> </i> Exclusive Customer experience Portal   </li>
                       <li class="col-white"> <i class="fa fa-check col-white"> </i>  Monthly Promo codes to vendor website Special
                          dedicated Customer service Team.  
                       </li>
                       <li class="col-white"> <i class="fa fa-check col-white"> </i>  w/$10 add on to be BSB Product Tester  </li>
                       <li class="col-white"> <i class="fa fa-check col-white"> </i> w/$10 add on for BSB T-shirt or other
                          marketing product    
                       </li>
                    </ul>
                 </div>
                 <div class="pricing-box-button">
                    <a href="#contact-us-sec" class="custom-btn2"> DISCOVER NOW </a>
                 </div>
              </div>
           </div>
           <div class="col-md-4 col-lg-4 col-sm-4 col-12 no-pad">
              <div class="pricing-box">
                 <div class="pricing-box-head">
                    <h6> Vendor side </h6>
                    <h5> Exclusive Experience </h5>
                    <h4> $20 </h4>
                 </div>
                 <div class="pricing-box-features">
                    <ul>
                       <li> <i class="fa fa-check"> </i>  Low monthly service fee </li>
                       <li> <i class="fa fa-check"> </i>  List your biggest seller or 
                          new product 
                       </li>
                       <li> <i class="fa fa-check"> </i> Customer Buy direct from 
                          your website  
                       </li>
                       <li> <i class="fa fa-check"> </i> No investory fees  </li>
                       <li> <i class="fa fa-check"> </i> No Profit Share  </li>
                       <li> <i class="fa fa-check"> </i> Cross marketing with other 
                          vendor  
                       </li>
                    </ul>
                 </div>
                 <div class="pricing-box-button">
                    <a href="#contact-us-sec" class="custom-btn1"> DISCOVER NOW </a>
                 </div>
              </div>
           </div>
        </div>
     </div>
  </section>
  <!-- Pricing Plan Section Ends Here -->
  <!-- Contact Us Section Starts Here -->
  <section class="contact-sec" id="contact-us-sec">
     <div class="container">
        <div class="sec-head text-center">
           <h3> Get In Touch With Us </h3>
        </div>
      <div class="contact-data">
           <form method="POST">
              <div class="row">
                 <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                    <div class="form-field">
                       <input type="text" placeholder="First Name" class="form-control1" name="fname">
                    </div>
                 </div>
                 <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                    <div class="form-field">
                       <input type="text" placeholder="Last Name" class="form-control1" name="lname">
                    </div>
                 </div>
                 <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                    <div class="form-field">
                       <input type="email" placeholder="Email Address" class="form-control1" name="email">
                    </div>
                 </div>
                 <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                    <div class="form-field">
                       <input type="number" placeholder="Phone Number" class="form-control1" name="phone">
                    </div>
                 </div>
                 <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                    <div class="form-field">
                       <input type="text" placeholder="Company Name" class="form-control1" name="company">
                    </div>
                 </div>
                 <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                    <div class="form-field">
                       <input type="text" placeholder="Country Name" class="form-control1" name="country">
                    </div>
                 </div>
                 <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                    <div class="form-field">
                       <input type="text" placeholder="State Name" class="form-control1" name="state">
                    </div>
                 </div>
                 <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                    <div class="form-field">
                       <input type="text" placeholder="City Name" class="form-control1" name="city">
                    </div>
                 </div>
                 
                 <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                     <label class="package-radio">Select Packages: </label>
                    <div class="form-field">
                        <input type="radio" id="Vendorside40" name="fav_language" value="Vendorside40">
                        <label for="Vendorside40" class="radio-text">Vendor side 40$</label>
                        <input type="radio" id="Consumerside20" name="fav_language" value="Consumerside20">
                        <label for="Consumerside20" class="radio-text">Consumer Side 20$</label>
                        <input type="radio" id="Vendorside20" name="fav_language" value="Vendorside20">
                        <label for="Vendorside20" class="radio-text">Vendor side 20$</label>
                    </div>
                 </div>
                 <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                    <div class="form-field">
                       <textarea placeholder="Drop us a line! If you are a vendor, please fill out the form and click your package option." name="message" class="form-control1"></textarea>
                    </div>
                 </div>
                 <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                    <div class="form-field">
                       <input type="submit" value="Send Message" class="submit-btn1" name="submit">
                    </div>
                 </div>
              </div>
           </form>
                          </div>
     </div>
  </section>
  <!-- Contact Us Section Starts Here -->

@endsection