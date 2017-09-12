<?php

use Illuminate\Database\Seeder;
use App\Models\Image;
use Illuminate\Database\Eloquent\Model;

class ImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Models\Image::class,20)->create();
    }
}
