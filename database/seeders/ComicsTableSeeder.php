<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Comic;
use Faker\Generator as Faker;

class ComicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        $data = config("store");
        $fumetti = $data["comics"];

        foreach ($fumetti as $fumetto) {

            $newComic = new Comic();
            $newComic->title = $fumetto["title"];
            $newComic->description = $fumetto["description"];
            $newComic->thumb = $fumetto["thumb"];
            $newComic->price = $fumetto["price"];
            $newComic->series = $fumetto["series"];
            $newComic->sale_date = $fumetto["sale_date"];
            $newComic->type = $fumetto["type"];
            $newComic->save();
        }
    }
}
