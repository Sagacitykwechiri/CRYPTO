<!-- resources/views/layout.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mutual Right Choice</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- for icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    
    <!-- My custom css -->
    <link href="{{asset('CSS/style.css')}}" rel="stylesheet">
    <link href="{{asset('CSS/progress.css')}}" rel="stylesheet">
</head>
<body>
    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-dark sticky-top shadow-md bg-opacity-50">
        <div class="container">
            <a class="navbar-brand responsive-logo" href="{{ route('home') }}"> <img src="{{asset('media/icon/Mutual_logo_white.PNG')}}" alt="company Logo"></a>

            <!-- Translate language -->
            <div id="google_translate_element"></div>
            <!-- translate end -->
           
            <button class="navbar-toggler bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                
                <span class="navbar-toggler-icon "></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarNav">

            <ul class="navbar-nav m-auto fs-5 ">
                    <li class="nav-item">
                        <a class="nav-link text-light" href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link text-light pricing" href="{{ route('pricing') }}">Pricing</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light about " href="{{ route('about') }}">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light " href="{{ route('contact') }}">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light " href="{{ route('faqs') }}">FAQs</a>
                    </li>
                </ul>     


                <ul class="navbar-nav ms-auto">
                    @auth
                        <li class="nav-item">
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit" class="btn btn-link btn-light nav-link px-3 text-danger">Logout</button>
                            </form>
                        </li>
                    @else
                        <li class="nav-item">
                            <a class="nav-link btn btn-link btn-light text-dark bg-light m-2" href="{{ route('login') }}">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light bg-success btn m-2" href="{{ route('signup') }}">Sign Up</a>
                        </li>
                    @endauth
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="container-fluid p-0 m-0">
        @yield('content')
    </div>

    
   

           <!-- custom js -->
           <script src="{{asset('JS/script.js')}}"></script>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<!-- Google translate -->
<script type="text/javascript">
  function googleTranslateElementInit() {
    new google.translate.TranslateElement(
      { pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.HORIZONTAL },
      'google_translate_element'
    );
  }
</script>
<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

<script src="{{ asset('JS/progress.js') }}"></script>

<!-- Google translate end-->
</body>
</html>
