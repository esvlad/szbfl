<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index(){
        return view('admin/users/index');
    }

    public function show($user_id){
        return view('admin/users/show');
    }

    public function create($user_id){
        return view('admin/users/create');
    }

    public function store(Request $request, $user_id){
        return redirect()->route('admin.users.index'); 
    }

    public function edit($user_id){
        return view('admin/users/edit');
    }

    public function update(Request $request, $user_id){
        return redirect()->route('admin.users.show', ['user_id' => $user_id]);
    }

    public function blocked($user_id){
        return redirect()->route('admin.users.index');
    }

    public function delete($user_id){
        return redirect()->route('admin.users.index');
    }
}
