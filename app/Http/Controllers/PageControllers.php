<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageControllers extends Controller
{
    public function home() {
        return view('home'); // Renders resources/views/home.blade.php
    }

    public function pricing() {
        return view('pricing'); // Renders resources/views/pricing.blade.php
    }

    public function about() {
        return view('about'); // Renders resources/views/about.blade.php
    }

    public function contact() {
        return view('contact'); // Renders resources/views/contact.blade.php
    }
    public function faqs() {
        return view('faqs'); // Renders resources/views/faqs.blade.php
    }
}
