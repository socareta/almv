<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Facades\Validator;


class DashboardController extends Controller
{

    public function index()
    {
        
        return view('back.dashboard');
    }
    public function profile(){
        $user = User::find(\Auth::user()->id);
        return view('profile',['user'=>$user]);
    }
    public function instructorList(){
        if(\Auth::user()->role !='admin'){
            return redirect('/');
            exit();
        }

        $instructors = User::where('role','instructor')
                            ->withCount('class')
                            ->withSum('students','member_count')
                            ->orderBy('students_sum_member_count','DESC')
                            ->get();
        //dd($instructors->toArray());
        return view('back.instructors',['instructors'=>$instructors]);
    }

    public function newInstructor(Request $request){
        $instructor = new User;
        $instructor->name = $request->name;
        $instructor->email = $request->email;
        $instructor->password = Hash::make($request->password);
        $instructor->role = 'instructor';
        $instructor->is_active = true;
        $instructor->save();

        return back()->with(['message','Instructor hase added']);
    }

    public function updateInstructor(Request $request,$id){
        $instructor = User::find($id);
        $instructor->name = $request->name;
        $instructor->password = Hash::make($request->password);
        $instructor->password = Hash::make($request->password);
        $instructor->save();

        return back()->with(['message','Instructor hase added']);
    }

}
