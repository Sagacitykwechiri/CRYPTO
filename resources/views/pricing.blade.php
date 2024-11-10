<!-- resources/views/pricing.blade.php -->
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
<h1 class="bg-dark bg-opacity-50 d-inline responsive-text p-4 rounded-4">Investment Plans</h1>
<ul class="list-inline">
    <li class="list-inline-item fw-bold"><a href="{{ route('home') }}" class="text-decoration-none text-light">Home</a></li>
    <li class="list-inline-item">- Investment Plans</li>
</ul>
            
        </section>
<!-- end Hero -->
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

@endsection