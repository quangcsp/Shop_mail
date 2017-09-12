<?php

use Illuminate\Database\Seeder;
use App\Models\Category;
use Illuminate\Database\Eloquent\Model;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Models\Category::class,20)->create();
    }
}
