<h1>Questionnaires</h1>
    <table class="table table-striped table-bordered table-hover">
        @foreach ($questionnaires as $questionnaire)
            <tr>
                <td>{{$questionnaire->description}}</td>
                <td> <a href="edit-quest"></a> {{$questionnaire->id}}</td>
            </tr>
        @endforeach
    </table>
