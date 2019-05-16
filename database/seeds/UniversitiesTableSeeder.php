<?php

use Illuminate\Database\Seeder;

class UniversitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('universities')->insert([
            [
                'name' => 'Posts and Telecommunications Institute of Technology',
                'aliases' => 'PTIT',
            ],
            [
                'name' => 'Hanoi University of Science and Technology',
                'aliases' => 'HUST',
            ],
            [
                'name' => 'National University of Civil Engineering',
                'aliases' => 'NUCE',
            ],
            [
                'name' => 'Hanoi University of Industry',
                'aliases' => 'HAUI',
            ],
            [
                'name' => 'Thang Long University',
                'aliases' => 'TLU',
            ],
            [
                'name' => 'Water Resources University',
                'aliases' => 'WRU',
            ],
            [
                'name' => 'Hanoi Open University',
                'aliases' => 'HOU',
            ],
        ]);
    }
}
