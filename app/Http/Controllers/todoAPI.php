<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;

class todoAPI extends Controller
{
    //
    function getData ($id=null) {
        return $id ? Todo::find($id) : Todo::all();
    }
}
