<?php

use Illuminate\Database\Seeder;
use App\Models\Users;
use Illuminate\Database\Eloquent\Model;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Quang',
            'email' => 'quang@gmail.com',
            'password' => bcrypt('123456'),
            'role' => 1,
        ]);
        factory(App\Models\User::class,20)->create();
    }
}
