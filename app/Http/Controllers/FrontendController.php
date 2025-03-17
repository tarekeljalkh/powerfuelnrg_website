<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Banner;
use App\Models\Feature;
use App\Models\FunFact;
use App\Models\Project;
use App\Models\PromoBanner;
use App\Models\Service;
use App\Models\Testimonial;
use App\Models\WhyChooseUs;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index ()
    {
        $banners = Banner::all();
        $features = Feature::all();
        $about = About::first();
        $funFacts = FunFact::limit(3)->get(); // Get only 3 fun facts
        $services = Service::orderBy('order')->get();
        $whyChooseUs = WhyChooseUs::first(); // Fetch the first record
        $promoBanner = PromoBanner::first(); // Fetch the first record
        $project = Project::first(); // Fetch the first record
        $testimonials = Testimonial::all();
        return view('home', compact('banners', 'features', 'about', 'funFacts', 'services', 'whyChooseUs', 'promoBanner', 'project', 'testimonials'));
    }
}
