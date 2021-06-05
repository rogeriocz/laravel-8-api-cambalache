<?php

namespace Database\Seeders;

use App\Models\Type;
use Illuminate\Database\Seeder;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /* Type::create([ "name"=> "Casas"]);
        Type::create([ "name"=> "Carros"]);
        Type::create([ "name"=> "Celulares"]);
        Type::create([ "name"=> "Laptops"]);
        Type::create([ "name"=> "Tables"]); */

        Type::factory()->count(10)->create();
    }
}
