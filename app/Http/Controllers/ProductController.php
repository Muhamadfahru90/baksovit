<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Models\Product;
use App\models\category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        if ($request->search) {
            $product = Product::with('category')->where('product', 'LIKE', "%$request->search%")
                ->paginate(3);
        }
        $product = Product::paginate(3);

        dd(Product::with('category')->find(1));

        if ($request->ajax()) {
            return $product;
        }
        return view(
            'product.index',
            [
                'data' => $product
            ]
        );
    }
    public function create()

    {
        $categories = category::all();
        return view('product.create', compact('categories'));
    }
    public function store(Request $request)
    {


        $validationdata = $request->validate([
            'image' => 'image|file|max:2100'
        ]);


        product::create([
            'title' => $request->title,
            'category_id' => $request->categories_id,
            'description' => $request->description,
            'image' => $request->file('image')->store('post-image'),
            'price' => $request->price


        ]);


        return redirect('/product');
    }
}
