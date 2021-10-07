<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\ProductVariant;
use App\Models\Variant;
use Illuminate\Database\Seeder;

class VariantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // clean the db table
        \DB::table('variants')->truncate();
        // create table data

        Variant::create([
            'title:el' => 'Υψος',
            'slug:el' => 'ypsos',
            'title:en' => 'Height',
            'slug:en' => 'height',
            'category_id' => 2,
        ]);
        Variant::create([
            'title:el' => 'Πλάτος',
            'slug:el' => 'platos',
            'title:en' => 'Width',
            'slug:en' => 'width',
            'category_id' => 2,
        ]);
        Variant::create([
            'title:el' => 'Μήκος',
            'slug:el' => 'mikos',
            'title:en' => 'Length',
            'slug:en' => 'length',
            'category_id' => 2,
        ]);
        Variant::create([
            'title:el' => 'Μοτέρ',
            'slug:el' => 'moter',
            'title:en' => 'Motor',
            'slug:en' => 'motor',
            'category_id' => 2,
        ]);
        Variant::create([
            'title:el' => 'Χωρητικοτητα',
            'slug:el' => 'xwritikotita',
            'title:en' => 'Capacity',
            'slug:en' => 'capacity',
            'category_id' => 2,
        ]);
        Variant::create([
            'title:el' => 'Θόρυβος',
            'slug:el' => 'Θόρυβος',
            'title:en' => 'Noice',
            'slug:en' => 'noice',
            'category_id' => 2,
        ]);
        Variant::create([
            'title:el' => 'Ενεργειακή Κλάση',
            'slug:el' => 'energyclass',
            'title:en' => 'Energy Class',
            'slug:en' => 'energyclass',
            'category_id' => 2,
        ]);
        Variant::create([
            'title:el' => 'Εντιχοιζόμενη',
            'slug:el' => 'entixoizomeni',
            'title:en' => 'BuiltIn',
            'slug:en' => 'builtin',
            'category_id' => 2,
        ]);
        Variant::create([
            'title:el' => 'Καλωδιωμένη',
            'slug:el' => 'kalwdiomeni',
            'title:en' => 'Wired',
            'slug:en' => 'wired',
            'category_id' => 2,
        ]);
        Variant::create([
            'title:el' => 'Οθόνη',
            'slug:el' => 'othoni',
            'title:en' => 'Screen',
            'slug:en' => 'screen',
            'category_id' => 2,
        ]);

        Variant::create([
            'title:el' => 'Απόδοση BTU',
            'slug:el' => 'btu',
            'title:en' => 'BTU',
            'slug:en' => 'btu',
            'category_id' => 2,
        ]);

        Variant::create([
            'title:el' => 'Ιονιστής',
            'slug:el' => 'ionistis',
            'title:en' => 'Ionist',
            'slug:en' => 'ionist',
            'category_id' => 2,
        ]);

        Variant::create([
            'title:el' => 'Θόρυβος',
            'slug:el' => 'thorivos',
            'title:en' => 'Noice',
            'slug:en' => 'noice',
            'category_id' => 2,
        ]);

        Variant::create([
            'title:el' => 'Έξυνη Συσκευή',
            'slug:el' => 'eksipnisyskyi',
            'title:en' => 'Smart Appliance',
            'slug:en' => 'smartappliance',
            'category_id' => 2,
        ]);

        // Variant::factory()->count(10)->create();

    }
}
