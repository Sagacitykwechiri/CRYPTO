<!-- resources/views/home.blade.php -->
@extends('layout')

@section('content')

 <!-- Carousel -->
 <div id="demo" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-ride="">

<!-- Indicators/dots -->
<div class="carousel-indicators">
  <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
  <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
  <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
</div>

<!-- The slideshow/carousel -->
<div class="carousel-inner">

    <!-- 1st caro -->
    <div class="carousel-item active" style="background-color:black;">
    <img src="{{asset('media/images/mutual_image (13).jpg')}}" alt="crypto" class="d-block w-100 zoom" style="opacity:0.5; width:100%; height:90vh; object-fit:cover;">

        <div class="carousel-caption" style="top:0; bottom:auto; transform:translateY(0%); text-align:left;">
        <h4 class="pt-3 mt-5 mb-3" >GET STARTED &rarr;</h4>
          <h1 class="responsive-text fw-bold  mb-5">Mutual Right Choice<br>
              Trading | Investment | Real-Estate Management</h1>
      
      @guest
          <a class="btn btn-primary btn-lg me-2 responsive-btn" href="{{ route('signup') }}" role="button">Sign Up</a>
          <a class="btn btn-danger btn-lg responsive-btn" href="{{ route('login') }}" role="button">Login</a>
      @endguest
      @auth
          <a class="btn btn-primary btn-lg responsive-btn" href="{{ route('dashboard') }}" role="button">Go to Dashboard</a>
      @endauth
  </div>
  </div>
  <!-- end of 1st -->

  <!-- 2nd caro -->
  <div class="carousel-item active" style="background-color:black;">
  <img src="{{asset('media/images/handwithbtc.jpg')}}" alt="crypto" class="d-block w-100 zoom" style="opacity:0.5; width:100%; height:90vh; object-fit:cover;">

    <div class="carousel-caption" style="top:50%; bottom:auto; transform:translateY(-50%); text-align:center;">
    <h4 class="pt-3 mt-5 mb-3" >STAY ALIGNED WITH GOALS &rarr;</h4>
      <h1 class="responsive-text fw-bold mb-5">
          Trading | Investment | Real-Estate Management</h1>
  
  @guest
      <a class="btn btn-primary btn-lg me-2 responsive-btn" href="{{ route('signup') }}" role="button">Sign Up</a>
      <a class="btn btn-danger btn-lg responsive-btn" href="{{ route('login') }}" role="button">Login</a>
  @endguest
  @auth
      <a class="btn btn-primary btn-lg responsive-btn" href="{{ route('dashboard') }}" role="button">Go to Dashboard</a>
  @endauth
</div>
</div>
  <!-- end of 2nd  -->

  <!-- 3rd caro -->
  <div class="carousel-item active" style="background-color:black;">
  <img src="{{asset('media/images/CRYPTOLAND.png')}}" alt="crypto" class="d-block w-100 zoom" style="opacity:0.5; width:100%; height:90vh; object-fit:cover;">

    <div class="carousel-caption" style="top:0;  bottom:auto; transform:translateY(0%); text-align:center;">
    <h4 class="pt-3 mt-5 mb-3" >.Proficient .Specialized .Competent</h4>
      <h1 class="responsive-text fw-bold mb-5">Always Fostering Relationship & Commitment</h1>
  
  @guest
      <a class="btn btn-primary btn-lg me-2 responsive-btn" href="{{ route('signup') }}" role="button">Sign Up</a>
      <a class="btn btn-danger btn-lg responsive-btn" href="{{ route('login') }}" role="button">Login</a>
  @endguest
  @auth
      <a class="btn btn-primary btn-lg responsive-btn" href="{{ route('dashboard') }}" role="button">Go to Dashboard</a>
  @endauth
</div>
</div>
  <!-- end of 3rd caro -->
</div>

<!-- Left and right controls/icons -->
<button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
  <span class="carousel-control-prev-icon bg-danger p-4 rounded-5"></span>
</button>
<button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
  <span class="carousel-control-next-icon bg-danger p-4 rounded-5"></span>
</button>
</div>

<!-- END OF CAROUSEL -->


<!-- SERVICE SECTION -->
<section class="bg-light py-5">
    <div class="container">
        <div class="row pt-5">
            <div class="col-md-10 ">
        <h1 class="responsive-text fw-bold pb-5">Innovative Services To Boost Your Cryptocurrency Trading Success.</h1>
    </div>
        <div class="col-md-2 pb-5">
        <img src="{{asset('media/images/btc_img.png')}}" alt="Btc" class="img-fluid service_img">
    </div>
