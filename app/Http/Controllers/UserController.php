<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        $user->bio = $request->bio;
        $user->fb_link = $request->fb_link;
        $user->ig_link = $request->ig_link;
        $user->web_link = $request->web_link;

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
        return back()->with(['message'=>'Profile has save']);
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
        //
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
            $user->cover = url('image').'/'.$coverName;

        }

        if($request->hasFile('avatar')){
            $avatar= $request->file('avatar');
            $avatarName = time().'.'.$avatar->getClientOriginalExtension();
            $avatar->move('images',$avatarName);
            $user->avatar = url('image').'/'.$avatarName;
        }

        $user->save();
        return back()->with(['message'=>'Profile has save']);
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
