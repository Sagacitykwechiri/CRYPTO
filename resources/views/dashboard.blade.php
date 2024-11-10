<!-- resources/views/dashboard.blade.php -->
@extends('dashboardlayout')

@section('content')

<div class="container-fluid p-0 m-0" style="background-image:url('{{asset('media/images/pictures6.jpg')}}');
background-size: cover;
background-position: center;
height:30vh;">
<div class="row ">
    <div class="col-md-12 text-center pt-5">
        <h1 class="bg-dark text-light bg-opacity-50 d-inline-block px-5 rounded-circle">Dashboard</h1>
        <h4  class="bg-light text-dark bg-opacity-50  rounded-2 mb-4">Welcome, {{ Auth::user()->name }}! <br> This is your dashboard.</h4>

        @auth
        <a class="btn btn-primary btn-lg" href="{{ route('home') }}" role="button">Go to Home</a>
    @endauth
        <!-- Add more dashboard content here -->
    </div>
    </div>
</div>

<!-- DASHBOARD WIDGET SECTION** -->
<section class="bg-dark py-5 ">
    <div class="container bg-dark py-4">
        <div class="row ">
            <div class="col-md-12">
               
 <!-- referralLink*** -->
 <div class="row">
    <div class="col-md-12">
    <div class="input-group">
     <input type="text" id="referralLink" class="form-control p-2 fs-5" value="https://referralURL" readonly>
    <button class="btn text-light bg-info" id="copyBtn" type="button" onclick="copyReferralLink()"><i class="bi bi-clipboard"></i>Copy</button>
          </div>
     <small id="copiedMessage" class="text-success mt-2" style="display:none;">Copied to clipboard!</small>
  </div>
</div>
 <!-- referralLink end*** -->

<!-- widget2**  -->
<div class="row my-3">
    <div class="col-12 d-flex justify-content-around flex-wrap gap-3">
        <div class="col-12 col-md-5 bg-info text-white p-4 rounded-4">
            <div class="row ">
                <div class="col-8">
                    <h5 class="text-dark">Earnings Balance</h5>
                    <h4>$0</h4>
                </div>
                <div class="col-4 d-flex align-items-center justify-content-end">
                    <i class="las la-dollar-sign bg-dark text-white p-2 rounded-circle" style="font-size: 2rem;"></i>
                </div>
            </div>
        </div>

        <div class="col-12 col-md-5 bg-info text-white p-4 rounded-4">
            <div class="row">
                <div class="col-8">
                    <h5 class="text-dark">Total Invest</h5>
                    <h4>$0</h4>
                </div>
                <div class="col-4 d-flex align-items-center justify-content-end">
                    <i class="las la-coins bg-dark text-white p-2 rounded-circle" style="font-size: 2rem;"></i>
                </div>
            </div>
                </div>
            </div>
                </div>
<!-- widget2 end**  -->
<!-- widget3**  -->
<div class="row ">
    <div class="col-md-12 d-flex justify-content-around flex-wrap gap-3">
        
        <div class="col-12 col-md-3 bg-info text-white p-4 rounded-4">
            <div class="row">
                <div class="col-8">
                    <h5 class="text-dark">Total Deposit</h5>
                    <h4 class="text-success">$0</h4>
                </div>
                <div class="col-4 d-flex align-items-center justify-content-end">
                    <i class="las la-credit-card bg-dark text-white p-2 rounded-circle" style="font-size: 2rem;"></i>
                </div>
            </div>
        </div>

        <div class="col-12 col-md-3 bg-info text-white p-4 rounded-4">
            <div class="row">
                <div class="col-8">
                    <h5 class="text-dark">Total Withdraw</h5>
                    <h4 class="text-danger">$0</h4>
                </div>
                <div class="col-4 d-flex align-items-center justify-content-end">
                    <i class="las la-cloud-download-alt bg-dark text-white p-2 rounded-circle" style="font-size: 2rem;"></i>
                </div>
            </div>
        </div>
        
        <div class="col-12 col-md-3 bg-info text-white p-4 rounded-4">
            <div class="row">
                <div class="col-8">
                    <h5 class="text-dark">Referral Earnings</h5>
                    <h4>$0</h4>
                </div>
                <div class="col-4 d-flex align-items-center justify-content-end">
                    <i class="las la-user-friends bg-dark text-white p-2 rounded-circle" style="font-size: 2rem;"></i>
                </div>
            </div>
        </div>
        
    </div>
</div>
<!-- widget3 end**  -->

<!-- widget 4 Table** -->
<div class="row my-5">
    <div class="col-md-12">
        <div class="table-responsive rounded-4">
            <table class="table table-hover">
                <thead class="table-info ">
                    <tr>
                       <th>Date</th> 
                       <th>Transaction ID</th> 
                       <th>Amount</th> 
                       <th>Wallet</th> 
                       <th>Details</th> 
                       <th>Post Balance</th> 
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td colspan="100%" class="text-center p-3 fs-4 rounded-bottom-4 ">No Transaction Found</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- widget 4 Table end** -->

            </div>
        </div>
    </div>
</section>
<!-- DASHBOARD WIDGET SECTION** -->

<!-- DASHBOARD FOOTER** -->
<footer class="dashboard-footer bg-dark">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <hr class="border">
                <p class="text-light text-center fs-5">@ 2024 $aga-Trade Capital. All Rights Reserved</p>
            </div>
        </div>
    </div>

</footer>
<!-- DASHBOARD FOOTER** -->

@endsection


           
 