</div>

<h5 class=>"OUR COMPREHENSIVE SUITE OF SERVICES"</h5>
        </div>

        <div class="container py-2 pb-3 text-light">
            <div class="row">
                <div class="col-md-12  pt-3 p-3 mb-3  service_box rounded-5">
                    <div class="row">
                        
                        <div class="col-md-8 ">
                    <h2 class="responsive-text">Cryptocurrency Trading</h2>
                    <p class="fs-4">Unlock the full potential of the cryptocurrency market with our professional trading services, designed to deliver both excitement and profitable opportunities.</p>
                </div>
                <div class="col-md-4 d-flex justify-content-center"><img src="{{asset('media/images/mutual_image (4).jpg')}}" alt="btc" class="img-fluid service_img rounded-5">
                </div>
                </div>
            </div>
            </div>
            <div class="row">
                <div class="col-md-12 pt-3 p-3 mb-3 service_box rounded-5">
                    <div class="row">
                        
                        <div class="col-md-8">
                    <h2 class="responsive-text">Investment Guidance</h2>
                    <p class="fs-4">
                    Our team of seasoned advisors is here to help you make smart, informed investment decisions, whether you're just starting out or are an experienced trader.</p>
                </div>
                <div class="col-md-4 d-flex justify-content-center"><img src="{{asset('media/images/mutual_image (12).jpg')}}" alt="guidance" class="img-fluid service_img rounded-5">
                </div>
                </div>
            </div>
            </div>
            <div class="row ">
                <div class="col-md-12 pt-3 p-3 mb-3 service_box rounded-5">
                    <div class="row">
                        
                        <div class="col-md-8">
                    <h2 class="responsive-text">Research and Evaluation</h2>
                    <p class="fs-4">
                    We offer timely reports, market updates, and data-driven insights to empower you in making well-informed trading decisions.</p>
                </div>
                <div class="col-md-4 d-flex justify-content-center"><img src="{{asset('media/images/mutual_image (10).jpg')}}" alt="Evaluation" class="img-fluid service_img rounded-5">
                </div>
                </div>
            </div>
            </div>
            <div class="row ">
                <div class="col-md-12 pt-3 p-3 mb-3 service_box rounded-5">
                    <div class="row">
                        
                        <div class="col-md-8">
                    <h2 class="responsive-text">Risk mitigation</h2>
                    <p class="fs-4">
                    We utilize cutting-edge tools and strategies to safeguard your investments and minimize potential risks.</p>
                </div>
                <div class="col-md-4 d-flex justify-content-center"><img src="{{asset('media/images/mutual_image (2).jpg')}}" alt="Risk Management" class="img-fluid service_img rounded-5">
                </div>
                </div>
            </div>
            </div>
        </div>
       
    
</section>
<!-- END OF SERVICE SECTION -->

<!-- **EMPOWER SECTION ** -->
<section class="bg-info py-5 pb-5">
    <div class="container py-5 pb-5">
        <h1 class="responsive-text fw-bold">Empowering Your Cryptocurrency Trading Journey.</h1>
        <div class="row">
            <div class="col-md-6 align-items-center d-flex">
                <div class="" >
                    <img src="{{asset('media/images/mutual_image (8).jpg')}}" alt="mutual" class="img-fluid rounded-5">
                </div>
            </div>

            <div class="col-md-6 ">
                <div class="description">
                    <p class="fs-5 fw-bold responsive-text pt-5">Discover our mission to deliver trustworthy and innovative cryptocurrency trading solutions, supported by expert insights and advanced technology.</p>
                </div>

                <div class="row d-flex justify-content-evenly align-items-center text-center ">
                <div class="col-md-5 bg-secondary  rounded-5 p-5 my-3 " style="background-image:url('{{asset('media/images/darkbtc_img.png')}}');
            background-size:cover; background position: center">>
                    <h1 class="xtra_text">2019</h1>
                    <p class="fs-4">Year Founded</p>
                </div>
                <div class="col-md-5 bg-warning rounded-5 p-5 my-3" style="background-image:url('{{asset('media/images/darkbtc_img.png')}}');
            background-size:cover; background position: center">>
                    <h1 class="xtra_text">30K+</h1>
                    <p class="fs-4">Active Users</p>
                </div>
            </div>

            <div class="row my-3">
                <div class="col-md-12 progress-circle border border-success border-5  bg-light" id="progressCircle">
                <div class="counter responsive-text" id="counter">75%</div>
            
                </div>
            </div>

            </div>
        </div>
    </div>
