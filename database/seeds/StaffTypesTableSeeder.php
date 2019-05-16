<?php

use Illuminate\Database\Seeder;

class StaffTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('staff_types')->insert([
            [
                'name' => 'Open',
            ],
            [
                'name' => 'Intern',
            ],
            [
                'name' => 'Fresher',
            ],
            [
                'name' => 'Practice',
            ],
        ]);

    }
}
