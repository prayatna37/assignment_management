<?php

namespace App\Http\Controllers;

use App\Assignment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AssignmentController extends Controller
{
    public function show($id){
        $show=Assignment::find($id);
        if (Auth::user()->id==$show->user_id){
            return view('teacher.show')->with('show',$show);

        }
        else{
            return view('teacher.denied');
        }
    }

    public function update($id){
        $update=Assignment::find($id);
        $update->title=request('title');
        $update->description=request('description');
        $update->grading=request('grading');
        $update->due=request('due');
        $update->save();
        return back()->with('success','Update Successful');
    }
}
