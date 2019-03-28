<?php

namespace App\Http\Controllers;

use App\Models\Questionnaire;

class AdminController extends Controller
{
    public function index()
    {
        $questionnaires = Questionnaire::all();
        return view('list-questionnaires')->with('questionnaires', $questionnaires);
    }

    public function show()
    {

    }
}
