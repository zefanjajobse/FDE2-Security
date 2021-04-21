<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class AddFaqData extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // moved to seeders
//        DB::insert('insert into faqs (title, body, link) values (?, ?, ?)', ["Hoe kan je documenten printen vanaf je laptop?", "Via de aangegeven link kan je printtaken versturen en daar staat ook de uitleg voor het installeren van de driver.", "https://print.hz.nl/"]);
//        DB::insert('insert into faqs (title, body) values (?, ?)', ["Hoe kun je een document scannen en verzenden naar je laptop bij HZ?", "Als er wat geld op je studentenpas staat kan je je pas op de gebruiken om te scannen bij een van de printers die op elke verdieping staat."]);
//        DB::insert('insert into faqs (title, body, link) values (?, ?, ?)', ["Wat doe je als je ziek bent/syntomen hebt van corona?", "Blijf thuis. Heb je koorts of ben je benauwd? Dan blijven ook je huisgenoten en/of je gezin thuis. Bescherm jezelf en anderen en laat je testen. Je kunt een afspraak maken via 0800-1202 of via de link.", "https://coronatest.nl"]);
//        DB::insert('insert into faqs (title, body, link) values (?, ?, ?)', ["Hoe kan je een van de ruimtes huren?", 'Ga naar het self-service portal (link); en kies daar voor "nieuwe reservering" > "reserveer projectgroep ruimten".', "https://topdesk.hz.nl/tas/public/ssp/"]);
//        DB::insert('insert into faqs (title, body) values (?, ?)', ["Wat zijn de instructies om te kunnen parkeren met de auto?", "je kan je studentenpas laten instellen voor parkeren bij de receptie bij de ingang, dan kan je die gratis gebruiken om te parkeren naast de HZ."]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
