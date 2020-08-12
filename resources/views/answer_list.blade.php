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
                <h2 class="mb-3 p-3 bg-primary text-white">{{$question_text}}</h2>
                @if ($answers->count() < 1)
                <p class="border-bottom pb-3 font-weight-bold">
                    No answers yet! Be the first to answer by using the form below.
                </p>
                @else
                    @foreach ($answers as $answer)
                    <p class="border-bottom pb-3">
                        {{$answer->answer_text}}
                    </p>
                    @endforeach
                @endif
                <form class="mt-3" action="#" method="POST">
                    <h4 class="bg-primary text-white p-3">
                        Answer the question!
                    </h4>
                    <div class="form-group">
                        <textarea name="question" class="form-control"></textarea>
                    </div>
                    <div class="text-right">
                        <button class="btn btn-primary" type="submit">
                            Answer question
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
