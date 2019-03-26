<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    public $timestamps = false;
    protected $fillable = ['title', 'question_type_id', 'mandatory'];

    public function questionnaire()
    {
        return $this->belongTo('App\Models\Questionnaire');
    }

    public function questionType()
    {
        return $this->hasOne('App\Models\QuestionTypes', 'id', 'question_type_id');
    }

    public function questionOptions()
    {
        return $this->hasMany('App\Models\QuestionOptions');
    }

    public static function saveQuestion(array $questionInput)
    {
        $question = Question::create($questionInput);
        if (isset($questionInput['question_options'])) {
            $question->questionOptions()->createMany(
                $questionInput['question_options']
            );
        }
    }

    public static function updateQuestion(array $questionInput, $id)
    {
        $question = Question::findOrFail($id);
        $options = $question->questionOptions()->get();
        if (count($questionInput['question_options']) < 0) {
            for ($i = 0; $i < count($options); $i++) {
                $option = QuestionOptions::findOrFail($options[$i]->id);
                $option->update($questionInput['question_options'][$i]);
            }
        }
        $question->update($questionInput);
    }
}