</section>



<!-- **END OF EMPOWER SECTION ** -->


<!-- WHY INVEST ** -->
    <section class="bg-light py-2">
        <div class="container-fluid  py-2 px-3">
            <div class="row py-5 d-flex justify-content-evenly">
            <div class="col-md-6 pb-5">
                <h5 class="pb-3">REASONS TO INVEST WITH US</h5>
                <h1 class="responsive-text fw-bold pb-3">Safe & User-friendly.</h1>
                <p class="fs-5 pb-5">"Our financial planning model not only instills confidence in your readiness for any challenge but also aims to support you in achieving your long-term aspirations. We prioritize international investment strategies, focusing on creating a well-concentrated portfolio of substantial investments in markets where we have deep knowledge and considerable experience."</p>

                <button class="btn btn-lg btn-success fw-bold"> EXPLORE OUR PLATFORM</button>
            </div>

            <div class="col-md-6">
                <div>
                <img src="{{asset('media/images/cryp (5).jpg')}}" alt="team image" class="img-fluid rounded-5">
                </div>
            </div>
        </div>
        

        <div class="row d-flex justify-content-evenly py-3">
            <div class="col-md-9  py-3">
                <h1 class="responsive-text fw-bold">We're here to help you manage, build & protect your wealth.</h1>
                <p class="fs-5">Trading in financial markets involves a wide range of strategies that traders employ to make informed decisions. From trading to swing trading and long-term investing, each strategy has its own set of principles and risk factors.</p>
            </div>
            <div class="col-md-3 d-flex align-items-center justify-content-center ">
            <img src="{{asset('media/images/mutual_image (13).jpg')}}" alt="mutual staff" class="img-fluid rounded-5">
            </div>
        </div>

        <div class="col-md-12 pb-3 ">
        <img src="{{asset('media/images/mutual_image (14).jpg')}}" alt="staff" class="img-fluid rounded-5">
        </div>
    </div>
    </section>
<!-- END OF WHY INVEST ** -->

<!-- YEARS OF XPRIENCE SECTION** -->
<section class="bank-card-section bg-light py-3">
    <div class="container py-3">
        <h1 class="responsive-text fw-bold py-3">Designed To Give Investors The Best Experience They Deserve.</h1>

        <div class="row d-flex justify-content-between">
            <div class="col-md-5 rounded-5 ">
            <img src="{{asset('media/images/office_staff.png')}}" alt="staff" class="img-fluid rounded-5">
            </div>

            <div class="col-md-6">
            <div class="d-flex align-items-center justify-content-around py-5">
                <div>
                <h1 class="xtra_text fw-bold">5+</h1>
                </div>

                <div>
                    <p class="fs-4">Years Of <br> Experience</p>
                </div>
            </div>
            <div>
                <hr class="border border-dark">
            </div>
            <div>
                <p class="fs-5 py-3">We have created a user-friendly and intuitive cryptocurrency exchange platform. It provides a secure and seamless trading experience, empowering users to invest, withdraw, and manage their assets with ease.</p>

                <span class="span-arrow"><a href="#">
                    <p class="text-light rounded rounded-circle p-arrow fs-4 fw-bold text-center">&rarr;</p>
                     <p class="fs-4">Learn More</p>
                    </a></span>
            
            </div>
        </div>  
                </div>         
        </div>
</section>
<!--END OF  YEARS OF XPRIENCE SECTION** -->

