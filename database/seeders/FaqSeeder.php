<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FaqSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * seed the values with for all seeders: php artisan db:seed
     * specific: php artisan db:seed --class=FaqSeeder
     * @return void
     */
    public function run()
    {
        //INSERT INTO `my-portfolio`.faqs (id, title, body, link, created_at, updated_at) VALUES (1, 'Hoe kan je documenten printen vanaf je laptop?', 'Via de aangegeven link kan je printtaken versturen en daar staat ook de uitleg voor het installeren van de driver.', 'https://print.hz.nl/', null, null);
        //INSERT INTO `my-portfolio`.faqs (id, title, body, link, created_at, updated_at) VALUES (2, 'Hoe kun je een document scannen en verzenden naar je laptop bij HZ?', 'Als er wat geld op je studentenpas staat kan je je pas op de gebruiken om te scannen bij een van de printers die op elke verdieping staat.', null, null, null);
        //INSERT INTO `my-portfolio`.faqs (id, title, body, link, created_at, updated_at) VALUES (3, 'Wat doe je als je ziek bent/syntomen hebt van corona?', 'Blijf thuis. Heb je koorts of ben je benauwd? Dan blijven ook je huisgenoten en/of je gezin thuis. Bescherm jezelf en anderen en laat je testen. Je kunt een afspraak maken via 0800-1202 of via de link.', 'https://coronatest.nl', null, null);
        //INSERT INTO `my-portfolio`.faqs (id, title, body, link, created_at, updated_at) VALUES (4, 'Hoe kan je een van de ruimtes huren?', 'Ga naar het self-service portal (link); en kies daar voor "nieuwe reservering" > "reserveer projectgroep ruimten".', 'https://topdesk.hz.nl/tas/public/ssp/', null, null);
        //INSERT INTO `my-portfolio`.faqs (id, title, body, link, created_at, updated_at) VALUES (5, 'Wat zijn de instructies om te kunnen parkeren met de auto?', 'je kan je studentenpas laten instellen voor parkeren bij de receptie bij de ingang, dan kan je die gratis gebruiken om te parkeren naast de HZ.', null, null, null);
        DB::table('faqs')->insert([
            'title' => "Hoe kan je documenten printen vanaf je laptop?",
            'body' => "Via de aangegeven link kan je printtaken versturen en daar staat ook de uitleg voor het installeren van de driver.",
            'link' => "https://print.hz.nl/",
            'updated_at' => now(),
            'created_at' => now()
        ]);
        DB::table('faqs')->insert([
            'title' => "Hoe kun je een document scannen en verzenden naar je laptop bij HZ?",
            'body' => "Als er wat geld op je studentenpas staat kan je je pas op de gebruiken om te scannen bij een van de printers die op elke verdieping staat.",
            'updated_at' => now(),
            'created_at' => now()
        ]);
        DB::table('faqs')->insert([
            'title' => "Wat doe je als je ziek bent/syntomen hebt van corona?",
            'body' => "Blijf thuis. Heb je koorts of ben je benauwd? Dan blijven ook je huisgenoten en/of je gezin thuis. Bescherm jezelf en anderen en laat je testen. Je kunt een afspraak maken via 0800-1202 of via de link.",
            'link' => "https://coronatest.nl",
            'updated_at' => now(),
            'created_at' => now()
        ]);
        DB::table('faqs')->insert([
            'title' => "Hoe kan je een van de ruimtes huren?",
            'body' => 'Ga naar het self-service portal (link); en kies daar voor "nieuwe reservering" > "reserveer projectgroep ruimten".',
            'link' => "https://topdesk.hz.nl/tas/public/ssp/",
            'updated_at' => now(),
            'created_at' => now()
        ]);
        DB::table('faqs')->insert([
            'title' => "Wat zijn de instructies om te kunnen parkeren met de auto?",
            'body' => "je kan je studentenpas laten instellen voor parkeren bij de receptie bij de ingang, dan kan je die gratis gebruiken om te parkeren naast de HZ.",
            'updated_at' => now(),
            'created_at' => now()
        ]);
    }
}
