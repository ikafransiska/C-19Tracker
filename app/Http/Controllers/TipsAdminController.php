<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Validator;

class TipsAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('tipsAdmin');
    }

    public function data()
    {
        $tips = DB::table('tips')->get();
        //return $admin;
        return view('tipsAdmin',['tips' => $tips]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
                'images'=> 'required|file|image|mimes:jpeg,png,jpg|max:2048',
                'title'=> 'required|unique:tips',
                'desc'=> 'required| min:7'
            ]);
            $images = $request->file('images');
            $new_name = rand() . '.' . $images-> getClientOriginalExtension();
            $images->move(public_path('images'), $new_name);
            DB::table('tips')->insert([
                    'images'=>$new_name,
                    'title'=> $request->title,
                    'desc'=> $request->desc
            ]);
            return redirect('tipsAdmin')->with('status', 'Berhasil ditambah!');
            
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tips = DB::table('tips')->where('id', $id)->first();
        return view('Admin/editTips',compact('tips'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        DB::table('tips')->where('id', $id)
        -> update([
            'images' => $request->images,
            'title' => $request->title,
            'desc' => $request->desc
        ]);
        return redirect('tipsAdmin')->with('status', 'Berhasil diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('tips')->where('id',$id)->delete();
        return redirect('tipsAdmin')->with('status', 'Berhasil dihapus!');
    }
}