<!-- PRICING SECTION*** -->
<section class="pricing py-5  bg-light">
  <div class="container-fluid">
    <div class="pricing-head text-center">
      <h1 class="responsive-text fw-bold py-2">INVESTMENT PLANS</h1>
      <p class="fs-5 py-2">Discover the plan that suits your needs.</p>
    </div>

    <div class="row">
      <!-- First Plan Section -->
      <div class="col-md-6">
        <div class="pb-3 px-1 mb-3 bg-light rounded-5 border border-5 d-flex-row shadow ">
          <div class="row">
            <div class="col-6 bronze rounded-5 text-white text-center p-3 py-5 " style="background-image:url('{{asset('media/images/darkbtc_img.png')}}');
            background-size:cover; background position: center">
              <h1 class="responsive-text pt-5 mt-5">12% </h1>
              <p class="fs-4">24 Hours</p>
              <h2 class="pb-5">BRONZE PLAN</h2>
            </div>
            <div class="col-6 bg-light d-flex justify-content-center rounded-5">
              <ul class="p-4 fs-5">
                <li class="mb-2">Minimum: <strong>$100</strong> </li>
                <li class="mb-2">Maximum: <strong>$999</strong> </li>
                <li class="mb-2">Duration: <strong> 24 Hours</strong></li>
                <li class="mb-5">Total Profit: <strong> 12% Daily + </strong><span class="bg-success fs-5 text-light px-1 rounded">Capital</span></li>

                <button class="btn btn-outline-success btn-lg">Invest</button>
              </ul>
              
            </div>
          </div>
        </div>
      </div>

      <!-- Second Plan Section (New Section) -->
      <div class="col-md-6">
        <div class="pb-3 px-1 mb-3 bg-light rounded-5 border border-5 d-flex-row shadow ">
          <div class="row">
            <div class="col-6 bg-secondary rounded-5 text-white text-center p-3 py-5 " style="background-image:url('{{asset('media/images/darkbtc_img.png')}}');
            background-size:cover; background position: center">
              <h1 class="responsive-text pt-5 mt-5">20%</h1>
              <p class="fs-4">2 Days</p>
              <h2 class="pb-5">SILVER PLAN</h2>
            </div>
            <div class="col-6 bg-light d-flex justify-content-center rounded-5">
              <ul class="p-4 fs-5">
                <li class="mb-2">Minimum: <strong>$1,000</strong> </li>
                <li class="mb-2">Maximum: <strong>$4,999</strong> </li>
                <li class="mb-2">Duration: <strong>2 Days</strong></li>
                <li class="mb-5">Total Profit: <strong> 20% Daily +</strong><span class="bg-success fs-5 text-light px-1 rounded">Capital</span></li>

                <button class="btn btn-outline-success btn-lg">Invest</button>
              </ul>
              
            </div>
          </div>
        </div>
      </div>

      
      <!-- Third Plan Section -->
      <div class="col-md-6">
        <div class="pb-3 px-1 mb-3 bg-light rounded-5 border border-5 d-flex-row shadow ">
          <div class="row">
            <div class="col-6 bg-warning rounded-5 text-white text-center p-3 py-5 " style="background-image:url('{{asset('media/images/darkbtc_img.png')}}');
            background-size:cover; background position: center">
              <h1 class="responsive-text pt-5 mt-5">35%</h1>
              <p class="fs-4">5 Days</p>
              <h2 class="pb-5">GOLD PLAN</h2>
            </div>
            <div class="col-6 bg-light d-flex justify-content-center rounded-5">
              <ul class="p-4 fs-5">
                <li class="mb-2">Minimum: <strong>$5,000</strong> </li>
                <li class="mb-2">Maximum: <strong>$9,999</strong> </li>
                <li class="mb-2">Duration: <strong> 5 Days</strong></li>
                <li class="mb-5">Total Profit: <strong>35% Daily + </strong><span class="bg-success fs-5 text-light px-1 rounded">Capital</span></li>

                <button class="btn btn-outline-success btn-lg">Invest</button>
              </ul>
              
            </div>
          </div>
        </div>
      </div>

      <!-- Fourth Plan Section (New Section) -->
      <div class="col-md-6">
        <div class="pb-3 px-1 mb-3 bg-light rounded-5 border border-5 d-flex-row shadow ">
          <div class="row">
            <div class="col-6 bg-primary rounded-5 text-white text-center p-3 py-5 " style="background-image:url('{{asset('media/images/darkbtc_img.png')}}');
            background-size:cover; background position: center">
              <h1 class="responsive-text pt-5 mt-5">50%</h1>
              <p class="fs-4">7 Days</p>
              <h2 class="pb-5">PLATINUM PLAN</h2>
            </div>
            <div class="col-6 bg-light d-flex justify-content-center rounded-5">
              <ul class="p-4 fs-5">
                <li class="mb-2">Minimum: <strong>$10,000</strong> </li>
                <li class="mb-2">Maximum: <strong>unlimited</strong> </li>
                <li class="mb-2">Duration: <strong> 7 Days</strong></li>
                <li class="mb-5">Total Profit: <strong> 50% Daily +</strong><span class="bg-success fs-5 text-light px-1 rounded">Capital</span></li>

                <button class="btn btn-outline-success btn-lg">Invest</button>
              </ul>
              
            </div>
          </div>
        </div>
    
    </div>
  </div>
