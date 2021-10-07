<?php

namespace App\Events;

use App\Models\Category;
use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;
use Stichoza\GoogleTranslate\GoogleTranslate;

class CategoryCreated
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $category;
    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(Category $category)
    {
        $this->category = $category;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function handle($category)
    {
        // $title = $event->category->title;
        // dd($category);
        if (app()->getLocale() == 'en') {
            $tr = new GoogleTranslate();
            $src = $tr->setSource('en');
            $target = $tr->setTarget('el');

            $title  = $tr->translate($category->title);
            // $category->slug = $tr->translate($category->slug);
            if($title) {
                dd($title);
                // Category::insert([
                //     'title:el' => $title,
                //     // 'slug:el' => $category->slug,
                // ]);
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
                    dd($title);
                    // Category::insert([
                    //     'title:en' => $title,
                    //     // 'slug:en' => $category->slug,
                    // ]);
                }  else {
                    dd('notitlefrom '.$src);
                };

            }
    }
}
