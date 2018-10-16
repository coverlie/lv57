<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    function index(){
        return view('hello')->with('sc','สำเร็จ');
    }   
    
    function ShowHello($name){
        return '<h1>Hello: '.$name.'</h1>';
    }
    function Show(){
        return view('user')
        ->with('name','thanapol')
        ->with('title','Laravel_5.7');
    }

    public function htest()
    {
        $storagePath= 'sss';
        $filename='fff';
        $file = $storagePath . $filename;
        echo $file;
    }
}
