<?php

namespace Database\Seeders;

use App\Models\SubType;
use Illuminate\Database\Seeder;

class SubTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('sub_types')->truncate();
        // create table data
        SubType::create([
            'title:el' => 'Ντουλάπες & Side by Side',
            'slug:el' => 'ntoylapes-side-by-side',
            'title:en' => 'Wardrobes & Side by Side',
            'slug:en' => 'wardrobes-side-by-side',
            'image' => 'eidi-spitioy.jpeg',
            'type_id' => 1,
        ]);
        SubType::create([
            'title:el' => 'Ψυγειοκαταψύκτες',
            'slug:el' => 'psigeiokatapsixtes',

            'title:en' => 'Refrigerators and freezers',
            'slug:en' => 'refrigerators-freezers',
            'image' => 'eidi-spitioy.jpeg',
            'type_id' => 1,
        ]);
        SubType::create([
            'title:el' => 'Ψυγεία δίπορτα έως 149cm',
            'slug:el' => 'diporta-psigeia-149cm',

            'title:en' => 'Two-door refrigerators up to 149cm',
            'slug:en' => 'two-door-refrigerators-149cm',
            'image' => 'eidi-spitioy.jpeg',
            'type_id' => 1,
        ]);
        SubType::create([
            'title:el' => 'Ψυγεία δίπορτα από 150cm',
            'slug:el' => 'psugia-diporta-apo-150cm',

            'title:en' => 'Two-door refrigerators from 150cm',
            'slug:en' => 'two-door-refrigerators-from-150cm',
            'image' => 'eidi-spitioy.jpeg',
            'type_id' => 1,
        ]);

        SubType::create([
            'title:el' => 'Ψυγεία Μονόπορτα',
            'slug:el' => 'psugia-monoporta',

            'title:en' => 'Single door refrigerators',
            'slug:en' => 'single-door-refrigerators',
            'image' => 'eidi-spitioy.jpeg',
            'type_id' => 1,
        ]);
        SubType::create([
            'title:el' => 'Ψυγεία Μικρά Mini Bar',
            'slug:el' => 'psugia-mikra-mini-bar',

            'title:en' => 'Refrigerators Mini Bar',
            'slug:en' => 'refrigerators-mini-bar',
            'image' => 'eidi-spitioy.jpeg',
            'type_id' => 1,
        ]);
        SubType::create([
            'title:el' => 'Ψυγεία Κρασιών',
            'slug:el' => 'psugia-krasion',
            'title:en' => 'Wine Refrigerators',
            'slug:en' => 'wine-refrigerators',
            'image' => 'eidi-spitioy.jpeg',
            'type_id' => 1,
        ]);
        SubType::create([
            'title:el' => 'Παγομηχανές',
            'slug:el' => 'pagomixanes',

            'title:en' => 'Ice machines',
            'slug:en' => 'ice-machines',
            'image' => 'eidi-spitioy.jpeg',
            'type_id' => 1,
        ]);
        //   type Ψυγεία menu item 1 end

        SubType::create([
            'title:el' => 'Απορροφητήρες Καμινάδα',
            'slug:el' => 'aporrofitires-kaminada',
            'title:en' => 'Chimney hoods',
            'slug:en' => 'chimney-hoods',
            'image' => 'eidi-spitioy.jpeg',
            'type_id' => 2,
        ]);
        SubType::create([
            'title:el' => 'Απορροφητήρες Πτυσσόμενοι',
            'slug:el' => 'aporrofitires-ptussomenoi',
            'title:en' => 'Folding hoods',
            'slug:en' => 'folding-hoods',
            'image' => 'eidi-spitioy.jpeg',
            'type_id' => 2,
        ]);
        SubType::create([
            'title:el' => 'Απορροφητήρες Σταθεροί',
            'slug:el' => 'aporrofitires-statheroi',
            'title:en' => 'Fixed hoods',
            'slug:en' => 'fixed-hoods',
            'image' => 'eidi-spitioy.jpeg',
            'type_id' => 2,
        ]);
        SubType::create([
            'title:el' => 'Απορροφητήρες Συρόμενοι',
            'slug:el' => 'aporrrofitires-suromenoi',
            'title:en' => 'Sliding Hoods',
            'slug:en' => 'sliding-hoods',
            'image' => 'eidi-spitioy.jpeg',
            'type_id' => 2,
        ]);
        // end item Απορροφητήρες 5

        SubType::create([
            'title:el' => 'Καταψύκτες έως 200 λίτρα',
            'slug:el' => 'katapsuktes-eos-200-litra',
            'title:en' => 'Freezers up to 200 liters',
            'slug:en' => 'freezers-up-to-200-liters',
            'image' => 'eidi-spitioy.jpeg',
            'type_id' => 3,
        ]);
        SubType::create([
            'title:el' => 'Καταψύκτες από 201 λίτρα',
            'slug:el' => 'katatapsuktes-apo-201-litra',
            'title:en' => 'Freezers from 201 liters',
            'slug:en' => 'freezers-from-201-liters',
            'image' => 'eidi-spitioy.jpeg',
            'type_id' => 3,
        ]);
        // end oof Καταψύκτες 6

        SubType::create([
            'title:el' => 'Πλυντήρια Ρούχων',
            'slug:el' => 'plintiria-royxwn',
            'title:en' => 'Washing machine',
            'slug:en' => 'washing-machine',
            'image' => 'eidi-spitioy.jpeg',
            'type_id' => 4,
        ]);
        SubType::create([
            'title:el' => 'Πλυντήρια Ρούχων Άνω Φόρτωσης',
            'slug:el' => 'pluntiria-rouxon-ano-fortosis',
            'title:en' => 'Overload Washing Machines',
            'slug:en' => 'overload=-washing-machines',
            'image' => 'eidi-spitioy.jpeg',
            'type_id' => 4,
        ]);

        SubType::create([
            'title:el' => 'Πλυντήρια Στεγνωτήρια',
            'slug:el' => 'pluntiria-stegnotiria',
            'title:en' => 'Washing machines Dryers',
            'slug:en' => 'wshing-machines-δryers',
            'image' => 'eidi-spitioy.jpeg',
            'type_id' => 4,
        ]);
        SubType::create([
            'title:el' => 'Στεγνωτήρια Ρούχων',
            'slug:el' => 'stegnotiria-rouxon',
            'title:en' => 'Clothes Dryers',
            'slug:en' => 'clothes-dryers',
            'image' => 'eidi-spitioy.jpeg',
            'type_id' => 4,
        ]);
        SubType::create([
            'title:el' => 'Πλυντήρια Πιάτων',
            'slug:el' => 'plintiria-piatwn',
            'title:en' => 'Dishwashers',
            'slug:en' => 'dishwashers',
            'image' => 'eidi-spitioy.jpeg',
            'type_id' => 4,
        ]);
        SubType::create([
            'title:el' => 'Πλυντήρια Πιάτων Πάγκου',
            'slug:el' => 'pluntiria-piaton-pagkou',
            'title:en' => 'Countertop Dishwashers',
            'slug:en' => 'countertop-dishwashers',
            'image' => 'eidi-spitioy.jpeg',
            'type_id' => 4,
        ]);
        //type id Πλυντήρια, Στεγνωτήρια 2 end

        SubType::create([
            'title:el' => 'Φούρνοι Μικροκυμάτων',
            'slug:el' => 'fournoi-mikrokumaton',
            'title:en' => 'Microwave ovens',
            'slug:en' => 'microwave-ovens',
            'image' => 'eidi-spitioy.jpeg',
            'type_id' => 5,
        ]);
        // end of Φουρνοι μικροκυμμάτων 7

        SubType::create([
            'title:el' => 'Κουζίνες Ηλεκτρικές',
            'slug:el' => 'kouzines-ilektrikes',
            'title:en' => 'Electric Kitchens',
            'slug:en' => 'electric-kitchens',
            'image' => 'eidi-spitioy.jpeg',
            'type_id' => 6,
        ]);

        SubType::create([
            'title:el' => 'Κουζίνες Υγραερίου',
            'slug:el' => 'kouzines-ugraeriou',
            'title:en' => 'LPG cookers',
            'slug:en' => 'LPG-cookers',
            'image' => 'eidi-spitioy.jpeg',
            'type_id' => 6,
        ]);
        SubType::create([
            'title:el' => 'Κουζίνες Ρεύματος Αερίου',
            'slug:el' => 'kouzines-reumatos-aeriou',
            'title:en' => 'Gas Cookers',
            'slug:en' => 'gas-cookers',
            'image' => 'eidi-spitioy.jpeg',
            'type_id' => 6,
        ]);
        // end of Κουζίνες item 6

        SubType::create([
            'title:el' => 'Φουρνάκια - Κουζινάκια',
            'slug:el' => 'foyrnakia-koyzinakia',
            'title:en' => 'Ovens - Kitchens',
            'slug:en' => 'ovens-kitchens',
            'image' => 'eidi-spitioy.jpeg',
            'type_id' => 7,
        ]);
        SubType::create([
            'title:el' => 'Φουρνάκια Ρομποτίνες',
            'slug:el' => 'fournoi-robotines',
            'title:en' => 'Robot ovens',
            'slug:en' => 'robot-ovens',
            'image' => 'eidi-spitioy.jpeg',
            'type_id' => 7,
        ]);
        // end of Φουρνάκια - Κουζινάκια 7

        SubType::create([
            'title:el' => 'Εντοιχιζόμενες Κουζίνες',
            'slug:el' => 'entoixizomenes-kouzines',
            'title:en' => 'Built-in Kitchens',
            'slug:en' => 'built-in-kitchens',
            'image' => 'eidi-spitioy.jpeg',
            'type_id' => 8,
        ]);
        SubType::create([
            'title:el' => 'Εντοιχιζόμενοι Φούρνοι',
            'slug:el' => 'entoixizomenoi-fournoi',
            'title:en' => 'Built-in Ovens',
            'slug:en' => 'built-in-ovens',
            'image' => 'eidi-spitioy.jpeg',
            'type_id' => 8,
        ]);
        SubType::create([
            'title:el' => 'Πλυντήρια Πιάτων Εντοιχιζόμενα',
            'slug:el' => 'pluntiria-piaton-entoixizomena',
            'title:en' => 'Built-in Dishwashers',
            'slug:en' => 'built-in-dishwashers',
            'image' => 'eidi-spitioy.jpeg',
            'type_id' => 8,
        ]);
        SubType::create([
            'title:el' => 'Πλυντήρια Ρούχων Εντοιχιζόμενα',
            'slug:el' => 'pluntiria-rouxon-entoixizomena',
            'title:en' => 'Built-in Washing Machines',
            'slug:en' => 'built-in-washing-machines',
            'image' => 'eidi-spitioy.jpeg',
            'type_id' => 8
            ,
        ]);
        SubType::create([
            'title:el' => 'Πλυντήρια Στεγνωτήρια Εντοιχιζόμενα',
            'slug:el' => 'plintiria-stegnotiria-entixizomena',
            'title:en' => 'Washers Dryers Built-in',
            'slug:en' => 'washers-dryers-built-in',
            'image' => 'eidi-spitioy.jpeg',
            'type_id' => 8,
        ]);
        SubType::create([
            'title:el' => 'Εντοιχιζόμενες Εμαγιέ Εστίες',
            'slug:el' => 'entoixizomenes-emagie-esties',
            'title:en' => 'Built-in Enamel Hobs',
            'slug:en' => 'built-in-enamel-hobs',
            'image' => 'eidi-spitioy.jpeg',
            'type_id' => 8,
        ]);
        SubType::create([
            'title:el' => 'Εντοιχιζόμενες Κεραμικές Εστίες',
            'slug:el' => 'entoixizomenes-keramikes-esties ',
            'title:en' => 'Built-in Ceramic Hobs',
            'slug:en' => 'built-in-ceramic-hobs',
            'image' => 'eidi-spitioy.jpeg',
            'type_id' => 8,
        ]);
        SubType::create([
            'title:el' => 'Εντοιχιζόμενες Επαγωγικές Εστίες',
            'slug:el' => 'entoixizomenes-epagogikes-esties',
            'title:en' => 'Built-in Induction Hobs',
            'slug:en' => 'built-in-Induction-Hobs',
            'image' => 'eidi-spitioy.jpeg',
            'type_id' => 8,
        ]);
        SubType::create([
            'title:el' => 'Εντοιχιζόμενες Εστίες Domino',
            'slug:el' => 'entoixizomenes-esties-domino',
            'title:en' => 'Built-in Domino Hobs',
            'slug:en' => 'built-in-Domino-Hobs',
            'image' => 'eidi-spitioy.jpeg',
            'type_id' => 8,
        ]);
        SubType::create([
            'title:el' => 'Εντοιχιζόμενες Εστίες Αερίου',
            'slug:el' => 'entoixizomenes-esties-aeriou',
            'title:en' => 'Built-in Gas Stoves',
            'slug:en' => 'built-in-Gas-Stoves',
            'image' => 'eidi-spitioy.jpeg',
            'type_id' => 8,
        ]);
        SubType::create([
            'title:el' => 'Εντοιχιζόμενες Εστίες Αερίου Ρεύματος',
            'slug:el' => 'entoixizomenes-esties-aeriou-reumatos',
            'title:en' => 'Built-in Gas Electricity Stoves',
            'slug:en' => 'Built-in-Gas-Electricity-Stoves',
            'image' => 'eidi-spitioy.jpeg',
            'type_id' => 8,
        ]);
        SubType::create([
            'title:el' => 'Εντοιχιζόμενες Εστίες Γκαζιού',
            'slug:el' => 'entoixizomenes-esties-gkaziou',
            'title:en' => 'Built-in Gas hobs',
            'slug:en' => 'built-in-Gas-hobs',
            'image' => 'eidi-spitioy.jpeg',
            'type_id' => 8,
        ]);
        SubType::create([
            'title:el' => 'Εντοιχιζόμενες Εστίες Υγραερίου',
            'slug:el' => 'entoixizomenes-esties-ugraeriou',
            'title:en' => 'Built-in GasStoves',
            'slug:en' => 'Built-inGasStoves',
            'image' => 'eidi-spitioy.jpeg',
            'type_id' => 8,
        ]);
        SubType::create([
            'title:el' => 'Φούρνοι Μικροκυμάτων Εντοιχιζόμενοι',
            'slug:el' => 'fournoi-mikrokumaton-entoixizomenoi',
            'title:en' => 'Built-in Microwave Ovens',
            'slug:en' => 'Built-in-Microwave-Ovens',
            'image' => 'eidi-spitioy.jpeg',
            'type_id' => 8,
        ]);
        // end of Εντοιχιζόμενα item 8

        SubType::create([
            'title:el' => 'Ηλεκτρικές Σκούπες',
            'slug:el' => 'ilektrikes-skoupes',
            'title:en' => 'Vacuum cleaners',
            'slug:en' => 'Vacuum-cleaners',
            'image' => 'eidi-spitioy.jpeg',
            'type_id' => 9,
        ]);
        SubType::create([
            'title:el' => 'Ηλεκτρικές Σκούπες Χωρίς Σακούλα',
            'slug:el' => 'ilektrikes-skoupes-xoris-sakoula',
            'title:en' => 'Vacuum Cleaners Without Bag',
            'slug:en' => 'Vacuum-Cleaners-Without-Bag',
            'image' => 'eidi-spitioy.jpeg',
            'type_id' => 9,
        ]);
        SubType::create([
            'title:el' => 'Παρκετέζες',
            'slug:el' => 'parketezes',
            'title:en' => 'Parquet floors',
            'slug:en' => 'parquet-floors',
            'image' => 'eidi-spitioy.jpeg',
            'type_id' => 9,
        ]);
        SubType::create([
            'title:el' => 'Σκούπες Χειρός',
            'slug:el' => 'skoupes-xeiros',
            'title:en' => 'Hand Vacuum Cleaners',
            'slug:en' => 'Hand-Vacuum-Cleaners',
            'image' => 'eidi-spitioy.jpeg',
            'type_id' => 9,
        ]);
        SubType::create([
            'title:el' => 'Σκούπες Ρομπότ',
            'slug:el' => 'skoupes-robot',
            'title:en' => 'Robot brooms',
            'slug:en' => 'robot-brooms',
            'image' => 'eidi-spitioy.jpeg',
            'type_id' => 9,
        ]);
        SubType::create([
            'title:el' => 'Σκουπάκια',
            'slug:el' => 'skoupakia',
            'title:en' => 'Mini Vacuum cleaners',
            'slug:en' => 'mini-Vacuum-cleaners',
            'image' => 'eidi-spitioy.jpeg',
            'type_id' => 9,
        ]);
        SubType::create([
            'title:el' => 'Ατμοκαθαριστές',
            'slug:el' => 'atmokatharistes',
            'title:en' => 'Steam cleaners',
            'slug:en' => 'Steam-cleaners',
            'image' => 'eidi-spitioy.jpeg',
            'type_id' => 9,
        ]);
        SubType::create([
            'title:el' => 'Σακούλες Φίλτρα Σκούπας',
            'slug:el' => 'sakoules-fltra-skoupas',
            'title:en' => 'Vacuum Cleaner Bags',
            'slug:en' => 'vacuum-Cleaner-Bags',
            'image' => 'eidi-spitioy.jpeg',
            'type_id' => 9,
        ]);
        SubType::create([
            'title:el' => 'Σκούπες Στάχτης',
            'slug:el' => 'skoupes-staxtis',
            'title:en' => 'Ash Brooms',
            'slug:en' => 'Ash-Brooms',
            'image' => 'eidi-spitioy.jpeg',
            'type_id' => 9,
        ]);
        // menu item skoypes 10 end here

        SubType::create([
            'title:el' => 'Ατμοσίδερα',
            'slug:el' => 'atmosidera',
            'title:en' => 'Steam irons',
            'slug:en' => 'steam-irons',
            'image' => 'eidi-spitioy.jpeg',
            'type_id' => 10,
        ]);
        SubType::create([
            'title:el' => 'Ηλεκτρικά Σίδερα',
            'slug:el' => 'ilektrika-sidera',
            'title:en' => 'Electric Irons',
            'slug:en' => 'Electric-Irons',
            'image' => 'eidi-spitioy.jpeg',
            'type_id' => 10,
        ]);
        SubType::create([
            'title:el' => 'Σύστημα Σιδερώματος',
            'slug:el' => 'sistima-sideromatos',
            'title:en' => 'Ironing system',
            'slug:en' => 'Ironing-system',
            'image' => 'eidi-spitioy.jpeg',
            'type_id' => 10,
        ]);
        SubType::create([
            'title:el' => 'Πρέσα Σιδερώματος',
            'slug:el' => 'preses-sideromatos',
            'title:en' => 'Ironing press',
            'slug:en' => 'ironing-press',
            'image' => 'eidi-spitioy.jpeg',
            'type_id' => 10,
        ]);
        SubType::create([
            'title:el' => 'Σιδερώστρες',
            'slug:el' => 'siderostres',
            'title:en' => 'Ironing boards',
            'slug:en' => 'Ironing-boards',
            'image' => 'eidi-spitioy.jpeg',
            'type_id' => 10,
        ]);
        SubType::create([
            'title:el' => 'Αποχνουδωτές',
            'slug:el' => 'apoxnoudotes',
            'title:en' => 'Defluffers',
            'slug:en' => 'defluffers',
            'image' => 'eidi-spitioy.jpeg',
            'type_id' => 10,
        ]);
        // Συσκευές Σιδερώματος

        SubType::create([
            'title:el' => 'Ραπτομηχανές',
            'slug:el' => 'raptomixanes',
            'title:en' => 'Sewing machines',
            'slug:en' => 'sewing-machines',
            'image' => 'eidi-spitioy.jpeg',
            'type_id' => 11,
        ]);
        // Ραπτομηχανές τελος

        SubType::create([
            'title:el' => 'Μηχανές Espresso',
            'slug:el' => 'mixanes-espresso',
            'title:en' => 'Espresso Mashines',
            'slug:en' => 'espresso-mashines',
            'image' => 'eidi-spitioy.jpeg',
            'type_id' => 12,
        ]);
        SubType::create([
            'title:el' => 'Μηχανές Φίλτου',
            'slug:el' => 'kafetieres-filtrou',
            'title:en' => 'Filter Coffee Machines',
            'slug:en' => 'filter-coffee-machines',
            'image' => 'eidi-spitioy.jpeg',
            'type_id' => 12,
        ]);
        SubType::create([
            'title:el' => 'Μηχανή για αφρόγαλα',
            'slug:el' => 'mixanes-gia-afrogala',
            'title:en' => 'Foam milk machine',
            'slug:en' => 'Foam-milk-machine',
            'image' => 'eidi-spitioy.jpeg',
            'type_id' => 12,
        ]);
        SubType::create([
            'title:el' => 'Καφετιέρες Espresso Με Κάψουλες',
            'slug:el' => 'mixanes-espresso-me-kapsoules',
            'title:en' => 'Espresso Coffee Makers With Capsules',
            'slug:en' => 'Espresso-Coffee-Makers-With-Capsules',
            'image' => 'eidi-spitioy.jpeg',
            'type_id' => 12,
        ]);
        SubType::create([
            'title:el' => 'Καφετιέρες Ελληνικού',
            'slug:el' => 'kafetieres-ellinikou',
            'title:en' => 'Greek coffee makers',
            'slug:en' => 'greek-coffee-makers',
            'image' => 'eidi-spitioy.jpeg',
            'type_id' => 12,
        ]);
        SubType::create([
            'title:el' => 'φραπεδιέρες',
            'slug:el' => 'frapedieres',
            'title:en' => 'Frape Mashine',
            'slug:en' => 'frape-mashine',
            'image' => 'eidi-spitioy.jpeg',
            'type_id' => 12,
        ]);
        SubType::create([
            'title:el' => 'Βραστήρες',
            'slug:el' => 'vrastires',
            'title:en' => 'Kettles',
            'slug:en' => 'Kettles',
            'image' => 'eidi-spitioy.jpeg',
            'type_id' => 12,
        ]);
        SubType::create([
            'title:el' => 'Ηλεκτρικά Μπρίκια',
            'slug:el' => 'ilektrika-brikia',
            'title:en' => 'Electric Coffee pot',
            'slug:en' => 'electric-coffee-pot',
            'image' => 'eidi-spitioy.jpeg',
            'type_id' => 12,
        ]);
        SubType::create([
            'title:el' => 'Λεμονοστίφτες',
            'slug:el' => 'lemonostiftes',
            'title:en' => 'Lemon squeezers',
            'slug:en' => 'lemon-squeezers',
            'image' => 'eidi-spitioy.jpeg',
            'type_id' => 12,
        ]);
        SubType::create([
            'title:el' => 'Αποχυμωτές',
            'slug:el' => 'apoxumotes-1',
            'title:en' => 'Juicers',
            'slug:en' => 'juicers',
            'image' => 'eidi-spitioy.jpeg',
            'type_id' => 12,
        ]);
        SubType::create([
            'title:el' => 'Ψύκτες Νερού',
            'slug:el' => 'psuktes-nerou',
            'title:en' => 'Water coolers',
            'slug:en' => 'water-coolers',
            'image' => 'eidi-spitioy.jpeg',
            'type_id' => 12,
        ]);
        // μηχανες κεφε τελος

        SubType::create([
            'title:el' => 'Κουζινομηχανές',
            'slug:el' => 'kouzinomixanes',
            'title:en' => 'Kitchen machines',
            'slug:en' => 'kitchen-machines',
            'image' => 'eidi-spitioy.jpeg',
            'type_id' => 13,
        ]);
        SubType::create([
            'title:el' => 'Μπλέντερ',
            'slug:el' => 'mplenter',
            'title:en' => 'Blender',
            'slug:en' => 'blender',
            'image' => 'eidi-spitioy.jpeg',
            'type_id' => 13,
        ]);
        SubType::create([
            'title:el' => 'Πολυμίξερ',
            'slug:el' => 'polimixer',
            'title:en' => 'Polymixer',
            'slug:en' => 'polymixer',
            'image' => 'eidi-spitioy.jpeg',
            'type_id' => 13,
        ]);
        SubType::create([
            'title:el' => 'Μίξερ με Κάδο',
            'slug:el' => 'mixer-me-kado',
            'title:en' => 'Mixer with Bucket',
            'slug:en' => 'mixer-with-bucket',
            'image' => 'eidi-spitioy.jpeg',
            'type_id' => 13,
        ]);
        SubType::create([
            'title:el' => 'Πολυκόπτες Multi',
            'slug:el' => 'polukoptes-multi',
            'title:en' => 'Multi cutters',
            'slug:en' => 'multi-cutters',
            'image' => 'eidi-spitioy.jpeg',
            'type_id' => 13,
        ]);
        SubType::create([
            'title:el' => 'Ραβδομπλέντερ',
            'slug:el' => 'ravdoblender',
            'title:en' => 'Rod blender',
            'slug:en' => 'rod-blender',
            'image' => 'eidi-spitioy.jpeg',
            'type_id' => 13,
        ]);
        SubType::create([
            'title:el' => 'Τοστιέρες',
            'slug:el' => 'tostieres',
            'title:en' => 'Toasters',
            'slug:en' => 'toasters',
            'image' => 'eidi-spitioy.jpeg',
            'type_id' => 13,
        ]);
        SubType::create([
            'title:el' => 'Κρεατομηχανές',
            'slug:el' => 'kreatomixanes',
            'title:en' => 'Meat machines',
            'slug:en' => 'meat-machines',
            'image' => 'eidi-spitioy.jpeg',
            'type_id' => 13,
        ]);
        SubType::create([
            'title:el' => 'Φρυγανιέρες',
            'slug:el' => 'fruganieres',
            'title:en' => 'Bread Toasters',
            'slug:en' => 'bread-toasters',
            'image' => 'eidi-spitioy.jpeg',
            'type_id' => 13,
        ]);
        SubType::create([
            'title:el' => 'Ηλεκτρικές Ψησταριές, Γκριλιέρες',
            'slug:el' => 'ilektrikes-psistaries-grill',
            'title:en' => 'Electric Grills',
            'slug:en' => 'electric-grills',
            'image' => 'eidi-spitioy.jpeg',
            'type_id' => 13,
        ]);
        SubType::create([
            'title:el' => 'Μίξερ Χειρός',
            'slug:el' => 'mixer-xeiros',
            'title:en' => 'Hand mixer',
            'slug:en' => 'hand-mixer',
            'image' => 'eidi-spitioy.jpeg',
            'type_id' => 13,
        ]);
        SubType::create([
            'title:el' => 'Φριτέζες',
            'slug:el' => 'fritezes',
            'title:en' => 'Fryers',
            'slug:en' => 'fryers',
            'image' => 'eidi-spitioy.jpeg',
            'type_id' => 13,
        ]);
        SubType::create([
            'title:el' => 'Ατμομάγειρες',
            'slug:el' => 'atmomageires',
            'title:en' => 'Steam cookers',
            'slug:en' => 'steam-cookers',
            'image' => 'eidi-spitioy.jpeg',
            'type_id' => 13,
        ]);
        SubType::create([
            'title:el' => 'Αρτοπαρασκευαστές',
            'slug:el' => 'artoparaskeuastes',
            'title:en' => 'Bakers',
            'slug:en' => 'Bakers',
            'image' => 'eidi-spitioy.jpeg',
            'type_id' => 13,
        ]);
        SubType::create([
            'title:el' => 'Βαφλιέρες Κρεπιέρες',
            'slug:el' => 'vaflieres-krepieres',
            'title:en' => 'Waffles Crepes Mashines',
            'slug:en' => 'waffles-crepes-mashines',
            'image' => 'eidi-spitioy.jpeg',
            'type_id' => 13,
        ]);
        SubType::create([
            'title:el' => 'Παγωτομηχανές',
            'slug:el' => 'pagotomixanes',
            'title:en' => 'Ice cream machines',
            'slug:en' => 'Ice-cream-machines',
            'image' => 'eidi-spitioy.jpeg',
            'type_id' => 13,
        ]);
        SubType::create([
            'title:el' => 'Ζυγαριές Κουζίνας',
            'slug:el' => 'zygaries-koyzinas',
            'title:en' => 'Kitchen Scales',
            'slug:en' => 'kitchen-scales',
            'image' => 'eidi-spitioy.jpeg',
            'type_id' => 13,
        ]);
        // Συσκευές Μαγειρικής 14 τελος

        SubType::create([
            'title:el' => 'Χύτρες Ταχύτητας',
            'slug:el' => 'xutres-taxutitas',
            'title:en' => 'Pressure cookers',
            'slug:en' => 'pressure-cookers',
            'image' => 'eidi-spitioy.jpeg',
            'type_id' => 14,
        ]);
        SubType::create([
            'title:el' => 'Κατσαρόλες',
            'slug:el' => 'katsaroles',
            'title:en' => 'Pots',
            'slug:en' => 'pots',
            'image' => 'eidi-spitioy.jpeg',
            'type_id' => 14,
        ]);
        SubType::create([
            'title:el' => 'Σετ Μαγειρικών Σκευών',
            'slug:el' => 'set-mageirikon-skeyon',
            'title:en' => 'Kitchen Utensils Set',
            'slug:en' => 'kitchen-utensils-set',
            'image' => 'eidi-spitioy.jpeg',
            'type_id' => 14,
        ]);
        SubType::create([
            'title:el' => 'Γαλατιέρες',
            'slug:el' => 'galatieres',
            'title:en' => 'Milk jugs',
            'slug:en' => 'milk-jugs',
            'image' => 'eidi-spitioy.jpeg',
            'type_id' => 14,
        ]);
        SubType::create([
            'title:el' => 'Τηγάνια Wok',
            'slug:el' => 'tigania-wok',
            'title:en' => 'Wok pans',
            'slug:en' => 'wok-pans',
            'image' => 'eidi-spitioy.jpeg',
            'type_id' => 14,
        ]);
        SubType::create([
            'title:el' => 'Γάστρες',
            'slug:el' => 'gastres',
            'title:en' => 'Hulls',
            'slug:en' => 'hulls',
            'image' => 'eidi-spitioy.jpeg',
            'type_id' => 14,
        ]);
        SubType::create([
            'title:el' => 'Τάπερ',
            'slug:el' => 'taper',
            'title:en' => 'Tupper',
            'slug:en' => 'tupper',
            'image' => 'eidi-spitioy.jpeg',
            'type_id' => 14,
        ]);
        SubType::create([
            'title:el' => 'Ταψιά',
            'slug:el' => 'tapsia',
            'title:en' => 'Pans',
            'slug:en' => 'pans',
            'image' => 'eidi-spitioy.jpeg',
            'type_id' => 14,
        ]);
        SubType::create([
            'title:el' => 'Γκριλιέρες',
            'slug:el' => 'gkrilieres-thgania',
            'title:en' => 'Grills',
            'slug:en' => 'Grills',
            'image' => 'eidi-spitioy.jpeg',
            'type_id' => 14,
        ]);
        SubType::create([
            'title:el' => 'Σωτέζες',
            'slug:el' => 'swtezes',
            'title:en' => 'Sotezes',
            'slug:en' => 'sotezes',
            'image' => 'eidi-spitioy.jpeg',
            'type_id' => 14,
        ]);
        SubType::create([
            'title:el' => 'Τηγάνια',
            'slug:el' => 'tigania',
            'title:en' => 'Frying pans',
            'slug:en' => 'frying-pans',
            'image' => 'eidi-spitioy.jpeg',
            'type_id' => 14,
        ]);
        SubType::create([
            'title:el' => 'Φριτούρες',
            'slug:el' => 'fritoures',
            'title:en' => 'Fritures',
            'slug:en' => 'Fritures',
            'image' => 'eidi-spitioy.jpeg',
            'type_id' => 14,
        ]);
        SubType::create([
            'title:el' => 'Καπάκια',
            'slug:el' => 'kapakia',
            'title:en' => 'Caps',
            'slug:en' => 'caps',
            'image' => 'eidi-spitioy.jpeg',
            'type_id' => 14,
        ]);
        SubType::create([
            'title:el' => 'Μαχαίρια κουζίνας',
            'slug:el' => 'machairia-koyzinas',
            'title:en' => 'Kitchen knives',
            'slug:en' => 'kitchen-knives',
            'image' => 'eidi-spitioy.jpeg',
            'type_id' => 14,
        ]);
        SubType::create([
            'title:el' => 'Λάστιχα Χύτρας',
            'slug:el' => 'lastixa-xutras',
            'title:en' => 'Boiler hoses',
            'slug:en' => 'boiler-hoses',
            'image' => 'eidi-spitioy.jpeg',
            'type_id' => 14,
        ]);
        SubType::create([
            'title:el' => 'Χερούλια',
            'slug:el' => 'xeroulia',
            'title:en' => 'Handles',
            'slug:en' => 'handles',
            'image' => 'eidi-spitioy.jpeg',
            'type_id' => 14,
        ]);
        // σκευη μαγειρικης τελος

        SubType::create([
            'title:el' => 'Τηλεοράσεις',
            'slug:el' => 'tileoraseis',
            'title:en' => 'TV',
            'slug:en' => 'tv',
            'image' => 'eidi-spitioy.jpeg',
            'type_id' => 15,
        ]);
        SubType::create([
            'title:el' => 'Τηλεοράσεις 32',
            'slug:el' => 'tileoraseis-32-intson',
            'title:en' => 'TV 32 inch',
            'slug:en' => 'tv-32-inch',
            'image' => 'eidi-spitioy.jpeg',
            'type_id' => 15,
        ]);
        SubType::create([
            'title:el' => 'Αποκωδικοποιητές Mpeg4',
            'slug:el' => 'apokodikopoiites-mpeg4',
            'title:en' => 'Mpeg4 decoders',
            'slug:en' => 'mpeg4-decoders',
            'image' => 'eidi-spitioy.jpeg',
            'type_id' => 15,
        ]);
        // Τηλεοράσεις & Αξεσουάρ τελος

        SubType::create([
            'title:el' => 'Set Home Cinema',
            'slug:el' => 'set-home-cinema',
            'title:en' => 'Home Cinema Set',
            'slug:en' => 'home-cinema-set',
            'image' => 'eidi-spitioy.jpeg',
            'type_id' => 16,
        ]);
        SubType::create([
            'title:el' => 'Ενισχυτές Hi Fi',
            'slug:el' => 'enisxites-hi-fi',
            'title:en' => 'Hi Fi Amplifiers',
            'slug:en' => 'hi-fi-amplifiers',
            'image' => 'eidi-spitioy.jpeg',
            'type_id' => 16,
        ]);
        SubType::create([
            'title:el' => 'Hi-Fi - CD Player',
            'slug:el' => 'hi-fi-cd-player',
            'title:en' => 'CD Player - Hi-Fi',
            'slug:en' => 'cd-player-hi-fi',
            'image' => 'eidi-spitioy.jpeg',
            'type_id' => 16,
        ]);
        SubType::create([
            'title:el' => 'Hi -Fi - Δίκτυο αναπαραγωγής ήχου',
            'slug:el' => 'hi-fi-diktyo-audio-player',
            'title:en' => 'Hi-Fi-Network audio player',
            'slug:en' => 'network-audio-player-hi-fi',
            'image' => 'eidi-spitioy.jpeg',
            'type_id' => 16,
        ]);
        SubType::create([
            'title:el' => 'Hi-Fi - Ενισχυτές',
            'slug:el' => 'hi-fi-enisxites',
            'title:en' => 'Hi-Fi - Amplifiers',
            'slug:en' => 'hifi-amplifiers',
            'image' => 'eidi-spitioy.jpeg',
            'type_id' => 16,
        ]);
        SubType::create([
            'title:el' => 'Hi-Fi - Ηχεία',
            'slug:el' => 'hi-fi-icheia',
            'title:en' => 'Hi-Fi - Speakers',
            'slug:en' => 'hi-fi-speakers',
            'image' => 'eidi-spitioy.jpeg',
            'type_id' => 16,
        ]);
        SubType::create([
            'title:el' => 'Hi-Fi - Ηχοσυστήματα',
            'slug:el' => 'hi-fi-ichosystimata',
            'title:en' => 'Hi-Fi - Audio systems',
            'slug:en' => 'hi-fi-audio-systems',
            'image' => 'eidi-spitioy.jpeg',
            'type_id' => 16,
        ]);
        SubType::create([
            'title:el' => 'Πικάπ',
            'slug:el' => 'pikap',
            'title:en' => 'Record player',
            'slug:en' => 'record-player',
            'image' => 'eidi-spitioy.jpeg',
            'type_id' => 16,
        ]);
        SubType::create([
            'title:el' => 'Ακουστικά',
            'slug:el' => 'akoystika',
            'title:en' => 'Headphones',
            'slug:en' => 'headphones',
            'image' => 'eidi-spitioy.jpeg',
            'type_id' => 16,
        ]);
        // Home Cinema end

        SubType::create([
            'title:el' => 'Blu Ray & DVD',
            'slug:el' => 'blu-ray-and-dvd',
            'title:en' => 'Blu-Ray & DVD',
            'slug:en' => 'blu-ray-dvd',
            'image' => 'eidi-spitioy.jpeg',
            'type_id' => 17,
        ]);
        // Blu Ray & DVD τελος

        SubType::create([
            'title:el' => 'Ηχοσυστήματα Αυτοκίνητου',
            'slug:el' => 'ixosystima-aytokinhtoy',
            'title:en' => 'Car Audio Systems',
            'slug:en' => 'car-audio-systems',
            'image' => 'eidi-spitioy.jpeg',
            'type_id' => 18,
        ]);
        // Car Audio & Theater end

        SubType::create([
            'title:el' => 'Κλιματιστικά 07-14.000BTU',
            'slug:el' => 'klimatistika-7-14000btu',
            'title:en' => 'Air conditioners 07-14.000BTU',
            'slug:en' => 'air-conditioners-07-14.000BTU',
            'image' => 'eidi-spitioy.jpeg',
            'type_id' => 19,
        ]);
        SubType::create([
            'title:el' => 'Κλιματιστικά 15-34.000BTU',
            'slug:el' => 'klimatistika-15-34000btu',
            'title:en' => 'Air conditioners 15-34.000BTU',
            'slug:en' => 'air-conditioners-15-34.000BTU',
            'image' => 'eidi-spitioy.jpeg',
            'type_id' => 19,
        ]);
        SubType::create([
            'title:el' => 'Εξωτερική Μονάδα Κλιματιστικού',
            'slug:el' => 'exoteriki-monada-klimatistikou',
            'title:en' => 'Outdoor Air Conditioning Unit',
            'slug:en' => 'outdoor-air-conditioning-unit',
            'image' => 'eidi-spitioy.jpeg',
            'type_id' => 19,
        ]);
        SubType::create([
            'title:el' => 'Κλιματιστικά Επαγγελματικά',
            'slug:el' => 'klimatistika-epaggelmatika',
            'title:en' => 'Commercial Air Conditioners',
            'slug:en' => 'commercial-air-conditioners',
            'image' => 'eidi-spitioy.jpeg',
            'type_id' => 19,
        ]);
        SubType::create([
            'title:el' => 'Φορητά Κλιματιστικά',
            'slug:el' => 'forita-klimatistika',
            'title:en' => 'Portable Air Conditioners',
            'slug:en' => 'Portable-Air-Conditioners',
            'image' => 'eidi-spitioy.jpeg',
            'type_id' => 19,
        ]);
        SubType::create([
            'title:el' => 'Τηλεχειριστήρια για Κλιματιστικά',
            'slug:el' => 'tilexeiristiria-gia-klimatistika-tilexeiristirio',
            'title:en' => 'Remote Controls for Air Conditioners',
            'slug:en' => 'Remote-Controls-for-Air-Conditioners',
            'image' => 'eidi-spitioy.jpeg',
            'type_id' => 19,
        ]);
        // Air Condition menu end

        SubType::create([
            'title:el' => 'Ανεμιστήρες Δαπέδου',
            'slug:el' => 'anemistires-dapedou',
            'title:en' => 'Floor fans',
            'slug:en' => 'floor-fans',
            'image' => 'eidi-spitioy.jpeg',
            'type_id' => 20,
        ]);
        SubType::create([
            'title:el' => 'Ανεμιστήρες Οροφής',
            'slug:el' => 'anemistires-orofis',
            'title:en' => 'Ceiling fans',
            'slug:en' => 'ceiling-fans',
            'image' => 'eidi-spitioy.jpeg',
            'type_id' => 20,
        ]);
        SubType::create([
            'title:el' => 'Ανεμιστήρες Τοίχου',
            'slug:el' => 'anemistires-toixou',
            'title:en' => 'Wall fans',
            'slug:en' => 'wall-fans',
            'image' => 'eidi-spitioy.jpeg',
            'type_id' => 20,
        ]);
        // ανεμιστηρες τελος

        SubType::create([
            'title:el' => 'Αερόθερμα',
            'slug:el' => 'aerotherma',
            'title:en' => 'Air heaters',
            'slug:en' => 'air-heaters',
            'image' => 'eidi-spitioy.jpeg',
            'type_id' => 21,
        ]);
        SubType::create([
            'title:el' => 'Αερόθερμο Μπάνιου',
            'slug:el' => 'aerothermo-baniou',
            'title:en' => 'Bathroom Heater',
            'slug:en' => 'bathroom-heater',
            'image' => 'eidi-spitioy.jpeg',
            'type_id' => 21,
        ]);
        SubType::create([
            'title:el' => 'Σόμπες Πετρελαίου',
            'slug:el' => 'sobes-petrelaiou',
            'title:en' => 'Oil Stoves',
            'slug:en' => 'oil-stoves',
            'image' => 'eidi-spitioy.jpeg',
            'type_id' => 21,
        ]);
        SubType::create([
            'title:el' => 'Θερμάστρες Χαλαζία',
            'slug:el' => 'thermastres-xalazia',
            'title:en' => 'Quartz heaters',
            'slug:en' => 'quartz-heaters',
            'image' => 'eidi-spitioy.jpeg',
            'type_id' => 21,
        ]);
        SubType::create([
            'title:el' => 'Θερμαντικά Σώματα',
            'slug:el' => 'thermantika-somata',
            'title:en' => 'Radiators',
            'slug:en' => 'radiators-2',
            'image' => 'eidi-spitioy.jpeg',
            'type_id' => 21,
        ]);
        SubType::create([
            'title:el' => 'Θερμοπομποί',
            'slug:el' => 'thermopompoi',
            'title:en' => 'Convector',
            'slug:en' => 'convector',
            'image' => 'eidi-spitioy.jpeg',
            'type_id' => 21,
        ]);
        SubType::create([
            'title:el' => 'Θέρμανση Εξωτερικού Χώρου',
            'slug:el' => 'thermansi-exoterikou-xorou',
            'title:en' => 'Outdoor heating',
            'slug:en' => 'outdoor-heating',
            'image' => 'eidi-spitioy.jpeg',
            'type_id' => 21,
        ]);
        SubType::create([
            'title:el' => 'Ηλεκτρικές Κουβέρτες',
            'slug:el' => 'ilektrikes-kouvertes',
            'title:en' => 'Electric Heat blankets',
            'slug:en' => 'Electric-heating-blankets',
            'image' => 'eidi-spitioy.jpeg',
            'type_id' => 21,
        ]);
        SubType::create([
            'title:el' => 'Σόμπες Υγραερίου',
            'slug:el' => 'sobes-ugraeriou',
            'title:en' => 'LPG stoves',
            'slug:en' => 'LPG-stoves',
            'image' => 'eidi-spitioy.jpeg',
            'type_id' => 21,
        ]);
        // θερμανση κλιματισμος τελος

        SubType::create([
            'title:el' => 'Ηλεκτρικοί Θερμοσίφωνες',
            'slug:el' => 'ilektrikoi-thermosifones',
            'title:en' => 'Electric Water Heaters',
            'slug:en' => 'electric-water-heaters',
            'image' => 'eidi-spitioy.jpeg',
            'type_id' => 22,
        ]);
        SubType::create([
            'title:el' => 'Ηλιακοί θερμοσίφωνες',
            'slug:el' => 'iliakoi-thermosifones',
            'title:en' => 'Solar Water Heaters',
            'slug:en' => 'solar-water-heaters',
            'image' => 'eidi-spitioy.jpeg',
            'type_id' => 22,
        ]);
        SubType::create([
            'title:el' => 'Ταχυθερμοσίφωνες',
            'slug:el' => 'taxuthermosifones',
            'title:en' => 'Speed heaters',
            'slug:en' => 'speed-heaters',
            'image' => 'eidi-spitioy.jpeg',
            'type_id' => 22,
        ]);
        SubType::create([
            'title:el' => 'Μπόιλερ',
            'slug:el' => 'thermosifones-boiler',
            'title:en' => 'Boiler',
            'slug:en' => 'boiler',
            'image' => 'eidi-spitioy.jpeg',
            'type_id' => 22,
        ]);
        // Θερμοσίφωνες - Boiler

        SubType::create([
            'title:el' => 'Αντλίες θερμότητας',
            'slug:el' => 'antlies-thermotitas',
            'title:en' => 'Heat pumps',
            'slug:en' => 'heat-pumps',
            'image' => 'eidi-spitioy.jpeg',
            'type_id' => 23,
        ]);
        // Αντλίες θερμότητας

        SubType::create([
            'title:el' => 'Όλοι οι Αφυγραντήρες',
            'slug:el' => 'afugrantires-1',
            'title:en' => 'All Dehumidifiers',
            'slug:en' => 'all-Dehumidifiers',
            'image' => 'eidi-spitioy.jpeg',
            'type_id' => 24,
        ]);
        // Αφυγραντήρες τελος

        SubType::create([
            'title:el' => 'Καθαριστές αέρα Ιονιστές',
            'slug:el' => 'katharistes-aera-ionistes',
            'title:en' => 'Ionizers air purifiers',
            'slug:en' => 'ionizers-air-purifiers',
            'image' => 'eidi-spitioy.jpeg',
            'type_id' => 25,
        ]);
        // Ιονιστές - Υγραντήρες - Καθαριστές Αέρα ΕΝΔ ΗΕΡΕ

        SubType::create([
            'title:el' => 'Βάσεις Κλιματιστικών',
            'slug:el' => 'vaseis-klimatistikwn',
            'title:en' => 'Air Conditioning Bases',
            'slug:en' => 'air-condition-base',
            'image' => 'technologia.jpeg',
            'type_id' => 26,
        ]);
        // baseis klimatistikwn end here

        // προσςπικι φροντιδα σταρτ
        SubType::create([
            'title:el' => 'Ισιωτικές Μαλλιών',
            'slug:el' => 'isiotikes-mallion',
            'title:en' => 'Hair Straighteners',
            'slug:en' => 'hair-straighteners',
            'image' => 'eidi-spitioy.jpeg',
            'type_id' => 27,
        ]);
        SubType::create([
            'title:el' => 'Τοστιέρες Μαλλιών',
            'slug:el' => 'tostieres-mallion',
            'title:en' => 'Hair Toasters',
            'slug:en' => 'hair-toasters',
            'image' => 'eidi-spitioy.jpeg',
            'type_id' => 27,
        ]);
        SubType::create([
            'title:el' => 'Βούρτσες Ισιώματος',
            'slug:el' => 'vourtses-isiomatos',
            'title:en' => 'Straightening Brushes',
            'slug:en' => 'Straightening Brushes',
            'image' => 'eidi-spitioy.jpeg',
            'type_id' => 27,
        ]);
        SubType::create([
            'title:el' => 'Ψαλίδια Μαλλιών',
            'slug:el' => 'psalidia-mallion',
            'title:en' => 'Hair Scissors',
            'slug:en' => 'hair-scissors',
            'image' => 'eidi-spitioy.jpeg',
            'type_id' => 27,
        ]);
        SubType::create([
            'title:el' => 'Πιστολάκια Μαλλιών',
            'slug:el' => 'pistolakia-mallion',
            'title:en' => 'Hairdryers',
            'slug:en' => 'Hairdryers',
            'image' => 'eidi-spitioy.jpeg',
            'type_id' => 27,
        ]);
        SubType::create([
            'title:el' => 'Αποτριχωτικές Μηχανές',
            'slug:el' => 'apotrixotikes-mixanes',
            'title:en' => 'Epilators',
            'slug:en' => 'Epilators',
            'image' => 'eidi-spitioy.jpeg',
            'type_id' => 27,
        ]);
        SubType::create([
            'title:el' => 'Συσκευές Πεντικιούρ',
            'slug:el' => 'suskeues-pentikiour',
            'title:en' => 'Pedicure devices',
            'slug:en' => 'pedicure-devices',
            'image' => 'eidi-spitioy.jpeg',
            'type_id' => 27,
        ]);
        // gia ti gynaika menu item end

        SubType::create([
            'title:el' => 'Ζυγαριές Μπάνιου',
            'slug:el' => 'zugaries-baniou',
            'title:en' => 'Bathroom Scales',
            'slug:en' => 'bathroom-scales',
            'image' => 'eidi-spitioy.jpeg',
            'type_id' => 28,
        ]);
        SubType::create([
            'title:el' => 'Συσκευές Μασάζ',
            'slug:el' => 'suskeues-masaz',
            'title:en' => 'Massage devices',
            'slug:en' => 'massage-devices',
            'image' => 'eidi-spitioy.jpeg',
            'type_id' => 28,
        ]);
        // Υγεία - Ευεξία END MENU ITEM

        SubType::create([
            'title:el' => 'Ξυριστικές Μηχανές',
            'slug:el' => 'xuristikes-mixanes',
            'title:en' => 'Shaving machines',
            'slug:en' => 'shaving-machines',
            'image' => 'eidi-spitioy.jpeg',
            'type_id' => 29,
        ]);
        SubType::create([
            'title:el' => 'Κουρευτικές Μηχανές',
            'slug:el' => 'koureutikes-mixanes',
            'title:en' => 'Clipper',
            'slug:en' => 'clipper',
            'image' => 'eidi-spitioy.jpeg',
            'type_id' => 29,
        ]);
        SubType::create([
            'title:el' => 'Αξεσουάρ Μηχανών',
            'slug:el' => 'axesoyar-mixanwn',
            'title:en' => 'Machine Accessories',
            'slug:en' => 'machine-accessories',
            'image' => 'eidi-spitioy.jpeg',
            'type_id' => 29,
        ]);
        // end for men menu item

        SubType::create([
            'title:el' => 'Παρακολούθηση μωρού',
            'slug:el' => 'parakoloythisi-mwroy-endoepikoinwnia',
            'title:en' => 'Baby monitoring',
            'slug:en' => 'baby-monitoring',
            'image' => 'eidi-spitioy.jpeg',
            'type_id' => 30,
        ]);
        SubType::create([
            'title:el' => 'Αποστειρωτές',
            'slug:el' => 'aposteirotes',
            'title:en' => 'Sterilizers',
            'slug:en' => 'sterilizers',
            'image' => 'eidi-spitioy.jpeg',
            'type_id' => 30,
        ]);
        SubType::create([
            'title:el' => 'Θερμαντήρες Μπιμπερό',
            'slug:el' => 'thermantires-mpimpero',
            'title:en' => 'Bottle heaters',
            'slug:en' => 'bottle-heaters',
            'image' => 'eidi-spitioy.jpeg',
            'type_id' => 30,
        ]);
        //  END CHILD/BABY ITEMS

        SubType::create([
            'title:el' => 'ΒΜΧ',
            'slug:el' => 'b-m-x',
            'title:en' => 'bmx',
            'slug:en' => 'bmx',
            'image' => 'eidi-spitioy.jpeg',
            'type_id' => 31,
        ]);
        SubType::create([
            'title:el' => 'Chrono-Τρίαθλος',
            'slug:el' => 'chrono-triathlos',
            'title:en' => 'ChronoTriathlon',
            'slug:en' => 'chronotriathlos',
            'image' => 'eidi-spitioy.jpeg',
            'type_id' => 31,
        ]);
        SubType::create([
            'title:el' => 'Ποδήλατα Πόλης',
            'slug:el' => 'podilato-gia-polis',
            'title:en' => 'City Bike',
            'slug:en' => 'city-bike',
            'image' => 'eidi-spitioy.jpeg',
            'type_id' => 31,
        ]);
        SubType::create([
            'title:el' => 'Ποδηλατα Fitness Road',
            'slug:el' => 'podilata-gia-fitness',
            'title:en' => 'Fitness Road Bikes',
            'slug:en' => 'fitness-road-bikes',
            'image' => 'eidi-spitioy.jpeg',
            'type_id' => 31,
        ]);
        SubType::create([
            'title:el' => 'Ποδηλατα Fix Flip Flop',
            'slug:el' => 'fix-flip-flop-podilata',
            'title:en' => 'Fix Flip Flop Bicycles',
            'slug:en' => 'fix-flip-flop-bicycle',
            'image' => 'eidi-spitioy.jpeg',
            'type_id' => 31,
        ]);
        SubType::create([
            'title:el' => 'Ποδηλατα Gravel',
            'slug:el' => 'podilata-gravel',
            'title:en' => 'Gravel Bikes',
            'slug:en' => 'bikes-gravel',
            'image' => 'eidi-spitioy.jpeg',
            'type_id' => 31,
        ]);
        SubType::create([
            'title:el' => 'Γυναικεία Ποδηλατα',
            'slug:el' => 'gynaikeia-podilata',
            'title:en' => 'Women Bikes',
            'slug:en' => 'women-bikes',
            'image' => 'eidi-spitioy.jpeg',
            'type_id' => 31,
        ]);
        SubType::create([
            'title:el' => 'Ποδηλατα Mtb',
            'slug:el' => 'mtb-podilata',
            'title:en' => 'Mtb Bikes',
            'slug:en' => 'mtb-bike',
            'image' => 'eidi-spitioy.jpeg',
            'type_id' => 31,
        ]);
        SubType::create([
            'title:el' => 'Ποδηλατα Mtb Full',
            'slug:el' => 'podilata-mtb-full',
            'title:en' => 'Bikes Mtb Full',
            'slug:en' => 'bikes-mtb-full',
            'image' => 'eidi-spitioy.jpeg',
            'type_id' => 31,
        ]);
        SubType::create([
            'title:el' => 'Ποδηλατα trekking',
            'slug:el' => 'trekking-podilata',
            'title:en' => 'Trekking Bikes',
            'slug:en' => 'trekking-bikes',
            'image' => 'eidi-spitioy.jpeg',
            'type_id' => 31,
        ]);
        SubType::create([
            'title:el' => 'Ηλεκτρικά Ποδηλατα',
            'slug:el' => 'ilektrika-podilata',
            'title:en' => 'Electrical bicycles',
            'slug:en' => 'electrical-bicycles',
            'image' => 'eidi-spitioy.jpeg',
            'type_id' => 31,
        ]);
        SubType::create([
            'title:el' => 'Παιδικά Ποδηλατα',
            'slug:el' => 'paidika-podilata',
            'title:en' => 'Children Bikes',
            'slug:en' => 'children-bikes',
            'image' => 'eidi-spitioy.jpeg',
            'type_id' => 31,
        ]);
        SubType::create([
            'title:el' => 'Πτυσσόμενα/Σπαστά Ποδηλατα',
            'slug:el' => 'spasta-podilata',
            'title:en' => 'Folding Bicycles',
            'slug:en' => 'folding-bicycles',
            'image' => 'eidi-spitioy.jpeg',
            'type_id' => 31,
        ]);
        // ποδηλατα τελος μενυου

        SubType::create([
            'title:el' => 'ΚΙΝΗΤΑ-SMARTPHONES',
            'slug:el' => 'kinita-smartphones',
            'title:en' => 'MOBILE-SMARTPHONES',
            'slug:en' => 'mobile-smartphones',
            'image' => 'eidi-spitioy.jpeg',
            'type_id' => 32,
        ]);
        // end Κινητή Τηλεφωνία

        SubType::create([
            'title:el' => 'Ασύρματα Τηλέφωνα',
            'slug:el' => 'asyrmata-tilefwna',
            'title:en' => 'Wireless phones',
            'slug:en' => 'wireless-phones',
            'image' => 'eidi-spitioy.jpeg',
            'type_id' => 33,
        ]);
        SubType::create([
            'title:el' => 'Ενσύρματα Τηλέφωνα',
            'slug:el' => 'ensyrmata-tilefwna',
            'title:en' => 'Wired Phones',
            'slug:en' => 'wired-phones',
            'image' => 'eidi-spitioy.jpeg',
            'type_id' => 33,
        ]);
        // end Σταθερή - Dect

        SubType::create([
            'title:el' => 'Όλοι οι Πλοηγοί-GPS',
            'slug:el' => 'ploigoi-gps',
            'title:en' => 'Navigators-GPS',
            'slug:en' => 'navigators-gps',
            'image' => 'eidi-spitioy.jpeg',
            'type_id' => 34,
        ]);
        // end gps emnu

        SubType::create([
            'title:el' => 'GAMING Ποντίκια',
            'slug:el' => 'pontikia-gaming',
            'title:en' => 'GAMING Mouse',
            'slug:en' => 'mouse-gaming',
            'image' => 'eidi-spitioy.jpeg',
            'type_id' => 35,
        ]);
        SubType::create([
            'title:el' => 'GAMING Πληκτρολόγια',
            'slug:el' => 'pliktrologia-gaming',
            'title:en' => 'GAMING Keyboards',
            'slug:en' => 'gaming-keyboards',
            'image' => 'eidi-spitioy.jpeg',
            'type_id' => 35,
        ]);
        SubType::create([
            'title:el' => 'GAMING Ακουστικά',
            'slug:el' => 'gaming-akoystika',
            'title:en' => 'GAMING headsets',
            'slug:en' => 'gaming-headsets',
            'image' => 'eidi-spitioy.jpeg',
            'type_id' => 35,
        ]);
        SubType::create([
            'title:el' => 'Mouse Pad',
            'slug:el' => 'maxilaraki-gia-pontiki',
            'title:en' => 'MousePad',
            'slug:en' => 'mousepad',
            'image' => 'eidi-spitioy.jpeg',
            'type_id' => 35,
        ]);
        // end of gaming menu

        SubType::create([
            'title:el' => 'Βρύσες - Μπαταρίες',
            'slug:el' => 'vrises-mpataries',
            'title:en' => 'Taps - Batteries',
            'slug:en' => 'taps-batteries',
            'image' => 'eidi-spitioy.jpeg',
            'type_id' => 36,
        ]);
        SubType::create([
            'title:el' => 'Διάφορα Μπάνιου',
            'slug:el' => 'mpanio-diafora',
            'title:en' => 'Various Bathroom',
            'slug:en' => 'various-bathroom',
            'image' => 'eidi-spitioy.jpeg',
            'type_id' => 36,
        ]);
        SubType::create([
            'title:el' => 'Καπάκι Τουαλέτας',
            'slug:el' => 'kapaki-toualetas',
            'title:en' => 'Toilet lid',
            'slug:en' => 'toilet-lid',
            'image' => 'eidi-spitioy.jpeg',
            'type_id' => 36,
        ]);
        SubType::create([
            'title:el' => 'Λεκάνη Τουαλέτας',
            'slug:el' => 'lekani-toualetas',
            'title:en' => 'Toilet bowl',
            'slug:en' => 'toilet-bowl',
            'image' => 'eidi-spitioy.jpeg',
            'type_id' => 36,
        ]);
        SubType::create([
            'title:el' => 'Νιπτήρες Μπάνιου',
            'slug:el' => 'niptires-baniou',
            'title:en' => 'Bathroom sinks',
            'slug:en' => 'bathroom-sinks',
            'image' => 'eidi-spitioy.jpeg',
            'type_id' => 36,
        ]);
        SubType::create([
            'title:el' => 'Ντουζιέρες Μπάνιου',
            'slug:el' => 'douzieres-baniou',
            'title:en' => 'Bathroom showers',
            'slug:en' => 'bathroom-showers',
            'image' => 'eidi-spitioy.jpeg',
            'type_id' => 36,
        ]);
        SubType::create([
            'title:el' => 'Σπιράλ - Βούρτσακια',
            'slug:el' => 'spiral-vourtsakia',
            'title:en' => 'Spiral - Brushes',
            'slug:en' => 'spiral-brushes',
            'image' => 'eidi-spitioy.jpeg',
            'type_id' => 36,
        ]);
        SubType::create([
            'title:el' => 'Τηλέφωνα Μπάνιου',
            'slug:el' => 'tilefona-baniou',
            'title:en' => 'Bathroom Phones',
            'slug:en' => 'bathroom-phones',
            'image' => 'eidi-spitioy.jpeg',
            'type_id' => 36,
        ]);
        // end mpanio menu item

        SubType::create([
            'title:el' => 'LED Ταινία',
            'slug:el' => 'led-tenia',
            'title:en' => 'LED Tape',
            'slug:en' => 'led-tape',
            'image' => 'eidi-spitioy.jpeg',
            'type_id' => 37,
        ]);
        SubType::create([
            'title:el' => 'Διάφορα Φωτιστικά',
            'slug:el' => 'fotistika-diafora',
            'title:en' => 'Various Lighting Fixtures',
            'slug:en' => 'various-lighting-fixtures',
            'image' => 'eidi-spitioy.jpeg',
            'type_id' => 37,
        ]);
        SubType::create([
            'title:el' => 'Λάμπες LED',
            'slug:el' => 'labes-led',
            'title:en' => 'Light bulbs LED',
            'slug:en' => 'light-bulbs-led',
            'image' => 'eidi-spitioy.jpeg',
            'type_id' => 37,
        ]);
        SubType::create([
            'title:el' => 'Λάμπες Φθορίου',
            'slug:el' => 'labes-fthoriou',
            'title:en' => 'Fluorescent lighting',
            'slug:en' => 'fluorescent-lighting',
            'image' => 'eidi-spitioy.jpeg',
            'type_id' => 37,
        ]);
        SubType::create([
            'title:el' => 'Μετασχηματιστές LED',
            'slug:el' => 'metasximatistes-led',
            'title:en' => 'Transformers LED',
            'slug:en' => 'transformers-led',
            'image' => 'eidi-spitioy.jpeg',
            'type_id' => 37,
        ]);
        SubType::create([
            'title:el' => 'Πολύμπριζα',
            'slug:el' => 'polibriza',
            'title:en' => 'Power strip',
            'slug:en' => 'power-strip',
            'image' => 'eidi-spitioy.jpeg',
            'type_id' => 37,
        ]);
        SubType::create([
            'title:el' => 'Προβολείς LED',
            'slug:el' => 'provolis-led',
            'title:en' => 'LED floodlights',
            'slug:en' => 'LED-floodlights',
            'image' => 'eidi-spitioy.jpeg',
            'type_id' => 37,
        ]);
        SubType::create([
            'title:el' => 'Σποτ Οροφής',
            'slug:el' => 'spot-orofis',
            'title:en' => 'Roof Spot',
            'slug:en' => 'roof-spot',
            'image' => 'eidi-spitioy.jpeg',
            'type_id' => 37,
        ]);
        SubType::create([
            'title:el' => 'Φωτιστικά Γραφείου',
            'slug:el' => 'fotistika-grafiou',
            'title:en' => 'Office lighting',
            'slug:en' => 'office-lighting',
            'image' => 'eidi-spitioy.jpeg',
            'type_id' => 37,
        ]);
        SubType::create([
            'title:el' => 'Φωτιστικά Οροφής',
            'slug:el' => 'fotistika-orofis',
            'title:en' => 'Ceiling light',
            'slug:en' => 'ceiling-light',
            'image' => 'eidi-spitioy.jpeg',
            'type_id' => 37,
        ]);
        SubType::create([
            'title:el' => 'Φωτιστικά Τοίχου',
            'slug:el' => 'fotistika-tixou',
            'title:en' => 'Wall Lamps',
            'slug:en' => 'wall-lamps',
            'image' => 'eidi-spitioy.jpeg',
            'type_id' => 37,
        ]);
        // end fwtistika

        SubType::create([
            'title:el' => 'Νεροχύτες Κουζίνας',
            'slug:el' => 'neroxites-kouzinas',
            'title:en' => 'Kitchen sinks',
            'slug:en' => 'kitchen-sinks',
            'image' => 'eidi-spitioy.jpeg',
            'type_id' => 38,
        ]);
        SubType::create([
            'title:el' => 'Μπαταρίες Κουζίνας',
            'slug:el' => 'bataries-kouzinas',
            'title:en' => 'Kitchen faucets',
            'slug:en' => 'kitchen-faucets',
            'image' => 'eidi-spitioy.jpeg',
            'type_id' => 38,
        ]);
        // end of Νεροχύτες - Μπαταρίες Κουζίνας
    }
}
