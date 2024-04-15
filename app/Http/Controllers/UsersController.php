<?php

namespace App\Http\Controllers;
use App\Models\UsersModel;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    //index
    public function index(){
        $users = UsersModel::all();
        return view('users.index',compact('users'));
    }
    // create
    public function create(){
        return view('users.create');
    }

    // store
    public function store(Request $request){
        UsersModel::create($request->all());
        return redirect()->route('users.index');
    }

    // edit
    public  function edit($id){
        $user = UsersModel::find($id);
        return view("users.edit",compact('user'));
    }

    // update
    public function update(Request $request, $id){
        $user = UsersModel::find($id);
        $user->update($request->all());
        return redirect()->route('users.index');
    }

    // destroy
    public function destroy($id){
        $user = UsersModel::find($id);
        $user->delete();
        return redirect()->route('users.index');
    }

    // show
    public function show($id)
    {      
        
        $user = UsersModel::findOrFail($id);
        $products = $user->products;
        return view('users.show', compact('user', 'products'));
    }

    // invoce
    public function invoice($id){
        $user = UsersModel::findOrFail($id);
        $products = $user->products;
        return view('users.invoice', compact('user', 'products'));
    }

}
