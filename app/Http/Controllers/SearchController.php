<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;

class SearchController extends Controller
{
    public function index()
    {
        return view('index', [
            'products' => product::all()
        ]);
    }
   
    public function create()
    {
        return view('create');
    }

    public function store(Request $request){
        $request->validate([
            'product-name' => 'required',
            'product-description' => 'required',
            'product-price' => ['required', 'integer'],
        ]);
        
        $product = new product();

        $product->name = strip_tags($request->input('product-name'));
        $product->description = strip_tags($request->input('product-description'));
        $product->price = strip_tags($request->input('product-price'));

        $product->save();

        return redirect()->route('products.index');
    }

    
    public function show($product)
    {
       
        $index = product::findOrFail($product);
        
        if($index === false){
            abort(404);
        }
        return view('show',[
            'product' => $index
        ]);
    }
   
    
 
    
    public function search(Request $request){
        $search = $request->search;
        $search_products = product::where('name', 'LIKE', '%' .$search. '%')->get();
        
            return view('search', compact('search_products'));
            
        }
    

}
