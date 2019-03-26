<?php

namespace App\Forms;

use App\Models\Question;
use App\Models\Questionnaire;
use Kris\LaravelFormBuilder\Form;

class QuestionnaireForm extends Form
{
    public function buildForm()
    {
        $questionnaire = Questionnaire::findOrFail(1);
        foreach ($questionnaire->questions()->get() as $question) {

            $functionName = 'buildField' . ucfirst($question->questionType->value);
            $this->$functionName($question);
        }
        $this
            ->add('submit', 'submit', ['label' => 'Save form', 'attr' => ['class' => 'btn btn-primary']]);

    }

    private function buildFieldText(Question $question)
    {
        $this->add($question->id, $question->questionType->value, [
            'rules' => 'required|min:5',
            'label' => $question->title,
        ]);

    }

    private function buildFieldNumber(Question $question)
    {
        $this->add($question->id, $question->questionType->value, [
            'rules' => 'required|min:5',
            'label' => $question->title,
        ]);

    }

    private function buildFieldRadio(Question $question)
    {

        $choices = array();
        foreach ($question->questionOptions()->get() as $option) {
            $choices[$option->id] = $option->value;
        }

        $this->add($question->id, 'choice', [
            'choices' => $choices,
            'selected' => key($choices),
            'expanded' => true,
            'label' => $question->title,
        ]);

    }

    private function buildFieldCheckbox(Question $question)
    {

        $choices = array();
        foreach ($question->questionOptions()->get() as $option) {
            $choices[$option->id] = $option->value;
        }

        $this->add($question->id, 'choice', [
            'choices' => $choices,
            'selected' => key($choices),
            'expanded' => true,
            'multiple' => true,
            'label' => $question->title,
        ]);

    }

    private function buildFieldSelect(Question $question)
    {
        $choices = array();
        foreach ($question->questionOptions()->get() as $option) {
            $choices[$option->id] = $option->value;
        }

        $this->add($question->id, 'choice', [
            'choices' => $choices,
            'empty_value' => '==== Select status ===',
            'label' => $question->title,
        ]);

    }

    private function buildFieldDate(Question $question)
    {
        $this->add($question->id, $question->questionType->value, [
            'rules' => 'required|min:5',
            'label' => $question->title,
        ]);

    }
}
