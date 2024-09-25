<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{

    public function home_page(){
        return view('frontend.body.components.home');
    }

    public function about_us_page(){
        return view('frontend.body.components.about_us');
    }

    public function all_services_page(){
        return view('frontend.body.components.all_services');
    }

    public function service_1_page(){
        return view('frontend.body.components.service_1');
    }

    public function service_2_page(){
        return view('frontend.body.components.service_2');
    }

    public function service_3_page(){
        return view('frontend.body.components.service_3');
    }

    public function service_4_page(){
        return view('frontend.body.components.service_4');
    }

    public function service_5_page(){
        return view('frontend.body.components.service_5');
    }

    public function announcements_page(){
        return view('frontend.body.components.announcements');
    }

    public function contact_page(){
        return view('frontend.body.components.contact');
    }

}
