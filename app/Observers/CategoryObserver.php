<?php

namespace App\Observers;

use App\Models\Category;
use Stichoza\GoogleTranslate\GoogleTranslate;

class CategoryObserver
{
    /**
     * Handle the Category "created" event.
     *
     * @param  \App\Models\Category  $category
     * @return void
     */
    public function saving(Category $category)
    {
        // $category = Category::withTranslation()->latest()->first();
        // set http options
        if (app()->getLocale() == 'en') {
            $tr = new GoogleTranslate();
            $src = $tr->setSource('en');
            $target = $tr->setTarget('el');

            $title  = $tr->translate($category->title);
            // $category->slug = $tr->translate($category->slug);
            if($title) {
                // dd($title);
                Category::insert([
                    'title:el' => $title,
                    // 'slug:el' => $category->slug,
                ]);
            } else {
                dd('notitlefrom '.$src);
            };

        } else {
                $tr = new GoogleTranslate();
                $src = $tr->setSource('el');
                $target = $tr->setTarget('en');
                $title  = $tr->translate($category->title);
                // $category->slug = $tr->translate($category->slug);
                if($title) {
                    // dd($title);
                    Category::insert([
                        'title:en' => $title,
                        // 'slug:en' => $category->slug,
                    ]);
                }  else {
                    dd('notitlefrom '.$src);
                };

            }

        // $title = GoogleTranslate::setTarget('ka')->translate($category->title);
        // $tr = new GoogleTranslate();
        // return $tr->setSource()
        //     ->setTarget('en')
        //     ->translate($category->title);
    }

    /**
     * Handle the Category "updated" event.
     *
     * @param  \App\Models\Category  $category
     * @return void
     */
    public function updated(Category $category)
    {
        //
    }

    /**
     * Handle the Category "deleted" event.
     *
     * @param  \App\Models\Category  $category
     * @return void
     */
    public function deleted(Category $category)
    {
        //
    }

    /**
     * Handle the Category "restored" event.
     *
     * @param  \App\Models\Category  $category
     * @return void
     */
    public function restored(Category $category)
    {
        //
    }

    /**
     * Handle the Category "force deleted" event.
     *
     * @param  \App\Models\Category  $category
     * @return void
     */
    public function forceDeleted(Category $category)
    {
        //
    }
}
