<?php

namespace App\Http\Controllers;

use App\Models\Question;
use Illuminate\Http\Request;
use Kris\LaravelFormBuilder\FormBuilder;

class QuestionController extends Controller
{
    public function index(FormBuilder $formBuilder)
    {
        $form = $formBuilder->create(\App\Forms\QuestionnaireForm::class, [
            'method' => 'POST',
            'url' => route('answer.store'),
        ]);

        return view('questions', compact('form'));
    }
    public function store(Request $request)
    {
        Question::saveQuestion($request->all());
    }

    public function update(Request $request, $id)
    {
        Question::updateQuestion($request->all(), $id);
    }
}
