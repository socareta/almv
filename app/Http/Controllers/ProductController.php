<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Media;
use App\Models\Category;
use Illuminate\Http\Request;

use Illuminate\Support\Str;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $role = \Auth::user()->role;
        $products =[];
        if($role=='admin'){
            $products = Product::where('is_active',true)
                                ->with(['author','category'])
                                ->orderBy('created_at','DESC')
                                ->get();
        }
        elseIf($role == 'instructor'){
            $products = Product::where('user_id',\Auth::user()->id)
                                ->where('is_active',true)
                                ->with(['author','category'])
                                ->orderBy('created_at','DESC')
                                ->get();
        }

        //dd($products);
        return view('back.product',['products'=>$products]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $Categories =Category::all();
        return view('back.product-form',['product'=>[],'categories'=>$Categories]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->saveData($request,new Product);        
        return redirect()->route('product.index')->with(['message'=>'Data Has Save']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        $Categories =Category::all();
        return view('back.product-form',['product'=>$product,'categories'=>$Categories]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $this->saveData($request,$product);
        return redirect()->route('product.index')->with(['message'=>'Data Has Updated']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->is_active = false;
        $product->deleted_at = now();
        $product->save();
        return back()->with(['message'=>'Data Has deleted']);
        
    }

    public function deleteProduct($product_id){
        Product::find($product_id)->delete();
        return back()->with(['message'=>'Data Has deleted']);
        
    }

    public function saveData($datas,$product){
        $duratiom=[15,20,25,30,35,40,60];
        $product->title = $datas->title;
        $product->slug = Str::slug($datas->title, '-');
        $product->description = $datas->description;
        $product->user_id = \Auth::user()->id;

        $product->category_id = $datas->category;
        
        $category_parent= Category::findOrFail($datas->category);
        $product->category_parent_id = $category_parent->parent_id;

        $product->duration = $duratiom[rand(0,6)];
        $product->props = 'none';
        $product->dificulty = $datas->dificulty;
        $product->intensity = $datas->intensity;
        isset($datas->cover)?$product->cover = $datas->cover:''; 
        $product->save();

       
         if($datas->hasFile('images')){ 
            //Media::where('product_id',$product->id)->where('is_image',true)->delete();
            $i =0;
            foreach($datas->file('images') as $index=>$file){
                
                $imageName = Str::random(30).'.'.$file->getClientOriginalExtension();
                $file->move('images', $imageName);
                if($i==0 && empty($request->cover)){
                    $product->cover = url('images').'/'.$imageName;
                    $product->save();
                }
                
                $media = new Media;
                $media->alt = $product->title;
                $media->is_image = true;
                $media->product_id = $product->id;
                $media->name = url('images').'/'.$imageName;
                $media->save(); 
            }
        }
        if($datas->hasFile('vidios')){
            //Media::where('product_id',$product->id)->where('is_image',false)->delete();
            $files = $datas->file('vidios');
            foreach($files as $vidio){
                $vidioName = Str::random(30).'.'.$vidio->getClientOriginalExtension();
                $destinationPath = 'vidios';
                $vidio->move($destinationPath, $vidioName);

                $media = new Media;
                $media->alt = $product->title;
                $media->is_image = false;
                $media->product_id = $product->id;
                $media->name = url('vidios').'/'.$vidioName;
                $media->save(); 
            }
        }    

    }
}
