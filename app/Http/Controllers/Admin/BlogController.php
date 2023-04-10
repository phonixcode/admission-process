<?php

namespace App\Http\Controllers\Admin;

use App\Models\Blog;
use Illuminate\Support\Str;
use App\Models\BlogCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = Blog::all();
        return view('admin.pages.blog.index', compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = BlogCategory::all();
        return view('admin.pages.blog.create', compact('categories'));
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
            'cat_id'        => 'required|exists:blog_categories,id',
        ]);

        $data = $request->all();

        $slug = Str::slug($request->title);
        $data['slug'] = $slug;

        if ($image = $request->file('photo')) {
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move('media/blogs/', $imageName);
            $data['photo'] = "$imageName";
        }

        $status = Blog::create($data);

        return $status
            ? redirect()->route('admin.blogs.index')->with('success', 'Successfully added blog')
            : back()->with('errors', 'Error adding blog');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $blog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $blog)
    {
        $categories = BlogCategory::all();
        return $blog
            ? view('admin.pages.blog.edit', compact('blog', 'categories'))
            : back()->with('error', 'Date not found');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Blog $blog)
    {
        if ($blog) {
            $request->validate([
                'title'         => 'required|string',
                'summary'       => 'required|string',
                'description'   => 'required|string',
                'photo'         => 'sometimes|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
                'cat_id'        => 'required|exists:blog_categories,id',
            ]);

            $data = $request->all();

            $slug = Str::slug($request->title);
            $data['slug'] = $slug;

            if ($image = $request->file('photo')) {
                // Delete old image
                if ($blog->photo && file_exists(public_path("media/blogs/{$blog->photo}"))) {
                    unlink(public_path("media/blogs/{$blog->photo}"));
                }

                // Upload new image
                $imageName = time() . '.' . $image->getClientOriginalExtension();
                $image->move('media/blogs/', $imageName);
                $data['photo'] = "$imageName";
            } else {
                unset($data['photo']);
            }

            $status = $blog->update($data);

            return $status
                ? redirect()->route('admin.blogs.index')->with('success', 'Successfully updated blog')
                : back()->with('errors', 'Error updating blog');
        } else {
            return back()->with('error', 'Date not found');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $blog)
    {
        if ($blog) {

            // Delete school photo
            if ($blog->photo && file_exists(public_path("media/blogs/{$blog->photo}"))) {
                unlink(public_path("media/blogs/{$blog->photo}"));
            }

            $status = $blog->delete();

            return $status
                ? redirect()->route('admin.blogs.index')->with('success', 'Successfully deleted blog')
                : back()->with('errors', 'Error deleting blog');
        } else {
            return back()->with('error', 'Date not found');
        }
    }
}
