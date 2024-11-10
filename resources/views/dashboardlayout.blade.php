<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crypto Investment</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/line-awesome/1.3.0/line-awesome/css/line-awesome.min.css">

     <!-- My custom css -->
     <link href="{{asset('CSS/style.css')}}" rel="stylesheet">
</head>

<body>

<nav class="navbar navbar-expand-lg navbar-light bg-dark sticky-top bg-opacity-50">
        <div class="container ">
            <!-- Logo -->
            <a class="navbar-brand" href="#">
                <img src="media/icon/Avensis_logo2.PNG" alt="Logo" width="250" height="70" class="d-inline-block align-text-top">
            </a>

            <!-- Toggler/collapsible Button -->
            <button class="navbar-toggler bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Navbar links -->
            <div class="collapse navbar-collapse fw-bold" id="navbarNav">
                <ul class="navbar-nav m-auto fs-5">
                    <li class="nav-item">
                        <a class="nav-link text-light" href="#">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="#">Deposit & Invest</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="#">Withdraw</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="#">Transactions</a>
                    </li>
                    
         <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-light" href="#" id="referralDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Referral
                  </a>
             <ul class="dropdown-menu" aria-labelledby="referralDropdown">
              <li><a class="dropdown-item " href="#">Referred Users</a></li>
                <li><a class="dropdown-item" href="#">Referral Commission</a></li>
            </ul>
                    </li>

         <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-light" href="#" id="referralDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Account
                  </a>
             <ul class="dropdown-menu" aria-labelledby="referralDropdown">
              <li><a class="dropdown-item" href="#">Profile Setting</a></li>
                <li><a class="dropdown-item" href="#">Transfer Balance</a></li>
                <li><a class="dropdown-item" href="#">Change Password</a></li>
                <li><a class="dropdown-item" href="#">Support Ticket</a></li>
                <li><a class="dropdown-item" href="#">2FA Security</a></li>
                <li class="nav-item">
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit" class="btn btn-link btn-light nav-link p-2 text-danger">Logout</button>
                            </form>
                        </li>
            </ul>
                    </li>

                    
                </ul>
                
                <ul class="">
                    <li class="nav-item">
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit" class="btn btn-link btn-light nav-link p-2 text-danger">Logout</button>
                            </form>
                        </li>
                </ul>
            </div>
        </div>

    </nav>

    <div class="container-fluid p-0 m-0">
        @yield('content')
    </div>
        <!-- Bootstrap JS -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>