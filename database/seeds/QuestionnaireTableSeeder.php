<?php

use App\Models\Questionnaire;
use Illuminate\Database\Seeder;

class QuestionnaireTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Questionnaire::create(
            [
                ['description' => 'Personal informations'],
                ['description' => 'Work informations'],
            ]
        );

    }
}
