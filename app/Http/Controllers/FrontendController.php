<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Event;
use App\Models\School;
use App\Models\SchoolTag;
use App\Models\BlogReview;
use App\Models\Testimonial;
use App\Models\BlogCategory;
use App\Models\Message;
use App\Models\SchoolReview;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function landingPage()
    {
        $featured_schools = School::with('school_reviews')->where('is_featured', 1)->limit(4)->get();
        $blogs = Blog::latest()->limit(4)->get();
        $testimonials = Testimonial::all();
        return view('frontend.pages.landing-page', compact('featured_schools', 'blogs', 'testimonials'));
    }

    public function schoolPage(Request $request)
    {
        $schools = $this->getSchool($request->get('search'));
        //return $schools;
        $locations = SchoolTag::with('schools')->get();
        $featured_schools = School::with('school_reviews')->where('is_featured', 1)->get();
        return view('frontend.pages.school', compact('schools', 'locations', 'featured_schools'));
    }

    public function getSchool($data)
    {
        $schools = School::query();

        if (!empty($_GET['sortBy'])) {
            if ($_GET['sortBy'] == 'new') {
                $schools = $schools->where('condition', 'new');
            }
            if ($_GET['sortBy'] == 'top school') {
                $schools = $schools->where('condition', 'top school');
            }
            if ($_GET['sortBy'] == 'top choice') {
                $schools = $schools->where('condition', 'top choice');
            }
            if ($_GET['sortBy'] == 'best school') {
                $schools = $schools->where('condition', 'best school');
            }
        }

        if (!empty($_GET['location'])) {
            $slugs = explode(',', $_GET['location']);
            $location_ids = SchoolTag::select('id')->whereIn('slug', $slugs)->pluck('id')->toArray();
            $schools = $schools->whereIn('tag_id', $location_ids);
        }

        if ($data !== null) {
            $schools = $schools->where('title', 'LIKE', '%' . $data . '%')->get();
        }

        $schools = $schools->with('school_reviews')->paginate(5);

        return $schools;
    }

    public function schoolFilter(Request $request)
    {
        $data = $request->all();

        // sort filter
        $sortByUrl = '';
        if (!empty($data['sortBy'])) {
            $sortByUrl .= '&sortBy=' . $data['sortBy'];
        }

        // location filter
        $locationURL = '';
        if (!empty($data['location'])) {
            foreach ($data['location'] as $tag) {
                if (empty($locationURL)) {
                    $locationURL .= '&location=' . $tag;
                } else {
                    $locationURL .= ',' . $tag;
                }
            }
        }

        return redirect()->route('school', $sortByUrl . $locationURL);
    }

    public function search(Request $request)
    {
        $query = $request->input('query');
        $schools = School::where('title', 'LIKE', '%' . $query . '%')
            ->orderBy('id', 'DESC')->get();
        $locations = SchoolTag::with('schools')->get();
        $featured_schools = School::where('is_featured', 1)->get();
        return view('frontend.pages.school', compact('schools', 'locations', 'featured_schools'));
    }

    public function schoolDetails($slug)
    {
        $school = School::with('school_reviews')->where('slug', $slug)->firstOrFail();
        $schools = School::with('school_reviews')->inRandomOrder()->limit(3)->get();
        //return $schools;
        $school->number_click += 1;
        $school->save();
        return ($school)
            ? view('frontend.pages.school-detail', compact('school', 'schools'))
            : 'School not found';
    }

    public function schoolReview(Request $request)
    {
        $request->validate([
            'rate'      => 'required|numeric|min:0|max:5',
            'reason'    => 'required|string',
            'review'    => 'required|string',
        ]);

        //return $request->all();
        $data = $request->all();
        return SchoolReview::create($data)
            ? back()->with('success', 'Thanks for your feedback')
            : back()->with('error', 'Something went wrong, Please try again later!');
    }

    public function eventPage()
    {
        $events = Event::paginate(5);
        return view('frontend.pages.events', compact('events'));
    }

    public function eventDetails($slug)
    {
        $event = Event::where('slug', $slug)->firstOrFail();
        return ($event)
            ? view('frontend.pages.event-detail', compact('event'))
            : 'Event not found';
    }

    public function aboutUsPage()
    {
        return view('frontend.pages.about-us');
    }

    public function contactPage()
    {
        return view('frontend.pages.contact');
    }

    public function contactSubmit(Request $request)
    {
        $request->validate([
            'name'          => 'required|string',
            'email'         => 'required|email',
            'subject'       => 'required|string',
            'message'       => 'required|string',
        ]);

        $data = $request->all();
        return Message::create($data)
            ? back()->with('success', 'Thanks for contacting us')
            : back()->with('error', 'Something went wrong, Please try again later!');
    }

    public function blogPage()
    {
        $blogs = Blog::paginate(5);
        $categories = BlogCategory::with('blogs')->get();
        $latest_blogs = Blog::latest()->get();
        return view('frontend.pages.blog', compact('blogs', 'categories', 'latest_blogs'));
    }

    public function blogDetails($slug)
    {
        $blog = Blog::with('blog_reviews')->where('slug', $slug)->firstOrFail();
        $categories = BlogCategory::with('blogs')->get();
        $latest_blogs = Blog::latest()->get();
        return ($blog)
            ? view('frontend.pages.blog-detail', compact('blog', 'categories', 'latest_blogs'))
            : 'Event not found';
    }

    public function blogReview(Request $request)
    {
        $request->validate([
            'reason'    => 'required|string',
            'review'    => 'required|string',
        ]);

        //return $request->all();
        $data = $request->all();
        return BlogReview::create($data)
            ? back()->with('success', 'Thanks for your feedback')
            : back()->with('error', 'Something went wrong, Please try again later!');
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
