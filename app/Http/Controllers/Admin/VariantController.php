<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Type;
use App\Models\Variant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

class VariantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $variants = Variant::with('category')->orderBy('id', 'desc')->paginate(8);

        return view('admin.variants.index', compact('variants'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::withTranslation()->get();

        return view('admin.variants.create', compact('categories'));
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
            'title' => 'required|max:50',
            'slug' => 'unique:variants,title',
            'active' => 'nullable',
            'category_id' => 'nullable',
            'image' => 'nullable|mimes:jpeg,png,jpg,gif,svg',
        ]);
        $variant = new Variant();
        $variant->title = $request->title;
        $variant->active = $request->active;
        $variant->slug = Str::slug($request->title, '-');
        $variant->category_id = $request->category_id;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path("images/variants/" . $filename);
            Image::make($image)->resize(800, 400)->save($location);
            $variant->image = $filename;
            // dd($filename);
        }

        $variant->save();

        Artisan::call('cache:clear');

        $notification = array(
            'message' => 'Variant added successfully',
            'alert-type' => 'info'
        );
        return redirect(route('variants.index'))->with($notification);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Variant  $variant
     * @return \Illuminate\Http\Response
     */
    public function show(Variant $variant)
    {
        $variant = Variant::whereTranslation('slug', $variant->slug)->first();

        return view('admin.variants.show', compact('variant'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Variant  $variant
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $variant = Variant::find($id);

        return view('admin.variants.edit', compact('variant'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Variant  $variant
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
         // $this->authorize('update_subtypes', 'App\Models\SubType');
         $this->validate($request, [
            'title' => 'required|max:60',
            'slug' => 'unique:variants,title',
            'active' => 'nullable',
            'image' => 'nullable|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'category_id' => 'integer',
        ]);

        $variant = Variant::find($id);
        $variant->title = $request->title;
        $variant->active = $request->active;
        $variant->slug = Str::slug($request->title, '-');
        $variant->category_id = $request->category_id;

        if ($request->hasFile('image')) {
            //add new photo
            $image = $request->file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path("images/variants/" . $filename);
            $oldfile = public_path("images/variants/" . $variant->image);
            // dd($oldfile);
            if (File::exists($oldfile)) {
                File::delete($oldfile);
            }
            Image::make($image)->resize(800, 400)->save($location);
            $variant->image = $filename;
        }

        $variant->save();

        $notification = array(
            'message' => 'Variant updated successfully',
            'alert-type' => 'info'
        );
        Artisan::call('cache:clear');
        return redirect(route('variants.index'))->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Variant  $variant
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
            //   $this->authorize('delete_subtypes', 'App\Models\SubType');
      Variant::where('id',$id)->delete();
      $notification = array(
      'message' => 'Variant deleted successfully',
      'alert-type' => 'success'
      );
      Artisan::call('cache:clear');

      return redirect(route('variants.index'))->with($notification);
    }
}
