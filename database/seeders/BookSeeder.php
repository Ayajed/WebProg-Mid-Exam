<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('books')->insert([
            'publisherId' => "1",
            'bookTitle' => "The World We Make",
            'bookAuthor' => "N. K. Jemisin",
            'bookYear' => "2022",
            'bookSynopsis' => "All is not well in the city that never sleeps. Even though the avatars of New York City have temporarily managed to stop the Woman in White from invading—and destroying the entire universe",
            'bookImageUrl' => "https://images-na.ssl-images-amazon.com/images/S/compressed.photo.goodreads.com/books/1649700796i/60399181.jpg",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('books')->insert([
            'publisherId' => "1",
            'bookTitle' => "Love Times Infinity",
            'bookAuthor' => "Lana Clarke",
            'bookYear' => "2022",
            'bookSynopsis' => "The swoon of Nicola Yoon meets the emotional punch of Elizabeth Acevedo in this breakout debut novel that answers big questions about identity, family, and love.",
            'bookImageUrl' => "https://images-na.ssl-images-amazon.com/images/S/compressed.photo.goodreads.com/books/1634115221i/58784932.jpg",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('books')->insert([
            'publisherId' => "2",
            'bookTitle' => "All the Blood We Share",
            'bookAuthor' => "Camilla Bruce",
            'bookYear' => "2022",
            'bookSynopsis' => "A sinister novel based on the real Bloody Benders, a family of serial killers in the old West bound by butchery and obscured by the shadows of American history.",
            'bookImageUrl' => "https://images-na.ssl-images-amazon.com/images/S/compressed.photo.goodreads.com/books/1651504329i/60532103.jpg",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('books')->insert([
            'publisherId' => "2",
            'bookTitle' => "New Dad, Same Bad Jokes",
            'bookAuthor' => "Slade Wentworth",
            'bookYear' => "2022",
            'bookSynopsis' => "Calling new dads! Cackle and eye-roll your way through baby's first year with 365 hilariously horrible dad jokes for parents who have no idea what they're in for.",
            'bookImageUrl' => "https://images-na.ssl-images-amazon.com/images/S/compressed.photo.goodreads.com/books/1661865376i/61327469.jpg",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }
}
