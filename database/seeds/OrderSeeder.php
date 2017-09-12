<?php

use Illuminate\Database\Seeder;
use App\Models\Order;
use Illuminate\Database\Eloquent\Model;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Models\Order::class,20)->create();
    }
}
