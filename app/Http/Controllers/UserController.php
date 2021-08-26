<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index(){
        $users = User::paginate(12);
        return view('users.index',compact('users'));
    }
    public function create(){
        return view('users.create');
    }
    public function show($id){
        $user = User::find($id);
        return view('users.show',compact('user'));
    }
    public function store(Request $request){
        $user = User::create([
            'names' => $request->input('names'),
            'lastnames'=> $request->input('lastnames'),
            'email'=> $request->input('email'),
        ]);
        return redirect('users')->with('create','Se ha creado correctamente el registro :v');
    }
    public function destroy($id){
        $User = User::find($id)->delete();
        return redirect('users')->with('delete','Se ha eliminado correctamente :v');
    }
    public function edit($id){
        $user = User::find($id);
        return view('users.edit',compact('user'));
    }
    public function update(Request $request, $id){
        $ser = User::find($id)->update([
            'names' => $request->input('names'),
            'lastnames'=> $request->input('lastnames'),
            'email'=> $request->input('email'),
        ]);
        return redirect('users')->with('update','Se ha actualizado correctamente :)');
    }
}