</section>
<!--END OF PRICING SECTION*** -->

<!-- OUR TEAM SECTION**-->
<section class="bg-light py-3">
    <div class="container py-3">
        <div class="team-head text-center py-3">
            <h1 class="larger2-fs fw-bold">OUR LEADERS</h1>
            <p class="fs-4">Trading has always been a passion, but it wasn't until I refined my strategy and embraced risk management.</p>
        </div>

        <div class="row  d-flex justify-content-between">
            <div class="col-md-3   team-details-container">
                <div class="team-image rounded rounded-5">
                <img src="{{asset('media/images/leaders (6).jpg')}}" alt="team leaders" class="img-fluid rounded-5 team-image">
            </div>
            <div class="team-details text-center">
                <h4 class="team-name">Michael Carter</h4>
                <p>CEO & Founder</p>
            </div>
            </div>
            <div class="col-md-3 team-details-container">
                <div class="team-image rounded rounded-5">
                <img src="{{asset('media/images/leaders (5).jpg')}}" alt="team leaders" class="img-fluid rounded-5 team-image">
            </div>
            <div class="team-details text-center">
                <h4> David Thompson</h4>
                <p>Chief Financial Officer (CFO)</p>
            </div>
            </div>
            <div class="col-md-3  team-details-container">
                <div class="team-image rounded rounded-5">
                <img src="{{asset('media/images/leaders (4).jpg')}}" alt="team leaders" class="img-fluid rounded-5 team-image">
            </div>
            <div class="team-details text-center">
                <h4>Jessica Parkinson</h4>
                <p>Chief Marketing Officer (CMO)</p>
            </div>
            </div>
            <div class="col-md-3  team-details-container">
                <div class="team-image ">
                <img src="{{asset('media/images/leaders (2).jpg')}}" alt="team leaders" class="img-fluid rounded-5 team-image">
            </div>
            <div class="team-details text-center">
                <h4>Ethan Patel</h4>
                <p>Chief Technology Officer (CTO)</p>
            </div>
            </div>
            
        </div>
    </div>
</section>
<!-- END OF OUR TEAM SECTION** -->


<!-- FAQS -->
<div class="container my-5 text-light ">
    <h2 class="text-center responsive-text">Frequently Asked <strong>Questions</strong></h2>
    <p class="text-center">We answer some of your Frequently Asked Questions regarding our platform. If you have a query that is not answered here, Please contact us.</p>
    <div class="accordion" id="faqAccordion">

      <!-- FAQ 1 -->
      <div class="accordion-item">
        <h2 class="accordion-header" id="faq1">
          <button class="accordion-button collapsed bg-secondary text-light" type="button" data-bs-toggle="collapse" data-bs-target="#answer1" aria-expanded="false" aria-controls="answer1">
            When can I deposit/withdraw from my Investment account?
          </button>
        </h2>
        <div id="answer1" class="accordion-collapse collapse" aria-labelledby="faq1" data-bs-parent="#faqAccordion">
          <div class="accordion-body">
          Deposit and withdrawal are available at any time. Be sure, that your funds are not used in any ongoing trade before the withdrawal. The available amount is shown in your dashboard on the main page of Investing platform.
          </div>
        </div>
      </div>

      <!-- FAQ 2 -->
      <div class="accordion-item">
        <h2 class="accordion-header" id="faq2">
          <button class="accordion-button collapsed bg-secondary text-light" type="button" data-bs-toggle="collapse" data-bs-target="#answer2" aria-expanded="false" aria-controls="answer2">
            How do I check my account balance?
          </button>
        </h2>
        <div id="answer2" class="accordion-collapse collapse" aria-labelledby="faq2" data-bs-parent="#faqAccordion">
          <div class="accordion-body">
          You can see this anytime on your accounts dashboard.
          </div>
        </div>
      </div>

      <!-- FAQ 3 -->
      <div class="accordion-item">
        <h2 class="accordion-header" id="faq3">
          <button class="accordion-button collapsed bg-secondary text-light" type="button" data-bs-toggle="collapse" data-bs-target="#answer3" aria-expanded="false" aria-controls="answer3">
           I forgot my password, what should I do?
          </button>
        </h2>
        <div id="answer3" class="accordion-collapse collapse" aria-labelledby="faq3" data-bs-parent="#faqAccordion">
          <div class="accordion-body">
          Visit the password reset page, type in your email address and click the `Reset` button.
          </div>
        </div>
      </div>

      <!-- FAQ 4 -->
      <div class="accordion-item">
        <h2 class="accordion-header" id="faq4">
          <button class="accordion-button collapsed bg-secondary text-light" type="button" data-bs-toggle="collapse" data-bs-target="#answer4" aria-expanded="false" aria-controls="answer4">
           How will I know that the withdrawal has been successful?
          </button>
        </h2>
        <div id="answer4" class="accordion-collapse collapse" aria-labelledby="faq4" data-bs-parent="#faqAccordion">
          <div class="accordion-body">
          You will get an automatic notification once we send the funds and you can always check your transactions or account balance. Your chosen payment system dictates how long it will take for the funds to reach you.
          </div>
        </div>
      </div>

      <!-- FAQ 5 -->
      <div class="accordion-item">
        <h2 class="accordion-header" id="faq5">
          <button class="accordion-button collapsed bg-secondary text-light" type="button" data-bs-toggle="collapse" data-bs-target="#answer5" aria-expanded="false" aria-controls="answer5">
           How much can I withdraw?
          </button>
        </h2>
        <div id="answer5" class="accordion-collapse collapse" aria-labelledby="faq5" data-bs-parent="#faqAccordion">
          <div class="accordion-body">
          You can withdraw the full amount of your account balance minus the funds that are used currently for supporting opened positions.
          </div>
        </div>
      </div>

    </div>
  </div>

