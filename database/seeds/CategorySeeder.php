<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
        	'name'	=> 'General Medical Equipment and Supplies'
        ]);

        Category::create([
        	'name'	=> 'Apparel'
        ]);
    }
}
