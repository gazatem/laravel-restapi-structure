<?php

use App\Attribute;

use App\Combination;
use App\CombinationAttribute;
use App\Product;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{

    public function __construct()
    {
        $this->faker = Faker\Factory::create();
    }

    public function run()
    {
        DB::table('products')->delete();

        for ($i = 0; $i <= 50; $i++) {
            $product = new Product;
            $product->name = $this->faker->sentence($this->faker->numberBetween(4, 11));
            $product->sku = ucwords($this->faker->randomLetter()) . ucwords($this->faker->randomLetter()) . $this->faker->randomNumber(5);
            $product->status = $this->faker->numberBetween(0, 1);
            $product->price = $this->faker->randomFloat();
            $product->short_description = $this->faker->sentence($this->faker->numberBetween(10, 300));
            $product->description = $this->faker->sentence($this->faker->numberBetween(100, 1000));

            $product->save();
            $combination = new Combination();
            $combination->sku = ucwords($this->faker->randomLetter()) . ucwords($this->faker->randomLetter()) . $this->faker->randomNumber(5);
            $combination->price = $this->faker->randomFloat();
            $product->combinations()->save($combination);

            for ($z = 0; $z <= 3; $z++) {
                $attribute = Attribute::all()->random(1);
                $attribute_value = $attribute->values()->get()->random(1);
                CombinationAttribute::updateOrCreate(['combination_id' => $combination->id, 'attribute_id' => $attribute->id, 'attribute_value_id' => $attribute_value->id]);
            }
        }
    }

}