<!-- END FAQS -->

<!-- CLIENT TESTIMONIAL SECTION*** -->
<section class="bg-light text-light py-3" style="background-image:url('{{asset('media/images/mutual_image (4).jpg')}}');
            background-size:cover; background position: center">
    <div class="container rounded rounded-5 p-3 py-3 d-flex flex-column gap-3">
        <div class="testimonial-head text-light text-center py-3">
            <h1 class=" rounded rounded-circle responsive-text fw-bold">Client testimonial</h1>
        </div>

        <div class="row  d-flex justify-content-around gap-3">
            <div class="col-md-5 bg-success rounded rounded-5 p-4">
                <div class="quot-title d-flex gap-3">
                <div class="quotation-icon bg-aqua rounded rounded-circle d-flex align-items-center">
                <img src="{{asset('media/icon/quotation_icon.PNG')}}" alt="quotation" class="img-fluid rounded-5">
                </div>
                <h1 class="fw-bold">"Seamless Experience with Remarkable Returns!"</h1>
            </div>
          
                <p class="fs-5 py-3">"I was new to crypto investments, but this platform made it easy for me to understand and trust the process. After just three months, I saw my portfolio grow by 25%. The customer service is fantastic too—always quick to help with any questions."</p>

            <div class="Client-info d-flex justify-content-center text-center">
             <ul class="list-unstyled">
                <li class="fs-5">
                    Small Business Owner.</li>
                <li class="fw-bold fs-4">— John D., </li>
             </ul>
            </div>
            </div>
            <div class="col-md-5 bg-warning rounded rounded-5 p-4">
                <div class="quot-title d-flex gap-3">
                <div class="quotation-icon bg-aqua rounded rounded-circle d-flex align-items-center">
                <img src="{{asset('media/icon/quotation_icon.PNG')}}" alt="quotation" class="img-fluid rounded-5">
                </div>
                <h1 class="fw-bold">"Incredible <br>Growth and Fast Withdrawals!"</h1>
            </div>
          
                <p class="fs-5 py-3">"The intuitive dashboard and real-time updates helped me stay on top of my investments. I started with a modest deposit, and within a year, my earnings had quadrupled. I’ve recommended this platform to my colleagues, and they’re just as satisfied."</p>

            <div class="Client-info d-flex justify-content-center text-center">
             <ul class="list-unstyled">
                <li class="fs-5">Long-term Investor</li>
                <li class="fw-bold fs-4">— Emily P., </li>
             </ul>
            </div>
            </div>
        </div>
        <div class="row  d-flex justify-content-around gap-3">
            <div class="col-md-5 bg-info rounded rounded-5 p-4">
                <div class="quot-title d-flex gap-3">
                <div class="quotation-icon bg-aqua rounded rounded-circle d-flex align-items-center">
                <img src="{{asset('media/icon/quotation_icon.PNG')}}" alt="quotation" class="img-fluid rounded-5 ">
                </div>
                <h1 class="fw-bold">"Trustworthy and Transparent"</h1>
            </div>
          
                <p class="fs-5 py-3">"What sets this platform apart is the transparency and speed of transactions. I’ve been able to withdraw my earnings without any delays, and the team provides regular updates on market trends, which helped me make informed decisions."
                     </p>

            <div class="Client-info d-flex justify-content-center text-center">
             <ul class="list-unstyled">
                <li class="fs-5">Entrepreneur</li>
                <li class="fw-bold fs-4">— Mark L.,</li>
             </ul>
            </div>
            </div>
            <div class="col-md-5 bg-danger rounded rounded-5 p-4">
                <div class="quot-title d-flex gap-3">
                <div class="quotation-icon bg-aqua rounded rounded-circle d-flex align-items-center">
                <img src="{{asset('media/icon/quotation_icon.PNG')}}" alt="quotation" class="img-fluid rounded-5">
                </div>
                <h1 class="fw-bold">"A Game-Changer in Crypto Investments!"</h1>
            </div>
          
                <p class="fs-5 py-3">"I’ve been in crypto for a while, but this platform has really taken my portfolio to the next level. The earnings balance feature is incredibly helpful, and the referral program has earned me extra income. I trust this platform with all my investments!"</p>

            <div class="Client-info d-flex justify-content-center text-center">
             <ul class="list-unstyled">
                <li class="fs-5">Experienced Crypto Trader</li>
                <li class="fw-bold fs-4">— David M., </li>
             </ul>
            </div>
            </div>
        </div>
        <div class="row  d-flex justify-content-around gap-3">
            <div class="col-md-5 bg-secondary rounded rounded-5 p-4">
                <div class="quot-title d-flex gap-3">
                <div class="quotation-icon bg-aqua rounded rounded-circle d-flex align-items-center">
                <img src="{{asset('media/icon/quotation_icon.PNG')}}" alt="quotation" class="img-fluid rounded-5 ">
                </div>
                <h1 class="fw-bold">"Reliable, Fast, and Secure"</h1>
            </div>
          
                <p class="fs-5 py-3">"This is the only crypto investment platform I trust. The withdrawals are fast, the customer support is excellent, and my portfolio has consistently grown since I joined. It’s perfect for those who value security and reliability in their investments."</p>

            <div class="Client-info d-flex justify-content-center text-center">
             <ul class="list-unstyled">
                <li class="fs-5">Freelance Developer</li>
                <li class="fw-bold fs-4">— Liam K.,</li>
             </ul>
            </div>
            </div>
            <div class="col-md-5 bg-primary rounded rounded-5 p-4">
                <div class="quot-title d-flex gap-3">
                <div class="quotation-icon bg-aqua rounded rounded-circle d-flex align-items-center">
                <img src="{{asset('media/icon/quotation_icon.PNG')}}" alt="quotation" class="img-fluid rounded-5">
                </div>
                <h1 class="fw-bold">"Perfect for Beginners and Experts Alike"</h1>
            </div>
          
                <p class="fs-5 py-3">"I was hesitant to start investing in cryptocurrency, but the platform's user-friendly interface and helpful resources made it so easy. Now I’m seeing steady returns and learning more about the crypto world every day. I couldn’t have asked for a better experience." </p>

            <div class="Client-info d-flex justify-content-center text-center">
             <ul class="list-unstyled">
                <li class="fs-5">First-time Investor</li>
                <li class="fw-bold fs-4">— Sarah W.,</li>
             </ul>
            </div>
            </div>
        </div>

        <div class="d-flex justify-content-center py-5">
        <button class="btn btn-lg btn-primary fw-bold p-3 my-5">LOAD MORE TESTIMONIAL &rarr;</button>
    </div>

    </div>
