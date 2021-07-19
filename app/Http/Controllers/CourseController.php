<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CourseModel;

class CourseController extends Controller
{
    function onSelectFour(){
        $result = CourseModel::limit(4)->get();
        return $result;
    }

    function onSelectAll(){
        $result = CourseModel::all();
        return $result;
    }

    function onSelectDetails(Request $request){
        $id = $request->input('id');
        $result = CourseModel::where(['id'=>$id])->get();
        return $result;
    }
}
