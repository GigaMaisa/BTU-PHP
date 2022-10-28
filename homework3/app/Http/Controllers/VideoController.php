<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Video;

class VideoController extends Controller
{
    function show()
    {
        $data = Video::all();
        return view('list', ['videos'=>$data]);
    }
}
