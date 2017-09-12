<?php

use Illuminate\Database\Seeder;
use App\Models\OrderDetail;
use Illuminate\Database\Eloquent\Model;

class OrderDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Models\OrderDetail::class,20)->create();
    }
}
