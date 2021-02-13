<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class InstructorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(\Auth::user()->role !='admin'){
            return redirect('/dashboard');
            exit();
        }

        $instructors = User::where('role','instructor')
                            ->where('is_active',true)
                            ->withCount('class')
                            ->withSum('students','member_count')
                            ->orderBy('students_sum_member_count','DESC')
                            ->get();
        //dd($instructors->toArray());
        return view('back.instructors',['instructors'=>$instructors]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back.instructor-form',['instructor'=>[]]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = new User;
        $user->name = $request->name;
        $user->slug = Str::slug($request->name,'-');
        $user->email= $request->email;
        $user->password= $request->password;
        $user->bio = $request->bio;
        $user->fb_link = $request->fb_link;
        $user->ig_link = $request->ig_link;
        $user->web_link = $request->web_link;
        $user->is_active = true;
        $user->role = 'instructor';

        if($request->hasFile('cover')){
            $cover= $request->file('cover');
            $coverName = time().'.'.$cover->getClientOriginalExtension();
            $cover->move('images',$coverName);
            $user->cover = url('image').'/'.$coverName;

        }

        if($request->hasFile('avatar')){
            $avatar= $request->file('avatar');
            $avatarName = time().'.'.$avatar->getClientOriginalExtension();
            $avatar->move('images',$avatarName);
            $user->avatar = url('image').'/'.$avatarName;
        }

        $user->save();
        return redirect()->route('dinstructor.index')->with(['message'=>'Instructor has save']);
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
    public function edit($id)
    {
        return view('back.instructor-form',['instructor'=>User::find($id)]);
        
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
        $user = User::find($id);
        $user->name = $request->name;
        $user->bio = $request->bio;
        $user->fb_link = $request->fb_link;
        $user->ig_link = $request->ig_link;
        $user->web_link = $request->web_link;

        if($request->hasFile('cover')){
            $cover= $request->file('cover');
            $coverName = time().'.'.$cover->getClientOriginalExtension();
            $cover->move('images',$coverName);
            $user->cover = url('images').'/'.$coverName;

        }

        if($request->hasFile('avatar')){
            $avatar= $request->file('avatar');
            $avatarName = time().'.'.$avatar->getClientOriginalExtension();
            $avatar->move('images',$avatarName);
            $user->avatar = url('images').'/'.$avatarName;
        }
        $url = url('/').'/';
        $link =str_replace($url,'',$request->refferal);
        //$user->save();
         
        return redirect($link)->with(['message'=>'Instructor has updated']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user= User::find($id);
        $user->is_Active = false;
        $user->save();
        return redirect()->route('dinstructor.index')->with(['message'=>'Instructor has delete']);
 
    }
}
