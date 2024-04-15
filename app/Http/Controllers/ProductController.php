<?php

namespace App\Http\Controllers;
use App\Models\ProductModel;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //index
    // public function index(){
    //     $products = ProductModel::all();
    //     return view('products.index',compact('products'));
    // }

    public function index($user_id = null){

        $products = ProductModel::where('user_id', $user_id)->get();
        return view('products.index', compact('products'));
    }

    // create
    public function create(){
        return view('products.create');
    }

    // store
    public function store(Request $request){
        ProductModel::create($request->all());
        return redirect()->route('users.index');
    }

    // edit
    public  function edit($id){
        $product = ProductModel::find($id);
        return view("products.edit",compact('product'));
    }

    // update
    public function update(Request $request, $id){
        $cat = ProductModel::find($id);
        $cat->update($request->all());
        return redirect()->route('users.index');
    }

    // destroy
    public function destroy($id){
        $cat = ProductModel::find($id);
        $cat->delete();
        return redirect()->route('users.index');
    }

    // show
    public function show($id){
        $product = ProductModel::find($id);
        return view('products.show',compact("product"));
    }

}
