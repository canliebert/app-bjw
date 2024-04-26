<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   
        return view('dashboard.product.index',[
            "title" => "Admin Umkm",
            'product'  => Product::where('user_id', auth()->user()->id)->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.product.create',[
            "title" => "Admin Umkm",
       
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    $validatedData = $request->validate([
        'name' => 'required|max:255',
        'slug' => 'required|unique:products|max:255',
        'desc' => 'required',
        'price' => 'required|numeric|min:0',
        'img' => 'required',
        'old_price' => 'nullable|numeric|min:0',
        'quantity' => 'required|integer|min:0',
        'category' => 'required',
        'availability' => 'required|boolean',
        'rating' => 'required|numeric|min:0|max:5',
        'published_at' => 'required|date',
    ]);

    $validatedData['user_id'] = auth()->user()->id;

    if ($request->file('img')) {
        $validatedData['img'] = $request->file('img')->store('product-images');
    }

    Product::create($validatedData);

    return redirect('dashboard/product')->with('success', 'New product has been added!');
}

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        return view('dashboard.product.edit',[
            "title" => "Admin Umkm",
            "product" => $product      
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
{
    $rules = [
        'name' => 'required|max:255',
        'desc' => 'required',
        'slug' => 'required|unique:products,slug,' . $product->id . ',id',
        'price' => 'required|numeric|min:0',
        'img' => 'required',
        'old_price' => 'nullable|numeric|min:0',
        'quantity' => 'required|integer|min:0',
        'category' => 'required',
        'availability' => 'required|boolean',
        'rating' => 'required|numeric|min:0|max:5',
        'published_at' => 'required|date',
    ];

    $validatedData = $request->validate($rules);

    if ($request->file('img')) {
        $oldImagePath = $product->img; 
        $request->validate([
            'img' => 'image|mimes:jpeg,png,jpg,gif|max:5116'
        ]);
        $validatedData['img'] = $request->file('img')->store('product-images');
    
        if ($oldImagePath && Storage::exists($oldImagePath)) {
            Storage::delete($oldImagePath);
        }
    }

    $validatedData['user_id'] = auth()->user()->id;

    $validatedData['published_at'] = date('Y-m-d H:i:s', strtotime($validatedData['published_at']));
    Product::where('id', $product->id)->update($validatedData);


    return redirect('dashboard/product')->with('success', 'Product has been updated!');
}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        if ($product->img) {
            Storage::delete('path/to/your/storage/' . $product->img);
        }

        Product::destroy($product->id);

        return redirect('dashboard/product')->with('success', 'New post has been deleted!');
    }
}
