<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Str;
use App\Models\BlogCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = BlogCategory::all();
        return view('admin.pages.category.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title'  => 'required|string',
        ]);

        $data = $request->all();
        $slug = Str::slug($request->title);
        $data['slug'] = $slug;

        return BlogCategory::create($data)
            ? redirect()->route('admin.categories.index')->with('success', 'Successfully added category')
            : back()->with('errors', 'Error add category');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BlogCategory  $blogCategory
     * @return \Illuminate\Http\Response
     */
    public function show(BlogCategory $blogCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BlogCategory  $blogCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(BlogCategory $category)
    {
        if($category){
            return view('admin.pages.category.edit', compact('category'));
        }else{
            return back()->with('error', 'Date not found');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\BlogCategory  $blogCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BlogCategory $category)
    {
        if($category){
            $this->validate($request, [
                'title'  => 'required|string',
            ]);

            $data = $request->all();
            $slug = Str::slug($request->title);
            $data['slug'] = $slug;

            return $category->fill($data)->save()
                ? redirect()->route('admin.categories.index')->with('success', 'Successfully updated')
                : back()->with('errors', 'Error creating blog category');
        } else {
            return back()->with('error', 'Date not found');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BlogCategory  $blogCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(BlogCategory $category)
    {
        if ($category) {
            $status = $category->delete();
            if($status){
                return redirect()->route('admin.categories.index')->with('success', 'successfully deleted');
            }else{
                return back()->with('error', 'Something went wrong');
            }
        } else {
            return back()->with('error', 'Date not found');
        }
    }
}
