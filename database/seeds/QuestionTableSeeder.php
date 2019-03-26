<?php

use App\Models\Question;
use Illuminate\Database\Seeder;

class QuestionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Question::create([
            'title' => 'What is your name?',
            'mandatory' => true,
            'question_type_id' => 1,
            'questionnaire_id' => 1,
        ]);
        Question::create([
            'title' => 'When you were born?',
            'mandatory' => true,
            'question_type_id' => 5,
            'questionnaire_id' => 1,
        ]);

        Question::create([
            'title' => 'Maritial Status',
            'mandatory' => true,
            'question_type_id' => 6,
            'questionnaire_id' => 1,
        ]);
        Question::create([
            'title' => 'Do you smoke',
            'mandatory' => true,
            'question_type_id' => 3,
            'questionnaire_id' => 1,
        ]);
        Question::create([
            'title' => 'Gender',
            'mandatory' => false,
            'question_type_id' => 3,
            'questionnaire_id' => 1,
        ]);
        Question::create([
            'title' => 'Nationality',
            'mandatory' => false,
            'question_type_id' => 6,
            'questionnaire_id' => 1,
        ]);

    }
}
