<?php

use Illuminate\Database\Seeder;
use App\model\Comic;

class ComicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = config('data.comics');

        foreach ($data as $element) {
            $comics = new Comic();
            $comics->title = $element['title'];
            $comics->description = $element['description'];
            $comics->thumb = $element['thumb'];
            $comics->price = $element['price'];
            $comics->series = $element['series'];
            $comics->sale_date = $element['sale_date'];
            $comics->type = $element['type'];
            $comics->save();
        }
    }
}
