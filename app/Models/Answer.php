<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    protected $fillable = ['answer', 'question_id'];
    public $timestamps = false;

    public static function saveAnswers(array $inputs)
    {
        $data = [];
        foreach ($inputs as $key => $value) {
            if (isset($key) && $key != '_token') {
                $data[] = array('answer' => $value, 'question_id' => $key);
                Answer::create(array('answer' => $value, 'question_id' => $key));
            }
        }
    }
}
