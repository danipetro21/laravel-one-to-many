<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Person;
use App\Models\Post;


class MainController extends Controller
{
    public function home(){

        $data = Person :: all();

        return view ('pages.home' , compact('data'));
    }
}
