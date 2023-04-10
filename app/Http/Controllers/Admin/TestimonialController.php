<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $testimonials = Testimonial::all();
        return view('admin.pages.testimonial.index', compact('testimonials'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.testimonial.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'          => 'required|string',
            'quote'         => 'required|string',
            'school'        => 'required|string',
            'photo'         => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ]);

        $data = $request->all();

        if ($image = $request->file('photo')) {
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move('media/testimonial/', $imageName);
            $data['photo'] = "$imageName";
        }

        $status = Testimonial::create($data);

        return $status
            ? redirect()->route('admin.testimonials.index')->with('success', 'Successfully added')
            : back()->with('errors', 'Error adding testimonial');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function show(Testimonial $testimonial)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function edit(Testimonial $testimonial)
    {
        return $testimonial
            ? view('admin.pages.testimonial.edit', compact('testimonial'))
            : back()->with('error', 'Date not found');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Testimonial $testimonial)
    {
        if ($testimonial) {
            $request->validate([
                'name'          => 'required|string',
                'quote'         => 'required|string',
                'school'        => 'required|string',
                'photo'         => 'sometimes|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            ]);

            $data = $request->all();

            if ($image = $request->file('photo')) {
                // Delete old image
                if ($testimonial->photo && file_exists(public_path("media/testimonial/{$testimonial->photo}"))) {
                    unlink(public_path("media/testimonial/{$testimonial->photo}"));
                }

                // Upload new image
                $imageName = time() . '.' . $image->getClientOriginalExtension();
                $image->move('media/testimonial/', $imageName);
                $data['photo'] = "$imageName";
            } else {
                unset($data['photo']);
            }

            $status = $testimonial->update($data);

            return $status
                ? redirect()->route('admin.testimonials.index')->with('success', 'Successfully updated testimonial')
                : back()->with('errors', 'Error updating testimonial');
        } else {
            return back()->with('error', 'Date not found');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function destroy(Testimonial $testimonial)
    {
        if ($testimonial) {

            // Delete school photo
            if ($testimonial->photo && file_exists(public_path("media/testimonial/{$testimonial->photo}"))) {
                unlink(public_path("media/testimonial/{$testimonial->photo}"));
            }

            $status = $testimonial->delete();

            return $status
                ? redirect()->route('admin.testimonials.index')->with('success', 'Successfully deleted testimonial')
                : back()->with('errors', 'Error deleting testimonial');
        } else {
            return back()->with('error', 'Date not found');
        }
    }
}
