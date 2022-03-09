<?php

use Illuminate\Database\Seeder;
use App\MajorCategory;

class MajorCategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $major_category_names = [
            'aristotle', 'en', 'philebus', 'minor_socratics', 'isocrates',
        ];
        
        foreach ($major_category_names as $major_category_name) {
            MajorCategory::create([
                'name' => $major_category_name
            ]);
        }
    }
}
