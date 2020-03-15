<?php

namespace App\Http\Controllers;

use App\Assignment;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;



class DashboardController extends Controller
{
    public function teacher($id){
        $user=User::find($id);
        if (Auth::user()->id==$user->id){

            $lists=User::find($id)->assignments;
            $allassignment=Assignment::all();

                return view('teacher.home')->with('user', $user)->with('lists',$lists)->with('allassignments',$allassignment);
        }
        else{
            return view('teacher.denied')->with('error','Unauthorized User');
        }
    }

    public function store(){
        $assignment= new Assignment();
        $assignment->title=request('title');
        $assignment->description=request('description');
        $assignment->grading=request('grading');
        $assignment->due=request('due');

        request()->user()->assignments()->save($assignment);

        return back()->with('success','Assignment Added');
    }



    public function destroy($id){
        $deleteassignment=Assignment::find($id);

        $deleteassignment->delete();
        return back()->with('success','Delete Successful');
    }
}
