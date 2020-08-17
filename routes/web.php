<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $questions = DB::table('questions')->orderBy('date', 'desc')->get();
    $answers = DB::table('answers')->pluck('id', 'question_id');
    $placeholder = DB::table('placeholders')->inRandomOrder()->first();

    return view('question_list', ['questions' => $questions, 'answers' => $answers, 'placeholder' => $placeholder]);
});

Route::get('/questions/{id}', function ($id) {
    $question = DB::table('questions')->where('id', $id)->first();
    $answers = DB::table('answers')->where('question_id', $id)->get();

    return view('answer_list', ['question' => $question, 'answers' => $answers]);
});

Route::post('/questions', function (Request $request) {
    $request->validate([
        'question' => ['required', 'min:5']
    ]);

    $questionId = DB::table('questions')->insertGetId(
        array('question_text' => $request->question)
    );

    return redirect('questions/'.$questionId);
});

Route::post('/questions/{id}/answers', function ($id, Request $request) {
    $request->validate([
        'answer' => ['required', 'min:5']
    ]);

    DB::table('answers')->insert(
        array('answer_text' => $request->answer, 'question_id' => $id)
    );

    return redirect('questions/'.$id);
});
