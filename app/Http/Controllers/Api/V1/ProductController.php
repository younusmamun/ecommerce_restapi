<?php

namespace App\Http\Controllers\Api\V1;

use App\Models\Product;
use App\Models\Tag;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use App\Http\Resources\V1\ProductResource;
use Illuminate\Http\Request;
use App\Filters\V1\ProductFilter;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    // public function index()
    // {
    //     //return Product::all();
    //     // $product = Product::all();
    //     // return response()->json($product);

    //     return ProductResource::collection(Product::all());
    //     //return ProductResource::collection(Product::paginate());

    // }



    // filter code in index function
    public function index(Request $request)
    {


        $filter = new ProductFilter;
        $filter_result = $filter->transform($request);
        //return response($filter_result);

        $product = Product::where('price', '=', 10)->get();
        //$product = Product::where($filter_result[0]key, '=', $filter_result[0]value)->get();
        return response($product);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductRequest $request)
    {
        $product = new Product;
        $product->name = $request->name;
        $product->price = $request->price;
        $product->product_description = $request->product_description;
        $product->save();

        return "Product saved";
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //$product = Product::find($id);
        //$product = Product::with('tags')->find($id);

        //$product = Product::find(1)->tags;

        //return response()->json($product);

        return new ProductResource(Product::findOrFail($id));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductRequest $request, Product $product)
    {
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
    }
}
