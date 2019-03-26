<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    public $timestamps = false;

    public function questionnaire()
    {
        return $this->belongTo('App\Models\Questionnaire');
    }

    public function questionType()
    {
        return $this->hasOne('App\Models\QuestionTypes','id','question_type_id');
    }

    public function questionOptions()
    {
        return $this->hasMany('App\Models\QuestionOptions');
    }
}
