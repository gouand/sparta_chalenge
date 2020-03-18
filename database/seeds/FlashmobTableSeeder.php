<?php

use Illuminate\Database\Seeder;

class FlashmobTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 5000; $i++) {
            factory(App\Flashmob::class, 50)->create();
        }
    }
}