</section>
<!-- END OF CLIENT TESTIMONIAL SECTION*** -->

<!-- GET STARTED SECTION** -->
<section class="bg-light py-3">
    <div class="container py-3">
        <div class="row p-3 bg-secondary rounded rounded-5">
            <div class="col-md-12 rounded rounded-5 py-4 p-5 text-center bg-light">
                <h1 class="larger2-fs fw-bold pt-5">Empower Your Finances With Cryptocurrency</h1>
                <p class="fs-4 py-4">Discover the transformative power of cryptocurrency and revolutionize your financial journey. Join us now and embark on a path to financial empowerment.</p>

                <button class="btn btn-lg btn-dark fw-bold mb-5">GET STARTED &rarr;</button>
            </div>
        </div>
    </div>
</section>
<!-- END OF GET STARTED SECTION** -->

<!-- PAYMENT WE ACCEPT** -->

<section class="container-fluid  py-3">
    <div class="container-fluid my-3">
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center text-light">Payments We Accept</h1>
            </div>

            <div class="col-md-12">
                <div class="payment-container container py-4 d-flex justify-content-center align-items-center">
                    <div class="payment-image container-fluid">
                        <img src="Media/icon/crypto-payment-method.PNG" alt="" style="height: auto; width: 100%;" >
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END OF PAYMENT WE ACCEPT** -->

