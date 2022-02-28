<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        return view('index');
    }

    public function create(){
        return view('create');
    }

    public function store(Request $request)
    {
        $data['name'] = $request->name;
        
        product::create($data);
    }

    public function show()
    {
        return view('show', [
            'data' => Product::all()
        ]);
    }

    public function edit($id)
    {
        return view('edit', [
            'data' => Product::findOrFail($id)
        ]);
    }

    public function update(Request $request, $id)
    {
        $data = Product::findOrFail($id);
        $data->name = $request->name;
        $data->save();
    }

    public function delete($id){
        $data = Product::findOrFail($id);
        $data->delete();
    }
}
