<?php

use Illuminate\Database\Seeder;
use App\Models\Product;
use Illuminate\Database\Eloquent\Model;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Models\Product::class,20)->create();
    }
}
