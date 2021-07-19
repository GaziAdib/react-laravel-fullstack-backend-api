<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProjectModel;

class ProjectController extends Controller
{
    function onSelectThree(){
        $result = ProjectModel::limit(3)->get();
        return $result;
    }


    function onSelectAll(){
        $result = ProjectModel::all();
        return $result;
    }

    function onSelectDetail(Request $request){
        $id = $request->input('id');
        $result = ProjectModel::where(['id'=>$id])->get();
        return $result;
    }
}
