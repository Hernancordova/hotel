<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class  AboutUsController extends Controller
{

  public function index()
  {
    $convertNumberIntoPercentage = fn ($number) => ($number * 100) / 5;
    $about = About::first();
    $testimonials = Testimonial::where('seccion_testimonial_is_active', 1)->get();
    return view('frontend.about-us', compact('about', 'testimonials', 'convertNumberIntoPercentage'));
  }
}
