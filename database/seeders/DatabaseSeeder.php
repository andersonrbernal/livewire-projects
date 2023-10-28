<?php

namespace Database\Seeders;

use App\Models\Continent;
use App\Models\Country;
use App\Models\Product;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * @var Continent[] $continents;
     */
    public $continents = [
        ['id' => 1, 'name' => 'Europe'],
        ['id' => 2, 'name' => 'Asia'],
        ['id' => 3, 'name' => 'Africa'],
        ['id' => 4, 'name' => 'South America'],
        ['id' => 5, 'name' => 'North America']
    ];

    /**
     * @var Country[] $countries;
     */
    public $countries = [
        ['id' => 1, 'name' => 'Portugal', 'continent_id' => 1],
        ['id' => 2, 'name' => 'France', 'continent_id' => 1],
        ['id' => 3, 'name' => 'Germany', 'continent_id' => 1],

        ['id' => 4, 'name' => 'China', 'continent_id' => 2],
        ['id' => 5, 'name' => 'India', 'continent_id' => 2],
        ['id' => 6, 'name' => 'Japan', 'continent_id' => 2],

        ['id' => 7, 'name' => 'Nigeria', 'continent_id' => 3],
        ['id' => 8, 'name' => 'South Africa', 'continent_id' => 3],
        ['id' => 9, 'name' => 'Kenya', 'continent_id' => 3],

        ['id' => 10, 'name' => 'Brazil', 'continent_id' => 4],
        ['id' => 11, 'name' => 'Argentina', 'continent_id' => 4],
        ['id' => 12, 'name' => 'Chile', 'continent_id' => 4],

        ['id' => 13, 'name' => 'United States', 'continent_id' => 5],
        ['id' => 14, 'name' => 'Canada', 'continent_id' => 5],
    ];

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        foreach ($this->continents as $continent) {
            Continent::factory()->create($continent);
        }

        foreach ($this->countries as $country) {
            Country::factory()->create($country);
        }

        Product::factory(100)->create();
    }
}
