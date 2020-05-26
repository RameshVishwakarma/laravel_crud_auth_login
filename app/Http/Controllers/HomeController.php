<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function add_form()
    {
        return view('add_form');
    }

    public function insert_form(Request $request)
    {
        $data = new Student;
        $data->name = $request->name;

        if ($request->hasFile('img'))
        {
            $image = $request->file('img');
            $name_img = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('images');
            $image->move($destinationPath, $name_img);
            $data->image = $name_img;
        }
        $data->save();
        // return redirect()->back();
        return redirect('/home');
    }

    public function edit_form(Request $request, $id)
    {
        $data = Student::find($id);
        return view('edit', compact('data'));
    }
    public function update_form(Request $request)
    {
        $data = Student::find($request->hidden_id);
        $data->name = $request->name;
        if ($request->hasFile('img'))
        {
            $image = $request->file('img');
            $name_img = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('images');
            $image->move($destinationPath, $name_img);
            $data->image = $name_img;
        }
        $data->save();
        // return redirect()->back();
        return redirect('/home');
    }

    public function delete_records($id)
    {
        $data = Student::find($id);
        $data->delete();
        return redirect()->back();
    }
}
