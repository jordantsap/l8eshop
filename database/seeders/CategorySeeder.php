<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // clean the db table
        \DB::table('categories')->truncate();
        // create table data
        Category::create([
            'title:el' => 'Φοιτητικά Πακέτα',
            'slug:el' => 'foitika-paketa',

            'title:en' => 'Student Offers-Packets',
            'slug:en' => 'student-offers-packets',

            'image' => 'foititikopaketo.jpg',
            'featured' => 1,
        ]);

        Category::create([
            'title:el' => 'Λευκές Συσκευές',
            'slug:el' => 'leykes-syskeyes',

            'title:en' => 'Appliances',
            'slug:en' => 'appliances',

            'image' => 'plintirio-anw.webp',
            'featured' => 1,
        ]);
        Category::create([
            'title:el' => 'Οικιακός Εξοπλισμός',
            'slug:el' => 'oikiakos-eksoplismos',

            'title:en' => 'Home Products',
            'slug:en' => 'home-products',

            'image' => 'eidi-spitioy.jpg',
            'featured' => 1,
        ]);

        Category::create([
            'title:el' => 'Εικόνα-Ήχος',
            'slug:el' => 'eikona-hxos',

            'title:en' => 'Display and Sound',
            'slug:en' => 'display-sound',

            'image' => 'trapezaria.jpg',
            'featured' => 1,
        ]);
        Category::create([
            'title:el' => 'Θέρμανση & Κλιματισμός',
            'slug:el' => 'thermansi-klimatismos',

            'title:en' => 'Heat & Cold',
            'slug:en' => 'heat-cold',

            'image' => 'technologia.jpg',
            'featured' => 1,
        ]);
        Category::create([
            'title:el' => 'Προσωπική Φροντίδα',
            'slug:el' => 'prosopiki-frontida',

            'title:en' => 'Personal Care',
            'slug:en' => 'personal-care',

            'image' => 'stegnwtiria-royxwn.jpg',
            'featured' => 1,
        ]);
        Category::create([
            'title:el' => 'Τηλεφωνία & GPS',
            'slug:el' => 'tilefwnia-gps',

            'title:en' => 'Telephony & GPS',
            'slug:en' => 'telephony-gps',

            'image' => 'eidi-dwroy.jpg',
            'featured' => 1,
        ]);
        Category::create([
            'title:el' => 'Παιχνίδια',
            'slug:el' => 'paixnidia',

            'title:en' => 'Gaming',
            'slug:en' => 'gaming',

            'image' => 'endysh-ypodish.jpg',
            'featured' => 1,
        ]);

        Category::create([
            'title:el' => 'Μπάνιο Κουζίνα & Φωτιστικά',
            'slug:el' => 'mpanio-koyzina-fwtistika',

            'title:en' => 'Bathroom Kitchen & Lighting',
            'slug:en' => 'bath-couzine-lights',

            'image' => 'xrwmata-anakainisi.jpg',
            'featured' => 1,
        ]);

        // Category::create([
        //     'title:el' => 'Μικροσυσκευές',
        //     'slug:el' => 'microsiskeyes',
        //     'image' => 'hl-syskeyes.jpeg',
        //     'featured' => 1,
        // ]);
        //   Category::create([
        //     'title:el' => 'Παροχή Yπηρεσιών',
        //     'slug:el' => 'paroxi-ypiresiwn',
        //     'image'=> 'paroxi-ypiresiwn.jpeg',
        //     'featured' => 1,
        //   ]);
        //   Category::create([
        //     'title:el' => 'Τρόφιμα/Super Market',
        //     'slug:el' => 'food-super-market',
        //     'image'=> 'food-super-market.jpeg',
        //     'featured' => 1,
        //   ]);
        // Category::create([
        //   'title:el' => 'Καλλυντικά/Είδη Υγιεινής',
        //   'slug:el' => 'kalintika-eidi-ygieinhs',
        //   'image'=> 'kalintika-eidi-ygeihnhs.jpeg',
        // ]);
        // Category::create([
        //   'title:el' => 'Ταξίδια',
        //   'slug:el' => 'travel',
        //   'image'=> 'travel.jpeg',
        // ]);
        //   Category::create([
        //     'title:el' => 'Διασκέδαση',
        //     'slug:el' => 'diaskedasi',
        //     'image'=> 'cinema-diaskedasi.jpeg',
        //   ]);
        //   Category::create([
        //     'title:el' => 'Μετακομίσεις',
        //     'slug:el' => 'metakomiseis',
        //     'image'=> 'metakomiseis.jpeg',
        //     'featured' => 1,
        //   ]);
        //   Category::create([
        //     'title:el' => 'Βιβλία',
        //     'slug:el' => 'vivlia',
        //     'image'=> 'vivlia.jpeg',
        //     'featured' => 1,
        //   ]);
    }
}
