<?php

use App\Models\Offer;
use Illuminate\Database\Seeder;

class OffersTableSeederFatrory extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Offer::class,12)->create();
    }
}
