<?php

namespace App\Http\Controllers\Admin;

use App\Models\SchoolTag;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SchoolTagController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $school_tags = SchoolTag::all();
        return view('admin.pages.school-tag.index', compact('school_tags'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.school-tag.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //return $request->all();
        $this->validate($request, [
            'title'  => 'required|string',
        ]);

        $data = $request->all();
        $slug = Str::slug($request->title);
        $data['slug'] = $slug;

        return SchoolTag::create($data)
            ? redirect()->route('admin.countries.index')->with('success', 'Successfully added Country')
            : back()->with('errors', 'Error add Country');
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
    public function edit($slug)
    {
        $school_tag = SchoolTag::where('slug',$slug)->firstOrFail();
        //return $school_tag;
        if($school_tag){
            return view('admin.pages.school-tag.edit', compact('school_tag'));
        }else{
            return back()->with('error', 'Date not found');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $slug)
    {
        $school_tag = SchoolTag::where('slug',$slug)->firstOrFail();

        if($school_tag){
            $this->validate($request, [
                'title'  => 'required|string',
            ]);

            $data = $request->all();
            $slug = Str::slug($request->title);
            $data['slug'] = $slug;

            return $school_tag->fill($data)->save()
                ? redirect()->route('admin.countries.index')->with('success', 'Successfully updated')
                : back()->with('errors', 'Error creating country');
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
    public function destroy($slug)
    {
        $school_tag = SchoolTag::where('slug', $slug)->firstOrFail();

        if ($school_tag) {
            $status = $school_tag->delete();
            if($status){
                return redirect()->route('admin.countries.index')->with('success', 'successfully deleted');
            }else{
                return back()->with('error', 'Something went wrong');
            }
        } else {
            return back()->with('error', 'Date not found');
        }
    }
}
