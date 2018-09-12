<?php

namespace App\Http\Controllers;
use Auth;
//use App\Http\Request;
use App\Category;

use Illuminate\Http\Request;


class AboutController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function show($task)
    {
        $task = $task + 8;
        return view('about.show', compact('task'));
    }
    public function index()
    {
      //  $post =  Category::all();
        $post = Category::where('status', 1)->select('id', 'firstname')->get();
        return view('about',compact('post'));
    }
        public function add(Request $request)
        {


        $request->validate(
            [
                'firstname' => 'required|string',
                'middlename' => 'required|string',
                'lastname' => 'required|string',
            ]
        );
        $data =  Category::create([
            'firstname' => $request->firstname,
            'middlename' => $request->middlename,
            'lastname' => $request->lastname,
            'u_id'=>Auth::user()->id,
        ]);

            $data->save();

            return redirect()->back();
    }
}
