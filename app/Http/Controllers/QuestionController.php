<?php

namespace App\Http\Controllers;

use Kris\LaravelFormBuilder\FormBuilder;

class QuestionController extends Controller
{
    public function index(FormBuilder $formBuilder)
    {
        $form = $formBuilder->create(\App\Forms\QuestionnaireForm::class, [
            'method' => 'POST',
            'url' => route('question.store'),
        ]);

        return view('questions', compact('form'));
    }

    public function store()
    {
        echo 'My eggs';
    }
}
