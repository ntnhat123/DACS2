<?php

namespace App\Http\Controllers;

use App\Product;
use App\ProductCategory;
use App\Http\Requests\ProductRequest;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::paginate(5);

        return view('inventory.products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = ProductCategory::all();

        return view('inventory.products.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  App\Http\Requests\ProductRequest  $request
     * @param  App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function store(ProductRequest $request, Product $product)
    {
     
        $name= $request->input('name');
        $description= $request->input('description');
        $stock= $request->input('stock');
        $stock_defective= $request->input('stock_defective');
        $price= $request->input('price');
        $product_category_id= $request->input('product_category_id');

        
        if ($request->hasfile('image')) {
            $file = $request->file('image');
             $extension = $file->getClientoriginalExtension(); // getting image extension
            $filename = time(). '.' . $extension;
            $file->move('assets/img/products/', $filename);
            $product = Product::create([
                'name' => $name,
                'image'=> $filename,
                'description' =>$description,
                'product_category_id' => $product_category_id,
                'price' => $price,
                'stock' =>$stock,
                'stock_defective' => $stock_defective
            ]);
        } else{
            return $request;
        }

        return redirect()
            ->route('products.index')
            ->withStatus('Product successfully registered.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)

    {
        $products = Product::paginate(4);


        $solds = $product->solds()->latest()->limit(25)->get();

        $receiveds = $product->receiveds()->latest()->limit(25)->get();

        return view('inventory.products.show', compact('product', 'solds', 'receiveds'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)

    {
        
        $products = Product::all();
        $categories = ProductCategory::all();

        return view('inventory.products.edit', compact('product', 'categories'));
    }

    public function cart()
    {
        return view('cart');
    }
  
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function addToCart($id)
    {
        $product = Product::findOrFail($id);
          
        $cart = session()->get('cart', []);
  
        if(isset($cart[$id])) {
            $cart[$id]['quantity']++;
        } else {
            $cart[$id] = [
                "name" => $product->name,
                "quantity" => 1,
                "price" => $product->price,
                "image" => $product->image,
                "description" =>$product->description,
                "product_category_id" => $product->product_category_id,
                "stock" =>$product->stock,
                "stock_defective" => $product->stock_defective

            ];
        }
          
        session()->put('cart', $cart);
        return redirect()->back()->with('success', 'Product added to cart successfully!');
    }
  

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(ProductRequest $request, Product $product)
    {
       
        
       $product->name= $request->input('name');
       $product->description= $request->input('description');
       $product->stock= $request->input('stock');
       $product->stock_defective= $request->input('stock_defective');
       $product->price= $request->input('price');
       $product->product_category_id= $request->input('product_category_id');
        
        if ($request->hasfile('image')) {
            $file = $request->file('image');
             $extension = $file->getClientoriginalExtension(); // getting image extension
            $filename = time(). '.' . $extension;
            $file->move('/assets/img/products/', $filename);

        } else{
            return $request;
            
        }
        $product->update($request->all());
        
        //gio hang
        if($request->id && $request->quantity){
            $cart = session()->get('cart');
            $cart[$request->id]["quantity"] = $request->quantity;
            session()->put('cart', $cart);
            session()->flash('success', 'Cart updated successfully');
        }
        

        return redirect()
            ->route('products.index')
            ->withStatus('Product updated successfully.');
    }

    public function remove(ProductRequest $request)
    {
        if($request->id) {
            $cart = session()->get('cart');
            if(isset($cart[$request->id])) {
                unset($cart[$request->id]);
                session()->put('cart', $cart);
            }
            session()->flash('success', 'Product removed successfully');
        }
        return $request->delete();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();

        return redirect()
            ->route('products.index')
            ->withStatus('Product removed successfully.');
    }
}
