<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\x;

class xx extends Controller
{
    public function coba()
    {
    	return 'Say Hello!';
    }

    public function about()
    {
    	return view('about');
    }

    public function profil()
    {
    	return view('profil.php');
    }
    public function pertambahan()
    {
    	$a = 5;
    	$b = 10;
    	$c = $a+$b;
    	return view('tambah',compact('c','a','b'));
    }
    public function loop()
    {
    	$a = ['asd','dsa','ads'];
    	return view('pengulangan',compact('a'));
    }
    public function test()
    {
        $a = x::all();
        return $a;
    }
    public function test1()
    {
        $a = x::all();
        return view('xa',compact('a'));
    }
    
}
