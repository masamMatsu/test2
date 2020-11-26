<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HelloController extends Controller
{
    public function index(Request $request)
    {
       $items = DB::select('select * from people');
       return view('hello.index', ['items' => $items]);
    }
    public function other()
    {
       return view('hello.countup');
    }
    public function other2()
    {
       return view('hello.todolist2');
    }
}
