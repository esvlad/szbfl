<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class QuestionsController extends Controller
{
    public function index(){
        return view('admin/questions/index');
    }

    public function show($question_id){
        return view('admin/questions/show');
    }

    public function not_correct($question_id){
        return redirect()->route('admin.questions.index');
    }

    public function delete($question_id){
        return redirect()->route('admin.questions.index');
    }
}
