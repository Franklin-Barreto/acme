<?php

use App\Models\QuestionOptions;
use Illuminate\Database\Seeder;

class QuestionOptionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        QuestionOptions::create([
            'value' => 'Single',
            'question_id' => 3,
        ]);
        QuestionOptions::create([
            'value' => 'Maried',
            'question_id' => 3,
        ]);

        QuestionOptions::create([
            'value' => 'In a relationship',
            'question_id' => 3,
        ]);

        QuestionOptions::create([
            'value' => 'Prefer not to disclose',
            'question_id' => 3,
        ]);
        QuestionOptions::create([
            'value' => 'Yes',
            'question_id' => 4,
        ]);
        QuestionOptions::create([
            'value' => 'No',
            'question_id' => 4,
        ]);
        QuestionOptions::create([
            'value' => 'Male',
            'question_id' => 5,
        ]);
        QuestionOptions::create([
            'value' => 'Female',
            'question_id' => 5,
        ]);
        QuestionOptions::create([
            'value' => 'Irish',
            'question_id' => 6,
        ]);
        QuestionOptions::create([
            'value' => 'British',
            'question_id' => 6,
        ]);

        QuestionOptions::create([
            'value' => 'Spanish',
            'question_id' => 6,
        ]);

        QuestionOptions::create([
            'value' => 'French',
            'question_id' => 6,
        ]);
        QuestionOptions::create([
            'value' => 'Other',
            'question_id' => 6,
        ]);
    }
}
