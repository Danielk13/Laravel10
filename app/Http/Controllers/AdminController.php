<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    function index(){
        $blogs=[
            [
                'title'=>"บทความที่ 1",
                'content'=>"เนื้อหาบทความที่ 1",
                'status'=>true
    
            ],
            [
                'title'=>"บทความที่ 2",
                'content'=>"เนื้อหาบทความที่ 2",
                'status'=>false
            ],
            [
                'title'=>"บทความที่ 3",
                'content'=>"เนื้อหาบทความที่ 3",
                'status'=>true
            ]
    
        ];
        return view('blog',compact('blogs'));
    }

    function about(){
        $name ="ก้องรักสยาม";
        $date =" 7 ตุลาคม 2567";
        return view('about', compact('name', 'date'));
    }


}
