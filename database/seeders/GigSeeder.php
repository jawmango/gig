<?php

namespace Database\Seeders;


use App\Models\gig;
use Illuminate\Database\Seeder;

class GigSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        gig::create(
            [
            'user_id' => 1,
            'performer_name' => "Parokya ni Bongat",
            'description' => 'We are the best rock band in Naga City.',
            'price' => 2500,
            'gig_type' => "band",
            'img' => 'band1.jpeg'
            ]
            );
    }
}
