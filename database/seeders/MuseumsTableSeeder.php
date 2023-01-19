<?php

namespace Database\Seeders;

use App\Models\Museum;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use PSpell\Config;

class MuseumsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $museums = config('db.museums');

        foreach($museums as $museum){
            $newMuseum = new Museum();
            $newMuseum->name = $museum['name'];
            $newMuseum->nation = $museum['nation'];
            $newMuseum->save();
        }



    }
}
