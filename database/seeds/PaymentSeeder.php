<?php

use Illuminate\Database\Seeder;
use App\Models\Payment;
use Illuminate\Database\Eloquent\Model;

class PaymentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Models\Payment::class,20)->create();
    }
}
