<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Q & A Site</title>

        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/app.css">

    </head>
    <body>
        <h1 class="text-center my-5">
            <a href="https://challenge.veganhacktivists.org" class="text-dark">
                Q & A
            </a>
        </h1>

        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <form class="pb-3 border-bottom mb-3" action="#" method="POST">
                        <div class="form-group">
                            <textarea
                                name="question"
                                class="form-control">
                            </textarea>
                        </div>
                        <div class="text-right">
                            <button class="btn btn-primary" type="submit">
                                Ask away
                            </button>
                        </div>
                    </form>

                    <h2 class="mb-3 p-3 bg-primary text-white">Questions</h2>
                    <div class="d-flex justify-content-between align-items-center border-bottom pb-3 mb-3">
                        @foreach ($questions as $question)
                            <h3 class="m-0">
                                <a href="#" class="text-dark">
                                    {{ $question->question_text }}
                                </a>
                            </h3>
                            <div>
                                <span class="badge badge-primary">
                                    1 answers
                                </span>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
    </body>
</html>