<!-- ***SUBSCRIBE NEWSLETTER SECTION** --> 
<section class="bg-light">
    <div class="container py-5">
        <div class="row bg-dark d-flex align-items-center justify-content-center rounded rounded-2 py-5   subscribe-bg">
            <div class="col-md-4 text-center text-light  ">
                <h1>Subscribe to Our Newsletter</h1>
            </div>

            <div class="col-md-6 ">
                <div class="input-group">
                    <input type="text" placeholder="Email Address" class="form-control">
                <button class="btn btn-danger btn-lg">Subscribe</button>
            </div>
            </div>
        </div>
    </div>
</section>
<!-- ***END OF SUBSCRIBE NEWSLETTER SECTION** -->

<!-- IFRAME 1 SECTION ** -->
<section class="iframe_section">
    <div class="container">
    <iframe class="sticky-iframe border border-light" src="https://widget.coinlib.io/widget?type=horizontal_v2&theme=dark&pref_coin_id=1505&invert_hover=no" frameborder="0" width="100%" height="50px" scrolling="auto" marginwidth="0" marginheight="0" style="border:0; margin:0; padding:0;"></iframe>
</div>
</section>
<!-- END OF IFRAME 1 SECTION** -->

<!-- FOOTER SECTION** -->
<footer class="bg-dark py-5">
    <div class="container py-3">
        <div class="row d-flex justify-content-around align-items-center text-center">
            <div class="col-md-6 text-light justify-content-center">
                <h2 class="larger-fs">Earn Referral Bonus</h2>
            </div>
            <div class="col-md-6 d-flex justify-content-center py-2">
                <button class="btn btn-lg btn-light"><a href="">SIGN ME UP &rarr; </a></button>
            </div>
        </div>

        <div class="row py-3 d-flex ">
            <hr class="border my-3">
             
            <div class="col-md-3 text-light text-center py-3">
                <h3>Pages</h3>
                <ul class="list-unstyled text-decoration-none">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li><a href="{{ route('pricing') }}">Pricing</a></li>
                    <li><a href="{{ route('about') }}">About Us</a></li>
                    <li><a href="{{ route('contact') }}">Contact Us</a></li>
                    <li><a href="{{ route('faqs') }}">FAQs</a></li>
                </ul>
            </div>
            <div class="col-md-3 text-light text-center py-3">
                <h3>Support</h3>
                <ul class="list-unstyled text-decoration-none">
                    <li><a href="{{ route('home') }}">AML Policy</a></li>
                    <li><a href="{{ route('home') }}">Terms & Conditions</a></li>
                    <li><a href="{{ route('home') }}">Privacy</a></li>
                    <li><a href="{{ route('home') }}">Cookie Policy</a></li>
                    <li><a href="{{ route('home') }}">Return Policy</a></li>
                </ul>
            </div>
            <div class="col-md-3 text-light text-center py-3">
                <h3>Buy Crypto</h3>
                <ul class="list-unstyled text-decoration-none">
                    <li><a href="">Coinmama</a></li>
                    <li><a href="">Coinbase</a></li>
                    <li><a href="">Binance</a></li>
                    <li><a href="">Bit2me</a></li>
                    <li><a href="">Blockchain</a></li>
                </ul>
            </div>
            <div class="col-md-3 text-light text-center py-3">
                <h5>147 Kensington High Street, London, W8 5SA, United Kingdom.</h5>
                <ul class="list-unstyled text-decoration-none py-3 text-center">
                    <li><a href="{{ route('faqs') }}" class="fs-5">FAQs</a></li>
                    <li><a href="{{ route('home') }}" class="fs-5">Legal Notices</a></li>
            </div>
        </div>
        <hr class="border">
        <div class="copyright text-light text-center">
            <h5>Copyright @ Mutual Right-Choice 2024</h5>
        </div>
    </div>
</footer>

<script src="{{ asset('JS/script.js') }}"></script>
<!-- END OF FOOTER SECTION** -->
@endsection
