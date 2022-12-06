<?php

namespace App\Http\Controllers;

use App\Models\Store\Product;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Validator;
use Intervention\Image\Facades\Image;

class StoreController extends Controller
{
    private $product;

    function __construct(Product $product)
    {
        $this->product = $product;

    }

    function index()
    {
        $products = $this->product->all();

        return view('store.home', compact('products'));
    }

    function list()
    {
        $products = $this->product->all();

        return view('admin.store.table', ['products'=>$products,'user'=>Auth::guard('users')->user()]);
    }

    function store(){

        return view('admin.store.uploadProduct', ['user'=>Auth::guard('users')->user()]);
    }


    function create(Request $request)
    {
        $validation = Validator::make($request->all(), [
            'name' => 'reequired',
            'price' => 'reequired',
        ]);


       // if($validation->fails())return back()->withErrors($validation);


       $relPath = '\loja\products';

           if (!file_exists(public_path($relPath))) {
               mkdir(public_path($relPath), 777, true);
           }
        $size=20;
        $image = $request->file('cover');
        $imageName =time().'.'.$image->getClientOriginalExtension();
        $img = Image::make($image);
        $img->save(public_path().$relPath.'\\'.$imageName,$size);


        $product = new $this->product;
        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->cover = $imageName;
        $product->price_promotional = $request->price_promotional ?? null;
        $product->state = $request->state;
        $product->stock = $request->stock;

        $product->save();

        return back();

    }

    function edit($id)
    {
        $product_id = Crypt::decrypt($id);

        $product = $this->product->find($product_id);

        return view('admin.store.updateProduct', compact('product'), ['user'=>Auth::guard('users')->user()]);
    }

    function update(Request $request)
    {
        try {

        $validation = Validator::make($request->all(), [
            'product' => 'reequired|exists:products,id',
            'name' => 'reequired',
            'price' => 'reequired',
        ]);


        //if($validation->fails())return back()->withErrors($validation);

        $relPath = '\loja\products';

        if (!file_exists(public_path($relPath))) {
            mkdir(public_path($relPath), 777, true);
        }

        $size=20;
        $image = $request->file('cover');
        $imageName =time().'.'.$image->getClientOriginalExtension();
        $img = Image::make($image);
        $img->save(public_path().$relPath.'\\'.$imageName,$size);

        $product = $this->product->find($request->product);
        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->price_promotional = $request->price_promotional ?? null;
        $product->state = $request->state;
        $product->stock = $request->stock;
        $product->cover = $imageName ?? $product->cover;

        $this->product->save();

        return back();
        } catch (Exception $e) {

        }
    }

    function destroy($id)
    {
        try {

            $product_id = Crypt::decrypt($id);

            $product = $this->product->find($product_id);
            $product->delete();

            return redirect(route('dash'));

        } catch (Exception $e) {

        }
    }


    function details($id)
    {
        $product_id = Crypt::decrypt($id);

        $product = $this->product->find($product_id);

        return view('store.productDetails', compact('product'));
    }
}
