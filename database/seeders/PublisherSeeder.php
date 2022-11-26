<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PublisherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('publishers')->insert([
            'publisherName' => "Hachette Book Group",
            'publisherAddress' => "1290 6th Ave, New York, NY 10104, United States",
            'publisherPhone' => "+1 212-364-1100",
            'publisherEmail' => "hachette.books@hbgusa.com",
            'publisherImageUrl' => "https://upload.wikimedia.org/wikipedia/commons/thumb/d/df/Hachette_Books_logo.svg/1280px-Hachette_Books_logo.svg.png",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('publishers')->insert([
            'publisherName' => "Penguin Random House",
            'publisherAddress' => "20 Vauxhall Bridge Rd, London SW1V 2SA, United Kingdom",
            'publisherPhone' => "+44 20 7840 8400",
            'publisherEmail' => "consumerservices@penguinrandomhouse.com",
            'publisherImageUrl' => "https://upload.wikimedia.org/wikipedia/commons/thumb/1/16/Penguin_Random_House.svg/1200px-Penguin_Random_House.svg.png",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }
}
