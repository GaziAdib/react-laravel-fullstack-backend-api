<?php

namespace App\Http\Controllers;

use App\Models\HomeModel;
use Illuminate\Http\Request;

class HomePageController extends Controller
{
    function onSelectVideo() {
        $result = HomeModel::select('video_description','video_url')->get();
        return $result;
    }

    function onSelectProjectClient() {
        $result = HomeModel::select('total_projects', 'total_clients')->get();
        return $result;
    }

    function onSelectTechDesc() {
        $result = HomeModel::select('tech_description')->get();
        return $result;
    }

    function onSelectHomeTitle() {
        $result = HomeModel::select('title', 'subtitle')->get();
        return $result;
    }
}
