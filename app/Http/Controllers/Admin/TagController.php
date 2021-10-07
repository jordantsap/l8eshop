<?php

namespace App\Http\Controllers\Admin;

use App\Models\Tag;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;
use Str;

class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tags = Tag::orderBy('id', 'DESC')->paginate(10);
    //   dd($articles);
      return view('admin.tags.index', compact('tags'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.tags.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $this->authorize('update_categories', 'App\Models\Categories');
        $this->validate($request, [
            'title' => 'required|max:50|unique:categories',
            'slug' => 'unique:tags,title',
            'image' => 'sometimes|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $tag = new Tag();
        $tag->title = $request->title;
        $tag->slug = Str::slug($request->title, '-');

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path("images/tags/" . $filename);
            Image::make($image)->resize(800, 400)->save($location);
            $tag->image = $filename;
            // dd($filename);
        }

        $tag->save();

        Artisan::call('cache:clear');

        $notification = array(
            'message' => 'tag added successfully',
            'alert-type' => 'info'
        );
        return redirect(route('tags.index'))->with($notification);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tag = Tag::where('id', $id)->firstOrFail();

        return view('admin.tags.tag', compact('tag'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tag = Tag::find($id);
        return view('admin.tags.edit', compact('tag'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tag $tag)
    {
         // $this->authorize('update_subtags', 'App\Models\Subtag');
         $this->validate($request, [
            'title' => 'required|max:60',
            'slug' => 'unique:tags,title',
            'image' => 'nullable|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $tag = tag::find($tag->id);
        $tag->title = $request->title;
        $tag->slug = Str::slug($request->title, '-');

        if ($request->hasFile('image')) {
            //add new photo
            $image = $request->file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path("images/tags/" . $filename);
            $oldfile = public_path("images/tags/" . $tag->image);
            // dd($oldfile);
            if (File::exists($oldfile)) {
                File::delete($oldfile);
            }
            Image::make($image)->resize(800, 400)->save($location);
            $tag->image = $filename;
        }

        $tag->save();

        $notification = array(
            'message' => 'tag updated successfully',
            'alert-tag' => 'info'
        );
        Artisan::call('cache:clear');
        return redirect(route('tags.index'))->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         //   $this->authorize('delete_subtypes', 'App\Models\SubType');
      Tag::where('id',$id)->delete();
      $notification = array(
      'message' => 'User deleted successfully',
      'alert-type' => 'success'
      );
      Artisan::call('cache:clear');

      return redirect(route('tags.index'))->with($notification);
    }
}
