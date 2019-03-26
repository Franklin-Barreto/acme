<?php

use App\Models\QuestionTypes;
use Illuminate\Database\Seeder;

class QuestionTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        QuestionTypes::create(['value' => 'text']);
        QuestionTypes::create(['value' => 'number']);
        QuestionTypes::create(['value' => 'radio']);
        QuestionTypes::create(['value' => 'checkbox']);
        QuestionTypes::create(['value' => 'date']);
        QuestionTypes::create(['value' => 'select']);

    }
}
