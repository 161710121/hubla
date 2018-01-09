<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
    	$jdl = '<i>HUBLAH!!</i>';
    	$tgl = '<i>09-01-2018</i>';
    	return view('test',compact('jdl','tgl'));
    }
}
