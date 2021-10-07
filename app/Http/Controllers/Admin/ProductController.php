<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Color;
use App\Models\Company;
use DB;
use App\Models\Product;
use App\Models\SubType;
use App\Models\TemporaryFile;
use App\Models\Type;
use App\Models\Variant;
use App\Notifications\ProductCreatedNotification;
use App\Notifications\ProductUpdatedNotification;
use Artisan;
use Image;
use Auth;
use File;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Notification;
use Str;
use Stichoza\GoogleTranslate\GoogleTranslate;
use Symfony\Component\Console\Input\Input;

// use Illuminate\Http\File;
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //   $this->authorize('view_products', 'App\Product');
        $products = Product::orderBy('id', 'DESC')->withTranslation()->paginate(9);
        return view('admin.products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $this->authorize('create_products', 'App\Product');
        $categories = Category::withTranslation()->get();
        // $subtypes = SubType::get();
        // $types = Type::get();
        $variants = Variant::withTranslation()->get();
        $brands = Brand::withTranslation()->get();
        $colors = Color::withTranslation()->get();
        return view(
            'admin.products.create',
            compact(
                'colors',
                'brands',
                'categories',
                'variants'
            )
        );
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
            'title' => 'required|max:100',
            'quantity' => '',
            'brand_id' => 'nullable',
            'category_id' => 'sometimes',
            'type_id' => '',
            'sub_type_id' => '',
            'color_id' => 'nullable',
            'active' => 'nullable',
            'slider' => 'nullable',
            'homepage' => 'nullable',
            'logo' => 'required|mimes:jpeg,png,jpg,gif,svg',
            'image1' =>'required|mimes:jpeg,png,jpg,gif,svg',
            'image2' => 'required|mimes:jpeg,png,jpg,gif,svg',
            'image3' => 'required|mimes:jpeg,png,jpg,gif,svg',
            'image4' => 'required|mimes:jpeg,png,jpg,gif,svg',
            'image5' => 'required|mimes:jpeg,png,jpg,gif,svg',
            // 'image' => 'required|mimes:jpeg,png,jpg,gif,svg',
            'color' => 'nullable',
            'price' => 'required',
            'description' => 'required',
        ]);

        $product = new Product;
        // $product->title = $request->input('title');
        // $product->description = $request->description;
        // $product->slug = Str::slug($request->input('title'), '-');

        $tr = new GoogleTranslate();

        if (app()->getLocale() == 'en') {
            // $title = GoogleTranslate::trans($request->title,'el');
            $tr->setSource('en'); // Translate from English
            $tr->setTarget('el');
            $title = $tr->translate($request->title);
            $description = $tr->translate($request->description);
            if ($title) {
                // dd($title);
                $product->title = $request->title;
                $product->title = $request->description;

                $product->translate('el')->title = $title;
                $product->translate('el')->description = $description;

            } else {
                dd('notitlefrom ' . '$src = en');
            };
        } else {
            // $title = GoogleTranslate::trans($request->title,'en');
            $tr->setSource('el'); // Translate from English
            $tr->setTarget('en');
            $title = $tr->translate($request->title);
            $description = $tr->translate($request->description);
            if ($title) {
                // dd($title);
                $product->title = $request->title;
                $product->description = $request->description;

                $product->translate('en')->title = $title;
                $product->translate('en')->description = $description;
            } else {
                dd('notitlefrom ' . '$src = el');
            };
        }

        $product->quantity = $request->quantity;
        $product->brand_id = $request->brand_id;
        $product->category_id = $request->input('category_id');
        $product->type_id = $request->type_id;
        $product->sub_type_id = $request->sub_type_id;
        $product->price = $request->price;
        $product->color_id = $request->color_id;
        $product->active = $request->input('active');
        $product->slider = $request->input('slider');
        $product->homepage = $request->input('homepage');
        $product->logo = $request->logo;
        $product->image1 = $request->image1;
        $product->image2 = $request->image2;
        $product->image3 = $request->image3;
        $product->image4 = $request->image4;
        $product->image5 = $request->image5;

        if ($request->hasFile('logo')) {
            $logo = $request->file('logo');
            $filename = time() . '.' . $logo->getClientOriginalExtension();
            $location = public_path("products/" . $filename);
            Image::make($logo)->resize(800, 400)->save($location);
            // Storage::put($image)->save($location);
            $product->logo = $filename;
          }

        if ($request->hasFile('image1')) {
            $image1 = $request->file('image1');
            $filename = time() . '.' . $image1->getClientOriginalExtension();
            $location = public_path("products/" . $filename);
            Image::make($image1)->resize(800, 400)->save($location);
            // Storage::put($image)->save($location);
            $product->image1 = $filename;
          }

          if ($request->hasFile('image2')) {
              $image2 = $request->file('image2');
              $filename = time() . '.' . $image2->getClientOriginalExtension();
              $location = public_path("products/" . $filename);
              Image::make($image2)->resize(800, 400)->save($location);
              // Storage::put($image)->save($location);
              $product->image2 = $filename;
            }

            if ($request->hasFile('image3')) {
                $image3 = $request->file('image3');
                $filename = time() . '.' . $image3->getClientOriginalExtension();
                $location = public_path("products/" . $filename);
                Image::make($image3)->resize(800, 400)->save($location);
                $product->image3 = $filename;
              }
            if ($request->hasFile('image4')) {
                $image4 = $request->file('image4');
                $filename = time() . '.' . $image4->getClientOriginalExtension();
                $location = public_path("products/" . $filename);
                Image::make($image4)->resize(800, 400)->save($location);
                $product->image4 = $filename;
              }
            if ($request->hasFile('image5')) {
                $image5 = $request->file('image5');
                $filename = time() . '.' . $image5->getClientOriginalExtension();
                $location = public_path("products/" . $filename);
                Image::make($image5)->resize(800, 400)->save($location);
                $product->image5 = $filename;
              }

        $product->save();

        // $product->images()->attach($request->input('images'), ['expires' => $expires]);
        // Get the temporary path using the serverId returned by the upload function in `FilepondController.php`
        $filepond = app(\Sopamo\LaravelFilepond\Filepond::class);
        $path = $filepond->getPathFromServerId($request->input('images'));
        $image = $request->file('filepond');
        $filename = time() . '.' . $image->getClientOriginalExtension();

        // Move the file from the temporary path to the final location
        $finalLocation = public_path("images/products/" . $filename);
        \File::move($path, $finalLocation);


        $variants = $request->input('variants', []);
        $values = $request->input('values', []);
        for ($variant = 0; $variant < count($variants); $variant++) {
            if ($variants[$variant] != '') {
                $product->variants()->attach($variants[$variant], ['value' => $values[$variant]]);
            }
        }

        // Artisan::call('cache:clear');
        Cache::forget('homeproducts');

        //   Notification::route('mail', 'stamogiorgoufoteini@gmail.com')->notify(new ProductCreatedNotification($product));


        $notification = array(
            'message' => 'Product added successfully',
            'alert-type' => 'info'
        );
        return redirect(route('products.index'))->with($notification);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id = null)
    {
        // $this->authorize('view_products', 'App\Product');

        $product = Product::where('id', $id)->first();

        return view('admin.products.product', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //   $this->authorize('update_products', 'App\Product');
        $product = Product::with('category')->withTranslation()->find($id);
        $product->load('variants');
        $categories = Category::withTranslation()->get();
        $variants = Variant::withTranslation()->get();
        $colors = Color::withTranslation()->get();
        $brands = Brand::withTranslation()->get();
        return view('admin.products.edit', compact('colors', 'product', 'categories', 'brands', 'variants'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $this->validate($request, [
            'title' => 'required|max:100',
            'slug' => 'unique:products,title',
            'description' => 'required',
            'active' => 'nullable',
            'slider' => 'nullable',
            'homepage' => 'nullable',
            // 'company_id' => 'required',
            'brand_id' => 'nullable',
            'category_id' => '',
            'type_id' => '',
            'sub_type_id' => '',
            // 'image' => 'required|mimes:jpeg,png,jpg,gif,svg',
            'color' => 'nullable',
            'price' => 'required',
            'quantity' => '',
            //   'user_id' => 'nullable|integer|Auth::user()->id',
        ]);

        $product = Product::find($id);
        $product->title = $request->title;
        $product->slug = Str::slug($request->title, '-');
        $product->quantity = $request->quantity;
        $product->brand_id = $request->brand_id;
        $product->category_id = $request->category_id;
        $product->type_id = $request->type_id;
        $product->sub_type_id = $request->sub_type_id;
        $product->active = $request->input('active');
        $product->slider = $request->input('slider');
        $product->homepage = $request->input('homepage');
        $product->price = $request->price;
        $product->color_id = $request->color_id;
        $product->description = $request->description;
        $product->logo = $request->logo;
        $product->image1 = $request->image1;
        $product->image2 = $request->image2;
        $product->image3 = $request->image3;
        $product->image4 = $request->image4;
        $product->image5 = $request->image5;

        if ($request->hasFile('logo')) {
            //add new photo
              $logo = $request->file('logo');
              $filename = time() . '.' . $logo->getClientOriginalExtension();
              $location = public_path("images/products/" . $filename);
              $oldfile0 = public_path("images/products/" . $product->logo);
              // dd($oldfile);
              if(\File::exists($oldfile0))
              {
                 \File::delete($oldfile0);
               }
               Image::make($logo)->resize(800, 400)->save($location);
              $product->logo = $filename;
            }

            if ($request->hasFile('image1')) {
              //add new photo
                $image1 = $request->file('image1');
                $filename = time() . '.' . $image1->getClientOriginalExtension();
                $location = public_path("images/products/" . $filename);
                $oldfile1 = public_path("images/products/" . $product->image1);
                // dd($oldfile);
                if(\File::exists($oldfile1))
                {
                   \File::delete($oldfile1);
                 }
                 Image::make($image1)->resize(800, 400)->save($location);
                $product->image1 = $filename;
              }

              if ($request->hasFile('image2')) {
                //add new photo
                  $image2 = $request->file('image2');
                  $filename = time() . '.' . $image2->getClientOriginalExtension();
                  $location = public_path("images/products/" . $filename);
                  $oldfile2 = public_path("images/products/" . $product->image2);
                  // dd($oldfile);
                  if(\File::exists($oldfile2))
                  {
                     \File::delete($oldfile2);
                   }
                   Image::make($image2)->resize(800, 400)->save($location);
                  $product->image2 = $filename;
                }

                if ($request->hasFile('image3')) {
                  //add new photo
                    $image3 = $request->file('image3');
                    $filename = time() . '.' . $image3->getClientOriginalExtension();
                    $location = public_path("images/products/" . $filename);
                    $oldfile3 = public_path("images/products/" . $product->image3);
                    // dd($oldfile);
                    if(\File::exists($oldfile3))
                    {
                       \File::delete($oldfile3);
                     }
                     Image::make($image3)->resize(800, 400)->save($location);
                    $product->image3 = $filename;
                  }

                if ($request->hasFile('image4')) {
                  //add new photo
                    $image4 = $request->file('image4');
                    $filename = time() . '.' . $image3->getClientOriginalExtension();
                    $location = public_path("images/products/" . $filename);
                    $oldfile3 = public_path("images/products/" . $product->image4);
                    // dd($oldfile);
                    if(\File::exists($oldfile3))
                    {
                       \File::delete($oldfile3);
                     }
                     Image::make($image4)->resize(800, 400)->save($location);
                    $product->image4 = $filename;
                  }
                if ($request->hasFile('image5')) {
                  //add new photo
                    $image5 = $request->file('image5');
                    $filename = time() . '.' . $image5->getClientOriginalExtension();
                    $location = public_path("images/products/" . $filename);
                    $oldfile3 = public_path("images/products/" . $product->image5);
                    // dd($oldfile);
                    if(\File::exists($oldfile3))
                    {
                       \File::delete($oldfile3);
                     }
                     Image::make($image5)->resize(800, 400)->save($location);
                    $product->image5 = $filename;
                  }

        $product->save();

        $product->variants()->detach();
        $variants = $request->input('variants', []);
        $quantities = $request->input('quantities', []);
        for ($variant = 0; $variant < count($variants); $variant++) {
            if ($variants[$variant] != '') {
                $product->variants()->attach($variants[$variant], ['quantity' => $quantities[$variant]]);
            }
        }

        Artisan::call('cache:clear');
        Cache::forget('homeproducts');

        // Notification::route('mail', '')
        // ->notify(new ProductUpdatedNotification($product));

        $notification = array(
            'message' => 'Product updated successfully',
            'alert-type' => 'info'
        );


        return redirect(route('products.index'))->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //   $this->authorize('delete_products', 'App\Models\Product');
        Product::where('id', $id)->delete();
        $notification = array(
            'message' => 'User deleted successfully',
            'alert-type' => 'success'
        );
        Artisan::call('cache:clear');

        return redirect(route('products.index'))->with($notification);
    }
}
