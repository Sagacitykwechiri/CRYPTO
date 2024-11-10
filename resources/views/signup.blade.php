<!-- resources/views/signup.blade.php -->
@extends('layout')

@section('content')
<!-- HEADER** -->
<section class="bg-dark">
        <div class="container-fluid pb-5 mb-5 ">
            <div class="row">
                <!-- **user data side** -->
                <div class="col-md-5 bg-dark py-3">
                    
                <div class="row bg-dark ">
                <div class="col-md-12 my-5 sigN align-items-center d-flex justify-content-end" style="background-image:url('{{asset('media/images/handwithbtc.jpg')}}');
                background-size: cover;
                background-position: center;
                height:30vh;">
               <h1 class="text-light text-center text-shadow1 responsive-text m-2">Sign Up</h1>
             </div>
            </div>

                    <!-- **FORM** -->
    <div class="container text-light">
        <div class="row justify-content-around">
        <div class="col-md-12 ">
        <form method="POST" action="{{ route('signup.post') }}">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" required>
                @error('name')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" required>
                @error('email')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3 password-container">
                <label for="password" class="form-label ">Password</label>
                <input type="password" class="form-control" id="password" name="password" required>
                <i class="bi bi-eye password-toggle" id="togglePassword1" ></i>
  
                @error('password')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3 password-container">
                <label for="password_confirmation" class="form-label">Confirm Password</label>
                <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required>
                <i class="bi bi-eye password-toggle" id="togglePassword2" ></i>
            </div>
            <button type="submit" class="btn btn-success w-100">Sign Up</button>
        </form>
        </div>
         </div>
    </div>

    </div>
 <!-- **End of user data side** -->


 <!-- **Empty or image side** -->
                <div class="col-md-7 bg-dark d-flex align-items-center justify-content-center sigN-empty ">
                    <img src="Media/images/cryptocurrency-stuffs (6).jpg" alt="" class="rounded-5" style="max-width: 100%; max-height:auto;">
                </div>
            </div>
            </div>
        
    </section>

    </div>
</div>
@endsection




