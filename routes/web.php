<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Hash;
use App\Models\Product;
use App\Models\user;
use App\Models\category;
use Illuminate\Support\Facades\Http;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', [App\Http\Controllers\FrontController::class, 'index']);

Route::get('explore',[App\Http\Controllers\FrontController::class, 'explore'] )->name('explore');
Route::get('series/{slug}',[App\Http\Controllers\FrontController::class, 'series'] )->name('series');
Route::get('instructors',[App\Http\Controllers\FrontController::class, 'instructors'] )->name('instructors');
Route::get('instructor/{user_id}',[App\Http\Controllers\FrontController::class, 'instructor'] )->name('instructor');
Route::get('survey/step/{step}',[App\Http\Controllers\FrontController::class, 'survey'])->name('survey');


//dashboard

Route::prefix('dashboard')->middleware('verified')->group(function(){
    Route::get('/', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');
    Route::get('profile', [App\Http\Controllers\DashboardController::class, 'profile'])->name('profile');
    
    Route::resource('product',App\Http\Controllers\ProductController::class);
    Route::resource('plan',App\Http\Controllers\PlanController::class);
    Route::resource('course',App\Http\Controllers\CourseController::class);
    Route::resource('lesson',App\Http\Controllers\LessonController::class);
    Route::resource('meta',App\Http\Controllers\MetaController::class);
    Route::resource('media',App\Http\Controllers\MediaController::class);
    Route::resource('blog',App\Http\Controllers\BlogController::class);
    Route::resource('social-media',App\Http\Controllers\SocialMediaController::class);

    //for admin
    Route::resource('notification',App\Http\Controllers\BlogController::class);
    Route::resource('instructor', App\Http\Controllers\InstructorController::class);
    Route::resource('user',App\Http\Controllers\UserController::class);

});

Auth::routes();
Auth::routes(['verify' => true]);
Route::get('/home', function () { return redirect('/');})->name('home');

/*
Route::get('test',function(){
    $total=0;
    $categories = Category::get();
    foreach($categories as $category){
        if($category->parent_id!=0){
            $response = Http::get('https://www.alomoves.com/api/v2/products?categories[]='.$category->parent_name.'_'.$category->slug.'&order=date&page=1&per_page=24');
            
            $datas = $response->json();
            foreach($datas as $data){

                    $product  = Product::where('slug',$data['slug'])->first();
                    if($product){
                        $product->cover = $data['cover_photo']['url'];
                        $product->workout_count = $data['workout_count'];
                        $product->member_count = $data['member_count'];
                        $product->save();
                        $total++;
                    }
                
               
            }
            echo $category->slug.'<br>';
        }
        
    }
    echo $total;
});
Route::get('media',function(){
    $total=0;
    $products = Product::where('id','>',150)->get();
    foreach($products as $product){
        $response = Http::get('https://www.alomoves.com/api/v2/plans/'.$product->slug);
            $datas = $response->json();
            dd($datas);

            $product  = Product::find($product->id);
            $product->duration =  $datas['average_class_duration'];
            $product->props = $datas['equipment'];
            $product->save();
            //dd($product);
            $nmedias = $datas['preview_media'];
            foreach ($nmedias as $key => $nmedia) {

                $media = new App\Models\Media;
                $media->product_id = $product->id;
                $vidioUrl = '';

                if($nmedia['media_type']=='video' && $nmedia['media_object']['mp4_720']!=null)
                    $vidioUrl = $nmedia['media_object']['mp4_720'];
                elseif($nmedia['media_type']=='video' && $nmedia['media_object']['mp4_480']!=null)
                    $vidioUrl = $nmedia['media_object']['mp4_480'];
                elseif($nmedia['media_type']=='video' && $nmedia['media_object']['mp4_360']!=null)
                    $vidioUrl = $nmedia['media_object']['mp4_360'];


                $media ->name = $nmedia['media_type']=='video'?$vidioUrl:$nmedia['media_object']['url'];

                $media ->alt = $product->title;
                $media->is_image =$nmedia['media_type']=='video'?false:true;
                //dd($media);
                $media->save();
            }
            $total++;
    }
    echo $total;
});

*/