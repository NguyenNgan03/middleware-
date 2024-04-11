<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index(){
        $title = "Hoc Lap Trinh";
        $content = "Hoc Lap Trinh tai unicode";
        return view('home')->with(
            [
                'title' => $title,
                'content' => $content
            ]
        ); 
    }
    public function getNews(){
        return 'Danh sách tin tức';
    }
}
