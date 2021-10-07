<?php

namespace Database\Seeders;

use App\Models\Type;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * Run the cache:clear if u change anything.
     *
     * @return void
     */
    public function run()
    {
        // clean the db table
        DB::table('types')->truncate();
        // create table data

        Type::create([
            'title:el' => 'Ψυγεία',
            'slug:el' => 'psigeia',
            'title:en' => 'Refrigerators',
            'slug:en' => 'refrigerators',
            'image' => 'hl-syskeyes.jpeg',
            'category_id' => 2,
            'active' => 1,
        ]);

        Type::create([
            'title:el' => 'Απορροφητήρες',
            'slug:el' => 'aporofitires',
            'title:en' => 'Hoods',
            'slug:en' => 'hoods',
            'active' => 1,
            'image' => 'eidi-spitioy.jpeg',
            'category_id' => 2,
        ]);

        Type::create([
            'title:el' => 'Καταψύκτες',
            'slug:el' => 'katapsixtes',
            'title:en' => 'Freezers',
            'slug:en' => 'freezers',
            'active' => 1,
            'image' => 'eidi-spitioy.jpeg',
            'category_id' => 2,
        ]);

        Type::create([
            'title:el' => 'Πλυντήρια, Στεγνωτήρια',
            'slug:el' => 'plintiria-stegnotiria',
            'title:en' => 'Washing machines, Dryers',
            'slug:en' => 'washing-machines-dryers',
            'image' => 'hl-syskeyes.jpeg',
            'category_id' => 2,
            'active' => 1,
        ]);

        Type::create([
            'title:el' => 'Φουρνοι μικροκυμμάτων',
            'slug:el' => 'foyrnoi-mikrikymatwn',
            'title:en' => 'Microwave Ovens',
            'slug:en' => 'micro-wave-oven',
            'active' => 1,
            'image' => 'eidi-spitioy.jpeg',
            'category_id' => 2,
        ]);

        Type::create([
            'title:el' => 'Κουζίνες',
            'slug:el' => 'koyzines',
            'title:en' => 'Kitchens',
            'slug:en' => 'kitchens',
            'active' => 1,
            'image' => 'hl-syskeyes.jpeg',
            'category_id' => 2,
        ]);
        Type::create([
            'title:el' => 'Φουρνάκια, Κουζινάκια',
            'slug:el' => 'foyrnakia-koyzinakia',
            'title:en' => 'Ovens, Kitchens',
            'slug:en' => 'ovens-kitchens',
            'active' => 1,
            'image' => 'hl-syskeyes.jpeg',
            'category_id' => 2,
        ]);

        Type::create([
            'title:el' => 'Εντοιχιζόμενα',
            'slug:el' => 'εντοιχιζομενα',
            'title:en' => 'Built-in',
            'slug:en' => 'built-in',
            'active' => 1,
            'image' => 'tilefwnia-internet.jpeg',
            'category_id' => 2,
        ]);
        // λευκες συσκευες τελος

        Type::create([
            'title:el' => 'Σκούπες',
            'slug:el' => 'skoypes',
            'title:en' => 'Brooms',
            'slug:en' => 'brooms',
            'image' => 'technologia.jpeg',
            'category_id' => 3,
            'active' => 1,
        ]);
        Type::create([
            'title:el' => 'Συσκευές Σιδερώματος',
            'slug:el' => 'syskeyes-sideromatos',
            'title:en' => 'Ironing Appliances',
            'slug:en' => 'ironing-appliances',
            'image' => 'technologia.jpeg',
            'category_id' => 3,
            'active' => 1,
        ]);
        Type::create([
            'title:el' => 'Ραπτομηχανές',
            'slug:el' => 'raptomixanes',
            'title:en' => 'Sewing machines',
            'slug:en' => 'sewing-machines',
            'image' => 'technologia.jpeg',
            'category_id' => 3,
            'active' => 1,
        ]);
        Type::create([
            'title:el' => 'Μηχανές Καφέ & Ροφημάτων',
            'slug:el' => 'mixanes-kafe-rofimatwn',
            'title:en' => 'Coffee Beverages Mashine',
            'slug:en' => 'coffee-beverages-mashine',
            'image' => 'technologia.jpeg',
            'category_id' => 3,
            'active' => 1,
        ]);
        Type::create([
            'title:el' => 'Συσκευές Μαγειρικής',
            'slug:el' => 'siskeyes-mageirikis',
            'title:en' => 'Cooking Mashines',
            'slug:en' => 'cooking-mashines',
            'image' => 'technologia.jpeg',
            'category_id' => 3,
            'active' => 1,
        ]);
        Type::create([
            'title:el' => 'Σκεύη Μαγειρικής',
            'slug:el' => 'skeyh-mageirikis',
            'title:en' => 'Cooking Vessel',
            'slug:en' => 'cooking-vessel',
            'image' => 'technologia.jpeg',
            'category_id' => 3,
            'active' => 1,
        ]);
        // οικιακος εξοπλισμος τελος

        Type::create([
            'title:el' => 'Τηλεοράσεις & Αξεσουάρ',
            'slug:el' => 'tileoraseis-aksesouar',
            'title:en' => 'Tv and Accessories',
            'slug:en' => 'tv-and-accessories',
            'image' => 'technologia.jpeg',
            'category_id' => 4,
            'active' => 1,
        ]);
        Type::create([
            'title:el' => 'Home Cinema',
            'slug:el' => 'home-cinema',
            'title:en' => 'HomeCinema',
            'slug:en' => 'homecinema',
            'image' => 'technologia.jpeg',
            'category_id' => 4,
            'active' => 1,
        ]);
        Type::create([
            'title:el' => 'Blu Ray & DVD',
            'slug:el' => 'blu-ray-dvd',
            'title:en' => 'BluRay&DVD',
            'slug:en' => 'bluraydvd',
            'image' => 'technologia.jpeg',
            'category_id' => 4,
            'active' => 1,
        ]);
        Type::create([
            'title:el' => 'Ηχοσύτημα Αυτοκινήτου',
            'slug:el' => 'ixosysthma-aytokinitoy-',
            'title:en' => 'Car Audio & Theater',
            'slug:en' => 'car-audio-theater',
            'image' => 'technologia.jpeg',
            'category_id' => 4,
            'active' => 1,
        ]);
        // εικονα και ιχος μενθ τελοσ


        Type::create([
            'title:el' => 'Κλιματιστικά',
            'slug:el' => 'klimatistika',
            'title:en' => 'AirCondition',
            'slug:en' => 'aircondition',
            'image' => 'technologia.jpeg',
            'category_id' => 5,
            'active' => 1,
        ]);

        Type::create([
            'title:el' => 'Ανεμιστήρες',
            'slug:el' => 'anemistires',
            'title:en' => 'Fans',
            'slug:en' => 'fans',
            'image' => 'technologia.jpeg',
            'category_id' => 5,
            'active' => 1,
        ]);

        Type::create([
            'title:el' => 'Θερμαντικά Σώματα',
            'slug:el' => 'thermantika-swmata',
            'title:en' => 'Heaters',
            'slug:en' => 'heaters',
            'image' => 'technologia.jpeg',
            'category_id' => 5,
            'active' => 1,
        ]);

        Type::create([
            'title:el' => 'Θερμοσίφωνες - Boiler',
            'slug:el' => 'thermosifwnes-boyler',
            'title:en' => 'Water heaters - Boiler',
            'slug:en' => 'water-heaters-boiler',
            'image' => 'technologia.jpeg',
            'category_id' => 5,
            'active' => 1,
        ]);

        Type::create([
            'title:el' => 'Αντλίες θερμότητας',
            'slug:el' => 'antlies-thermotitas',
            'title:en' => 'Heat pumps',
            'slug:en' => 'heat-pumps',
            'image' => 'technologia.jpeg',
            'category_id' => 5,
            'active' => 1,
        ]);
        Type::create([
            'title:el' => 'Αφυγραντήρες',
            'slug:el' => 'afygrantires ',
            'title:en' => 'Dehumidifiers',
            'slug:en' => 'dehumidifiers ',
            'image' => 'technologia.jpeg',
            'category_id' => 5,
            'active' => 1,
        ]);
        Type::create([
            'title:el' => 'Ιονιστές - Υγραντήρες - Καθαριστές Αέρα',
            'slug:el' => 'ionistes-ygrantires-katharistes-aera',
            'title:en' => 'Ionizers - Humidifiers - Air Purifiers',
            'slug:en' => 'ionizers-humidifiers-air-purifiers',
            'image' => 'technologia.jpeg',
            'category_id' => 5,
            'active' => 1,
        ]);
        Type::create([
            'title:el' => 'Βάσεις Κλιματιστικών',
            'slug:el' => 'vaseis-klimatistikwn',
            'title:en' => 'Air Conditioning Bases',
            'slug:en' => 'air-condition-base',
            'image' => 'technologia.jpeg',
            'category_id' => 5,
            'active' => 1,
        ]);
        // thermansi and climatismos end

        Type::create([
            'title:el' => 'Για τη γυναίκα',
            'slug:el' => 'gia-th-gynaika',
            'title:en' => 'For Women',
            'slug:en' => 'for-women',
            'image' => 'technologia.jpeg',
            'category_id' => 6,
            'active' => 1,
        ]);
        Type::create([
            'title:el' => 'Υγεία - Ευεξία',
            'slug:el' => 'ygeia-ayeksia',
            'title:en' => 'Health - Wellness',
            'slug:en' => 'health-wellness',
            'image' => 'technologia.jpeg',
            'category_id' => 6,
            'active' => 1,
        ]);
        Type::create([
            'title:el' => 'Για τον Άντρα',
            'slug:el' => 'gia-tον-αντρα',
            'title:en' => 'For Men',
            'slug:en' => 'for-men',
            'image' => 'technologia.jpeg',
            'category_id' => 6,
            'active' => 1,
        ]);
        Type::create([
            'title:el' => 'Για το παιδί',
            'slug:el' => 'gia-tο-παιδι',
            'title:en' => 'Children Care',
            'slug:en' => 'children-care',
            'image' => 'technologia.jpeg',
            'category_id' => 6,
            'active' => 1,
        ]);
        Type::create([
            'title:el' => 'Ποδήλατα',
            'slug:el' => 'podilata',
            'title:en' => 'Bikes',
            'slug:en' => 'bikes',
            'image' => 'technologia.jpeg',
            'category_id' => 6,
            'active' => 1,
        ]);
        // prosopiki frontida menu end

        Type::create([
            'title:el' => 'Κινητή τηλέφωνία',
            'slug:el' => 'kinita-tilefwna',
            'title:en' => 'Mobile Devices',
            'slug:en' => 'mobile-devices',
            'image' => 'technologia.jpeg',
            'category_id' => 7,
            'active' => 1,
        ]);
        Type::create([
            'title:el' => 'Σταθερή τηλέφωνία',
            'slug:el' => 'stathera-tilefwna',
            'title:en' => 'Home Telephony',
            'slug:en' => 'home-telephony',
            'image' => 'technologia.jpeg',
            'category_id' => 7,
            'active' => 1,
        ]);
        Type::create([
            'title:el' => 'Πλοήγηση - GPS',
            'slug:el' => 'ploigisi-gps',
            'title:en' => 'Navigation - GPS',
            'slug:en' => 'navigation-gps',
            'image' => 'technologia.jpeg',
            'category_id' => 7,
            'active' => 1,
        ]);
        // home telephony menu end here

        Type::create([
            'title:el' => 'Για υπολογιστή',
            'slug:el' => 'gia-ypologisti',
            'title:en' => 'Pc Gaming',
            'slug:en' => 'pc-gaming',
            'image' => 'technologia.jpeg',
            'category_id' => 8,
            'active' => 1,
        ]);
        // gaming menu end here

        Type::create([
            'title:el' => 'Μπάνιο',
            'slug:el' => 'mpanio',
            'title:en' => 'Bath',
            'slug:en' => 'bath',
            'image' => 'technologia.jpeg',
            'category_id' => 9,
            'active' => 1,
        ]);
        Type::create([
            'title:el' => 'Φωτιστικά',
            'slug:el' => 'fwtistika',
            'title:en' => 'Lighting outfits',
            'slug:en' => 'lighting-outfits',
            'image' => 'technologia.jpeg',
            'category_id' => 9,
            'active' => 1,
        ]);
        Type::create([
            'title:el' => 'Νεροχύτες - Μπαταρίες Κουζίνας',
            'slug:el' => 'neroxytes-mpataries-mpanioy-koyzinas',
            'title:en' => 'Sinks - Kitchen Faucets',
            'slug:en' => 'sinks-kitchen-faucets',
            'image' => 'technologia.jpeg',
            'category_id' => 9,
            'active' => 1,
        ]);
    }
}
