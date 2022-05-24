<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Post::all();
        return view("post.tampil", compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tambahdata');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // echo 'hai';
        $validator = $request->validate([
            'nama' => 'required|string',
            'alamat' => 'required|string',
            'umur' => 'required|integer',
            'category_id' => 'required|integer',
        ]);

        $data = Post::create($validator);

        return redirect('post')->with('success', 'Data berhasil masuk');
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
        $data = Post::findOrFail($id);

        return view('edit', compact('data'));
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
        $data = Post::findOrFail($id);
        $validator = $request->validate([
            'nama' => 'required|string',
            'alamat' => 'required|string',
            'umur' => 'required|integer',
            'category_id' => 'required|integer',
        ]);

        $data->update($validator);
        return redirect('post')->with('success', 'Data berhasil diedit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Post::findOrFail($id);
        $data->delete();
        return redirect('post')->with('success', 'Data berhasil dihapus');
    }
}
