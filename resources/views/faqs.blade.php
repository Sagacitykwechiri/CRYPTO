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
<h1 class="bg-dark bg-opacity-50 d-inline responsive-text p-4 rounded-4">FAQS</h1>
<ul class="list-inline">
    <li class="list-inline-item fw-bold"><a href="{{ route('home') }}" class="text-decoration-none text-light">Home</a></li>
    <li class="list-inline-item">- FAQs</li>
</ul>
            
        </section>
<!-- end Hero -->
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

@endsection