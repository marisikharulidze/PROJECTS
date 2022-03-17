<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Auto;

class AutoController extends Controller
{
    // public function index()
    // {
    //     $contacts = Auto::all();
    //     return view ('index')->with('autos', $contacts);
    // }
    // public function create()
    // {
    //     return view('create');
    //     // return view('create')->name('create');
    // }
    // public function store(Request $request)
    // {
    //     $input = $request->all();
    //     Auto::create($input);
    //     return redirect('auto')->with('flash_message', 'Auto Addedd!');  
    // }
    // public function show($id)
    // {
    //     $contact = Auto::find($id);
    //     return view('show')->with('autos', $auto);
    // }
    // public function edit($id)
    // {
    //     $contact = Auto::find($id);
    //     return view('edit')->with('autos', $contact);
    // }
    // public function update(Request $request, $id)
    // {
    //     $contact = Auto::find($id);
    //     $input = $request->all();
    //     $contact->update($input);
    //     return redirect('auto')->with('flash_message', 'Auto Updated!');  
    // }
    // public function destroy($id)
    // {
    //     Auto::destroy($id);
    //     return redirect('input')->with('flash_message', 'Auto deleted!');  
    // }


    
    public function index()
    {
        $products = Auto::latest()->paginate(5);
        return view('index',compact('autos'))
        ->with('i', (request()->input('page', 1) - 1) * 5);
    }
    public function create()
    {
        return view('create');
    }
    public function store(Request $request)
    {
        // $request->validate([
        // 'name' => 'required',
        // 'detail' => 'required',
        // ]);
        Auto::create($request->all());
        return redirect()->route('index')
        ->with('success','Product created successfully.');
    }
    public function show(Product $product)
    {
        return view('show',compact('auto'));
    }
    public function edit(Product $product)
    {
        return view('edit',compact('auto'));
    }
    public function update(Request $request, Product $product)
    {
        // $request->validate([
        // 'name' => 'required',
        // 'detail' => 'required',
        // ]);
        $product->update($request->all());
        return redirect()->route('index')
        ->with('success','Product updated successfully');
    }
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('index')
        ->with('success','Product deleted successfully');
        
    }
}
