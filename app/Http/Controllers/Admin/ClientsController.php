<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ClientsController extends Controller
{
    public function index(){
        return view('admin/clients/index');
    }

    public function show($client_id){
        return view('admin/clients/show');
    }

    public function create($client_id){
        return view('admin/clients/create');
    }

    public function store(Request $request, $client_id){
        return redirect()->route('admin.clients.index'); 
    }

    public function edit($client_id){
        return view('admin/clients/edit');
    }

    public function update(Request $request, $client_id){
        return redirect()->route('admin.clients.show', ['client_id' => $client_id]);
    }

    public function delete($client_id){
        return redirect()->route('admin.clients.index');
    }
}
