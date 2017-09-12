<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});
$factory->define(App\Models\Category::class, function (Faker\Generator $faker){
    $name = $faker->unique()->word;
    $id = rand(1,10);

    return [
        'name' => $name,
        'category_parent_id' => $id,
    ];
});
$factory->define(App\Models\Product::class, function (Faker\Generator $faker){
    $name = $faker->unique()->word;
    $information = $faker->unique()->word;
    $unit_price = rand(1,5);
    $rate_count = rand(1,5);
    $rate_point = rand(1,5);
    $total_quantity = rand(1,5);
    $top_product = rand(1,5);
    $profile = $faker->unique()->word;
    $category_id = rand(1,10);

    return [
        'name' => $name,
        'information' => $information,
        'unit_price' => $unit_price,
        'rate_count' => $rate_count,
        'rate_point' => $rate_point,
        'total_quantity' => $total_quantity,
        'top_product' => $top_product,
        'profile' => $profile,
        'category_id' => $category_id,
    ];
});
$factory->define(App\Models\Image::class, function (Faker\Generator $faker){
    $link = $faker->unique()->word;
    $status = rand(1,10);
    $product_id = rand(1,10);

    return [
        'link' => $link,
        'status' => $status,
        'product_id' => $product_id,
    ];
});
$factory->define(App\Models\Payment::class, function (Faker\Generator $faker){
    $name = $faker->unique()->word;
    $type = rand(1,10);

    return [
        'name' => $name,
        'type' => $type,
    ];
});
$factory->define(App\Models\Order::class, function (Faker\Generator $faker){
    $phone = $faker->phoneNumber;
    $email = $faker->unique()->safeEmail;
    $name = $faker->unique()->word;
    $total_price = rand(1,10);
    $address = $faker->unique()->word;
    $payment_id = rand(1,10);
    $user_id = rand(1,5);

    return [
        'phone' =>$phone,
        'email' => $email,
        'name' => $name,
        'total_price' => $total_price,
        'address' => $address,
        'payment_id' => $payment_id,
        'user_id' => $user_id,
    ];
});
$factory->define(App\Models\OrderDetail::class, function (Faker\Generator $faker){
    $unit_price = rand(1,10);
    $quantity = rand(1,10);
    $product_id = rand(1,10);
    $order_id = rand(1,5);

    return [
        'unit_price' => $unit_price,
        'quantity' => $quantity,
        'product_id' => $product_id,
        'order_id' => $order_id,
    ];
});
