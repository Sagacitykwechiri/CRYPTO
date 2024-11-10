<!-- resources/views/about.blade.php -->
@extends('layout')

@section('content')
<!-- HERO sec -->
<section class="bg-light text-white text-center pt-5"
         style="background-image: url('{{ asset('media/images/mutual_image (13).jpg') }}');
                background-size: cover; 
                background-position: center; 
                background-repeat: no-repeat;
                height: 400px;">
                
<div class="pt-5">
<h1 class="bg-dark bg-opacity-50 d-inline responsive-text p-4 rounded-4">Contact Us</h1>
<ul class="list-inline">
    <li class="list-inline-item fw-bold"><a href="{{ route('home') }}" class="text-decoration-none text-light">Home</a></li>
    <li class="list-inline-item">- Contact Us</li>
</ul>
            
        </section>
<!-- end Hero -->

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
                <div class="col-md-12 bg-success rounded-5 text-center " style="background-image:url('{{asset('media/images/darkbtc_img.png')}}');
            background-size:cover; background position: center">>
                    <h1 class="xtra_text">99.9%</h1>
                    <p class="fs-4">Successful Transactions</p>
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

@endsection