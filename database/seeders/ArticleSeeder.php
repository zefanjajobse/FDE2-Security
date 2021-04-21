<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * seed the values with for all seeders: php artisan db:seed
     * specific: php artisan db:seed --class=ArticleSeeder
     * @return void
     */
    public function run()
    {
        // add random data:
//        for($i = 0; $i < 100; $i++) {
//            DB::table('articles')->insert([
//                'title' => Str::random(5),
//                'excerpt' => Str::random(20),
//                'body' => Str::random(50)
//            ]);
//        }

        DB::table('articles')->insert([
            'title' => "Macaw",
            'excerpt' => "Challange accepted",
            'body' => "Ze zoeken naar de beste oplossing voor jou IT gerelateerde probleem, zei vinden ook dat ze echt gefaald hebben als ze geen oplossing hebben die niet gebruikt word door de eindelijke gebruiker. (requirements engineering) En proberen zo open mogelijk te zijn richting de uiteindelijke klant en werken met korte develop cycles.",
            'icon' => "/resources/images/logo's/macaw.png",
            'url' => "https://www.macaw.nl/over-ons/",
            'updated_at' => now(),
            'created_at' => now()
        ]);
        DB::table('articles')->insert([
            'title' => "Veracode",
            'excerpt' => "Securing your apps",
            'body' => "Veracode test publiek gestelde apps voor beveiligingsfouten door data te proberen te injecteren via verschillende technieken, en maken ook software om de code van de app zelf te testen op deze lekken. Ze zijn gebaseerd in de verenigde staten en werken grotendeels online, dus kunnen makkelijk samenwerken met andere in andere landen.",
            'icon' => "/resources/images/logo's/veracode.png",
            'url' => "https://www.veracode.com/about",
            'updated_at' => now(),
            'created_at' => now()
        ]);
        DB::table('articles')->insert([
            'title' => "Your suprise",
            'excerpt' => "A special gift for anyone",
            'body' => "Maakt persoonlijke giften en stelt ze beschikbaar op hun website. De website hebben ze zelf gemaakt en maken ook zelf de tools om de giften te personaliseren. Intern werken ze met de agile manier van werken.",
            'icon' => "/resources/images/logo's/yoursurprise.png",
            'url' => "https://www.yoursurprise.nl/contact",
            'updated_at' => now(),
            'created_at' => now()
        ]);
        DB::table('articles')->insert([
            'title' => "Tweakers",
            'excerpt' => "Al jou tech nieuws op een plek",
            'body' => "Tweakers is een Nederland en Belgische site die techneuten helpt met wat er nieuw in de sector is en geven van de beste optie als product. Zij verdienen geld door advertenties en bijvoorbeeld plaatsen van vacatures binnen de sector. (onderdeel van Dpgmediagroup)",
            'icon' => "/resources/images/logo's/tweakers.png",
            'url' => "https://tweakers.net/info/over-tweakers/",
            'updated_at' => now(),
            'created_at' => now()
        ]);
        DB::table('articles')->insert([
            'title' => "Cannect",
            'excerpt' => "Voor partiliere computerproblemen",
            'body' => "Richten zich meer op de implementatie bij particulieren/kleinere bedrijven en het maken van websites, bij websites werken ze met versies en vragen naar eventuele verbeteringen.",
            'icon' => "/resources/images/logo's/cannect.png",
            'url' => "https://cannect.nl/contact",
            'updated_at' => now(),
            'created_at' => now()
        ]);
        DB::table('articles')->insert([
            'title' => "Unilogic",
            'excerpt' => "Gericht op implementeren van cloudoplossingen voor grote bedrijven",
            'body' => "Begonnen eerst als klein computerwinkel in Sittard. Zei zijn nu voor het implementeren van een hybride/cloudoplossingen voor grote overheidsinstellingen/bedrijven. Zei komen met een oplossing als een soort template en bespreken samen met de klant naar de beste implementatie daarvan. (onderdeel van Vincere groep)",
            'icon' => "/resources/images/logo's/unilogic.png",
            'url' => "https://www.unilogic.nl/unilogic/",
            'updated_at' => now(),
            'created_at' => now()
        ]);
    }
}
