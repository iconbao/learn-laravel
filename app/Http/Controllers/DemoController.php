<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class DemoController extends Controller
{
    public function show($id) {
        return view('demo.zbxshow', ['id'=>$id]);
        // return redirect()->route('myurl', ['name'=>'zbxuu']);
    }

    public function url($name='') {
        // $myurl = route('myurl', ['id'=>88]);
        // return $myurl;

        return $name.':url00';
    }

}
