<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function landingPage()
    {
        return view('frontend.pages.landing-page');
    }

    public function schoolPage()
    {
        return view('frontend.pages.school');
    }

    public function eventPage()
    {
        return view('frontend.pages.events');
    }

    public function aboutUsPage()
    {
        return view('frontend.pages.about-us');
    }

    public function contactPage()
    {
        return view('frontend.pages.contact');
    }

    public function blogPage()
    {
        return view('frontend.pages.blog');
    }

    public function teamsPage()
    {
        return view('frontend.pages.team');
    }

    public function faqPage()
    {
        return view('frontend.pages.faq');
    }

    public function privacyPage()
    {
        return view('frontend.pages.privacy');
    }

    public function termsAndConditionPage()
    {
        return view('frontend.pages.terms-and-condition');
    }
}
