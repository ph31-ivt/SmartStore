<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Producter;
use App\ImgProduct;
use App\Product;
use DB;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::with(['category', 'producter','imgProducts'])->get();

           //dd($products);
        return view('admins.products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $producterIds = Producter::pluck('name','id');
        $categoryIds = Category::pluck('name','id');
        return view('admins.products.create', compact('producterIds','categoryIds'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product_id = DB::table('products')->insertGetId([
            'name' => $request->input('name'),
            'producter_id' => $request->input('producter_id'),
            'category_id' => $request->input('category_id'),
            'description' => $request->input('description'),
        ]);
        foreach ($request->img_urls as $img_url) {
            $img = $img_url;
            ImgProduct::create([
                'product_id' => $product_id,
                'img_url' => $img ]);
        }
        return view('admins.products.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //dd($product);
        $producterIds = Producter::pluck('name','id');
        $categoryIds = Category::pluck('name','id');
        return view('admins.products.edit', compact('product','producterIds','categoryIds'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
