<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class QuestionsController extends Controller
{
    public function store(Request $request){
        return redirect()->route('admin.questions'); 
    }

    public function delete($question_id){
        return redirect()->route('admin.questions');
    }
}
