<?php


use App\Attribute;
use App\AttributeValue;
use Illuminate\Database\Seeder;

class AttributesTableSeeder extends Seeder
{

    public function run()
    {
        DB::table('attributes')->delete();
        DB::table('attribute_values')->delete();
        Attribute::create(['name' => 'TShirt Size'])->values()->createMany([['name' => 'S'], ['name' => 'SX'], ['name' => 'M'],['name' => 'L'], ['name' => 'XL'], ['name' => 'XXL']]);
        Attribute::create(['name' => 'Shoe Size'])->values()->createMany([['name' => '34'],['name' => '35'],['name' => '36'],['name' => '37'],['name' => '38'],['name' => '39'],['name' => '40']]);
        Attribute::create(['name' => 'Color'])->values()->createMany([['name' => 'Red'],['name' => 'Yellow'],['name' => 'Green'],['name' => 'White'],['name' => 'Black']]);
    }

}