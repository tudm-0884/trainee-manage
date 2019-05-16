<?php

use Illuminate\Database\Seeder;

class OfficesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('offices')->insert([
            [
                'name' => 'Han',
                'address' => 'Han'
            ],
            [
                'name' => 'Toong',
                'address' => 'Toong',
            ],
            [
                'name' => 'Lab',
                'address' => 'Lab',
            ],
        ]);

    }
}
