<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AnswersController extends Controller
{
    public function index($question_id){
        return view('admin/answers/index');
    }

    public function create($question_id){
        return view('admin/answers/create');
    }

    public function store(Request $request, $question_id, $answer_id){
        return redirect()->route('admin.answers.index'. ['question_id' => $question_id]); 
    }

    public function edit($question_id, $answer_id){
        return view('admin/answers/edit');
    }

    public function update(Request $request, $question_id, $answer_id){
        return redirect()->route('admin.answers.index'. ['question_id' => $question_id]);
    }

    public function delete($question_id, $answer_id){
        return redirect()->route('admin.answers.index'. ['question_id' => $question_id]);
    }
}
