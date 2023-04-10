<?php

namespace App\Http\Controllers\Admin;

use App\Models\School;
use App\Models\SchoolTag;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SchoolController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $schools = School::all();
        return view('admin.pages.school.index', compact('schools'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $school_tags = SchoolTag::all();
        return view('admin.pages.school.create', compact('school_tags'));
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
            'title'         => 'required|string',
            'summary'       => 'required|string',
            'description'   => 'required|string',
            'photo'         => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            'tag_id'        => 'required|exists:school_tags,id',
            'condition'     => 'required|in:new,top school,top choice,best school',
            'is_featured'   => 'required',
        ]);

        $data = $request->all();

        $slug = Str::slug($request->title);
        $data['slug'] = $slug;

        if ($image = $request->file('photo')) {
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move('media/courses/', $imageName);
            $data['photo'] = "$imageName";
        }

        $status = School::create($data);

        return $status
            ? redirect()->route('admin.schools.index')->with('success', 'Successfully added school')
            : back()->with('errors', 'Error adding school');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(School $school)
    {
        $school_tags = SchoolTag::all();
        return $school
            ? view('admin.pages.school.edit', compact('school', 'school_tags'))
            : back()->with('error', 'Date not found');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, School $school)
    {
        if ($school) {
            $request->validate([
                'title'         => 'required|string',
                'summary'       => 'required|string',
                'description'   => 'required|string',
                'photo'         => 'sometimes|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
                'tag_id'        => 'required|exists:school_tags,id',
                'condition'     => 'required|in:new,top school,top choice,best school',
                'is_featured'   => 'required',
            ]);

            $data = $request->all();

            $slug = Str::slug($request->title);
            $data['slug'] = $slug;

            if ($image = $request->file('photo')) {
                // Delete old image
                if ($school->photo && file_exists(public_path("media/courses/{$school->photo}"))) {
                    unlink(public_path("media/courses/{$school->photo}"));
                }

                // Upload new image
                $imageName = time() . '.' . $image->getClientOriginalExtension();
                $image->move('media/courses/', $imageName);
                $data['photo'] = "$imageName";
            } else {
                unset($data['photo']);
            }

            $status = $school->update($data);

            return $status
                ? redirect()->route('admin.schools.index')->with('success', 'Successfully updated school')
                : back()->with('errors', 'Error updating school');
        } else {
            return back()->with('error', 'Date not found');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(School $school)
    {
        if ($school) {

            // Delete school photo
            if ($school->photo && file_exists(public_path("media/courses/{$school->photo}"))) {
                unlink(public_path("media/courses/{$school->photo}"));
            }

            $status = $school->delete();

            return $status
                ? redirect()->route('admin.schools.index')->with('success', 'Successfully deleted school')
                : back()->with('errors', 'Error deleting school');
        } else {
            return back()->with('error', 'Date not found');
        }
    }
}
