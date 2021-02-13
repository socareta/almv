<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $role = \Auth::user()->role;
        $courses =[];
        if($role=='admin'){
            $courses = Course::where('is_active',true)
                                ->with(['author','category'])
                                ->orderBy('created_at','DESC')
                                ->get();
        }
        elseIf($role == 'instructor'){
            $courses = Course::where('user_id',\Auth::user()->id)
                                ->where('is_active',true)
                                ->with(['author','category'])
                                ->orderBy('created_at','DESC')
                                ->get();
        }

        //dd($courses);
        return view('back.course',['courses'=>$courses]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $Categories =Category::all();
        return view('back.course-form',['course'=>[],'categories'=>$Categories]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->saveData($request,new Course);        
        return redirect()->route('course.index')->with(['message'=>'Data Has Save']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function show(Course $course)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function edit(Course $course)
    {
        $Categories =Category::all();
        return view('back.course-form',['course'=>$course,'categories'=>$Categories]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Course $course)
    {
        $this->saveData($request,$course);
        return redirect()->route('course.index')->with(['message'=>'Data Has Updated']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function destroy(Course $course)
    {
        $course->is_active = false;
        $course->deleted_at = now();
        $course->save();
        return back()->with(['message'=>'Data Has deleted']);
        
    }

    public function deleteCourse($course_id){
        Course::find($course_id)->delete();
        return back()->with(['message'=>'Data Has deleted']);
        
    }

    public function saveData($datas,$course){
        $duratiom=[15,20,25,30,35,40,60];
        $course->title = $datas->title;
        $course->slug = Str::slug($datas->title, '-');
        $course->description = $datas->description;
        $course->user_id = \Auth::user()->id;

        $course->category_id = $datas->category;
        
        $category_parent= Category::findOrFail($datas->category);
        $course->category_parent_id = $category_parent->parent_id;

        $course->duration = $duratiom[rand(0,6)];
        $course->props = 'none';
        $course->dificulty = $datas->dificulty;
        $course->intensity = $datas->intensity;
        isset($datas->cover)?$course->cover = $datas->cover:''; 
        $course->save();

       
         if($datas->hasFile('images')){ 
            //Media::where('course_id',$course->id)->where('is_image',true)->delete();
            $i =0;
            foreach($datas->file('images') as $index=>$file){
                
                $imageName = Str::random(30).'.'.$file->getClientOriginalExtension();
                $file->move('images', $imageName);
                if($i==0 && empty($request->cover)){
                    $course->cover = url('images').'/'.$imageName;
                    $course->save();
                }
                
                $media = new Media;
                $media->alt = $course->title;
                $media->is_image = true;
                $media->course_id = $course->id;
                $media->name = url('images').'/'.$imageName;
                $media->save(); 
            }
        }
        if($datas->hasFile('vidios')){
            //Media::where('course_id',$course->id)->where('is_image',false)->delete();
            $files = $datas->file('vidios');
            foreach($files as $vidio){
                $vidioName = Str::random(30).'.'.$vidio->getClientOriginalExtension();
                $destinationPath = 'vidios';
                $vidio->move($destinationPath, $vidioName);

                $media = new Media;
                $media->alt = $course->title;
                $media->is_image = false;
                $media->course_id = $course->id;
                $media->name = url('vidios').'/'.$vidioName;
                $media->save(); 
            }
        }    

    }
}
