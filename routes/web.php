<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

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
    $questions = DB::table('questions')->get();
    $answers = DB::table('answers')->pluck('id', 'question_id');

    return view('question_list', ['questions' => $questions, 'answers' => $answers]);
});

Route::get('/questions/{id}', function ($id) {
    $question = DB::table('questions')->where('id', $id)->select('question_text')->first();
    $answers = DB::table('answers')->where('question_id', $id)->get();

    return view('answer_list', ['question_text' => $question->question_text, 'answers' => $answers]);
});

Route::post('/questions', function ($question) {
    DB::table('questions')->insert(
        array('question_text' => $question)
    );

    return view('answer_list', ['question_text' => $question]);
});
