<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Facades\Validator;
class FrontController extends Controller
{

    public function index(){
        try {
            $instructors= User::where('role','instructor')
                                            ->has('class')
                                            ->inRandomOrder()
                                            ->with('category')
                                            ->limit(8)
                                            ->get();
            //dd($instructors);
            return view('front.home',['instructors'=>$instructors]);
        } catch (\Throwable $th) {
            abort(403, 'System Error, check your databases connection');
        }
        
    }
    
    public function explore(Request $request){
        //dd($request->all());
        $order = isset($request->order)?$request->order:'newest';
        $categories =isset($request->category)?$request->category:null;

        $dificulty =isset($request->dificulty)?$request->dificulty:null;
        $intensity =isset($request->intensity)?$request->intensity:null;

        $tempCategory = $this->generateCategory($categories);
        $where = $tempCategory[0];
        $where .= $dificulty!=null?($tempCategory[0]==''?"dificulty = '".$dificulty."'":"and dificulty = '".$dificulty."'"):'';
        $where .= $intensity!=null?($dificulty!=null?"and intensity = '".$intensity."'":"intensity = '".$intensity."'"):'';
        //dd($where);
        $newOrder =$order=='newest'?'created_at DESC':($order =='popular'?'member_count DESC':' title ASC');
        
        if(!empty($where)){
            $products = Product::whereRaw($where)
                            ->where('is_active',true)
                            ->with(['author','category','media'])
                            ->orderByRaw($newOrder)
                            ->get();
                            
        }
        else{
            $products = Product::where('is_active',true)
                            ->with(['author','category','media'])
                            ->orderByRaw($newOrder)
                            ->get();
                            //dd($products->toArray());
        }
        
        //dd($products[0]);
        $filter=['order'=>$order,'categories'=>$tempCategory[1],'dificulty'=>$dificulty,'intensity'=>$intensity];
        return view('front.explore',['categories'=>Category::all(),'products'=>$products,'filter'=>$filter]);
    }

    public function series($slug){
        $product= Product::where('slug',$slug)
                            ->with(['author','category','media'])
                            ->first();
        //dd($product->media);
        return view('front.product-detail',['product'=>$product]);
    }   
   
    public function instructor($instructor_id){
        $user=User::find($instructor_id);
        $products = Product::where('user_id',$instructor_id)
                            ->where('is_active',true)
                            ->with(['category','author','media'])
                            ->get();
        return view('front.instructor',['user'=>$user,'products'=>$products]);

    }

    public function instructors(){
        $instructors = User::where('role','instructor')->where('is_active',true)->get();

        return view('front.instructors',['instructors'=>$instructors]);
    }
    

    public function generateCategory($categories){

        if(!empty($categories)){
            $ncategories = Category::whereIn('slug',$categories)->get();
            $id='(';
            $datas = [];
            foreach ($ncategories as $key => $value) {
                $sparator = $key == 0?'':',';
                $id.=$sparator.$value->id;
                array_push($datas,$value);
            }
            $id.=')';
            return ['category_id in '.$id,$datas];
        }else{
            return ['',''];
        }
    }
    

    public function survey($step){
        $categories = Category::all();
        return view('front.survey',['step'=>$step,'categories'=>$categories]);
    }
}
