<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Nick's Q & A Site</title>

    <link rel="stylesheet" type="text/css" href="/css/app.css">
</head>

<body>
    <h1 class="text-center my-5">
        <a class="text-dark" href="/">
            Q & A
        </a>
    </h1>

    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <form class="pb-3 border-bottom mb-3" action="#" method="POST">
                    <div class="form-group">
                        <textarea name="question" class="form-control"
                            placeholder="Why eat animals when we can just eat plants?"></textarea>
                    </div>
                    <div class="text-right">
                        <button class="btn btn-primary" type="submit">
                            Ask away
                        </button>
                    </div>
                </form>

                <h2 class="mb-3 p-3 bg-primary text-white">Questions</h2>
                @foreach ($questions as $question)
                <div class="d-flex justify-content-between align-items-center border-bottom pb-3 mb-3">
                    <h3 class="m-0">
                        <a href="/questions/{{$question->id}}" class="text-dark">
                            {{$question->question_text}}
                        </a>
                    </h3>
                    <div>
                        <span class="badge badge-primary">
                            {{isset($answers[$question->id]) ? $answers[$question->id] : 0}} answers
                        </span>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
</body>

</html>
